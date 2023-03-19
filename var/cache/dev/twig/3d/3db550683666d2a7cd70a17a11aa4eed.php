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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/KM.svg */
class __TwigTemplate_809ae1bea78e2840794e0fa177809134 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KM.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KM.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#0052B4\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#FFDA44\" d=\"M0 85.337h512v85.337H0z\"/><path fill=\"#FFF\" d=\"M0 170.663h512V256H0z\"/><path fill=\"#D80027\" d=\"M0 256h512v85.337H0z\"/><path fill=\"#6DA544\" d=\"M256 256.006 0 426.668V85.331z\"/><g fill=\"#FFF\"><path d=\"M68.638 256c0-24.865 17.476-45.638 40.812-50.734a52.059 52.059 0 0 0-11.13-1.208c-28.688 0-51.942 23.255-51.942 51.942s23.255 51.942 51.942 51.942c3.822 0 7.543-.425 11.13-1.208-23.337-5.096-40.812-25.869-40.812-50.734z\"/><path d=\"m108.877 211.478 2.762 8.503h8.94l-7.232 5.256 2.762 8.502-7.232-5.255-7.234 5.255 2.764-8.502-7.234-5.256h8.94zM108.877 233.739l2.762 8.503h8.94l-7.232 5.255 2.762 8.503-7.232-5.255-7.234 5.255 2.764-8.503-7.234-5.255h8.94zM108.877 256l2.762 8.503h8.94l-7.232 5.255 2.762 8.503-7.232-5.255-7.234 5.255 2.764-8.503-7.234-5.255h8.94zM108.877 278.261l2.762 8.502h8.94l-7.232 5.256 2.762 8.503-7.232-5.255-7.234 5.255 2.764-8.503-7.234-5.256h8.94z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KM.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#0052B4\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#FFDA44\" d=\"M0 85.337h512v85.337H0z\"/><path fill=\"#FFF\" d=\"M0 170.663h512V256H0z\"/><path fill=\"#D80027\" d=\"M0 256h512v85.337H0z\"/><path fill=\"#6DA544\" d=\"M256 256.006 0 426.668V85.331z\"/><g fill=\"#FFF\"><path d=\"M68.638 256c0-24.865 17.476-45.638 40.812-50.734a52.059 52.059 0 0 0-11.13-1.208c-28.688 0-51.942 23.255-51.942 51.942s23.255 51.942 51.942 51.942c3.822 0 7.543-.425 11.13-1.208-23.337-5.096-40.812-25.869-40.812-50.734z\"/><path d=\"m108.877 211.478 2.762 8.503h8.94l-7.232 5.256 2.762 8.502-7.232-5.255-7.234 5.255 2.764-8.502-7.234-5.256h8.94zM108.877 233.739l2.762 8.503h8.94l-7.232 5.255 2.762 8.503-7.232-5.255-7.234 5.255 2.764-8.503-7.234-5.255h8.94zM108.877 256l2.762 8.503h8.94l-7.232 5.255 2.762 8.503-7.232-5.255-7.234 5.255 2.764-8.503-7.234-5.255h8.94zM108.877 278.261l2.762 8.502h8.94l-7.232 5.256 2.762 8.503-7.232-5.255-7.234 5.255 2.764-8.503-7.234-5.256h8.94z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KM.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\KM.svg");
    }
}
