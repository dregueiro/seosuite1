from celery import shared_task
from datetime import timedelta
from django.utils import timezone
from .models import Notification
from integrations.services import inspect_url_status
from keyword_research.models import URLAudit


@shared_task
def auto_check_google_status(audit_id, check_number):
    try:
        audit = URLAudit.objects.get(id=audit_id)
        result = inspect_url_status(audit.project, audit.url)
        
        # 1. Si Google ya la indexó: Éxito total
        if result.get('coverage') == 'Submitted and indexed':
            audit.status = 'Submitted and indexed'
            audit.verdict = 'GOOD'
            audit.save()
            
            # Creamos la notificación usando tu modelo
            Notification.objects.create(
                user=audit.project.user,
                message=f"🚀 ¡Éxito! Google indexó: {audit.url}",
                audit=audit # <-- Esto es clave
            )
            return f"URL {audit_id} indexada con éxito."

        # 2. Si NO está indexada, programamos el siguiente intento
        schedule_next_check(audit_id, check_number)
        return f"Intento {check_number} fallido, programando siguiente."

    except Exception as e:
        return f"Error en tarea: {str(e)}"

def schedule_next_check(audit_id, current_step):
    # Tiempos: 15min, 2h, 24h
    times = [10, 7200, 86400] # segundos
    
    next_step = current_step + 1
    
    if next_step <= len(times):
        # Programamos la MISMA tarea pero con el siguiente índice
        auto_check_google_status.apply_async(
            args=[audit_id, next_step], 
            countdown=times[next_step - 1] 
        )