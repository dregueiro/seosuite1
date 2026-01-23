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

/* dashboard/index7.html.twig */
class __TwigTemplate_c2b7f705f2af78cfcb497448cd1ad866 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index7.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "dashboard/index7.html.twig", 1);
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
        <div class=\"gap-6 grid grid-cols-1 2xl:grid-cols-12\">
            <div class=\"col-span-12 2xl:col-span-8\">
                <div class=\"gap-6 grid grid-cols-1 sm:grid-cols-12\">
                    <div class=\"col-span-12\">
                        <div class=\"nft-promo-card card border-0 rounded-xl overflow-hidden relative z-1 py-6 3xl:px-[76px] 2xl:px-[56px] xl:px-[40px] lg:px-[28px] px-4\">
                            <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-gradient-bg.png"), "html", null, true);
        yield "\" class=\"absolute start-0 top-0 w-full h-full z-[1]\" alt=\"\">
                            <div class=\"nft-promo-card__inner flex 3xl:gap-[80px] 2xl:gap-[48px] xl:gap-[32px] lg:gap-6 gap-4 items-center relative z-[1]\">
                                <div class=\"nft-promo-card__thumb w-full\">
                                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nf-card-img.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                </div>
                                <div class=\"flex-grow-1\">
                                    <h4 class=\"mb-4 text-white\">Discover The Largest  NFTs Marketplace</h4>
                                    <p class=\"text-white text-base\">The largest NFT (Non-Fungible Token) marketplace is OpenSea. Established in 2017, OpenSea has grown to become the leading platform for buying, selling, and trading digital assets,</p>
                                    <div class=\"flex items-center flex-wrap mt-6 gap-4\">
                                        <a href=\"javascript:void(0)\" class=\"btn rounded-full border br-white text-white px-[32px] py-[11px] hover:bg-white hover:text-neutral-900\">Explore</a>
                                        <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-[28px] py-[11px]\">Create Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-span-12\">
                        <h6 class=\"mb-4\">Trending Bids</h6>
                        <div class=\"gap-6 grid grid-cols-1 sm:grid-cols-12\">
                            <!-- Dashboard Widget Start -->
                            <div class=\"col-span-12 sm:col-span-6 lg:col-span-4\">
                                <div class=\"card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-3\">
                                    <div class=\"card-body p-0\">
                                        <div class=\"flex flex-wrap items-center justify-between gap-1\">
                                            <div class=\"flex items-center flex-wrap gap-4\">
                                                <span class=\"w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0\">
                                                    <iconify-icon icon=\"flowbite:users-group-solid\" class=\"icon\"></iconify-icon>
                                                </span>

                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"font-semibold mb-0\">24,000</h6>
                                                    <span class=\"font-medium text-secondary-light text-base\">Artworks</span>
                                                    <p class=\"text-sm mb-0 flex items-center flex-wrap gap-3 mt-3\">
                                                        <span class=\"bg-success-focus px-1.5 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-600 text-sm flex items-center gap-2\">
                                                            +168.001%
                                                            <i class=\"ri-arrow-up-line\"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                            <!-- Dashboard Widget Start -->
                            <div class=\"col-span-12 sm:col-span-6 lg:col-span-4\">
                                <div class=\"card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-5\">
                                    <div class=\"card-body p-0\">
                                        <div class=\"flex flex-wrap items-center justify-between gap-1\">
                                            <div class=\"flex items-center flex-wrap gap-4\">
                                                <span class=\"w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0\">
                                                    <iconify-icon icon=\"flowbite:users-group-solid\" class=\"icon\"></iconify-icon>
                                                </span>

                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"font-semibold mb-0\">82,000</h6>
                                                    <span class=\"font-medium text-secondary-light text-base\">Auction</span>
                                                    <p class=\"text-sm mb-0 flex items-center flex-wrap gap-3 mt-3\">
                                                        <span class=\"bg-danger-focus px-1.5 py-0.5 rounded-sm font-medium text-danger-600 dark:text-danger-600 text-sm flex items-center gap-2\">
                                                            +168.001%
                                                            <i class=\"ri-arrow-down-line\"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                            <!-- Dashboard Widget Start -->
                            <div class=\"col-span-12 sm:col-span-6 lg:col-span-4\">
                                <div class=\"card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-2\">
                                    <div class=\"card-body p-0\">
                                        <div class=\"flex flex-wrap items-center justify-between gap-1\">
                                            <div class=\"flex items-center flex-wrap gap-4\">
                                                <span class=\"w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0\">
                                                    <iconify-icon icon=\"flowbite:users-group-solid\" class=\"icon\"></iconify-icon>
                                                </span>

                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"font-semibold mb-0\">800</h6>
                                                    <span class=\"font-medium text-secondary-light text-base\">Creators</span>
                                                    <p class=\"text-sm mb-0 flex items-center flex-wrap gap-3 mt-3\">
                                                        <span class=\"bg-success-focus px-1.5 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-600 text-sm flex items-center gap-2\">
                                                            +168.001%
                                                            <i class=\"ri-arrow-up-line\"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                        </div>
                    </div>

                    <div class=\"col-span-12\">
                        <div class=\"mb-4 mt-8 flex flex-wrap justify-between gap-4\">
                            <h6 class=\"mb-0\">Trending NFTs</h6>
                            <ul class=\"style-pill-button flex flex-wrap -mb-px text-sm font-medium text-center\" id=\"default-tab\" data-tabs-toggle=\"#default-tab-content\" role=\"tablist\">
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white\" id=\"all-tab\" data-tabs-target=\"#all\" type=\"button\" role=\"tab\" aria-controls=\"all\" aria-selected=\"false\">All</button>
                                </li>
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"art-tab\" data-tabs-target=\"#art\" type=\"button\" role=\"tab\" aria-controls=\"art\" aria-selected=\"false\">Art</button>
                                </li>
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"music-tab\" data-tabs-target=\"#music\" type=\"button\" role=\"tab\" aria-controls=\"music\" aria-selected=\"false\">Music</button>
                                </li>
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"utility-tab\" data-tabs-target=\"#utility\" type=\"button\" role=\"tab\" aria-controls=\"utility\" aria-selected=\"false\">Utility</button>
                                </li>
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"fashion-tab\" data-tabs-target=\"#fashion\" type=\"button\" role=\"tab\" aria-controls=\"fashion\" aria-selected=\"false\">Fashion</button>
                                </li>
                            </ul>
                        </div>

                        <div id=\"default-tab-content\">
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img1.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img2.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img3.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img4.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"art\" role=\"tabpanel\" aria-labelledby=\"art-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img3.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img1.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img4.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img2.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"music\" role=\"tabpanel\" aria-labelledby=\"music-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img1.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img2.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img3.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img4.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"utility\" role=\"tabpanel\" aria-labelledby=\"utility-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img4.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img1.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img3.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img2.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"fashion\" role=\"tabpanel\" aria-labelledby=\"fashion-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img2.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img1.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img4.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-user-img3.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-body p-6\">
                                <div class=\"flex items-center flex-wrap gap-2 justify-between mb-5\">
                                    <h6 class=\"font-bold text-lg mb-0\">Recent Bid</h6>
                                    <select class=\"form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light rounded-full\">
                                        <option>All Items </option>
                                        <option>New Item</option>
                                        <option>Trending Item</option>
                                        <option>Old Item</option>
                                    </select>
                                </div>
                                <div class=\"table-responsive scroll-sm\">
                                    <div class=\"table-responsive scroll-sm\">
                                        <table class=\"table bordered-table sm-table mb-0\">
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\">Items </th>
                                                    <th scope=\"col\">Price</th>
                                                    <th scope=\"col\">Your Offer  </th>
                                                    <th scope=\"col\">Recent Offer</th>
                                                    <th scope=\"col\">Time Left</th>
                                                    <th scope=\"col\" class=\"text-center\">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-items-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Spanky & Friends</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-offer-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-items-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Nike Air Shoe</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-offer-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-items-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Woman Dresses</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-offer-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 734
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-items-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Smart Watch</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-offer-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-items-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Hoodie Rose</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 774
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-offer-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-items-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Hoodie Rose</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 803
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-offer-img6.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-items-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Hoodie Rose</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-offer-img7.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-span-12 2xl:col-span-4\">
                <div class=\"gap-6 grid grid-cols-1 sm:grid-cols-12\">
                    <div class=\"col-span-12 md:col-span-6 2xl:col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-header border-bottom flex items-center flex-wrap gap-2 justify-between\">
                                <h6 class=\"font-bold text-lg mb-0\">ETH Price</h6>
                                <select class=\"form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light rounded-full\">
                                    <option>November </option>
                                    <option>December</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                </select>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"enrollmentChart\" class=\"apexcharts-tooltip-style-1 yaxies-more\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-span-12 md:col-span-6 2xl:col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-header border-bottom flex items-center flex-wrap gap-2 justify-between\">
                                <h6 class=\"font-bold text-lg mb-0\">Statistics</h6>
                                <a href=\"javascript:void(0)\" class=\"text-primary-600 hover:text-primary-700 flex items-center gap-1\">
                                    View All
                                    <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon\"></iconify-icon>
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"flex items-center gap-1 justify-between mb-[44px]\">
                                    <div>
                                        <h5 class=\"font-semibold mb-3\">145</h5>
                                        <span class=\"text-secondary-light font-normal text-xl\">Total Art Sold</span>
                                    </div>
                                    <div id=\"dailyIconBarChart\"></div>
                                </div>
                                <div class=\"flex items-center gap-1 justify-between\">
                                    <div>
                                        <h5 class=\"font-semibold mb-3\">750 ETH</h5>
                                        <span class=\"text-secondary-light font-normal text-xl\">Total Earnings</span>
                                    </div>
                                    <div id=\"areaChart\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-span-12 md:col-span-6 2xl:col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-header border-bottom flex items-center flex-wrap gap-2 justify-between\">
                                <h6 class=\"font-bold text-lg mb-0\">Featured Creators</h6>
                                <a href=\"javascript:void(0)\" class=\"text-primary-600 hover:text-primary-700 flex items-center gap-1\">
                                    View All
                                    <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon\"></iconify-icon>
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"flex items-center justify-between gap-2 flex-wrap\">
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 921
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/nft-items-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Theresa Webb</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-outline-primary-600 px-6 rounded-full follow-btn\">Follow</button>
                                </div>
                                <div class=\"mt-6\">
                                    <div class=\"grid grid-cols-2 gap-6\">
                                        <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden shadow-4\">
                                            <div class=\"rounded overflow-hidden\">
                                                <img src=\"";
        // line 933
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/featured-creator1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                            </div>
                                            <div class=\"p-3\">
                                                <h6 class=\"text-base font-bold text-primary-light mb-3\">New Figures</h6>
                                                <div class=\"flex items-center gap-2\">
                                                    <img src=\"";
        // line 938
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/bitcoin.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                    <span class=\"text-sm text-secondary-light font-medium\">0.10 BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden shadow-4\">
                                            <div class=\"rounded overflow-hidden\">
                                                <img src=\"";
        // line 945
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/featured-creator2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                            </div>
                                            <div class=\"p-3\">
                                                <h6 class=\"text-base font-bold text-primary-light mb-3\">Abstrac Girl</h6>
                                                <div class=\"flex items-center gap-2\">
                                                    <img src=\"";
        // line 950
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/bitcoin.png"), "html", null, true);
        yield "\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                    <span class=\"text-sm text-secondary-light font-medium\">0.10 BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-span-12 md:col-span-6 2xl:col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-header border-bottom flex items-center flex-wrap gap-2 justify-between\">
                                <h6 class=\"font-bold text-lg mb-0\">Featured Creators</h6>
                                <a href=\"javascript:void(0)\" class=\"text-primary-600 hover:text-primary-700 flex items-center gap-1\">
                                    View All
                                    <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon\"></iconify-icon>
                                </a>
                            </div>
                            <div class=\"card-body pt-6\">
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 972
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/creator-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Theresa Webb</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@wishon</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 982
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/creator-img2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Arlene McCoy</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@nemccoy</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 992
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/creator-img3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Kathryn Murphy</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@kathrynmur</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 1002
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/creator-img4.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Marvin McKinney</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@marvinckin</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 1012
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/creator-img1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Theresa Webb</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@wishon</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-0\">
                                    <div class=\"flex items-center\">
                                        <img src=\"";
        // line 1022
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/nft/creator-img5.png"), "html", null, true);
        yield "\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Dianne Russell</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@dinne_r</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
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
        return "dashboard/index7.html.twig";
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
        return array (  1285 => 1022,  1272 => 1012,  1259 => 1002,  1246 => 992,  1233 => 982,  1220 => 972,  1195 => 950,  1187 => 945,  1177 => 938,  1169 => 933,  1154 => 921,  1062 => 832,  1048 => 821,  1027 => 803,  1013 => 792,  992 => 774,  978 => 763,  957 => 745,  943 => 734,  922 => 716,  908 => 705,  887 => 687,  873 => 676,  852 => 658,  838 => 647,  784 => 596,  776 => 591,  755 => 573,  747 => 568,  726 => 550,  718 => 545,  697 => 527,  689 => 522,  664 => 500,  656 => 495,  635 => 477,  627 => 472,  606 => 454,  598 => 449,  577 => 431,  569 => 426,  544 => 404,  536 => 399,  515 => 381,  507 => 376,  486 => 358,  478 => 353,  457 => 335,  449 => 330,  424 => 308,  416 => 303,  395 => 285,  387 => 280,  366 => 262,  358 => 257,  337 => 239,  329 => 234,  304 => 212,  296 => 207,  275 => 189,  267 => 184,  246 => 166,  238 => 161,  217 => 143,  209 => 138,  81 => 13,  75 => 10,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

        <div class=\"gap-6 grid grid-cols-1 2xl:grid-cols-12\">
            <div class=\"col-span-12 2xl:col-span-8\">
                <div class=\"gap-6 grid grid-cols-1 sm:grid-cols-12\">
                    <div class=\"col-span-12\">
                        <div class=\"nft-promo-card card border-0 rounded-xl overflow-hidden relative z-1 py-6 3xl:px-[76px] 2xl:px-[56px] xl:px-[40px] lg:px-[28px] px-4\">
                            <img src=\"{{ asset('assets/images/nft/nft-gradient-bg.png') }}\" class=\"absolute start-0 top-0 w-full h-full z-[1]\" alt=\"\">
                            <div class=\"nft-promo-card__inner flex 3xl:gap-[80px] 2xl:gap-[48px] xl:gap-[32px] lg:gap-6 gap-4 items-center relative z-[1]\">
                                <div class=\"nft-promo-card__thumb w-full\">
                                    <img src=\"{{ asset('assets/images/nft/nf-card-img.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                </div>
                                <div class=\"flex-grow-1\">
                                    <h4 class=\"mb-4 text-white\">Discover The Largest  NFTs Marketplace</h4>
                                    <p class=\"text-white text-base\">The largest NFT (Non-Fungible Token) marketplace is OpenSea. Established in 2017, OpenSea has grown to become the leading platform for buying, selling, and trading digital assets,</p>
                                    <div class=\"flex items-center flex-wrap mt-6 gap-4\">
                                        <a href=\"javascript:void(0)\" class=\"btn rounded-full border br-white text-white px-[32px] py-[11px] hover:bg-white hover:text-neutral-900\">Explore</a>
                                        <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-[28px] py-[11px]\">Create Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-span-12\">
                        <h6 class=\"mb-4\">Trending Bids</h6>
                        <div class=\"gap-6 grid grid-cols-1 sm:grid-cols-12\">
                            <!-- Dashboard Widget Start -->
                            <div class=\"col-span-12 sm:col-span-6 lg:col-span-4\">
                                <div class=\"card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-3\">
                                    <div class=\"card-body p-0\">
                                        <div class=\"flex flex-wrap items-center justify-between gap-1\">
                                            <div class=\"flex items-center flex-wrap gap-4\">
                                                <span class=\"w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0\">
                                                    <iconify-icon icon=\"flowbite:users-group-solid\" class=\"icon\"></iconify-icon>
                                                </span>

                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"font-semibold mb-0\">24,000</h6>
                                                    <span class=\"font-medium text-secondary-light text-base\">Artworks</span>
                                                    <p class=\"text-sm mb-0 flex items-center flex-wrap gap-3 mt-3\">
                                                        <span class=\"bg-success-focus px-1.5 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-600 text-sm flex items-center gap-2\">
                                                            +168.001%
                                                            <i class=\"ri-arrow-up-line\"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                            <!-- Dashboard Widget Start -->
                            <div class=\"col-span-12 sm:col-span-6 lg:col-span-4\">
                                <div class=\"card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-5\">
                                    <div class=\"card-body p-0\">
                                        <div class=\"flex flex-wrap items-center justify-between gap-1\">
                                            <div class=\"flex items-center flex-wrap gap-4\">
                                                <span class=\"w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0\">
                                                    <iconify-icon icon=\"flowbite:users-group-solid\" class=\"icon\"></iconify-icon>
                                                </span>

                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"font-semibold mb-0\">82,000</h6>
                                                    <span class=\"font-medium text-secondary-light text-base\">Auction</span>
                                                    <p class=\"text-sm mb-0 flex items-center flex-wrap gap-3 mt-3\">
                                                        <span class=\"bg-danger-focus px-1.5 py-0.5 rounded-sm font-medium text-danger-600 dark:text-danger-600 text-sm flex items-center gap-2\">
                                                            +168.001%
                                                            <i class=\"ri-arrow-down-line\"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                            <!-- Dashboard Widget Start -->
                            <div class=\"col-span-12 sm:col-span-6 lg:col-span-4\">
                                <div class=\"card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-2\">
                                    <div class=\"card-body p-0\">
                                        <div class=\"flex flex-wrap items-center justify-between gap-1\">
                                            <div class=\"flex items-center flex-wrap gap-4\">
                                                <span class=\"w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0\">
                                                    <iconify-icon icon=\"flowbite:users-group-solid\" class=\"icon\"></iconify-icon>
                                                </span>

                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"font-semibold mb-0\">800</h6>
                                                    <span class=\"font-medium text-secondary-light text-base\">Creators</span>
                                                    <p class=\"text-sm mb-0 flex items-center flex-wrap gap-3 mt-3\">
                                                        <span class=\"bg-success-focus px-1.5 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-600 text-sm flex items-center gap-2\">
                                                            +168.001%
                                                            <i class=\"ri-arrow-up-line\"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                        </div>
                    </div>

                    <div class=\"col-span-12\">
                        <div class=\"mb-4 mt-8 flex flex-wrap justify-between gap-4\">
                            <h6 class=\"mb-0\">Trending NFTs</h6>
                            <ul class=\"style-pill-button flex flex-wrap -mb-px text-sm font-medium text-center\" id=\"default-tab\" data-tabs-toggle=\"#default-tab-content\" role=\"tablist\">
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white\" id=\"all-tab\" data-tabs-target=\"#all\" type=\"button\" role=\"tab\" aria-controls=\"all\" aria-selected=\"false\">All</button>
                                </li>
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"art-tab\" data-tabs-target=\"#art\" type=\"button\" role=\"tab\" aria-controls=\"art\" aria-selected=\"false\">Art</button>
                                </li>
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"music-tab\" data-tabs-target=\"#music\" type=\"button\" role=\"tab\" aria-controls=\"music\" aria-selected=\"false\">Music</button>
                                </li>
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"utility-tab\" data-tabs-target=\"#utility\" type=\"button\" role=\"tab\" aria-controls=\"utility\" aria-selected=\"false\">Utility</button>
                                </li>
                                <li class=\" border-0 me-2\" role=\"presentation\">
                                    <button class=\"font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"fashion-tab\" data-tabs-target=\"#fashion\" type=\"button\" role=\"tab\" aria-controls=\"fashion\" aria-selected=\"false\">Fashion</button>
                                </li>
                            </ul>
                        </div>

                        <div id=\"default-tab-content\">
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img1.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img2.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img3.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img4.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img4.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"art\" role=\"tabpanel\" aria-labelledby=\"art-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img3.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img1.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img4.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img4.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img2.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"music\" role=\"tabpanel\" aria-labelledby=\"music-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img1.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img2.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img3.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img4.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img4.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"utility\" role=\"tabpanel\" aria-labelledby=\"utility-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img4.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img4.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img1.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img3.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img2.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800\" id=\"fashion\" role=\"tabpanel\" aria-labelledby=\"fashion-tab\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6\">
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img2.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">Fantastic Alien</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img1.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img4.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img4.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden\">
                                        <div class=\"rounded overflow-hidden\">
                                            <img src=\"{{ asset('assets/images/nft/nft-img3.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                        </div>
                                        <div class=\"p-2.5\">
                                            <h6 class=\"text-base font-bold text-primary-light\">New Figures</h6>
                                            <div class=\"flex items-center gap-2\">
                                                <img src=\"{{ asset('assets/images/nft/nft-user-img3.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                <span class=\"text-sm text-secondary-light font-medium\">Watson Kristin</span>
                                            </div>
                                            <div class=\"mt-2.5 flex items-center justify-between gap-2 flex-wrap\">
                                                <span class=\"text-sm text-secondary-light font-medium\">
                                                    Price:
                                                    <span class=\"text-sm text-primary-light font-semibold\">1.44 ETH</span>
                                                </span>
                                                <span class=\"text-sm font-semibold text-primary-600\">\$4,224.96</span>
                                            </div>
                                            <div class=\"flex items-center flex-wrap mt-3 gap-2\">
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1\">History</a>
                                                <a href=\"javascript:void(0)\" class=\"btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1\">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-body p-6\">
                                <div class=\"flex items-center flex-wrap gap-2 justify-between mb-5\">
                                    <h6 class=\"font-bold text-lg mb-0\">Recent Bid</h6>
                                    <select class=\"form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light rounded-full\">
                                        <option>All Items </option>
                                        <option>New Item</option>
                                        <option>Trending Item</option>
                                        <option>Old Item</option>
                                    </select>
                                </div>
                                <div class=\"table-responsive scroll-sm\">
                                    <div class=\"table-responsive scroll-sm\">
                                        <table class=\"table bordered-table sm-table mb-0\">
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\">Items </th>
                                                    <th scope=\"col\">Price</th>
                                                    <th scope=\"col\">Your Offer  </th>
                                                    <th scope=\"col\">Recent Offer</th>
                                                    <th scope=\"col\">Time Left</th>
                                                    <th scope=\"col\" class=\"text-center\">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-items-img1.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Spanky & Friends</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-offer-img1.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-items-img2.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Nike Air Shoe</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-offer-img2.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-items-img3.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Woman Dresses</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-offer-img3.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-items-img4.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Smart Watch</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-offer-img4.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-items-img5.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Hoodie Rose</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-offer-img5.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-items-img6.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Hoodie Rose</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-offer-img6.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-items-img2.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold\">Hoodie Rose</h6>
                                                                <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class=\"flex items-center\">
                                                            <img src=\"{{ asset('assets/images/nft/nft-offer-img7.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"text-base mb-0 font-semibold text-primary-light\">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class=\"d-inline-flex items-center gap-3\">
                                                            <button type=\"button\" class=\"text-xl text-success-600\"><i class=\"ri-edit-line\"></i></button>
                                                            <button type=\"button\" class=\"text-xl text-danger-600 remove-btn\"><i class=\"ri-delete-bin-6-line\"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-span-12 2xl:col-span-4\">
                <div class=\"gap-6 grid grid-cols-1 sm:grid-cols-12\">
                    <div class=\"col-span-12 md:col-span-6 2xl:col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-header border-bottom flex items-center flex-wrap gap-2 justify-between\">
                                <h6 class=\"font-bold text-lg mb-0\">ETH Price</h6>
                                <select class=\"form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light rounded-full\">
                                    <option>November </option>
                                    <option>December</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                </select>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"enrollmentChart\" class=\"apexcharts-tooltip-style-1 yaxies-more\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-span-12 md:col-span-6 2xl:col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-header border-bottom flex items-center flex-wrap gap-2 justify-between\">
                                <h6 class=\"font-bold text-lg mb-0\">Statistics</h6>
                                <a href=\"javascript:void(0)\" class=\"text-primary-600 hover:text-primary-700 flex items-center gap-1\">
                                    View All
                                    <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon\"></iconify-icon>
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"flex items-center gap-1 justify-between mb-[44px]\">
                                    <div>
                                        <h5 class=\"font-semibold mb-3\">145</h5>
                                        <span class=\"text-secondary-light font-normal text-xl\">Total Art Sold</span>
                                    </div>
                                    <div id=\"dailyIconBarChart\"></div>
                                </div>
                                <div class=\"flex items-center gap-1 justify-between\">
                                    <div>
                                        <h5 class=\"font-semibold mb-3\">750 ETH</h5>
                                        <span class=\"text-secondary-light font-normal text-xl\">Total Earnings</span>
                                    </div>
                                    <div id=\"areaChart\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-span-12 md:col-span-6 2xl:col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-header border-bottom flex items-center flex-wrap gap-2 justify-between\">
                                <h6 class=\"font-bold text-lg mb-0\">Featured Creators</h6>
                                <a href=\"javascript:void(0)\" class=\"text-primary-600 hover:text-primary-700 flex items-center gap-1\">
                                    View All
                                    <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon\"></iconify-icon>
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"flex items-center justify-between gap-2 flex-wrap\">
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/nft/nft-items-img1.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Theresa Webb</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">Owned by ABC</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-outline-primary-600 px-6 rounded-full follow-btn\">Follow</button>
                                </div>
                                <div class=\"mt-6\">
                                    <div class=\"grid grid-cols-2 gap-6\">
                                        <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden shadow-4\">
                                            <div class=\"rounded overflow-hidden\">
                                                <img src=\"{{ asset('assets/images/nft/featured-creator1.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                            </div>
                                            <div class=\"p-3\">
                                                <h6 class=\"text-base font-bold text-primary-light mb-3\">New Figures</h6>
                                                <div class=\"flex items-center gap-2\">
                                                    <img src=\"{{ asset('assets/images/nft/bitcoin.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                    <span class=\"text-sm text-secondary-light font-medium\">0.10 BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden shadow-4\">
                                            <div class=\"rounded overflow-hidden\">
                                                <img src=\"{{ asset('assets/images/nft/featured-creator2.png') }}\" alt=\"\" class=\"w-full h-full object-fit-cover\">
                                            </div>
                                            <div class=\"p-3\">
                                                <h6 class=\"text-base font-bold text-primary-light mb-3\">Abstrac Girl</h6>
                                                <div class=\"flex items-center gap-2\">
                                                    <img src=\"{{ asset('assets/images/nft/bitcoin.png') }}\" class=\"w-28-px h-28-px rounded-full object-fit-cover\" alt=\"\">
                                                    <span class=\"text-sm text-secondary-light font-medium\">0.10 BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-span-12 md:col-span-6 2xl:col-span-12\">
                        <div class=\"card border-0 h-full\">
                            <div class=\"card-header border-bottom flex items-center flex-wrap gap-2 justify-between\">
                                <h6 class=\"font-bold text-lg mb-0\">Featured Creators</h6>
                                <a href=\"javascript:void(0)\" class=\"text-primary-600 hover:text-primary-700 flex items-center gap-1\">
                                    View All
                                    <iconify-icon icon=\"solar:alt-arrow-right-linear\" class=\"icon\"></iconify-icon>
                                </a>
                            </div>
                            <div class=\"card-body pt-6\">
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/nft/creator-img1.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Theresa Webb</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@wishon</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/nft/creator-img2.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Arlene McCoy</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@nemccoy</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/nft/creator-img3.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Kathryn Murphy</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@kathrynmur</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/nft/creator-img4.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Marvin McKinney</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@marvinckin</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-[32px]\">
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/nft/creator-img1.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Theresa Webb</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@wishon</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                                <div class=\"flex items-center justify-between gap-2 flex-wrap mb-0\">
                                    <div class=\"flex items-center\">
                                        <img src=\"{{ asset('assets/images/nft/creator-img5.png') }}\" alt=\"\" class=\"flex-shrink-0 w-10 h-10 rounded-full me-3\">
                                        <div class=\"flex-grow-1\">
                                            <h6 class=\"text-base mb-0 font-semibold\">Dianne Russell</h6>
                                            <span class=\"text-sm text-secondary-light font-normal\">@dinne_r</span>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2\">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

{% endblock content %}", "dashboard/index7.html.twig", "E:\\Symfony\\WowDash\\templates\\dashboard\\index7.html.twig");
    }
}
