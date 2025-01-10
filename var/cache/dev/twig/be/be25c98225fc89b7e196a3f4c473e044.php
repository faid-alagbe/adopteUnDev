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

/* security/login.html.twig */
class __TwigTemplate_eeb4205fc043b0719b50e211f9a62114 extends Template
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
        // line 40
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 40);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
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

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 46
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Trouvez  votre équipe technique idéale – Faites défiler les meilleurs développeurs et entreprises ! \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" À la recherche de la bonne opportunité ? Nous vous connectons avec les meilleurs du secteur !\"</p>
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
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary\">Connexion</h5>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 99
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 99, $this->source); })())) {
            // line 100
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 100, $this->source); })()), "messageKey", [], "any", false, false, false, 100), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 100, $this->source); })()), "messageData", [], "any", false, false, false, 100), "security"), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 102
        yield "\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" placeholder=\"Email\" value=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-pass-reset-cover.html\" class=\"text-muted\">Mot de passe oublié?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password-input\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative auth-pass-inputgroup mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pe-5 password-input\" placeholder=\"Enter password\" id=\"password-input\" name=\"password\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" value=\"\" id=\"auth-remember-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"auth-remember-check\">Se souvenir de moi</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success w-100\" type=\"submit\">Connectez-vous!</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Vous n'avez pas de compte?
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 140
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
\t\t\t\t\t\t\t\tstartup
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-heart text-danger\"></i>
\t\t\t\t\t\t\t\tadopteDev
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
        return "security/login.html.twig";
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
        return array (  195 => 140,  177 => 125,  158 => 109,  149 => 102,  143 => 100,  141 => 99,  86 => 46,  76 => 45,  58 => 42,  41 => 40,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    <div class=\"checkbox mb-3\">
        <label>
            <input type=\"checkbox\" name=\"_remember_me\"> Remember me
        </label>
    </div>

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form>
{% endblock %} #}


{% extends 'base.html.twig' %}

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Trouvez  votre équipe technique idéale – Faites défiler les meilleurs développeurs et entreprises ! \"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" À la recherche de la bonne opportunité ? Nous vous connectons avec les meilleurs du secteur !\"</p>
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
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary\">Connexion</h5>
\t\t\t\t\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" placeholder=\"Email\" value=\"{{ last_username }}\" name=\"email\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-pass-reset-cover.html\" class=\"text-muted\">Mot de passe oublié?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password-input\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative auth-pass-inputgroup mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control pe-5 password-input\" placeholder=\"Enter password\" id=\"password-input\" name=\"password\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" value=\"\" id=\"auth-remember-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"auth-remember-check\">Se souvenir de moi</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success w-100\" type=\"submit\">Connectez-vous!</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Vous n'avez pas de compte?
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
\t\t\t\t\t\t\t\tstartup
\t\t\t\t\t\t\t\t<i class=\"mdi mdi-heart text-danger\"></i>
\t\t\t\t\t\t\t\tadopteDev
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
", "security/login.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\security\\login.html.twig");
    }
}
