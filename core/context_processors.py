# core/context_processors.py
from django.core.exceptions import ValidationError
from projects.models import Project

def active_project(request):
    if not request.user.is_authenticated:
        return {'active_project': None, 'budget_alert': False, 'all_projects_list': []}

    active_proj = None
    project_id = request.session.get('active_project_id')

    # Búsqueda segura con select_related para evitar N+1
    if project_id:
        try:
            active_proj = Project.objects.filter(
                pk=project_id, 
                client__user=request.user
            ).select_related('client').first()
        except (ValueError, ValidationError, TypeError):
            active_proj = None

    # Fallback: si no hay selección, traer el primero
    if not active_proj:
        active_proj = Project.objects.filter(client__user=request.user).select_related('client').first()

    # BLOQUE DE SEGURIDAD TOTO: Solo calculamos si active_proj EXISTE
    budget_alert = False
    if active_proj and active_proj.client:
        limit = getattr(active_proj.client, 'authorized_monthly_budget', 0)
        spend = getattr(active_proj.client, 'current_month_spend', 0)
        if limit > 0:
            budget_alert = spend >= limit

    return {
        'active_project': active_proj,
        'budget_alert': budget_alert,
        'all_projects_list': Project.objects.filter(client__user=request.user)[:15]
    }