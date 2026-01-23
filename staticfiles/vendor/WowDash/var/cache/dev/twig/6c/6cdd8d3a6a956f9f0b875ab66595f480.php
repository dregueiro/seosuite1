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

/* invoice/invoicePreview.html.twig */
class __TwigTemplate_62243885d0ca7b0ddd879cbae437666b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/invoicePreview.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "invoice/invoicePreview.html.twig", 1);
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
        function printInvoice() {
            var printContents = document.getElementById(\"invoice\").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 19
        yield "
    <div class=\"card border-0\">
        <div class=\"card-header\">
            <div class=\"flex flex-wrap items-center justify-end gap-2\">
                <a href=\"javascript:void(0)\" class=\"btn btn-sm bg-primary-600 hover:bg-primary-700 text-white rounded-lg inline-flex items-center gap-1\">
                    <iconify-icon icon=\"pepicons-pencil:paper-plane\" class=\"text-xl\"></iconify-icon>
                    Send Invoice
                </a>
                <a href=\"javascript:void(0)\" class=\"btn btn-sm bg-warning-600 hover:bg-warning-700 text-white rounded-lg inline-flex items-center gap-1\">
                    <iconify-icon icon=\"solar:download-linear\" class=\"text-xl\"></iconify-icon>
                    Download
                </a>
                <a href=\"javascript:void(0)\" class=\"btn btn-sm bg-success-600 hover:bg-success-700 text-white rounded-lg inline-flex items-center gap-1\">
                    <iconify-icon icon=\"uil:edit\" class=\"text-xl\"></iconify-icon>
                    Edit
                </a>
                <button type=\"button\" class=\"btn btn-sm bg-danger-600 hover:bg-danger-700 text-white rounded-lg inline-flex items-center gap-1\" onclick=\"printInvoice()\">
                    <iconify-icon icon=\"basil:printer-outline\" class=\"text-xl\"></iconify-icon>
                    Print
                </button>
            </div>
        </div>
        <div class=\"card-body py-[60px]\">
            <div class=\"grid grid-cols-1\" id=\"invoice\">
                <div class=\"max-w-[1174px] mx-auto w-full\">
                    <div class=\"shadow-4 border border-neutral-200 dark:border-neutral-600 rounded-lg\">
                        <div class=\"p-5 flex flex-wrap justify-between gap-3 border-b border-neutral-200 dark:border-neutral-600\">
                            <div>
                                <h3 class=\"text-xl\">Invoice #3492</h3>
                                <p class=\"mb-1 text-sm\">Date Issued: 25/08/2020</p>
                                <p class=\"mb-0 text-sm\">Date Due: 29/08/2020</p>
                            </div>
                            <div>
                                <img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" alt=\"image\" class=\"mb-2\">
                                <p class=\"mb-1 text-sm\">4517 Washington Ave. Manchester, Kentucky 39495</p>
                                <p class=\"mb-0 text-sm\">random@gmail.com, +1 543 2198</p>
                            </div>
                        </div>
                        <div class=\"py-7 px-5\">
                            <div class=\"flex flex-wrap justify-between align-items-end gap-3\">
                                <div>
                                    <h6 class=\"text-base\">Issus For:</h6>
                                    <table class=\"text-sm text-secondary-light\">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td class=\"ps-2\">:Will Marthas</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td class=\"ps-2\">:4517 Washington Ave.USA</td>
                                            </tr>
                                            <tr>
                                                <td>Phone number</td>
                                                <td class=\"ps-2\">:+1 543 2198</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class=\"text-sm text-secondary-light\">
                                        <tbody>
                                            <tr>
                                                <td>Issus Date</td>
                                                <td class=\"ps-2\">:25 Jan 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Order ID</td>
                                                <td class=\"ps-2\">:#653214</td>
                                            </tr>
                                            <tr>
                                                <td>Shipment ID</td>
                                                <td class=\"ps-2\">:#965215</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class=\"mt-6\">
                                <div class=\"table-responsive scroll-sm\">
                                    <table class=\"table bordered-table text-sm\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\" class=\"text-sm\">SL.</th>
                                                <th scope=\"col\" class=\"text-sm\">Items</th>
                                                <th scope=\"col\" class=\"text-sm\">Qty</th>
                                                <th scope=\"col\" class=\"text-sm\">Units</th>
                                                <th scope=\"col\" class=\"text-sm\">Unit Price</th>
                                                <th scope=\"col\" class=\"text-end text-sm\">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>\$200</td>
                                                <td class=\"text-end\">\$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>\$200</td>
                                                <td class=\"text-end\">\$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>\$200</td>
                                                <td class=\"text-end\">\$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>\$200</td>
                                                <td class=\"text-end\">\$1000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"flex flex-wrap justify-between gap-3\">
                                    <div>
                                        <p class=\"text-sm mb-0\"><span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">Sales By:</span> Jammal</p>
                                        <p class=\"text-sm mb-0\">Thanks for your business</p>
                                    </div>
                                    <div>
                                        <table class=\"text-sm\">
                                            <tbody>
                                                <tr>
                                                    <td class=\"pe-[64px]\">Subtotal:</td>
                                                    <td class=\"ps-6\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">\$4000.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"pe-[64px]\">Discount:</td>
                                                    <td class=\"ps-6\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">\$0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"pe-[64px] border-b border-neutral-200 dark:border-neutral-600 pb-4\">Tax:</td>
                                                    <td class=\"ps-6 border-b border-neutral-200 dark:border-neutral-600 pb-4\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"pe-[64px] pt-4\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">Total:</span>
                                                    </td>
                                                    <td class=\"ps-6 pt-4\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">\$1690</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class=\"mt-16\">
                                <p class=\"text-center text-secondary-light text-sm font-semibold\">Thank you for your purchase!</p>
                            </div>

                            <div class=\"flex flex-wrap justify-between align-items-end mt-16\">
                                <div class=\"text-sm border-t border-neutral-200 dark:border-neutral-600 inline-block px-3\">Signature of Customer</div>
                                <div class=\"text-sm border-t border-neutral-200 dark:border-neutral-600 inline-block px-3\">Signature of Authorized</div>
                            </div>
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
        return "invoice/invoicePreview.html.twig";
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
        return array (  133 => 52,  98 => 19,  88 => 18,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends './layout/layout.html.twig' %}

    {% block custom_script %}
    <script>
        function printInvoice() {
            var printContents = document.getElementById(\"invoice\").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    {% endblock custom_script %}

{% block content %}

    <div class=\"card border-0\">
        <div class=\"card-header\">
            <div class=\"flex flex-wrap items-center justify-end gap-2\">
                <a href=\"javascript:void(0)\" class=\"btn btn-sm bg-primary-600 hover:bg-primary-700 text-white rounded-lg inline-flex items-center gap-1\">
                    <iconify-icon icon=\"pepicons-pencil:paper-plane\" class=\"text-xl\"></iconify-icon>
                    Send Invoice
                </a>
                <a href=\"javascript:void(0)\" class=\"btn btn-sm bg-warning-600 hover:bg-warning-700 text-white rounded-lg inline-flex items-center gap-1\">
                    <iconify-icon icon=\"solar:download-linear\" class=\"text-xl\"></iconify-icon>
                    Download
                </a>
                <a href=\"javascript:void(0)\" class=\"btn btn-sm bg-success-600 hover:bg-success-700 text-white rounded-lg inline-flex items-center gap-1\">
                    <iconify-icon icon=\"uil:edit\" class=\"text-xl\"></iconify-icon>
                    Edit
                </a>
                <button type=\"button\" class=\"btn btn-sm bg-danger-600 hover:bg-danger-700 text-white rounded-lg inline-flex items-center gap-1\" onclick=\"printInvoice()\">
                    <iconify-icon icon=\"basil:printer-outline\" class=\"text-xl\"></iconify-icon>
                    Print
                </button>
            </div>
        </div>
        <div class=\"card-body py-[60px]\">
            <div class=\"grid grid-cols-1\" id=\"invoice\">
                <div class=\"max-w-[1174px] mx-auto w-full\">
                    <div class=\"shadow-4 border border-neutral-200 dark:border-neutral-600 rounded-lg\">
                        <div class=\"p-5 flex flex-wrap justify-between gap-3 border-b border-neutral-200 dark:border-neutral-600\">
                            <div>
                                <h3 class=\"text-xl\">Invoice #3492</h3>
                                <p class=\"mb-1 text-sm\">Date Issued: 25/08/2020</p>
                                <p class=\"mb-0 text-sm\">Date Due: 29/08/2020</p>
                            </div>
                            <div>
                                <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"image\" class=\"mb-2\">
                                <p class=\"mb-1 text-sm\">4517 Washington Ave. Manchester, Kentucky 39495</p>
                                <p class=\"mb-0 text-sm\">random@gmail.com, +1 543 2198</p>
                            </div>
                        </div>
                        <div class=\"py-7 px-5\">
                            <div class=\"flex flex-wrap justify-between align-items-end gap-3\">
                                <div>
                                    <h6 class=\"text-base\">Issus For:</h6>
                                    <table class=\"text-sm text-secondary-light\">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td class=\"ps-2\">:Will Marthas</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td class=\"ps-2\">:4517 Washington Ave.USA</td>
                                            </tr>
                                            <tr>
                                                <td>Phone number</td>
                                                <td class=\"ps-2\">:+1 543 2198</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class=\"text-sm text-secondary-light\">
                                        <tbody>
                                            <tr>
                                                <td>Issus Date</td>
                                                <td class=\"ps-2\">:25 Jan 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Order ID</td>
                                                <td class=\"ps-2\">:#653214</td>
                                            </tr>
                                            <tr>
                                                <td>Shipment ID</td>
                                                <td class=\"ps-2\">:#965215</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class=\"mt-6\">
                                <div class=\"table-responsive scroll-sm\">
                                    <table class=\"table bordered-table text-sm\">
                                        <thead>
                                            <tr>
                                                <th scope=\"col\" class=\"text-sm\">SL.</th>
                                                <th scope=\"col\" class=\"text-sm\">Items</th>
                                                <th scope=\"col\" class=\"text-sm\">Qty</th>
                                                <th scope=\"col\" class=\"text-sm\">Units</th>
                                                <th scope=\"col\" class=\"text-sm\">Unit Price</th>
                                                <th scope=\"col\" class=\"text-end text-sm\">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>\$200</td>
                                                <td class=\"text-end\">\$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>\$200</td>
                                                <td class=\"text-end\">\$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>\$200</td>
                                                <td class=\"text-end\">\$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>\$200</td>
                                                <td class=\"text-end\">\$1000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"flex flex-wrap justify-between gap-3\">
                                    <div>
                                        <p class=\"text-sm mb-0\"><span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">Sales By:</span> Jammal</p>
                                        <p class=\"text-sm mb-0\">Thanks for your business</p>
                                    </div>
                                    <div>
                                        <table class=\"text-sm\">
                                            <tbody>
                                                <tr>
                                                    <td class=\"pe-[64px]\">Subtotal:</td>
                                                    <td class=\"ps-6\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">\$4000.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"pe-[64px]\">Discount:</td>
                                                    <td class=\"ps-6\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">\$0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"pe-[64px] border-b border-neutral-200 dark:border-neutral-600 pb-4\">Tax:</td>
                                                    <td class=\"ps-6 border-b border-neutral-200 dark:border-neutral-600 pb-4\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"pe-[64px] pt-4\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">Total:</span>
                                                    </td>
                                                    <td class=\"ps-6 pt-4\">
                                                        <span class=\"text-neutral-600 dark:text-neutral-200 font-semibold\">\$1690</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class=\"mt-16\">
                                <p class=\"text-center text-secondary-light text-sm font-semibold\">Thank you for your purchase!</p>
                            </div>

                            <div class=\"flex flex-wrap justify-between align-items-end mt-16\">
                                <div class=\"text-sm border-t border-neutral-200 dark:border-neutral-600 inline-block px-3\">Signature of Customer</div>
                                <div class=\"text-sm border-t border-neutral-200 dark:border-neutral-600 inline-block px-3\">Signature of Authorized</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "invoice/invoicePreview.html.twig", "E:\\Symfony\\WowDash\\templates\\invoice\\invoicePreview.html.twig");
    }
}
