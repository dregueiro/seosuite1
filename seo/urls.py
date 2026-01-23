# seo/urls.py
from django.urls import path
from . import views

app_name = 'seo'

urlpatterns = [
    path('project/<int:pk>/', views.ProjectDashboardView.as_view(), name='project_dashboard'),
   
    
    # Notificaciones HTMX
    path('check-notifications/', views.check_notifications, name='check_notifications'),
    path('mark-read/', views.mark_notifications_as_read, name='mark_notifications_as_read'),
    
    # Mantenemos esta aquí solo si RequestIndexingView sigue en seo/views.py
]