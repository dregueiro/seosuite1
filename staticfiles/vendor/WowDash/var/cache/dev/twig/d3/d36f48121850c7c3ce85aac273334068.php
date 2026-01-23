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

/* settings/notificationAlert.html.twig */
class __TwigTemplate_febf73bc768ff1bd54adaea9460b1ad3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/notificationAlert.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "settings/notificationAlert.html.twig", 1);
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
    <div class=\"card h-full rounded-lg border-0\">
        <div class=\"card-body p-10\">
            <form action=\"#\">
                <div class=\"mb-6\">
                    <h6 class=\"mb-4\">Mail Notification Messages</h6>
                    <div class=\"flex flex-wrap justify-between gap-1\">
                        <label class=\"inline-block font-medium text-secondary-light text-base mb-2\">Admin New Order Message</label>
                        <label class=\"inline-flex items-center mb-5 cursor-pointer\">
                            <input type=\"checkbox\" value=\"\" class=\"sr-only peer\">
                            <span class=\"relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                            <span class=\"ms-3 text-sm font-medium text-gray-900 dark:text-gray-300\">On</span>
                        </label>
                    </div>
                    <textarea class=\"form-control rounded-lg h-[80px]\" placeholder=\"You have a new order.\"></textarea>
                </div>
                <div class=\"mb-6\">
                    <h6 class=\"mb-4\">Sms Notification Messages</h6>
                    <div class=\"flex flex-wrap justify-between gap-1\">
                        <label class=\"inline-block font-medium text-secondary-light text-base mb-2\">Admin New Order Message</label>
                        <label class=\"inline-flex items-center mb-5 cursor-pointer\">
                            <input type=\"checkbox\" value=\"\" class=\"sr-only peer\">
                            <span class=\"relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                            <span class=\"ms-3 text-sm font-medium text-gray-900 dark:text-gray-300\">On</span>
                        </label>
                    </div>
                    <textarea class=\"form-control rounded-lg h-[80px]\" placeholder=\"You have a new order.\"></textarea>
                </div>
                <div class=\"mb-6\">
                    <h6 class=\"mb-4\">Push Notification Messages</h6>
                    <div class=\"flex flex-wrap justify-between gap-1\">
                        <label class=\"inline-block font-medium text-secondary-light text-base mb-2\">Admin New Order Message</label>
                        <label class=\"inline-flex items-center mb-5 cursor-pointer\">
                            <input type=\"checkbox\" value=\"\" class=\"sr-only peer\">
                            <span class=\"relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                            <span class=\"ms-3 text-sm font-medium text-gray-900 dark:text-gray-300\">On</span>
                        </label>
                    </div>
                    <textarea class=\"form-control rounded-lg h-[80px]\" placeholder=\"You have a new order.\"></textarea>
                </div>

                <div class=\"flex items-center justify-center gap-3 mt-6\">
                    <button type=\"reset\" class=\"border border-danger-600 hover:bg-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg\">
                        Reset
                    </button>
                    <button type=\"submit\" class=\"btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg\">
                        Save Change
                    </button>
                </div>
            </form>
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
        return "settings/notificationAlert.html.twig";
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

    <div class=\"card h-full rounded-lg border-0\">
        <div class=\"card-body p-10\">
            <form action=\"#\">
                <div class=\"mb-6\">
                    <h6 class=\"mb-4\">Mail Notification Messages</h6>
                    <div class=\"flex flex-wrap justify-between gap-1\">
                        <label class=\"inline-block font-medium text-secondary-light text-base mb-2\">Admin New Order Message</label>
                        <label class=\"inline-flex items-center mb-5 cursor-pointer\">
                            <input type=\"checkbox\" value=\"\" class=\"sr-only peer\">
                            <span class=\"relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                            <span class=\"ms-3 text-sm font-medium text-gray-900 dark:text-gray-300\">On</span>
                        </label>
                    </div>
                    <textarea class=\"form-control rounded-lg h-[80px]\" placeholder=\"You have a new order.\"></textarea>
                </div>
                <div class=\"mb-6\">
                    <h6 class=\"mb-4\">Sms Notification Messages</h6>
                    <div class=\"flex flex-wrap justify-between gap-1\">
                        <label class=\"inline-block font-medium text-secondary-light text-base mb-2\">Admin New Order Message</label>
                        <label class=\"inline-flex items-center mb-5 cursor-pointer\">
                            <input type=\"checkbox\" value=\"\" class=\"sr-only peer\">
                            <span class=\"relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                            <span class=\"ms-3 text-sm font-medium text-gray-900 dark:text-gray-300\">On</span>
                        </label>
                    </div>
                    <textarea class=\"form-control rounded-lg h-[80px]\" placeholder=\"You have a new order.\"></textarea>
                </div>
                <div class=\"mb-6\">
                    <h6 class=\"mb-4\">Push Notification Messages</h6>
                    <div class=\"flex flex-wrap justify-between gap-1\">
                        <label class=\"inline-block font-medium text-secondary-light text-base mb-2\">Admin New Order Message</label>
                        <label class=\"inline-flex items-center mb-5 cursor-pointer\">
                            <input type=\"checkbox\" value=\"\" class=\"sr-only peer\">
                            <span class=\"relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                            <span class=\"ms-3 text-sm font-medium text-gray-900 dark:text-gray-300\">On</span>
                        </label>
                    </div>
                    <textarea class=\"form-control rounded-lg h-[80px]\" placeholder=\"You have a new order.\"></textarea>
                </div>

                <div class=\"flex items-center justify-center gap-3 mt-6\">
                    <button type=\"reset\" class=\"border border-danger-600 hover:bg-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg\">
                        Reset
                    </button>
                    <button type=\"submit\" class=\"btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg\">
                        Save Change
                    </button>
                </div>
            </form>
        </div>
    </div>

{% endblock content %}
", "settings/notificationAlert.html.twig", "E:\\Symfony\\WowDash\\templates\\settings\\notificationAlert.html.twig");
    }
}
