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

/* user/inscription.html.twig */
class __TwigTemplate_27e0db33f5ed722560845fab931b0008 extends Template
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
    <link rel=\"stylesheet\" href=\"public/css/style.css\">

    <script src=\"public/js/bootstrap.bundle.js\" defer></script>

    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap/bootstrap.css\">

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
        $this->loadTemplate("navbar.html.twig", "user/inscription.html.twig", 52)->display($context);
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
            <h1>Programmer un mariage ?</h1>
            <H3> Un événement ?</H3>
        </div>
        <div>

        </div>
        <div class=\"space\"></div>
        <div class=\"container\">
            <div class= container-xl>
                ";
        // line 75
        $this->displayBlock('form', $context, $blocks);
        // line 86
        echo "            </div>

        </div>







        ";
        // line 96
        $this->loadTemplate("footer.html.twig", "user/inscription.html.twig", 96)->display($context);
        // line 97
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 99
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nom", [], "any", false, false, false, 77), 'row');
        echo "
                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Prenom", [], "any", false, false, false, 78), 'row');
        echo "
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tel", [], "any", false, false, false, 79), 'row');
        echo "
                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Couverts", [], "any", false, false, false, 80), 'row');
        echo "
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Allergies", [], "any", false, false, false, 81), 'row');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 82), 'row');
        echo "
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 83), 'row');
        echo "
                    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                ";
    }

    // line 97
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "        ";
    }

    public function getTemplateName()
    {
        return "user/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 98,  200 => 97,  194 => 84,  190 => 83,  186 => 82,  182 => 81,  178 => 80,  174 => 79,  170 => 78,  166 => 77,  161 => 76,  157 => 75,  153 => 54,  149 => 53,  139 => 99,  136 => 97,  134 => 96,  122 => 86,  120 => 75,  98 => 55,  95 => 53,  93 => 52,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/inscription.html.twig", "C:\\xampp\\apps\\symfony\\templates\\user\\inscription.html.twig");
    }
}
