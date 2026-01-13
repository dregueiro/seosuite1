from .models import Notification

def notifications_processor(request):
    if request.user.is_authenticated:
        # Usamos select_related para que sea rápido y no sature la base de datos
        notifications = Notification.objects.filter(
            user=request.user
        ).select_related('audit__project').order_by('-created_at')[:5]
        
        unread_count = Notification.objects.filter(user=request.user, is_read=False).count()
        
        return {
            'user_notifications': notifications,
            'unread_notifications_count': unread_count
        }
    return {}