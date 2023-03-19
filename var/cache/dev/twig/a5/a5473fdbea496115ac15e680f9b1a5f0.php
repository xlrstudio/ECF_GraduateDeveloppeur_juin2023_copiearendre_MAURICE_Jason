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

/* easycorp/easyadmin-bundle/assets/css/app.scss */
class __TwigTemplate_9c868a46e561dd0f6eabeea741c507e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/app.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/app.scss"));

        // line 1
        echo "@import \"./easyadmin-theme/variables-theme.scss\";
@import \"./easyadmin-theme/variables-bootstrap.scss\";

@import \"~bootstrap/scss/bootstrap\";

@import \"~@fortawesome/fontawesome-free/css/all.css\";
@import \"~@fortawesome/fontawesome-free/css/v4-shims.css\";
@import \"~@fortawesome/fontawesome-free/css/v5-font-face.css\";

@import \"./easyadmin-theme/theme.scss\";
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/app.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import \"./easyadmin-theme/variables-theme.scss\";
@import \"./easyadmin-theme/variables-bootstrap.scss\";

@import \"~bootstrap/scss/bootstrap\";

@import \"~@fortawesome/fontawesome-free/css/all.css\";
@import \"~@fortawesome/fontawesome-free/css/v4-shims.css\";
@import \"~@fortawesome/fontawesome-free/css/v5-font-face.css\";

@import \"./easyadmin-theme/theme.scss\";
", "easycorp/easyadmin-bundle/assets/css/app.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\app.scss");
    }
}
