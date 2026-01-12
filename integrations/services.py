# integrations/services.py
from google.oauth2 import service_account
from googleapiclient.discovery import build
from google.analytics.data_v1beta import BetaAnalyticsDataClient

def test_gsc_access(project):
    """
    Verifica si la credencial del proyecto tiene acceso a la propiedad de Search Console.
    Costo: $0.
    """
    if not project.google_credential or not project.gsc_property_url:
        return False, "Faltan credenciales o URL de GSC."

    try:
        # 1. Construir credenciales desde el JSON de la DB
        scopes = ['https://www.googleapis.com/auth/webmasters.readonly']
        creds = service_account.Credentials.from_service_account_info(
            project.google_credential.service_account_json, 
            scopes=scopes
        )
        
        # 2. Llamar a la API (simplemente listar sitios para validar)
        service = build('searchconsole', 'v1', credentials=creds)
        site_list = service.sites().list().execute()
        
        # 3. Comprobar si nuestra URL está en la lista de sitios autorizados
        authorized_sites = [s['siteUrl'] for s in site_list.get('siteEntry', [])]
        
        if project.gsc_property_url in authorized_sites:
            return True, "Conexión exitosa con GSC."
        else:
            return False, f"La SA tiene acceso, pero no encuentra la propiedad: {project.gsc_property_url}"
            
    except Exception as e:
        return False, f"Error de autenticación: {str(e)}"
    
    # integrations/services.py (Continuación)


def test_ga4_access(project):
    """
    Verifica si la credencial tiene acceso a la propiedad de GA4.
    Costo: $0.
    """
    if not project.google_credential or not project.ga4_property_id:
        return False, "Faltan credenciales o Property ID de GA4."

    try:
        # 1. Construir cliente desde el JSON de la DB
        creds = service_account.Credentials.from_service_account_info(
            project.google_credential.service_account_json
        )
        client = BetaAnalyticsDataClient(credentials=creds)
        
        # 2. Intentar una llamada mínima (obtener metadatos de la propiedad)
        # Esto valida si el client_email de la SA tiene permisos de visualización
        property_path = f"properties/{project.ga4_property_id}"
        client.get_metadata(name=f"{property_path}/metadata")
        
        return True, "Conexión exitosa con GA4."
        
    except Exception as e:
        return False, f"Error GA4: {str(e)}"