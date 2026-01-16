import logging
import traceback
from decimal import Decimal
from django.utils import timezone
from datetime import timedelta
from django.db.models import Q

# Modelos
from core.models import Run
from keyword_research.models import KeywordIdea
from projects.models import Project

# Servicios
from .google_ads_service import GoogleAdsService
from .dataforseo_service import DataForSEOService
from .close_variants import CloseVariantsService

logger = logging.getLogger(__name__)

# --- LISTA DE PRECIOS DATAFORSEO ---
# Live: $0.08 (Precio fijo, rápido, datos frescos)
COST_LIVE = Decimal('0.08')      
# Database: $0.10 (Estimado de seguridad: $0.01 base + resultados. Trae muchas más keywords)
COST_DATABASE = Decimal('0.10')

class KeywordDiscoveryService:

    @staticmethod
    def discover_keywords(project_id, seed, language_id, location_id, user, mode="live"):
        """
        Orquestador Maestro:
        1. Busca en Cache Local (Gratis)
        2. Busca en Google Ads (Gratis)
        3. Busca en DataForSEO (Pago - Con chequeo de saldo)
        4. Fallback a Algoritmo Local (Gratis)
        """
        
        # 1. Recuperar Proyecto
        try:
            project = Project.objects.get(pk=project_id)
        except Project.DoesNotExist:
            raise ValueError("Proyecto no encontrado.")

        # 2. Crear Run (Registro de Auditoría)
        run = Run.objects.create(
            project=project,
            user=user, 
            client=project.client,
            provider="smart_orchestrator", 
            kind="keyword_discovery", 
            status="PENDING",
            inputs={
                "seed": seed, 
                "language": language_id, 
                "location": location_id,
                "mode": mode
            }
        )

        results = []
        source_used = "Unknown"
        cost_incurred = Decimal('0.00')

        try:
            # =================================================================
            # 💎 PASO 0: INTELIGENCIA INTERNA (CACHE) - Costo $0
            # =================================================================
            # Buscamos si tenemos datos frescos (menos de 30 días)
            thirty_days_ago = timezone.now() - timedelta(days=30)
            
            # Filtro: Contiene la semilla Y es reciente
            # NOTA: Buscamos en TODOS los proyectos para aprovechar la "Economía de Escala"
            cached_keywords = KeywordIdea.objects.filter(
                keyword__icontains=seed,
                created_at__gte=thirty_days_ago
            ).order_by('-avg_monthly_searches')[:500]

            # Si encontramos una cantidad decente (ej: más de 10), usamos esto.
            if cached_keywords.exists() and len(cached_keywords) > 10:
                logger.info(f"💎 [CACHE] ¡Datos encontrados en casa! Ahorrando dinero...")
                
                # Transformamos los objetos DB a diccionarios para mantener el formato standard
                results = []
                for kw in cached_keywords:
                    results.append({
                        'keyword': kw.keyword,
                        'volume': kw.avg_monthly_searches,
                        'competition': kw.competition_level,
                        'cpc_high': kw.cpc,
                        'source': 'Base de Datos Propia (Cache)'
                    })
                source_used = "internal_cache"

            # =================================================================
            # 🟢 PASO 1: GOOGLE ADS (Gratis / Prioridad 1)
            # Solo si no encontramos nada en Cache
            # =================================================================
            if not results and project.google_credential and project.google_ads_customer_id:
                try:
                    logger.info(f"📡 [GoogleAds] Intentando para: {seed}")
                    results = GoogleAdsService.get_ideas(
                        project=project, 
                        seed_keyword=seed,
                        location_id=location_id,
                        language_id=language_id
                    )
                    if results:
                        source_used = "google_ads"
                        logger.info(f"✅ Éxito con Google Ads.")
                
                except Exception as e:
                    logger.warning(f"⚠️ Google Ads falló (Permisos/Token). Pasando a DataForSEO... Error: {e}")
                    # No detenemos el proceso, dejamos caer al siguiente bloque

            # =================================================================
            # 🟡 PASO 2: DATAFORSEO (Pago / Prioridad 2)
            # Solo si Cache y Google fallaron (o no hay credenciales)
            # =================================================================
            if not results:
                # Determinar costo según el modo elegido por el usuario
                required_budget = COST_DATABASE if mode == 'database' else COST_LIVE
                
                logger.info(f"💰 Verificando saldo para DataForSEO Mode: {mode.upper()} (Req: ${required_budget})...")
                
                # Usamos el nombre real que definiste en el modelo Project
                current_budget = project.authorized_monthly_budget if hasattr(project, 'authorized_monthly_budget') else Decimal('0.00')
                
                if current_budget >= required_budget:
                    try:
                        logger.info(f"🔄 [DataForSEO] Saldo OK. Ejecutando consulta...")
                        
                        # Fallback de ubicación si no hay mapeo exacto (USA por defecto)
                        target_loc = 2840 
                        
                        results = DataForSEOService.get_suggestions(
                            seed_keyword=seed, 
                            location_code=target_loc,
                            language_code=project.language_code,
                            mode=mode # <--- Pasamos 'live' o 'database'
                        )
                        
                        if results:
                            source_used = f"dataforseo_{mode}"
                            cost_incurred = required_budget
                            
                            # --- COBRO AUTOMÁTICO ---
                            nuevo_saldo = current_budget - cost_incurred
                            project.authorized_monthly_budget = nuevo_saldo
                            project.save()
                            logger.info(f"✅ Éxito DataForSEO. Costo descontado. Nuevo saldo: ${project.budget}")

                    except Exception as e:
                        logger.error(f"❌ Error DataForSEO: {e}")
                else:
                    logger.warning(f"⛔ SALDO INSUFICIENTE. Se requiere ${required_budget}, tienes ${current_budget}.")

            # =================================================================
            # 🔵 PASO 3: ALGORITMO LOCAL (Gratis / Fallback Final)
            # Si todo lo anterior falló o no hay dinero
            # =================================================================
            if not results:
                logger.info(f"💻 [Local] Generando variaciones sintácticas...")
                variants = CloseVariantsService.generate([seed])
                results = [{
                    'keyword': v, 'volume': 0, 'competition': 'UNKNOWN', 
                    'cpc_high': 0.0, 'source': 'Algoritmo Local'
                } for v in variants]
                source_used = "local_algorithm"

            # -------------------------------------------------------------
            # 💾 GUARDADO Y CIERRE
            # -------------------------------------------------------------
            
            # Guardamos los resultados en la base de datos (y alimentamos el Cache futuro)
            ideas_to_create = []
            for item in results:
                # Evitamos guardar duplicados exactos en el mismo Run si la API trae basura
                # (Opcional: podrías agregar validación extra aquí)
                
                ideas_to_create.append(KeywordIdea(
                    project=project,
                    run=run,
                    keyword=item['keyword'],
                    avg_monthly_searches=item.get('volume', 0),
                    competition_index=item.get('competition_index', 0),
                    competition_level=str(item.get('competition', 'UNKNOWN')),
                    cpc=item.get('cpc_high', 0)
                ))
            
            if ideas_to_create:
                KeywordIdea.objects.bulk_create(ideas_to_create)

            # Actualizamos el Run
            run.status = "SUCCESS"
            run.provider = source_used
            run.cost_units = cost_incurred
            run.outputs = {"count": len(ideas_to_create), "source": source_used}
            run.completed_at = timezone.now()
            run.save()

            return run

        except Exception as e:
            # Captura de errores fatales del sistema
            logger.error(f"🔥 Error Crítico en Orquestador: {traceback.format_exc()}")
            run.status = "FAILED"
            run.error_log = str(e)
            run.save()
            raise e