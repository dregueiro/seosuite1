import requests
from django.conf import settings
from base64 import b64encode

class GeoLocationService:
    @classmethod
    def search_locations(cls, query, country_code='ES'):
        login = settings.DATAFORSEO_LOGIN
        password = settings.DATAFORSEO_PASSWORD
        auth = b64encode(f"{login}:{password}".encode()).decode()
        
        url = "https://api.dataforseo.com/v3/keywords_data/google/locations"
        
        # Filtramos por nombre y país para ser precisos
        payload = [{
            "location_name": query,
            "country_code": country_code
        }]
        
        headers = {'Authorization': f'Basic {auth}', 'Content-Type': 'application/json'}
        
        try:
            response = requests.get(url, headers=headers, params={"location_name": query})
            if response.status_code == 200:
                results = response.json().get('tasks', [{}])[0].get('result', [])
                return [{
                    'id': r['location_code'],
                    'name': r['location_name'],
                    'parent': r['location_name_parent'],
                    'reach': r.get('reach', 'N/A') # Población/Alcance
                } for r in results[:5]]
            return []
        except:
            return []