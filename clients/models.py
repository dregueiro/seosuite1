from django.db import models
import uuid

class Client(models.Model):
    id = models.UUIDField(primary_key=True, default=uuid.uuid4, editable=False)
    name = models.CharField(max_length=255)
    
    # Blueprint v1.4: Control de costos
    authorized_monthly_budget = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    current_month_spend = models.DecimalField(max_digits=10, decimal_places=4, default=0.00)
    
    is_active = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.name