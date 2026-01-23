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

/* componentspage/lists.html.twig */
class __TwigTemplate_169f261d5129601cb93d6c0833600c0e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/lists.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/lists.html.twig", 1);
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
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Default List</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600 border-b border-neutral-200 dark:border-neutral-600\">1. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">2. This is list trust fund seitan letterpress, keytar raw denim </li>
                    <li class=\"text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600 border-b border-neutral-200 dark:border-neutral-600\">3. This is list trust fund seitan letterpress, keytar raw </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">4. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class=\"text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600\">5. This is list trust fund seitan letterpress, keytar raw denim </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Active List</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"text-secondary-light p-4 bg-primary-600 border-b border-neutral-200 dark:border-neutral-600 text-white\">1. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">2. This is list trust fund seitan letterpress, keytar raw denim </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">3. This is list trust fund seitan letterpress, keytar raw </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">4. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700\">5. This is list trust fund seitan letterpress, keytar raw denim </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Active List</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"ci:bell-notification\" class=\"text-xl\"></iconify-icon></span>
                            Push Notification (This is push notifications)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"mynaui:cart-check\" class=\"text-xl\"></iconify-icon></span>
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"mdi:security-lock-outline\" class=\"text-xl\"></iconify-icon></span>
                            Security Access (This is Security Access)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"tabler:folder-open\" class=\"text-xl\"></iconify-icon></span>
                            Storage Folder (This is Storage Folder)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"flowbite:forward-outline\" class=\"text-xl\"></iconify-icon></span>
                            Forward Message (This is Forward Message)
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">List Icons & label</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"ci:bell-notification\" class=\"text-xl\"></iconify-icon></span>
                            Push Notification (This is push notifications)
                        </div>
                        <span class=\"text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold\">Low</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"mynaui:cart-check\" class=\"text-xl\"></iconify-icon></span>
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                        <span class=\"text-xs bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded px-2.5 py-1 font-semibold\">High</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"mdi:security-lock-outline\" class=\"text-xl\"></iconify-icon></span>
                            Security Access (This is Security Access)
                        </div>
                        <span class=\"text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold\">Medium</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"tabler:folder-open\" class=\"text-xl\"></iconify-icon></span>
                            Storage Folder (This is Storage Folder)
                        </div>
                        <span class=\"text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold\">Low</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"flowbite:forward-outline\" class=\"text-xl\"></iconify-icon></span>
                            Forward Message (This is Forward Message)
                        </div>
                        <span class=\"text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold\">Medium</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Colored Lists</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"text-secondary-light p-4 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img1.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Push Notification (This is push notifications)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img2.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img3.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Security Access (This is Security Access)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img4.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Storage Folder (This is Storage Folder)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img5.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Forward Message (This is Forward Message)
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">List Icons &amp; label</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img1.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Push Notification (This is push notifications)
                        </div>
                        <span class=\"text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold\">Low</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img2.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                        <span class=\"text-xs bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded px-2.5 py-1 font-semibold\">High</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img3.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Security Access (This is Security Access)
                        </div>
                        <span class=\"text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold\">Medium</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img4.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Storage Folder (This is Storage Folder)
                        </div>
                        <span class=\"text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold\">Low</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lists/list-img5.png"), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Forward Message (This is Forward Message)
                        </div>
                        <span class=\"text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold\">Medium</span>
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
        return "componentspage/lists.html.twig";
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
        return array (  284 => 192,  274 => 185,  264 => 178,  254 => 171,  244 => 164,  226 => 149,  217 => 143,  208 => 137,  199 => 131,  190 => 125,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Default List</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600 border-b border-neutral-200 dark:border-neutral-600\">1. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">2. This is list trust fund seitan letterpress, keytar raw denim </li>
                    <li class=\"text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600 border-b border-neutral-200 dark:border-neutral-600\">3. This is list trust fund seitan letterpress, keytar raw </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">4. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class=\"text-secondary-light p-4 bg-neutral-50 dark:bg-neutral-600\">5. This is list trust fund seitan letterpress, keytar raw denim </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Active List</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"text-secondary-light p-4 bg-primary-600 border-b border-neutral-200 dark:border-neutral-600 text-white\">1. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">2. This is list trust fund seitan letterpress, keytar raw denim </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">3. This is list trust fund seitan letterpress, keytar raw </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">4. This is list trust fund seitan letterpress, keytar raw denim keffiye</li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700\">5. This is list trust fund seitan letterpress, keytar raw denim </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Active List</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"ci:bell-notification\" class=\"text-xl\"></iconify-icon></span>
                            Push Notification (This is push notifications)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"mynaui:cart-check\" class=\"text-xl\"></iconify-icon></span>
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"mdi:security-lock-outline\" class=\"text-xl\"></iconify-icon></span>
                            Security Access (This is Security Access)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"tabler:folder-open\" class=\"text-xl\"></iconify-icon></span>
                            Storage Folder (This is Storage Folder)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-white dark:bg-neutral-700\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"flowbite:forward-outline\" class=\"text-xl\"></iconify-icon></span>
                            Forward Message (This is Forward Message)
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">List Icons & label</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"ci:bell-notification\" class=\"text-xl\"></iconify-icon></span>
                            Push Notification (This is push notifications)
                        </div>
                        <span class=\"text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold\">Low</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"mynaui:cart-check\" class=\"text-xl\"></iconify-icon></span>
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                        <span class=\"text-xs bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded px-2.5 py-1 font-semibold\">High</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"mdi:security-lock-outline\" class=\"text-xl\"></iconify-icon></span>
                            Security Access (This is Security Access)
                        </div>
                        <span class=\"text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold\">Medium</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"tabler:folder-open\" class=\"text-xl\"></iconify-icon></span>
                            Storage Folder (This is Storage Folder)
                        </div>
                        <span class=\"text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold\">Low</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"flex\"><iconify-icon icon=\"flowbite:forward-outline\" class=\"text-xl\"></iconify-icon></span>
                            Forward Message (This is Forward Message)
                        </div>
                        <span class=\"text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold\">Medium</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">Colored Lists</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"text-secondary-light p-4 bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img1.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Push Notification (This is push notifications)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-info-100 dark:bg-info-600/25 text-info-600 dark:text-info-400 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img2.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img3.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Security Access (This is Security Access)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img4.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Storage Folder (This is Storage Folder)
                        </div>
                    </li>
                    <li class=\"text-secondary-light p-4 bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img5.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Forward Message (This is Forward Message)
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card h-full p-0 border-0 overflow-hidden\">
            <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                <h6 class=\"text-lg font-semibold mb-0\">List Icons &amp; label</h6>
            </div>
            <div class=\"card-body p-6\">
                <ul class=\"rounded-lg border border-neutral-200 dark:border-neutral-600 overflow-hidden\">
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img1.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Push Notification (This is push notifications)
                        </div>
                        <span class=\"text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold\">Low</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img2.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            New Orders confirmed (This is Orders confirmed)
                        </div>
                        <span class=\"text-xs bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 rounded px-2.5 py-1 font-semibold\">High</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img3.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Security Access (This is Security Access)
                        </div>
                        <span class=\"text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold\">Medium</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img4.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Storage Folder (This is Storage Folder)
                        </div>
                        <span class=\"text-xs bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 rounded px-2.5 py-1 font-semibold\">Low</span>
                    </li>
                    <li class=\"flex items-center justify-between text-secondary-light p-4 bg-white dark:bg-neutral-700\">
                        <div class=\"flex items-center gap-2\">
                            <img src=\"{{ asset('assets/images/lists/list-img5.png') }}\" class=\"w-8 h-8 rounded-full\" alt=\"\">
                            Forward Message (This is Forward Message)
                        </div>
                        <span class=\"text-xs bg-purple-100 dark:bg-purple-600/25 text-purple-600 dark:text-purple-400 rounded px-2.5 py-1 font-semibold\">Medium</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

{% endblock content %}
", "componentspage/lists.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\lists.html.twig");
    }
}
