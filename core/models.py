from django.db import models
from django.conf import settings  # <--- IMPORTANTE: Necesario para vincular al usuario
import uuid

class Run(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    
    # RELACIONES
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE)
    client = models.ForeignKey('clients.Client', on_delete=models.CASCADE, null=True, blank=True)
    
    # --- NUEVO CAMPO: EL USUARIO QUE EJECUTÓ LA ACCIÓN ---
    # Usamos SET_NULL para que si borras al usuario, no se borre el historial del Run.
    user = models.ForeignKey(
        settings.AUTH_USER_MODEL, 
        on_delete=models.SET_NULL, 
        null=True, 
        blank=True,
        related_name='runs'
    )
    # -----------------------------------------------------

    # METADATA DEL PROCESO
    provider = models.CharField(max_length=50)  # google_ads, google_gsc, serpapi
    kind = models.CharField(max_length=100)     # keyword_discovery, test_access
    
    # INPUTS / OUTPUTS
    inputs = models.JSONField(default=dict, blank=True)
    input_hash = models.CharField(max_length=64, db_index=True, null=True, blank=True)
    
    # STATUS & COSTOS
    status = models.CharField(max_length=20, default='pending')
    cost_units = models.DecimalField(max_digits=10, decimal_places=4, default=0)
    
    # RESULTADOS
    raw_json = models.JSONField(null=True, blank=True) 
    outputs = models.JSONField(default=dict, blank=True) # Agrego este que usamos en el orquestador
    error_log = models.TextField(blank=True, null=True)  # Agrego este para guardar los errores
    
    created_at = models.DateTimeField(auto_now_add=True)
    completed_at = models.DateTimeField(null=True, blank=True) # Útil para medir tiempos

    def __str__(self):
        user_name = self.user.username if self.user else "System"
        return f"[{self.kind}] {self.project.name} by {user_name} ({self.status})"