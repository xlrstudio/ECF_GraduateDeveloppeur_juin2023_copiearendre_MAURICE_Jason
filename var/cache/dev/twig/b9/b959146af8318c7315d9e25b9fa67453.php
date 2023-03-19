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

/* easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php */
class __TwigTemplate_299d3d40bbf1780d54400de03c8edb48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ChoiceField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Translation\\TranslatableChoiceMessage;
use EasyCorp\\Bundle\\EasyAdminBundle\\Translation\\TranslatableChoiceMessageCollection;
use function Symfony\\Component\\String\\u;
use function Symfony\\Component\\Translation\\t;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ChoiceConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return ChoiceField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$areChoicesTranslatable = true === \$field->getCustomOption(ChoiceField::OPTION_USE_TRANSLATABLE_CHOICES);
        \$isExpanded = true === \$field->getCustomOption(ChoiceField::OPTION_RENDER_EXPANDED);
        \$isMultipleChoice = true === \$field->getCustomOption(ChoiceField::OPTION_ALLOW_MULTIPLE_CHOICES);

        \$choices = \$this->getChoices(\$field->getCustomOption(ChoiceField::OPTION_CHOICES), \$entityDto, \$field);

        // using a more precise check like 'function_exists('enum_exists');' messes with IDEs like PhpStorm
        \$enumsAreSupported = \\PHP_VERSION_ID >= 80100;
        // if no choices are passed to the field, check if it's related to an Enum;
        // in that case, get all the possible values of the Enum
        if (null === \$choices && \$enumsAreSupported) {
            \$enumTypeClass = \$field->getDoctrineMetadata()->get('enumType');
            if (enum_exists(\$enumTypeClass)) {
                \$choices = \$enumTypeClass::cases();
            }
        }

        if (null === \$choices) {
            \$choices = [];
        }

        // support for enums
        if (\$enumsAreSupported) {
            \$elementIsEnum = array_unique(array_map(static function (\$element): bool {
                return \\is_object(\$element) && enum_exists(\$element::class);
            }, \$choices));
            \$allChoicesAreEnums = false === \\in_array(false, \$elementIsEnum, true);

            if (\$allChoicesAreEnums) {
                \$processedEnumChoices = [];
                foreach (\$choices as \$choice) {
                    if (\$choice instanceof \\BackedEnum) {
                        \$processedEnumChoices[\$choice->name] = \$choice->value;
                    } else {
                        \$processedEnumChoices[\$choice->name] = \$choice->name;
                    }
                }

                \$choices = \$processedEnumChoices;
            }
        }

        if (\$areChoicesTranslatable) {
            \$field->setFormTypeOptionIfNotSet('choices', array_keys(\$choices));
            \$field->setFormTypeOptionIfNotSet('choice_label', fn (\$value) => \$choices[\$value]);
        } else {
            \$field->setFormTypeOptionIfNotSet('choices', \$choices);
        }
        \$field->setFormTypeOptionIfNotSet('multiple', \$isMultipleChoice);
        \$field->setFormTypeOptionIfNotSet('expanded', \$isExpanded);

        if (\$isExpanded && ChoiceField::WIDGET_AUTOCOMPLETE === \$field->getCustomOption(ChoiceField::OPTION_WIDGET)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" choice field wants to be displayed as an autocomplete widget and as an expanded list of choices at the same time, which is not possible. Use the renderExpanded() and renderAsNativeWidget() methods to change one of those options.', \$field->getProperty()));
        }

        if (null === \$field->getCustomOption(ChoiceField::OPTION_WIDGET)) {
            \$field->setCustomOption(ChoiceField::OPTION_WIDGET, \$isExpanded ? ChoiceField::WIDGET_NATIVE : ChoiceField::WIDGET_AUTOCOMPLETE);
        }

        if (ChoiceField::WIDGET_AUTOCOMPLETE === \$field->getCustomOption(ChoiceField::OPTION_WIDGET)) {
            \$field->setFormTypeOption('attr.data-ea-widget', 'ea-autocomplete');
            \$field->setDefaultColumns(\$isMultipleChoice ? 'col-md-8 col-xxl-6' : 'col-md-6 col-xxl-5');
        }

        \$field->setFormTypeOptionIfNotSet('placeholder', '');

        // the value of this form option must be a string to properly propagate it as an HTML attribute value
        \$field->setFormTypeOption('attr.data-ea-autocomplete-render-items-as-html', true === \$field->getCustomOption(ChoiceField::OPTION_ESCAPE_HTML_CONTENTS) ? 'false' : 'true');

        \$fieldValue = \$field->getValue();
        \$isIndexOrDetail = \\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_INDEX, Crud::PAGE_DETAIL], true);
        if (null === \$fieldValue || !\$isIndexOrDetail) {
            return;
        }

        \$badgeSelector = \$field->getCustomOption(ChoiceField::OPTION_RENDER_AS_BADGES);
        \$isRenderedAsBadge = null !== \$badgeSelector && false !== \$badgeSelector;

        \$translationParameters = \$context->getI18n()->getTranslationParameters();
        \$translationDomain = \$context->getI18n()->getTranslationDomain();
        \$choiceMessages = [];
        // Translatable choice don't need to get flipped
        \$flippedChoices = \$areChoicesTranslatable ? \$choices : array_flip(\$this->flatten(\$choices));
        foreach ((array) \$fieldValue as \$selectedValue) {
            if (null !== \$selectedLabel = \$flippedChoices[\$selectedValue] ?? null) {
                if (\$selectedValue instanceof TranslatableInterface) {
                    \$choiceMessage = \$selectedValue;
                } else {
                    \$choiceMessage = t(
                        \$selectedLabel,
                        \$translationParameters,
                        \$translationDomain
                    );
                }
                \$choiceMessages[] = new TranslatableChoiceMessage(
                    \$choiceMessage,
                    \$isRenderedAsBadge ? \$this->getBadgeCssClass(\$badgeSelector, \$selectedValue, \$field) : null
                );
            }
        }
        \$field->setFormattedValue(new TranslatableChoiceMessageCollection(\$choiceMessages, \$isRenderedAsBadge));
    }

    private function getChoices(\$choiceGenerator, EntityDto \$entity, FieldDto \$field): array|null
    {
        if (null === \$choiceGenerator) {
            return null;
        }

        if (\\is_array(\$choiceGenerator)) {
            return \$choiceGenerator;
        }

        return \$choiceGenerator(\$entity->getInstance(), \$field);
    }

    private function getBadgeCssClass(\$badgeSelector, \$value, FieldDto \$field): string
    {
        \$commonBadgeCssClass = 'badge';

        \$badgeType = '';
        if (true === \$badgeSelector) {
            \$badgeType = 'badge-secondary';
        } elseif (\\is_array(\$badgeSelector)) {
            \$badgeType = \$badgeSelector[\$value] ?? 'badge-secondary';
        } elseif (\\is_callable(\$badgeSelector)) {
            \$badgeType = \$badgeSelector(\$value, \$field);
            if (!\\in_array(\$badgeType, ChoiceField::VALID_BADGE_TYPES, true)) {
                throw new \\RuntimeException(sprintf('The value returned by the callable passed to the \"renderAsBadges()\" method must be one of the following valid badge types: \"%s\" (\"%s\" given).', implode(', ', ChoiceField::VALID_BADGE_TYPES), \$badgeType));
            }
        }

        \$badgeTypeCssClass = (null === \$badgeType || '' === \$badgeType) ? '' : u(\$badgeType)->ensureStart('badge-')->toString();

        return \$commonBadgeCssClass.' '.\$badgeTypeCssClass;
    }

    private function flatten(array \$choices): array
    {
        \$flattened = [];

        foreach (\$choices as \$label => \$choice) {
            // Flatten grouped choices
            if (\\is_array(\$choice)) {
                \$flattened = array_merge(\$flattened, \$choice);
            } else {
                \$flattened[\$label] = \$choice;
            }
        }

        return \$flattened;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ChoiceField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Translation\\TranslatableChoiceMessage;
use EasyCorp\\Bundle\\EasyAdminBundle\\Translation\\TranslatableChoiceMessageCollection;
use function Symfony\\Component\\String\\u;
use function Symfony\\Component\\Translation\\t;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ChoiceConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return ChoiceField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$areChoicesTranslatable = true === \$field->getCustomOption(ChoiceField::OPTION_USE_TRANSLATABLE_CHOICES);
        \$isExpanded = true === \$field->getCustomOption(ChoiceField::OPTION_RENDER_EXPANDED);
        \$isMultipleChoice = true === \$field->getCustomOption(ChoiceField::OPTION_ALLOW_MULTIPLE_CHOICES);

        \$choices = \$this->getChoices(\$field->getCustomOption(ChoiceField::OPTION_CHOICES), \$entityDto, \$field);

        // using a more precise check like 'function_exists('enum_exists');' messes with IDEs like PhpStorm
        \$enumsAreSupported = \\PHP_VERSION_ID >= 80100;
        // if no choices are passed to the field, check if it's related to an Enum;
        // in that case, get all the possible values of the Enum
        if (null === \$choices && \$enumsAreSupported) {
            \$enumTypeClass = \$field->getDoctrineMetadata()->get('enumType');
            if (enum_exists(\$enumTypeClass)) {
                \$choices = \$enumTypeClass::cases();
            }
        }

        if (null === \$choices) {
            \$choices = [];
        }

        // support for enums
        if (\$enumsAreSupported) {
            \$elementIsEnum = array_unique(array_map(static function (\$element): bool {
                return \\is_object(\$element) && enum_exists(\$element::class);
            }, \$choices));
            \$allChoicesAreEnums = false === \\in_array(false, \$elementIsEnum, true);

            if (\$allChoicesAreEnums) {
                \$processedEnumChoices = [];
                foreach (\$choices as \$choice) {
                    if (\$choice instanceof \\BackedEnum) {
                        \$processedEnumChoices[\$choice->name] = \$choice->value;
                    } else {
                        \$processedEnumChoices[\$choice->name] = \$choice->name;
                    }
                }

                \$choices = \$processedEnumChoices;
            }
        }

        if (\$areChoicesTranslatable) {
            \$field->setFormTypeOptionIfNotSet('choices', array_keys(\$choices));
            \$field->setFormTypeOptionIfNotSet('choice_label', fn (\$value) => \$choices[\$value]);
        } else {
            \$field->setFormTypeOptionIfNotSet('choices', \$choices);
        }
        \$field->setFormTypeOptionIfNotSet('multiple', \$isMultipleChoice);
        \$field->setFormTypeOptionIfNotSet('expanded', \$isExpanded);

        if (\$isExpanded && ChoiceField::WIDGET_AUTOCOMPLETE === \$field->getCustomOption(ChoiceField::OPTION_WIDGET)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" choice field wants to be displayed as an autocomplete widget and as an expanded list of choices at the same time, which is not possible. Use the renderExpanded() and renderAsNativeWidget() methods to change one of those options.', \$field->getProperty()));
        }

        if (null === \$field->getCustomOption(ChoiceField::OPTION_WIDGET)) {
            \$field->setCustomOption(ChoiceField::OPTION_WIDGET, \$isExpanded ? ChoiceField::WIDGET_NATIVE : ChoiceField::WIDGET_AUTOCOMPLETE);
        }

        if (ChoiceField::WIDGET_AUTOCOMPLETE === \$field->getCustomOption(ChoiceField::OPTION_WIDGET)) {
            \$field->setFormTypeOption('attr.data-ea-widget', 'ea-autocomplete');
            \$field->setDefaultColumns(\$isMultipleChoice ? 'col-md-8 col-xxl-6' : 'col-md-6 col-xxl-5');
        }

        \$field->setFormTypeOptionIfNotSet('placeholder', '');

        // the value of this form option must be a string to properly propagate it as an HTML attribute value
        \$field->setFormTypeOption('attr.data-ea-autocomplete-render-items-as-html', true === \$field->getCustomOption(ChoiceField::OPTION_ESCAPE_HTML_CONTENTS) ? 'false' : 'true');

        \$fieldValue = \$field->getValue();
        \$isIndexOrDetail = \\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_INDEX, Crud::PAGE_DETAIL], true);
        if (null === \$fieldValue || !\$isIndexOrDetail) {
            return;
        }

        \$badgeSelector = \$field->getCustomOption(ChoiceField::OPTION_RENDER_AS_BADGES);
        \$isRenderedAsBadge = null !== \$badgeSelector && false !== \$badgeSelector;

        \$translationParameters = \$context->getI18n()->getTranslationParameters();
        \$translationDomain = \$context->getI18n()->getTranslationDomain();
        \$choiceMessages = [];
        // Translatable choice don't need to get flipped
        \$flippedChoices = \$areChoicesTranslatable ? \$choices : array_flip(\$this->flatten(\$choices));
        foreach ((array) \$fieldValue as \$selectedValue) {
            if (null !== \$selectedLabel = \$flippedChoices[\$selectedValue] ?? null) {
                if (\$selectedValue instanceof TranslatableInterface) {
                    \$choiceMessage = \$selectedValue;
                } else {
                    \$choiceMessage = t(
                        \$selectedLabel,
                        \$translationParameters,
                        \$translationDomain
                    );
                }
                \$choiceMessages[] = new TranslatableChoiceMessage(
                    \$choiceMessage,
                    \$isRenderedAsBadge ? \$this->getBadgeCssClass(\$badgeSelector, \$selectedValue, \$field) : null
                );
            }
        }
        \$field->setFormattedValue(new TranslatableChoiceMessageCollection(\$choiceMessages, \$isRenderedAsBadge));
    }

    private function getChoices(\$choiceGenerator, EntityDto \$entity, FieldDto \$field): array|null
    {
        if (null === \$choiceGenerator) {
            return null;
        }

        if (\\is_array(\$choiceGenerator)) {
            return \$choiceGenerator;
        }

        return \$choiceGenerator(\$entity->getInstance(), \$field);
    }

    private function getBadgeCssClass(\$badgeSelector, \$value, FieldDto \$field): string
    {
        \$commonBadgeCssClass = 'badge';

        \$badgeType = '';
        if (true === \$badgeSelector) {
            \$badgeType = 'badge-secondary';
        } elseif (\\is_array(\$badgeSelector)) {
            \$badgeType = \$badgeSelector[\$value] ?? 'badge-secondary';
        } elseif (\\is_callable(\$badgeSelector)) {
            \$badgeType = \$badgeSelector(\$value, \$field);
            if (!\\in_array(\$badgeType, ChoiceField::VALID_BADGE_TYPES, true)) {
                throw new \\RuntimeException(sprintf('The value returned by the callable passed to the \"renderAsBadges()\" method must be one of the following valid badge types: \"%s\" (\"%s\" given).', implode(', ', ChoiceField::VALID_BADGE_TYPES), \$badgeType));
            }
        }

        \$badgeTypeCssClass = (null === \$badgeType || '' === \$badgeType) ? '' : u(\$badgeType)->ensureStart('badge-')->toString();

        return \$commonBadgeCssClass.' '.\$badgeTypeCssClass;
    }

    private function flatten(array \$choices): array
    {
        \$flattened = [];

        foreach (\$choices as \$label => \$choice) {
            // Flatten grouped choices
            if (\\is_array(\$choice)) {
                \$flattened = array_merge(\$flattened, \$choice);
            } else {
                \$flattened[\$label] = \$choice;
            }
        }

        return \$flattened;
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\ChoiceConfigurator.php");
    }
}
