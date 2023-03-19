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

/* Mentionslegales.html.twig */
class __TwigTemplate_fe2593906d1566bee20bd0005ff611c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mentionslegales.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mentionslegales.html.twig"));

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

</head>  ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "Mentionslegales.html.twig", 31)->display($context);
        // line 32
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "
<div class=\"container\">

  <p><b><h1>Mentions légales et politique de confidentialité</h1></b>    <br><br>
    L’entreprise individuelle Arnaud Michant, soucieuse des droits des individus, notamment au regard des traitements automatisés et dans une volonté de transparence avec ses clients, a mis en place une politique reprenant l’ensemble de ces traitements, des finalités poursuivies par ces derniers ainsi que des moyens d’ actions à la disposition des individus afin qu’ils puissent au mieux exercer leurs droits. Pour toute information complémentaire sur la protection des données personnelles, nous vous invitons à consulter le site : https://www.cnil.fr/ La poursuite de la navigation sur ce site vaut acceptation sans réserve des dispositions et conditions d’utilisation qui suivent. La version actuellement en ligne de ces conditions d’utilisation est la seule opposable pendant toute la durée d’utilisation du site et jusqu’à ce qu’une nouvelle version la remplace.
    <br><br>
    <b>Article 1</b> Mentions légales 1.1 Site (ci-après « le site ») : https://ArnaudMichantvoixoff.fr/ 1.2 Éditeur (ci-après « l’éditeur ») : 
    L’entreprise indivuduelle Arnaud Michant située : 
     contact@ArnaudMichant@gmail.com 1.3 Hébergeur (ci-après « l’hébergeur ») :
     https://ArnaudMichantvoixoff.fr/ est hébergé par HOSTINGER INTERNATIONAL LTD, dont le siège social est situé 61 Lordou Vironos Street 6023 Larnaca, Chypre.<br><br>
     <b>Article 2</b> – Accès au site L’accès au site et son utilisation sont réservés à un usage strictement personnel. Vous vous engagez à ne pas utiliser ce site et les informations ou données qui y figurent à des fins commerciales, politiques, publicitaires et pour toute forme de sollicitation commerciale et notamment l’envoi de courriers électroniques non sollicités.
     <br><br>
     <b>Article 3</b> – Contenu du site Toutes les marques, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons, ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce site et plus généralement tous les éléments reproduits ou utilisés sur le site sont protégés par les lois en vigueur au titre de la propriété intellectuelle. Ils sont la propriété pleine et entière de l’éditeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l’accord préalable et écrit de l’éditeur, sont strictement interdites. Le fait pour l’éditeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.
     <br><br>
     <b>Article 4</b> – Gestion du site Pour la bonne gestion du site, l’éditeur pourra à tout moment : – suspendre, interrompre ou limiter l’accès à tout ou partie du site, réserver l’accès au site, ou à certaines parties du site, à une catégorie déterminée d’internautes ; – supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales ; – suspendre le site afin de procéder à des mises à jour.
     <br><br>
     <b>Article 5</b> – Responsabilités La responsabilité de l’éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l’accès au site ou à une de ses fonctionnalités. Le matériel de connexion au site que vous utilisez est sous votre entière responsabilité. Vous devez prendre toutes les mesures appropriées pour protéger votre matériel et vos propres données notamment d’attaques virales par Internet. Vous êtes par ailleurs seul responsable des sites et données que vous consultez. L’éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à votre encontre : – du fait de l’usage du site ou de tout service accessible via Internet ; – du fait du non-respect par vous des présentes conditions générales. L’éditeur n’est pas responsable des dommages causés à vous-même, à des tiers et/ou à votre équipement du fait de votre connexion ou de votre utilisation du site et vous renoncez à toute action contre lui de ce fait. Si l’éditeur venait à faire l’objet d’une procédure amiable ou judiciaire en raison de votre utilisation du site, il pourra se retourner contre vous pour obtenir l’indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.
     <br><br>
     <b>Article 6</b> – Liens hypertextes La mise en place par les utilisateurs de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation préalable et écrite de l’éditeur. L’éditeur est libre de refuser cette autorisation sans avoir à justifier de quelque manière que ce soit sa décision. Dans le cas où l’éditeur accorderait son autorisation, celle-ci n’est dans tous les cas que temporaire et pourra être retirée à tout moment, sans obligation de justification à la charge de l’éditeur. Toute information accessible via un lien vers d’autres sites n’est pas publiée par l’éditeur. L’éditeur ne dispose d’aucun droit sur le contenu présent dans ledit lien.
     <br><br>
     <b>Article 7</b> – Collecte et protection des données Vos données sont collectées par l’entreprise individuelle Arnaud Michant. Une donnée à caractère personnel désigne toute information concernant une personne physique identifiée ou identifiable (personne concernée) ; est réputée identifiable une personne qui peut être identifiée, directement ou indirectement, notamment par référence à un nom, un numéro d’identification ou à un ou plusieurs éléments spécifiques, propres à son identité physique, physiologique, génétique, psychique, économique, culturelle ou sociale. Les informations personnelles pouvant être recueillies sur le site sont principalement utilisées par l’éditeur pour la gestion des relations avec vous, et le cas échéant pour le traitement de vos commandes. Les données personnelles collectées sont les suivantes : – nom et prénom – adresse – adresse mail – numéro de téléphone – date de naissance
     <br><br>
     <b>Article 8</b> – Droit d’accès, de rectification et de déréférencement de vos données En application de la réglementation applicable aux données à caractère personnel, les utilisateurs disposent des droits suivants : le droit d’accès : ils peuvent exercer leur droit d’accès, pour connaître les données personnelles les concernant, en écrivant à l’adresse électronique ci-dessous mentionnée. Dans ce cas, avant la mise en œuvre de ce droit, la Plateforme peut demander une preuve de l’identité de l’utilisateur afin d’en vérifier l’exactitude ; le droit de rectification : si les données à caractère personnel détenues par la Plateforme sont inexactes, ils peuvent demander la mise à jour des informations ; le droit de suppression des données : les utilisateurs peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données ; le droit à la limitation du traitement : les utilisateurs peuvent de demander à la Plateforme de limiter le traitement des données personnelles conformément aux hypothèses prévues par le RGPD ; le droit de s’opposer au traitement des données : les utilisateurs peuvent s’opposer à ce que leurs données soient traitées conformément aux hypothèses prévues par le RGPD ; le droit à la portabilité : ils peuvent réclamer que la Plateforme leur remette les données personnelles qu’ils ont fournies pour les transmettre à une nouvelle Plateforme. Vous pouvez exercer ce droit en nous contactant, à l’adresse suivante : 
    Par email, à l’adresse : contact@ArnaudMichant@gmail.com Toute demande doit être accompagnée de la photocopie d’un titre d’identité en cours de validité signé et faire mention de l’adresse à laquelle l’éditeur pourra contacter le demandeur. La réponse sera adressée dans le mois suivant la réception de la demande. Ce délai d’un mois peut être prolongé de deux mois si la complexité de la demande et/ou le nombre de demandes l’exigent. De plus, et depuis la loi n°2016-1321 du 7 octobre 2016, les personnes qui le souhaitent, ont la possibilité d’ organiser le sort de leurs données après leur décès. Pour plus d’information sur le sujet, vous pouvez consulter le site Internet de la CNIL : https://www.cnil.fr/. Les utilisateurs peuvent aussi introduire une réclamation auprès de la CNIL sur le site de la CNIL : https://www.cnil.fr. Nous vous recommandons de nous contacter dans un premier temps avant de déposer une réclamation auprès de la CNIL, car nous sommes à votre entière disposition pour régler votre problème.
    <br><br>
    <b>Article 9</b> – Utilisation des données Les données personnelles collectées auprès des utilisateurs ont pour objectif la mise à disposition des services de la Plateforme, leur amélioration et le maintien d’un environnement sécurisé. La base légale des traitements est l’exécution du contrat entre l’utilisateur et la Plateforme. Plus précisément, les utilisations sont les suivantes : – accès et utilisation de la Plateforme par l’utilisateur ; – gestion du fonctionnement et optimisation de la Plateforme ; – mise en œuvre d’une assistance utilisateurs ; – vérification, identification et authentification des données transmises par l’utilisateur ; – personnalisation des services en affichant des publicités en fonction de l’historique de navigation de l’utilisateur, selon ses préférences ; – prévention et détection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de sécurité ; – gestion des éventuels litiges avec les utilisateurs ; – envoi d’informations commerciales et publicitaires, en fonction des préférences de l’utilisateur ;
    <br><br>
    <b>Article 10</b> – Politique de conservation des données La Plateforme conserve vos données pour la durée nécessaire pour vous fournir ses services ou son assistance. Dans la mesure raisonnablement nécessaire ou requise pour satisfaire aux obligations légales ou réglementaires, régler des litiges, empêcher les fraudes et abus ou appliquer nos modalités et conditions, nous pouvons également conserver certaines de vos informations si nécessaire, même après que vous ayez fermé votre compte ou que nous n’ayons plus besoin pour vous fournir nos services.
    <br><br>
    <b>Article 11</b>- Partage des données personnelles avec des tiers Les données personnelles peuvent être partagées avec des sociétés tierces exclusivement dans l’Union européenne, dans les cas suivants : – lorsque l’utilisateur publie, dans les zones de commentaires libres de la Plateforme, des informations accessibles au public ; – quand l’utilisateur autorise le site web d’un tiers à accéder à ses données ; – quand la Plateforme recourt aux services de prestataires pour fournir l’assistance utilisateurs, la publicité et les services de paiement. Ces prestataires disposent d’un accès limité aux données de l’utilisateur, dans le cadre de l’exécution de ces prestations, et ont l’obligation contractuelle de les utiliser en conformité avec les dispositions de la réglementation applicable en matière protection des données à caractère personnel ; – si la loi l’exige, la Plateforme peut effectuer la transmission de données pour donner suite aux réclamations présentées contre la Plateforme et se conformer aux procédures administratives et judiciaires.
    <br><br>
    <b>Article 12</b> – Offres commerciales Vous êtes susceptible de recevoir des offres commerciales de l’éditeur. Si vous ne le souhaitez pas, veuillez cliquer sur le lien suivant : contact@ArnaudMichant@gmail.com. Vos données sont susceptibles d’être utilisées par les partenaires de l’éditeur à des fins de prospection commerciale, si vous ne le souhaitez pas, veuillez cliquer sur le lien suivant : contact@ArnaudMichant@gmail.com. Si, lors de la consultation du site, vous accédez à des données à caractère personnel, vous devez vous abstenir de toute collecte, de toute utilisation non autorisée et de tout acte pouvant constituer une atteinte à la vie privée ou à la réputation des personnes. L’éditeur décline toute responsabilité à cet égard. Les données sont conservées et utilisées pour une durée conforme à la législation en vigueur.
    <br><br>
    <b>Article 13</b> – Cookies Qu’est-ce qu’un « cookie » ? Un « Cookie » ou traceur est un fichier électronique déposé sur un terminal (ordinateur, tablette, smartphone, …) et lu par exemple lors de la consultation d’un site internet, de la lecture d’un courrier électronique, de l’installation ou de l’utilisation d’un logiciel ou d’une application mobile et ce, quel que soit le type de terminal utilisé (source : https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi). Le site peut collecter automatiquement des informations standards. Toutes les informations collectées indirectement ne seront utilisées que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en développer la conception et l’agencement et à d’autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons. Le cas échéant, des « cookies » émanant de l’éditeur du site et/ou des sociétés tiers pourront être déposés sur votre terminal, avec votre accord. Dans ce cas, lors de la première navigation sur ce site, une bannière explicative sur l’utilisation des « cookies » apparaîtra. Avant de poursuivre la navigation, le client et/ou le prospect devra accepter ou refuser l’utilisation desdits « cookies ». Le consentement donné sera valable pour une période de treize (13) mois. L’utilisateur a la possibilité de désactiver les cookies à tout moment. Les cookies suivants sont présents sur ce site : Cookies Google : – Google analytics : permet de mesurer l’audience du site ; – Google tag manager : facilite l’implémentation des tags sur les pages et permet de gérer les balises Google ; – Google Adsense : régie publicitaire de Google utilisant les sites web ou les vidéos YouTube comme support pour ses annonces ; – Google Dynamic Remarketing : permet de vous proposer de la publicité dynamique en fonction des précédentes recherches ; – Google Adwords Conversion : outil de suivi des campagnes publicitaires adwords ; – DoubleClick : cookies publicitaires de Google pour diffuser des bannières. La durée de vie de ces cookies est de treize mois.
    <br><br>
    <b>Article 14</b> – Loi applicable Les présentes conditions d’utilisation du site sont régies par la loi française et soumises à la compétence des tribunaux du siège social de l’éditeur, sous réserve d’une attribution de compétence spécifique découlant d’un texte de loi ou réglementaire particulier.
    <br><br>
    <b>Article 15</b> – Contactez-nous Pour toute question, information sur les produits présentés sur le site, ou concernant le site lui-même, vous pouvez laisser un message à l’adresse suivante : contact@ArnaudMichant@gmail.com.
    Ces mentions légales et politique de confidentialité ont été créées sur le site Rocket Lawyer. <br><br>
    <b>Article 16</b> - Photographies et représentation des produits Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n’engagent pas l’éditeur.
    <br><br>
    </p>
  
  
      
  </div>
  
  </body>




";
        // line 86
        $this->loadTemplate("footer.html.twig", "Mentionslegales.html.twig", 86)->display($context);
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "

</div>
</div>
</section>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
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

    // line 87
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Mentionslegales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 87,  155 => 32,  139 => 89,  137 => 87,  135 => 86,  81 => 34,  79 => 32,  77 => 31,  45 => 1,);
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

</head>  {% include(\"navbar.html.twig\") %}
{% block css %}
{% endblock %}

<div class=\"container\">

  <p><b><h1>Mentions légales et politique de confidentialité</h1></b>    <br><br>
    L’entreprise individuelle Arnaud Michant, soucieuse des droits des individus, notamment au regard des traitements automatisés et dans une volonté de transparence avec ses clients, a mis en place une politique reprenant l’ensemble de ces traitements, des finalités poursuivies par ces derniers ainsi que des moyens d’ actions à la disposition des individus afin qu’ils puissent au mieux exercer leurs droits. Pour toute information complémentaire sur la protection des données personnelles, nous vous invitons à consulter le site : https://www.cnil.fr/ La poursuite de la navigation sur ce site vaut acceptation sans réserve des dispositions et conditions d’utilisation qui suivent. La version actuellement en ligne de ces conditions d’utilisation est la seule opposable pendant toute la durée d’utilisation du site et jusqu’à ce qu’une nouvelle version la remplace.
    <br><br>
    <b>Article 1</b> Mentions légales 1.1 Site (ci-après « le site ») : https://ArnaudMichantvoixoff.fr/ 1.2 Éditeur (ci-après « l’éditeur ») : 
    L’entreprise indivuduelle Arnaud Michant située : 
     contact@ArnaudMichant@gmail.com 1.3 Hébergeur (ci-après « l’hébergeur ») :
     https://ArnaudMichantvoixoff.fr/ est hébergé par HOSTINGER INTERNATIONAL LTD, dont le siège social est situé 61 Lordou Vironos Street 6023 Larnaca, Chypre.<br><br>
     <b>Article 2</b> – Accès au site L’accès au site et son utilisation sont réservés à un usage strictement personnel. Vous vous engagez à ne pas utiliser ce site et les informations ou données qui y figurent à des fins commerciales, politiques, publicitaires et pour toute forme de sollicitation commerciale et notamment l’envoi de courriers électroniques non sollicités.
     <br><br>
     <b>Article 3</b> – Contenu du site Toutes les marques, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons, ainsi que toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce site et plus généralement tous les éléments reproduits ou utilisés sur le site sont protégés par les lois en vigueur au titre de la propriété intellectuelle. Ils sont la propriété pleine et entière de l’éditeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans l’accord préalable et écrit de l’éditeur, sont strictement interdites. Le fait pour l’éditeur de ne pas engager de procédure dès la prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.
     <br><br>
     <b>Article 4</b> – Gestion du site Pour la bonne gestion du site, l’éditeur pourra à tout moment : – suspendre, interrompre ou limiter l’accès à tout ou partie du site, réserver l’accès au site, ou à certaines parties du site, à une catégorie déterminée d’internautes ; – supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales ; – suspendre le site afin de procéder à des mises à jour.
     <br><br>
     <b>Article 5</b> – Responsabilités La responsabilité de l’éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l’accès au site ou à une de ses fonctionnalités. Le matériel de connexion au site que vous utilisez est sous votre entière responsabilité. Vous devez prendre toutes les mesures appropriées pour protéger votre matériel et vos propres données notamment d’attaques virales par Internet. Vous êtes par ailleurs seul responsable des sites et données que vous consultez. L’éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à votre encontre : – du fait de l’usage du site ou de tout service accessible via Internet ; – du fait du non-respect par vous des présentes conditions générales. L’éditeur n’est pas responsable des dommages causés à vous-même, à des tiers et/ou à votre équipement du fait de votre connexion ou de votre utilisation du site et vous renoncez à toute action contre lui de ce fait. Si l’éditeur venait à faire l’objet d’une procédure amiable ou judiciaire en raison de votre utilisation du site, il pourra se retourner contre vous pour obtenir l’indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.
     <br><br>
     <b>Article 6</b> – Liens hypertextes La mise en place par les utilisateurs de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation préalable et écrite de l’éditeur. L’éditeur est libre de refuser cette autorisation sans avoir à justifier de quelque manière que ce soit sa décision. Dans le cas où l’éditeur accorderait son autorisation, celle-ci n’est dans tous les cas que temporaire et pourra être retirée à tout moment, sans obligation de justification à la charge de l’éditeur. Toute information accessible via un lien vers d’autres sites n’est pas publiée par l’éditeur. L’éditeur ne dispose d’aucun droit sur le contenu présent dans ledit lien.
     <br><br>
     <b>Article 7</b> – Collecte et protection des données Vos données sont collectées par l’entreprise individuelle Arnaud Michant. Une donnée à caractère personnel désigne toute information concernant une personne physique identifiée ou identifiable (personne concernée) ; est réputée identifiable une personne qui peut être identifiée, directement ou indirectement, notamment par référence à un nom, un numéro d’identification ou à un ou plusieurs éléments spécifiques, propres à son identité physique, physiologique, génétique, psychique, économique, culturelle ou sociale. Les informations personnelles pouvant être recueillies sur le site sont principalement utilisées par l’éditeur pour la gestion des relations avec vous, et le cas échéant pour le traitement de vos commandes. Les données personnelles collectées sont les suivantes : – nom et prénom – adresse – adresse mail – numéro de téléphone – date de naissance
     <br><br>
     <b>Article 8</b> – Droit d’accès, de rectification et de déréférencement de vos données En application de la réglementation applicable aux données à caractère personnel, les utilisateurs disposent des droits suivants : le droit d’accès : ils peuvent exercer leur droit d’accès, pour connaître les données personnelles les concernant, en écrivant à l’adresse électronique ci-dessous mentionnée. Dans ce cas, avant la mise en œuvre de ce droit, la Plateforme peut demander une preuve de l’identité de l’utilisateur afin d’en vérifier l’exactitude ; le droit de rectification : si les données à caractère personnel détenues par la Plateforme sont inexactes, ils peuvent demander la mise à jour des informations ; le droit de suppression des données : les utilisateurs peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données ; le droit à la limitation du traitement : les utilisateurs peuvent de demander à la Plateforme de limiter le traitement des données personnelles conformément aux hypothèses prévues par le RGPD ; le droit de s’opposer au traitement des données : les utilisateurs peuvent s’opposer à ce que leurs données soient traitées conformément aux hypothèses prévues par le RGPD ; le droit à la portabilité : ils peuvent réclamer que la Plateforme leur remette les données personnelles qu’ils ont fournies pour les transmettre à une nouvelle Plateforme. Vous pouvez exercer ce droit en nous contactant, à l’adresse suivante : 
    Par email, à l’adresse : contact@ArnaudMichant@gmail.com Toute demande doit être accompagnée de la photocopie d’un titre d’identité en cours de validité signé et faire mention de l’adresse à laquelle l’éditeur pourra contacter le demandeur. La réponse sera adressée dans le mois suivant la réception de la demande. Ce délai d’un mois peut être prolongé de deux mois si la complexité de la demande et/ou le nombre de demandes l’exigent. De plus, et depuis la loi n°2016-1321 du 7 octobre 2016, les personnes qui le souhaitent, ont la possibilité d’ organiser le sort de leurs données après leur décès. Pour plus d’information sur le sujet, vous pouvez consulter le site Internet de la CNIL : https://www.cnil.fr/. Les utilisateurs peuvent aussi introduire une réclamation auprès de la CNIL sur le site de la CNIL : https://www.cnil.fr. Nous vous recommandons de nous contacter dans un premier temps avant de déposer une réclamation auprès de la CNIL, car nous sommes à votre entière disposition pour régler votre problème.
    <br><br>
    <b>Article 9</b> – Utilisation des données Les données personnelles collectées auprès des utilisateurs ont pour objectif la mise à disposition des services de la Plateforme, leur amélioration et le maintien d’un environnement sécurisé. La base légale des traitements est l’exécution du contrat entre l’utilisateur et la Plateforme. Plus précisément, les utilisations sont les suivantes : – accès et utilisation de la Plateforme par l’utilisateur ; – gestion du fonctionnement et optimisation de la Plateforme ; – mise en œuvre d’une assistance utilisateurs ; – vérification, identification et authentification des données transmises par l’utilisateur ; – personnalisation des services en affichant des publicités en fonction de l’historique de navigation de l’utilisateur, selon ses préférences ; – prévention et détection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de sécurité ; – gestion des éventuels litiges avec les utilisateurs ; – envoi d’informations commerciales et publicitaires, en fonction des préférences de l’utilisateur ;
    <br><br>
    <b>Article 10</b> – Politique de conservation des données La Plateforme conserve vos données pour la durée nécessaire pour vous fournir ses services ou son assistance. Dans la mesure raisonnablement nécessaire ou requise pour satisfaire aux obligations légales ou réglementaires, régler des litiges, empêcher les fraudes et abus ou appliquer nos modalités et conditions, nous pouvons également conserver certaines de vos informations si nécessaire, même après que vous ayez fermé votre compte ou que nous n’ayons plus besoin pour vous fournir nos services.
    <br><br>
    <b>Article 11</b>- Partage des données personnelles avec des tiers Les données personnelles peuvent être partagées avec des sociétés tierces exclusivement dans l’Union européenne, dans les cas suivants : – lorsque l’utilisateur publie, dans les zones de commentaires libres de la Plateforme, des informations accessibles au public ; – quand l’utilisateur autorise le site web d’un tiers à accéder à ses données ; – quand la Plateforme recourt aux services de prestataires pour fournir l’assistance utilisateurs, la publicité et les services de paiement. Ces prestataires disposent d’un accès limité aux données de l’utilisateur, dans le cadre de l’exécution de ces prestations, et ont l’obligation contractuelle de les utiliser en conformité avec les dispositions de la réglementation applicable en matière protection des données à caractère personnel ; – si la loi l’exige, la Plateforme peut effectuer la transmission de données pour donner suite aux réclamations présentées contre la Plateforme et se conformer aux procédures administratives et judiciaires.
    <br><br>
    <b>Article 12</b> – Offres commerciales Vous êtes susceptible de recevoir des offres commerciales de l’éditeur. Si vous ne le souhaitez pas, veuillez cliquer sur le lien suivant : contact@ArnaudMichant@gmail.com. Vos données sont susceptibles d’être utilisées par les partenaires de l’éditeur à des fins de prospection commerciale, si vous ne le souhaitez pas, veuillez cliquer sur le lien suivant : contact@ArnaudMichant@gmail.com. Si, lors de la consultation du site, vous accédez à des données à caractère personnel, vous devez vous abstenir de toute collecte, de toute utilisation non autorisée et de tout acte pouvant constituer une atteinte à la vie privée ou à la réputation des personnes. L’éditeur décline toute responsabilité à cet égard. Les données sont conservées et utilisées pour une durée conforme à la législation en vigueur.
    <br><br>
    <b>Article 13</b> – Cookies Qu’est-ce qu’un « cookie » ? Un « Cookie » ou traceur est un fichier électronique déposé sur un terminal (ordinateur, tablette, smartphone, …) et lu par exemple lors de la consultation d’un site internet, de la lecture d’un courrier électronique, de l’installation ou de l’utilisation d’un logiciel ou d’une application mobile et ce, quel que soit le type de terminal utilisé (source : https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi). Le site peut collecter automatiquement des informations standards. Toutes les informations collectées indirectement ne seront utilisées que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en développer la conception et l’agencement et à d’autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons. Le cas échéant, des « cookies » émanant de l’éditeur du site et/ou des sociétés tiers pourront être déposés sur votre terminal, avec votre accord. Dans ce cas, lors de la première navigation sur ce site, une bannière explicative sur l’utilisation des « cookies » apparaîtra. Avant de poursuivre la navigation, le client et/ou le prospect devra accepter ou refuser l’utilisation desdits « cookies ». Le consentement donné sera valable pour une période de treize (13) mois. L’utilisateur a la possibilité de désactiver les cookies à tout moment. Les cookies suivants sont présents sur ce site : Cookies Google : – Google analytics : permet de mesurer l’audience du site ; – Google tag manager : facilite l’implémentation des tags sur les pages et permet de gérer les balises Google ; – Google Adsense : régie publicitaire de Google utilisant les sites web ou les vidéos YouTube comme support pour ses annonces ; – Google Dynamic Remarketing : permet de vous proposer de la publicité dynamique en fonction des précédentes recherches ; – Google Adwords Conversion : outil de suivi des campagnes publicitaires adwords ; – DoubleClick : cookies publicitaires de Google pour diffuser des bannières. La durée de vie de ces cookies est de treize mois.
    <br><br>
    <b>Article 14</b> – Loi applicable Les présentes conditions d’utilisation du site sont régies par la loi française et soumises à la compétence des tribunaux du siège social de l’éditeur, sous réserve d’une attribution de compétence spécifique découlant d’un texte de loi ou réglementaire particulier.
    <br><br>
    <b>Article 15</b> – Contactez-nous Pour toute question, information sur les produits présentés sur le site, ou concernant le site lui-même, vous pouvez laisser un message à l’adresse suivante : contact@ArnaudMichant@gmail.com.
    Ces mentions légales et politique de confidentialité ont été créées sur le site Rocket Lawyer. <br><br>
    <b>Article 16</b> - Photographies et représentation des produits Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n’engagent pas l’éditeur.
    <br><br>
    </p>
  
  
      
  </div>
  
  </body>




{% include(\"footer.html.twig\") %}
{% block footer %}
{% endblock %}


</div>
</div>
</section>
</body>
</html>", "Mentionslegales.html.twig", "C:\\xampp\\apps\\symfony\\templates\\Mentionslegales.html.twig");
    }
}
