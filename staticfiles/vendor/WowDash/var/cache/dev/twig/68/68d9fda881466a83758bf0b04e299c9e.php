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

/* componentspage/radio.html.twig */
class __TwigTemplate_b7423c5b53b6b6680498639f1afa35e1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/radio.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/radio.html.twig", 1);
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
                <h6 class=\"text-lg font-semibold mb-0\">Default Radio</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio1\" id=\"radio1\" checked>
                        <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio1\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio2\" id=\"radio2\" checked>
                        <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio2\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio3\" id=\"radio3\" checked>
                        <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio3\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio4\" id=\"radio4\" checked>
                        <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio4\"> Radio Active </label>
                    </div>
                </div>
                <div class=\"flex items-center flex-wrap gap-7 mt-6\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio\" id=\"radio11\">
                        <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio11\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio\" id=\"radio22\">
                        <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio22\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio\" id=\"radio33\">
                        <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio33\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio\" id=\"radio44\">
                        <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio44\"> Radio Inactive </label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Radio Disable</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 opacity-75 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio11\" id=\"radio111\" checked disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio111\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 opacity-75 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio22\" id=\"radio222\" checked disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio222\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 opacity-75 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio33\" id=\"radio333\" checked disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio333\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 opacity-75 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio44\" id=\"radio444\" checked disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio444\"> Radio Active </label>
                    </div>
                </div>
                <div class=\"flex items-center flex-wrap gap-7 mt-6\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 disabled:opacity-75 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio0\" id=\"radio1011\" disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio1011\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 disabled:opacity-75 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio0\" id=\"radio2022\" disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio2022\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 disabled:opacity-75 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio0\" id=\"radio3033\" disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio3033\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 disabled:opacity-75 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio0\" id=\"radio4044\" disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio4044\"> Radio Inactive </label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Radio With Button</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-6\">
                    <div class=\"bg-primary-50 dark:bg-primary-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio100\" id=\"radio100\" checked>
                            <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio100\"> Radio Active </label>
                        </span>
                    </div>
                    <div class=\"bg-neutral-100 dark:bg-neutral-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio200\" id=\"radio200\" checked>
                            <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio200\"> Radio Active </label>
                        </span>
                    </div>
                    <div class=\"bg-success-100 dark:bg-success-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio300\" id=\"radio300\" checked>
                            <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio300\"> Radio Active </label>
                        </span>
                    </div>
                    <div class=\"bg-warning-100 dark:bg-warning-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio4000\" id=\"radio4000\" checked>
                            <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio4000\"> Radio Active </label>
                        </span>
                    </div>
                    <div class=\"bg-danger-100 dark:bg-danger-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-danger-600 bg-gray-100 border-gray-300 focus:ring-danger-500 dark:focus:ring-danger-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio400\" id=\"radio400\" checked>
                            <label class=\"peer-checked:text-danger-600 leading-[1] font-medium\" for=\"radio400\"> Radio Active </label>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-7\">
                <h6 class=\"text-lg font-semibold mb-0\">Radio Horizontal</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"horizontal\" id=\"horizontal1\">
                        <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"horizontal1\"> Horizontal 1 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"horizontal\" id=\"horizontal2\">
                        <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"horizontal2\"> Horizontal 2 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"horizontal\" id=\"horizontal3\">
                        <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"horizontal3\"> Horizontal 3 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"horizontal\" id=\"horizontal4\">
                        <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"horizontal4\"> Horizontal 4 </label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Radio Vertical</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-start flex-col flex-wrap gap-6\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"vertical\" id=\"vertical11\">
                        <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"vertical11\"> Vertical 1 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"vertical\" id=\"vertical22\">
                        <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"vertical22\"> Vertical 2 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"vertical\" id=\"vertical33\">
                        <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"vertical33\"> Vertical 3 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"vertical\" id=\"vertical44\">
                        <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"vertical44\"> Vertical 4 </label>
                    </div>
                </div>
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
        return "componentspage/radio.html.twig";
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
                <h6 class=\"text-lg font-semibold mb-0\">Default Radio</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio1\" id=\"radio1\" checked>
                        <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio1\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio2\" id=\"radio2\" checked>
                        <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio2\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio3\" id=\"radio3\" checked>
                        <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio3\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio4\" id=\"radio4\" checked>
                        <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio4\"> Radio Active </label>
                    </div>
                </div>
                <div class=\"flex items-center flex-wrap gap-7 mt-6\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio\" id=\"radio11\">
                        <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio11\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio\" id=\"radio22\">
                        <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio22\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio\" id=\"radio33\">
                        <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio33\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio\" id=\"radio44\">
                        <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio44\"> Radio Inactive </label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Radio Disable</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 opacity-75 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio11\" id=\"radio111\" checked disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio111\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 opacity-75 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio22\" id=\"radio222\" checked disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio222\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 opacity-75 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio33\" id=\"radio333\" checked disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio333\"> Radio Active </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 opacity-75 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio44\" id=\"radio444\" checked disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio444\"> Radio Active </label>
                    </div>
                </div>
                <div class=\"flex items-center flex-wrap gap-7 mt-6\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 disabled:opacity-75 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio0\" id=\"radio1011\" disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio1011\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 disabled:opacity-75 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio0\" id=\"radio2022\" disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio2022\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 disabled:opacity-75 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio0\" id=\"radio3033\" disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio3033\"> Radio Inactive </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 disabled:opacity-75 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio0\" id=\"radio4044\" disabled>
                        <label class=\"peer-disabled:opacity-75 peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio4044\"> Radio Inactive </label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Radio With Button</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-6\">
                    <div class=\"bg-primary-50 dark:bg-primary-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio100\" id=\"radio100\" checked>
                            <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"radio100\"> Radio Active </label>
                        </span>
                    </div>
                    <div class=\"bg-neutral-100 dark:bg-neutral-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio200\" id=\"radio200\" checked>
                            <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"radio200\"> Radio Active </label>
                        </span>
                    </div>
                    <div class=\"bg-success-100 dark:bg-success-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio300\" id=\"radio300\" checked>
                            <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"radio300\"> Radio Active </label>
                        </span>
                    </div>
                    <div class=\"bg-warning-100 dark:bg-warning-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio4000\" id=\"radio4000\" checked>
                            <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"radio4000\"> Radio Active </label>
                        </span>
                    </div>
                    <div class=\"bg-danger-100 dark:bg-danger-600/25 px-5 py-3 rounded-lg\">
                        <span class=\"flex items-center gap-2\">
                            <input class=\"peer w-4 h-4 text-danger-600 bg-gray-100 border-gray-300 focus:ring-danger-500 dark:focus:ring-danger-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"radio400\" id=\"radio400\" checked>
                            <label class=\"peer-checked:text-danger-600 leading-[1] font-medium\" for=\"radio400\"> Radio Active </label>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-7\">
                <h6 class=\"text-lg font-semibold mb-0\">Radio Horizontal</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"horizontal\" id=\"horizontal1\">
                        <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"horizontal1\"> Horizontal 1 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"horizontal\" id=\"horizontal2\">
                        <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"horizontal2\"> Horizontal 2 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"horizontal\" id=\"horizontal3\">
                        <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"horizontal3\"> Horizontal 3 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"horizontal\" id=\"horizontal4\">
                        <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"horizontal4\"> Horizontal 4 </label>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Radio Vertical</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-start flex-col flex-wrap gap-6\">
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"vertical\" id=\"vertical11\">
                        <label class=\"peer-checked:text-primary-600 leading-[1] font-medium\" for=\"vertical11\"> Vertical 1 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"vertical\" id=\"vertical22\">
                        <label class=\"peer-checked:text-purple-600 leading-[1] font-medium\" for=\"vertical22\"> Vertical 2 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-success-600 bg-gray-100 border-gray-300 focus:ring-success-500 dark:focus:ring-success-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"vertical\" id=\"vertical33\">
                        <label class=\"peer-checked:text-success-600 leading-[1] font-medium\" for=\"vertical33\"> Vertical 3 </label>
                    </div>
                    <div class=\"flex items-center gap-2\">
                        <input class=\"peer w-4 h-4 text-warning-600 bg-gray-100 border-gray-300 focus:ring-warning-500 dark:focus:ring-warning-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600\" type=\"radio\" name=\"vertical\" id=\"vertical44\">
                        <label class=\"peer-checked:text-warning-600 leading-[1] font-medium\" for=\"vertical44\"> Vertical 4 </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "componentspage/radio.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\radio.html.twig");
    }
}
