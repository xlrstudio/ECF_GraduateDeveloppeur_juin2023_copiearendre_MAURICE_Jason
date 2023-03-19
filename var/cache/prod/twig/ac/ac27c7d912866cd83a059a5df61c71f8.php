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

/* pet/add.html.twig */
class __TwigTemplate_eea3c2a8afed89fe7ca59827da85fc7d extends Template
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
        echo "
    ";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "
";
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        Mon formulaire
        ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        <input type=\"submit\" />
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "pet/add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  60 => 6,  55 => 4,  52 => 3,  48 => 2,  43 => 10,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pet/add.html.twig", "C:\\xampp\\apps\\symfony\\templates\\pet\\add.html.twig");
    }
}
