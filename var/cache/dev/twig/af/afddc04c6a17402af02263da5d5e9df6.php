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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/MP.svg */
class __TwigTemplate_7a7bda0317f4a33894d34c37bc582ac3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MP.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MP.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 750 500\"><path fill=\"#0071BC\" d=\"M0 0h750v500H0V0z\"/><g fill=\"#FFF\" stroke=\"#000\" stroke-width=\"1.9\"><circle cx=\"375\" cy=\"245\" r=\"225\" fill=\"#fff\"/><circle cx=\"375\" cy=\"245\" r=\"165\" fill=\"#0071BC\"/></g><g stroke=\"#000\"><path fill=\"#8C8A8C\" stroke-width=\"1.9\" d=\"M444.7 450c.7 11-7.8 20-18.8 20H323.6c-11 0-19.5-9-19-20l16.7-325c.6-11 10-20 21-20h61.4c11 0 20.5 9 21.2 20l19.8 325z\"/><path fill=\"#FFF\" stroke-width=\"2\" stroke-linejoin=\"round\" d=\"m373 114 30 93h97l-78 56 29 92-78-56-78 57 30-93-79-57h97l30-92z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MP.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 750 500\"><path fill=\"#0071BC\" d=\"M0 0h750v500H0V0z\"/><g fill=\"#FFF\" stroke=\"#000\" stroke-width=\"1.9\"><circle cx=\"375\" cy=\"245\" r=\"225\" fill=\"#fff\"/><circle cx=\"375\" cy=\"245\" r=\"165\" fill=\"#0071BC\"/></g><g stroke=\"#000\"><path fill=\"#8C8A8C\" stroke-width=\"1.9\" d=\"M444.7 450c.7 11-7.8 20-18.8 20H323.6c-11 0-19.5-9-19-20l16.7-325c.6-11 10-20 21-20h61.4c11 0 20.5 9 21.2 20l19.8 325z\"/><path fill=\"#FFF\" stroke-width=\"2\" stroke-linejoin=\"round\" d=\"m373 114 30 93h97l-78 56 29 92-78-56-78 57 30-93-79-57h97l30-92z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MP.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\MP.svg");
    }
}
