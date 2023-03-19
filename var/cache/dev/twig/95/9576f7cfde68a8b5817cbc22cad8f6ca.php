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

/* components/_pagination.html.twig */
class __TwigTemplate_f9597c73ad508a633ddf18b4baa530c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_pagination.html.twig"));

        // line 2
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            echo "\t<div class=\"inline-block\">
\t\t<div class=\"flex items-baseline flex-row border border-gray-400 rounded-sm w-auto\">
\t\t\t";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 5, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 5, $this->source); })())))) {
                // line 6
                echo "\t\t\t\t<span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400 font-bold\">
\t\t\t\t\t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 7, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 7, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 7, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 7, $this->source); })())])), "html", null, true);
                echo "\">&lt;&lt;</a>
\t\t\t\t</span>
\t\t\t";
            }
            // line 10
            echo "
\t\t\t";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "\t\t\t\t<span class=\"bg-white text-blue-600 px-3 text-lg py-2 border-r border-gray-400\">
\t\t\t\t\t<a rel=\"prev\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 13, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 13, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 13, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 13, $this->source); })())])), "html", null, true);
                echo "\">&lt;</a>
\t\t\t\t</span>
\t\t\t";
            }
            // line 16
            echo "
\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "\t\t\t\t";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 18, $this->source); })()))) {
                    // line 19
                    echo "\t\t\t\t\t<span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r  border-gray-400\">
\t\t\t\t\t\t<a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 20, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 20, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 20, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
\t\t\t\t\t</span>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t<span class=\"bg-blue-600 text-white px-3 py-2 text-lg font-bold underline underline-offset-2\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
\t\t\t";
            // line 27
            if (array_key_exists("next", $context)) {
                // line 28
                echo "\t\t\t\t<span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400\">
\t\t\t\t\t<a rel=\"next\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 29, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 29, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 29, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 29, $this->source); })())])), "html", null, true);
                echo "\">&gt;</a>
\t\t\t\t</span>
\t\t\t";
            }
            // line 32
            echo "
\t\t\t";
            // line 33
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 33, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 33, $this->source); })())))) {
                // line 34
                echo "\t\t\t\t<span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-gray-400 font-bold\">
\t\t\t\t\t<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 35, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 35, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 35, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 35, $this->source); })())])), "html", null, true);
                echo "\">&gt;&gt;</a>
\t\t\t\t</span>
\t\t\t";
            }
            // line 38
            echo "\t\t</div>
\t</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  129 => 35,  126 => 34,  124 => 33,  121 => 32,  115 => 29,  112 => 28,  110 => 27,  107 => 26,  101 => 25,  95 => 23,  87 => 20,  84 => 19,  81 => 18,  77 => 17,  74 => 16,  68 => 13,  65 => 12,  63 => 11,  60 => 10,  54 => 7,  51 => 6,  49 => 5,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# tailwindcss Sliding pagination control implementation #}
{% if pageCount > 1 %}
\t<div class=\"inline-block\">
\t\t<div class=\"flex items-baseline flex-row border border-gray-400 rounded-sm w-auto\">
\t\t\t{% if first is defined and current != first %}
\t\t\t\t<span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400 font-bold\">
\t\t\t\t\t<a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
\t\t\t\t</span>
\t\t\t{% endif %}

\t\t\t{% if previous is defined %}
\t\t\t\t<span class=\"bg-white text-blue-600 px-3 text-lg py-2 border-r border-gray-400\">
\t\t\t\t\t<a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
\t\t\t\t</span>
\t\t\t{% endif %}

\t\t\t{% for page in pagesInRange %}
\t\t\t\t{% if page != current %}
\t\t\t\t\t<span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r  border-gray-400\">
\t\t\t\t\t\t<a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
\t\t\t\t\t</span>
\t\t\t\t{% else %}
\t\t\t\t\t<span class=\"bg-blue-600 text-white px-3 py-2 text-lg font-bold underline underline-offset-2\">{{ page }}</span>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t\t{% if next is defined %}
\t\t\t\t<span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400\">
\t\t\t\t\t<a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
\t\t\t\t</span>
\t\t\t{% endif %}

\t\t\t{% if last is defined and current != last %}
\t\t\t\t<span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-gray-400 font-bold\">
\t\t\t\t\t<a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
\t\t\t\t</span>
\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endif %}
", "components/_pagination.html.twig", "C:\\xampp\\apps\\symfony\\templates\\components\\_pagination.html.twig");
    }
}
