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

/* validator/index.html.twig */
class __TwigTemplate_0ed47f027aa01d88118422943ebb951b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'Message' => [$this, 'block_Message'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('Message', $context, $blocks);
    }

    public function block_Message($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "validator/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "validator/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\validator\\index.html.twig");
    }
}
