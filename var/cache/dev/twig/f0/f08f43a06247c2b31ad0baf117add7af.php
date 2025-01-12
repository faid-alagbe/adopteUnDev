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
        <style>
            /* Bouton animé - Style général */
            #go-home {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 1000; /* Toujours au-dessus */
                background: linear-gradient(45deg, #3d4d82, #838fb9);
                color: white;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 50px;
                font-size: 16px;
                font-weight: bold;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Effet hover */
            #go-home:hover {
                background: linear-gradient(45deg, #3d4d82, #838fb9);
                transform: scale(1.1);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            }

            /* Animation du texte */
            .animated-button span {
                display: inline-block;
                animation: bounce 1.5s infinite;
            }

            /* Effet de rebond */
            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    transform: translateY(0);
                }
                40% {
                    transform: translateY(-8px);
                }
                60% {
                    transform: translateY(-4px);
                }
            }
        </style>

        <script>
            document.getElementById('go-home').addEventListener('click', function (event) {
                // Exemple d'effet : Animation sur clic
                event.preventDefault(); // Empêche la redirection immédiate
                const link = this.getAttribute('href');
                this.style.transform = 'scale(1.5)';
                this.style.transition = 'transform 0.3s';

                setTimeout(() => {
                    window.location.href = link; // Redirige après l'animation
                }, 300);
            });
        </script>
        

\t\t";
        // line 76
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 97
        yield "

\t\t";
        // line 99
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 128
        yield "        




    <!-- apexcharts -->
    <script src=\" ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/apexcharts/apexcharts.min.js"), "html", null, true);
        yield " \"></script>

    <!-- Vector map-->
    


    <!-- Widget init -->
    

    <!-- App js -->
    </head>
    <body data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example\">
        ";
        // line 146
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 148
        yield "        <a href=\"/\" id=\"go-home\" class=\"animated-button\" title=\"Retour à l'accueil\">
            <span>Accueil</span>
        </a>
    </body>
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

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 77
        yield "\t\t\t<!-- App favicon -->
\t\t\t<link
\t\t\trel=\"shortcut icon\" href=\" ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\">

\t\t\t<!--Swiper slider css-->

\t\t\t<link
\t\t\thref=\" ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/swiper/swiper-bundle.min.css"), "html", null, true);
        yield " \" rel=\"stylesheet\" type=\"text/css') }}\"/>

        <!-- Layout config Js -->
        <script src=\" ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/layout.js"), "html", null, true);
        yield "\"></script>
        <!-- Bootstrap Css -->
        <link href=\" ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Icons Css -->
        <link href=\" ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- App Css-->
        <link href=\" ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- custom Css-->
        <link href=\" ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.min.css"), "html", null, true);
        yield " \" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        yield "\t\t\t<script src=\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/node-waves/waves.min.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/feather-icons/feather.min.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/plugins/lord-icon-2.1.0.js"), "html", null, true);
        yield " \"></script>
\t\t\t<script src=\" ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        yield " \"></script>

\t\t\t<!--Swiper slider js-->
\t\t\t<script src=\" ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/swiper/swiper-bundle.min.js"), "html", null, true);
        yield " \"></script>

\t\t\t<!--job landing init -->
\t\t\t<script src=\" ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/job-lading.init.js"), "html", null, true);
        yield " \"></script>

\t\t\t<script src=\" ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/password-addon.init.js"), "html", null, true);
        yield " \"></script>

        <!-- validation init -->
        <script src=\" ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/form-validation.init.js"), "html", null, true);
        yield " \"></script>

        <script src=\" ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/profile.init.js"), "html", null, true);
        yield " \"></script>

        <script src=\" ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/card/card.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/widgets.init.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/jsvectormap/js/jsvectormap.min.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/jsvectormap/maps/world-merc.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/jsvectormap/maps/us-merc-en.js"), "html", null, true);
        yield " \"></script>
        <script src=\" ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/form-input-spin.init.js"), "html", null, true);
        yield " \"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
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
        return array (  358 => 147,  348 => 146,  338 => 126,  334 => 125,  330 => 124,  326 => 123,  322 => 122,  318 => 121,  314 => 120,  309 => 118,  304 => 116,  298 => 113,  293 => 111,  287 => 108,  281 => 105,  277 => 104,  273 => 103,  269 => 102,  265 => 101,  260 => 100,  250 => 99,  240 => 95,  235 => 93,  230 => 91,  225 => 89,  220 => 87,  214 => 84,  206 => 79,  202 => 77,  192 => 76,  174 => 7,  161 => 148,  159 => 146,  144 => 134,  136 => 128,  134 => 99,  130 => 97,  128 => 76,  59 => 9,  57 => 7,  49 => 1,);
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
        <style>
            /* Bouton animé - Style général */
            #go-home {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 1000; /* Toujours au-dessus */
                background: linear-gradient(45deg, #3d4d82, #838fb9);
                color: white;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 50px;
                font-size: 16px;
                font-weight: bold;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Effet hover */
            #go-home:hover {
                background: linear-gradient(45deg, #3d4d82, #838fb9);
                transform: scale(1.1);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            }

            /* Animation du texte */
            .animated-button span {
                display: inline-block;
                animation: bounce 1.5s infinite;
            }

            /* Effet de rebond */
            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                    transform: translateY(0);
                }
                40% {
                    transform: translateY(-8px);
                }
                60% {
                    transform: translateY(-4px);
                }
            }
        </style>

        <script>
            document.getElementById('go-home').addEventListener('click', function (event) {
                // Exemple d'effet : Animation sur clic
                event.preventDefault(); // Empêche la redirection immédiate
                const link = this.getAttribute('href');
                this.style.transform = 'scale(1.5)';
                this.style.transition = 'transform 0.3s';

                setTimeout(() => {
                    window.location.href = link; // Redirige après l'animation
                }, 300);
            });
        </script>
        

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
        <a href=\"/\" id=\"go-home\" class=\"animated-button\" title=\"Retour à l'accueil\">
            <span>Accueil</span>
        </a>
    </body>
</html>
", "base.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\base.html.twig");
    }
}
