from django.urls import path
from .views import GoogleCredentialListView # O el nombre de tu vista de lista

app_name = 'integrations'

urlpatterns = [
    path('credentials/', GoogleCredentialListView.as_view(), name='credential_list'),
]