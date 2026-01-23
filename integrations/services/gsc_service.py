import os
import json
import tempfile
from datetime import timedelta
from django.utils import timezone
from django.db import transaction

from googleapiclient.discovery import build
from google.oauth2 import service_account

from core.models import Run
from projects.models import GscRow




class GscSyncService:
    @classmethod
    def sync_project(cls, project, user, days=90):
        """
        Sincroniza datos de GSC y los persiste en la DB.
        """
        # 1. Total Traceability (Directiva 3)
        run = Run.objects.create(
            project=project,
            user=user,
            kind="gsc.sync_performance",
            provider="google_search_console",
            inputs={"days": days}
        )

        try:
            # 2. Auth usando tu modelo de credenciales
            creds_dict = project.google_credential.service_account_json
            creds = service_account.Credentials.from_service_account_info(creds_dict)
            service = build('webmasters', 'v3', credentials=creds)

            end_date = timezone.now().date() - timedelta(days=3) # GSC tiene 2-3 días de lag
            start_date = end_date - timedelta(days=days)

            request = {
                'startDate': start_date.strftime('%Y-%m-%d'),
                'endDate': end_date.strftime('%Y-%m-%d'),
                'dimensions': ['query'], # Traemos keywords
                'rowLimit': 5000
            }

            response = service.searchanalytics().query(
                siteUrl=project.gsc_property_url, 
                body=request
            ).execute()

            # 3. Guardado Atómico (Eficiencia de Recursos)
            rows_added = 0
            if 'rows' in response:
                with transaction.atomic():
                    for row in response['rows']:
                        GscRow.objects.update_or_create(
                            project=project,
                            query=row['keys'][0],
                            date=end_date, # Marcamos la fecha del sync
                            defaults={
                                'clicks': row['clicks'],
                                'impressions': row['impressions'],
                                'ctr': row['ctr'],
                                'position': row['position']
                            }
                        )
                        rows_added += 1
            
            run.status = "success"
            run.outputs = {"rows_synced": rows_added}
            run.save()
            return rows_added

        except Exception as e:
            run.status = "error"
            run.error_log = str(e)
            run.save()
            raise e
    """Servicio de Nivel 1 ($0) para Sincronización de GSC"""
    
    @classmethod
    def sync_data(cls, project, user, days=30):
        # 1. Total Traceability (The Run Protocol)
        run = Run.objects.create(
            project=project,
            user=user,
            kind="gsc.performance_sync",
            provider="google_search_console",
            inputs={"days": days}
        )

        try:
            # 2. Auth con Service Account
            creds_dict = project.google_credential.service_account_json
            creds = service_account.Credentials.from_service_account_info(creds_dict)
            service = build('webmasters', 'v3', credentials=creds)

            end_date = timezone.now().date()
            start_date = end_date - timedelta(days=days)

            request = {
                'startDate': start_date.strftime('%Y-%m-%d'),
                'endDate': end_date.strftime('%Y-%m-%d'),
                'dimensions': ['query'],
                'rowLimit': 5000
            }

            response = service.searchanalytics().query(
                siteUrl=project.gsc_property_url, 
                body=request
            ).execute()

            # 3. Persistencia Atómica
            rows_synced = 0
            if 'rows' in response:
                with transaction.atomic():
                    for row in response['rows']:
                        GscRow.objects.update_or_create(
                            project=project,
                            date=end_date,
                            query=row['keys'][0],
                            defaults={
                                'clicks': row['clicks'],
                                'impressions': row['impressions'],
                                'position': row['position'],
                                'ctr': row['ctr']
                            }
                        )
                        rows_synced += 1

            run.status = "success"
            run.outputs = {"rows_synced": rows_synced}
            run.save()
            return rows_synced

        except Exception as e:
            run.status = "error"
            run.error_log = str(e)
            run.save()
            raise e