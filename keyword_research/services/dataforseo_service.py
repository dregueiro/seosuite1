import requests
import json
from base64 import b64encode
from django.conf import settings

class DataForSEOService:
    # Mapeo: ID numérico -> Código ISO (es, en, etc.)
    LANGUAGE_MAPPING = {
        1003: "es", 1000: "en", 1001: "de", 1002: "fr", 1004: "it", 1014: "pt"
    }

    @classmethod
    def get_suggestions(cls, seed_keyword, location_code=2840, language_code='es', **kwargs):
        login = settings.DATAFORSEO_LOGIN
        password = settings.DATAFORSEO_PASSWORD
        
        if not login or not password:
            print("❌ Error: Credenciales de DataForSEO no configuradas en .env")
            return []

        # 1. Autenticación Basic
        auth_string = b64encode(f"{login}:{password}".encode('utf-8')).decode('utf-8')
        headers = {
            'Authorization': f'Basic {auth_string}',
            'Content-Type': 'application/json'
        }

        # 2. Procesar Idioma
        try:
            # Intentamos convertir a int por si viene el ID (1003), si no usamos el string directo
            lang_id = int(language_code)
            target_lang = cls.LANGUAGE_MAPPING.get(lang_id, "es")
        except (ValueError, TypeError):
            target_lang = str(language_code)

        # 3. URL del endpoint LABS (Keyword Ideas Live)
        url = "https://api.dataforseo.com/v3/dataforseo_labs/google/keyword_ideas/live"
        
        # 4. Construir Payload (LABS espera una lista de objetos con "keywords" como array)
        payload = [{
            "keywords": [seed_keyword],
            "location_code": int(location_code),
            "language_code": target_lang,
            "include_serp_info": True,
            "limit": 100
        }]

        print(f"📡 [DataForSEO Labs] Consultando: '{seed_keyword}' (Loc: {location_code}, Lang: {target_lang})")

        try:
            response = requests.post(url, headers=headers, data=json.dumps(payload), timeout=20)
            
            if response.status_code == 200:
                data = response.json()
                
                # Estructura de respuesta de DataForSEO: tasks > result > 0 > items
                tasks = data.get('tasks', [])
                if not tasks:
                    return []
                
                result = tasks[0].get('result', [])
                if not result:
                    print("⚠️ La API no devolvió resultados para esta búsqueda.")
                    return []
                
                # En Labs, los resultados están en 'items' dentro del primer objeto de 'result'
                raw_items = result[0].get('items', [])
                
                clean_keywords = []
                for item in raw_items:
                    # Extraer información de keyword_info
                    info = item.get('keyword_info', {})
                    props = item.get('keyword_properties', {})
                    
                    clean_keywords.append({
                        'keyword': item.get('keyword'),
                        'volume': info.get('search_volume', 0),
                        'cpc': info.get('cpc', 0.0),
                        'kd': props.get('keyword_difficulty', 0), # Labs sí entrega dificultad real
                        'source': 'DataForSEO Labs'
                    })
                
                print(f"✅ [DataForSEO Labs] Éxito: {len(clean_keywords)} keywords obtenidas.")
                return clean_keywords
                
            else:
                # Si hay error, imprimimos el JSON de error de la API para debug
                print(f"⚠️ API Error: {response.status_code}")
                print(response.text)
                return []

        except Exception as e:
            print(f"❌ Error de conexión con DataForSEO: {str(e)}")
            return []