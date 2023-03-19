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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/ZA.svg */
class __TwigTemplate_7f1cfc44fe1de9941062ace2c92a75fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/ZA.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/ZA.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#FFF\" d=\"M0 85.337h512v341.326H0z\"/><path d=\"M114.024 256.001 0 141.926v228.17z\"/><path fill=\"#ffb915\" d=\"M161.192 256 0 94.7v47.226l114.024 114.075L0 370.096v47.138z\"/><path fill=\"#007847\" d=\"M509.833 289.391c.058-.44.804-.878 2.167-1.318v-65.464H222.602L85.33 85.337H0V94.7L161.192 256 0 417.234v9.429h85.33l137.272-137.272h287.231z\"/><path fill=\"#000c8a\" d=\"M503.181 322.783H236.433l-103.881 103.88H512v-103.88z\"/><path fill=\"#e1392d\" d=\"M503.181 189.217H512V85.337H132.552l103.881 103.88z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/ZA.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#FFF\" d=\"M0 85.337h512v341.326H0z\"/><path d=\"M114.024 256.001 0 141.926v228.17z\"/><path fill=\"#ffb915\" d=\"M161.192 256 0 94.7v47.226l114.024 114.075L0 370.096v47.138z\"/><path fill=\"#007847\" d=\"M509.833 289.391c.058-.44.804-.878 2.167-1.318v-65.464H222.602L85.33 85.337H0V94.7L161.192 256 0 417.234v9.429h85.33l137.272-137.272h287.231z\"/><path fill=\"#000c8a\" d=\"M503.181 322.783H236.433l-103.881 103.88H512v-103.88z\"/><path fill=\"#e1392d\" d=\"M503.181 189.217H512V85.337H132.552l103.881 103.88z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/ZA.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\ZA.svg");
    }
}
