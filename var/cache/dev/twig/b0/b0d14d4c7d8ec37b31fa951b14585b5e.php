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

/* base.html.twig */
class __TwigTemplate_6436888d97feab6e19f06ab309eea212 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
        <meta content=\"Themesbrand\" name=\"author\" />

        ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 28
        yield "
       
        ";
        // line 30
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 49
        yield "        
    </head>
    <body data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example\">
        ";
        // line 52
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 53
        yield "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "AdoptUnDev";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        yield "        <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

        <!--Swiper slider css-->
        <link href=\"assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Layout config Js -->
        <script src=\"assets/js/layout.js\"></script>
        <!-- Bootstrap Css -->
        <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Icons Css -->
        <link href=\"assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- App Css-->
        <link href=\"assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- custom Css-->
        <link href=\"assets/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        yield "        <script src=\"assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script src=\"assets/libs/simplebar/simplebar.min.js\"></script>
        <script src=\"assets/libs/node-waves/waves.min.js\"></script>
        <script src=\"assets/libs/feather-icons/feather.min.js\"></script>
        <script src=\"assets/js/pages/plugins/lord-icon-2.1.0.js\"></script>
        <script src=\"assets/js/plugins.js\"></script>

        <!--Swiper slider js-->
        <script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

        <!--job landing init -->
        <script src=\"assets/js/pages/job-lading.init.js\"></script>

        <script src=\"assets/js/pages/password-addon.init.js\"></script>

        <!-- validation init -->
        <script src=\"assets/js/pages/form-validation.init.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  174 => 52,  149 => 31,  139 => 30,  115 => 11,  105 => 10,  88 => 5,  78 => 53,  76 => 52,  71 => 49,  69 => 30,  65 => 28,  63 => 10,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>{% block title %}AdoptUnDev{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
        <meta content=\"Themesbrand\" name=\"author\" />

        {% block stylesheets %}
        <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

        <!--Swiper slider css-->
        <link href=\"assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Layout config Js -->
        <script src=\"assets/js/layout.js\"></script>
        <!-- Bootstrap Css -->
        <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Icons Css -->
        <link href=\"assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- App Css-->
        <link href=\"assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- custom Css-->
        <link href=\"assets/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        {% endblock %}

       
        {% block javascripts %}
        <script src=\"assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script src=\"assets/libs/simplebar/simplebar.min.js\"></script>
        <script src=\"assets/libs/node-waves/waves.min.js\"></script>
        <script src=\"assets/libs/feather-icons/feather.min.js\"></script>
        <script src=\"assets/js/pages/plugins/lord-icon-2.1.0.js\"></script>
        <script src=\"assets/js/plugins.js\"></script>

        <!--Swiper slider js-->
        <script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

        <!--job landing init -->
        <script src=\"assets/js/pages/job-lading.init.js\"></script>

        <script src=\"assets/js/pages/password-addon.init.js\"></script>

        <!-- validation init -->
        <script src=\"assets/js/pages/form-validation.init.js\"></script>
        {% endblock %}
        
    </head>
    <body data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example\">
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev\\templates\\base.html.twig");
    }
}
