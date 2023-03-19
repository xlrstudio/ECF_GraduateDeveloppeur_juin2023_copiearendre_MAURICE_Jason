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

/* easycorp/easyadmin-bundle/src/Field/Configurator/IntegerConfigurator.php */
class __TwigTemplate_d3ebc939c0b667ff20ec5c814682fb69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/IntegerConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/IntegerConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\IntegerField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\NumberField;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class IntegerConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return IntegerField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        if (null === \$value = \$field->getValue()) {
            return;
        }

        if (null !== \$numberFormat = \$field->getCustomOption(NumberField::OPTION_NUMBER_FORMAT)) {
            \$field->setFormattedValue(sprintf(\$numberFormat, \$value));
        } elseif (null !== \$numberFormat = \$context->getCrud()->getNumberFormat()) {
            \$field->setFormattedValue(sprintf(\$numberFormat, \$value));
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/IntegerConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\IntegerField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\NumberField;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class IntegerConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return IntegerField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        if (null === \$value = \$field->getValue()) {
            return;
        }

        if (null !== \$numberFormat = \$field->getCustomOption(NumberField::OPTION_NUMBER_FORMAT)) {
            \$field->setFormattedValue(sprintf(\$numberFormat, \$value));
        } elseif (null !== \$numberFormat = \$context->getCrud()->getNumberFormat()) {
            \$field->setFormattedValue(sprintf(\$numberFormat, \$value));
        }
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/IntegerConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\IntegerConfigurator.php");
    }
}
