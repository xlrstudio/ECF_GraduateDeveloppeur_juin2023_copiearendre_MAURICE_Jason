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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/MN.svg */
class __TwigTemplate_3ef7260b56db736e4f1c7ea76bdac9da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MN.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MN.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#095FAD\" d=\"M0 0h513v342H0z\"/><g fill=\"#BE1229\"><path d=\"M342 0h171v342H342zM0 0h171v342H0z\"/></g><g fill=\"#FFDA44\"><path d=\"M108.3 166.3h14.8v74.2h-14.8zM48.9 166.3h14.8v74.2H48.9z\"/><circle cx=\"86\" cy=\"203.4\" r=\"14.8\"/><path d=\"M71.2 225.7h29.7v14.8H71.2zM71.2 166.3h29.7v14.8H71.2z\"/><circle cx=\"86\" cy=\"144\" r=\"14.8\"/><path d=\"M76.3 123.9h19.5L86 108.3z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MN.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#095FAD\" d=\"M0 0h513v342H0z\"/><g fill=\"#BE1229\"><path d=\"M342 0h171v342H342zM0 0h171v342H0z\"/></g><g fill=\"#FFDA44\"><path d=\"M108.3 166.3h14.8v74.2h-14.8zM48.9 166.3h14.8v74.2H48.9z\"/><circle cx=\"86\" cy=\"203.4\" r=\"14.8\"/><path d=\"M71.2 225.7h29.7v14.8H71.2zM71.2 166.3h29.7v14.8H71.2z\"/><circle cx=\"86\" cy=\"144\" r=\"14.8\"/><path d=\"M76.3 123.9h19.5L86 108.3z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MN.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\MN.svg");
    }
}
