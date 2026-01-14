from collections import Counter
import re

class KeywordClusteringService:
    """
    Analiza un set de keywords y genera grupos basados en términos comunes
    para el sidebar 'estilo Semrush'.
    """
    STOP_WORDS = {'de', 'el', 'la', 'en', 'para', 'con', 'un', 'una', 'y', 'a'}

    @classmethod
    def get_groups(cls, keywords_list):
        words = []
        for kw in keywords_list:
            # Limpiar y tokenizar
            clean_kw = re.sub(r'[^\w\s]', '', kw.lower())
            tokens = [w for w in clean_kw.split() if w not in cls.STOP_WORDS and len(w) > 2]
            words.extend(tokens)
        
        # Contar ocurrencias
        counts = Counter(words).most_common(15) # Los 15 grupos más fuertes
        return [{"name": word, "count": count} for word, count in counts]