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

/* components/_dropdown.html.twig */
class __TwigTemplate_8a98a2508940efc60e3ad69f3406f404 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_dropdown.html.twig"));

        // line 1
        if ((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "\t<div class=\"flex justify-end\">
\t\t<div>
\t\t\t<div class=\"dropdown relative\">
\t\t\t\t<a class=\"dropdown-toggle px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap\" href=\"#\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Catégories<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"caret-down\" class=\"w-2 ml-2\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 320 512\">
\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none\" aria-labelledby=\"dropdownMenuButton2\">
\t\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 11
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.index", ["slug" => twig_get_attribute($this->env, $this->source, $context["option"], "slug", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 12)), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  62 => 12,  59 => 11,  55 => 10,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if options %}
\t<div class=\"flex justify-end\">
\t\t<div>
\t\t\t<div class=\"dropdown relative\">
\t\t\t\t<a class=\"dropdown-toggle px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap\" href=\"#\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Catégories<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"caret-down\" class=\"w-2 ml-2\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 320 512\">
\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none\" aria-labelledby=\"dropdownMenuButton2\">
\t\t\t\t\t{% for option in options %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"{{ path('category.index', {slug: option.slug}) }}\">{{ option.name|capitalize }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

{% endif %}
", "components/_dropdown.html.twig", "C:\\xampp\\apps\\symfony\\templates\\components\\_dropdown.html.twig");
    }
}
