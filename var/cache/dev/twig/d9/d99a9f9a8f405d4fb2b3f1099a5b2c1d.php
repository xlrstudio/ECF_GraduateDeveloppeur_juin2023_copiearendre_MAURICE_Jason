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

/* easycorp/easyadmin-bundle/src/Field/Configurator/LanguageConfigurator.php */
class __TwigTemplate_3f02ab684c268dd8893421d0320347d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/LanguageConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/LanguageConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\LanguageField;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;
use Symfony\\Component\\Intl\\Languages;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class LanguageConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return LanguageField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$field->setFormTypeOptionIfNotSet('attr.data-ea-widget', 'ea-autocomplete');

        \$languageCodeFormat = \$field->getCustomOption(LanguageField::OPTION_LANGUAGE_CODE_FORMAT);
        \$usesAlpha3Codes = LanguageField::FORMAT_ISO_639_ALPHA3 === \$languageCodeFormat;

        if (\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            \$field->setFormTypeOption('choices', \$this->generateFormTypeChoices(
                \$usesAlpha3Codes,
                \$field->getCustomOption(LanguageField::OPTION_LANGUAGE_CODES_TO_KEEP),
                \$field->getCustomOption(LanguageField::OPTION_LANGUAGE_CODES_TO_REMOVE))
            );
            \$field->setFormTypeOption('choice_loader', null);
        }

        if (null === \$languageCode = \$field->getValue()) {
            return;
        }

        \$languageName = \$this->getLanguageName(\$languageCode, \$usesAlpha3Codes);
        if (null === \$languageName) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" value used as the language code of the \"%s\" field is not a valid ICU language code.', \$languageCode, \$field->getProperty()));
        }

        \$field->setFormattedValue(\$languageName);
    }

    private function getLanguageName(string \$languageCode, bool \$usesAlpha3Codes): ?string
    {
        try {
            return \$usesAlpha3Codes ? Languages::getAlpha3Name(\$languageCode) : Languages::getName(\$languageCode);
        } catch (MissingResourceException) {
            return null;
        }
    }

    private function generateFormTypeChoices(bool \$usesAlpha3Codes, ?array \$languageCodesToKeep, ?array \$languageCodesToRemove): array
    {
        \$choices = [];

        \$languages = \$usesAlpha3Codes ? Languages::getAlpha3Names() : Languages::getNames();
        foreach (\$languages as \$languageCode => \$languageName) {
            if (null !== \$languageCodesToKeep && !\\in_array(\$languageCode, \$languageCodesToKeep, true)) {
                continue;
            }

            if (null !== \$languageCodesToRemove && \\in_array(\$languageCode, \$languageCodesToRemove, true)) {
                continue;
            }

            \$choices[\$languageName] = \$languageCode;
        }

        return \$choices;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/LanguageConfigurator.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\LanguageField;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;
use Symfony\\Component\\Intl\\Languages;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class LanguageConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return LanguageField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$field->setFormTypeOptionIfNotSet('attr.data-ea-widget', 'ea-autocomplete');

        \$languageCodeFormat = \$field->getCustomOption(LanguageField::OPTION_LANGUAGE_CODE_FORMAT);
        \$usesAlpha3Codes = LanguageField::FORMAT_ISO_639_ALPHA3 === \$languageCodeFormat;

        if (\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            \$field->setFormTypeOption('choices', \$this->generateFormTypeChoices(
                \$usesAlpha3Codes,
                \$field->getCustomOption(LanguageField::OPTION_LANGUAGE_CODES_TO_KEEP),
                \$field->getCustomOption(LanguageField::OPTION_LANGUAGE_CODES_TO_REMOVE))
            );
            \$field->setFormTypeOption('choice_loader', null);
        }

        if (null === \$languageCode = \$field->getValue()) {
            return;
        }

        \$languageName = \$this->getLanguageName(\$languageCode, \$usesAlpha3Codes);
        if (null === \$languageName) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" value used as the language code of the \"%s\" field is not a valid ICU language code.', \$languageCode, \$field->getProperty()));
        }

        \$field->setFormattedValue(\$languageName);
    }

    private function getLanguageName(string \$languageCode, bool \$usesAlpha3Codes): ?string
    {
        try {
            return \$usesAlpha3Codes ? Languages::getAlpha3Name(\$languageCode) : Languages::getName(\$languageCode);
        } catch (MissingResourceException) {
            return null;
        }
    }

    private function generateFormTypeChoices(bool \$usesAlpha3Codes, ?array \$languageCodesToKeep, ?array \$languageCodesToRemove): array
    {
        \$choices = [];

        \$languages = \$usesAlpha3Codes ? Languages::getAlpha3Names() : Languages::getNames();
        foreach (\$languages as \$languageCode => \$languageName) {
            if (null !== \$languageCodesToKeep && !\\in_array(\$languageCode, \$languageCodesToKeep, true)) {
                continue;
            }

            if (null !== \$languageCodesToRemove && \\in_array(\$languageCode, \$languageCodesToRemove, true)) {
                continue;
            }

            \$choices[\$languageName] = \$languageCode;
        }

        return \$choices;
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/LanguageConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\LanguageConfigurator.php");
    }
}
