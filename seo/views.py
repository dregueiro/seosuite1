from django.views.generic import DetailView
from projects.models import Project
from integrations.services import test_gsc_access, test_ga4_access

from keyword_research.models import KeywordIdea

class KeywordMagicView(DetailView):
    model = Project
    template_name = 'seo/keyword_magic.html'
    context_object_name = 'project'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        # Traeremos todas las keywords de este proyecto
        context['keywords'] = KeywordIdea.objects.filter(project=self.object).order_by('-avg_monthly_searches')
        return context
class ProjectDashboardView(DetailView):
    model = Project
    template_name = 'seo/dashboard.html'
    context_object_name = 'project'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        # Probamos la conexión en tiempo real para mostrar el badge ✅/❌
        gsc_ok, gsc_msg = test_gsc_access(self.object)
        context['gsc_status'] = {'ok': gsc_ok, 'message': gsc_msg}
        # Check GA4
        ga4_ok, ga4_msg = test_ga4_access(self.object)
        context['ga4_status'] = {'ok': ga4_ok, 'message': ga4_msg}
        return context