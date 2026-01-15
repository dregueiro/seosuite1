import json
import requests
from django.views.generic import TemplateView, View
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib import messages
from django.shortcuts import redirect, get_object_or_404
from django.urls import reverse
from django.http import JsonResponse
from django.core.cache import cache
from django.db.models import Q
from django.core.cache import cache # <--- Importante para Zero-Cost
from django.utils.decorators import method_decorator
from django.views.decorators.cache import cache_page
from django_countries import countries
from .services.ads_import import import_google_ads_csv  
from .services.orchestrator import KeywordDiscoveryService
from .services.intent_resolver import IntentResolver
from .services.clustering import KeywordClusteringService
from .services.close_variants import CloseVariantsService
from .models import KeywordIdea
from projects.models import Project
from core.models import Run
from .models import GoogleAdsLocation,GoogleAdsLanguage

class GeoProxyView(LoginRequiredMixin, View):
    """
    Proxy para evitar CORS y cachear peticiones a OpenStreetMap (Nominatim).
    Frontend -> Django -> OSM
    """
    def get(self, request):
        query = request.GET.get('q', '').strip()
        if not query:
            return JsonResponse([], safe=False)

        # 1. Zero-Cost: Verificar Caché primero (30 días)
        cache_key = f"geo_osm_{query.lower().replace(' ', '_')}"
        cached_data = cache.get(cache_key)

        if cached_data:
            print(f"⚡ Serving from Cache: {query}")
            return JsonResponse(cached_data, safe=False)

        # 2. Llamada a OSM (Server-to-Server)
        url = "https://nominatim.openstreetmap.org/search"
        params = {
            'q': query,
            'format': 'json',
            'limit': 1,
            'addressdetails': 1
        }
        headers = {
            'User-Agent': 'SEOSuite-SaaS/1.0 (dev-testing)' # Necesario para no ser bloqueado
        }

        try:
            print(f"🌍 Fetching form OSM: {query}")
            response = requests.get(url, params=params, headers=headers, timeout=5)
            response.raise_for_status()
            data = response.json()

            # 3. Guardar en Caché
            if data:
                cache.set(cache_key, data, timeout=60*60*24*30)

            return JsonResponse(data, safe=False)

        except Exception as e:
            print(f"❌ Error en GeoProxy: {e}")
            return JsonResponse([], safe=False)
# --- VISTAS DE AUTOCOMPLETE (NUEVAS) ---
class LanguageAutocompleteView(LoginRequiredMixin, View):
    """ Busca en la DB de GoogleAdsLanguage para Select2 """
    def get(self, request):
        query = request.GET.get('q', '').strip()
        if not query:
            langs = GoogleAdsLanguage.objects.filter(code__in=['en', 'es', 'fr', 'de', 'pt'])
        else:
            langs = GoogleAdsLanguage.objects.filter(
                Q(name__icontains=query) | Q(code__icontains=query)
            )[:20]
        results = [{'id': l.criteria_id, 'text': l.name} for l in langs]
        return JsonResponse({'results': results})
    
class LocationAutocompleteView(LoginRequiredMixin, View):
    """ Busca en la DB de GoogleAdsLocation para Select2 """
    def get(self, request):
        query = request.GET.get('q', '').strip()
        if len(query) < 2:
            return JsonResponse({'results': []})
        
        locations = GoogleAdsLocation.objects.filter(
            status='Active'
        ).filter(
            Q(canonical_name__icontains=query) | Q(name__icontains=query)
        ).order_by('-target_type', 'name')[:30]

        results = [{'id': l.criteria_id, 'text': f"{l.canonical_name} ({l.target_type})"} for l in locations]
        return JsonResponse({'results': results})


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
    template_name = "keyword_research/keyword_search_home.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        project_id = self.request.GET.get('project')
        if project_id:
            context['project'] = get_object_or_404(Project, pk=project_id, user=self.request.user)
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