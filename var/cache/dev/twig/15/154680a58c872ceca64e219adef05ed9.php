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

/* profils_dev/show.html.twig */
class __TwigTemplate_3ed4f1819dbc2caa3a1afb01e6b17025 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profils_dev/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profils_dev/show.html.twig", 1);
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

        yield "ProfilsDev";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>ProfilsDev</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 24, $this->source); })()), "localisation", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 28, $this->source); })()), "experience", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Salaire_min</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 32, $this->source); })()), "salaireMin", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Biographie</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 36, $this->source); })()), "biographie", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 40, $this->source); })()), "avatar", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profils_dev_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profils_dev_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["profils_dev"]) || array_key_exists("profils_dev", $context) ? $context["profils_dev"] : (function () { throw new RuntimeError('Variable "profils_dev" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 49
        yield Twig\Extension\CoreExtension::include($this->env, $context, "profils_dev/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profils_dev/show.html.twig";
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
        return array (  160 => 49,  155 => 47,  150 => 45,  142 => 40,  135 => 36,  128 => 32,  121 => 28,  114 => 24,  107 => 20,  100 => 16,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProfilsDev{% endblock %}

{% block body %}
    <h1>ProfilsDev</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ profils_dev.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ profils_dev.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ profils_dev.prenom }}</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>{{ profils_dev.localisation }}</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>{{ profils_dev.experience }}</td>
            </tr>
            <tr>
                <th>Salaire_min</th>
                <td>{{ profils_dev.salaireMin }}</td>
            </tr>
            <tr>
                <th>Biographie</th>
                <td>{{ profils_dev.biographie }}</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>{{ profils_dev.avatar }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_profils_dev_index') }}\">back to list</a>

    <a href=\"{{ path('app_profils_dev_edit', {'id': profils_dev.id}) }}\">edit</a>

    {{ include('profils_dev/_delete_form.html.twig') }}
{% endblock %}
", "profils_dev/show.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\profils_dev\\show.html.twig");
    }
}
