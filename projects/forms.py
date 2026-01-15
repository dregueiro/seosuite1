from django import forms
from .models import Project
from django_countries import countries
from django.conf import settings

class ProjectForm(forms.ModelForm):
    # Definimos los campos explícitamente para asegurar que son ChoiceFields
    target_country_code = forms.ChoiceField(
        choices=[('', '---------')] + list(countries),
        widget=forms.Select(attrs={'class': 'form-select'})
    )
    language_code = forms.ChoiceField(
        choices=[('', '---------')] + list(settings.LANGUAGES),
        widget=forms.Select(attrs={'class': 'form-select'})
    )

    class Meta:
        model = Project
        fields = [
            'name', 'domain', 'google_credential', 
            'gsc_property_url', 'ga4_property_id', 'google_ads_customer_id',
            'target_country_code', 'language_code', 'authorized_monthly_budget'
        ]

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        # Aplicamos la clase form-control a los inputs que no son selectores
        for field_name, field in self.fields.items():
            if not isinstance(field.widget, forms.Select):
                field.widget.attrs.update({'class': 'form-control'})
            else:
                field.widget.attrs.update({'class': 'form-select'})


class ProjectIntegrationForm(forms.ModelForm):
    class Meta:
        model = Project
        fields = ['google_credential', 'gsc_property_url', 'ga4_property_id', 'google_ads_customer_id']

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        for field in self.fields:
            classname = 'form-select' if isinstance(self.fields[field].widget, forms.Select) else 'form-control'
            self.fields[field].widget.attrs.update({'class': classname})