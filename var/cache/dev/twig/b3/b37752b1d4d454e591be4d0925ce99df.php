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

/* poste/show.html.twig */
class __TwigTemplate_46034743c7c0ffc772b981df9dc8b47a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poste/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "poste/show.html.twig", 1);
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

        yield "PosteEntity";
        
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
        yield "    <h1>PosteEntity</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_entity"]) || array_key_exists("poste_entity", $context) ? $context["poste_entity"] : (function () { throw new RuntimeError('Variable "poste_entity" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_entity"]) || array_key_exists("poste_entity", $context) ? $context["poste_entity"] : (function () { throw new RuntimeError('Variable "poste_entity" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_entity"]) || array_key_exists("poste_entity", $context) ? $context["poste_entity"] : (function () { throw new RuntimeError('Variable "poste_entity" does not exist.', 20, $this->source); })()), "location", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Experience_require</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_entity"]) || array_key_exists("poste_entity", $context) ? $context["poste_entity"] : (function () { throw new RuntimeError('Variable "poste_entity" does not exist.', 24, $this->source); })()), "experienceRequire", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_entity"]) || array_key_exists("poste_entity", $context) ? $context["poste_entity"] : (function () { throw new RuntimeError('Variable "poste_entity" does not exist.', 28, $this->source); })()), "salary", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_entity"]) || array_key_exists("poste_entity", $context) ? $context["poste_entity"] : (function () { throw new RuntimeError('Variable "poste_entity" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poste_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["poste_entity"]) || array_key_exists("poste_entity", $context) ? $context["poste_entity"] : (function () { throw new RuntimeError('Variable "poste_entity" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "poste/_delete_form.html.twig");
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
        return "poste/show.html.twig";
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
        return array (  146 => 41,  141 => 39,  136 => 37,  128 => 32,  121 => 28,  114 => 24,  107 => 20,  100 => 16,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PosteEntity{% endblock %}

{% block body %}
    <h1>PosteEntity</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ poste_entity.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ poste_entity.title }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ poste_entity.location }}</td>
            </tr>
            <tr>
                <th>Experience_require</th>
                <td>{{ poste_entity.experienceRequire }}</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>{{ poste_entity.salary }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ poste_entity.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_poste_index') }}\">back to list</a>

    <a href=\"{{ path('app_poste_edit', {'id': poste_entity.id}) }}\">edit</a>

    {{ include('poste/_delete_form.html.twig') }}
{% endblock %}
", "poste/show.html.twig", "C:\\Users\\HP Elitebook\\Documents\\Cours ISTIC\\PW\\adopteUnDev1\\templates\\poste\\show.html.twig");
    }
}
