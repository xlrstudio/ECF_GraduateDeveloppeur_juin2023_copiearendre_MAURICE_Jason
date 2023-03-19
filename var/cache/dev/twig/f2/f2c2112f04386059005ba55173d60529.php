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

/* navbar.html.twig */
class __TwigTemplate_9d23991f3d9c53199342085ad495c809 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "<head>

    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/styles/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/styles/app.css"), "html", null, true);
        echo "\">



    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

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
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
   <link rel=\"stylesheet\" href=\"public/asset/css/style.css\">
  </head>
</head>
    <header class=\"p-3 mb-3 border-bottom\">
        <style>
            /* Dropdown Button */
            .dropbtn {
                background-color: #B6AC97;
                color: white;
                padding: 10px;
                font-size: 16px;
                border: none;
                border-radius: 3px;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #ddd;}

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {display: block;}

            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {background-color: #533c11;}
        </style>
        <div class=\"container\">
            <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">


                <ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
                    <li><a href=\"/accueil\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none\">
                        <img class=\"bi me-2\" width=\"40\" height=\"40\" role=\"img\" aria-label=\"Bootstrap\" src=\"asset/media/img/logo2.png\"> </img>
                    </a></li>
                    <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
                    <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
                    <li><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
                     ";
        // line 95
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95)) {
            echo "<li>
                        <a href=\"/inscription\" class=\"nav-link px-2 link-dark\">Inscription</a></li>
                         <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>
                     ";
        }
        // line 99
        echo "
                    <ul>
                        ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
            // line 102
            echo "
                        <div class=\"bar\">
                            <div class=\"dropdown\">
                                <button class=\"dropbtn\">Espace Personnel
                                    <i class=\"fa fa-caret-down\"></i>
                                </button>
                                <div class=\"dropdown-content\">

                                    <a href=\"/profile\" class=\"nav-link px-2 link-dark\">Profil</a>
                                    <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
                                    <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>

                                </div>

                            </div>
                        </div>
                        ";
        }
        // line 119
        echo "

            </div>
        </div>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  211 => 119,  192 => 102,  190 => 101,  186 => 99,  179 => 95,  175 => 94,  113 => 35,  90 => 15,  83 => 11,  79 => 10,  75 => 9,  71 => 8,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
<head>

    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/styles/app.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/app.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/styles/app.css') }}\">



    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

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
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap/bootstrap.css') }}\">
   <link rel=\"stylesheet\" href=\"public/asset/css/style.css\">
  </head>
</head>
    <header class=\"p-3 mb-3 border-bottom\">
        <style>
            /* Dropdown Button */
            .dropbtn {
                background-color: #B6AC97;
                color: white;
                padding: 10px;
                font-size: 16px;
                border: none;
                border-radius: 3px;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #ddd;}

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {display: block;}

            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {background-color: #533c11;}
        </style>
        <div class=\"container\">
            <div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">


                <ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
                    <li><a href=\"/accueil\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none\">
                        <img class=\"bi me-2\" width=\"40\" height=\"40\" role=\"img\" aria-label=\"Bootstrap\" src=\"asset/media/img/logo2.png\"> </img>
                    </a></li>
                    <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
                    <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
                    <li><a href=\"{{ path('formulaire') }}\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
                     {% if not app.user %}<li>
                        <a href=\"/inscription\" class=\"nav-link px-2 link-dark\">Inscription</a></li>
                         <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>
                     {% endif %}

                    <ul>
                        {% if app.user %}

                        <div class=\"bar\">
                            <div class=\"dropdown\">
                                <button class=\"dropbtn\">Espace Personnel
                                    <i class=\"fa fa-caret-down\"></i>
                                </button>
                                <div class=\"dropdown-content\">

                                    <a href=\"/profile\" class=\"nav-link px-2 link-dark\">Profil</a>
                                    <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
                                    <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>

                                </div>

                            </div>
                        </div>
                        {% endif %}


            </div>
        </div>
    </header>
{% endblock %}", "navbar.html.twig", "C:\\xampp\\apps\\symfony\\templates\\navbar.html.twig");
    }
}
