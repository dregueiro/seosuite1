from django.urls import path
from .views import (
    ProjectCreateView, 
    ProjectDeleteView, 
    ProjectListView, 
    ProjectUpdateView,
    ProjectIntegrationView,      # <--- NUEVA
    test_google_integration_ajax,
    ProjectByClientListView, # <--- NUEVA
    ActivateProjectView
)

app_name = 'projects'


app_name = 'projects'

urlpatterns = [
    path('', ProjectListView.as_view(), name='list'),
    path('create/', ProjectCreateView.as_view(), name='create'),
    path('client/<uuid:client_id>/', ProjectByClientListView.as_view(), name='by_client'),
    path('<int:pk>/update/', ProjectUpdateView.as_view(), name='update'),
    path('<int:pk>/delete/', ProjectDeleteView.as_view(), name='delete'),
    path('<int:pk>/activate/', ActivateProjectView.as_view(), name='activate'),
    # Integraciones
    path('<int:pk>/integrations/', ProjectIntegrationView.as_view(), name='integrations'),
    path('<int:pk>/test-access/', test_google_integration_ajax, name='test_access'),
]