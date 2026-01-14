from django.urls import path
from .views import ProjectCreateView, ProjectDeleteView, ProjectDetailView, ProjectListView, ProjectUpdateView

app_name = 'projects'

urlpatterns = [
    # Lista de proyectos (donde mandaremos al usuario si no hay proyecto activo)
    path('', ProjectListView.as_view(), name='project_list'),
    path('create/', ProjectCreateView.as_view(), name='create'),
    path('<int:pk>/update/', ProjectUpdateView.as_view(), name='update'),
    path('<int:pk>/delete/', ProjectDeleteView.as_view(), name='delete'),
    # Detalle del proyecto
    path('<int:pk>/', ProjectDetailView.as_view(), name='project_detail'),
]