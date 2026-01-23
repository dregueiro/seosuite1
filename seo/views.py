# seo/views.py

from django.views.generic import DetailView
from django.shortcuts import render, get_object_or_404, redirect
from django.contrib import messages
from django.db.models import Sum
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse

from projects.models import Project
from keyword_research.models import KeywordIdea
from .models import Notification

# --- 1. NOTIFICACIONES (HTMX) ---
@login_required
def check_notifications(request):
    """Regla 3: UI desacoplada con HTMX"""
    unread_count = Notification.objects.filter(user=request.user, is_read=False).count()
    return render(request, 'includes/notification_badge_partial.html', {
        'unread_notifications_count': unread_count
    })

@login_required
def mark_notifications_as_read(request):
    Notification.objects.filter(user=request.user, is_read=False).update(is_read=True)
    if request.headers.get('HX-Request'):
        context = {
            'unread_notifications_count': 0,
            'user_notifications': Notification.objects.filter(user=request.user).order_by('-created_at')[:5]
        }
        return render(request, 'includes/notification_badge_partial.html', context)
    return HttpResponse(status=204)

# --- 2. DASHBOARD PRINCIPAL ---
class ProjectDashboardView(DetailView):
    model = Project
    template_name = 'seo/dashboard.html'
    context_object_name = 'project'

    def get_queryset(self):
        # REGLA 1: Seguridad Multi-tenancy
        return Project.objects.filter(client__user=self.request.user)

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        
        # Filtramos ideas a través de la relación 'run'
        base_keywords = KeywordIdea.objects.filter(run__project=self.object)
        
        # Totales con nombres de campos correctos
        context['total_keywords'] = base_keywords.count()
        total_vol = base_keywords.aggregate(Sum('search_volume'))['search_volume__sum']
        context['total_volume'] = total_vol or 0
        
        # Oportunidades (Regla 2: Smart Insights)
        context['opportunities'] = base_keywords.filter(
            search_volume__gte=1000, 
            competition__lte=0.7
        ).count()

        # Configuración de Gates
        context['gsc_configured'] = bool(self.object.gsc_property_url and self.object.google_credential)
        context['ga4_configured'] = bool(self.object.ga4_property_id and self.object.google_credential)

        # Top 10 para el widget
        context['keywords'] = base_keywords.order_by('-search_volume')[:10]
        return context