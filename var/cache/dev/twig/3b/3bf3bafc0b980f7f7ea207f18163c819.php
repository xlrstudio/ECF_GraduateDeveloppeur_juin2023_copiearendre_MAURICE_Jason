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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/BY.svg */
class __TwigTemplate_f864578a020934b2a5e017d37a64d18b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BY.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BY.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#007C30\" d=\"M0 0h513v342H0z\"/><path fill=\"#CE1720\" d=\"M0 230h513V0H0\"/><path fill=\"#FFF\" d=\"M100 230V0H0v342h513-413z\"/><g fill=\"#CE1720\"><path d=\"M28 159.6 8.6 128.2 28 97.4l19.3 30.8zM72.6 159.6l-19.3-31.4 19.3-30.8L92 128.2zM28 241.2 8.6 209.8 28 179l19.3 30.8zM72.6 241.2l-19.3-31.4L72.6 179 92 209.8z\"/></g><g fill=\"none\" stroke=\"#CE1720\" stroke-width=\"7\"><path d=\"m28 73.8-16.1-26L28 22.2l16 25.6zM72.6 73.8l-16-26 16-25.6 16.1 25.6zM28 318l-16.1-26.1L28 266.3l16 25.6zM72.6 318l-16-26.1 16-25.6 16.1 25.6z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BY.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#007C30\" d=\"M0 0h513v342H0z\"/><path fill=\"#CE1720\" d=\"M0 230h513V0H0\"/><path fill=\"#FFF\" d=\"M100 230V0H0v342h513-413z\"/><g fill=\"#CE1720\"><path d=\"M28 159.6 8.6 128.2 28 97.4l19.3 30.8zM72.6 159.6l-19.3-31.4 19.3-30.8L92 128.2zM28 241.2 8.6 209.8 28 179l19.3 30.8zM72.6 241.2l-19.3-31.4L72.6 179 92 209.8z\"/></g><g fill=\"none\" stroke=\"#CE1720\" stroke-width=\"7\"><path d=\"m28 73.8-16.1-26L28 22.2l16 25.6zM72.6 73.8l-16-26 16-25.6 16.1 25.6zM28 318l-16.1-26.1L28 266.3l16 25.6zM72.6 318l-16-26.1 16-25.6 16.1 25.6z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BY.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\BY.svg");
    }
}
