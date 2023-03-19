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

/* Menu.html.twig */
class __TwigTemplate_2b7462b0393e0000ed6447e548cf47d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Menu.html.twig"));

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
        // line 32
        $this->loadTemplate("navbar.html.twig", "Menu.html.twig", 32)->display($context);
        // line 33
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "

</header>

    <body>
      <div class=\"container\">
        <img src=\"/asset/media/img/logo5.png\" alt=\"\">
      </div>
<div class=\"container-2 container-2-menu\">

          <div class=\"mb-3 text-center\">
            <div class=\"themed-grid-col text-center\">

            <h5 class=\"menu-align\">
                Entrée

            </h5>

            <div class=\"menu-bar\"></div>
            </p>

            <h3>
              <br>Pâté de campagne
            </h3>
            <p><b>5€</b></p>
            <p>Le pâté de campagne ou terrine de campagne est une préparation culinaire française, réalisée à partir d'une farce composée de diverses viandes hachées</p>
            <h3>
              Salade
            </h3>
            <p><b>7€</b></p>
            <p>La salade est initialement un mets préparé, composé de feuilles d'herbes potagères crues, éventuellement assaisonnées de vinaigrette.</p>
            <h3>
              Paté en croute
            </h3>
            <p><b>8€</b></p>
            <p>Le pâté en croûte est une charcuterie pâtissière composée d'un pâté cuit dans une pâte feuilletée ou dans une pâte brisée.</p>
            <h3>Oeufs mimosa
            </h3>
            <p><b>5€</b></p>
            <p>L'œuf mimosa est un œuf dur farci dont le blanc est rempli de mayonnaise ou d'un mélange à base de mayonnaise puis saupoudré de jaune cuit écrasé en petits grains évoquant la fleur de mimosa et d'herbes vertes, couramment du persil.</p>
            <h3>Salade de chèvre
            </h3>
            <p><b>7€</b></p>
            <p>Une salade de chèvre chaud est une recette de cuisine de salade composée, de la cuisine française, à base de salade et de fromage au lait de chèvre chaud, servie sur des tranches de pain.
            </p>
          </div>
          <div class=\"themed-grid-col\">

            <h5 class=\"menu-align\">
                Plats
            </h5>
            <div class=\"menu-bar\"></div>
            </p>
            <h3>
              <br>Tarte au reblochon de Savoie
            </h3>
            <p><b>14€</b></p>
            <p>La « tarte et au reblochon de Savoie au fromage de Herve »12 est une spécialité culinaire belge de la région de Liège. Selon la tradition et le folklore[réf. nécessaire] on la mange au marché de Noël et aux grandes fêtes du 15 août de la République libre d'Outremeuse.</p>
            <h3>
              Raclette
            </h3>
            <p><b>15€</b></p>
            <p>Les origines de ce plat traditionnel remonteraient au Moyen Âge dans les montagnes suisses, plus précisément dans le canton du Valais. Il a envahi les stations de skis et descend depuis plusieurs années dans les vallées et les villes.</p>
            <h3>
              Tartiflette
              </h3>
              <p><b>15€</b></p>
              <p>
              La tartiflette (dérivé de tartifle ou tartiflâ, pomme de terre en savoyard) est une recette de cuisine à base de gratin de pommes de terre, d'oignons et de lardons, le tout gratiné au reblochon (fromage AOP des pays de Savoie).
            </p>
            <h3>Fondue Savoyarde            </h3>
            <p><b>19€</b></p>
            <p>La fondue au fromage est un plat chaud ou tiède composé d'un ou plusieurs fromages tels le gruyère et le vacherin fribourgeois. Principal plat national de Suisse avec la raclette, on le retrouve également en Savoie et en Franche-Comté, avec du beaufort ou du comté ; dans le Val d'Aoste et dans le Piémont, avec de la fontine.</p>
            <h3>Crozets</h3>
            <p><b>13€</b></p>
            <p>Les crozets sont une spécialité de la Savoie à base de petits morceaux de pâte, aplatie au rouleau et coupée en carrés à l'aide d'un couteau-hachoir spécifique.</p>
          </div>
            <div class=\"themed-grid-col\">
            <h5 class=\"menu-align\">
                Desserts
            </h5>
            <div class=\"menu-bar\"></div>
            </p>
            <h3>
              <br>Dessert aux fruits
            </h3>
            <p><b>6€</b></p>
            <p>Les desserts aux fruit frais tels les mousses, bavarois ou sorbets se préparent à l'avance et patientent sans problème au réfrigérateur ou congélateur.</p>
            <h3>
              Macarons            </h3>
              <p><b>9€</b></p>
              <p>Le macaron est un petit gâteau français à l'amande, granuleux et moelleux, à la forme arrondie, d'environ 3 à 5 cm de diamètre, dérivé de la meringue. Il est fabriqué à partir d'amandes concassées, de sucre glace, de sucre et de blancs d'œufs, la quantité d'amande devant être égale à la quantité de sucre glace. </p>
            <h3>
              Cake sucré

            </h3>
            <p><b>5€</b></p>
            <p>Un cake ([kεk]) (principalement en Europe) ou gâteau aux fruits (au Québec et au Nouveau-Brunswick)1 est un gâteau de forme ronde ou rectangulaire, contenant des raisins secs et des fruits confits, qu'on sert en tranches. Le mot « cake » s'est étendu à un gâteau salé de même forme, fait avec des légumes, des olives, du jambon, etc. On parle alors de « cake salé ».</p>
            <h3>
              Flan
            </h3>
            <p><b>5€</b></p>
            <p>
              Le flan est une spécialité culinaire cuite, de forme ronde comme son nom l'indique, de texture solide, tremblante, lisse et tendre, ayant pour base des œufs battus dans du lait ou de la crème de lait.
            </p>
          </div>



          </div>




        </div>

       




        </div>










    </div>


      ";
        // line 170
        $this->loadTemplate("footer.html.twig", "Menu.html.twig", 170)->display($context);
        // line 171
        echo "      ";
        $this->displayBlock('footer', $context, $blocks);
        // line 173
        echo "

</div>
</div>
</section>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
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

    // line 171
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 172
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 172,  258 => 171,  240 => 33,  224 => 173,  221 => 171,  219 => 170,  82 => 35,  80 => 33,  78 => 32,  45 => 1,);
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


</header>

    <body>
      <div class=\"container\">
        <img src=\"/asset/media/img/logo5.png\" alt=\"\">
      </div>
<div class=\"container-2 container-2-menu\">

          <div class=\"mb-3 text-center\">
            <div class=\"themed-grid-col text-center\">

            <h5 class=\"menu-align\">
                Entrée

            </h5>

            <div class=\"menu-bar\"></div>
            </p>

            <h3>
              <br>Pâté de campagne
            </h3>
            <p><b>5€</b></p>
            <p>Le pâté de campagne ou terrine de campagne est une préparation culinaire française, réalisée à partir d'une farce composée de diverses viandes hachées</p>
            <h3>
              Salade
            </h3>
            <p><b>7€</b></p>
            <p>La salade est initialement un mets préparé, composé de feuilles d'herbes potagères crues, éventuellement assaisonnées de vinaigrette.</p>
            <h3>
              Paté en croute
            </h3>
            <p><b>8€</b></p>
            <p>Le pâté en croûte est une charcuterie pâtissière composée d'un pâté cuit dans une pâte feuilletée ou dans une pâte brisée.</p>
            <h3>Oeufs mimosa
            </h3>
            <p><b>5€</b></p>
            <p>L'œuf mimosa est un œuf dur farci dont le blanc est rempli de mayonnaise ou d'un mélange à base de mayonnaise puis saupoudré de jaune cuit écrasé en petits grains évoquant la fleur de mimosa et d'herbes vertes, couramment du persil.</p>
            <h3>Salade de chèvre
            </h3>
            <p><b>7€</b></p>
            <p>Une salade de chèvre chaud est une recette de cuisine de salade composée, de la cuisine française, à base de salade et de fromage au lait de chèvre chaud, servie sur des tranches de pain.
            </p>
          </div>
          <div class=\"themed-grid-col\">

            <h5 class=\"menu-align\">
                Plats
            </h5>
            <div class=\"menu-bar\"></div>
            </p>
            <h3>
              <br>Tarte au reblochon de Savoie
            </h3>
            <p><b>14€</b></p>
            <p>La « tarte et au reblochon de Savoie au fromage de Herve »12 est une spécialité culinaire belge de la région de Liège. Selon la tradition et le folklore[réf. nécessaire] on la mange au marché de Noël et aux grandes fêtes du 15 août de la République libre d'Outremeuse.</p>
            <h3>
              Raclette
            </h3>
            <p><b>15€</b></p>
            <p>Les origines de ce plat traditionnel remonteraient au Moyen Âge dans les montagnes suisses, plus précisément dans le canton du Valais. Il a envahi les stations de skis et descend depuis plusieurs années dans les vallées et les villes.</p>
            <h3>
              Tartiflette
              </h3>
              <p><b>15€</b></p>
              <p>
              La tartiflette (dérivé de tartifle ou tartiflâ, pomme de terre en savoyard) est une recette de cuisine à base de gratin de pommes de terre, d'oignons et de lardons, le tout gratiné au reblochon (fromage AOP des pays de Savoie).
            </p>
            <h3>Fondue Savoyarde            </h3>
            <p><b>19€</b></p>
            <p>La fondue au fromage est un plat chaud ou tiède composé d'un ou plusieurs fromages tels le gruyère et le vacherin fribourgeois. Principal plat national de Suisse avec la raclette, on le retrouve également en Savoie et en Franche-Comté, avec du beaufort ou du comté ; dans le Val d'Aoste et dans le Piémont, avec de la fontine.</p>
            <h3>Crozets</h3>
            <p><b>13€</b></p>
            <p>Les crozets sont une spécialité de la Savoie à base de petits morceaux de pâte, aplatie au rouleau et coupée en carrés à l'aide d'un couteau-hachoir spécifique.</p>
          </div>
            <div class=\"themed-grid-col\">
            <h5 class=\"menu-align\">
                Desserts
            </h5>
            <div class=\"menu-bar\"></div>
            </p>
            <h3>
              <br>Dessert aux fruits
            </h3>
            <p><b>6€</b></p>
            <p>Les desserts aux fruit frais tels les mousses, bavarois ou sorbets se préparent à l'avance et patientent sans problème au réfrigérateur ou congélateur.</p>
            <h3>
              Macarons            </h3>
              <p><b>9€</b></p>
              <p>Le macaron est un petit gâteau français à l'amande, granuleux et moelleux, à la forme arrondie, d'environ 3 à 5 cm de diamètre, dérivé de la meringue. Il est fabriqué à partir d'amandes concassées, de sucre glace, de sucre et de blancs d'œufs, la quantité d'amande devant être égale à la quantité de sucre glace. </p>
            <h3>
              Cake sucré

            </h3>
            <p><b>5€</b></p>
            <p>Un cake ([kεk]) (principalement en Europe) ou gâteau aux fruits (au Québec et au Nouveau-Brunswick)1 est un gâteau de forme ronde ou rectangulaire, contenant des raisins secs et des fruits confits, qu'on sert en tranches. Le mot « cake » s'est étendu à un gâteau salé de même forme, fait avec des légumes, des olives, du jambon, etc. On parle alors de « cake salé ».</p>
            <h3>
              Flan
            </h3>
            <p><b>5€</b></p>
            <p>
              Le flan est une spécialité culinaire cuite, de forme ronde comme son nom l'indique, de texture solide, tremblante, lisse et tendre, ayant pour base des œufs battus dans du lait ou de la crème de lait.
            </p>
          </div>



          </div>




        </div>

       




        </div>










    </div>


      {% include(\"footer.html.twig\") %}
      {% block footer %}
      {% endblock %}


</div>
</div>
</section>
</body>
</html>", "Menu.html.twig", "C:\\xampp\\apps\\symfony\\templates\\Menu.html.twig");
    }
}
