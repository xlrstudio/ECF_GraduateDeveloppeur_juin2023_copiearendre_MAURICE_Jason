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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/PT.svg */
class __TwigTemplate_43599d263bf20071e60ac6567bb450ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/PT.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/PT.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#D80027\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#6DA544\" d=\"M196.641 85.337v341.326H0V85.337z\"/><circle fill=\"#FFDA44\" cx=\"196.641\" cy=\"256\" r=\"64\"/><path fill=\"#D80027\" d=\"M160.638 224v40.001c0 19.882 16.118 36 36 36s36-16.118 36-36V224h-72z\"/><path fill=\"#FFF\" d=\"M196.638 276c-6.617 0-12-5.383-12-12v-16h24.001v16c-.001 6.616-5.385 12-12.001 12z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/PT.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#D80027\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#6DA544\" d=\"M196.641 85.337v341.326H0V85.337z\"/><circle fill=\"#FFDA44\" cx=\"196.641\" cy=\"256\" r=\"64\"/><path fill=\"#D80027\" d=\"M160.638 224v40.001c0 19.882 16.118 36 36 36s36-16.118 36-36V224h-72z\"/><path fill=\"#FFF\" d=\"M196.638 276c-6.617 0-12-5.383-12-12v-16h24.001v16c-.001 6.616-5.385 12-12.001 12z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/PT.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\PT.svg");
    }
}
