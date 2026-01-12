from django.contrib import admin
from .models import Client

@admin.register(Client)
class ProjectAdmin(admin.ModelAdmin):
    list_display = ('name', 'id')