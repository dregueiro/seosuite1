import json
from django.views.generic import TemplateView, View
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib import messages
from django.shortcuts import redirect, get_object_or_404
from django.urls import reverse
from django.http import JsonResponse
from django_countries import countries
from .services.ads_import import import_google_ads_csv  
from .services.orchestrator import KeywordDiscoveryService
from .services.intent_resolver import IntentResolver
from .services.clustering import KeywordClusteringService
from .services.close_variants import CloseVariantsService
from .models import KeywordIdea
from projects.models import Project
from .services.geo_service import GeoLocationService
from core.models import Run

class GeoSearchAjaxView(LoginRequiredMixin, View):
    """
    Autocomplete de ciudades y estados para el mapa.
    """
    def get(self, request, *args, **kwargs):
        query = request.GET.get('q', '').strip()
        country_code = request.GET.get('country_code', 'US')
        project_id = request.GET.get('project_id')
        # Podríamos sacar el country_code del proyecto si quisiéramos ser más estrictos

 
        
        if len(query) < 3:
            return JsonResponse([], safe=False)

        locations = GeoLocationService.search_locations(query, country_code=country_code)
        return JsonResponse(locations, safe=False)

class SaveKeywordsAjaxView(LoginRequiredMixin, View):
    """Guarda o actualiza keywords seleccionadas desde la tabla API."""
    def post(self, request, *args, **kwargs):
        data = json.loads(request.body)
        project = get_object_or_404(Project, pk=data.get('project_id'))
        keywords = data.get('keywords', [])

        for kw in keywords:
            KeywordIdea.objects.update_or_create(
                project=project,
                keyword=kw['keyword'],
                defaults={
                    'avg_monthly_searches': kw.get('volume', 0),
                    'cpc': kw.get('cpc', 0),
                    'competition_level': kw.get('kd', 0),
                }
            )
        return JsonResponse({'status': 'success', 'message': f'{len(keywords)} keywords guardadas.'})
class KeywordDiscoveryAjaxView(LoginRequiredMixin, View):
    def get(self, request, *args, **kwargs):
        query = request.GET.get('q')
        project_id = request.GET.get('project_id')
        
        # CAPTURAR VALORES DEL AUTOCOMPLETADO
        # Si el usuario no eligió nada, usamos valores por defecto (España/Español)
        location_id = request.GET.get('location_id') or "2724" 
        language_id = request.GET.get('language_id') or "1014"
        
        project = get_object_or_404(Project, pk=project_id)

        try:
            # PASAR PARÁMETROS AL SERVICIO
            # Asegúrate que GoogleAdsService.get_ideas acepte estos argumentos
            results = GoogleAdsService.get_ideas(
                project, 
                query, 
                location_id=location_id, 
                language_id=language_id
            )
            
            if not results:
                return JsonResponse({'status': 'success', 'data': []})

            formatted_data = [{
                'keyword': res.get('text') or res.get('keyword'),
                'volume': res.get('avg_monthly_searches') or 0,
                'kd': res.get('competition_index') or 0,
                'cpc': res.get('cpc') or 0
            } for res in results]

            return JsonResponse({'status': 'success', 'data': formatted_data})

        except Exception as e:
            # Esto evita el error de "undefined" en el forEach de JS
            return JsonResponse({
                'status': 'error', 
                'message': str(e),
                'data': [] 
            }, status=500)



class KeywordOverviewView(LoginRequiredMixin, TemplateView):
    """
    Dashboard principal de Keyword Research.
    Muestra el resumen de los últimos Runs y métricas generales.
    """
    template_name = "keyword_research/overview.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        # Por ahora enviamos datos de prueba para que no rompa la UI
        context['total_keywords'] = 0 
        context['last_runs'] = [] 
        return context

class KeywordMagicHomeView(LoginRequiredMixin, TemplateView):
    """Página de bienvenida con el buscador grande."""
    template_name = 'keyword_research/keyword_search_home.html' # <--- Asegúrate de que este existe

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['all_countries'] = countries # Necesario para el selector de país
        return context
class MagicToolView(LoginRequiredMixin, TemplateView):
    """
    Vista principal estilo Semrush (Hando HRM Layout).
    Maneja la visualización y la importación de CSV.
    """
    template_name = 'keyword_research/keyword_magic.html'

    def post(self, request, *args, **kwargs):
        """Procesa la subida de archivos CSV de Google Ads."""
        project = get_object_or_404(Project, pk=self.kwargs.get('pk'))
        csv_file = request.FILES.get('csv_file')
        
        if not csv_file:
            messages.error(request, "Error: No se seleccionó ningún archivo.")
            return redirect('keyword_research:magic_tool', pk=project.pk)
            
        success, message = import_google_ads_csv(project, csv_file)
        if success:
            messages.success(request, message)
        else:
            messages.error(request, message)
            
        return redirect('keyword_research:magic_tool', pk=project.pk)

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        project = get_object_or_404(Project, pk=self.kwargs.get('pk'))
        
        # Filtro de búsqueda para la base de datos local
        query = self.request.GET.get('q', '')
        keywords = KeywordIdea.objects.filter(project=project)
        if query:
            keywords = keywords.filter(keyword__icontains=query)

        context['project'] = project
        context['keywords'] = keywords
        
        # Historial de ejecuciones (Runs) para el Offcanvas 
        context['last_runs'] = Run.objects.filter(
            project=project, 
            kind__in=['keyword_discovery', 'keyword_import']
        ).order_by('-created_at')[:10]
        
        return context    
    
class KeywordMagicView(LoginRequiredMixin, TemplateView):
    
    def dispatch(self, request, *args, **kwargs):
        """
        Portero de seguridad: Valida el proyecto antes de cualquier acción.
        """
        project_id = request.GET.get('project')
        
        if not project_id or not project_id.isdigit():
            messages.warning(request, "⚠️ Por favor, selecciona un proyecto para acceder al Keyword Magic Tool.")
            return redirect(reverse('projects:project_list'))
        
        self.project = Project.objects.filter(id=project_id).first()
        
        if not self.project:
            messages.error(request, "El proyecto solicitado no existe.")
            return redirect(reverse('projects:project_list'))
            
        return super().dispatch(request, *args, **kwargs)

    def get_template_names(self):
        """
        Decide la cara de la herramienta: Landing de búsqueda o Tabla de resultados.
        """
        if self.request.GET.get('q'):
            return ["keyword_research/keyword_magic.html"]
        return ["keyword_research/keyword_search_home.html"]

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        project = self.project
        query = self.request.GET.get('q', '').strip()
        
        # --- CAPTURAR FILTROS DEL HOME ---
        country_code = self.request.GET.get('location_country')
        lang_code = self.request.GET.get('language')
        location_name = self.request.GET.get('location_name')
        
        context['project'] = project
        context['query'] = query
        context['all_countries'] = countries

        if query:
            # Pasamos los parámetros de país e idioma al orquestador
            api_results = KeywordDiscoveryService.get_ideas(
                project=project, 
                seed_keyword=query,
                country_code=country_code,  # Nuevo
                language_code=lang_code     # Nuevo
            )
            
            keywords_data = []
            if api_results:
                for item in api_results:
                    keywords_data.append({
                        'keyword': item['keyword'],
                        'volume': item.get('volume', 0),
                        'intent': IntentResolver.resolve(item['keyword'], brand_name=project.name),
                        'kd': item.get('kd', 30),
                        'cpc': item.get('cpc', 0.00),
                        'source': item.get('source', 'API')
                    })
            
            # Clustering (Sidebar)
            context['groups'] = KeywordClusteringService.get_groups([k['keyword'] for k in keywords_data])
            context['keywords'] = keywords_data
            
        return context

    
# Agrega aquí placeholders para las otras que pusimos en urls.py si no las vas a usar aún
class KeywordSeedCreateView(LoginRequiredMixin, TemplateView):
    template_name = "keyword_research/seed_form.html"

class KeywordRunListView(LoginRequiredMixin, TemplateView):
    template_name = "keyword_research/run_list.html"

class KeywordRunDetailView(LoginRequiredMixin, TemplateView):
    template_name = "keyword_research/run_detail.html"

class UpdateIntentApiView(LoginRequiredMixin, TemplateView):
    # Esto debería ser una View de API (o View normal que retorna JsonResponse)
    pass

    template_name = "keyword_research/keyword_magic.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        # 1. Traer datos (Simulamos que vienen del último Run de Ads/CSV)
        raw_keywords = self.get_artifacts_from_last_run() 
        
        # 2. Enriquecer con Intent y Formatear
        processed_data = []
        for item in raw_keywords:
            processed_data.append({
                'keyword': item['keyword'],
                'volume': item.get('volume', 0),
                'kd': item.get('kd', 30), # Valor por defecto si no hay
                'intent': IntentResolver.resolve(item['keyword']),
                'cpc': item.get('cpc', 0.0)
            })

        # 3. Clustering para el Sidebar (Panel izquierdo)
        context['groups'] = KeywordClusteringService.get_groups(
            [k['keyword'] for k in processed_data]
        )
        
        # 4. Filtro por grupo si el usuario hizo clic en el sidebar
        group_filter = self.request.GET.get('group')
        if group_filter:
            processed_data = [k for k in processed_data if group_filter.lower() in k['keyword'].lower()]

        context['keywords'] = processed_data
        return context