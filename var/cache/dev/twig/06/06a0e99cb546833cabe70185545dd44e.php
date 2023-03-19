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

/* easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php */
class __TwigTemplate_2a81e9e5be116837bc44ebda043e22ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\SlugField;
use function Symfony\\Component\\Translation\\t;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class SlugConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return SlugField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$targetFieldNames = (array) \$field->getCustomOption(SlugField::OPTION_TARGET_FIELD_NAME);
        if ([] === \$targetFieldNames) {
            throw new \\RuntimeException(sprintf('The \"%s\" field must define the name(s) of the field(s) whose contents are used for the slug using the \"setTargetFieldName()\" method.', \$field->getProperty()));
        }

        \$field->setFormTypeOption('target', implode('|', \$targetFieldNames));

        if (null !== \$unlockConfirmationMessage = \$field->getCustomOption(SlugField::OPTION_UNLOCK_CONFIRMATION_MESSAGE)) {
            if (!\$unlockConfirmationMessage instanceof TranslatableInterface) {
                \$unlockConfirmationMessage = t(\$unlockConfirmationMessage, [], \$context->getI18n()->getTranslationDomain());
            }

            \$field->setFormTypeOption('attr.data-confirm-text', \$unlockConfirmationMessage);
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\SlugField;
use function Symfony\\Component\\Translation\\t;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class SlugConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return SlugField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$targetFieldNames = (array) \$field->getCustomOption(SlugField::OPTION_TARGET_FIELD_NAME);
        if ([] === \$targetFieldNames) {
            throw new \\RuntimeException(sprintf('The \"%s\" field must define the name(s) of the field(s) whose contents are used for the slug using the \"setTargetFieldName()\" method.', \$field->getProperty()));
        }

        \$field->setFormTypeOption('target', implode('|', \$targetFieldNames));

        if (null !== \$unlockConfirmationMessage = \$field->getCustomOption(SlugField::OPTION_UNLOCK_CONFIRMATION_MESSAGE)) {
            if (!\$unlockConfirmationMessage instanceof TranslatableInterface) {
                \$unlockConfirmationMessage = t(\$unlockConfirmationMessage, [], \$context->getI18n()->getTranslationDomain());
            }

            \$field->setFormTypeOption('attr.data-confirm-text', \$unlockConfirmationMessage);
        }
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\SlugConfigurator.php");
    }
}
