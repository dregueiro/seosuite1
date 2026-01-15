from django.views.generic import DetailView
from django.shortcuts import render, get_object_or_404, redirect
from django.contrib import messages
from django.db.models import Sum
from django.views import View
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse
from django.utils import timezone

# Modelos y Servicios
from projects.models import Project
from keyword_research.models import KeywordIdea, URLAudit
from keyword_research.services import import_google_ads_csv, sync_urls_from_sitemap
from integrations.services.google_auth import GoogleAuthService
from .tasks import auto_check_google_status
from .models import Notification

# --- 1. NOTIFICACIONES (HTMX) ---

@login_required
def check_notifications(request):
    """Responde a HTMX para actualizar la campana de notificaciones."""
    return render(request, 'includes/notification_badge_partial.html')

@login_required
def mark_notifications_as_read(request):
    """Marca notificaciones como leídas y devuelve el estado vía HTMX."""
    Notification.objects.filter(user=request.user, is_read=False).update(is_read=True)
    if request.headers.get('HX-Request'):
        context = {
            'unread_notifications_count': 0,
            'user_notifications': Notification.objects.filter(user=request.user).order_by('-created_at')[:5]
        }
        return render(request, 'includes/notification_badge_partial.html', context)
    return HttpResponse(status=204)

# --- 2. AUDITORÍA DE URLS (Funciones y Vistas) ---

def url_audit_view(request, pk):
    """
    Vista funcional para auditoría. Maneja la lista y la carga de Sitemap.
    Coincide con: path('project/<int:pk>/audit/', url_audit_view, name='url_audit')
    """
    project = get_object_or_404(Project, pk=pk)
    
    if request.method == 'POST':
        # Sincronización desde Sitemap (Costo $0)
        success, message = sync_urls_from_sitemap(project)
        if success:
            messages.success(request, message)
        else:
            messages.error(request, message)
        return redirect('seo:url_audit', pk=project.pk)
    
    audits = URLAudit.objects.filter(project=project).order_by('-last_inspected')
    return render(request, 'seo/url_audit.html', {
        'project': project,
        'audits': audits
    })

def inspect_single_url(request, pk, audit_id):
    """Inspecciona una URL específica en GSC."""
    project = get_object_or_404(Project, pk=pk)
    audit = get_object_or_404(URLAudit, pk=audit_id, project=project)
    
    # Llamada al servicio que genera un 'Run' para trazabilidad
    result = GoogleAuthService.inspect_url_status(project, audit.url)
    
    if 'error' in result:
        messages.error(request, f"Error de Google: {result['error']}")
    else:
        audit.verdict = result.get('verdict')
        audit.status = result.get('coverage')
        audit.last_inspected = timezone.now()
        audit.save()
        messages.success(request, f"URL inspeccionada: {audit.verdict}")
        
    return redirect('seo:url_audit', pk=project.pk)

def bulk_inspect_urls(request, pk):
    """Inspección masiva de URLs pendientes."""
    project = get_object_or_404(Project, pk=pk)
    pending = URLAudit.objects.filter(project=project).exclude(verdict='GOOD')
    
    count = 0
    for audit in pending:
        result = GoogleAuthService.inspect_url_status(project, audit.url)
        if 'error' not in result:
            audit.verdict = result.get('verdict')
            audit.status = result.get('coverage')
            audit.last_inspected = timezone.now()
            audit.save()
            count += 1
            
    messages.success(request, f"Se han inspeccionado {count} URLs automáticamente.")
    return redirect('seo:url_audit', pk=project.pk)

class RequestIndexingView(View):
    """Dispara el rayo de indexación forzada (Costo $0)."""
    def get(self, request, pk, audit_id):
        project = get_object_or_404(Project, pk=pk)
        audit = get_object_or_404(URLAudit, pk=audit_id, project=project)
        
        success, msg = GoogleAuthService.force_indexing_url(project, audit.url)
        
        if success:
            audit.status = "Solicitud de Indexación Enviada"
            audit.verdict = "NEUTRAL" 
            audit.save()
            # Celery check en 15 min
            auto_check_google_status.apply_async(args=[audit.id, 1], countdown=900)
            messages.success(request, f"⚡ ¡Rayo disparado! {msg}")
        else:
            messages.error(request, f"Fallo: {msg}")
            
        return redirect('seo:url_audit', pk=project.pk)

# --- 3. DASHBOARDS (CBVs) ---

class ProjectDashboardView(DetailView):
    model = Project
    template_name = 'seo/dashboard.html'
    context_object_name = 'project'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        keywords = KeywordIdea.objects.filter(project=self.object)
        
        context['total_keywords'] = keywords.count()
        context['total_volume'] = keywords.aggregate(Sum('avg_monthly_searches'))['avg_monthly_searches__sum'] or 0
        context['opportunities'] = keywords.filter(
            avg_monthly_searches__gte=1000, 
            competition_level__in=['LOW', 'MEDIUM', 'Baja', 'Media']
        ).count()

        # Evitamos el error de la línea 197: Solo check booleano
        context['gsc_configured'] = bool(self.object.gsc_property_url and self.object.google_credential)
        context['ga4_configured'] = bool(self.object.ga4_property_id and self.object.google_credential)
        
        return context

class KeywordMagicView(DetailView):
    model = Project
    template_name = 'seo/keyword_magic.html'
    context_object_name = 'project'

    def post(self, request, *args, **kwargs):
        project = self.get_object()
        csv_file = request.FILES.get('csv_file')
        if not csv_file:
            messages.error(request, "Selecciona un CSV.")
            return redirect('seo:keyword_magic', pk=project.pk)
            
        success, message = import_google_ads_csv(project, csv_file)
        if success: messages.success(request, message)
        else: messages.error(request, message)
        return redirect('seo:keyword_magic', pk=project.pk)

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['keywords'] = KeywordIdea.objects.filter(project=self.object).order_by('-avg_monthly_searches')
        return context