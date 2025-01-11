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
class __TwigTemplate_36acb010dae0b8f222943bab9fff4037 extends Template
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
        // line 35
        yield "

\t\t";
        // line 37
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 66
        yield "        




    <!-- apexcharts -->
    <script src=\" ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/apexcharts/apexcharts.min.js"), "html", null, true);
        yield " \"></script>

    <!-- Vector map-->
    


    <!-- Widget init -->
    

    <!-- App js -->
    </head>
    <body data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example\">
        ";
        // line 84
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 86
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
\t\t\trel=\"shortcut icon\" href=\" ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\">

\t\t\t<!--Swiper slider css-->

\t\t\t<link
\t\t\thref=\" ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/swiper/swiper-bundle.min.css"), "html", null, true);
        yield " \" rel=\"stylesheet\" type=\"text/css') }}\"/>

        <!-- Layout config Js -->
        <script src=\" ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/layout.js"), "html", null, true);
        yield "\"></script>
        <!-- Bootstrap Css -->
        <link href=\" ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Icons Css -->
        <link href=\" ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- App Css-->
        <link href=\" ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- custom Css-->
        <link href=\" ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.min.css"), "html", null, true);
        yield " \" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        yield "\t\t\t<script src=\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/node-waves/waves.min.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/feather-icons/feather.min.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/plugins/lord-icon-2.1.0.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        yield " \"></script>

\t\t\t<!--Swiper slider js-->
\t\t\t<script src=\" ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/swiper/swiper-bundle.min.js"), "html", null, true);
        yield " \"></script>

\t\t\t<!--job landing init -->
\t\t\t<script src=\" ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/job-lading.init.js"), "html", null, true);
        yield " \"></script>

\t\t\t<script src=\" ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/password-addon.init.js"), "html", null, true);
        yield " \"></script>

        <!-- validation init -->
        <script src=\" ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/form-validation.init.js"), "html", null, true);
        yield " \"></script>

        <script src=\" ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/profile.init.js"), "html", null, true);
        yield " \"></script>

        <script src=\" ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/card/card.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/widgets.init.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/jsvectormap/js/jsvectormap.min.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/jsvectormap/maps/world-merc.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/jsvectormap/maps/us-merc-en.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/form-input-spin.init.js"), "html", null, true);
        yield " \"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 85
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  293 => 85,  283 => 84,  273 => 64,  269 => 63,  265 => 62,  261 => 61,  257 => 60,  253 => 59,  249 => 58,  244 => 56,  239 => 54,  233 => 51,  228 => 49,  222 => 46,  216 => 43,  212 => 42,  208 => 41,  204 => 40,  200 => 39,  195 => 38,  185 => 37,  175 => 33,  170 => 31,  165 => 29,  160 => 27,  155 => 25,  149 => 22,  141 => 17,  137 => 15,  127 => 14,  109 => 7,  99 => 86,  97 => 84,  82 => 72,  74 => 66,  72 => 37,  68 => 35,  66 => 14,  59 => 9,  57 => 7,  49 => 1,);
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
\t\t\trel=\"shortcut icon\" href=\" {{ asset('assets/images/favicon.ico') }}\">

\t\t\t<!--Swiper slider css-->

\t\t\t<link
\t\t\thref=\" {{ asset('assets/libs/swiper/swiper-bundle.min.css') }} \" rel=\"stylesheet\" type=\"text/css') }}\"/>

        <!-- Layout config Js -->
        <script src=\" {{ asset('assets/js/layout.js') }}\"></script>
        <!-- Bootstrap Css -->
        <link href=\" {{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Icons Css -->
        <link href=\" {{ asset('assets/css/icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- App Css-->
        <link href=\" {{ asset('assets/css/app.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- custom Css-->
        <link href=\" {{ asset('assets/css/custom.min.css') }} \" rel=\"stylesheet\" type=\"text/css\" />
        {% endblock %}


\t\t{% block javascripts %}
\t\t\t<script src=\" {{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }} \"></script>
\t\t\t<script src=\" {{ asset('assets/libs/simplebar/simplebar.min.js') }} \"></script>
\t\t\t<script src=\" {{ asset('assets/libs/node-waves/waves.min.js') }} \"></script>
\t\t\t<script src=\" {{ asset('assets/libs/feather-icons/feather.min.js') }} \"></script>
\t\t\t<script src=\" {{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }} \"></script>
\t\t\t<script src=\" {{ asset('assets/js/plugins.js') }} \"></script>

\t\t\t<!--Swiper slider js-->
\t\t\t<script src=\" {{ asset('assets/libs/swiper/swiper-bundle.min.js') }} \"></script>

\t\t\t<!--job landing init -->
\t\t\t<script src=\" {{ asset('assets/js/pages/job-lading.init.js') }} \"></script>

\t\t\t<script src=\" {{ asset('assets/js/pages/password-addon.init.js') }} \"></script>

        <!-- validation init -->
        <script src=\" {{ asset('assets/js/pages/form-validation.init.js') }} \"></script>

        <script src=\" {{ asset('assets/js/pages/profile.init.js') }} \"></script>

        <script src=\" {{ asset('assets/libs/card/card.js') }} \"></script>
        <script src=\" {{ asset('assets/js/app.js') }} \"></script>
        <script src=\" {{ asset('assets/js/pages/widgets.init.js') }} \"></script>
        <script src=\" {{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }} \"></script>
        <script src=\" {{ asset('assets/libs/jsvectormap/maps/world-merc.js') }} \"></script>
        <script src=\" {{ asset('assets/libs/jsvectormap/maps/us-merc-en.js') }} \"></script>
        <script src=\" {{ asset('assets/js/pages/form-input-spin.init.js') }} \"></script>
        {% endblock %}
        




    <!-- apexcharts -->
    <script src=\" {{ asset('assets/libs/apexcharts/apexcharts.min.js') }} \"></script>

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
