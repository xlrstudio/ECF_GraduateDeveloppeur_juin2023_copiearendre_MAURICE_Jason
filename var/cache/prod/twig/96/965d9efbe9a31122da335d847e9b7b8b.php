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

/* 1-booking.html */
class __TwigTemplate_599b549075c1fb60e6348b0adbeebe06 extends Template
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
    <script src=\"assets//1-booking.js\"></script>
  </head>
  <body>
    <form id=\"bookForm\" onsubmit=\"return book();\">
      <label for=\"name\">Name</label>
      <input type=\"text\" name=\"name\" required>

      <label for=\"email\">Email</label>
      <input type=\"email\" name=\"email\" required>

      <label for=\"date\">Date</label>
      <input type=\"date\" name=\"date\" required>

      <input type=\"submit\" value=\"Go!\" disabled id=\"bookGo\">
    </form>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "1-booking.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "1-booking.html", "C:\\xampp\\apps\\symfony\\templates\\1-booking.html");
    }
}
