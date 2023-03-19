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

/* pages/recipe/show.html.twig */
class __TwigTemplate_2c30cc7f76f7db8bdd18b0d1b93b7186 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/recipe/show.html.twig", 1);
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

        // line 4
        echo "\tSymRecipe -
\t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"container\">

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
\t\t<h1 class=\"mt-4\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
\t\t<div class=\"recipe__image\">
\t\t\t<img style=\"max-width: 500px;\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 19, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t</div>

\t\t<p>La moyenne de cette recette est de
\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 23, $this->source); })()), "average", [], "any", false, false, false, 23), 2, ".", ","), "html", null, true);
        echo "
\t\t\t/5</p>

\t\t<div>
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 28, $this->source); })()), "createdAt", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 32, $this->source); })()), "time", [], "any", false, false, false, 32)) {
            // line 33
            echo "\t\t\t\t<p>Temps (en minute) :
\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->minutesToHours(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 34, $this->source); })()), "time", [], "any", false, false, false, 34)), "html", null, true);
            echo "</p>
\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t<p>Temps non renseigné</p>
\t\t\t";
        }
        // line 38
        echo "\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 41, $this->source); })()), "time", [], "any", false, false, false, 41)) {
            // line 42
            echo "\t\t\t\t<p>Difficulté :
\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 43, $this->source); })()), "difficulty", [], "any", false, false, false, 43), "html", null, true);
            echo "/5</p>
\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t<p>Difficulté non renseigné</p>
\t\t\t";
        }
        // line 47
        echo "\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 50, $this->source); })()), "time", [], "any", false, false, false, 50)) {
            // line 51
            echo "\t\t\t\t<p>Pour
\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 52, $this->source); })()), "nbPeople", [], "any", false, false, false, 52), "html", null, true);
            echo "
\t\t\t\t\tpersonnes</p>
\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t<p>Nombre de personnes non renseigné</p>
\t\t\t";
        }
        // line 57
        echo "\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60)) {
            // line 61
            echo "\t\t\t\t<p>Prix (en €) :
\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 62, $this->source); })()), "price", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t<p>Prix non renseigné</p>
\t\t\t";
        }
        // line 66
        echo "\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 69
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69);
        echo "
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t<p class=\"mt-4\">Ingrédients</p>
\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 74, $this->source); })()), "ingredients", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 75
            echo "\t\t\t\t<span class=\"badge bg-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo "</span>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t</div>

\t\t<div class=\"mark\">
\t\t\t";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form');
        echo "
\t\t\t</div>

\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/recipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 80,  242 => 77,  233 => 75,  229 => 74,  221 => 69,  216 => 66,  212 => 64,  207 => 62,  204 => 61,  202 => 60,  197 => 57,  193 => 55,  187 => 52,  184 => 51,  182 => 50,  177 => 47,  173 => 45,  168 => 43,  165 => 42,  163 => 41,  158 => 38,  154 => 36,  149 => 34,  146 => 33,  144 => 32,  137 => 28,  129 => 23,  122 => 19,  117 => 17,  114 => 16,  105 => 13,  102 => 12,  98 => 11,  94 => 9,  84 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\tSymRecipe -
\t{{ recipe.name }}
{% endblock %}

{% block body %}
\t<div class=\"container\">

\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t<h1 class=\"mt-4\">{{ recipe.name }}</h1>
\t\t<div class=\"recipe__image\">
\t\t\t<img style=\"max-width: 500px;\" src=\"{{ vich_uploader_asset(recipe, 'imageFile') }}\">
\t\t</div>

\t\t<p>La moyenne de cette recette est de
\t\t\t{{ recipe.average|number_format(2, '.', ',') }}
\t\t\t/5</p>

\t\t<div>
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t{{ recipe.createdAt|date('d/m/Y') }}</span>
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{% if recipe.time %}
\t\t\t\t<p>Temps (en minute) :
\t\t\t\t\t{{ recipe.time|min_to_hour }}</p>
\t\t\t{% else %}
\t\t\t\t<p>Temps non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{% if recipe.time %}
\t\t\t\t<p>Difficulté :
\t\t\t\t\t{{ recipe.difficulty }}/5</p>
\t\t\t{% else %}
\t\t\t\t<p>Difficulté non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{% if recipe.time %}
\t\t\t\t<p>Pour
\t\t\t\t\t{{ recipe.nbPeople }}
\t\t\t\t\tpersonnes</p>
\t\t\t{% else %}
\t\t\t\t<p>Nombre de personnes non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{% if recipe.price %}
\t\t\t\t<p>Prix (en €) :
\t\t\t\t\t{{ recipe.price }}</p>
\t\t\t{% else %}
\t\t\t\t<p>Prix non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{{ recipe.description|raw }}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t<p class=\"mt-4\">Ingrédients</p>
\t\t\t{% for ingredient in recipe.ingredients %}
\t\t\t\t<span class=\"badge bg-primary\">{{ ingredient.name }}</span>
\t\t\t{% endfor %}
\t\t</div>

\t\t<div class=\"mark\">
\t\t\t{{ form(form) }}
\t\t\t</div>

\t\t</div>
\t{% endblock %}
", "pages/recipe/show.html.twig", "C:\\xampp\\apps\\symfony\\templates\\pages\\recipe\\show.html.twig");
    }
}
