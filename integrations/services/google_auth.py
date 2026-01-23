import json
import google.auth
import google.auth.transport.requests
import requests
from google.oauth2 import service_account
from googleapiclient.discovery import build
from core.models import Run  # Asegúrate de tener este modelo según Blueprint

try:
    from google.analytics.data_v1beta import BetaAnalyticsDataClient
    GA4_AVAILABLE = True
except ImportError:
    GA4_AVAILABLE = False

class GoogleAuthService:
    
    @staticmethod
    def _create_run(project, provider, kind, inputs, status="PENDING", raw_json=None):
        """Helper interno para cumplir la Regla de Oro de Trazabilidad."""
        return Run.objects.create(
            project=project,
            client=project.client,  # Jerarquía: User -> Client -> Project
            provider=provider,
            kind=kind,
            inputs=inputs,
            status=status,
            raw_json=raw_json or {}
        )

    @staticmethod
    def get_credentials(credential_obj, scopes):
        # Asumo que credential_obj.service_account_json ya es un dict o se carga de un FileField
        data = credential_obj.service_account_json
        if isinstance(data, str):
            data = json.loads(data)
        return service_account.Credentials.from_service_account_info(data, scopes=scopes)
    @classmethod
    def test_gsc_access(cls, project):
        if not project.google_credential or not project.gsc_property_url:
            return False, "Faltan credenciales o URL de GSC."
        
        # 1. NORMALIZACIÓN: Aseguramos que la URL del proyecto termine en /
        # para que el "match" con la lista de Google sea exacto.
        target_url = project.gsc_property_url.strip()
        if not target_url.endswith('/'):
            target_url += '/'
        
        # Iniciamos RUN
        run = cls._create_run(project, 'GOOGLE_GSC', 'test_access', {'url': target_url})
        
        try:
            scopes = ['https://www.googleapis.com/auth/webmasters.readonly']
            creds = cls.get_credentials(project.google_credential, scopes)
            service = build('searchconsole', 'v1', credentials=creds)
            
            # 2. Obtenemos la lista de sitios autorizados
            site_list = service.sites().list().execute()
            
            # Google a veces devuelve URLs con y sin barra, o con protocolos distintos.
            # Normalizamos la lista de Google también para la comparación.
            authorized_sites = [
                s['siteUrl'] if s['siteUrl'].endswith('/') else s['siteUrl'] + '/' 
                for s in site_list.get('siteEntry', [])
            ]
            
            # 3. Comparación robusta
            success = target_url in authorized_sites
            
            run.status = 'SUCCESS' if success else 'FAILED'
            run.raw_json = site_list
            run.save()
            
            if success:
                return True, "Conexión exitosa"
            else:
                return False, f"Propiedad no encontrada en tu cuenta de Google: {target_url}. Verifica que la Service Account sea 'Propietario' o 'Usuario pleno'."
                
        except Exception as e:
            run.status = 'ERROR'
            run.raw_json = {'error': str(e)}
            run.save()
            return False, f"Error GSC: {str(e)}"

    @classmethod
    def inspect_url_status(cls, project, url_to_inspect):
        """Llama a GSC y guarda el estado detallado para auditoría."""
        run = cls._create_run(project, 'GOOGLE_GSC', 'url_inspection', {'url': url_to_inspect})
        site_url = project.gsc_property_url
        if not site_url.endswith('/'):
            site_url += '/'
        try:
            scopes = ['https://www.googleapis.com/auth/webmasters.readonly']
            creds = cls.get_credentials(project.google_credential, scopes)
            service = build('searchconsole', 'v1', credentials=creds)
            
            request_body = {
                'inspectionUrl': url_to_inspect,
                'siteUrl': site_url,
            }
            
            response = service.urlInspection().index().inspect(body=request_body).execute()
            
            run.status = 'SUCCESS'
            run.raw_json = response
            run.save()
            
            result = response.get('inspectionResult', {})
            index_status = result.get('indexStatusResult', {})
            
            return {
                'verdict': index_status.get('verdict'),
                'coverage': index_status.get('coverageState'),
                'last_crawl': index_status.get('lastCrawlTime'),
                'run_id': run.id
            }
        except Exception as e:
            run.status = 'ERROR'
            run.raw_json = {'error': str(e)}
            run.save()
            return {'error': str(e)}
        
    @classmethod
    def test_ga4_access(cls, project):
        """Valida el acceso a la propiedad de Google Analytics 4."""
        if not project.google_credential or not project.ga4_property_id:
            return False, "Faltan credenciales o ID de propiedad GA4."
        
        run = cls._create_run(project, 'GOOGLE_GA4', 'test_access', {'property_id': project.ga4_property_id})
        
        if not GA4_AVAILABLE:
            return False, "Librería de Google Analytics no instalada."

        try:
            creds = cls.get_credentials(project.google_credential, ['https://www.googleapis.com/auth/analytics.readonly'])
            client = BetaAnalyticsDataClient(credentials=creds)
            
            # Intentamos una llamada mínima para validar permisos
            # Si el ID es inválido o no hay acceso, lanzará una excepción
            client.get_metadata(name=f"properties/{project.ga4_property_id}/metadata")
            
            run.status = 'SUCCESS'
            run.save()
            return True, "Conexión con Analytics GA4 exitosa"
        except Exception as e:
            run.status = 'FAILED'
            run.raw_json = {'error': str(e)}
            run.save()
            return False, f"Error GA4: {str(e)}"
        
    @classmethod
    def force_indexing_url(cls, project, url):
        """
        Dispara el rayo de indexación forzada vía Google Indexing API.
        Regla 2: Trazabilidad total mediante el modelo Run.
        Costo: $0 (Sujeto a cuotas de Google).
        """
        # 1. Iniciamos el registro de trazabilidad
        run = cls._create_run(
            project=project, 
            provider='GOOGLE_GSC', 
            kind='force_indexing', 
            inputs={'url': url}
        )

        try:
            # 2. Configuración de Credenciales y Scope
            # OJO: Se requiere el scope específico de indexing
            scopes = ['https://www.googleapis.com/auth/indexing']
            creds = cls.get_credentials(project.google_credential, scopes)
            
            # 3. Construcción del cliente de API
            # Requiere 'google-api-python-client' instalado
            service = build('indexing', 'v3', credentials=creds)
            
            # 4. Preparación del Payload
            # Google espera la URL y el tipo de notificación (URL_UPDATED o URL_DELETED)
            body = {
                'url': url,
                'type': 'URL_UPDATED'
            }
            
            # 5. Ejecución del Rayo
            response = service.urlNotifications().publish(body=body).execute()
            
            # 6. Éxito: Guardamos respuesta y cerramos RUN
            run.status = 'SUCCESS'
            run.raw_json = response
            run.save()
            
            return True, "URL enviada a Google correctamente."

        except Exception as e:
            # 7. Fallo: Registramos el error real para auditoría
            run.status = 'ERROR'
            run.raw_json = {'error': str(e)}
            run.save()
            
            # Pepe dice: Error 403 suele ser falta de permisos en Search Console.
            # Error 404 suele ser que la propiedad en GSC no coincide con el dominio.
            return False, f"Fallo en GSC Indexing: {str(e)}"