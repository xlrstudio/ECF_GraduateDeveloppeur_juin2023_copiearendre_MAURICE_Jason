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

/* profile/index.html.twig */
class __TwigTemplate_b14e4e44b163761f570a811f136736ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">


";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello ProfileController!";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/xampp/apps/symfony/src/Controller/ProfileController.php", 0), "html", null, true);
        echo "\">src/Controller/ProfileController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/xampp/apps/symfony/templates/profile/index.html.twig", 0), "html", null, true);
        echo "\">templates/profile/index.html.twig</a></code></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  76 => 17,  65 => 8,  61 => 7,  54 => 5,  50 => 7,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\profile\\index.html.twig");
    }
}
