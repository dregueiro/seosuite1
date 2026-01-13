# seo/urls.py
from django.urls import path
from .views import ProjectDashboardView, KeywordMagicView, url_audit_view, bulk_inspect_urls, inspect_single_url, RequestIndexingView, \
check_notifications, mark_notifications_as_read

app_name = 'seo'

# seo/urls.py
urlpatterns = [
    path('project/<int:pk>/', ProjectDashboardView.as_view(), name='project_dashboard'),
    # Nueva URL para la herramienta de Keywords
    path('project/<int:pk>/keywords/', KeywordMagicView.as_view(), name='keyword_magic'),
    path('project/<int:pk>/audit/', url_audit_view, name='url_audit'),
    path('project/<int:pk>/audit/inspect/<int:audit_id>/', inspect_single_url, name='inspect_url'),
    path('project/<int:pk>/audit/bulk/', bulk_inspect_urls, name='bulk_inspect'),
    path('project/<int:pk>/audit/<int:audit_id>/request-index/', RequestIndexingView.as_view(), name='request_indexing'),
    path('check-notifications/', check_notifications, name='check_notifications'),
    path('mark-read/', mark_notifications_as_read, name='mark_notifications_as_read'),
]
