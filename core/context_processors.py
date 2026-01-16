from projects.models import Project

def active_project(request):
    """
    Inyecta el proyecto activo en todas las plantillas.
    """
    project_id = None
    
    # 1. Intentar obtener de la URL
    resolved = request.resolver_match
    if resolved and resolved.kwargs.get('pk'):
        # Verificamos si estamos en una app que usa Project ID en la URL
        # OJO: En keyword_research/magic/, el pk es un RUN, no un PROYECTO.
        # Pero para arreglar el error 500, lo primero es convertirlo a string.
        if resolved.app_name in ['seo', 'projects']:
            
            # 🔴 FIX CRÍTICO: Convertir a STRING inmediatamente
            raw_pk = resolved.kwargs['pk']
            project_id = str(raw_pk) 
            
            # Guardamos en sesión SOLO si es un string válido
            request.session['active_project_id'] = project_id
            request.session.modified = True

    # 2. Fallback: Obtener de la sesión (Si la URL no tenía ID)
    if not project_id:
        project_id = request.session.get('active_project_id')
        
    sidebar_project = None
    if project_id:
        try:
            # Buscamos el proyecto (Django maneja el string UUID en la consulta automáticamente)
            sidebar_project = Project.objects.filter(pk=project_id).first()
        except Exception:
            sidebar_project = None
            
    return {
        'sidebar_project': sidebar_project,
        # Optimizamos la consulta de la lista también
        'all_projects_list': Project.objects.only('id', 'name', 'domain').all()[:15]
    }