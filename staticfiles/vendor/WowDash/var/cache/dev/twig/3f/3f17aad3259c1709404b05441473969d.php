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

/* email.html.twig */
class __TwigTemplate_889c35c51281b7c4c8ba7bfc43fd77d1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "email.html.twig", 1);
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
        yield "    <script>
        // Table Header Checkbox checked all js Start
        \$(\"#selectAll\").on(\"change\", function() {
            \$(\".form-check .form-check-input\").prop(\"checked\", \$(this).prop(\"checked\"));

            if (\$(this).prop(\"checked\")) {
                \$(\".email-item\").addClass(\"active\");
            } else {
                \$(\".email-item\").removeClass(\"active\");
            }
        });

        // Active Item with js
        \$(\".form-check .form-check-input\").on(\"change\", function() {
            if (\$(this).is(\":checked\")) {
                \$(this).closest(\".email-item\").addClass(\"active\");
            } else {
                \$(this).closest(\".email-item\").removeClass(\"active\");
            }
        });

        // Selected Checkbox count amount js Start
        \$(\".email-card .form-check-input\").on(\"change\", function() {
            let selectedCount = \$(\".email-card .form-check-input:checked\").length;

            if (selectedCount > 0) {
                \$(\".delete-button\").removeClass(\"hidden\");
            } else {
                \$(\".delete-button\").addClass(\"hidden\")
            }
        });
        // Selected Checkbox count amount js End

        \$(\".delete-button\").on(\"click\", function() {
            \$(\".email-item.active\").addClass(\"hidden\")
        });

        // Page Reload Js
        \$(\".reload-button\").on(\"click\", function() {
            history.go(0);
        });

        // Starred Button js
        \$(\".starred-button\").on(\"click\", function() {
            \$(this).toggleClass(\"active\")
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 54
        yield "    <div class=\"grid grid-cols-1 xl:grid-cols-12 gap-6\">
        <div class=\"col-span-12 xl:col-span-4 2xl:col-span-3\">
            <div class=\"card h-full p-0 border-0\">
                <div class=\"card-body p-6\">
                    <button type=\"button\" class=\"btn bg-primary-600 hover:bg-primary-700 text-white dark:text-white text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center gap-2 mb-4\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                        <iconify-icon icon=\"fa6-regular:square-plus\" class=\"icon text-lg line-height-1\"></iconify-icon>
                        Compose
                    </button>

                    <div class=\"mt-4\">
                        <ul>
                            <li class=\"item-active mb-1.5\">
                                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        yield "\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"uil:envelope\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Inbox</span>
                                        </span>
                                        <span class=\"font-medium\">800</span>
                                    </span>
                                </a>
                            </li>
                            <li class=\"mb-1.5\">
                                <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("starred");
        yield "\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"ph:star-bold\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Starred</span>
                                        </span>
                                        <span class=\"font-medium\">250</span>
                                    </span>
                                </a>
                            </li>
                            <li class=\"mb-1.5\">
                                <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        yield "\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"ion:paper-plane-outline\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Sent</span>
                                        </span>
                                        <span class=\"font-medium\">80</span>
                                    </span>
                                </a>
                            </li>
                            <li class=\"mb-1.5\">
                                <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        yield "\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"lucide:pencil\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Draft</span>
                                        </span>
                                        <span class=\"font-medium\">50</span>
                                    </span>
                                </a>
                            </li>
                            <li class=\"mb-1.5\">
                                <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        yield "\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"ph:warning-bold\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Spam</span>
                                        </span>
                                        <span class=\"font-medium\">30</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        yield "\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"material-symbols:delete-outline\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Bin</span>
                                        </span>
                                        <span class=\"font-medium\">20</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class=\"mt-6\">
                            <h6 class=\"text-lg font-semibold text-neutral-600 dark:text-neutral-200 mb-4\">TAGS</h6>
                            <ul>
                                <li class=\"mb-5\">
                                    <span class=\"line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5\">
                                        <span class=\"w-2 h-2 bg-primary-600 rounded-full\"></span>
                                        Personal
                                    </span>
                                </li>
                                <li class=\"mb-5\">
                                    <span class=\"line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5\">
                                        <span class=\"w-2 h-2 bg-purple-600 rounded-full\"></span>
                                        Social
                                    </span>
                                </li>
                                <li class=\"mb-5\">
                                    <span class=\"line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5\">
                                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                                        Promotions
                                    </span>
                                </li>
                                <li class=\"mb-5\">
                                    <span class=\"line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5\">
                                        <span class=\"w-2 h-2 bg-warning-600 rounded-full\"></span>
                                        Business
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 xl:col-span-8 2xl:col-span-9\">
            <div class=\"card h-full p-0 border-0 email-card\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <div class=\"flex flex-wrap items-center justify-between gap-4\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\" id=\"selectAll\">
                                <div class=\"\">
                                    <button data-dropdown-toggle=\"dropdownArrowDown\" class=\"focus:ring-4 focus:outline-none focus:ring-blue-300  text-sm dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-full w-4 h-4 flex items-center justify-center\" type=\"button\">
                                        <iconify-icon icon=\"typcn:arrow-sorted-down\" class=\"icon line-height-1\"></iconify-icon>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id=\"dropdownArrowDown\" class=\"sm:min-w-max z-10 hidden border border-transparent dark:border-neutral-600 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 dark:bg-gray-700\">
                                        <ul class=\"rounded-lg bg-white dark:bg-neutral-700 shadow p-4 text-sm text-gray-700 dark:text-gray-200\">
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalView\">
                                                    All
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    None
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    Read
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    Unread
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    Starred
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    Unstarred
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type=\"button\" class=\"delete-button hidden text-secondary-light text-xl flex\">
                                <iconify-icon icon=\"material-symbols:delete-outline\" class=\"icon line-height-1\"></iconify-icon>
                            </button>
                            <button type=\"button\" class=\"reload-button text-secondary-light text-xl flex\">
                                <iconify-icon icon=\"tabler:reload\" class=\"icon\"></iconify-icon>
                            </button>

                            <div class=\"\">
                                <button data-dropdown-toggle=\"dropdownThreeDots\" class=\"focus:ring-4 focus:outline-none focus:ring-blue-300  text-sm dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-full w-4 h-4 flex items-center justify-center\" type=\"button\">
                                    <iconify-icon icon=\"entypo:dots-three-vertical\" class=\"icon text-secondary-light\"></iconify-icon>
                                </button>
                                <!-- Dropdown menu -->
                                <div id=\"dropdownThreeDots\" class=\"sm:min-w-max z-10 hidden border border-transparent dark:border-neutral-600 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 dark:bg-gray-700\">
                                    <ul class=\"p-4 text-sm text-gray-700 dark:text-gray-200\">
                                        <li>
                                            <button type=\"button\" class=\"dropdown-item px-4 py-2 rounded text-secondary-light hover:bg-neutral-200 dark:hover:bg-neutral-600 text-hover-neutral-900 flex items-center text-start gap-2.5\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalView\">
                                                <iconify-icon icon=\"gravity-ui:envelope-open\" class=\"icon text-lg line-height-1\"></iconify-icon>
                                                Mark all as read
                                            </button>
                                        </li>
                                        <li>
                                            <p class=\"ms-10 mt-2 text-neutral-500 mb-0\">
                                                Select messages to see more actions
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <form class=\"navbar-search lg:block hidden\">
                                <input type=\"text\" class=\"bg-white dark:text-white dark:bg-neutral-700 h-10 w-auto\" name=\"search\" placeholder=\"Search\">
                                <iconify-icon icon=\"ion:search-outline\" class=\"icon dark:text-white\"></iconify-icon>
                            </form>
                        </div>
                        <div class=\"flex items-center gap-3\">
                            <span class=\"text-secondary-light line-height-1\">1-12 of 1,253</span>
                            <nav aria-label=\"Page navigation example\">
                                <ul class=\"pagination flex\">
                                    <li class=\"page-item\">
                                        <a class=\"page-link flex bg-white dark:bg-neutral-700 border text-secondary-light text-xl\" href=\"javascript:void(0)\"><iconify-icon icon=\"iconamoon:arrow-left-2\" class=\"icon\"></iconify-icon> </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link flex bg-white dark:bg-neutral-700 border text-secondary-light text-xl\" href=\"javascript:void(0)\"><iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"icon\"></iconify-icon> </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class=\"card-body p-0\">
                    <ul class=\"overflow-x-auto\">
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 272
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Jerome Bell</a>
                            <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 283
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Kristin Watson</a>
                            <a href=\"";
        // line 284
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 294
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Cody Fisher</a>
                            <a href=\"";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 305
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Dianne Russell</a>
                            <a href=\"";
        // line 306
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 316
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Floyd Miles</a>
                            <a href=\"";
        // line 317
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 327
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Devon Lane</a>
                            <a href=\"";
        // line 328
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Dianne Russell</a>
                            <a href=\"";
        // line 339
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Annette Black</a>
                            <a href=\"";
        // line 350
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 360
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Bessie Cooper</a>
                            <a href=\"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 371
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Courtney Henry</a>
                            <a href=\"";
        // line 372
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Wade Warren</a>
                            <a href=\"";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewDetails");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                    </ul>
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
        return "email.html.twig";
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
        return array (  545 => 383,  541 => 382,  528 => 372,  524 => 371,  511 => 361,  507 => 360,  494 => 350,  490 => 349,  477 => 339,  473 => 338,  460 => 328,  456 => 327,  443 => 317,  439 => 316,  426 => 306,  422 => 305,  409 => 295,  405 => 294,  392 => 284,  388 => 283,  375 => 273,  371 => 272,  217 => 121,  203 => 110,  189 => 99,  175 => 88,  161 => 77,  147 => 66,  133 => 54,  123 => 53,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block custom_script %}
    <script>
        // Table Header Checkbox checked all js Start
        \$(\"#selectAll\").on(\"change\", function() {
            \$(\".form-check .form-check-input\").prop(\"checked\", \$(this).prop(\"checked\"));

            if (\$(this).prop(\"checked\")) {
                \$(\".email-item\").addClass(\"active\");
            } else {
                \$(\".email-item\").removeClass(\"active\");
            }
        });

        // Active Item with js
        \$(\".form-check .form-check-input\").on(\"change\", function() {
            if (\$(this).is(\":checked\")) {
                \$(this).closest(\".email-item\").addClass(\"active\");
            } else {
                \$(this).closest(\".email-item\").removeClass(\"active\");
            }
        });

        // Selected Checkbox count amount js Start
        \$(\".email-card .form-check-input\").on(\"change\", function() {
            let selectedCount = \$(\".email-card .form-check-input:checked\").length;

            if (selectedCount > 0) {
                \$(\".delete-button\").removeClass(\"hidden\");
            } else {
                \$(\".delete-button\").addClass(\"hidden\")
            }
        });
        // Selected Checkbox count amount js End

        \$(\".delete-button\").on(\"click\", function() {
            \$(\".email-item.active\").addClass(\"hidden\")
        });

        // Page Reload Js
        \$(\".reload-button\").on(\"click\", function() {
            history.go(0);
        });

        // Starred Button js
        \$(\".starred-button\").on(\"click\", function() {
            \$(this).toggleClass(\"active\")
        });
    </script>
{% endblock custom_script %}

{% block content %}
    <div class=\"grid grid-cols-1 xl:grid-cols-12 gap-6\">
        <div class=\"col-span-12 xl:col-span-4 2xl:col-span-3\">
            <div class=\"card h-full p-0 border-0\">
                <div class=\"card-body p-6\">
                    <button type=\"button\" class=\"btn bg-primary-600 hover:bg-primary-700 text-white dark:text-white text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center gap-2 mb-4\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                        <iconify-icon icon=\"fa6-regular:square-plus\" class=\"icon text-lg line-height-1\"></iconify-icon>
                        Compose
                    </button>

                    <div class=\"mt-4\">
                        <ul>
                            <li class=\"item-active mb-1.5\">
                                <a href=\"{{ path('email') }}\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"uil:envelope\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Inbox</span>
                                        </span>
                                        <span class=\"font-medium\">800</span>
                                    </span>
                                </a>
                            </li>
                            <li class=\"mb-1.5\">
                                <a href=\"{{ path('starred') }}\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"ph:star-bold\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Starred</span>
                                        </span>
                                        <span class=\"font-medium\">250</span>
                                    </span>
                                </a>
                            </li>
                            <li class=\"mb-1.5\">
                                <a href=\"{{ path('email') }}\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"ion:paper-plane-outline\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Sent</span>
                                        </span>
                                        <span class=\"font-medium\">80</span>
                                    </span>
                                </a>
                            </li>
                            <li class=\"mb-1.5\">
                                <a href=\"{{ path('email') }}\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"lucide:pencil\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Draft</span>
                                        </span>
                                        <span class=\"font-medium\">50</span>
                                    </span>
                                </a>
                            </li>
                            <li class=\"mb-1.5\">
                                <a href=\"{{ path('email') }}\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"ph:warning-bold\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Spam</span>
                                        </span>
                                        <span class=\"font-medium\">30</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('email') }}\" class=\"hover:bg-primary-50 dark:hover:bg-primary-800/25 group hover:text-neutral-900 px-2.5 py-2.5 w-full rounded-lg text-neutral-600 flex items-center\">
                                    <span class=\"flex items-center gap-2.5 justify-between w-full\">
                                        <span class=\"flex items-center gap-2.5\">
                                            <span class=\"icon text-2xl line-height-1 flex group-hover:text-primary-600\"><iconify-icon icon=\"material-symbols:delete-outline\" class=\"icon line-height-1\"></iconify-icon></span>
                                            <span class=\"font-semibold\">Bin</span>
                                        </span>
                                        <span class=\"font-medium\">20</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class=\"mt-6\">
                            <h6 class=\"text-lg font-semibold text-neutral-600 dark:text-neutral-200 mb-4\">TAGS</h6>
                            <ul>
                                <li class=\"mb-5\">
                                    <span class=\"line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5\">
                                        <span class=\"w-2 h-2 bg-primary-600 rounded-full\"></span>
                                        Personal
                                    </span>
                                </li>
                                <li class=\"mb-5\">
                                    <span class=\"line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5\">
                                        <span class=\"w-2 h-2 bg-purple-600 rounded-full\"></span>
                                        Social
                                    </span>
                                </li>
                                <li class=\"mb-5\">
                                    <span class=\"line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5\">
                                        <span class=\"w-2 h-2 bg-success-600 rounded-full\"></span>
                                        Promotions
                                    </span>
                                </li>
                                <li class=\"mb-5\">
                                    <span class=\"line-height-1 font-medium text-secondary-light text-sm flex items-center gap-2.5\">
                                        <span class=\"w-2 h-2 bg-warning-600 rounded-full\"></span>
                                        Business
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 xl:col-span-8 2xl:col-span-9\">
            <div class=\"card h-full p-0 border-0 email-card\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <div class=\"flex flex-wrap items-center justify-between gap-4\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\" id=\"selectAll\">
                                <div class=\"\">
                                    <button data-dropdown-toggle=\"dropdownArrowDown\" class=\"focus:ring-4 focus:outline-none focus:ring-blue-300  text-sm dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-full w-4 h-4 flex items-center justify-center\" type=\"button\">
                                        <iconify-icon icon=\"typcn:arrow-sorted-down\" class=\"icon line-height-1\"></iconify-icon>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id=\"dropdownArrowDown\" class=\"sm:min-w-max z-10 hidden border border-transparent dark:border-neutral-600 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 dark:bg-gray-700\">
                                        <ul class=\"rounded-lg bg-white dark:bg-neutral-700 shadow p-4 text-sm text-gray-700 dark:text-gray-200\">
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalView\">
                                                    All
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    None
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    Read
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    Unread
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    Starred
                                                </button>
                                            </li>
                                            <li>
                                                <button type=\"button\" class=\"px-4 py-2 rounded text-neutral-600 dark:text-white hover:bg-neutral-200 dark:hover:bg-neutral-600 block w-full text-start text-hover-neutral-900\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalEdit\">
                                                    Unstarred
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type=\"button\" class=\"delete-button hidden text-secondary-light text-xl flex\">
                                <iconify-icon icon=\"material-symbols:delete-outline\" class=\"icon line-height-1\"></iconify-icon>
                            </button>
                            <button type=\"button\" class=\"reload-button text-secondary-light text-xl flex\">
                                <iconify-icon icon=\"tabler:reload\" class=\"icon\"></iconify-icon>
                            </button>

                            <div class=\"\">
                                <button data-dropdown-toggle=\"dropdownThreeDots\" class=\"focus:ring-4 focus:outline-none focus:ring-blue-300  text-sm dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-full w-4 h-4 flex items-center justify-center\" type=\"button\">
                                    <iconify-icon icon=\"entypo:dots-three-vertical\" class=\"icon text-secondary-light\"></iconify-icon>
                                </button>
                                <!-- Dropdown menu -->
                                <div id=\"dropdownThreeDots\" class=\"sm:min-w-max z-10 hidden border border-transparent dark:border-neutral-600 bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 dark:bg-gray-700\">
                                    <ul class=\"p-4 text-sm text-gray-700 dark:text-gray-200\">
                                        <li>
                                            <button type=\"button\" class=\"dropdown-item px-4 py-2 rounded text-secondary-light hover:bg-neutral-200 dark:hover:bg-neutral-600 text-hover-neutral-900 flex items-center text-start gap-2.5\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalView\">
                                                <iconify-icon icon=\"gravity-ui:envelope-open\" class=\"icon text-lg line-height-1\"></iconify-icon>
                                                Mark all as read
                                            </button>
                                        </li>
                                        <li>
                                            <p class=\"ms-10 mt-2 text-neutral-500 mb-0\">
                                                Select messages to see more actions
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <form class=\"navbar-search lg:block hidden\">
                                <input type=\"text\" class=\"bg-white dark:text-white dark:bg-neutral-700 h-10 w-auto\" name=\"search\" placeholder=\"Search\">
                                <iconify-icon icon=\"ion:search-outline\" class=\"icon dark:text-white\"></iconify-icon>
                            </form>
                        </div>
                        <div class=\"flex items-center gap-3\">
                            <span class=\"text-secondary-light line-height-1\">1-12 of 1,253</span>
                            <nav aria-label=\"Page navigation example\">
                                <ul class=\"pagination flex\">
                                    <li class=\"page-item\">
                                        <a class=\"page-link flex bg-white dark:bg-neutral-700 border text-secondary-light text-xl\" href=\"javascript:void(0)\"><iconify-icon icon=\"iconamoon:arrow-left-2\" class=\"icon\"></iconify-icon> </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link flex bg-white dark:bg-neutral-700 border text-secondary-light text-xl\" href=\"javascript:void(0)\"><iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"icon\"></iconify-icon> </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class=\"card-body p-0\">
                    <ul class=\"overflow-x-auto\">
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Jerome Bell</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Kristin Watson</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Cody Fisher</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Dianne Russell</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Floyd Miles</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Devon Lane</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Dianne Russell</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Annette Black</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Bessie Cooper</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Courtney Henry</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                        <li class=\"email-item px-6 py-4 flex gap-4 items-center border-b last:border-0 border-neutral-200 dark:border-neutral-600 cursor-pointer hover:bg-neutral-200 dark:hover:bg-neutral-600 min-w-max\">
                            <div class=\"form-check style-check flex items-center\">
                                <input class=\"form-check-input rounded border border-neutral-400 bg-white dark:bg-neutral-600\" type=\"checkbox\" name=\"checkbox\">
                            </div>
                            <button type=\"button\" class=\"starred-button icon text-xl text-secondary-light line-height-1 flex\">
                                <i class=\"ri-star-line\"></i>
                            </button>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium text-base text-line-1 w-[190px]\">Wade Warren</a>
                            <a href=\"{{ path('viewDetails') }}\" class=\"text-neutral-600 dark:text-neutral-200 font-medium mb-0 line-clamp-1 max-w-[740px]\">Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus. Aliquam pulvinar vestibulum blandit. Donec sed nisl libero. Fusce dignissim luctus sem eu dapibus</a>
                            <span class=\"text-neutral-600 dark:text-neutral-200 font-medium min-w-max-content ms-auto\">6:07 AM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endblock content %}
", "email.html.twig", "E:\\Symfony\\WowDash\\templates\\email.html.twig");
    }
}
