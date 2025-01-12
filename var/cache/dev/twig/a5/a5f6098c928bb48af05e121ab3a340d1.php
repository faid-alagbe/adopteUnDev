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

/* landing/presentation.html.twig */
class __TwigTemplate_dcca5b54ac4c8be4a07d08ba80f46a71 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/presentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing/presentation.html.twig", 1);
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
\t\t\t\t\t\t<form method=\"get\" action=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_posts");
        yield "\" class=\"row g-3 m-2\">
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<select name=\"technologies\" id=\"technologies\" placeholder=\"Technologie\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"0\">Langages/Technologies</option>
\t\t\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["langages"]) || array_key_exists("langages", $context) ? $context["langages"] : (function () { throw new RuntimeError('Variable "langages" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
            // line 50
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["langage"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langage"], "nom", [], "any", false, false, false, 50), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['langage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"localisation\" id=\"localisation\" placeholder=\"Localisation\" class=\"form-control\" placeholder=\"Ex : Paris\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"salaireMin\" placeholder=\"Salaire maximum\" id=\"salaireMin\" class=\"form-control\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"experienceMin\" id=\"experienceMin\" placeholder=\"Expérience minimale (années)\" class=\"form-control\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
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
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["profils_company"] ?? null), "nom", [], "any", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["profils_company"] ?? null), "nom", [], "any", false, false, false, 126), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126))), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Dévéloppeur</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_poste_critere");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Mes Offres</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profils_dev_index");
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Noter un developpeur</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 147
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
\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue</h6>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil");
        yield "\">
\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 235
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
\t\t\t\t\t


\t\t\t\t\t\t
\t\t\t\t\t<!-- end page title -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () { throw new RuntimeError('Variable "postes" does not exist.', 278, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            // line 279
            yield "\t\t\t\t\t\t<div class=\"col-lg-6\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "titre", [], "any", false, false, false, 290), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "showCompany", [], "any", false, false, false, 295), "nom", [], "any", false, false, false, 295), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "localisation", [], "any", false, false, false, 299), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "salaire", [], "any", false, false, false, 303), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 307
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "langages", [], "any", false, false, false, 307), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
                // line 308
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"badge bg-success-subtle text-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["langage"], "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['langage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            yield "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
                                            <a href=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "id", [], "any", false, false, false, 314)]), "html", null, true);
            yield "\" >
                                                <button class='btn btn-outline-primary'>
                                                    <span class=\"icon\">
                                                        <i class=\"ri-eye-line\"></i>
                                                    </span>
                                                </button>
                                            </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 327
            yield "                        <div class='text-center mb-5'>
\t\t\t\t\t\t\tAucun poste ne correspond à votre profil ou recherche
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        yield "\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"row pt-3\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Quelques Entreprises</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- end row-->
\t\t\t\t\t\t";
        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entreprises"]) || array_key_exists("entreprises", $context) ? $context["entreprises"] : (function () { throw new RuntimeError('Variable "entreprises" does not exist.', 345, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 346
            yield "\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card card-height-100\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-4.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "nom", [], "any", false, false, false, 363), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "nom", [], "any", false, false, false, 368), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entreprise"], "location", [], "any", false, false, false, 371), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 377
            yield "\t\t\t\t\t\t\t<div class='text-center mb-5'>
\t\t\t\t\t\t\t\tAucune Entreprise
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entreprise'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        yield "\t\t\t\t\t\t
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
\t\t\t\t\t";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 392, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 393
            yield "
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pencil-ruler-2-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 404), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "count", [], "any", false, false, false, 406), "html", null, true);
            yield " Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 412
            yield "\t\t\t\t\t\t<div class='text-center'>
\t\t\t\t\t\t\tAucune Offre disponible
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        yield "\t\t\t\t\t\t
\t\t\t\t\t\t
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
        return "landing/presentation.html.twig";
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
        return array (  620 => 416,  611 => 412,  600 => 406,  595 => 404,  582 => 393,  577 => 392,  564 => 381,  555 => 377,  544 => 371,  538 => 368,  530 => 363,  511 => 346,  506 => 345,  490 => 331,  481 => 327,  463 => 314,  457 => 310,  448 => 308,  444 => 307,  437 => 303,  430 => 299,  423 => 295,  415 => 290,  402 => 279,  397 => 278,  351 => 235,  344 => 231,  257 => 147,  250 => 143,  243 => 139,  236 => 135,  224 => 126,  148 => 52,  137 => 50,  133 => 49,  126 => 45,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
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
\t\t\t\t\t\t<form method=\"get\" action=\"{{ path('search_posts') }}\" class=\"row g-3 m-2\">
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<select name=\"technologies\" id=\"technologies\" placeholder=\"Technologie\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"0\">Langages/Technologies</option>
\t\t\t\t\t\t\t\t\t{% for langage in langages %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ langage }}\">{{langage.nom}}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"localisation\" id=\"localisation\" placeholder=\"Localisation\" class=\"form-control\" placeholder=\"Ex : Paris\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"salaireMin\" placeholder=\"Salaire maximum\" id=\"salaireMin\" class=\"form-control\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"experienceMin\" id=\"experienceMin\" placeholder=\"Expérience minimale (années)\" class=\"form-control\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
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
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">{{ profils_company.nom | default(user.email) }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Dévéloppeur</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_profil')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_poste_critere') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Mes Offres</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ url('app_profils_dev_index') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Noter un developpeur</span>
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
\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue</h6>
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
\t\t\t\t\t


\t\t\t\t\t\t
\t\t\t\t\t<!-- end page title -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for poste in postes %}
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
\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ poste.titre }}</h5>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ poste.showCompany.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ poste.localisation }}
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ poste.salaire }}
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for langage in poste.langages | slice(0, 6) %}
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"badge bg-success-subtle text-success\">{{ langage }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
                                            <a href=\"{{ path('app_postes_show', {'id': poste.id}) }}\" >
                                                <button class='btn btn-outline-primary'>
                                                    <span class=\"icon\">
                                                        <i class=\"ri-eye-line\"></i>
                                                    </span>
                                                </button>
                                            </a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    {% else %}
                        <div class='text-center mb-5'>
\t\t\t\t\t\t\tAucun poste ne correspond à votre profil ou recherche
                        </div>
                    {% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"row pt-3\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent\">
\t\t\t\t\t\t\t\t<h4 class=\"mb-sm-0\">Quelques Entreprises</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- end row-->
\t\t\t\t\t\t{% for entreprise in entreprises %}
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card card-height-100\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown float-end\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-reset dropdown-btn\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-18\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-dots-vertical\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#!\">Favorite</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-4.png\" alt=\"\" class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fs-15 fw-semibold\">{{ entreprise.nom }}
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{ entreprise.nom }}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{ entreprise.location }}</span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class='text-center mb-5'>
\t\t\t\t\t\t\t\tAucune Entreprise
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
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
\t\t\t\t\t{% for offre in offres %}

\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pencil-ruler-2-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">{{ offre.titre }}</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">{{ offre.count }} Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class='text-center'>
\t\t\t\t\t\t\tAucune Offre disponible
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t\t
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
", "landing/presentation.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\landing\\presentation.html.twig");
    }
}
