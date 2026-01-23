# serp/admin.py
from django.contrib import admin
from .models import SerpSnapshot

@admin.register(SerpSnapshot)
class SerpSnap(admin.ModelAdmin):
    # 1. Columnas a mostrar (Añadimos la fecha)
    list_display = ('project', 'keyword', 'idea', 'provider', 'created_at')
    
    # 2. Orden predeterminado (El más reciente primero)
    ordering = ('-created_at',)
    
    # 3. Filtros laterales (Para segmentar por fecha y proveedor)
    list_filter = ('created_at', 'provider', 'project')
    
    # 4. Jerarquía de fechas (Crea una barra de navegación superior por Año/Mes/Día)
    date_hierarchy = 'created_at'
    
    # 5. Buscador (Para encontrar por nombre de keyword o proyecto)
    search_fields = ('keyword__keyword', 'idea__keyword', 'project__name')