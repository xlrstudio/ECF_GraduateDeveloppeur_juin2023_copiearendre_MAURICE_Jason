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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/KZ.svg */
class __TwigTemplate_ab59484ad7de02b942284bb167e153ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KZ.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KZ.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#36B6CC\" d=\"M0 0h513v342H0V0z\"/><circle fill=\"#FFD400\" cx=\"256.5\" cy=\"170.9\" r=\"68.4\"/><path fill=\"#FFD400\" d=\"m256.5 251.5-27.9 41.7-7.1-49.7-43.2 25.5 15.2-47.8-50 4.2 34.4-36.5-46.9-18 46.8-18-34.4-36.5 50 4.2-15.2-47.8 43.2 25.4 7.1-49.7 27.9 41.7 27.9-41.7 7.1 49.7 43.2-25.4-15.2 47.8 50-4.2-34.3 36.6 46.8 17.9-46.8 18 34.4 36.5-50-4.2 15.2 47.8-43.2-25.4-7.1 49.7c0-.1-27.9-41.8-27.9-41.8zm0-.8c44.1 0 79.9-35.8 79.9-79.9S300.6 91 256.5 91s-79.9 35.8-79.9 79.9 35.8 79.8 79.9 79.8zM22.8 28.3c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6V28.3zm0 45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6V74zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm22.8-22.8c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7V245c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V188zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V96.8zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V51.2z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KZ.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#36B6CC\" d=\"M0 0h513v342H0V0z\"/><circle fill=\"#FFD400\" cx=\"256.5\" cy=\"170.9\" r=\"68.4\"/><path fill=\"#FFD400\" d=\"m256.5 251.5-27.9 41.7-7.1-49.7-43.2 25.5 15.2-47.8-50 4.2 34.4-36.5-46.9-18 46.8-18-34.4-36.5 50 4.2-15.2-47.8 43.2 25.4 7.1-49.7 27.9 41.7 27.9-41.7 7.1 49.7 43.2-25.4-15.2 47.8 50-4.2-34.3 36.6 46.8 17.9-46.8 18 34.4 36.5-50-4.2 15.2 47.8-43.2-25.4-7.1 49.7c0-.1-27.9-41.8-27.9-41.8zm0-.8c44.1 0 79.9-35.8 79.9-79.9S300.6 91 256.5 91s-79.9 35.8-79.9 79.9 35.8 79.8 79.9 79.8zM22.8 28.3c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6V28.3zm0 45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6V74zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm22.8-22.8c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7V245c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V188zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V96.8zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V51.2z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/KZ.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\KZ.svg");
    }
}
