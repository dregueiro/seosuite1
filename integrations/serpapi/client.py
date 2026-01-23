#integrations/serpapi/client.py

import os
import requests
from django.conf import settings

class SerpApiClient:
    BASE_URL = "https://serpapi.com/search"

    @classmethod
    def fetch_serp(cls, keyword: str, country_code: str = 'es', language_code: str = 'es', device: str = 'desktop') -> dict:
        api_key = os.getenv('SERPAPI_KEY')
        
        params = {
            "engine": "google",
            "q": keyword,
            "gl": country_code.lower(),
            "hl": language_code.lower(), # Idioma para Google
            "device": device,
            "api_key": api_key
        }

        try:
            response = requests.get(cls.BASE_URL, params=params, timeout=30)
            response.raise_for_status()
            data = response.json()
            organic = data.get("organic_results", [])

            return {
                "organic_results": organic,
                "total_count": len(organic),
                "raw_json": data
            }
        except Exception as e:
            return {"total_count": 0, "organic_results": [], "raw_json": {"error": str(e)}}