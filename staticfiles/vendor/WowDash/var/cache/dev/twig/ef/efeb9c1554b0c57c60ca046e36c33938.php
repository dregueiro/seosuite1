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

/* forms/formLayout.html.twig */
class __TwigTemplate_da00a4aa1535f17ab2edbbb73d34f246 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/formLayout.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "forms/formLayout.html.twig", 1);
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
    <div class=\"grid grid-cols-12 gap-5\">
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Vertical Input Form</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">First Name</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Last Name</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Email</label>
                            <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Phone</label>
                            <div class=\"flex\">
                                <select class=\"form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto\">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type=\"text\" name=\"#0\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"+1 (555) 000-0000\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Password</label>
                            <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\">
                        </div>
                        <div class=\"col-span-12\">
                            <button type=\"submit\" class=\"btn btn-primary-600\">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Input Form With Icons</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">First Name</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Last Name</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Email</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"mage:email\"></iconify-icon>
                                </span>
                                <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Phone</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:phone-calling-linear\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"+1 (555) 000-0000\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Password</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                                </span>
                                <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <button type=\"submit\" class=\"btn btn-primary-600\">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Horizontal Input Form</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">First Name</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\">
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Last Name</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\">
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Email</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\">
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Phone</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"flex\">
                                <select class=\"form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto\">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type=\"text\" name=\"#0\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"+1 (555) 000-0000\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Password</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\">
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary-600\">Submit</button>
                </div>
            </div>
        </div>
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Horizontal Input Form With Icons</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">First Name</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Last Name</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Email</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"mage:email\"></iconify-icon>
                                </span>
                                <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Phone</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:phone-calling-linear\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"+1 (555) 000-0000\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Password</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                                </span>
                                <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\">
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary-600\">Submit</button>
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
        return "forms/formLayout.html.twig";
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

    <div class=\"grid grid-cols-12 gap-5\">
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Vertical Input Form</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">First Name</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Last Name</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Email</label>
                            <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Phone</label>
                            <div class=\"flex\">
                                <select class=\"form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto\">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type=\"text\" name=\"#0\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"+1 (555) 000-0000\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Password</label>
                            <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\">
                        </div>
                        <div class=\"col-span-12\">
                            <button type=\"submit\" class=\"btn btn-primary-600\">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Input Form With Icons</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">First Name</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Last Name</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Email</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"mage:email\"></iconify-icon>
                                </span>
                                <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Phone</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:phone-calling-linear\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"+1 (555) 000-0000\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Password</label>
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                                </span>
                                <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <button type=\"submit\" class=\"btn btn-primary-600\">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Horizontal Input Form</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">First Name</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\">
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Last Name</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\">
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Email</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\">
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Phone</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"flex\">
                                <select class=\"form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto\">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type=\"text\" name=\"#0\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"+1 (555) 000-0000\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Password</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\">
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary-600\">Submit</button>
                </div>
            </div>
        </div>
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Horizontal Input Form With Icons</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">First Name</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Last Name</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Email</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"mage:email\"></iconify-icon>
                                </span>
                                <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Phone</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:phone-calling-linear\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"+1 (555) 000-0000\">
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-12 gap-y-4 items-center mb-6\">
                        <label class=\"form-label mb-0 sm:col-span-2 col-span-12\">Password</label>
                        <div class=\"sm:col-span-10 col-span-12\">
                            <div class=\"icon-field\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                                </span>
                                <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\">
                            </div>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary-600\">Submit</button>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "forms/formLayout.html.twig", "E:\\Symfony\\WowDash\\templates\\forms\\formLayout.html.twig");
    }
}
