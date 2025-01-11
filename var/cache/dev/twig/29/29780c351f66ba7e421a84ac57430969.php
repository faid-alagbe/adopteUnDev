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

/* company/show.html.twig */
class __TwigTemplate_d2739d32707d846ce71a386135c9df71 extends Template
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
        // line 41
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "company/show.html.twig", 41);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Company
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        yield "
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
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"17\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-light.png\" alt=\"\" height=\"17\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Manager</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">David Grasso</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Web Designer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
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


\t\t\t\t\t\t<div class=\"dropdown ms-sm-3 header-item topbar-user\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle header-profile-user\" src=\"assets/images/users/avatar-1.jpg\" alt=\"Header Avatar\">
\t\t\t\t\t\t\t\t\t<span class=\"text-start ms-xl-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 205, $this->source); })()), "nom", [], "any", false, false, false, 205), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 214, $this->source); })()), "nom", [], "any", false, false, false, 214), "html", null, true);
        yield "</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil_company");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile de l'Entreprise</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_postes_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Faire un poste</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Deconnexion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t</div>

</div>
<!-- /.modal-content --></div><!-- /.modal-dialog --></div><!-- /.modal --><!-- ========== App Menu ========== --><!-- Left Sidebar End --><!-- Vertical Overlay--><!-- ============================================================== --><!-- Start right Content here --><!-- ============================================================== --><div class=\"\"> <div class=\"page-content\">
<div class=\"container-fluid\">
\t<div class=\"profile-foreground position-relative mx-n4 mt-n4\">
\t\t<div class=\"profile-wid-bg\">
\t\t\t<img src=\"assets/images/profile-bg.jpg\" alt=\"\" class=\"profile-wid-img\"/>
\t\t</div>
\t</div>
\t<div class=\"pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper\">
\t\t<div class=\"row g-4\">
\t\t\t<div class=\"col-auto\">
\t\t\t\t<div class=\"avatar-lg\">
\t\t\t\t\t<img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-thumbnail rounded-circle\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end col-->
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t<h3 class=\"text-white mb-1\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 253, $this->source); })()), "nom", [], "any", false, false, false, 253), "html", null, true);
        yield "</h3>
\t\t\t\t\t<p class=\"text-white text-opacity-75\">Entreprise</p>
\t\t\t\t\t<div class=\"hstack text-white-50 gap-1\">
\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t<i class=\"ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle\"></i>
\t\t\t\t\t\t\t";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 258, $this->source); })()), "location", [], "any", false, false, false, 258), "html", null, true);
        yield "</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end col-->
\t\t\t<div class=\"col-12 col-lg-auto order-last order-lg-0\">
\t\t\t\t<div class=\"row text text-white-50 text-center\">
\t\t\t\t\t<div class=\"col-lg-6 col-4\">
\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-1\">15</h4>
\t\t\t\t\t\t\t<p class=\"fs-14 mb-0\">Postes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end col-->

\t\t</div>
\t\t<!--end row-->
\t</div>


\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div>
\t\t\t\t<div
\t\t\t\t\tclass=\"d-flex profile-wrapper\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link fs-14 active\" data-bs-toggle=\"tab\" href=\"#overview-tab\" role=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"ri-airplay-fill d-inline-block d-md-none\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block\">Overview</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t<a href=\"";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profils_company_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 298, $this->source); })()), "id", [], "any", false, false, false, 298)]), "html", null, true);
        yield "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t<i class=\"ri-edit-box-line align-bottom\"></i>
\t\t\t\t\t\t\tModifier votre profil</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Tab panes -->
\t\t\t\t<div class=\"tab-content pt-4 text-muted\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"overview-tab\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xxl-3\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-5\">Profile</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress animated-progress custom-progress progress-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label\">100%</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-3\">Info</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 325
        if ((array_key_exists("profils_company", $context) &&  !(null === (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 325, $this->source); })())))) {
            // line 326
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"ps-0\" scope=\"row\">Company Name :</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-muted\">";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 329, $this->source); })()), "nom", [], "any", false, false, false, 329), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"ps-0\" scope=\"row\">Location :</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-muted\">";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 334, $this->source); })()), "location", [], "any", false, false, false, 334), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 338
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Le profil développeur est introuvable ou vous n'avez pas accès à cette page.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 340
        yield "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card -->


\t\t\t\t\t\t\t\t<!-- end card -->

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Quelques developpeurs</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" role=\"button\" id=\"dropdownMenuLink2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-more-2-fill fs-14\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Afficher tout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"img-fluid rounded-circle material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 mb-1\">Esther James</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-13 text-muted mb-0\">Frontend Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-success material-shadow-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-add-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"img-fluid rounded-circle material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 mb-1\">Jacqueline Steve</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-13 text-muted mb-0\">UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-success material-shadow-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-add-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"img-fluid rounded-circle material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 mb-1\">George Whalen</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-13 text-muted mb-0\">Backend Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-success material-shadow-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-add-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t<a href=\"";
        // line 426
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_company_crters_new");
        yield "\" class=\"btn btn-sm btn-outline-success material-shadow-none\"><i class=\"ri-user-add-line align-middle\"></i> Créer des critères</a>
    


\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end card-->


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t<div class=\"col-xxl-9\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-3\">Presentation</h5>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () { throw new RuntimeError('Variable "profils_company" does not exist.', 445, $this->source); })()), "presentation", [], "any", false, false, false, 445), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end card-body-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card -->

\t\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Mes Postes</h5>
\t\t\t\t\t\t\t\t\t\t<!-- Swiper -->
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper project-swiper mt-n4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end gap-2 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider-button-prev\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title fs-18 rounded px-1 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-left-s-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider-button-next\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title fs-18 rounded px-1 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-s-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-success mb-0 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hlocation class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">ABC Project Customization</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</hlocation>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">4 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hlocation class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</hlocation>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-location.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-danger mb-0 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hlocation class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Client - John</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</hlocation>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">1 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCompleted</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-info mb-0 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Brand logo Design</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">2 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-danger material-shadow mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Project update</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">4 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCompleted</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-warning material-shadow mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Chat App</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">1 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"activities\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-3\">Activities</h5>
\t\t\t\t\t\t\t\t<div class=\"acitivity-timeline\">
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Oliver Phillips
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary align-middle\">New</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">We talked about a project on linkedin.</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">Today</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 avatar-xs acitivity-avatar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle text-success rounded-circle material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\tN
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Nancy Martino
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary-subtle text-secondary align-middle\">In Progress</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-text-line align-middle ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tCreate new project Buildng product</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item material-shadow\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"Christi\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle avatar-xs\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item material-shadow\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"Frank Hook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle avatar-xs\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item material-shadow\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\" Ruby\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tR
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item material-shadow\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">Yesterday</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Natasha Carey
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success align-middle\">Completed</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">Adding a new event with attachments</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row border border-dashed gx-2 p-2 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"img-fluid rounded material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"img-fluid rounded material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid rounded material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">25 Nov</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Bethany Johnson</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">added a new member to velzon dashboard</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">19 Nov</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs acitivity-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-danger-subtle text-danger material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-shopping-bag-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Your order is placed
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger align-middle ms-1\">Out of Delivery</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">These customers can rest assured their order has been placed.</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">16 Nov</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Lewis Pratt</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">They all have something to say
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                beyond the words on the page. They can come across as
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                casual or neutral, exotic or graphic.
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">22 Oct</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs acitivity-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-info-subtle text-info material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-line-chart-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Monthly sales report</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">2 days left</span>
\t\t\t\t\t\t\t\t\t\t\t\tnotification to submit the monthly sales report.
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"link-warning text-decoration-underline\">Reports Builder</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">15 Oct</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-8.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New ticket received
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success align-middle\">Completed</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">User
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">Erica245</span>
\t\t\t\t\t\t\t\t\t\t\t\tsubmitted a ticket.</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">26 Aug</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end card-body-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end card-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end tab-pane-->
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"projects\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-warning material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Chat App Update</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">2 year Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">Inprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJ
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-success material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">ABC Project Customization</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">2 month Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-primary-subtle text-primary fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProgress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-8.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-info material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Client - Frank Hook</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">1 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-info-subtle text-info fs-10\">New</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tM
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Velzon Project</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">11 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-danger material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Brand Logo Design</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">10 min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-info-subtle text-info fs-10\">New</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tE
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Chat App</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">8 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">Inprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tR
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-8.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-warning material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Project Update</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">48 min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">Inprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-success material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Client - Jennifer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">30 min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-primary-subtle text-primary fs-10\">Process</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none mb-xxl-0 profile-project-info material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Bsuiness Template - UI/UX design</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">7 month Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none mb-xxl-0  profile-project-success material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Update Project</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">1 month Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-info-subtle text-info fs-10\">New</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none mb-sm-0  profile-project-danger material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Bank Management System</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">10 month Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none mb-0  profile-project-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">PSD to HTML Convert</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">29 min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-info-subtle text-info fs-10\">New</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination pagination-separated justify-content-center mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">2</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">3</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">4</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">5</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end card-body-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end card-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end tab-pane-->
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"documents\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title flex-grow-1 mb-0\">Documents</h5>
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control d-none\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formFile\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-upload-2-fill me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tUpload File</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless align-middle mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">File Name</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Type</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Size</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Upload Date</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-primary-subtle text-primary rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-zip-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Artboard-documents.zip</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Zip File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>4.57 MB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>12 Dec 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink15\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle text-muted\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle text-muted\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle text-muted\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-danger-subtle text-danger rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-pdf-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Bank Management System</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>PDF File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>8.89 MB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>24 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink3\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle text-muted\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle text-muted\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle text-muted\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-secondary-subtle text-secondary rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-video-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Tour-video.mp4</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>MP4 File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>14.62 MB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>19 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink4\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle text-muted\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle text-muted\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle text-muted\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle text-success rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-excel-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Account-statement.xsl</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>XSL File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>2.38 KB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>14 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink5\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle text-muted\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle text-muted\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle text-muted\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle text-info rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-folder-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Project Screenshots Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Floder File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>87.24 MB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>08 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink6\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-danger-subtle text-danger rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-image-2-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Velzon-logo.png</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>PNG File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>879 KB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>02 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink7\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-loading mdi-spin fs-20 align-middle me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tLoad more
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end tab-pane-->
\t\t\t\t</div>
\t\t\t\t<!--end tab-content-->
\t\t\t</div>
\t\t</div>
\t\t<!--end col-->
\t</div>
\t<!--end row-->

</div>
<!-- container-fluid --></div><!-- End Page-content --><footer class=\"footer\">
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-6\">
\t\t\t<script>
\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t</script>
\t\t\t© Velzon.
\t\t</div>
\t\t<div class=\"col-sm-6\">
\t\t\t<div class=\"text-sm-end d-none d-sm-block\">
\t\t\t\tDesign & Develop by Themesbrand
\t\t\t</div>
\t\t</div>
\t</div>
</div></footer></div><!-- end main content--></div><!-- END layout-wrapper -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "company/show.html.twig";
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
        return array (  526 => 445,  504 => 426,  416 => 340,  412 => 338,  405 => 334,  397 => 329,  392 => 326,  390 => 325,  360 => 298,  317 => 258,  309 => 253,  276 => 223,  269 => 219,  262 => 215,  258 => 214,  246 => 205,  86 => 47,  76 => 46,  58 => 43,  41 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Company{% endblock %}

{% block body %}
    <h1>Company</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ company.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ company.nom }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ company.location }}</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>{{ company.logo }}</td>
            </tr>
            <tr>
                <th>Presentation</th>
                <td>{{ company.presentation }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_company_index') }}\">back to list</a>

    <a href=\"{{ path('app_company_edit', {'id': company.id}) }}\">edit</a>

    {{ include('company/_delete_form.html.twig') }}
{% endblock %}
 #}

{% extends 'base.html.twig' %}

{% block title %}Company
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
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"17\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-light.png\" alt=\"\" height=\"17\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Manager</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">David Grasso</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Web Designer</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
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


\t\t\t\t\t\t<div class=\"dropdown ms-sm-3 header-item topbar-user\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle header-profile-user\" src=\"assets/images/users/avatar-1.jpg\" alt=\"Header Avatar\">
\t\t\t\t\t\t\t\t\t<span class=\"text-start ms-xl-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">{{ profils_company.nom }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ profils_company.nom }}</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_profil_company')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile de l'Entreprise</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_postes_index')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Faire un poste</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_logout') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Deconnexion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t</div>

</div>
<!-- /.modal-content --></div><!-- /.modal-dialog --></div><!-- /.modal --><!-- ========== App Menu ========== --><!-- Left Sidebar End --><!-- Vertical Overlay--><!-- ============================================================== --><!-- Start right Content here --><!-- ============================================================== --><div class=\"\"> <div class=\"page-content\">
<div class=\"container-fluid\">
\t<div class=\"profile-foreground position-relative mx-n4 mt-n4\">
\t\t<div class=\"profile-wid-bg\">
\t\t\t<img src=\"assets/images/profile-bg.jpg\" alt=\"\" class=\"profile-wid-img\"/>
\t\t</div>
\t</div>
\t<div class=\"pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper\">
\t\t<div class=\"row g-4\">
\t\t\t<div class=\"col-auto\">
\t\t\t\t<div class=\"avatar-lg\">
\t\t\t\t\t<img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-thumbnail rounded-circle\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end col-->
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t<h3 class=\"text-white mb-1\">{{ profils_company.nom }}</h3>
\t\t\t\t\t<p class=\"text-white text-opacity-75\">Entreprise</p>
\t\t\t\t\t<div class=\"hstack text-white-50 gap-1\">
\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t<i class=\"ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle\"></i>
\t\t\t\t\t\t\t{{ profils_company.location }}</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end col-->
\t\t\t<div class=\"col-12 col-lg-auto order-last order-lg-0\">
\t\t\t\t<div class=\"row text text-white-50 text-center\">
\t\t\t\t\t<div class=\"col-lg-6 col-4\">
\t\t\t\t\t\t<div class=\"p-2\">
\t\t\t\t\t\t\t<h4 class=\"text-white mb-1\">15</h4>
\t\t\t\t\t\t\t<p class=\"fs-14 mb-0\">Postes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end col-->

\t\t</div>
\t\t<!--end row-->
\t</div>


\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div>
\t\t\t\t<div
\t\t\t\t\tclass=\"d-flex profile-wrapper\">
\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t<ul class=\"nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link fs-14 active\" data-bs-toggle=\"tab\" href=\"#overview-tab\" role=\"tab\">
\t\t\t\t\t\t\t\t<i class=\"ri-airplay-fill d-inline-block d-md-none\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block\">Overview</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t<a href=\"{{ path('app_profils_company_edit', {'id': profils_company.id}) }}\" class=\"btn btn-success\">
\t\t\t\t\t\t\t<i class=\"ri-edit-box-line align-bottom\"></i>
\t\t\t\t\t\t\tModifier votre profil</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Tab panes -->
\t\t\t\t<div class=\"tab-content pt-4 text-muted\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"overview-tab\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xxl-3\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-5\">Profile</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress animated-progress custom-progress progress-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label\">100%</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-3\">Info</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if profils_company is defined and profils_company is not null %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"ps-0\" scope=\"row\">Company Name :</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-muted\">{{ profils_company.nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"ps-0\" scope=\"row\">Location :</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-muted\">{{ profils_company.location }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Le profil développeur est introuvable ou vous n'avez pas accès à cette page.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card -->


\t\t\t\t\t\t\t\t<!-- end card -->

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Quelques developpeurs</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" role=\"button\" id=\"dropdownMenuLink2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-more-2-fill fs-14\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Afficher tout</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"img-fluid rounded-circle material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 mb-1\">Esther James</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-13 text-muted mb-0\">Frontend Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-success material-shadow-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-add-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"img-fluid rounded-circle material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 mb-1\">Jacqueline Steve</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-13 text-muted mb-0\">UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-success material-shadow-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-add-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"img-fluid rounded-circle material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 mb-1\">George Whalen</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-13 text-muted mb-0\">Backend Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-success material-shadow-none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-add-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t<a href=\"{{ path('app_company_crters_new') }}\" class=\"btn btn-sm btn-outline-success material-shadow-none\"><i class=\"ri-user-add-line align-middle\"></i> Créer des critères</a>
    


\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end card-->


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t<div class=\"col-xxl-9\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-3\">Presentation</h5>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t{{ profils_company.presentation }}
\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end card-body-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card -->

\t\t\t\t\t\t\t\t<!-- end row -->

\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Mes Postes</h5>
\t\t\t\t\t\t\t\t\t\t<!-- Swiper -->
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper project-swiper mt-n4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end gap-2 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider-button-prev\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title fs-18 rounded px-1 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-left-s-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slider-button-next\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title fs-18 rounded px-1 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-s-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-success mb-0 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hlocation class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">ABC Project Customization</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</hlocation>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">4 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hlocation class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</hlocation>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-location.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-danger mb-0 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<hlocation class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Client - John</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</hlocation>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">1 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCompleted</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-info mb-0 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Brand logo Design</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">2 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-danger material-shadow mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Project update</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">4 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCompleted</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-warning material-shadow mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Chat App</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLast Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">1 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end slide item -->
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"activities\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-3\">Activities</h5>
\t\t\t\t\t\t\t\t<div class=\"acitivity-timeline\">
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Oliver Phillips
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary align-middle\">New</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">We talked about a project on linkedin.</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">Today</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 avatar-xs acitivity-avatar\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle text-success rounded-circle material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\tN
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Nancy Martino
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary-subtle text-secondary align-middle\">In Progress</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-text-line align-middle ms-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tCreate new project Buildng product</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item material-shadow\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"Christi\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle avatar-xs\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item material-shadow\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"Frank Hook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle avatar-xs\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item material-shadow\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\" Ruby\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tR
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item material-shadow\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"more\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">Yesterday</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Natasha Carey
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success align-middle\">Completed</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">Adding a new event with attachments</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row border border-dashed gx-2 p-2 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"img-fluid rounded material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"img-fluid rounded material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid rounded material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">25 Nov</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Bethany Johnson</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">added a new member to velzon dashboard</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">19 Nov</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs acitivity-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-danger-subtle text-danger material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-shopping-bag-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Your order is placed
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger align-middle ms-1\">Out of Delivery</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">These customers can rest assured their order has been placed.</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">16 Nov</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Lewis Pratt</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">They all have something to say
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                beyond the words on the page. They can come across as
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                casual or neutral, exotic or graphic.
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">22 Oct</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item py-3 d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs acitivity-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-info-subtle text-info material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-line-chart-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Monthly sales report</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">2 days left</span>
\t\t\t\t\t\t\t\t\t\t\t\tnotification to submit the monthly sales report.
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"link-warning text-decoration-underline\">Reports Builder</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">15 Oct</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"acitivity-item d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-8.jpg\" alt=\"\" class=\"avatar-xs rounded-circle acitivity-avatar material-shadow\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New ticket received
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success align-middle\">Completed</span>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-2\">User
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-secondary\">Erica245</span>
\t\t\t\t\t\t\t\t\t\t\t\tsubmitted a ticket.</p>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"mb-0 text-muted\">26 Aug</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end card-body-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end card-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end tab-pane-->
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"projects\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-warning material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Chat App Update</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">2 year Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">Inprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJ
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-success material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">ABC Project Customization</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">2 month Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-primary-subtle text-primary fs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProgress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-8.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-info material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Client - Frank Hook</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">1 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-info-subtle text-info fs-10\">New</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tM
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Velzon Project</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">11 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-danger material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Brand Logo Design</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">10 min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-info-subtle text-info fs-10\">New</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tE
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Chat App</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">8 hr Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">Inprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tR
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-8.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-warning material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Project Update</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">48 min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-warning-subtle text-warning fs-10\">Inprogress</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none profile-project-success material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Client - Jennifer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">30 min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-primary-subtle text-primary fs-10\">Process</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMembers :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none mb-xxl-0 profile-project-info material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Bsuiness Template - UI/UX design</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">7 month Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none mb-xxl-0  profile-project-success material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Update Project</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">1 month Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-info-subtle text-info fs-10\">New</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-light text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none mb-sm-0  profile-project-danger material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">Bank Management System</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">10 month Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success-subtle text-success fs-10\">Completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-3 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card profile-project-card shadow-none mb-0  profile-project-primary material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 text-muted overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">PSD to HTML Convert</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted text-truncate mb-0\">Last Update :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold text-body\">29 min Ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-info-subtle text-info fs-10\">New</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-12 text-muted mb-0\">Members :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-group-item material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"rounded-circle img-fluid\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination pagination-separated justify-content-center mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">2</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">3</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">4</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">5</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"page-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-chevron-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--end card-body-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--end card-->
\t\t\t\t\t</div>
\t\t\t\t\t<!--end tab-pane-->
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"documents\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title flex-grow-1 mb-0\">Documents</h5>
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control d-none\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formFile\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-upload-2-fill me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tUpload File</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-borderless align-middle mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">File Name</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Type</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Size</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Upload Date</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-primary-subtle text-primary rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-zip-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Artboard-documents.zip</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Zip File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>4.57 MB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>12 Dec 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink15\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink15\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle text-muted\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle text-muted\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle text-muted\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-danger-subtle text-danger rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-pdf-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Bank Management System</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>PDF File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>8.89 MB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>24 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink3\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle text-muted\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle text-muted\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle text-muted\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-secondary-subtle text-secondary rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-video-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Tour-video.mp4</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>MP4 File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>14.62 MB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>19 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink4\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle text-muted\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle text-muted\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle text-muted\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle text-success rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-file-excel-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Account-statement.xsl</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>XSL File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>2.38 KB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>14 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink5\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle text-muted\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle text-muted\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle text-muted\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle text-info rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-folder-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Project Screenshots Collection</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Floder File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>87.24 MB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>08 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink6\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-danger-subtle text-danger rounded fs-20 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-image-2-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">Velzon-logo.png</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>PNG File</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>879 KB</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>02 Nov 2021</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-light btn-icon\" id=\"dropdownMenuLink7\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-equalizer-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuLink7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill me-2 align-middle\"></i>View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-download-2-fill me-2 align-middle\"></i>Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-middle\"></i>Delete</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"text-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-loading mdi-spin fs-20 align-middle me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tLoad more
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end tab-pane-->
\t\t\t\t</div>
\t\t\t\t<!--end tab-content-->
\t\t\t</div>
\t\t</div>
\t\t<!--end col-->
\t</div>
\t<!--end row-->

</div>
<!-- container-fluid --></div><!-- End Page-content --><footer class=\"footer\">
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-6\">
\t\t\t<script>
\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t</script>
\t\t\t© Velzon.
\t\t</div>
\t\t<div class=\"col-sm-6\">
\t\t\t<div class=\"text-sm-end d-none d-sm-block\">
\t\t\t\tDesign & Develop by Themesbrand
\t\t\t</div>
\t\t</div>
\t</div>
</div></footer></div><!-- end main content--></div><!-- END layout-wrapper -->{% endblock %}", "company/show.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\company\\show.html.twig");
    }
}
