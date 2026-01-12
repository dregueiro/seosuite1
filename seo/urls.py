# seo/urls.py
from django.urls import path
from .views import ProjectDashboardView

app_name = 'seo'

# seo/urls.py
urlpatterns = [
    path('project/<int:pk>/', ProjectDashboardView.as_view(), name='project_dashboard'),
    # Nueva URL para la herramienta de Keywords
    path('project/<int:pk>/keywords/', KeywordMagicView.as_view(), name='keyword_magic'),
]