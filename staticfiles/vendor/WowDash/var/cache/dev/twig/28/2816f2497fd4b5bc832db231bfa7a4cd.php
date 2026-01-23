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

/* partials/breadcrumb.html.twig */
class __TwigTemplate_1df1cdf6af88d2aa8e33fc40a582c7f6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/breadcrumb.html.twig"));

        // line 1
        yield "<div class=\"flex flex-wrap items-center justify-between gap-2 mb-6\">
    <h6 class=\"font-semibold mb-0 dark:text-white\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "</h6>
    <ul class=\"flex items-center gap-[6px]\">
        <li class=\"font-medium\">
            <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\" class=\"flex items-center gap-2 hover:text-primary-600 dark:text-white\">
                <iconify-icon icon=\"solar:home-smile-angle-outline\" class=\"icon text-lg\"></iconify-icon>
                Dashboard
            </a>
        </li>
        <li class=\"dark:text-white\">-</li>
        <li class=\"font-medium dark:text-white\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subTitle"]) || array_key_exists("subTitle", $context) ? $context["subTitle"] : (function () { throw new RuntimeError('Variable "subTitle" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "</li>
    </ul>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/breadcrumb.html.twig";
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
        return array (  63 => 11,  54 => 5,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"flex flex-wrap items-center justify-between gap-2 mb-6\">
    <h6 class=\"font-semibold mb-0 dark:text-white\">{{ title }}</h6>
    <ul class=\"flex items-center gap-[6px]\">
        <li class=\"font-medium\">
            <a href=\"{{ path('index') }}\" class=\"flex items-center gap-2 hover:text-primary-600 dark:text-white\">
                <iconify-icon icon=\"solar:home-smile-angle-outline\" class=\"icon text-lg\"></iconify-icon>
                Dashboard
            </a>
        </li>
        <li class=\"dark:text-white\">-</li>
        <li class=\"font-medium dark:text-white\">{{ subTitle }}</li>
    </ul>
</div>", "partials/breadcrumb.html.twig", "E:\\Symfony\\WowDash\\templates\\partials\\breadcrumb.html.twig");
    }
}
