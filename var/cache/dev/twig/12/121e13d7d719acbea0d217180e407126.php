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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/TL.svg */
class __TwigTemplate_4e60ed0c0eaec4bcbb9bd0cbea2d39e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/TL.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/TL.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#D80027\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#FFDA44\" d=\"M256 256 0 90.691v44.242L155.826 256 0 377.067v44.242z\"/><path d=\"M0 90.691v330.618L189.217 256z\"/><path fill=\"#FFF\" d=\"m44.184 213.36 24.912 23.577 30.121-16.41-14.723 30.98 24.911 23.575-34.012-4.43L60.67 301.63l-6.296-33.716-34.012-4.43 30.119-16.408z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/TL.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#D80027\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#FFDA44\" d=\"M256 256 0 90.691v44.242L155.826 256 0 377.067v44.242z\"/><path d=\"M0 90.691v330.618L189.217 256z\"/><path fill=\"#FFF\" d=\"m44.184 213.36 24.912 23.577 30.121-16.41-14.723 30.98 24.911 23.575-34.012-4.43L60.67 301.63l-6.296-33.716-34.012-4.43 30.119-16.408z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/TL.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\TL.svg");
    }
}
