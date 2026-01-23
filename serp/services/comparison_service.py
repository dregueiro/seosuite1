from core.models import Run
from serp.models import SerpSnapshot
from integrations.serpapi.client import SerpApiClient
from integrations.dataforseo.client import DataForSeoClient
from keyword_research.models import KeywordIdea, Keyword # Importamos ambos para la validación

class SerpComparisonService:
    @staticmethod
    def run_dual_test(project, keyword_obj, user):
        """
        Ejecuta el Duelo Técnico entre SerpAPI y DataForSEO.
        Regla 2 (Trazabilidad): Registra cada paso y guarda los resultados reales.
        """
        if not project or not keyword_obj:
            print("❌ [DUELO] Error: Proyecto o Keyword no proporcionados.")
            return "error"
        
        # 1. Preparación de Inputs dinámicos (Base de Datos)
        country = getattr(project, 'target_country_code', 'es').lower()
        language = getattr(project, 'language_code', 'es').lower()
        kw_text = getattr(keyword_obj, 'keyword', str(keyword_obj))
        
        # Iniciamos RUN para auditoría total
        master_run = Run.objects.create(
            project=project,
            user=user,
            kind="serp.dual_test",
            inputs={
                "keyword": kw_text, 
                "country": country, 
                "language": language
            }    
        )

        try:
            print(f"📡 [DUELO] Iniciando batalla para: '{kw_text}' ({country}/{language})")
            
            # 2. Ejecución de Llamadas
            # PEPE FIX: Usamos argumentos con nombre para evitar que el idioma se asigne al 'device'
            res_serp = SerpApiClient.fetch_serp(
                keyword=kw_text, 
                country_code=country, 
                language_code=language,
                device='desktop'
            )
            
            res_dfs = DataForSeoClient.fetch_serp(
                keyword=kw_text, 
                country_code=country, 
                language_code=language
            )

            # Extraemos los conteos reales de la lista de resultados
            s_c = res_serp.get('total_count', 0)
            d_c = res_dfs.get('total_count', 0)
            
            results = {
                'serpapi': {'count': s_c}, 
                'dataforseo': {'count': d_c}
            }

            # 3. Lógica de Decisión (Profundidad de scraping)
            winner = 'none'
            if s_c > 0 and s_c >= d_c:
                winner = 'serpapi'
            elif d_c > 0:
                winner = 'dataforseo'
            
            # 4. Persistencia Maestra (Guardamos lo que trajo el camión)
            if winner != 'none':
                # Identificamos el set de resultados del ganador
                winner_data = res_serp if winner == 'serpapi' else res_dfs
                organic_list = winner_data.get('organic_results', [])
                # --- PEPE CALCULA EL RANK ---
                # Buscamos el dominio del proyecto en los resultados
                project_domain = project.url.replace('https://', '').replace('http://', '').replace('www.', '').split('/')[0]
                detected_rank = 0
                
                for idx, res in enumerate(organic_list, 1):
                    res_domain = res.get('domain', '') or res.get('link', '')
                    if project_domain in res_domain:
                        detected_rank = idx
                        break
                # ---------------------------
                # PEPE SMART LOGIC: Preparamos los parámetros del Snapshot
                snapshot_params = {
                    'project': project,
                    'provider': winner,
                    'rank': detected_rank, # <--- ¡Ya no es 0!
                    'raw_data': {
                        'winner': winner,
                        'metrics': results,
                        'kw': kw_text,
                        'organic_results': organic_list
                    }
                }

                # REGLA DE ORO: Validamos si keyword_obj es una IDEA o una KEYWORD real
                if isinstance(keyword_obj, KeywordIdea):
                    snapshot_params['idea'] = keyword_obj
                elif isinstance(keyword_obj, Keyword):
                    snapshot_params['keyword'] = keyword_obj

                # Creamos el Snapshot sin que explote la base de datos
                SerpSnapshot.objects.create(**snapshot_params)
                
                # Actualizamos la preferencia del proyecto para futuros rastreos
                project.preferred_serp_provider = winner
                project.save(update_fields=['preferred_serp_provider'])
                
                print(f"✅ [DUELO] Ganador: {winner.upper()} ({s_c} vs {d_c} resultados)")
            else:
                print("⚠️ [DUELO] Empate técnico a cero. Revisa credenciales o parámetros.")

            # 5. Cierre de Auditoría
            master_run.status = "success"
            master_run.outputs = {
                "winner": winner, 
                "results": results,
                "counts": {"serpapi": s_c, "dataforseo": d_c},
                "msg": "Duelo completado con éxito"
            }
            master_run.save()

            return winner

        except Exception as e:
            print(f"❌ [DUELO] Error crítico: {str(e)}")
            master_run.status = "error"
            master_run.error_log = str(e)
            master_run.save()
            return "error"