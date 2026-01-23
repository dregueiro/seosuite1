import uuid
from django.db import models
from django.conf import settings
from django.utils import timezone
from datetime import timedelta
from projects.models import Project
from core.models import Run

# 1. TABLAS MAESTRAS (Mantener estructura de Google Ads)
class GoogleAdsLocation(models.Model):
    criteria_id = models.BigIntegerField(primary_key=True)
    name = models.CharField(max_length=255, db_index=True)
    canonical_name = models.CharField(max_length=500, db_index=True)
    parent_id = models.BigIntegerField(null=True, blank=True)
    country_code = models.CharField(max_length=10, db_index=True)
    target_type = models.CharField(max_length=100)
    status = models.CharField(max_length=50)

    class Meta:
        verbose_name = "Google Ads Location"
        ordering = ['name']

class GoogleAdsLanguage(models.Model):
    criteria_id = models.BigIntegerField(primary_key=True)
    name = models.CharField(max_length=100)
    code = models.CharField(max_length=10)

# 2. THE RUN PROTOCOL (Keyword Edition)
class KeywordIdeaRun(Run):
    """
    Hereda de core.Run. Mantiene campos originales.
    """
    seed_keyword = models.CharField(max_length=255, blank=True, null=True)
    country_code = models.CharField(max_length=10, default="US")
    language_code = models.CharField(max_length=10, default="en")
    source = models.CharField(max_length=50, default='database')
    items_found = models.IntegerField(default=0)

    def save(self, *args, **kwargs):
        if not self.kind:
            self.kind = 'keyword_discovery'
        super().save(*args, **kwargs)

    class Meta:
        verbose_name = "Keyword Run"

class KeywordIdea(models.Model):
    run = models.ForeignKey(KeywordIdeaRun, on_delete=models.CASCADE, related_name='ideas')
    keyword = models.CharField(max_length=255)
    search_volume = models.BigIntegerField(null=True, blank=True, default=0)
    cpc = models.DecimalField(max_digits=10, decimal_places=2, null=True, blank=True)
    competition = models.FloatField(null=True, blank=True)
    raw_data = models.JSONField(default=dict, blank=True)

    class Meta:
        # Django 6 Indices
        indexes = [models.Index(fields=['run', 'keyword'])]

    @property
    def is_fresh(self):
        """Regla de Oro: 15 días"""
        limit = timezone.now() - timedelta(days=settings.KEYWORD_FRESHNESS_DAYS)
        return self.run.created_at > limit

# 3. KEYWORD TRACKING (Optimizado)
class Keyword(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    project = models.ForeignKey(Project, on_delete=models.CASCADE, related_name='tracked_keywords')
    text = models.CharField(max_length=255)
    normalized_text = models.CharField(max_length=255, db_index=True)
    last_vol = models.IntegerField(default=0)
    last_cpc = models.DecimalField(max_digits=10, decimal_places=2, null=True, blank=True)
    created_at = models.DateTimeField(auto_now_add=True)

    class Meta:
        constraints = [
            models.UniqueConstraint(fields=['project', 'normalized_text'], name='unique_keyword_project')
        ]

class KeywordMetricSnapshot(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    keyword = models.ForeignKey(Keyword, on_delete=models.CASCADE, related_name='snapshots')
    date_recorded = models.DateField()
    search_volume = models.IntegerField(default=0)
    cpc = models.DecimalField(max_digits=10, decimal_places=2, null=True, blank=True)

    class Meta:
        constraints = [
            models.UniqueConstraint(fields=['keyword', 'date_recorded'], name='unique_metric_snapshot')
        ]

# ==========================================
# 4. ESTRATEGIAS Y TAGS (Restaurado y Optimizado)
# ==========================================

class KeywordStrategy(models.Model):
    project = models.ForeignKey(Project, on_delete=models.CASCADE, related_name='strategies')
    name = models.CharField(max_length=255, default="Estrategia Principal")
    created_at = models.DateTimeField(auto_now_add=True)
    is_active = models.BooleanField(default=True)

    def __str__(self):
        return f"{self.name} ({self.project.name})"

class StrategyItem(models.Model):
    strategy = models.ForeignKey(KeywordStrategy, related_name='items', on_delete=models.CASCADE)
    keyword_text = models.CharField(max_length=255)
    priority = models.IntegerField(default=3, choices=[(1, 'Alta'), (2, 'Media'), (3, 'Baja')])
    tracked_keyword = models.ForeignKey(Keyword, on_delete=models.SET_NULL, null=True, blank=True)

    def __str__(self):
        return self.keyword_text

# ==========================================
# 5. SITEMAP & AUDIT (Solución al ImportError)
# ==========================================

class URLAudit(models.Model):
    """
    Rastreo de URLs del Sitemap. 
    Optimizado para Django 6.0.1 con UniqueConstraint.
    """
    project = models.ForeignKey(Project, on_delete=models.CASCADE, related_name='audited_urls')
    url = models.URLField(max_length=2000)
    
    status_code = models.IntegerField(null=True, blank=True)
    verdict = models.CharField(max_length=100, blank=True, null=True)
    
    # GSC Data
    in_sitemap = models.BooleanField(default=False)
    sitemap_status = models.CharField(max_length=100, blank=True, null=True)
    last_inspected = models.DateTimeField(auto_now=True)

    def get_sitemap_badge_class(self):
        mapping = {
            'Success': 'bg-success',
            'Couldn\'t fetch': 'bg-danger',
            'Pending': 'bg-warning text-dark',
        }
        return mapping.get(self.sitemap_status, 'bg-secondary')

    class Meta:
        # Reemplazamos el viejo unique_together
        constraints = [
            models.UniqueConstraint(fields=['project', 'url'], name='unique_url_audit_per_project')
        ]
        indexes = [
            models.Index(fields=['project', 'url']),
        ]

    def __str__(self):
        return self.url