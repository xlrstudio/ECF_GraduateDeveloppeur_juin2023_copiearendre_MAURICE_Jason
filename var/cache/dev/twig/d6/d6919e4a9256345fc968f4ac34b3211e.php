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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/CD.svg */
class __TwigTemplate_e3651ad5daf379d766e13d2a1eef3af2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CD.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CD.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#338AF3\" d=\"M0 0h512v341.3H0z\"/><path fill=\"#FFDA44\" d=\"M512 66.9V0H411.7L0 274.4v66.9h100.3z\"/><path fill=\"#D80027\" d=\"M512 0v40.1L60.2 341.3H0v-40.1L451.8 0z\"/><path fill=\"#FFDA44\" d=\"m93.6 31.2 16.3 50.4H163l-42.9 31.2 16.4 50.5-42.9-31.2-43 31.2L67 112.8 24.1 81.6h53.1z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CD.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#338AF3\" d=\"M0 0h512v341.3H0z\"/><path fill=\"#FFDA44\" d=\"M512 66.9V0H411.7L0 274.4v66.9h100.3z\"/><path fill=\"#D80027\" d=\"M512 0v40.1L60.2 341.3H0v-40.1L451.8 0z\"/><path fill=\"#FFDA44\" d=\"m93.6 31.2 16.3 50.4H163l-42.9 31.2 16.4 50.5-42.9-31.2-43 31.2L67 112.8 24.1 81.6h53.1z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CD.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\CD.svg");
    }
}
