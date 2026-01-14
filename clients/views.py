from django.urls import reverse_lazy
from django.views.generic import ListView, CreateView, UpdateView, DeleteView
from django.contrib.auth.mixins import LoginRequiredMixin
from .models import Client

class ClientListView(LoginRequiredMixin, ListView):
    model = Client
    template_name = 'clients/client_list.html'
    context_object_name = 'clients'

class ClientCreateView(LoginRequiredMixin, CreateView):
    model = Client
    fields = ['name', 'authorized_monthly_budget', 'is_active']
    template_name = 'clients/client_form.html'
    success_url = reverse_lazy('clients:list')

class ClientUpdateView(LoginRequiredMixin, UpdateView):
    model = Client
    fields = ['name', 'authorized_monthly_budget', 'is_active']
    template_name = 'clients/client_form.html'
    success_url = reverse_lazy('clients:list')

class ClientDeleteView(LoginRequiredMixin, DeleteView):
    model = Client
    template_name = 'clients/client_confirm_delete.html'
    success_url = reverse_lazy('clients:list')