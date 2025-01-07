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
class __TwigTemplate_b614ac2351433b6b3c33843f44e575e2 extends Template
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

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        yield "     <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"bg-overlay\"></div>
        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden pt-lg-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card overflow-hidden m-0 card-bg-fill galaxy-border-none\">
                            <div class=\"row justify-content-center g-0\">
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

                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4\">
                                        <div>
                                            <h5 class=\"text-primary\">Register Account</h5>
                                            <p class=\"text-muted\">Get your Free Velzon account now.</p>
                                        </div>
                                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 87
            yield "                                            <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "
                                        <div class=\"mt-4\">
                                            
                                            
                                                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), 'errors');
        yield "

                                                    ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                                                      
                                                <div class=\"mb-3\">
                                                    <label for=\"useremail\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                                   <div class=\"form-group\">
                                                        
                                                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "email", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control", "id" => "useremail", "placeholder" => "Enter email address", "required" => true]]);
        // line 109
        yield "
                                                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110), 'errors');
        yield "
                                                        <div class=\"invalid-feedback\">
                                                            Please enter a valid email
                                                        </div>
                                                    </div>

                                                   
                                                   ";
        // line 122
        yield "                                                </div>

                                                <div class=\"mb-3\">
                                                    <label for=\"useremail\" class=\"form-label\">Password <span class=\"text-danger\">*</span></label>
                                                    <div class=\"position-relative auth-pass-inputgroup\">
                                                        <div class=\"form-group\">
                                                            ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 128, $this->source); })()), "plainPassword", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control pe-5 password-input", "onpaste" => "return false", "placeholder" => "Enter password"]]);
        // line 135
        yield "
                                                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "plainPassword", [], "any", false, false, false, 136), 'errors');
        yield "
                                                        </div>
                                                        ";
        // line 143
        yield "                                                        <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                                        <div class=\"invalid-feedback\">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mb-4\">
                                                    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 150, $this->source); })()), "agreeTerms", [], "any", false, false, false, 150), 'label');
        yield "
                                                    <span class=\"mx-2\">
                                                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 152, $this->source); })()), "agreeTerms", [], "any", false, false, false, 152), 'widget');
        yield "
                                                    </span>
                                                </div>

                                                <div class=\"mt-4 row\">
                                                    <button class=\"btn btn-outline-success col-5\" type=\"submit\" name=\"roles\" value=\"ROLE_COMPANY\">Récruteur</button>
                                                    <button class=\"btn btn-success col-5 offset-2\" type=\"submit\" name=\"roles\" value=\"ROLE_DEV\">Développeur</button>
                                                </div>
                                                    ";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 160, $this->source); })()), 'form_end');
        yield "
                                          
                                        </div>

                                        <div class=\"mt-5 text-center\">
                                            <p class=\"mb-0\">Already have an account ? <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        yield "\" class=\"fw-semibold text-primary text-decoration-underline\"> Connexion</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        return array (  242 => 165,  234 => 160,  223 => 152,  218 => 150,  209 => 143,  204 => 136,  201 => 135,  199 => 128,  191 => 122,  181 => 110,  178 => 109,  176 => 102,  166 => 95,  161 => 93,  155 => 89,  146 => 87,  142 => 86,  85 => 31,  75 => 30,  58 => 28,  41 => 26,);
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

{% block title %}Inscription{% endblock %}

{% block body %}
     <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"bg-overlay\"></div>
        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden pt-lg-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card overflow-hidden m-0 card-bg-fill galaxy-border-none\">
                            <div class=\"row justify-content-center g-0\">
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

                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4\">
                                        <div>
                                            <h5 class=\"text-primary\">Register Account</h5>
                                            <p class=\"text-muted\">Get your Free Velzon account now.</p>
                                        </div>
                                        {% for flash_error in app.flashes('verify_email_error') %}
                                            <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                                        {% endfor %}

                                        <div class=\"mt-4\">
                                            
                                            
                                                {{ form_errors(registrationForm) }}

                                                    {{ form_start(registrationForm, { 'attr': { 'class': 'needs-validation', 'novalidate': 'novalidate' } }) }}

                                                      
                                                <div class=\"mb-3\">
                                                    <label for=\"useremail\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                                   <div class=\"form-group\">
                                                        
                                                        {{ form_widget(registrationForm.email, {
                                                            attr: {
                                                                class: 'form-control',
                                                                id: 'useremail',
                                                                placeholder: 'Enter email address',
                                                                required: true
                                                            }
                                                        }) }}
                                                        {{ form_errors(registrationForm.email) }}
                                                        <div class=\"invalid-feedback\">
                                                            Please enter a valid email
                                                        </div>
                                                    </div>

                                                   
                                                   {#  <input type=\"email\" class=\"form-control\" id=\"useremail\" placeholder=\"Enter email address\" required>
                                                    {{ form_row(registrationForm.email) }}
                                                    <div class=\"invalid-feedback\">
                                                        Please enter email
                                                    </div> #}
                                                </div>

                                                <div class=\"mb-3\">
                                                    <label for=\"useremail\" class=\"form-label\">Password <span class=\"text-danger\">*</span></label>
                                                    <div class=\"position-relative auth-pass-inputgroup\">
                                                        <div class=\"form-group\">
                                                            {{ form_widget(registrationForm.plainPassword, {
                                                                attr: {
                                                                    class: 'form-control pe-5 password-input',
                                                                    onpaste: 'return false',
                                                                    placeholder: 'Enter password',
                                                                   
                                                                }
                                                            }) }}
                                                            {{ form_errors(registrationForm.plainPassword) }}
                                                        </div>
                                                        {# <input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Enter password\" id=\"password-input\" aria-describedby=\"passwordInput\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
                                                         pattern: '(?=.*\\\\d)(?=.*[a-z])(?=.*[A-Z]).{6,}'
                                                        {{ form_row(registrationForm.plainPassword, {
                                                            label: 'Password'
                                                        }) }} #}
                                                        <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                                        <div class=\"invalid-feedback\">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"mb-4\">
                                                    {{ form_label(registrationForm.agreeTerms) }}
                                                    <span class=\"mx-2\">
                                                    {{ form_widget(registrationForm.agreeTerms) }}
                                                    </span>
                                                </div>

                                                <div class=\"mt-4 row\">
                                                    <button class=\"btn btn-outline-success col-5\" type=\"submit\" name=\"roles\" value=\"ROLE_COMPANY\">Récruteur</button>
                                                    <button class=\"btn btn-success col-5 offset-2\" type=\"submit\" name=\"roles\" value=\"ROLE_DEV\">Développeur</button>
                                                </div>
                                                    {{ form_end(registrationForm) }}
                                          
                                        </div>

                                        <div class=\"mt-5 text-center\">
                                            <p class=\"mb-0\">Already have an account ? <a href=\"{{ url('app_login') }}\" class=\"fw-semibold text-primary text-decoration-underline\"> Connexion</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
{% endblock %}", "registration/register.html.twig", "C:\\wamp64\\www\\projet_miage\\adopteUnDev\\templates\\registration\\register.html.twig");
    }
}
