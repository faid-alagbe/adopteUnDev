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

/* matching/dev_suggestion.html.twig */
class __TwigTemplate_5a9646592124a7c09a8dabad257017eb extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/dev_suggestion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "matching/dev_suggestion.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "Liste des développeurs
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<!-- Begin page -->
<div id=\"layout-wrapper\">
    <header id=\"page-topbar\">
        <div class=\"layout-width\">
            <div class=\"navbar-header\">
                <!-- LOGO -->
                <div class=\"navbar-brand-box horizontal-logo\">
                    <a href=\"index.html\" class=\"logo logo-dark\">
                        <span class=\"logo-sm\">
                            <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
                        </span>
                        <span class=\"logo-lg\">
                            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        yield "\" alt=\"\" height=\"17\">
                        </span>
                    </a>
                    <a href=\"index.html\" class=\"logo logo-light\">
                        <span class=\"logo-sm\">
                            <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
                        </span>
                        <span class=\"logo-lg\">
                            <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        yield "\" alt=\"\" height=\"17\">
                        </span>
                    </a>
                </div>
                <!-- Search bar -->
                <form class=\"app-search d-none d-md-block\">
                    <div class=\"position-relative\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" autocomplete=\"off\" id=\"search-options\">
                        <span class=\"mdi mdi-magnify search-widget-icon\"></span>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">
                <!-- Page title -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h3 class=\"mb-4\">Liste des développeurs</h3>
                    </div>
                </div>

                <!-- Developers list -->
                <div class=\"row\">
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["company_crters"]) || array_key_exists("company_crters", $context) ? $context["company_crters"] : (function () { throw new RuntimeError('Variable "company_crters" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
            // line 57
            yield "                    <div class=\"col-lg-4\">
                        <div class=\"card shadow-lg\">
                            <div class=\"card-body\">
                                <div class=\"d-flex\">
                                    <div class=\"avatar-sm\">
                                        <div class=\"avatar-title bg-warning-subtle rounded\">
                                            <img src=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/companies/img-3.png"), "html", null, true);
            yield "\" alt=\"\" class=\"avatar-xxs\">
                                        </div>
                                    </div>
                                    <div class=\"ms-3 flex-grow-1\">
                                        <a href=\"#!\">
                                            <h5>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "nom", [], "any", false, false, false, 68), "html", null, true);
            yield "</h5>
                                        </a>
                                        <p class=\"text-warning fst-italic fw-light\">
                                            \"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "biographie", [], "any", false, false, false, 71), "html", null, true);
            yield "\"
                                        </p>
                                        <ul class=\"list-inline text-muted mb-3\">
                                            <li class=\"list-inline-item\">
                                                <i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
                                                ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "localisation", [], "any", false, false, false, 76), "html", null, true);
            yield "
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
                                                ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "salaireMin", [], "any", false, false, false, 80), "html", null, true);
            yield "
                                            </li>
                                        </ul>
                                        <div class=\"hstack gap-2\">
                                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["dev"], "langages", [], "any", false, false, false, 84), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
                // line 85
                yield "                                            <span class=\"badge bg-success-subtle text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["langage"], "html", null, true);
                yield "</span>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['langage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dev'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                </div>
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
        return "matching/dev_suggestion.html.twig";
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
        return array (  222 => 94,  210 => 87,  201 => 85,  197 => 84,  190 => 80,  183 => 76,  175 => 71,  169 => 68,  161 => 63,  153 => 57,  149 => 56,  118 => 28,  112 => 25,  104 => 20,  98 => 17,  87 => 8,  77 => 7,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Liste des développeurs
{% endblock %}

{% block body %}
<!-- Begin page -->
<div id=\"layout-wrapper\">
    <header id=\"page-topbar\">
        <div class=\"layout-width\">
            <div class=\"navbar-header\">
                <!-- LOGO -->
                <div class=\"navbar-brand-box horizontal-logo\">
                    <a href=\"index.html\" class=\"logo logo-dark\">
                        <span class=\"logo-sm\">
                            <img src=\"{{ asset('assets/images/logo-sm.png') }}\" alt=\"\" height=\"22\">
                        </span>
                        <span class=\"logo-lg\">
                            <img src=\"{{ asset('assets/images/logo-dark.png') }}\" alt=\"\" height=\"17\">
                        </span>
                    </a>
                    <a href=\"index.html\" class=\"logo logo-light\">
                        <span class=\"logo-sm\">
                            <img src=\"{{ asset('assets/images/logo-sm.png') }}\" alt=\"\" height=\"22\">
                        </span>
                        <span class=\"logo-lg\">
                            <img src=\"{{ asset('assets/images/logo-light.png') }}\" alt=\"\" height=\"17\">
                        </span>
                    </a>
                </div>
                <!-- Search bar -->
                <form class=\"app-search d-none d-md-block\">
                    <div class=\"position-relative\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" autocomplete=\"off\" id=\"search-options\">
                        <span class=\"mdi mdi-magnify search-widget-icon\"></span>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">
                <!-- Page title -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h3 class=\"mb-4\">Liste des développeurs</h3>
                    </div>
                </div>

                <!-- Developers list -->
                <div class=\"row\">
                    {% for dev in company_crters %}
                    <div class=\"col-lg-4\">
                        <div class=\"card shadow-lg\">
                            <div class=\"card-body\">
                                <div class=\"d-flex\">
                                    <div class=\"avatar-sm\">
                                        <div class=\"avatar-title bg-warning-subtle rounded\">
                                            <img src=\"{{ asset('assets/images/companies/img-3.png') }}\" alt=\"\" class=\"avatar-xxs\">
                                        </div>
                                    </div>
                                    <div class=\"ms-3 flex-grow-1\">
                                        <a href=\"#!\">
                                            <h5>{{ dev.nom }}</h5>
                                        </a>
                                        <p class=\"text-warning fst-italic fw-light\">
                                            \"{{ dev.biographie }}\"
                                        </p>
                                        <ul class=\"list-inline text-muted mb-3\">
                                            <li class=\"list-inline-item\">
                                                <i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
                                                {{ dev.localisation }}
                                            </li>
                                            <li class=\"list-inline-item\">
                                                <i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
                                                {{ dev.salaireMin }}
                                            </li>
                                        </ul>
                                        <div class=\"hstack gap-2\">
                                            {% for langage in dev.langages | slice(0, 6) %}
                                            <span class=\"badge bg-success-subtle text-success\">{{ langage }}</span>
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "matching/dev_suggestion.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\matching\\dev_suggestion.html.twig");
    }
}
