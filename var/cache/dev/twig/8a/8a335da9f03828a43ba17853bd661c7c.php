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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/MQ.svg */
class __TwigTemplate_ac58744aaaaff66d2fc1ec75dfe57a16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MQ.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MQ.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#0052B4\" d=\"M0 0h513v342H0z\"/><g fill=\"#fff\"><path d=\"M512 148.4v44.5H278.3v148.4h-44.6V192.9H0v-44.5h233.7V0h44.6v148.4z\"/><path d=\"M101 36.1c4.2-.2 8.3-.1 12.5.2 5.5.4 9.4 1.6 9.1.5-.5-1.8-.1-2.2-.8-1.8-1.3 1 .7-.2-7.4 4.4-11.8 6.7-16.9 11.8-14.3 21 2.3 8.1 8.2 10.3 22.3 12.5l1.9.3c5.6.9 8.1 1.4 9.8 2.2.4.2-.3-1-.1-1.7-.2.6-3.9 2.1-13.3 3.9l-4.7.9c-18.1 3.7-27.1 8.5-28.5 21-1.5 13.7 12.7 23.3 30.6 25.6 18.2 2.4 34.1-3.6 35.7-18.4 1-9.4-5.5-15-15.9-17.1-7-1.4-16.3-1.4-27.4-.3-12.4 1.3-24.7 3.4-36.9 6.3-3.6.7-5.9 4.2-5.2 7.8.7 3.6 4.2 5.9 7.8 5.2.2 0 .3-.1.5-.1 11.6-2.7 23.3-4.7 35.1-5.9 9.9-1 18-1 23.4.1 4.4.9 5.3 1.7 5.2 2.6-.5 5.1-8.9 8.2-20.7 6.7-11.6-1.5-19.5-6.8-19.1-11 .5-4.3 5.3-6.8 17.9-9.4l4.6-.9c15.5-3 21.1-5.3 23.5-13.2 1.9-6.5-1.3-11.6-7.2-14.2-3.2-1.4-6.3-2.1-13.2-3.1l-1.8-.3c-8-1.3-11.4-2.6-11.5-3-.1-.4 1.8-2.3 8.1-5.9l4.4-2.5c1.5-.8 2.9-1.8 4.3-2.7 4.6-3.4 7.2-7.1 5.8-12.3-1.9-7.3-9-9.5-20.9-10.4-4.7-.3-9.3-.4-14-.3l-2 .1c-3.7.2-6.5 3.4-6.3 7 .2 3.7 3.4 6.5 7 6.3l1.7-.1zM385 36.1c4.2-.2 8.3-.1 12.5.2 5.5.4 9.4 1.6 9.1.5-.5-1.8-.1-2.2-.8-1.8-1.3 1 .7-.2-7.4 4.4-11.8 6.7-16.9 11.8-14.3 21 2.3 8.1 8.2 10.3 22.3 12.5l1.9.3c5.6.9 8.1 1.4 9.8 2.2.4.2-.3-1-.1-1.7-.2.6-3.9 2.1-13.3 3.9l-4.7.9c-18.1 3.7-27.1 8.5-28.5 21-1.5 13.7 12.7 23.3 30.6 25.6 18.2 2.4 34.1-3.6 35.7-18.4 1-9.4-5.5-15-15.9-17.1-7-1.4-16.3-1.4-27.4-.3-12.4 1.3-24.7 3.4-36.9 6.3-3.6.7-5.9 4.2-5.2 7.8.7 3.6 4.2 5.9 7.8 5.2.2 0 .3-.1.5-.1 11.6-2.7 23.3-4.7 35.1-5.9 9.9-1 18-1 23.4.1 4.4.9 5.3 1.7 5.2 2.6-.5 5.1-8.9 8.2-20.7 6.7-11.6-1.5-19.5-6.8-19.1-11 .5-4.3 5.3-6.8 17.9-9.4l4.6-.9c15.5-3 21.1-5.3 23.5-13.2 1.9-6.5-1.3-11.6-7.2-14.2-3.2-1.4-6.3-2.1-13.2-3.1l-1.8-.3c-8-1.3-11.4-2.6-11.5-3-.1-.4 1.8-2.3 8.1-5.9l4.4-2.5c1.5-.8 2.9-1.8 4.3-2.7 4.6-3.4 7.2-7.1 5.8-12.3-1.9-7.3-9-9.5-20.9-10.4-4.7-.3-9.3-.4-14-.3l-2 .1c-3.7.2-6.5 3.4-6.3 7 .2 3.7 3.4 6.5 7 6.3l1.7-.1zM379.6 235.1c4.2-.2 8.3-.1 12.5.2 5.5.4 9.4 1.6 9.1.5-.5-1.8-.1-2.2-.8-1.8-1.3 1 .7-.2-7.4 4.4-11.8 6.7-16.9 11.8-14.3 21 2.3 8.1 8.2 10.3 22.3 12.5l1.9.3c5.6.9 8.1 1.4 9.8 2.2.4.2-.3-1-.1-1.7-.2.6-3.9 2.1-13.3 3.9l-4.7.9c-18.1 3.7-27.1 8.5-28.5 21-1.5 13.7 12.7 23.3 30.6 25.6 18.2 2.4 34.1-3.6 35.7-18.4 1-9.4-5.5-15-15.9-17.1-7-1.4-16.3-1.4-27.4-.3-12.4 1.3-24.7 3.4-36.9 6.3-3.6.7-5.9 4.2-5.2 7.8.7 3.6 4.2 5.9 7.8 5.2.2 0 .3-.1.5-.1 11.6-2.7 23.3-4.7 35.1-5.9 9.9-1 18-1 23.4.1 4.4.9 5.3 1.7 5.2 2.6-.5 5.1-8.9 8.2-20.7 6.7-11.6-1.5-19.5-6.8-19.1-11 .5-4.3 5.3-6.8 17.9-9.4l4.6-.9c15.5-3 21.1-5.3 23.5-13.2 1.9-6.5-1.3-11.6-7.2-14.2-3.2-1.4-6.3-2.1-13.2-3.1l-1.8-.3c-8-1.3-11.4-2.6-11.5-3-.1-.4 1.8-2.3 8.1-5.9l4.4-2.5c1.5-.8 2.9-1.8 4.3-2.7 4.6-3.4 7.2-7.1 5.8-12.3-1.9-7.3-9-9.5-20.9-10.4-4.7-.3-9.3-.4-14-.3l-2 .1c-3.7.2-6.5 3.4-6.3 7s3.4 6.5 7 6.3l1.7-.1zM101 235.1c4.2-.2 8.3-.1 12.5.2 5.5.4 9.4 1.6 9.1.5-.5-1.8-.1-2.2-.8-1.8-1.3 1 .7-.2-7.4 4.4-11.8 6.7-16.9 11.8-14.3 21 2.3 8.1 8.2 10.3 22.3 12.5l1.9.3c5.6.9 8.1 1.4 9.8 2.2.4.2-.3-1-.1-1.7-.2.6-3.9 2.1-13.3 3.9l-4.7.9c-18.1 3.7-27.1 8.5-28.5 21-1.5 13.7 12.7 23.3 30.6 25.6 18.2 2.4 34.1-3.6 35.7-18.4 1-9.4-5.5-15-15.9-17.1-7-1.4-16.3-1.4-27.4-.3-12.4 1.3-24.7 3.4-36.9 6.3-3.6.7-5.9 4.2-5.2 7.8s4.2 5.9 7.8 5.2c.2 0 .3-.1.5-.1 11.6-2.7 23.3-4.7 35.1-5.9 9.9-1 18-1 23.4.1 4.4.9 5.3 1.7 5.2 2.6-.5 5.1-8.9 8.2-20.7 6.7-11.6-1.5-19.5-6.8-19.1-11 .5-4.3 5.3-6.8 17.9-9.4l4.6-.9c15.5-3 21.1-5.3 23.5-13.2 1.9-6.5-1.3-11.6-7.2-14.2-3.2-1.4-6.3-2.1-13.2-3.1l-1.8-.3c-8-1.3-11.4-2.6-11.5-3-.1-.4 1.8-2.3 8.1-5.9l4.4-2.5c1.5-.8 2.9-1.8 4.3-2.7 4.6-3.4 7.2-7.1 5.8-12.3-1.9-7.3-9-9.5-20.9-10.4-4.7-.3-9.3-.4-14-.3l-2 .1c-3.7.2-6.5 3.4-6.3 7 .2 3.7 3.4 6.5 7 6.3l1.7-.1z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MQ.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#0052B4\" d=\"M0 0h513v342H0z\"/><g fill=\"#fff\"><path d=\"M512 148.4v44.5H278.3v148.4h-44.6V192.9H0v-44.5h233.7V0h44.6v148.4z\"/><path d=\"M101 36.1c4.2-.2 8.3-.1 12.5.2 5.5.4 9.4 1.6 9.1.5-.5-1.8-.1-2.2-.8-1.8-1.3 1 .7-.2-7.4 4.4-11.8 6.7-16.9 11.8-14.3 21 2.3 8.1 8.2 10.3 22.3 12.5l1.9.3c5.6.9 8.1 1.4 9.8 2.2.4.2-.3-1-.1-1.7-.2.6-3.9 2.1-13.3 3.9l-4.7.9c-18.1 3.7-27.1 8.5-28.5 21-1.5 13.7 12.7 23.3 30.6 25.6 18.2 2.4 34.1-3.6 35.7-18.4 1-9.4-5.5-15-15.9-17.1-7-1.4-16.3-1.4-27.4-.3-12.4 1.3-24.7 3.4-36.9 6.3-3.6.7-5.9 4.2-5.2 7.8.7 3.6 4.2 5.9 7.8 5.2.2 0 .3-.1.5-.1 11.6-2.7 23.3-4.7 35.1-5.9 9.9-1 18-1 23.4.1 4.4.9 5.3 1.7 5.2 2.6-.5 5.1-8.9 8.2-20.7 6.7-11.6-1.5-19.5-6.8-19.1-11 .5-4.3 5.3-6.8 17.9-9.4l4.6-.9c15.5-3 21.1-5.3 23.5-13.2 1.9-6.5-1.3-11.6-7.2-14.2-3.2-1.4-6.3-2.1-13.2-3.1l-1.8-.3c-8-1.3-11.4-2.6-11.5-3-.1-.4 1.8-2.3 8.1-5.9l4.4-2.5c1.5-.8 2.9-1.8 4.3-2.7 4.6-3.4 7.2-7.1 5.8-12.3-1.9-7.3-9-9.5-20.9-10.4-4.7-.3-9.3-.4-14-.3l-2 .1c-3.7.2-6.5 3.4-6.3 7 .2 3.7 3.4 6.5 7 6.3l1.7-.1zM385 36.1c4.2-.2 8.3-.1 12.5.2 5.5.4 9.4 1.6 9.1.5-.5-1.8-.1-2.2-.8-1.8-1.3 1 .7-.2-7.4 4.4-11.8 6.7-16.9 11.8-14.3 21 2.3 8.1 8.2 10.3 22.3 12.5l1.9.3c5.6.9 8.1 1.4 9.8 2.2.4.2-.3-1-.1-1.7-.2.6-3.9 2.1-13.3 3.9l-4.7.9c-18.1 3.7-27.1 8.5-28.5 21-1.5 13.7 12.7 23.3 30.6 25.6 18.2 2.4 34.1-3.6 35.7-18.4 1-9.4-5.5-15-15.9-17.1-7-1.4-16.3-1.4-27.4-.3-12.4 1.3-24.7 3.4-36.9 6.3-3.6.7-5.9 4.2-5.2 7.8.7 3.6 4.2 5.9 7.8 5.2.2 0 .3-.1.5-.1 11.6-2.7 23.3-4.7 35.1-5.9 9.9-1 18-1 23.4.1 4.4.9 5.3 1.7 5.2 2.6-.5 5.1-8.9 8.2-20.7 6.7-11.6-1.5-19.5-6.8-19.1-11 .5-4.3 5.3-6.8 17.9-9.4l4.6-.9c15.5-3 21.1-5.3 23.5-13.2 1.9-6.5-1.3-11.6-7.2-14.2-3.2-1.4-6.3-2.1-13.2-3.1l-1.8-.3c-8-1.3-11.4-2.6-11.5-3-.1-.4 1.8-2.3 8.1-5.9l4.4-2.5c1.5-.8 2.9-1.8 4.3-2.7 4.6-3.4 7.2-7.1 5.8-12.3-1.9-7.3-9-9.5-20.9-10.4-4.7-.3-9.3-.4-14-.3l-2 .1c-3.7.2-6.5 3.4-6.3 7 .2 3.7 3.4 6.5 7 6.3l1.7-.1zM379.6 235.1c4.2-.2 8.3-.1 12.5.2 5.5.4 9.4 1.6 9.1.5-.5-1.8-.1-2.2-.8-1.8-1.3 1 .7-.2-7.4 4.4-11.8 6.7-16.9 11.8-14.3 21 2.3 8.1 8.2 10.3 22.3 12.5l1.9.3c5.6.9 8.1 1.4 9.8 2.2.4.2-.3-1-.1-1.7-.2.6-3.9 2.1-13.3 3.9l-4.7.9c-18.1 3.7-27.1 8.5-28.5 21-1.5 13.7 12.7 23.3 30.6 25.6 18.2 2.4 34.1-3.6 35.7-18.4 1-9.4-5.5-15-15.9-17.1-7-1.4-16.3-1.4-27.4-.3-12.4 1.3-24.7 3.4-36.9 6.3-3.6.7-5.9 4.2-5.2 7.8.7 3.6 4.2 5.9 7.8 5.2.2 0 .3-.1.5-.1 11.6-2.7 23.3-4.7 35.1-5.9 9.9-1 18-1 23.4.1 4.4.9 5.3 1.7 5.2 2.6-.5 5.1-8.9 8.2-20.7 6.7-11.6-1.5-19.5-6.8-19.1-11 .5-4.3 5.3-6.8 17.9-9.4l4.6-.9c15.5-3 21.1-5.3 23.5-13.2 1.9-6.5-1.3-11.6-7.2-14.2-3.2-1.4-6.3-2.1-13.2-3.1l-1.8-.3c-8-1.3-11.4-2.6-11.5-3-.1-.4 1.8-2.3 8.1-5.9l4.4-2.5c1.5-.8 2.9-1.8 4.3-2.7 4.6-3.4 7.2-7.1 5.8-12.3-1.9-7.3-9-9.5-20.9-10.4-4.7-.3-9.3-.4-14-.3l-2 .1c-3.7.2-6.5 3.4-6.3 7s3.4 6.5 7 6.3l1.7-.1zM101 235.1c4.2-.2 8.3-.1 12.5.2 5.5.4 9.4 1.6 9.1.5-.5-1.8-.1-2.2-.8-1.8-1.3 1 .7-.2-7.4 4.4-11.8 6.7-16.9 11.8-14.3 21 2.3 8.1 8.2 10.3 22.3 12.5l1.9.3c5.6.9 8.1 1.4 9.8 2.2.4.2-.3-1-.1-1.7-.2.6-3.9 2.1-13.3 3.9l-4.7.9c-18.1 3.7-27.1 8.5-28.5 21-1.5 13.7 12.7 23.3 30.6 25.6 18.2 2.4 34.1-3.6 35.7-18.4 1-9.4-5.5-15-15.9-17.1-7-1.4-16.3-1.4-27.4-.3-12.4 1.3-24.7 3.4-36.9 6.3-3.6.7-5.9 4.2-5.2 7.8s4.2 5.9 7.8 5.2c.2 0 .3-.1.5-.1 11.6-2.7 23.3-4.7 35.1-5.9 9.9-1 18-1 23.4.1 4.4.9 5.3 1.7 5.2 2.6-.5 5.1-8.9 8.2-20.7 6.7-11.6-1.5-19.5-6.8-19.1-11 .5-4.3 5.3-6.8 17.9-9.4l4.6-.9c15.5-3 21.1-5.3 23.5-13.2 1.9-6.5-1.3-11.6-7.2-14.2-3.2-1.4-6.3-2.1-13.2-3.1l-1.8-.3c-8-1.3-11.4-2.6-11.5-3-.1-.4 1.8-2.3 8.1-5.9l4.4-2.5c1.5-.8 2.9-1.8 4.3-2.7 4.6-3.4 7.2-7.1 5.8-12.3-1.9-7.3-9-9.5-20.9-10.4-4.7-.3-9.3-.4-14-.3l-2 .1c-3.7.2-6.5 3.4-6.3 7 .2 3.7 3.4 6.5 7 6.3l1.7-.1z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/MQ.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\MQ.svg");
    }
}
