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

/* easycorp/easyadmin-bundle/src/Field/Configurator/LocaleConfigurator.php */
class __TwigTemplate_00b5198704aa1f0f2df427e3b58cb219 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/LocaleConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/LocaleConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\LocaleField;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;
use Symfony\\Component\\Intl\\Locales;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class LocaleConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return LocaleField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$field->setFormTypeOptionIfNotSet('attr.data-ea-widget', 'ea-autocomplete');

        if (\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            \$field->setFormTypeOption('choices', \$this->generateFormTypeChoices(\$field->getCustomOption(LocaleField::OPTION_LOCALE_CODES_TO_KEEP), \$field->getCustomOption(LocaleField::OPTION_LOCALE_CODES_TO_REMOVE)));
            \$field->setFormTypeOption('choice_loader', null);
        }

        if (null === \$localeCode = \$field->getValue()) {
            return;
        }

        \$localeName = \$this->getLocaleName(\$localeCode);
        if (null === \$localeName) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" value used as the locale code of the \"%s\" field is not a valid ICU locale code.', \$localeCode, \$field->getProperty()));
        }

        \$field->setFormattedValue(\$localeName);
    }

    private function getLocaleName(string \$localeCode): ?string
    {
        try {
            return Locales::getName(\$localeCode);
        } catch (MissingResourceException) {
            return null;
        }
    }

    private function generateFormTypeChoices(?array \$localeCodesToKeep, ?array \$localeCodesToRemove): array
    {
        \$choices = [];

        \$locales = Locales::getNames();
        foreach (\$locales as \$localeCode => \$localeName) {
            if (null !== \$localeCodesToKeep && !\\in_array(\$localeCode, \$localeCodesToKeep, true)) {
                continue;
            }

            if (null !== \$localeCodesToRemove && \\in_array(\$localeCode, \$localeCodesToRemove, true)) {
                continue;
            }

            \$choices[\$localeName] = \$localeCode;
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
        return "easycorp/easyadmin-bundle/src/Field/Configurator/LocaleConfigurator.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\LocaleField;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;
use Symfony\\Component\\Intl\\Locales;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class LocaleConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return LocaleField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$field->setFormTypeOptionIfNotSet('attr.data-ea-widget', 'ea-autocomplete');

        if (\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            \$field->setFormTypeOption('choices', \$this->generateFormTypeChoices(\$field->getCustomOption(LocaleField::OPTION_LOCALE_CODES_TO_KEEP), \$field->getCustomOption(LocaleField::OPTION_LOCALE_CODES_TO_REMOVE)));
            \$field->setFormTypeOption('choice_loader', null);
        }

        if (null === \$localeCode = \$field->getValue()) {
            return;
        }

        \$localeName = \$this->getLocaleName(\$localeCode);
        if (null === \$localeName) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" value used as the locale code of the \"%s\" field is not a valid ICU locale code.', \$localeCode, \$field->getProperty()));
        }

        \$field->setFormattedValue(\$localeName);
    }

    private function getLocaleName(string \$localeCode): ?string
    {
        try {
            return Locales::getName(\$localeCode);
        } catch (MissingResourceException) {
            return null;
        }
    }

    private function generateFormTypeChoices(?array \$localeCodesToKeep, ?array \$localeCodesToRemove): array
    {
        \$choices = [];

        \$locales = Locales::getNames();
        foreach (\$locales as \$localeCode => \$localeName) {
            if (null !== \$localeCodesToKeep && !\\in_array(\$localeCode, \$localeCodesToKeep, true)) {
                continue;
            }

            if (null !== \$localeCodesToRemove && \\in_array(\$localeCode, \$localeCodesToRemove, true)) {
                continue;
            }

            \$choices[\$localeName] = \$localeCode;
        }

        return \$choices;
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/LocaleConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\LocaleConfigurator.php");
    }
}
