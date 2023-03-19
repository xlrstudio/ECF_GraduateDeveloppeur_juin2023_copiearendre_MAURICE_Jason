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

/* easycorp/easyadmin-bundle/src/Field/Configurator/PercentConfigurator.php */
class __TwigTemplate_777b73a74224ae1c3836fb63111ba19d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/PercentConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/PercentConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\PercentField;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class PercentConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return PercentField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$scale = \$field->getCustomOption(PercentField::OPTION_NUM_DECIMALS);
        \$roundingMode = \$field->getCustomOption(PercentField::OPTION_ROUNDING_MODE);
        \$symbol = \$field->getCustomOption(PercentField::OPTION_SYMBOL);
        \$isStoredAsFractional = true === \$field->getCustomOption(PercentField::OPTION_STORED_AS_FRACTIONAL);

        \$field->setFormTypeOptionIfNotSet('scale', \$scale);
        \$field->setFormTypeOptionIfNotSet('symbol', \$symbol);
        \$field->setFormTypeOptionIfNotSet('type', \$isStoredAsFractional ? 'fractional' : 'integer');
        \$field->setFormTypeOptionIfNotSet('rounding_mode', \$roundingMode);

        if (null === \$field->getValue()) {
            return;
        }

        \$value = \$field->getValue();
        \$field->setFormattedValue(sprintf('%s%s', \$isStoredAsFractional ? 100 * \$value : \$value, \$symbol));
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/PercentConfigurator.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\PercentField;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class PercentConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return PercentField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$scale = \$field->getCustomOption(PercentField::OPTION_NUM_DECIMALS);
        \$roundingMode = \$field->getCustomOption(PercentField::OPTION_ROUNDING_MODE);
        \$symbol = \$field->getCustomOption(PercentField::OPTION_SYMBOL);
        \$isStoredAsFractional = true === \$field->getCustomOption(PercentField::OPTION_STORED_AS_FRACTIONAL);

        \$field->setFormTypeOptionIfNotSet('scale', \$scale);
        \$field->setFormTypeOptionIfNotSet('symbol', \$symbol);
        \$field->setFormTypeOptionIfNotSet('type', \$isStoredAsFractional ? 'fractional' : 'integer');
        \$field->setFormTypeOptionIfNotSet('rounding_mode', \$roundingMode);

        if (null === \$field->getValue()) {
            return;
        }

        \$value = \$field->getValue();
        \$field->setFormattedValue(sprintf('%s%s', \$isStoredAsFractional ? 100 * \$value : \$value, \$symbol));
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/PercentConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\PercentConfigurator.php");
    }
}
