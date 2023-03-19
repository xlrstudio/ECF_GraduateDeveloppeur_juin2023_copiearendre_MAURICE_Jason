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

/* user/inscription.html.twig */
class __TwigTemplate_d2b07465c1547f5158727dced008c01a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>

    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>QUAI ANTIQUE</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/styles/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/styles/app.css"), "html", null, true);
        echo "\">



    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"public/js/registration.js\"></script>

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
    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"public/asset/css/style.css\">
</head>

<div>

    ";
        // line 45
        $this->loadTemplate("navbar.html.twig", "user/inscription.html.twig", 45)->display($context);
        // line 46
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 48
        echo "

    <div>



        <div class=\"container\">
            <img src=\"/asset/media/img/logo7.png\" alt=\"\">
        </div>

        <div>
            <h1>Inscription</h1>
            <H3></H3>
        </div>
        <div>

        </div>
        <div class=\"space\"></div>
        <div class=\"container\">
            <div class= container-xl>

                ";
        // line 69
        $this->displayBlock('form', $context, $blocks);
        // line 79
        echo "            </div>

        </div>







        ";
        // line 89
        $this->loadTemplate("footer.html.twig", "user/inscription.html.twig", 89)->display($context);
        // line 90
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 92
        echo "

    </div>
</div>
</section>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 46
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 47
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        echo "<form name=\"user\" method=\"post\">
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Nom\">Nom</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Nom\" name=\"user[Nom]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Prenom\">Prenom</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Prenom\" name=\"user[Prenom]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Tel\">Tel</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Tel\" name=\"user[Tel]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Couverts\">Couverts</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Couverts\" name=\"user[Couverts]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Allergies\">Allergies</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Allergies\" name=\"user[Allergies]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_email\">Email</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_email\" name=\"user[email]\" required=\"required\" maxlength=\"180\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"form-label  mt-4 col-form-label col-sm-2 required\" for=\"user_plainPassword_first\">Mot de passe</label><div class=\"col-sm-10\"><input type=\"password\" id=\"user_plainPassword_first\" name=\"user[plainPassword][first]\" required=\"required\" class=\"form-control form-control\">        </div></div><div class=\"mb-3 row\"><label class=\"form-label  mt-4 col-form-label col-sm-2 required\" for=\"user_plainPassword_second\">Confirmation du mot de passe</label><div class=\"col-sm-10\"><input type=\"password\" id=\"user_plainPassword_second\" name=\"user[plainPassword][second]\" required=\"required\" class=\"form-control form-control\">        </div></div>
                    <div class=\"mb-3 row\"><div class=\"col-sm-2\"></div><div class=\"col-sm-10\"><button type=\"submit\" id=\"user_Envoyer\" name=\"user[Envoyer]\" class=\"btn btn-primary mt-4 btn\">Envoyer</button></div></div><input type=\"hidden\" id=\"user__token\" name=\"user[_token]\" value=\"9fd0d2f.hp1xV91ihXG40MlDOvGUQBi-b_E1dMz7Vt2gBsdObWI.8tk7ZYcJyADqvfkBXpzDCXT1LZBQQKSoYa3vcpYpNwPv8BUtlS68Q-vpjA\"></form>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 91
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 91,  215 => 90,  187 => 69,  177 => 47,  167 => 46,  151 => 92,  148 => 90,  146 => 89,  134 => 79,  132 => 69,  109 => 48,  106 => 46,  104 => 45,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  46 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/styles/app.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/app.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/styles/app.css') }}\">



    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"public/js/registration.js\"></script>

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
    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"public/asset/css/style.css\">
</head>

<div>

    {% include(\"navbar.html.twig\") %}
    {% block css %}
    {% endblock %}


    <div>



        <div class=\"container\">
            <img src=\"/asset/media/img/logo7.png\" alt=\"\">
        </div>

        <div>
            <h1>Inscription</h1>
            <H3></H3>
        </div>
        <div>

        </div>
        <div class=\"space\"></div>
        <div class=\"container\">
            <div class= container-xl>

                {% block form %}<form name=\"user\" method=\"post\">
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Nom\">Nom</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Nom\" name=\"user[Nom]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Prenom\">Prenom</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Prenom\" name=\"user[Prenom]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Tel\">Tel</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Tel\" name=\"user[Tel]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Couverts\">Couverts</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Couverts\" name=\"user[Couverts]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_Allergies\">Allergies</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_Allergies\" name=\"user[Allergies]\" required=\"required\" maxlength=\"255\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"col-form-label col-sm-2 required\" for=\"user_email\">Email</label><div class=\"col-sm-10\"><input type=\"text\" id=\"user_email\" name=\"user[email]\" required=\"required\" maxlength=\"180\" class=\"form-control\">        </div></div>
                    <div class=\"mb-3 row\"><label class=\"form-label  mt-4 col-form-label col-sm-2 required\" for=\"user_plainPassword_first\">Mot de passe</label><div class=\"col-sm-10\"><input type=\"password\" id=\"user_plainPassword_first\" name=\"user[plainPassword][first]\" required=\"required\" class=\"form-control form-control\">        </div></div><div class=\"mb-3 row\"><label class=\"form-label  mt-4 col-form-label col-sm-2 required\" for=\"user_plainPassword_second\">Confirmation du mot de passe</label><div class=\"col-sm-10\"><input type=\"password\" id=\"user_plainPassword_second\" name=\"user[plainPassword][second]\" required=\"required\" class=\"form-control form-control\">        </div></div>
                    <div class=\"mb-3 row\"><div class=\"col-sm-2\"></div><div class=\"col-sm-10\"><button type=\"submit\" id=\"user_Envoyer\" name=\"user[Envoyer]\" class=\"btn btn-primary mt-4 btn\">Envoyer</button></div></div><input type=\"hidden\" id=\"user__token\" name=\"user[_token]\" value=\"9fd0d2f.hp1xV91ihXG40MlDOvGUQBi-b_E1dMz7Vt2gBsdObWI.8tk7ZYcJyADqvfkBXpzDCXT1LZBQQKSoYa3vcpYpNwPv8BUtlS68Q-vpjA\"></form>
                {% endblock %}
            </div>

        </div>







        {% include(\"footer.html.twig\") %}
        {% block footer %}
        {% endblock %}


    </div>
</div>
</section>
</body>
</html>", "user/inscription.html.twig", "C:\\xampp\\apps\\symfony\\templates\\user\\inscription.html.twig");
    }
}
