from projects.models import Project

def active_project(request):
    """
    Inyecta el proyecto activo en todas las plantillas.
    """
    project_id = None
    
    # 1. Intentar obtener de la URL
    resolved = request.resolver_match
    if resolved and 'pk' in resolved.kwargs:
        if resolved.app_name in ['seo', 'projects', 'keyword_research']:
            project_id = resolved.kwargs['pk']
            request.session['active_project_id'] = project_id
            request.session.modified = True

    # 2. Fallback: Obtener de la sesión
    if not project_id:
        project_id = request.session.get('active_project_id')
        
    sidebar_project = None
    if project_id:
        try:
            sidebar_project = Project.objects.filter(pk=project_id).first()
        except Exception:
            sidebar_project = None
            
    return {
        'sidebar_project': sidebar_project,  # Usaremos este en el HTML
        'all_projects_list': Project.objects.only('id', 'name', 'domain').all()[:15]
    }