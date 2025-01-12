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
class __TwigTemplate_68005cb87e25684aa2962fdf865ec611 extends Template
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
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#process\">Procedure</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#categories\">Categories</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<a href=\"";
        // line 34
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
\t\t\t\t\t\t\t<h1 class=\"mb-3 lh-base\">Trouvez Votre
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Emploi de Rêve</span>
\t\t\t\t\t\t\t\ten Un Seul Endroit</h1>
\t\t\t\t\t\t\t<p class=\"ff-secondary fs-16 mb-2\">La première étape pour trouver
\t\t\t\t\t\t\t\t<b>l’emploi de vos rêves
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\test de décider où chercher des informations de première main. Contactez des professionnels déjà actifs dans les secteurs ou les postes qui vous intéressent.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"ff-secondary fs-16\">
\t\t\t\t\t\t\tOrganisez des entretiens informatifs et des appels téléphoniques. Demandez l’opportunité d’observer leur travail ou de les accompagner dans leurs tâches quotidiennes.
\t\t\t\t\t\t\t</p>

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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Contenu Dynamique</p>
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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Configurez les informations du plugin pour enrichir votre expérience de recherche.</p>
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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Personnalisez les thèmes pour mieux répondre à vos besoins spécifiques.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 339
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
        yield "\" class=\"btn btn-primary\">Retrouver vos emploi
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
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Catégories</span>
\t\t\t\t\t\t\t d'emplois à forte demande
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-muted\">Publiez une offre d'emploi pour nous parler de votre projet. Nous vous mettrons rapidement en relation avec les freelances adaptés à vos besoins.</p>
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


\t\t<!-- start candidates -->
\t\t<section class=\"section bg-light\" id=\"candidates\">
\t\t\t<div class=\"bg-overlay bg-overlay-pattern\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Equipe</span>
\t\t\t\t\t\t\tDe Developpement
\t\t\t\t\t\t\t</h1>
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
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Faïd Alagbe</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Chef Projet</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRennes, France
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Esther Ahossi</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Developpeuse Front-End</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRennes, France
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-10.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Lucie Le Coadou</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Developpeuse Backend</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRennes, France
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end candidates -->

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
        return array (  423 => 339,  115 => 34,  86 => 7,  76 => 6,  58 => 3,  41 => 1,);
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
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#process\">Procedure</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#categories\">Categories</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
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
\t\t\t\t\t\t\t<h1 class=\"mb-3 lh-base\">Trouvez Votre
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Emploi de Rêve</span>
\t\t\t\t\t\t\t\ten Un Seul Endroit</h1>
\t\t\t\t\t\t\t<p class=\"ff-secondary fs-16 mb-2\">La première étape pour trouver
\t\t\t\t\t\t\t\t<b>l’emploi de vos rêves
\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\test de décider où chercher des informations de première main. Contactez des professionnels déjà actifs dans les secteurs ou les postes qui vous intéressent.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"ff-secondary fs-16\">
\t\t\t\t\t\t\tOrganisez des entretiens informatifs et des appels téléphoniques. Demandez l’opportunité d’observer leur travail ou de les accompagner dans leurs tâches quotidiennes.
\t\t\t\t\t\t\t</p>

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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Contenu Dynamique</p>
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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Configurez les informations du plugin pour enrichir votre expérience de recherche.</p>
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
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Personnalisez les thèmes pour mieux répondre à vos besoins spécifiques.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"{{ url('app_login') }}\" class=\"btn btn-primary\">Retrouver vos emploi
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
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Catégories</span>
\t\t\t\t\t\t\t d'emplois à forte demande
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<p class=\"text-muted\">Publiez une offre d'emploi pour nous parler de votre projet. Nous vous mettrons rapidement en relation avec les freelances adaptés à vos besoins.</p>
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


\t\t<!-- start candidates -->
\t\t<section class=\"section bg-light\" id=\"candidates\">
\t\t\t<div class=\"bg-overlay bg-overlay-pattern\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t\t\t\t<h1 class=\"mb-3 ff-secondary fw-semibold text-capitalize lh-base\">
\t\t\t\t\t\t\t\t<span class=\"text-primary\">Equipe</span>
\t\t\t\t\t\t\tDe Developpement
\t\t\t\t\t\t\t</h1>
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
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Faïd Alagbe</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Chef Projet</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRennes, France
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Esther Ahossi</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Developpeuse Front-End</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRennes, France
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/users/avatar-10.jpg\" alt=\"\" class=\"rounded-circle avatar-md mx-auto d-block\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"fs-17 mt-3 mb-2\">Lucie Le Coadou</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted fs-13 mb-3\">Developpeuse Backend</p>

\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4 fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-map-pin-2-line text-primary me-1 align-bottom\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRennes, France
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"btn btn-primary w-100\">View Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end container -->
\t\t</section>
\t\t<!-- end candidates -->

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
