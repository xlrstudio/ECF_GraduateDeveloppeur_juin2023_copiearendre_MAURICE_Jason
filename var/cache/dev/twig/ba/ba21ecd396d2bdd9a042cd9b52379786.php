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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/PF.svg */
class __TwigTemplate_1ffa85696af9c821764b0e76f176453f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/PF.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/PF.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#FFF\" d=\"M0 85.337h512v341.326H0z\"/><g fill=\"#D80027\"><path d=\"M0 85.337h512v113.775H0zM0 312.888h512v113.775H0z\"/></g><path fill=\"#FFDA44\" d=\"M293.991 256c0 20.982-17.01 33.243-37.992 33.243S218.008 276.982 218.008 256s17.01-37.992 37.992-37.992 37.991 17.01 37.991 37.992z\"/><path fill=\"#0052B4\" d=\"M293.991 256c0 20.982-17.01 37.992-37.992 37.992s-37.992-17.01-37.992-37.992\"/><g fill=\"#D80027\"><path d=\"M232.259 246.506h9.498v19h-9.498zM270.247 246.506h9.498v19h-9.498zM251.247 232.259h9.498v33.243h-9.498z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/PF.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#FFF\" d=\"M0 85.337h512v341.326H0z\"/><g fill=\"#D80027\"><path d=\"M0 85.337h512v113.775H0zM0 312.888h512v113.775H0z\"/></g><path fill=\"#FFDA44\" d=\"M293.991 256c0 20.982-17.01 33.243-37.992 33.243S218.008 276.982 218.008 256s17.01-37.992 37.992-37.992 37.991 17.01 37.991 37.992z\"/><path fill=\"#0052B4\" d=\"M293.991 256c0 20.982-17.01 37.992-37.992 37.992s-37.992-17.01-37.992-37.992\"/><g fill=\"#D80027\"><path d=\"M232.259 246.506h9.498v19h-9.498zM270.247 246.506h9.498v19h-9.498zM251.247 232.259h9.498v33.243h-9.498z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/PF.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\PF.svg");
    }
}
