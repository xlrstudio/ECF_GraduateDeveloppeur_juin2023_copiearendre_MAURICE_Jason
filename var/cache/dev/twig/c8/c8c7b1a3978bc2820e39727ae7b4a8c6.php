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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/RS.svg */
class __TwigTemplate_8157ca8f0537e541b68b03c861b2035d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/RS.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/RS.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#0052B4\" d=\"M0 85.331h512v341.337H0z\"/><path fill=\"#D80027\" d=\"M0 85.331h512v113.775H0z\"/><path fill=\"#FFF\" d=\"M0 312.882h512v113.775H0z\"/><path fill=\"#D80027\" d=\"M129.468 181.793v85.136c0 48.429 63.267 63.267 63.267 63.267S256 315.356 256 266.929v-85.136H129.468z\"/><g fill=\"#FFDA44\"><path d=\"M155.634 196.634h74.201v-29.681l-14.841 7.42-22.261-22.26-22.259 22.26-14.84-7.42zM241.16 278.782l-48.231-48.231-48.231 48.231 15.741 15.74 32.49-32.49 32.49 32.49z\"/></g><path fill=\"#FFF\" d=\"M241.16 233.734h-22.504a14.74 14.74 0 0 0 2.001-7.418c0-8.196-6.645-14.84-14.84-14.84-5.663 0-10.581 3.172-13.083 7.836-2.502-4.663-7.421-7.836-13.083-7.836-8.195 0-14.84 6.644-14.84 14.84 0 2.706.736 5.235 2.001 7.418h-22.114c0 8.196 7.139 14.84 15.334 14.84h-.494c0 8.196 6.644 14.84 14.84 14.84 0 7.257 5.211 13.286 12.094 14.576l-11.694 26.401a48.075 48.075 0 0 0 18.149 3.544 48.079 48.079 0 0 0 18.149-3.544l-11.694-26.401c6.883-1.29 12.094-7.319 12.094-14.576 8.196 0 14.84-6.644 14.84-14.84h-.494c8.199 0 15.338-6.644 15.338-14.84z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/RS.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#0052B4\" d=\"M0 85.331h512v341.337H0z\"/><path fill=\"#D80027\" d=\"M0 85.331h512v113.775H0z\"/><path fill=\"#FFF\" d=\"M0 312.882h512v113.775H0z\"/><path fill=\"#D80027\" d=\"M129.468 181.793v85.136c0 48.429 63.267 63.267 63.267 63.267S256 315.356 256 266.929v-85.136H129.468z\"/><g fill=\"#FFDA44\"><path d=\"M155.634 196.634h74.201v-29.681l-14.841 7.42-22.261-22.26-22.259 22.26-14.84-7.42zM241.16 278.782l-48.231-48.231-48.231 48.231 15.741 15.74 32.49-32.49 32.49 32.49z\"/></g><path fill=\"#FFF\" d=\"M241.16 233.734h-22.504a14.74 14.74 0 0 0 2.001-7.418c0-8.196-6.645-14.84-14.84-14.84-5.663 0-10.581 3.172-13.083 7.836-2.502-4.663-7.421-7.836-13.083-7.836-8.195 0-14.84 6.644-14.84 14.84 0 2.706.736 5.235 2.001 7.418h-22.114c0 8.196 7.139 14.84 15.334 14.84h-.494c0 8.196 6.644 14.84 14.84 14.84 0 7.257 5.211 13.286 12.094 14.576l-11.694 26.401a48.075 48.075 0 0 0 18.149 3.544 48.079 48.079 0 0 0 18.149-3.544l-11.694-26.401c6.883-1.29 12.094-7.319 12.094-14.576 8.196 0 14.84-6.644 14.84-14.84h-.494c8.199 0 15.338-6.644 15.338-14.84z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/RS.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\RS.svg");
    }
}
