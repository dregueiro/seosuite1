from django.core.management.base import BaseCommand
from keyword_research.models import GoogleAdsLanguage

class Command(BaseCommand):
    help = 'Carga los idiomas oficiales de Google Ads (IDs fijos)'

    def handle(self, *args, **options):
        # Fuente oficial: https://developers.google.com/google-ads/api/data/codes-formats#languages
        # Seleccionamos los Top 40 más usados para no llenar de basura, 
        # pero puedes agregar más si tus clientes son muy exóticos.
        
        LANGUAGES = [
            (1000, 'English', 'en'),
            (1003, 'Spanish', 'es'),
            (1002, 'French', 'fr'),
            (1001, 'German', 'de'),
            (1004, 'Italian', 'it'),
            (1019, 'Portuguese', 'pt'),
            (1010, 'Dutch', 'nl'),
            (1015, 'Russian', 'ru'),
            (1017, 'Japanese', 'ja'),
            (1012, 'Chinese (Simplified)', 'zh-CN'),
            (1013, 'Chinese (Traditional)', 'zh-TW'),
            (1014, 'Korean', 'ko'),
            (1018, 'Polish', 'pl'),
            (1030, 'Turkish', 'tr'),
            (1006, 'Danish', 'da'),
            (1007, 'Finnish', 'fi'),
            (1011, 'Norwegian', 'no'),
            (1009, 'Swedish', 'sv'),
            (1005, 'Arabic', 'ar'),
            (1022, 'Hebrew', 'iw'),
            (1021, 'Hindi', 'hi'),
            (1020, 'Thai', 'th'),
            (1027, 'Vietnamese', 'vi'),
            (1023, 'Hungarian', 'hu'),
            (1029, 'Czech', 'cs'),
            (1025, 'Romanian', 'ro'),
            (1024, 'Indonesian', 'id'),
            (1026, 'Slovak', 'sk'),
            (1032, 'Ukrainian', 'uk'),
            (1016, 'Greek', 'el'),
            (1031, 'Urdu', 'ur'),
            (1028, 'Bulgarian', 'bg'),
            (1036, 'Croatian', 'hr'),
            (1039, 'Lithuanian', 'lt'),
            (1008, 'Icelandic', 'is'),
        ]

        self.stdout.write("💾 Cargando idiomas oficiales...")
        
        created_count = 0
        for pid, name, code in LANGUAGES:
            obj, created = GoogleAdsLanguage.objects.update_or_create(
                criteria_id=pid,
                defaults={'name': name, 'code': code}
            )
            if created:
                created_count += 1

        self.stdout.write(self.style.SUCCESS(f"✅ ¡Listo! {len(LANGUAGES)} idiomas disponibles (Agregados: {created_count})."))