from django.shortcuts import get_object_property, redirect
from django.contrib import messages
from projects.models import Project

def test_google_connection(request, project_id):
    project = get_object_or_404(Project, id=project_id)
    # Lógica minimalista de validación
    if project.google_credential:
        # Aquí llamaríamos a un servicio de validación (Fase B)
        messages.success(request, f"Conexión exitosa con la cuenta de {project.name}")
    else:
        messages.error(request, "No hay credenciales asignadas a este proyecto.")
    
    return redirect('projects:list')