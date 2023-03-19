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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/AD.svg */
class __TwigTemplate_09308cbc4544b20b103b47cc86bd8463 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AD.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AD.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><style>.st0{fill:#ffda44}.st1{fill:#0052b4}.st2{fill:#d80027}.st3,.st4{fill:none;stroke:#d80027;stroke-width:7;stroke-miterlimit:10}.st4{stroke-width:4}.st5{fill:#bc8b00}</style><path fill=\"#FFDA44\" d=\"M0 0h513v342H0z\"/><path fill=\"#0052B4\" d=\"M0 0h171v342H0z\"/><path fill=\"#D80027\" d=\"M342 0h171v342H342zM198.9 113.6H256v64.8h-57.1z\"/><g stroke=\"#D80027\" stroke-width=\"7\"><path d=\"M267.6 113.6v64.7M284.2 113.6v64.7M300.8 113.6v64.7\"/></g><g stroke=\"#D80027\" stroke-width=\"5\"><path d=\"M247.4 178.4v64.7M234.1 178.4v64.7M220.8 178.5v53.9M207.1 178.5v47.1\"/></g><path fill=\"#FFDA44\" d=\"m199.9 146 27.6-32.4 28.5 32.3-28.1 32.4z\"/><path fill=\"#BC8B00\" d=\"M182.2 95.9v92.2c0 34.3 27.3 54.2 48.6 64.5-.8 1.4 25.1 8.3 25.1 8.3s25.9-6.9 25.1-8.3c21.4-10.3 48.6-30.1 48.6-64.5V95.9H182.2zm129.9 92.2c0 16.9-10 29.4-32.8 43.9-8.6 5.5-17.5 9-23.3 11-5.8-2-14.7-5.5-23.3-11-22.8-14.5-32.8-28-32.8-43.9v-74.5h112.2v74.5z\"/><path fill=\"#D80027\" d=\"M264.4 188.9h29.5v8.6h-29.5zM264.4 206.5h29.5v8.6h-29.5z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AD.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><style>.st0{fill:#ffda44}.st1{fill:#0052b4}.st2{fill:#d80027}.st3,.st4{fill:none;stroke:#d80027;stroke-width:7;stroke-miterlimit:10}.st4{stroke-width:4}.st5{fill:#bc8b00}</style><path fill=\"#FFDA44\" d=\"M0 0h513v342H0z\"/><path fill=\"#0052B4\" d=\"M0 0h171v342H0z\"/><path fill=\"#D80027\" d=\"M342 0h171v342H342zM198.9 113.6H256v64.8h-57.1z\"/><g stroke=\"#D80027\" stroke-width=\"7\"><path d=\"M267.6 113.6v64.7M284.2 113.6v64.7M300.8 113.6v64.7\"/></g><g stroke=\"#D80027\" stroke-width=\"5\"><path d=\"M247.4 178.4v64.7M234.1 178.4v64.7M220.8 178.5v53.9M207.1 178.5v47.1\"/></g><path fill=\"#FFDA44\" d=\"m199.9 146 27.6-32.4 28.5 32.3-28.1 32.4z\"/><path fill=\"#BC8B00\" d=\"M182.2 95.9v92.2c0 34.3 27.3 54.2 48.6 64.5-.8 1.4 25.1 8.3 25.1 8.3s25.9-6.9 25.1-8.3c21.4-10.3 48.6-30.1 48.6-64.5V95.9H182.2zm129.9 92.2c0 16.9-10 29.4-32.8 43.9-8.6 5.5-17.5 9-23.3 11-5.8-2-14.7-5.5-23.3-11-22.8-14.5-32.8-28-32.8-43.9v-74.5h112.2v74.5z\"/><path fill=\"#D80027\" d=\"M264.4 188.9h29.5v8.6h-29.5zM264.4 206.5h29.5v8.6h-29.5z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AD.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\AD.svg");
    }
}
