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

/* ./layout/layout.html.twig */
class __TwigTemplate_54386bc0e64a6fbe3349ae5d70dab346 extends Template
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
            'content' => [$this, 'block_content'],
            'custom_script' => [$this, 'block_custom_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./layout/layout.html.twig"));

        // line 1
        yield "<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\" data-theme=\"light\">

";
        // line 5
        yield from $this->loadTemplate("partials/head.html.twig", "./layout/layout.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "

<body class=\"dark:bg-neutral-800 bg-neutral-100 dark:text-white\">

    <!-- ..::  header area start ::.. -->
    ";
        // line 11
        yield from $this->loadTemplate("partials/sidebar.html.twig", "./layout/layout.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "    <!-- ..::  header area end ::.. -->

    <main class=\"dashboard-main\">

        <!-- ..::  navbar start ::.. -->
        ";
        // line 17
        yield from $this->loadTemplate("partials/navbar.html.twig", "./layout/layout.html.twig", 17)->unwrap()->yield($context);
        // line 18
        yield "        <!-- ..::  navbar end ::.. -->
        <div class=\"dashboard-main-body\">
            
            <!-- ..::  breadcrumb  start ::.. -->
            ";
        // line 22
        yield from $this->loadTemplate("partials/breadcrumb.html.twig", "./layout/layout.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "            <!-- ..::  header area end ::.. -->

";
        // line 25
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 27
        yield " 
        
        </div>
        <!-- ..::  footer  start ::.. -->
        ";
        // line 31
        yield from $this->loadTemplate("partials/footer.html.twig", "./layout/layout.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "        <!-- ..::  footer area end ::.. -->

    </main>

    <!-- ..::  scripts  start ::.. -->
    ";
        // line 37
        yield from $this->loadTemplate("partials/script.html.twig", "./layout/layout.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('custom_script', $context, $blocks);
        // line 42
        yield "    <!-- ..::  scripts  end ::.. -->

</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_script"));

        // line 40
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "./layout/layout.html.twig";
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
        return array (  150 => 40,  140 => 39,  131 => 26,  121 => 25,  109 => 42,  107 => 39,  104 => 38,  102 => 37,  95 => 32,  93 => 31,  87 => 27,  85 => 25,  81 => 23,  79 => 22,  73 => 18,  71 => 17,  64 => 12,  62 => 11,  55 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\" data-theme=\"light\">

{% include 'partials/head.html.twig' %}


<body class=\"dark:bg-neutral-800 bg-neutral-100 dark:text-white\">

    <!-- ..::  header area start ::.. -->
    {% include 'partials/sidebar.html.twig' %}
    <!-- ..::  header area end ::.. -->

    <main class=\"dashboard-main\">

        <!-- ..::  navbar start ::.. -->
        {% include 'partials/navbar.html.twig' %}
        <!-- ..::  navbar end ::.. -->
        <div class=\"dashboard-main-body\">
            
            <!-- ..::  breadcrumb  start ::.. -->
            {% include 'partials/breadcrumb.html.twig' %}
            <!-- ..::  header area end ::.. -->

{% block content %}

{% endblock content %} 
        
        </div>
        <!-- ..::  footer  start ::.. -->
        {% include 'partials/footer.html.twig' %}
        <!-- ..::  footer area end ::.. -->

    </main>

    <!-- ..::  scripts  start ::.. -->
    {% include 'partials/script.html.twig' %}

    {% block custom_script %}

    {% endblock custom_script %}
    <!-- ..::  scripts  end ::.. -->

</body>

</html>", "./layout/layout.html.twig", "E:\\Symfony\\WowDash\\templates\\layout\\layout.html.twig");
    }
}
