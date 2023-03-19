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

/* user/Profile.html.twig */
class __TwigTemplate_f811cf7ae2e7ae0db20d7dd034df611f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>

    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js\"/>

    <link rel=\"stylesheet\" href=\"public/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"public/css/style.css\">

    <script src=\"public/asset/js/bootstrap.bundle.js\" defer></script>

    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"public/css/bootstrap/bootstrap.css\">

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
    <link rel=\"stylesheet\" href=\"public/css/style.css\" />


</head>
<body>
";
        // line 49
        $this->loadTemplate("navbar.html.twig", "user/Profile.html.twig", 49)->display($context);
        // line 50
        $this->displayBlock('css', $context, $blocks);
        // line 52
        echo "<div class=\"container\">
    <img src=\"/asset/media/img/profile.png\" alt=\"\">
</div>

<div>
    <h1>Mon profil </h1>
</div>
<div>

</div>
<div class=\"space\"></div>
<div class=\"container-xxl nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
    <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
    <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)]), "html", null, true);
        echo "\" class=\"nav-link px-2 link-dark\">Modifications</a></li>
    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit.password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" class=\"nav-link px-2 link-dark\">Changer Mot de passe</a></li>
    <a href=\"/logout\" class=\"nav-link px-2 link-dark\">Se déconnecter</a></li>

</div>


</body>
";
        // line 73
        $this->loadTemplate("footer.html.twig", "user/Profile.html.twig", 73)->display($context);
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 76
        echo "</html>";
    }

    // line 50
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 74
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "user/Profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 74,  130 => 50,  126 => 76,  124 => 74,  122 => 73,  112 => 66,  108 => 65,  93 => 52,  91 => 50,  89 => 49,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/Profile.html.twig", "C:\\xampp\\apps\\symfony\\templates\\user\\Profile.html.twig");
    }
}
