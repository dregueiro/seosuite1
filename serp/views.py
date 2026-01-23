# serp/views.py

from django.views import View
from django.http import JsonResponse
from django.views.generic import ListView, DetailView
from django.contrib.auth.mixins import LoginRequiredMixin
from django.shortcuts import redirect, get_object_or_404
from django.contrib import messages
from django.utils import timezone

# MODELOS
from keyword_research.models import KeywordIdea, URLAudit
from projects.models import Project

# SERVICIOS
from .services.comparison_service import SerpComparisonService
from keyword_research.services.sitemap_service import sync_urls_from_sitemap
from integrations.services.google_auth import GoogleAuthService
from .models import SerpSnapshot

# serp/views.py
class SerpAnalysisDashboardView(LoginRequiredMixin, DetailView):
    model = SerpSnapshot
    template_name = 'serp/serp_analysis.html'
    context_object_name = 'snapshot'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        snapshot = self.object
        idea = snapshot.idea
        raw_data = snapshot.raw_data or {}

        # Datos Maestros
        context['keyword_name'] = raw_data.get('kw', 'Keyword')
        context['volume'] = getattr(idea, 'search_volume', 0)
        context['cpc'] = getattr(idea, 'cpc', 0)
        context['kd'] = getattr(idea, 'competition', 0)
        context['country_name'] = "España"

        # Resultados SERP
        context['organic_results'] = raw_data.get('organic_results', [])

        # Fila de 3 Columnas
        if idea and idea.run:
            context['db_ideas'] = KeywordIdea.objects.filter(run=idea.run).exclude(id=idea.id).order_by('-search_volume')[:8]
        context['google_questions'] = raw_data.get('people_also_ask', [])[:8]
        context['google_related'] = raw_data.get('related_searches', [])[:8]
        
        return context


class UrlAuditView(LoginRequiredMixin, ListView):
    model = URLAudit
    template_name = 'seo/url_audit.html'
    context_object_name = 'audits'

    def get_queryset(self):
        # REGLA 1: Seguridad Multi-tenancy
        self.project = get_object_or_404(
            Project, 
            pk=self.kwargs.get('pk'), 
            client__user=self.request.user
        )
        return URLAudit.objects.filter(project=self.project).order_by('-last_inspected')

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['project'] = self.project
        return context

    def post(self, request, *args, **kwargs):
        """Sincronización Sitemap (Costo $0)"""
        project = get_object_or_404(Project, pk=self.kwargs.get('pk'), client__user=request.user)
        success, message = sync_urls_from_sitemap(project)
        
        if success: messages.success(request, message)
        else: messages.error(request, message)
            
        return redirect('serp:url_audit', pk=project.pk)

class RunSerpDuelView(LoginRequiredMixin, View):
    def post(self, request, project_id, keyword_id):
        keyword_obj = get_object_or_404(
            KeywordIdea, 
            id=keyword_id, 
            run__project__client__user=request.user 
        )
        project = keyword_obj.run.project
        
        try:
            winner = SerpComparisonService.run_dual_test(project, keyword_obj, request.user)            
            messages.success(request, f"¡Duelo completado! El ganador es {winner.upper()}.")
        except Exception as e:
            messages.error(request, f"Error en el duelo técnico: {str(e)}")
            
        return redirect(request.META.get('HTTP_REFERER', 'serp:url_audit'))

class BulkInspectView(LoginRequiredMixin, View):
    """Placeholder para futura implementación masiva"""
    def get(self, request, pk):
        project = get_object_or_404(Project, pk=pk, client__user=request.user)
        messages.info(request, "Funcionalidad de inspección masiva en desarrollo (GSC).")
        return redirect('serp:url_audit', pk=project.pk)

class InspectUrlView(LoginRequiredMixin, View):
    """Encargada de la LUPA: inspección individual vía GSC."""
    def get(self, request, project_pk, pk):
        url_entry = get_object_or_404(
            URLAudit, 
            pk=pk, 
            project__id=project_pk, 
            project__client__user=request.user
        )
        
        # Llamada al servicio de integración
        result = GoogleAuthService.inspect_url_status(url_entry.project, url_entry.url)
        
        if 'error' in result:
            messages.error(request, f"Error: {result['error']}")
        else:
            url_entry.status = result.get('coverage', 'Unknown')
            url_entry.verdict = result.get('verdict', 'NEUTRAL')
            url_entry.last_inspected = timezone.now()
            url_entry.save()
            messages.success(request, f"Inspección completada: {url_entry.verdict}")
            
        return redirect('serp:url_audit', pk=project_pk)

class RequestIndexingView(LoginRequiredMixin, View):
    """Encargada del RAYO: solicitud de indexación forzada."""
    def get(self, request, pk, audit_id):
        project = get_object_or_404(Project, pk=pk, client__user=request.user)
        audit = get_object_or_404(URLAudit, pk=audit_id, project=project)
        
        try:
            success, msg = GoogleAuthService.force_indexing_url(project, audit.url)
            
            if success:
                audit.status = "Indexing Requested"
                audit.verdict = "NEUTRAL" 
                audit.save()
                messages.success(request, f"⚡ Solicitud enviada con éxito para: {audit.url}")
            else:
                messages.error(request, f"Error en la API de Google: {msg}")
                
        except Exception as e:
            messages.error(request, f"Error interno del sistema: {str(e)}")
            
        return redirect('serp:url_audit', pk=project.pk)