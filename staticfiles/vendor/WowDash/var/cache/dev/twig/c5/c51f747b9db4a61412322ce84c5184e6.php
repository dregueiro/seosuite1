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

/* forms/form.html.twig */
class __TwigTemplate_2ca4ef9ca4110168ebaea1906e32999a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/form.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "forms/form.html.twig", 1);
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
                    <h6 class=\"text-lg font-semibold mb-0\">Default Inputs</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Basic Input</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input with Placeholder</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"info@gmail.com\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input with Phone </label>
                            <input type=\"text\" class=\"form-control grow\" placeholder=\"+1 (555) 253-08515\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input Date</label>
                            <input type=\"date\" name=\"#0\" class=\"form-control\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input with Payment</label>
                            <div class=\"flex\">
                                <span class=\"inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600\">
                                    <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card/payment-icon.png"), "html", null, true);
        yield "\" alt=\"image\">
                                </span>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"Card Number\">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class=\"card border-0 mt-6\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">Input Group</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <span class=\"inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600\">
                                    <iconify-icon icon=\"mynaui:envelope\"></iconify-icon>
                                </span>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"info@gmail.com\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <select class=\"form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto\">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"info@gmail.com\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <input type=\"text\" class=\"form-control grow rounded-se-none rounded-ee-none\" placeholder=\"info@gmail.com\">
                                <select class=\"form-select flex-grow-0 rounded-ss-none rounded-es-none border-s-0 w-auto\">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <span class=\"inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600\">
                                    http://
                                </span>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"www.random.com\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <input type=\"text\" class=\"form-control grow rounded-se-none rounded-ee-none\" placeholder=\"www.random.com\">
                                <button type=\"button\" class=\"inline-flex items-center px-3 border rounded-s-0 border-s-0 rounded-e-md border-neutral-200 dark:border-neutral-600\"><iconify-icon icon=\"lucide:copy\"></iconify-icon>Copy</button>
                            </div>
                            <p class=\"text-sm mt-2 mb-0\">This is a hint text to help user.</p>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">Input Sizing</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input Large</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control py-4\" placeholder=\"info@gmail.com\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input Medium</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"info@gmail.com\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input Small</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control py-2 text-sm\" placeholder=\"info@gmail.com\">
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class=\"card border-0 mt-6\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">File Input Sizing</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Large Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg\" name=\"#0\" type=\"file\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Medium Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg\" type=\"file\" name=\"#0\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Small Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-xs\" name=\"#0\" type=\"file\">
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class=\"card border-0 mt-6\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">Custom Forms</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Readonly Input</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"info@gmail.com\" value=\"info@gmail.com\" readonly>
                        </div>
                        <div class=\"col-span-12\">
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
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Medium Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg\" type=\"file\" name=\"#0\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Textarea input field</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-5\">
                        <div class=\"lg:col-span-4 col-span-12\">
                            <label class=\"form-label\">Description</label>
                            <textarea name=\"#0\" class=\"form-control\" rows=\"4\" cols=\"50\" placeholder=\"Enter a description...\"></textarea>
                        </div>
                        <div class=\"lg:col-span-4 col-span-12\">
                            <label class=\"form-label\">Description</label>
                            <textarea name=\"#0\" class=\"form-control\" rows=\"4\" cols=\"50\" placeholder=\"Enter a description...\" readonly></textarea>
                        </div>
                        <div class=\"lg:col-span-4 col-span-12\">
                            <label class=\"form-label\">Description</label>
                            <textarea class=\"form-control border-danger-600\" rows=\"4\" cols=\"50\" placeholder=\"Enter a description...\" required=\"\"></textarea>
                            <div class=\"text-danger-600 text-sm\">
                                Please enter a message in the textarea.
                            </div>
                        </div>
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
        return "forms/form.html.twig";
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
        return array (  98 => 33,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"grid grid-cols-12 gap-5\">
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Inputs</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Basic Input</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input with Placeholder</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"info@gmail.com\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input with Phone </label>
                            <input type=\"text\" class=\"form-control grow\" placeholder=\"+1 (555) 253-08515\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input Date</label>
                            <input type=\"date\" name=\"#0\" class=\"form-control\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input with Payment</label>
                            <div class=\"flex\">
                                <span class=\"inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600\">
                                    <img src=\"{{ asset('assets/images/card/payment-icon.png') }}\" alt=\"image\">
                                </span>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"Card Number\">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class=\"card border-0 mt-6\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">Input Group</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <span class=\"inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600\">
                                    <iconify-icon icon=\"mynaui:envelope\"></iconify-icon>
                                </span>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"info@gmail.com\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <select class=\"form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto\">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"info@gmail.com\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <input type=\"text\" class=\"form-control grow rounded-se-none rounded-ee-none\" placeholder=\"info@gmail.com\">
                                <select class=\"form-select flex-grow-0 rounded-ss-none rounded-es-none border-s-0 w-auto\">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <span class=\"inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600\">
                                    http://
                                </span>
                                <input type=\"text\" class=\"form-control grow rounded-ss-none rounded-es-none\" placeholder=\"www.random.com\">
                            </div>
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input</label>
                            <div class=\"flex\">
                                <input type=\"text\" class=\"form-control grow rounded-se-none rounded-ee-none\" placeholder=\"www.random.com\">
                                <button type=\"button\" class=\"inline-flex items-center px-3 border rounded-s-0 border-s-0 rounded-e-md border-neutral-200 dark:border-neutral-600\"><iconify-icon icon=\"lucide:copy\"></iconify-icon>Copy</button>
                            </div>
                            <p class=\"text-sm mt-2 mb-0\">This is a hint text to help user.</p>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
        <div class=\"md:col-span-6 col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">Input Sizing</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input Large</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control py-4\" placeholder=\"info@gmail.com\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input Medium</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"info@gmail.com\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Input Small</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control py-2 text-sm\" placeholder=\"info@gmail.com\">
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class=\"card border-0 mt-6\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">File Input Sizing</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Large Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg\" name=\"#0\" type=\"file\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Medium Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg\" type=\"file\" name=\"#0\">
                        </div>
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Small Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-xs\" name=\"#0\" type=\"file\">
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            <div class=\"card border-0 mt-6\">
                <div class=\"card-header\">
                    <h6 class=\"text-lg font-semibold mb-0\">Custom Forms</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-4\">
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Readonly Input</label>
                            <input type=\"text\" name=\"#0\" class=\"form-control\" placeholder=\"info@gmail.com\" value=\"info@gmail.com\" readonly>
                        </div>
                        <div class=\"col-span-12\">
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
                        <div class=\"col-span-12\">
                            <label class=\"form-label\">Medium Size File Input </label>
                            <input class=\"border border-neutral-200 dark:border-neutral-600 w-full rounded-lg\" type=\"file\" name=\"#0\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12\">
            <div class=\"card border-0\">
                <div class=\"card-header\">
                    <h5 class=\"text-lg font-semibold mb-0\">Textarea input field</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"grid grid-cols-12 gap-5\">
                        <div class=\"lg:col-span-4 col-span-12\">
                            <label class=\"form-label\">Description</label>
                            <textarea name=\"#0\" class=\"form-control\" rows=\"4\" cols=\"50\" placeholder=\"Enter a description...\"></textarea>
                        </div>
                        <div class=\"lg:col-span-4 col-span-12\">
                            <label class=\"form-label\">Description</label>
                            <textarea name=\"#0\" class=\"form-control\" rows=\"4\" cols=\"50\" placeholder=\"Enter a description...\" readonly></textarea>
                        </div>
                        <div class=\"lg:col-span-4 col-span-12\">
                            <label class=\"form-label\">Description</label>
                            <textarea class=\"form-control border-danger-600\" rows=\"4\" cols=\"50\" placeholder=\"Enter a description...\" required=\"\"></textarea>
                            <div class=\"text-danger-600 text-sm\">
                                Please enter a message in the textarea.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "forms/form.html.twig", "E:\\Symfony\\WowDash\\templates\\forms\\form.html.twig");
    }
}
