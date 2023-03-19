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

/* pages/security/login.html.twig */
class __TwigTemplate_0e60878addec7a61638b6b8026ce62bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "\t\t<div class=\"error login\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
\t";
        }
        // line 10
        echo "
\t<div class=\"flex justify-center items-center flex-wrap h-full g-6 text-gray-800 m-24\">
\t\t<div class=\"grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0\">
\t\t\t<img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\" class=\"w-fit\" alt=\"Phone image\"/>
\t\t</div>
\t\t<div class=\"md:w-8/12 lg:w-5/12 lg:ml-20\">
\t\t\t<form
\t\t\t\tname=\"login\" action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
        echo "\" method=\"post\">
\t\t\t\t<!-- Email input -->
\t\t\t\t<div class=\"mb-6\">
\t\t\t\t\t<input type=\"email\" id=\"username\" name=\"_username\" class=\"form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none\" placeholder=\"Adresse email\" required/>
\t\t\t\t</div>

\t\t\t\t<!-- Password input -->
\t\t\t\t<div class=\"mb-6\">
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none\" placeholder=\"Mot de passe\" required/>
\t\t\t\t</div>

\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t<div class=\"flex justify-between items-center mb-6\">
\t\t\t\t\t<div class=\"form-group form-check\">
\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer\" id=\"_remember_me\" name=\"_remember_me\" checked/>
\t\t\t\t\t\t<label class=\"form-check-label inline-block text-gray-800\" for=\"_remember_me\">Se rappeler de moi</label>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#!\" class=\"text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out\">Mot de passe oublié ?</a>
\t\t\t\t</div>

\t\t\t\t<!-- Submit button -->
\t\t\t\t<button type=\"submit\" class=\"inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full\" data-mdb-ripple=\"true\" data-mdb-ripple-color=\"light\">
\t\t\t\t\tConnexion
\t\t\t\t</button>

\t\t\t\t<div class=\"flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5\">
\t\t\t\t\t<p class=\"text-center font-semibold mx-4 mb-0\">OR</p>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  107 => 17,  98 => 10,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Connexion
{% endblock %}

{% block body %}
\t{% if error %}
\t\t<div class=\"error login\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t{% endif %}

\t<div class=\"flex justify-center items-center flex-wrap h-full g-6 text-gray-800 m-24\">
\t\t<div class=\"grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0\">
\t\t\t<img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg\" class=\"w-fit\" alt=\"Phone image\"/>
\t\t</div>
\t\t<div class=\"md:w-8/12 lg:w-5/12 lg:ml-20\">
\t\t\t<form
\t\t\t\tname=\"login\" action=\"{{ path('security.login') }}\" method=\"post\">
\t\t\t\t<!-- Email input -->
\t\t\t\t<div class=\"mb-6\">
\t\t\t\t\t<input type=\"email\" id=\"username\" name=\"_username\" class=\"form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none\" placeholder=\"Adresse email\" required/>
\t\t\t\t</div>

\t\t\t\t<!-- Password input -->
\t\t\t\t<div class=\"mb-6\">
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none\" placeholder=\"Mot de passe\" required/>
\t\t\t\t</div>

\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t<div class=\"flex justify-between items-center mb-6\">
\t\t\t\t\t<div class=\"form-group form-check\">
\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer\" id=\"_remember_me\" name=\"_remember_me\" checked/>
\t\t\t\t\t\t<label class=\"form-check-label inline-block text-gray-800\" for=\"_remember_me\">Se rappeler de moi</label>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#!\" class=\"text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out\">Mot de passe oublié ?</a>
\t\t\t\t</div>

\t\t\t\t<!-- Submit button -->
\t\t\t\t<button type=\"submit\" class=\"inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full\" data-mdb-ripple=\"true\" data-mdb-ripple-color=\"light\">
\t\t\t\t\tConnexion
\t\t\t\t</button>

\t\t\t\t<div class=\"flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5\">
\t\t\t\t\t<p class=\"text-center font-semibold mx-4 mb-0\">OR</p>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}
", "pages/security/login.html.twig", "C:\\xampp\\apps\\symfony\\templates\\pages\\security\\login.html.twig");
    }
}
