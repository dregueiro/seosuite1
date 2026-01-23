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

/* partials/sidebar.html.twig */
class __TwigTemplate_01ce9fd5f351bc96696ee30a20005e09 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        yield "<aside class=\"sidebar\">
    <button type=\"button\" class=\"sidebar-close-btn !mt-4\">
        <iconify-icon icon=\"radix-icons:cross-2\"></iconify-icon>
    </button>
    <div>
        <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\" class=\"sidebar-logo\">
            <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" alt=\"site logo\" class=\"light-logo\">
            <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        yield "\" alt=\"site logo\" class=\"dark-logo\">
            <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-icon.png"), "html", null, true);
        yield "\" alt=\"site logo\" class=\"logo-icon\">
        </a>
    </div>
    <div class=\"sidebar-menu-area\">
        <ul class=\"sidebar-menu\" id=\"sidebar-menu\">
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"solar:home-smile-angle-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Dashboard</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> AI</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index2");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> CRM</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index3");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> eCommerce</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index4");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Cryptocurrency</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index5");
        yield "\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Investment</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index6");
        yield "\"><i class=\"ri-circle-fill circle-icon text-purple-600 w-auto\"></i> LMS / Learning System</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index7");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> NFT & Gaming</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index8");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Medical</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index9");
        yield "\"><i class=\"ri-circle-fill circle-icon text-purple-600 w-auto\"></i> Analytics</a>
                    </li>
                </ul>
            </li>
            <li class=\"sidebar-menu-group-title\">Application</li>
            <li>
                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        yield "\">
                    <iconify-icon icon=\"mage:email\" class=\"menu-icon\"></iconify-icon>
                    <span>Email</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chatMessage");
        yield "\">
                    <iconify-icon icon=\"bi:chat-dots\" class=\"menu-icon\"></iconify-icon>
                    <span>Chat</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendarMain");
        yield "\">
                    <iconify-icon icon=\"solar:calendar-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Calendar</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kanban");
        yield "\">
                    <iconify-icon icon=\"material-symbols:map-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Kanban</span>
                </a>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"hugeicons:invoice-03\" class=\"menu-icon\"></iconify-icon>
                    <span>Invoice</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoiceList");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> List</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoicePreview");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Preview</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoiceAdd");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Add new</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoiceEdit");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Edit</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"hugeicons:ai-brain-03\" class=\"menu-icon\"></iconify-icon>
                    <span>Ai Application</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("textGenerator");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Text Generator</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("codeGenerator");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Code Generator</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imageGenerator");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Image Generator</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voiceGenerator");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Voice Generator</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videoGenerator");
        yield "\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Video Generator</a>
                    </li>
                </ul>
            </li>

            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"hugeicons:bitcoin-circle\" class=\"menu-icon\"></iconify-icon>
                    <span>Crypto Currency</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wallet");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Wallet</a>
                    </li>
                </ul>
            </li>

            <li class=\"sidebar-menu-group-title\">UI Elements</li>

            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"solar:document-text-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Components</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typography");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Typography</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("colors");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Colors</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("button");
        yield "\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Button</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dropdown");
        yield "\"><i class=\"ri-circle-fill circle-icon text-purple-600  dark:text-purple-400 w-auto\"></i> Dropdown</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alert");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Alerts</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Card</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carousel");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Carousel</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avatar");
        yield "\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Avatars</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("progress");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Progress bar</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tabs");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Tab & Accordion</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pagination");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Pagination</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("badges");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Badges</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tooltip");
        yield "\"><i class=\"ri-circle-fill circle-icon dark:text-purple-400 w-auto\"></i> Tooltip & Popover</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videos");
        yield "\"><i class=\"ri-circle-fill circle-icon text-cyan-600 w-auto\"></i> Videos</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("starRating");
        yield "\"><i class=\"ri-circle-fill circle-icon text-[#7f27ff] w-auto\"></i> Star Ratings</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tags");
        yield "\"><i class=\"ri-circle-fill circle-icon text-[#8252e9] w-auto\"></i> Tags</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lists");
        yield "\"><i class=\"ri-circle-fill circle-icon text-[#e30a0a] w-auto\"></i> List</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar");
        yield "\"><i class=\"ri-circle-fill circle-icon text-yellow-400 w-auto\"></i> Calendar</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("radio");
        yield "\"><i class=\"ri-circle-fill circle-icon text-orange-500 w-auto\"></i> Radio</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("switch");
        yield "\"><i class=\"ri-circle-fill circle-icon text-pink-600 w-auto\"></i> Switch</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("imageUpload");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Upload</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"heroicons:document\" class=\"menu-icon\"></iconify-icon>
                    <span>Forms</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Input Forms</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formLayout");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Input Layout</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formValidation");
        yield "\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Form Validation</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wizard");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Form Wizard</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"mingcute:storage-line\" class=\"menu-icon\"></iconify-icon>
                    <span>Table</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableBasic");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Basic Table</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tableData");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Data Table</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"solar:pie-chart-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Chart</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lineChart");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Line Chart</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("columnChart");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Column Chart</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 250
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pieChart");
        yield "\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Pie Chart</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 255
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("widgets");
        yield "\">
                    <iconify-icon icon=\"fe:vector\" class=\"menu-icon\"></iconify-icon>
                    <span>Widgets</span>
                </a>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"flowbite:users-group-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Users</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 267
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usersList");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Users List</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usersGrid");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Users Grid</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Add User</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 276
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewProfile");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> View Profile</a>
                    </li>
                </ul>
            </li>

            <li class=\"sidebar-menu-group-title\">Application</li>

            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"simple-line-icons:vector\" class=\"menu-icon\"></iconify-icon>
                    <span>Authentication</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Sign In</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Sign Up</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 296
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgotPassword");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Forgot Password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        yield "\">
                    <iconify-icon icon=\"solar:gallery-wide-linear\" class=\"menu-icon\"></iconify-icon>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 307
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
        yield "\">
                    <iconify-icon icon=\"hugeicons:money-send-square\" class=\"menu-icon\"></iconify-icon>
                    <span>Pricing</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 313
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        yield "\">
                    <iconify-icon icon=\"mage:message-question-mark-round\" class=\"menu-icon\"></iconify-icon>
                    <span>FAQs.</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 319
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageError");
        yield "\">
                    <iconify-icon icon=\"streamline:straight-face\" class=\"menu-icon\"></iconify-icon>
                    <span>404</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 325
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("termsCondition");
        yield "\">
                    <iconify-icon icon=\"octicon:info-24\" class=\"menu-icon\"></iconify-icon>
                    <span>Terms & Conditions</span>
                </a>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"icon-park-outline:setting-two\" class=\"menu-icon\"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company");
        yield "\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Company</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 340
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification");
        yield "\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Notification</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 343
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notificationAlert");
        yield "\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Notification Alert</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 346
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("theme");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Theme</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("currencies");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Currencies</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 352
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("language");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Languages</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 355
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paymentGateway");
        yield "\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Payment Gateway</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebar.html.twig";
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
        return array (  629 => 355,  623 => 352,  617 => 349,  611 => 346,  605 => 343,  599 => 340,  593 => 337,  578 => 325,  569 => 319,  560 => 313,  551 => 307,  542 => 301,  534 => 296,  528 => 293,  522 => 290,  505 => 276,  499 => 273,  493 => 270,  487 => 267,  472 => 255,  464 => 250,  458 => 247,  452 => 244,  438 => 233,  432 => 230,  418 => 219,  412 => 216,  406 => 213,  400 => 210,  386 => 199,  380 => 196,  374 => 193,  368 => 190,  362 => 187,  356 => 184,  350 => 181,  344 => 178,  338 => 175,  332 => 172,  326 => 169,  320 => 166,  314 => 163,  308 => 160,  302 => 157,  296 => 154,  290 => 151,  284 => 148,  278 => 145,  272 => 142,  266 => 139,  249 => 125,  234 => 113,  228 => 110,  222 => 107,  216 => 104,  210 => 101,  196 => 90,  190 => 87,  184 => 84,  178 => 81,  163 => 69,  154 => 63,  145 => 57,  136 => 51,  127 => 45,  121 => 42,  115 => 39,  109 => 36,  103 => 33,  97 => 30,  91 => 27,  85 => 24,  79 => 21,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"sidebar\">
    <button type=\"button\" class=\"sidebar-close-btn !mt-4\">
        <iconify-icon icon=\"radix-icons:cross-2\"></iconify-icon>
    </button>
    <div>
        <a href=\"{{ path('index') }}\" class=\"sidebar-logo\">
            <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"site logo\" class=\"light-logo\">
            <img src=\"{{ asset('assets/images/logo-light.png') }}\" alt=\"site logo\" class=\"dark-logo\">
            <img src=\"{{ asset('assets/images/logo-icon.png') }}\" alt=\"site logo\" class=\"logo-icon\">
        </a>
    </div>
    <div class=\"sidebar-menu-area\">
        <ul class=\"sidebar-menu\" id=\"sidebar-menu\">
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"solar:home-smile-angle-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Dashboard</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('index') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> AI</a>
                    </li>
                    <li>
                        <a href=\"{{ path('index2') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> CRM</a>
                    </li>
                    <li>
                        <a href=\"{{ path('index3') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> eCommerce</a>
                    </li>
                    <li>
                        <a href=\"{{ path('index4') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Cryptocurrency</a>
                    </li>
                    <li>
                        <a href=\"{{ path('index5') }}\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Investment</a>
                    </li>
                    <li>
                        <a href=\"{{ path('index6') }}\"><i class=\"ri-circle-fill circle-icon text-purple-600 w-auto\"></i> LMS / Learning System</a>
                    </li>
                    <li>
                        <a href=\"{{ path('index7') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> NFT & Gaming</a>
                    </li>
                    <li>
                        <a href=\"{{ path('index8') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Medical</a>
                    </li>
                    <li>
                        <a href=\"{{ path('index9') }}\"><i class=\"ri-circle-fill circle-icon text-purple-600 w-auto\"></i> Analytics</a>
                    </li>
                </ul>
            </li>
            <li class=\"sidebar-menu-group-title\">Application</li>
            <li>
                <a href=\"{{ path('email') }}\">
                    <iconify-icon icon=\"mage:email\" class=\"menu-icon\"></iconify-icon>
                    <span>Email</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('chatMessage') }}\">
                    <iconify-icon icon=\"bi:chat-dots\" class=\"menu-icon\"></iconify-icon>
                    <span>Chat</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('calendarMain') }}\">
                    <iconify-icon icon=\"solar:calendar-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Calendar</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('kanban') }}\">
                    <iconify-icon icon=\"material-symbols:map-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Kanban</span>
                </a>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"hugeicons:invoice-03\" class=\"menu-icon\"></iconify-icon>
                    <span>Invoice</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('invoiceList') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> List</a>
                    </li>
                    <li>
                        <a href=\"{{ path('invoicePreview') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Preview</a>
                    </li>
                    <li>
                        <a href=\"{{ path('invoiceAdd') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Add new</a>
                    </li>
                    <li>
                        <a href=\"{{ path('invoiceEdit') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Edit</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"hugeicons:ai-brain-03\" class=\"menu-icon\"></iconify-icon>
                    <span>Ai Application</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('textGenerator') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Text Generator</a>
                    </li>
                    <li>
                        <a href=\"{{ path('codeGenerator') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Code Generator</a>
                    </li>
                    <li>
                        <a href=\"{{ path('imageGenerator') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Image Generator</a>
                    </li>
                    <li>
                        <a href=\"{{ path('voiceGenerator') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Voice Generator</a>
                    </li>
                    <li>
                        <a href=\"{{ path('videoGenerator') }}\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Video Generator</a>
                    </li>
                </ul>
            </li>

            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"hugeicons:bitcoin-circle\" class=\"menu-icon\"></iconify-icon>
                    <span>Crypto Currency</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('wallet') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Wallet</a>
                    </li>
                </ul>
            </li>

            <li class=\"sidebar-menu-group-title\">UI Elements</li>

            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"solar:document-text-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Components</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('typography') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Typography</a>
                    </li>
                    <li>
                        <a href=\"{{ path('colors') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Colors</a>
                    </li>
                    <li>
                        <a href=\"{{ path('button') }}\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Button</a>
                    </li>
                    <li>
                        <a href=\"{{ path('dropdown') }}\"><i class=\"ri-circle-fill circle-icon text-purple-600  dark:text-purple-400 w-auto\"></i> Dropdown</a>
                    </li>
                    <li>
                        <a href=\"{{ path('alert') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Alerts</a>
                    </li>
                    <li>
                        <a href=\"{{ path('card') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Card</a>
                    </li>
                    <li>
                        <a href=\"{{ path('carousel') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Carousel</a>
                    </li>
                    <li>
                        <a href=\"{{ path('avatar') }}\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Avatars</a>
                    </li>
                    <li>
                        <a href=\"{{ path('progress') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Progress bar</a>
                    </li>
                    <li>
                        <a href=\"{{ path('tabs') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Tab & Accordion</a>
                    </li>
                    <li>
                        <a href=\"{{ path('pagination') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Pagination</a>
                    </li>
                    <li>
                        <a href=\"{{ path('badges') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Badges</a>
                    </li>
                    <li>
                        <a href=\"{{ path('tooltip') }}\"><i class=\"ri-circle-fill circle-icon dark:text-purple-400 w-auto\"></i> Tooltip & Popover</a>
                    </li>
                    <li>
                        <a href=\"{{ path('videos') }}\"><i class=\"ri-circle-fill circle-icon text-cyan-600 w-auto\"></i> Videos</a>
                    </li>
                    <li>
                        <a href=\"{{ path('starRating') }}\"><i class=\"ri-circle-fill circle-icon text-[#7f27ff] w-auto\"></i> Star Ratings</a>
                    </li>
                    <li>
                        <a href=\"{{ path('tags') }}\"><i class=\"ri-circle-fill circle-icon text-[#8252e9] w-auto\"></i> Tags</a>
                    </li>
                    <li>
                        <a href=\"{{ path('lists') }}\"><i class=\"ri-circle-fill circle-icon text-[#e30a0a] w-auto\"></i> List</a>
                    </li>
                    <li>
                        <a href=\"{{ path('calendar') }}\"><i class=\"ri-circle-fill circle-icon text-yellow-400 w-auto\"></i> Calendar</a>
                    </li>
                    <li>
                        <a href=\"{{ path('radio') }}\"><i class=\"ri-circle-fill circle-icon text-orange-500 w-auto\"></i> Radio</a>
                    </li>
                    <li>
                        <a href=\"{{ path('switch') }}\"><i class=\"ri-circle-fill circle-icon text-pink-600 w-auto\"></i> Switch</a>
                    </li>
                    <li>
                        <a href=\"{{ path('imageUpload') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Upload</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"heroicons:document\" class=\"menu-icon\"></iconify-icon>
                    <span>Forms</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('form') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Input Forms</a>
                    </li>
                    <li>
                        <a href=\"{{ path('formLayout') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Input Layout</a>
                    </li>
                    <li>
                        <a href=\"{{ path('formValidation') }}\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Form Validation</a>
                    </li>
                    <li>
                        <a href=\"{{ path('wizard') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Form Wizard</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"mingcute:storage-line\" class=\"menu-icon\"></iconify-icon>
                    <span>Table</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('tableBasic') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Basic Table</a>
                    </li>
                    <li>
                        <a href=\"{{ path('tableData') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Data Table</a>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"solar:pie-chart-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Chart</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('lineChart') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Line Chart</a>
                    </li>
                    <li>
                        <a href=\"{{ path('columnChart') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Column Chart</a>
                    </li>
                    <li>
                        <a href=\"{{ path('pieChart') }}\"><i class=\"ri-circle-fill circle-icon text-success-600 w-auto\"></i> Pie Chart</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"{{ path('widgets') }}\">
                    <iconify-icon icon=\"fe:vector\" class=\"menu-icon\"></iconify-icon>
                    <span>Widgets</span>
                </a>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"flowbite:users-group-outline\" class=\"menu-icon\"></iconify-icon>
                    <span>Users</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('usersList') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Users List</a>
                    </li>
                    <li>
                        <a href=\"{{ path('usersGrid') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Users Grid</a>
                    </li>
                    <li>
                        <a href=\"{{ path('addUser') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Add User</a>
                    </li>
                    <li>
                        <a href=\"{{ path('viewProfile') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> View Profile</a>
                    </li>
                </ul>
            </li>

            <li class=\"sidebar-menu-group-title\">Application</li>

            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"simple-line-icons:vector\" class=\"menu-icon\"></iconify-icon>
                    <span>Authentication</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('signin') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Sign In</a>
                    </li>
                    <li>
                        <a href=\"{{ path('signup') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Sign Up</a>
                    </li>
                    <li>
                        <a href=\"{{ path('forgotPassword') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Forgot Password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"{{ path('gallery') }}\">
                    <iconify-icon icon=\"solar:gallery-wide-linear\" class=\"menu-icon\"></iconify-icon>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('pricing') }}\">
                    <iconify-icon icon=\"hugeicons:money-send-square\" class=\"menu-icon\"></iconify-icon>
                    <span>Pricing</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('faq') }}\">
                    <iconify-icon icon=\"mage:message-question-mark-round\" class=\"menu-icon\"></iconify-icon>
                    <span>FAQs.</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('pageError') }}\">
                    <iconify-icon icon=\"streamline:straight-face\" class=\"menu-icon\"></iconify-icon>
                    <span>404</span>
                </a>
            </li>
            <li>
                <a href=\"{{ path('termsCondition') }}\">
                    <iconify-icon icon=\"octicon:info-24\" class=\"menu-icon\"></iconify-icon>
                    <span>Terms & Conditions</span>
                </a>
            </li>
            <li class=\"dropdown\">
                <a href=\"javascript:void(0)\">
                    <iconify-icon icon=\"icon-park-outline:setting-two\" class=\"menu-icon\"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class=\"sidebar-submenu\">
                    <li>
                        <a href=\"{{ path('company') }}\"><i class=\"ri-circle-fill circle-icon text-primary-600 w-auto\"></i> Company</a>
                    </li>
                    <li>
                        <a href=\"{{ path('notification') }}\"><i class=\"ri-circle-fill circle-icon text-warning-600 w-auto\"></i> Notification</a>
                    </li>
                    <li>
                        <a href=\"{{ path('notificationAlert') }}\"><i class=\"ri-circle-fill circle-icon text-info-600 w-auto\"></i> Notification Alert</a>
                    </li>
                    <li>
                        <a href=\"{{ path('theme') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Theme</a>
                    </li>
                    <li>
                        <a href=\"{{ path('currencies') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Currencies</a>
                    </li>
                    <li>
                        <a href=\"{{ path('language') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Languages</a>
                    </li>
                    <li>
                        <a href=\"{{ path('paymentGateway') }}\"><i class=\"ri-circle-fill circle-icon text-danger-600 w-auto\"></i> Payment Gateway</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>", "partials/sidebar.html.twig", "E:\\Symfony\\WowDash\\templates\\partials\\sidebar.html.twig");
    }
}
