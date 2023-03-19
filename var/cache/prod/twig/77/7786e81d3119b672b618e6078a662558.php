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

/* accueil.html.twig */
class __TwigTemplate_b884ff9fce51e7bd9d0918b2f3aa79b3 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>

    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">

    <script src=\"/assets/js/script.js\" defer></script>

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
</head>


<body>



";
        // line 37
        $this->loadTemplate("navbar.html.twig", "accueil.html.twig", 37)->display($context);
        // line 38
        $this->displayBlock('css', $context, $blocks);
        // line 40
        echo "




<header>

    <div id=\"container\" class=\"hero-image\">
        <div class=\"hero-text\">
            <img src=\"/asset/media/img/logo3.png\" alt=\"\">
            <button class=\"button item\">Voir la carte</button>
        </div>
    </div>


    </div>

    <div class=\"hero-image-2\">
        <div class=\"hero-text-2\">
            <div class=\"hero-text-color\">
                <h2>Un restaurant authentique</h2>
                <p>Le Chef Arnaud Michant aime passionnément les produits - et producteurs - de la Savoie.
                </p>
                <p>
                    Le restaurant gastronomique Quai Antique propose une cuisine d'excellente qualité. Les ingrédients sont sélectionnés localement
                    et soigneusement cultivés ou conservés aux frais des restaurants.
                    La nourriture est servie sur de la porcelaine et l'argenterie pour déguster des d'ingrédients de qualité tels que du caviar ou des truffes.
            </div>
        </div>

</header>


<div class=\"container\">
    <div class=\"item-child\" >
        <h2>
            Des plats gastronomiques et authentiques
        </h2>
    </div>
</div>



<div class=\"container\">
    <div class=\"item\">
        <a class=\"a-img-txt\" href=\"\">
            <img class=\"a-img\" src=\"/asset/media/img/01.jpg\" alt=\"Asperges du marché\">
            <span class=\"a-txt\">Asperges du marché</span>
        </a>
    </div>

    <div class=\"item\">
        <a class=\"a-img-txt\" href=\"\">
            <img class=\"a-img\" src=\"/asset/media/img/02.jpg\" alt=\"Boeuf de Savoie\">
            <span class=\"a-txt\">Asperges du marché</span>
        </a>
    </div>

    <div class=\"item\">
        <a class=\"a-img-txt\" href=\"\">
            <img class=\"a-img\" src=\"/asset/media/img/03.jpg\" alt=\"Saucisse aux choux\">
            <span class=\"a-txt\">Boeuf de Savoie</span>
        </a>
    </div>

    <div class=\"item\">
        <a class=\"a-img-txt\" href=\"\">
            <img class=\"a-img\" src=\"/asset/media/img/04.jpg\" alt=\"Saucisse aux choux\">
            <span class=\"a-txt\">Saucisse aux choux</span>
        </a>
    </div>

    <div class=\"item\">
        <a class=\"a-img-txt\" href=\"\">
            <img class=\"a-img\" src=\"/asset/media/img/05.jpg\" alt=\"Les crozets revisités\">
            <span class=\"a-txt\">Les crozets revisités</span>
        </a>
    </div>

    <div class=\"item\">
        <a class=\"a-img-txt\" href=\"\">
            <img class=\"a-img\" src=\"/asset/media/img/06.jpg\" alt=\"Saumon Savoyard\">
            <span class=\"a-txt\">Saumon Savoyard</span>
        </a>
    </div>
    <div class=\"space\"></div>
    <button class=\"button item\">Réservation</button>

</div>


</div>

<div class=\"hero-image-3\">
    <div class=\"hero-text-3\">
        <h3>
            MENU DU MARCHÉ
        </H3>
        <h4 class=\"menu-align\">
            Formule dîner
        </h4>
        <p class=\"menu-align-p\">Du lundi au samedi</p>
        <p class=\"menu-align-p\">
            Entrée + Plat + Dessert 20€
        </p>
        <p>
            <br>Pâté de campagne
        </p>
        <p>
            Raclette
        </p>
        <p>
            Macarons
        </p>

        <h4 class=\"menu-align\">
            Formule déjeuner
        </h4>
        <p class=\"menu-align-p\">Du lundi au vendredi</p>
        <p class=\"menu-align-p\">
            Entrée + Plat + Dessert 16€
        </p>

        <p>
            <br>Paté en croute
        </p>
        <p>
            Tarte au reblochon de Savoie
        </p>
        <p>
            Paris-Brest</p>
    </div>
</div>

<div class=\"container-4\">
    <h3>
        Nos horaires d'ouvertures
    </h3>
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


";
        // line 224
        $this->loadTemplate("footer.html.twig", "accueil.html.twig", 224)->display($context);
        // line 225
        $this->displayBlock('footer', $context, $blocks);
        // line 227
        echo "

</div>
</div>
</section>
<body>
</body>
</html>";
    }

    // line 38
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 225
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 225,  282 => 38,  271 => 227,  269 => 225,  267 => 224,  81 => 40,  79 => 38,  77 => 37,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueil.html.twig", "C:\\xampp\\apps\\symfony\\templates\\accueil.html.twig");
    }
}
