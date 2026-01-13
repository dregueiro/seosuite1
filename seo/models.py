from django.db import models
from django.contrib.auth.models import User
# Create your models here.
class Notification(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    message = models.TextField()
    audit = models.ForeignKey('keyword_research.URLAudit', on_delete=models.SET_NULL, null=True, blank=True)
    is_read = models.BooleanField(default=False)
    # AÑADE ESTA LÍNEA:
    created_at = models.DateTimeField(auto_now_add=True) 

    def __str__(self):
        return f"Notificación para {self.user.username}"