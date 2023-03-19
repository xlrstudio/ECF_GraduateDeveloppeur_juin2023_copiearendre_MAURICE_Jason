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

/* merci.html.twig */
class __TwigTemplate_38b03fdf4a10b50dee8dfdc3ead013fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "merci.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "merci.html.twig"));

        // line 1
        echo "<div class=\"callout callout-info\">
    <div class=\"container\">
        <h4>Welcome to the demo site for UserFrosting 4.1!</h4>
        <ul>
            <li>
                <b>Be sure to register with a valid email address.</b> Then check your email and click on the verification link.
            </li>
            <li>
                When you sign in, you will be placed in your own <b>brand new </b>user group.
            </li>
            <li>
                As the 'group administrator' you will be able to view, create, update, and delete user accounts <b>in this group.</b>
            </li>
        </ul>

    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "merci.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"callout callout-info\">
    <div class=\"container\">
        <h4>Welcome to the demo site for UserFrosting 4.1!</h4>
        <ul>
            <li>
                <b>Be sure to register with a valid email address.</b> Then check your email and click on the verification link.
            </li>
            <li>
                When you sign in, you will be placed in your own <b>brand new </b>user group.
            </li>
            <li>
                As the 'group administrator' you will be able to view, create, update, and delete user accounts <b>in this group.</b>
            </li>
        </ul>

    </div>", "merci.html.twig", "C:\\xampp\\apps\\symfony\\templates\\merci.html.twig");
    }
}
