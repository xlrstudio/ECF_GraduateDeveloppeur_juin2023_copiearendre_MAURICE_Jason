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

/* @EasyAdmin/page/index.html.twig */
class __TwigTemplate_871a16f277741b16c2af9fe1067741bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
            'head_javascript' => [$this, 'block_head_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/index.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/layout.html.twig", "@EasyAdmin/page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.dashboard"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <style>

        .buttons-container {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button {
            background: white;
            border: solid 2px black;
            padding: .375em 1.125em;
            font-size: 1rem;
        }

        .button-arounder {
            font-size: 2rem;
            background: hsl(190deg, 30%, 15%);
            color: hsl(190deg, 10%, 95%);

            box-shadow: 0 0px 0px hsla(190deg, 15%, 5%, .2);
            transfrom: translateY(0);
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;

            --dur: .15s;
            --delay: .15s;
            --radius: 16px;

            transition:
                    border-top-left-radius var(--dur) var(--delay) ease-out,
                    border-top-right-radius var(--dur) calc(var(--delay) * 2) ease-out,
                    border-bottom-right-radius var(--dur) calc(var(--delay) * 3) ease-out,
                    border-bottom-left-radius var(--dur) calc(var(--delay) * 4) ease-out,
                    box-shadow calc(var(--dur) * 4) ease-out,
                    transform calc(var(--dur) * 4) ease-out,
                    background calc(var(--dur) * 4) steps(4, jump-end);
        }

        .button-arounder:hover,
        .button-arounder:focus {
            box-shadow: 0 4px 8px hsla(190deg, 15%, 5%, .2);
            transform: translateY(-4px);
            background: hsl(230deg, 50%, 45%);
            border-top-left-radius: var(--radius);
            border-top-right-radius: var(--radius);
            border-bottom-left-radius: var(--radius);
            border-bottom-right-radius: var(--radius);
        }
    </style>


    <div class=\"d-flex justify-content-center\">
        <img src=\"/asset/media/img/logo10.png\" alt=\"\">
    </div>
<div class=\"mb-3 text-center\">
    <div class=\"themed-grid-col text-center\">
        <h2>Panneau d'administration</h2>
        <p>Espace réservé aux personnels autorisés</p>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><i>Vous trouverez dans le menu :</i></div>
            <div class=\"panel-heading\"><i>Le formulaire de reservation</i></div>
            <div class=\"panel-heading\"><i>Les messages</i></div>
            <div class=\"panel-heading\"><i>L'inscription</i></div>
            <div class=\"panel-body\">
                <div id=\"chart-2-container\" class=\"text-center\"><img src=\"img/default.gif\" alt=\"\"/></div>
            </div>
        </div>
    </div>
</div>

    <div class=\"mb-3 text-center buttons-container\">
        <button class=\"button-arounder\"><a href=\"/formulaire\" style=\"color:#ffffff;\">Changer les photos de la page d'accueil</a></button>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 87
        echo "    ";
        $this->displayParentBlock("head_javascript", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 87,  177 => 86,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/layout.html.twig' %}

{% block content_title %}{{ 'menu.dashboard'|trans }}{% endblock %}

{% block main %}
    <style>

        .buttons-container {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button {
            background: white;
            border: solid 2px black;
            padding: .375em 1.125em;
            font-size: 1rem;
        }

        .button-arounder {
            font-size: 2rem;
            background: hsl(190deg, 30%, 15%);
            color: hsl(190deg, 10%, 95%);

            box-shadow: 0 0px 0px hsla(190deg, 15%, 5%, .2);
            transfrom: translateY(0);
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;

            --dur: .15s;
            --delay: .15s;
            --radius: 16px;

            transition:
                    border-top-left-radius var(--dur) var(--delay) ease-out,
                    border-top-right-radius var(--dur) calc(var(--delay) * 2) ease-out,
                    border-bottom-right-radius var(--dur) calc(var(--delay) * 3) ease-out,
                    border-bottom-left-radius var(--dur) calc(var(--delay) * 4) ease-out,
                    box-shadow calc(var(--dur) * 4) ease-out,
                    transform calc(var(--dur) * 4) ease-out,
                    background calc(var(--dur) * 4) steps(4, jump-end);
        }

        .button-arounder:hover,
        .button-arounder:focus {
            box-shadow: 0 4px 8px hsla(190deg, 15%, 5%, .2);
            transform: translateY(-4px);
            background: hsl(230deg, 50%, 45%);
            border-top-left-radius: var(--radius);
            border-top-right-radius: var(--radius);
            border-bottom-left-radius: var(--radius);
            border-bottom-right-radius: var(--radius);
        }
    </style>


    <div class=\"d-flex justify-content-center\">
        <img src=\"/asset/media/img/logo10.png\" alt=\"\">
    </div>
<div class=\"mb-3 text-center\">
    <div class=\"themed-grid-col text-center\">
        <h2>Panneau d'administration</h2>
        <p>Espace réservé aux personnels autorisés</p>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><i>Vous trouverez dans le menu :</i></div>
            <div class=\"panel-heading\"><i>Le formulaire de reservation</i></div>
            <div class=\"panel-heading\"><i>Les messages</i></div>
            <div class=\"panel-heading\"><i>L'inscription</i></div>
            <div class=\"panel-body\">
                <div id=\"chart-2-container\" class=\"text-center\"><img src=\"img/default.gif\" alt=\"\"/></div>
            </div>
        </div>
    </div>
</div>

    <div class=\"mb-3 text-center buttons-container\">
        <button class=\"button-arounder\"><a href=\"/formulaire\" style=\"color:#ffffff;\">Changer les photos de la page d'accueil</a></button>
    </div>
{% endblock %}

{% block head_javascript %}
    {{ parent() }}
{% endblock %}", "@EasyAdmin/page/index.html.twig", "C:\\xampp\\apps\\symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\index.html.twig");
    }
}
