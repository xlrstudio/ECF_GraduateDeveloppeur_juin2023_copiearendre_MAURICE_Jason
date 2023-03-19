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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/BQ.svg */
class __TwigTemplate_c699aefd8e18190b32b9d309ddf3c4c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BQ.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BQ.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#FFF\" d=\"M0 0h512v341.3H0z\"/><path fill=\"#012a87\" d=\"M0 341.3h512V0z\"/><path fill=\"#f9d90f\" d=\"M250.4 0H0v166.9z\"/><path fill=\"#dc171d\" d=\"m140.4 118.3 12.2 21.2h24.5l-12.3 21.1 12.3 21.2h-24.5L140.4 203l-12.2-21.2h-24.5l12.3-21.2-12.3-21.1h24.5z\"/><circle fill=\"none\" stroke=\"#000\" stroke-width=\"9\" stroke-miterlimit=\"10\" cx=\"140.4\" cy=\"160.6\" r=\"57.7\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BQ.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#FFF\" d=\"M0 0h512v341.3H0z\"/><path fill=\"#012a87\" d=\"M0 341.3h512V0z\"/><path fill=\"#f9d90f\" d=\"M250.4 0H0v166.9z\"/><path fill=\"#dc171d\" d=\"m140.4 118.3 12.2 21.2h24.5l-12.3 21.1 12.3 21.2h-24.5L140.4 203l-12.2-21.2h-24.5l12.3-21.2-12.3-21.1h24.5z\"/><circle fill=\"none\" stroke=\"#000\" stroke-width=\"9\" stroke-miterlimit=\"10\" cx=\"140.4\" cy=\"160.6\" r=\"57.7\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BQ.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\BQ.svg");
    }
}
