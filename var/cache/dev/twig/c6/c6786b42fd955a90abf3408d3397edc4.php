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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/OM.svg */
class __TwigTemplate_f86014f7279f3cf5f7d7ce56caba8b1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/OM.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/OM.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#D80027\" d=\"M0 0h513v342H0z\"/><path fill=\"#FFF\" d=\"M138 0h377v114H138z\"/><path fill=\"#4A7C3A\" d=\"M138 230h377v114H138z\"/><g fill=\"none\" stroke=\"#FFF\" stroke-width=\"10\" stroke-miterlimit=\"2\"><path d=\"M40.3 35.2s37.1 48 50.8 54.5c13.7 6.5 17.1 5.7 17.1 5.7\"/><path d=\"M100 35.2S62.9 80.6 53.3 87.6c-9.6 7-18.7 7.8-18.7 7.8M51.7 65.3h37.9M70.7 35.2v30.1\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/OM.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#D80027\" d=\"M0 0h513v342H0z\"/><path fill=\"#FFF\" d=\"M138 0h377v114H138z\"/><path fill=\"#4A7C3A\" d=\"M138 230h377v114H138z\"/><g fill=\"none\" stroke=\"#FFF\" stroke-width=\"10\" stroke-miterlimit=\"2\"><path d=\"M40.3 35.2s37.1 48 50.8 54.5c13.7 6.5 17.1 5.7 17.1 5.7\"/><path d=\"M100 35.2S62.9 80.6 53.3 87.6c-9.6 7-18.7 7.8-18.7 7.8M51.7 65.3h37.9M70.7 35.2v30.1\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/OM.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\OM.svg");
    }
}
