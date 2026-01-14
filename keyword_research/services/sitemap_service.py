import requests
import xml.etree.ElementTree as ET
from ..models import URLAudit

def sync_urls_from_sitemap(project):
    """
    Lee el sitemap del proyecto y sincroniza las URLs en la tabla URLAudit.
    """
    # Rank Math típicamente usa sitemap_index.xml
    base_sitemap_url = f"{project.gsc_property_url}sitemap_index.xml"
    namespace = {'ns': 'http://www.sitemaps.org/schemas/sitemap/0.9'}
    
    def get_urls_from_xml(url):
        urls = []
        try:
            resp = requests.get(url, timeout=10)
            if resp.status_code != 200:
                return urls
            
            root = ET.fromstring(resp.content)
            
            # 1. Check if it's a Sitemap Index (contains other sitemaps)
            sitemaps = root.findall('ns:sitemap', namespace)
            if sitemaps:
                for s in sitemaps:
                    sub_url = s.find('ns:loc', namespace).text
                    urls.extend(get_urls_from_xml(sub_url)) # Llamada recursiva
            
            # 2. Check if it contains actual Page URLs
            url_nodes = root.findall('ns:url', namespace)
            for u in url_nodes:
                loc = u.find('ns:loc', namespace).text
                urls.append(loc)
                
            return urls
        except Exception as e:
            print(f"Error leyendo {url}: {e}")
            return urls

    all_urls = get_urls_from_xml(base_sitemap_url)
    
    # Fallback al sitemap estándar si el index falla
    if not all_urls:
        all_urls = get_urls_from_xml(f"{project.gsc_property_url}sitemap.xml")

    urls_created = 0
    for url_loc in set(all_urls):
        obj, created = URLAudit.objects.get_or_create(
            project=project,
            url=url_loc
        )
        if created:
            urls_created += 1
            
    if all_urls:
        return True, f"Total: {len(all_urls)} URLs. {urls_created} nuevas añadidas."
    return False, "No se encontraron URLs en el sitemap."