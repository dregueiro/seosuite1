import google.auth
import google.auth.transport.requests
import requests
from google.oauth2 import service_account
from googleapiclient.discovery import build

# Importación segura de GA4
try:
    from google.analytics.data_v1beta import BetaAnalyticsDataClient
    GA4_AVAILABLE = True
except ImportError:
    GA4_AVAILABLE = False

class GoogleAuthService:
    @staticmethod
    def get_credentials(credential_obj, scopes):
        return service_account.Credentials.from_service_account_info(
            credential_obj.service_account_json,
            scopes=scopes
        )

    @classmethod
    def test_gsc_access(cls, project):
        if not project.google_credential or not project.gsc_property_url:
            return False, "Faltan credenciales o URL de GSC."
        try:
            scopes = ['https://www.googleapis.com/auth/webmasters.readonly']
            creds = cls.get_credentials(project.google_credential, scopes)
            service = build('searchconsole', 'v1', credentials=creds)
            site_list = service.sites().list().execute()
            authorized_sites = [s['siteUrl'] for s in site_list.get('siteEntry', [])]
            
            if project.gsc_property_url in authorized_sites:
                return True, "Conexión exitosa con GSC."
            return False, f"Propiedad no encontrada: {project.gsc_property_url}"
        except Exception as e:
            return False, f"Error GSC: {str(e)}"

    @classmethod
    def test_ga4_access(cls, project):
        if not GA4_AVAILABLE: return False, "Librería GA4 no instalada."
        if not project.google_credential or not project.ga4_property_id:
            return False, "Faltan datos de GA4."
        try:
            creds = cls.get_credentials(project.google_credential, None)
            client = BetaAnalyticsDataClient(credentials=creds)
            property_path = f"properties/{project.ga4_property_id}"
            client.get_metadata(name=f"{property_path}/metadata")
            return True, "Conexión exitosa con GA4."
        except Exception as e:
            return False, f"Error GA4: {str(e)}"

    @classmethod
    def force_indexing_url(cls, project, url_to_index):
        # ... (Tu código de indexing que pasaste arriba, pero usando cls.get_credentials) ...
        try:
            scopes = ['https://www.googleapis.com/auth/indexing']
            creds = cls.get_credentials(project.google_credential, scopes)
            endpoint = "https://indexing.googleapis.com/v3/urlNotifications:publish"
            auth_req = google.auth.transport.requests.Request()
            creds.refresh(auth_req)
            headers = {'Content-Type': 'application/json', 'Authorization': f'Bearer {creds.token}'}
            data = {"url": url_to_index, "type": "URL_UPDATED"}
            response = requests.post(endpoint, json=data, headers=headers)
            return (True, "OK") if response.status_code == 200 else (False, response.text)
        except Exception as e:
            return False, str(e)
    
    @classmethod
    def inspect_url_status(cls, project, url_to_inspect):
        """Llama a la API de GSC para saber el estado real de una URL."""
        try:
            scopes = ['https://www.googleapis.com/auth/webmasters.readonly']
            creds = cls.get_credentials(project.google_credential, scopes)
            service = build('searchconsole', 'v1', credentials=creds)
            
            request = {
                'inspectionUrl': url_to_inspect,
                'siteUrl': project.gsc_property_url,
            }
            
            response = service.urlInspection().index().inspect(body=request).execute()
            result = response.get('inspectionResult', {})
            index_status = result.get('indexStatusResult', {})
            
            return {
                'verdict': index_status.get('verdict'),
                'coverage': index_status.get('coverageState'),
                'last_crawl': index_status.get('lastCrawlTime')
            }
        except Exception as e:
            return {'error': str(e)}