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

/* easycorp/easyadmin-bundle/src/Field/Configurator/CountryConfigurator.php */
class __TwigTemplate_b1d429223a96029cf3d79276bd1ffeac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/CountryConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/CountryConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextAlign;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\CountryField;
use Symfony\\Component\\Asset\\PackageInterface;
use Symfony\\Component\\Intl\\Countries;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CountryConfigurator implements FieldConfiguratorInterface
{
    private PackageInterface \$assetPackage;

    public function __construct(PackageInterface \$assetPackage)
    {
        \$this->assetPackage = \$assetPackage;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return CountryField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$field->setFormTypeOption('attr.data-ea-widget', 'ea-autocomplete');
        \$countryCodeFormat = \$field->getCustomOption(CountryField::OPTION_COUNTRY_CODE_FORMAT);

        \$field->setCustomOption(CountryField::OPTION_FLAG_CODE, \$this->getFlagCode(\$field->getValue(), \$countryCodeFormat));
        \$field->setFormattedValue(\$this->getCountryName(\$field->getValue(), \$countryCodeFormat));

        if (null === \$field->getTextAlign() && false === \$field->getCustomOption(CountryField::OPTION_SHOW_NAME)) {
            \$field->setTextAlign(TextAlign::CENTER);
        }

        if (\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            \$field->setFormTypeOption('choices', \$this->generateFormTypeChoices(\$countryCodeFormat, \$field->getCustomOption(CountryField::OPTION_COUNTRY_CODES_TO_KEEP), \$field->getCustomOption(CountryField::OPTION_COUNTRY_CODES_TO_REMOVE)));

            // the value of this form option must be a string to properly propagate it as an HTML attribute value
            \$field->setFormTypeOption('attr.data-ea-autocomplete-render-items-as-html', 'true');
        }
    }

    private function getCountryName(?string \$countryCode, string \$countryCodeFormat): ?string
    {
        if (null === \$countryCode) {
            return null;
        }

        try {
            if (CountryField::FORMAT_ISO_3166_ALPHA3 === \$countryCodeFormat) {
                return Countries::getAlpha3Name(\$countryCode);
            }

            return Countries::getName(\$countryCode);
        } catch (MissingResourceException) {
            return null;
        }
    }

    private function getFlagCode(?string \$countryCode, string \$countryCodeFormat): ?string
    {
        if (null === \$countryCode) {
            return null;
        }

        try {
            \$flagCode = \$countryCode;

            if (CountryField::FORMAT_ISO_3166_ALPHA3 === \$countryCodeFormat) {
                \$flagCode = Countries::getAlpha2Code(\$flagCode);
            }

            return '' === \$flagCode ? 'UNKNOWN' : \$flagCode;
        } catch (MissingResourceException) {
            return null;
        }
    }

    private function generateFormTypeChoices(string \$countryCodeFormat, ?array \$countryCodesToKeep, ?array \$countryCodesToRemove): array
    {
        \$usesAlpha3Codes = CountryField::FORMAT_ISO_3166_ALPHA3 === \$countryCodeFormat;
        \$choices = [];

        \$countries = \$usesAlpha3Codes ? Countries::getAlpha3Names() : Countries::getNames();
        foreach (\$countries as \$countryCode => \$countryName) {
            if (null !== \$countryCodesToKeep && !\\in_array(\$countryCode, \$countryCodesToKeep, true)) {
                continue;
            }

            if (null !== \$countryCodesToRemove && \\in_array(\$countryCode, \$countryCodesToRemove, true)) {
                continue;
            }

            \$countryCodeAlpha2 = \$usesAlpha3Codes ? Countries::getAlpha2Code(\$countryCode) : \$countryCode;
            \$flagImagePath = \$this->assetPackage->getUrl(sprintf('images/flags/%s.svg', \$countryCodeAlpha2));
            \$choiceKey = sprintf('<img src=\"%s\" class=\"country-flag\" loading=\"lazy\" alt=\"%s\"> %s', \$flagImagePath, \$countryName, \$countryName);

            \$choices[\$choiceKey] = \$countryCode;
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
        return "easycorp/easyadmin-bundle/src/Field/Configurator/CountryConfigurator.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextAlign;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\CountryField;
use Symfony\\Component\\Asset\\PackageInterface;
use Symfony\\Component\\Intl\\Countries;
use Symfony\\Component\\Intl\\Exception\\MissingResourceException;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CountryConfigurator implements FieldConfiguratorInterface
{
    private PackageInterface \$assetPackage;

    public function __construct(PackageInterface \$assetPackage)
    {
        \$this->assetPackage = \$assetPackage;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return CountryField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$field->setFormTypeOption('attr.data-ea-widget', 'ea-autocomplete');
        \$countryCodeFormat = \$field->getCustomOption(CountryField::OPTION_COUNTRY_CODE_FORMAT);

        \$field->setCustomOption(CountryField::OPTION_FLAG_CODE, \$this->getFlagCode(\$field->getValue(), \$countryCodeFormat));
        \$field->setFormattedValue(\$this->getCountryName(\$field->getValue(), \$countryCodeFormat));

        if (null === \$field->getTextAlign() && false === \$field->getCustomOption(CountryField::OPTION_SHOW_NAME)) {
            \$field->setTextAlign(TextAlign::CENTER);
        }

        if (\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            \$field->setFormTypeOption('choices', \$this->generateFormTypeChoices(\$countryCodeFormat, \$field->getCustomOption(CountryField::OPTION_COUNTRY_CODES_TO_KEEP), \$field->getCustomOption(CountryField::OPTION_COUNTRY_CODES_TO_REMOVE)));

            // the value of this form option must be a string to properly propagate it as an HTML attribute value
            \$field->setFormTypeOption('attr.data-ea-autocomplete-render-items-as-html', 'true');
        }
    }

    private function getCountryName(?string \$countryCode, string \$countryCodeFormat): ?string
    {
        if (null === \$countryCode) {
            return null;
        }

        try {
            if (CountryField::FORMAT_ISO_3166_ALPHA3 === \$countryCodeFormat) {
                return Countries::getAlpha3Name(\$countryCode);
            }

            return Countries::getName(\$countryCode);
        } catch (MissingResourceException) {
            return null;
        }
    }

    private function getFlagCode(?string \$countryCode, string \$countryCodeFormat): ?string
    {
        if (null === \$countryCode) {
            return null;
        }

        try {
            \$flagCode = \$countryCode;

            if (CountryField::FORMAT_ISO_3166_ALPHA3 === \$countryCodeFormat) {
                \$flagCode = Countries::getAlpha2Code(\$flagCode);
            }

            return '' === \$flagCode ? 'UNKNOWN' : \$flagCode;
        } catch (MissingResourceException) {
            return null;
        }
    }

    private function generateFormTypeChoices(string \$countryCodeFormat, ?array \$countryCodesToKeep, ?array \$countryCodesToRemove): array
    {
        \$usesAlpha3Codes = CountryField::FORMAT_ISO_3166_ALPHA3 === \$countryCodeFormat;
        \$choices = [];

        \$countries = \$usesAlpha3Codes ? Countries::getAlpha3Names() : Countries::getNames();
        foreach (\$countries as \$countryCode => \$countryName) {
            if (null !== \$countryCodesToKeep && !\\in_array(\$countryCode, \$countryCodesToKeep, true)) {
                continue;
            }

            if (null !== \$countryCodesToRemove && \\in_array(\$countryCode, \$countryCodesToRemove, true)) {
                continue;
            }

            \$countryCodeAlpha2 = \$usesAlpha3Codes ? Countries::getAlpha2Code(\$countryCode) : \$countryCode;
            \$flagImagePath = \$this->assetPackage->getUrl(sprintf('images/flags/%s.svg', \$countryCodeAlpha2));
            \$choiceKey = sprintf('<img src=\"%s\" class=\"country-flag\" loading=\"lazy\" alt=\"%s\"> %s', \$flagImagePath, \$countryName, \$countryName);

            \$choices[\$choiceKey] = \$countryCode;
        }

        return \$choices;
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/CountryConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\CountryConfigurator.php");
    }
}
