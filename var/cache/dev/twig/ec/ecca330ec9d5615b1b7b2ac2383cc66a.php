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

/* landing/presentationCompany.html.twig */
class __TwigTemplate_9294ffa4e199dc3575a8146744d43c0e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/presentationCompany.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing/presentationCompany.html.twig", 1);
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

        yield "Bienvenue
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
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Recherche ...\" aria-label=\"Recipient's username\">
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
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">CGI</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue CGI</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil_company");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile de l'Entreprise</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_postes_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Faire un poste</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 182
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
\t\t\tclass=\"app-menu navbar-menu\">
\t\t\t<!-- LOGO -->
\t\t\t<div
\t\t\t\tclass=\"navbar-brand-box\">
\t\t\t\t<!-- Dark Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<!-- Light Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\"assets/images/logo-light.png\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
\t\t\t\t\t<i class=\"ri-record-circle-line\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"dropdown sidebar-user m-1 rounded\">
\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t<img class=\"rounded header-profile-user\" src=\"assets/images/users/avatar-1.jpg\" alt=\"Header Avatar\">
\t\t\t\t\t\t<span class=\"text-start\">
\t\t\t\t\t\t\t<span class=\"d-block fw-medium sidebar-user-name-text\">Mach Dev</span>
\t\t\t\t\t\t\t<span class=\"d-block fs-14 sidebar-user-name-sub-text\">
\t\t\t\t\t\t\t\t<i class=\"ri ri-circle-fill fs-10 text-success align-baseline\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Online</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<div
\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t<!-- item-->
\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue Dev</h6>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil");
        yield "\">
\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
        yield "\">
\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Deconnexion</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"scrollbar\">
\t\t\t\t<div class=\"container-fluid\">


\t\t\t\t\t<div id=\"two-column-menu\"></div>
\t\t\t\t\t<ul class=\"navbar-nav\" id=\"navbar-nav\"></ul>
\t\t\t\t</div>
\t\t\t\t<!-- Sidebar -->
\t\t\t</div>

\t\t\t<div class=\"sidebar-background\"></div>
\t\t</div>
\t\t<!-- Left Sidebar End -->
\t\t<!-- Vertical Overlay-->
\t\t<div class=\"vertical-overlay\"></div>

\t\t<!-- ============================================================== -->
\t\t<!-- Start right Content here -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"main-content\"> <div class=\"page-content\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">

\t\t\t\t\t<!-- start page title -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Bienvenue</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end page title -->


\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-animate\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-medium text-muted mb-0\">Users</p>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"28.05\">0</span>k</h2>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-success mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-up-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t16.24 %
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tvs. previous month</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\" class=\"text-info material-shadow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->

\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-animate\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-medium text-muted mb-0\">Sessions</p>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"97.66\">0</span>k</h2>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-danger mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-down-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t3.96 %
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tvs. previous month</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"activity\" class=\"text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->

\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-animate bg-primary\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-medium text-white-50 mb-0\">Avg. Visit Duration</p>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mt-4 ff-secondary fw-semibold text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"3\">0</span>m
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"40\">0</span>sec</h2>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-white-50\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-white bg-opacity-25 text-white mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-down-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t0.24 %
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tvs. previous month</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-white bg-opacity-25 rounded-circle fs-2 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"clock\" class=\"text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->

\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-animate\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-medium text-muted mb-0\">Bounce Rate</p>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"33.48\">0</span>%</h2>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-success mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-up-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t7.05 %
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tvs. previous month</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"external-link\" class=\"text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end row-->

\t\t\t\t\t<div class=\"row pt-3\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Entreprise</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end row-->

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-height-100\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Apply Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-3.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">Marketing Director
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-13\">(2-4 Yrs Exp.)</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalifornia</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-height-100\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Apply Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-4.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">Sr. Web Designer
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-13\">(2+ Yrs Exp.)</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalifornia</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-height-100 bg-primary-subtle shadow-none bg-opacity-10\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Apply Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-6.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">Sr. Web Designer
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-13\">(2+ Yrs Exp.)</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalifornia</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-height-100 bg-info-subtle shadow-none bg-opacity-10\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Apply Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-8.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">Sr. Web Designer
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-13\">(2+ Yrs Exp.)</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalifornia</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end row-->
\t\t\t\t\t<div class=\"row pt-3\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Offres</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-3.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>UI/UX designer</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$23k - 35k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-primary-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-2.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Product Sales Specialist</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDigitech Galaxy
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSpain
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$10k - 15k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Sales</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary-subtle text-secondary\">Product</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Business</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-danger-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-4.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Marketing Director</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tMeta4Systems
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSweden
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$20k - 25k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning-subtle text-warning\">Marketing</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Bussiness</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-9.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Product Designer</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$40k+
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-1.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Project Manager</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSyntyce Solutions
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tGermany
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$18k - 26k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">HR</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-7.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Business Associate</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$23k - 35k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-8.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Recruiting Coordinator</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tZoetic Fashion
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tNamibia
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$12k - 15k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Full Time</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Remote</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Fashion</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-5.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Customs officer</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$41k - 45k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-ghost-primary\">View More Jobs
\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- container-fluid -->
\t\t\t</div>
\t\t\t<!-- End Page-content -->

\t\t\t<footer class=\"footer\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t© Velzon.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"text-sm-end d-none d-sm-block\">
\t\t\t\t\t\t\t\tDesign & Develop by Themesbrand
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t\t<!-- end main content-->

\t</div>
\t<!-- END layout-wrapper -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "landing/presentationCompany.html.twig";
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
        return array (  363 => 270,  356 => 266,  269 => 182,  262 => 178,  255 => 174,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue
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
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Recherche ...\" aria-label=\"Recipient's username\">
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
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">CGI</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue CGI</h6>
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
\t\t\tclass=\"app-menu navbar-menu\">
\t\t\t<!-- LOGO -->
\t\t\t<div
\t\t\t\tclass=\"navbar-brand-box\">
\t\t\t\t<!-- Dark Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\"assets/images/logo-dark.png\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<!-- Light Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\"assets/images/logo-sm.png\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\"assets/images/logo-light.png\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
\t\t\t\t\t<i class=\"ri-record-circle-line\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"dropdown sidebar-user m-1 rounded\">
\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t<img class=\"rounded header-profile-user\" src=\"assets/images/users/avatar-1.jpg\" alt=\"Header Avatar\">
\t\t\t\t\t\t<span class=\"text-start\">
\t\t\t\t\t\t\t<span class=\"d-block fw-medium sidebar-user-name-text\">Mach Dev</span>
\t\t\t\t\t\t\t<span class=\"d-block fs-14 sidebar-user-name-sub-text\">
\t\t\t\t\t\t\t\t<i class=\"ri ri-circle-fill fs-10 text-success align-baseline\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Online</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<div
\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t<!-- item-->
\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue Dev</h6>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_profil') }}\">
\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_logout') }}\">
\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Deconnexion</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"scrollbar\">
\t\t\t\t<div class=\"container-fluid\">


\t\t\t\t\t<div id=\"two-column-menu\"></div>
\t\t\t\t\t<ul class=\"navbar-nav\" id=\"navbar-nav\"></ul>
\t\t\t\t</div>
\t\t\t\t<!-- Sidebar -->
\t\t\t</div>

\t\t\t<div class=\"sidebar-background\"></div>
\t\t</div>
\t\t<!-- Left Sidebar End -->
\t\t<!-- Vertical Overlay-->
\t\t<div class=\"vertical-overlay\"></div>

\t\t<!-- ============================================================== -->
\t\t<!-- Start right Content here -->
\t\t<!-- ============================================================== -->
\t\t\t<div class=\"main-content\"> <div class=\"page-content\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">

\t\t\t\t\t<!-- start page title -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Bienvenue</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end page title -->


\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-animate\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-medium text-muted mb-0\">Users</p>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"28.05\">0</span>k</h2>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-success mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-up-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t16.24 %
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tvs. previous month</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"users\" class=\"text-info material-shadow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->

\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-animate\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-medium text-muted mb-0\">Sessions</p>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"97.66\">0</span>k</h2>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-danger mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-down-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t3.96 %
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tvs. previous month</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"activity\" class=\"text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->

\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-animate bg-primary\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-medium text-white-50 mb-0\">Avg. Visit Duration</p>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mt-4 ff-secondary fw-semibold text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"3\">0</span>m
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"40\">0</span>sec</h2>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-white-50\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-white bg-opacity-25 text-white mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-down-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t0.24 %
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tvs. previous month</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-white bg-opacity-25 rounded-circle fs-2 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"clock\" class=\"text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->

\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-animate\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-medium text-muted mb-0\">Bounce Rate</p>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mt-4 ff-secondary fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter-value\" data-target=\"33.48\">0</span>%</h2>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-success mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-up-line align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t7.05 %
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\tvs. previous month</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-title bg-info-subtle rounded-circle fs-2 material-shadow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i data-feather=\"external-link\" class=\"text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end card body -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end card-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end row-->

\t\t\t\t\t<div class=\"row pt-3\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Entreprise</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end row-->

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-height-100\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Apply Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-3.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">Marketing Director
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-13\">(2-4 Yrs Exp.)</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalifornia</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-height-100\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Apply Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-4.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">Sr. Web Designer
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-13\">(2+ Yrs Exp.)</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalifornia</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-height-100 bg-primary-subtle shadow-none bg-opacity-10\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Apply Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-6.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">Sr. Web Designer
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-13\">(2+ Yrs Exp.)</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalifornia</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card card-height-100 bg-info-subtle shadow-none bg-opacity-10\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Apply Now</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-8.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">Sr. Web Designer
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-13\">(2+ Yrs Exp.)</span>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tCalifornia</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end col-->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end row-->
\t\t\t\t\t<div class=\"row pt-3\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Offres</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-3.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>UI/UX designer</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$23k - 35k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-primary-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-2.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Product Sales Specialist</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDigitech Galaxy
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSpain
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$10k - 15k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Sales</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary-subtle text-secondary\">Product</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Business</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-danger-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-4.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Marketing Director</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tMeta4Systems
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSweden
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$20k - 25k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning-subtle text-warning\">Marketing</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Bussiness</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-9.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Product Designer</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$40k+
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-1.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Project Manager</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tSyntyce Solutions
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tGermany
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$18k - 26k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">HR</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-7.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Business Associate</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$23k - 35k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-8.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Recruiting Coordinator</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tZoetic Fashion
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tNamibia
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$12k - 15k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Full Time</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Remote</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Fashion</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-5.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Customs officer</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\$41k - 45k
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-ghost-primary\">View More Jobs
\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- container-fluid -->
\t\t\t</div>
\t\t\t<!-- End Page-content -->

\t\t\t<footer class=\"footer\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t© Velzon.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"text-sm-end d-none d-sm-block\">
\t\t\t\t\t\t\t\tDesign & Develop by Themesbrand
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t\t<!-- end main content-->

\t</div>
\t<!-- END layout-wrapper -->

{% endblock %}
", "landing/presentationCompany.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev1\\templates\\landing\\presentationCompany.html.twig");
    }
}
