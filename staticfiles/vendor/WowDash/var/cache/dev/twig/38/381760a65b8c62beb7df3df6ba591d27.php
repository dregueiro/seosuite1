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

/* users/viewProfile.html.twig */
class __TwigTemplate_d37825830da969328bc35426a0b672b3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/viewProfile.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "users/viewProfile.html.twig", 1);
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
        yield "            <script>
                    // ======================== Upload Image Start =====================
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                \$(\"#imagePreview\").css(\"background-image\", \"url(\" + e.target.result + \")\");
                                \$(\"#imagePreview\").hide();
                                \$(\"#imagePreview\").fadeIn(650);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    \$(\"#imageUpload\").change(function() {
                        readURL(this);
                    });
                    // ======================== Upload Image End =====================

                    // ================== Password Show Hide Js Start ==========
                    function initializePasswordToggle(toggleSelector) {
                        \$(toggleSelector).on(\"click\", function() {
                            \$(this).toggleClass(\"ri-eye-off-line\");
                            var input = \$(\$(this).attr(\"data-toggle\"));
                            if (input.attr(\"type\") === \"password\") {
                                input.attr(\"type\", \"text\");
                            } else {
                                input.attr(\"type\", \"password\");
                            }
                        });
                    }
                    // Call the function
                    initializePasswordToggle(\".toggle-password\");
                    // ========================= Password Show Hide Js End ===========================
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 41
        yield "    <div class=\"grid grid-cols-1 lg:grid-cols-12 gap-6\">
        <div class=\"col-span-12 lg:col-span-4\">
            <div class=\"user-grid-card relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden bg-white dark:bg-neutral-700 h-full\">
                <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-bg1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full object-fit-cover\">
                <div class=\"pb-6 ms-6 mb-6 me-6 -mt-[100px]\">
                    <div class=\"text-center border-b border-neutral-200 dark:border-neutral-600\">
                        <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/user-grid/user-grid-img14.png"), "html", null, true);
        yield "\" alt=\"\" class=\"border br-white border-width-2-px w-200-px h-[200px] rounded-full object-fit-cover mx-auto\">
                        <h6 class=\"mb-0 mt-4\">Jacob Jones</h6>
                        <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>
                    </div>
                    <div class=\"mt-6\">
                        <h6 class=\"text-xl mb-4\">Personal Info</h6>
                        <ul>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\">Full Name</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: Will Jonto</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Email</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: willjontoax@gmail.com</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Phone Number</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: (1) 2536 2561 2365</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Department</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: Design</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Designation</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: UI UX Designer</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Languages</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: English</span>
                            </li>
                            <li class=\"flex items-center gap-1\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Bio</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: Lorem Ipsum is simply dummy text of the       printing and typesetting industry.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 lg:col-span-8\">
            <div class=\"card h-full border-0\">
                <div class=\"card-body p-6\">

                    <ul class=\"tab-style-gradient flex flex-wrap text-sm font-medium text-center mb-5\" id=\"default-tab\" data-tabs-toggle=\"#default-tab-content\" role=\"tablist\">
                        <li class=\"\" role=\"presentation\">
                            <button class=\"py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600\" id=\"edit-profile-tab\" data-tabs-target=\"#edit-profile\" type=\"button\" role=\"tab\" aria-controls=\"edit-profile\" aria-selected=\"false\">
                                Edit Profile
                            </button>
                        </li>
                        <li class=\"\" role=\"presentation\">
                            <button class=\"py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"change-password-tab\" data-tabs-target=\"#change-password\" type=\"button\" role=\"tab\" aria-controls=\"change-password\" aria-selected=\"false\">
                                Change Password
                            </button>
                        </li>
                        <li class=\"\" role=\"presentation\">
                            <button class=\"py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"notification-password-tab\" data-tabs-target=\"#notification-password\" type=\"button\" role=\"tab\" aria-controls=\"notification-password\" aria-selected=\"false\">
                                Notification Password
                            </button>
                        </li>
                    </ul>

                    <div id=\"default-tab-content\">
                        <div class=\"hidden\" id=\"edit-profile\" role=\"tabpanel\" aria-labelledby=\"edit-profile-tab\">
                            <h6 class=\"text-base text-neutral-600 dark:text-neutral-200 mb-4\">Profile Image</h6>
                            <!-- Upload Image Start -->
                            <div class=\"mb-6 mt-4\">
                                <div class=\"avatar-upload\">
                                    <div class=\"avatar-edit absolute bottom-0 end-0 me-6 mt-4 z-[1] cursor-pointer\">
                                        <input type='file' id=\"imageUpload\" accept=\".png, .jpg, .jpeg\" hidden>
                                        <label for=\"imageUpload\" class=\"w-8 h-8 flex justify-center items-center bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border border-primary-600 hover:bg-primary-100 text-lg rounded-full\">
                                            <iconify-icon icon=\"solar:camera-outline\" class=\"icon\"></iconify-icon>
                                        </label>
                                    </div>
                                    <div class=\"avatar-preview\">
                                        <div id=\"imagePreview\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Upload Image End -->
                            <form action=\"#\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-12 gap-x-6\">
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"name\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Full Name <span class=\"text-danger-600\">*</span></label>
                                            <input type=\"text\" class=\"form-control rounded-lg\" id=\"name\" placeholder=\"Enter Full Name\">
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"email\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Email <span class=\"text-danger-600\">*</span></label>
                                            <input type=\"email\" class=\"form-control rounded-lg\" id=\"email\" placeholder=\"Enter email address\">
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"number\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Phone</label>
                                            <input type=\"email\" class=\"form-control rounded-lg\" id=\"number\" placeholder=\"Enter phone number\">
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"depart\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Department <span class=\"text-danger-600\">*</span> </label>
                                            <select class=\"form-control rounded-lg form-select\" id=\"depart\">
                                                <option>Enter Event Title </option>
                                                <option>Enter Event Title One </option>
                                                <option>Enter Event Title Two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"desig\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Designation <span class=\"text-danger-600\">*</span> </label>
                                            <select class=\"form-control rounded-lg form-select\" id=\"desig\">
                                                <option>Enter Designation Title </option>
                                                <option>Enter Designation Title One </option>
                                                <option>Enter Designation Title Two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"Language\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Language <span class=\"text-danger-600\">*</span> </label>
                                            <select class=\"form-control rounded-lg form-select\" id=\"Language\">
                                                <option> English</option>
                                                <option> Bangla </option>
                                                <option> Hindi</option>
                                                <option> Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-span-12\">
                                        <div class=\"mb-5\">
                                            <label for=\"desc\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Description</label>
                                            <textarea name=\"#0\" class=\"form-control rounded-lg\" id=\"desc\" placeholder=\"Write description...\"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"flex items-center justify-center gap-3\">
                                    <button type=\"button\" class=\"border border-danger-600 bg-hover-danger-200 text-danger-600 text-base px-14 py-[11px] rounded-lg\">
                                        Cancel
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary border border-primary-600 text-base px-14 py-3 rounded-lg\">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class=\"hidden\" id=\"change-password\" role=\"tabpanel\" aria-labelledby=\"change-password-tab\">
                            <div class=\"mb-5\">
                                <label for=\"your-password\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">New Password <span class=\"text-danger-600\">*</span></label>
                                <div class=\"relative\">
                                    <input type=\"password\" class=\"form-control rounded-lg\" id=\"your-password\" placeholder=\"Enter New Password*\">
                                    <span class=\"toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light\" data-toggle=\"#your-password\"></span>
                                </div>
                            </div>
                            <div class=\"mb-5\">
                                <label for=\"confirm-password\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Confirmed Password <span class=\"text-danger-600\">*</span></label>
                                <div class=\"relative\">
                                    <input type=\"password\" class=\"form-control rounded-lg\" id=\"confirm-password\" placeholder=\"Confirm Password*\">
                                    <span class=\"toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light\" data-toggle=\"#confirm-password\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"hidden\" id=\"notification-password\" role=\"tabpanel\" aria-labelledby=\"notification-password-tab\">
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"companzNew\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Company News</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"companzNew\">
                                </div>
                            </div>
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"pushNotifcation\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Push Notification</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"pushNotifcation\" checked>
                                </div>
                            </div>
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"weeklyLetters\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Weekly News Letters</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"weeklyLetters\" checked>
                                </div>
                            </div>
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"meetUp\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Meetups Near you</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"meetUp\">
                                </div>
                            </div>
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"orderNotification\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Orders Notifications</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"orderNotification\" checked>
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
        return "users/viewProfile.html.twig";
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
        return array (  131 => 47,  125 => 44,  120 => 41,  110 => 40,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script %}
            <script>
                    // ======================== Upload Image Start =====================
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                \$(\"#imagePreview\").css(\"background-image\", \"url(\" + e.target.result + \")\");
                                \$(\"#imagePreview\").hide();
                                \$(\"#imagePreview\").fadeIn(650);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    \$(\"#imageUpload\").change(function() {
                        readURL(this);
                    });
                    // ======================== Upload Image End =====================

                    // ================== Password Show Hide Js Start ==========
                    function initializePasswordToggle(toggleSelector) {
                        \$(toggleSelector).on(\"click\", function() {
                            \$(this).toggleClass(\"ri-eye-off-line\");
                            var input = \$(\$(this).attr(\"data-toggle\"));
                            if (input.attr(\"type\") === \"password\") {
                                input.attr(\"type\", \"text\");
                            } else {
                                input.attr(\"type\", \"password\");
                            }
                        });
                    }
                    // Call the function
                    initializePasswordToggle(\".toggle-password\");
                    // ========================= Password Show Hide Js End ===========================
            </script>
        {% endblock custom_script %}

{% block content %}
    <div class=\"grid grid-cols-1 lg:grid-cols-12 gap-6\">
        <div class=\"col-span-12 lg:col-span-4\">
            <div class=\"user-grid-card relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden bg-white dark:bg-neutral-700 h-full\">
                <img src=\"{{ asset('assets/images/user-grid/user-grid-bg1.png') }}\" alt=\"\" class=\"w-full object-fit-cover\">
                <div class=\"pb-6 ms-6 mb-6 me-6 -mt-[100px]\">
                    <div class=\"text-center border-b border-neutral-200 dark:border-neutral-600\">
                        <img src=\"{{ asset('assets/images/user-grid/user-grid-img14.png') }}\" alt=\"\" class=\"border br-white border-width-2-px w-200-px h-[200px] rounded-full object-fit-cover mx-auto\">
                        <h6 class=\"mb-0 mt-4\">Jacob Jones</h6>
                        <span class=\"text-secondary-light mb-4\">ifrandom@gmail.com</span>
                    </div>
                    <div class=\"mt-6\">
                        <h6 class=\"text-xl mb-4\">Personal Info</h6>
                        <ul>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\">Full Name</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: Will Jonto</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Email</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: willjontoax@gmail.com</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Phone Number</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: (1) 2536 2561 2365</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Department</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: Design</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Designation</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: UI UX Designer</span>
                            </li>
                            <li class=\"flex items-center gap-1 mb-3\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Languages</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: English</span>
                            </li>
                            <li class=\"flex items-center gap-1\">
                                <span class=\"w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200\"> Bio</span>
                                <span class=\"w-[70%] text-secondary-light font-medium\">: Lorem Ipsum is simply dummy text of the       printing and typesetting industry.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 lg:col-span-8\">
            <div class=\"card h-full border-0\">
                <div class=\"card-body p-6\">

                    <ul class=\"tab-style-gradient flex flex-wrap text-sm font-medium text-center mb-5\" id=\"default-tab\" data-tabs-toggle=\"#default-tab-content\" role=\"tablist\">
                        <li class=\"\" role=\"presentation\">
                            <button class=\"py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600\" id=\"edit-profile-tab\" data-tabs-target=\"#edit-profile\" type=\"button\" role=\"tab\" aria-controls=\"edit-profile\" aria-selected=\"false\">
                                Edit Profile
                            </button>
                        </li>
                        <li class=\"\" role=\"presentation\">
                            <button class=\"py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"change-password-tab\" data-tabs-target=\"#change-password\" type=\"button\" role=\"tab\" aria-controls=\"change-password\" aria-selected=\"false\">
                                Change Password
                            </button>
                        </li>
                        <li class=\"\" role=\"presentation\">
                            <button class=\"py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" id=\"notification-password-tab\" data-tabs-target=\"#notification-password\" type=\"button\" role=\"tab\" aria-controls=\"notification-password\" aria-selected=\"false\">
                                Notification Password
                            </button>
                        </li>
                    </ul>

                    <div id=\"default-tab-content\">
                        <div class=\"hidden\" id=\"edit-profile\" role=\"tabpanel\" aria-labelledby=\"edit-profile-tab\">
                            <h6 class=\"text-base text-neutral-600 dark:text-neutral-200 mb-4\">Profile Image</h6>
                            <!-- Upload Image Start -->
                            <div class=\"mb-6 mt-4\">
                                <div class=\"avatar-upload\">
                                    <div class=\"avatar-edit absolute bottom-0 end-0 me-6 mt-4 z-[1] cursor-pointer\">
                                        <input type='file' id=\"imageUpload\" accept=\".png, .jpg, .jpeg\" hidden>
                                        <label for=\"imageUpload\" class=\"w-8 h-8 flex justify-center items-center bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border border-primary-600 hover:bg-primary-100 text-lg rounded-full\">
                                            <iconify-icon icon=\"solar:camera-outline\" class=\"icon\"></iconify-icon>
                                        </label>
                                    </div>
                                    <div class=\"avatar-preview\">
                                        <div id=\"imagePreview\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Upload Image End -->
                            <form action=\"#\">
                                <div class=\"grid grid-cols-1 sm:grid-cols-12 gap-x-6\">
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"name\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Full Name <span class=\"text-danger-600\">*</span></label>
                                            <input type=\"text\" class=\"form-control rounded-lg\" id=\"name\" placeholder=\"Enter Full Name\">
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"email\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Email <span class=\"text-danger-600\">*</span></label>
                                            <input type=\"email\" class=\"form-control rounded-lg\" id=\"email\" placeholder=\"Enter email address\">
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"number\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Phone</label>
                                            <input type=\"email\" class=\"form-control rounded-lg\" id=\"number\" placeholder=\"Enter phone number\">
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"depart\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Department <span class=\"text-danger-600\">*</span> </label>
                                            <select class=\"form-control rounded-lg form-select\" id=\"depart\">
                                                <option>Enter Event Title </option>
                                                <option>Enter Event Title One </option>
                                                <option>Enter Event Title Two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"desig\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Designation <span class=\"text-danger-600\">*</span> </label>
                                            <select class=\"form-control rounded-lg form-select\" id=\"desig\">
                                                <option>Enter Designation Title </option>
                                                <option>Enter Designation Title One </option>
                                                <option>Enter Designation Title Two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-span-12 sm:col-span-6\">
                                        <div class=\"mb-5\">
                                            <label for=\"Language\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Language <span class=\"text-danger-600\">*</span> </label>
                                            <select class=\"form-control rounded-lg form-select\" id=\"Language\">
                                                <option> English</option>
                                                <option> Bangla </option>
                                                <option> Hindi</option>
                                                <option> Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-span-12\">
                                        <div class=\"mb-5\">
                                            <label for=\"desc\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Description</label>
                                            <textarea name=\"#0\" class=\"form-control rounded-lg\" id=\"desc\" placeholder=\"Write description...\"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"flex items-center justify-center gap-3\">
                                    <button type=\"button\" class=\"border border-danger-600 bg-hover-danger-200 text-danger-600 text-base px-14 py-[11px] rounded-lg\">
                                        Cancel
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary border border-primary-600 text-base px-14 py-3 rounded-lg\">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class=\"hidden\" id=\"change-password\" role=\"tabpanel\" aria-labelledby=\"change-password-tab\">
                            <div class=\"mb-5\">
                                <label for=\"your-password\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">New Password <span class=\"text-danger-600\">*</span></label>
                                <div class=\"relative\">
                                    <input type=\"password\" class=\"form-control rounded-lg\" id=\"your-password\" placeholder=\"Enter New Password*\">
                                    <span class=\"toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light\" data-toggle=\"#your-password\"></span>
                                </div>
                            </div>
                            <div class=\"mb-5\">
                                <label for=\"confirm-password\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Confirmed Password <span class=\"text-danger-600\">*</span></label>
                                <div class=\"relative\">
                                    <input type=\"password\" class=\"form-control rounded-lg\" id=\"confirm-password\" placeholder=\"Confirm Password*\">
                                    <span class=\"toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light\" data-toggle=\"#confirm-password\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"hidden\" id=\"notification-password\" role=\"tabpanel\" aria-labelledby=\"notification-password-tab\">
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"companzNew\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Company News</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"companzNew\">
                                </div>
                            </div>
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"pushNotifcation\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Push Notification</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"pushNotifcation\" checked>
                                </div>
                            </div>
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"weeklyLetters\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Weekly News Letters</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"weeklyLetters\" checked>
                                </div>
                            </div>
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"meetUp\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Meetups Near you</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"meetUp\">
                                </div>
                            </div>
                            <div class=\"form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4\">
                                <label for=\"orderNotification\" class=\"absolute w-full h-full start-0 top-0\"></label>
                                <div class=\"flex items-center gap-3 justify-between\">
                                    <span class=\"form-check-label line-height-1 font-medium text-secondary-light\">Orders Notifications</span>
                                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"orderNotification\" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "users/viewProfile.html.twig", "E:\\Symfony\\WowDash\\templates\\users\\viewProfile.html.twig");
    }
}
