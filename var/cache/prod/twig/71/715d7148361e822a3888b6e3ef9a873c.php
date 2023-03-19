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

/* login/index.html.twig */
class __TwigTemplate_618f2a0824267f669bc76d249f44df19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyy' => [$this, 'block_bodyy'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_bodyy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        if (($context["error"] ?? null)) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "<div class=justify-content-center container-xxl nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
    <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
        <label for=\"username\">Email:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\">

        ";
        // line 20
        echo "
        <button type=\"submit\">login</button>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  67 => 13,  62 => 11,  59 => 10,  53 => 8,  50 => 7,  46 => 6,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\login\\index.html.twig");
    }
}
