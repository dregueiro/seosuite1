import csv
import io
import requests
import zipfile
import os
import sys
from django.core.management.base import BaseCommand
from keyword_research.models import GoogleAdsLocation

class Command(BaseCommand):
    help = 'Importa los GeoTargets de Google Ads (Soporta URL o Archivo Local)'

    # Página oficial para referencia
    DOCS_PAGE_URL = 'https://developers.google.com/google-ads/api/data/geotargets'

    def add_arguments(self, parser):
        parser.add_argument('--url', type=str, help='URL directa del CSV/ZIP (si el auto-descubrimiento falla)')
        parser.add_argument('--file', type=str, help='Ruta a un archivo local (.csv o .zip) ya descargado')

    def handle(self, *args, **options):
        content = None
        
        # MODO 1: Archivo Local (Prioridad Máxima - "Air Gap")
        if options['file']:
            file_path = options['file']
            self.stdout.write(f"📂 Cargando desde archivo local: {file_path}")
            if not os.path.exists(file_path):
                self.stdout.write(self.style.ERROR("❌ El archivo no existe."))
                return
            
            if file_path.endswith('.zip'):
                with zipfile.ZipFile(file_path, 'r') as z:
                    csv_filename = z.namelist()[0]
                    with z.open(csv_filename) as f:
                        content = f.read().decode('utf-8')
            else:
                with open(file_path, 'r', encoding='utf-8') as f:
                    content = f.read()

        # MODO 2: URL Proporcionada (Manual Override)
        elif options['url']:
            url = options['url']
            self.stdout.write(f"⬇️  Descargando desde URL explícita: {url}")
            content = self._download_content(url)

        # MODO 3: Fallo Automático
        else:
            self.stdout.write(self.style.ERROR("❌ El modo automático requiere un navegador real por el JavaScript de Google."))
            self.stdout.write(self.style.WARNING(f"👉 Por favor, ve a {self.DOCS_PAGE_URL}"))
            self.stdout.write(self.style.WARNING("👉 Busca 'Latest CSV', haz click derecho y 'Copiar dirección de enlace'."))
            self.stdout.write(self.style.WARNING("👉 Ejecuta: python manage.py import_google_locations --url \"LINK_COPIADO\""))
            return

        if not content:
            self.stdout.write(self.style.ERROR("❌ No se pudo obtener contenido. Revisa la URL o el archivo."))
            return

        # PROCESAMIENTO (Común para todos los modos)
        self._process_csv(content)

    def _download_content(self, url):
        try:
            # Headers para parecer un navegador
            headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'}
            response = requests.get(url, headers=headers, stream=True)
            response.raise_for_status()

            # Detectar si es ZIP por extensión o header
            if url.endswith('.zip') or 'zip' in response.headers.get('Content-Type', ''):
                with zipfile.ZipFile(io.BytesIO(response.content)) as z:
                    # Buscamos el primer CSV dentro del zip
                    csv_files = [f for f in z.namelist() if f.endswith('.csv')]
                    if not csv_files:
                         self.stdout.write(self.style.ERROR("❌ El ZIP no contiene archivos CSV."))
                         return None
                    
                    csv_filename = csv_files[0]
                    self.stdout.write(f"📦 Descomprimiendo: {csv_filename}")
                    with z.open(csv_filename) as f:
                        return f.read().decode('utf-8')
            else:
                return response.content.decode('utf-8')
        except Exception as e:
            self.stdout.write(self.style.ERROR(f"Error descargando: {e}"))
            return None

    def _process_csv(self, content_text):
        # Limpiar BOM si existe
        if content_text.startswith('\ufeff'):
            content_text = content_text[1:]

        csv_reader = csv.DictReader(io.StringIO(content_text))
        buffer = []
        total_created = 0
        batch_size = 5000

        self.stdout.write("💾  Insertando registros en la DB (esto tomará unos segundos)...")

        # Mapeo de columnas (Google a veces usa nombres diferentes)
        # Estandar: Criteria ID, Name, Canonical Name, Parent ID, Country Code, Target Type, Status
        
        for row in csv_reader:
            try:
                # Validamos que sea un Target activo o relevante
                if row.get('Status') == 'Removal':
                    continue 

                loc = GoogleAdsLocation(
                    criteria_id=int(row['Criteria ID']),
                    name=row['Name'],
                    canonical_name=row['Canonical Name'],
                    parent_id=int(row['Parent ID']) if row.get('Parent ID') else None,
                    country_code=row['Country Code'],
                    target_type=row['Target Type'],
                    status=row['Status']
                )
                buffer.append(loc)
            except (KeyError, ValueError):
                continue

            if len(buffer) >= batch_size:
                GoogleAdsLocation.objects.bulk_create(buffer, ignore_conflicts=True)
                total_created += len(buffer)
                sys.stdout.write(f"\r   ... procesados: {total_created}")
                sys.stdout.flush()
                buffer = []

        if buffer:
            GoogleAdsLocation.objects.bulk_create(buffer, ignore_conflicts=True)
        
        self.stdout.write("\n")
        self.stdout.write(self.style.SUCCESS(f"✅ ¡LISTO! {total_created + len(buffer)} ubicaciones importadas."))