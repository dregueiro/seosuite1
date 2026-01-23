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

/* faq.html.twig */
class __TwigTemplate_f2ff7fb32429c71624913e536ba12c05 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "faq.html.twig", 1);
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
    <div class=\"card border-0 overflow-hidden\">
        <div class=\"card-header p-0 border-0\">
            <div class=\"py-10 px-10 xl:px-[60px] 2xl:px-[100px] 3xl:px-[140px] bg-gradient-to-r from-pink-600/10 to-white\">
                <div class=\"grid grid-cols-1 xl:grid-cols-12 items-center\">
                    <div class=\"col-span-12 xl:col-span-7\">
                        <h4 class=\"mb-5\">Frequently asked questions.</h4>
                        <p class=\"mb-0 text-secondary-light max-w-[634px] text-xl\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard du text ever since the 1400s, when an unkn</p>
                    </div>
                    <div class=\"col-span-12 xl:col-span-5 hidden xl:block\">
                        <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faq-img.png"), "html", null, true);
        yield "\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-body bg-white dark:bg-neutral-700 responsive-padding-40-150\">
            <div class=\"grid grid-cols-1 xl:grid-cols-12 items-start gap-6\">

                <div class=\"col-span-12 lg:col-span-4\">
                    <ul class=\"flex flex-wrap text-sm font-medium text-center active-text-tab nav flex-col nav-pills bg-white dark:bg-neutral-700 shadow-lg py-0 px-6 rounded-xl border\" id=\"vertical-tab\" data-tabs-toggle=\"#vertical-tab-content\" role=\"tablist\">
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600\" id=\"vertical-about-tab\" data-tabs-target=\"#vertical-about\" type=\"button\" role=\"tab\" aria-controls=\"vertical-about\" aria-selected=\"false\">About Us</button>
                        </li>
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"vertical-uiux-tab\" data-tabs-target=\"#vertical-uiux\" type=\"button\" role=\"tab\" aria-controls=\"vertical-uiux\" aria-selected=\"false\">UX UI Design</button>
                        </li>
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"vertical-development-tab\" data-tabs-target=\"#vertical-development\" type=\"button\" role=\"tab\" aria-controls=\"vertical-development\" aria-selected=\"false\">Development</button>
                        </li>
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"vertical-wowdash-tab\" data-tabs-target=\"#vertical-wowdash\" type=\"button\" role=\"tab\" aria-controls=\"vertical-wowdash\" aria-selected=\"false\">How to can i use WowDash?</button>
                        </li>
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"vertical-agency-tab\" data-tabs-target=\"#vertical-agency\" type=\"button\" role=\"tab\" aria-controls=\"vertical-agency\" aria-selected=\"false\">Can I use my agency?</button>
                        </li>
                    </ul>
                </div>

                <div class=\"col-span-12 lg:col-span-8\">
                    <div id=\"vertical-tab-content\">
                        <div id=\"vertical-about\" role=\"tabpanel\" aria-labelledby=\"vertical-about-tab\">
                            <div id=\"accordion-collapse\" data-accordion=\"collapse\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"vertical-uiux\" role=\"tabpanel\" aria-labelledby=\"vertical-uiux-tab\">
                            <div id=\"accordion-collapse-uiux\" data-accordion=\"collapse\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-uiux-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"vertical-development\" role=\"tabpanel\" aria-labelledby=\"vertical-development-tab\">
                            <div id=\"accordion-collapse-development\" data-accordion=\"collapse\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-development-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"vertical-wowdash\" role=\"tabpanel\" aria-labelledby=\"vertical-wowdash-tab\">
                            <div id=\"accordion-collapse-wowdash\" data-accordion=\"collapse-wowdash\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-wowdash-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"vertical-agency\" role=\"tabpanel\" aria-labelledby=\"vertical-agency-tab\">
                            <div id=\"accordion-collapse-agency\" data-accordion=\"collapse\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-agency-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
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
        return "faq.html.twig";
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
        return array (  79 => 14,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"card border-0 overflow-hidden\">
        <div class=\"card-header p-0 border-0\">
            <div class=\"py-10 px-10 xl:px-[60px] 2xl:px-[100px] 3xl:px-[140px] bg-gradient-to-r from-pink-600/10 to-white\">
                <div class=\"grid grid-cols-1 xl:grid-cols-12 items-center\">
                    <div class=\"col-span-12 xl:col-span-7\">
                        <h4 class=\"mb-5\">Frequently asked questions.</h4>
                        <p class=\"mb-0 text-secondary-light max-w-[634px] text-xl\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard du text ever since the 1400s, when an unkn</p>
                    </div>
                    <div class=\"col-span-12 xl:col-span-5 hidden xl:block\">
                        <img src=\"{{ asset('assets/images/faq-img.png') }}\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-body bg-white dark:bg-neutral-700 responsive-padding-40-150\">
            <div class=\"grid grid-cols-1 xl:grid-cols-12 items-start gap-6\">

                <div class=\"col-span-12 lg:col-span-4\">
                    <ul class=\"flex flex-wrap text-sm font-medium text-center active-text-tab nav flex-col nav-pills bg-white dark:bg-neutral-700 shadow-lg py-0 px-6 rounded-xl border\" id=\"vertical-tab\" data-tabs-toggle=\"#vertical-tab-content\" role=\"tablist\">
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600\" id=\"vertical-about-tab\" data-tabs-target=\"#vertical-about\" type=\"button\" role=\"tab\" aria-controls=\"vertical-about\" aria-selected=\"false\">About Us</button>
                        </li>
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"vertical-uiux-tab\" data-tabs-target=\"#vertical-uiux\" type=\"button\" role=\"tab\" aria-controls=\"vertical-uiux\" aria-selected=\"false\">UX UI Design</button>
                        </li>
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"vertical-development-tab\" data-tabs-target=\"#vertical-development\" type=\"button\" role=\"tab\" aria-controls=\"vertical-development\" aria-selected=\"false\">Development</button>
                        </li>
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"vertical-wowdash-tab\" data-tabs-target=\"#vertical-wowdash\" type=\"button\" role=\"tab\" aria-controls=\"vertical-wowdash\" aria-selected=\"false\">How to can i use WowDash?</button>
                        </li>
                        <li role=\"presentation\" class=\"border-b border-neutral-200 last:border-b-0\">
                            <button class=\"block py-4 w-full text-xl text-start font-semibold  hover:text-primary-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"vertical-agency-tab\" data-tabs-target=\"#vertical-agency\" type=\"button\" role=\"tab\" aria-controls=\"vertical-agency\" aria-selected=\"false\">Can I use my agency?</button>
                        </li>
                    </ul>
                </div>

                <div class=\"col-span-12 lg:col-span-8\">
                    <div id=\"vertical-tab-content\">
                        <div id=\"vertical-about\" role=\"tabpanel\" aria-labelledby=\"vertical-about-tab\">
                            <div id=\"accordion-collapse\" data-accordion=\"collapse\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"vertical-uiux\" role=\"tabpanel\" aria-labelledby=\"vertical-uiux-tab\">
                            <div id=\"accordion-collapse-uiux\" data-accordion=\"collapse\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-uiux-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-uiux-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-uiux-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-uiux-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-uiux-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-uiux-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"vertical-development\" role=\"tabpanel\" aria-labelledby=\"vertical-development-tab\">
                            <div id=\"accordion-collapse-development\" data-accordion=\"collapse\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-development-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-development-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-development-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-development-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-development-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-development-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"vertical-wowdash\" role=\"tabpanel\" aria-labelledby=\"vertical-wowdash-tab\">
                            <div id=\"accordion-collapse-wowdash\" data-accordion=\"collapse-wowdash\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-wowdash-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-wowdash-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-wowdash-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-wowdash-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-wowdash-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-wowdash-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"vertical-agency\" role=\"tabpanel\" aria-labelledby=\"vertical-agency-tab\">
                            <div id=\"accordion-collapse-agency\" data-accordion=\"collapse\">
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-4\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-4\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-4\">
                                            <span>Can other info be added to an invoice?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-4\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-4\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-1\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-1\" aria-expanded=\"true\" aria-controls=\"accordion-collapse-agency-body-1\">
                                            <span>Is there a free trial available?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-1\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-1\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-2\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-2\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-2\">
                                            <span>Can I change my plan later?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-2\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-2\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-3\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-3\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-3\">
                                            <span>What is your cancellation policy?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-3\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-3\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-5\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-5\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-5\">
                                            <span>How does billing work?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-5\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-5\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-item border border-neutral-300 dark:border-neutral-600 mb-5 last:mb-0 rounded-2xl\">
                                    <div id=\"accordion-collapse-agency-heading-6\">
                                        <button type=\"button\" class=\"flex items-center justify-between w-full text-xl font-semibold text-neutral-900 p-5 bg-transparent\" data-accordion-target=\"#accordion-collapse-agency-body-6\" aria-expanded=\"false\" aria-controls=\"accordion-collapse-agency-body-6\">
                                            <span>How do I change my account email?</span>
                                            <span class=\"w-6 h-6 flex justify-center items-center border border-primary-600 rounded-full text-primary-600 text-base\"><i class=\"ri-add-line\"></i></span>
                                        </button>
                                    </div>
                                    <div id=\"accordion-collapse-agency-body-6\" class=\"hidden\" aria-labelledby=\"accordion-collapse-agency-heading-6\">
                                        <div class=\"p-5 pt-0\">
                                            <p>Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "faq.html.twig", "E:\\Symfony\\WowDash\\templates\\faq.html.twig");
    }
}
