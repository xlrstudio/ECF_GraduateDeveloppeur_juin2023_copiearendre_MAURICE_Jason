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
class __TwigTemplate_9f2119756ad87e607b6e994c74dddbd8 extends Template
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
    }

    public function getTemplateName()
    {
        return "merci.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "merci.html.twig", "C:\\xampp\\apps\\symfony\\templates\\merci.html.twig");
    }
}
