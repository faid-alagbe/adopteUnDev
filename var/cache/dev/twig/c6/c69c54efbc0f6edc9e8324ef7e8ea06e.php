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
class __TwigTemplate_4254d6e8483967600fc3e3b52dfa904f extends Template
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

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 45
        yield "    <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"bg-overlay\"></div>
        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden pt-lg-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card overflow-hidden card-bg-fill galaxy-border-none\">
                            <div class=\"row g-0\">
                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4 auth-one-bg h-100\">
                                        <div class=\"bg-overlay\"></div>
                                        <div class=\"position-relative h-100 d-flex flex-column\">
                                            <div class=\"mb-4\">
                                                <a href=\"index.html\" class=\"d-block\">
                                                    <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"18\">
                                                </a>
                                            </div>
                                            <div class=\"mt-auto\">
                                                <div class=\"mb-3\">
                                                    <i class=\"ri-double-quotes-l display-4 text-success\"></i>
                                                </div>

                                                <div id=\"qoutescarouselIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                                    <div class=\"carousel-indicators\">
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                                    </div>
                                                    <div class=\"carousel-inner text-center text-white-50 pb-5\">
                                                        <div class=\"carousel-item active\">
                                                            <p class=\"fs-15 fst-italic\">\" Great! Clean code, clean design, easy for customization. Thanks very much! \"</p>
                                                        </div>
                                                        <div class=\"carousel-item\">
                                                            <p class=\"fs-15 fst-italic\">\" The theme is really great with an amazing customer support.\"</p>
                                                        </div>
                                                        <div class=\"carousel-item\">
                                                            <p class=\"fs-15 fst-italic\">\" Great! Clean code, clean design, easy for customization. Thanks very much! \"</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4\">
                                        <div>
                                            <h5 class=\"text-primary\">Connexion</h5>
                                            ";
        // line 98
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 98, $this->source); })())) {
            // line 99
            yield "                                                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 99, $this->source); })()), "messageKey", [], "any", false, false, false, 99), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 99, $this->source); })()), "messageData", [], "any", false, false, false, 99), "security"), "html", null, true);
            yield "</div>
                                            ";
        }
        // line 101
        yield "                                        </div>

                                        <div class=\"mt-4\">
                                            <form method=\"post\">

                                                <div class=\"mb-3\">
                                                    <label for=\"email\" class=\"form-label\">Email</label>
                                                    <input type=\"email\" id=\"email\" placeholder=\"Email\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                                </div>

                                                <div class=\"mb-3\">
                                                    <div class=\"float-end\">
                                                        <a href=\"auth-pass-reset-cover.html\" class=\"text-muted\">Mot de passe oublié?</a>
                                                    </div>
                                                    <label class=\"form-label\" for=\"password-input\">Password</label>
                                                    <div class=\"position-relative auth-pass-inputgroup mb-3\">
                                                        <input type=\"password\" class=\"form-control pe-5 password-input\" placeholder=\"Enter password\" id=\"password-input\" name=\"password\" autocomplete=\"current-password\" required>
                                                        <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                                    </div>
                                                </div>

                                                <input type=\"hidden\" name=\"_csrf_token\"
                                                    value=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                                                >

                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" value=\"\" id=\"auth-remember-check\">
                                                    <label class=\"form-check-label\" for=\"auth-remember-check\">Remember me</label>
                                                </div>

                                                <div class=\"mt-4\">
                                                    <button class=\"btn btn-success w-100\" type=\"submit\">Sign In</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class=\"mt-5 text-center\">
                                            <p class=\"mb-0\">Don't have an account ? <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_register");
        yield "\" class=\"fw-semibold text-primary text-decoration-underline\"> Inscription</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class=\"footer galaxy-border-none\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center\">
                            <p class=\"mb-0\">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class=\"mdi mdi-heart text-danger\"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
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
        return array (  193 => 138,  175 => 123,  157 => 108,  148 => 101,  142 => 99,  140 => 98,  85 => 45,  75 => 44,  58 => 42,  41 => 40,);
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

{% block title %}Connexion{% endblock %}

{% block body %}
    <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"bg-overlay\"></div>
        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden pt-lg-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card overflow-hidden card-bg-fill galaxy-border-none\">
                            <div class=\"row g-0\">
                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4 auth-one-bg h-100\">
                                        <div class=\"bg-overlay\"></div>
                                        <div class=\"position-relative h-100 d-flex flex-column\">
                                            <div class=\"mb-4\">
                                                <a href=\"index.html\" class=\"d-block\">
                                                    <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"18\">
                                                </a>
                                            </div>
                                            <div class=\"mt-auto\">
                                                <div class=\"mb-3\">
                                                    <i class=\"ri-double-quotes-l display-4 text-success\"></i>
                                                </div>

                                                <div id=\"qoutescarouselIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                                    <div class=\"carousel-indicators\">
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                                    </div>
                                                    <div class=\"carousel-inner text-center text-white-50 pb-5\">
                                                        <div class=\"carousel-item active\">
                                                            <p class=\"fs-15 fst-italic\">\" Great! Clean code, clean design, easy for customization. Thanks very much! \"</p>
                                                        </div>
                                                        <div class=\"carousel-item\">
                                                            <p class=\"fs-15 fst-italic\">\" The theme is really great with an amazing customer support.\"</p>
                                                        </div>
                                                        <div class=\"carousel-item\">
                                                            <p class=\"fs-15 fst-italic\">\" Great! Clean code, clean design, easy for customization. Thanks very much! \"</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4\">
                                        <div>
                                            <h5 class=\"text-primary\">Connexion</h5>
                                            {% if error %}
                                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                            {% endif %}
                                        </div>

                                        <div class=\"mt-4\">
                                            <form method=\"post\">

                                                <div class=\"mb-3\">
                                                    <label for=\"email\" class=\"form-label\">Email</label>
                                                    <input type=\"email\" id=\"email\" placeholder=\"Email\" value=\"{{ last_username }}\" name=\"email\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                                </div>

                                                <div class=\"mb-3\">
                                                    <div class=\"float-end\">
                                                        <a href=\"auth-pass-reset-cover.html\" class=\"text-muted\">Mot de passe oublié?</a>
                                                    </div>
                                                    <label class=\"form-label\" for=\"password-input\">Password</label>
                                                    <div class=\"position-relative auth-pass-inputgroup mb-3\">
                                                        <input type=\"password\" class=\"form-control pe-5 password-input\" placeholder=\"Enter password\" id=\"password-input\" name=\"password\" autocomplete=\"current-password\" required>
                                                        <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                                    </div>
                                                </div>

                                                <input type=\"hidden\" name=\"_csrf_token\"
                                                    value=\"{{ csrf_token('authenticate') }}\"
                                                >

                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" value=\"\" id=\"auth-remember-check\">
                                                    <label class=\"form-check-label\" for=\"auth-remember-check\">Remember me</label>
                                                </div>

                                                <div class=\"mt-4\">
                                                    <button class=\"btn btn-success w-100\" type=\"submit\">Sign In</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class=\"mt-5 text-center\">
                                            <p class=\"mb-0\">Don't have an account ? <a href=\"{{ url('app_register') }}\" class=\"fw-semibold text-primary text-decoration-underline\"> Inscription</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class=\"footer galaxy-border-none\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center\">
                            <p class=\"mb-0\">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class=\"mdi mdi-heart text-danger\"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
{% endblock %}", "security/login.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev\\templates\\security\\login.html.twig");
    }
}
