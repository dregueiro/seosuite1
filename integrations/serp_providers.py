import requests
import os

class SerpProviderAdapter:
    @staticmethod
    def fetch_serpapi(keyword, country_code):
        # Simulación de llamada a SerpAPI
        # api_key = os.getenv('SERPAPI_KEY')
        return {
            "organic_results": [{"position": 1, "link": "https://tuweb.com"}], # Ejemplo
            "serp_features": {"images": True, "maps": False},
            "total_count": 100
        }

    @staticmethod
    def fetch_dataforseo(keyword, country_code):
        # Simulación de llamada a DataForSEO
        return {
            "items": [{"rank_group": 1, "url": "https://tuweb.com"}], # Ejemplo
            "metrics": {"total_count": 95},
            "features_count": 3
        }