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

/* footer.html.twig */
class __TwigTemplate_ea6a5240515d68d4cc41ad776f31613d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
  <div class=\"space\"></div>

  <div class=\"container-2\">
    <footer class=\"py-3 my-4\">
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
      <div class=\"container-sm\">
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
";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "C:\\xampp\\apps\\symfony\\templates\\footer.html.twig");
    }
}
