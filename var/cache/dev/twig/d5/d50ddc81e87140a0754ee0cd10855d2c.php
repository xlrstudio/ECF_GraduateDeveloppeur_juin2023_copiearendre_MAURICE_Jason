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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/SG.svg */
class __TwigTemplate_3649f3718981b36c937bfda40eb843b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/SG.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/SG.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#FFF\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#D80027\" d=\"M0 85.337h512V256H0z\"/><g fill=\"#FFF\"><path d=\"M83.478 170.666c0-24.865 17.476-45.637 40.812-50.734a52.059 52.059 0 0 0-11.13-1.208c-28.688 0-51.942 23.254-51.942 51.941s23.255 51.942 51.942 51.942c3.822 0 7.543-.425 11.13-1.208-23.336-5.095-40.812-25.867-40.812-50.733zM150.261 122.435l3.684 11.337h11.921l-9.645 7.007 3.684 11.337-9.644-7.006-9.645 7.006 3.685-11.337-9.645-7.007h11.921z\"/><path d=\"m121.344 144.696 3.683 11.337h11.921l-9.645 7.007 3.684 11.337-9.643-7.006-9.645 7.006 3.685-11.337-9.645-7.007h11.921zM179.178 144.696l3.684 11.337h11.921l-9.645 7.007 3.684 11.337-9.644-7.006-9.644 7.006 3.685-11.337-9.645-7.007h11.921zM168.047 178.087l3.684 11.337h11.921l-9.644 7.007 3.684 11.337-9.645-7.006-9.643 7.006 3.684-11.337-9.644-7.007h11.92zM132.474 178.087l3.683 11.337h11.921l-9.644 7.007 3.684 11.337-9.644-7.006-9.644 7.006 3.684-11.337-9.644-7.007h11.92z\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/SG.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#FFF\" d=\"M0 85.337h512v341.326H0z\"/><path fill=\"#D80027\" d=\"M0 85.337h512V256H0z\"/><g fill=\"#FFF\"><path d=\"M83.478 170.666c0-24.865 17.476-45.637 40.812-50.734a52.059 52.059 0 0 0-11.13-1.208c-28.688 0-51.942 23.254-51.942 51.941s23.255 51.942 51.942 51.942c3.822 0 7.543-.425 11.13-1.208-23.336-5.095-40.812-25.867-40.812-50.733zM150.261 122.435l3.684 11.337h11.921l-9.645 7.007 3.684 11.337-9.644-7.006-9.645 7.006 3.685-11.337-9.645-7.007h11.921z\"/><path d=\"m121.344 144.696 3.683 11.337h11.921l-9.645 7.007 3.684 11.337-9.643-7.006-9.645 7.006 3.685-11.337-9.645-7.007h11.921zM179.178 144.696l3.684 11.337h11.921l-9.645 7.007 3.684 11.337-9.644-7.006-9.644 7.006 3.685-11.337-9.645-7.007h11.921zM168.047 178.087l3.684 11.337h11.921l-9.644 7.007 3.684 11.337-9.645-7.006-9.643 7.006 3.684-11.337-9.644-7.007h11.92zM132.474 178.087l3.683 11.337h11.921l-9.644 7.007 3.684 11.337-9.644-7.006-9.644 7.006 3.684-11.337-9.644-7.007h11.92z\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/SG.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\SG.svg");
    }
}
