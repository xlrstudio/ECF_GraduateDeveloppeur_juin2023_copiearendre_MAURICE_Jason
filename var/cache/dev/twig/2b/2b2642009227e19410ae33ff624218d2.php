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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/MY.svg */
class __TwigTemplate_46d47fd6c8c8c26d69c885aa917f99e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MY.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MY.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#FFF\" d=\"M0 0h513v342H0z\"/><g fill=\"#c00\"><path d=\"M0 0h513v24.4H0zM0 48.9h513v24.4H0zM0 97.7h513v24.4H0zM0 146.6h513V171H0zM0 195.4h513v24.4H0zM0 244.3h513v24.4H0zM0 293.1h513v24.4H0z\"/></g><path fill=\"#006\" d=\"M0 0h256.5v195.4H0z\"/><path d=\"M153.3 42.1C122.6 30.7 88.5 46.3 77.1 77s4.2 64.8 34.9 76.2c13.3 5 28 5 41.4 0-30.7 24.5-75.4 19.6-100-11.1s-19.6-75.4 11.1-100c26-20.7 62.9-20.7 88.8 0zm26.7 75-20.6 23.3 5.4-30.6-31-1.6 27.3-14.9L143 68l28.6 12 8.4-29.9 8.4 29.9L217 68l-18 25.4 27.3 14.9-31 1.6 5.4 30.6-20.7-23.4z\" fill=\"#fc0\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MY.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#FFF\" d=\"M0 0h513v342H0z\"/><g fill=\"#c00\"><path d=\"M0 0h513v24.4H0zM0 48.9h513v24.4H0zM0 97.7h513v24.4H0zM0 146.6h513V171H0zM0 195.4h513v24.4H0zM0 244.3h513v24.4H0zM0 293.1h513v24.4H0z\"/></g><path fill=\"#006\" d=\"M0 0h256.5v195.4H0z\"/><path d=\"M153.3 42.1C122.6 30.7 88.5 46.3 77.1 77s4.2 64.8 34.9 76.2c13.3 5 28 5 41.4 0-30.7 24.5-75.4 19.6-100-11.1s-19.6-75.4 11.1-100c26-20.7 62.9-20.7 88.8 0zm26.7 75-20.6 23.3 5.4-30.6-31-1.6 27.3-14.9L143 68l28.6 12 8.4-29.9 8.4 29.9L217 68l-18 25.4 27.3 14.9-31 1.6 5.4 30.6-20.7-23.4z\" fill=\"#fc0\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MY.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\MY.svg");
    }
}
