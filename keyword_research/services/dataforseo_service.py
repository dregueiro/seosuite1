import requests
import json
from base64 import b64encode
from django.conf import settings
from django.core.exceptions import ObjectDoesNotExist

# IMPORTANTE: Importamos tus modelos para la traducción
from keyword_research.models import GoogleAdsLocation, GoogleAdsLanguage

class DataForSEOService:
    
    @classmethod
    def get_suggestions(cls, seed_keyword, location_code='US', language_code='en', **kwargs):
        """
        Obtiene sugerencias de keywords.
        - location_code: Puede ser ID (2840) o ISO ('US') -> El servicio lo traduce.
        - language_code: Puede ser ID (1000) o ISO ('en').
        """
        login = settings.DATAFORSEO_LOGIN
        password = settings.DATAFORSEO_PASSWORD
        
        if not login or not password:
            print("❌ Error: Credenciales de DataForSEO no configuradas en .env")
            return []

        # ======================================================
        # 1. TRADUCCIÓN DE UBICACIÓN (Magia de Pepe)
        # ======================================================
        target_location_id = None
        
        # Si ya viene como entero, asumimos que es el ID correcto
        if isinstance(location_code, int) or (isinstance(location_code, str) and location_code.isdigit()):
            target_location_id = int(location_code)
        else:
            # Si es texto (ej: "US", "ES"), buscamos el ID en la base de datos
            try:
                # Buscamos primero por country_code y type='Country' para evitar ciudades con siglas raras
                loc = GoogleAdsLocation.objects.filter(
                    country_code__iexact=str(location_code), # iexact ignora mayúsculas/minúsculas
                    target_type='Country'
                ).first()
                
                if loc:
                    target_location_id = loc.criterion_id
                else:
                    # Intento desesperado: buscar sin filtro de Country
                    loc_fallback = GoogleAdsLocation.objects.filter(country_code__iexact=str(location_code)).first()
                    if loc_fallback:
                        target_location_id = loc_fallback.criterion_id
            except Exception as e:
                print(f"⚠️ Error buscando location '{location_code}': {e}")

        # Si falló la traducción, usamos USA (2840) por defecto para no romper la app
        if not target_location_id:
            print(f"⚠️ No se pudo traducir la ubicación '{location_code}'. Usando default: 2840 (USA)")
            target_location_id = 2840

        # ======================================================
        # 2. PROCESAMIENTO DE IDIOMA
        # ======================================================
        # DataForSEO acepta ISO codes ('es', 'en'), así que pasamos el string.
        # Si quisieras enviar ID, aquí harías una búsqueda similar a la de Location.
        target_lang = str(language_code).lower() # Aseguramos minúsculas ('ES' -> 'es')

        # ======================================================
        # 3. CONEXIÓN API
        # ======================================================
        auth_string = b64encode(f"{login}:{password}".encode('utf-8')).decode('utf-8')
        headers = {
            'Authorization': f'Basic {auth_string}',
            'Content-Type': 'application/json'
        }

        url = "https://api.dataforseo.com/v3/dataforseo_labs/google/keyword_ideas/live"
        
        payload = [{
            "keywords": [seed_keyword],
            "location_code": target_location_id, # Enviamos el ID numérico (ej: 2840)
            "language_code": target_lang,        # Enviamos el ISO (ej: 'es')
            "include_serp_info": True,
            "limit": 100
        }]

        print(f"📡 [DataForSEO] '{seed_keyword}' | LocID: {target_location_id} | Lang: {target_lang}")

        try:
            response = requests.post(url, headers=headers, data=json.dumps(payload), timeout=20)
            
            if response.status_code == 200:
                data = response.json()
                tasks = data.get('tasks', [])
                
                if not tasks or not tasks[0].get('result'):
                    print("⚠️ API OK pero sin resultados.")
                    return []
                
                # Extraemos los items
                raw_items = tasks[0]['result'][0].get('items', [])
                clean_keywords = []

                for item in raw_items:
                    info = item.get('keyword_info', {})
                    props = item.get('keyword_properties', {})
                    
                    clean_keywords.append({
                        'keyword': item.get('keyword'),
                        'volume': info.get('search_volume', 0),
                        'cpc': info.get('cpc', 0.0),
                        'kd': props.get('keyword_difficulty', 0),
                        'competition': info.get('competition_level', 'UNKNOWN'),
                        'source': 'DataForSEO'
                    })
                
                print(f"✅ Éxito: {len(clean_keywords)} keywords encontradas.")
                return clean_keywords
                
            else:
                print(f"⚠️ API Error {response.status_code}: {response.text}")
                return []

        except Exception as e:
            print(f"❌ Excepción crítica en DataForSEO: {str(e)}")
            return []