# serp/urls.py
from django.urls import path
from . import views

app_name = 'serp'

urlpatterns = [
    # ...
    path('project/<int:pk>/audit/', views.UrlAuditView.as_view(), name='url_audit'),
    path('project/<int:pk>/audit/bulk/', views.BulkInspectView.as_view(), name='bulk_inspect'),
    path('project/<int:project_pk>/inspect/<int:pk>/', views.InspectUrlView.as_view(), name='inspect_url'),
    path('duel/<int:project_id>/<int:keyword_id>/', views.RunSerpDuelView.as_view(), name='run_duel'),
    path('project/<int:pk>/audit/<int:audit_id>/request-index/', views.RequestIndexingView.as_view(), name='request_indexing'),
    path('analysis/<int:pk>/', views.SerpAnalysisDashboardView.as_view(), name='serp_analysis'),    
]