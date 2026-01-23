from django.urls import path
from . import views

app_name = 'keyword_research'

urlpatterns = [
# --- Vistas Principales ---
    path('magic/', views.KeywordMagicHomeView.as_view(), name='magic_tool_home'),
    path('magic/<uuid:pk>/', views.MagicToolView.as_view(), name='magic_tool'),
    path('history/project/<int:project_id>/', views.ProjectHistoryView.as_view(), name='project_history'),
    path('project/<int:project_id>/add-keyword/<int:idea_id>/', 
         views.AddToProjectView.as_view(), 
         name='add_to_project'),
    # --- APIs Internas (AJAX) ---
    path('api/discover/', views.KeywordDiscoveryAjaxView.as_view(), name='api_discover'),
    path('api/save-keywords/', views.SaveKeywordsAjaxView.as_view(), name='save_keywords'),
    path('project/<int:pk>/keywords/', views.KeywordMagicView.as_view(), name='keyword_magic'),
    
    # 🔥 ELIMINADO: path('api/geo-search/', views.GeoSearchAjaxView.as_view(), name='geo_search'),
    # Esta era la versión vieja. La reemplazamos por las dos de abajo:
    
    path('api/locations-search/', views.LocationAutocompleteView.as_view(), name='location_search'),
    path('api/languages-search/', views.LanguageAutocompleteView.as_view(), name='language_search'),
    path('api/geo-proxy/', views.GeoProxyView.as_view(), name='geo_proxy'),
]