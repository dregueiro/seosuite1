from django.urls import path
from . import views

app_name = 'keyword_research'

urlpatterns = [
    # Dashboard principal de la app (Resumen de Runs de keywords)
# Esta es la que llamaremos desde la sidebar
    path('magic/', views.KeywordMagicHomeView.as_view(), name='magic_tool_home'),
    
    # 2. Los resultados (La tabla mágica)
    path('magic/<int:pk>/', views.MagicToolView.as_view(), name='magic_tool'),
    path('api/discover/', views.KeywordDiscoveryAjaxView.as_view(), name='api_discover'),
    path('api/save-keywords/', views.SaveKeywordsAjaxView.as_view(), name='save_keywords'),
    path('api/geo-search/', views.GeoSearchAjaxView.as_view(), name='geo_search'),
]