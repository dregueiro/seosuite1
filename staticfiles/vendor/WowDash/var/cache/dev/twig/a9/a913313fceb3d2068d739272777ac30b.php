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

/* gallery.html.twig */
class __TwigTemplate_7b45de893e7618a420eb30074c2ac2c6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "gallery.html.twig", 1);
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
    <div class=\"card h-full p-0 rounded-xl overflow-hidden border-0\">
        <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 pb-0 pt-0 px-0\">

            <ul class=\"tab-style-gradient flex flex-wrap text-sm font-medium text-center mb-5\" id=\"default-tab\" data-tabs-toggle=\"#default-tab-content\" role=\"tablist\">
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600\" id=\"all-tab\" data-tabs-target=\"#all\" type=\"button\" role=\"tab\" aria-controls=\"all\" aria-selected=\"false\">
                        All
                    </button>
                </li>
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"ui-design-tab\" data-tabs-target=\"#ui-design\" type=\"button\" role=\"tab\" aria-controls=\"ui-design\" aria-selected=\"false\">
                        UI Design
                    </button>
                </li>
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"web-design-tab\" data-tabs-target=\"#web-design\" type=\"button\" role=\"tab\" aria-controls=\"web-design\" aria-selected=\"false\">
                        Web Design
                    </button>
                </li>
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"development-tab\" data-tabs-target=\"#development\" type=\"button\" role=\"tab\" aria-controls=\"development\" aria-selected=\"false\">
                        Development
                    </button>
                </li>
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"presentations-tab\" data-tabs-target=\"#presentations\" type=\"button\" role=\"tab\" aria-controls=\"presentations\" aria-selected=\"false\">
                        Presentations
                    </button>
                </li>
            </ul>

        </div>
        <div class=\"card-body p-6\">

            <div id=\"default-tab-content\">
                <div class=\"hidden\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img11.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img12.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"hidden\" id=\"ui-design\" role=\"tabpanel\" aria-labelledby=\"ui-design-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img11.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img12.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"hidden\" id=\"web-design\" role=\"tabpanel\" aria-labelledby=\"web-design-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img11.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img12.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"hidden\" id=\"development\" role=\"tabpanel\" aria-labelledby=\"development-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img11.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 614
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img12.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"hidden\" id=\"presentations\" role=\"tabpanel\" aria-labelledby=\"presentations-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 636
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img8.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img9.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img10.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 717
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img11.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/gallery-img12.png"), "html", null, true);
        yield "\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
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
        return "gallery.html.twig";
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
        return array (  1013 => 726,  1001 => 717,  989 => 708,  977 => 699,  965 => 690,  953 => 681,  941 => 672,  929 => 663,  917 => 654,  905 => 645,  893 => 636,  881 => 627,  865 => 614,  853 => 605,  841 => 596,  829 => 587,  817 => 578,  805 => 569,  793 => 560,  781 => 551,  769 => 542,  757 => 533,  745 => 524,  733 => 515,  721 => 506,  709 => 497,  697 => 488,  685 => 479,  673 => 470,  657 => 457,  645 => 448,  633 => 439,  621 => 430,  609 => 421,  597 => 412,  585 => 403,  573 => 394,  561 => 385,  549 => 376,  537 => 367,  525 => 358,  513 => 349,  501 => 340,  489 => 331,  477 => 322,  461 => 309,  449 => 300,  437 => 291,  425 => 282,  413 => 273,  401 => 264,  389 => 255,  377 => 246,  365 => 237,  353 => 228,  341 => 219,  329 => 210,  317 => 201,  305 => 192,  293 => 183,  281 => 174,  269 => 165,  257 => 156,  241 => 143,  229 => 134,  217 => 125,  205 => 116,  193 => 107,  181 => 98,  169 => 89,  157 => 80,  145 => 71,  133 => 62,  121 => 53,  109 => 44,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"card h-full p-0 rounded-xl overflow-hidden border-0\">
        <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 pb-0 pt-0 px-0\">

            <ul class=\"tab-style-gradient flex flex-wrap text-sm font-medium text-center mb-5\" id=\"default-tab\" data-tabs-toggle=\"#default-tab-content\" role=\"tablist\">
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600\" id=\"all-tab\" data-tabs-target=\"#all\" type=\"button\" role=\"tab\" aria-controls=\"all\" aria-selected=\"false\">
                        All
                    </button>
                </li>
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"ui-design-tab\" data-tabs-target=\"#ui-design\" type=\"button\" role=\"tab\" aria-controls=\"ui-design\" aria-selected=\"false\">
                        UI Design
                    </button>
                </li>
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"web-design-tab\" data-tabs-target=\"#web-design\" type=\"button\" role=\"tab\" aria-controls=\"web-design\" aria-selected=\"false\">
                        Web Design
                    </button>
                </li>
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"development-tab\" data-tabs-target=\"#development\" type=\"button\" role=\"tab\" aria-controls=\"development\" aria-selected=\"false\">
                        Development
                    </button>
                </li>
                <li class=\"\" role=\"presentation\">
                    <button class=\"py-2.5 px-5 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"presentations-tab\" data-tabs-target=\"#presentations\" type=\"button\" role=\"tab\" aria-controls=\"presentations\" aria-selected=\"false\">
                        Presentations
                    </button>
                </li>
            </ul>

        </div>
        <div class=\"card-body p-6\">

            <div id=\"default-tab-content\">
                <div class=\"hidden\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img8.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img9.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img10.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img11.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img12.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img1.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img2.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img3.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img4.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img5.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img6.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img7.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"hidden\" id=\"ui-design\" role=\"tabpanel\" aria-labelledby=\"ui-design-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img3.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img4.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img5.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img6.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img7.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img8.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img1.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img2.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img3.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img4.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img5.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img6.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img7.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img8.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img9.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img10.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img11.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img12.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"hidden\" id=\"web-design\" role=\"tabpanel\" aria-labelledby=\"web-design-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img6.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img7.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img8.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img9.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img1.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img2.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img3.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img4.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img5.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img6.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img7.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img8.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img9.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img10.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img11.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img12.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"hidden\" id=\"development\" role=\"tabpanel\" aria-labelledby=\"development-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img5.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img6.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img7.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img8.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img9.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img1.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img2.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img3.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img4.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img5.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img6.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img7.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img8.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img9.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img10.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img11.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img12.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"hidden\" id=\"presentations\" role=\"tabpanel\" aria-labelledby=\"presentations-tab\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6\">
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img1.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img2.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img3.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img4.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img5.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img6.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img7.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img8.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img9.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img10.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img11.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                        <div class=\"hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden\">
                            <div class=\"max-h-[266px] overflow-hidden\">
                                <img src=\"{{ asset('assets/images/gallery/gallery-img12.png') }}\" alt=\"\" class=\"hover-scale-img__img w-full h-full object-fit-cover\">
                            </div>
                            <div class=\"py-4 px-6\">
                                <h6 class=\"mb-1.5\">This is Image title</h6>
                                <p class=\"mb-0 text-sm text-secondary-light\">UI Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "gallery.html.twig", "E:\\Symfony\\WowDash\\templates\\gallery.html.twig");
    }
}
