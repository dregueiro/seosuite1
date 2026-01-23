import csv
import io
import logging
from ..models import KeywordIdeaRun, KeywordIdea

logger = logging.getLogger(__name__)

def import_google_ads_csv(project, user, file_handle):
    """
    Importa keywords de Google Ads (CSV/TSV) de forma eficiente.
    Cumple con: Zero-Bloat (no pandas), Run Protocol y Batch Insert.
    """
    
    # 1. Crear el Run (Traza la operación)
    run = KeywordIdeaRun.objects.create(
        project=project,
        user=user,
        source='google_ads_import',
        status='RUNNING',
        seed_keyword='Manual Import'
    )

    try:
        # 2. Detectar codificación y leer archivo
        # Google Ads suele exportar en UTF-16 LE con tabs, pero a veces es UTF-8.
        # Leemos el archivo en memoria.
        content = file_handle.read()
        
        try:
            decoded_file = content.decode('utf-16')
        except UnicodeError:
            decoded_file = content.decode('utf-8-sig') # Fallback común

        io_string = io.StringIO(decoded_file)
        
        # Detectamos si es tabulador (TSV) o coma (CSV)
        dialect = csv.Sniffer().sniff(io_string.read(1024))
        io_string.seek(0)
        
        # Saltamos las primeras 2 líneas que Google pone de "título"
        # Ojo: A veces Google pone 2, a veces 0. Una lógica robusta busca el header.
        reader = csv.DictReader(io_string, dialect=dialect)
        
        ideas_to_create = []
        count = 0

        # 3. Procesar filas en memoria (Rapidísimo)
        for row in reader:
            # Normalización de nombres de columnas (Google cambia idioma a veces)
            kw_text = row.get('Keyword') or row.get('Criterio') or row.get('Palabra clave')
            
            if not kw_text: 
                continue

            vol_str = row.get('Avg. monthly searches') or row.get('Promedio de búsquedas mensuales') or '0'
            comp_str = row.get('Competition') or row.get('Competencia') or '0'

            # Limpieza básica
            try:
                search_volume = int(str(vol_str).replace(',', '').replace('.', ''))
            except ValueError:
                search_volume = 0

            # Mapeo de competencia a numérico (si viene como texto)
            comp_val = 0.5 # Default
            if isinstance(comp_str, str):
                if 'High' in comp_str or 'Alta' in comp_str: comp_val = 1.0
                elif 'Low' in comp_str or 'Baja' in comp_str: comp_val = 0.1
            
            # Instanciamos en memoria (NO guarda en DB todavía)
            ideas_to_create.append(KeywordIdea(
                run=run,
                keyword=kw_text.strip(),
                search_volume=search_volume,
                competition=comp_val,
                raw_data=row  # Guardamos el resto por si acaso
            ))
            count += 1

        # 4. BULK CREATE: El secreto de la velocidad
        # Inserta 5,000 filas en 1 sola query.
        if ideas_to_create:
            KeywordIdea.objects.bulk_create(ideas_to_create, batch_size=1000)

        # 5. Cerrar Run con éxito
        run.status = 'SUCCESS'
        run.save()
        
        return True, f"Procesado exitoso. Se importaron {count} keywords."

    except Exception as e:
        logger.error(f"Error importando CSV: {e}")
        run.status = 'FAILED'
        run.save()
        return False, f"Error crítico: {str(e)}"