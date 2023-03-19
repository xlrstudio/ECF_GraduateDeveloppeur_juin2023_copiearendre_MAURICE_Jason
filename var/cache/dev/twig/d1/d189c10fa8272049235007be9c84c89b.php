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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/MH.svg */
class __TwigTemplate_745d9eb7d98481f386edd4df575967a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MH.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MH.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#1E509C\" d=\"M0 0h513v342H0z\"/><path fill=\"#FFF\" d=\"M513 176.1V81.3L0 342l513-165.9z\"/><path fill=\"#F18D36\" d=\"M513 0v81.3L0 342 513 0z\"/><path fill=\"#FFF\" d=\"m126.7 99.3-7.8-54.1-7.7 54.1-20.8-23.7 10.7 31.6-31.5-10.7 23.6 20.8-54.1 7.7 54.1 7.7-23.6 20.8 31.5-10.7-10.7 31.6 20.8-23.7 7.7 54.1 7.8-54.1 20.7 23.7-10.6-31.6 31.5 10.7-23.6-20.8 54-7.7-54-7.7 23.6-20.8-31.5 10.7 10.6-31.6z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MH.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#1E509C\" d=\"M0 0h513v342H0z\"/><path fill=\"#FFF\" d=\"M513 176.1V81.3L0 342l513-165.9z\"/><path fill=\"#F18D36\" d=\"M513 0v81.3L0 342 513 0z\"/><path fill=\"#FFF\" d=\"m126.7 99.3-7.8-54.1-7.7 54.1-20.8-23.7 10.7 31.6-31.5-10.7 23.6 20.8-54.1 7.7 54.1 7.7-23.6 20.8 31.5-10.7-10.7 31.6 20.8-23.7 7.7 54.1 7.8-54.1 20.7 23.7-10.6-31.6 31.5 10.7-23.6-20.8 54-7.7-54-7.7 23.6-20.8-31.5 10.7 10.6-31.6z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MH.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\MH.svg");
    }
}
