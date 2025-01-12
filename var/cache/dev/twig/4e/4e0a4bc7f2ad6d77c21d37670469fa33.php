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

/* postes/index.html.twig */

class __TwigTemplate_41040d5ed04b9ebc4b1a3abc89c0c701 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "postes/index.html.twig", 1);
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
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () {
            throw new RuntimeError('Variable "profils_company" does not exist.', 163, $this->source);
        })()), "nom", [], "any", false, false, false, 163), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () {
            throw new RuntimeError('Variable "profils_company" does not exist.', 171, $this->source);
        })()), "nom", [], "any", false, false, false, 171), "html", null, true);
        yield "</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil_company");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profil de l'entreprise</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_postes_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Postes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 180
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
\t\t\t\t\t\t\t<span class=\"d-block fw-medium sidebar-user-name-text\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () {
            throw new RuntimeError('Variable "profils_company" does not exist.', 252, $this->source);
        })()), "nom", [], "any", false, false, false, 252), "html", null, true);
        yield "</span>
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
\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () {
            throw new RuntimeError('Variable "profils_company" does not exist.', 263, $this->source);
        })()), "nom", [], "any", false, false, false, 263), "html", null, true);
        yield "</h6>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 264
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil_company");
        yield "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\">Profil de l'entreprise</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 268
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_postes_index");
        yield "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\">Faire un poste</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 272
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
        yield "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Deconnexion</span>
\t\t\t\t\t\t</a>
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
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Vos Postes</h4>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 306
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_new");
        yield "\" >
\t\t\t\t\t\t\t\t\t<button class='btn btn-primary'>
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end page title -->

\t\t\t\t\t<!-- end row-->

\t\t\t\t\t<!-- end row-->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
            throw new RuntimeError('Variable "postes" does not exist.', 320, $this->source);
        })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 321
            yield "\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-3.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "titre", [], "any", false, false, false, 332), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_company"]) || array_key_exists("profils_company", $context) ? $context["profils_company"] : (function () {
                throw new RuntimeError('Variable "profils_company" does not exist.', 337, $this->source);
            })()), "nom", [], "any", false, false, false, 337), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "localisation", [], "any", false, false, false, 341), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "salaire", [], "any", false, false, false, 345), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "langages", [], "any", false, false, false, 349), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
                // line 350
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["langage"], "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['langage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "id", [], "any", false, false, false, 356)]), "html", null, true);
            yield "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-primary'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "id", [], "any", false, false, false, 363)]), "html", null, true);
            yield "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-secondary'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-edit-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href= \"";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "id", [], "any", false, false, false, 370)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-danger'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"las la-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 384
            yield "\t\t\t\t\t\t\t<div class='text-center'>
\t\t\t\t\t\t\t\tPas de postes de votre part
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        yield "\t\t\t\t\t</div>
            


\t\t\t\t</div>
\t\t\t\t<!-- container-fluid -->
\t\t\t</div>
\t\t\t<!-- End Page-content -->

\t\t\t
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
        return "postes/index.html.twig";
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
        return array(548 => 388,  539 => 384,  520 => 370,  510 => 363,  500 => 356,  494 => 352,  485 => 350,  481 => 349,  474 => 345,  467 => 341,  460 => 337,  452 => 332,  439 => 321,  434 => 320,  417 => 306,  380 => 272,  373 => 268,  366 => 264,  362 => 263,  348 => 252,  273 => 180,  266 => 176,  259 => 172,  255 => 171,  244 => 163,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
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
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">{{ profils_company.nom }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ profils_company.nom }}</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_profil_company')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profil de l'entreprise</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_postes_index')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Postes</span>
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
\t\t\t\t\t\t\t<span class=\"d-block fw-medium sidebar-user-name-text\">{{ profils_company.nom }}</span>
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
\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ profils_company.nom }}</h6>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_profil_company')}}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\">Profil de l'entreprise</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_postes_index')}}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\">Faire un poste</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_logout') }}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Deconnexion</span>
\t\t\t\t\t\t</a>
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
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Vos Postes</h4>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_postes_new') }}\" >
\t\t\t\t\t\t\t\t\t<button class='btn btn-primary'>
\t\t\t\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end page title -->

\t\t\t\t\t<!-- end row-->

\t\t\t\t\t<!-- end row-->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t{% for poste in postes %}
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-3.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ poste.titre }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ profils_company.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ poste.localisation }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ poste.salaire }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for langage in poste.langages | slice(0, 6) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">{{ langage }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_postes_show', {'id': poste.id}) }}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-primary'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_postes_edit', {'id': poste.id}) }}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-secondary'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-edit-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href= \"{{ path('app_postes_delete', {'id': poste.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-danger'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"las la-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class='text-center'>
\t\t\t\t\t\t\t\tPas de postes de votre part
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
            


\t\t\t\t</div>
\t\t\t\t<!-- container-fluid -->
\t\t\t</div>
\t\t\t<!-- End Page-content -->

\t\t\t
\t\t</div>
\t\t<!-- end main content-->

\t</div>
\t<!-- END layout-wrapper -->

{% endblock %}

{# 


{% extends 'base.html.twig' %}

{% block title %}Postes index{% endblock %}

{% block body %}
    <h1>Postes index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Localisation</th>
                <th>Experience_requise</th>
                <th>Salaire</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for poste in postes %}
            <tr>
                <td>{{ poste.id }}</td>
                <td>{{ poste.titre }}</td>
                <td>{{ poste.localisation }}</td>
                <td>{{ poste.experienceRequise }}</td>
                <td>{{ poste.salaire }}</td>
                <td>{{ poste.description }}</td>
                <td>
                    <a href=\"{{ path('app_postes_show', {'id': poste.id}) }}\">show</a>
                    <a href=\"{{ path('app_postes_edit', {'id': poste.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_postes_new') }}\">Create new</a>
{% endblock %} #}
", "postes/index.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\postes\\index.html.twig");
    }
}
