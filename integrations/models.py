import uuid
import json
from django.db import models
from django.conf import settings
from clients.models import Client

class GoogleCredential(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    client = models.ForeignKey(Client, on_delete=models.CASCADE, related_name='credentials')
    user = models.ForeignKey(settings.AUTH_USER_MODEL, on_delete=models.CASCADE, related_name='google_credentials')
    name = models.CharField(max_length=255, help_text="Ej: 'SA Principal Daniel'")
    
    service_account_json = models.JSONField(
        help_text="Contenido íntegro del archivo .json de Google Cloud"
    )
    
    client_email = models.EmailField(blank=True, editable=False)
    project_id = models.CharField(max_length=100, blank=True, editable=False)
    
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    def save(self, *args, **kwargs):
        # Aseguramos robustez en el parsing
        data = self.service_account_json
        if isinstance(data, str):
            try:
                data = json.loads(data)
                self.service_account_json = data
            except json.JSONDecodeError:
                data = {}

        if isinstance(data, dict):
            self.client_email = data.get('client_email', '')
            self.project_id = data.get('project_id', '')

        super().save(*args, **kwargs)

    def __str__(self):
        return f"{self.name} ({self.client_email})"