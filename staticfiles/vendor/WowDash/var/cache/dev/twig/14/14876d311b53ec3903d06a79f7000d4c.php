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

/* componentspage/starRating.html.twig */
class __TwigTemplate_575156a60f056f90f90cfe86e90256cc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/starRating.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/starRating.html.twig", 1);
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
    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Default Star Ratings</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3\">
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Half Star</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3\">
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"mdi:star-outline\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"mdi:star-outline\"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Multi Color</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3\">
                    <li class=\"text-[32px] line-height-1 text-primary-600\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-[32px] line-height-1 dark:text-purple-400\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-[32px] line-height-1 text-success-600\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-[32px] line-height-1 text-info-600\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-[32px] line-height-1 text-danger-600\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Rating</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3\">
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-neutral-400 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-neutral-400 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-neutral-400 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                </ul>
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
        return "componentspage/starRating.html.twig";
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

    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Default Star Ratings</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3\">
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Half Star</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3\">
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"mdi:star-outline\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"mdi:star-outline\"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Multi Color</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3\">
                    <li class=\"text-[32px] line-height-1 text-primary-600\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-[32px] line-height-1 dark:text-purple-400\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-[32px] line-height-1 text-success-600\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-[32px] line-height-1 text-info-600\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-[32px] line-height-1 text-danger-600\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Rating</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3\">
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-warning-600 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-neutral-400 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-neutral-400 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                    <li class=\"text-neutral-400 text-[32px] line-height-1\"><iconify-icon icon=\"material-symbols:star\"></iconify-icon></li>
                </ul>
            </div>
        </div>
    </div>

{% endblock content %}
", "componentspage/starRating.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\starRating.html.twig");
    }
}
