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

/* partials/head.html.twig */
class __TwigTemplate_5a2f4247b1acc62665440228235378be extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head.html.twig"));

        // line 1
        yield "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Wowdash - Tailwind CSS Admin Dashboard Laravel-11 Template</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        yield "\" sizes=\"16x16\">
    <!-- google fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap\" rel=\"stylesheet\">
    <!-- remix icon font css  -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/remixicon.css"), "html", null, true);
        yield "\">
    <!-- Apex Chart css -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/apexcharts.css"), "html", null, true);
        yield "\">
    <!-- Data Table css -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/dataTables.min.css"), "html", null, true);
        yield "\">
    <!-- Text Editor css -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/editor-katex.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/editor.atom-one-dark.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/editor.quill.snow.css"), "html", null, true);
        yield "\">
    <!-- Date picker css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/flatpickr.min.css"), "html", null, true);
        yield "\">
    <!-- Calendar css -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/full-calendar.css"), "html", null, true);
        yield "\">
    <!-- Vector Map css -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/jquery-jvectormap-2.0.5.css"), "html", null, true);
        yield "\">
    <!-- Popup css -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/magnific-popup.css"), "html", null, true);
        yield "\">
    <!-- Slick Slider css -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/slick.css"), "html", null, true);
        yield "\">
    <!-- prism css -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/prism.css"), "html", null, true);
        yield "\">
    <!-- file upload css -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/file-upload.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lib/audioplayer.css"), "html", null, true);
        yield "\">
    <!-- main css -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
</head>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/head.html.twig";
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
        return array (  125 => 34,  120 => 32,  116 => 31,  111 => 29,  106 => 27,  101 => 25,  96 => 23,  91 => 21,  86 => 19,  81 => 17,  77 => 16,  73 => 15,  68 => 13,  63 => 11,  58 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Wowdash - Tailwind CSS Admin Dashboard Laravel-11 Template</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/images/favicon.png') }}\" sizes=\"16x16\">
    <!-- google fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap\" rel=\"stylesheet\">
    <!-- remix icon font css  -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/remixicon.css') }}\">
    <!-- Apex Chart css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/apexcharts.css') }}\">
    <!-- Data Table css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/dataTables.min.css') }}\">
    <!-- Text Editor css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/editor-katex.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/editor.atom-one-dark.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/editor.quill.snow.css') }}\">
    <!-- Date picker css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/flatpickr.min.css') }}\">
    <!-- Calendar css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/full-calendar.css') }}\">
    <!-- Vector Map css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/jquery-jvectormap-2.0.5.css') }}\">
    <!-- Popup css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/magnific-popup.css') }}\">
    <!-- Slick Slider css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/slick.css') }}\">
    <!-- prism css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/prism.css') }}\">
    <!-- file upload css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/file-upload.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lib/audioplayer.css') }}\">
    <!-- main css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
</head>", "partials/head.html.twig", "E:\\Symfony\\WowDash\\templates\\partials\\head.html.twig");
    }
}
