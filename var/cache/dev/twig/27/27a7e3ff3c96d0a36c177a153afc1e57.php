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

/* easycorp/easyadmin-bundle/src/Field/CountryField.php */
class __TwigTemplate_a4de109c1a7f175377a90b682fa31675 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/CountryField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/CountryField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CountryField implements FieldInterface
{
    use FieldTrait;

    public const FORMAT_ISO_3166_ALPHA2 = 'iso3166Alpha2';
    public const FORMAT_ISO_3166_ALPHA3 = 'iso3166Alpha3';

    public const OPTION_SHOW_FLAG = 'showFlag';
    public const OPTION_SHOW_NAME = 'showName';
    public const OPTION_COUNTRY_CODE_FORMAT = 'countryCodeFormat';
    public const OPTION_COUNTRY_CODES_TO_KEEP = 'countryCodesToKeep';
    public const OPTION_COUNTRY_CODES_TO_REMOVE = 'countryCodesToRemove';
    /** @internal used to store the code of the flag to use independently from the country code format used */
    public const OPTION_FLAG_CODE = 'flagCode';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/country')
            ->setFormType(ChoiceType::class)
            ->addCssClass('field-country')
            ->setDefaultColumns('col-md-4 col-xxl-3')
            ->setCustomOption(self::OPTION_SHOW_FLAG, true)
            ->setCustomOption(self::OPTION_SHOW_NAME, true)
            ->setCustomOption(self::OPTION_COUNTRY_CODE_FORMAT, self::FORMAT_ISO_3166_ALPHA2)
            ->setCustomOption(self::OPTION_COUNTRY_CODES_TO_KEEP, null)
            ->setCustomOption(self::OPTION_COUNTRY_CODES_TO_REMOVE, null);
    }

    public function showFlag(bool \$isShown = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_FLAG, \$isShown);

        return \$this;
    }

    public function showName(bool \$isShown = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_NAME, \$isShown);

        return \$this;
    }

    public function useAlpha3Codes(bool \$useAlpha3 = true): self
    {
        \$this->setCustomOption(self::OPTION_COUNTRY_CODE_FORMAT, \$useAlpha3 ? self::FORMAT_ISO_3166_ALPHA3 : self::FORMAT_ISO_3166_ALPHA2);

        return \$this;
    }

    /**
     * Restricts the list of countries shown by the field to the given list of country codes.
     * e.g. ->includeOnly(['AR', 'BR', 'ES', 'PT']).
     */
    public function includeOnly(array \$countryCodesToKeep): self
    {
        \$this->setCustomOption(self::OPTION_COUNTRY_CODES_TO_KEEP, \$countryCodesToKeep);

        return \$this;
    }

    /**
     * Removes the given list of country codes from the countries displayed by the field.
     * e.g. ->remove(['AF', 'KP']).
     */
    public function remove(array \$countryCodesToRemove): self
    {
        \$this->setCustomOption(self::OPTION_COUNTRY_CODES_TO_REMOVE, \$countryCodesToRemove);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/CountryField.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CountryField implements FieldInterface
{
    use FieldTrait;

    public const FORMAT_ISO_3166_ALPHA2 = 'iso3166Alpha2';
    public const FORMAT_ISO_3166_ALPHA3 = 'iso3166Alpha3';

    public const OPTION_SHOW_FLAG = 'showFlag';
    public const OPTION_SHOW_NAME = 'showName';
    public const OPTION_COUNTRY_CODE_FORMAT = 'countryCodeFormat';
    public const OPTION_COUNTRY_CODES_TO_KEEP = 'countryCodesToKeep';
    public const OPTION_COUNTRY_CODES_TO_REMOVE = 'countryCodesToRemove';
    /** @internal used to store the code of the flag to use independently from the country code format used */
    public const OPTION_FLAG_CODE = 'flagCode';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/country')
            ->setFormType(ChoiceType::class)
            ->addCssClass('field-country')
            ->setDefaultColumns('col-md-4 col-xxl-3')
            ->setCustomOption(self::OPTION_SHOW_FLAG, true)
            ->setCustomOption(self::OPTION_SHOW_NAME, true)
            ->setCustomOption(self::OPTION_COUNTRY_CODE_FORMAT, self::FORMAT_ISO_3166_ALPHA2)
            ->setCustomOption(self::OPTION_COUNTRY_CODES_TO_KEEP, null)
            ->setCustomOption(self::OPTION_COUNTRY_CODES_TO_REMOVE, null);
    }

    public function showFlag(bool \$isShown = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_FLAG, \$isShown);

        return \$this;
    }

    public function showName(bool \$isShown = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_NAME, \$isShown);

        return \$this;
    }

    public function useAlpha3Codes(bool \$useAlpha3 = true): self
    {
        \$this->setCustomOption(self::OPTION_COUNTRY_CODE_FORMAT, \$useAlpha3 ? self::FORMAT_ISO_3166_ALPHA3 : self::FORMAT_ISO_3166_ALPHA2);

        return \$this;
    }

    /**
     * Restricts the list of countries shown by the field to the given list of country codes.
     * e.g. ->includeOnly(['AR', 'BR', 'ES', 'PT']).
     */
    public function includeOnly(array \$countryCodesToKeep): self
    {
        \$this->setCustomOption(self::OPTION_COUNTRY_CODES_TO_KEEP, \$countryCodesToKeep);

        return \$this;
    }

    /**
     * Removes the given list of country codes from the countries displayed by the field.
     * e.g. ->remove(['AF', 'KP']).
     */
    public function remove(array \$countryCodesToRemove): self
    {
        \$this->setCustomOption(self::OPTION_COUNTRY_CODES_TO_REMOVE, \$countryCodesToRemove);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/CountryField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\CountryField.php");
    }
}
