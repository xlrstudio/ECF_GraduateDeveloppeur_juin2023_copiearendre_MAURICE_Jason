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

/* components/_search_data.html.twig */
class __TwigTemplate_c205316575b0b34357df9a0729b2a482 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_search_data.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_search_data.html.twig"));

        // line 1
        if ((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
            echo "
\t<div class=\"flex justify-center\">
\t\t<div class=\"mb-3 xl:w-96\">
\t\t\t<div class=\"input-group relative flex flex-wrap items-stretch w-full mb-4\">
\t\t\t\t";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "q", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"]]);
            echo "
\t\t\t\t";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "q", [], "any", false, false, false, 7), 'errors');
            echo "
\t\t\t</div>
\t\t\t<div class=\"flex flex-col justify-center\">
\t\t\t\t";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "categories", [], "any", false, false, false, 10), 'label', ["attr" => ["class" => "form-label inline-block mb-2 text-gray-700"], "label" => "Catégories"]);
            echo "
\t\t\t\t";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "categories", [], "any", false, false, false, 11), 'widget');
            echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<button class=\"btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center\" type=\"submit\" id=\"button-addon2\">
\t\t\t\t\t<span>Filtrer</span>
\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"search\" class=\"w-4\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
            echo "
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_search_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  67 => 11,  63 => 10,  57 => 7,  53 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if form %}
\t{{ form_start(form) }}
\t<div class=\"flex justify-center\">
\t\t<div class=\"mb-3 xl:w-96\">
\t\t\t<div class=\"input-group relative flex flex-wrap items-stretch w-full mb-4\">
\t\t\t\t{{ form_widget(form.q, {'attr': {'class': 'form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none'}}) }}
\t\t\t\t{{ form_errors(form.q) }}
\t\t\t</div>
\t\t\t<div class=\"flex flex-col justify-center\">
\t\t\t\t{{ form_label(form.categories, 'Catégories', {'attr': {'class': 'form-label inline-block mb-2 text-gray-700'}}) }}
\t\t\t\t{{ form_widget(form.categories) }}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<button class=\"btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center\" type=\"submit\" id=\"button-addon2\">
\t\t\t\t\t<span>Filtrer</span>
\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"search\" class=\"w-4\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\">
\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t{{ form_end(form) }}
{% endif %}
", "components/_search_data.html.twig", "C:\\xampp\\apps\\symfony\\templates\\components\\_search_data.html.twig");
    }
}
