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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/GI.svg */
class __TwigTemplate_f811f46e710e7e0cbf2936ca3a5639c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GI.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GI.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#FFF\" d=\"M0 0h513v342H0z\"/><path fill=\"#D80027\" d=\"M0 230h513v112H0z\"/><path fill=\"#D80027\" stroke=\"#000\" stroke-miterlimit=\"10\" d=\"M363.1 131.8V99.1H374V77.3h-21.9v10.9h-21.8V77.3h-21.8v21.8h10.9v32.7h-21.8V55.5h10.9V33.7h-21.8v10.9h-10.9V33.7H254v10.9h-10.9V33.7h-21.8v21.8h10.9v76.3h-21.8V99.1h10.9V77.3h-21.8v10.9h-21.8V77.3h-21.8v21.8h10.9v32.7H145V219h239.9v-87.2z\"/><path fill=\"#FFDA44\" stroke=\"#000\" stroke-miterlimit=\"10\" d=\"m264.9 235.5-24.2 18.2 19.1 14.3v31.3h-23.2v9h23v7.9h-23v9.3H270V268l19.1-14.3-24.2-18.2zm0 25.3-10.1-7.1 10.1-7.1 10.1 7.1-10.1 7.1z\"/><path d=\"M239.6 209.7v-27.9s.1-22.3 25-22.3c24.8 0 25.7 22 25.7 22v28.2h-50.7zM170.5 209.7v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8z\"/><path d=\"M169.1 209.7v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8zM320.9 209.7v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8zM329.3 132v-15.7s.1-12.1 11.3-12.1c11.3 0 11.7 11.9 11.7 11.9V132h-23zM250.5 132v-23.7s.1-18.3 14.3-18.3c14.2 0 14.7 18 14.7 18v24h-29zM177.5 132v-15.7s.1-12.1 11.3-12.1 11.7 11.9 11.7 11.9V132h-23z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GI.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#FFF\" d=\"M0 0h513v342H0z\"/><path fill=\"#D80027\" d=\"M0 230h513v112H0z\"/><path fill=\"#D80027\" stroke=\"#000\" stroke-miterlimit=\"10\" d=\"M363.1 131.8V99.1H374V77.3h-21.9v10.9h-21.8V77.3h-21.8v21.8h10.9v32.7h-21.8V55.5h10.9V33.7h-21.8v10.9h-10.9V33.7H254v10.9h-10.9V33.7h-21.8v21.8h10.9v76.3h-21.8V99.1h10.9V77.3h-21.8v10.9h-21.8V77.3h-21.8v21.8h10.9v32.7H145V219h239.9v-87.2z\"/><path fill=\"#FFDA44\" stroke=\"#000\" stroke-miterlimit=\"10\" d=\"m264.9 235.5-24.2 18.2 19.1 14.3v31.3h-23.2v9h23v7.9h-23v9.3H270V268l19.1-14.3-24.2-18.2zm0 25.3-10.1-7.1 10.1-7.1 10.1 7.1-10.1 7.1z\"/><path d=\"M239.6 209.7v-27.9s.1-22.3 25-22.3c24.8 0 25.7 22 25.7 22v28.2h-50.7zM170.5 209.7v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8z\"/><path d=\"M169.1 209.7v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8zM320.9 209.7v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8zM329.3 132v-15.7s.1-12.1 11.3-12.1c11.3 0 11.7 11.9 11.7 11.9V132h-23zM250.5 132v-23.7s.1-18.3 14.3-18.3c14.2 0 14.7 18 14.7 18v24h-29zM177.5 132v-15.7s.1-12.1 11.3-12.1 11.7 11.9 11.7 11.9V132h-23z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GI.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\GI.svg");
    }
}
