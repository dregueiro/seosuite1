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

/* componentspage/tags.html.twig */
class __TwigTemplate_17ac129527678eb474b684b191fbae5e extends Template
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
            'custom_script' => [$this, 'block_custom_script'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/tags.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/tags.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_script"));

        // line 4
        yield "            <script>
                        \$(\".remove-tag\").on(\"click\", function() {
                            \$(this).closest(\"li\").remove();
                        });
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        yield "
    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Default Tags</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-4 md:gap-8\">
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                </ul>
                <ul class=\"tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Colors tags</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-4 md:gap-8\">
                    <li class=\"text-white bg-primary-600 border border-primary-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                    <li class=\"text-white bg-purple-600 border border-purple-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                    <li class=\"text-white bg-warning-600 border border-warning-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                </ul>
                <ul class=\"tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-primary-600 border border-primary-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"dark:text-purple-400 border border-purple-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-warning-600 border border-warning-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Tags With Image</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/flag-tag.png"), "html", null, true);
        yield "\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/flag-tag.png"), "html", null, true);
        yield "\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/flag-tag.png"), "html", null, true);
        yield "\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                    </li>
                </ul>
                <ul class=\"tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/flag-tag.png"), "html", null, true);
        yield "\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/flag-tag.png"), "html", null, true);
        yield "\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/flag-tag.png"), "html", null, true);
        yield "\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Tags Indicator </h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-4 md:gap-8\">
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                    </li>
                </ul>
                <ul class=\"tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
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
        return "componentspage/tags.html.twig";
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
        return array (  193 => 97,  185 => 92,  177 => 87,  168 => 81,  161 => 77,  154 => 73,  91 => 12,  81 => 11,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script %}
            <script>
                        \$(\".remove-tag\").on(\"click\", function() {
                            \$(this).closest(\"li\").remove();
                        });
            </script>
        {% endblock custom_script %}

{% block content %}

    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Default Tags</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-4 md:gap-8\">
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                </ul>
                <ul class=\"tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Colors tags</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-4 md:gap-8\">
                    <li class=\"text-white bg-primary-600 border border-primary-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                    <li class=\"text-white bg-purple-600 border border-purple-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                    <li class=\"text-white bg-warning-600 border border-warning-600 rounded px-2 py-1.5 text-sm line-height-1 font-medium\">Label</li>
                </ul>
                <ul class=\"tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-primary-600 border border-primary-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"dark:text-purple-400 border border-purple-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-warning-600 border border-warning-600 rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-1\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Tags With Image</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"{{ asset('assets/images/flags/flag-tag.png') }}\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"{{ asset('assets/images/flags/flag-tag.png') }}\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"{{ asset('assets/images/flags/flag-tag.png') }}\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                    </li>
                </ul>
                <ul class=\"tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"{{ asset('assets/images/flags/flag-tag.png') }}\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"{{ asset('assets/images/flags/flag-tag.png') }}\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <img src=\"{{ asset('assets/images/flags/flag-tag.png') }}\" class=\"w-4 h-4 rounded-full\" alt=\"\">
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Tags Indicator </h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"flex flex-wrap items-center gap-4 md:gap-8\">
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-1.5 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                    </li>
                </ul>
                <ul class=\"tag-list flex flex-wrap items-center gap-3 sm:gap-5 mt-5\">
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                    <li class=\"text-secondary-light border rounded px-2 py-2 text-sm line-height-1 font-medium flex items-center gap-2\">
                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                        Label
                        <button class=\"remove-tag text-lg flex justify-center items-center\" type=\"button\"><iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon line-height-1\"></iconify-icon></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

{% endblock content %}
", "componentspage/tags.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\tags.html.twig");
    }
}
