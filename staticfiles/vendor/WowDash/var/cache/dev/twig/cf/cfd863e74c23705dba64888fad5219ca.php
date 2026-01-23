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

/* authentication/signin.html.twig */
class __TwigTemplate_c4461f4323c3f4a8f042ffceba15a446 extends Template
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
            'head' => [$this, 'block_head'],
            'script' => [$this, 'block_script'],
            'custom_script' => [$this, 'block_custom_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentication/signin.html.twig"));

        // line 1
        yield "<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">

";
        // line 5
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 8
        yield "
<body class=\"dark:bg-neutral-800 bg-neutral-100 dark:text-white\">

    <section class=\"bg-white dark:bg-dark-2 flex flex-wrap min-h-[100vh]\">
        <div class=\"lg:w-1/2 lg:block hidden\">
            <div class=\"flex items-center flex-col h-full justify-center\">
                <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/auth/auth-img.png"), "html", null, true);
        yield "\" alt=\"\">
            </div>
        </div>
        <div class=\"lg:w-1/2 py-8 px-6 flex flex-col justify-center\">
            <div class=\"lg:max-w-[464px] mx-auto w-full\">
                <div>
                    <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\" class=\"mb-2.5 max-w-[290px]\">
                        <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" alt=\"\">
                    </a>
                    <h4 class=\"mb-3\">Sign In to your Account</h4>
                    <p class=\"mb-8 text-secondary-light text-lg\">Welcome back! please enter your detail</p>
                </div>
                <form action=\"#\">
                    <div class=\"icon-field mb-4 relative\">
                        <span class=\"absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl\">
                            <iconify-icon icon=\"mage:email\"></iconify-icon>
                        </span>
                        <input type=\"email\" class=\"form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-dark-2 rounded-xl\" placeholder=\"Email\">
                    </div>
                    <div class=\"relative mb-5\">
                        <div class=\"icon-field\">
                            <span class=\"absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl\">
                                <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                            </span>
                            <input type=\"password\" class=\"form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-dark-2 rounded-xl\" id=\"your-password\" placeholder=\"Password\">
                        </div>
                        <span class=\"toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light\" data-toggle=\"#your-password\"></span>
                    </div>
                    <div class=\"mt-7\">
                        <div class=\"flex justify-between gap-2\">
                            <div class=\"flex items-center\">
                                <input class=\"form-check-input border border-neutral-300\" type=\"checkbox\" value=\"\" id=\"remeber\">
                                <label class=\"ps-2\" for=\"remeber\">Remember me </label>
                            </div>
                            <a href=\"javascript:void(0)\" class=\"text-primary-600 font-medium hover:underline\">Forgot Password?</a>
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl mt-8\"> Sign In</button>

                    <div class=\"mt-8 center-border-horizontal text-center relative before:absolute before:w-full before:h-[1px] before:top-1/2 before:-translate-y-1/2 before:bg-neutral-300 before:start-0\">
                        <span class=\"bg-white dark:bg-dark-2 z-[2] relative px-4\">Or sign in with</span>
                    </div>
                    <div class=\"mt-8 flex items-center gap-3\">
                        <button type=\"button\" class=\"font-semibold text-neutral-600 dark:text-neutral-200 py-4 px-6 w-1/2 border rounded-xl text-base flex items-center justify-center gap-3 line-height-1 hover:bg-primary-50\">
                            <iconify-icon icon=\"ic:baseline-facebook\" class=\"text-primary-600 text-xl line-height-1\"></iconify-icon>
                            Google
                        </button>
                        <button type=\"button\" class=\"font-semibold text-neutral-600 dark:text-neutral-200 py-4 px-6 w-1/2 border rounded-xl text-base flex items-center justify-center gap-3 line-height-1 hover:bg-primary-50\">
                            <iconify-icon icon=\"logos:google-icon\" class=\"text-primary-600 text-xl line-height-1\"></iconify-icon>
                            Google
                        </button>
                    </div>
                    <div class=\"mt-8 text-center text-sm\">
                        <p class=\"mb-0\">Don't have an account? <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        yield "\" class=\"text-primary-600 font-semibold hover:underline\">Sign Up</a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>

    ";
        // line 76
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 79
        yield "
    ";
        // line 80
        yield from $this->unwrap()->yieldBlock('custom_script', $context, $blocks);
        // line 99
        yield "
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield from $this->loadTemplate("partials/head.html.twig", "authentication/signin.html.twig", 6)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 77
        yield "    ";
        yield from $this->loadTemplate("partials/script.html.twig", "authentication/signin.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_script"));

        // line 81
        yield "        <script>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "authentication/signin.html.twig";
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
        return array (  205 => 81,  195 => 80,  187 => 78,  184 => 77,  174 => 76,  166 => 6,  156 => 5,  145 => 99,  143 => 80,  140 => 79,  138 => 76,  127 => 68,  77 => 21,  73 => 20,  64 => 14,  56 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">

{% block head %}
{% include 'partials/head.html.twig' %}
{% endblock head %}

<body class=\"dark:bg-neutral-800 bg-neutral-100 dark:text-white\">

    <section class=\"bg-white dark:bg-dark-2 flex flex-wrap min-h-[100vh]\">
        <div class=\"lg:w-1/2 lg:block hidden\">
            <div class=\"flex items-center flex-col h-full justify-center\">
                <img src=\"{{ asset('assets/images/auth/auth-img.png') }}\" alt=\"\">
            </div>
        </div>
        <div class=\"lg:w-1/2 py-8 px-6 flex flex-col justify-center\">
            <div class=\"lg:max-w-[464px] mx-auto w-full\">
                <div>
                    <a href=\"{{ path('index') }}\" class=\"mb-2.5 max-w-[290px]\">
                        <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"\">
                    </a>
                    <h4 class=\"mb-3\">Sign In to your Account</h4>
                    <p class=\"mb-8 text-secondary-light text-lg\">Welcome back! please enter your detail</p>
                </div>
                <form action=\"#\">
                    <div class=\"icon-field mb-4 relative\">
                        <span class=\"absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl\">
                            <iconify-icon icon=\"mage:email\"></iconify-icon>
                        </span>
                        <input type=\"email\" class=\"form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-dark-2 rounded-xl\" placeholder=\"Email\">
                    </div>
                    <div class=\"relative mb-5\">
                        <div class=\"icon-field\">
                            <span class=\"absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl\">
                                <iconify-icon icon=\"solar:lock-password-outline\"></iconify-icon>
                            </span>
                            <input type=\"password\" class=\"form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-dark-2 rounded-xl\" id=\"your-password\" placeholder=\"Password\">
                        </div>
                        <span class=\"toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light\" data-toggle=\"#your-password\"></span>
                    </div>
                    <div class=\"mt-7\">
                        <div class=\"flex justify-between gap-2\">
                            <div class=\"flex items-center\">
                                <input class=\"form-check-input border border-neutral-300\" type=\"checkbox\" value=\"\" id=\"remeber\">
                                <label class=\"ps-2\" for=\"remeber\">Remember me </label>
                            </div>
                            <a href=\"javascript:void(0)\" class=\"text-primary-600 font-medium hover:underline\">Forgot Password?</a>
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl mt-8\"> Sign In</button>

                    <div class=\"mt-8 center-border-horizontal text-center relative before:absolute before:w-full before:h-[1px] before:top-1/2 before:-translate-y-1/2 before:bg-neutral-300 before:start-0\">
                        <span class=\"bg-white dark:bg-dark-2 z-[2] relative px-4\">Or sign in with</span>
                    </div>
                    <div class=\"mt-8 flex items-center gap-3\">
                        <button type=\"button\" class=\"font-semibold text-neutral-600 dark:text-neutral-200 py-4 px-6 w-1/2 border rounded-xl text-base flex items-center justify-center gap-3 line-height-1 hover:bg-primary-50\">
                            <iconify-icon icon=\"ic:baseline-facebook\" class=\"text-primary-600 text-xl line-height-1\"></iconify-icon>
                            Google
                        </button>
                        <button type=\"button\" class=\"font-semibold text-neutral-600 dark:text-neutral-200 py-4 px-6 w-1/2 border rounded-xl text-base flex items-center justify-center gap-3 line-height-1 hover:bg-primary-50\">
                            <iconify-icon icon=\"logos:google-icon\" class=\"text-primary-600 text-xl line-height-1\"></iconify-icon>
                            Google
                        </button>
                    </div>
                    <div class=\"mt-8 text-center text-sm\">
                        <p class=\"mb-0\">Don't have an account? <a href=\"{{ path('signup') }}\" class=\"text-primary-600 font-semibold hover:underline\">Sign Up</a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>

    {% block script %}
    {% include 'partials/script.html.twig' %}
    {% endblock script %}

    {% block custom_script %}
        <script>
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

</body>
</html>
", "authentication/signin.html.twig", "E:\\Symfony\\WowDash\\templates\\authentication\\signin.html.twig");
    }
}
