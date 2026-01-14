import pandas as pd
import io
from ..models import KeywordIdea # Subimos un nivel para encontrar el modelo
from core.models import Run

def import_google_ads_csv(project, file_handle):
    run = Run.objects.create(project=project, kind='keyword_import', status='running')
    try:
        content = file_handle.read().decode('utf-16')
        df = pd.read_csv(io.StringIO(content), sep='\t', skiprows=2)
        count = 0
        for _, row in df.iterrows():
            kw_text = str(row.get('Keyword', '')).strip()
            if kw_text and kw_text != 'nan':
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