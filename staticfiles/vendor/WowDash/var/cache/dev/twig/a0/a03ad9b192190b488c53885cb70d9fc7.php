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

/* users/usersGrid.html.twig */
class __TwigTemplate_98b42f179d0c870c0bb7b67f07ea099b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/usersGrid.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "users/usersGrid.html.twig", 1);
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
        yield "                <script>
                        \$(\".delete-btn\").on(\"click\", function() {
                            \$(this).closest(\".user-grid-card\").addClass(\"hidden\")
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
        yield "    <div class=\"card h-full p-0 rounded-xl border-0 overflow-hidden\">
        <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between\">
            <div class=\"flex items-center flex-wrap gap-3\">
                <span class=\"text-base font-medium text-secondary-light mb-0\">Show</span>
                <select class=\"form-select form-select-sm w-auto dark:bg-neutral-600 dark:text-white border-neutral-200 dark:border-neutral-500 rounded-lg\">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                <form class=\"navbar-search\">
                    <input type=\"text\" class=\"bg-white dark:bg-neutral-700 h-10 w-auto\" name=\"search\" placeholder=\"Search\">
                    <iconify-icon icon=\"ion:search-outline\" class=\"icon\"></iconify-icon>
                </form>
            </div>
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"btn btn-primary text-sm btn-sm px-3 py-3 rounded-lg flex items-center gap-2\">
                <iconify-icon icon=\"ic:baseline-plus\" class=\"icon text-xl line-height-1\"></iconify-icon>
                Add New User
            </a>
        </div>
        <div class=\"card-body p-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 3xl:grid-cols-4 gap-6\">
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown1\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown1\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Jacob Jones</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown2\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown2\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Darrell Steward</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown3\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown3\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Jerome Bell</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown4\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown4\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Eleanor Pena</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown5\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown5\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Ralph Edwards</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 268
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown6\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown6\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Annette Black</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 315
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown7\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown7\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Robert Fox</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 362
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown8\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown8\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Albert Flores</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 409
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown9\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown9\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Dianne Russell</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 456
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown10\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown10\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Esther Howard</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 503
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg11.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown11\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown11\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img11.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Marvin McKinney</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 550
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg12.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown12\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown12\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"";
        // line 583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img12.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Guy Hawkins</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"";
        // line 597
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"flex items-center justify-between flex-wrap gap-2 mt-6\">
                <span>Showing 1 to 10 of 12 entries</span>
                <ul class=\"pagination flex flex-wrap items-center gap-2 justify-center\">
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\"><iconify-icon icon=\"ep:d-arrow-left\" class=\"\"></iconify-icon></a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base bg-primary-600 text-white\" href=\"javascript:void(0)\">1</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8\" href=\"javascript:void(0)\">2</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\">3</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\">4</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\">5</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\"> <iconify-icon icon=\"ep:d-arrow-right\" class=\"\"></iconify-icon> </a>
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
        return "users/usersGrid.html.twig";
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
        return array (  786 => 597,  769 => 583,  742 => 559,  730 => 550,  713 => 536,  686 => 512,  674 => 503,  657 => 489,  630 => 465,  618 => 456,  601 => 442,  574 => 418,  562 => 409,  545 => 395,  518 => 371,  506 => 362,  489 => 348,  462 => 324,  450 => 315,  433 => 301,  406 => 277,  394 => 268,  377 => 254,  350 => 230,  338 => 221,  321 => 207,  294 => 183,  282 => 174,  265 => 160,  238 => 136,  226 => 127,  209 => 113,  182 => 89,  170 => 80,  153 => 66,  126 => 42,  114 => 33,  91 => 12,  81 => 11,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script %}
                <script>
                        \$(\".delete-btn\").on(\"click\", function() {
                            \$(this).closest(\".user-grid-card\").addClass(\"hidden\")
                        });
                </script>
        {% endblock custom_script %}

{% block content %}
    <div class=\"card h-full p-0 rounded-xl border-0 overflow-hidden\">
        <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between\">
            <div class=\"flex items-center flex-wrap gap-3\">
                <span class=\"text-base font-medium text-secondary-light mb-0\">Show</span>
                <select class=\"form-select form-select-sm w-auto dark:bg-neutral-600 dark:text-white border-neutral-200 dark:border-neutral-500 rounded-lg\">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                <form class=\"navbar-search\">
                    <input type=\"text\" class=\"bg-white dark:bg-neutral-700 h-10 w-auto\" name=\"search\" placeholder=\"Search\">
                    <iconify-icon icon=\"ion:search-outline\" class=\"icon\"></iconify-icon>
                </form>
            </div>
            <a href=\"{{ path('viewProfile') }}\" class=\"btn btn-primary text-sm btn-sm px-3 py-3 rounded-lg flex items-center gap-2\">
                <iconify-icon icon=\"ic:baseline-plus\" class=\"icon text-xl line-height-1\"></iconify-icon>
                Add New User
            </a>
        </div>
        <div class=\"card-body p-6\">
            <div class=\"grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 3xl:grid-cols-4 gap-6\">
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg1.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown1\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown1\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img1.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Jacob Jones</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg2.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown2\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown2\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img2.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Darrell Steward</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg3.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown3\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown3\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img3.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Jerome Bell</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg4.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown4\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown4\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img4.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Eleanor Pena</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg5.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown5\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown5\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img5.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Ralph Edwards</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg6.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown6\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown6\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img6.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Annette Black</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg7.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown7\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown7\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img7.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Robert Fox</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg8.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown8\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown8\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img8.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Albert Flores</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg9.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown9\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown9\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img9.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Dianne Russell</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg10.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown10\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown10\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img10.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Esther Howard</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg11.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown11\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown11\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img11.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Marvin McKinney</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"user-grid-card\">
                    <div class=\"relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-bg12.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">

                        <div class=\"dropdown absolute top-0 end-0 me-4 mt-4\">
                            <button data-dropdown-toggle=\"dropdown12\" class=\"bg-gradient-to-r from-white/50 w-8 h-8 rounded-lg border border-light-white flex justify-center items-center text-white\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>

                            <div id=\"dropdown12\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-danger-100 dark:hover:bg-danger-600/25 rounded hover:text-danger-500 dark:hover:text-danger-600 flex items-center gap-2\">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"pe-6 pb-4 ps-6 text-center mt--50\">
                            <img src=\"{{ asset('assets/images/user-grid/user-grid-img12.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-[100px] h-[100px] ms-auto me-auto -mt-[50px] rounded-full object-fit-cover\">
                            <h6 class=\"text-lg mb-0 mt-1.5\">Guy Hawkins</h6>
                            <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>

                            <div class=\"center-border relative bg-gradient-to-r from-danger-500/10 to-danger-50/25 rounded-lg p-3 flex items-center gap-4 before:absolute before:w-px before:h-full before:z-[1] before:bg-neutral-200 dark:before:bg-neutral-500 before:start-1/2\">
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">Design</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Department</span>
                                </div>
                                <div class=\"text-center w-1/2\">
                                    <h6 class=\"text-base mb-0\">UI UX Designer</h6>
                                    <span class=\"text-secondary-light text-sm mb-0\">Designation</span>
                                </div>
                            </div>
                            <a href=\"{{ path('viewProfile') }}\" class=\"bg-primary-50 hover:bg-primary-600 dark:hover:bg-primary-600 hover:text-white dark:hover:text-white dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 bg-hover-primary-600 hover-text-white p-2.5 text-sm btn-sm px-3 py-3 rounded-lg flex items-center justify-center mt-4 font-medium gap-2 w-full\">
                                View Profile
                                <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon text-xl line-height-1\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"flex items-center justify-between flex-wrap gap-2 mt-6\">
                <span>Showing 1 to 10 of 12 entries</span>
                <ul class=\"pagination flex flex-wrap items-center gap-2 justify-center\">
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\"><iconify-icon icon=\"ep:d-arrow-left\" class=\"\"></iconify-icon></a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base bg-primary-600 text-white\" href=\"javascript:void(0)\">1</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8\" href=\"javascript:void(0)\">2</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\">3</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\">4</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\">5</a>
                    </li>
                    <li class=\"page-item\">
                        <a class=\"page-link bg-neutral-300 dark:bg-neutral-600 text-secondary-light font-semibold rounded-lg border-0 flex items-center justify-center h-8 w-8 text-base\" href=\"javascript:void(0)\"> <iconify-icon icon=\"ep:d-arrow-right\" class=\"\"></iconify-icon> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

{% endblock content %}", "users/usersGrid.html.twig", "E:\\Symfony\\WowDash\\templates\\users\\usersGrid.html.twig");
    }
}
