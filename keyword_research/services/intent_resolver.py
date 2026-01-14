class IntentResolver:
    # Definición de patrones estilo Semrush
    INTENTS = {
        'transacional': ['comprar', 'precio', 'barato', 'oferta', 'tienda', 'online', 'venta'],
        'comercial': ['mejor', 'comparativa', 'vs', 'review', 'opiniones', 'top 10'],
        'informativo': ['que es', 'como', 'cuando', 'donde', 'guia', 'tutorial', 'pasos'],
        'navegacional': [] # Se llena con el nombre de la marca del proyecto en runtime
    }

    @classmethod
    def resolve(cls, keyword, brand_name=None):
        kw = keyword.lower()
        if brand_name and brand_name.lower() in kw:
            return "Navegacional"
        
        for intent, patterns in cls.INTENTS.items():
            if any(pattern in kw for pattern in patterns):
                return intent.capitalize()
        
        return "Informativo" # Default para SEO