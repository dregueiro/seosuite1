import logging
import traceback
from decimal import Decimal
from django.utils import timezone
from datetime import timedelta
from django.db.models import Q

# Modelos
from core.models import Run
from keyword_research.models import KeywordIdea, KeywordIdeaRun
from projects.models import Project

# Servicios
from .google_ads_service import GoogleAdsService
from .dataforseo_service import DataForSEOService
from .close_variants import CloseVariantsService

logger = logging.getLogger(__name__)

# --- LISTA DE PRECIOS DATAFORSEO ---
COST_LIVE = Decimal('0.08')      
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

        # ---------------------------------------------------------------
        # 2. Crear Run (USANDO TU ARQUITECTURA CORE COMPLETA)
        # ---------------------------------------------------------------
        # Usamos KeywordIdeaRun para satisfacer la FK, pero llenamos los campos del Core (Run)
        run = KeywordIdeaRun.objects.create(
            project=project,
            user=user, 
            client=project.client,          # Restaurado (Core)
            provider="smart_orchestrator",  # Restaurado (Core)
            kind="keyword_discovery",       # Restaurado (Core)
            status="PENDING",               # Restaurado (Core)
            # Restauramos el JSONField de inputs completo
            inputs={
                "seed": seed, 
                "language": language_id, 
                "location": location_id,
                "mode": mode
            },
            # Campos específicos de KeywordIdeaRun (si los tienes duplicados o herencia)
            seed_keyword=seed, 
            language_code=language_id, 
            country_code=location_id
        )

        results = []
        source_used = "Unknown"
        cost_incurred = Decimal('0.00')

        try:
            # =================================================================
            # 💎 PASO 0: INTELIGENCIA INTERNA (CACHE) - Costo $0
            # =================================================================
            thirty_days_ago = timezone.now() - timedelta(days=30)
            
            # Filtramos usando la fecha del Run padre
            cached_keywords = KeywordIdea.objects.filter(
                keyword__icontains=seed,
                run__created_at__gte=thirty_days_ago
            ).order_by('-search_volume')[:500]

            if cached_keywords.exists() and len(cached_keywords) > 10:
                logger.info(f"💎 [CACHE] ¡Datos encontrados en casa!")
                results = []
                for kw in cached_keywords:
                    results.append({
                        'keyword': kw.keyword,
                        'volume': kw.search_volume, # Usamos el campo nuevo
                        'competition': kw.competition,
                        'cpc_high': kw.cpc,
                        'source': 'Base de Datos Propia (Cache)'
                    })
                source_used = "internal_cache"

            # =================================================================
            # 🟢 PASO 1: GOOGLE ADS (Gratis)
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
                    logger.warning(f"⚠️ Google Ads falló. Pasando a DataForSEO... Error: {e}")

            # =================================================================
            # 🟡 PASO 2: DATAFORSEO (Pago)
            # =================================================================
            if not results:
                required_budget = COST_DATABASE if mode == 'database' else COST_LIVE
                current_budget = project.authorized_monthly_budget if hasattr(project, 'authorized_monthly_budget') else Decimal('0.00')
                
                if current_budget >= required_budget:
                    try:
                        target_loc = location_id if location_id else 2840 
                        
                        results = DataForSEOService.get_suggestions(
                            seed_keyword=seed, 
                            location_code=target_loc,
                            language_code=project.language_code,
                            mode=mode
                        )
                        
                        if results:
                            source_used = f"dataforseo_{mode}"
                            cost_incurred = required_budget
                            
                            # Cobro
                            project.authorized_monthly_budget = current_budget - cost_incurred
                            project.save()
                            logger.info(f"✅ Éxito DataForSEO. Costo descontado.")

                    except Exception as e:
                        logger.error(f"❌ Error DataForSEO: {e}")
                else:
                    logger.warning(f"⛔ SALDO INSUFICIENTE.")

            # =================================================================
            # 🔵 PASO 3: ALGORITMO LOCAL (Fallback)
            # =================================================================
            if not results:
                logger.info(f"💻 [Local] Generando variaciones...")
                variants = CloseVariantsService.generate([seed])
                results = [{
                    'keyword': v, 'volume': 0, 'competition': 0, 
                    'cpc_high': 0.0, 'source': 'Algoritmo Local'
                } for v in variants]
                source_used = "local_algorithm"

            # -------------------------------------------------------------
            # 💾 GUARDADO 
            # -------------------------------------------------------------
            ideas_to_create = []
            for item in results:
                
                # Validación segura de competencia
                comp_val = item.get('competition', 0)
                if comp_val == 'UNKNOWN' or not isinstance(comp_val, (int, float)):
                    comp_val = 0.5
                
                ideas_to_create.append(KeywordIdea(
                    run=run, # FK al hijo (KeywordIdeaRun)
                    keyword=item['keyword'],
                    # IMPORTANTE: Aquí sí usamos los nombres nuevos porque la tabla KeywordIdea cambió
                    search_volume=item.get('volume', 0),    
                    competition=float(comp_val), 
                    cpc=item.get('cpc_high', 0),
                    raw_data={'source': item.get('source')} 
                ))
            
            if ideas_to_create:
                KeywordIdea.objects.bulk_create(ideas_to_create)

            # Actualizamos el Run (Campos del Core)
            run.status = "SUCCESS"
            run.provider = source_used # Campo del Core
            run.cost_units = cost_incurred # Campo del Core
            run.outputs = {"count": len(ideas_to_create), "source": source_used} # Campo del Core
            run.completed_at = timezone.now() # Campo del Core
            run.save()

            return run

        except Exception as e:
            logger.error(f"🔥 Error Crítico en Orquestador: {traceback.format_exc()}")
            # Campos del Core para manejo de errores
            run.status = "FAILED"
            run.error_log = str(e) # Campo del Core
            run.save()
            raise e