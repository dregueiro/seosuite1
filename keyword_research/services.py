import pandas as pd
import io
import requests
import xml.etree.ElementTree as ET
from .models import KeywordIdea, URLAudit
from core.models import Run


def sync_urls_from_sitemap(project):
    # Rank Math typically uses sitemap_index.xml
    base_sitemap_url = f"{project.gsc_property_url}sitemap_index.xml"
    namespace = {'ns': 'http://www.sitemaps.org/schemas/sitemap/0.9'}
    
    def get_urls_from_xml(url):
        print(f"Reading: {url}")
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
                    urls.extend(get_urls_from_xml(sub_url)) # Recursive call
            
            # 2. Check if it contains actual Page URLs
            url_nodes = root.findall('ns:url', namespace)
            for u in url_nodes:
                loc = u.find('ns:loc', namespace).text
                urls.append(loc)
                
            return urls
        except Exception as e:
            print(f"Error reading {url}: {e}")
            return urls

    all_urls = get_urls_from_xml(base_sitemap_url)
    
    # If index fails, try the standard sitemap.xml as fallback
    if not all_urls:
        all_urls = get_urls_from_xml(f"{project.gsc_property_url}sitemap.xml")

    urls_created = 0
    for url_loc in set(all_urls): # set() avoids duplicates
        obj, created = URLAudit.objects.get_or_create(
            project=project,
            url=url_loc
        )
        if created:
            urls_created += 1
            
    if all_urls:
        return True, f"Found {len(all_urls)} URLs total. {urls_created} new entries added."
    return False, "Could not find any URLs in sitemap_index.xml or sitemap.xml"




def import_google_ads_csv(project, file_handle):
    # 1. Creamos un registro de ejecución (Run) para trazar la subida
    run = Run.objects.create(project=project, kind='keyword_import', status='running')
    
    try:
        # 2. Leer el contenido del archivo subido
        content = file_handle.read().decode('utf-16') # Google Ads usa UTF-16
        df = pd.read_csv(io.StringIO(content), sep='\t', skiprows=2)
        
        count = 0
        for _, row in df.iterrows():
            kw_text = str(row.get('Keyword', '')).strip()
            
            # Solo guardamos si hay una palabra clave válida
            if kw_text and kw_text != 'nan':
                # update_or_create evita duplicados
                KeywordIdea.objects.update_or_create(
                    project=project,
                    keyword=kw_text,
                    defaults={
                        'avg_monthly_searches': int(row.get('Avg. monthly searches', 0)) if pd.notnull(row.get('Avg. monthly searches')) else 0,
                        'competition_level': row.get('Competition', 'Unknown'),
                        'run': run
                    }
                )
                count += 1
        
        run.status = 'success'
        run.save()
        return True, f"¡Éxito! Se han importado {count} palabras clave."
        
    except Exception as e:
        run.status = 'failed'
        run.save()
        return False, f"Error al procesar el archivo: {str(e)}"