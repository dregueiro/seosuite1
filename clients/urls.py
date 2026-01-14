from django.urls import path
from .views import ClientListView, ClientDeleteView, ClientCreateView, ClientUpdateView

app_name = 'clients'
urlpatterns = [
    path('', ClientListView.as_view(), name='list'),
    path('create/', ClientCreateView.as_view(), name='create'),
    path('<uuid:pk>/update/', ClientUpdateView.as_view(), name='update'),
    path('<uuid:pk>/delete/', ClientDeleteView.as_view(), name='delete'),
]