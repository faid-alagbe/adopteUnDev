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

/* authentification/register.html.twig */
class __TwigTemplate_006e4cf4cbc5a3e5c73532eae703d00d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "authentification/register.html.twig", 1);
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

        yield "Inscription
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
\t\t\t\t\t\t<div class=\"card overflow-hidden m-0 card-bg-fill galaxy-border-none\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center g-0\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Trouvez votre équipe technique idéale – Faites défiler les meilleurs développeurs et entreprises \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" À la recherche de la bonne opportunité ? Nous vous connectons avec les meilleurs du secteur !\"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Faites défiler. Trouvez une correspondance. Collaborez. Construisez votre avenir grâce à des connexions personnalisées  \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end carousel -->

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-lg-5 p-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary\">Register Account</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Get your Free Velzon account now.</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t<form class=\"needs-validation\" novalidate action=\"index.html\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"useremail\" class=\"form-label\">Email
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"useremail\" placeholder=\"Enter email address\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPlease enter email
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"username\" class=\"form-label\">Username
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Enter username\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPlease enter username
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password-input\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative auth-pass-inputgroup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Enter password\" id=\"password-input\" aria-describedby=\"passwordInput\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPlease enter password
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted fst-italic\">By registering you agree to the Velzon
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary text-decoration-underline fst-normal fw-medium\">Terms of Use</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"password-contain\" class=\"p-3 bg-light mb-2 rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-13\">Password must contain:</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p id=\"pass-length\" class=\"invalid fs-12 mb-2\">Minimum
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>8 characters</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p id=\"pass-lower\" class=\"invalid fs-12 mb-2\">At
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>lowercase</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tletter (a-z)</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p id=\"pass-upper\" class=\"invalid fs-12 mb-2\">At least
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>uppercase</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tletter (A-Z)</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p id=\"pass-number\" class=\"invalid fs-12 mb-0\">A least
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>number</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(0-9)</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success col-5\" type=\"submit\">Recruteur</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success col-5 offset-2\" type=\"submit\">Développeur</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Avez-vous déjà un compte ?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        yield "\" class=\"fw-semibold text-primary text-decoration-underline\">
\t\t\t\t\t\t\t\t\t\t\t\t\tConnexion</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
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
        return "authentification/register.html.twig";
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
        return array (  210 => 129,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription
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
\t\t\t\t\t\t<div class=\"card overflow-hidden m-0 card-bg-fill galaxy-border-none\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center g-0\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Trouvez votre équipe technique idéale – Faites défiler les meilleurs développeurs et entreprises \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" À la recherche de la bonne opportunité ? Nous vous connectons avec les meilleurs du secteur !\"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Faites défiler. Trouvez une correspondance. Collaborez. Construisez votre avenir grâce à des connexions personnalisées  \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- end carousel -->

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-lg-5 p-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary\">Register Account</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Get your Free Velzon account now.</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t<form class=\"needs-validation\" novalidate action=\"index.html\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"useremail\" class=\"form-label\">Email
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"useremail\" placeholder=\"Enter email address\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPlease enter email
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"username\" class=\"form-label\">Username
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Enter username\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tPlease enter username
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password-input\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative auth-pass-inputgroup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Enter password\" id=\"password-input\" aria-describedby=\"passwordInput\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPlease enter password
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 fs-12 text-muted fst-italic\">By registering you agree to the Velzon
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-primary text-decoration-underline fst-normal fw-medium\">Terms of Use</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"password-contain\" class=\"p-3 bg-light mb-2 rounded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-13\">Password must contain:</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p id=\"pass-length\" class=\"invalid fs-12 mb-2\">Minimum
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>8 characters</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p id=\"pass-lower\" class=\"invalid fs-12 mb-2\">At
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>lowercase</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tletter (a-z)</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p id=\"pass-upper\" class=\"invalid fs-12 mb-2\">At least
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>uppercase</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tletter (A-Z)</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p id=\"pass-number\" class=\"invalid fs-12 mb-0\">A least
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>number</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(0-9)</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4 row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success col-5\" type=\"submit\">Recruteur</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success col-5 offset-2\" type=\"submit\">Développeur</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Avez-vous déjà un compte ?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url('app_login') }}\" class=\"fw-semibold text-primary text-decoration-underline\">
\t\t\t\t\t\t\t\t\t\t\t\t\tConnexion</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
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
", "authentification/register.html.twig", "C:\\wamp64\\www\\projet_miage\\adopteUnDev\\templates\\authentification\\register.html.twig");
    }
}
