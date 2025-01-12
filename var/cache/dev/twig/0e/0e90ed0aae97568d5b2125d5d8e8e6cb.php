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

/* company/new.html.twig */
class __TwigTemplate_9dd442f797e5433eb08a3c937c03f990 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "company/new.html.twig", 1);
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

        yield "New ProfilsDev";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
   <!-- Begin page -->
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


\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center\">

\t\t\t\t\t\t


\t\t\t\t\t\t


\t\t\t\t\t\t<div class=\"d-flex align-items-center\">


\t\t\t\t\t\t<div class=\"dropdown ms-sm-3 header-item topbar-user\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle header-profile-user\" src=\"assets/images/users/avatar-1.jpg\" alt=\"Header Avatar\">
\t\t\t\t\t\t\t\t\t<span class=\"text-start ms-xl-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["profils_company"] ?? null), "nom", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["profils_company"] ?? null), "nom", [], "any", false, false, false, 64), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64))), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
\t\t\tclass=\"navbar-menu\">
\t\t\t<!-- LOGO -->
\t\t\t<div
\t\t\t\tclass=\"navbar-brand-box\">
\t\t\t\t<!-- Dark Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-dark\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\" ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\" ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        yield "\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<!-- Light Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\" ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
        yield "\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\" ";
        // line 125
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
\t\t\t<div class='main-content'>

\t\t\t\t<div class=\"page-content\"> <div class=\"container-fluid\">

\t\t\t\t\t
    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Completer votre profil</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_index");
        yield "\" class=\"btn btn-outline-warning material-shadow-none my-3\" >back to list</a>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                    ";
        // line 165
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'form_start');
        yield "
                                        ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'widget');
        yield "
                                        <div class=\"text-end\">
                                            <button class=\"btn btn-primary material-shadow-none my-3\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 168, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        yield "</button>
                                        </div>
                                    ";
        // line 170
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), 'form_end');
        yield "
                                        <!--end row-->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                

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
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/node-waves/waves.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/feather-icons/feather.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/plugins/lord-icon-2.1.0.js"), "html", null, true);
        yield "\"></script>
\t<script src=\" ";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        yield "\"></script>

\t<!-- profile-setting init js -->
\t<script src=\" ";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/profile-setting.init.js"), "html", null, true);
        yield "\"></script>

\t<!-- App js -->
\t<script src=\" ";
        // line 206
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
        return "company/new.html.twig";
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
        return array (  350 => 206,  344 => 203,  338 => 200,  334 => 199,  330 => 198,  326 => 197,  322 => 196,  318 => 195,  290 => 170,  285 => 168,  280 => 166,  276 => 165,  267 => 159,  230 => 125,  224 => 122,  215 => 116,  209 => 113,  157 => 64,  121 => 31,  115 => 28,  106 => 22,  100 => 19,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New ProfilsDev{% endblock %}

{% block body %}

   <!-- Begin page -->
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


\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-flex align-items-center\">

\t\t\t\t\t\t


\t\t\t\t\t\t


\t\t\t\t\t\t<div class=\"d-flex align-items-center\">


\t\t\t\t\t\t<div class=\"dropdown ms-sm-3 header-item topbar-user\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle header-profile-user\" src=\"assets/images/users/avatar-1.jpg\" alt=\"Header Avatar\">
\t\t\t\t\t\t\t\t\t<span class=\"text-start ms-xl-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">{{ profils_company.nom | default(user.email) }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
\t\t\tclass=\"navbar-menu\">
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
\t\t\t<div class='main-content'>

\t\t\t\t<div class=\"page-content\"> <div class=\"container-fluid\">

\t\t\t\t\t
    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Completer votre profil</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <a href=\"{{ path('app_postes_index') }}\" class=\"btn btn-outline-warning material-shadow-none my-3\" >back to list</a>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                    {{ form_start(form) }}
                                        {{ form_widget(form) }}
                                        <div class=\"text-end\">
                                            <button class=\"btn btn-primary material-shadow-none my-3\">{{ button_label|default('Ajouter') }}</button>
                                        </div>
                                    {{ form_end(form) }}
                                        <!--end row-->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                

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
", "company/new.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\company\\new.html.twig");
    }
}
