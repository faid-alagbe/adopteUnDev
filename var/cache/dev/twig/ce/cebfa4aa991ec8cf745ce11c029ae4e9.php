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

/* baseProfil.html.twig */
class __TwigTemplate_ea840f6fcb01fb296b1fe9eaa6d4aaee extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseProfil.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\" data-layout=\"vertical\" data-topbar=\"light\" data-sidebar=\"dark\" data-sidebar-size=\"lg\" data-sidebar-image=\"none\" data-preloader=\"disable\" data-theme=\"default\" data-theme-colors=\"default\">

<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta content=\"Premium Multipurpose Admin & Dashboard Template\" name=\"description\" />
        <meta content=\"Themesbrand\" name=\"author\" />

        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "        

       
        ";
        // line 33
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 50
        yield "        
    </head>
    <body>
        ";
        // line 53
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 54
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

        yield "AdoptUnDev";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
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

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        yield "        <script src=\"assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script src=\"assets/libs/simplebar/simplebar.min.js\"></script>
        <script src=\"assets/libs/node-waves/waves.min.js\"></script>
        <script src=\"assets/libs/feather-icons/feather.min.js\"></script>
        <script src=\"assets/js/pages/plugins/lord-icon-2.1.0.js\"></script>
        <script src=\"assets/js/plugins.js\"></script>

        <!-- swiper js -->
        <script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

        <!-- profile init js -->
        <script src=\"assets/js/pages/profile.init.js\"></script>

        <!-- App js -->
        <script src=\"assets/js/app.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 53
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
        return "baseProfil.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  175 => 53,  152 => 34,  142 => 33,  118 => 13,  108 => 12,  91 => 7,  81 => 54,  79 => 53,  74 => 50,  72 => 33,  67 => 30,  65 => 12,  57 => 7,  49 => 1,);
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

        <!-- swiper js -->
        <script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

        <!-- profile init js -->
        <script src=\"assets/js/pages/profile.init.js\"></script>

        <!-- App js -->
        <script src=\"assets/js/app.js\"></script>
        {% endblock %}
        
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "baseProfil.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev1\\templates\\baseProfil.html.twig");
    }
}
