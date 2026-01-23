import re

class KeywordIntelligenceService:
    @staticmethod
    def determine_intent(keyword: str) -> str:
        kw = keyword.lower()
        # Patrones comunes (puedes ampliar esta lista)
        patterns = {
            'transactional': [r'comprar', r'precio', r'oferta', r'tienda', r'barato', r'donde'],
            'commercial': [r'mejor', r'vs', r'comparativa', r'opiniones', r'review', r'top'],
            'navigational': [r'login', r'oficial', r'web', r'acceso', r'descargar']
        }
        
        for intent, regexes in patterns.items():
            if any(re.search(p, kw) for p in regexes):
                return intent
        return 'informational'
    
class IntentResolverService:
    """
    Lógica de Nivel 1 ($0): Clasificación léxica de intención.
    """
    MODIFIERS = {
        'transactional': [r'comprar', r'precio', r'oferta', r'barato', r'donde comprar', r'costo'],
        'commercial': [r'mejor', r'mejores', r'vs', r'comparativa', r'opiniones', r'review', r'top'],
        'informational': [r'que es', r'como', r'guia', r'tutorial', r'ejemplos', r'porque'],
        'navigational': [r'login', r'entrar', r'web oficial', r'descargar']
    }

    @classmethod
    def resolve(cls, keyword_text: str) -> str:
        text = keyword_text.lower().strip()
        for intent, patterns in cls.MODIFIERS.items():
            for pattern in patterns:
                if re.search(pattern, text):
                    return intent
        return 'informational' # Default por seguridad