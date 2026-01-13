from django.contrib import admin
from .models import KeywordIdea, URLAudit  # Importamos ambos modelos

# Registro para las Keywords (Lo que ya tenías)
@admin.register(KeywordIdea)
class KeywordIdeaAdmin(admin.ModelAdmin):
    list_display = ('keyword', 'avg_monthly_searches', 'competition_level', 'project')
    list_filter = ('project', 'competition_level')
    search_fields = ('keyword',)

# Registro para la Auditoría de URLs (Lo nuevo)
# keyword_research/admin.py
@admin.register(URLAudit)
class URLAuditAdmin(admin.ModelAdmin):
    # Asegúrate de que cada nombre aquí exista en models.py
    list_display = (
        'url', 
        'verdict',          # Verifica si es 'status' o 'index_status' en tu modelo
        'last_inspected',   # Verifica si es 'updated_at' o similar
        'project',          # Verifica si el campo ForeignKey existe
    )
    
    # Solo puedes filtrar por campos que existan
    list_filter = ('project', 'verdict') 
    search_fields = ('url',)