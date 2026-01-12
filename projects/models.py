from django.db import models
from clients.models import Client
from integrations.models import GoogleCredential # Importación nueva

class Project(models.Model):
    client = models.ForeignKey(Client, on_delete=models.CASCADE, related_name='projects')
    domain = models.URLField(max_length=500)
    name = models.CharField(max_length=255)
    
    # Configuración obligatoria para APIs de Google/SERP
    target_country_code = models.CharField(max_length=10, default='ES')
    language_code = models.CharField(max_length=10, default='es')
    
    # Vinculamos la credencial (Una credencial puede servir a varios proyectos)
    google_credential = models.ForeignKey(
        GoogleCredential, 
        on_delete=models.SET_NULL, 
        null=True, 
        blank=True,
        help_text="Service Account para GSC, GA4 y Ads"
    )
    # IDs de Integración (Gates)
    gsc_property_url = models.CharField(max_length=500, blank=True, null=True)
    ga4_property_id = models.CharField(max_length=100, blank=True, null=True)
    google_ads_customer_id = models.CharField(max_length=20, blank=True, null=True)

    def __str__(self):
        return f"{self.name} ({self.domain})"