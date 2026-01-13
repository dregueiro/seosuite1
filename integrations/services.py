from google.oauth2 import service_account
from googleapiclient.discovery import build



def force_indexing_url(project, url_to_index):
    """
    Envía una URL a la Google Indexing API para forzar el rastreo inmediato.
    """
    try:
        # Usamos las mismas credenciales que ya configuramos
        creds = service_account.Credentials.from_service_account_info(
            project.google_credential.service_account_json,
            scopes=['https://www.googleapis.com/auth/indexing']
        )
        # Endpoint específico de la Indexing API
        endpoint = "https://indexing.googleapis.com/v3/urlNotifications:publish"
        
        # Construimos la petición
        data = {
            "url": url_to_index,
            "type": "URL_UPDATED"
        }
        
        import google.auth.transport.requests
        import requests
        
        # Firmar la petición con las credenciales
        auth_req = google.auth.transport.requests.Request()
        creds.refresh(auth_req)
        headers = {
            'Content-Type': 'application/json',
            'Authorization': f'Bearer {creds.token}'
        }
        
        response = requests.post(endpoint, json=data, headers=headers)
        
        if response.status_code == 200:
            return True, "Solicitud enviada. Googlebot visitará la página pronto."
        else:
            return False, f"Google respondió con error {response.status_code}: {response.text}"
            
    except Exception as e:
        return False, str(e)

# 1. Las importaciones condicionales SIEMPRE van arriba del todo
try:
    from google.analytics.data_v1beta import BetaAnalyticsDataClient
    GA4_AVAILABLE = True
except ImportError:
    GA4_AVAILABLE = False

def test_gsc_access(project):
    """
    Verifica acceso a Google Search Console.
    """
    if not project.google_credential or not project.gsc_property_url:
        return False, "Faltan credenciales o URL de GSC."

    try:
        scopes = ['https://www.googleapis.com/auth/webmasters.readonly']
        creds = service_account.Credentials.from_service_account_info(
            project.google_credential.service_account_json, 
            scopes=scopes
        )
        
        service = build('searchconsole', 'v1', credentials=creds)
        site_list = service.sites().list().execute()
        
        authorized_sites = [s['siteUrl'] for s in site_list.get('siteEntry', [])]
        
        if project.gsc_property_url in authorized_sites:
            return True, "Conexión exitosa con GSC."
        else:
            return False, f"La SA tiene acceso, pero no encuentra la propiedad: {project.gsc_property_url}"
    except Exception as e:
        return False, f"Error de autenticación GSC: {str(e)}"


def test_ga4_access(project):
    """
    Verifica acceso a Google Analytics 4.
    """
    if not GA4_AVAILABLE:
        return False, "Librería de Google Analytics no instalada"
    
    if not project.google_credential or not project.ga4_property_id:
        return False, "Faltan credenciales o Property ID de GA4."

    try:
        creds = service_account.Credentials.from_service_account_info(
            project.google_credential.service_account_json
        )
        client = BetaAnalyticsDataClient(credentials=creds)
        
        property_path = f"properties/{project.ga4_property_id}"
        client.get_metadata(name=f"{property_path}/metadata")
        
        return True, "Conexión exitosa con GA4."
        
    except Exception as e:
        return False, f"Error GA4: {str(e)}"
    

def inspect_url_status(project, url_to_inspect):
    """
    Llama a la API de Google para saber el estado real de una URL.
    """
    try:
        creds = service_account.Credentials.from_service_account_info(
            project.google_credential.service_account_json,
            scopes=['https://www.googleapis.com/auth/webmasters.readonly']
        )
        service = build('searchconsole', 'v1', credentials=creds)
        
        request = {
            'inspectionUrl': url_to_inspect,
            'siteUrl': project.gsc_property_url,
        }
        
        response = service.urlInspection().index().inspect(body=request).execute()
        result = response.get('inspectionResult', {})
        index_status = result.get('indexStatusResult', {})
        
        return {
            'verdict': index_status.get('verdict'), # "GOOD", "NEUTRAL", "BAD"
            'coverage': index_status.get('coverageState'), # Ej: "Sometida e indexada"
            'last_crawl': index_status.get('lastCrawlTime')
        }
    except Exception as e:
        return {'error': str(e)}