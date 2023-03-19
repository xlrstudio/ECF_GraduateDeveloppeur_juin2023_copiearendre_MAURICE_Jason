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
class __TwigTemplate_2f973902f0b7c7ddde89d1931a21adc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "1-booking.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "1-booking.html"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "1-booking.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
</html>", "1-booking.html", "C:\\xampp\\apps\\symfony\\templates\\1-booking.html");
    }
}
