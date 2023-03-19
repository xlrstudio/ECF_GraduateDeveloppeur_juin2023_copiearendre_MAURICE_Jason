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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/CF.svg */
class __TwigTemplate_9e8832c4e70e0368e2f33f711d857ea4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CF.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CF.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#d21034\" d=\"M0 0h512v341.3H0z\"/><g fill=\"#3a9927\"><path d=\"M0 170.7h211.5V256H0zM300.5 170.7H512V256H300.5z\"/></g><path fill=\"#003082\" d=\"M0 0v85.3h211.5V0h89v85.3H512V0z\"/><g fill=\"#FFF\"><path d=\"M300.5 85.3H512v85.3H300.5zM0 85.3h211.5v85.3H0z\"/></g><g fill=\"#ffce00\"><path d=\"M300.5 341.3h-89V256H0v85.3h512V256H300.5zM105.7 8.6l8.6 26.2h27.5L119.5 51l8.6 26.2L105.7 61 83.4 77.2 91.9 51 69.6 34.8h27.6z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CF.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#d21034\" d=\"M0 0h512v341.3H0z\"/><g fill=\"#3a9927\"><path d=\"M0 170.7h211.5V256H0zM300.5 170.7H512V256H300.5z\"/></g><path fill=\"#003082\" d=\"M0 0v85.3h211.5V0h89v85.3H512V0z\"/><g fill=\"#FFF\"><path d=\"M300.5 85.3H512v85.3H300.5zM0 85.3h211.5v85.3H0z\"/></g><g fill=\"#ffce00\"><path d=\"M300.5 341.3h-89V256H0v85.3h512V256H300.5zM105.7 8.6l8.6 26.2h27.5L119.5 51l8.6 26.2L105.7 61 83.4 77.2 91.9 51 69.6 34.8h27.6z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/CF.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\CF.svg");
    }
}
