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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/AW.svg */
class __TwigTemplate_64771c2add77bd9d5235e9749c9f5717 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AW.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AW.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 363 242\"><path fill=\"#338AF3\" d=\"M0 0h363v242H0z\"/><path fill=\"#FFF\" d=\"M57 96.9 14.7 78.2 57 59.6l18.6-42.2 18.6 42.2 42.3 18.6-42.3 18.7-18.6 42.2z\"/><path fill=\"#f30028\" d=\"m75.6 40.6 11.5 26.1 26.1 11.5-26.1 11.5-11.5 26.1-11.5-26.1L38 78.2l26.1-11.5z\"/><g fill=\"#FFDA44\"><path d=\"M0 152.2h363v15.7H0zM0 183.6h363v15.7H0z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AW.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 363 242\"><path fill=\"#338AF3\" d=\"M0 0h363v242H0z\"/><path fill=\"#FFF\" d=\"M57 96.9 14.7 78.2 57 59.6l18.6-42.2 18.6 42.2 42.3 18.6-42.3 18.7-18.6 42.2z\"/><path fill=\"#f30028\" d=\"m75.6 40.6 11.5 26.1 26.1 11.5-26.1 11.5-11.5 26.1-11.5-26.1L38 78.2l26.1-11.5z\"/><g fill=\"#FFDA44\"><path d=\"M0 152.2h363v15.7H0zM0 183.6h363v15.7H0z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AW.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\AW.svg");
    }
}
