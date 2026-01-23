from django.db import models
from django.conf import settings
import uuid

class Run(models.Model):
    """
    Protocolo de Trazabilidad Total. 
    Mantiene nombres originales para compatibilidad con el orquestador.
    Optimizado para Django 6.0.1
    """
    STATUS_CHOICES = [
        ('PENDING', 'Pendiente'),
        ('RUNNING', 'En proceso'),
        ('SUCCESS', 'Éxito'),
        ('ERROR', 'Error'),
    ]

    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    
    # RELACIONES (Mantenidas)
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE, related_name='runs')
    client = models.ForeignKey('clients.Client', on_delete=models.CASCADE, null=True, blank=True, related_name='client_runs')
    user = models.ForeignKey(
        settings.AUTH_USER_MODEL, 
        on_delete=models.SET_NULL, 
        null=True, 
        blank=True,
        related_name='user_runs'
    )

    # METADATA (Mantenida)
    provider = models.CharField(max_length=50) # google_ads, google_gsc, serpapi
    kind = models.CharField(max_length=100)     # keyword_discovery, test_access
    
    # INPUTS / OUTPUTS (Mantenidos)
    inputs = models.JSONField(default=dict, blank=True)
    input_hash = models.CharField(max_length=64, db_index=True, null=True, blank=True)
    
    # STATUS & COSTOS (Mantenidos)
    # Nota: He normalizado el default a 'PENDING' para coincidir con STATUS_CHOICES
    status = models.CharField(max_length=20, choices=STATUS_CHOICES, default='PENDING')
    cost_units = models.DecimalField(max_digits=10, decimal_places=4, default=0)
    
    # RESULTADOS (Mantenidos)
    raw_json = models.JSONField(null=True, blank=True) 
    outputs = models.JSONField(default=dict, blank=True) 
    error_log = models.TextField(blank=True, null=True)
    
    # TIMESTAMPS
    created_at = models.DateTimeField(auto_now_add=True, db_index=True)
    completed_at = models.DateTimeField(null=True, blank=True)

    class Meta:
        ordering = ['-created_at']
        # NUEVO: Índices estratégicos para SEOSuite 2026
        indexes = [
            # Optimiza el cálculo mensual de la Zona Segura (Project + Mes)
            models.Index(fields=['project', 'status', 'created_at']),
            # Optimiza el Freshness Check de 15 días (Caché Semántica)
            models.Index(fields=['input_hash', 'kind', 'status']),
        ]

    def __str__(self):
        user_name = self.user.username if self.user else "System"
        return f"[{self.kind}] {self.project.name} by {user_name} ({self.status})"