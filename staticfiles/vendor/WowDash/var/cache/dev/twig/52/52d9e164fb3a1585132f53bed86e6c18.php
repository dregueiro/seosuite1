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

/* table/tableData.html.twig */
class __TwigTemplate_e805a888e7303016d9a7ea3a10d0b53f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table/tableData.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "table/tableData.html.twig", 1);
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
        yield "    <div class=\"grid grid-cols-12\">
        <div class=\"col-span-12\">
            <div class=\"card border-0 overflow-hidden\">
                <div class=\"card-header\">
                    <h6 class=\"card-title mb-0 text-lg\">Default Datatables</h6>
                </div>
                <div class=\"card-body\">
                    <table id=\"selection-table\" class=\"border border-neutral-200 dark:border-neutral-600 rounded-lg border-separate\t\">
                        <thead>
                            <tr>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" id=\"serial\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\" for=\"serial\">
                                            S.L
                                        </label>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Invoice
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Name
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Issued Date
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Amount
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Status
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Action
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            01
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526534</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Kathryn Murphy</h6>
                                    </div>
                                </td>
                                <td>25 Jan 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            02
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#696589</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Annette Black</h6>
                                    </div>
                                </td>
                                <td>25 Jan 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            03
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#256584</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Ronald Richards</h6>
                                    </div>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            04
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526587</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Eleanor Pena</h6>
                                    </div>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            05
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#105986</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Leslie Alexander</h6>
                                    </div>
                                </td>
                                <td>15 March 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm\">Pending</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            06
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526589</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Albert Flores</h6>
                                    </div>
                                </td>
                                <td>15 March 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            07
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526520</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Jacob Jones</h6>
                                    </div>
                                </td>
                                <td>27 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            08
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#256584</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Jerome Bell</h6>
                                    </div>
                                </td>
                                <td>27 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm\">Pending</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            09
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#200257</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Marvin McKinney</h6>
                                    </div>
                                </td>
                                <td>30 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            10
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526525</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Cameron Williamson</h6>
                                    </div>
                                </td>
                                <td>30 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            01
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526534</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Kathryn Murphy</h6>
                                    </div>
                                </td>
                                <td>25 Jan 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            02
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#696589</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Annette Black</h6>
                                    </div>
                                </td>
                                <td>25 Jan 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            03
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#256584</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Ronald Richards</h6>
                                    </div>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            04
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526587</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Eleanor Pena</h6>
                                    </div>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            05
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#105986</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Leslie Alexander</h6>
                                    </div>
                                </td>
                                <td>15 March 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm\">Pending</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            06
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526589</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Albert Flores</h6>
                                    </div>
                                </td>
                                <td>15 March 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            07
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526520</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Jacob Jones</h6>
                                    </div>
                                </td>
                                <td>27 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            08
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#256584</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Jerome Bell</h6>
                                    </div>
                                </td>
                                <td>27 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm\">Pending</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            09
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#200257</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Marvin McKinney</h6>
                                    </div>
                                </td>
                                <td>30 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            10
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526525</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-list/user-list10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Cameron Williamson</h6>
                                    </div>
                                </td>
                                <td>30 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
        return "table/tableData.html.twig";
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
        return array (  793 => 671,  759 => 640,  725 => 609,  691 => 578,  657 => 547,  623 => 516,  589 => 485,  555 => 454,  521 => 423,  487 => 392,  453 => 361,  419 => 330,  385 => 299,  351 => 268,  317 => 237,  283 => 206,  249 => 175,  215 => 144,  181 => 113,  147 => 82,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}
    <div class=\"grid grid-cols-12\">
        <div class=\"col-span-12\">
            <div class=\"card border-0 overflow-hidden\">
                <div class=\"card-header\">
                    <h6 class=\"card-title mb-0 text-lg\">Default Datatables</h6>
                </div>
                <div class=\"card-body\">
                    <table id=\"selection-table\" class=\"border border-neutral-200 dark:border-neutral-600 rounded-lg border-separate\t\">
                        <thead>
                            <tr>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" id=\"serial\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\" for=\"serial\">
                                            S.L
                                        </label>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Invoice
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Name
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Issued Date
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Amount
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Status
                                        <svg class=\"w-4 h-4 ms-1\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">
                                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m8 15 4 4 4-4m0-6-4-4-4 4\" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope=\"col\" class=\"text-neutral-800 dark:text-white\">
                                    <div class=\"flex items-center gap-2\">
                                        Action
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            01
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526534</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list1.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Kathryn Murphy</h6>
                                    </div>
                                </td>
                                <td>25 Jan 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            02
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#696589</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list2.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Annette Black</h6>
                                    </div>
                                </td>
                                <td>25 Jan 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            03
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#256584</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list3.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Ronald Richards</h6>
                                    </div>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            04
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526587</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list4.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Eleanor Pena</h6>
                                    </div>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            05
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#105986</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list5.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Leslie Alexander</h6>
                                    </div>
                                </td>
                                <td>15 March 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm\">Pending</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            06
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526589</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list6.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Albert Flores</h6>
                                    </div>
                                </td>
                                <td>15 March 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            07
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526520</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list7.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Jacob Jones</h6>
                                    </div>
                                </td>
                                <td>27 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            08
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#256584</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list8.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Jerome Bell</h6>
                                    </div>
                                </td>
                                <td>27 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm\">Pending</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            09
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#200257</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list9.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Marvin McKinney</h6>
                                    </div>
                                </td>
                                <td>30 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            10
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526525</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list10.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Cameron Williamson</h6>
                                    </div>
                                </td>
                                <td>30 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            01
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526534</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list1.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Kathryn Murphy</h6>
                                    </div>
                                </td>
                                <td>25 Jan 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            02
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#696589</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list2.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Annette Black</h6>
                                    </div>
                                </td>
                                <td>25 Jan 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            03
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#256584</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list3.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Ronald Richards</h6>
                                    </div>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>\$200.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            04
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526587</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list4.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Eleanor Pena</h6>
                                    </div>
                                </td>
                                <td>10 Feb 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            05
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#105986</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list5.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Leslie Alexander</h6>
                                    </div>
                                </td>
                                <td>15 March 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm\">Pending</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            06
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526589</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list6.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Albert Flores</h6>
                                    </div>
                                </td>
                                <td>15 March 2025</td>
                                <td>\$150.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            07
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526520</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list7.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Jacob Jones</h6>
                                    </div>
                                </td>
                                <td>27 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            08
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#256584</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list8.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Jerome Bell</h6>
                                    </div>
                                </td>
                                <td>27 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-6 py-1.5 rounded-full font-medium text-sm\">Pending</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            09
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#200257</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list9.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Marvin McKinney</h6>
                                    </div>
                                </td>
                                <td>30 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class=\"form-check style-check flex items-center\">
                                        <input class=\"form-check-input\" type=\"checkbox\">
                                        <label class=\"ms-2 form-check-label\">
                                            10
                                        </label>
                                    </div>
                                </td>
                                <td><a href=\"javascript:void(0)\" class=\"text-primary-600\">#526525</a></td>
                                <td>
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/user-list/user-list10.png') }}\" alt=\"\" class=\"shrink-0 me-3 rounded-lg\">
                                        <h6 class=\"text-base mb-0 font-medium grow\">Cameron Williamson</h6>
                                    </div>
                                </td>
                                <td>30 April 2025</td>
                                <td>\$250.00</td>
                                <td> <span class=\"bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm\">Paid</span> </td>
                                <td>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-primary-50 dark:bg-primary-600/10 text-primary-600 dark:text-primary-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"iconamoon:eye-light\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"lucide:edit\"></iconify-icon>
                                    </a>
                                    <a href=\"javascript:void(0)\" class=\"w-8 h-8 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded-full inline-flex items-center justify-center\">
                                        <iconify-icon icon=\"mingcute:delete-2-line\"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "table/tableData.html.twig", "E:\\Symfony\\WowDash\\templates\\table\\tableData.html.twig");
    }
}
