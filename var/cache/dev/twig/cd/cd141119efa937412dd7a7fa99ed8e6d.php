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

/* easycorp/easyadmin-bundle/src/Form/Type/EaFormPanelType.php */
class __TwigTemplate_7946d6961c62704035ffe07ac9fad534 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/EaFormPanelType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/EaFormPanelType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;

/**
 * The 'panel' form type is a special form type used to display a design
 * element needed to create complex form layouts. This \"fake\" type just displays
 * some HTML tags and it must be added to a form as \"unmapped\" and \"non required\".
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class EaFormPanelType extends AbstractType
{
    public function getBlockPrefix(): string
    {
        return 'ea_form_panel';
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Type/EaFormPanelType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;

/**
 * The 'panel' form type is a special form type used to display a design
 * element needed to create complex form layouts. This \"fake\" type just displays
 * some HTML tags and it must be added to a form as \"unmapped\" and \"non required\".
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class EaFormPanelType extends AbstractType
{
    public function getBlockPrefix(): string
    {
        return 'ea_form_panel';
    }
}
", "easycorp/easyadmin-bundle/src/Form/Type/EaFormPanelType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EaFormPanelType.php");
    }
}
