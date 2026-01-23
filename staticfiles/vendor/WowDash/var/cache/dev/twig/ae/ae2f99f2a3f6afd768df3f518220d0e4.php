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

/* componentspage/videos.html.twig */
class __TwigTemplate_b66dccd75e1ac8ffc6238007c5fc2c50 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/videos.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/videos.html.twig", 1);
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
        yield "                <script>
                    // ========================= magnific Popup Icon Js Start =====================
                    \$(\".magnific-video\").magnificPopup({
                        type: \"iframe\"
                    });
                    // ========================= magnific Popup Icon Js End =====================
                </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        yield "    <div class=\"grid grid-cols-1 2xl:grid-cols-12 gap-6\">
        <div class=\"col-span-1 2xl:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Video</h6>
                </div>
                <div class=\"card-body p-6 relative\">
                    <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/videos/video-img1.png"), "html", null, true);
        yield "\" class=\"w-full h-full object-fit-cover rounded-lg overflow-hidden\" alt=\"\">
                    <a href=\"https://www.youtube.com/watch?v=Vr9WoWXkKeE\" class=\"magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1\">
                        <iconify-icon icon=\"ion:play\" class=\"text-primary-600 text-2xl\"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 2xl:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Videos With Content</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
                        <div class=\"col-sm-6\">
                            <div class=\"border bg-white dark:bg-neutral-700 rounded-lg overflow-hidden \">
                                <div class=\"relative max-h-258-px overflow-hidden\">
                                    <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/videos/video-img2.png"), "html", null, true);
        yield "\" class=\"w-full object-fit-cover\" alt=\"\">
                                    <a href=\"https://www.youtube.com/watch?v=Vr9WoWXkKeE\" class=\"magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1\">
                                        <iconify-icon icon=\"ion:play\" class=\"text-primary-600 text-2xl\"></iconify-icon>
                                    </a>
                                </div>
                                <div class=\"p-4\">
                                    <h6 class=\"text-xl mb-1.5 \">This is Video title</h6>
                                    <p class=\"text-secondary-light mb-0\">We quickly learn to fear and thus autom atically avo id potentially stressful</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"border bg-white dark:bg-neutral-700 rounded-lg overflow-hidden \">
                                <div class=\"relative max-h-258-px overflow-hidden\">
                                    <img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/videos/video-img3.png"), "html", null, true);
        yield "\" class=\"w-full object-fit-cover\" alt=\"\">
                                    <a href=\"https://www.youtube.com/watch?v=Vr9WoWXkKeE\" class=\"magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1\">
                                        <iconify-icon icon=\"ion:play\" class=\"text-primary-600 text-2xl\"></iconify-icon>
                                    </a>
                                </div>
                                <div class=\"p-4\">
                                    <h6 class=\"text-xl mb-1.5 \">This is Video title here</h6>
                                    <p class=\"text-secondary-light mb-0\">We quickly learn to fear and thus autom atically avo id potentially stressful</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-1 2xl:col-span-12\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Video</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"relative\">
                        <img src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/videos/video-img4.png"), "html", null, true);
        yield "\" class=\"w-full h-full object-fit-cover rounded-lg\" alt=\"\">
                        <a href=\"https://www.youtube.com/watch?v=Vr9WoWXkKeE\" class=\"magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1\">
                            <iconify-icon icon=\"ion:play\" class=\"text-primary-600 text-2xl\"></iconify-icon>
                        </a>
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
        return "componentspage/videos.html.twig";
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
        return array (  165 => 75,  139 => 52,  122 => 38,  102 => 21,  93 => 14,  83 => 13,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script %}
                <script>
                    // ========================= magnific Popup Icon Js Start =====================
                    \$(\".magnific-video\").magnificPopup({
                        type: \"iframe\"
                    });
                    // ========================= magnific Popup Icon Js End =====================
                </script>
        {% endblock custom_script %}

{% block content %}
    <div class=\"grid grid-cols-1 2xl:grid-cols-12 gap-6\">
        <div class=\"col-span-1 2xl:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Default Video</h6>
                </div>
                <div class=\"card-body p-6 relative\">
                    <img src=\"{{ asset('assets/images/videos/video-img1.png') }}\" class=\"w-full h-full object-fit-cover rounded-lg overflow-hidden\" alt=\"\">
                    <a href=\"https://www.youtube.com/watch?v=Vr9WoWXkKeE\" class=\"magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1\">
                        <iconify-icon icon=\"ion:play\" class=\"text-primary-600 text-2xl\"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-span-1 2xl:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Videos With Content</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-6\">
                        <div class=\"col-sm-6\">
                            <div class=\"border bg-white dark:bg-neutral-700 rounded-lg overflow-hidden \">
                                <div class=\"relative max-h-258-px overflow-hidden\">
                                    <img src=\"{{ asset('assets/images/videos/video-img2.png') }}\" class=\"w-full object-fit-cover\" alt=\"\">
                                    <a href=\"https://www.youtube.com/watch?v=Vr9WoWXkKeE\" class=\"magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1\">
                                        <iconify-icon icon=\"ion:play\" class=\"text-primary-600 text-2xl\"></iconify-icon>
                                    </a>
                                </div>
                                <div class=\"p-4\">
                                    <h6 class=\"text-xl mb-1.5 \">This is Video title</h6>
                                    <p class=\"text-secondary-light mb-0\">We quickly learn to fear and thus autom atically avo id potentially stressful</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"border bg-white dark:bg-neutral-700 rounded-lg overflow-hidden \">
                                <div class=\"relative max-h-258-px overflow-hidden\">
                                    <img src=\"{{ asset('assets/images/videos/video-img3.png') }}\" class=\"w-full object-fit-cover\" alt=\"\">
                                    <a href=\"https://www.youtube.com/watch?v=Vr9WoWXkKeE\" class=\"magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1\">
                                        <iconify-icon icon=\"ion:play\" class=\"text-primary-600 text-2xl\"></iconify-icon>
                                    </a>
                                </div>
                                <div class=\"p-4\">
                                    <h6 class=\"text-xl mb-1.5 \">This is Video title here</h6>
                                    <p class=\"text-secondary-light mb-0\">We quickly learn to fear and thus autom atically avo id potentially stressful</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-1 2xl:col-span-12\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Video</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('assets/images/videos/video-img4.png') }}\" class=\"w-full h-full object-fit-cover rounded-lg\" alt=\"\">
                        <a href=\"https://www.youtube.com/watch?v=Vr9WoWXkKeE\" class=\"magnific-video shadow-[0px_0px_0px_5px_rgba(255,255,255,0.5)] w-[56px] h-[56px] bg-white rounded-full flex justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-1\">
                            <iconify-icon icon=\"ion:play\" class=\"text-primary-600 text-2xl\"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "componentspage/videos.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\videos.html.twig");
    }
}
