from django.urls import reverse_lazy
from django.views.generic import ListView, CreateView, UpdateView, DeleteView
from django.contrib.auth.mixins import LoginRequiredMixin, UserPassesTestMixin
from .models import Client

class ClientCreateView(LoginRequiredMixin,CreateView):
    model = Client
    # Solo pedimos los datos que el usuario debe rellenar
    fields = ['name', 'contact_name', 'phone', 'email']
    template_name = 'clients/client_form.html'
    success_url = reverse_lazy('clients:list')

    def form_valid(self, form):
        # El "truco" de Pepe: asignamos el usuario actual a la instancia antes de guardar
        form.instance.user = self.request.user
        return super().form_valid(form)

class ClientListView(LoginRequiredMixin, ListView):
    model = Client
    template_name = 'clients/client_list.html'
    context_object_name = 'clients'
    paginate_by = 10  # Control de carga inicial

    def get_queryset(self):
        # IMPORTANTE: El usuario solo ve sus propios clientes

        base_qs = Client.objects.select_related('user').order_by('-name')
        
        if self.request.user.is_superuser:
            return base_qs
            
        return base_qs.filter(user=self.request.user)
class ClientUpdateView(LoginRequiredMixin, UserPassesTestMixin, UpdateView):
    model = Client
    # Usamos los mismos campos que en Create para mantener la consistencia
    fields = ['name', 'contact_name', 'phone', 'email','is_active','authorized_monthly_budget']
    template_name = 'clients/client_form.html'
    success_url = reverse_lazy('clients:list')

    def test_func(self):
        """
        Seguridad nivel Senior: Solo el dueño del cliente puede editarlo.
        Si alguien intenta editar un ID que no es suyo, recibirá un 403 (Prohibido).
        """
        client = self.get_object()
        return client.user == self.request.user

    def form_valid(self, form):
        # Aunque ya tiene dueño, nos aseguramos de que el user no cambie
        form.instance.user = self.request.user
        return super().form_valid(form)
class ClientDeleteView(LoginRequiredMixin, DeleteView):
    model = Client
    template_name = 'clients/client_confirm_delete.html'
    success_url = reverse_lazy('clients:list')