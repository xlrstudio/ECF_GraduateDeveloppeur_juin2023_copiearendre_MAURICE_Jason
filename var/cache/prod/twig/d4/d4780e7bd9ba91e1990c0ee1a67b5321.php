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

/* user/RegisterValidation.html.twig */
class __TwigTemplate_fa445faf66771824974cc93fd215d043 extends Template
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
            'form' => [$this, 'block_form'],
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

    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    <script src=\"/assets/";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.js"), "html", null, true);
        echo "\" defer></script>

    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">

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


<div>

    ";
        // line 52
        $this->loadTemplate("navbar.html.twig", "user/RegisterValidation.html.twig", 52)->display($context);
        // line 53
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 55
        echo "

    <div>



        <div class=\"container\">
            <img src=\"/asset/media/img/logo7.png\" alt=\"\">
        </div>

        <div>
            <h1>Vous êtes inscrit</h1>
            <H3>Vous recevrez nos prochaines infos</H3>
        </div>
        <div>

        </div>
        <div class=\"space\"></div>
        <div class=\"container\">
            <div class= container-xl>
                ";
        // line 75
        $this->displayBlock('form', $context, $blocks);
        // line 81
        echo "            </div>

        </div>







        ";
        // line 91
        $this->loadTemplate("footer.html.twig", "user/RegisterValidation.html.twig", 91)->display($context);
        // line 92
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "

    </div>
</div>
</section>
</body>
</html>";
    }

    // line 53
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
    }

    // line 75
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 77), 'row');
        echo "
                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 78), 'row');
        echo "
                    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                ";
    }

    // line 92
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "        ";
    }

    public function getTemplateName()
    {
        return "user/RegisterValidation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 93,  189 => 92,  183 => 79,  179 => 78,  175 => 77,  170 => 76,  166 => 75,  162 => 54,  158 => 53,  148 => 94,  145 => 92,  143 => 91,  131 => 81,  129 => 75,  107 => 55,  104 => 53,  102 => 52,  67 => 20,  59 => 15,  54 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/RegisterValidation.html.twig", "C:\\xampp\\apps\\symfony\\templates\\user\\RegisterValidation.html.twig");
    }
}
