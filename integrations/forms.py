from django import forms
from .models import GoogleCredential
from clients.models import Client
import json

class GoogleCredentialForm(forms.ModelForm):
    # Campo extra para subir archivo (no se guarda en DB, se procesa)
    json_file = forms.FileField(
        required=False, 
        label="Subir archivo .json",
        help_text="Recomendado. Sube el archivo descargado de Google Cloud.",
        widget=forms.FileInput(attrs={'class': 'form-control', 'accept': '.json'})
    )

    class Meta:
        model = GoogleCredential
        fields = ['client', 'name', 'service_account_json']
        widgets = {
            'service_account_json': forms.Textarea(attrs={
                'rows': 5, 
                'class': 'form-control font-monospace',
                'placeholder': 'Si no subes archivo, pega el código aquí...'
            }),
            'name': forms.TextInput(attrs={'class': 'form-control'}),
            'client': forms.Select(attrs={'class': 'form-select'}),
        }

    def __init__(self, user=None, *args, **kwargs):
        super().__init__(*args, **kwargs)
        if user:
            self.fields['client'].queryset = Client.objects.filter(user=user)
        
        # Hacemos el campo de texto opcional porque pueden usar el archivo
        self.fields['service_account_json'].required = False

    def clean(self):
        cleaned_data = super().clean()
        json_file = cleaned_data.get('json_file')
        json_text = cleaned_data.get('service_account_json')

        # LÓGICA DE PRIORIDAD: Archivo mata Texto
        if json_file:
            try:
                # Leemos el archivo en memoria
                file_content = json_file.read().decode('utf-8')
                data_dict = json.loads(file_content)
                # Inyectamos el JSON leído en el campo que se guardará en DB
                cleaned_data['service_account_json'] = data_dict
            except json.JSONDecodeError:
                self.add_error('json_file', "El archivo subido no es un JSON válido o está corrupto.")
                return cleaned_data
            except Exception as e:
                self.add_error('json_file', f"Error leyendo el archivo: {str(e)}")
                return cleaned_data
        elif not json_text:
            # Si no hay archivo NI texto, error.
            raise forms.ValidationError("Debes subir un archivo .json O pegar el contenido manualmente.")
        else:
            # Si es texto manual, asegurarnos que sea dict (si clean_field no lo hizo ya)
            if isinstance(json_text, str):
                try:
                    cleaned_data['service_account_json'] = json.loads(json_text)
                except:
                    self.add_error('service_account_json', "Texto inválido.")

        # VALIDACIÓN DE ESTRUCTURA GOOGLE (Se aplica a ambos casos)
        data = cleaned_data.get('service_account_json')
        if data and isinstance(data, dict):
            required_keys = ['type', 'project_id', 'private_key', 'client_email']
            missing = [key for key in required_keys if key not in data]
            if missing:
                err_msg = f"Faltan campos obligatorios de Google: {', '.join(missing)}"
                if json_file:
                    self.add_error('json_file', err_msg)
                else:
                    self.add_error('service_account_json', err_msg)
            
            if data.get('type') != 'service_account':
                 err_msg = "El tipo de credencial debe ser 'service_account'."
                 self.add_error('json_file' if json_file else 'service_account_json', err_msg)

        return cleaned_data