from django.db import models
import uuid

class Run(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE)
    
    provider = models.CharField(max_length=50) # google_ads, serpapi, internal
    kind = models.CharField(max_length=100)     # keyword_discovery, serp_tracking
    
    # HASH para Dedupe (Evita pagar dos veces por lo mismo)
    input_hash = models.CharField(max_length=64, db_index=True)
    
    status = models.CharField(max_length=20, default='pending')
    cost_units = models.DecimalField(max_digits=10, decimal_places=4, default=0)
    
    raw_response = models.JSONField(null=True, blank=True) # Auditoría total
    created_at = models.DateTimeField(auto_now_add=True)