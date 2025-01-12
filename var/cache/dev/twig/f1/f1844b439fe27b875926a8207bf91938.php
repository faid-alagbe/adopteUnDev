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

/* postes/show.html.twig */

class __TwigTemplate_5c2d792f25a2e3d056e6b00c0eef910f extends Template
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
                $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/show.html.twig"));

                $this->parent = $this->loadTemplate("base.html.twig", "postes/show.html.twig", 1);
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
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
                yield " \", class=\"me-3 rounded-circle avatar-xs\", alt=\"user-pic\">
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
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
                yield " \", class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
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
                // line 120
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
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle header-profile-user\" src=\" ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
                yield "\" alt=\"Header Avatar\">
\t\t\t\t\t\t\t\t\t<span class=\"text-start ms-xl-2\">
\t\t\t\t\t\t\t\t\t";
                // line 163
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                        throw new RuntimeError('Variable "user" does not exist.', 163, $this->source);
                })()), "role", [], "any", false, false, false, 163) == "ROLE_DEV")) {
                        // line 164
                        yield "\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 164, $this->source);
                        })()), "getProfilsDev", [], "any", false, false, false, 164), "nom", [], "any", false, false, false, 164), "html", null, true);
                        yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Developpeur</span>
\t\t\t\t\t\t\t\t\t";
                } else {
                        // line 167
                        yield "\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 167, $this->source);
                        })()), "getCompany", [], "any", false, false, false, 167), "nom", [], "any", false, false, false, 167), "html", null, true);
                        yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                yield "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t";
                // line 176
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                        throw new RuntimeError('Variable "user" does not exist.', 176, $this->source);
                })()), "role", [], "any", false, false, false, 176) == "ROLE_DEV")) {
                        // line 177
                        yield "\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 177, $this->source);
                        })()), "getProfilsDev", [], "any", false, false, false, 177), "nom", [], "any", false, false, false, 177), "html", null, true);
                        yield "</h6>
\t\t\t\t\t\t\t\t";
                } else {
                        // line 179
                        yield "\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 179, $this->source);
                        })()), "getCompany", [], "any", false, false, false, 179), "nom", [], "any", false, false, false, 179), "html", null, true);
                        yield "</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                        // line 180
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil_company");
                        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Profil de l'entreprise</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                        // line 184
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_postes_index");
                        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Postes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                        // line 188
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
                        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-logout text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"align-middle\" data-key=\"t-logout\">Deconnexion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 193
                yield "\t\t\t\t\t\t\t\t
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
\t\t\t\t\t\t<img src=\" ";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
                yield "\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\" ";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
                yield "\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<!-- Light Logo-->
\t\t\t\t<a href=\"index.html\" class=\"logo logo-light\">
\t\t\t\t\t<span class=\"logo-sm\">
\t\t\t\t\t\t<img src=\" ";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-sm.png"), "html", null, true);
                yield "\" alt=\"\" height=\"22\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"logo-lg\">
\t\t\t\t\t\t<img src=\" ";
                // line 249
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
                yield "\" alt=\"\" height=\"17\">
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
\t\t\t\t\t<i class=\"ri-record-circle-line\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"dropdown sidebar-user m-1 rounded\">
\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t<img class=\"rounded header-profile-user\" src=\" ";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
                yield "\" alt=\"Header Avatar\">
\t\t\t\t\t\t<span class=\"text-start\">
\t\t\t\t\t\t\t";
                // line 262
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                        throw new RuntimeError('Variable "user" does not exist.', 262, $this->source);
                })()), "role", [], "any", false, false, false, 262) == "ROLE_DEV")) {
                        // line 263
                        yield "\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 263, $this->source);
                        })()), "getProfilsDev", [], "any", false, false, false, 263), "nom", [], "any", false, false, false, 263), "html", null, true);
                        yield "</h6>
\t\t\t\t\t\t\t";
                } else {
                        // line 265
                        yield "\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 265, $this->source);
                        })()), "getCompany", [], "any", false, false, false, 265), "nom", [], "any", false, false, false, 265), "html", null, true);
                        yield "</h6>
\t\t\t\t\t\t\t";
                }
                // line 267
                yield "\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                        throw new RuntimeError('Variable "user" does not exist.', 267, $this->source);
                })()), "role", [], "any", false, false, false, 267) == "ROLE_DEV")) {
                        // line 268
                        yield "\t\t\t\t\t\t\t\t<span class=\"d-blockc fw-medium sidebar-user-name-text\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 268, $this->source);
                        })()), "getProfilsDev", [], "any", false, false, false, 268), "nom", [], "any", false, false, false, 268), "html", null, true);
                        yield "</span>
\t\t\t\t\t\t\t";
                } else {
                        // line 270
                        yield "\t\t\t\t\t\t\t\t<span class=\"d-block fw-medium sidebar-user-name-text\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 270, $this->source);
                        })()), "getCompany", [], "any", false, false, false, 270), "nom", [], "any", false, false, false, 270), "html", null, true);
                        yield "</span>
\t\t\t\t\t\t\t";
                }
                // line 272
                yield "\t\t\t\t\t\t\t<span class=\"d-block fs-14 sidebar-user-name-sub-text\">
\t\t\t\t\t\t\t\t<i class=\"ri ri-circle-fill fs-10 text-success align-baseline\"></i>
\t\t\t\t\t\t\t\t<span class=\"align-middle\">Online</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t<div
\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t<!-- item-->
\t\t\t\t\t";
                // line 282
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                        throw new RuntimeError('Variable "user" does not exist.', 282, $this->source);
                })()), "role", [], "any", false, false, false, 282) == "ROLE_DEV")) {
                        // line 283
                        yield "\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 283, $this->source);
                        })()), "getProfilsDev", [], "any", false, false, false, 283), "nom", [], "any", false, false, false, 283), "html", null, true);
                        yield "</h6>
\t\t\t\t\t\t\t\t";
                } else {
                        // line 285
                        yield "\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                                throw new RuntimeError('Variable "user" does not exist.', 285, $this->source);
                        })()), "getCompany", [], "any", false, false, false, 285), "nom", [], "any", false, false, false, 285), "html", null, true);
                        yield "</h6>
\t\t\t\t\t\t\t\t";
                }
                // line 287
                yield "\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profil_company");
                yield "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\">Profil de l'entreprise</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 291
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_postes_index");
                yield "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-account-circle text-muted fs-16 align-middle me-1\"></i>
\t\t\t\t\t\t\t<span class=\"align-middle\">Faire un poste</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 295
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
\t\t\t\t\t
\t\t\t\t\t<!-- end page title -->

\t\t\t\t\t<!-- end row-->

\t\t\t\t\t<!-- end row-->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" ";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/companies/img-3.png"), "html", null, true);
                yield "\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
                        throw new RuntimeError('Variable "postes" does not exist.', 343, $this->source);
                })()), "titre", [], "any", false, false, false, 343), "html", null, true);
                yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
                                                <p class=\"text-warning fst-italic fw-light\">
                                                    &quot; ";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
                        throw new RuntimeError('Variable "postes" does not exist.', 346, $this->source);
                })()), "description", [], "any", false, false, false, 346), "html", null, true);
                yield " &quot;
                                                </p>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
                        throw new RuntimeError('Variable "postes" does not exist.', 351, $this->source);
                })()), "showCompany", [], "any", false, false, false, 351), "nom", [], "any", false, false, false, 351), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
                        throw new RuntimeError('Variable "postes" does not exist.', 355, $this->source);
                })()), "localisation", [], "any", false, false, false, 355), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 359
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
                        throw new RuntimeError('Variable "postes" does not exist.', 359, $this->source);
                })()), "salaire", [], "any", false, false, false, 359), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 363
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
                        throw new RuntimeError('Variable "postes" does not exist.', 363, $this->source);
                })()), "langages", [], "any", false, false, false, 363), 0, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
                        // line 364
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["langage"], "html", null, true);
                        yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['langage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 366
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>

                                                
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 371
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () {
                        throw new RuntimeError('Variable "user" does not exist.', 371, $this->source);
                })()), "role", [], "any", false, false, false, 371) == "ROLE_DEV")) {
                        // line 372
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                        // line 374
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 375
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
                                throw new RuntimeError('Variable "postes" does not exist.', 375, $this->source);
                        })()), "id", [], "any", false, false, false, 375)]), "html", null, true);
                        yield "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-secondary'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-edit-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href= \"";
                        // line 382
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_postes_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["postes"]) || array_key_exists("postes", $context) ? $context["postes"] : (function () {
                                throw new RuntimeError('Variable "postes" does not exist.', 382, $this->source);
                        })()), "id", [], "any", false, false, false, 382)]), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-danger'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"las la-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 392
                yield "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
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

";

                $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

                yield from [];
        }

        /**
         * @codeCoverageIgnore
         */
        public function getTemplateName(): string
        {
                return "postes/show.html.twig";
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
                return array(624 => 392,  611 => 382,  601 => 375,  598 => 374,  594 => 372,  592 => 371,  585 => 366,  576 => 364,  572 => 363,  565 => 359,  558 => 355,  551 => 351,  543 => 346,  537 => 343,  529 => 338,  483 => 295,  476 => 291,  468 => 287,  462 => 285,  456 => 283,  454 => 282,  442 => 272,  436 => 270,  430 => 268,  427 => 267,  421 => 265,  415 => 263,  413 => 262,  408 => 260,  394 => 249,  388 => 246,  379 => 240,  373 => 237,  327 => 193,  319 => 188,  312 => 184,  305 => 180,  300 => 179,  294 => 177,  292 => 176,  284 => 170,  277 => 167,  270 => 164,  268 => 163,  263 => 161,  219 => 120,  206 => 110,  193 => 100,  121 => 31,  115 => 28,  106 => 22,  100 => 19,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-2.jpg') }} \", class=\"me-3 rounded-circle avatar-xs\", alt=\"user-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0\">Angela Bernier</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-11 mb-0 text-muted\">Manager</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<!-- item -->
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-item notify-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/users/avatar-3.jpg') }} \", class=\"me-3 rounded-circle avatar-xs\" alt=\"user-pic\">
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
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle header-profile-user\" src=\" {{ asset('assets/images/users/avatar-1.jpg') }}\" alt=\"Header Avatar\">
\t\t\t\t\t\t\t\t\t<span class=\"text-start ms-xl-2\">
\t\t\t\t\t\t\t\t\t{% if user.role == 'ROLE_DEV' %}
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">{{ user.getProfilsDev.nom }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Developpeur</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">{{ user.getCompany.nom }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Entreprise</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<!-- item-->
\t\t\t\t\t\t\t\t{% if user.role == 'ROLE_DEV' %}
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ user.getProfilsDev.nom }}</h6>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ user.getCompany.nom }}</h6>
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
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
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
\t\t\t</div>

\t\t\t<div class=\"dropdown sidebar-user m-1 rounded\">
\t\t\t\t<button type=\"button\" class=\"btn material-shadow-none\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t<img class=\"rounded header-profile-user\" src=\" {{ asset('assets/images/users/avatar-1.jpg') }}\" alt=\"Header Avatar\">
\t\t\t\t\t\t<span class=\"text-start\">
\t\t\t\t\t\t\t{% if user.role == 'ROLE_DEV' %}
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ user.getProfilsDev.nom }}</h6>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ user.getCompany.nom }}</h6>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if user.role == 'ROLE_DEV' %}
\t\t\t\t\t\t\t\t<span class=\"d-blockc fw-medium sidebar-user-name-text\">{{ user.getProfilsDev.nom }}</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"d-block fw-medium sidebar-user-name-text\">{{ user.getCompany.nom }}</span>
\t\t\t\t\t\t\t{% endif %}
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
\t\t\t\t\t{% if user.role == 'ROLE_DEV' %}
\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ user.getProfilsDev.nom }}</h6>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t<h6 class=\"dropdown-header\">Bienvenue {{ user.getCompany.nom }}</h6>
\t\t\t\t\t\t\t\t{% endif %}
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
\t\t\t\t\t
\t\t\t\t\t<!-- end page title -->

\t\t\t\t\t<!-- end row-->

\t\t\t\t\t<!-- end row-->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\" {{ asset('assets/images/companies/img-3.png') }}\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ postes.titre }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
                                                <p class=\"text-warning fst-italic fw-light\">
                                                    &quot; {{ postes.description }} &quot;
                                                </p>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ postes.showCompany.nom }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ postes.localisation }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ postes.salaire }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for langage in postes.langages | slice(0, 6) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">{{ langage }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>

                                                
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% if user.role == 'ROLE_DEV' %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_postes_edit', {'id': postes.id}) }}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-secondary'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-edit-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href= \"{{ path('app_postes_delete', {'id': postes.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class='btn btn-outline-danger'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"las la-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
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














{# {% extends 'base.html.twig' %}

{% block title %}Postes{% endblock %}

{% block body %}
    <h1>Postes</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ poste.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ poste.titre }}</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>{{ poste.localisation }}</td>
            </tr>
            <tr>
                <th>Experience_requise</th>
                <td>{{ poste.experienceRequise }}</td>
            </tr>
            <tr>
                <th>Salaire</th>
                <td>{{ poste.salaire }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ poste.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_postes_index') }}\">back to list</a>

    <a href=\"{{ path('app_postes_edit', {'id': poste.id}) }}\">edit</a>

    {{ include('postes/_delete_form.html.twig') }}
{% endblock %}
 #}", "postes/show.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\postes\\show.html.twig");
        }
}
