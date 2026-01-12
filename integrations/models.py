# integrations/models.py
from django.db import models
import uuid

class GoogleCredential(models.Model):
    """
    Almacena el JSON de la Service Account de Google.
    Permite que cada Cliente o Proyecto use sus propias llaves.
    """
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    name = models.CharField(max_length=255, help_text="Ej: 'SA Principal Daniel' o 'Cliente X'")
    
    # Guardamos el JSON completo para usarlo con google-auth
    service_account_json = models.JSONField(
        help_text="Pega aquí el contenido íntegro del archivo .json descargado de Google Cloud"
    )
    
    # Campo informativo extraído del JSON para el Admin
    client_email = models.EmailField(blank=True, editable=False)
    
    created_at = models.DateTimeField(auto_now_add=True)

    def save(self, *args, **kwargs):
        # Extraemos el email del JSON automáticamente antes de guardar
        if self.service_account_json and 'client_email' in self.service_account_json:
            self.client_email = self.service_account_json['client_email']
        super().save(*args, **kwargs)

    def __str__(self):
        return f"{self.name} ({self.client_email})"