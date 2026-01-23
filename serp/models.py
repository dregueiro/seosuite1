from django.db import models
from django.conf import settings
from django.utils import timezone
from datetime import timedelta

class SerpSnapshot(models.Model):
    """
    Foto de Google. Optimizada para Freshness Check de 24h.
    """
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE, related_name='serp_snapshots')
    keyword = models.ForeignKey('keyword_research.Keyword', on_delete=models.CASCADE, null=True, blank=True)
    idea = models.ForeignKey('keyword_research.KeywordIdea', on_delete=models.CASCADE, null=True, blank=True)
    
    provider = models.CharField(max_length=50) # 'serpapi' / 'dataforseo'
    input_hash = models.CharField(max_length=64, db_index=True)
    
    rank = models.IntegerField(null=True, blank=True)
    url = models.URLField(max_length=1000, null=True, blank=True)
    
    raw_data = models.JSONField(null=True, blank=True)
    created_at = models.DateTimeField(auto_now_add=True, db_index=True)

    class Meta:
        verbose_name = "SERP Snapshot"
        ordering = ['-created_at']
        indexes = [
            models.Index(fields=['input_hash', 'created_at']),
            models.Index(fields=['project', 'keyword']),
        ]

    @property
    def is_fresh(self):
        """Regla de Oro: 24 horas para SERP"""
        limit = timezone.now() - timedelta(hours=settings.SERP_FRESHNESS_HOURS)
        return self.created_at > limit

    def __str__(self):
        return f"{self.rank} - {self.url[:30]}"