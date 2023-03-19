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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/AO.svg */
class __TwigTemplate_667dd279f37498cc8a16b92a9b3dd231 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AO.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AO.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path d=\"M0 171h513v171H0z\"/><path fill=\"#D80027\" class=\"st0\" d=\"M0 0h513v171H0z\"/><g fill=\"#FFDA44\"><path d=\"m332.7 135.6 17.5-8.6-7.4-19-18.7 6.2zM287.1 79.6l5.5-18.8-19.1-7.2-8 18zM316.5 102.8l12.2-15.3-14.9-13.9-14.2 13.6zM335.9 171.7l19.5-.8v-21.3l-22.9.2zM323.3 209.8l18.8 5.5 7.3-19-18-8zM294.3 242.2l14.9 12.7 14.4-14.4-13.1-14.7zM247.3 94.5l9.8 19.9 21.9 3.3-15.9 15.5 3.6 21.9-19.6-10.4-19.7 10.2 3.8-21.9-15.8-15.5 22-3.1z\"/><path d=\"m250.8 61.3-2.7 18.3c43.1 3.2 77 39.2 77 83.1 0 46-37.3 82.9-83.4 83.4-29.2.3-51.3-14.8-67-33.7l-13.9 12.3c15 19 40.8 39.9 80.9 39.9 56.3 0 101.9-45.6 101.9-101.9.1-53.2-40.7-96.9-92.8-101.4z\"/><path fill=\"#000\" d=\"m291.9 223.4-11.8 14s51.9 38.9 53.6 40.4c1.7 1.5 5.2 2 9.1-2.7 3.7-4.5 2.8-8.1.9-9.7-2-1.5-51.8-42-51.8-42z\"/><path d=\"M206.1 157.2c-7.7 10.3-7.5 23.1 2.8 30.9 0 0 135.2 101.5 136.9 103 1.7 1.5 5.2 2 9.1-2.7 3.7-4.5 2.8-8.1.9-9.7-1.9-1.5-149.7-121.5-149.7-121.5zM253.8 256.3l7.3 18.2 19.5-6-4.8-19.1zM213.4 252.6l-2 19.5 20.1 3.6 4.5-19.1zM177.7 231.4 167.4 248l16.4 12.1 12.5-15.2z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AO.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path d=\"M0 171h513v171H0z\"/><path fill=\"#D80027\" class=\"st0\" d=\"M0 0h513v171H0z\"/><g fill=\"#FFDA44\"><path d=\"m332.7 135.6 17.5-8.6-7.4-19-18.7 6.2zM287.1 79.6l5.5-18.8-19.1-7.2-8 18zM316.5 102.8l12.2-15.3-14.9-13.9-14.2 13.6zM335.9 171.7l19.5-.8v-21.3l-22.9.2zM323.3 209.8l18.8 5.5 7.3-19-18-8zM294.3 242.2l14.9 12.7 14.4-14.4-13.1-14.7zM247.3 94.5l9.8 19.9 21.9 3.3-15.9 15.5 3.6 21.9-19.6-10.4-19.7 10.2 3.8-21.9-15.8-15.5 22-3.1z\"/><path d=\"m250.8 61.3-2.7 18.3c43.1 3.2 77 39.2 77 83.1 0 46-37.3 82.9-83.4 83.4-29.2.3-51.3-14.8-67-33.7l-13.9 12.3c15 19 40.8 39.9 80.9 39.9 56.3 0 101.9-45.6 101.9-101.9.1-53.2-40.7-96.9-92.8-101.4z\"/><path fill=\"#000\" d=\"m291.9 223.4-11.8 14s51.9 38.9 53.6 40.4c1.7 1.5 5.2 2 9.1-2.7 3.7-4.5 2.8-8.1.9-9.7-2-1.5-51.8-42-51.8-42z\"/><path d=\"M206.1 157.2c-7.7 10.3-7.5 23.1 2.8 30.9 0 0 135.2 101.5 136.9 103 1.7 1.5 5.2 2 9.1-2.7 3.7-4.5 2.8-8.1.9-9.7-1.9-1.5-149.7-121.5-149.7-121.5zM253.8 256.3l7.3 18.2 19.5-6-4.8-19.1zM213.4 252.6l-2 19.5 20.1 3.6 4.5-19.1zM177.7 231.4 167.4 248l16.4 12.1 12.5-15.2z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AO.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\AO.svg");
    }
}
