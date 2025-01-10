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

    // line 2
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

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <!-- auth-page wrapper -->
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

                                        <div class=\"mt-4\">
                                            <form class=\"needs-validation\" novalidate action=\"index.html\">

                                                <div class=\"mb-3\">
                                                    <label for=\"useremail\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                                    <input type=\"email\" class=\"form-control\" id=\"useremail\" placeholder=\"Enter email address\" required>
                                                    <div class=\"invalid-feedback\">
                                                        Please enter email
                                                    </div>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"username\" class=\"form-label\">Username <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Enter username\" required>
                                                    <div class=\"invalid-feedback\">
                                                        Please enter username
                                                    </div>
                                                </div>

                                                <div class=\"mb-3\">
                                                    <label class=\"form-label\" for=\"password-input\">Password</label>
                                                    <div class=\"position-relative auth-pass-inputgroup\">
                                                        <input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Enter password\" id=\"password-input\" aria-describedby=\"passwordInput\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
                                                        <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                                        <div class=\"invalid-feedback\">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"mb-4\">
                                                    <p class=\"mb-0 fs-12 text-muted fst-italic\">By registering you agree to the Velzon <a href=\"#\" class=\"text-primary text-decoration-underline fst-normal fw-medium\">Terms of Use</a></p>
                                                </div>

                                                <div id=\"password-contain\" class=\"p-3 bg-light mb-2 rounded\">
                                                    <h5 class=\"fs-13\">Password must contain:</h5>
                                                    <p id=\"pass-length\" class=\"invalid fs-12 mb-2\">Minimum <b>8 characters</b></p>
                                                    <p id=\"pass-lower\" class=\"invalid fs-12 mb-2\">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id=\"pass-upper\" class=\"invalid fs-12 mb-2\">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id=\"pass-number\" class=\"invalid fs-12 mb-0\">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class=\"mt-4 row\">
                                                    <button class=\"btn btn-outline-success col-5\" type=\"submit\">Récruteur</button>
                                                    <button class=\"btn btn-success col-5 offset-2\" type=\"submit\">Développeur</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class=\"mt-5 text-center\">
                                            <p class=\"mb-0\">Already have an account ? <a href=\"";
        // line 110
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
        return array (  192 => 110,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
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

                                        <div class=\"mt-4\">
                                            <form class=\"needs-validation\" novalidate action=\"index.html\">

                                                <div class=\"mb-3\">
                                                    <label for=\"useremail\" class=\"form-label\">Email <span class=\"text-danger\">*</span></label>
                                                    <input type=\"email\" class=\"form-control\" id=\"useremail\" placeholder=\"Enter email address\" required>
                                                    <div class=\"invalid-feedback\">
                                                        Please enter email
                                                    </div>
                                                </div>
                                                <div class=\"mb-3\">
                                                    <label for=\"username\" class=\"form-label\">Username <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Enter username\" required>
                                                    <div class=\"invalid-feedback\">
                                                        Please enter username
                                                    </div>
                                                </div>

                                                <div class=\"mb-3\">
                                                    <label class=\"form-label\" for=\"password-input\">Password</label>
                                                    <div class=\"position-relative auth-pass-inputgroup\">
                                                        <input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Enter password\" id=\"password-input\" aria-describedby=\"passwordInput\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
                                                        <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                                        <div class=\"invalid-feedback\">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"mb-4\">
                                                    <p class=\"mb-0 fs-12 text-muted fst-italic\">By registering you agree to the Velzon <a href=\"#\" class=\"text-primary text-decoration-underline fst-normal fw-medium\">Terms of Use</a></p>
                                                </div>

                                                <div id=\"password-contain\" class=\"p-3 bg-light mb-2 rounded\">
                                                    <h5 class=\"fs-13\">Password must contain:</h5>
                                                    <p id=\"pass-length\" class=\"invalid fs-12 mb-2\">Minimum <b>8 characters</b></p>
                                                    <p id=\"pass-lower\" class=\"invalid fs-12 mb-2\">At <b>lowercase</b> letter (a-z)</p>
                                                    <p id=\"pass-upper\" class=\"invalid fs-12 mb-2\">At least <b>uppercase</b> letter (A-Z)</p>
                                                    <p id=\"pass-number\" class=\"invalid fs-12 mb-0\">A least <b>number</b> (0-9)</p>
                                                </div>

                                                <div class=\"mt-4 row\">
                                                    <button class=\"btn btn-outline-success col-5\" type=\"submit\">Récruteur</button>
                                                    <button class=\"btn btn-success col-5 offset-2\" type=\"submit\">Développeur</button>
                                                </div>
                                            </form>
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
{% endblock %}", "authentification/register.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev1\\templates\\authentification\\register.html.twig");
    }
}
