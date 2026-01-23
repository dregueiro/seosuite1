"""
SEOSuite Proyecto 2026 - Configuración Core Django 6.0.1
Arquitecto: TOTO (Sr. Dev)
"""
import os
from pathlib import Path
import environ

# 1. ENTORNO Y RUTAS
BASE_DIR = Path(__file__).resolve().parent.parent
env = environ.Env(
    DJANGO_DEBUG=(bool, False),
    AUTHORIZED_MONTHLY_BUDGET=(float, 100.0),
)
# Leer .env si existe
environ.Env.read_env(os.path.join(BASE_DIR, '.env'))

# 2. SEGURIDAD CORE
SECRET_KEY = env('DJANGO_SECRET_KEY', default='django-insecure-seosuite-2026-priority-key')
DEBUG = env('DJANGO_DEBUG')
ALLOWED_HOSTS = env.list('ALLOWED_HOSTS', default=['*'])

# 3. DEFINICIÓN DE APLICACIONES (Orden de prioridad)
INSTALLED_APPS = [
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'django.contrib.humanize',
    
    # Third Party
   "django_tomselect",
  
    # SEOSuite Ecosystem (Blueprint v1.4)
    'core',               # Trazabilidad y Middleware
    'clients',            # Billetera y Presupuesto
    'projects',           # Dominios y Geo-Engine
    'integrations',       # The Router (Google vs APIs)
    'keyword_research',   # Magic Tool
    'serp',               # Auditoría SERP
    'seo',                # Módulo de reporting
]

# 4. MIDDLEWARE (Trazabilidad ASGI)
MIDDLEWARE = [
    'django.middleware.security.SecurityMiddleware',
    'whitenoise.middleware.WhiteNoiseMiddleware',
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
   # 'core.middleware.TimezoneMiddleware', # Trazabilidad por Run
    "django_tomselect.middleware.TomSelectMiddleware",

]

ROOT_URLCONF = 'config.urls'
ASGI_APPLICATION = 'config.asgi.application'

# 5. UI & CONTEXT (WOWDASH Ready)
TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': [BASE_DIR / 'templates'],
        'APP_DIRS': True,
        'OPTIONS': {
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
                'seo.context_processors.notifications_processor',
                'core.context_processors.active_project', # Proyecto activo en Sidebar
                 "django_tomselect.context_processors.tomselect",
            ],
        },
    },
]

# 6. PERSISTENCIA Y CACHE (Performance)
DATABASES = {
    'default': env.db('DATABASE_URL', default=f'sqlite:///{BASE_DIR}/db.sqlite3')
}
DATABASES['default']['CONN_MAX_AGE'] = 600 # Optimización Django 6

# config.py

CACHES = {
    "default": {
        "BACKEND": "django.core.cache.backends.redis.RedisCache",
        "LOCATION": env('REDIS_URL', default='redis://127.0.0.1:6379/1'),
    }
}


# 7. ZONA SEGURA Y REGLAS DE NEGOCIO (Blueprint v1.4)
# Frescura de datos (Coste Cero prioritario)
KEYWORD_FRESHNESS_DAYS = 15
SERP_FRESHNESS_HOURS = 24

# Límites de la Zona Segura
DEFAULT_MONTHLY_BUDGET = env('AUTHORIZED_MONTHLY_BUDGET')

# API Credentials (The Router)
DATAFORSEO_LOGIN = env('DATAFORSEO_LOGIN', default='')
DATAFORSEO_PASSWORD = env('DATAFORSEO_PASSWORD', default='')
GOOGLE_ADS_DEVELOPER_TOKEN = env('GOOGLE_ADS_DEVELOPER_TOKEN', default='')

# 8. AUTHENTICATION & REDIRECTS
LOGIN_URL = 'login'
LOGIN_REDIRECT_URL = 'clients:list'
LOGOUT_REDIRECT_URL = 'login'

# 9. STATIC FILES
STATIC_URL = '/static/'
STATICFILES_DIRS = [BASE_DIR / 'static']
STATIC_ROOT = BASE_DIR / 'staticfiles'
# Optimización WhiteNoise para desarrollo
WHITENOISE_USE_FINDERS = True

DEFAULT_AUTO_FIELD = 'django.db.models.BigAutoField'

# 10. BACKGROUND TASKS (Reemplazando Celery por Native si aplica, o manteniendo para compatibilidad)
CELERY_BROKER_URL = env('CELERY_BROKER_URL', default='redis://127.0.0.1:6379/0')
CELERY_ACCEPT_CONTENT = ['json']
CELERY_TASK_SERIALIZER = 'json'

