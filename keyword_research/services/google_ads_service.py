import os
from google.ads.googleads.client import GoogleAdsClient
from django.conf import settings

class GoogleAdsService:
    @classmethod
    def _get_client(cls, project):
        """
        Construye el cliente de Google Ads usando la credencial vinculada al proyecto.
        """
        cred = project.google_credential
        if not cred:
            return None

        # Estructura de configuración requerida por la librería oficial
        google_ads_config = {
            "developer_token": settings.GOOGLE_ADS_DEVELOPER_TOKEN,
            "client_id": cred.client_id,
            "client_secret": cred.client_secret,
            "refresh_token": cred.refresh_token,
            "use_proto_plus": True,
        }
        
        return GoogleAdsClient.load_from_dict(google_ads_config)

    @classmethod
    def get_ideas(cls, project, seed_keyword):
        client = cls._get_client(project)
        if not client:
            return []

        # Eliminamos guiones del Customer ID para la API
        customer_id = project.google_ads_customer_id.replace("-", "")
        keyword_plan_idea_service = client.get_service("KeywordPlanIdeaService")
        
        # Configuramos la petición
        request = client.get_type("GenerateKeywordIdeasRequest")
        request.customer_id = customer_id
        request.language = client.get_service("GoogleAdsService").language_constant_path(project.language_code) # Ej: 1000 para 'es'
        request.geo_target_constants.append(client.get_service("GoogleAdsService").geo_target_constant_path(project.target_country_code)) 
        request.keyword_seed.keywords.append(seed_keyword)

        try:
            # Llamada a la API de Google
            response = keyword_plan_idea_service.generate_keyword_ideas(request=request)
            
            ideas = []
            for result in response:
                ideas.append({
                    'keyword': result.text,
                    'volume': result.keyword_idea_metrics.avg_monthly_searches,
                    'cpc': result.keyword_idea_metrics.low_avg_cpc_micros / 1000000 if result.keyword_idea_metrics.low_avg_cpc_micros else 0,
                    'source': 'Google Ads API'
                })
            return ideas
        except Exception as e:
            print(f"❌ Error Google Ads API: {e}")
            return []