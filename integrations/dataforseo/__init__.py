import requests
import os
from requests.auth import HTTPBasicAuth

class DataForSeoClient:
    """
    Adaptador para DataForSEO (Pago $$).
    """
    BASE_URL = "https://api.dataforseo.com/v3/serp/google/organic/live/advanced"

    @classmethod
    def fetch_serp(cls, keyword: str, country_code: str = 'es') -> dict:
        login = os.getenv('DATAFORSEO_LOGIN')
        password = os.getenv('DATAFORSEO_PASSWORD')
        
        # Estructura de payload específica de DataForSEO
        post_data = [{
            "keyword": keyword,
            "location_code": 2840, # España por defecto, luego lo haremos dinámico
            "language_code": "es",
            "device": "desktop"
        }]

        try:
            response = requests.post(
                cls.BASE_URL, 
                auth=HTTPBasicAuth(login, password), 
                json=post_data, 
                timeout=20
            )
            response.raise_for_status()
            data = response.json()

            # Mapeo al formato canónico de SEOSuite
            result = data.get('tasks', [{}])[0].get('result', [{}])[0]
            items = result.get('items', [])
            
            return {
                "organic_results": items,
                "total_count": result.get('items_count', 0),
                "serp_features": {}, # DataForSEO los entrega distinto, lo mapearemos luego
                "raw_json": data
            }
        except Exception as e:
            print(f"❌ Error técnico en DataForSEO: {e}")
            raise e