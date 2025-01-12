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

/* favoris/index.html.twig */
class __TwigTemplate_94e8a8acaddf70fa09e11e3768ae974d extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "favoris/index.html.twig", 1);
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

        yield "Mes Développeurs Favoris";
        
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
        yield "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"page-title-box\">
                <h4 class=\"mb-sm-0\">Mes Développeurs Favoris</h4>
            </div>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 16
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["developpeurs"]) || array_key_exists("developpeurs", $context) ? $context["developpeurs"] : (function () { throw new RuntimeError('Variable "developpeurs" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["developpeurs"]) || array_key_exists("developpeurs", $context) ? $context["developpeurs"] : (function () { throw new RuntimeError('Variable "developpeurs" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["developpeur"]) {
                // line 18
                yield "                <div class=\"col-xl-3 col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">                                <div class=\"flex-grow-1 ms-3\">
                                    <h5 class=\"font-size-16 mb-1\">
                                        <a href=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profils_dev_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["developpeur"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" 
                                           class=\"text-dark\">
                                            ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developpeur"], "prenom", [], "any", false, false, false, 25), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developpeur"], "nom", [], "any", false, false, false, 25), "html", null, true);
                yield "
                                        </a>
                                    </h5>                                    
                                    ";
                // line 28
                if (CoreExtension::getAttribute($this->env, $this->source, $context["developpeur"], "langages", [], "any", false, false, false, 28)) {
                    // line 29
                    yield "                                        <div class=\"mb-3\">
                                            ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["developpeur"], "langages", [], "any", false, false, false, 30), 0, 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
                        // line 31
                        yield "                                                <span class=\"badge bg-primary me-1\">
                                                    ";
                        // line 32
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["langage"], "nom", [], "any", false, false, false, 32), "html", null, true);
                        yield "
                                                </span>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['langage'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    yield "                                        </div>
                                    ";
                }
                // line 37
                yield "                                </div>
                            </div>
                            
                            <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                <a href=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profils_dev_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["developpeur"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-primary btn-sm\">
                                    Voir le profil
                                </a>
                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm btn-remove-favorite\"
                                        data-dev-id=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["developpeur"], "id", [], "any", false, false, false, 47), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-heart-broken me-1\"></i>
                                    Retirer des favoris
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['developpeur'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "        ";
        } else {
            // line 57
            yield "            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body text-center py-5\">
                        <h3 class=\"text-muted mb-3\">Aucun développeur en favoris</h3>
                        <p>Parcourez les profils des développeurs et ajoutez-les à vos favoris pour les retrouver ici.</p>
                        <a href=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profils_dev_index");
            yield "\" class=\"btn btn-primary\">
                            Découvrir les développeurs
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 69
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du retrait des favoris
    document.querySelectorAll('.btn-remove-favorite').forEach(button => {
        button.addEventListener('click', function() {
            const devId = this.dataset.devId;
            const card = this.closest('.col-xl-3');
            
            if (confirm('Voulez-vous vraiment retirer ce développeur de vos favoris ?')) {
                fetch(`/favoris/retirer/\${devId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Animation de suppression
                    card.style.transition = 'all 0.3s ease';
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    
                    setTimeout(() => {
                        card.remove();
                        
                        // Vérifier s'il reste des favoris
                        const remainingCards = document.querySelectorAll('.col-xl-3');
                        if (remainingCards.length === 0) {
                            location.reload(); // Recharger pour afficher le message \"Aucun favori\"
                        }
                    }, 300);
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Une erreur est survenue lors de la suppression du favori.');
                });
            }
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "favoris/index.html.twig";
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
        return array (  220 => 74,  210 => 73,  200 => 69,  190 => 62,  183 => 57,  180 => 56,  165 => 47,  156 => 41,  150 => 37,  146 => 35,  137 => 32,  134 => 31,  130 => 30,  127 => 29,  125 => 28,  117 => 25,  112 => 23,  105 => 18,  100 => 17,  98 => 16,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Développeurs Favoris{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"page-title-box\">
                <h4 class=\"mb-sm-0\">Mes Développeurs Favoris</h4>
            </div>
        </div>
    </div>

    <div class=\"row\">
        {% if developpeurs|length > 0 %}
            {% for developpeur in developpeurs %}
                <div class=\"col-xl-3 col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex align-items-center\">                                <div class=\"flex-grow-1 ms-3\">
                                    <h5 class=\"font-size-16 mb-1\">
                                        <a href=\"{{ path('app_profils_dev_show', {'id': developpeur.id}) }}\" 
                                           class=\"text-dark\">
                                            {{ developpeur.prenom }} {{ developpeur.nom }}
                                        </a>
                                    </h5>                                    
                                    {% if developpeur.langages %}
                                        <div class=\"mb-3\">
                                            {% for langage in developpeur.langages|slice(0, 6) %}
                                                <span class=\"badge bg-primary me-1\">
                                                    {{ langage.nom }}
                                                </span>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                            
                            <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                <a href=\"{{ path('app_profils_dev_show', {'id': developpeur.id}) }}\" 
                                   class=\"btn btn-primary btn-sm\">
                                    Voir le profil
                                </a>
                                <button type=\"button\" 
                                        class=\"btn btn-danger btn-sm btn-remove-favorite\"
                                        data-dev-id=\"{{ developpeur.id }}\">
                                    <i class=\"fas fa-heart-broken me-1\"></i>
                                    Retirer des favoris
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% else %}
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body text-center py-5\">
                        <h3 class=\"text-muted mb-3\">Aucun développeur en favoris</h3>
                        <p>Parcourez les profils des développeurs et ajoutez-les à vos favoris pour les retrouver ici.</p>
                        <a href=\"{{ path('app_profils_dev_index') }}\" class=\"btn btn-primary\">
                            Découvrir les développeurs
                        </a>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du retrait des favoris
    document.querySelectorAll('.btn-remove-favorite').forEach(button => {
        button.addEventListener('click', function() {
            const devId = this.dataset.devId;
            const card = this.closest('.col-xl-3');
            
            if (confirm('Voulez-vous vraiment retirer ce développeur de vos favoris ?')) {
                fetch(`/favoris/retirer/\${devId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Animation de suppression
                    card.style.transition = 'all 0.3s ease';
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    
                    setTimeout(() => {
                        card.remove();
                        
                        // Vérifier s'il reste des favoris
                        const remainingCards = document.querySelectorAll('.col-xl-3');
                        if (remainingCards.length === 0) {
                            location.reload(); // Recharger pour afficher le message \"Aucun favori\"
                        }
                    }, 300);
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Une erreur est survenue lors de la suppression du favori.');
                });
            }
        });
    });
});
</script>
{% endblock %}", "favoris/index.html.twig", "C:\\Users\\EMA\\Documents\\php istic\\projet\\adopteUnDev\\templates\\favoris\\index.html.twig");
    }
}
