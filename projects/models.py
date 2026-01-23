from django.db import models
from django.db.models import Sum
from django.utils import timezone
from clients.models import Client
from integrations.models import GoogleCredential

class Project(models.Model):
    # AÑADIDO: status para que Client.active_projects_count funcione
    STATUS_CHOICES = [('active', 'Activo'), ('inactive', 'Inactivo')]
    status = models.CharField(max_length=10, choices=STATUS_CHOICES, default='active')

    client = models.ForeignKey(Client, on_delete=models.CASCADE, related_name='projects')
    domain = models.URLField(max_length=500)
    name = models.CharField(max_length=255)
    
    created_at = models.DateTimeField(auto_now_add=True, null=True, blank=True)
    updated_at = models.DateTimeField(auto_now=True, null=True, blank=True)
    # Configuración Geo
    target_country_code = models.CharField(max_length=10, default='ES')
    language_code = models.CharField(max_length=10, default='es')
    
    google_credential = models.ForeignKey(
        GoogleCredential, 
        on_delete=models.SET_NULL, 
        null=True, 
        blank=True
    )

    # IDs de Integración
    gsc_property_url = models.CharField(max_length=500, blank=True, null=True)
    ga4_property_id = models.CharField(max_length=100, blank=True, null=True)
    google_ads_customer_id = models.CharField(max_length=20, blank=True, null=True)

    # ZONA SEGURA
    authorized_monthly_budget = models.DecimalField(
        max_digits=10, decimal_places=2, default=50.00
    )

    # Verificación
    gsc_verified = models.BooleanField(default=False)
    ga4_verified = models.BooleanField(default=False)
    ads_verified = models.BooleanField(default=False)
    last_integration_check = models.DateTimeField(null=True, blank=True)

    PRIMARY_SERP_PROVIDER = [
        ('serpapi', 'SerpAPI'),
        ('dataforseo', 'DataForSEO'),
    ]
    preferred_serp_provider = models.CharField(
        max_length=20, choices=PRIMARY_SERP_PROVIDER, default='serpapi'
    )

    @property
    def get_available_budget(self):
        # Import local para evitar circularidad con Core
        from core.models import Run 
        now = timezone.now()
        start_of_month = now.replace(day=1, hour=0, minute=0, second=0, microsecond=0)
        
        total_spent = Run.objects.filter(
            project=self,
            status='SUCCESS', # Importante: coincide con tus choices en Run
            created_at__gte=start_of_month
        ).aggregate(total=Sum('cost_units'))['total'] or 0
        
        available = float(self.authorized_monthly_budget) - float(total_spent)
        return max(0.0, available)

    @property
    def has_funds(self):
        # FIX: Se quitan los paréntesis porque get_available_budget es @property
        return self.get_available_budget > 0

    def __str__(self):
        return f"{self.name} ({self.domain})"

class GscRow(models.Model):
    project = models.ForeignKey(Project, on_delete=models.CASCADE, related_name='gsc_data')
    date = models.DateField(db_index=True)
    query = models.CharField(max_length=500, db_index=True)
    page = models.URLField(max_length=1000, blank=True, null=True)
    clicks = models.IntegerField(default=0)
    impressions = models.IntegerField(default=0)
    ctr = models.FloatField(default=0.0)
    position = models.FloatField(default=0.0)

    class Meta:
        # Django 6 Ready: UniqueConstraint es más rápido que unique_together
        constraints = [
            models.UniqueConstraint(
                fields=['project', 'date', 'query', 'page'], 
                name='unique_gsc_row_record'
            )
        ]