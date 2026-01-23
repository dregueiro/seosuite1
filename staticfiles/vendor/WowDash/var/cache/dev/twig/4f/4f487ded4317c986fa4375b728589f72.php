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

/* partials/script.html.twig */
class __TwigTemplate_7174807f67ce1e7dfe3bcfd427a8273f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/script.html.twig"));

        // line 1
        yield "    <!-- jQuery library js -->
    <script src=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Apex Chart js -->
    <script src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Data Table js -->
    <script src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/simple-datatables.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Iconify Font js -->
    <script src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/iconify-icon.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery UI js -->
    <script src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/jquery-ui.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Vector Map js -->
    <script src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/jquery-jvectormap-2.0.5.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        yield "\"></script>
    <!-- Popup js -->
    <script src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/magnifc-popup.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Slick Slider js -->
    <script src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/slick.min.js"), "html", null, true);
        yield "\"></script>
    <!-- prism js -->
    <script src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/prism.js"), "html", null, true);
        yield "\"></script>
    <!-- file upload js -->
    <script src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/file-upload.js"), "html", null, true);
        yield "\"></script>
    <!-- audio player -->
    <script src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/audioplayer.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/flowbite.min.js"), "html", null, true);
        yield "\"></script>
    <!-- main js -->
    <script src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 29
        if ((array_key_exists("multi_script", $context) && (isset($context["multi_script"]) || array_key_exists("multi_script", $context) ? $context["multi_script"] : (function () { throw new RuntimeError('Variable "multi_script" does not exist.', 29, $this->source); })()))) {
            // line 30
            yield "        ";
            yield (isset($context["multi_script"]) || array_key_exists("multi_script", $context) ? $context["multi_script"] : (function () { throw new RuntimeError('Variable "multi_script" does not exist.', 30, $this->source); })());
            yield "
    ";
        }
        // line 32
        yield "
    ";
        // line 33
        if ((array_key_exists("script", $context) && (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "        ";
            yield (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 34, $this->source); })());
            yield "
    ";
        }
        // line 36
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
        return "partials/script.html.twig";
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
        return array (  136 => 36,  130 => 34,  128 => 33,  125 => 32,  119 => 30,  117 => 29,  112 => 27,  107 => 25,  102 => 23,  97 => 21,  92 => 19,  87 => 17,  82 => 15,  77 => 13,  73 => 12,  68 => 10,  63 => 8,  58 => 6,  53 => 4,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <!-- jQuery library js -->
    <script src=\"{{ asset('assets/js/lib/jquery-3.7.1.min.js') }}\"></script>
    <!-- Apex Chart js -->
    <script src=\"{{ asset('assets/js/lib/apexcharts.min.js') }}\"></script>
    <!-- Data Table js -->
    <script src=\"{{ asset('assets/js/lib/simple-datatables.min.js') }}\"></script>
    <!-- Iconify Font js -->
    <script src=\"{{ asset('assets/js/lib/iconify-icon.min.js') }}\"></script>
    <!-- jQuery UI js -->
    <script src=\"{{ asset('assets/js/lib/jquery-ui.min.js') }}\"></script>
    <!-- Vector Map js -->
    <script src=\"{{ asset('assets/js/lib/jquery-jvectormap-2.0.5.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/jquery-jvectormap-world-mill-en.js') }}\"></script>
    <!-- Popup js -->
    <script src=\"{{ asset('assets/js/lib/magnifc-popup.min.js') }}\"></script>
    <!-- Slick Slider js -->
    <script src=\"{{ asset('assets/js/lib/slick.min.js') }}\"></script>
    <!-- prism js -->
    <script src=\"{{ asset('assets/js/lib/prism.js') }}\"></script>
    <!-- file upload js -->
    <script src=\"{{ asset('assets/js/lib/file-upload.js') }}\"></script>
    <!-- audio player -->
    <script src=\"{{ asset('assets/js/lib/audioplayer.js') }}\"></script>

    <script src=\"{{ asset('assets/js/flowbite.min.js') }}\"></script>
    <!-- main js -->
    <script src=\"{{ asset('assets/js/app.js') }}\"></script>

    {% if multi_script is defined and multi_script %}
        {{ multi_script|raw }}
    {% endif %}

    {% if script is defined and script %}
        {{ script|raw }}
    {% endif %}


    {# {% if multi_script %}
        {% for js_file in multi_script %}
        <script src=\"{{ url_for('static', filename=js_file.strip()) }}\"></script>
        {% endfor %}
    {% endif %}

    {% if script %}
        <script src=\"{{ url_for('static', filename=script) }}\"></script>
    {% endif %} #}", "partials/script.html.twig", "E:\\Symfony\\WowDash\\templates\\partials\\script.html.twig");
    }
}
