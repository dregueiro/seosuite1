from django.db import models
from django.db.models import Sum
from django.utils import timezone
from core.models import Run # Asegúrate de que los Runs estén en core

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

    # REGLA DE ORO: Control de Presupuesto
    authorized_monthly_budget = models.DecimalField(
        max_digits=10, 
        decimal_places=2, 
        default=50.00,
        help_text="Presupuesto máximo mensual para APIs de pago (SerpAPI/DataForSEO)."
    )

    # Campos para persistencia de integración
    gsc_verified = models.BooleanField(default=False)
    ga4_verified = models.BooleanField(default=False)
    ads_verified = models.BooleanField(default=False)
    last_integration_check = models.DateTimeField(null=True, blank=True)

    @property
    def get_available_budget(self):
        """Calcula el presupuesto restante del mes actual."""
        now = timezone.now()
        start_of_month = now.replace(day=1, hour=0, minute=0, second=0, microsecond=0)
        
        # Sumamos el costo de todos los RUNS exitosos de este mes para este proyecto
        total_spent = Run.objects.filter(
            project=self,
            status='SUCCESS',
            created_at__gte=start_of_month
        ).aggregate(total=Sum('cost_units'))['total'] or 0
        
        available = float(self.authorized_monthly_budget) - float(total_spent)
        return max(0, available) # Nunca devolver negativo

    @property
    def has_funds(self):
        """Helper rápido para validaciones en Gates de APIs"""
        return self.get_available_budget() > 0
    def __str__(self):
        return f"{self.name} ({self.domain})"