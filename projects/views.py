from django.views.generic import ListView, DetailView, CreateView, UpdateView, DeleteView, RedirectView
from django.contrib.auth.mixins import LoginRequiredMixin, UserPassesTestMixin
from django.urls import reverse_lazy, reverse
from django.shortcuts import get_object_or_404
from django.contrib import messages
from django.http import JsonResponse
from django.conf import settings

from .models import Project
from .forms import ProjectForm, ProjectIntegrationForm
from integrations.services.google_auth import GoogleAuthService
from clients.models import Client
from keyword_research.services.google_ads_service import GoogleAdsService
# --- LISTADOS ---

class ProjectListView(LoginRequiredMixin, ListView):
    """Muestra todos los proyectos del usuario logueado."""
    model = Project
    template_name = "projects/project_list.html"
    context_object_name = "projects"
    
    def get_queryset(self):
        return Project.objects.filter(client__user=self.request.user).order_by('name')

class ProjectByClientListView(LoginRequiredMixin, ListView):
    """Filtra proyectos por un cliente específico."""
    model = Project
    template_name = 'projects/project_list.html'
    context_object_name = 'projects'

    def get_queryset(self):
        return Project.objects.filter(
            client_id=self.kwargs['client_id'], 
            client__user=self.request.user
        )

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['current_client'] = get_object_or_404(Client, id=self.kwargs['client_id'], user=self.request.user)
        return context

# --- CRUD PROYECTOS ---

class ProjectCreateView(LoginRequiredMixin, CreateView):
    model = Project
    form_class = ProjectForm
    template_name = 'projects/project_form.html'
    success_url = reverse_lazy('projects:list')

class ProjectUpdateView(LoginRequiredMixin, UserPassesTestMixin, UpdateView):
    model = Project
    form_class = ProjectForm
    template_name = 'projects/project_form.html'
    success_url = reverse_lazy('projects:list')

    def test_func(self):
        """
        Regla de seguridad: El usuario actual debe ser el dueño del cliente 
        al que pertenece este proyecto.
        """
        project = self.get_object()
        return project.client.user == self.request.user
    def get_form(self, form_class=None):
        form = super().get_form(form_class)
        from django_countries import countries
        from django.conf import settings

        

        # 1. ORDENAR PAÍSES: Convertimos a lista y ordenamos por el nombre del país (índice 1)
        sorted_countries = sorted(list(countries), key=lambda x: str(x[1]))
          # 2. ORDENAR IDIOMAS: Ordenamos por el nombre del idioma (índice 1)
        sorted_languages = sorted(list(settings.LANGUAGES), key=lambda x: str(x[1]))
        # --- CORRECCIÓN CLAVE PARA MOSTRAR DATO GUARDADO ---
        # No redefinimos el widget, solo actualizamos sus opciones y clases
        # Campo País
        form.fields['target_country_code'].widget.choices = sorted_countries
        form.fields['target_country_code'].widget.attrs.update({'class': 'form-select'})

        # Campo Idioma
        form.fields['language_code'].widget.choices = sorted_languages
        form.fields['language_code'].widget.attrs.update({'class': 'form-select'})

        if 'google_credential' in form.fields:
            form.fields['google_credential'].widget.attrs.update({
                'class': 'form-select select2',
                'data-placeholder': 'Selecciona una Service Account'
            })
        return form

class ProjectDeleteView(LoginRequiredMixin, UserPassesTestMixin, DeleteView):
    model = Project
    template_name = 'projects/project_confirm_delete.html'
    success_url = reverse_lazy('projects:list')

    def test_func(self):
        return self.get_object().client.user == self.request.user

# --- INTEGRACIONES Y SESIÓN ---

class ProjectIntegrationView(LoginRequiredMixin, UserPassesTestMixin, UpdateView):
    """Vista específica para configurar GSC, GA4 y Ads."""
    model = Project
    form_class = ProjectIntegrationForm
    template_name = 'projects/integrations_setup.html'
    
    def test_func(self):
        return self.get_object().client.user == self.request.user

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['title'] = f"Configuración de Integraciones: {self.object.name}"
        return context

class ActivateProjectView(LoginRequiredMixin, RedirectView):
    """Activa el proyecto en la sesión del usuario y redirige al Magic Tool."""

    def get_redirect_url(self, *args, **kwargs):
        # 1. Obtenemos el proyecto y validamos pertenencia
        project_id = kwargs.get('pk')
        project = get_object_or_404(Project, pk=project_id, client__user=self.request.user)

        # 2. Guardamos en sesión (ID y Nombre para el Sidebar)
        self.request.session['active_project_id'] = str(project.id)
        self.request.session['active_project_name'] = project.name
        
        # Opcional: Forzar el guardado de sesión para evitar errores de persistencia
        self.request.session.modified = True

        messages.info(self.request, f"Proyecto activo: {project.name}")

        # 3. Construimos la URL de destino manualmente pasándole el PK
        return reverse('keyword_research:magic_tool', kwargs={'pk': project.id})

# --- ENDPOINTS AJAX PARA TESTS ---

def test_google_integration_ajax(request, pk):
    project = get_object_or_404(Project, pk=pk, client__user=request.user)
    api_type = request.GET.get('type') 
    success = False
    message = ""

    try:
        if api_type == 'gsc':
            success, message = GoogleAuthService.test_gsc_access(project)
            if success: project.gsc_verified = True
            
        elif api_type == 'ga4':
            success, message = GoogleAuthService.test_ga4_access(project)
            if success: project.ga4_verified = True
            
        elif api_type == 'ads':
            if not project.google_ads_customer_id:
                return JsonResponse({'status': 'error', 'message': 'Falta Customer ID'}, status=400)
            
            # Intentamos una llamada real. Si get_ideas no falla, hay conexión.
            ideas = GoogleAdsService.get_ideas(project, "seo")
            if isinstance(ideas, list):
                success = True
                message = "Conexión con Google Ads exitosa"
                project.ads_verified = True
            else:
                success = False
                message = "Error inesperado en el formato de respuesta de Ads"
        
        # Guardamos el estado solo si hubo éxito
        if success:
            project.save()

    except Exception as e:
        success = False
        message = f"Error técnico: {str(e)}"

    return JsonResponse({
        'status': 'success' if success else 'error',
        'message': message
    })