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

/* settings/notification.html.twig */
class __TwigTemplate_208b2296daf37663e8c0490533e81fb7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/notification.html.twig"));

        $this->parent = $this->loadTemplate("./layout/layout.html.twig", "settings/notification.html.twig", 1);
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
    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
        <div class=\"card-body p-10\">
            <form action=\"#\">
                <div class=\"grid md:grid-cols-2 gap-x-5\">
                    <div class=\"mb-5\">
                        <label for=\"firebaseSecretKey\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase secret key</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseSecretKey\" placeholder=\"Firebase secret key\" value=\"AAAAxGHw9lE:APA91bHKj6OsrD6EhnG5p26oTiQkXvOxTZwZEfVuuuipyUSNM-a8NB_CugVwfvvaosOvWgFAhQJOLMvxtv7e3Sw8DYpaWKwJIN3kjyIPoNRAe541sBz3x7E6sXZkA-ebueqnQiqNtbdP\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebasePublicVapidKey\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase public vapid key (key pair)</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebasePublicVapidKey\" placeholder=\"Firebase public vapid key (key pair)\" value=\"BKAvKJbnB3QATdp8n1aUo_uhoNK3exVKLVzy7MP8VKydjjzthdlAWdlku6LQISxm4zA7dWoRACI9AHymf4V64kA\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseAPIKey\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  API Key</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseAPIKey\" placeholder=\"Firebase  API Key\" value=\"AIzaSyDg1xBSwmHKV0usIKxTFL5a6fFTb4s3XVM\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseAuthDomain\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  AUTH Domain</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseAuthDomain\" placeholder=\"Firebase  AUTH Domain\" value=\"wowdash.firebaseapp.com\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseProjectID\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase Project ID</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseProjectID\" placeholder=\"Firebase Project ID\" value=\"wowdash.com\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseStorageBucket\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase Storage Bucket</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseStorageBucket\" placeholder=\"Firebase Storage Bucket\" value=\"wowdash.appsport.com\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseMessageSenderID\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  Message Sender ID</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseMessageSenderID\" placeholder=\"Firebase  Message Sender ID\" value=\"52362145\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseAppID\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  App ID</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseAppID\" placeholder=\"Firebase  App ID\" value=\"1:843456771665:web:ac1e3115e9e17ee1582a70\">
                    </div>
                    <div class=\"mb-5 col-span-2\">
                        <label for=\"firebaseMeasurmentID\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  Measurement ID</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseMeasurmentID\" placeholder=\"Firebase  Measurement ID\" value=\"G-GSJPS921XW\">
                    </div>

                    <div class=\"flex items-center justify-center gap-3 mt-6 col-span-2\">
                        <button type=\"reset\" class=\"border border-danger-600 hover:bg-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg\">
                            Reset
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg\">
                            Save Change
                        </button>
                    </div>
                </div>
            </form>
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
        return "settings/notification.html.twig";
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

    <div class=\"card h-full rounded-xl overflow-hidden border-0\">
        <div class=\"card-body p-10\">
            <form action=\"#\">
                <div class=\"grid md:grid-cols-2 gap-x-5\">
                    <div class=\"mb-5\">
                        <label for=\"firebaseSecretKey\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase secret key</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseSecretKey\" placeholder=\"Firebase secret key\" value=\"AAAAxGHw9lE:APA91bHKj6OsrD6EhnG5p26oTiQkXvOxTZwZEfVuuuipyUSNM-a8NB_CugVwfvvaosOvWgFAhQJOLMvxtv7e3Sw8DYpaWKwJIN3kjyIPoNRAe541sBz3x7E6sXZkA-ebueqnQiqNtbdP\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebasePublicVapidKey\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase public vapid key (key pair)</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebasePublicVapidKey\" placeholder=\"Firebase public vapid key (key pair)\" value=\"BKAvKJbnB3QATdp8n1aUo_uhoNK3exVKLVzy7MP8VKydjjzthdlAWdlku6LQISxm4zA7dWoRACI9AHymf4V64kA\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseAPIKey\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  API Key</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseAPIKey\" placeholder=\"Firebase  API Key\" value=\"AIzaSyDg1xBSwmHKV0usIKxTFL5a6fFTb4s3XVM\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseAuthDomain\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  AUTH Domain</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseAuthDomain\" placeholder=\"Firebase  AUTH Domain\" value=\"wowdash.firebaseapp.com\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseProjectID\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase Project ID</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseProjectID\" placeholder=\"Firebase Project ID\" value=\"wowdash.com\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseStorageBucket\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase Storage Bucket</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseStorageBucket\" placeholder=\"Firebase Storage Bucket\" value=\"wowdash.appsport.com\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseMessageSenderID\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  Message Sender ID</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseMessageSenderID\" placeholder=\"Firebase  Message Sender ID\" value=\"52362145\">
                    </div>
                    <div class=\"mb-5\">
                        <label for=\"firebaseAppID\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  App ID</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseAppID\" placeholder=\"Firebase  App ID\" value=\"1:843456771665:web:ac1e3115e9e17ee1582a70\">
                    </div>
                    <div class=\"mb-5 col-span-2\">
                        <label for=\"firebaseMeasurmentID\" class=\"text-sm font-semibold mb-2 block text-neutral-900 dark:text-white\">Firebase  Measurement ID</label>
                        <input type=\"text\" class=\"form-control rounded-lg\" id=\"firebaseMeasurmentID\" placeholder=\"Firebase  Measurement ID\" value=\"G-GSJPS921XW\">
                    </div>

                    <div class=\"flex items-center justify-center gap-3 mt-6 col-span-2\">
                        <button type=\"reset\" class=\"border border-danger-600 hover:bg-danger-200 text-danger-600 text-base px-10 py-[11px] rounded-lg\">
                            Reset
                        </button>
                        <button type=\"submit\" class=\"btn btn-primary border border-primary-600 text-base px-6 py-3 rounded-lg\">
                            Save Change
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

{% endblock content %}", "settings/notification.html.twig", "E:\\Symfony\\WowDash\\templates\\settings\\notification.html.twig");
    }
}
