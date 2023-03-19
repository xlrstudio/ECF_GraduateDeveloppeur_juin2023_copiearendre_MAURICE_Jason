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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/LI.svg */
class __TwigTemplate_7b73e73183aa0ef14b935fa6406179d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/LI.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/LI.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#D80027\" d=\"M0 0h513v342H0z\"/><path fill=\"#0052B4\" d=\"M0 0h513v171H0z\"/><path fill=\"#FFDA44\" d=\"M149.3 98.1c0-14-11.3-25.3-25.3-25.3-6.5 0-12.4 2.4-16.9 6.4V64.4h8.4V47.5h-8.4v-8.4H90.3v8.4h-8.4v16.9h8.4v14.9c-4.5-4-10.4-6.4-16.9-6.4-14 0-25.3 11.3-25.3 25.3 0 7.5 3.3 14.2 8.4 18.8v14.9h84.3V117c5.3-4.7 8.5-11.5 8.5-18.9z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/LI.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#D80027\" d=\"M0 0h513v342H0z\"/><path fill=\"#0052B4\" d=\"M0 0h513v171H0z\"/><path fill=\"#FFDA44\" d=\"M149.3 98.1c0-14-11.3-25.3-25.3-25.3-6.5 0-12.4 2.4-16.9 6.4V64.4h8.4V47.5h-8.4v-8.4H90.3v8.4h-8.4v16.9h8.4v14.9c-4.5-4-10.4-6.4-16.9-6.4-14 0-25.3 11.3-25.3 25.3 0 7.5 3.3 14.2 8.4 18.8v14.9h84.3V117c5.3-4.7 8.5-11.5 8.5-18.9z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/LI.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\LI.svg");
    }
}
