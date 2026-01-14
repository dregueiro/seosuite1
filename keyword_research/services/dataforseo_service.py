import requests
import json
from base64 import b64encode
from django.conf import settings

class DataForSEOService:
    @classmethod
    def get_suggestions(cls, seed_keyword, location_code=2724, language_code='es'):
        login = settings.DATAFORSEO_LOGIN
        password = settings.DATAFORSEO_PASSWORD
        
        if not login or not password:
            print("❌ Error: Credenciales de DataForSEO no configuradas en .env")
            return []

        # Autenticación
        auth_string = b64encode(f"{login}:{password}".encode('utf-8')).decode('utf-8')
        headers = {
            'Authorization': f'Basic {auth_string}',
            'Content-Type': 'application/json'
        }

        url = "https://api.dataforseo.com/v3/keywords_data/google/keyword_ideas/live"
        
        # Corregido: seed_keyword en lugar de keyword
        payload = [{
            "keywords": [seed_keyword],
            "location_code": location_code, 
            "language_code": language_code,
            "search_partners": False
        }]

        try:
            # Quitamos el mock y hacemos la petición real
            response = requests.post(url, headers=headers, data=json.dumps(payload), timeout=15)
            
            if response.status_code == 200:
                data = response.json()
                
                # DataForSEO entrega los resultados en: tasks > 0 > result
                raw_results = data.get('tasks', [{}])[0].get('result', [])
                
                # Limpiamos los datos para nuestra interfaz
                clean_keywords = []
                for item in raw_results:
                    clean_keywords.append({
                        'keyword': item.get('keyword'),
                        'volume': item.get('keyword_info', {}).get('search_volume', 0),
                        'cpc': item.get('keyword_info', {}).get('cpc', 0.0),
                        'kd': item.get('keyword_properties', {}).get('keyword_difficulty', 30), # Valor por defecto si no hay
                        'source': 'DataForSEO'
                    })
                return clean_keywords
                
            else:
                print(f"⚠️ API Error: {response.status_code} - {response.text}")
                return []

        except Exception as e:
            print(f"❌ Error de conexión: {str(e)}")
            return []