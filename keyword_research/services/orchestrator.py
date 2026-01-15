import logging
from .google_ads_service import GoogleAdsService
from .dataforseo_service import DataForSEOService
from .close_variants import CloseVariantsService

# Configuramos un logger para tener trazabilidad de qué fuente se usó
logger = logging.getLogger(__name__)

class KeywordDiscoveryService:
    """
    Orquestador inteligente de fuentes de datos.
    Sigue la jerarquía: Google Ads API -> DataForSEO -> Local Algorithm.
    """
    
    @classmethod
    def get_ideas(cls, project, seed_keyword, location_code=None, country_code=None, language_code=None):
    # Lógica para usar el código de localización del mapa o el país por defecto
        target_location = location_code or country_code or 2724
        results = []

        # --- 1. INTENTO CON GOOGLE ADS API (Prioridad 1: Gratis/Oficial) ---
        # Verificamos si el proyecto tiene la configuración necesaria
        if project.google_ads_customer_id and project.google_credential:
            try:
                logger.info(f"Intentando obtener ideas de Google Ads API para: {seed_keyword}")
                results = GoogleAdsService.get_ideas(project, seed_keyword)
                
                if results:
                    logger.info(f"✅ Éxito con Google Ads: {len(results)} ideas encontradas.")
                    return results
            except Exception as e:
                logger.warning(f"⚠️ Google Ads API falló o no tiene acceso: {e}")

        # --- 2. INTENTO CON DATAFORSEO (Prioridad 2: Motor de Reserva) ---
        try:
            logger.info(f"Intentando con DataForSEO como reserva para: {seed_keyword}")
            
            # Mapeamos los datos del proyecto (ES, es, etc.) a los códigos de DataForSEO
            # Por ahora usamos el 2724 (España) como fallback
            location_code = 2724 
            
            results = DataForSEOService.get_suggestions(
                seed_keyword=seed_keyword, 
                location_code=location_code,
                language_code=project.language_code
            )
            
            if results:
                logger.info(f"✅ Éxito con DataForSEO: {len(results)} ideas encontradas.")
                return results
        except Exception as e:
            logger.error(f"❌ Error crítico en DataForSEO: {e}")

        # --- 3. FALLBACK: ALGORITMO LOCAL (Prioridad 3: Costo $0 - Variaciones) ---
        logger.info(f"Generando variaciones locales (Costo $0) para: {seed_keyword}")
        
        # El algoritmo de CloseVariants devuelve una lista de strings o dicts
        # Lo envolvemos para que mantenga el formato de la tabla
        local_variants = CloseVariantsService.generate([seed_keyword])
        
        formatted_results = []
        for variant in local_variants:
            formatted_results.append({
                'keyword': variant,
                'volume': 0,
                'cpc': 0.00,
                'kd': 0,
                'source': 'Algoritmo Local'
            })
            
        return formatted_results