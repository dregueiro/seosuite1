import json
import requests
from django.views.generic import TemplateView, View, ListView
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib import messages
from django.shortcuts import redirect, get_object_or_404
from django.urls import reverse
from django.http import JsonResponse
from django.core.cache import cache
from django.db.models import Q
from django.core.cache import cache # <--- Importante para Zero-Cost
from django_countries import countries
from django_tomselect.autocompletes import AutocompleteModelView

from .services.ads_import import import_google_ads_csv  
from .services.orchestrator import KeywordDiscoveryService
from .services.intent_resolver import IntentResolver
from .services.clustering import KeywordClusteringService
from .models import KeywordIdea, Keyword
from projects.models import Project, GscRow
from core.models import Run
from .models import GoogleAdsLocation,GoogleAdsLanguage
from .services.keyword_services import KeywordPromotionService
from .services.intent_service import KeywordIntelligenceService

class AddToProjectView(View):
    def post(self, request, project_id, idea_id):
        idea = KeywordIdea.objects.get(id=idea_id, project_id=project_id)
        
        # Resolvemos intención antes de guardar
        intent = KeywordIntelligenceService.determine_intent(idea.keyword)
        
        # Guardamos en el modelo final (Dedupe automático por get_or_create)
        kw_obj, created = Keyword.objects.get_or_create(
            project_id=project_id,
            normalized_name=idea.keyword.strip().lower(),
            defaults={
                'name': idea.keyword,
                'volume': idea.avg_monthly_searches or 0,
                'cpc': idea.cpc or 0,
                'intent': intent
            }
        )
        
        if created:
            messages.success(request, f"'{kw_obj.name}' añadida al proyecto.")
        else:
            messages.info(request, f"'{kw_obj.name}' ya estaba en seguimiento.")
            
        return redirect('keyword_research:keyword_magic', project_id=project_id)


class PromoteKeywordsView(View):
    """
    CBV para procesar la selección masiva de la UI.
    """
    def post(self, request, project_id):
        selected_keywords = request.POST.getlist('selected_keywords')
        # Formateamos para el servicio (en el futuro esto vendría enriquecido)
        keywords_data = [{'keyword': kw} for kw in selected_keywords]
        
        if not selected_keywords:
            messages.warning(request, "No seleccionaste ninguna keyword.")
            return redirect('keyword_research:magic_results', project_id=project_id)

        service = KeywordPromotionService()
        result = service.promote_to_project(project_id, keywords_data, request.user)
        
        messages.success(request, f"¡Éxito! Se añadieron {result['added_count']} keywords al proyecto.")
        return redirect('projects:keyword_list', project_id=project_id)

class ProjectHistoryView(LoginRequiredMixin, ListView):
    model = Run
    template_name = 'keyword_research/project_history.html'
    context_object_name = 'runs'

    def get_queryset(self):
        # Recuperamos el proyecto de la sesión o de la URL
        project_id = self.kwargs.get('project_id')
        return Run.objects.filter(
            project_id=project_id,
            user=self.request.user,
            status='SUCCESS'
        ).order_by('-created_at')

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        # Pasamos el nombre del proyecto para el título
        if self.object_list.exists():
            context['project_name'] = self.object_list.first().project.name
        return context
    
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
class LanguageAutocompleteView(LoginRequiredMixin, AutocompleteModelView):
    model = GoogleAdsLanguage
    search_lookups = ["name__icontains", "code__icontains"]
    value_fields = ["pk", "name"]
    def get_queryset(self):
        return super().get_queryset()
class LocationAutocompleteView(LoginRequiredMixin, AutocompleteModelView):
    model = GoogleAdsLocation
    search_lookups = ["canonical_name__icontains", "name__icontains"]
    value_fields = ["pk", "canonical_name"]

    def get_queryset(self):
        return super().get_queryset().filter(status='Active')
        


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
    
    # Variable de clase para guardar el proyecto temporalmente durante la petición
    current_project = None 

    def dispatch(self, request, *args, **kwargs):
        """
        Lógica de "Contexto de Proyecto":
        1. ¿Viene 'project_id' en la URL? -> Úsalo y guárdalo en sesión.
        2. ¿No viene en URL? -> Busca 'active_project_id' en la sesión.
        3. ¿No hay nada? -> Redirige a la lista de proyectos para que elija uno.
        """
        if not request.user.is_authenticated:
            return self.handle_no_permission()
            
        user = request.user
        project_id = request.GET.get('project')

        # CASO A: Navegación explícita (URL trae ?project=123)
        if project_id:
            # Validamos que el proyecto exista y sea del usuario
            # Nota: Si aquí alguien pone ?project=texto_raro, Django lo maneja mejor, 
            # pero podrías poner un try/except aquí también si quieres ser ultra-seguro.
            try:
                project = Project.objects.filter(id=project_id, client__user=request.user).first()
                if project:
                    # ¡Éxito! Guardamos en la memoria del navegador (Sesión)
                    request.session['active_project_id'] = str(project.id)
                    self.current_project = project
                else:
                    messages.error(request, "El proyecto solicitado no existe o no tienes permiso.")
                    return redirect('projects:list')
            except ValueError:
                # Si alguien pone ?project=basura en la URL
                messages.error(request, "ID de proyecto inválido.")
                return redirect('projects:list')

        # CASO B: Navegación desde Sidebar (Sin parámetros, usamos memoria)
        else:
            session_project_id = request.session.get('active_project_id')
            
            if session_project_id:
                try:
                    # 🛡️ BLINDAJE CONTRA EL ERROR DE UUID 🛡️
                    # Intentamos buscar el proyecto.
                    # Si session_project_id es un UUID 'd6ee...' y la DB espera un número (1, 2...),
                    # esto lanzará ValueError. Lo capturamos abajo.
                    project = Project.objects.filter(id=session_project_id, client__user=user).first()
                    
                    if project:
                        self.current_project = project
                    else:
                        # El ID tenía formato correcto (número), pero el proyecto ya no existe
                        request.session.pop('active_project_id', None)
                        
                except ValueError:
                    # 🚨 AQUÍ CAPTURAMOS TU ERROR ACTUAL
                    # La sesión tenía un UUID o basura. La limpiamos silenciosamente.
                    # Al hacer self.current_project = None, caerá en el CASO C y redirigirá.
                    request.session.pop('active_project_id', None)
                    pass
            
        # CASO C: Usuario nuevo o sesión expirada/inválida (Sin contexto)
        if not self.current_project:
            # Opcional: Solo mostrar el mensaje si no venía de un error forzado
            # messages.warning(request, "⚠️ Por favor, selecciona un proyecto para comenzar.")
            return redirect('projects:list')

        # Si llegamos aquí, self.current_project tiene un proyecto válido. Continuamos.
        return super().dispatch(request, *args, **kwargs)

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        # Pasamos el proyecto validado al Template
        context['project'] = self.current_project
        return context
    
    def post(self, request, *args, **kwargs):
  
        # Impresión ultra-visible en terminal
        print("\n\033[94m" + "!"*60)
        print("🔥 RECIBIDO POST: INVESTIGACIÓN INICIADA 🔥")
        print(f"PALABRA: {request.POST.get('seed')} | MODO: {request.POST.get('search_mode')}")
        print("!"*60 + "\033[0m\n")
    
    # ... resto del código que llama al orquestador
        project_id = request.POST.get('project')
        seed = request.POST.get('seed')
        language_id = request.POST.get('language_id')
        location_id = request.POST.get('location_id')
        search_mode = request.POST.get('search_mode', 'live') # Recibimos el modo (live/database)
        if not seed:
            messages.error(request, "Falta la palabra clave.")
            return redirect(request.path)

        # Llamar al orquestador
        try:
            from .services.orchestrator import KeywordDiscoveryService
            
            run = KeywordDiscoveryService.discover_keywords(
                project_id=project_id,
                seed=seed,
                language_id=language_id,
                location_id=location_id,
                user=request.user,
                mode=search_mode
            )
            messages.success(request, f"¡Análisis completado! {run.outputs.get('count',0)} keywords.")
            return redirect('keyword_research:magic_tool', pk=run.id)
            
        except Exception as e:
            # AGREGA ESTE PRINT PARA VER EL ERROR EN LA CONSOLA NEGRA
            import traceback
            print("🔥🔥🔥 ERROR FATAL EN POST 🔥🔥🔥")
            print(e)
            print(traceback.format_exc())
            print("🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥")
            
            messages.error(request, f"Error iniciando investigación: {str(e)}")
            messages.error(request, f"Error: {e}")
            return redirect(request.path)

# Asegúrate de tener estos imports arriba
class MagicToolView(LoginRequiredMixin, TemplateView):
    template_name = 'keyword_research/keyword_magic.html'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        run_id = self.kwargs.get('pk')
        
        # 1. Obtener el Run y asegurar pertenencia al usuario
        run = get_object_or_404(Run, pk=run_id, user=self.request.user)
        project = run.project

        # 2. Sincronizar Sesión para el Sidebar de Hando
        self.request.session['active_project_id'] = str(project.id)
        self.request.session['active_project_name'] = project.name

        # Intentamos obtener la keyword semilla del modelo KeywordIdeaRun o del JSON inputs
        # Esto soluciona el error VariableDoesNotExist [query]
        seed_text = getattr(run, 'seed_keyword', '') 
        if not seed_text and hasattr(run, 'inputs'):
            seed_text = run.inputs.get('seed', '')

        # 3. Queryset Base
        keywords_query = KeywordIdea.objects.filter(run=run).order_by('-search_volume')

        # --- FILTROS AVANZADOS (Semrush Style) ---
        include_kw = self.request.GET.get('include', '').strip()
        if include_kw:
            # Soporta múltiples palabras separadas por comas
            for word in [w.strip() for w in include_kw.split(',')]:
                keywords_query = keywords_query.filter(keyword__icontains=word)

        exclude_kw = self.request.GET.get('exclude', '').strip()
        if exclude_kw:
            for word in [w.strip() for w in exclude_kw.split(',')]:
                keywords_query = keywords_query.exclude(keyword__icontains=word)

        # 4. CÁLCULOS SEGUROS PARA KPIs (Evita error int + str)
        total_vol = 0
        total_kd = 0
        valid_kd_count = 0

        for k in keywords_query:
            try:
                # Forzamos conversión a int/float por seguridad
                vol = int(k.search_volume or 0)
                kd = float(k.competition or 0)
                
                total_vol += vol
                if kd > 0:
                    total_kd += kd
                    valid_kd_count += 1
            except (ValueError, TypeError):
                continue

        avg_kd = (total_kd / valid_kd_count) if valid_kd_count > 0 else 0
        # En la vista de MagicToolView, podrías añadir esto al contexto:
        gsc_queries = GscRow.objects.filter(project=project).values_list('query', flat=True)
        # Esto permite que el template sepa qué keywords ya tienen "huella" en Google.
        # 5. Grupos Dinámicos (Clustering)
        groups = []
        if keywords_query.exists():
            # Usamos el servicio de clustering sobre las keywords filtradas
            groups = KeywordClusteringService.get_groups([k.keyword for k in keywords_query[:300]])

        # 6. Construir Contexto Final
        context.update({
            'run': run,
            'project': project,
            'keywords': keywords_query,
            'total_volume': total_vol,
            'avg_kd': avg_kd,
            'groups': groups,
            'include_val': include_kw,
            'exclude_val': exclude_kw,
            'run_id_str': str(run.id),
            'gsc_queries':gsc_queries,
            'query': seed_text,
            
        })
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
        
        # 4. Buscamos las keywords
        keywords_list = KeywordIdea.objects.filter(run=run).order_by('-avg_monthly_searches')

        # --- CÁLCULOS PARA LOS WIDGETS (KPIs) ---
        total_volume = sum(k.avg_monthly_searches for k in keywords_list if k.avg_monthly_searches)
        
        # KD Promedio (evitando división por cero)
        count = keywords_list.count()
        avg_kd = sum(k.competition_level for k in keywords_list) / count if count > 0 else 0

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
            context.update({
                'run': run,
                'project': project,
                'keywords': keywords_list,
                'total_volume': total_volume,
                'avg_kd': avg_kd,
                'last_runs': Run.objects.filter(
                    project=project, 
                    kind__in=['keyword_discovery', 'keyword_import']
                ).order_by('-created_at')[:10]
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