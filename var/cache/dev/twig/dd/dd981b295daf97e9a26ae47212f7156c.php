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

/* profil/editprofil.html.twig */
class __TwigTemplate_df52fbbb0b146fb9405b4e2cfef5572e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/editprofil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/editprofil.html.twig", 1);
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

        yield "Profile
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<!-- Begin page -->
\t<div id=\"layout-wrapper\">

\t\t<header id=\"page-topbar\">
\t\t\t<div class=\"layout-width\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex\">
\t\t\t\t\t\t<!-- LOGO -->
\t\t\t\t\t\t<div class=\"navbar-brand-box horizontal-logo\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark\">
\t\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        yield "\" alt=\"\" height=\"17\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        yield "\" alt=\"\" height=\"17\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none\" id=\"topnav-hamburger-icon\">
\t\t\t\t\t\t\t<span class=\"hamburger-icon\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>


\t\t\t\t\t\t<!-- App Search-->
\t\t\t\t\t\t<form class=\"app-search d-none d-md-block\">
\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\" autocomplete=\"off\" id=\"search-options\" value=\"\">
\t\t\t\t\t\t\t\t<span class=\"mdi mdi-magnify search-widget-icon\"></span>
\t\t\t\t\t\t\t\t<span class=\"mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none\" id=\"search-close-options\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg\" id=\"search-dropdown\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tdata-simplebar style=\"max-height: 320px;\">
\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow text-muted mb-0 text-uppercase\">Recent Searches</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-item bg-transparent text-wrap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-soft-secondary btn-sm rounded-pill\">how to setup
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-magnify ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-soft-secondary btn-sm rounded-pill\">buttons
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-magnify ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header mt-2\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow text-muted mb-1 text-uppercase\">Pages</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bubble-chart-line align-middle fs-18 text-muted me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Analytics Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-lifebuoy-line align-middle fs-18 text-muted me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Help Center</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-settings-line align-middle fs-18 text-muted me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>My account settings</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header mt-2\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow text-muted mb-2 text-uppercase\">Members</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"notification-list\">
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Manager</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">David Grasso</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Web Designer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-5.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Mike Bunch</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">React Developer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"text-center pt-3 pb-1\">
\t\t\t\t\t\t\t\t\t<a href=\"pages-search-results.html\" class=\"btn btn-primary btn-sm\">View All Results
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center\">

\t\t\t\t\t\t<div class=\"dropdown d-md-none topbar-head-dropdown header-item\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-search-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"bx bx-search fs-22\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\" aria-labelledby=\"page-header-search-dropdown\">
\t\t\t\t\t\t\t\t<form class=\"p-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group m-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search ...\" aria-label=\"Recipient's username\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-magnify\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown ms-1 topbar-head-dropdown header-item\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img id=\"header-lang-img\" src=\" ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/us.svg"), "html", null, true);
        yield "\" alt=\"Header Language\" height=\"20\" class=\"rounded\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language py-2\" data-lang=\"en\" title=\"English\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/us.svg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">English</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"sp\" title=\"Spanish\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/spain.svg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Española</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"gr\" title=\"German\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/germany.svg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Deutsche</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"it\" title=\"Italian\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/italy.svg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Italiana</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ru\" title=\"Russian\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/russia.svg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">русский</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ch\" title=\"Chinese\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/china.svg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">中国人</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"fr\" title=\"French\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/french.svg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">français</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ar\" title=\"Arabic\">
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/ae.svg"), "html", null, true);
        yield "\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Arabic</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class='bx bx-category-alt fs-22'></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end\">
\t\t\t\t\t\t\t\t<div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 fw-semibold fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\tWeb Apps
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-sm btn-soft-info\">
\t\t\t\t\t\t\t\t\t\t\t\tView All Apps
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-s-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brands/github.png"), "html", null, true);
        yield "\" alt=\"Github\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>GitHub</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brands/bitbucket.png"), "html", null, true);
        yield "\" alt=\"bitbucket\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Bitbucket</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brands/dribbble.png"), "html", null, true);
        yield "\" alt=\"dribbble\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Dribbble</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brands/dropbox.png"), "html", null, true);
        yield "\" alt=\"dropbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Dropbox</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brands/mail_chimp.png"), "html", null, true);
        yield "\" alt=\"mail_chimp\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Mail Chimp</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/brands/slack.png"), "html", null, true);
        yield "\" alt=\"slack\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Slack</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-cart-dropdown\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class='bx bx-shopping-bag fs-22'></i>
\t\t\t\t\t\t\t\t<span class=\"position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info\">5</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart\" aria-labelledby=\"page-header-cart-dropdown\">
\t\t\t\t\t\t\t\t<div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 fs-16 fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\tMy Cart</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning-subtle text-warning fs-13\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cartitem-badge\">7</span>
\t\t\t\t\t\t\t\t\t\t\t\titems</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-simplebar style=\"max-height: 300px;\">
\t\t\t\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center empty-cart\" id=\"empty-cart\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-md mx-auto my-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle text-info fs-36 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-cart'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Your Cart is Empty!</h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products.html\" class=\"btn btn-success w-md mb-3\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/img-1.png"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Branded
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        T-Shirts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10 x \$32</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">320</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/img-2.png"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Bentwood Chair</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>5 x \$18</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">89</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/img-3.png"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBorosil Paper Cup</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 x \$250</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">750</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/img-6.png"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Gray
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        Styled T-Shirt</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1 x \$1250</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart-item-price\">1250</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/products/img-5.png"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Stillbird Helmet</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>2 x \$495</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">990</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border\" id=\"checkout-elem\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center pb-3\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 text-muted\">Total:</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\" id=\"cart-item-total\">\$1258.58</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-checkout.html\" class=\"btn btn-success text-center w-100\">
\t\t\t\t\t\t\t\t\t\tCheckout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"ms-1 header-item d-none d-sm-flex\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-toggle=\"fullscreen\">
\t\t\t\t\t\t\t\t<i class='bx bx-fullscreen fs-22'></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"ms-1 header-item d-none d-sm-flex\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode\">
\t\t\t\t\t\t\t\t<i class='bx bx-moon fs-22'></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown topbar-head-dropdown ms-1 header-item\" id=\"notificationDropdown\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-notifications-dropdown\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class='bx bx-bell fs-22'></i>
\t\t\t\t\t\t\t\t<span class=\"position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger\">3<span class=\"visually-hidden\">unread messages</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\" aria-labelledby=\"page-header-notifications-dropdown\">

\t\t\t\t\t\t\t\t<div class=\"dropdown-head bg-primary bg-pattern rounded-top\">
\t\t\t\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 fs-16 fw-semibold text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNotifications
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto dropdown-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-body fs-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t4 New</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"px-2 pt-2\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs dropdown-tabs nav-tabs-custom\" data-dropdown-tabs=\"true\" id=\"notificationItemsTab\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#all-noti-tab\" role=\"tab\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAll (4)
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#messages-tab\" role=\"tab\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMessages
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#alerts-tab\" role=\"tab\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAlerts
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-content position-relative\" id=\"notificationItemsTabContent\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active py-2 ps-2\" id=\"all-noti-tab\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t<div data-simplebar style=\"max-height: 300px;\" class=\"pe-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs me-3 flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-info-subtle text-info rounded-circle fs-16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-badge-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-2 lh-base\">Your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Elite</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tauthor Graphic
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            Optimization
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">reward</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            ready!
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJust 30 sec ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check01\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"all-notification-check01\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs flex-shrink-0\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">Answered to your comment on the cash flow forecast's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            graph 🔔.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t48 min ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check02\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"all-notification-check02\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs me-3 flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-danger-subtle text-danger rounded-circle fs-16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-message-square-dots'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-2 fs-13 lh-base\">You have received
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"text-success\">20</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnew messages in the conversation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hrs ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check03\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"all-notification-check03\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-8.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs flex-shrink-0\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Maureen Gibson</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">We talked about a project on linkedin.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t4 hrs ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check04\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"all-notification-check04\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-3 text-center view-all\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-soft-success waves-effect waves-light\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                All Notifications
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade py-2 ps-2\" id=\"messages-tab\" role=\"tabpanel\" aria-labelledby=\"messages-tab\">
\t\t\t\t\t\t\t\t\t\t<div data-simplebar style=\"max-height: 300px;\" class=\"pe-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">James Lemire</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">We talked about a project on linkedin.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t30 min ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check01\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"messages-notification-check01\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">Answered to your comment on the cash flow forecast's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            graph 🔔.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hrs ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check02\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"messages-notification-check02\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 692
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-6.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Kenneth Brown</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">Mentionned you in his comment on 📃 invoice #12501.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t10 hrs ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check03\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"messages-notification-check03\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-8.jpg"), "html", null, true);
        yield "\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Maureen Gibson</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">We talked about a project on linkedin.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t3 days ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check04\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"messages-notification-check04\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-3 text-center view-all\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-soft-success waves-effect waves-light\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                All Messages
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade p-4\" id=\"alerts-tab\" role=\"tabpanel\" aria-labelledby=\"alerts-tab\"></div>

\t\t\t\t\t\t\t\t\t<div class=\"notification-actions\" id=\"notification-actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex text-muted justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\tSelect
\t\t\t\t\t\t\t\t\t\t\t<div id=\"select-content\" class=\"text-body fw-semibold px-1\">0</div>
\t\t\t\t\t\t\t\t\t\t\tResult
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link link-danger p-0 ms-3\" data-bs-toggle=\"modal\" data-bs-target=\"#removeNotificationModal\">Remove</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown ms-sm-3 header-item topbar-user\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle header-profile-user\" src=\" ";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        yield "\" alt=\"Header Avatar\">
\t\t\t\t\t\t\t\t\t<span class=\"text-start ms-xl-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">Anna Adame</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Founder</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Welcome Anna!</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"apps-chat.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-message-text-outline text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Messages</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"apps-tasks-kanban.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Taskboard</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-faqs.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-lifebuoy text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Help</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-wallet text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Balance :
\t\t\t\t\t\t\t\t\t\t<b>\$5971.67</b>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile-settings.html\">
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success mt-1 float-end\">New</span>
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-cog-outline text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Settings</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"auth-lockscreen-basic.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-lock text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Lock screen</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"auth-logout-basic.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Logout</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<!-- removeNotificationModal -->
\t\t<div id=\"removeNotificationModal\" class=\"modal fade zoomIn\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\" id=\"NotificationModalbtn-close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"mt-2 text-center\">
\t\t\t\t\t\t\t<lord-icon src=\"https://cdn.lordicon.com/gsqxdxog.json\" trigger=\"loop\" colors=\"primary:#f7b84b,secondary:#f06548\" style=\"width:100px;height:100px\"></lord-icon>
\t\t\t\t\t\t\t<div class=\"mt-4 pt-2 fs-15 mx-4 mx-sm-5\">
\t\t\t\t\t\t\t\t<h4>Are you sure ?</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mx-4 mb-0\">Are you sure you want to remove this Notification ?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex gap-2 justify-content-center mt-4 mb-2\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn w-sm btn-light\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn w-sm btn-danger\" id=\"delete-notification\">Yes, Delete It!</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.modal-content -->
\t\t\t</div>
\t\t\t<!-- /.modal-dialog -->
\t\t</div>
\t\t<!-- /.modal -->
\t\t<!-- ========== App Menu ========== -->
\t\t<div
\t\t\tclass=\"navbar-menu\" hidden>
\t\t\t<!-- LOGO -->
\t\t\t<div
\t\t\t\tclass=\"navbar-brand-box\">
\t\t\t\t<!-- Dark Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\" ";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\" ";
        // line 859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        yield "\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<!-- Light Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\" ";
        // line 865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\" ";
        // line 868
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        yield "\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
\t\t\t\t\t<i class=\"ri-record-circle-line\"></i>
\t\t\t\t</button>
\t\t\t\t<div id=\"two-column-menu\"></div>
\t\t\t\t<ul class=\"navbar-nav\" id=\"navbar-nav\"></ul>
\t\t\t\t<div id=\"scrollbar\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<!-- Left Sidebar End -->
\t\t<!-- Vertical Overlay-->
\t\t<div></div>

\t\t<!-- ============================================================== -->
\t\t<!-- Start right Content here -->
\t\t<!-- ============================================================== -->
\t\t\t<div>

\t\t\t\t<div class=\"page-content\"> <div class=\"container-fluid\">

\t\t\t\t\t<div class=\"position-relative mx-n4\">
\t\t\t\t\t\t<div class=\"profile-wid-bg profile-setting-img\">
\t\t\t\t\t\t\t<img src=\" ";
        // line 896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-bg.jpg"), "html", null, true);
        yield "\" class=\"profile-wid-img\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t<div class=\"text-end\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xxl-3\">
\t\t\t\t\t\t\t<div class=\"card mt-n5\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-user position-relative d-inline-block mx-auto  mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        yield "\" class=\"rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow\" alt=\"user-profile-image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs p-0 rounded-circle profile-photo-edit\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"profile-img-file-input\" class=\"profile-photo-edit avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle bg-light text-body material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-camera-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-16 mb-1\">Anna Adame</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Lead Designer / Developer</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end card-->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Complete Your Profile</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"badge bg-light text-primary fs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-edit-box-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEdit</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress animated-progress custom-progress progress-label\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 30%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label\">30%</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Portfolio</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"badge bg-light text-primary fs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-add-fill align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tAdd</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs d-block flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle fs-16 bg-body text-body material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-github-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"gitUsername\" placeholder=\"Username\" value=\"@daveadame\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs d-block flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle fs-16 bg-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-global-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"websiteInput\" placeholder=\"www.example.com\" value=\"www.velzon.com\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs d-block flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle fs-16 bg-success material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-dribbble-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"dribbleName\" placeholder=\"Username\" value=\"@dave_adame\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs d-block flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle fs-16 bg-danger material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pinterest-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pinterestName\" placeholder=\"Username\" value=\"Advance Dave\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t<div class=\"col-xxl-9\">
\t\t\t\t\t\t\t<div class=\"card mt-xxl-n5\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs-custom rounded card-header-tabs border-bottom-0\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#personalDetails\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tPersonal Details
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#changePassword\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tChange Password
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"personalDetails\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1015
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1015, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1018
        yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"firstnameInput\" class=\"form-label\">Nom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1022
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1022, $this->source); })()), "nom", [], "any", false, false, false, 1022), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"firstnameInput\" class=\"form-label\">Prenom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1029
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1029, $this->source); })()), "prenom", [], "any", false, false, false, 1029), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"firstnameInput\" class=\"form-label\">Langages Maîtrisés</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1038
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1038, $this->source); })()), "langages", [], "any", false, false, false, 1038), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1047
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1047, $this->source); })()), "biographie", [], "any", false, false, false, 1047), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Localisation (Ville, Pays)</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1054
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1054, $this->source); })()), "localisation", [], "any", false, false, false, 1054), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Niveau D'expérience</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1061
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1061, $this->source); })()), "experience", [], "any", false, false, false, 1061), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Salaire Minimal</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1068
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1068, $this->source); })()), "salaire_min", [], "any", false, false, false, 1068), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Avatar</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1075
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1075, $this->source); })()), "avatar", [], "any", false, false, false, 1075), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2 justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">";
        // line 1084
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 1084, $this->source); })()), "Updates")) : ("Updates")), "html", null, true);
        yield "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"resert\" class=\"btn btn-soft-success\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1091
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1091, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end tab-pane-->
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"changePassword\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oldpasswordInput\" class=\"form-label\">Old Password*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"oldpasswordInput\" placeholder=\"Enter current password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"newpasswordInput\" class=\"form-label\">New Password*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"newpasswordInput\" placeholder=\"Enter new password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"confirmpasswordInput\" class=\"form-label\">Confirm Password*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"confirmpasswordInput\" placeholder=\"Confirm password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"link-primary text-decoration-underline\">Forgot Password ?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Change Password</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end tab-pane-->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end row-->

\t\t\t\t</div>
\t\t\t\t<!-- container-fluid -->
\t\t\t</div>
\t\t\t<!-- End Page-content -->
\t\t</div>
\t\t<!-- end main content-->

\t</div>
\t<!-- END layout-wrapper -->


\t<!-- JAVASCRIPT -->
\t<script src=\" ";
        // line 1158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 1159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 1160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/node-waves/waves.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 1161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/feather-icons/feather.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 1162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/plugins/lord-icon-2.1.0.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 1163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        yield "\"></script>

\t<!-- profile-setting init js -->
\t<script src=\" ";
        // line 1166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/profile-setting.init.js"), "html", null, true);
        yield "\"></script>

\t<!-- App js -->
\t<script src=\" ";
        // line 1169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profil/editprofil.html.twig";
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
        return array (  1425 => 1169,  1419 => 1166,  1413 => 1163,  1409 => 1162,  1405 => 1161,  1401 => 1160,  1397 => 1159,  1393 => 1158,  1323 => 1091,  1313 => 1084,  1301 => 1075,  1291 => 1068,  1281 => 1061,  1271 => 1054,  1261 => 1047,  1249 => 1038,  1237 => 1029,  1227 => 1022,  1221 => 1018,  1216 => 1015,  1107 => 909,  1091 => 896,  1060 => 868,  1054 => 865,  1045 => 859,  1039 => 856,  946 => 766,  895 => 718,  866 => 692,  837 => 666,  809 => 641,  769 => 604,  711 => 549,  575 => 416,  546 => 390,  518 => 365,  491 => 341,  463 => 316,  419 => 275,  410 => 269,  401 => 263,  389 => 254,  380 => 248,  371 => 242,  337 => 211,  328 => 205,  319 => 199,  310 => 193,  301 => 187,  292 => 181,  283 => 175,  274 => 169,  264 => 162,  220 => 121,  207 => 111,  194 => 101,  121 => 31,  115 => 28,  106 => 22,  100 => 19,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile
{% endblock %}

{% block body %}
\t<!-- Begin page -->
\t<div id=\"layout-wrapper\">

\t\t<header id=\"page-topbar\">
\t\t\t<div class=\"layout-width\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"d-flex\">
\t\t\t\t\t\t<!-- LOGO -->
\t\t\t\t\t\t<div class=\"navbar-brand-box horizontal-logo\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark\">
\t\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/logo-sm.png') }}\" alt=\"\" height=\"22\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/logo-dark.png') }}\" alt=\"\" height=\"17\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/logo-sm.png') }}\" alt=\"\" height=\"22\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/logo-light.png') }}\" alt=\"\" height=\"17\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none\" id=\"topnav-hamburger-icon\">
\t\t\t\t\t\t\t<span class=\"hamburger-icon\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>


\t\t\t\t\t\t<!-- App Search-->
\t\t\t\t\t\t<form class=\"app-search d-none d-md-block\">
\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search...\" autocomplete=\"off\" id=\"search-options\" value=\"\">
\t\t\t\t\t\t\t\t<span class=\"mdi mdi-magnify search-widget-icon\"></span>
\t\t\t\t\t\t\t\t<span class=\"mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none\" id=\"search-close-options\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg\" id=\"search-dropdown\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tdata-simplebar style=\"max-height: 320px;\">
\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow text-muted mb-0 text-uppercase\">Recent Searches</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-item bg-transparent text-wrap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-soft-secondary btn-sm rounded-pill\">how to setup
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-magnify ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-soft-secondary btn-sm rounded-pill\">buttons
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-magnify ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header mt-2\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow text-muted mb-1 text-uppercase\">Pages</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bubble-chart-line align-middle fs-18 text-muted me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Analytics Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-lifebuoy-line align-middle fs-18 text-muted me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Help Center</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-settings-line align-middle fs-18 text-muted me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span>My account settings</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header mt-2\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-overflow text-muted mb-2 text-uppercase\">Members</h6>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"notification-list\">
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-2.jpg') }}\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Manager</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-3.jpg') }}\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">David Grasso</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Web Designer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-5.jpg') }}\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Mike Bunch</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">React Developer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"text-center pt-3 pb-1\">
\t\t\t\t\t\t\t\t\t<a href=\"pages-search-results.html\" class=\"btn btn-primary btn-sm\">View All Results
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center\">

\t\t\t\t\t\t<div class=\"dropdown d-md-none topbar-head-dropdown header-item\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-search-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"bx bx-search fs-22\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\" aria-labelledby=\"page-header-search-dropdown\">
\t\t\t\t\t\t\t\t<form class=\"p-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group m-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search ...\" aria-label=\"Recipient's username\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-magnify\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown ms-1 topbar-head-dropdown header-item\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<img id=\"header-lang-img\" src=\" {{ asset('assets/images/flags/us.svg') }}\" alt=\"Header Language\" height=\"20\" class=\"rounded\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language py-2\" data-lang=\"en\" title=\"English\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/flags/us.svg') }}\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">English</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"sp\" title=\"Spanish\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/flags/spain.svg') }}\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Española</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"gr\" title=\"German\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/flags/germany.svg') }}\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Deutsche</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"it\" title=\"Italian\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/flags/italy.svg') }}\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Italiana</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ru\" title=\"Russian\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/flags/russia.svg') }}\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">русский</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ch\" title=\"Chinese\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/flags/china.svg') }}\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">中国人</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"fr\" title=\"French\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/flags/french.svg') }}\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">français</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item language\" data-lang=\"ar\" title=\"Arabic\">
\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/flags/ae.svg') }}\" alt=\"user-image\" class=\"me-2 rounded\" height=\"18\">
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Arabic</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class='bx bx-category-alt fs-22'></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end\">
\t\t\t\t\t\t\t\t<div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 fw-semibold fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\tWeb Apps
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-sm btn-soft-info\">
\t\t\t\t\t\t\t\t\t\t\t\tView All Apps
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-s-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/brands/github.png') }}\" alt=\"Github\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>GitHub</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/brands/bitbucket.png') }}\" alt=\"bitbucket\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Bitbucket</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/brands/dribbble.png') }}\" alt=\"dribbble\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Dribbble</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/brands/dropbox.png') }}\" alt=\"dropbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Dropbox</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/brands/mail_chimp.png') }}\" alt=\"mail_chimp\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Mail Chimp</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-icon-item\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/brands/slack.png') }}\" alt=\"slack\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Slack</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-cart-dropdown\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class='bx bx-shopping-bag fs-22'></i>
\t\t\t\t\t\t\t\t<span class=\"position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info\">5</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart\" aria-labelledby=\"page-header-cart-dropdown\">
\t\t\t\t\t\t\t\t<div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 fs-16 fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\tMy Cart</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning-subtle text-warning fs-13\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cartitem-badge\">7</span>
\t\t\t\t\t\t\t\t\t\t\t\titems</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div data-simplebar style=\"max-height: 300px;\">
\t\t\t\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center empty-cart\" id=\"empty-cart\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-md mx-auto my-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle text-info fs-36 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-cart'></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-3\">Your Cart is Empty!</h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-products.html\" class=\"btn btn-success w-md mb-3\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/products/img-1.png') }}\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Branded
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        T-Shirts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10 x \$32</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">320</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/products/img-2.png') }}\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Bentwood Chair</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>5 x \$18</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">89</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/products/img-3.png') }}\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBorosil Paper Cup</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 x \$250</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">750</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/products/img-6.png') }}\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Gray
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        Styled T-Shirt</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1 x \$1250</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart-item-price\">1250</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/products/img-5.png') }}\" class=\"me-3 rounded-circle avatar-sm p-2 bg-light\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-product-details.html\" class=\"text-reset\">Stillbird Helmet</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>2 x \$495</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 fw-normal\">\$<span class=\"cart-item-price\">990</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-sm btn-ghost-secondary remove-item-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-close-fill fs-16\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border\" id=\"checkout-elem\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center pb-3\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0 text-muted\">Total:</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"px-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"m-0\" id=\"cart-item-total\">\$1258.58</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a href=\"apps-ecommerce-checkout.html\" class=\"btn btn-success text-center w-100\">
\t\t\t\t\t\t\t\t\t\tCheckout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"ms-1 header-item d-none d-sm-flex\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" data-toggle=\"fullscreen\">
\t\t\t\t\t\t\t\t<i class='bx bx-fullscreen fs-22'></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"ms-1 header-item d-none d-sm-flex\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode\">
\t\t\t\t\t\t\t\t<i class='bx bx-moon fs-22'></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown topbar-head-dropdown ms-1 header-item\" id=\"notificationDropdown\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle\" id=\"page-header-notifications-dropdown\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class='bx bx-bell fs-22'></i>
\t\t\t\t\t\t\t\t<span class=\"position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger\">3<span class=\"visually-hidden\">unread messages</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end p-0\" aria-labelledby=\"page-header-notifications-dropdown\">

\t\t\t\t\t\t\t\t<div class=\"dropdown-head bg-primary bg-pattern rounded-top\">
\t\t\t\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 fs-16 fw-semibold text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNotifications
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto dropdown-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-body fs-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t4 New</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"px-2 pt-2\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs dropdown-tabs nav-tabs-custom\" data-dropdown-tabs=\"true\" id=\"notificationItemsTab\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#all-noti-tab\" role=\"tab\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAll (4)
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#messages-tab\" role=\"tab\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMessages
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item waves-effect waves-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#alerts-tab\" role=\"tab\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAlerts
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-content position-relative\" id=\"notificationItemsTabContent\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active py-2 ps-2\" id=\"all-noti-tab\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t<div data-simplebar style=\"max-height: 300px;\" class=\"pe-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs me-3 flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-info-subtle text-info rounded-circle fs-16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-badge-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-2 lh-base\">Your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Elite</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tauthor Graphic
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            Optimization
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">reward</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            ready!
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJust 30 sec ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check01\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"all-notification-check01\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-2.jpg') }}\" class=\"me-3 rounded-circle avatar-xs flex-shrink-0\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">Answered to your comment on the cash flow forecast's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            graph 🔔.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t48 min ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check02\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"all-notification-check02\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs me-3 flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-danger-subtle text-danger rounded-circle fs-16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-message-square-dots'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-2 fs-13 lh-base\">You have received
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"text-success\">20</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnew messages in the conversation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hrs ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check03\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"all-notification-check03\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-8.jpg') }}\" class=\"me-3 rounded-circle avatar-xs flex-shrink-0\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Maureen Gibson</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">We talked about a project on linkedin.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t4 hrs ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"all-notification-check04\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"all-notification-check04\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-3 text-center view-all\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-soft-success waves-effect waves-light\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                All Notifications
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade py-2 ps-2\" id=\"messages-tab\" role=\"tabpanel\" aria-labelledby=\"messages-tab\">
\t\t\t\t\t\t\t\t\t\t<div data-simplebar style=\"max-height: 300px;\" class=\"pe-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-3.jpg') }}\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">James Lemire</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">We talked about a project on linkedin.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t30 min ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check01\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"messages-notification-check01\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-2.jpg') }}\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">Answered to your comment on the cash flow forecast's
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            graph 🔔.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hrs ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check02\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"messages-notification-check02\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-6.jpg') }}\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Kenneth Brown</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">Mentionned you in his comment on 📃 invoice #12501.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t10 hrs ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check03\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"messages-notification-check03\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-reset notification-item d-block dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-8.jpg') }}\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-0 mb-1 fs-13 fw-semibold\">Maureen Gibson</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-13 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">We talked about a project on linkedin.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-11 fw-medium text-uppercase text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-clock-outline\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t3 days ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"px-2 fs-15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check notification-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"messages-notification-check04\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"messages-notification-check04\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-3 text-center view-all\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-soft-success waves-effect waves-light\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                All Messages
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade p-4\" id=\"alerts-tab\" role=\"tabpanel\" aria-labelledby=\"alerts-tab\"></div>

\t\t\t\t\t\t\t\t\t<div class=\"notification-actions\" id=\"notification-actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex text-muted justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\tSelect
\t\t\t\t\t\t\t\t\t\t\t<div id=\"select-content\" class=\"text-body fw-semibold px-1\">0</div>
\t\t\t\t\t\t\t\t\t\t\tResult
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link link-danger p-0 ms-3\" data-bs-toggle=\"modal\" data-bs-target=\"#removeNotificationModal\">Remove</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown ms-sm-3 header-item topbar-user\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle header-profile-user\" src=\" {{ asset('assets/images/users/avatar-1.jpg') }}\" alt=\"Header Avatar\">
\t\t\t\t\t\t\t\t\t<span class=\"text-start ms-xl-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">Anna Adame</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Founder</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Welcome Anna!</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"apps-chat.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-message-text-outline text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Messages</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"apps-tasks-kanban.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Taskboard</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-faqs.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-lifebuoy text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Help</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-wallet text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Balance :
\t\t\t\t\t\t\t\t\t\t<b>\$5971.67</b>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile-settings.html\">
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success mt-1 float-end\">New</span>
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-cog-outline text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Settings</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"auth-lockscreen-basic.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-lock text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Lock screen</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"auth-logout-basic.html\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Logout</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<!-- removeNotificationModal -->
\t\t<div id=\"removeNotificationModal\" class=\"modal fade zoomIn\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\" id=\"NotificationModalbtn-close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"mt-2 text-center\">
\t\t\t\t\t\t\t<lord-icon src=\"https://cdn.lordicon.com/gsqxdxog.json\" trigger=\"loop\" colors=\"primary:#f7b84b,secondary:#f06548\" style=\"width:100px;height:100px\"></lord-icon>
\t\t\t\t\t\t\t<div class=\"mt-4 pt-2 fs-15 mx-4 mx-sm-5\">
\t\t\t\t\t\t\t\t<h4>Are you sure ?</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mx-4 mb-0\">Are you sure you want to remove this Notification ?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex gap-2 justify-content-center mt-4 mb-2\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn w-sm btn-light\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn w-sm btn-danger\" id=\"delete-notification\">Yes, Delete It!</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- /.modal-content -->
\t\t\t</div>
\t\t\t<!-- /.modal-dialog -->
\t\t</div>
\t\t<!-- /.modal -->
\t\t<!-- ========== App Menu ========== -->
\t\t<div
\t\t\tclass=\"navbar-menu\" hidden>
\t\t\t<!-- LOGO -->
\t\t\t<div
\t\t\t\tclass=\"navbar-brand-box\">
\t\t\t\t<!-- Dark Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\" {{ asset('assets/images/logo-sm.png') }}\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\" {{ asset('assets/images/logo-dark.png') }}\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<!-- Light Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\" {{ asset('assets/images/logo-sm.png') }}\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\" {{ asset('assets/images/logo-light.png') }}\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
\t\t\t\t\t<i class=\"ri-record-circle-line\"></i>
\t\t\t\t</button>
\t\t\t\t<div id=\"two-column-menu\"></div>
\t\t\t\t<ul class=\"navbar-nav\" id=\"navbar-nav\"></ul>
\t\t\t\t<div id=\"scrollbar\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<!-- Left Sidebar End -->
\t\t<!-- Vertical Overlay-->
\t\t<div></div>

\t\t<!-- ============================================================== -->
\t\t<!-- Start right Content here -->
\t\t<!-- ============================================================== -->
\t\t\t<div>

\t\t\t\t<div class=\"page-content\"> <div class=\"container-fluid\">

\t\t\t\t\t<div class=\"position-relative mx-n4\">
\t\t\t\t\t\t<div class=\"profile-wid-bg profile-setting-img\">
\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/profile-bg.jpg') }}\" class=\"profile-wid-img\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t<div class=\"text-end\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xxl-3\">
\t\t\t\t\t\t\t<div class=\"card mt-n5\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"profile-user position-relative d-inline-block mx-auto  mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-1.jpg') }}\" class=\"rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow\" alt=\"user-profile-image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs p-0 rounded-circle profile-photo-edit\">
\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"profile-img-file-input\" type=\"file\" class=\"profile-img-file-input\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"profile-img-file-input\" class=\"profile-photo-edit avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle bg-light text-body material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-camera-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-16 mb-1\">Anna Adame</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Lead Designer / Developer</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end card-->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Complete Your Profile</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"badge bg-light text-primary fs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-edit-box-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEdit</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress animated-progress custom-progress progress-label\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 30%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label\">30%</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Portfolio</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"badge bg-light text-primary fs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-add-fill align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tAdd</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs d-block flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle fs-16 bg-body text-body material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-github-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"gitUsername\" placeholder=\"Username\" value=\"@daveadame\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs d-block flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle fs-16 bg-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-global-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"websiteInput\" placeholder=\"www.example.com\" value=\"www.velzon.com\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs d-block flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle fs-16 bg-success material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-dribbble-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"dribbleName\" placeholder=\"Username\" value=\"@dave_adame\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs d-block flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title rounded-circle fs-16 bg-danger material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pinterest-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"pinterestName\" placeholder=\"Username\" value=\"Advance Dave\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t<div class=\"col-xxl-9\">
\t\t\t\t\t\t\t<div class=\"card mt-xxl-n5\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs-custom rounded card-header-tabs border-bottom-0\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#personalDetails\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tPersonal Details
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#changePassword\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tChange Password
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"personalDetails\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form, { 'attr': { 'class': 'needs-validation', 'novalidate': 'novalidate' } }) }}

\t\t\t\t\t\t\t\t\t\t\t\t{# {{ form_widget(form) }} #}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"firstnameInput\" class=\"form-label\">Nom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.nom) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"firstnameInput\" class=\"form-label\">Prenom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.prenom) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"firstnameInput\" class=\"form-label\">Langages Maîtrisés</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.langages) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.biographie) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Localisation (Ville, Pays)</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.localisation) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Niveau D'expérience</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.experience) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Salaire Minimal</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.salaire_min) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea\" class=\"form-label\">Avatar</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.avatar) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2 justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">{{ button_label|default('Updates') }}</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"resert\" class=\"btn btn-soft-success\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end tab-pane-->
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"changePassword\" role=\"tabpanel\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oldpasswordInput\" class=\"form-label\">Old Password*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"oldpasswordInput\" placeholder=\"Enter current password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"newpasswordInput\" class=\"form-label\">New Password*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"newpasswordInput\" placeholder=\"Enter new password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"confirmpasswordInput\" class=\"form-label\">Confirm Password*</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"confirmpasswordInput\" placeholder=\"Confirm password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"link-primary text-decoration-underline\">Forgot Password ?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Change Password</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--end tab-pane-->

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end row-->

\t\t\t\t</div>
\t\t\t\t<!-- container-fluid -->
\t\t\t</div>
\t\t\t<!-- End Page-content -->
\t\t</div>
\t\t<!-- end main content-->

\t</div>
\t<!-- END layout-wrapper -->


\t<!-- JAVASCRIPT -->
\t<script src=\" {{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t<script src=\" {{ asset('assets/libs/simplebar/simplebar.min.js') }}\"></script>
\t<script src=\" {{ asset('assets/libs/node-waves/waves.min.js') }}\"></script>
\t<script src=\" {{ asset('assets/libs/feather-icons/feather.min.js') }}\"></script>
\t<script src=\" {{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}\"></script>
\t<script src=\" {{ asset('assets/js/plugins.js') }}\"></script>

\t<!-- profile-setting init js -->
\t<script src=\" {{ asset('assets/js/pages/profile-setting.init.js') }}\"></script>

\t<!-- App js -->
\t<script src=\" {{ asset('assets/js/app.js') }}\"></script>

{% endblock %}
", "profil/editprofil.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev1\\templates\\profil\\editprofil.html.twig");
    }
}
