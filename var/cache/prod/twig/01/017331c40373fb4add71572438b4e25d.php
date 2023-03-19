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

/* admin/crud/field/country.html.twig */
class __TwigTemplate_512779007860f3296f16b2f12d6bb4b6 extends Template
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
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 4), "get", [0 => "showFlag"], "method", false, false, false, 4)) {
            // line 5
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "flagCode"], "method", false, false, false, 5))) {
                // line 6
                echo "        <img class=\"country-flag\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 6), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/flags/" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "flagCode"], "method", false, false, false, 6)) . ".svg"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 6), "defaultAssetPackageName", [], "any", false, false, false, 6)), "html", null, true);
                echo "\">
    ";
            }
        }
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 9), "get", [0 => "showName"], "method", false, false, false, 9)) {
            // line 10
            echo "    ";
            (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", true, true, false, 10) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 10)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 10), "html", null, true))) : (print ("")));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "admin/crud/field/country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  51 => 9,  42 => 6,  39 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/crud/field/country.html.twig", "C:\\xampp\\apps\\symfony\\templates\\admin\\crud\\field\\country.html.twig");
    }
}
