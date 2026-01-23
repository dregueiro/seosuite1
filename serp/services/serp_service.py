from datetime import timedelta
from django.utils import timezone
from models import SerpSnapshot

class SerpRouterService:
    @staticmethod
    def get_position(project, keyword_obj):
        # 1. Intentar recuperar del "Caché de 15 días" ($0 Cost)
        latest_snapshot = SerpSnapshot.objects.filter(
            project=project,
            keyword=keyword_obj
        ).order_by('-created_at').first()

        if latest_snapshot and latest_snapshot.is_fresh:
            print(f"✅ [SERP CACHE] Usando dato de hace { (timezone.now() - latest_snapshot.created_at).days } días.")
            return latest_snapshot, False # False = No hubo gasto de API

        # 2. Si no es fresco o no existe, llamar al Router de Pago
        # Aquí es donde entraría SerpAPI o DataForSEO
        print(f"💰 [SERP API] Datos expirados o inexistentes. Iniciando llamada de pago...")
        
        # Simulación de llamada (Próximo paso: Integrar API real)
        # new_data = SerpAPIClient.fetch(keyword_obj.name)
        
        return None, True # True = Requiere gasto

# serp/services/serp_service.py

class SerpOrchestrator:
    @classmethod
    def execute_dual_test(cls, project, keyword_obj, user):
        # 1. Creamos un Run Maestro
        master_run = Run.objects.create(
            project=project,
            user=user,
            kind="serp.dual_test_bench",
            inputs={"keyword": keyword_obj.name}
        )

        # 2. Ejecutamos ambas APIs (Nivel 2 - Pago $$$)
        # Nota: Aquí cada adaptador guarda su propio 'ProviderResponse' (JSON crudo)
        res_serp = SerpApiClient.fetch(keyword_obj, project)
        res_dfs = DataForSeoClient.fetch(keyword_obj, project)

        # 3. Guardamos los Snapshots de ambos para el histórico
        snap_serp = SerpSnapshot.objects.create(
            project=project,
            keyword=keyword_obj,
            provider="serpapi",
            rank=res_serp['my_pos'],
            raw_data=res_serp['raw'] # Guardamos TODO el JSON
        )

        snap_dfs = SerpSnapshot.objects.create(
            project=project,
            keyword=keyword_obj,
            provider="dataforseo",
            rank=res_dfs['my_pos'],
            raw_data=res_dfs['raw'] # Guardamos TODO el JSON
        )

        # 4. El Juez: ¿Quién trajo más datos útiles?
        # Comparamos, por ejemplo, la cantidad de resultados orgánicos totales
        serp_count = len(res_serp['raw'].get('organic_results', []))
        dfs_count = len(res_dfs['raw'].get('items', []))

        winner = "serpapi" if serp_count >= dfs_count else "dataforseo"

        # 5. Persistencia de la decisión en el Proyecto
        project.preferred_serp_provider = winner
        project.save()

        master_run.status = "success"
        master_run.outputs = {
            "winner": winner,
            "serpapi_results": serp_count,
            "dataforseo_results": dfs_count
        }
        master_run.save()

        return winner