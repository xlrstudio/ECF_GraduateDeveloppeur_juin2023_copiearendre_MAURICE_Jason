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

/* user/Profile.html.twig */
class __TwigTemplate_299cfd0545d92b1d9a3b69252a24f433 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

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
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" defer></script>

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
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"public/asset/css/style.css\">
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
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
                </li>
                <ul>
                    <div class=\"navbar\">
                        <div class=\"dropdown\">
                            <button class=\"dropbtn\">Espace Personnel
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <div class=\"dropdown-content\">
                                <a href=\"/profile\" class=\"nav-link px-2 link-dark\">Profil</a></li>
                                <a href=\"/inscription\" class=\"nav-link px-2 link-dark\">Inscription</a></li>
                                <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
                                <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>
                            </div>

                        </div>
                    </div>


        </div>
    </div>
</header>
";
        // line 118
        echo "
<h1>Welcome ";
        // line 119
        $this->displayBlock('content', $context, $blocks);
        echo "!</h1>

<div class=\"container\">


    <img src=\"/asset/media/img/profile.png\" alt=\"\">
</div>

<div>
</div>
<div>

</div>
<div class=\"space\"></div>
<div class=\"container-xxl nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
    <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
    <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135)]), "html", null, true);
        echo "\" class=\"nav-link px-2 link-dark\">Modifications</a></li>
    <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit.password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136)]), "html", null, true);
        echo "\" class=\"nav-link px-2 link-dark\">Changer Mot de passe</a></li>
    <a href=\"/logout\" class=\"nav-link px-2 link-dark\">Se déconnecter</a></li>
</div>
<div class=\"container-xxl nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
    <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
    <li><a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
</div>

</body>
<div class=\"space\"></div>

<div class=\"container-xs\">
    <footer class=\"container-2\">
        <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
            <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
            <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
            <li><a href=\"/formulaire\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
            <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>
            <li class=\"nav-item\"><a href=\"/mentionslegales\" class=\"nav-link px-2 text-muted\">Mentions légales</a></li>
        </ul>
        <p class=\"text-center text-muted\">© 2023 Jason MAURICE</p>
        <div class=\"container-4\">
            <h5>
                Nos horaires d'ouvertures
            </h5>
        </div>
        <div class=\"container\">
            <table class=\"table\">

                <tbody>
                <tr>
                    <td>Lundi</td>
                    <td class=\"color-table\">12:00 - 14:30</td>
                    <td class=\"color-table\">19:00 - 22:30</td>
                </tr>
                <tr>
                    <td>Mardi</td>
                    <td class=\"color-table\">12:00 - 14:30</td>
                    <td class=\"color-table\">19:00 - 22:30</td>
                </tr>
                <tr>
                    <td>Mercredi</td>
                    <td class=\"color-table\">12:00 - 14:30</td>
                    <td class=\"color-table\">19:00 - 21:30</td>
                </tr>
                <tr>
                    <td>Jeudi</td>
                    <td class=\"color-table\">12:00 - 14:30</td>
                    <td class=\"color-table\">19:00 - 22:30</td>
                </tr>
                <tr>
                    <td>Vendredi</td>
                    <td class=\"color-table\">12:00 - 15:00</td>
                    <td class=\"color-table\">19:00 - 23:00</td>
                </tr>

                <tr>
                    <td>Samedi</td>
                    <td class=\"color-table\">19:00 - 23:00</td>
                </tr>
                <tr>
                    <td>Dimanche</td>
                    <td class=\"color-table\">Fermé</td>
                </tr>

                </tbody>
            </table>
        </div>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 119
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "nom", [], "any", false, false, false, 119), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/Profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 119,  220 => 141,  212 => 136,  208 => 135,  189 => 119,  186 => 118,  161 => 95,  99 => 36,  78 => 18,  72 => 15,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

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
<script src=\"{{ asset('js/script.js') }}\" defer></script>

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
                </li>
                <ul>
                    <div class=\"navbar\">
                        <div class=\"dropdown\">
                            <button class=\"dropbtn\">Espace Personnel
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <div class=\"dropdown-content\">
                                <a href=\"/profile\" class=\"nav-link px-2 link-dark\">Profil</a></li>
                                <a href=\"/inscription\" class=\"nav-link px-2 link-dark\">Inscription</a></li>
                                <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
                                <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>
                            </div>

                        </div>
                    </div>


        </div>
    </div>
</header>
{# templates/user/Profile.html.twig #}

<h1>Welcome {% block content %}{{ user.nom }}{% endblock %}!</h1>

<div class=\"container\">


    <img src=\"/asset/media/img/profile.png\" alt=\"\">
</div>

<div>
</div>
<div>

</div>
<div class=\"space\"></div>
<div class=\"container-xxl nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
    <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
    <a href=\"{{ path('user.edit', {id : app.user.id}) }}\" class=\"nav-link px-2 link-dark\">Modifications</a></li>
    <a href=\"{{ path('user.edit.password', {id : app.user.id}) }}\" class=\"nav-link px-2 link-dark\">Changer Mot de passe</a></li>
    <a href=\"/logout\" class=\"nav-link px-2 link-dark\">Se déconnecter</a></li>
</div>
<div class=\"container-xxl nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
    <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
    <li><a href=\"{{ path('formulaire') }}\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
</div>

</body>
<div class=\"space\"></div>

<div class=\"container-xs\">
    <footer class=\"container-2\">
        <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
            <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
            <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
            <li><a href=\"/formulaire\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
            <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>
            <li class=\"nav-item\"><a href=\"/mentionslegales\" class=\"nav-link px-2 text-muted\">Mentions légales</a></li>
        </ul>
        <p class=\"text-center text-muted\">© 2023 Jason MAURICE</p>
        <div class=\"container-4\">
            <h5>
                Nos horaires d'ouvertures
            </h5>
        </div>
        <div class=\"container\">
            <table class=\"table\">

                <tbody>
                <tr>
                    <td>Lundi</td>
                    <td class=\"color-table\">12:00 - 14:30</td>
                    <td class=\"color-table\">19:00 - 22:30</td>
                </tr>
                <tr>
                    <td>Mardi</td>
                    <td class=\"color-table\">12:00 - 14:30</td>
                    <td class=\"color-table\">19:00 - 22:30</td>
                </tr>
                <tr>
                    <td>Mercredi</td>
                    <td class=\"color-table\">12:00 - 14:30</td>
                    <td class=\"color-table\">19:00 - 21:30</td>
                </tr>
                <tr>
                    <td>Jeudi</td>
                    <td class=\"color-table\">12:00 - 14:30</td>
                    <td class=\"color-table\">19:00 - 22:30</td>
                </tr>
                <tr>
                    <td>Vendredi</td>
                    <td class=\"color-table\">12:00 - 15:00</td>
                    <td class=\"color-table\">19:00 - 23:00</td>
                </tr>

                <tr>
                    <td>Samedi</td>
                    <td class=\"color-table\">19:00 - 23:00</td>
                </tr>
                <tr>
                    <td>Dimanche</td>
                    <td class=\"color-table\">Fermé</td>
                </tr>

                </tbody>
            </table>
        </div>
</html>", "user/Profile.html.twig", "C:\\xampp\\apps\\symfony\\templates\\user\\Profile.html.twig");
    }
}
