from django.urls import path
from . import  views # O el nombre de tu vista de lista

app_name = 'integrations'

urlpatterns = [
    # Listado
    path('credentials/', views.GoogleCredentialListView.as_view(), name='credential_list'),
    
    # Crear / Borrar
    path('credentials/add/', views.GoogleCredentialCreateView.as_view(), name='credential_add'),
    path('credentials/<uuid:pk>/delete/', views.GoogleCredentialDeleteView.as_view(), name='credential_delete'),
    
    # AJAX Test (AHORA ES UNA CLASE)
    path('test/<uuid:project_id>/', views.TestIntegrationView.as_view(), name='test_integration'),
    path('api/list-credentials/', views.CredentialListApiView.as_view(), name='api_list_credentials'),
]