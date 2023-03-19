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

/* @Autocomplete/autocomplete_form_theme.html.twig */
class __TwigTemplate_d9447d41623392786451aa34eba63808 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ux_entity_autocomplete_widget' => [$this, 'block_ux_entity_autocomplete_widget'],
            'ux_entity_autocomplete_label' => [$this, 'block_ux_entity_autocomplete_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->displayBlock('ux_entity_autocomplete_widget', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('ux_entity_autocomplete_label', $context, $blocks);
    }

    // line 2
    public function block_ux_entity_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 3), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "attr", [], "any", false, false, false, 3), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 6
    public function block_ux_entity_autocomplete_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Autocomplete/autocomplete_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  63 => 7,  59 => 6,  52 => 3,  48 => 2,  44 => 6,  41 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Autocomplete/autocomplete_form_theme.html.twig", "C:\\xampp\\apps\\symfony\\vendor\\symfony\\ux-autocomplete\\templates\\autocomplete_form_theme.html.twig");
    }
}
