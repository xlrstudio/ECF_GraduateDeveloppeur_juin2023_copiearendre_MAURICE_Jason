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

/* recipe/community.html.twig */
class __TwigTemplate_6d352299ef2d756f2579958474193b24 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "recipe/community.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "SymRecipe - Recettes de la communauté
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container mt-4\">
\t\t";
        // line 8
        if ( !(twig_get_attribute($this->env, $this->source, ($context["recipes"] ?? null), "items", [], "any", false, false, false, 8) === [])) {
            // line 9
            echo "\t\t\t<h1>Recettes de la communuaté</h1>

\t\t\t<div class=\"d-flex justify-content-center flex-wrap\">
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 13
                echo "\t\t\t\t\t<div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t<div class=\"card-header\">Recette n°";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 14), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.show", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 19
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 19), 0, 100) . "..."), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t</div>


\t\t";
        } else {
            // line 27
            echo "\t\t\t<h4>Il n'y a pas de rcettes</h4>
\t\t";
        }
        // line 29
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "recipe/community.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  105 => 27,  99 => 23,  89 => 19,  82 => 17,  76 => 14,  73 => 13,  69 => 12,  64 => 9,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "recipe/community.html.twig", "C:\\xampp\\apps\\symfony\\templates\\recipe\\community.html.twig");
    }
}
