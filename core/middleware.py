import zoneinfo
from django.utils import timezone

class TimezoneMiddleware:
    def __init__(self, get_response):
        self.get_response = get_response

    def __call__(self, request):
        tzname = "America/New_York" # Default para Charlotte, NC

        if request.user.is_authenticated:
            # Protección contra usuarios sin cliente (como el Superuser)
            client = request.user.clients.first()
            if client:
                tzname = client.timezone

        try:
            timezone.activate(zoneinfo.ZoneInfo(tzname))
        except Exception:
            timezone.activate(zoneinfo.ZoneInfo("UTC"))

        return self.get_response(request)