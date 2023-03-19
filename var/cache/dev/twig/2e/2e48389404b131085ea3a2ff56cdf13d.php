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

/* index.html.twig */
class __TwigTemplate_62b3d47498a03fd0dd4d417310c77310 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

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



";
        // line 34
        $this->loadTemplate("navbar.html.twig", "index.html.twig", 34)->display($context);
        // line 35
        $this->displayBlock('css', $context, $blocks);
        // line 37
        echo "
<body class=\"body\">


<div class=\"container\">
    <img src=\"/asset/media/img/LOGO3.png\" alt=\"\">
</div>

<div class=\"mb-3 text-center\">
    <div class=\"themed-grid-col text-center\">
        <h2>Un restaurant authentique</h2>
        <p>Le Chef Arnaud Michant aime passionnément les produits - et producteurs - de la Savoie.
        </p>
        <p>
            Le restaurant gastronomique Quai Antique propose une cuisine d'excellente qualité.
        <p>
            Les ingrédients sont sélectionnés localement
            et soigneusement cultivés ou conservés aux frais des restaurants.
        </p>
        <p>
            La nourriture est servie sur de la porcelaine et l'argenterie pour déguster des d'ingrédients de qualité tels que du caviar ou des truffes.

        </p>
        </p>
    </div>
</div>

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
    <button class=\"button item\"><a href=\"/formulaire\" style=\"color:#ffffff;\">Réservation</a></button>

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
    <script>
        var axios = require('axios');

        var config = {
            method: 'get',
            url: 'https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4&fields=name%2Crating%2Cformatted_phone_number&key=YOUR_API_KEY',
            headers: { }
        };

        axios(config)
            .then(function (response) {
                console.log(JSON.stringify(response.data));
            })
            .catch(function (error) {
                console.log(error);
            });
    </script>
</div>

        ";
        // line 176
        $this->loadTemplate("footer.html.twig", "index.html.twig", 176)->display($context);
        // line 177
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 179
        echo "

</body>



</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 177
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 178
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 178,  264 => 177,  246 => 35,  230 => 179,  227 => 177,  225 => 176,  84 => 37,  82 => 35,  80 => 34,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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



{% include(\"navbar.html.twig\") %}
{% block css %}
{% endblock %}

<body class=\"body\">


<div class=\"container\">
    <img src=\"/asset/media/img/LOGO3.png\" alt=\"\">
</div>

<div class=\"mb-3 text-center\">
    <div class=\"themed-grid-col text-center\">
        <h2>Un restaurant authentique</h2>
        <p>Le Chef Arnaud Michant aime passionnément les produits - et producteurs - de la Savoie.
        </p>
        <p>
            Le restaurant gastronomique Quai Antique propose une cuisine d'excellente qualité.
        <p>
            Les ingrédients sont sélectionnés localement
            et soigneusement cultivés ou conservés aux frais des restaurants.
        </p>
        <p>
            La nourriture est servie sur de la porcelaine et l'argenterie pour déguster des d'ingrédients de qualité tels que du caviar ou des truffes.

        </p>
        </p>
    </div>
</div>

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
    <button class=\"button item\"><a href=\"/formulaire\" style=\"color:#ffffff;\">Réservation</a></button>

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
    <script>
        var axios = require('axios');

        var config = {
            method: 'get',
            url: 'https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4&fields=name%2Crating%2Cformatted_phone_number&key=YOUR_API_KEY',
            headers: { }
        };

        axios(config)
            .then(function (response) {
                console.log(JSON.stringify(response.data));
            })
            .catch(function (error) {
                console.log(error);
            });
    </script>
</div>

        {% include(\"footer.html.twig\") %}
        {% block footer %}
        {% endblock %}


</body>



</html>", "index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\index.html.twig");
    }
}
