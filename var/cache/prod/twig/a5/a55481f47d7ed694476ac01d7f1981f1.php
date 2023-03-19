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

/* user/edit_password.html.twig */
class __TwigTemplate_15df0af6a41b2a16183ee1e295278bb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
        echo "<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>

\t</title>
\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
\t";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "\t<!DOCTYPE html>
\t<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>QUAI ANTIQUE</title>

\t\t<link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">

\t\t<script src=\"/assets/js/script.js\" defer></script>

\t\t<link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Lora&display=swap\" rel=\"stylesheet\">

\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap\" rel=\"stylesheet\">


\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&display=swap\" rel=\"stylesheet\">

\t\t<!--  jQuery -->
\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>

\t\t<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
\t\t<link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/bootstrap-iso.css\" />

\t\t<!-- Bootstrap Date-Picker Plugin -->
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\"/>

\t</head>

\t";
        // line 59
        $this->loadTemplate("navbar.html.twig", "user/edit_password.html.twig", 59)->display($context);
        // line 60
        $this->displayBlock('css', $context, $blocks);
        // line 62
        echo "

";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 78
        $this->loadTemplate("footer.html.twig", "user/edit_password.html.twig", 78)->display($context);
        // line 79
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/united/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/united/_variables.scss\">
\t\t<link rel=\"stylesheet\" href=\"/style.css\">
\t";
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js\" integrity=\"sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT\" crossorigin=\"anonymous\"></script>
\t";
    }

    // line 60
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "\t<div class=\"container-xxl\">
\t\t<h1 class=\"mt-4\">Formulaire de modification de mot de passse de l'utilisateur</h1>
\t\t<br><br>

\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "warning"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "\t\t\t<div class=\"alert alert-warning mt-4\">
\t\t\t\t";
            // line 71
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
\t\t";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
\t\t</div>
\t";
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "user/edit_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 79,  173 => 75,  170 => 74,  161 => 71,  158 => 70,  154 => 69,  148 => 65,  144 => 64,  138 => 60,  132 => 14,  128 => 13,  121 => 8,  117 => 7,  113 => 79,  111 => 78,  109 => 64,  105 => 62,  103 => 60,  101 => 59,  57 => 17,  55 => 13,  52 => 12,  50 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/edit_password.html.twig", "C:\\xampp\\apps\\symfony\\templates\\user\\edit_password.html.twig");
    }
}