# keyword_research/services/close_variants.py

class CloseVariantsService:
    @classmethod
    def generate(cls, seeds):
        """
        Toma una lista de keywords y genera variaciones inteligentes.
        """
        variations = set()
        # Modificadores SEO para España (ajustables según target_country_code)
        modifiers = [
            'mejor', 'barato', 'online', 'precio', 'comprar', 
            'opiniones', 'guia', 'donde', 'como', '2026'
        ]
        
        for kw in seeds:
            kw = kw.lower().strip()
            # 1. Variaciones con modificadores (Sufijos y Prefijos)
            for mod in modifiers:
                variations.add(f"{kw} {mod}")
                variations.add(f"{mod} {kw}")
            
            # 2. Variaciones por intención informativa (Preguntas)
            prepositions = ['para', 'que es', 'como usar']
            for prep in prepositions:
                variations.add(f"{prep} {kw}")

        return list(variations)