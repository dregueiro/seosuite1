from django.views.generic import ListView, DetailView, CreateView, UpdateView, DeleteView, RedirectView
from django.views import View
from django.contrib.auth.mixins import LoginRequiredMixin, UserPassesTestMixin
from django.urls import reverse_lazy, reverse
from django.shortcuts import get_object_or_404, redirect
from django.contrib import messages
from django.http import JsonResponse
from django.conf import settings

from .models import Project
from .forms import ProjectForm, ProjectIntegrationForm
from clients.models import Client

from integrations.services.google_auth import GoogleAuthService
from integrations.services.gsc_service import GscSyncService
from keyword_research.services.google_ads_service import GoogleAdsService
# --- LISTADOS ---


class GscSyncView(View):
    def get(self, request, project_id):
        project = get_object_or_404(Project, pk=project_id)
        
        try:
            # Ejecutamos el servicio (Directiva Zero-Cost + Traceability)
            rows = GscSyncService.sync_project(project, request.user)
            messages.success(request, f"¡Éxito! Se han sincronizado {rows} keywords desde GSC.")
        except Exception as e:
            messages.error(request, f"Error en la sincronización: {str(e)}")
            
        # Volvemos a donde estábamos (Magic Tool)
        return redirect(request.META.get('HTTP_REFERER', 'projects:list'))
    
class ProjectListView(LoginRequiredMixin, ListView):
    model = Project
    template_name = 'projects/project_list.html'
    context_object_name = 'projects'
    paginate_by = 9

    def get_queryset(self):
        # 1. Filtro base por usuario (PEPE'S RULE)
        qs = Project.objects.filter(client__user=self.request.user).select_related('client')
        
        # 2. Lógica de búsqueda
        query = self.request.GET.get('search')
        if query:
            qs = qs.filter(
                Q(name__icontains=query) | 
                Q(domain__icontains=query)
            )
        return qs.order_by('-created_at')

class ProjectByClientListView(ProjectListView):
    def get_queryset(self):
        # Filtro específico por cliente + búsqueda
        qs = super().get_queryset().filter(client_id=self.kwargs['client_id'])
        return qs

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['current_client'] = get_object_or_404(
            Client, id=self.kwargs['client_id'], user=self.request.user
        )
        return context

# --- CRUD PROYECTOS ---
# --- CREATE VIEW ---
class ProjectCreateView(LoginRequiredMixin, CreateView):
    model = Project
    form_class = ProjectForm
    success_url = reverse_lazy('projects:list')
    # PEPE: CORRECCIÓN - Nombres exactos según tu models.py
    
    def get_initial(self):
        """
        Pre-llena el formulario si venimos de la URL ?client=UUID
        """
        initial = super().get_initial()
        client_id = self.request.GET.get('client')
        if client_id:
            initial['client'] = client_id
        return initial
    
    def get_form_kwargs(self):
        kwargs = super().get_form_kwargs()
        kwargs["user"] = self.request.user  # esto conecta con __init__(user=...) de tu form
        return kwargs

    def get_form(self, form_class=None):
        form = super().get_form(form_class)
        
        if 'google_credential' in form.fields:
             # INTENTO DE FILTRADO (Ajustar según donde esté tu modelo GoogleCredential)
             # form.fields['google_credential'].queryset = GoogleCredential.objects.filter(client__user=self.request.user)
             pass
        # UX: Mejoramos los widgets (Opcional, pero se ve mejor)
        form.fields['domain'].widget.attrs.update({'placeholder': 'https://ejemplo.com'})
        form.fields['gsc_property_url'].widget.attrs.update({'placeholder': 'https://ejemplo.com/'})
        form.fields['google_ads_customer_id'].widget.attrs.update({'placeholder': '123-456-7890'})
        form.fields['ga4_property_id'].widget.attrs.update({'placeholder': '987654321'})
        # Si quieres que el campo cliente aparezca oculto visualmente pero funcional:
        # if self.request.GET.get('client'):
        #     # Ocultamos el input pero mantenemos el valor
        #     pass 

        return form

    def form_valid(self, form):
        # Validación final de seguridad (Double Check)
        project = form.save(commit=False)
        # Aseguramos que el cliente asignado sea realmente del usuario
        if project.client.user != self.request.user:
            form.add_error('client', "Violación de seguridad: Cliente ajeno.")
            return self.form_invalid(form)
        return super().form_valid(form)


class ProjectUpdateView(LoginRequiredMixin, UpdateView):
    model = Project
    form_class = ProjectForm # <--- USAMOS EL FORMULARIO INTELIGENTE
    template_name = "projects/project_form.html"
    success_url = reverse_lazy('projects:list')

    def get_form_kwargs(self):
        """
        Pasamos el usuario al formulario para que pueda filtrar
        la lista de clientes (Isolation).
        """
        kwargs = super().get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs

    def form_valid(self, form):
        # Validación extra de seguridad
        # Aseguramos que no cambien el proyecto a un cliente de otro usuario
        project = form.save(commit=False)
        if project.client.user != self.request.user:
            form.add_error('client', "Seguridad: Cliente no válido.")
            return self.form_invalid(form)
        return super().form_valid(form)
class ProjectDeleteView(LoginRequiredMixin, UserPassesTestMixin, DeleteView):
    model = Project
    template_name = 'confirm_delete.html'
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
        return reverse('keyword_research:magic_tool_home')

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