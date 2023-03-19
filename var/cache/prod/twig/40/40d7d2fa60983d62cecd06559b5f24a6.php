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

/* figure/edit.html.twig */
class __TwigTemplate_86ae697635d0b67dd2fd4c741c8de7fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<title>Edit Figure</title>

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Edit Figure</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "figure/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_figure_index");
        echo "\">back to list</a>

    ";
        // line 12
        echo twig_include($this->env, $context, "figure/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "figure/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  60 => 10,  55 => 8,  51 => 6,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "figure/edit.html.twig", "C:\\xampp\\apps\\symfony\\templates\\figure\\edit.html.twig");
    }
}
