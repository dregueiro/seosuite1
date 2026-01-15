import os
import json
import tempfile
from google.ads.googleads.client import GoogleAdsClient
from django.conf import settings

class GoogleAdsService:


    @classmethod
    def _get_client(cls, project):
        cred = project.google_credential
        if not cred:
            raise ValueError("No hay credenciales configuradas.")

        # 1. Creamos un archivo temporal para el JSON de la Service Account
        # La librería de Ads prefiere leer una ruta de archivo real.
        with tempfile.NamedTemporaryFile(mode='w', delete=False, suffix='.json') as temp_json:
            json.dump(cred.service_account_json, temp_json)
            temp_json_path = temp_json.name

        # 2. Configuramos el diccionario con la RUTA al archivo temporal
        config_dict = {
            "developer_token": settings.GOOGLE_ADS_DEVELOPER_TOKEN,
            "json_key_file_path": temp_json_path, # <--- Usamos PATH en lugar de DATA
            "use_proto_plus": True,
        }

        # login_customer_id es opcional
        customer_id = str(project.google_ads_customer_id).replace("-", "")
        if customer_id:
            config_dict["login_customer_id"] = customer_id

        try:
            # 3. Cargamos el cliente
            client = GoogleAdsClient.load_from_dict(config_dict)
            return client
        except Exception as e:
            raise ValueError(f"Error crítico en configuración de Ads: {str(e)}")
        finally:
            # 4. Limpieza: Intentamos borrar el archivo temporal después de cargar el cliente
            try:
                if os.path.exists(temp_json_path):
                    os.remove(temp_json_path)
            except:
                pass
            

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