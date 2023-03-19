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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/MV.svg */
class __TwigTemplate_950b25e7d0a94c1318e604a48ceec4ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MV.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MV.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#d01920\" d=\"M0 85.331h512v341.333H0z\"/><path fill=\"#017c3b\" d=\"M144.696 174.375h222.609v163.25H144.696z\"/><path fill=\"#FFF\" d=\"M283.484 304.226c-26.637 0-48.232-21.594-48.232-48.232s21.594-48.232 48.232-48.232c8.306 0 16.12 2.1 22.943 5.797-10.703-10.467-25.341-16.927-41.494-16.927-32.784 0-59.362 26.577-59.362 59.362s26.578 59.362 59.362 59.362c16.154 0 30.791-6.461 41.494-16.927-6.822 3.698-14.636 5.797-22.943 5.797z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MV.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#d01920\" d=\"M0 85.331h512v341.333H0z\"/><path fill=\"#017c3b\" d=\"M144.696 174.375h222.609v163.25H144.696z\"/><path fill=\"#FFF\" d=\"M283.484 304.226c-26.637 0-48.232-21.594-48.232-48.232s21.594-48.232 48.232-48.232c8.306 0 16.12 2.1 22.943 5.797-10.703-10.467-25.341-16.927-41.494-16.927-32.784 0-59.362 26.577-59.362 59.362s26.578 59.362 59.362 59.362c16.154 0 30.791-6.461 41.494-16.927-6.822 3.698-14.636 5.797-22.943 5.797z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MV.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\MV.svg");
    }
}
