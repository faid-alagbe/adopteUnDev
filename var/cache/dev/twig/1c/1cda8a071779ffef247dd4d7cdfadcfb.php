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

/* authentification/login.html.twig */
class __TwigTemplate_4ab9bf22761f41c72ccd7055b8a742c5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "authentification/login.html.twig", 1);
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

        yield "Connexion
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
        yield "\t<!-- auth-page wrapper -->
\t<div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
\t\t<div class=\"bg-overlay\"></div>
\t\t<!-- auth-page content -->
\t\t<div class=\"auth-page-content overflow-hidden pt-lg-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"card overflow-hidden card-bg-fill galaxy-border-none\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-lg-5 p-4 auth-one-bg h-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative h-100 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-light.png\" alt=\"\" height=\"18\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-double-quotes-l display-4 text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"qoutescarouselIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner text-center text-white-50 pb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Trouvez votre équipe technique idéale – Faites défiler les meilleurs développeurs et entreprises ! \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" À la recherche de la bonne opportunité ? Nous vous connectons avec les meilleurs du secteur !.\"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Faites défiler. Trouvez une correspondance. Collaborez. Construisez votre avenir grâce à des connexions personnalisées ! \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end carousel -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end col -->

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-lg-5 p-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary\">Welcome Back !</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Sign in to continue to Velzon.</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"index.html\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"username\" class=\"form-label\">Username</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Enter username\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-pass-reset-cover.html\" class=\"text-muted\">Forgot password?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password-input\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative auth-pass-inputgroup mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pe-5 password-input\" placeholder=\"Enter password\" id=\"password-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"auth-remember-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"auth-remember-check\">Remember me</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success w-100\" type=\"submit\">Sign In</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Don't have an account ?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_register");
        yield "\" class=\"fw-semibold text-primary text-decoration-underline\">
\t\t\t\t\t\t\t\t\t\t\t\t\tInscription</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end col -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->

\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</div>
\t\t<!-- end auth page content -->

\t\t<!-- footer -->
\t\t<footer class=\"footer galaxy-border-none\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<p class=\"mb-0\">&copy;
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\tadopteUnDev
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-heart text-danger\"></i>
\t\t\t\t\t\t\t\tstartup
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- end Footer -->
\t</div>
\t<!-- end auth-page-wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "authentification/login.html.twig";
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
        return array (  178 => 97,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion
{% endblock %}

{% block body %}
\t<!-- auth-page wrapper -->
\t<div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
\t\t<div class=\"bg-overlay\"></div>
\t\t<!-- auth-page content -->
\t\t<div class=\"auth-page-content overflow-hidden pt-lg-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"card overflow-hidden card-bg-fill galaxy-border-none\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-lg-5 p-4 auth-one-bg h-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-overlay\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative h-100 d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-light.png\" alt=\"\" height=\"18\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-double-quotes-l display-4 text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"qoutescarouselIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner text-center text-white-50 pb-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Trouvez votre équipe technique idéale – Faites défiler les meilleurs développeurs et entreprises ! \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" À la recherche de la bonne opportunité ? Nous vous connectons avec les meilleurs du secteur !.\"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Faites défiler. Trouvez une correspondance. Collaborez. Construisez votre avenir grâce à des connexions personnalisées ! \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end carousel -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end col -->

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-lg-5 p-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary\">Welcome Back !</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Sign in to continue to Velzon.</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"index.html\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"username\" class=\"form-label\">Username</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Enter username\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-pass-reset-cover.html\" class=\"text-muted\">Forgot password?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password-input\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative auth-pass-inputgroup mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pe-5 password-input\" placeholder=\"Enter password\" id=\"password-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"auth-remember-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"auth-remember-check\">Remember me</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success w-100\" type=\"submit\">Sign In</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Don't have an account ?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('app_register') }}\" class=\"fw-semibold text-primary text-decoration-underline\">
\t\t\t\t\t\t\t\t\t\t\t\t\tInscription</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- end col -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- end card -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->

\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</div>
\t\t<!-- end auth page content -->

\t\t<!-- footer -->
\t\t<footer class=\"footer galaxy-border-none\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<p class=\"mb-0\">&copy;
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\tadopteUnDev
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-heart text-danger\"></i>
\t\t\t\t\t\t\t\tstartup
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- end Footer -->
\t</div>
\t<!-- end auth-page-wrapper -->
{% endblock %}
", "authentification/login.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\authentification\\login.html.twig");
    }
}
