from django.views.generic import DetailView
from django.shortcuts import render, get_object_or_404, redirect
from django.contrib import messages
from django.db.models import Sum, Count
from django.views import View
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse
from projects.models import Project
from keyword_research.models import KeywordIdea, URLAudit
from keyword_research.services import import_google_ads_csv, sync_urls_from_sitemap
from integrations.services.google_auth import GoogleAuthService
from .tasks import auto_check_google_status
from .models import Notification


@login_required
def check_notifications(request):
    """
    Esta vista responde a HTMX. 
    Simplemente renderiza el fragmento de la campana.
    El Context Processor se encarga de inyectar las variables.
    """
    return render(request, 'includes/notification_badge_partial.html')

@login_required
def mark_notifications_as_read(request):
    # Marcamos como leídas
    Notification.objects.filter(user=request.user, is_read=False).update(is_read=True)
    
    # Si es HTMX, devolvemos el parcial con los datos actualizados
    if request.headers.get('HX-Request'):
        context = {
            'unread_notifications_count': 0,
            'user_notifications': Notification.objects.filter(user=request.user).order_by('-created_at')[:5]
        }
        return render(request, 'includes/notification_badge_partial.html', context)
    
    return HttpResponse(status=204)



class RequestIndexingView(View):
    def get(self, request, pk, audit_id):
        project = get_object_or_404(Project, pk=pk)
        audit = get_object_or_404(URLAudit, pk=audit_id, project=project)
        
        # Llamamos al servicio del "Rayo" ⚡
        success, msg = GoogleAuthService.force_indexing_url(proyect, url)
        
        if success:
            # CAMBIAMOS EL ESTADO AQUÍ
            audit.status = "Solicitud de Indexación Enviada"
            audit.verdict = "NEUTRAL" # Cambia de Rojo a Amarillo
            if hasattr(audit, 'indexing_requested_at'): # Solo si hiciste el paso 1
                from django.utils import timezone
                audit.indexing_requested_at = timezone.now()
            audit.save()
            # DISPARAMOS EL PRIMER CHECK AUTOMÁTICO (en 15 min)
            auto_check_google_status.apply_async(args=[audit.id, 1], countdown=10)
            
            messages.success(request, f"¡Rayo disparado! {message}")
        else:
            messages.error(request, f"Fallo: {message}")
            
        return redirect('seo:url_audit', pk=project.pk)


def inspect_single_url(request, pk, audit_id):
    project = get_object_or_404(Project, pk=pk)
    audit = get_object_or_404(URLAudit, pk=audit_id, project=project)
    
    # Llamamos a la API de Google
    resultado = GoogleAuthService.inspect_url_status(proyect, url)
    # --- AÑADE ESTO PARA DEBUGEAR ---
    print(f"--- INSPECCIÓN PARA: {audit.url} ---")
    print(result) 
    # --------------------------------
    
    if 'error' in result:
        messages.error(request, f"Error de Google: {result['error']}")
    else:
        audit.verdict = result.get('verdict')
        audit.status = result.get('coverage')
        audit.save()
        messages.success(request, f"URL inspeccionada: {audit.verdict}")
        
    return redirect('seo:url_audit', pk=project.pk)

def bulk_inspect_urls(request, pk):
    project = get_object_or_404(Project, pk=pk)
    # Buscamos las que no son 'GOOD' para no gastar cuota de API innecesariamente
    pending = URLAudit.objects.filter(project=project).exclude(verdict='GOOD')
    
    count = 0
    for audit in pending:
        result = inspect_url_status(project, audit.url)
        if 'error' not in result:
            audit.verdict = result.get('verdict')
            audit.status = result.get('coverage')
            audit.save()
            count += 1
            
    messages.success(request, f"Se han inspeccionado {count} URLs automáticamente.")
    return redirect('seo:url_audit', pk=project.pk)



def bulk_inspect_urls(request, pk):
    project = get_object_or_404(Project, pk=pk)
    # Buscamos las URLs que aún no han sido validadas como 'GOOD'
    pending_audits = URLAudit.objects.filter(project=project).exclude(verdict='GOOD')
    
    inspected_count = 0
    for audit in pending_audits:
        result = inspect_url_status(project, audit.url)
        if 'error' not in result:
            audit.verdict = result.get('verdict')
            audit.status = result.get('coverage')
            audit.save()
            inspected_count += 1
            
    messages.success(request, f"Se han inspeccionado {inspected_count} URLs con éxito.")
    return redirect('seo:url_audit', pk=project.pk)


def url_audit_view(request, pk):
    # 1. Buscamos el proyecto o damos error 404
    project = get_object_or_404(Project, pk=pk)
    
    # 2. Manejamos el envío del formulario (POST)
    if request.method == 'POST':
        success, message = sync_urls_from_sitemap(project)
        if success:
            messages.success(request, message)
        else:
            messages.error(request, message)
        return redirect('seo:url_audit', pk=project.pk)
    
    # 3. Manejamos la carga de la página (GET)
    audits = URLAudit.objects.filter(project=project).order_by('-last_inspected')
    
    return render(request, 'seo/url_audit.html', {
        'project': project,
        'audits': audits
    })

class KeywordMagicView(DetailView):
    model = Project
    template_name = 'seo/keyword_magic.html'
    context_object_name = 'project'

    def post(self, request, *args, **kwargs):
        project = self.get_object()
        csv_file = request.FILES.get('csv_file')
        
        if not csv_file:
            messages.error(request, "Por favor, selecciona un archivo CSV.")
            return redirect('seo:keyword_magic', pk=project.pk)
            
        success, message = import_google_ads_csv(project, csv_file)
        if success:
            messages.success(request, message)
        else:
            messages.error(request, message)
            
        return redirect('seo:keyword_magic', pk=project.pk)

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        # Obtenemos las keywords guardadas para mostrarlas en la tabla
        context['keywords'] = KeywordIdea.objects.filter(
            project=self.object
        ).order_by('-avg_monthly_searches')
        return context


class ProjectDashboardView(DetailView):
    model = Project
    template_name = 'seo/dashboard.html'
    context_object_name = 'project'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        
        # 1. Estadísticas de Keywords
        keywords = KeywordIdea.objects.filter(project=self.object)
        context['total_keywords'] = keywords.count()
        context['total_volume'] = keywords.aggregate(Sum('avg_monthly_searches'))['avg_monthly_searches__sum'] or 0
        
        # 2. Oportunidades (Keywords con mucho volumen y competencia baja/media)
        context['opportunities'] = keywords.filter(
            avg_monthly_searches__gte=1000, 
            competition_level__in=['LOW', 'MEDIUM', 'Baja', 'Media']
        ).count()

        # 3. Estado de las APIs (Lo que ya tenías)
        context['gsc_status'] = GoogleAuthService.test_gsc_access(self.object)
        # REEMPLAZA POR:
        context['ga4_status'] = GoogleAuthService.test_ga4_access(self.object)  
        
        return context
    
class URLAuditView(DetailView):
    model = Project
    template_name = 'seo/url_audit.html'
    context_object_name = 'project'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        # Por ahora, traeremos las auditorías que ya hayamos hecho
        context['audits'] = URLAudit.objects.filter(project=self.object)
        return context