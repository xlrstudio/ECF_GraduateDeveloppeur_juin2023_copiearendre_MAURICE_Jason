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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/BZ.svg */
class __TwigTemplate_4b6524786fd05adcd1ff48ff726b627f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BZ.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BZ.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#003e87\" d=\"M0 0h512v341.3H0z\"/><circle fill=\"#FFF\" cx=\"260.9\" cy=\"170.9\" r=\"118.9\"/><circle fill=\"none\" stroke=\"#6DA544\" stroke-width=\"18\" stroke-miterlimit=\"10\" cx=\"261.9\" cy=\"173.1\" r=\"94.5\"/><g stroke=\"#000\"><path fill=\"#003e87\" d=\"m261.9 151.5-50.6 23.4v20c0 11.8 6.1 22.8 16.2 28.9L262 239l34.5-15.2c10-6.2 16.2-17.1 16.2-28.9v-20l-50.8-23.4z\"/><path fill=\"#FFDA44\" d=\"M211.3 128.1h101.3v46.7H211.3z\"/></g><g fill=\"#ce1127\"><path d=\"M0 0h512v35H0zM0 306h512v35H0z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BZ.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#003e87\" d=\"M0 0h512v341.3H0z\"/><circle fill=\"#FFF\" cx=\"260.9\" cy=\"170.9\" r=\"118.9\"/><circle fill=\"none\" stroke=\"#6DA544\" stroke-width=\"18\" stroke-miterlimit=\"10\" cx=\"261.9\" cy=\"173.1\" r=\"94.5\"/><g stroke=\"#000\"><path fill=\"#003e87\" d=\"m261.9 151.5-50.6 23.4v20c0 11.8 6.1 22.8 16.2 28.9L262 239l34.5-15.2c10-6.2 16.2-17.1 16.2-28.9v-20l-50.8-23.4z\"/><path fill=\"#FFDA44\" d=\"M211.3 128.1h101.3v46.7H211.3z\"/></g><g fill=\"#ce1127\"><path d=\"M0 0h512v35H0zM0 306h512v35H0z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BZ.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\BZ.svg");
    }
}
