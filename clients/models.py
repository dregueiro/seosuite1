import uuid
from django.db import models
from django.conf import settings

class Client(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    user = models.ForeignKey(
        settings.AUTH_USER_MODEL, 
        on_delete=models.CASCADE, 
        related_name='clients'
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