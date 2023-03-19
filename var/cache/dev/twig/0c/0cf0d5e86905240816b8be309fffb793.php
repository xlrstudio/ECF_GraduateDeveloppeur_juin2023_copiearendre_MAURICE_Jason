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

/* components/_alert.html.twig */
class __TwigTemplate_6545110d3d2d62c85667531422cc18d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_alert.html.twig"));

        // line 1
        echo "<div class=\"alert alert-";
        echo twig_escape_filter($this->env, ((array_key_exists("color", $context)) ? (_twig_default_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 1, $this->source); })()), "success")) : ("success")), "html", null, true);
        echo " bg-";
        echo twig_escape_filter($this->env, ((array_key_exists("color", $context)) ? (_twig_default_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 1, $this->source); })()), "green")) : ("green")), "html", null, true);
        echo "-100 rounded-lg py-5 px-6 mb-4 text-base text-";
        echo twig_escape_filter($this->env, ((array_key_exists("color", $context)) ? (_twig_default_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 1, $this->source); })()), "green")) : ("green")), "html", null, true);
        echo "-700 mb-3\" role=\"alert\">
    ";
        // line 2
        echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })());
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"alert alert-{{ color|default('success') }} bg-{{ color|default('green') }}-100 rounded-lg py-5 px-6 mb-4 text-base text-{{ color|default('green') }}-700 mb-3\" role=\"alert\">
    {{ message|raw }}
</div>
", "components/_alert.html.twig", "C:\\xampp\\apps\\symfony\\templates\\components\\_alert.html.twig");
    }
}
