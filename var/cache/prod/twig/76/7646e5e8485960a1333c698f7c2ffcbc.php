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

/* 2-thank-you.html */
class __TwigTemplate_bcb0e8d7dca45c0365fcbf24ab499432 extends Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>JS Booking</title>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"assets/0-dummy.css\">
    </style>
  </head>
  <body>
    <h1>THANK YOU</h1>
    <p>We have received your booking request.</p>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "2-thank-you.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2-thank-you.html", "C:\\xampp\\apps\\symfony\\templates\\2-thank-you.html");
    }
}
