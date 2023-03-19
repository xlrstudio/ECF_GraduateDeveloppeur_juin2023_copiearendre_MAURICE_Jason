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
class __TwigTemplate_a6a4fb3444eb3df0aacef47769cbad61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
    <script>
        \$(document).ready(function() {
            // you may need to change this code if you are not using Bootstrap Datepicker
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });

    </script>
</head>


<div>

    ";
        // line 54
        $this->loadTemplate("navbar.html.twig", "base2.html.twig", 54)->display($context);
        // line 55
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 57
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 76
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 77
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            ";
        $this->displayBlock('form', $context, $blocks);
        // line 92
        echo "
        </div>

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





        ";
        // line 163
        $this->loadTemplate("footer.html.twig", "base2.html.twig", 163)->display($context);
        // line 164
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 166
        echo "

    </div>
</div>
</section>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 55
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 56
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 81
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "Nom", [], "any", false, false, false, 82), 'row');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "Prenom", [], "any", false, false, false, 83), 'row');
        echo "
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), 'row');
        echo "
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "Couverts", [], "any", false, false, false, 85), 'row');
        echo "
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "Heure", [], "any", false, false, false, 86), 'row');
        echo "
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "Allergies", [], "any", false, false, false, 87), 'row');
        echo "
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "Date", [], "any", false, false, false, 88), 'row');
        echo "
                <input type=\"submit\" />
                ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 164
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 165
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  325 => 165,  315 => 164,  303 => 90,  298 => 88,  294 => 87,  290 => 86,  286 => 85,  282 => 84,  278 => 83,  274 => 82,  269 => 81,  259 => 80,  249 => 56,  239 => 55,  223 => 166,  220 => 164,  218 => 163,  145 => 92,  142 => 80,  133 => 77,  130 => 76,  126 => 75,  106 => 57,  103 => 55,  101 => 54,  46 => 1,);
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
    <script>
        \$(document).ready(function() {
            // you may need to change this code if you are not using Bootstrap Datepicker
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });

    </script>
</head>


<div>

    {% include(\"navbar.html.twig\") %}
    {% block css %}
    {% endblock %}


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
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
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

        </div>

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





        {% include(\"footer.html.twig\") %}
        {% block footer %}
        {% endblock %}


    </div>
</div>
</section>
</body>
</html>", "base2.html.twig", "C:\\xampp\\apps\\symfony\\templates\\base2.html.twig");
    }
}
