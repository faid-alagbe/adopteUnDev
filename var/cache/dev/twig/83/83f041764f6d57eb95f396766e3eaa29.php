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

/* landing/index.html.twig */
class __TwigTemplate_a2ff992db6314204c094ca7a5a1432a7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing/index.html.twig", 1);
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
\t<div class=\"layout-wrapper landing\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-landing fixed-top job-navbar\" id=\"navbar\">
\t\t\t<div class=\"container-fluid custom-container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t<img src=\"assets/images/logo-dark.png\" class=\"card-logo card-logo-dark\" alt=\"logo dark\" height=\"17\">
\t\t\t\t\t<img src=\"assets/images/logo-light.png\" class=\"card-logo card-logo-light\" alt=\"logo light\" height=\"17\">
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler py-0 fs-20 text-body\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mx-auto mt-2 mt-lg-0\" id=\"navbar-example\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#hero\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#process\">Process</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#categories\">Categories</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#findJob\">Find Jobs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#candidates\">Candidates</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#blog\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        yield "\" class=\"btn btn-soft-primary\">
\t\t\t\t\t\t\t<i class=\"ri-user-3-line align-bottom me-1\"></i>
\t\t\t\t\t\t\tConnexion & Inscription</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</nav>
\t\t<!-- end navbar -->

\t\t<!-- start hero section -->
\t\t<section class=\"section job-hero-section bg-light pb-0\" id=\"hero\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h1 class=\"display-6 fw-semibold text-capitalize mb-3 lh-base\">Trouvez votre prochain emploi et construisez votre rêve ici.</h1>
\t\t\t\t\t\t\t<p class=\"lead text-muted lh-base mb-4\">Trouvez votre prochain emploi et construisez votre rêve ici.</p>
\t\t\t\t\t\t\t<form action=\"#\" class=\"job-panel-filter\">
\t\t\t\t\t\t\t\t<div class=\"row g-md-0 g-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" id=\"job-title\" class=\"form-control filter-input-box\" placeholder=\"Job, non=m d'entreprise...\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" data-choices>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Selectionnez le tye de job</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Full Time\">Temps plein</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Part Time\">Temps partiel</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Freelance\">Freelance</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Internship\">Stage</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"h-100\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary submit-btn w-100 h-100\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-search-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTrouvez un  Job</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<ul class=\"treding-keywords list-inline mb-0 mt-3 fs-13\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item text-danger fw-semibold\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-tag-multiple-outline align-middle\"></i>
\t\t\t\t\t\t\t\t\tMots clés:</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Design,</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Development,</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Manager,</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Senior</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end col-->
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"position-relative home-img text-center mt-5 mt-lg-0\">
\t\t\t\t\t\t\t<div class=\"card p-3 rounded shadow-lg inquiry-box\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle text-warning rounded fs-18\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-mail-send-line\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-15 lh-base mb-0\">Demande de travail de la part de adopteDev</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card p-3 rounded shadow-lg application-box\">
\t\t\t\t\t\t\t\t<h5 class=\"fs-15 lh-base mb-3\">Applications</h5>
\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Ellen Smith\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\tS
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Ellen Smith\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-10.jpg\" alt=\"\" class=\"rounded-circle img-fluid\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\tZ
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-9.jpg\" alt=\"\" class=\"rounded-circle img-fluid\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"More Appliances\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title fs-13 rounded-circle bg-light border-dashed border text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t2k+
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img src=\"assets/images/job-profile2.png\" alt=\"\" class=\"user-img\">

\t\t\t\t\t\t\t<div class=\"circle-effect\">
\t\t\t\t\t\t\t\t<div class=\"circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"circle2\"></div>
\t\t\t\t\t\t\t\t<div class=\"circle3\"></div>
\t\t\t\t\t\t\t\t<div class=\"circle4\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end hero section -->

\t\t<section class=\"section\" id=\"process\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold lh-base\">Comment
\t\t\t\t\t\t\t\t<span class=\"text-primary\">marchek</span>
\t\t\t\t\t\t\t\tle matching entre développeur et entreprise</h1>
\t\t\t\t\t\t\t<p class=\"text-muted\">Une personne créative a la capacité d'inventer et de développer des idées originales, notamment dans les arts. Comme beaucoup de personnes créatives, il n'était jamais satisfait.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!--end row-->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<h1 class=\"fw-bold display-5 ff-secondary mb-4 text-success position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<span>1</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<h6 class=\"fs-17 mb-2\">Inscrivez vous</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 fs-15\">D'abord, vous avez besoin de créer un compte.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<h1 class=\"fw-bold display-5 ff-secondary mb-4 text-success position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<h6 class=\"fs-17 mb-2\">Créer un cv</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 fs-15\">Creer un profil pour votre compagnie.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<h1 class=\"fw-bold display-5 ff-secondary mb-4 text-success position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t\t\t\t</h1>

\t\t\t\t\t\t\t\t<h6 class=\"fs-17 mb-2\">Trouvez un travail</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 fs-15\">Cherchez le travail de vos reves.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<h1 class=\"fw-bold display-5 ff-secondary mb-4 text-success position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<span>4</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<h6 class=\"fs-17 mb-2\">Psotulez pour le travail</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 fs-15\">Postuler auprès de l'entreprise et attendre la date de l'interview.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end container-->
\t\t</section>

\t\t<!-- start features -->
\t\t<section class=\"section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center justify-content-lg-between justify-content-center gy-4\">
\t\t\t\t\t<div class=\"col-lg-5 col-sm-7\">
\t\t\t\t\t\t<div class=\"about-img-section mb-5 mb-lg-0 text-center\">
\t\t\t\t\t\t\t<div class=\"card rounded shadow-lg inquiry-box d-none d-lg-block\">
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-secondary-subtle text-secondary rounded-circle fs-18\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-briefcase-2-line\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-15 lh-base mb-0\">Recherche terminée
\t\t\t\t\t\t\t\t\t\t<span class=\"text-secondary fw-semibold\">1,00,000+</span>
\t\t\t\t\t\t\t\t\t\tJobs</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card feedback-box\">
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex shadow-lg\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-10.jpg\" alt=\"\" class=\"avatar-sm rounded-circle\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 lh-base mb-0\">Tonya Noble</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-11 mb-1\">UI/UX Designer</p>

\t\t\t\t\t\t\t\t\t\t<div class=\"text-warning\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-line\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img src=\"assets/images/about.jpg\" alt=\"\" class=\"img-fluid mx-auto rounded-3\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 lh-base\">Find Your
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Dream Job</span>
\t\t\t\t\t\t\t\tin One Place</h1>
\t\t\t\t\t\t\t<p class=\"ff-secondary fs-16 mb-2\">The first step in finding your
\t\t\t\t\t\t\t\t<b>dream job
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\tis deciding where to look for first-hand insight. Contact professionals who are already working in industries or positions that interest you.</p>
\t\t\t\t\t\t\t<p class=\"ff-secondary fs-16\">Schedule informational interviews and phone calls or ask for the opportunity to shadow them on the job.</p>

\t\t\t\t\t\t\t<div class=\"vstack gap-2 mb-4 pb-1\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs icon-effect\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle h2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-check-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Dynamic Content</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs icon-effect\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle h2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-check-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Setup plugin's information.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs icon-effect\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle h2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-check-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Themes customization information</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary\">Find Your Jobs
\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom ms-1\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end features -->

\t\t<!-- start services -->
\t\t<section class=\"section bg-light\" id=\"categories\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">High demand jobs
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Categories</span>
\t\t\t\t\t\t\t\tfeatured</h1>
\t\t\t\t\t\t\t<p class=\"text-muted\">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->

\t\t\t\t<div class=\"row justify-content-center\">
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
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">IT & Software</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">1543 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-airplay-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Construction / Facilities</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">3241 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm mb-4 mx-auto position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bank-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Government</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">876 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-focus-2-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Marketing & Advertising</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">465 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pencil-ruler-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Education & training</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">105 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-line-chart-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Digital Marketing</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">377 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-briefcase-2-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Catering & Tourism</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">85 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end services -->

\t\t<!-- start cta -->
\t\t<section class=\"py-5 bg-primary position-relative\">
\t\t\t<div class=\"bg-overlay bg-overlay-pattern opacity-50\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center gy-4\">
\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"text-white mb-2\">Ready to Started?</h4>
\t\t\t\t\t\t\t<p class=\"text-white-50 mb-0\">Create new account and refer your friend</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t\t<div class=\"col-sm-auto\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn bg-gradient btn-danger\">Create Free Account</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end cta -->

\t\t<section class=\"section\" id=\"findJob\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">Find Your
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Career</span>
\t\t\t\t\t\t\t\tYou Deserve it</h1>
\t\t\t\t\t\t\t<p class=\"text-muted\">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-3.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>UI/UX designer</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$23k - 35k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-primary-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-2.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Product Sales Specialist</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDigitech Galaxy
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSpain
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$10k - 15k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Sales</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary-subtle text-secondary\">Product</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Business</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-danger-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-4.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Marketing Director</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tMeta4Systems
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSweden
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$20k - 25k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning-subtle text-warning\">Marketing</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Bussiness</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-9.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Product Designer</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$40k+
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-1.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Project Manager</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSyntyce Solutions
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tGermany
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$18k - 26k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">HR</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Manager</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-7.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Business Associate</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$23k - 35k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-8.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Recruiting Coordinator</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tZoetic Fashion
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNamibia
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$12k - 15k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Full Time</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Remote</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Fashion</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-5.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Customs officer</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$41k - 45k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-ghost-primary\">View More Jobs
\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- start find jobs -->
\t\t<section class=\"section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center gy-4\">
\t\t\t\t\t<div class=\"col-lg-6 order-2 order-lg-1\">
\t\t\t\t\t\t<div class=\"text-muted mt-5 mt-lg-0\">
\t\t\t\t\t\t\t<h5 class=\"fs-12 text-uppercase text-success\">Hot Featured Company</h5>
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">Get
\t\t\t\t\t\t\t\t<span class=\"text-primary\">10,000+</span>
\t\t\t\t\t\t\t\tFeatured Companies</h1>
\t\t\t\t\t\t\t<p class=\"ff-secondary mb-2\">The demand for content writing services is growing. This is because content is required in almost every industry.
\t\t\t\t\t\t\t\t<b>Many companies have discovered how effective content marketing is.</b>
\t\t\t\t\t\t\t\tThis is a major reason for this increase in demand.</p>
\t\t\t\t\t\t\t<p class=\"mb-4 ff-secondary\">A Content Writer is a professional who writes informative and engaging articles to help brands showcase their products.</p>

\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-primary\">View More Companies
\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-middle ms-1\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t\t<div class=\"col-lg-4 col-sm-7 col-10 ms-lg-auto mx-auto order-1 order-lg-2\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-soft-primary float-end\" data-bs-toggle=\"button\" aria-pressed=\"true\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-cards-heart fs-16\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-secondary-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-1.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h5>New Web designer</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Themesbrand</p>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-4 mb-3\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tEscondido,California
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-time-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t3 min ago
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent.</p>

\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Full Time</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Freelance</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">Urgent</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"mt-4 hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-soft-primary w-100\">Apply Job</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-soft-success w-100\">Overview</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card shadow-lg bg-info mb-0 features-company-widgets rounded-3\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"text-white fs-16 mb-4\">10,000+ Featured Companies</h5>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-light bg-opacity-25 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-5.png\" alt=\"\" height=\"15\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-light bg-opacity-25 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-2.png\" alt=\"\" height=\"15\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-light bg-opacity-25 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-8.png\" alt=\"\" height=\"15\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-light bg-opacity-25 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-7.png\" alt=\"\" height=\"15\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"More Companies\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title fs-11 rounded-circle bg-light bg-opacity-25 text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t1k+
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end find jobs -->

\t\t<!-- start candidates -->
\t\t<section class=\"section bg-light\" id=\"candidates\">
\t\t\t<div class=\"bg-overlay bg-overlay-pattern\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">Hire Experts
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Team</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">Hiring experts costs more per hour than hiring entry- or mid-level freelancers, but they can usually get the work done faster—and better.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"swiper candidate-swiper\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Nancy Martino</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Creative Designer</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Glen Matney</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Marketing Director</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-10.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Alexis Clarke</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Product Manager</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-8.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\"/>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">James Price</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Product Designer</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\"/>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Michael Morris</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Full Stack Developer</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end candidates -->

\t\t<!-- start blog -->
\t\t<section class=\"section\" id=\"blog\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">Our Latest
\t\t\t\t\t\t\t\t<span class=\"text-primary\">News</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with faucibus sapien odio measurable results.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end row -->

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid rounded\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul class=\"list-inline fs-14 text-muted\">
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-calendar-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t30 Oct, 2021
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-message-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t364 Comment
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<h5>Design your apps in your own way ?</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text-muted fs-14\">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"link-success\">Learn More
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid rounded\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul class=\"list-inline fs-14 text-muted\">
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-calendar-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t02 Oct, 2021
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-message-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t245 Comment
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<h5>Smartest Applications for Business ?</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text-muted fs-14\">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception.</p>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"link-success\">Learn More
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid rounded\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul class=\"list-inline fs-14 text-muted\">
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-calendar-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t23 Sept, 2021
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-message-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t354 Comment
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<h5>How apps is changing the IT world</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text-muted fs-14\">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"link-success\">Learn More
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end blog -->

\t\t<!-- start cta -->
\t\t<section class=\"py-5 bg-primary position-relative\">
\t\t\t<div class=\"bg-overlay bg-overlay-pattern opacity-50\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center gy-4\">
\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"text-white fw-semibold\">Get New Jobs Notification!</h4>
\t\t\t\t\t\t\t<p class=\"text-white text-opacity-75 mb-0\">Subscribe & get all related jobs notification.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t\t<div class=\"col-sm-auto\">
\t\t\t\t\t\t<button class=\"btn btn-danger\" type=\"button\">Subscribe Now
\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end cta -->

\t\t<!-- Start footer -->
\t\t<footer class=\"custom-footer bg-dark py-5 position-relative\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 mt-4\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-light.png\" alt=\"logo light\" height=\"17\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-4 fs-13\">
\t\t\t\t\t\t\t\t<p>Premium Multipurpose Admin & Dashboard Template</p>
\t\t\t\t\t\t\t\t<p>You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.</p>
\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 footer-social-link\">
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-facebook-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-github-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-linkedin-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-google-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-dribbble-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-7 ms-lg-auto\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 mt-4\">
\t\t\t\t\t\t\t\t<h5 class=\"text-white mb-0\">Entreprise</h5>
\t\t\t\t\t\t\t\t<div class=\"text-muted mt-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled ff-secondary footer-list\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-profile.html\">A propos de nous</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-gallery.html\">Gallerie</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-team.html\">Equipe</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-pricing.html\">Prix</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-timeline.html\">Emploi du temps</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 mt-4\">
\t\t\t\t\t\t\t\t<h5 class=\"text-white mb-0\">For Jobs</h5>
\t\t\t\t\t\t\t\t<div class=\"text-muted mt-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled ff-secondary footer-list\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-job-lists.html\">Job List</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-job-application.html\">application</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-job-new.html\">Nouveau travail</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-job-companies-lists.html\">Liste des entreprisest</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 mt-4\">
\t\t\t\t\t\t\t\t<h5 class=\"text-white mb-0\">Support</h5>
\t\t\t\t\t\t\t\t<div class=\"text-muted mt-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled ff-secondary footer-list\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-faqs.html\">FAQ</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-faqs.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row text-center text-sm-start align-items-center mt-5\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"copy-rights mb-0\">
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t© adopteDev - Themesbrand
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"text-sm-end mt-3 mt-sm-0\">
\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 footer-list gap-4 fs-13\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"pages-privacy-policy.html\">Privacy Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"pages-term-conditions.html\">Terms & Conditions</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"pages-privacy-policy.html\">Securité</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- end footer -->

\t\t<!--start back-to-top-->
\t\t<button onclick=\"topFunction()\" class=\"btn btn-info btn-icon landing-back-top\" id=\"back-to-top\">
\t\t\t<i class=\"ri-arrow-up-line\"></i>
\t\t</button>
\t\t<!--end back-to-top-->

\t</div>
\t<!-- end layout wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "landing/index.html.twig";
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
        return array (  123 => 42,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue
{% endblock %}

{% block body %}
\t<!-- Begin page -->
\t<div class=\"layout-wrapper landing\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-landing fixed-top job-navbar\" id=\"navbar\">
\t\t\t<div class=\"container-fluid custom-container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t<img src=\"assets/images/logo-dark.png\" class=\"card-logo card-logo-dark\" alt=\"logo dark\" height=\"17\">
\t\t\t\t\t<img src=\"assets/images/logo-light.png\" class=\"card-logo card-logo-light\" alt=\"logo light\" height=\"17\">
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler py-0 fs-20 text-body\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mx-auto mt-2 mt-lg-0\" id=\"navbar-example\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#hero\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#process\">Process</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#categories\">Categories</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#findJob\">Find Jobs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#candidates\">Candidates</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#blog\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<a href=\"{{ url('app_login') }}\" class=\"btn btn-soft-primary\">
\t\t\t\t\t\t\t<i class=\"ri-user-3-line align-bottom me-1\"></i>
\t\t\t\t\t\t\tConnexion & Inscription</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</nav>
\t\t<!-- end navbar -->

\t\t<!-- start hero section -->
\t\t<section class=\"section job-hero-section bg-light pb-0\" id=\"hero\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h1 class=\"display-6 fw-semibold text-capitalize mb-3 lh-base\">Trouvez votre prochain emploi et construisez votre rêve ici.</h1>
\t\t\t\t\t\t\t<p class=\"lead text-muted lh-base mb-4\">Trouvez votre prochain emploi et construisez votre rêve ici.</p>
\t\t\t\t\t\t\t<form action=\"#\" class=\"job-panel-filter\">
\t\t\t\t\t\t\t\t<div class=\"row g-md-0 g-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" id=\"job-title\" class=\"form-control filter-input-box\" placeholder=\"Job, non=m d'entreprise...\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" data-choices>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Selectionnez le tye de job</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Full Time\">Temps plein</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Part Time\">Temps partiel</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Freelance\">Freelance</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Internship\">Stage</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"h-100\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary submit-btn w-100 h-100\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-search-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTrouvez un  Job</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--end col-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--end row-->
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<ul class=\"treding-keywords list-inline mb-0 mt-3 fs-13\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item text-danger fw-semibold\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-tag-multiple-outline align-middle\"></i>
\t\t\t\t\t\t\t\t\tMots clés:</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Design,</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Development,</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Manager,</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Senior</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--end col-->
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"position-relative home-img text-center mt-5 mt-lg-0\">
\t\t\t\t\t\t\t<div class=\"card p-3 rounded shadow-lg inquiry-box\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle text-warning rounded fs-18\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-mail-send-line\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-15 lh-base mb-0\">Demande de travail de la part de adopteDev</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card p-3 rounded shadow-lg application-box\">
\t\t\t\t\t\t\t\t<h5 class=\"fs-15 lh-base mb-3\">Applications</h5>
\t\t\t\t\t\t\t\t<div class=\"avatar-group\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle img-fluid\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Ellen Smith\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\tS
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Ellen Smith\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-10.jpg\" alt=\"\" class=\"rounded-circle img-fluid\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\tZ
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-9.jpg\" alt=\"\" class=\"rounded-circle img-fluid\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-group-item\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"More Appliances\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title fs-13 rounded-circle bg-light border-dashed border text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t2k+
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img src=\"assets/images/job-profile2.png\" alt=\"\" class=\"user-img\">

\t\t\t\t\t\t\t<div class=\"circle-effect\">
\t\t\t\t\t\t\t\t<div class=\"circle\"></div>
\t\t\t\t\t\t\t\t<div class=\"circle2\"></div>
\t\t\t\t\t\t\t\t<div class=\"circle3\"></div>
\t\t\t\t\t\t\t\t<div class=\"circle4\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end hero section -->

\t\t<section class=\"section\" id=\"process\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold lh-base\">Comment
\t\t\t\t\t\t\t\t<span class=\"text-primary\">marchek</span>
\t\t\t\t\t\t\t\tle matching entre développeur et entreprise</h1>
\t\t\t\t\t\t\t<p class=\"text-muted\">Une personne créative a la capacité d'inventer et de développer des idées originales, notamment dans les arts. Comme beaucoup de personnes créatives, il n'était jamais satisfait.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!--end row-->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<h1 class=\"fw-bold display-5 ff-secondary mb-4 text-success position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<span>1</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<h6 class=\"fs-17 mb-2\">Inscrivez vous</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 fs-15\">D'abord, vous avez besoin de créer un compte.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<h1 class=\"fw-bold display-5 ff-secondary mb-4 text-success position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<span>2</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<h6 class=\"fs-17 mb-2\">Créer un cv</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 fs-15\">Creer un profil pour votre compagnie.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<h1 class=\"fw-bold display-5 ff-secondary mb-4 text-success position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t\t\t\t</h1>

\t\t\t\t\t\t\t\t<h6 class=\"fs-17 mb-2\">Trouvez un travail</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 fs-15\">Cherchez le travail de vos reves.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t<h1 class=\"fw-bold display-5 ff-secondary mb-4 text-success position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<span>4</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<h6 class=\"fs-17 mb-2\">Psotulez pour le travail</h6>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 fs-15\">Postuler auprès de l'entreprise et attendre la date de l'interview.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end container-->
\t\t</section>

\t\t<!-- start features -->
\t\t<section class=\"section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center justify-content-lg-between justify-content-center gy-4\">
\t\t\t\t\t<div class=\"col-lg-5 col-sm-7\">
\t\t\t\t\t\t<div class=\"about-img-section mb-5 mb-lg-0 text-center\">
\t\t\t\t\t\t\t<div class=\"card rounded shadow-lg inquiry-box d-none d-lg-block\">
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-secondary-subtle text-secondary rounded-circle fs-18\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-briefcase-2-line\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-15 lh-base mb-0\">Recherche terminée
\t\t\t\t\t\t\t\t\t\t<span class=\"text-secondary fw-semibold\">1,00,000+</span>
\t\t\t\t\t\t\t\t\t\tJobs</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card feedback-box\">
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex shadow-lg\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-10.jpg\" alt=\"\" class=\"avatar-sm rounded-circle\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-14 lh-base mb-0\">Tonya Noble</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-11 mb-1\">UI/UX Designer</p>

\t\t\t\t\t\t\t\t\t\t<div class=\"text-warning\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-star-s-line\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img src=\"assets/images/about.jpg\" alt=\"\" class=\"img-fluid mx-auto rounded-3\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"text-muted\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 lh-base\">Find Your
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Dream Job</span>
\t\t\t\t\t\t\t\tin One Place</h1>
\t\t\t\t\t\t\t<p class=\"ff-secondary fs-16 mb-2\">The first step in finding your
\t\t\t\t\t\t\t\t<b>dream job
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\tis deciding where to look for first-hand insight. Contact professionals who are already working in industries or positions that interest you.</p>
\t\t\t\t\t\t\t<p class=\"ff-secondary fs-16\">Schedule informational interviews and phone calls or ask for the opportunity to shadow them on the job.</p>

\t\t\t\t\t\t\t<div class=\"vstack gap-2 mb-4 pb-1\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs icon-effect\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle h2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-check-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Dynamic Content</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs icon-effect\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle h2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-check-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Setup plugin's information.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs icon-effect\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle h2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-check-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Themes customization information</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary\">Find Your Jobs
\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom ms-1\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end features -->

\t\t<!-- start services -->
\t\t<section class=\"section bg-light\" id=\"categories\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">High demand jobs
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Categories</span>
\t\t\t\t\t\t\t\tfeatured</h1>
\t\t\t\t\t\t\t<p class=\"text-muted\">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->

\t\t\t\t<div class=\"row justify-content-center\">
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
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">IT & Software</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">1543 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-airplay-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Construction / Facilities</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">3241 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm mb-4 mx-auto position-relative\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bank-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Government</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">876 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-focus-2-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Marketing & Advertising</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">465 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pencil-ruler-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Education & training</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">105 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-line-chart-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Digital Marketing</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">377 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"card shadow-none text-center py-3\">
\t\t\t\t\t\t\t<div class=\"card-body py-4\">
\t\t\t\t\t\t\t\t<div class=\"avatar-sm position-relative mb-4 mx-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"job-icon-effect\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-transparent text-success rounded-circle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-briefcase-2-line fs-1\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"stretched-link\">
\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 pt-1\">Catering & Tourism</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">85 Jobs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end services -->

\t\t<!-- start cta -->
\t\t<section class=\"py-5 bg-primary position-relative\">
\t\t\t<div class=\"bg-overlay bg-overlay-pattern opacity-50\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center gy-4\">
\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"text-white mb-2\">Ready to Started?</h4>
\t\t\t\t\t\t\t<p class=\"text-white-50 mb-0\">Create new account and refer your friend</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t\t<div class=\"col-sm-auto\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn bg-gradient btn-danger\">Create Free Account</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end cta -->

\t\t<section class=\"section\" id=\"findJob\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">Find Your
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Career</span>
\t\t\t\t\t\t\t\tYou Deserve it</h1>
\t\t\t\t\t\t\t<p class=\"text-muted\">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-3.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>UI/UX designer</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$23k - 35k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-primary-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-2.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Product Sales Specialist</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDigitech Galaxy
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSpain
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$10k - 15k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Sales</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary-subtle text-secondary\">Product</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Business</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-danger-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-4.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Marketing Director</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tMeta4Systems
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSweden
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$20k - 25k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning-subtle text-warning\">Marketing</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Bussiness</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-9.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Product Designer</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tThemesbrand
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$40k+
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-1.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Project Manager</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSyntyce Solutions
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tGermany
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$18k - 26k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">HR</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Manager</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-success-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-7.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Business Associate</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$23k - 35k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-info-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-8.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Recruiting Coordinator</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tZoetic Fashion
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNamibia
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$12k - 15k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Full Time</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-info-subtle text-info\">Remote</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Fashion</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle active\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-warning-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-5.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"ms-3 flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Customs officer</h5>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline text-muted mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-building-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNesta Technologies
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUSA
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\$41k - 45k
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Design</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">UI/UX</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Adobe XD</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-ghost-primary btn-icon custom-toggle\" data-bs-toggle=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-on\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-off\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-bookmark-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-ghost-primary\">View More Jobs
\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- start find jobs -->
\t\t<section class=\"section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center gy-4\">
\t\t\t\t\t<div class=\"col-lg-6 order-2 order-lg-1\">
\t\t\t\t\t\t<div class=\"text-muted mt-5 mt-lg-0\">
\t\t\t\t\t\t\t<h5 class=\"fs-12 text-uppercase text-success\">Hot Featured Company</h5>
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">Get
\t\t\t\t\t\t\t\t<span class=\"text-primary\">10,000+</span>
\t\t\t\t\t\t\t\tFeatured Companies</h1>
\t\t\t\t\t\t\t<p class=\"ff-secondary mb-2\">The demand for content writing services is growing. This is because content is required in almost every industry.
\t\t\t\t\t\t\t\t<b>Many companies have discovered how effective content marketing is.</b>
\t\t\t\t\t\t\t\tThis is a major reason for this increase in demand.</p>
\t\t\t\t\t\t\t<p class=\"mb-4 ff-secondary\">A Content Writer is a professional who writes informative and engaging articles to help brands showcase their products.</p>

\t\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"btn btn-primary\">View More Companies
\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-middle ms-1\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t\t<div class=\"col-lg-4 col-sm-7 col-10 ms-lg-auto mx-auto order-1 order-lg-2\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-icon btn-soft-primary float-end\" data-bs-toggle=\"button\" aria-pressed=\"true\">
\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-cards-heart fs-16\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<div class=\"avatar-sm mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-secondary-subtle rounded\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-1.png\" alt=\"\" class=\"avatar-xxs\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t<h5>New Web designer</h5>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Themesbrand</p>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-4 mb-3\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\tEscondido,California
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-time-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t3 min ago
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent.</p>

\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success-subtle text-success\">Full Time</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary-subtle text-primary\">Freelance</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger-subtle text-danger\">Urgent</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"mt-4 hstack gap-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-soft-primary w-100\">Apply Job</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-soft-success w-100\">Overview</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card shadow-lg bg-info mb-0 features-company-widgets rounded-3\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"text-white fs-16 mb-4\">10,000+ Featured Companies</h5>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-light bg-opacity-25 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-5.png\" alt=\"\" height=\"15\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-light bg-opacity-25 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-2.png\" alt=\"\" height=\"15\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-light bg-opacity-25 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-8.png\" alt=\"\" height=\"15\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"Brent Gonzalez\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title bg-light bg-opacity-25 rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/companies/img-7.png\" alt=\"\" height=\"15\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover\" data-bs-placement=\"top\" title=\"More Companies\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title fs-11 rounded-circle bg-light bg-opacity-25 text-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t1k+
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end find jobs -->

\t\t<!-- start candidates -->
\t\t<section class=\"section bg-light\" id=\"candidates\">
\t\t\t<div class=\"bg-overlay bg-overlay-pattern\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">Hire Experts
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Team</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">Hiring experts costs more per hour than hiring entry- or mid-level freelancers, but they can usually get the work done faster—and better.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"swiper candidate-swiper\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Nancy Martino</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Creative Designer</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Glen Matney</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Marketing Director</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-10.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Alexis Clarke</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Product Manager</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-8.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\"/>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">James Price</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Product Designer</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\"/>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Michael Morris</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Full Stack Developer</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEscondido, California
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end candidates -->

\t\t<!-- start blog -->
\t\t<section class=\"section\" id=\"blog\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">Our Latest
\t\t\t\t\t\t\t\t<span class=\"text-primary\">News</span>
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with faucibus sapien odio measurable results.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end row -->

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid rounded\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul class=\"list-inline fs-14 text-muted\">
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-calendar-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t30 Oct, 2021
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-message-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t364 Comment
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<h5>Design your apps in your own way ?</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text-muted fs-14\">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"link-success\">Learn More
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid rounded\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul class=\"list-inline fs-14 text-muted\">
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-calendar-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t02 Oct, 2021
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-message-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t245 Comment
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<h5>Smartest Applications for Business ?</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text-muted fs-14\">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception.</p>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"link-success\">Learn More
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid rounded\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul class=\"list-inline fs-14 text-muted\">
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-calendar-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t23 Sept, 2021
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-message-2-line align-bottom me-1\"></i>
\t\t\t\t\t\t\t\t\t\t354 Comment
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t<h5>How apps is changing the IT world</h5>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text-muted fs-14\">Intrinsically incubate intuitive opportunities and real-time potentialities Appropriately communicate one-to-one technology.</p>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"link-success\">Learn More
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end blog -->

\t\t<!-- start cta -->
\t\t<section class=\"py-5 bg-primary position-relative\">
\t\t\t<div class=\"bg-overlay bg-overlay-pattern opacity-50\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center gy-4\">
\t\t\t\t\t<div class=\"col-sm\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"text-white fw-semibold\">Get New Jobs Notification!</h4>
\t\t\t\t\t\t\t<p class=\"text-white text-opacity-75 mb-0\">Subscribe & get all related jobs notification.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t\t<div class=\"col-sm-auto\">
\t\t\t\t\t\t<button class=\"btn btn-danger\" type=\"button\">Subscribe Now
\t\t\t\t\t\t\t<i class=\"ri-arrow-right-line align-bottom\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end col -->
\t\t\t\t</div>
\t\t\t\t<!-- end row -->
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end cta -->

\t\t<!-- Start footer -->
\t\t<footer class=\"custom-footer bg-dark py-5 position-relative\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 mt-4\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<img src=\"assets/images/logo-light.png\" alt=\"logo light\" height=\"17\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-4 fs-13\">
\t\t\t\t\t\t\t\t<p>Premium Multipurpose Admin & Dashboard Template</p>
\t\t\t\t\t\t\t\t<p>You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.</p>
\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 footer-social-link\">
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-facebook-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-github-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-linkedin-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-google-fill\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript: void(0);\" class=\"avatar-xs d-block\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar-title rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-dribbble-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-7 ms-lg-auto\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 mt-4\">
\t\t\t\t\t\t\t\t<h5 class=\"text-white mb-0\">Entreprise</h5>
\t\t\t\t\t\t\t\t<div class=\"text-muted mt-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled ff-secondary footer-list\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-profile.html\">A propos de nous</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-gallery.html\">Gallerie</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-team.html\">Equipe</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-pricing.html\">Prix</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-timeline.html\">Emploi du temps</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 mt-4\">
\t\t\t\t\t\t\t\t<h5 class=\"text-white mb-0\">For Jobs</h5>
\t\t\t\t\t\t\t\t<div class=\"text-muted mt-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled ff-secondary footer-list\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-job-lists.html\">Job List</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-job-application.html\">application</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-job-new.html\">Nouveau travail</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"apps-job-companies-lists.html\">Liste des entreprisest</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 mt-4\">
\t\t\t\t\t\t\t\t<h5 class=\"text-white mb-0\">Support</h5>
\t\t\t\t\t\t\t\t<div class=\"text-muted mt-3\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled ff-secondary footer-list\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-faqs.html\">FAQ</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"pages-faqs.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row text-center text-sm-start align-items-center mt-5\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"copy-rights mb-0\">
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t© adopteDev - Themesbrand
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"text-sm-end mt-3 mt-sm-0\">
\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 footer-list gap-4 fs-13\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"pages-privacy-policy.html\">Privacy Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"pages-term-conditions.html\">Terms & Conditions</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"pages-privacy-policy.html\">Securité</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- end footer -->

\t\t<!--start back-to-top-->
\t\t<button onclick=\"topFunction()\" class=\"btn btn-info btn-icon landing-back-top\" id=\"back-to-top\">
\t\t\t<i class=\"ri-arrow-up-line\"></i>
\t\t</button>
\t\t<!--end back-to-top-->

\t</div>
\t<!-- end layout wrapper -->
{% endblock %}
", "landing/index.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\landing\\index.html.twig");
    }
}
