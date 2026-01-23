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

/* chatMessage.html.twig */
class __TwigTemplate_03d548dfb3b7021c8ce08ebac8841f81 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatMessage.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "chatMessage.html.twig", 1);
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
    <div class=\"chat-wrapper grid grid-cols-1 md:grid-cols-12 gap-6\">
        <div class=\"card border-0 overflow-hidden col-span-12 md:col-span-4 xl:col-span-3\">

            <div class=\"flex items-center justify-between gap-2 px-5 pt-5 pb-4\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"\">
                        <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/1.png"), "html", null, true);
        yield "\" alt=\"image\">
                    </div>
                    <div class=\"\">
                        <h6 class=\"text-base mb-0\">Kathryn Murphy</h6>
                        <p class=\"mb-0\">Available</p>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class=\"dropdown\">
                    <button data-dropdown-toggle=\"dropdown1\" class=\"text-neutral-800 dark:text-white\" type=\"button\">
                        <i class=\"ri-more-2-fill\"></i>
                    </button>
                    <div id=\"dropdown1\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                        <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                            <li>
                                <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                    <i class=\"text-base flex ri-user-line\"></i>
                                    Profile
                                </button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                    <i class=\"text-base flex ri-settings-4-line\"></i>
                                    Setting
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"chat-search w-full relative\">
                <span class=\"icon absolute start-5 top-1/2 -translate-y-1/2 text-xl flex\">
                    <iconify-icon icon=\"iconoir:search\"></iconify-icon>
                </span>
                <input type=\"text\" class=\"border-0 border-t border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 w-full focus:outline-none focus:ring-0 ps-12 pe-6\" autocomplete=\"off\" placeholder=\"Search...\">
            </div>
            <div class=\"chat-all-list flex flex-col gap-1.5 mt-3 max-h-[580px] overflow-y-auto\">
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/2.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Kathryn Murphy</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/3.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">James Michael</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/4.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Russell Lucas</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/5.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Caleb Bradley</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/6.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Bobby Roy</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/7.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Vincent Liam</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/8.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Randy Mason</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/9.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Albert Wayne</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/10.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Elijah Willie</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/2.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Kathryn Murphy</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/3.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">James Michael</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/4.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Russell Lucas</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/5.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Caleb Bradley</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/6.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Bobby Roy</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/7.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Vincent Liam</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/8.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Randy Mason</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/9.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Albert Wayne</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/10.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Elijah Willie</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
            </div>
        </div>
        <div class=\" col-span-12 md:col-span-8 xl:col-span-9\">
            <div class=\"card border-0 overflow-hidden flex flex-col\">
                <div class=\"flex items-center justify-between gap-2  px-6 py-2.5 active border-b border-neutral-200 dark:border-neutral-600\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/11.png"), "html", null, true);
        yield "\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-base mb-0\">Kathryn Murphy</h6>
                            <p class=\"mb-0\">Available</p>
                        </div>
                    </div>
                    <div class=\"action inline-flex items-center gap-3\">
                        <button type=\"button\" class=\"text-xl text-neutral-600 dark:text-neutral-200\">
                            <iconify-icon icon=\"mi:call\"></iconify-icon>
                        </button>
                        <button type=\"button\" class=\"text-xl text-neutral-600 dark:text-neutral-200\">
                            <iconify-icon icon=\"fluent:video-32-regular\"></iconify-icon>
                        </button>
                        <div class=\"dropdown\">
                            <button data-dropdown-toggle=\"dropdown2\" class=\"text-neutral-800 dark:text-white text-xl\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>
                            <div id=\"dropdown2\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            <i class=\"ri-close-circle-line\"></i>
                                            All Clear
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            <iconify-icon icon=\"ic:baseline-block\"></iconify-icon>
                                            Block
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class=\"chat-message-list max-h-[568px] overflow-y-auto flex flex-col p-6 gap-6\">
                    <div class=\"max-w-[700px] text-neutral-900 flex items-end gap-3\">
                        <img src=\"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/11.png"), "html", null, true);
        yield "\" alt=\"image\" class=\"avatar-lg object-fit-cover rounded-full\">
                        <div class=\"bg-neutral-50 dark:bg-dark-3 rounded-2xl rounded-es-none p-5\">
                            <p class=\"mb-3\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class=\"chat-time mb-0 text-xs text-end text-neutral-500\">
                                <span>6.30 pm</span>
                            </p>
                        </div>
                    </div><!-- end -->
                    <div class=\"max-w-[700px] ms-auto text-white\">
                        <div class=\"bg-primary-600 rounded-2xl rounded-ee-none p-5\">
                            <p class=\"mb-3\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class=\"chat-time mb-0 text-xs\">
                                <span>6.30 pm</span>
                            </p>
                        </div>
                    </div><!-- end -->
                    <div class=\"max-w-[700px] text-neutral-900 flex items-end gap-3\">
                        <img src=\"";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/chat/11.png"), "html", null, true);
        yield "\" alt=\"image\" class=\"avatar-lg object-fit-cover rounded-full\">
                        <div class=\"bg-neutral-50 dark:bg-dark-3 rounded-2xl rounded-es-none p-5\">
                            <p class=\"mb-3\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class=\"chat-time mb-0 text-xs text-end text-neutral-500\">
                                <span>6.30 pm</span>
                            </p>
                        </div>
                    </div><!-- end -->
                    <div class=\"max-w-[700px] ms-auto text-white\">
                        <div class=\"bg-primary-600 rounded-2xl rounded-ee-none p-5\">
                            <p class=\"mb-3\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class=\"chat-time mb-0 text-xs\">
                                <span>6.30 pm</span>
                            </p>
                        </div>
                    </div><!-- end -->
                </div>
                <form class=\"chat-message-box flex items-center justify-between py-4 border-t border-neutral-200 dark:border-neutral-600 mt-auto\">
                    <input type=\"text\" class=\"border-0 grow bg-white dark:bg-transparent focus:border-0 focus:outline-none focus:ring-0\" autocomplete=\"off\" name=\"chatMessage\" placeholder=\"Write message\">
                    <div class=\"chat-message-box-action flex items-center gap-4\">
                        <button type=\"button\" class=\"text-xl flex\">
                            <iconify-icon icon=\"ph:link\"></iconify-icon>
                        </button>
                        <button type=\"button\" class=\"text-xl flex\">
                            <iconify-icon icon=\"solar:gallery-linear\"></iconify-icon>
                        </button>
                        <button type=\"submit\" class=\"btn btn-sm btn-primary-600 rounded-lg inline-flex items-center gap-1\">
                            Send
                            <iconify-icon icon=\"f7:paperplane\"></iconify-icon>
                        </button>
                    </div>
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
        return "chatMessage.html.twig";
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
        return array (  509 => 381,  489 => 364,  447 => 325,  425 => 306,  407 => 291,  389 => 276,  371 => 261,  353 => 246,  335 => 231,  317 => 216,  299 => 201,  281 => 186,  263 => 171,  245 => 156,  227 => 141,  209 => 126,  191 => 111,  173 => 96,  155 => 81,  137 => 66,  119 => 51,  76 => 11,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"chat-wrapper grid grid-cols-1 md:grid-cols-12 gap-6\">
        <div class=\"card border-0 overflow-hidden col-span-12 md:col-span-4 xl:col-span-3\">

            <div class=\"flex items-center justify-between gap-2 px-5 pt-5 pb-4\">
                <div class=\"flex items-center gap-4\">
                    <div class=\"\">
                        <img src=\"{{ asset('assets/images/chat/1.png') }}\" alt=\"image\">
                    </div>
                    <div class=\"\">
                        <h6 class=\"text-base mb-0\">Kathryn Murphy</h6>
                        <p class=\"mb-0\">Available</p>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class=\"dropdown\">
                    <button data-dropdown-toggle=\"dropdown1\" class=\"text-neutral-800 dark:text-white\" type=\"button\">
                        <i class=\"ri-more-2-fill\"></i>
                    </button>
                    <div id=\"dropdown1\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                        <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                            <li>
                                <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                    <i class=\"text-base flex ri-user-line\"></i>
                                    Profile
                                </button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                    <i class=\"text-base flex ri-settings-4-line\"></i>
                                    Setting
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"chat-search w-full relative\">
                <span class=\"icon absolute start-5 top-1/2 -translate-y-1/2 text-xl flex\">
                    <iconify-icon icon=\"iconoir:search\"></iconify-icon>
                </span>
                <input type=\"text\" class=\"border-0 border-t border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 w-full focus:outline-none focus:ring-0 ps-12 pe-6\" autocomplete=\"off\" placeholder=\"Search...\">
            </div>
            <div class=\"chat-all-list flex flex-col gap-1.5 mt-3 max-h-[580px] overflow-y-auto\">
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/2.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Kathryn Murphy</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/3.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">James Michael</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/4.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Russell Lucas</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/5.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Caleb Bradley</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/6.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Bobby Roy</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/7.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Vincent Liam</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/8.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Randy Mason</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/9.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Albert Wayne</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/10.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Elijah Willie</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/2.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Kathryn Murphy</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/3.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">James Michael</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/4.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Russell Lucas</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/5.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Caleb Bradley</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/6.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Bobby Roy</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/7.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Vincent Liam</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/8.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Randy Mason</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/9.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Albert Wayne</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
                <a href=\"javascript:void(0)\" class=\"flex items-center justify-between gap-2 cursor-pointer hover:bg-neutral-50 dark:hover:bg-neutral-600 px-6 py-2.5 active\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/10.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-sm mb-1 line-clamp-1\">Elijah Willie</h6>
                            <p class=\"mb-0 text-xs line-clamp-1\">hey! there i'm...</p>
                        </div>
                    </div>
                    <div class=\"shrink-0 text-end\">
                        <p class=\"mb-0 text-neutral-400 text-xs lh-1\">12:30 PM</p>
                        <span class=\"w-4 h-4 text-xs rounded-full bg-warning-600 text-white inline-flex items-center justify-center\">8</span>
                    </div>
                </a><!-- chat-sidebar-single end -->
            </div>
        </div>
        <div class=\" col-span-12 md:col-span-8 xl:col-span-9\">
            <div class=\"card border-0 overflow-hidden flex flex-col\">
                <div class=\"flex items-center justify-between gap-2  px-6 py-2.5 active border-b border-neutral-200 dark:border-neutral-600\">
                    <div class=\"flex items-center gap-2\">
                        <div class=\"img\">
                            <img src=\"{{ asset('assets/images/chat/11.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"info\">
                            <h6 class=\"text-base mb-0\">Kathryn Murphy</h6>
                            <p class=\"mb-0\">Available</p>
                        </div>
                    </div>
                    <div class=\"action inline-flex items-center gap-3\">
                        <button type=\"button\" class=\"text-xl text-neutral-600 dark:text-neutral-200\">
                            <iconify-icon icon=\"mi:call\"></iconify-icon>
                        </button>
                        <button type=\"button\" class=\"text-xl text-neutral-600 dark:text-neutral-200\">
                            <iconify-icon icon=\"fluent:video-32-regular\"></iconify-icon>
                        </button>
                        <div class=\"dropdown\">
                            <button data-dropdown-toggle=\"dropdown2\" class=\"text-neutral-800 dark:text-white text-xl\" type=\"button\">
                                <i class=\"ri-more-2-fill\"></i>
                            </button>
                            <div id=\"dropdown2\" class=\"z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-neutral-100 dark:border-neutral-600 w-44 dark:bg-gray-700\">
                                <ul class=\"p-2 text-sm text-gray-700 dark:text-gray-200\">
                                    <li>
                                        <button type=\"submit\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            <i class=\"ri-close-circle-line\"></i>
                                            All Clear
                                        </button>
                                    </li>
                                    <li>
                                        <button type=\"button\" class=\"w-full text-start px-4 py-2.5 hover:bg-gray-100 dark:hover:bg-gray-600 rounded dark:hover:text-white flex items-center gap-2\">
                                            <iconify-icon icon=\"ic:baseline-block\"></iconify-icon>
                                            Block
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- chat-sidebar-single end -->
                <div class=\"chat-message-list max-h-[568px] overflow-y-auto flex flex-col p-6 gap-6\">
                    <div class=\"max-w-[700px] text-neutral-900 flex items-end gap-3\">
                        <img src=\"{{ asset('assets/images/chat/11.png') }}\" alt=\"image\" class=\"avatar-lg object-fit-cover rounded-full\">
                        <div class=\"bg-neutral-50 dark:bg-dark-3 rounded-2xl rounded-es-none p-5\">
                            <p class=\"mb-3\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class=\"chat-time mb-0 text-xs text-end text-neutral-500\">
                                <span>6.30 pm</span>
                            </p>
                        </div>
                    </div><!-- end -->
                    <div class=\"max-w-[700px] ms-auto text-white\">
                        <div class=\"bg-primary-600 rounded-2xl rounded-ee-none p-5\">
                            <p class=\"mb-3\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class=\"chat-time mb-0 text-xs\">
                                <span>6.30 pm</span>
                            </p>
                        </div>
                    </div><!-- end -->
                    <div class=\"max-w-[700px] text-neutral-900 flex items-end gap-3\">
                        <img src=\"{{ asset('assets/images/chat/11.png') }}\" alt=\"image\" class=\"avatar-lg object-fit-cover rounded-full\">
                        <div class=\"bg-neutral-50 dark:bg-dark-3 rounded-2xl rounded-es-none p-5\">
                            <p class=\"mb-3\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class=\"chat-time mb-0 text-xs text-end text-neutral-500\">
                                <span>6.30 pm</span>
                            </p>
                        </div>
                    </div><!-- end -->
                    <div class=\"max-w-[700px] ms-auto text-white\">
                        <div class=\"bg-primary-600 rounded-2xl rounded-ee-none p-5\">
                            <p class=\"mb-3\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class=\"chat-time mb-0 text-xs\">
                                <span>6.30 pm</span>
                            </p>
                        </div>
                    </div><!-- end -->
                </div>
                <form class=\"chat-message-box flex items-center justify-between py-4 border-t border-neutral-200 dark:border-neutral-600 mt-auto\">
                    <input type=\"text\" class=\"border-0 grow bg-white dark:bg-transparent focus:border-0 focus:outline-none focus:ring-0\" autocomplete=\"off\" name=\"chatMessage\" placeholder=\"Write message\">
                    <div class=\"chat-message-box-action flex items-center gap-4\">
                        <button type=\"button\" class=\"text-xl flex\">
                            <iconify-icon icon=\"ph:link\"></iconify-icon>
                        </button>
                        <button type=\"button\" class=\"text-xl flex\">
                            <iconify-icon icon=\"solar:gallery-linear\"></iconify-icon>
                        </button>
                        <button type=\"submit\" class=\"btn btn-sm btn-primary-600 rounded-lg inline-flex items-center gap-1\">
                            Send
                            <iconify-icon icon=\"f7:paperplane\"></iconify-icon>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{% endblock content %}", "chatMessage.html.twig", "E:\\Symfony\\WowDash\\templates\\chatMessage.html.twig");
    }
}
