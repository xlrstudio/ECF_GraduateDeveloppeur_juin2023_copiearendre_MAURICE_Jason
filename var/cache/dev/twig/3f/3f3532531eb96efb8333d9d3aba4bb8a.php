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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/CW.svg */
class __TwigTemplate_ba10e4f2fd694be2d83efeb8bdc4753b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CW.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CW.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#002b7f\" d=\"M0 0h513v342H0z\"/><path fill=\"#f9e814\" d=\"M0 233.5h513v51H0z\"/><g fill=\"#FFF\"><path d=\"m168.7 86.5 12.9 39.8h41.8l-33.8 24.5 12.9 39.7-33.8-24.5-33.8 24.5 12.9-39.7-33.8-24.5h41.8zM85.4 32.5l7.8 23.9h25L97.9 71.1l7.8 23.8-20.3-14.7-20.3 14.7 7.8-23.8-20.3-14.7h25.1z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CW.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#002b7f\" d=\"M0 0h513v342H0z\"/><path fill=\"#f9e814\" d=\"M0 233.5h513v51H0z\"/><g fill=\"#FFF\"><path d=\"m168.7 86.5 12.9 39.8h41.8l-33.8 24.5 12.9 39.7-33.8-24.5-33.8 24.5 12.9-39.7-33.8-24.5h41.8zM85.4 32.5l7.8 23.9h25L97.9 71.1l7.8 23.8-20.3-14.7-20.3 14.7 7.8-23.8-20.3-14.7h25.1z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CW.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\CW.svg");
    }
}
