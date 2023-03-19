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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/MZ.svg */
class __TwigTemplate_9e6f72b81b29665e3b0f8207785494b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MZ.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MZ.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 513 342\"><path fill=\"#FFF\" d=\"M0 85.333h513v342H0z\"/><path fill=\"#f4d900\" d=\"M0 323.333h513v104H0z\"/><path fill=\"#006d66\" d=\"M0 85.333h513v104H0z\"/><path d=\"M0 204.333h513v104H0z\"/><path fill=\"#cb0f31\" d=\"M256 256.006 0 426.668V85.331z\"/><path fill=\"#f4d900\" d=\"m83.477 195.132 15.107 46.498h48.894l-39.554 28.739 15.107 46.499-39.554-28.738-39.555 28.738 15.11-46.499-39.554-28.739H68.37z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MZ.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 513 342\"><path fill=\"#FFF\" d=\"M0 85.333h513v342H0z\"/><path fill=\"#f4d900\" d=\"M0 323.333h513v104H0z\"/><path fill=\"#006d66\" d=\"M0 85.333h513v104H0z\"/><path d=\"M0 204.333h513v104H0z\"/><path fill=\"#cb0f31\" d=\"M256 256.006 0 426.668V85.331z\"/><path fill=\"#f4d900\" d=\"m83.477 195.132 15.107 46.498h48.894l-39.554 28.739 15.107 46.499-39.554-28.738-39.555 28.738 15.11-46.499-39.554-28.739H68.37z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MZ.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\MZ.svg");
    }
}
