from django.contrib import admin
from .models import KeywordIdea, URLAudit  # Importamos ambos modelos

# Registro para las Keywords (Lo que ya tenías)
@admin.register(KeywordIdea)
class KeywordIdeaAdmin(admin.ModelAdmin):
    list_display = ('keyword', 'avg_monthly_searches', 'competition_level', 'project')
    list_filter = ('project', 'competition_level')
    search_fields = ('keyword',)

# Registro para la Auditoría de URLs (Lo nuevo)
@admin.register(URLAudit)
class URLAuditAdmin(admin.ModelAdmin):
    list_display = ('url', 'verdict', 'status', 'last_inspected', 'project')
    list_filter = ('project', 'verdict')
    search_fields = ('url',)