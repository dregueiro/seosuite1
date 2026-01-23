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

/* componentspage/alert.html.twig */
class __TwigTemplate_126d1adacac607ac81945519fa8ea838 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/alert.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/alert.html.twig", 1);
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
                        \$(\".remove-button\").on(\"click\", function() {
                            \$(this).closest(\".alert\").addClass(\"hidden\")
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
        yield "
    <div class=\"grid grid-cols-1 lg:grid-cols-12 gap-6\">
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-50 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-primary-50 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Primary alert
                        <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-purple bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-purple-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Secondary alert
                        <button class=\"remove-button dark:text-purple-400 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Warning alert
                        <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Info alert
                        <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Danger alert
                        <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Outline Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-transparent text-primary-600 border border-primary-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Primary alert
                        <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-purple bg-transparent dark:text-purple-400 border border-purple-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Secondary alert
                        <button class=\"remove-button dark:text-purple-400 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-warning bg-transparent text-warning-600 border border-warning-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Warning alert
                        <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-info bg-transparent text-info-600 border border-info-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Info alert
                        <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-danger bg-transparent text-danger-600 border border-danger-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Danger alert
                        <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Solid Alerts</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 lg:grid-cols-12 gap-6\">
                        <div class=\"col-span-1 lg:col-span-6\">
                            <div class=\"flex flex-col gap-4\">
                                <div class=\"alert alert-primary bg-primary-600 text-white border-primary-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Primary alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                                <div class=\"alert alert-success bg-success-600 text-white border-success-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Success alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                                <div class=\"alert alert-info bg-info-600 text-white border-info-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Info alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-span-1 lg:col-span-6\">
                            <div class=\"flex flex-col gap-4\">
                                <div class=\"alert alert-purple bg-purple-600 text-white border-purple-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Secondary alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                                <div class=\"alert alert-warning bg-warning-600 text-white border-warning-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Warning alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                                <div class=\"alert alert-danger bg-danger-600 text-white border-danger-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Danger alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Outline Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-primary-50 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Primary alert
                        </div>
                        <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-purple bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-purple-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Secondary alert
                        </div>
                        <button class=\"remove-button text-purple-600 dark:text-purple-400 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-success bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-success-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"akar-icons:double-check\" class=\"icon text-xl\"></iconify-icon>
                            This is a Success alert
                        </div>
                        <button class=\"remove-button text-success-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mdi:alert-circle-outline\" class=\"icon text-xl\"></iconify-icon>
                            This is a Warning alert
                        </div>
                        <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"ci:link\" class=\"icon text-xl\"></iconify-icon>
                            This is a Info alert
                        </div>
                        <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:delete-2-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Danger alert
                        </div>
                        <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Left Border Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-start-width-4-px border-l-[3px] border-neutral-200 dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Primary alert
                        </div>
                        <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-purple bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-purple-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Secondary alert
                        </div>
                        <button class=\"remove-button dark:text-purple-400 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-success bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-success-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"akar-icons:double-check\" class=\"icon text-xl\"></iconify-icon>
                            This is a Success alert
                        </div>
                        <button class=\"remove-button text-success-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mdi:alert-circle-outline\" class=\"icon text-xl\"></iconify-icon>
                            This is a Warning alert
                        </div>
                        <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"ci:link\" class=\"icon text-xl\"></iconify-icon>
                            This is a Info alert
                        </div>
                        <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:delete-2-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Danger alert
                        </div>
                        <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-primary-50 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Primary alert
                            <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-primary-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                    <div class=\"alert alert-success bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-success-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Success alert
                            <button class=\"remove-button text-success-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-success-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Warning alert
                            <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-warning-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Info alert
                            <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-info-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Danger alert
                            <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-danger-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-primary-50 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Primary alert
                                    <p class=\"font-medium text-primary-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                    <div class=\"alert alert-success bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-success-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"bi:patch-check\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Success alert
                                    <p class=\"font-medium text-success-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-success-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"mdi:clock-outline\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Warning alert
                                    <p class=\"font-medium text-warning-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"mynaui:check-octagon\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Info alert
                                    <p class=\"font-medium text-info-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"mingcute:delete-2-line\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Danger alert
                                    <p class=\"font-medium text-danger-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
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
        return "componentspage/alert.html.twig";
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
        return array (  91 => 12,  81 => 11,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block custom_script %}
            <script>
                        \$(\".remove-button\").on(\"click\", function() {
                            \$(this).closest(\".alert\").addClass(\"hidden\")
                        });
            </script>
{% endblock custom_script %}

{% block content %}

    <div class=\"grid grid-cols-1 lg:grid-cols-12 gap-6\">
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-50 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-primary-50 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Primary alert
                        <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-purple bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-purple-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Secondary alert
                        <button class=\"remove-button dark:text-purple-400 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Warning alert
                        <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Info alert
                        <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Danger alert
                        <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Outline Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-transparent text-primary-600 border border-primary-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Primary alert
                        <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-purple bg-transparent dark:text-purple-400 border border-purple-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Secondary alert
                        <button class=\"remove-button dark:text-purple-400 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-warning bg-transparent text-warning-600 border border-warning-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Warning alert
                        <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-info bg-transparent text-info-600 border border-info-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Info alert
                        <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-danger bg-transparent text-danger-600 border border-danger-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        This is a Danger alert
                        <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Solid Alerts</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 lg:grid-cols-12 gap-6\">
                        <div class=\"col-span-1 lg:col-span-6\">
                            <div class=\"flex flex-col gap-4\">
                                <div class=\"alert alert-primary bg-primary-600 text-white border-primary-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Primary alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                                <div class=\"alert alert-success bg-success-600 text-white border-success-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Success alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                                <div class=\"alert alert-info bg-info-600 text-white border-info-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Info alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-span-1 lg:col-span-6\">
                            <div class=\"flex flex-col gap-4\">
                                <div class=\"alert alert-purple bg-purple-600 text-white border-purple-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Secondary alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                                <div class=\"alert alert-warning bg-warning-600 text-white border-warning-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Warning alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                                <div class=\"alert alert-danger bg-danger-600 text-white border-danger-600 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                                    This is a Danger alert
                                    <button class=\"remove-button text-white text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Outline Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-primary-50 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Primary alert
                        </div>
                        <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-purple bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-purple-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Secondary alert
                        </div>
                        <button class=\"remove-button text-purple-600 dark:text-purple-400 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-success bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-success-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"akar-icons:double-check\" class=\"icon text-xl\"></iconify-icon>
                            This is a Success alert
                        </div>
                        <button class=\"remove-button text-success-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mdi:alert-circle-outline\" class=\"icon text-xl\"></iconify-icon>
                            This is a Warning alert
                        </div>
                        <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"ci:link\" class=\"icon text-xl\"></iconify-icon>
                            This is a Info alert
                        </div>
                        <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:delete-2-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Danger alert
                        </div>
                        <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Left Border Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-start-width-4-px border-l-[3px] border-neutral-200 dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Primary alert
                        </div>
                        <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-purple bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-purple-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Secondary alert
                        </div>
                        <button class=\"remove-button dark:text-purple-400 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-success bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-success-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"akar-icons:double-check\" class=\"icon text-xl\"></iconify-icon>
                            This is a Success alert
                        </div>
                        <button class=\"remove-button text-success-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mdi:alert-circle-outline\" class=\"icon text-xl\"></iconify-icon>
                            This is a Warning alert
                        </div>
                        <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"ci:link\" class=\"icon text-xl\"></iconify-icon>
                            This is a Info alert
                        </div>
                        <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-600 border-start-width-4-px border-l-[3px] dark:border-neutral-600 px-6 py-[13px] mb-0 font-semibold text-lg rounded flex items-center justify-between\" role=\"alert\">
                        <div class=\"flex items-center gap-2\">
                            <iconify-icon icon=\"mingcute:delete-2-line\" class=\"icon text-xl\"></iconify-icon>
                            This is a Danger alert
                        </div>
                        <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-primary-50 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Primary alert
                            <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-primary-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                    <div class=\"alert alert-success bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-success-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Success alert
                            <button class=\"remove-button text-success-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-success-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Warning alert
                            <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-warning-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Info alert
                            <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-info-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-center justify-between text-lg\">
                            This is a Danger alert
                            <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                        <p class=\"font-medium text-danger-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Alerts</h6>
                </div>
                <div class=\"card-body p-6 flex flex-col gap-4\">
                    <div class=\"alert alert-primary bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border-primary-50 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"mingcute:emoji-line\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Primary alert
                                    <p class=\"font-medium text-primary-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-primary-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                    <div class=\"alert alert-success bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-success-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"bi:patch-check\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Success alert
                                    <p class=\"font-medium text-success-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-success-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                    <div class=\"alert alert-warning bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-warning-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"mdi:clock-outline\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Warning alert
                                    <p class=\"font-medium text-warning-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-warning-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                    <div class=\"alert alert-info bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-info-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"mynaui:check-octagon\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Info alert
                                    <p class=\"font-medium text-info-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-info-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                    <div class=\"alert alert-danger bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 border-danger-100 px-6 py-[11px] mb-0 font-semibold text-lg rounded-lg\" role=\"alert\">
                        <div class=\"flex items-start justify-between text-lg\">
                            <div class=\"flex items-start gap-2\">
                                <iconify-icon icon=\"mingcute:delete-2-line\" class=\"icon text-xl mt-1.5 shrink-0\"></iconify-icon>
                                <div>
                                    This is a Danger alert
                                    <p class=\"font-medium text-danger-600 text-sm mt-2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                            <button class=\"remove-button text-danger-600 text-2xl line-height-1\"> <iconify-icon icon=\"iconamoon:sign-times-light\" class=\"icon\"></iconify-icon></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "componentspage/alert.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\alert.html.twig");
    }
}
