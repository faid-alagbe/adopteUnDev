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
class __TwigTemplate_dd7999e61d1ec52d347780ee1ea6aef7 extends Template
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
<html lang=\"fr\" data-layout=\"vertical\" data-topbar=\"light\" data-sidebar=\"dark\" data-sidebar-size=\"lg\" data-sidebar-image=\"none\" data-preloader=\"disable\" data-theme=\"default\" data-theme-colors=\"default\">
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
        <meta content=\"Themesbrand\" name=\"author\" />

        ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 29
        yield "        

       
        ";
        // line 32
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 61
        yield "        




    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

    <!-- Vector map-->
    


    <!-- Widget init -->
    

    <!-- App js -->
    </head>
    <body data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example\">
        ";
        // line 79
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 81
        yield "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
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

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
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

        <script src=\"assets/js/pages/profile.init.js\"></script>

        <script src=\"assets/libs/card/card.js\"></script>
        <script src=\"assets/js/app.js\"></script>
        <script src=\"assets/js/pages/widgets.init.js\"></script>
        <script src=\"assets/libs/jsvectormap/js/jsvectormap.min.js\"></script>
        <script src=\"assets/libs/jsvectormap/maps/world-merc.js\"></script>
        <script src=\"assets/libs/jsvectormap/maps/us-merc-en.js\"></script>
        <script src=\"assets/js/pages/form-input-spin.init.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 80
        yield "        ";
        
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
        return array (  211 => 80,  201 => 79,  166 => 33,  156 => 32,  132 => 12,  122 => 11,  105 => 6,  95 => 81,  93 => 79,  73 => 61,  71 => 32,  66 => 29,  64 => 11,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" data-layout=\"vertical\" data-topbar=\"light\" data-sidebar=\"dark\" data-sidebar-size=\"lg\" data-sidebar-image=\"none\" data-preloader=\"disable\" data-theme=\"default\" data-theme-colors=\"default\">
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

        <script src=\"assets/js/pages/profile.init.js\"></script>

        <script src=\"assets/libs/card/card.js\"></script>
        <script src=\"assets/js/app.js\"></script>
        <script src=\"assets/js/pages/widgets.init.js\"></script>
        <script src=\"assets/libs/jsvectormap/js/jsvectormap.min.js\"></script>
        <script src=\"assets/libs/jsvectormap/maps/world-merc.js\"></script>
        <script src=\"assets/libs/jsvectormap/maps/us-merc-en.js\"></script>
        <script src=\"assets/js/pages/form-input-spin.init.js\"></script>
        {% endblock %}
        




    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

    <!-- Vector map-->
    


    <!-- Widget init -->
    

    <!-- App js -->
    </head>
    <body data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example\">
        {% block body %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev\\templates\\base.html.twig");
    }
}
