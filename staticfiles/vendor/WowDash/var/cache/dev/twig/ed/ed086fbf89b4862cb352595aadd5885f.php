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

/* componentspage/carousel.html.twig */
class __TwigTemplate_d7db6767453b1b3318ad4e99340ee540 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/carousel.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/carousel.html.twig", 1);
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
    <div class=\"grid grid-cols-1 sm:grid-cols-12 gap-6\">
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Default Carousel</h6>
                </div>
                <div class=\"card-body p-0 default-carousel\">
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide One</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Two</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Three</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Carousel With Arrows</h6>
                </div>
                <div class=\"card-body p-0 arrow-carousel\">
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide One</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Two</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Three</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Carousel With Pagination</h6>
                </div>
                <div class=\"card-body p-0 pagination-carousel slick-dots-style-two absolute-dots\">
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide One</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Two</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Three</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Four</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Carousel with progress</h6>
                </div>
                <div class=\"card-body p-0 relative\">
                    <div class=\"p-0 progress-carousel dots-style-circle dots-positioned\">
                        <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full relative\">
                            <img src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                            <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                                <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide One</h5>
                                <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                            <img src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                            <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                                <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Two</h5>
                                <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                            <img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                            <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                                <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Three</h5>
                                <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                            <img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/carousel-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                            <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                                <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Four</h5>
                                <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"slider-progress\">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Multiple slides</h6>
                </div>
                <div class=\"card-body py-6 px-4 multiple-carousel slick-dots-style-two\">
                    <div class=\"mx-2 mb-6\">
                        <img src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/mutiple-carousel-img1.png"), "html", null, true);
        yield "\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                    <div class=\"mx-2 mb-6\">
                        <img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/mutiple-carousel-img2.png"), "html", null, true);
        yield "\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                    <div class=\"mx-2 mb-6\">
                        <img src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/mutiple-carousel-img3.png"), "html", null, true);
        yield "\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                    <div class=\"mx-2 mb-6\">
                        <img src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/mutiple-carousel-img4.png"), "html", null, true);
        yield "\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                    <div class=\"mx-2 mb-6\">
                        <img src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carousel/mutiple-carousel-img2.png"), "html", null, true);
        yield "\" class=\"w-full h-full object-fit-cover\" alt=\"\">
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
        return "componentspage/carousel.html.twig";
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
        return array (  283 => 164,  277 => 161,  271 => 158,  265 => 155,  259 => 152,  236 => 132,  226 => 125,  216 => 118,  206 => 111,  186 => 94,  176 => 87,  166 => 80,  156 => 73,  137 => 57,  127 => 50,  117 => 43,  98 => 27,  88 => 20,  78 => 13,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"grid grid-cols-1 sm:grid-cols-12 gap-6\">
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Default Carousel</h6>
                </div>
                <div class=\"card-body p-0 default-carousel\">
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide One</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Two</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Three</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Carousel With Arrows</h6>
                </div>
                <div class=\"card-body p-0 arrow-carousel\">
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide One</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img4.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Two</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Three</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Carousel With Pagination</h6>
                </div>
                <div class=\"card-body p-0 pagination-carousel slick-dots-style-two absolute-dots\">
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide One</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img4.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Two</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Three</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                        <img src=\"{{ asset('assets/images/carousel/carousel-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                        <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                            <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Four</h5>
                            <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Carousel with progress</h6>
                </div>
                <div class=\"card-body p-0 relative\">
                    <div class=\"p-0 progress-carousel dots-style-circle dots-positioned\">
                        <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full relative\">
                            <img src=\"{{ asset('assets/images/carousel/carousel-img4.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                            <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                                <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide One</h5>
                                <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                            <img src=\"{{ asset('assets/images/carousel/carousel-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                            <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                                <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Two</h5>
                                <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                            <img src=\"{{ asset('assets/images/carousel/carousel-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                            <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                                <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Three</h5>
                                <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class=\"before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full\">
                            <img src=\"{{ asset('assets/images/carousel/carousel-img1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                            <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]\">
                                <h5 class=\"card-title text-white text-lg mb-1.5\">Carousel Slide Four</h5>
                                <p class=\"card-text text-white mx-auto text-sm\">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"slider-progress\">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Multiple slides</h6>
                </div>
                <div class=\"card-body py-6 px-4 multiple-carousel slick-dots-style-two\">
                    <div class=\"mx-2 mb-6\">
                        <img src=\"{{ asset('assets/images/carousel/mutiple-carousel-img1.png') }}\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                    <div class=\"mx-2 mb-6\">
                        <img src=\"{{ asset('assets/images/carousel/mutiple-carousel-img2.png') }}\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                    <div class=\"mx-2 mb-6\">
                        <img src=\"{{ asset('assets/images/carousel/mutiple-carousel-img3.png') }}\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                    <div class=\"mx-2 mb-6\">
                        <img src=\"{{ asset('assets/images/carousel/mutiple-carousel-img4.png') }}\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                    <div class=\"mx-2 mb-6\">
                        <img src=\"{{ asset('assets/images/carousel/mutiple-carousel-img2.png') }}\" class=\"w-full h-full object-fit-cover\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "componentspage/carousel.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\carousel.html.twig");
    }
}
