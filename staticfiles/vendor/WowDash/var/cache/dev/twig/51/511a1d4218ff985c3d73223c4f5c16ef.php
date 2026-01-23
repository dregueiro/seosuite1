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

/* users/addUser.html.twig */
class __TwigTemplate_c5aa4bf41a0c78d8765325c0c8ff75ba extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/addUser.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "users/addUser.html.twig", 1);
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
                    // ================== Image Upload Js Start ===========================
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
                    // ================== Image Upload Js End ===========================
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 25
        yield "    <div class=\"card h-full p-0 rounded-xl border-0 overflow-hidden\">
        <div class=\"card-body p-6\">
            <div class=\"grid grid-cols-1 lg:grid-cols-12 justify-center\">
                <div class=\"col-span-12 lg:col-span-10 xl:col-span-8 2xl:col-span-6 2xl:col-start-4\">
                    <div class=\"card border border-neutral-200 dark:border-neutral-600\">
                        <div class=\"card-body\">
                            <h6 class=\"text-base text-neutral-600 dark:text-neutral-200 mb-4\">Profile Image</h6>

                            <!-- Upload Image Start -->
                            <div class=\"mb-6 mt-4\">
                                <div class=\"avatar-upload\">
                                    <div class=\"avatar-edit absolute bottom-0 end-0 me-6 mt-4 z-[1] cursor-pointer \">
                                        <input type='file' id=\"imageUpload\" accept=\".png, .jpg, .jpeg\" hidden>
                                        <label for=\"imageUpload\" class=\"w-8 h-8 flex justify-center items-center bg-primary-50 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border border-primary-600 hover:bg-primary-100 text-lg rounded-full\">
                                            <iconify-icon icon=\"solar:camera-outline\" class=\"icon\"></iconify-icon>
                                        </label>
                                    </div>
                                    <div class=\"avatar-preview\">
                                        <div id=\"imagePreview\"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Upload Image End -->

                            <form action=\"#\">
                                <div class=\"mb-5\">
                                    <label for=\"name\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Full Name <span class=\"text-danger-600\">*</span></label>
                                    <input type=\"text\" class=\"form-control rounded-lg\" id=\"name\" placeholder=\"Enter Full Name\">
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"email\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Email <span class=\"text-danger-600\">*</span></label>
                                    <input type=\"email\" class=\"form-control rounded-lg\" id=\"email\" placeholder=\"Enter email address\">
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"number\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Phone</label>
                                    <input type=\"email\" class=\"form-control rounded-lg\" id=\"number\" placeholder=\"Enter phone number\">
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"depart\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Department <span class=\"text-danger-600\">*</span> </label>
                                    <select class=\"form-control rounded-lg form-select\" id=\"depart\">
                                        <option>Enter Event Title </option>
                                        <option>Enter Event Title One </option>
                                        <option>Enter Event Title Two</option>
                                    </select>
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"desig\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Designation <span class=\"text-danger-600\">*</span> </label>
                                    <select class=\"form-control rounded-lg form-select\" id=\"desig\">
                                        <option>Enter Designation Title </option>
                                        <option>Enter Designation Title One </option>
                                        <option>Enter Designation Title Two</option>
                                    </select>
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"desc\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Description</label>
                                    <textarea name=\"#0\" class=\"form-control rounded-lg\" id=\"desc\" placeholder=\"Write description...\"></textarea>
                                </div>
                                <div class=\"flex items-center justify-center gap-3\">
                                    <button type=\"button\" class=\"border border-danger-600 bg-hover-danger-200 text-danger-600 text-base px-14 py-[11px] rounded-lg\">
                                        Cancel
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-primary border border-primary-600 text-base px-14 py-3 rounded-lg\">
                                        Save
                                    </button>
                                </div>
                            </form>
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
        return "users/addUser.html.twig";
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
        return array (  104 => 25,  94 => 24,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script %}
            <script>
                    // ================== Image Upload Js Start ===========================
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
                    // ================== Image Upload Js End ===========================
            </script>
        {% endblock custom_script %}

{% block content %}
    <div class=\"card h-full p-0 rounded-xl border-0 overflow-hidden\">
        <div class=\"card-body p-6\">
            <div class=\"grid grid-cols-1 lg:grid-cols-12 justify-center\">
                <div class=\"col-span-12 lg:col-span-10 xl:col-span-8 2xl:col-span-6 2xl:col-start-4\">
                    <div class=\"card border border-neutral-200 dark:border-neutral-600\">
                        <div class=\"card-body\">
                            <h6 class=\"text-base text-neutral-600 dark:text-neutral-200 mb-4\">Profile Image</h6>

                            <!-- Upload Image Start -->
                            <div class=\"mb-6 mt-4\">
                                <div class=\"avatar-upload\">
                                    <div class=\"avatar-edit absolute bottom-0 end-0 me-6 mt-4 z-[1] cursor-pointer \">
                                        <input type='file' id=\"imageUpload\" accept=\".png, .jpg, .jpeg\" hidden>
                                        <label for=\"imageUpload\" class=\"w-8 h-8 flex justify-center items-center bg-primary-50 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border border-primary-600 hover:bg-primary-100 text-lg rounded-full\">
                                            <iconify-icon icon=\"solar:camera-outline\" class=\"icon\"></iconify-icon>
                                        </label>
                                    </div>
                                    <div class=\"avatar-preview\">
                                        <div id=\"imagePreview\"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Upload Image End -->

                            <form action=\"#\">
                                <div class=\"mb-5\">
                                    <label for=\"name\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Full Name <span class=\"text-danger-600\">*</span></label>
                                    <input type=\"text\" class=\"form-control rounded-lg\" id=\"name\" placeholder=\"Enter Full Name\">
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"email\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Email <span class=\"text-danger-600\">*</span></label>
                                    <input type=\"email\" class=\"form-control rounded-lg\" id=\"email\" placeholder=\"Enter email address\">
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"number\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Phone</label>
                                    <input type=\"email\" class=\"form-control rounded-lg\" id=\"number\" placeholder=\"Enter phone number\">
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"depart\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Department <span class=\"text-danger-600\">*</span> </label>
                                    <select class=\"form-control rounded-lg form-select\" id=\"depart\">
                                        <option>Enter Event Title </option>
                                        <option>Enter Event Title One </option>
                                        <option>Enter Event Title Two</option>
                                    </select>
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"desig\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Designation <span class=\"text-danger-600\">*</span> </label>
                                    <select class=\"form-control rounded-lg form-select\" id=\"desig\">
                                        <option>Enter Designation Title </option>
                                        <option>Enter Designation Title One </option>
                                        <option>Enter Designation Title Two</option>
                                    </select>
                                </div>
                                <div class=\"mb-5\">
                                    <label for=\"desc\" class=\"inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2\">Description</label>
                                    <textarea name=\"#0\" class=\"form-control rounded-lg\" id=\"desc\" placeholder=\"Write description...\"></textarea>
                                </div>
                                <div class=\"flex items-center justify-center gap-3\">
                                    <button type=\"button\" class=\"border border-danger-600 bg-hover-danger-200 text-danger-600 text-base px-14 py-[11px] rounded-lg\">
                                        Cancel
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-primary border border-primary-600 text-base px-14 py-3 rounded-lg\">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "users/addUser.html.twig", "E:\\Symfony\\WowDash\\templates\\users\\addUser.html.twig");
    }
}
