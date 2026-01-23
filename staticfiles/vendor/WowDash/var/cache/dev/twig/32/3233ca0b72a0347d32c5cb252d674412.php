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

/* componentspage/switch.html.twig */
class __TwigTemplate_64f5ab1e69cd964a4cb4a51f77dd29d8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/switch.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/switch.html.twig", 1);
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

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Default Radio</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>
                </div>

                <div class=\"flex items-center flex-wrap gap-7 mt-6\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>
                </div>
            </div>
        </div>

        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Switch Disable</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>
                </div>

                <div class=\"flex items-center flex-wrap gap-7 mt-6\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Switch With Tex</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Yes</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">No</span>
                    </label>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Switch Horizontal</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Horizontal 1</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Horizontal 2</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Horizontal 3</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Horizontal 4</span>
                    </label>
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
        return "componentspage/switch.html.twig";
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


    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Default Radio</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>
                </div>

                <div class=\"flex items-center flex-wrap gap-7 mt-6\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>
                </div>
            </div>
        </div>

        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Switch Disable</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>
                </div>

                <div class=\"flex items-center flex-wrap gap-7 mt-6\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" disabled>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-disabled:opacity-75 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-disabled:opacity-75 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Switch Inactive</span>
                    </label>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Switch With Tex</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\" checked>
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Yes</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">No</span>
                    </label>
                </div>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Switch Horizontal</h6>
            </div>
            <div class=\"card-body p-6\">
                <div class=\"flex items-center flex-wrap gap-7\">
                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300\">Horizontal 1</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-purple-600 text-md text-gray-600 dark:text-gray-300\">Horizontal 2</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-success-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-success-600 text-md text-gray-600 dark:text-gray-300\">Horizontal 3</span>
                    </label>

                    <label class=\"inline-flex items-center cursor-pointer\">
                        <input type=\"checkbox\" class=\"sr-only peer\">
                        <span class=\"relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-warning-600\"></span>
                        <span class=\"line-height-1 font-medium ms-3 peer-checked:text-warning-600 text-md text-gray-600 dark:text-gray-300\">Horizontal 4</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "componentspage/switch.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\switch.html.twig");
    }
}
