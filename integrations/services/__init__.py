from .google_auth import GoogleAuthService

# Puente para compatibilidad con código antiguo
def inspect_url_status(project, url):
    return GoogleAuthService.inspect_url_status(project, url)

def force_indexing_url(project, url):
    return GoogleAuthService.force_indexing_url(project, url)