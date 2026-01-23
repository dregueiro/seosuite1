#integrations/dataforseo/client.py
import requests
import os
from requests.auth import HTTPBasicAuth
# Importación diferida para evitar ciclos
# from keyword_research.models import GoogleAdsLocation, GoogleAdsLanguage
# integrations/dataforseo/client.py


class DataForSeoClient:
    BASE_URL = "https://api.dataforseo.com/v3/serp/google/organic/live/advanced"

    @classmethod
    def fetch_serp(cls, keyword: str, country_code: str = 'es', language_code: str = 'es') -> dict:
        from keyword_research.models import GoogleAdsLocation, GoogleAdsLanguage
        
        login = os.getenv('DATAFORSEO_LOGIN')
        password = os.getenv('DATAFORSEO_PASSWORD')
        
        # FIX PEPE: El campo en el modelo es 'code', no 'language_code'
        loc = GoogleAdsLocation.objects.filter(country_code=country_code.upper(), target_type='Country').first()
        lng = GoogleAdsLanguage.objects.filter(code=language_code.lower()).first()

        # DataForSEO usa location_code (ID numérico) y language_name (Texto)
        location_id = loc.criteria_id if loc else 2840 # Default USA
        language_name = lng.name if lng else "Spanish"

        post_data = [{
            "keyword": keyword,
            "location_code": location_id,
            "language_name": language_name, # DataForSEO usa nombre o código
            "device": "desktop",
            "os": "windows"
        }]

        try:
            response = requests.post(
                cls.BASE_URL, 
                auth=HTTPBasicAuth(login, password), 
                json=post_data, 
                timeout=20
            )
            data = response.json()
            # ... (Misma lógica de parseo de items_count que antes)
            result = data.get('tasks', [{}])[0].get('result', [{}])[0]
            items = result.get('items', [])
            return {
                "organic_results": items,
                "total_count": len(items),
                "raw_json": data
            }
        except Exception as e:
            return {"total_count": 0, "organic_results": [], "raw_json": {"error": str(e)}}