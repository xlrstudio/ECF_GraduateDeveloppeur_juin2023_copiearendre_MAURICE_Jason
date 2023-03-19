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
class __TwigTemplate_e19df2879b8ea4add501470489b87181 extends Template
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
        // line 1
        $this->displayBlock('css', $context, $blocks);
    }

    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<head>
  <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
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
      <a href=\"/accueil\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none\">
        <img class=\"bi me-2\" width=\"40\" height=\"40\" role=\"img\" aria-label=\"Bootstrap\" src=\"asset/media/img/logo2.png\"> </img>
      </a>

      <ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
        <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
        <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
        <ul>

    </div>

    <div class=\"navbar\">
      <div class=\"dropdown\">
        <button class=\"dropbtn\">Espace Personnel
          <i class=\"fa fa-caret-down\"></i>
        </button>
        <div class=\"dropdown-content\">
          <a href=\"/contacter\" class=\"nav-link px-2 link-dark\">Contacter</a></li>
          <a href=\"/profile\" class=\"nav-link px-2 link-dark\">Profil</a></li>
          <a href=\"/inscription\" class=\"nav-link px-2 link-dark\">Inscription</a></li>
          <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a></li>
          <a href=\"/logout\" class=\"nav-link px-2 link-dark\">Se déconnecter</a></li>


        </div>
      </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar.html.twig", "C:\\xampp\\apps\\symfony\\templates\\navbar.html.twig");
    }
}
