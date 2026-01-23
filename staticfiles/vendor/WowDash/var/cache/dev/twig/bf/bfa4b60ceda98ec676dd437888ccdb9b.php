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

/* forms/formValidation.html.twig */
class __TwigTemplate_43ad3d674a2662bbe03f1820f40e76d9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/formValidation.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "forms/formValidation.html.twig", 1);
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
                        (() => {
                            \"use strict\"

                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            const forms = document.querySelectorAll(\".needs-validation\")

                            // Loop over them and prevent submission
                            Array.from(forms).forEach(form => {
                                form.addEventListener(\"submit\", event => {
                                    if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                    }

                                    form.classList.add(\"was-validated\")
                                }, false)
                            })
                        })()
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 27
        yield "    <div class=\"grid grid-cols-12 gap-5\">
        <div class=\"col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Input Custom Styles</h5>
                </div>
                <div class=\"card-body\">
                    <form class=\"grid grid-cols-12 gap-4\">
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input with Placeholder</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" value=\"info@gmail.com\" required>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Medium Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg\" type=\"file\" name=\"#0\">
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input with Icon</label>
                            <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\" required>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input with Payment </label>
                            <div class=\"flex\">
                                <span class=\"inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600\">
                                    <img src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card/payment-icon.png"), "html", null, true);
        yield "\" alt=\"image\">
                                </span>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"Card Number\">
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input with Phone </label>
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
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <input type=\"text\" class=\"form-control grow rounded-se-none rounded-ee-none\" placeholder=\"www.random.com\">
                                <button type=\"button\" class=\"inline-flex items-center px-3 border rounded-s-0 border-s-0 rounded-e-md border-neutral-200 dark:border-neutral-600\"><iconify-icon icon=\"lucide:copy\"></iconify-icon>Copy</button>
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <button class=\"btn btn-primary-600\" type=\"submit\">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Input Status</h5>
                </div>
                <div class=\"card-body\">
                    <form class=\"grid grid-cols-12 gap-4\">
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">First Name</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Last Name</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Email</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"mage:email\"></iconify-icon>
                                </span>
                                <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Phone</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:phone-calling-linear\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"+1 (555) 000-0000\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Password</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                                </span>
                                <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Confirm Password</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                                </span>
                                <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\" required>
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <button class=\"btn btn-primary-600\" type=\"submit\">Submit form</button>
                        </div>
                    </form>
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
        return "forms/formValidation.html.twig";
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
        return array (  132 => 51,  106 => 27,  96 => 26,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script %}
            <script>
                        (() => {
                            \"use strict\"

                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            const forms = document.querySelectorAll(\".needs-validation\")

                            // Loop over them and prevent submission
                            Array.from(forms).forEach(form => {
                                form.addEventListener(\"submit\", event => {
                                    if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                    }

                                    form.classList.add(\"was-validated\")
                                }, false)
                            })
                        })()
            </script>
        {% endblock custom_script %}

{% block content %}
    <div class=\"grid grid-cols-12 gap-5\">
        <div class=\"col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Input Custom Styles</h5>
                </div>
                <div class=\"card-body\">
                    <form class=\"grid grid-cols-12 gap-4\">
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input with Placeholder</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" value=\"info@gmail.com\" required>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Medium Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg\" type=\"file\" name=\"#0\">
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input with Icon</label>
                            <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\" required>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input with Payment </label>
                            <div class=\"flex\">
                                <span class=\"inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600\">
                                    <img src=\"{{ asset('assets/images/card/payment-icon.png') }}\" alt=\"image\">
                                </span>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"Card Number\">
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input with Phone </label>
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
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <input type=\"text\" class=\"form-control grow rounded-se-none rounded-ee-none\" placeholder=\"www.random.com\">
                                <button type=\"button\" class=\"inline-flex items-center px-3 border rounded-s-0 border-s-0 rounded-e-md border-neutral-200 dark:border-neutral-600\"><iconify-icon icon=\"lucide:copy\"></iconify-icon>Copy</button>
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <button class=\"btn btn-primary-600\" type=\"submit\">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Input Status</h5>
                </div>
                <div class=\"card-body\">
                    <form class=\"grid grid-cols-12 gap-4\">
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">First Name</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter First Name\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Last Name</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"f7:person\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Last Name\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Email</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"mage:email\"></iconify-icon>
                                </span>
                                <input type=\"email\" name=\"#0\" class=\"form-control\" placeholder=\"Enter Email\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Phone</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:phone-calling-linear\"></iconify-icon>
                                </span>
                                <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"+1 (555) 000-0000\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Password</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                                </span>
                                <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\" required>
                            </div>
                        </div>
                        <div class=\"md:col-span-6 col-span-12\">
                            <label class=\"form-label\">Confirm Password</label>
                            <div class=\"icon-field has-validation\">
                                <span class=\"icon\">
                                    <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                                </span>
                                <input type=\"password\" name=\"#0\" class=\"form-control\" placeholder=\"*******\" required>
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <button class=\"btn btn-primary-600\" type=\"submit\">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "forms/formValidation.html.twig", "E:\\Symfony\\WowDash\\templates\\forms\\formValidation.html.twig");
    }
}
