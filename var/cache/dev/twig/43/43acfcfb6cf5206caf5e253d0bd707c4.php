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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/MA.svg */
class __TwigTemplate_c5ee96a856f1b562720d8d9de7a09578 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MA.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MA.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#D80027\" d=\"M0 85.337v341.326h512V85.337z\"/><path fill=\"#20661b\" d=\"M352 226.484h-73.337L256 156.738l-22.663 69.748H160l59.331 43.107-22.663 69.749L256 296.232l59.332 43.107-22.663-69.749L352 226.484zm-116.063 37.711 7.663-23.585h24.8l7.663 23.585v.001L256 278.772l-20.063-14.577zm27.873-37.711h-15.619L256 202.447l7.81 24.037zm24.269 28.982-4.827-14.856h25.274l-20.447 14.856zm-59.331-14.856-4.827 14.856-20.447-14.856h25.274zm-5.211 61.748 7.81-24.036 12.636 9.181-20.446 14.855zm44.479-14.856 12.636-9.181 7.81 24.036-20.446-14.855z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MA.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#D80027\" d=\"M0 85.337v341.326h512V85.337z\"/><path fill=\"#20661b\" d=\"M352 226.484h-73.337L256 156.738l-22.663 69.748H160l59.331 43.107-22.663 69.749L256 296.232l59.332 43.107-22.663-69.749L352 226.484zm-116.063 37.711 7.663-23.585h24.8l7.663 23.585v.001L256 278.772l-20.063-14.577zm27.873-37.711h-15.619L256 202.447l7.81 24.037zm24.269 28.982-4.827-14.856h25.274l-20.447 14.856zm-59.331-14.856-4.827 14.856-20.447-14.856h25.274zm-5.211 61.748 7.81-24.036 12.636 9.181-20.446 14.855zm44.479-14.856 12.636-9.181 7.81 24.036-20.446-14.855z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MA.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\MA.svg");
    }
}
