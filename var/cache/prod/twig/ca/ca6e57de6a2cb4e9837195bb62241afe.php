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

/* connection.html.twig */
class __TwigTemplate_6173c96e92e25cb5600d449e3ca7e903 extends Template
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
            'Message' => [$this, 'block_Message'],
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

</head>  ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "connection.html.twig", 31)->display($context);
        // line 32
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "
</header>

<div class=\"container\">
  
<div class=\"text-center\">

";
        // line 41
        $this->displayBlock('Message', $context, $blocks);
        // line 50
        echo "</div>
</div>
</body>


";
        // line 55
        $this->loadTemplate("footer.html.twig", "connection.html.twig", 55)->display($context);
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "


</div>
</div>
</section>
</body>
</html>";
    }

    // line 32
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 41
    public function block_Message($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Title", [], "any", false, false, false, 43), 'row');
        echo "
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Message", [], "any", false, false, false, 44), 'row');
        echo "
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "UserEmail", [], "any", false, false, false, 45), 'row');
        echo "
    <input type=\"submit\" />
    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  137 => 47,  132 => 45,  128 => 44,  124 => 43,  119 => 42,  115 => 41,  109 => 32,  98 => 58,  96 => 56,  94 => 55,  87 => 50,  85 => 41,  76 => 34,  74 => 32,  72 => 31,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "connection.html.twig", "C:\\xampp\\apps\\symfony\\templates\\connection.html.twig");
    }
}
