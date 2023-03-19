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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/WF.svg */
class __TwigTemplate_7c74a5db4fcc8554619176d2c1f14ced extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/WF.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/WF.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 150 100\"><path fill=\"#ED2939\" d=\"M0 0h150v100H0z\"/><path fill=\"#002395\" d=\"M0 0h20v44.33H0z\"/><path fill=\"#FFF\" d=\"M20 0h20v44.33H20z\"/><path fill=\"none\" stroke=\"#FFF\" stroke-width=\"3\" d=\"M0 44.33h62.75V0\"/><path fill=\"#FFF\" d=\"M108.08 43.29 87.96 23.17h40.25l-20.13 20.12zm-6.7 6.71L81.25 29.88v40.25L101.38 50zm6.7 6.71L87.96 76.83h40.25l-20.13-20.12zm6.71-6.71 20.13-20.13v40.25L114.79 50z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/WF.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 150 100\"><path fill=\"#ED2939\" d=\"M0 0h150v100H0z\"/><path fill=\"#002395\" d=\"M0 0h20v44.33H0z\"/><path fill=\"#FFF\" d=\"M20 0h20v44.33H20z\"/><path fill=\"none\" stroke=\"#FFF\" stroke-width=\"3\" d=\"M0 44.33h62.75V0\"/><path fill=\"#FFF\" d=\"M108.08 43.29 87.96 23.17h40.25l-20.13 20.12zm-6.7 6.71L81.25 29.88v40.25L101.38 50zm6.7 6.71L87.96 76.83h40.25l-20.13-20.12zm6.71-6.71 20.13-20.13v40.25L114.79 50z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/WF.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\WF.svg");
    }
}
