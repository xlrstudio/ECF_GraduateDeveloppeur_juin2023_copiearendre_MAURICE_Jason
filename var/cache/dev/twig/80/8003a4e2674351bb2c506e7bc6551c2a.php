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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/theme.scss */
class __TwigTemplate_237184816d5be0b9e65123a324094c89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/theme.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/theme.scss"));

        // line 1
        echo "@import \"./variables-bootstrap.scss\";
@import \"./variables-theme.scss\";

@import \"./base.scss\";
@import \"./menu.scss\";
@import \"./datagrids.scss\";
@import \"./datalists.scss\";
@import \"./fields.scss\";
@import \"./images.scss\";
@import \"./forms.scss\";
@import \"./buttons.scss\";
@import \"./badges.scss\";
@import \"./switches.scss\";
@import \"./autocomplete.scss\";
@import \"./errors.scss\";
@import \"./pages.scss\";
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/theme.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import \"./variables-bootstrap.scss\";
@import \"./variables-theme.scss\";

@import \"./base.scss\";
@import \"./menu.scss\";
@import \"./datagrids.scss\";
@import \"./datalists.scss\";
@import \"./fields.scss\";
@import \"./images.scss\";
@import \"./forms.scss\";
@import \"./buttons.scss\";
@import \"./badges.scss\";
@import \"./switches.scss\";
@import \"./autocomplete.scss\";
@import \"./errors.scss\";
@import \"./pages.scss\";
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/theme.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\theme.scss");
    }
}
