from django.db import models
import uuid

class Run(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE)
    
    # Agregamos 'client' para trazabilidad directa (User -> Client -> Project)
    client = models.ForeignKey('clients.Client', on_delete=models.CASCADE, null=True, blank=True)
    
    provider = models.CharField(max_length=50) # google_ads, google_gsc, serpapi
    kind = models.CharField(max_length=100)     # keyword_discovery, test_access
    
    # Cambiamos o agregamos 'inputs' para guardar qué se buscó
    inputs = models.JSONField(default=dict, blank=True)
    
    # HASH para Dedupe
    input_hash = models.CharField(max_length=64, db_index=True, null=True, blank=True)
    
    status = models.CharField(max_length=20, default='pending')
    cost_units = models.DecimalField(max_digits=10, decimal_places=4, default=0)
    
    # Sincronizamos: El servicio usa 'raw_json', el modelo usaba 'raw_response'
    # Usaremos 'raw_json' para que coincida con GoogleAuthService
    raw_json = models.JSONField(null=True, blank=True) 
    
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return f"{self.kind} - {self.project.name} ({self.status})"