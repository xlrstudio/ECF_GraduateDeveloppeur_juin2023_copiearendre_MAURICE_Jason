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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/LR.svg */
class __TwigTemplate_5eb91644f2d9dd1ac027bf5ab3f05b5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/LR.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/LR.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><g fill=\"#bf0a30\"><path d=\"M0 0h512v31.1H0zM0 62.2h512v31.1H0zM0 124.5h512v31.1H0zM0 186.8h512v31.1H0zM0 249.3h512v31.1H0zM0 310.9h512V342H0z\"/></g><path fill=\"#002868\" d=\"M0 0h155.6v155.6H0z\"/><path fill=\"#FFF\" d=\"m77.8 30.2 10.7 32.9h34.6l-28 20.4 10.7 32.9-28-20.3-28 20.3 10.7-32.9-28-20.4h34.6z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/LR.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><g fill=\"#bf0a30\"><path d=\"M0 0h512v31.1H0zM0 62.2h512v31.1H0zM0 124.5h512v31.1H0zM0 186.8h512v31.1H0zM0 249.3h512v31.1H0zM0 310.9h512V342H0z\"/></g><path fill=\"#002868\" d=\"M0 0h155.6v155.6H0z\"/><path fill=\"#FFF\" d=\"m77.8 30.2 10.7 32.9h34.6l-28 20.4 10.7 32.9-28-20.3-28 20.3 10.7-32.9-28-20.4h34.6z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/LR.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\LR.svg");
    }
}
