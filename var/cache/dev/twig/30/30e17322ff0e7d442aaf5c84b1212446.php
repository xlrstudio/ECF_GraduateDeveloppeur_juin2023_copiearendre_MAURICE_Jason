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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/GD.svg */
class __TwigTemplate_d59ae50bc7f5ac1fcafad36fa1cc5110 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GD.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GD.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#c60a0a\" d=\"M0 0h512v341.3H0z\"/><path fill=\"#3E8446\" d=\"M256 170.7 44.5 296.8V44.5z\"/><g fill=\"#FFDA44\"><path d=\"m256 170.7 211.5 126.1h-423zM467.5 44.5 256 170.7 44.5 44.5z\"/></g><path fill=\"#3E8446\" d=\"M467.5 44.5v252.3L256 170.7z\"/><g fill=\"#FFDA44\"><path d=\"m256 10.4 3.3 10.2H270l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM170.1 10.4l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM341.9 10.4l3.3 10.2H356l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM256 304.2l3.3 10.2H270l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM170.1 304.2l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM341.9 304.2l3.3 10.2H356l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7z\"/></g><circle fill=\"#c60a0a\" cx=\"244.5\" cy=\"170.7\" r=\"76.2\"/><path fill=\"#FFDA44\" d=\"m244.5 110.1 13.6 41.8h44l-35.6 25.8 13.6 41.8-35.6-25.8-35.5 25.8 13.6-41.8-35.6-25.8h44zM107.7 167.8c4.4 6.9 2.3 16.1-4.6 20.5s-16.1 2.3-20.5-4.6c-7.9-12.5-3.3-33-3.3-33s20.4 4.6 28.4 17.1z\"/><circle fill=\"#A2001D\" cx=\"99.1\" cy=\"182.1\" r=\"7.4\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GD.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.3\"><path fill=\"#c60a0a\" d=\"M0 0h512v341.3H0z\"/><path fill=\"#3E8446\" d=\"M256 170.7 44.5 296.8V44.5z\"/><g fill=\"#FFDA44\"><path d=\"m256 170.7 211.5 126.1h-423zM467.5 44.5 256 170.7 44.5 44.5z\"/></g><path fill=\"#3E8446\" d=\"M467.5 44.5v252.3L256 170.7z\"/><g fill=\"#FFDA44\"><path d=\"m256 10.4 3.3 10.2H270l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM170.1 10.4l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM341.9 10.4l3.3 10.2H356l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM256 304.2l3.3 10.2H270l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM170.1 304.2l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM341.9 304.2l3.3 10.2H356l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7z\"/></g><circle fill=\"#c60a0a\" cx=\"244.5\" cy=\"170.7\" r=\"76.2\"/><path fill=\"#FFDA44\" d=\"m244.5 110.1 13.6 41.8h44l-35.6 25.8 13.6 41.8-35.6-25.8-35.5 25.8 13.6-41.8-35.6-25.8h44zM107.7 167.8c4.4 6.9 2.3 16.1-4.6 20.5s-16.1 2.3-20.5-4.6c-7.9-12.5-3.3-33-3.3-33s20.4 4.6 28.4 17.1z\"/><circle fill=\"#A2001D\" cx=\"99.1\" cy=\"182.1\" r=\"7.4\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GD.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\GD.svg");
    }
}
