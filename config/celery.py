import os
from celery import Celery

# 1. Asegúrate de que apunte a config.settings
os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'config.settings')

app = Celery('config') # Cambia esto a 'config' si tu carpeta se llama así

# 2. Fuerza a que lea el prefijo CELERY en settings.py
app.config_from_object('django.conf:settings', namespace='CELERY')

app.autodiscover_tasks()