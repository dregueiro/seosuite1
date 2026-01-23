import json
from django.shortcuts import get_object_or_404
from django.urls import reverse_lazy
from django.views.generic import ListView, CreateView, DeleteView
from django.views import View
from django.contrib.auth.mixins import LoginRequiredMixin
from django.http import JsonResponse
from django.contrib.auth.decorators import login_required

# --- MODELOS ---
from .models import GoogleCredential
from projects.models import Project

# --- FORMS ---
from .forms import GoogleCredentialForm

# --- SERVICIOS (Usando los que YA tienes) ---
from .services.google_auth import GoogleAuthService
# OJO: GoogleAdsService suele estar en keyword_research según tu estructura
from keyword_research.services.google_ads_service import GoogleAdsService 


# ==============================================================================
# 1. CRUD DE CREDENCIALES (La Billetera Segura)
# ==============================================================================

class GoogleCredentialListView(LoginRequiredMixin, ListView):
    model = GoogleCredential
    template_name = 'integrations/credential_list.html'
    context_object_name = 'credentials'

    def get_queryset(self):
        # SEGURIDAD: Solo mis credenciales
        return GoogleCredential.objects.filter(user=self.request.user).select_related('client')

class GoogleCredentialCreateView(LoginRequiredMixin, CreateView):
    model = GoogleCredential
    form_class = GoogleCredentialForm
    template_name = "integrations/credential_form.html"
    success_url = reverse_lazy('integrations:credential_list')

    def get_form_kwargs(self):
        kwargs = super().get_form_kwargs()
        kwargs['user'] = self.request.user
        return kwargs

    def form_valid(self, form):
        form.instance.user = self.request.user
        return super().form_valid(form)

    def form_invalid(self, form):
        print("🚨 ERROR DE VALIDACIÓN DETECTADO 🚨")
        print(form.errors)  # Esto imprimirá el error exacto en tu terminal
        print(form.non_field_errors())
        return super().form_invalid(form)
    
class GoogleCredentialDeleteView(LoginRequiredMixin, DeleteView):
    model = GoogleCredential
    template_name = "integrations/credential_confirm_delete.html"
    success_url = reverse_lazy('integrations:credential_list')

    def get_queryset(self):
        return GoogleCredential.objects.filter(user=self.request.user)


# ==============================================================================
# 2. ENDPOINT AJAX PARA TESTEAR CONEXIONES (Usando tus Servicios)
# ==============================================================================

class TestIntegrationView(LoginRequiredMixin, View):
    """
    Valida: GSC, GA4 y Google Ads usando los servicios existentes.
    """
    def get(self, request, project_id):
        # 1. SEGURIDAD: Isolation
        project = get_object_or_404(Project, id=project_id, client__user=request.user)
        
        api_type = request.GET.get('type') # 'gsc', 'ga4' o 'ads'
        success = False
        message = "Tipo de inspección no válido."

        try:
            # --- TEST SEARCH CONSOLE ---
            if api_type == 'gsc':
                if not project.google_credential:
                    return JsonResponse({'status': 'error', 'message': 'Falta asignar Credencial (JSON).'})
                
                # Usamos tu servicio existente en google_auth.py
                success, message = GoogleAuthService.test_gsc_access(project)
                
                if success:
                    project.gsc_verified = True
                    project.save()

            # --- TEST GOOGLE ADS ---
            elif api_type == 'ads':
                if not project.google_ads_customer_id:
                    return JsonResponse({'status': 'error', 'message': 'Falta Customer ID de Ads.'})
                
                # Usamos el servicio de keyword_research
                # get_ideas lanzará excepción si falla la auth
                try:
                    GoogleAdsService.get_ideas(project, "seo test")
                    success = True
                    message = "Conexión con Google Ads verificada."
                    project.ads_verified = True
                    project.save()
                except Exception as ads_error:
                    success = False
                    message = f"Fallo Ads: {str(ads_error)}"
            
            # --- TEST ANALYTICS GA4 ---
            elif api_type == 'ga4':
                if not project.ga4_property_id:
                     return JsonResponse({'status': 'error', 'message': 'Falta GA4 Property ID.'})
                
                # Usamos tu servicio existente en google_auth.py
                success, message = GoogleAuthService.test_ga4_access(project)
                
                if success:
                    project.ga4_verified = True
                    project.save()

        except Exception as e:
            success = False
            message = f"Error técnico: {str(e)}"

        return JsonResponse({
            'status': 'success' if success else 'error',
            'message': message
        })
    
class CredentialListApiView(LoginRequiredMixin, View):
    def get(self, request):
        creds = GoogleCredential.objects.filter(user=request.user).values('id', 'name', 'client_email')
        return JsonResponse({'credentials': list(creds)})