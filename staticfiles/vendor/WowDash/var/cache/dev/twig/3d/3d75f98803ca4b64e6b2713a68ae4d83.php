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

/* componentspage/typography.html.twig */
class __TwigTemplate_7c9f0ba808441325ddeb793e8551d4fb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "componentspage/typography.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "componentspage/typography.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-12 gap-6\">
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center justify-between\">
                    <h6 class=\"text-lg font-semibold mb-0\">Heading</h6>
                    <h6 class=\"text-lg font-semibold mb-0\">Font Size</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <div class=\"flex items-center justify-between mb-4\">
                        <h1>Heading 1</h1>
                        <span class=\"text-base text-secondary-light font-normal\">60px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h2>Heading 2</h2>
                        <span class=\"text-base text-secondary-light font-normal\">48px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h3>Heading 3</h3>
                        <span class=\"text-base text-secondary-light font-normal\">36px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h4>Heading 4</h4>
                        <span class=\"text-base text-secondary-light font-normal\">30px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h5>Heading 5</h5>
                        <span class=\"text-base text-secondary-light font-normal\">24px</span>
                    </div>
                    <div class=\"flex items-center justify-between\">
                        <h6>Heading 6</h6>
                        <span class=\"text-base text-secondary-light font-normal\">20px</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center justify-between\">
                    <h6 class=\"text-lg font-semibold mb-0\">Display Heading</h6>
                    <h6 class=\"text-lg font-semibold mb-0\">Font Size</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <div class=\"flex items-center justify-between mb-4\">
                        <h1>Display 1</h1>
                        <span class=\"text-base text-secondary-light font-normal\">60px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h2>Display 2</h2>
                        <span class=\"text-base text-secondary-light font-normal\">48px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h3>Display 3</h3>
                        <span class=\"text-base text-secondary-light font-normal\">36px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h4>Display 4</h4>
                        <span class=\"text-base text-secondary-light font-normal\">30px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h5>Display 5</h5>
                        <span class=\"text-base text-secondary-light font-normal\">24px</span>
                    </div>
                    <div class=\"flex items-center justify-between\">
                        <h6>Display 6</h6>
                        <span class=\"text-base text-secondary-light font-normal\">20px</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Heading Colors</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <h1 class=\"text-primary-600 dark:text-primary-600 mb-4 leading-[60px]\">Heading 1</h1>
                    <h2 class=\"text-success-600 dark:text-success-600 mb-4 leading-[60px]\">Heading 2</h2>
                    <h3 class=\"text-warning-600 dark:text-warning-600 mb-4 leading-[60px]\">Heading 3</h3>
                    <h4 class=\"text-danger-600 dark:text-danger-600 mb-4\">Heading 4</h4>
                    <h5 class=\"text-info-600 dark:text-info-600 mb-4\">Heading 5</h5>
                    <h6 class=\"text-neutral-500 dark:text-neutral-200\">Heading 6</h6>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Inine Text Elements</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <p class=\"mb-4 text-secondary-light font-normal\">You can use the mark tag to <span class=\"text-warning-600 dark:text-warning-500 bg-warning-100 dark:bg-warning-600/25 px-1.5\">highlight</span> text</p>
                    <p class=\"mb-4 text-secondary-light font-normal line-through\">This is a paragraph. it stands out from regular Delete text </p>
                    <p class=\"mb-4 text-secondary-light font-normal line-through\">This line of text is meant to be treated as no longer accurate.</p>
                    <p class=\"mb-4 text-secondary-light font-normal underline\">This line of text will render as underlined</p>
                    <p class=\"mb-4 text-secondary-light font-normal underline\">This line of text is meant to be treated as an addition to the document.</p>
                    <p class=\"mb-4 text-secondary-light font-normal\">This is a paragraph. it stands out from regular text.</p>
                    <p class=\"mb-4 text-secondary-light font-semibold\">This line rendered as bold text.</p>
                    <p class=\"mb-4 text-secondary-light italic\">This line rendered as italicized text.</p>
                    <p class=\"text-secondary-light italic\">This line rendered as italicized text.</p>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center justify-between\">
                    <h6 class=\"text-lg font-semibold mb-0\">Text</h6>
                    <h6 class=\"text-lg font-semibold mb-0\">Font Size</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <div class=\"flex items-center justify-between mb-4\">
                        <p class=\"text-lg text-secondary-light\">This is text</p>
                        <span class=\"text-sm text-secondary-light font-normal\">18px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <p class=\"text-base text-secondary-light\">This is text</p>
                        <span class=\"text-sm text-secondary-light font-normal\">16px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <p class=\"text-sm text-secondary-light\">This is text</p>
                        <span class=\"text-sm text-secondary-light font-normal\">14px</span>
                    </div>
                    <div class=\"flex items-center justify-between\">
                        <p class=\"text-xs text-secondary-light\">This is text</p>
                        <span class=\"text-sm text-secondary-light font-normal\">12px</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Text Decoration</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <p class=\"mb-4 text-secondary-light font-normal\">Use underline, line-through, or text-decoration-none class to decorate text in components respectively.</p>
                    <p class=\"mb-4 text-neutral-600 dark:text-neutral-200 font-normal underline\">This text has a line underneath it.</p>
                    <p class=\"mb-4 text-neutral-600 dark:text-neutral-200 font-normal line-through\">This text has a line going through it.</p>
                    <p class=\"text-secondary-light font-normal\">This link has its text decoration removed</p>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 xl:col-span-12\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Blockquote Background Color Text</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                        <div class=\"p-4 bg-info-50 dark:bg-info-600/20 rounded-lg border-l-[3px] border-info border-info-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-info-600 dark:text-info-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-success-50 dark:bg-success-600/20 rounded-lg border-l-[3px] border-success-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-success-600 dark:text-success-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-info-50 dark:bg-info-600/20 rounded-lg border-l-[3px] border-info-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-info-600 dark:text-info-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-danger-50 dark:bg-danger-600/20 rounded-lg border-l-[3px] border-danger-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-danger-600 dark:text-danger-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-warning-50 dark:bg-warning-600/20 rounded-lg border-l-[3px] border-warning-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-warning-600 dark:text-warning-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-neutral-50 dark:bg-neutral-600 rounded-lg border-l-[3px] border-neutral-600 dark:border-neutral-200\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-neutral-600 dark:text-neutral-200 mb-0\">- WowDash</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 xl:col-span-12\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Blockquote Border Color</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-cyan-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-cyan-600 dark:text-cyan-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-success-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-success-600 dark:text-success-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-info-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-info-600 dark:text-info-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-danger-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-danger-600 dark:text-danger-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-warning-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-warning-600 dark:text-warning-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-neutral-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-neutral-600 dark:text-neutral-200 mb-0\">- WowDash</span>
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
        return "componentspage/typography.html.twig";
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
        return array (  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

{% block content %}

    <div class=\"grid grid-cols-1 md:grid-cols-12 gap-6\">
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center justify-between\">
                    <h6 class=\"text-lg font-semibold mb-0\">Heading</h6>
                    <h6 class=\"text-lg font-semibold mb-0\">Font Size</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <div class=\"flex items-center justify-between mb-4\">
                        <h1>Heading 1</h1>
                        <span class=\"text-base text-secondary-light font-normal\">60px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h2>Heading 2</h2>
                        <span class=\"text-base text-secondary-light font-normal\">48px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h3>Heading 3</h3>
                        <span class=\"text-base text-secondary-light font-normal\">36px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h4>Heading 4</h4>
                        <span class=\"text-base text-secondary-light font-normal\">30px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h5>Heading 5</h5>
                        <span class=\"text-base text-secondary-light font-normal\">24px</span>
                    </div>
                    <div class=\"flex items-center justify-between\">
                        <h6>Heading 6</h6>
                        <span class=\"text-base text-secondary-light font-normal\">20px</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center justify-between\">
                    <h6 class=\"text-lg font-semibold mb-0\">Display Heading</h6>
                    <h6 class=\"text-lg font-semibold mb-0\">Font Size</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <div class=\"flex items-center justify-between mb-4\">
                        <h1>Display 1</h1>
                        <span class=\"text-base text-secondary-light font-normal\">60px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h2>Display 2</h2>
                        <span class=\"text-base text-secondary-light font-normal\">48px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h3>Display 3</h3>
                        <span class=\"text-base text-secondary-light font-normal\">36px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h4>Display 4</h4>
                        <span class=\"text-base text-secondary-light font-normal\">30px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <h5>Display 5</h5>
                        <span class=\"text-base text-secondary-light font-normal\">24px</span>
                    </div>
                    <div class=\"flex items-center justify-between\">
                        <h6>Display 6</h6>
                        <span class=\"text-base text-secondary-light font-normal\">20px</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Heading Colors</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <h1 class=\"text-primary-600 dark:text-primary-600 mb-4 leading-[60px]\">Heading 1</h1>
                    <h2 class=\"text-success-600 dark:text-success-600 mb-4 leading-[60px]\">Heading 2</h2>
                    <h3 class=\"text-warning-600 dark:text-warning-600 mb-4 leading-[60px]\">Heading 3</h3>
                    <h4 class=\"text-danger-600 dark:text-danger-600 mb-4\">Heading 4</h4>
                    <h5 class=\"text-info-600 dark:text-info-600 mb-4\">Heading 5</h5>
                    <h6 class=\"text-neutral-500 dark:text-neutral-200\">Heading 6</h6>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Inine Text Elements</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <p class=\"mb-4 text-secondary-light font-normal\">You can use the mark tag to <span class=\"text-warning-600 dark:text-warning-500 bg-warning-100 dark:bg-warning-600/25 px-1.5\">highlight</span> text</p>
                    <p class=\"mb-4 text-secondary-light font-normal line-through\">This is a paragraph. it stands out from regular Delete text </p>
                    <p class=\"mb-4 text-secondary-light font-normal line-through\">This line of text is meant to be treated as no longer accurate.</p>
                    <p class=\"mb-4 text-secondary-light font-normal underline\">This line of text will render as underlined</p>
                    <p class=\"mb-4 text-secondary-light font-normal underline\">This line of text is meant to be treated as an addition to the document.</p>
                    <p class=\"mb-4 text-secondary-light font-normal\">This is a paragraph. it stands out from regular text.</p>
                    <p class=\"mb-4 text-secondary-light font-semibold\">This line rendered as bold text.</p>
                    <p class=\"mb-4 text-secondary-light italic\">This line rendered as italicized text.</p>
                    <p class=\"text-secondary-light italic\">This line rendered as italicized text.</p>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center justify-between\">
                    <h6 class=\"text-lg font-semibold mb-0\">Text</h6>
                    <h6 class=\"text-lg font-semibold mb-0\">Font Size</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <div class=\"flex items-center justify-between mb-4\">
                        <p class=\"text-lg text-secondary-light\">This is text</p>
                        <span class=\"text-sm text-secondary-light font-normal\">18px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <p class=\"text-base text-secondary-light\">This is text</p>
                        <span class=\"text-sm text-secondary-light font-normal\">16px</span>
                    </div>
                    <div class=\"flex items-center justify-between mb-4\">
                        <p class=\"text-sm text-secondary-light\">This is text</p>
                        <span class=\"text-sm text-secondary-light font-normal\">14px</span>
                    </div>
                    <div class=\"flex items-center justify-between\">
                        <p class=\"text-xs text-secondary-light\">This is text</p>
                        <span class=\"text-sm text-secondary-light font-normal\">12px</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 md:col-span-6\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Text Decoration</h6>
                </div>
                <div class=\"card-body py-4 px-6\">
                    <p class=\"mb-4 text-secondary-light font-normal\">Use underline, line-through, or text-decoration-none class to decorate text in components respectively.</p>
                    <p class=\"mb-4 text-neutral-600 dark:text-neutral-200 font-normal underline\">This text has a line underneath it.</p>
                    <p class=\"mb-4 text-neutral-600 dark:text-neutral-200 font-normal line-through\">This text has a line going through it.</p>
                    <p class=\"text-secondary-light font-normal\">This link has its text decoration removed</p>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 xl:col-span-12\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Blockquote Background Color Text</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                        <div class=\"p-4 bg-info-50 dark:bg-info-600/20 rounded-lg border-l-[3px] border-info border-info-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-info-600 dark:text-info-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-success-50 dark:bg-success-600/20 rounded-lg border-l-[3px] border-success-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-success-600 dark:text-success-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-info-50 dark:bg-info-600/20 rounded-lg border-l-[3px] border-info-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-info-600 dark:text-info-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-danger-50 dark:bg-danger-600/20 rounded-lg border-l-[3px] border-danger-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-danger-600 dark:text-danger-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-warning-50 dark:bg-warning-600/20 rounded-lg border-l-[3px] border-warning-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-warning-600 dark:text-warning-500 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-neutral-50 dark:bg-neutral-600 rounded-lg border-l-[3px] border-neutral-600 dark:border-neutral-200\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-neutral-600 dark:text-neutral-200 mb-0\">- WowDash</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-span-12 xl:col-span-12\">
            <div class=\"card h-full p-0 border-0 overflow-hidden\">
                <div class=\"card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6\">
                    <h6 class=\"text-lg font-semibold mb-0\">Blockquote Border Color</h6>
                </div>
                <div class=\"card-body p-6\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-cyan-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-cyan-600 dark:text-cyan-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-success-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-success-600 dark:text-success-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-info-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-info-600 dark:text-info-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-danger-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-danger-600 dark:text-danger-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-warning-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-warning-600 dark:text-warning-600 mb-0\">- WowDash</span>
                        </div>
                        <div class=\"p-4 bg-transparent rounded-lg border border-start-width-3-px border-neutral-600\">
                            <h6 class=\"text-neutral-600 dark:text-neutral-200 text-base mb-2\">Custom Blockquote Primary Example</h6>
                            <span class=\"text-neutral-600 dark:text-neutral-200 mb-0\">- WowDash</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}
", "componentspage/typography.html.twig", "E:\\Symfony\\WowDash\\templates\\componentspage\\typography.html.twig");
    }
}
