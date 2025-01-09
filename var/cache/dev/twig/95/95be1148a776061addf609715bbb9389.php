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
class __TwigTemplate_0ad0b133d07ac1d61407eb7e5aa92e33 extends Template
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
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>
\t\t\t";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 9
        yield "\t\t</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\"/>
\t\t<meta content=\"Themesbrand\" name=\"author\"/>

\t\t";
        // line 14
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 34
        yield "

\t\t";
        // line 36
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 65
        yield "        




    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

    <!-- Vector map-->
    


    <!-- Widget init -->
    

    <!-- App js -->
    </head>
    <body data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example\">
        ";
        // line 83
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 85
        yield "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "AdoptUnDev
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        yield "\t\t\t<!-- App favicon -->
\t\t\t<link
\t\t\trel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

\t\t\t<!--Swiper slider css-->
\t\t\t<link
\t\t\thref=\"assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\"/>

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

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        yield "\t\t\t<script src=\"assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"assets/libs/simplebar/simplebar.min.js\"></script>
\t\t\t<script src=\"assets/libs/node-waves/waves.min.js\"></script>
\t\t\t<script src=\"assets/libs/feather-icons/feather.min.js\"></script>
\t\t\t<script src=\"assets/js/pages/plugins/lord-icon-2.1.0.js\"></script>
\t\t\t<script src=\"assets/js/plugins.js\"></script>

\t\t\t<!--Swiper slider js-->
\t\t\t<script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

\t\t\t<!--job landing init -->
\t\t\t<script src=\"assets/js/pages/job-lading.init.js\"></script>

\t\t\t<script src=\"assets/js/pages/password-addon.init.js\"></script>

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

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 84
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
        return array (  215 => 84,  205 => 83,  170 => 37,  160 => 36,  134 => 15,  124 => 14,  106 => 7,  96 => 85,  94 => 83,  74 => 65,  72 => 36,  68 => 34,  66 => 14,  59 => 9,  57 => 7,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" data-layout=\"vertical\" data-topbar=\"light\" data-sidebar=\"dark\" data-sidebar-size=\"lg\" data-sidebar-image=\"none\" data-preloader=\"disable\" data-theme=\"default\" data-theme-colors=\"default\">
<html>
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>
\t\t\t{% block title %}AdoptUnDev
\t\t\t{% endblock %}
\t\t</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\"/>
\t\t<meta content=\"Themesbrand\" name=\"author\"/>

\t\t{% block stylesheets %}
\t\t\t<!-- App favicon -->
\t\t\t<link
\t\t\trel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

\t\t\t<!--Swiper slider css-->
\t\t\t<link
\t\t\thref=\"assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\"/>

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


\t\t{% block javascripts %}
\t\t\t<script src=\"assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"assets/libs/simplebar/simplebar.min.js\"></script>
\t\t\t<script src=\"assets/libs/node-waves/waves.min.js\"></script>
\t\t\t<script src=\"assets/libs/feather-icons/feather.min.js\"></script>
\t\t\t<script src=\"assets/js/pages/plugins/lord-icon-2.1.0.js\"></script>
\t\t\t<script src=\"assets/js/plugins.js\"></script>

\t\t\t<!--Swiper slider js-->
\t\t\t<script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

\t\t\t<!--job landing init -->
\t\t\t<script src=\"assets/js/pages/job-lading.init.js\"></script>

\t\t\t<script src=\"assets/js/pages/password-addon.init.js\"></script>

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
", "base.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\base.html.twig");
    }
}
