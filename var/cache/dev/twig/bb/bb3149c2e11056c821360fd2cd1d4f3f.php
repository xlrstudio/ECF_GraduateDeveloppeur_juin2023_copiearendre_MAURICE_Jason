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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/TV.svg */
class __TwigTemplate_79299c03d8560662c2514f4f342eaaa6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/TV.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/TV.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 900 600\"><path fill=\"#0052B4\" d=\"M0 0h900v600H0z\"/><path fill=\"#00B2EE\" d=\"M0 300h450V0h450v600H0V300z\"/><path fill=\"#FFDA44\" d=\"m345.3 480.9 29.4 90.6-77.1-56H393l-77.1 56 29.4-90.6zM706.4 340l29.4 90.6-77.1-56H754l-77.1 56 29.5-90.6zM812.8 261.5l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM812.8 37.4l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6z\"/><path fill=\"#FFF\" d=\"M449.9 0v206.3h-81l81 54V300h-39.7l-129-85.9V300H168.7v-85.9L39.7 300H0v-39.7l81-54H0V93.8h81L0 39.9V0h39.7l129 85.9V0h112.5v85.9L410.2 0z\"/><path fill=\"#D80027\" d=\"M253.1 0h-56.3v122H0v56.2h196.8V300h56.3V178.2h196.8V122H253.1z\"/><path fill=\"#2E52B2\" d=\"M449.9 39.9v53.9h-81z\"/><path fill=\"#D80027\" d=\"M0 300v-19.3l109.9-74.4h39.7L12.8 300zM12.8.1l136.8 93.7h-39.7L0 19.4V.1zM449.9.2v19.3L340 93.8h-39.7L437.1.2zM437.1 300l-136.8-93.7H340l109.9 74.4V300z\"/><path fill=\"#FFDA44\" d=\"m719.9 131.6 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM584 187.7l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM614 430.6l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM488 332l29.4 90.6-77.1-56h95.3l-77.1 56L488 332zM488 464l29.4 90.6-77.1-56h95.3l-77.1 56L488 464z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/TV.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 900 600\"><path fill=\"#0052B4\" d=\"M0 0h900v600H0z\"/><path fill=\"#00B2EE\" d=\"M0 300h450V0h450v600H0V300z\"/><path fill=\"#FFDA44\" d=\"m345.3 480.9 29.4 90.6-77.1-56H393l-77.1 56 29.4-90.6zM706.4 340l29.4 90.6-77.1-56H754l-77.1 56 29.5-90.6zM812.8 261.5l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM812.8 37.4l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6z\"/><path fill=\"#FFF\" d=\"M449.9 0v206.3h-81l81 54V300h-39.7l-129-85.9V300H168.7v-85.9L39.7 300H0v-39.7l81-54H0V93.8h81L0 39.9V0h39.7l129 85.9V0h112.5v85.9L410.2 0z\"/><path fill=\"#D80027\" d=\"M253.1 0h-56.3v122H0v56.2h196.8V300h56.3V178.2h196.8V122H253.1z\"/><path fill=\"#2E52B2\" d=\"M449.9 39.9v53.9h-81z\"/><path fill=\"#D80027\" d=\"M0 300v-19.3l109.9-74.4h39.7L12.8 300zM12.8.1l136.8 93.7h-39.7L0 19.4V.1zM449.9.2v19.3L340 93.8h-39.7L437.1.2zM437.1 300l-136.8-93.7H340l109.9 74.4V300z\"/><path fill=\"#FFDA44\" d=\"m719.9 131.6 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM584 187.7l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM614 430.6l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM488 332l29.4 90.6-77.1-56h95.3l-77.1 56L488 332zM488 464l29.4 90.6-77.1-56h95.3l-77.1 56L488 464z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/TV.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\TV.svg");
    }
}
