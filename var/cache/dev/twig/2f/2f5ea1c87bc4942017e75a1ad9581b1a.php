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

/* easycorp/easyadmin-bundle/src/Field/Configurator/DateTimeConfigurator.php */
class __TwigTemplate_05cac4b59a0f564e91353bffdec69e67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/DateTimeConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/DateTimeConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateTimeField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TimeField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DateTimeConfigurator implements FieldConfiguratorInterface
{
    private IntlFormatter \$intlFormatter;

    public function __construct(IntlFormatter \$intlFormatter)
    {
        \$this->intlFormatter = \$intlFormatter;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return \\in_array(\$field->getFieldFqcn(), [DateTimeField::class, DateField::class, TimeField::class], true);
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        // we don't require this PHP extension in composer.json because it's not mandatory to display
        // date/time fields in backends, so this is not a hard dependency
        if (!\\extension_loaded('intl')) {
            throw new \\LogicException('When using date/time fields in EasyAdmin backends, you must install and enable the PHP Intl extension, which is used to format date/time values.');
        }

        \$crud = \$context->getCrud();

        \$defaultTimezone = \$crud->getTimezone();
        \$timezone = \$field->getCustomOption(DateTimeField::OPTION_TIMEZONE) ?? \$defaultTimezone;

        \$dateFormat = null;
        \$timeFormat = null;
        \$icuDateTimePattern = '';
        \$formattedValue = \$field->getValue();

        if (DateTimeField::class === \$field->getFieldFqcn()) {
            [\$defaultDatePattern, \$defaultTimePattern] = \$crud->getDateTimePattern();
            \$datePattern = \$field->getCustomOption(DateTimeField::OPTION_DATE_PATTERN) ?? \$defaultDatePattern;
            \$timePattern = \$field->getCustomOption(DateTimeField::OPTION_TIME_PATTERN) ?? \$defaultTimePattern;
            if (\\in_array(\$datePattern, DateTimeField::VALID_DATE_FORMATS, true)) {
                \$dateFormat = \$datePattern;
                \$timeFormat = \$timePattern;
            } else {
                \$icuDateTimePattern = \$datePattern;
            }

            \$formattedValue = \$this->intlFormatter->formatDateTime(\$field->getValue(), \$dateFormat, \$timeFormat, \$icuDateTimePattern, \$timezone);
        } elseif (DateField::class === \$field->getFieldFqcn()) {
            \$dateFormatOrPattern = \$field->getCustomOption(DateField::OPTION_DATE_PATTERN) ?? \$crud->getDatePattern();
            if (\\in_array(\$dateFormatOrPattern, DateTimeField::VALID_DATE_FORMATS, true)) {
                \$dateFormat = \$dateFormatOrPattern;
            } else {
                \$icuDateTimePattern = \$dateFormatOrPattern;
            }

            \$formattedValue = \$this->intlFormatter->formatDate(\$field->getValue(), \$dateFormat, \$icuDateTimePattern, \$timezone);
        } elseif (TimeField::class === \$field->getFieldFqcn()) {
            \$timeFormatOrPattern = \$field->getCustomOption(TimeField::OPTION_TIME_PATTERN) ?? \$crud->getTimePattern();
            if (\\in_array(\$timeFormatOrPattern, DateTimeField::VALID_DATE_FORMATS, true)) {
                \$timeFormat = \$timeFormatOrPattern;
            } else {
                \$icuDateTimePattern = \$timeFormatOrPattern;
            }

            \$formattedValue = \$this->intlFormatter->formatTime(\$field->getValue(), \$timeFormat, \$icuDateTimePattern, \$timezone);
        }

        \$widgetOption = \$field->getCustomOption(DateTimeField::OPTION_WIDGET);
        if (DateTimeField::WIDGET_NATIVE === \$widgetOption) {
            \$field->setFormTypeOption('widget', 'single_text');
            \$field->setFormTypeOption('html5', true);
        } elseif (DateTimeField::WIDGET_CHOICE === \$widgetOption) {
            \$field->setFormTypeOption('widget', 'choice');
            \$field->setFormTypeOption('html5', true);
        } elseif (DateTimeField::WIDGET_TEXT === \$widgetOption) {
            \$field->setFormTypeOption('widget', 'single_text');
            \$field->setFormTypeOption('html5', false);
        }

        \$field->setFormattedValue(\$formattedValue);

        // check if the property is immutable, but only if it's a real Doctrine entity property
        if (!\$entityDto->hasProperty(\$field->getProperty())) {
            return;
        }
        \$doctrineDataType = \$entityDto->getPropertyMetadata(\$field->getProperty())->get('type');
        \$isImmutableDateTime = \\in_array(\$doctrineDataType, [Types::DATETIMETZ_IMMUTABLE, Types::DATETIME_IMMUTABLE, Types::DATE_IMMUTABLE, Types::TIME_IMMUTABLE], true);
        if (\$isImmutableDateTime) {
            \$field->setFormTypeOptionIfNotSet('input', 'datetime_immutable');
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/DateTimeConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateTimeField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TimeField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DateTimeConfigurator implements FieldConfiguratorInterface
{
    private IntlFormatter \$intlFormatter;

    public function __construct(IntlFormatter \$intlFormatter)
    {
        \$this->intlFormatter = \$intlFormatter;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return \\in_array(\$field->getFieldFqcn(), [DateTimeField::class, DateField::class, TimeField::class], true);
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        // we don't require this PHP extension in composer.json because it's not mandatory to display
        // date/time fields in backends, so this is not a hard dependency
        if (!\\extension_loaded('intl')) {
            throw new \\LogicException('When using date/time fields in EasyAdmin backends, you must install and enable the PHP Intl extension, which is used to format date/time values.');
        }

        \$crud = \$context->getCrud();

        \$defaultTimezone = \$crud->getTimezone();
        \$timezone = \$field->getCustomOption(DateTimeField::OPTION_TIMEZONE) ?? \$defaultTimezone;

        \$dateFormat = null;
        \$timeFormat = null;
        \$icuDateTimePattern = '';
        \$formattedValue = \$field->getValue();

        if (DateTimeField::class === \$field->getFieldFqcn()) {
            [\$defaultDatePattern, \$defaultTimePattern] = \$crud->getDateTimePattern();
            \$datePattern = \$field->getCustomOption(DateTimeField::OPTION_DATE_PATTERN) ?? \$defaultDatePattern;
            \$timePattern = \$field->getCustomOption(DateTimeField::OPTION_TIME_PATTERN) ?? \$defaultTimePattern;
            if (\\in_array(\$datePattern, DateTimeField::VALID_DATE_FORMATS, true)) {
                \$dateFormat = \$datePattern;
                \$timeFormat = \$timePattern;
            } else {
                \$icuDateTimePattern = \$datePattern;
            }

            \$formattedValue = \$this->intlFormatter->formatDateTime(\$field->getValue(), \$dateFormat, \$timeFormat, \$icuDateTimePattern, \$timezone);
        } elseif (DateField::class === \$field->getFieldFqcn()) {
            \$dateFormatOrPattern = \$field->getCustomOption(DateField::OPTION_DATE_PATTERN) ?? \$crud->getDatePattern();
            if (\\in_array(\$dateFormatOrPattern, DateTimeField::VALID_DATE_FORMATS, true)) {
                \$dateFormat = \$dateFormatOrPattern;
            } else {
                \$icuDateTimePattern = \$dateFormatOrPattern;
            }

            \$formattedValue = \$this->intlFormatter->formatDate(\$field->getValue(), \$dateFormat, \$icuDateTimePattern, \$timezone);
        } elseif (TimeField::class === \$field->getFieldFqcn()) {
            \$timeFormatOrPattern = \$field->getCustomOption(TimeField::OPTION_TIME_PATTERN) ?? \$crud->getTimePattern();
            if (\\in_array(\$timeFormatOrPattern, DateTimeField::VALID_DATE_FORMATS, true)) {
                \$timeFormat = \$timeFormatOrPattern;
            } else {
                \$icuDateTimePattern = \$timeFormatOrPattern;
            }

            \$formattedValue = \$this->intlFormatter->formatTime(\$field->getValue(), \$timeFormat, \$icuDateTimePattern, \$timezone);
        }

        \$widgetOption = \$field->getCustomOption(DateTimeField::OPTION_WIDGET);
        if (DateTimeField::WIDGET_NATIVE === \$widgetOption) {
            \$field->setFormTypeOption('widget', 'single_text');
            \$field->setFormTypeOption('html5', true);
        } elseif (DateTimeField::WIDGET_CHOICE === \$widgetOption) {
            \$field->setFormTypeOption('widget', 'choice');
            \$field->setFormTypeOption('html5', true);
        } elseif (DateTimeField::WIDGET_TEXT === \$widgetOption) {
            \$field->setFormTypeOption('widget', 'single_text');
            \$field->setFormTypeOption('html5', false);
        }

        \$field->setFormattedValue(\$formattedValue);

        // check if the property is immutable, but only if it's a real Doctrine entity property
        if (!\$entityDto->hasProperty(\$field->getProperty())) {
            return;
        }
        \$doctrineDataType = \$entityDto->getPropertyMetadata(\$field->getProperty())->get('type');
        \$isImmutableDateTime = \\in_array(\$doctrineDataType, [Types::DATETIMETZ_IMMUTABLE, Types::DATETIME_IMMUTABLE, Types::DATE_IMMUTABLE, Types::TIME_IMMUTABLE], true);
        if (\$isImmutableDateTime) {
            \$field->setFormTypeOptionIfNotSet('input', 'datetime_immutable');
        }
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/DateTimeConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\DateTimeConfigurator.php");
    }
}
