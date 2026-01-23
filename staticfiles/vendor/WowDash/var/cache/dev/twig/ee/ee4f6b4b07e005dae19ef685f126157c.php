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

/* aiapplication/textGenerator.html.twig */
class __TwigTemplate_7c96f7b4ba8431b85cbbf573157cba64 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aiapplication/textGenerator.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "aiapplication/textGenerator.html.twig", 1);
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
    <div class=\"grid grid-cols-1 2xl:grid-cols-12 gap-6 flex-wrap-reverse\">
        <div class=\"col-span-1 lg:col-span-4 2xl:col-span-3\">
            <div class=\"card p-0 border-0\">
                <div class=\"card-body p-0\">
                    <div class=\"p-6\">
                        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGeneratorNew");
        yield "\" class=\"btn btn-primary text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center justify-center gap-2\">
                            <i class=\"ri-messenger-line\"></i>
                            New Chat
                        </a>
                    </div>

                    <ul class=\"ai-chat-list scroll-sm px-6 pb-6 max-h-[644px] overflow-y-auto\">
                        <li class=\"mb-4 mt-0\"><span class=\"text-primary-600 dark:text-primary-600 text-sm font-semibold\">Today</span></li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">UI/UX Design Roadmap write me the roadmap right now </a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class=\"mb-4 mt-6\"><span class=\"text-primary-600 text-sm font-semibold\">Yesterday</span></li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Online School Education Learning</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class=\"mb-4 mt-6\"><span class=\"text-primary-600 text-sm font-semibold\">17/06/2024</span></li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Online School Education Learning</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class=\"mb-4 mt-6\"><span class=\"text-primary-600 text-sm font-semibold\">15/06/2024</span></li>
                        <li class=\"mb-0\">
                            <a href=\"\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-8 2xl:col-span-9\">
            <div class=\"chat-600 card overflow-hidden border-0\">
                <div class=\"chat-sidebar-single gap-2 flex items-center px-6 py-5 justify-between cursor-default flex-nowrap\">
                    <div class=\"flex items-center gap-4\">
                        <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGeneratorNew");
        yield "\" class=\"text-neutral-600 dark:text-neutral-200 text-2xl line-height-1\"><i class=\"ri-arrow-left-line\"></i></a>
                        <h6 class=\"text-lg mb-0 text-line-1\">UI/UX Design Roadmap write me</h6>
                    </div>

                    <div class=\"flex items-center gap-4 shrink-0\">
                        <button type=\"button\" class=\"text-secondary-light text-xl line-height-1 text-hover-primary-600\"><i class=\"ri-edit-2-line\"></i></button>
                        <button type=\"button\" class=\"text-secondary-light text-xl line-height-1 text-hover-primary-600\"><i class=\"ri-delete-bin-6-line\"></i></button>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class=\"chat-message-list px-6 py-5 max-h-[612px] min-h-[612px] overflow-y-auto\">

                    <!-- User generated Text Start -->
                    <div class=\"flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"img overflow-hidden shrink-0\">
                                <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/1.png"), "html", null, true);
        yield "\" alt=\"image\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\">
                            </div>
                            <div class=\"info grow\">
                                <h6 class=\"text-lg mb-1.5\">Adam Milner</h6>
                                <p class=\"mb-0 text-secondary-light text-sm\">UI/UX Design Roadmap write me the roadmap right now </p>
                            </div>
                        </div>
                        <button type=\"button\" class=\"flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0\"> <i class=\"ri-edit-2-fill\"></i>  Edit</button>
                    </div>
                    <!-- User generated Text End -->
                    <!-- WowDash generated Text Start -->
                    <div class=\"flex items-start gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4\">
                        <div class=\"img overflow-hidden shrink-0\">
                            <img src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wow-dash-favicon.png"), "html", null, true);
        yield "\" alt=\"image\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\">
                        </div>
                        <div class=\"info grow\">
                            <h6 class=\"text-lg mb-4 mt-2\">WowDash</h6>
                            <p class=\"mb-4 text-secondary-light text-sm\">Creating a UI/UX Design roadmap involves several key stages, from initial research to final testing and iteration. Here’s a detailed roadmap that outlines the typical steps and best practices in a UI/UX design project:</p>
                            <p class=\"font-semibold text-neutral-600 dark:text-neutral-200 my-4\">1. Research and Discovery</p>
                            <p class=\"text-neutral-600 dark:text-neutral-200 my-4\">a. Understand the Business Goals</p>

                            <ul class=\"list-style\">
                                <li class=\"text-neutral-600 dark:text-neutral-200 m-0\"> <span class=\"font-semibold text-neutral-600 dark:text-neutral-200\">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                                <li class=\"text-neutral-600 dark:text-neutral-200 m-0\"> <span class=\"font-semibold text-neutral-600 dark:text-neutral-200\">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                            </ul>

                            <div class=\"mt-6 flex items-center justify-between gap-4\">
                                <div class=\"flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1\">
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-thumb-up-line line-height-1\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-thumb-down-line\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-share-forward-line\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-file-copy-line\"></i></button>
                                </div>
                                <button type=\"button\" class=\"btn btn-outline-primary flex items-center gap-2\"> <i class=\"ri-repeat-2-line\"></i> Regenerate</button>
                            </div>
                        </div>
                    </div>
                    <!-- WowDash generated Text End -->
                    <!-- User generated Text Start -->
                    <div class=\"flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"img overflow-hidden shrink-0\">
                                <img src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/1.png"), "html", null, true);
        yield "\" alt=\"image\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\">
                            </div>
                            <div class=\"info grow\">
                                <h6 class=\"text-lg mb-1.5\">Adam Milner</h6>
                                <p class=\"mb-0 text-secondary-light text-sm\">UI/UX Design Roadmap write me the roadmap right now </p>
                            </div>
                        </div>
                        <button type=\"button\" class=\"flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0\"> <i class=\"ri-edit-2-fill\"></i>  Edit</button>
                    </div>
                    <!-- User generated Text End -->
                    <!-- WowDash generated Text Start -->
                    <div class=\"flex items-start gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4\">
                        <div class=\"img overflow-hidden shrink-0\">
                            <img src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wow-dash-favicon.png"), "html", null, true);
        yield "\" alt=\"image\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\">
                        </div>
                        <div class=\"info grow\">
                            <h6 class=\"text-lg mb-4 mt-2\">WowDash</h6>
                            <p class=\"mb-4 text-secondary-light text-sm\">Creating a UI/UX Design roadmap involves several key stages, from initial research to final testing and iteration. Here’s a detailed roadmap that outlines the typical steps and best practices in a UI/UX design project:</p>
                            <p class=\"font-semibold text-neutral-600 dark:text-neutral-200 my-4\">1. Research and Discovery</p>
                            <p class=\"text-neutral-600 dark:text-neutral-200 my-4\">a. Understand the Business Goals</p>

                            <ul class=\"list-style\">
                                <li class=\"text-neutral-600 dark:text-neutral-200 m-0\"> <span class=\"font-semibold text-neutral-600 dark:text-neutral-200\">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                                <li class=\"text-neutral-600 dark:text-neutral-200 m-0\"> <span class=\"font-semibold text-neutral-600 dark:text-neutral-200\">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                            </ul>

                            <div class=\"mt-6 flex items-center justify-between\">
                                <div class=\"flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1\">
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-thumb-up-line line-height-1\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-thumb-down-line\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-share-forward-line\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-file-copy-line\"></i></button>
                                </div>
                                <button type=\"button\" class=\"btn btn-outline-primary flex items-center gap-2\"> <i class=\"ri-repeat-2-line\"></i> Regenerate</button>
                            </div>
                        </div>
                    </div>
                    <!-- WowDash generated Text End -->
                </div>
                <form class=\"chat-message-box border-t border-neutral-200 dark:border-neutral-600 flex items-center gap-4 p-6\">
                    <input type=\"text\" class=\"w-full border-0 focus:ring-0 bg-transparent dark:bg-transparent px-0\" name=\"chatMessage\" placeholder=\"Message wowdash...\">
                    <button type=\"submit\" class=\"w-[44px] h-[44px] flex justify-center items-center rounded-lg bg-primary-600 text-white bg-hover-primary-700 text-xl\">
                        <iconify-icon icon=\"f7:paperplane\"></iconify-icon>
                    </button>
                </form>
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
        return "aiapplication/textGenerator.html.twig";
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
        return array (  258 => 142,  242 => 129,  210 => 100,  194 => 87,  176 => 72,  157 => 56,  151 => 53,  145 => 50,  139 => 47,  131 => 42,  125 => 39,  119 => 36,  113 => 33,  105 => 28,  99 => 25,  93 => 22,  87 => 19,  75 => 10,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"grid grid-cols-1 2xl:grid-cols-12 gap-6 flex-wrap-reverse\">
        <div class=\"col-span-1 lg:col-span-4 2xl:col-span-3\">
            <div class=\"card p-0 border-0\">
                <div class=\"card-body p-0\">
                    <div class=\"p-6\">
                        <a href=\"{{ path('textGeneratorNew') }}\" class=\"btn btn-primary text-sm btn-sm px-3 py-3 w-full rounded-lg flex items-center justify-center gap-2\">
                            <i class=\"ri-messenger-line\"></i>
                            New Chat
                        </a>
                    </div>

                    <ul class=\"ai-chat-list scroll-sm px-6 pb-6 max-h-[644px] overflow-y-auto\">
                        <li class=\"mb-4 mt-0\"><span class=\"text-primary-600 dark:text-primary-600 text-sm font-semibold\">Today</span></li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">UI/UX Design Roadmap write me the roadmap right now </a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class=\"mb-4 mt-6\"><span class=\"text-primary-600 text-sm font-semibold\">Yesterday</span></li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Online School Education Learning</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class=\"mb-4 mt-6\"><span class=\"text-primary-600 text-sm font-semibold\">17/06/2024</span></li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Online School Education Learning</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                        <li class=\"mb-4\">
                            <a href=\"{{ path('textGenerator') }}\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>

                        <li class=\"mb-4 mt-6\"><span class=\"text-primary-600 text-sm font-semibold\">15/06/2024</span></li>
                        <li class=\"mb-0\">
                            <a href=\"\" class=\"line-clamp-1 text-neutral-600 hover:text-primary-600 dark:text-white dark:hover: text-hover-primary-600\">Calorie-dense foods: Needs, healthy</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class=\"col-span-1 lg:col-span-8 2xl:col-span-9\">
            <div class=\"chat-600 card overflow-hidden border-0\">
                <div class=\"chat-sidebar-single gap-2 flex items-center px-6 py-5 justify-between cursor-default flex-nowrap\">
                    <div class=\"flex items-center gap-4\">
                        <a href=\"{{ path('textGeneratorNew') }}\" class=\"text-neutral-600 dark:text-neutral-200 text-2xl line-height-1\"><i class=\"ri-arrow-left-line\"></i></a>
                        <h6 class=\"text-lg mb-0 text-line-1\">UI/UX Design Roadmap write me</h6>
                    </div>

                    <div class=\"flex items-center gap-4 shrink-0\">
                        <button type=\"button\" class=\"text-secondary-light text-xl line-height-1 text-hover-primary-600\"><i class=\"ri-edit-2-line\"></i></button>
                        <button type=\"button\" class=\"text-secondary-light text-xl line-height-1 text-hover-primary-600\"><i class=\"ri-delete-bin-6-line\"></i></button>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class=\"chat-message-list px-6 py-5 max-h-[612px] min-h-[612px] overflow-y-auto\">

                    <!-- User generated Text Start -->
                    <div class=\"flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"img overflow-hidden shrink-0\">
                                <img src=\"{{ asset('assets/images/chat/1.png') }}\" alt=\"image\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\">
                            </div>
                            <div class=\"info grow\">
                                <h6 class=\"text-lg mb-1.5\">Adam Milner</h6>
                                <p class=\"mb-0 text-secondary-light text-sm\">UI/UX Design Roadmap write me the roadmap right now </p>
                            </div>
                        </div>
                        <button type=\"button\" class=\"flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0\"> <i class=\"ri-edit-2-fill\"></i>  Edit</button>
                    </div>
                    <!-- User generated Text End -->
                    <!-- WowDash generated Text Start -->
                    <div class=\"flex items-start gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4\">
                        <div class=\"img overflow-hidden shrink-0\">
                            <img src=\"{{ asset('assets/images/wow-dash-favicon.png') }}\" alt=\"image\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\">
                        </div>
                        <div class=\"info grow\">
                            <h6 class=\"text-lg mb-4 mt-2\">WowDash</h6>
                            <p class=\"mb-4 text-secondary-light text-sm\">Creating a UI/UX Design roadmap involves several key stages, from initial research to final testing and iteration. Here’s a detailed roadmap that outlines the typical steps and best practices in a UI/UX design project:</p>
                            <p class=\"font-semibold text-neutral-600 dark:text-neutral-200 my-4\">1. Research and Discovery</p>
                            <p class=\"text-neutral-600 dark:text-neutral-200 my-4\">a. Understand the Business Goals</p>

                            <ul class=\"list-style\">
                                <li class=\"text-neutral-600 dark:text-neutral-200 m-0\"> <span class=\"font-semibold text-neutral-600 dark:text-neutral-200\">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                                <li class=\"text-neutral-600 dark:text-neutral-200 m-0\"> <span class=\"font-semibold text-neutral-600 dark:text-neutral-200\">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                            </ul>

                            <div class=\"mt-6 flex items-center justify-between gap-4\">
                                <div class=\"flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1\">
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-thumb-up-line line-height-1\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-thumb-down-line\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-share-forward-line\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-file-copy-line\"></i></button>
                                </div>
                                <button type=\"button\" class=\"btn btn-outline-primary flex items-center gap-2\"> <i class=\"ri-repeat-2-line\"></i> Regenerate</button>
                            </div>
                        </div>
                    </div>
                    <!-- WowDash generated Text End -->
                    <!-- User generated Text Start -->
                    <div class=\"flex items-start justify-between gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4\">
                        <div class=\"flex items-center gap-4\">
                            <div class=\"img overflow-hidden shrink-0\">
                                <img src=\"{{ asset('assets/images/chat/1.png') }}\" alt=\"image\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\">
                            </div>
                            <div class=\"info grow\">
                                <h6 class=\"text-lg mb-1.5\">Adam Milner</h6>
                                <p class=\"mb-0 text-secondary-light text-sm\">UI/UX Design Roadmap write me the roadmap right now </p>
                            </div>
                        </div>
                        <button type=\"button\" class=\"flex items-center gap-1.5 px-2 py-1.5 bg-primary-50 dark:bg-primary-600/25 rounded bg-hover-primary-100 shrink-0\"> <i class=\"ri-edit-2-fill\"></i>  Edit</button>
                    </div>
                    <!-- User generated Text End -->
                    <!-- WowDash generated Text Start -->
                    <div class=\"flex items-start gap-4 border-b border-neutral-200 dark:border-neutral-600 pb-4 mb-4\">
                        <div class=\"img overflow-hidden shrink-0\">
                            <img src=\"{{ asset('assets/images/wow-dash-favicon.png') }}\" alt=\"image\" class=\"w-[44px] h-[44px] rounded-full object-fit-cover\">
                        </div>
                        <div class=\"info grow\">
                            <h6 class=\"text-lg mb-4 mt-2\">WowDash</h6>
                            <p class=\"mb-4 text-secondary-light text-sm\">Creating a UI/UX Design roadmap involves several key stages, from initial research to final testing and iteration. Here’s a detailed roadmap that outlines the typical steps and best practices in a UI/UX design project:</p>
                            <p class=\"font-semibold text-neutral-600 dark:text-neutral-200 my-4\">1. Research and Discovery</p>
                            <p class=\"text-neutral-600 dark:text-neutral-200 my-4\">a. Understand the Business Goals</p>

                            <ul class=\"list-style\">
                                <li class=\"text-neutral-600 dark:text-neutral-200 m-0\"> <span class=\"font-semibold text-neutral-600 dark:text-neutral-200\">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                                <li class=\"text-neutral-600 dark:text-neutral-200 m-0\"> <span class=\"font-semibold text-neutral-600 dark:text-neutral-200\">Kickoff Meeting:</span> Meet with stakeholders to understand the business objectives, target audience, and project scope.</li>
                            </ul>

                            <div class=\"mt-6 flex items-center justify-between\">
                                <div class=\"flex items-center gap-5 bg-neutral-50 dark:bg-neutral-600 rounded-lg px-4 py-2.5 line-height-1\">
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-thumb-up-line line-height-1\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-thumb-down-line\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-share-forward-line\"></i></button>
                                    <button type=\"button\" class=\"text-secondary-light text-2xl flex text-hover-info-600\"><i class=\"ri-file-copy-line\"></i></button>
                                </div>
                                <button type=\"button\" class=\"btn btn-outline-primary flex items-center gap-2\"> <i class=\"ri-repeat-2-line\"></i> Regenerate</button>
                            </div>
                        </div>
                    </div>
                    <!-- WowDash generated Text End -->
                </div>
                <form class=\"chat-message-box border-t border-neutral-200 dark:border-neutral-600 flex items-center gap-4 p-6\">
                    <input type=\"text\" class=\"w-full border-0 focus:ring-0 bg-transparent dark:bg-transparent px-0\" name=\"chatMessage\" placeholder=\"Message wowdash...\">
                    <button type=\"submit\" class=\"w-[44px] h-[44px] flex justify-center items-center rounded-lg bg-primary-600 text-white bg-hover-primary-700 text-xl\">
                        <iconify-icon icon=\"f7:paperplane\"></iconify-icon>
                    </button>
                </form>
            </div>
        </div>
    </div>

{% endblock content %}
", "aiapplication/textGenerator.html.twig", "E:\\Symfony\\WowDash\\templates\\aiapplication\\textGenerator.html.twig");
    }
}
