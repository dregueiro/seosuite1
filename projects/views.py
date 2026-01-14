from django.views.generic import ListView, DetailView, CreateView, UpdateView, DeleteView
from django.contrib.auth.mixins import LoginRequiredMixin
from django.urls import reverse_lazy
from django.shortcuts import get_object_or_404, redirect
from django.contrib import messages

from .models import Project
from integrations.services.google_auth import GoogleAuthService




def project_test_access(request, pk):
    project = get_object_or_404(Project, pk=pk)
    
    # Test GSC
    success, message = GoogleAuthService.test_gsc_access(project)
    
    if success:
        messages.success(request, f"✅ {project.name}: {message}")
    else:
        messages.error(request, f"❌ {project.name}: {message}")
        
    return redirect('projects:list')



def project_test_google_access(request, pk):
    project = get_object_or_404(Project, pk=pk)
    
    # 1. Probar GSC
    gsc_ok, gsc_msg = GoogleAuthService.test_gsc_access(project)
    
    # 2. Probar GA4 (si tiene ID)
    ga4_ok, ga4_msg = (True, "N/A")
    if project.ga4_property_id:
        ga4_ok, ga4_msg = GoogleAuthService.test_ga4_access(project)
    
    if gsc_ok and ga4_ok:
        messages.success(request, f"✅ Conexión Total Exitosa: {gsc_msg}")
    else:
        messages.error(request, f"⚠️ Error: GSC ({gsc_msg}) | GA4 ({ga4_msg})")
        
    return redirect('projects:list')
class ProjectListView(LoginRequiredMixin, ListView):
    model = Project
    template_name = "projects/project_list.html"
    context_object_name = "projects"
    
    def get_queryset(self):
        # Por ahora mostramos todos, pero aquí podríamos filtrar por usuario o cliente
        return Project.objects.all().order_by('name')

class ProjectDetailView(LoginRequiredMixin, DetailView):
    model = Project
    template_name = "projects/project_detail.html"
    context_object_name = "project"

class ProjectCreateView(LoginRequiredMixin, CreateView):
    model = Project
    fields = ['client', 'name', 'domain', 'target_country_code', 'language_code', 
              'google_credential', 'authorized_monthly_budget']
    template_name = 'projects/project_form.html'
    success_url = reverse_lazy('projects:list')

class ProjectUpdateView(LoginRequiredMixin, UpdateView):
    model = Project
    template_name = 'projects/project_form.html'
    # Campos necesarios para la activación
    fields = [
        'name', 'domain', 'google_credential', 
        'gsc_property_url', 'ga4_property_id', 'google_ads_customer_id',
        'target_country_code', 'language_code', 'authorized_monthly_budget'
    ]
    success_url = reverse_lazy('projects:list')

    def get_queryset(self):
        # Seguridad: Solo editar proyectos de sus clientes
        return Project.objects.filter(client__is_active=True)

class ProjectDeleteView(LoginRequiredMixin, DeleteView):
    model = Project
    template_name = 'projects/project_confirm_delete.html'
    success_url = reverse_lazy('projects:list')