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

/* test.html.twig */
class __TwigTemplate_de96486b242693d8e0cf1fcda4b7b87e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"en\" dir=\"ltr\" data-turbo=\"false\" data-lt-installed=\"true\"><head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta name=\"generator\" content=\"EasyAdmin\">

    <title>Create Form</title>

    <link rel=\"stylesheet\" href=\"/bundles/easyadmin/app.efd86111.css\">







    <link rel=\"shortcut icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⬛</text></svg>\">

    <script src=\"/bundles/easyadmin/app.7ef09592.js\"></script>

    <script src=\"/bundles/easyadmin/form.5aa1447f.js\"></script>









</head>

<body id=\"ea-new-Form\" class=\"ea ea-new ea-new-Form ea-content-width-normal ea-sidebar-width-normal ea-light-scheme\" data-ea-content-width=\"normal\" data-ea-sidebar-width=\"normal\" data-ea-dark-scheme-is-enabled=\"true\" style=\"color-scheme: light;\">
<script src=\"/bundles/easyadmin/page-layout.3347892e.js\"></script>
<script src=\"/bundles/easyadmin/page-color-scheme.a1568167.js\"></script>



<div class=\"page-actions\">                <button class=\"action-saveAndAddAnother btn btn-secondary action-save\" type=\"submit\" name=\"ea[newForm][btn]\" value=\"saveAndAddAnother\" data-action-name=\"saveAndAddAnother\" form=\"new-Form-form\">
        <span class=\"btn-label\"><span class=\"action-label\">Create and add another</span></span>
    </button>

    <button class=\"action-saveAndReturn btn btn-primary action-save\" type=\"submit\" name=\"ea[newForm][btn]\" value=\"saveAndReturn\" data-action-name=\"saveAndReturn\" form=\"new-Form-form\">
        <span class=\"btn-label\"><span class=\"action-label\">Create</span></span>
    </button>

</div>

<form name=\"Form\" method=\"post\" class=\"ea-new-form\" id=\"new-Form-form\">

    <div class=\"row\">         <input type=\"hidden\" name=\"referrer\" value=\"http://symfony.localhost/admin?crudAction=index&amp;crudControllerFqcn=App%5CController%5CAdmin%5CFormCrudController\">

        <div class=\"col-md-6 col-xxl-5\">
            <div class=\"field-text form-group\"><label for=\"Form_Nom\" class=\"form-control-label required\">Nom</label><div class=\"form-widget\">


                    <input type=\"text\" id=\"Form_Nom\" name=\"Form[Nom]\" required=\"required\" class=\"form-control\">


                </div>
            </div>
        </div>

        <div class=\"flex-fill\"></div>


        <div class=\"col-md-6 col-xxl-5\">
            <div class=\"field-text form-group\"><label for=\"Form_Prenom\" class=\"form-control-label required\">Prenom</label><div class=\"form-widget\">


                    <input type=\"text\" id=\"Form_Prenom\" name=\"Form[Prenom]\" required=\"required\" class=\"form-control\">


                </div>
            </div>
        </div>

        <div class=\"flex-fill\"></div>


        <div class=\"col-md-6 col-xxl-5\">
            <div class=\"field-text form-group\"><label for=\"Form_email\" class=\"form-control-label required\">Email</label><div class=\"form-widget\">


                    <input type=\"text\" id=\"Form_email\" name=\"Form[email]\" required=\"required\" class=\"form-control\">


                </div>
            </div>
        </div>

        <div class=\"flex-fill\"></div>


        <div class=\"col-md-4 col-xxl-3\">
            <div class=\"field-integer form-group\"><label for=\"Form_Couverts\" class=\"form-control-label required\">Couverts</label><div class=\"form-widget\">


                    <input type=\"number\" id=\"Form_Couverts\" name=\"Form[Couverts]\" required=\"required\" class=\"form-control\">


                </div>
            </div>
        </div>

        <div class=\"flex-fill\"></div>


        <div class=\"col-md-4 col-xxl-3\">
            <div class=\"field-integer form-group\"><label for=\"Form_Heure\" class=\"form-control-label required\">Heure</label><div class=\"form-widget\">


                    <input type=\"number\" id=\"Form_Heure\" name=\"Form[Heure]\" required=\"required\" class=\"form-control\">


                </div>
            </div>
        </div>

        <div class=\"flex-fill\"></div>


        <div class=\"col-md-6 col-xxl-5\">
            <div class=\"field-text form-group\"><label for=\"Form_Allergies\" class=\"form-control-label required\">Allergies</label><div class=\"form-widget\">


                    <input type=\"text\" id=\"Form_Allergies\" name=\"Form[Allergies]\" required=\"required\" class=\"form-control\">


                </div>
            </div>
        </div>

        <div class=\"flex-fill\"></div>


        <div class=\"col-md-6 col-xxl-5\">
            <div class=\"field-date form-group\"><label for=\"Form_Date\" class=\"form-control-label required\">Date</label><div class=\"form-widget\">


                    <div class=\"datetime-widget datetime-widget-date\"><input type=\"date\" id=\"Form_Date\" name=\"Form[Date]\" required=\"required\" class=\"form-control\"></div>


                </div>
            </div>
        </div>

        <div class=\"flex-fill\"></div>



        <input type=\"hidden\" id=\"Form__token\" name=\"Form[_token]\" value=\"3ed9888690c011e1c304534c.Fw86VAZLJqnrikQjAnOYv5i7I4tYoPJ6giuVt5-YFN8.czhQLnV4H9OJ4XNGbQXpjs_8fMo85asI5G-jwKutZLJUPlxnUhpW_aj8Mw\">

    </div>     </form>

</section>

</article>

<div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
</div>
</section>
</div></body></html>";
    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test.html.twig", "C:\\xampp\\apps\\symfony\\templates\\test.html.twig");
    }
}
