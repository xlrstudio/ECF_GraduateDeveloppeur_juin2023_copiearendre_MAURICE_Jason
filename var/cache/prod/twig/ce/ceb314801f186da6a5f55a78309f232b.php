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

/* security/login.html.twig */
class __TwigTemplate_9eb8d321e150d694779821f0111fc146 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "SymRecipe - Connexion
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container\">
\t\t<h1 class=\"mt-4\">Formulaire de connnexion</h1>

\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
\t\t";
        // line 16
        if (($context["error"] ?? null)) {
            // line 17
            echo "\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "
\t\t<form action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
        echo "\" method=\"post\" name=\"login\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"form-label mt-4\">Adresse email</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"exemple@symrecipe.fr\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"password\" class=\"form-label mt-4\">Mot de passe</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"********\">
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-4\">
\t\t\t\tSe connecter
\t\t\t</button>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  97 => 22,  94 => 21,  88 => 18,  85 => 17,  83 => 16,  80 => 15,  71 => 12,  68 => 11,  64 => 10,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\xampp\\apps\\symfony\\templates\\security\\login.html.twig");
    }
}
