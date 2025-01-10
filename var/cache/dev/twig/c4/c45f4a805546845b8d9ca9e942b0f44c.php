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

/* registration/register.html.twig */
class __TwigTemplate_46325f6459afee93a13819eea03a1428 extends Template
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
        // line 26
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 26);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
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

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Trouvez votre équipe technique idéale – Faites défiler les meilleurs développeurs et entreprises ! \"</p>
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

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-lg-5 p-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary\">Inscrivez vous
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Obtenez votre compte sur adopteDev maintenant.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 89
            yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">


\t\t\t\t\t\t\t\t\t\t\t";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), 'errors');
        yield "

\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "


\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"useremail\" class=\"form-label\">Email
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "email", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "id" => "useremail", "placeholder" => "Entrez un email", "required" => true]]);
        // line 113
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 114, $this->source); })()), "email", [], "any", false, false, false, 114), 'errors');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEntrez un email valide
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 126
        yield "\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"useremail\" class=\"form-label\">Mot de passe
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative auth-pass-inputgroup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 134, $this->source); })()), "plainPassword", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control pe-5 password-input", "onpaste" => "return false", "placeholder" => "Entrez le mot de passe"]]);
        // line 141
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 142, $this->source); })()), "plainPassword", [], "any", false, false, false, 142), 'errors');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEntrez votre mot de passe
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 158, $this->source); })()), "agreeTerms", [], "any", false, false, false, 158), 'label');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mx-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 160, $this->source); })()), "agreeTerms", [], "any", false, false, false, 160), 'widget');
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4 row\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success col-5\" type=\"submit\" name=\"roles\" value=\"ROLE_COMPANY\">Recruteur</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success col-5 offset-2\" type=\"submit\" name=\"roles\" value=\"ROLE_DEV\">Développeur</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 168
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 168, $this->source); })()), 'form_end');
        yield "

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Avez-vous déjà un compte!
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 174
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
        return "registration/register.html.twig";
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
        return array (  251 => 174,  242 => 168,  231 => 160,  226 => 158,  215 => 149,  210 => 142,  207 => 141,  205 => 134,  195 => 126,  185 => 114,  182 => 113,  180 => 106,  168 => 97,  163 => 95,  157 => 91,  148 => 89,  144 => 88,  86 => 32,  76 => 31,  58 => 28,  41 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    <h1>Register</h1>

    {{ form_errors(registrationForm) }}

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.email) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
        {{ form_row(registrationForm.agreeTerms) }}

        <button type=\"submit\" class=\"btn\">Register</button>
    {{ form_end(registrationForm) }}
{% endblock %} #}


{% extends 'base.html.twig' %}

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fs-15 fst-italic\">\" Trouvez votre équipe technique idéale – Faites défiler les meilleurs développeurs et entreprises ! \"</p>
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

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<div class=\"p-lg-5 p-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-primary\">Inscrivez vous
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Obtenez votre compte sur adopteDev maintenant.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% for flash_error in app.flashes('verify_email_error') %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4\">


\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(registrationForm) }}

\t\t\t\t\t\t\t\t\t\t\t{{ form_start(registrationForm, { 'attr': { 'class': 'needs-validation', 'novalidate': 'novalidate' } }) }}


\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"useremail\" class=\"form-label\">Email
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(registrationForm.email, {
                                                            attr: {
                                                                class: 'form-control',
                                                                id: 'useremail',
                                                                placeholder: 'Entrez un email',
                                                                required: true
                                                            }
                                                        }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(registrationForm.email) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEntrez un email valide
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t{#  <input type=\"email\" class=\"form-control\" id=\"useremail\" placeholder=\"Enter email address\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    {{ form_row(registrationForm.email) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    <div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        Please enter email
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                    </div> #}
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"useremail\" class=\"form-label\">Mot de passe
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative auth-pass-inputgroup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(registrationForm.plainPassword, {
                                                                attr: {
                                                                    class: 'form-control pe-5 password-input',
                                                                    onpaste: 'return false',
                                                                    placeholder: 'Entrez le mot de passe',
                                                                   
                                                                }
                                                            }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(registrationForm.plainPassword) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Enter password\" id=\"password-input\" aria-describedby=\"passwordInput\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                         pattern: '(?=.*\\\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        {{ form_row(registrationForm.plainPassword, {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                            label: 'Password'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                        }) }} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-eye-fill align-middle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tEntrez votre mot de passe
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(registrationForm.agreeTerms) }}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mx-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(registrationForm.agreeTerms) }}
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-4 row\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success col-5\" type=\"submit\" name=\"roles\" value=\"ROLE_COMPANY\">Recruteur</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success col-5 offset-2\" type=\"submit\" name=\"roles\" value=\"ROLE_DEV\">Développeur</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{{ form_end(registrationForm) }}

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Avez-vous déjà un compte!
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
", "registration/register.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\registration\\register.html.twig");
    }
}
