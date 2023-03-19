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

/* components/_like.html.twig */
class __TwigTemplate_c346706a89cf4629268056408b1db11e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_like.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_like.html.twig"));

        // line 1
        echo "<div class=\"p-3\">
\t<div class=\"flex\">
\t\t";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3)) {
            // line 4
            echo "\t\t\t<a class=\"flex w-fit\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like.post", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\" data-action=\"like\" data-nb=";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "likes", [], "any", false, false, false, 4)), "html", null, true);
            echo ">
\t\t\t";
        }
        // line 6
        echo "
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h6 w-6 filled ";
        // line 7
        echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 7, $this->source); })()), "likes", [], "any", false, false, false, 7))) ? ("") : ("hidden"));
        echo "\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t<path d=\"M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z\"/>
\t\t\t</svg>
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 unfilled ";
        // line 10
        echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "likes", [], "any", false, false, false, 10))) ? ("hidden") : (""));
        echo "\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5\"/>
\t\t\t</svg>

\t\t\t<span class=\"ml-2\">";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "likes", [], "any", false, false, false, 14)), "html", null, true);
        echo "
\t\t\t\tJ'aime</span>
\t\t\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t\t\t</a>
\t\t";
        }
        // line 19
        echo "\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_like.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  80 => 17,  78 => 16,  73 => 14,  66 => 10,  60 => 7,  57 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"p-3\">
\t<div class=\"flex\">
\t\t{% if app.user %}
\t\t\t<a class=\"flex w-fit\" href=\"{{ path('like.post', {id: post.id}) }}\" data-action=\"like\" data-nb={{ post.likes|length }}>
\t\t\t{% endif %}

\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h6 w-6 filled {{ app.user in post.likes ? '' : 'hidden' }}\" viewbox=\"0 0 20 20\" fill=\"currentColor\">
\t\t\t\t<path d=\"M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z\"/>
\t\t\t</svg>
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 unfilled {{ app.user in post.likes ? 'hidden' : '' }}\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5\"/>
\t\t\t</svg>

\t\t\t<span class=\"ml-2\">{{ post.likes|length }}
\t\t\t\tJ'aime</span>
\t\t\t{% if app.user %}
\t\t\t</a>
\t\t{% endif %}
\t</div>
</div>
", "components/_like.html.twig", "C:\\xampp\\apps\\symfony\\templates\\components\\_like.html.twig");
    }
}
