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

/* pages/ingredient/index.html.twig */
class __TwigTemplate_92910a3a6bd04804ea26543d6156795e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/ingredient/index.html.twig", 1);
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

        echo "SymRecipe - Mes ingrédients
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
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14) === [])) {
            // line 15
            echo "\t\t\t<h1>Mes ingrédients</h1>

\t\t\t<a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer un ingrédient
\t\t\t</a>

\t\t\t<div class=\"count mt-4\">Il y a
\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 22, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\tingrédient(s)
\t\t\t</div>

\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Edition</th>
\t\t\t\t\t\t<th scope=\"col\">Suppresion</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 39
                echo "\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t<td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 42
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "price", [], "any", false, false, false, 42), 2, ".", ","), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "createdAt", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Supprimer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t";
            // line 57
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 57, $this->source); })()));
            echo "
\t\t\t</div>
\t\t";
        } else {
            // line 60
            echo "\t\t\t<h4>Il n'y a pas d'ingrédients</h4>

\t\t\t<a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer un ingrédient
\t\t\t</a>
\t\t";
        }
        // line 66
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/ingredient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 66,  201 => 62,  197 => 60,  191 => 57,  185 => 53,  175 => 49,  169 => 46,  164 => 44,  159 => 42,  155 => 41,  151 => 40,  148 => 39,  144 => 38,  125 => 22,  117 => 17,  113 => 15,  111 => 14,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SymRecipe - Mes ingrédients
{% endblock %}

{% block body %}
\t<div class=\"container mt-4\">
\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t{% if not ingredients.items is same as([]) %}
\t\t\t<h1>Mes ingrédients</h1>

\t\t\t<a href=\"{{ path('ingredient.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer un ingrédient
\t\t\t</a>

\t\t\t<div class=\"count mt-4\">Il y a
\t\t\t\t{{ ingredients.getTotalItemCount }}
\t\t\t\tingrédient(s)
\t\t\t</div>

\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Edition</th>
\t\t\t\t\t\t<th scope=\"col\">Suppresion</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for ingredient in ingredients %}
\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ ingredient.id }}</th>
\t\t\t\t\t\t\t<td>{{ ingredient.name }}</td>
\t\t\t\t\t\t\t<td>{{ ingredient.price|number_format(2, '.', ',') }}
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t<td>{{ ingredient.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('ingredient.edit', { id: ingredient.id }) }}\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('ingredient.delete', { id: ingredient.id }) }}\" class=\"btn btn-warning\">Supprimer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t{{ knp_pagination_render(ingredients) }}
\t\t\t</div>
\t\t{% else %}
\t\t\t<h4>Il n'y a pas d'ingrédients</h4>

\t\t\t<a href=\"{{ path('ingredient.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer un ingrédient
\t\t\t</a>
\t\t{% endif %}
\t</div>
{% endblock %}
", "pages/ingredient/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\pages\\ingredient\\index.html.twig");
    }
}
