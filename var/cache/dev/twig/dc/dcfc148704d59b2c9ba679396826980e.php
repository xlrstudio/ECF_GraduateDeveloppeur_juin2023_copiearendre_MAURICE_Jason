<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* recipe/index.html.twig */
class __TwigTemplate_453f50762bc8da99bc504dce869f1253 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SymRecipe - Mes recettes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container mt-4\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t\t";
        // line 14
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14) === [])) {
            // line 15
            echo "\t\t\t<h1>Mes recettes</h1>

\t\t\t<a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer une recette
\t\t\t</a>

\t\t\t<div class=\"count mt-4\">Il y a
\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 22, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\trecette(s)
\t\t\t</div>

\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t<th scope=\"col\">Difficulté</th>
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Edition</th>
\t\t\t\t\t\t<th scope=\"col\">Suppresion</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 40
                echo "\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t<td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 44
                if ((null === twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 44))) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\tNon renseigné
\t\t\t\t\t\t\t\t";
                } else {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 47), 2, ".", ","), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 52
                if ((null === twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 52))) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\tNon renseigné
\t\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 55), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Supprimer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t";
            // line 71
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 71, $this->source); })()));
            echo "
\t\t\t</div>
\t\t";
        } else {
            // line 74
            echo "\t\t\t<h4>Il n'y a pas de recettes</h4>

\t\t\t<a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer une recette
\t\t\t</a>
\t\t";
        }
        // line 80
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 80,  230 => 76,  226 => 74,  220 => 71,  214 => 67,  204 => 63,  198 => 60,  193 => 58,  190 => 57,  184 => 55,  180 => 53,  178 => 52,  174 => 50,  167 => 47,  163 => 45,  161 => 44,  156 => 42,  152 => 41,  149 => 40,  145 => 39,  125 => 22,  117 => 17,  113 => 15,  111 => 14,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SymRecipe - Mes recettes
{% endblock %}

{% block body %}
\t<div class=\"container mt-4\">
\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t{% if not recipes.items is same as([]) %}
\t\t\t<h1>Mes recettes</h1>

\t\t\t<a href=\"{{ path('recipe.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer une recette
\t\t\t</a>

\t\t\t<div class=\"count mt-4\">Il y a
\t\t\t\t{{ recipes.getTotalItemCount }}
\t\t\t\trecette(s)
\t\t\t</div>

\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t<th scope=\"col\">Difficulté</th>
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Edition</th>
\t\t\t\t\t\t<th scope=\"col\">Suppresion</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ recipe.id }}</th>
\t\t\t\t\t\t\t<td>{{ recipe.name }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if recipe.price is null %}
\t\t\t\t\t\t\t\t\tNon renseigné
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ recipe.price|number_format(2, '.', ',') }}
\t\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if recipe.difficulty is null %}
\t\t\t\t\t\t\t\t\tNon renseigné
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ recipe.difficulty }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ recipe.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('recipe.edit', { id: recipe.id }) }}\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('recipe.delete', { id: recipe.id }) }}\" class=\"btn btn-warning\">Supprimer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t{{ knp_pagination_render(recipes) }}
\t\t\t</div>
\t\t{% else %}
\t\t\t<h4>Il n'y a pas de recettes</h4>

\t\t\t<a href=\"{{ path('recipe.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer une recette
\t\t\t</a>
\t\t{% endif %}
\t</div>
{% endblock %}
", "recipe/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\recipe\\index.html.twig");
    }
}
