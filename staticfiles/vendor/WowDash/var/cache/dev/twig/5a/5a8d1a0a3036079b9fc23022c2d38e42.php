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

/* authentication/forgotPassword.html.twig */
class __TwigTemplate_a4dbf1fd30339f951ad74a48aac3bb71 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentication/forgotPassword.html.twig"));

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

    <section class=\"bg-white dark:bg-neutral-700 flex flex-wrap min-h-[100vh]\">
        <div class=\"lg:w-1/2 lg:block hidden\">
            <div class=\"flex items-center flex-col h-full justify-center\">
                <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/auth/forgot-pass-img.png"), "html", null, true);
        yield "\" alt=\"\">
            </div>
        </div>
        <div class=\"lg:w-1/2 py-8 px-6 flex flex-col justify-center\">
            <div class=\"lg:max-w-[464px] mx-auto w-full\">
                <div>
                    <h4 class=\"mb-3\">Forgot Password</h4>
                    <p class=\"mb-8 text-secondary-light text-lg\">Enter the email address associated with your account and we will send you a link to reset your password.</p>
                </div>
                <form action=\"#\">
                    <div class=\"icon-field mb-6 relative\">
                        <span class=\"absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl\">
                            <iconify-icon icon=\"mage:email\"></iconify-icon>
                        </span>
                        <input type=\"email\" class=\"form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-neutral-600 rounded-xl\" placeholder=\"Email\">
                    </div>
                    <button type=\"button\" data-modal-target=\"popup-modal\" data-modal-toggle=\"popup-modal\" class=\"btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl\"> Continue</button>

                    <div class=\"text-center\">
                        <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        yield "\" class=\"text-primary-600 font-bold mt-6 hover:underline\">Back to Sign In</a>
                    </div>

                    <div class=\"mt-10 md:mt-[60px] lg:mt-[100px] xl:mt-[120px] text-center text-sm\">
                        <p class=\"mb-0\">Already have an account?  <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        yield "\" class=\"text-primary-600 font-semibold hover:underline\">Sign In</a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>

    ";
        // line 45
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 48
        yield "
    <div id=\"popup-modal\" tabindex=\"-1\" class=\"hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full\">
        <div class=\"relative p-10 w-full max-w-[496px] max-h-full rounded-2xl bg-white dark:bg-neutral-700\">
            <button type=\"button\" class=\"absolute top-4 end-4 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white\" data-modal-hide=\"popup-modal\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 14\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6\" />
                </svg>
                <span class=\"sr-only\">Close modal</span>
            </button>
            <div class=\"p-2.5 text-center\">
                <div class=\"mb-8 inline-flex\">
                    <img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/auth/envelop-icon.png"), "html", null, true);
        yield "\" alt=\"\">
                </div>
                <h6 class=\"mb-3\">Verify your Email</h6>
                <p class=\"text-secondary-light text-sm mb-0\">Thank you, check your email for instructions to reset your password</p>
                <button type=\"button\" class=\"btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl mt-8\">Skip</button>
                <div class=\"mt-8 text-sm\">
                    <p class=\"mb-0\">Don't receive an email? <a href=\"javascript:void(0)\" class=\"text-primary-600 font-semibold\">Resend</a></p>
                </div>
            </div>
        </div>
    </div>

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
        yield from $this->loadTemplate("partials/head.html.twig", "authentication/forgotPassword.html.twig", 6)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 46
        yield "    ";
        yield from $this->loadTemplate("partials/script.html.twig", "authentication/forgotPassword.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "authentication/forgotPassword.html.twig";
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
        return array (  172 => 47,  169 => 46,  159 => 45,  151 => 6,  141 => 5,  118 => 59,  105 => 48,  103 => 45,  92 => 37,  85 => 33,  63 => 14,  55 => 8,  53 => 5,  47 => 1,);
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

    <section class=\"bg-white dark:bg-neutral-700 flex flex-wrap min-h-[100vh]\">
        <div class=\"lg:w-1/2 lg:block hidden\">
            <div class=\"flex items-center flex-col h-full justify-center\">
                <img src=\"{{ asset('assets/images/auth/forgot-pass-img.png') }}\" alt=\"\">
            </div>
        </div>
        <div class=\"lg:w-1/2 py-8 px-6 flex flex-col justify-center\">
            <div class=\"lg:max-w-[464px] mx-auto w-full\">
                <div>
                    <h4 class=\"mb-3\">Forgot Password</h4>
                    <p class=\"mb-8 text-secondary-light text-lg\">Enter the email address associated with your account and we will send you a link to reset your password.</p>
                </div>
                <form action=\"#\">
                    <div class=\"icon-field mb-6 relative\">
                        <span class=\"absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl\">
                            <iconify-icon icon=\"mage:email\"></iconify-icon>
                        </span>
                        <input type=\"email\" class=\"form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-neutral-600 rounded-xl\" placeholder=\"Email\">
                    </div>
                    <button type=\"button\" data-modal-target=\"popup-modal\" data-modal-toggle=\"popup-modal\" class=\"btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl\"> Continue</button>

                    <div class=\"text-center\">
                        <a href=\"{{ path('signin') }}\" class=\"text-primary-600 font-bold mt-6 hover:underline\">Back to Sign In</a>
                    </div>

                    <div class=\"mt-10 md:mt-[60px] lg:mt-[100px] xl:mt-[120px] text-center text-sm\">
                        <p class=\"mb-0\">Already have an account?  <a href=\"{{ path('signin') }}\" class=\"text-primary-600 font-semibold hover:underline\">Sign In</a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>

    {% block script %}
    {% include 'partials/script.html.twig' %}
    {% endblock script %}

    <div id=\"popup-modal\" tabindex=\"-1\" class=\"hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full\">
        <div class=\"relative p-10 w-full max-w-[496px] max-h-full rounded-2xl bg-white dark:bg-neutral-700\">
            <button type=\"button\" class=\"absolute top-4 end-4 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white\" data-modal-hide=\"popup-modal\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 14\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6\" />
                </svg>
                <span class=\"sr-only\">Close modal</span>
            </button>
            <div class=\"p-2.5 text-center\">
                <div class=\"mb-8 inline-flex\">
                    <img src=\"{{ asset('assets/images/auth/envelop-icon.png') }}\" alt=\"\">
                </div>
                <h6 class=\"mb-3\">Verify your Email</h6>
                <p class=\"text-secondary-light text-sm mb-0\">Thank you, check your email for instructions to reset your password</p>
                <button type=\"button\" class=\"btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl mt-8\">Skip</button>
                <div class=\"mt-8 text-sm\">
                    <p class=\"mb-0\">Don't receive an email? <a href=\"javascript:void(0)\" class=\"text-primary-600 font-semibold\">Resend</a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
", "authentication/forgotPassword.html.twig", "E:\\Symfony\\WowDash\\templates\\authentication\\forgotPassword.html.twig");
    }
}
