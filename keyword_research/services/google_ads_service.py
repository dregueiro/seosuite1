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

        # Manejo seguro del archivo temporal para credenciales
        try:
            with tempfile.NamedTemporaryFile(mode='w', delete=False, suffix='.json') as temp_json:
                json.dump(cred.service_account_json, temp_json)
                temp_json_path = temp_json.name
        except Exception as e:
            raise ValueError(f"Error creando archivo temporal de credenciales: {e}")

        config_dict = {
            "developer_token": settings.GOOGLE_ADS_DEVELOPER_TOKEN,
            "json_key_file_path": temp_json_path,
            "use_proto_plus": True,
        }

        # Customer ID opcional (login-customer-id)
        customer_id = str(project.google_ads_customer_id).replace("-", "") if project.google_ads_customer_id else None
        if customer_id:
            config_dict["login_customer_id"] = customer_id

        try:
            client = GoogleAdsClient.load_from_dict(config_dict)
            return client
        except Exception as e:
            # Importante: Borrar el archivo temporal incluso si falla la carga
            if os.path.exists(temp_json_path):
                os.unlink(temp_json_path)
            raise ValueError(f"Error cargando cliente de Google Ads: {str(e)}")
        
        # Nota: El archivo temporal queda "vivo" mientras se usa el cliente. 
        # Idealmente deberíamos limpiarlo, pero google-ads lo lee al instanciar servicios.
        # Una mejora futura sería usar un Context Manager.

    @classmethod
    def get_ideas(cls, project, seed_keyword, location_id=None, language_id=None):
        """
        Obtiene ideas de keywords.
        Args:
            location_id (str): ID numérico de Google (ej: '2724' para España).
            language_id (str): ID numérico de idioma (ej: '1003' para Español).
        """
        client = cls._get_client(project)
        if not client:
            return []

        # Customer ID del cliente final (quien hace la consulta)
        # Usamos el del proyecto o fallamos
        target_customer_id = str(project.google_ads_customer_id).replace("-", "")
        if not target_customer_id:
             raise ValueError("El proyecto no tiene configurado un Google Ads Customer ID.")

        keyword_plan_idea_service = client.get_service("KeywordPlanIdeaService")
        request = client.get_type("GenerateKeywordIdeasRequest")
        request.customer_id = target_customer_id

        # --- LÓGICA DE FILTROS DINÁMICOS ---
        
        # 1. Idioma: Si viene del form úsalo, si no, usa el del proyecto (convertido a ID de Google)
        # Nota: Tu modelo Project usa códigos ISO ('es'), Google usa IDs ('1003').
        # Asumiremos que el frontend envía IDs ('1003'). Si no, necesitamos un mapa de conversión.
        target_lang = language_id if language_id else '1003' # Default Español
        request.language = client.get_service("GoogleAdsService").language_constant_path(target_lang)

        # 2. Ubicación: ID numérico
        if location_id:
            request.geo_target_constants.append(
                client.get_service("GoogleAdsService").geo_target_constant_path(location_id)
            )
        # Si no hay ubicación específica, Google busca globalmente (o usa el país del proyecto si tienes el mapa ISO->ID)

        # 3. Keywords
        request.keyword_seed.keywords.append(seed_keyword)
        request.keyword_plan_network = client.enums.KeywordPlanNetworkEnum.GOOGLE_SEARCH

        try:
            print(f"📡 [GoogleAds] Consultando '{seed_keyword}' (Loc: {location_id}, Lang: {target_lang})")
            response = keyword_plan_idea_service.generate_keyword_ideas(request=request)
            
            ideas = []
            for result in response:
                metrics = result.keyword_idea_metrics
                ideas.append({
                    'keyword': result.text,
                    'volume': metrics.avg_monthly_searches,
                    'competition': metrics.competition.name, # HIGH, MEDIUM, LOW
                    'competition_index': metrics.competition_index, # 0-100
                    'cpc_low': (metrics.low_top_of_page_bid_micros or 0) / 1_000_000,
                    'cpc_high': (metrics.high_top_of_page_bid_micros or 0) / 1_000_000,
                    'source': 'Google Ads API'
                })
            return ideas

        except Exception as e:
            print(f"❌ Error Google Ads API: {e}")
            raise e # Relanzamos para que el Orquestador lo capture