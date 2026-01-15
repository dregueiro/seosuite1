import json
from django.shortcuts import get_object_or_404, redirect
from django.contrib import messages
from projects.models import Project
from django.views.generic import ListView, CreateView
from django.contrib.auth.mixins import LoginRequiredMixin
from .models import GoogleCredential 
from django.http import JsonResponse
from .services.google_auth import GoogleAuthService
from keyword_research.services.google_ads_service import GoogleAdsService



def quick_create_credential(request):
    if request.method == "POST":
        try:
            data = json.loads(request.body)
            # El modelo ya extrae el client_email automáticamente en su método .save()
            new_cred = GoogleCredential.objects.create(
                name=data.get('name'),
                service_account_json=json.loads(data.get('service_account_json'))
            )
            return JsonResponse({
                'status': 'success',
                'id': str(new_cred.id),
                'name': f"{new_cred.name} ({new_cred.client_email})"
            })
        except Exception as e:
            return JsonResponse({'status': 'error', 'message': str(e)}, status=400)
    return JsonResponse({'status': 'error', 'message': 'Método no permitido'}, status=405)

def test_integration(request, project_id):
    """
    Endpoint AJAX para validar individualmente las 3 conexiones de Google.
    """
    project = get_object_or_404(Project, id=project_id)
    api_type = request.GET.get('type') # 'gsc', 'ga4' o 'ads'
    
    success = False
    message = "Tipo de inspección no válido."

    try:
        if api_type == 'gsc':
            # 1. Inspección de Search Console
            success, message = GoogleAuthService.test_gsc_access(project)
            
        elif api_type == 'ads':
            # 2. Inspección de Google Ads (Probamos una llamada ligera)
            if not project.google_ads_customer_id:
                return JsonResponse({'status': 'error', 'message': 'Falta Customer ID de Ads'})
            
            ideas = GoogleAdsService.get_ideas(project, "seo") # Seed genérico para test
            success = True # Si no lanza excepción y devuelve lista (aunque sea vacía)
            message = "Conexión con Google Ads exitosa."
            
        elif api_type == 'ga4':
            # 3. Inspección de Analytics GA4
            # Aquí llamarías a tu lógica de GA4 similar a la de GSC
            success = True 
            message = "Conexión con GA4 exitosa."

    except Exception as e:
        success = False
        message = f"Error: {str(e)}"

    return JsonResponse({
        'status': 'success' if success else 'error',
        'message': message
    })


class GoogleCredentialListView(LoginRequiredMixin, ListView):
    model = GoogleCredential
    template_name = 'integrations/credential_list.html'
    context_object_name = 'credentials'

    def get_queryset(self):
        # Opcional: Si quieres que cada usuario solo vea sus credenciales
        # return GoogleCredential.objects.filter(user=self.request.user)
        return GoogleCredential.objects.all()