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

/* componentspage/colors.html.twig */
class __TwigTemplate_39178d296f906c18e41f9b012c9ba4fc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/colors.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/colors.html.twig", 1);
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
                    
        // =========================== Copy Color Code when click on box Js Start ================================
        \$('.color-box').click(function () {
            var clipboardText = \$(this).find('[data-clipboard-text]').attr('data-clipboard-text');

            // Create a temporary input element to hold the text to copy
            var tempInput = \$('<input>');
            \$('body').append(tempInput);
            tempInput.val(clipboardText).select();

            // Copy the text to the clipboard
            document.execCommand('copy');

            // Remove the temporary input element
            tempInput.remove();


            // Remove any existing badge
            \$(this).find('.copied-message').remove();

            // Create the notification badge
            var \$badge = \$(`<span class=\"copied-message text-xs text-white dark:text-white badge bg-success-600 py-2 px-3 font-normal rounded-full absolute start-1/2 -translate-x-1/2 top-0 mt-6\">    Copied! </span>`)

            // Append the badge to the color box
            \$(this).append(\$badge);

            // Show the badge and then fade it out
            \$badge.fadeIn().delay(800).fadeOut(function () {
                \$(this).remove();
            });

        });
        // =========================== Copy Color Code when click on box Js End ================================
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        yield "        <div class=\"row gy-4\">
            <div class=\"col-12\">
                <div class=\"card border-0\">
                    <div class=\"card-body p-6\">
                        <!-- Shade Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Shades</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer max-w-[150px] w-full bg-white dark:bg-neutral-700 relative p-7 grow border border-neutral-200 dark:border-neutral-600\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-white block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-white block\" data-clipboard-text=\"bg-white dark:bg-neutral-700\">#FFFFFF</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer max-w-[150px] w-full bg-neutral-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">100</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-900\">#111827</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shade End -->
                        <!-- Neutral Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Neutral Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-50 dark:bg-neutral-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Neutral End -->
                        <!-- Primary Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Primary Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-50 dark:bg-primary-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Primary End -->
                        <!-- Error Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Error Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-50 dark:bg-danger-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Error End -->
                        <!-- Success Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Success Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-50 dark:bg-success-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Success End -->
                        <!-- warning Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Warning Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-50 dark:bg-warning-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- warning End -->
                        <!-- info Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Info Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-50 dark:bg-info-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- info End -->

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
        return "componentspage/colors.html.twig";
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
        return array (  121 => 42,  111 => 41,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

        {% block custom_script %}
                <script>
                    
        // =========================== Copy Color Code when click on box Js Start ================================
        \$('.color-box').click(function () {
            var clipboardText = \$(this).find('[data-clipboard-text]').attr('data-clipboard-text');

            // Create a temporary input element to hold the text to copy
            var tempInput = \$('<input>');
            \$('body').append(tempInput);
            tempInput.val(clipboardText).select();

            // Copy the text to the clipboard
            document.execCommand('copy');

            // Remove the temporary input element
            tempInput.remove();


            // Remove any existing badge
            \$(this).find('.copied-message').remove();

            // Create the notification badge
            var \$badge = \$(`<span class=\"copied-message text-xs text-white dark:text-white badge bg-success-600 py-2 px-3 font-normal rounded-full absolute start-1/2 -translate-x-1/2 top-0 mt-6\">    Copied! </span>`)

            // Append the badge to the color box
            \$(this).append(\$badge);

            // Show the badge and then fade it out
            \$badge.fadeIn().delay(800).fadeOut(function () {
                \$(this).remove();
            });

        });
        // =========================== Copy Color Code when click on box Js End ================================
            </script>
        {% endblock custom_script %}

{% block content %}
        <div class=\"row gy-4\">
            <div class=\"col-12\">
                <div class=\"card border-0\">
                    <div class=\"card-body p-6\">
                        <!-- Shade Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Shades</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer max-w-[150px] w-full bg-white dark:bg-neutral-700 relative p-7 grow border border-neutral-200 dark:border-neutral-600\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-white block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-white block\" data-clipboard-text=\"bg-white dark:bg-neutral-700\">#FFFFFF</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer max-w-[150px] w-full bg-neutral-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">100</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-900\">#111827</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shade End -->
                        <!-- Neutral Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Neutral Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-50 dark:bg-neutral-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-neutral-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-neutral-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-neutral-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Neutral End -->
                        <!-- Primary Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Primary Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-50 dark:bg-primary-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-primary-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-primary-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-primary-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Primary End -->
                        <!-- Error Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Error Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-50 dark:bg-danger-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-danger-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-danger-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-danger-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Error End -->
                        <!-- Success Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Success Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-50 dark:bg-success-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-success-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-success-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-success-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Success End -->
                        <!-- warning Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Warning Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-50 dark:bg-warning-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-neutral-600 dark:text-neutral-600 block\" data-clipboard-text=\"bg-warning-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-warning-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-warning-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- warning End -->
                        <!-- info Start -->
                        <div class=\"mb-8\">
                            <h6 class=\"text-base mb-6\">Info Color</h6>
                            <div class=\"flex flex-wrap\">
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-50 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">50</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-50 dark:bg-info-600\">#FAFAFA</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-100 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">100</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-100\">#F5F5F5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-200 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">200</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-200\">#E5E5E5</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-300 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 block\">300</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-300\">#D4D4D4</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-400 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-neutral-600 dark:text-neutral-600 d-bloc\">400</span>
                                        <span class=\"font-medium text-base text-info-neutral dark:text-neutral-600 block\" data-clipboard-text=\"bg-info-400\">#A3A3A3</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-500 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">500</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-400\">#737373</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-600 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">600</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-600\">#525252</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-700 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">700</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-700\">#404040</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-800 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">800</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-800\">#262626</span>
                                    </div>
                                </div>
                                <div class=\"color-box h-[190px] cursor-pointer min-w-[120px] bg-info-900 relative p-7 grow\">
                                    <div class=\"absolute start-1/2 -translate-x-1/2 bottom-0 text-center mb-7\">
                                        <span class=\"font-medium text-lg text-white dark:text-white block\">900</span>
                                        <span class=\"font-medium text-base text-white dark:text-white block\" data-clipboard-text=\"bg-info-900\">#171717</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- info End -->

                    </div>
                </div>
            </div>
        </div>

{% endblock content %}
", "componentspage/colors.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\colors.html.twig");
    }
}
