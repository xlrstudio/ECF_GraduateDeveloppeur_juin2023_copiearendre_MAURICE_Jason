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

/* user/base.html.twig */
class __TwigTemplate_99f3c3f562b381f7f5cfa166b6518d47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    <!DOCTYPE html>
    <html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>QUAI ANTIQUE</title>

        <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
        <link rel=\"stylesheet\" href=\"/css/style.css\">

        <script src=\"/assets/js/script.js\" defer></script>

        <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Lora&display=swap\" rel=\"stylesheet\">

        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap\" rel=\"stylesheet\">


        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&display=swap\" rel=\"stylesheet\">

        <!--  jQuery -->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>

        <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
        <link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/bootstrap-iso.css\" />

        <!-- Bootstrap Date-Picker Plugin -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\"/>

    </head>

    </head>
<body>
";
        // line 63
        $this->loadTemplate("navbar.html.twig", "user/base.html.twig", 63)->display($context);
        // line 64
        $this->displayBlock('css', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->loadTemplate("user/edit.html.twig", "user/base.html.twig", 67)->display($context);
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "

";
        // line 72
        $this->loadTemplate("footer.html.twig", "user/base.html.twig", 72)->display($context);
        // line 73
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!
        ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/united/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/united/_variables.scss\">
        <link rel=\"stylesheet\" href=\"/style.css\">
    ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js\" integrity=\"sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT\" crossorigin=\"anonymous\"></script>
    ";
    }

    // line 64
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 73
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "user/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 73,  169 => 68,  163 => 64,  157 => 16,  153 => 15,  146 => 10,  142 => 9,  134 => 6,  127 => 75,  125 => 73,  123 => 72,  119 => 70,  117 => 68,  115 => 67,  112 => 66,  110 => 64,  108 => 63,  62 => 19,  60 => 15,  57 => 14,  55 => 9,  52 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/base.html.twig", "C:\\xampp\\apps\\symfony\\templates\\user\\base.html.twig");
    }
}
