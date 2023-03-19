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

/* components/_badges.html.twig */
class __TwigTemplate_8e999765bc36eca526ef21a33e7bbb21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_badges.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_badges.html.twig"));

        // line 1
        if ((isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "\t<div class=\"badges flex justify-start my-1 flex-wrap\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 4
                echo "\t\t\t<span class=\"text-xs inline-block mr-2 mb-2 py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded-full\">
\t\t\t\t<a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.index", ["slug" => twig_get_attribute($this->env, $this->source, $context["badge"], "slug", [], "any", false, false, false, 5)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "name", [], "any", false, false, false, 5), "html", null, true);
                echo "</a>
\t\t\t</span>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_badges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  55 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if badges %}
\t<div class=\"badges flex justify-start my-1 flex-wrap\">
\t\t{% for badge in badges %}
\t\t\t<span class=\"text-xs inline-block mr-2 mb-2 py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded-full\">
\t\t\t\t<a href=\"{{ path('category.index', {slug: badge.slug}) }}\">{{ badge.name }}</a>
\t\t\t</span>
\t\t{% endfor %}
\t</div>
{% endif %}
", "components/_badges.html.twig", "C:\\xampp\\apps\\symfony\\templates\\components\\_badges.html.twig");
    }
}
