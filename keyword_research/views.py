import json
import requests
from .models import KeywordIdea
from django.views.generic import TemplateView, View
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib import messages
from django.shortcuts import redirect, get_object_or_404
from django.urls import reverse
from django.http import JsonResponse
from django.core.cache import cache
from django.db.models import Q
from django.core.cache import cache # <--- Importante para Zero-Cost
from django_countries import countries

from .services.ads_import import import_google_ads_csv  
from .services.orchestrator import KeywordDiscoveryService
from .services.intent_resolver import IntentResolver
from .services.clustering import KeywordClusteringService
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
    """
    Vista de RESULTADOS de una búsqueda específica (Run).
    Recibe el ID del Run (pk), no del Proyecto.
    """
    template_name = 'keyword_research/keyword_magic.html'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        
        # 1. Capturamos el ID de la URL (Ahora representa un RUN, no un Proyecto)
        run_id = self.kwargs.get('pk')
        
        # 2. Buscamos el Run (y verificamos seguridad)
        run = get_object_or_404(Run, pk=run_id, user=self.request.user)
        # 3. Recuperamos el Proyecto a través del Run
        project = run.project
        # --- FIX PARA EL ERROR UUID ---
        # Convertimos el ID a string explícitamente para evitar problemas de serialización
        context['run_id_str'] = str(run.id)


        # ✅ MEJORA UX: Actualizamos la sesión de forma SEGURA
        # Así el sidebar sabrá qué proyecto resaltar, pero usando str() para no romper nada.
        self.request.session['active_project_id'] = str(project.id)
        self.request.session['active_project_name'] = project.name
        # 4. Buscamos SOLO las keywords generadas en ESTA búsqueda
        # Esto es vital: No mezclamos con keywords viejas o de CSVs anteriores
        keywords = KeywordIdea.objects.filter(run=run).order_by('-avg_monthly_searches')

        # --- Filtros Visuales (Opcional: Mantenemos tu lógica de 'q') ---
        query = self.request.GET.get('q', '')
        if query:
            keywords = keywords.filter(keyword__icontains=query)

        # 5. Pasamos todo al template
        context['run_id_str'] = str(run.id)
        context['run'] = run
        context['project'] = project
        context['keywords'] = KeywordIdea.objects.filter(run=run).order_by('-avg_monthly_searches')
        # (Opcional) Si quieres mostrar historial en el sidebar, filtra por el proyecto del Run
        context['last_runs'] = Run.objects.filter(
            project=project, 
            kind__in=['keyword_discovery', 'keyword_import']
        ).order_by('-created_at')[:10]
        
        return context

    # NOTA DE ARQUITECTO:
    # He eliminado el método POST (CSV Import) de esta vista específica.
    # ¿Por qué? Porque esta URL ahora es /magic/<run_id>/ (para ver resultados).
    # La importación de CSV debería hacerse en el Dashboard (/magic/) o en una vista dedicada,
    # ya que al importar CSV creas un NUEVO Run, no modificas uno existente.
    
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