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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/AG.svg */
class __TwigTemplate_63feca1db724e96898d31ca7ba843b2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AG.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AG.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path d=\"M0 0h513v342H0z\"/><path fill=\"#0072c6\" d=\"M88.8 136.5c-2.2 12.9-3.4 26.2-3.4 39.8 0 13.6 1.2 27 3.4 39.8L256 228.3l167.2-12.1c2.2-12.9 3.4-26.2 3.4-39.8s-1.2-27-3.4-39.8\"/><path fill=\"#FFF\" d=\"M423.2 219H88.8c15.8 69.8 84.7 122.3 167.2 122.3S407.4 288.8 423.2 219z\"/><path fill=\"#FFDA44\" d=\"M365.9 136.5H146.1l44.9-21.1-23.9-43.5 48.8 9.4L222 32l34 36.2L290 32l6.1 49.3 48.8-9.4-23.9 43.5z\"/><g fill=\"#ce1126\"><path d=\"M256.5 342 0 0v342z\"/><path d=\"M513 342V0L256 342z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AG.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path d=\"M0 0h513v342H0z\"/><path fill=\"#0072c6\" d=\"M88.8 136.5c-2.2 12.9-3.4 26.2-3.4 39.8 0 13.6 1.2 27 3.4 39.8L256 228.3l167.2-12.1c2.2-12.9 3.4-26.2 3.4-39.8s-1.2-27-3.4-39.8\"/><path fill=\"#FFF\" d=\"M423.2 219H88.8c15.8 69.8 84.7 122.3 167.2 122.3S407.4 288.8 423.2 219z\"/><path fill=\"#FFDA44\" d=\"M365.9 136.5H146.1l44.9-21.1-23.9-43.5 48.8 9.4L222 32l34 36.2L290 32l6.1 49.3 48.8-9.4-23.9 43.5z\"/><g fill=\"#ce1126\"><path d=\"M256.5 342 0 0v342z\"/><path d=\"M513 342V0L256 342z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AG.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\AG.svg");
    }
}
