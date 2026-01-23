from typing import List
from django.db import transaction
from core.models import Run
from projects.models import Project

class KeywordPromotionService:
    """
    Servicio encargado de convertir variantes sugeridas en Keywords reales 
    de seguimiento para un proyecto.
    """
    
    @staticmethod
    def promote_to_project(project_id: int, keywords_data: List[dict], user) -> dict:
        project = Project.objects.get(pk=project_id)
        
        # Iniciamos el Run para trazabilidad
        run = Run.objects.create(
            project=project,
            user=user,
            kind="internal.promote_keywords",
            provider="internal",
            inputs={"count": len(keywords_data)}
        )

        try:
            with transaction.atomic():
                new_keywords = []
                for item in keywords_data:
                    # DEDUPE: No duplicar si ya existe en el proyecto
                    obj, created = Keyword.objects.get_or_create(
                        project=project,
                        normalized_name=item['keyword'].strip().lower(),
                        defaults={
                            'name': item['keyword'],
                            'search_volume': item.get('volume', 0),
                            'cpc': item.get('cpc', 0.0)
                        }
                    )
                    if created:
                        new_keywords.append(obj)
                
                run.status = "success"
                run.outputs = {"added": len(new_keywords)}
                run.save()
                
                return {"status": "success", "added_count": len(new_keywords)}
        
        except Exception as e:
            run.status = "error"
            run.error_log = str(e)
            run.save()
            raise e
        
