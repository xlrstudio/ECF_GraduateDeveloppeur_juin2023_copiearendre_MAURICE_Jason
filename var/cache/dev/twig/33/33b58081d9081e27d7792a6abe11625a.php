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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/CU.svg */
class __TwigTemplate_1dbd8a935cbdd88aafd35e44c15444af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CU.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CU.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#FF9811\" d=\"M0-40.8v422.9-211.4z\"/><path fill=\"#FFF\" d=\"M0 0h512v341.3H0z\"/><g fill=\"#0052B4\"><path d=\"M0 0h512v68.3H0zM0 136.5h512v68.3H0zM0 273.1h512v68.3H0z\"/></g><path fill=\"#D80027\" d=\"M256 170.7 0 341.3V0z\"/><path fill=\"#FFF\" d=\"m86.5 111.4 12.7 39.2h41.3l-33.4 24.2 12.8 39.3-33.4-24.2-33.4 24.2 12.8-39.3-33.4-24.2h41.2z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CU.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#FF9811\" d=\"M0-40.8v422.9-211.4z\"/><path fill=\"#FFF\" d=\"M0 0h512v341.3H0z\"/><g fill=\"#0052B4\"><path d=\"M0 0h512v68.3H0zM0 136.5h512v68.3H0zM0 273.1h512v68.3H0z\"/></g><path fill=\"#D80027\" d=\"M256 170.7 0 341.3V0z\"/><path fill=\"#FFF\" d=\"m86.5 111.4 12.7 39.2h41.3l-33.4 24.2 12.8 39.3-33.4-24.2-33.4 24.2 12.8-39.3-33.4-24.2h41.2z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CU.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\CU.svg");
    }
}
