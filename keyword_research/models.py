from django.db import models

# Create your models here.
# keyword_research/models.py
class KeywordIdea(models.Model):
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE)
    keyword = models.CharField(max_length=255)
    avg_monthly_searches = models.IntegerField(default=0, null=True, blank=True)
    competition_level = models.CharField(max_length=50, null=True, blank=True)
    # Este campo es el que te permite saber CUÁNDO se importó
    run = models.ForeignKey('core.Run', on_delete=models.SET_NULL, null=True, blank=True)
    created_at = models.DateTimeField(auto_now_add=True)

class URLAudit(models.Model):
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE)
    url = models.URLField(max_length=500)
    status = models.CharField(max_length=100, blank=True, null=True) # "Indexada", "No indexada", etc.
    last_inspected = models.DateTimeField(auto_now=True)
    verdict = models.CharField(max_length=100, blank=True, null=True) # "NEUTRAL", "GOOD", "BAD"
    indexing_requested_at = models.DateTimeField(null=True, blank=True)
    sitemap_status = models.CharField(
        max_length=100, 
        blank=True, 
        null=True, 
        help_text="Estado reportado por GSC (ej: Success, No se pudo obtener)"
    )
    
    def get_sitemap_badge_class(self):
        mapping = {
            'Success': 'bg-success',
            'Couldn\'t fetch': 'bg-danger',
            'Pending': 'bg-warning text-dark',
        }
        return mapping.get(self.sitemap_status, 'bg-secondary')
    
    def __str__(self):
        return self.url
    

class KeywordStrategy(models.Model):
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE)
    name = models.CharField(max_length=255, default="Estrategia Principal")
    created_at = models.DateTimeField(auto_now_add=True)
    is_active = models.BooleanField(default=True)

    def __clon_semrush_count__(self):
        return self.items.count()

class StrategyItem(models.Model):
    strategy = models.ForeignKey(KeywordStrategy, related_name='items', on_delete=models.CASCADE)
    keyword = models.CharField(max_length=255)
    volume = models.IntegerField(default=0)
    intent = models.CharField(max_length=50, blank=True)
    priority = models.IntegerField(default=3) # 1: Alta, 2: Media, 3: Baja