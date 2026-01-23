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

/* componentspage/card.html.twig */
class __TwigTemplate_2e2b9a8be791ad3c723be47bf20cef37 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/card.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/card.html.twig", 1);
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
        yield "                 <script>
                 // Flat pickr or date picker js 
                 function getDatePicker(receiveID) {
                     flatpickr(receiveID, {
                         enableTime: true,
                         dateFormat: \"d/m/Y H:i\",
                     });
                 }
                 getDatePicker(\"#startDate\");
                 getDatePicker(\"#endDate\");
                 getDatePicker(\"#editstartDate\");
                 getDatePicker(\"#editendDate\");
                 </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        yield "
            <div class=\"mb-10\">
                <div class=\"grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 gap-6\">
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/card-img1.png"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5\">
                                This is Card title
                            </h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 dark:text-primary-500 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/card-img2.png"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"\">
                        <div class=\"card-body p-4 text-center\">
                            <h5 class=\"card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5\">
                                This is Card title
                            </h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn btn-primary-600 px-3 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/card-img3.png"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"\">
                        <div class=\"card-body p-4 text-end\">
                            <h5 class=\"card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5\">
                                This is Card title
                            </h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <div class=\"flex flex-wrap items-center justify-end gap-3\">
                                <a href=\"javascript:void(0)\" class=\"btn btn-primary-100 bg-primary-100 hover:bg-primary-600 dark:bg-primary-600/25 dark:hover:bg-primary-600 hover:text-white text-primary-600 dark:text-primary-500 px-3 py-2.5 inline-flex items-center gap-2\">
                                    Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                                </a>
                                <button class=\"btn btn-warning-100 bg-warning-100 hover:bg-warning-600 dark:bg-warning-600/25 dark:hover:bg-warning-600 hover:text-white text-warning-600 dark:text-warning-500 px-3 py-2.5 inline-flex items-center gap-2\">
                                    Book Mark <iconify-icon icon=\"bx:bookmark-minus\" class=\"text-xl\"></iconify-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <img src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/card-img4.png"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"\">
                        <div class=\"card-body p-4 text-center\">
                            <h5 class=\"card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5\">
                                This is Card title
                            </h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <button class=\"btn btn-primary-600 px-3 py-2.5 inline-flex items-center gap-2\">
                                <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"mb-10\">
                <h6 class=\"mb-6\">Card Text & icon </h6>
                <div class=\"grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 gap-6\">
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-purple-200 dark:bg-purple-600/25 dark:text-purple-500 text-purple-600 mb-4 rounded-xl\">
                                <iconify-icon icon=\"solar:medal-ribbons-star-bold\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Brand Identity</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn dark:text-purple-600 text-purple-600 hover:underline px-0 py-0 mt-4 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0 text-center\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-primary-100 dark:bg-primary-600/25 dark:text-primary-500 text-primary-600 mb-4 rounded-xl\">
                                <iconify-icon icon=\"ri:computer-fill\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">UI/UX Designer</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 dark:text-primary-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0 text-end\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-success-100 dark:bg-success-600/25 dark:text-success-500 text-success-600 mb-4 rounded-xl\">
                                <iconify-icon icon=\"fluent:toolbox-20-filled\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Business Strategy</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-success-600 dark:text-success-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0 text-center\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-danger-100 dark:bg-danger-600/25 dark:text-danger-500 text-danger-600 mb-4 rounded-xl\">
                                <iconify-icon icon=\"ph:code-fill\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Business Strategy</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-danger-600 dark:text-danger-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"mb-10\">
                <h6 class=\"mb-6\">Card With image & Overlays </h6>
                <div class=\"grid grid-cols-1 sm:grid-cols-6 xl:grid-cols-3 gap-6\">
                    <div class=\"card h-full rounded-xl p-0 border-0 overflow-hidden relative\">
                        <div class=\"card-body p-0 before:block before:absolute before:inset-0 before:bg-[linear-gradient(180deg,_rgba(0,_0,_0,_0)_0%,_rgba(0,_0,_0,_0.25)_22%,_rgba(0,_0,_0,_0.69)_57.92%,_rgba(0,_0,_0,_0.7)_100%)] bottom-0 start-0\">
                            <img src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/card-overlay-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full\">
                            <div class=\"absolute start-0 bottom-0 p-6 z-1\">
                                <h5 class=\"card-title text-white dark:text-neutral-200 text-lg mb-1.5\">This is Card title</h5>
                                <p class=\"card-text text-white\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all</p>
                                <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary px-0 py-2.5 inline-flex items-center gap-2\">
                                    Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl p-0 border-0 overflow-hidden relative\">
                        <div class=\"card-body p-0 before:block before:absolute before:inset-0 before:bg-[linear-gradient(180deg,_rgba(0,_0,_0,_0)_0%,_rgba(0,_0,_0,_0.25)_22%,_rgba(0,_0,_0,_0.69)_57.92%,_rgba(0,_0,_0,_0.7)_100%)] top-0 start-0\">
                            <img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/card-overlay-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full\">
                            <div class=\"absolute start-0 top-0 p-6 z-1 text-center\">
                                <h5 class=\"card-title text-white dark:text-neutral-200 text-lg mb-1.5\">This is Card title</h5>
                                <p class=\"card-text text-white\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all</p>
                                <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary px-0 py-2.5 inline-flex items-center gap-2\">
                                    Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl p-0 border-0 overflow-hidden relative\">
                        <div class=\"card-body p-0 before:block before:absolute before:inset-0 before:bg-[linear-gradient(180deg,_rgba(0,_0,_0,_0)_0%,_rgba(0,_0,_0,_0.25)_22%,_rgba(0,_0,_0,_0.69)_57.92%,_rgba(0,_0,_0,_0.7)_100%)] bottom-0 start-0\">
                            <img src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/card-overlay-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full\">
                            <div class=\"absolute start-0 bottom-0 p-6 z-1 text-end\">
                                <h5 class=\"card-title text-white dark:text-neutral-200 text-lg mb-1.5\">This is Card title</h5>
                                <p class=\"card-text text-white\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all</p>
                                <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary px-0 py-2.5 inline-flex items-center gap-2\">
                                    Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"mb-10\">
                <h6 class=\"mb-6\">Card Header & Footer</h6>
                <div class=\"grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-3 gap-6\">
                    <div class=\"card rounded-xl h-full border-0 overflow-hidden\">
                        <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 flex items-center gap-1 justify-between border-b\">
                            <h6 class=\"text-lg mb-0\">Hi, Will Mart</h6>
                            <button type=\"button\" class=\"text-xl line-height-1\">
                                <iconify-icon icon=\"mdi:times\" class=\"text-xl\"></iconify-icon>
                            </button>
                        </div>
                        <div class=\"card-body py-4 px-6\">
                            <h6 class=\"card-title text-neutral-600 dark:text-neutral-200 mb-2 text-lg\">How to learn UI /UX Design</h6>
                            <p class=\"card-text text-neutral-600 mb-0\">
                                Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable meta-itself
                                the viewer's attention from the layout
                            </p>
                        </div>
                        <div class=\"card-footer text-center bg-transparent border-t border-neutral-200 dark:border-neutral-600 pt-4 px-6\">
                            <a href=\"javascript:void(0)\" class=\"text-primary-600 dark:text-primary-600 hover:underline\">View All</a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl h-full border-0 overflow-hidden\">
                        <div class=\"card-body py-4 px-6\">
                            <div class=\"flex items-center gap-2 mb-3\">
                                <iconify-icon icon=\"typcn:user-add\" class=\"text-2xl\"></iconify-icon>
                                <h6 class=\"text-lg mb-0\">How to learn UI /UX Design</h6>
                            </div>
                            <p class=\"card-text text-neutral-600 mb-4\">Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable meta-itself the viewer's attention from the layout</p>
                            <p class=\"card-text text-neutral-600 mb-0\">Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable </p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 dark:text-primary-600 hover:underline hover-text-primary px-0 py-0 inline-flex items-center gap-2 mt-4\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl h-full border-0 overflow-hidden\">
                        <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 flex items-center gap-1 justify-between border-b\">
                            <div>
                                <h6 class=\"text-lg mb-0\">How can i help your</h6>
                                <span class=\"text-sm\">Awesome Support</span>
                            </div>
                            <a href=\"javascript:void(0)\" class=\"text-primary-600 dark:text-primary-600 hover:underline\">View All</a>
                        </div>
                        <div class=\"card-body py-4 px-6\">
                            <p class=\"card-text text-neutral-600 mb-4\">Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable meta-itself the viewer's attention from the layout</p>
                            <p class=\"card-text text-neutral-600 mb-0\">Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"mb-10\">
                <h6 class=\"mb-6\">Horizontal Card</h6>
                <div class=\"grid grid-cols-1 xl:grid-cols-2 gap-6\">
                    <div class=\"card rounded-xl overflow-hidden border-0 flex flex-nowrap sm:flex-row flex-col\">
                        <div class=\"flex shrink-0\">
                            <img src=\"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/horizontal-card-img1.png"), "html", null, true);
        yield "\" class=\"h-full w-full object-fit-cover\" alt=\"\">
                        </div>
                        <div class=\"card-body p-4 grow\">
                            <h5 class=\"card-title text-lg text-neutral-900 dark:text-neutral-200 mb-1.5\">This is Card title</h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary p-0 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl overflow-hidden border-0 flex flex-nowrap sm:flex-row-reverse flex-col\">
                        <div class=\"flex shrink-0\">
                            <img src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/horizontal-card-img2.png"), "html", null, true);
        yield "\" class=\"h-full w-full object-fit-cover\" alt=\"\">
                        </div>
                        <div class=\"card-body p-4 grow\">
                            <h5 class=\"card-title text-lg text-neutral-900 dark:text-neutral-200 mb-1.5\">This is Card title</h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary p-0 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl overflow-hidden border-0 flex flex-nowrap sm:flex-row flex-col\">
                        <div class=\"flex shrink-0\">
                            <img src=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/horizontal-card-img3.png"), "html", null, true);
        yield "\" class=\"h-full w-full object-fit-cover\" alt=\"\">
                        </div>
                        <div class=\"card-body p-4 grow\">
                            <h5 class=\"card-title text-lg text-neutral-900 dark:text-neutral-200 mb-1.5\">This is Card title</h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary p-0 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl overflow-hidden border-0 h-full flex items-center sm:flex-row-reverse flex-col\">
                        <div class=\"flex shrink-0 w-170-px h-full\">
                            <img src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/card-component/horizontal-card-img4.png"), "html", null, true);
        yield "\" class=\"h-full w-full object-fit-cover\" alt=\"\">
                        </div>
                        <div class=\"card-body p-4 grow\">
                            <h5 class=\"card-title text-lg text-neutral-900 dark:text-neutral-200 mb-1.5\">This is Card title</h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary p-0 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"\">
                <h6 class=\"mb-6\">Card With Background Color</h6>
                <div class=\"grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6\">
                    <div class=\"card h-full rounded-xl border-0 overflow-hidden bg-purple-100 dark:bg-purple-600/25\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-purple-600 text-white mb-4 rounded-xl\">
                                <iconify-icon icon=\"solar:medal-ribbons-star-bold\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Brand Identity</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-purple-600 hover:underline dark:text-purple-400 px-0 py-0 mt-4 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl border-0 overflow-hidden bg-primary-100 dark:bg-primary-600/25 text-center\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-primary-600 text-white mb-4 rounded-xl\">
                                <iconify-icon icon=\"ri:computer-fill\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">UI/UX Designer</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl border-0 overflow-hidden bg-success-100 dark:bg-success-600/25 text-end\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-success-600 text-white mb-4 rounded-xl\">
                                <iconify-icon icon=\"fluent:toolbox-20-filled\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Business Strategy</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-success-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl border-0 overflow-hidden bg-danger-100 dark:bg-danger-600/25 text-center\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-danger-600 text-white mb-4 rounded-xl\">
                                <iconify-icon icon=\"ph:code-fill\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Business Strategy</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-danger-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
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
        return "componentspage/card.html.twig";
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
        return array (  381 => 270,  366 => 258,  351 => 246,  336 => 234,  265 => 166,  250 => 154,  235 => 142,  158 => 68,  137 => 50,  121 => 37,  105 => 24,  99 => 20,  89 => 19,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script %}
                 <script>
                 // Flat pickr or date picker js 
                 function getDatePicker(receiveID) {
                     flatpickr(receiveID, {
                         enableTime: true,
                         dateFormat: \"d/m/Y H:i\",
                     });
                 }
                 getDatePicker(\"#startDate\");
                 getDatePicker(\"#endDate\");
                 getDatePicker(\"#editstartDate\");
                 getDatePicker(\"#editendDate\");
                 </script>
    {% endblock custom_script %}

{% block content %}

            <div class=\"mb-10\">
                <div class=\"grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 gap-6\">
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <img src=\"{{ asset('assets/images/card-component/card-img1.png') }}\" class=\"card-img-top\" alt=\"\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5\">
                                This is Card title
                            </h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 dark:text-primary-500 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <img src=\"{{ asset('assets/images/card-component/card-img2.png') }}\" class=\"card-img-top\" alt=\"\">
                        <div class=\"card-body p-4 text-center\">
                            <h5 class=\"card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5\">
                                This is Card title
                            </h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn btn-primary-600 px-3 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <img src=\"{{ asset('assets/images/card-component/card-img3.png') }}\" class=\"card-img-top\" alt=\"\">
                        <div class=\"card-body p-4 text-end\">
                            <h5 class=\"card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5\">
                                This is Card title
                            </h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <div class=\"flex flex-wrap items-center justify-end gap-3\">
                                <a href=\"javascript:void(0)\" class=\"btn btn-primary-100 bg-primary-100 hover:bg-primary-600 dark:bg-primary-600/25 dark:hover:bg-primary-600 hover:text-white text-primary-600 dark:text-primary-500 px-3 py-2.5 inline-flex items-center gap-2\">
                                    Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                                </a>
                                <button class=\"btn btn-warning-100 bg-warning-100 hover:bg-warning-600 dark:bg-warning-600/25 dark:hover:bg-warning-600 hover:text-white text-warning-600 dark:text-warning-500 px-3 py-2.5 inline-flex items-center gap-2\">
                                    Book Mark <iconify-icon icon=\"bx:bookmark-minus\" class=\"text-xl\"></iconify-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <img src=\"{{ asset('assets/images/card-component/card-img4.png') }}\" class=\"card-img-top\" alt=\"\">
                        <div class=\"card-body p-4 text-center\">
                            <h5 class=\"card-title text-lg text-neutral-600 dark:text-neutral-200
                        mb-1.5\">
                                This is Card title
                            </h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <button class=\"btn btn-primary-600 px-3 py-2.5 inline-flex items-center gap-2\">
                                <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"mb-10\">
                <h6 class=\"mb-6\">Card Text & icon </h6>
                <div class=\"grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 gap-6\">
                    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-purple-200 dark:bg-purple-600/25 dark:text-purple-500 text-purple-600 mb-4 rounded-xl\">
                                <iconify-icon icon=\"solar:medal-ribbons-star-bold\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Brand Identity</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn dark:text-purple-600 text-purple-600 hover:underline px-0 py-0 mt-4 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0 text-center\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-primary-100 dark:bg-primary-600/25 dark:text-primary-500 text-primary-600 mb-4 rounded-xl\">
                                <iconify-icon icon=\"ri:computer-fill\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">UI/UX Designer</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 dark:text-primary-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0 text-end\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-success-100 dark:bg-success-600/25 dark:text-success-500 text-success-600 mb-4 rounded-xl\">
                                <iconify-icon icon=\"fluent:toolbox-20-filled\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Business Strategy</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-success-600 dark:text-success-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl overflow-hidden border-0 text-center\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-danger-100 dark:bg-danger-600/25 dark:text-danger-500 text-danger-600 mb-4 rounded-xl\">
                                <iconify-icon icon=\"ph:code-fill\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Business Strategy</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-danger-600 dark:text-danger-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"mb-10\">
                <h6 class=\"mb-6\">Card With image & Overlays </h6>
                <div class=\"grid grid-cols-1 sm:grid-cols-6 xl:grid-cols-3 gap-6\">
                    <div class=\"card h-full rounded-xl p-0 border-0 overflow-hidden relative\">
                        <div class=\"card-body p-0 before:block before:absolute before:inset-0 before:bg-[linear-gradient(180deg,_rgba(0,_0,_0,_0)_0%,_rgba(0,_0,_0,_0.25)_22%,_rgba(0,_0,_0,_0.69)_57.92%,_rgba(0,_0,_0,_0.7)_100%)] bottom-0 start-0\">
                            <img src=\"{{ asset('assets/images/card-component/card-overlay-img1.png') }}\" alt=\"\" class=\"w-full h-full\">
                            <div class=\"absolute start-0 bottom-0 p-6 z-1\">
                                <h5 class=\"card-title text-white dark:text-neutral-200 text-lg mb-1.5\">This is Card title</h5>
                                <p class=\"card-text text-white\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all</p>
                                <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary px-0 py-2.5 inline-flex items-center gap-2\">
                                    Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl p-0 border-0 overflow-hidden relative\">
                        <div class=\"card-body p-0 before:block before:absolute before:inset-0 before:bg-[linear-gradient(180deg,_rgba(0,_0,_0,_0)_0%,_rgba(0,_0,_0,_0.25)_22%,_rgba(0,_0,_0,_0.69)_57.92%,_rgba(0,_0,_0,_0.7)_100%)] top-0 start-0\">
                            <img src=\"{{ asset('assets/images/card-component/card-overlay-img1.png') }}\" alt=\"\" class=\"w-full h-full\">
                            <div class=\"absolute start-0 top-0 p-6 z-1 text-center\">
                                <h5 class=\"card-title text-white dark:text-neutral-200 text-lg mb-1.5\">This is Card title</h5>
                                <p class=\"card-text text-white\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all</p>
                                <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary px-0 py-2.5 inline-flex items-center gap-2\">
                                    Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl p-0 border-0 overflow-hidden relative\">
                        <div class=\"card-body p-0 before:block before:absolute before:inset-0 before:bg-[linear-gradient(180deg,_rgba(0,_0,_0,_0)_0%,_rgba(0,_0,_0,_0.25)_22%,_rgba(0,_0,_0,_0.69)_57.92%,_rgba(0,_0,_0,_0.7)_100%)] bottom-0 start-0\">
                            <img src=\"{{ asset('assets/images/card-component/card-overlay-img1.png') }}\" alt=\"\" class=\"w-full h-full\">
                            <div class=\"absolute start-0 bottom-0 p-6 z-1 text-end\">
                                <h5 class=\"card-title text-white dark:text-neutral-200 text-lg mb-1.5\">This is Card title</h5>
                                <p class=\"card-text text-white\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all</p>
                                <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary px-0 py-2.5 inline-flex items-center gap-2\">
                                    Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"mb-10\">
                <h6 class=\"mb-6\">Card Header & Footer</h6>
                <div class=\"grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-3 gap-6\">
                    <div class=\"card rounded-xl h-full border-0 overflow-hidden\">
                        <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 flex items-center gap-1 justify-between border-b\">
                            <h6 class=\"text-lg mb-0\">Hi, Will Mart</h6>
                            <button type=\"button\" class=\"text-xl line-height-1\">
                                <iconify-icon icon=\"mdi:times\" class=\"text-xl\"></iconify-icon>
                            </button>
                        </div>
                        <div class=\"card-body py-4 px-6\">
                            <h6 class=\"card-title text-neutral-600 dark:text-neutral-200 mb-2 text-lg\">How to learn UI /UX Design</h6>
                            <p class=\"card-text text-neutral-600 mb-0\">
                                Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable meta-itself
                                the viewer's attention from the layout
                            </p>
                        </div>
                        <div class=\"card-footer text-center bg-transparent border-t border-neutral-200 dark:border-neutral-600 pt-4 px-6\">
                            <a href=\"javascript:void(0)\" class=\"text-primary-600 dark:text-primary-600 hover:underline\">View All</a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl h-full border-0 overflow-hidden\">
                        <div class=\"card-body py-4 px-6\">
                            <div class=\"flex items-center gap-2 mb-3\">
                                <iconify-icon icon=\"typcn:user-add\" class=\"text-2xl\"></iconify-icon>
                                <h6 class=\"text-lg mb-0\">How to learn UI /UX Design</h6>
                            </div>
                            <p class=\"card-text text-neutral-600 mb-4\">Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable meta-itself the viewer's attention from the layout</p>
                            <p class=\"card-text text-neutral-600 mb-0\">Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable </p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 dark:text-primary-600 hover:underline hover-text-primary px-0 py-0 inline-flex items-center gap-2 mt-4\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl h-full border-0 overflow-hidden\">
                        <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 flex items-center gap-1 justify-between border-b\">
                            <div>
                                <h6 class=\"text-lg mb-0\">How can i help your</h6>
                                <span class=\"text-sm\">Awesome Support</span>
                            </div>
                            <a href=\"javascript:void(0)\" class=\"text-primary-600 dark:text-primary-600 hover:underline\">View All</a>
                        </div>
                        <div class=\"card-body py-4 px-6\">
                            <p class=\"card-text text-neutral-600 mb-4\">Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable meta-itself the viewer's attention from the layout</p>
                            <p class=\"card-text text-neutral-600 mb-0\">Intrinsically incubate intuitive opportunities and real-time potentialities for change for interoperable </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"mb-10\">
                <h6 class=\"mb-6\">Horizontal Card</h6>
                <div class=\"grid grid-cols-1 xl:grid-cols-2 gap-6\">
                    <div class=\"card rounded-xl overflow-hidden border-0 flex flex-nowrap sm:flex-row flex-col\">
                        <div class=\"flex shrink-0\">
                            <img src=\"{{ asset('assets/images/card-component/horizontal-card-img1.png') }}\" class=\"h-full w-full object-fit-cover\" alt=\"\">
                        </div>
                        <div class=\"card-body p-4 grow\">
                            <h5 class=\"card-title text-lg text-neutral-900 dark:text-neutral-200 mb-1.5\">This is Card title</h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary p-0 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl overflow-hidden border-0 flex flex-nowrap sm:flex-row-reverse flex-col\">
                        <div class=\"flex shrink-0\">
                            <img src=\"{{ asset('assets/images/card-component/horizontal-card-img2.png') }}\" class=\"h-full w-full object-fit-cover\" alt=\"\">
                        </div>
                        <div class=\"card-body p-4 grow\">
                            <h5 class=\"card-title text-lg text-neutral-900 dark:text-neutral-200 mb-1.5\">This is Card title</h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary p-0 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl overflow-hidden border-0 flex flex-nowrap sm:flex-row flex-col\">
                        <div class=\"flex shrink-0\">
                            <img src=\"{{ asset('assets/images/card-component/horizontal-card-img3.png') }}\" class=\"h-full w-full object-fit-cover\" alt=\"\">
                        </div>
                        <div class=\"card-body p-4 grow\">
                            <h5 class=\"card-title text-lg text-neutral-900 dark:text-neutral-200 mb-1.5\">This is Card title</h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary p-0 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card rounded-xl overflow-hidden border-0 h-full flex items-center sm:flex-row-reverse flex-col\">
                        <div class=\"flex shrink-0 w-170-px h-full\">
                            <img src=\"{{ asset('assets/images/card-component/horizontal-card-img4.png') }}\" class=\"h-full w-full object-fit-cover\" alt=\"\">
                        </div>
                        <div class=\"card-body p-4 grow\">
                            <h5 class=\"card-title text-lg text-neutral-900 dark:text-neutral-200 mb-1.5\">This is Card title</h5>
                            <p class=\"card-text text-neutral-600 mb-4\">We quickly learn to fear and thus automatically avo id potentially stressful situations of all kinds, including the most common of all .</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover-text-primary p-0 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"\">
                <h6 class=\"mb-6\">Card With Background Color</h6>
                <div class=\"grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6\">
                    <div class=\"card h-full rounded-xl border-0 overflow-hidden bg-purple-100 dark:bg-purple-600/25\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-purple-600 text-white mb-4 rounded-xl\">
                                <iconify-icon icon=\"solar:medal-ribbons-star-bold\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Brand Identity</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-purple-600 hover:underline dark:text-purple-400 px-0 py-0 mt-4 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl border-0 overflow-hidden bg-primary-100 dark:bg-primary-600/25 text-center\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-primary-600 text-white mb-4 rounded-xl\">
                                <iconify-icon icon=\"ri:computer-fill\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">UI/UX Designer</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-primary-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl border-0 overflow-hidden bg-success-100 dark:bg-success-600/25 text-end\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-success-600 text-white mb-4 rounded-xl\">
                                <iconify-icon icon=\"fluent:toolbox-20-filled\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Business Strategy</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-success-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class=\"card h-full rounded-xl border-0 overflow-hidden bg-danger-100 dark:bg-danger-600/25 text-center\">
                        <div class=\"card-body p-6\">
                            <div class=\"w-[64px] h-[64px] inline-flex items-center justify-center bg-danger-600 text-white mb-4 rounded-xl\">
                                <iconify-icon icon=\"ph:code-fill\" class=\"h5 mb-0\"></iconify-icon>
                            </div>
                            <h6 class=\"mb-2\">Business Strategy</h6>
                            <p class=\"card-text mb-2 text-secondary-light\">Random Text gateway to the Origin al the Works Platform, & your unique block chain gateway identity.</p>
                            <a href=\"javascript:void(0)\" class=\"btn text-danger-600 hover:underline px-0 py-2.5 inline-flex items-center gap-2\">
                                Read More <iconify-icon icon=\"iconamoon:arrow-right-2\" class=\"text-xl\"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
{% endblock content %}", "componentspage/card.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\card.html.twig");
    }
}
