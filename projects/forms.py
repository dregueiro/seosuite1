from django import forms
from django_tomselect.forms import TomSelectModelChoiceField, TomSelectConfig
from .models import Project
from clients.models import Client
from keyword_research.models import GoogleAdsLocation, GoogleAdsLanguage

class ProjectForm(forms.ModelForm):
    # Campos estándar. Quitamos cualquier referencia a s2forms.ModelSelect2Widget
    location_selector = TomSelectModelChoiceField(
        config=TomSelectConfig(
            url="keyword_research:location_search", # Nombre de la URL
            value_field="criteria_id",
            label_field="canonical_name", # El campo que se mostrará
            placeholder="Busca ciudad o país...",
            load_throttle=600,
            minimum_query_length=3,
            highlight=True,
            
            # 'id' y '__str__' son los valores por defecto para value/label
        ),
        label="Ubicación Objetivo",
        required=True
    )

    language_selector = TomSelectModelChoiceField(
        config=TomSelectConfig(
            url="keyword_research:language_search", # Nombre de la URL
            value_field="criteria_id",
            label_field="name", # El campo que se mostrará
            placeholder="Busca ciudad o país...",
            load_throttle=600,
            minimum_query_length=3,
            highlight=True,
            # 'id' y '__str__' son los valores por defecto para value/label
        ),
        label="Idiona Objetivo",
        required=True
    )

    class Meta:
        model = Project
        fields = [
            'client', 'name', 'domain', 'status', # <-- AGREGADO 'status'
            'google_credential', 'gsc_property_url', 
            'ga4_property_id', 'google_ads_customer_id', 
            'authorized_monthly_budget',
            'language_selector', 'location_selector'
        ]
        widgets = {
            'authorized_monthly_budget': forms.NumberInput(attrs={'class': 'form-control'}),
            'name': forms.TextInput(attrs={'class': 'form-control'}),
            'domain': forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'https://...'}),
            'client': forms.Select(attrs={'class': 'form-select'}),
            'google_credential': forms.Select(attrs={'class': 'form-select'}),
            'gsc_property_url': forms.TextInput(attrs={'class': 'form-control'}),
            'ga4_property_id': forms.TextInput(attrs={'class': 'form-control'}),
            'google_ads_customer_id': forms.TextInput(attrs={'class': 'form-control'}),
            'status': forms.HiddenInput(), # El valor vendrá del Switch en el HTML
        }
        
    def __init__(self, *args, **kwargs):
        self.user = kwargs.pop('user', None)
        super().__init__(*args, **kwargs)
        
        # 1. PRECARGA TÉCNICA (Tu código de Ubicación e Idioma)
        if self.instance and self.instance.pk:
            # Ubicación
            val_loc = self.instance.target_country_code
            if val_loc:
                if str(val_loc).isdigit():
                    loc = GoogleAdsLocation.objects.filter(criteria_id=val_loc).first()
                else:
                    loc = GoogleAdsLocation.objects.filter(country_code=val_loc, target_type='Country').first()
                if loc:
                    self.fields['location_selector'].initial = loc

            # Idioma
            val_lang = self.instance.language_code
            if val_lang:
                lang = GoogleAdsLanguage.objects.filter(code=val_lang).first()
                if lang:
                    self.fields['language_selector'].initial = lang

        # 2. SINCRONIZACIÓN DE PRESUPUESTO CON EL CLIENTE (Lo nuevo)
        client = None
        # Caso A: Estamos editando (el proyecto ya tiene cliente)
        if self.instance and self.instance.pk and hasattr(self.instance, 'client'):
            client = self.instance.client
        # Caso B: Proyecto nuevo (el cliente viene en el initial de la URL)
        elif self.initial.get('client'):
            from clients.models import Client
            client = Client.objects.filter(pk=self.initial.get('client')).first()

        if client:
            # Obtenemos el presupuesto real del modelo Client (asumiendo que se llama 'budget')
            # Si en tu modelo Client el campo se llama distinto, cámbialo aquí abajo:
            client_limit = getattr(client, 'budget', 20.00) 
            
            # REGLA DE NEGOCIO: Si el proyecto es nuevo O si el presupuesto guardado es 0,
            # forzamos el valor inicial al límite actual del cliente.
            if not self.instance.pk or self.instance.authorized_monthly_budget == 0:
                self.fields['authorized_monthly_budget'].initial = client_limit
    
    def save(self, commit=True):
            project = super().save(commit=False)
            # GUARDADO: Convertimos el objeto seleccionado de vuelta a un código/ID para el modelo
            location_obj = self.cleaned_data.get('location_selector')
            if location_obj:
                # Guardamos el criteria_id en el campo de texto del proyecto
                project.target_country_code = str(location_obj.criteria_id)
                
            language_obj = self.cleaned_data.get('language_selector')
            if language_obj:
                project.language_code = language_obj.code
                
            if commit:
                project.save()
            return project
    
    
    def clean(self):
        cleaned_data = super().clean()
        location = cleaned_data.get('location_selector')
        language = cleaned_data.get('language_selector')
        
        # Leemos el estado del Switch desde los datos crudos del POST
        # En el HTML debe llamarse name="is_active" o name="status"
        # Usaremos la lógica del checkbox (si existe en POST es 'on' o 'active')
        status_raw = self.data.get('status')
        
        if location:
            self.instance.target_country_code = location.country_code
        if language:
            self.instance.language_code = language.code
        
        # Mapeamos el valor del switch de WOWDASH al campo status del modelo
        if status_raw == 'active' or status_raw == 'on':
            self.instance.status = 'active'
        else:
            self.instance.status = 'inactive'

        return cleaned_data

# ==============================================================================
# 2. FORMULARIO SOLO INTEGRACIONES (Para la pestaña de Integraciones)
# ==============================================================================
class ProjectIntegrationForm(forms.ModelForm):
    """
    Este formulario se usa cuando solo queremos editar las claves API
    sin tocar el nombre, presupuesto o ubicación del proyecto.
    """
    class Meta:
        model = Project
        fields = [
            'google_credential', 
            'gsc_property_url', 
            'google_ads_customer_id', 
            'ga4_property_id'
        ]
        widgets = {
            'google_credential': forms.Select(attrs={'class': 'form-select'}),
            'gsc_property_url': forms.TextInput(attrs={'class': 'form-control'}),
            'google_ads_customer_id': forms.TextInput(attrs={'class': 'form-control'}),
            'ga4_property_id': forms.TextInput(attrs={'class': 'form-control'}),
        }