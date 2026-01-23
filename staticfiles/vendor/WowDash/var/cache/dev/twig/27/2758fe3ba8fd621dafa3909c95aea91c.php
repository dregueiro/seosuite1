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

/* componentspage/progress.html.twig */
class __TwigTemplate_03e598f6966b3c3977528288c69cf6d3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/progress.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/progress.html.twig", 1);
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
        yield "    <script>
    // Floating progress bar
    \$(\".progress-wrapper\").each(function() {
        var percentage = \$(this).attr(\"data-perc\");
        var floatingLabel = \$(this).find(\".floating-label\");

        // Set CSS variable to be used in keyframes
        floatingLabel.css(\"--left-percentage\", percentage);

        // Trigger reflow to restart animation
        floatingLabel[0].offsetWidth; // Force reflow
        floatingLabel.css(\"animation-name\", \"none\");
        floatingLabel.css(\"left\", percentage); // Ensure final position is correct
        floatingLabel.css(\"animation-name\", \"animateFloatingLabel\");
    });

    // Semi Circle progress bar
    \$(\".progressBar\").each(function() {
        var \$bar = \$(this).find(\".circleBar\");
        var \$val = \$(this).find(\".barNumber\");
        var perc = parseInt(\$val.text(), 10);

        \$({
            p: 0
        }).animate({
            p: perc
        }, {
            duration: 3000,
            easing: \"swing\",
            step: function(p) {
                \$bar.css({
                    transform: \"rotate(\" + (45 + (p * 1.8)) + \"deg)\", // 100%=180° so: ° = % * 1.8
                    // 45 is to add the needed rotation to have the green borders at the bottom
                });
                \$val.text(p | 0);
            }
        });
    });
    </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 46
        yield "

    <div class=\"grid sm:grid-cols-12 gap-6\">
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Default Progress</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex items-center flex-col gap-6\">
                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 20%\"></div>
                        </div>

                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 35%\"></div>
                        </div>

                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 50%\"></div>
                        </div>

                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 75%\"></div>
                        </div>

                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 90%\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Progress with multiple color</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex items-center flex-col gap-6\">
                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 20%\"></div>
                        </div>

                        <div class=\"w-full bg-success-600/10 rounded-full h-2\">
                            <div class=\"bg-success-600 h-2 rounded-full dark:bg-success-600\" style=\"width: 35%\"></div>
                        </div>

                        <div class=\"w-full bg-info-600/10 rounded-full h-2\">
                            <div class=\"bg-info-600 h-2 rounded-full dark:bg-info-600\" style=\"width: 50%\"></div>
                        </div>

                        <div class=\"w-full bg-warning-600/10 rounded-full h-2\">
                            <div class=\"bg-warning-600 h-2 rounded-full dark:bg-warning-600\" style=\"width: 75%\"></div>
                        </div>

                        <div class=\"w-full bg-danger-600/10 rounded-full h-2\">
                            <div class=\"bg-danger-600 h-2 rounded-full dark:bg-danger-600\" style=\"width: 90%\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Progress with right label</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex flex-col gap-6\">
                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 20%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">20%</span>
                        </div>

                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 35%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">35%</span>
                        </div>

                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 50%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">50%</span>
                        </div>

                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 75%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">75%</span>
                        </div>

                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 90%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">90%</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Progress with multiple color</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex items-center flex-col gap-6 position-relative\">
                        <div class=\"w-full bg-primary-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 20%\"></div>
                        </div>

                        <div class=\"w-full bg-success-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-success-600 h-2 rounded-full dark:bg-success-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 35%\"></div>
                        </div>

                        <div class=\"w-full bg-info-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-info-600 h-2 rounded-full dark:bg-info-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 50%\"></div>
                        </div>

                        <div class=\"w-full bg-warning-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-warning-600 h-2 rounded-full dark:bg-warning-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 75%\"></div>
                        </div>

                        <div class=\"w-full bg-danger-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-danger-600 h-2 rounded-full dark:bg-danger-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 90%\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Gradient Progress</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex items-center flex-col gap-6 position-relative\">
                        <div class=\"w-full bg-gradient-to-l to-primary-600/50 from-primary-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-primary-700 from-primary-500 h-2 rounded-full dark:bg-primary-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 20%\"></div>
                        </div>

                        <div class=\"w-full bg-gradient-to-l to-success-600/50 from-success-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-success-700 from-success-500 h-2 rounded-full dark:bg-success-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 35%\"></div>
                        </div>

                        <div class=\"w-full bg-gradient-to-l to-info-600/50 from-info-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-info-700 from-info-500 h-2 rounded-full dark:bg-info-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 50%\"></div>
                        </div>

                        <div class=\"w-full bg-gradient-to-l to-warning-600/50 from-warning-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-warning-700 from-warning-500 h-2 rounded-full dark:bg-warning-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 75%\"></div>
                        </div>

                        <div class=\"w-full bg-gradient-to-l to-danger-600/50 from-danger-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-danger-700 from-danger-500 h-2 rounded-full dark:bg-danger-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 90%\"></div>
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
        return "componentspage/progress.html.twig";
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
        return array (  125 => 46,  115 => 45,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script%}
    <script>
    // Floating progress bar
    \$(\".progress-wrapper\").each(function() {
        var percentage = \$(this).attr(\"data-perc\");
        var floatingLabel = \$(this).find(\".floating-label\");

        // Set CSS variable to be used in keyframes
        floatingLabel.css(\"--left-percentage\", percentage);

        // Trigger reflow to restart animation
        floatingLabel[0].offsetWidth; // Force reflow
        floatingLabel.css(\"animation-name\", \"none\");
        floatingLabel.css(\"left\", percentage); // Ensure final position is correct
        floatingLabel.css(\"animation-name\", \"animateFloatingLabel\");
    });

    // Semi Circle progress bar
    \$(\".progressBar\").each(function() {
        var \$bar = \$(this).find(\".circleBar\");
        var \$val = \$(this).find(\".barNumber\");
        var perc = parseInt(\$val.text(), 10);

        \$({
            p: 0
        }).animate({
            p: perc
        }, {
            duration: 3000,
            easing: \"swing\",
            step: function(p) {
                \$bar.css({
                    transform: \"rotate(\" + (45 + (p * 1.8)) + \"deg)\", // 100%=180° so: ° = % * 1.8
                    // 45 is to add the needed rotation to have the green borders at the bottom
                });
                \$val.text(p | 0);
            }
        });
    });
    </script>
        {% endblock custom_script %}

{% block content %}


    <div class=\"grid sm:grid-cols-12 gap-6\">
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Default Progress</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex items-center flex-col gap-6\">
                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 20%\"></div>
                        </div>

                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 35%\"></div>
                        </div>

                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 50%\"></div>
                        </div>

                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 75%\"></div>
                        </div>

                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 90%\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Progress with multiple color</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex items-center flex-col gap-6\">
                        <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 20%\"></div>
                        </div>

                        <div class=\"w-full bg-success-600/10 rounded-full h-2\">
                            <div class=\"bg-success-600 h-2 rounded-full dark:bg-success-600\" style=\"width: 35%\"></div>
                        </div>

                        <div class=\"w-full bg-info-600/10 rounded-full h-2\">
                            <div class=\"bg-info-600 h-2 rounded-full dark:bg-info-600\" style=\"width: 50%\"></div>
                        </div>

                        <div class=\"w-full bg-warning-600/10 rounded-full h-2\">
                            <div class=\"bg-warning-600 h-2 rounded-full dark:bg-warning-600\" style=\"width: 75%\"></div>
                        </div>

                        <div class=\"w-full bg-danger-600/10 rounded-full h-2\">
                            <div class=\"bg-danger-600 h-2 rounded-full dark:bg-danger-600\" style=\"width: 90%\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Progress with right label</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex flex-col gap-6\">
                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 20%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">20%</span>
                        </div>

                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 35%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">35%</span>
                        </div>

                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 50%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">50%</span>
                        </div>

                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 75%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">75%</span>
                        </div>

                        <div class=\"flex items-center gap-4 w-full\">
                            <div class=\"w-full bg-primary-600/10 rounded-full h-2\">
                                <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600\" style=\"width: 90%\"></div>
                            </div>
                            <span class=\"text-neutral-600 text-xs font-semibold line-height-1\">90%</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Progress with multiple color</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex items-center flex-col gap-6 position-relative\">
                        <div class=\"w-full bg-primary-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-primary-600 h-2 rounded-full dark:bg-primary-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 20%\"></div>
                        </div>

                        <div class=\"w-full bg-success-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-success-600 h-2 rounded-full dark:bg-success-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 35%\"></div>
                        </div>

                        <div class=\"w-full bg-info-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-info-600 h-2 rounded-full dark:bg-info-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 50%\"></div>
                        </div>

                        <div class=\"w-full bg-warning-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-warning-600 h-2 rounded-full dark:bg-warning-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 75%\"></div>
                        </div>

                        <div class=\"w-full bg-danger-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-danger-600 h-2 rounded-full dark:bg-danger-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 90%\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-span-12 sm:col-span-6\">
            <div class=\"card p-0 overflow-hidden relative rounded-xl border-0\">
                <div class=\"card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600\">
                    <h6 class=\"text-lg mb-0\">Gradient Progress</h6>
                </div>
                <div class=\"card-body p-6\">

                    <div class=\"flex items-center flex-col gap-6 position-relative\">
                        <div class=\"w-full bg-gradient-to-l to-primary-600/50 from-primary-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-primary-700 from-primary-500 h-2 rounded-full dark:bg-primary-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 20%\"></div>
                        </div>

                        <div class=\"w-full bg-gradient-to-l to-success-600/50 from-success-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-success-700 from-success-500 h-2 rounded-full dark:bg-success-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 35%\"></div>
                        </div>

                        <div class=\"w-full bg-gradient-to-l to-info-600/50 from-info-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-info-700 from-info-500 h-2 rounded-full dark:bg-info-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 50%\"></div>
                        </div>

                        <div class=\"w-full bg-gradient-to-l to-warning-600/50 from-warning-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-warning-700 from-warning-500 h-2 rounded-full dark:bg-warning-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 75%\"></div>
                        </div>

                        <div class=\"w-full bg-gradient-to-l to-danger-600/50 from-danger-600/10 rounded-full h-2 overflow-hidden\">
                            <div class=\"bg-gradient-to-l to-danger-700 from-danger-500 h-2 rounded-full dark:bg-danger-600 animate-progress transition-all ease-out duration-1000\" style=\"width: 90%\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "componentspage/progress.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\progress.html.twig");
    }
}
