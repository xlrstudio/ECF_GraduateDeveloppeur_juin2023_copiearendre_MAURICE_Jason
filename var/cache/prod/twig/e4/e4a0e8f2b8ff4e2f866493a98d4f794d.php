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

/* base2.html.twig */
class __TwigTemplate_8e3a2b43b051f257c62805ce42667a10 extends Template
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
            'form' => [$this, 'block_form'],
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

    <link rel=\"stylesheet\" href=\"public/css/bootstrap/bootstrap.css\">
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

    <!--  jQuery -->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/bootstrap-iso.css\" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\"/>

</head>


<div>

    ";
        // line 46
        $this->loadTemplate("navbar.html.twig", "base2.html.twig", 46)->display($context);
        // line 47
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 49
        echo "

    <div>



        <div class=\"container\">
            <img src=\"/asset/media/img/logo6.png\" alt=\"\">
        </div>

        <div>
            <h1>Formulaire de réservation</h1>
        </div>
        <div>

        </div>
        <div class=\"space\"></div>
        <div class=\"container-xl\">
            ";
        // line 67
        $this->displayBlock('form', $context, $blocks);
        // line 79
        echo "
        </div>

        <div class=\"container-xl\">
            <div class=\"space\"></div>
            <h2 class=\"align-content-center\">
                Tables des Allergènes
            </h2>
            <h3>Allergique ? Merci de nous préciser vos allergies ?</h3>
        </div>

        <div class=\"space\"></div>

        <div class=\"container-xl table-color\">

            <table class=\"\">
                <thead>
                <tr>
                    <th class=\"rtecenter\" scope=\"col\">Allergènes</th>
                    <th class=\"rtecenter\" scope=\"col\">Exclusions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>Céréales contenant du gluten</strong> (blé, seigle, orge, avoine, épeautre, kamut ou leurs souches hybridées) et produits à base de ces céréales.</td>
                    <td>
                        <ul>
                            <li>Sirops de glucose à base de blé, y compris le dextrose.</li>
                            <li>Maltodextrines à base de blé.</li>
                            <li>Sirops de glucose à base d'orge.</li>
                            <li>Céréales utilisées pour la fabrication de distillats ou d'alcool éthylique d'origine agricole pour les boissons spiritueuses et d'autres boissons alcooliques.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><strong>Crustacés </strong>et produits à base de crustacés</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><strong>Oeufs </strong>et produits à base d'oeufs</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><strong>Poissons </strong>et produits à base de poissons</td>
                    <td class=\"rtejustify\">Gélatine de poisson utilisée comme support pour les préparations de vitamines ou de caroténoïdes ou ichtyocolle utilisée comme agent de clarification dans la bière et le vin.</td>
                </tr>
                <tr>
                    <td><strong>Arachides</strong> et produits à base d’arachide</td>
                    <td class=\"rtejustify\">&nbsp;</td>
                </tr>
                <tr>
                    <td><strong>Soja </strong>et produits à base de soja</td>
                    <td>
                        <ul>
                            <li>Huile et la graisse de soja entièrement raffinées.</li>
                            <li>Tocophérols mixtes naturels.</li>
                            <li>Phytostérols et esters de phytostérol dérivés d'huiles végétales de soja.</li>
                            <li>Ester de stanol végétal produit à partir de stérols dérivés d'huiles végétales de soja.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><strong>Lait </strong>et produits à base de lait (y compris de lactose)</td>
                    <td>
                        <ul>
                            <li>Lactosérum utilisé pour la fabrication de distillats alcooliques, y compris d’alcool éthylique d'origine agricole.</li>
                            <li>Lactitol</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><strong>Fruits à coques</strong> (amandes, noisettes, noix, noix de : cajou, pécan, macadamia, du Brésil, du Queensland, pistaches) et produits à base de ces fruits.</td>
                    <td>
                        <p style=\"color:#FF0000\">Fruits à coques utilisés pour la fabrication de distillats alcooliques, y compris d’alcool éthylique d'origine agricole.</p>
                    </td>
                </tr>
                <tr>
                    <td><strong>Céleri </strong>et produits à base de céleri</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><strong>Moutarde </strong>et produits à base de moutarde</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><strong>Graines de sésame </strong>et&nbsp; produits à base de graines de sésame</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><strong>Anhydride sulfureux et sulfites en concentration de plus de 10mg/kg ou 10 mg/l</strong> (exprimés en SO2).</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><strong>Lupin </strong>et produits à base de lupin</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><strong>Mollusques </strong>et produits à base de mollusques</td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>





        ";
        // line 187
        $this->loadTemplate("footer.html.twig", "base2.html.twig", 187)->display($context);
        // line 188
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 190
        echo "

    </div>
</div>
</section>
</body>
</html>";
    }

    // line 47
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
    }

    // line 67
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nom", [], "any", false, false, false, 69), 'row');
        echo "
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Prenom", [], "any", false, false, false, 70), 'row');
        echo "
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 71), 'row');
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Couverts", [], "any", false, false, false, 72), 'row');
        echo "
                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Heure", [], "any", false, false, false, 73), 'row');
        echo "
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Allergies", [], "any", false, false, false, 74), 'row');
        echo "
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Date", [], "any", false, false, false, 75), 'row');
        echo "
                <input type=\"submit\" />
                ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            ";
    }

    // line 188
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 189,  291 => 188,  285 => 77,  280 => 75,  276 => 74,  272 => 73,  268 => 72,  264 => 71,  260 => 70,  256 => 69,  251 => 68,  247 => 67,  243 => 48,  239 => 47,  229 => 190,  226 => 188,  224 => 187,  114 => 79,  112 => 67,  92 => 49,  89 => 47,  87 => 46,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base2.html.twig", "C:\\xampp\\apps\\symfony\\templates\\base2.html.twig");
    }
}
