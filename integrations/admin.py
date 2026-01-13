from django.contrib import admin

# Register your models here.

from .models import GoogleCredential

@admin.register(GoogleCredential)
class GoogleCredentialAdmin(admin.ModelAdmin):
    list_display = ('name', 'client_email', 'created_at')
    search_fields = ('name', 'client_email')