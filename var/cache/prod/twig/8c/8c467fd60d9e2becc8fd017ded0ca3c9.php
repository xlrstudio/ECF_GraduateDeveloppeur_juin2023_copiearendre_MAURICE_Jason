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

/* base.html.twig */
class __TwigTemplate_80931baa32c094f5c46e7216b7a11ae3 extends Template
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
            'bodyy' => [$this, 'block_bodyy'],
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

    <link rel=\"stylesheet\" href=\"public/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"public/css/style.css\">

    <script src=\"public/asset/js/script.js\" defer></script>

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


<div>

    ";
        // line 46
        $this->loadTemplate("navbar.html.twig", "base.html.twig", 46)->display($context);
        // line 47
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 49
        echo "

    <div>



        <div class=\"container\">
            <img src=\"/asset/media/img/logo8.png\" alt=\"\">
        </div>

        <div>
            <h1>Se connecter</h1>
        </div>
        <div>

        </div>
        <div class=\"space\"></div>
        <div class=\"container-xxl nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\"\">
            ";
        // line 67
        $this->displayBlock('bodyy', $context, $blocks);
        // line 85
        echo "        </div>






        ";
        // line 92
        $this->loadTemplate("footer.html.twig", "base.html.twig", 92)->display($context);
        // line 93
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "

    </div>
</div>
</section>
</body>
</html>";
    }

    // line 47
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
    }

    // line 67
    public function block_bodyy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                ";
        if (($context["error"] ?? null)) {
            // line 69
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 69), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 71
        echo "
                <form action=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                    <label for=\"username\">Email:</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">

                    <label for=\"password\">Password:</label>
                    <input type=\"password\" id=\"password\" name=\"_password\">

                    ";
        // line 81
        echo "
                    <button type=\"submit\">login</button>
                </form>
            ";
    }

    // line 93
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 94,  182 => 93,  175 => 81,  167 => 74,  162 => 72,  159 => 71,  153 => 69,  150 => 68,  146 => 67,  142 => 48,  138 => 47,  128 => 95,  125 => 93,  123 => 92,  114 => 85,  112 => 67,  92 => 49,  89 => 47,  87 => 46,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\apps\\symfony\\templates\\base.html.twig");
    }
}
