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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/JM.svg */
class __TwigTemplate_a84bf71eed0c70a0a92768f31787907e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/JM.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/JM.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#6DA544\" d=\"M0 85.337h512v341.326H0z\"/><path d=\"M215.864 256.006 0 399.911V112.089zM512 112.089v287.822L296.136 256.006z\"/><path fill=\"#0052B4\" d=\"M512 112.089 296.136 256.006 512 399.911v26.757h-40.125L256 282.752 40.125 426.668H0v-26.757l215.864-143.905L0 112.089V85.331h40.125L256 229.248 471.875 85.331H512z\"/><path fill=\"#FFDA44\" d=\"M512 112.089 296.136 256.006 512 399.911v26.757h-40.125L256 282.752 40.125 426.668H0v-26.757l215.864-143.905L0 112.089V85.331h40.125L256 229.248 471.875 85.331H512z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/JM.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#6DA544\" d=\"M0 85.337h512v341.326H0z\"/><path d=\"M215.864 256.006 0 399.911V112.089zM512 112.089v287.822L296.136 256.006z\"/><path fill=\"#0052B4\" d=\"M512 112.089 296.136 256.006 512 399.911v26.757h-40.125L256 282.752 40.125 426.668H0v-26.757l215.864-143.905L0 112.089V85.331h40.125L256 229.248 471.875 85.331H512z\"/><path fill=\"#FFDA44\" d=\"M512 112.089 296.136 256.006 512 399.911v26.757h-40.125L256 282.752 40.125 426.668H0v-26.757l215.864-143.905L0 112.089V85.331h40.125L256 229.248 471.875 85.331H512z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/JM.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\JM.svg");
    }
}
