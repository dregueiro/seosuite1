import json
from django.views.generic import TemplateView, View
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib import messages
from django.shortcuts import redirect
from django.urls import reverse
from django.http import JsonResponse
from django_countries import countries

from .services.orchestrator import KeywordDiscoveryService
from .services.intent_resolver import IntentResolver
from .services.clustering import KeywordClusteringService
from .services.close_variants import CloseVariantsService
from .models import KeywordIdea
from projects.models import Project
from .services.geo_service import GeoLocationService

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
    def post(self, request, *args, **kwargs):
        try:
            data = json.loads(request.body)
            project_id = data.get('project_id')
            keywords_list = data.get('keywords', []) # Lista de objetos {keyword, volume, etc}
            
            project = Project.objects.get(id=project_id)
            
            created_count = 0
            for item in keywords_list:
                # Usamos update_or_create para no duplicar si ya existe la keyword en ese proyecto
                obj, created = KeywordIdea.objects.update_or_create(
                    project=project,
                    keyword=item['keyword'],
                    defaults={
                        'avg_monthly_searches': item.get('volume', 0) if isinstance(item.get('volume'), int) else 0,
                        # Aquí puedes añadir más campos si los tienes en el modelo
                    }
                )
                if created:
                    created_count += 1
            
            return JsonResponse({
                'status': 'success', 
                'message': f'✅ {created_count} keywords guardadas correctamente.'
            })
        except Exception as e:
            return JsonResponse({'status': 'error', 'message': str(e)}, status=400)

class KeywordDiscoveryAjaxView(LoginRequiredMixin, View):
    """
    Endpoint AJAX para obtener ideas de keywords en tiempo real.
    Ahora soporta segmentación local específica del mapa.
    """
    def get(self, request, *args, **kwargs):
        query = request.GET.get('q')
        project_id = request.GET.get('project_id')
        
        # Recibimos el código de ubicación del mapa (DataForSEO/Google ID)
        location_code = request.GET.get('location_code')
        
        if not query or not project_id:
            return JsonResponse({'status': 'error', 'message': 'Faltan parámetros'}, status=400)

        try:
            # 1. Obtener el proyecto
            project = Project.objects.get(id=project_id)
            
            # 2. Determinar la ubicación:
            # Si el usuario eligió una ciudad en el mapa, usamos esa.
            # Si no, usamos la ubicación por defecto del proyecto.
            target_location = location_code if location_code else project.target_location_id
            
            # 3. Llamada al Orquestador con el nuevo parámetro de ubicación
            # Actualizamos la firma para pasar el location_code
            ideas = KeywordDiscoveryService.get_ideas(
                project=project, 
                seed_keyword=query, 
                location_code=target_location
            )
            
            return JsonResponse({
                'status': 'success',
                'location_used': target_location, # Feedback para saber qué zona buscó
                'data': ideas
            })
            
        except Project.DoesNotExist:
            return JsonResponse({'status': 'error', 'message': 'Proyecto no encontrado'}, status=404)
        except Exception as e:
            # Logueamos el error para debug pero no rompemos el front
            print(f"Error en Discovery: {str(e)}")
            return JsonResponse({'status': 'error', 'message': "Error al consultar las APIs externas"}, status=500)

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
        show_suggestions = self.request.GET.get('expand') == 'true'
        context['all_countries'] = countries
        context['project'] = project
        context['query'] = query
        
        keywords_data = []

        # --- LÓGICA DE OBTENCIÓN DE DATOS ---
        if query:
            # A. PRIORIDAD: Búsqueda Global (APIs via Orquestador)
            # Esto trae datos frescos de Google Ads o DataForSEO
            api_results = KeywordDiscoveryService.get_ideas(project, query)
            
            if api_results:
                for item in api_results:
                    keywords_data.append({
                        'keyword': item['keyword'],
                        'volume': item.get('volume', 0),
                        'intent': IntentResolver.resolve(item['keyword']),
                        'kd': item.get('kd', 30),
                        'cpc': item.get('cpc', 0.00),
                        'source': item.get('source', 'API')
                    })
            
            # B. COMPLEMENTO: Buscar también en lo que ya tenemos guardado (CSV/Previos)
            local_results = KeywordIdea.objects.filter(project=project, keyword__icontains=query)
            for item in local_results:
                # Evitar duplicados si la API trajo lo mismo
                if not any(k['keyword'] == item.keyword for k in keywords_data):
                    keywords_data.append({
                        'keyword': item.keyword,
                        'volume': item.avg_monthly_searches or 0,
                        'intent': IntentResolver.resolve(item.keyword),
                        'kd': 35,
                        'cpc': 0.00,
                        'source': 'Database'
                    })
        else:
            # Si no hay query, mostramos las keywords guardadas del proyecto (Estado inicial)
            queryset = KeywordIdea.objects.filter(project=project)[:50]
            for item in queryset:
                keywords_data.append({
                    'keyword': item.keyword,
                    'volume': item.avg_monthly_searches or 0,
                    'intent': IntentResolver.resolve(item.keyword),
                    'kd': 35,
                    'cpc': 0.00
                })

        # --- SERVICIOS DE VALOR AGREGADO ---

        # 1. Expansión (Close Variants)
        if show_suggestions and keywords_data:
            seeds = [k['keyword'] for k in keywords_data[:10]]
            new_ideas = CloseVariantsService.generate(seeds)
            for idea in new_ideas:
                if not any(k['keyword'] == idea for k in keywords_data):
                    keywords_data.append({
                        'keyword': idea,
                        'volume': 'Sugerida',
                        'intent': IntentResolver.resolve(idea),
                        'kd': 0,
                        'cpc': 0.00,
                        'is_suggestion': True
                    })

        # 2. Clustering (Sidebar)
        if keywords_data:
            context['groups'] = KeywordClusteringService.get_groups(
                [k['keyword'] for k in keywords_data]
            )
        else:
            context['groups'] = []

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