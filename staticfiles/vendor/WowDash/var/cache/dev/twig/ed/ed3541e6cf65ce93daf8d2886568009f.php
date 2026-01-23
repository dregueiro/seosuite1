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

/* componentspage/avatar.html.twig */
class __TwigTemplate_497e15ea288c932f09b75595b17478f4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/avatar.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/avatar.html.twig", 1);
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
        yield "        <script>
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
    <div class=\"grid grid-cols-1 md:grid-cols-12 gap-6\">
        <div class=\"col-span-12 xl:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Avatar Sizes</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex items-center flex-wrap gap-3\">
                        <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" class=\"w-6 h-6 rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" class=\"w-10 h-10 rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" class=\"w-[56px] h-[56px] rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" class=\"w-[64px] h-[64px] rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" class=\"w-[72px] h-[72px] rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" class=\"w-[80px] h-[80px] rounded-full object-fit-cover\" alt=\"Avatar\">
                    </div>
                    <div class=\"flex items-center flex-wrap gap-3 mt-6\">
                        <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" class=\"w-6 h-6 rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" class=\"w-10 h-10 rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" class=\"w-[44px] h-[44px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" class=\"w-[56px] h-[56px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" class=\"w-[64px] h-[64px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" class=\"w-[72px] h-[72px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" class=\"w-[80px] h-[80px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Avatar With content</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex items-center flex-wrap gap-3\">
                        <span class=\"w-6 h-6 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400\">24</span>
                        <span class=\"w-8 h-8 rounded-full object-fit-cover flex justify-center items-center font-semibold text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400\">32</span>
                        <span class=\"w-10 h-10 rounded-full object-fit-cover flex justify-center items-center font-semibold text-sm bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400\">40</span>
                        <span class=\"w-[44px] h-[44px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-base bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400\">44</span>
                        <span class=\"w-[56px] h-[56px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-lg bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400\">56</span>
                        <span class=\"w-[64px] h-[64px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-xl bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400\">64</span>
                    </div>
                    <div class=\"flex items-center flex-wrap gap-3 mt-6\">
                        <span class=\"w-6 h-6 rounded object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400\">24</span>
                        <span class=\"w-8 h-8 rounded-lg object-fit-cover flex justify-center items-center font-semibold text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400\">32</span>
                        <span class=\"w-10 h-10 rounded-lg object-fit-cover flex justify-center items-center font-semibold text-sm bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400\">40</span>
                        <span class=\"w-[44px] h-[44px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-base bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400\">44</span>
                        <span class=\"w-[56px] h-[56px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-lg bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400\">56</span>
                        <span class=\"w-[64px] h-[64px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-xl bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400\">64</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Avatar Shape Style</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex items-center flex-wrap justify-between gap-3\">
                        <img src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-shape1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-[120px] h-[120px] rounded-lg object-fit-cover\">
                        <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-shape2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-[120px] h-[120px] rounded-full object-fit-cover\">
                        <img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-shape3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-auto h-[120px]  object-fit-cover\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0 h-full\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Status Indicator</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex items-center flex-wrap gap-3\">
                        <div class=\"relative\">
                            <img src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/status-avatar.png"), "html", null, true);
        yield "\" class=\"w-6 h-6 rounded-full object-fit-cover\" alt=\"Avatar\">
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/status-avatar.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full object-fit-cover\" alt=\"Avatar\">
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <img src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/status-avatar.png"), "html", null, true);
        yield "\" class=\"w-10 h-10 rounded-full object-fit-cover\" alt=\"Avatar\">
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <img src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/status-avatar.png"), "html", null, true);
        yield "\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\" alt=\"Avatar\">
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                    </div>
                    <div class=\"flex items-center flex-wrap gap-3 mt-6\">
                        <div class=\"relative\">
                            <span class=\"w-6 h-6 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400\">24</span>
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <span class=\"w-8 h-8 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400\">24</span>
                            <span class=\"w-2 h-2 bg-purple-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <span class=\"w-10 h-10 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400\">24</span>
                            <span class=\"w-2 h-2 bg-success-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <span class=\"w-[44px] h-[44px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400\">24</span>
                            <span class=\"w-2 h-2 bg-info-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0 h-full\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Avatar Group</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex -space-x-2 overflow-hidden\">
                        <img src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative\">
                        <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <span class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px border bg-neutral-100 text-neutral-600 dark:bg-neutral-600 dark:text-white dark:border-neutral-500 text-xs inline-flex items-center justify-center\">
                            +5
                        </span>
                        <button type=\"button\" class=\"w-6 h-6 rounded-full border border-primary-600 text-primary-600 ms-8 border-dashed text-secondary-light text-xs inline-flex items-center justify-center\">
                            <iconify-icon icon=\"ic:baseline-plus\" class=\"\"></iconify-icon>
                        </button>
                    </div>
                    <div class=\"flex -space-x-2 overflow-hidden mt-6\">
                        <img src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative\">
                        <img src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar-group6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <span class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px border bg-neutral-100 text-neutral-600 dark:bg-neutral-600 dark:text-white dark:border-neutral-500 text-xs inline-flex items-center justify-center\">
                            +5
                        </span>
                        <button type=\"button\" class=\"w-8 h-8 rounded-full border border-primary-600 text-primary-600 ms-8 border-dashed text-secondary-light text-lg inline-flex items-center justify-center\">
                            <iconify-icon icon=\"ic:baseline-plus\" class=\"\"></iconify-icon>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0 h-full\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Images With content</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover shrink-0\">
                            <div class=\"grow inline-flex flex-col\">
                                <h6 class=\"text-sm mb-0\">Will mart</h6>
                                <span class=\"text-xs text-secondary-light\">random@gmail.com</span>
                            </div>
                        </div>
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover shrink-0\">
                            <div class=\"grow inline-flex flex-col\">
                                <h6 class=\"text-sm mb-0\">Will mart</h6>
                                <span class=\"text-xs text-secondary-light\">random@gmail.com</span>
                            </div>
                        </div>
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover shrink-0\">
                            <div class=\"grow inline-flex flex-col\">
                                <h6 class=\"text-sm mb-0\">Sangeeta</h6>
                                <span class=\"text-xs text-secondary-light\">random@gmail.com</span>
                            </div>
                        </div>
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/avatar2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover shrink-0\">
                            <div class=\"grow inline-flex flex-col\">
                                <h6 class=\"text-sm mb-0\">Sangeeta</h6>
                                <span class=\"text-xs text-secondary-light\">random@gmail.com</span>
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
        return "componentspage/avatar.html.twig";
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
        return array (  396 => 195,  386 => 188,  376 => 181,  366 => 174,  344 => 155,  340 => 154,  336 => 153,  332 => 152,  328 => 151,  324 => 150,  320 => 149,  308 => 140,  304 => 139,  300 => 138,  296 => 137,  292 => 136,  288 => 135,  284 => 134,  249 => 102,  242 => 98,  235 => 94,  228 => 90,  212 => 77,  208 => 76,  204 => 75,  164 => 38,  160 => 37,  156 => 36,  152 => 35,  148 => 34,  144 => 33,  140 => 32,  136 => 31,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  91 => 12,  81 => 11,  68 => 4,  58 => 3,  41 => 1,);
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

    <div class=\"grid grid-cols-1 md:grid-cols-12 gap-6\">
        <div class=\"col-span-12 xl:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Avatar Sizes</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex items-center flex-wrap gap-3\">
                        <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" class=\"w-6 h-6 rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" class=\"w-8 h-8 rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" class=\"w-10 h-10 rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" class=\"w-[56px] h-[56px] rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" class=\"w-[64px] h-[64px] rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" class=\"w-[72px] h-[72px] rounded-full object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" class=\"w-[80px] h-[80px] rounded-full object-fit-cover\" alt=\"Avatar\">
                    </div>
                    <div class=\"flex items-center flex-wrap gap-3 mt-6\">
                        <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" class=\"w-6 h-6 rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" class=\"w-8 h-8 rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" class=\"w-10 h-10 rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" class=\"w-[44px] h-[44px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" class=\"w-[56px] h-[56px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" class=\"w-[64px] h-[64px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" class=\"w-[72px] h-[72px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                        <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" class=\"w-[80px] h-[80px] rounded-lg object-fit-cover\" alt=\"Avatar\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Avatar With content</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex items-center flex-wrap gap-3\">
                        <span class=\"w-6 h-6 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400\">24</span>
                        <span class=\"w-8 h-8 rounded-full object-fit-cover flex justify-center items-center font-semibold text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400\">32</span>
                        <span class=\"w-10 h-10 rounded-full object-fit-cover flex justify-center items-center font-semibold text-sm bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400\">40</span>
                        <span class=\"w-[44px] h-[44px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-base bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400\">44</span>
                        <span class=\"w-[56px] h-[56px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-lg bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400\">56</span>
                        <span class=\"w-[64px] h-[64px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-xl bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400\">64</span>
                    </div>
                    <div class=\"flex items-center flex-wrap gap-3 mt-6\">
                        <span class=\"w-6 h-6 rounded object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400\">24</span>
                        <span class=\"w-8 h-8 rounded-lg object-fit-cover flex justify-center items-center font-semibold text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400\">32</span>
                        <span class=\"w-10 h-10 rounded-lg object-fit-cover flex justify-center items-center font-semibold text-sm bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400\">40</span>
                        <span class=\"w-[44px] h-[44px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-base bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400\">44</span>
                        <span class=\"w-[56px] h-[56px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-lg bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400\">56</span>
                        <span class=\"w-[64px] h-[64px] rounded-lg object-fit-cover flex justify-center items-center font-semibold text-xl bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400\">64</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Avatar Shape Style</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex items-center flex-wrap justify-between gap-3\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-shape1.png') }}\" alt=\"\" class=\"w-[120px] h-[120px] rounded-lg object-fit-cover\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-shape2.png') }}\" alt=\"\" class=\"w-[120px] h-[120px] rounded-full object-fit-cover\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-shape3.png') }}\" alt=\"\" class=\"w-auto h-[120px]  object-fit-cover\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0 h-full\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Status Indicator</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex items-center flex-wrap gap-3\">
                        <div class=\"relative\">
                            <img src=\"{{ asset('assets/images/avatar/status-avatar.png') }}\" class=\"w-6 h-6 rounded-full object-fit-cover\" alt=\"Avatar\">
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <img src=\"{{ asset('assets/images/avatar/status-avatar.png') }}\" class=\"w-8 h-8 rounded-full object-fit-cover\" alt=\"Avatar\">
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <img src=\"{{ asset('assets/images/avatar/status-avatar.png') }}\" class=\"w-10 h-10 rounded-full object-fit-cover\" alt=\"Avatar\">
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <img src=\"{{ asset('assets/images/avatar/status-avatar.png') }}\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\" alt=\"Avatar\">
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                    </div>
                    <div class=\"flex items-center flex-wrap gap-3 mt-6\">
                        <div class=\"relative\">
                            <span class=\"w-6 h-6 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400\">24</span>
                            <span class=\"w-2 h-2 bg-primary-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <span class=\"w-8 h-8 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400\">24</span>
                            <span class=\"w-2 h-2 bg-purple-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <span class=\"w-10 h-10 rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400\">24</span>
                            <span class=\"w-2 h-2 bg-success-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                        <div class=\"relative\">
                            <span class=\"w-[44px] h-[44px] rounded-full object-fit-cover flex justify-center items-center font-semibold text-[10px] bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400\">24</span>
                            <span class=\"w-2 h-2 bg-info-600 border br-white rounded-full absolute end-0 bottom-[3px]\"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0 h-full\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Avatar Group</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"flex -space-x-2 overflow-hidden\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group1.png') }}\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group2.png') }}\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group3.png') }}\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group4.png') }}\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group5.png') }}\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group6.png') }}\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group6.png') }}\" alt=\"\" class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px\">
                        <span class=\"w-6 h-6 rounded-full object-fit-cover relative ms--10px border bg-neutral-100 text-neutral-600 dark:bg-neutral-600 dark:text-white dark:border-neutral-500 text-xs inline-flex items-center justify-center\">
                            +5
                        </span>
                        <button type=\"button\" class=\"w-6 h-6 rounded-full border border-primary-600 text-primary-600 ms-8 border-dashed text-secondary-light text-xs inline-flex items-center justify-center\">
                            <iconify-icon icon=\"ic:baseline-plus\" class=\"\"></iconify-icon>
                        </button>
                    </div>
                    <div class=\"flex -space-x-2 overflow-hidden mt-6\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group1.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group2.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group3.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group4.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group5.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group6.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <img src=\"{{ asset('assets/images/avatar/avatar-group6.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px\">
                        <span class=\"w-8 h-8 rounded-full object-fit-cover relative ms--10px border bg-neutral-100 text-neutral-600 dark:bg-neutral-600 dark:text-white dark:border-neutral-500 text-xs inline-flex items-center justify-center\">
                            +5
                        </span>
                        <button type=\"button\" class=\"w-8 h-8 rounded-full border border-primary-600 text-primary-600 ms-8 border-dashed text-secondary-light text-lg inline-flex items-center justify-center\">
                            <iconify-icon icon=\"ic:baseline-plus\" class=\"\"></iconify-icon>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0 h-full\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Images With content</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover shrink-0\">
                            <div class=\"grow inline-flex flex-col\">
                                <h6 class=\"text-sm mb-0\">Will mart</h6>
                                <span class=\"text-xs text-secondary-light\">random@gmail.com</span>
                            </div>
                        </div>
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/avatar/avatar1.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover shrink-0\">
                            <div class=\"grow inline-flex flex-col\">
                                <h6 class=\"text-sm mb-0\">Will mart</h6>
                                <span class=\"text-xs text-secondary-light\">random@gmail.com</span>
                            </div>
                        </div>
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover shrink-0\">
                            <div class=\"grow inline-flex flex-col\">
                                <h6 class=\"text-sm mb-0\">Sangeeta</h6>
                                <span class=\"text-xs text-secondary-light\">random@gmail.com</span>
                            </div>
                        </div>
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/avatar/avatar2.png') }}\" alt=\"\" class=\"w-8 h-8 rounded-full object-fit-cover shrink-0\">
                            <div class=\"grow inline-flex flex-col\">
                                <h6 class=\"text-sm mb-0\">Sangeeta</h6>
                                <span class=\"text-xs text-secondary-light\">random@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "componentspage/avatar.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\avatar.html.twig");
    }
}
