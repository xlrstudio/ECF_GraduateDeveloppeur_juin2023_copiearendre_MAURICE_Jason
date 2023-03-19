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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/KP.svg */
class __TwigTemplate_186bd6f9fd1457b51d3439ec4f691bd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KP.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KP.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#91DC5A\" d=\"M0 85.331h512v341.337H0z\"/><path fill=\"#FFF\" d=\"M0 85.331h512v341.337H0z\"/><g fill=\"#0052B4\"><path d=\"M0 85.331h512v57.188H0zM0 369.48h512v57.177H0z\"/></g><path fill=\"#D80027\" d=\"M0 165.215h512v181.582H0z\"/><circle fill=\"#FFF\" cx=\"190.33\" cy=\"255.994\" r=\"65.668\"/><path fill=\"#D80027\" d=\"m190.332 190.332 14.734 45.346h47.757l-38.65 28.028 14.849 45.481-38.69-28.16-38.631 28.107 14.79-45.428-38.616-28.028h47.722z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KP.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#91DC5A\" d=\"M0 85.331h512v341.337H0z\"/><path fill=\"#FFF\" d=\"M0 85.331h512v341.337H0z\"/><g fill=\"#0052B4\"><path d=\"M0 85.331h512v57.188H0zM0 369.48h512v57.177H0z\"/></g><path fill=\"#D80027\" d=\"M0 165.215h512v181.582H0z\"/><circle fill=\"#FFF\" cx=\"190.33\" cy=\"255.994\" r=\"65.668\"/><path fill=\"#D80027\" d=\"m190.332 190.332 14.734 45.346h47.757l-38.65 28.028 14.849 45.481-38.69-28.16-38.631 28.107 14.79-45.428-38.616-28.028h47.722z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KP.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\KP.svg");
    }
}
