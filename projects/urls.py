from django.urls import path
from . import views

app_name = 'projects'

urlpatterns = [
    # Lista de proyectos (donde mandaremos al usuario si no hay proyecto activo)
    path('', views.ProjectListView.as_view(), name='project_list'),
    
    # Detalle del proyecto
    path('<int:pk>/', views.ProjectDetailView.as_view(), name='project_detail'),
]