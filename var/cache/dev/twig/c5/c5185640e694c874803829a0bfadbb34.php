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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/GU.svg */
class __TwigTemplate_ff297d3a4fbca74ddc0eca30bc4bf38b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GU.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GU.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#D80027\" d=\"M0 0h512v341.3H0z\"/><path fill=\"#0052B4\" d=\"M11.1 11.1h489.7v319.1H11.1z\"/><path fill=\"#7DBEF1\" d=\"M256 285.3s76.4-51.3 76.4-114.6S256 56 256 56s-76.4 51.3-76.4 114.6S256 285.3 256 285.3z\"/><path fill=\"#1C8AE6\" d=\"M179.8 180.7h152.6l-29.3 64.9h-95.2z\"/><path fill=\"#FFF042\" d=\"M192.3 205.9s40.5 38.2 51 38.2c12.4 0 12.6-18.4 25.5-25.5 20.2-11.1 51-12.7 51-12.7L297 248.7l-41 36.6-46.8-39.7-16.9-39.7z\"/><path fill=\"#259C7B\" d=\"m256 157.5-22.5 15.6 7.9-26.2-21.8-16.5 27.4-.5 9-25.9 9 25.9 27.4.5-21.8 16.6 7.9 26.2-22.5-15.7z\"/><path fill=\"#8E5715\" d=\"M249.7 144.6c-.9 9.2-1.5 18.4-1.7 27.6-.3 11.9.3 20.7 2 26 2.2 6.6 7.2 12.9 14.2 18.9 5.3 4.6 10.6 8.1 14.2 10.1 3.1 1.7 7 .6 8.7-2.4 1.7-3.1.6-7-2.4-8.7-4.3-2.5-8.4-5.4-12.2-8.7-5.4-4.6-9.1-9.2-10.4-13.3-1.1-3.4-1.6-11.3-1.4-21.7.2-8.9.8-17.8 1.7-26.6.4-3.5-2.2-6.6-5.7-7-3.6-.3-6.7 2.3-7 5.8z\"/><path fill=\"#FFF\" d=\"m217.8 170.7 25.5 38.2h-25.5v-38.2z\"/><path fill=\"none\" stroke=\"#D80027\" stroke-width=\"12\" stroke-miterlimit=\"10\" d=\"M256 285.3s76.4-51.3 76.4-114.6S256 56 256 56s-76.4 51.3-76.4 114.6S256 285.3 256 285.3z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GU.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#D80027\" d=\"M0 0h512v341.3H0z\"/><path fill=\"#0052B4\" d=\"M11.1 11.1h489.7v319.1H11.1z\"/><path fill=\"#7DBEF1\" d=\"M256 285.3s76.4-51.3 76.4-114.6S256 56 256 56s-76.4 51.3-76.4 114.6S256 285.3 256 285.3z\"/><path fill=\"#1C8AE6\" d=\"M179.8 180.7h152.6l-29.3 64.9h-95.2z\"/><path fill=\"#FFF042\" d=\"M192.3 205.9s40.5 38.2 51 38.2c12.4 0 12.6-18.4 25.5-25.5 20.2-11.1 51-12.7 51-12.7L297 248.7l-41 36.6-46.8-39.7-16.9-39.7z\"/><path fill=\"#259C7B\" d=\"m256 157.5-22.5 15.6 7.9-26.2-21.8-16.5 27.4-.5 9-25.9 9 25.9 27.4.5-21.8 16.6 7.9 26.2-22.5-15.7z\"/><path fill=\"#8E5715\" d=\"M249.7 144.6c-.9 9.2-1.5 18.4-1.7 27.6-.3 11.9.3 20.7 2 26 2.2 6.6 7.2 12.9 14.2 18.9 5.3 4.6 10.6 8.1 14.2 10.1 3.1 1.7 7 .6 8.7-2.4 1.7-3.1.6-7-2.4-8.7-4.3-2.5-8.4-5.4-12.2-8.7-5.4-4.6-9.1-9.2-10.4-13.3-1.1-3.4-1.6-11.3-1.4-21.7.2-8.9.8-17.8 1.7-26.6.4-3.5-2.2-6.6-5.7-7-3.6-.3-6.7 2.3-7 5.8z\"/><path fill=\"#FFF\" d=\"m217.8 170.7 25.5 38.2h-25.5v-38.2z\"/><path fill=\"none\" stroke=\"#D80027\" stroke-width=\"12\" stroke-miterlimit=\"10\" d=\"M256 285.3s76.4-51.3 76.4-114.6S256 56 256 56s-76.4 51.3-76.4 114.6S256 285.3 256 285.3z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GU.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\GU.svg");
    }
}
