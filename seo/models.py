from django.db import models
from django.conf import settings

class Notification(models.Model):
    """
    Sistema de alertas para el usuario (Budget alerts, Audit finishes, etc).
    Optimizado para lectura rápida en el Header de WOWDASH.
    """
    user = models.ForeignKey(
        settings.AUTH_USER_MODEL, 
        on_delete=models.CASCADE,
        related_name='notifications'
    )
    message = models.TextField()
    
    # Referencia cruzada a la auditoría (App: keyword_research)
    audit = models.ForeignKey(
        'keyword_research.URLAudit', 
        on_delete=models.SET_NULL, 
        null=True, 
        blank=True
    )
    
    is_read = models.BooleanField(default=False, db_index=True)
    created_at = models.DateTimeField(auto_now_add=True, db_index=True)

    class Meta:
        ordering = ['-created_at']
        indexes = [
            models.Index(fields=['user', 'is_read']),
        ]

    def __str__(self):
        return f"Notificación para {self.user.username} - {self.created_at.strftime('%Y-%m-%d')}"