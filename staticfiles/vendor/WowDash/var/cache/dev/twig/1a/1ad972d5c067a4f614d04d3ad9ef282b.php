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

/* settings/company.html.twig */
class __TwigTemplate_078fccbddf8b77ffa135495e5fdf6fd2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/company.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "settings/company.html.twig", 1);
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
                <div class=\"grid md:grid-cols-2 gap-x-5\">
                    <div class=\"mb-5\">
                        <label for=\"name\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Full Name <span class=\"text-danger-600\">*</span></label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"name\" placeholder=\"Enter Full Name\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"email\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Email <span class=\"text-danger-600\">*</span></label>
                        <input type=\"email\" class=\"form-control rounded-lg\" id=\"email\" placeholder=\"Enter email address\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"number\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Phone Number</label>
                        <input type=\"email\" class=\"form-control rounded-lg\" id=\"number\" placeholder=\"Enter phone number\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"Website\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\"> Website</label>
                        <input type=\"url\" class=\"form-control rounded-lg\" id=\"Website\" placeholder=\"Website URL\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"country\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Country <span class=\"text-danger-600\">*</span> </label>
                        <select class=\"form-control rounded-lg form-select\" id=\"country\">
                            <option selected disabled>Select Country</option>
                            <option>USA</option>
                            <option>Bangladesh</option>
                            <option>Pakistan</option>
                            <option>India</option>
                            <option>Canada</option>
                        </select>
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"city\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">City <span class=\"text-danger-600\">*</span> </label>
                        <select class=\"form-control rounded-lg form-select\" id=\"city\">
                            <option selected disabled>Select City</option>
                            <option>Washington</option>
                            <option>Dhaka</option>
                            <option>Lahor</option>
                            <option>Panjab</option>
                        </select>
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"state\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">State <span class=\"text-danger-600\">*</span> </label>
                        <select class=\"form-control rounded-lg form-select\" id=\"state\">
                            <option selected disabled>Select State</option>
                            <option>Washington</option>
                            <option>Dhaka</option>
                            <option>Lahor</option>
                            <option>Panjab</option>
                        </select>
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"zip\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\"> Zip Code <span class=\"text-danger-600\">*</span></label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"zip\" placeholder=\"Zip Code\">
                    </div>
                    <div class=\"mb-5 col-span-2\">
                        <label for=\"address\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\"> Address* <span class=\"text-danger-600\">*</span></label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"address\" placeholder=\"Enter Your Address\">
                    </div>
                    <div class=\"col-span-2 flex items-center justify-center gap-3 mt-6\">
                        <button type=\"reset\" class=\"border border-danger-600 hover:bg-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg\">
                            Reset
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary border border-primary-600 text-base px-6 py-3 !rounded-lg\">
                            Save Change
                        </button>
                    </div>
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
        return "settings/company.html.twig";
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
                <div class=\"grid md:grid-cols-2 gap-x-5\">
                    <div class=\"mb-5\">
                        <label for=\"name\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Full Name <span class=\"text-danger-600\">*</span></label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"name\" placeholder=\"Enter Full Name\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"email\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Email <span class=\"text-danger-600\">*</span></label>
                        <input type=\"email\" class=\"form-control rounded-lg\" id=\"email\" placeholder=\"Enter email address\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"number\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Phone Number</label>
                        <input type=\"email\" class=\"form-control rounded-lg\" id=\"number\" placeholder=\"Enter phone number\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"Website\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\"> Website</label>
                        <input type=\"url\" class=\"form-control rounded-lg\" id=\"Website\" placeholder=\"Website URL\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"country\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Country <span class=\"text-danger-600\">*</span> </label>
                        <select class=\"form-control rounded-lg form-select\" id=\"country\">
                            <option selected disabled>Select Country</option>
                            <option>USA</option>
                            <option>Bangladesh</option>
                            <option>Pakistan</option>
                            <option>India</option>
                            <option>Canada</option>
                        </select>
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"city\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">City <span class=\"text-danger-600\">*</span> </label>
                        <select class=\"form-control rounded-lg form-select\" id=\"city\">
                            <option selected disabled>Select City</option>
                            <option>Washington</option>
                            <option>Dhaka</option>
                            <option>Lahor</option>
                            <option>Panjab</option>
                        </select>
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"state\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">State <span class=\"text-danger-600\">*</span> </label>
                        <select class=\"form-control rounded-lg form-select\" id=\"state\">
                            <option selected disabled>Select State</option>
                            <option>Washington</option>
                            <option>Dhaka</option>
                            <option>Lahor</option>
                            <option>Panjab</option>
                        </select>
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"zip\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\"> Zip Code <span class=\"text-danger-600\">*</span></label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"zip\" placeholder=\"Zip Code\">
                    </div>
                    <div class=\"mb-5 col-span-2\">
                        <label for=\"address\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\"> Address* <span class=\"text-danger-600\">*</span></label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"address\" placeholder=\"Enter Your Address\">
                    </div>
                    <div class=\"col-span-2 flex items-center justify-center gap-3 mt-6\">
                        <button type=\"reset\" class=\"border border-danger-600 hover:bg-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg\">
                            Reset
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary border border-primary-600 text-base px-6 py-3 !rounded-lg\">
                            Save Change
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

{% endblock content %}
", "settings/company.html.twig", "E:\\Symfony\\WowDash\\templates\\settings\\company.html.twig");
    }
}
