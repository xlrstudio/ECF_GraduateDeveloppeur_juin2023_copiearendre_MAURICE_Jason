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

/* components/_comment.html.twig */
class __TwigTemplate_e6a166a4ef392959f3e339ec5cd62616 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_comment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_comment.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 1, $this->source); })()), "isApproved", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"comment flex justify-start mb-4 relative\">
        ";
            // line 3
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3) == twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 3, $this->source); })()), "author", [], "any", false, false, false, 3))) {
                // line 4
                echo "            <div class=\"comment__delete absolute right-0\">
                <form name=\"comment_delete\" method=\"post\" action=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment.delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "html", null, true);
                echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7))), "html", null, true);
                echo "\">
                    <button type=\"submit\" class=\"btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" viewbox=\"0 0 20 20\" fill=\"red\">
                            <path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\"/>
                        </svg>
                    </button>
                </form>

            </div>
        ";
            }
            // line 17
            echo "        <div>
            <div class=\"block p-6 rounded-lg shadow-lg bg-white\">
                <div class=\"md:flex md:flex-row\">
                    <div class=\"md:w-96 w-24 flex justify-center items-center mb-6 lg:mb-0 mx-auto md:mx-0\">
                        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 21, $this->source); })()), "author", [], "any", false, false, false, 21), "avatar", [], "any", false, false, false, 21)) {
                // line 22
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 22, $this->source); })()), "author", [], "any", false, false, false, 22), "avatar", [], "any", false, false, false, 22), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 22, $this->source); })()), "author", [], "any", false, false, false, 22), "html", null, true);
                echo "'s avatar\"/>
                        ";
            } else {
                // line 24
                echo "                            <img src=\"https://yt3.ggpht.com/QAbtCWyrOI4SbZIqzQP7w8C9fWQhHfSg7UoIDUmDlOpVlkbvTuOJc8E-R8K8wh0Pe9Vki7VsOr8=s88-c-k-c0x00ffffff-no-rj\" alt=\"Avatar\">
                        ";
            }
            // line 26
            echo "                    </div>
                    <div class=\"md:ml-6\">
                        <p class=\"text-gray-500 font-light mb-6\">
                            ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29);
            echo "
                        </p>
                        <p class=\"font-semibold text-xl mb-2 text-gray-800\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 31, $this->source); })()), "author", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  96 => 29,  91 => 26,  87 => 24,  79 => 22,  77 => 21,  71 => 17,  58 => 7,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if comment.isApproved %}
    <div class=\"comment flex justify-start mb-4 relative\">
        {% if app.user == comment.author %}
            <div class=\"comment__delete absolute right-0\">
                <form name=\"comment_delete\" method=\"post\" action=\"{{ path('comment.delete', {'id': comment.id}) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                    <button type=\"submit\" class=\"btn\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" viewbox=\"0 0 20 20\" fill=\"red\">
                            <path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\"/>
                        </svg>
                    </button>
                </form>

            </div>
        {% endif %}
        <div>
            <div class=\"block p-6 rounded-lg shadow-lg bg-white\">
                <div class=\"md:flex md:flex-row\">
                    <div class=\"md:w-96 w-24 flex justify-center items-center mb-6 lg:mb-0 mx-auto md:mx-0\">
                        {% if comment.author.avatar %}
                            <img src=\"{{ comment.author.avatar }}\" alt=\"{{ comment.author }}'s avatar\"/>
                        {% else %}
                            <img src=\"https://yt3.ggpht.com/QAbtCWyrOI4SbZIqzQP7w8C9fWQhHfSg7UoIDUmDlOpVlkbvTuOJc8E-R8K8wh0Pe9Vki7VsOr8=s88-c-k-c0x00ffffff-no-rj\" alt=\"Avatar\">
                        {% endif %}
                    </div>
                    <div class=\"md:ml-6\">
                        <p class=\"text-gray-500 font-light mb-6\">
                            {{ comment.content|raw }}
                        </p>
                        <p class=\"font-semibold text-xl mb-2 text-gray-800\">{{ comment.author }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endif %}", "components/_comment.html.twig", "C:\\xampp\\apps\\symfony\\templates\\components\\_comment.html.twig");
    }
}
