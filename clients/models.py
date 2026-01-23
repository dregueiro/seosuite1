import uuid
import zoneinfo
from django.db import models
from django.conf import settings

ZONE_CHOICES = [(tz, tz) for tz in sorted(zoneinfo.available_timezones())]
class Client(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    user = models.ForeignKey(
        settings.AUTH_USER_MODEL, 
        on_delete=models.CASCADE, 
        related_name='clients'
    )
    timezone = models.CharField(
        max_length=100, 
        choices=ZONE_CHOICES, 
        default='America/New_York' # Valor para Charlotte, NC
    )
    
    # Campos solicitados
    name = models.CharField(max_length=255, verbose_name="Nombre de la Empresa")
    contact_name = models.CharField(max_length=255, verbose_name="Persona de Contacto")
    phone = models.CharField(max_length=50, blank=True, null=True)
    email = models.EmailField()

    # Blueprint v1.4: Control de costos
    authorized_monthly_budget = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    current_month_spend = models.DecimalField(max_digits=10, decimal_places=4, default=0.00)
    
    is_active = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.name
    @property
    def active_projects_count(self):
        # Asumiendo que Project tiene un campo 'status' o similar
        return self.projects.filter(status='active').count()

    @property
    def inactive_projects_count(self):
        return self.projects.filter(status='inactive').count()
    
    def get_spending_percentage(self):
        """Evita el error 500 por división por cero"""
        if not self.authorized_monthly_budget or self.authorized_monthly_budget <= 0:
            return 0
        perc = (float(self.current_month_spend) / float(self.authorized_monthly_budget)) * 100
        return min(100, round(perc, 1))
    
    @property
    def remaining_budget(self):
        """Calcula el saldo real disponible en la billetera"""
        return max(0, self.authorized_monthly_budget - self.current_month_spend)

    def get_available_percentage(self):
        """Calcula cuánto queda disponible (verde > 50, amarillo < 30)"""
        if not self.authorized_monthly_budget or self.authorized_monthly_budget <= 0:
            return 0
        perc = (float(self.remaining_budget) / float(self.authorized_monthly_budget)) * 100
        return round(perc, 2)