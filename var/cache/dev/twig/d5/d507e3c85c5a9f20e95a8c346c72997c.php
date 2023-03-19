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

/* count.php */
class __TwigTemplate_d96123f815c5d72d5c44b400c9073627 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "count.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "count.php"));

        // line 1
        echo "<html lang=\"fr\" data-lt-installed=\"true\"><head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>

    <link rel=\"stylesheet\" href=\"public/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">


    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lora&amp;display=swap\" rel=\"stylesheet\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&amp;display=swap\" rel=\"stylesheet\">


    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&amp;display=swap\" rel=\"stylesheet\">

    <!--  jQuery -->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/bootstrap-iso.css\">

    <!-- Bootstrap Date-Picker Plugin -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\">
    <script>
        \$(document).ready(function() {
            // you may need to change this code if you are not using Bootstrap Datepicker
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });

    </script>
</head>


<body><div>



    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <link rel=\"stylesheet\" href=\"/asset/styles/app.css\">
    <link rel=\"stylesheet\" href=\"/assets/styles/app.css\">
    <link rel=\"stylesheet\" href=\"/asset/styles/app.css\">



    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lora&amp;display=swap\" rel=\"stylesheet\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&amp;display=swap\" rel=\"stylesheet\">


    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&amp;display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"public/asset/css/style.css\">


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
                            <img class=\"bi me-2\" width=\"40\" height=\"40\" role=\"img\" aria-label=\"Bootstrap\" src=\"asset/media/img/logo2.png\">
                        </a></li>
                    <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
                    <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
                    <li><a href=\"/formulaire\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
                    <li>
                        <a href=\"/inscription\" class=\"nav-link px-2 link-dark\">Inscription</a></li>
                    <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a>

                    <ul>


                    </ul></ul></div>
        </div>
    </header>


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
        // line 173
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173)) {
            // line 174
            echo "
            <form name=\"form\" method=\"post\">
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Nom\">Nom</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_Nom\" name=\"form[Nom]\" required=\"required\" maxlength=\"255\" class=\"form-control\" value=";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "nom", [], "any", false, false, false, 176), "html", null, true);
            echo ">        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Prenom\">Prenom</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_Prenom\" name=\"form[Prenom]\" required=\"required\" maxlength=\"255\" class=\"form-control\" value=";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "user", [], "any", false, false, false, 177), "prenom", [], "any", false, false, false, 177), "html", null, true);
            echo ">        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_email\">Email</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_email\" name=\"form[email]\" required=\"required\" maxlength=\"255\" class=\"form-control\" value=";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "email", [], "any", false, false, false, 178), "html", null, true);
            echo ">        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Couverts\">Couverts</label><div class=\"col-sm-10\"><input type=\"number\" id=\"form_Couverts\" name=\"form[Couverts]\" required=\"required\" class=\"form-control\" value=";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179), "couverts", [], "any", false, false, false, 179), "html", null, true);
            echo ">        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Heure\">Heure</label><div class=\"col-sm-10\"><select id=\"form_Heure\" name=\"form[Heure]\" class=\"form-select\"><option value=\"12:00\">12:00</option><option value=\"12:15\">12:15</option><option value=\"12:30\">12:30</option><option value=\"12:45\">12:45</option><option value=\"13:00\">13:00</option><option value=\"13:15\">13:15</option><option value=\"13:30\">13:30</option><option value=\"19:00\">19:00</option><option value=\"19:15\">19:15</option><option value=\"19:30\">19:30</option><option value=\"19:45\">19:45</option><option value=\"20:00\">20:00</option><option value=\"20:15\">20:15</option><option value=\"20:30\">20:30</option><option value=\"20:45\">20:45</option><option value=\"21:00\">21:00</option><option value=\"21:15\">21:15</option><option value=\"21:30\">21:30</option><option value=\"21:45\">21:45</option><option value=\"22:00\">22:00</option></select>        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Allergies\">Allergies</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_Allergies\" name=\"form[Allergies]\" required=\"required\" maxlength=\"255\" class=\"form-control\" value=";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181), "allergies", [], "any", false, false, false, 181), "html", null, true);
            echo ">        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Date\">Date</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_Date\" name=\"form[Date]\" required=\"required\" class=\"js-datepicker form-control\">        </div></div>
                <input type=\"submit\">
                <input type=\"hidden\" id=\"form__token\" name=\"form[_token]\" value=\"b4fc4cbaea1654fd3612ac45cd47a7.XX88QLgk0iZft6BM2c3d4BcWFF0oIcBHp0AnXd5NwIY.ZAV6Es1PqhZv_ec4sqKOkWInRQtHbZhx7whdGZl8pukwClt0wm29SGvj9Q\">
                <input type=\"hidden\" id=\"form__token\" name=\"form[_token]\" value=\"8605840f5c99cf87dca291.1XMOQQF-e6QVdi87JqcsdNXrjcZfBMdFk5lM8sJex0M.gCJIMXMpCsdNB3xyccgfEbjf1fYlPIgW0cB_qPZvqgTjOUAxaEwo7npFSA\"></form>
        </div>
        ";
        }
        // line 188
        echo "
        ";
        // line 189
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "user", [], "any", false, false, false, 189)) {
            // line 190
            echo "        ";
            $this->displayBlock('form', $context, $blocks);
            // line 202
            echo "        ";
        }
        // line 203
        echo "        <div class=\"container-xl\">
            <div class=\"space\"></div>

            <h3>Allergique ? Merci de nous préciser vos allergies ?</h3>
        </div>

        <div class=\"space\"></div>
        <div class=\"space\"></div>

        <div class=\"container-xxl table-color\">
            <br><br>

            <h3>Allergènes</h3>
            <li>Céréales contenant du gluten (blé, seigle, orge, avoine, épeautre, kamut ou leurs souches hybridées) et produits à base de ces céréales.</li>
            <br><br>
            <h3><b>Exclusions</b></h3>
            <li>Sirops de glucose à base de blé, y compris le dextrose.</li>
            <li>Maltodextrines à base de blé.</li>
            <li>Sirops de glucose à base d'orge.</li>
            <li>Céréales utilisées pour la fabrication de distillats ou d'alcool éthylique d'origine agricole pour les boissons spiritueuses et d'autres boissons alcooliques.</li>
            <br><br>
            <h3>Allergènes</h3>
            <li>Crustacés et produits à base de crustacés</li>
            <li>Oeufs et produits à base d'oeufs</li>
            <li>Poissons et produits à base de poissons</li>
            <br><br>

            <h3><b>Exclusions</b></h3>

            <li>Gélatine de poisson utilisée comme support pour les préparations de vitamines ou de caroténoïdes ou ichtyocolle utilisée comme agent de clarification dans la bière et le vin.
            </li>
            <li>Arachides et produits à base d’arachide</li>
            <li>Soja et produits à base de soja</li>
            <li>Tocophérols mixtes naturels.</li>
            <li>Phytostérols et esters de phytostérol dérivés d'huiles végétales de soja.</li>
            <li>Ester de stanol végétal produit à partir de stérols dérivés d'huiles végétales de soja.</li>
            <br><br>
            <h3>Allergènes</h3>

            <li>Lait et produits à base de lait (y compris de lactose)</li>
            <h3><b>Exclusions</b></h3>
            <li>Lactosérum utilisé pour la fabrication de distillats alcooliques, y compris d’alcool éthylique d'origine agricole.</li>
            <li>Lactitol</li>
            <br><br>
            <h3>Allergènes</h3>
            <li>Fruits à coques </li>
            <br><br>
            <h3><b>Exclusions</b></h3>
            <li>Fruits à coques utilisés pour la fabrication de distillats alcooliques, y compris d’alcool éthylique d'origine agricole.            </li>

            <li>Céleri et produits à base de céleri</li>
            <li>Moutarde et produits à base de moutarde</li>
            <li>Graines de sésame et produits à base de graines de sésame</li>
            <li>Anhydride sulfureux et sulfites en concentration de plus de 10mg/kg ou 10 mg/l (exprimés en SO2).</li>
            <li>Lupin et produits à base de lupin</li>
            <li>Mollusques et produits à base de mollusques</li>

            <br><br>




        </div>






        <div class=\"space\"></div>

        <div class=\"container-xs\">
            <footer class=\"container-2\">
                <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
                    <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
                    <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
                    <li><a href=\"/formulaire\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
                    <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a>
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


            </footer></div>
    </div>


</div></body></html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 190
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 191
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), 'form_start');
        echo "
        ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "Nom", [], "any", false, false, false, 192), 'row');
        echo "
        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "Prenom", [], "any", false, false, false, 193), 'row');
        echo "
        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "email", [], "any", false, false, false, 194), 'row');
        echo "
        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "Couverts", [], "any", false, false, false, 195), 'row');
        echo "
        ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "Heure", [], "any", false, false, false, 196), 'row');
        echo "
        ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "Allergies", [], "any", false, false, false, 197), 'row');
        echo "
        ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "Date", [], "any", false, false, false, 198), 'row');
        echo "
        <input type=\"submit\" />
        ";
        // line 200
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), 'form_end');
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "count.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 200,  445 => 198,  441 => 197,  437 => 196,  433 => 195,  429 => 194,  425 => 193,  421 => 192,  416 => 191,  406 => 190,  262 => 203,  259 => 202,  256 => 190,  254 => 189,  251 => 188,  241 => 181,  236 => 179,  232 => 178,  228 => 177,  224 => 176,  220 => 174,  218 => 173,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\" data-lt-installed=\"true\"><head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>

    <link rel=\"stylesheet\" href=\"public/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">


    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lora&amp;display=swap\" rel=\"stylesheet\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&amp;display=swap\" rel=\"stylesheet\">


    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&amp;display=swap\" rel=\"stylesheet\">

    <!--  jQuery -->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/bootstrap-iso.css\">

    <!-- Bootstrap Date-Picker Plugin -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\">
    <script>
        \$(document).ready(function() {
            // you may need to change this code if you are not using Bootstrap Datepicker
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });

    </script>
</head>


<body><div>



    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <link rel=\"stylesheet\" href=\"/asset/styles/app.css\">
    <link rel=\"stylesheet\" href=\"/assets/styles/app.css\">
    <link rel=\"stylesheet\" href=\"/asset/styles/app.css\">



    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lora&amp;display=swap\" rel=\"stylesheet\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300&amp;display=swap\" rel=\"stylesheet\">


    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin=\"\">
    <link href=\"https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&amp;display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"public/asset/css/style.css\">


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
                            <img class=\"bi me-2\" width=\"40\" height=\"40\" role=\"img\" aria-label=\"Bootstrap\" src=\"asset/media/img/logo2.png\">
                        </a></li>
                    <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
                    <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
                    <li><a href=\"/formulaire\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
                    <li>
                        <a href=\"/inscription\" class=\"nav-link px-2 link-dark\">Inscription</a></li>
                    <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a>

                    <ul>


                    </ul></ul></div>
        </div>
    </header>


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

            {% if app.user %}

            <form name=\"form\" method=\"post\">
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Nom\">Nom</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_Nom\" name=\"form[Nom]\" required=\"required\" maxlength=\"255\" class=\"form-control\" value={{ app.user.nom }}>        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Prenom\">Prenom</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_Prenom\" name=\"form[Prenom]\" required=\"required\" maxlength=\"255\" class=\"form-control\" value={{ app.user.prenom }}>        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_email\">Email</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_email\" name=\"form[email]\" required=\"required\" maxlength=\"255\" class=\"form-control\" value={{ app.user.email }}>        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Couverts\">Couverts</label><div class=\"col-sm-10\"><input type=\"number\" id=\"form_Couverts\" name=\"form[Couverts]\" required=\"required\" class=\"form-control\" value={{ app.user.couverts }}>        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Heure\">Heure</label><div class=\"col-sm-10\"><select id=\"form_Heure\" name=\"form[Heure]\" class=\"form-select\"><option value=\"12:00\">12:00</option><option value=\"12:15\">12:15</option><option value=\"12:30\">12:30</option><option value=\"12:45\">12:45</option><option value=\"13:00\">13:00</option><option value=\"13:15\">13:15</option><option value=\"13:30\">13:30</option><option value=\"19:00\">19:00</option><option value=\"19:15\">19:15</option><option value=\"19:30\">19:30</option><option value=\"19:45\">19:45</option><option value=\"20:00\">20:00</option><option value=\"20:15\">20:15</option><option value=\"20:30\">20:30</option><option value=\"20:45\">20:45</option><option value=\"21:00\">21:00</option><option value=\"21:15\">21:15</option><option value=\"21:30\">21:30</option><option value=\"21:45\">21:45</option><option value=\"22:00\">22:00</option></select>        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Allergies\">Allergies</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_Allergies\" name=\"form[Allergies]\" required=\"required\" maxlength=\"255\" class=\"form-control\" value={{ app.user.allergies }}>        </div></div>
                <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"form_Date\">Date</label><div class=\"col-sm-10\"><input type=\"text\" id=\"form_Date\" name=\"form[Date]\" required=\"required\" class=\"js-datepicker form-control\">        </div></div>
                <input type=\"submit\">
                <input type=\"hidden\" id=\"form__token\" name=\"form[_token]\" value=\"b4fc4cbaea1654fd3612ac45cd47a7.XX88QLgk0iZft6BM2c3d4BcWFF0oIcBHp0AnXd5NwIY.ZAV6Es1PqhZv_ec4sqKOkWInRQtHbZhx7whdGZl8pukwClt0wm29SGvj9Q\">
                <input type=\"hidden\" id=\"form__token\" name=\"form[_token]\" value=\"8605840f5c99cf87dca291.1XMOQQF-e6QVdi87JqcsdNXrjcZfBMdFk5lM8sJex0M.gCJIMXMpCsdNB3xyccgfEbjf1fYlPIgW0cB_qPZvqgTjOUAxaEwo7npFSA\"></form>
        </div>
        {% endif %}

        {% if not app.user %}
        {% block form %}
        {{ form_start(form) }}
        {{ form_row(form.Nom) }}
        {{ form_row(form.Prenom) }}
        {{ form_row(form.email) }}
        {{ form_row(form.Couverts) }}
        {{ form_row(form.Heure) }}
        {{ form_row(form.Allergies) }}
        {{ form_row(form.Date) }}
        <input type=\"submit\" />
        {{ form_end(form) }}
        {% endblock %}
        {% endif %}
        <div class=\"container-xl\">
            <div class=\"space\"></div>

            <h3>Allergique ? Merci de nous préciser vos allergies ?</h3>
        </div>

        <div class=\"space\"></div>
        <div class=\"space\"></div>

        <div class=\"container-xxl table-color\">
            <br><br>

            <h3>Allergènes</h3>
            <li>Céréales contenant du gluten (blé, seigle, orge, avoine, épeautre, kamut ou leurs souches hybridées) et produits à base de ces céréales.</li>
            <br><br>
            <h3><b>Exclusions</b></h3>
            <li>Sirops de glucose à base de blé, y compris le dextrose.</li>
            <li>Maltodextrines à base de blé.</li>
            <li>Sirops de glucose à base d'orge.</li>
            <li>Céréales utilisées pour la fabrication de distillats ou d'alcool éthylique d'origine agricole pour les boissons spiritueuses et d'autres boissons alcooliques.</li>
            <br><br>
            <h3>Allergènes</h3>
            <li>Crustacés et produits à base de crustacés</li>
            <li>Oeufs et produits à base d'oeufs</li>
            <li>Poissons et produits à base de poissons</li>
            <br><br>

            <h3><b>Exclusions</b></h3>

            <li>Gélatine de poisson utilisée comme support pour les préparations de vitamines ou de caroténoïdes ou ichtyocolle utilisée comme agent de clarification dans la bière et le vin.
            </li>
            <li>Arachides et produits à base d’arachide</li>
            <li>Soja et produits à base de soja</li>
            <li>Tocophérols mixtes naturels.</li>
            <li>Phytostérols et esters de phytostérol dérivés d'huiles végétales de soja.</li>
            <li>Ester de stanol végétal produit à partir de stérols dérivés d'huiles végétales de soja.</li>
            <br><br>
            <h3>Allergènes</h3>

            <li>Lait et produits à base de lait (y compris de lactose)</li>
            <h3><b>Exclusions</b></h3>
            <li>Lactosérum utilisé pour la fabrication de distillats alcooliques, y compris d’alcool éthylique d'origine agricole.</li>
            <li>Lactitol</li>
            <br><br>
            <h3>Allergènes</h3>
            <li>Fruits à coques </li>
            <br><br>
            <h3><b>Exclusions</b></h3>
            <li>Fruits à coques utilisés pour la fabrication de distillats alcooliques, y compris d’alcool éthylique d'origine agricole.            </li>

            <li>Céleri et produits à base de céleri</li>
            <li>Moutarde et produits à base de moutarde</li>
            <li>Graines de sésame et produits à base de graines de sésame</li>
            <li>Anhydride sulfureux et sulfites en concentration de plus de 10mg/kg ou 10 mg/l (exprimés en SO2).</li>
            <li>Lupin et produits à base de lupin</li>
            <li>Mollusques et produits à base de mollusques</li>

            <br><br>




        </div>






        <div class=\"space\"></div>

        <div class=\"container-xs\">
            <footer class=\"container-2\">
                <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
                    <li><a href=\"/accueil\" class=\"nav-link px-2 link-secondary\">Accueil</a></li>
                    <li><a href=\"/menu\" class=\"nav-link px-2 link-dark reservation\">Menu</a></li>
                    <li><a href=\"/formulaire\" class=\"nav-link px-2 link-dark reservation\"><mark>Réserver</mark></a></li>
                    <a href=\"/login\" class=\"nav-link px-2 link-dark\">Se connecter</a>
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


            </footer></div>
    </div>


</div></body></html>", "count.php", "C:\\xampp\\apps\\symfony\\templates\\count.php");
    }
}
