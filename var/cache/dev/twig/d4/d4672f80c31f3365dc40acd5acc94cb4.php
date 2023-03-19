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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/NR.svg */
class __TwigTemplate_1f8d1cd42e478c0d8a798340f15b64c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/NR.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/NR.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#0052B4\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#FFDA44\" d=\"M0 239.994h512v32H0z\"/><path fill=\"#FFF\" d=\"m174.802 341.329-19.124 8.996 10.184 18.521-20.767-3.973-2.631 20.978L128 370.422l-14.465 15.429-2.63-20.978-20.767 3.973 10.183-18.521-19.123-8.996 19.124-8.995-10.184-18.52 20.766 3.971 2.632-20.978L128 312.236l14.465-15.429 2.63 20.978 20.767-3.971-10.183 18.521z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/NR.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#0052B4\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#FFDA44\" d=\"M0 239.994h512v32H0z\"/><path fill=\"#FFF\" d=\"m174.802 341.329-19.124 8.996 10.184 18.521-20.767-3.973-2.631 20.978L128 370.422l-14.465 15.429-2.63-20.978-20.767 3.973 10.183-18.521-19.123-8.996 19.124-8.995-10.184-18.52 20.766 3.971 2.632-20.978L128 312.236l14.465-15.429 2.63 20.978 20.767-3.971-10.183 18.521z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/NR.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\NR.svg");
    }
}
