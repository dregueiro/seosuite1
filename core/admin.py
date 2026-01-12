from django.contrib import admin
from .models import Run

@admin.register(Run)
class ProjectAdmin(admin.ModelAdmin):
    list_display = ('id','project','provider')
# Register your models here.
