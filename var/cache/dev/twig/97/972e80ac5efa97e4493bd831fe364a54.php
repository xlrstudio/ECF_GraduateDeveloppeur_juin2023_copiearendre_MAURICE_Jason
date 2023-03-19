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

/* easycorp/easyadmin-bundle/src/Field/Configurator/TextConfigurator.php */
class __TwigTemplate_1ac409849cec7a73b382883120679dae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/TextConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/TextConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Action;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TextareaField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TextField;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class TextConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return \\in_array(\$field->getFieldFqcn(), [TextField::class, TextareaField::class], true);
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        if (TextareaField::class === \$field->getFieldFqcn()) {
            \$field->setFormTypeOptionIfNotSet('attr.rows', \$field->getCustomOption(TextareaField::OPTION_NUM_OF_ROWS));
            \$field->setFormTypeOptionIfNotSet('attr.data-ea-textarea-field', true);
        }

        if (null === \$value = \$field->getValue()) {
            return;
        }

        if (!\\is_string(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new \\RuntimeException(sprintf('The value of the \"%s\" field of the entity with ID = \"%s\" can\\'t be converted into a string, so it cannot be represented by a TextField or a TextareaField.', \$field->getProperty(), \$entityDto->getPrimaryKeyValue()));
        }

        \$renderAsHtml = true === \$field->getCustomOption(TextField::OPTION_RENDER_AS_HTML);
        \$stripTags = true === \$field->getCustomOption(TextField::OPTION_STRIP_TAGS);
        if (\$renderAsHtml) {
            \$formattedValue = (string) \$field->getValue();
        } elseif (\$stripTags) {
            \$formattedValue = strip_tags((string) \$field->getValue());
        } else {
            \$formattedValue = htmlspecialchars((string) \$field->getValue(), \\ENT_NOQUOTES, null, false);
        }

        \$configuredMaxLength = \$field->getCustomOption(TextField::OPTION_MAX_LENGTH);
        // when contents are rendered as HTML, \"max length\" option is ignored to prevent
        // truncating contents in the middle of an HTML tag, which messes the entire backend
        if (!\$renderAsHtml) {
            \$isDetailAction = Action::DETAIL === \$context->getCrud()->getCurrentAction();
            \$defaultMaxLength = \$isDetailAction ? \\PHP_INT_MAX : 64;
            \$formattedValue = u(\$formattedValue)->truncate(\$configuredMaxLength ?? \$defaultMaxLength, '…')->toString();
        }

        \$field->setFormattedValue(\$formattedValue);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/TextConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Action;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TextareaField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TextField;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class TextConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return \\in_array(\$field->getFieldFqcn(), [TextField::class, TextareaField::class], true);
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        if (TextareaField::class === \$field->getFieldFqcn()) {
            \$field->setFormTypeOptionIfNotSet('attr.rows', \$field->getCustomOption(TextareaField::OPTION_NUM_OF_ROWS));
            \$field->setFormTypeOptionIfNotSet('attr.data-ea-textarea-field', true);
        }

        if (null === \$value = \$field->getValue()) {
            return;
        }

        if (!\\is_string(\$value) && !(\\is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new \\RuntimeException(sprintf('The value of the \"%s\" field of the entity with ID = \"%s\" can\\'t be converted into a string, so it cannot be represented by a TextField or a TextareaField.', \$field->getProperty(), \$entityDto->getPrimaryKeyValue()));
        }

        \$renderAsHtml = true === \$field->getCustomOption(TextField::OPTION_RENDER_AS_HTML);
        \$stripTags = true === \$field->getCustomOption(TextField::OPTION_STRIP_TAGS);
        if (\$renderAsHtml) {
            \$formattedValue = (string) \$field->getValue();
        } elseif (\$stripTags) {
            \$formattedValue = strip_tags((string) \$field->getValue());
        } else {
            \$formattedValue = htmlspecialchars((string) \$field->getValue(), \\ENT_NOQUOTES, null, false);
        }

        \$configuredMaxLength = \$field->getCustomOption(TextField::OPTION_MAX_LENGTH);
        // when contents are rendered as HTML, \"max length\" option is ignored to prevent
        // truncating contents in the middle of an HTML tag, which messes the entire backend
        if (!\$renderAsHtml) {
            \$isDetailAction = Action::DETAIL === \$context->getCrud()->getCurrentAction();
            \$defaultMaxLength = \$isDetailAction ? \\PHP_INT_MAX : 64;
            \$formattedValue = u(\$formattedValue)->truncate(\$configuredMaxLength ?? \$defaultMaxLength, '…')->toString();
        }

        \$field->setFormattedValue(\$formattedValue);
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/TextConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\TextConfigurator.php");
    }
}
