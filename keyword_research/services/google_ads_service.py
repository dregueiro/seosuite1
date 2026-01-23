import os
import json
import tempfile
from django.conf import settings

from google.ads.googleads.client import GoogleAdsClient


class GoogleAdsService:
    @classmethod
    def _get_client(cls, project):
        cred = project.google_credential
        if not cred:
            raise ValueError("No hay credenciales configuradas.")

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

        customer_id = str(project.google_ads_customer_id).replace("-", "") if project.google_ads_customer_id else None
        if customer_id:
            config_dict["login_customer_id"] = customer_id

        try:
            client = GoogleAdsClient.load_from_dict(config_dict)
            return client
        except Exception as e:
            if os.path.exists(temp_json_path):
                os.unlink(temp_json_path)
            raise ValueError(f"Error cargando cliente de Google Ads: {str(e)}")

    @classmethod
    def get_ideas(cls, project, seed_keyword, location_id=None, language_id=None):
        client = cls._get_client(project)
        target_customer_id = str(project.google_ads_customer_id).replace("-", "")
        
        keyword_plan_idea_service = client.get_service("KeywordPlanIdeaService")
        request = client.get_type("GenerateKeywordIdeasRequest")
        request.customer_id = target_customer_id

        target_lang = language_id if language_id else '1003' 
        request.language = client.get_service("GoogleAdsService").language_constant_path(target_lang)

        if location_id:
            request.geo_target_constants.append(
                client.get_service("GoogleAdsService").geo_target_constant_path(location_id)
            )

        request.keyword_seed.keywords.append(seed_keyword)
        request.keyword_plan_network = client.enums.KeywordPlanNetworkEnum.GOOGLE_SEARCH

        try:
            response = keyword_plan_idea_service.generate_keyword_ideas(request=request)
            ideas = []
            for result in response:
                metrics = result.keyword_idea_metrics
                ideas.append({
                    'keyword': result.text,
                    'volume': metrics.avg_monthly_searches,
                    'competition': metrics.competition.name,
                    'competition_index': metrics.competition_index,
                    'cpc_low': (metrics.low_top_of_page_bid_micros or 0) / 1_000_000,
                    'cpc_high': (metrics.high_top_of_page_bid_micros or 0) / 1_000_000,
                    'source': 'Google Ads API'
                })
            return ideas
        except Exception as e:
            raise e

