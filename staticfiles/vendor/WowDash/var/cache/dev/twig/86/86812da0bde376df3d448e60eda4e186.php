<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* chart/pieChart.html.twig */
class __TwigTemplate_4e188d02ee42c4463212384931238d94 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "./layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chart/pieChart.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "chart/pieChart.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Basic Pie Chart</h6>
            </div>
            <div class=\"card-body p-6 text-center\">
                <div id=\"pieChart\" class=\"flex justify-center apexcharts-tooltip-z-none\"></div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Donut Chart</h6>
            </div>
            <div class=\"card-body p-6 text-center flex flex-wrap items-start gap-5 justify-center\">
                <div class=\"relative\">
                    <div id=\"basicDonutChart\" class=\"w-auto inline-block apexcharts-tooltip-z-none\"></div>
                    <div class=\"absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2\">
                        <span class=\"text-lg text-secondary-light font-medium\">Total Value</span>
                        <h4 class=\"mb-0\">72</h4>
                    </div>
                </div>

                <div class=\"max-w-[290px] w-full\">
                    <div class=\"flex items-center justify-between gap-3 border-b border-neutral-200 dark:border-neutral-600 pb-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">Label</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">Value</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">%</span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-success-600 rounded-full\"></span> Label 1
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">12</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 30.6% </span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-primary-600 rounded-full\"></span> Label 2
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">22</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">  42.9%</span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-info-600 rounded-full\"></span> Label 3
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">12</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 24.6% </span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-danger-600 rounded-full\"></span> Label 4
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">12</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 26.6% </span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-orange-500 rounded-full\"></span> Label 5
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">7</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 13.3% </span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-warning-600 rounded-full\"></span> Label 6
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">7</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 15.3% </span>
                    </div>
                </div>

            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Radar Chart</h6>
            </div>
            <div class=\"card-body p-6 text-center\">
                <div id=\"radarChart\" class=\"square-marker check-marker series-gap-6 flex justify-center\"></div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Multiple series</h6>
            </div>
            <div class=\"card-body p-6 text-center\">
                <div id=\"multipleSeriesChart\" class=\"apexcharts-tooltip-z-none square-marker check-marker series-gap-6 flex justify-center\"></div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chart/pieChart.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Basic Pie Chart</h6>
            </div>
            <div class=\"card-body p-6 text-center\">
                <div id=\"pieChart\" class=\"flex justify-center apexcharts-tooltip-z-none\"></div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Donut Chart</h6>
            </div>
            <div class=\"card-body p-6 text-center flex flex-wrap items-start gap-5 justify-center\">
                <div class=\"relative\">
                    <div id=\"basicDonutChart\" class=\"w-auto inline-block apexcharts-tooltip-z-none\"></div>
                    <div class=\"absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2\">
                        <span class=\"text-lg text-secondary-light font-medium\">Total Value</span>
                        <h4 class=\"mb-0\">72</h4>
                    </div>
                </div>

                <div class=\"max-w-[290px] w-full\">
                    <div class=\"flex items-center justify-between gap-3 border-b border-neutral-200 dark:border-neutral-600 pb-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">Label</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">Value</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">%</span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-success-600 rounded-full\"></span> Label 1
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">12</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 30.6% </span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-primary-600 rounded-full\"></span> Label 2
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">22</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">  42.9%</span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-info-600 rounded-full\"></span> Label 3
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">12</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 24.6% </span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-danger-600 rounded-full\"></span> Label 4
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">12</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 26.6% </span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-orange-500 rounded-full\"></span> Label 5
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">7</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 13.3% </span>
                    </div>
                    <div class=\"flex items-center justify-between gap-3 mb-3\">
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3\">
                            <span class=\"w-3 h-3 bg-warning-600 rounded-full\"></span> Label 6
                        </span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\">7</span>
                        <span class=\"text-neutral-600 dark:text-neutral-200 font-medium text-sm\"> 15.3% </span>
                    </div>
                </div>

            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Radar Chart</h6>
            </div>
            <div class=\"card-body p-6 text-center\">
                <div id=\"radarChart\" class=\"square-marker check-marker series-gap-6 flex justify-center\"></div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Multiple series</h6>
            </div>
            <div class=\"card-body p-6 text-center\">
                <div id=\"multipleSeriesChart\" class=\"apexcharts-tooltip-z-none square-marker check-marker series-gap-6 flex justify-center\"></div>
            </div>
        </div>
    </div>

{% endblock content %}
", "chart/pieChart.html.twig", "E:\\Symfony\\WowDash\\templates\\chart\\pieChart.html.twig");
    }
}
