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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/HR.svg */
class __TwigTemplate_cf60abbd48f7fcb72a8aaa4add28327f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/HR.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/HR.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#FFF\" d=\"M0 0h513v342H0z\"/><path fill=\"#D80027\" d=\"M0 0h513v114H0z\"/><path fill=\"#0052B4\" d=\"M0 228h513v114H0z\"/><g fill=\"#338AF3\"><path d=\"M309.3 113.2v-44l17.5-14.4 17.7 14.4v44zM203.7 113.2v-44l-17.3-14.4-17.9 14.4v44zM238.9 113.2v-44l17.6-14.4 17.6 14.4v44z\"/></g><g fill=\"#0052B4\"><path d=\"M309.3 113.2h-35.2v-44l17.5-14.4 17.7 14.4zM238.9 113.2h-35.2v-44l17.5-14.4 17.7 14.4z\"/></g><path stroke=\"#D80027\" fill=\"#FFF\" d=\"M168.5 113.2v101.9c0 24.3 14.4 46.2 35.4 59.4 21.3 13.4 42.1 14.7 52.6 14.7s31.4-1.7 52.6-14.8c21-13 35.4-35.1 35.4-59.3V113.2h-176z\"/><g fill=\"#D80027\"><path d=\"M168.5 113.2h35.2v35.2h-35.2zM238.9 113.2h35.2v35.2h-35.2zM309.3 113.2h35.2v35.2h-35.2zM203.7 148.4h35.2v35.2h-35.2zM274.1 148.4h35.2v35.2h-35.2zM168.5 183.6h35.2v35.2h-35.2zM203.7 218.8h35.2V254h-35.2zM238.9 183.6h35.2v35.2h-35.2zM309.3 183.6h35.2v35.2h-35.2zM274.1 218.8h35.2V254h-35.2zM309.3 274.3c8.6-5.4 16.2-12.3 22-20.3h-22v20.3zM181.7 254c5.8 8 13.3 14.9 22 20.4V254h-22zM238.9 254v33.7c7.2 1.2 13.3 1.5 17.6 1.5 4.3 0 10.4-.3 17.6-1.6V254h-35.2z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/HR.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#FFF\" d=\"M0 0h513v342H0z\"/><path fill=\"#D80027\" d=\"M0 0h513v114H0z\"/><path fill=\"#0052B4\" d=\"M0 228h513v114H0z\"/><g fill=\"#338AF3\"><path d=\"M309.3 113.2v-44l17.5-14.4 17.7 14.4v44zM203.7 113.2v-44l-17.3-14.4-17.9 14.4v44zM238.9 113.2v-44l17.6-14.4 17.6 14.4v44z\"/></g><g fill=\"#0052B4\"><path d=\"M309.3 113.2h-35.2v-44l17.5-14.4 17.7 14.4zM238.9 113.2h-35.2v-44l17.5-14.4 17.7 14.4z\"/></g><path stroke=\"#D80027\" fill=\"#FFF\" d=\"M168.5 113.2v101.9c0 24.3 14.4 46.2 35.4 59.4 21.3 13.4 42.1 14.7 52.6 14.7s31.4-1.7 52.6-14.8c21-13 35.4-35.1 35.4-59.3V113.2h-176z\"/><g fill=\"#D80027\"><path d=\"M168.5 113.2h35.2v35.2h-35.2zM238.9 113.2h35.2v35.2h-35.2zM309.3 113.2h35.2v35.2h-35.2zM203.7 148.4h35.2v35.2h-35.2zM274.1 148.4h35.2v35.2h-35.2zM168.5 183.6h35.2v35.2h-35.2zM203.7 218.8h35.2V254h-35.2zM238.9 183.6h35.2v35.2h-35.2zM309.3 183.6h35.2v35.2h-35.2zM274.1 218.8h35.2V254h-35.2zM309.3 274.3c8.6-5.4 16.2-12.3 22-20.3h-22v20.3zM181.7 254c5.8 8 13.3 14.9 22 20.4V254h-22zM238.9 254v33.7c7.2 1.2 13.3 1.5 17.6 1.5 4.3 0 10.4-.3 17.6-1.6V254h-35.2z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/HR.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\HR.svg");
    }
}
