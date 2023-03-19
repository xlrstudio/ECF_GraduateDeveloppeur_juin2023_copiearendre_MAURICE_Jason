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

/* easycorp/easyadmin-bundle/src/Field/LanguageField.php */
class __TwigTemplate_2bb38c618dbe2cca355016c02c6d7026 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/LanguageField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/LanguageField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class LanguageField implements FieldInterface
{
    use FieldTrait;

    public const FORMAT_ISO_639_ALPHA2 = 'iso639Alpha2';
    public const FORMAT_ISO_639_ALPHA3 = 'iso639Alpha3';

    public const OPTION_SHOW_CODE = 'showCode';
    public const OPTION_SHOW_NAME = 'showName';
    public const OPTION_LANGUAGE_CODE_FORMAT = 'languageCodeFormat';
    public const OPTION_LANGUAGE_CODES_TO_KEEP = 'languageCodesToKeep';
    public const OPTION_LANGUAGE_CODES_TO_REMOVE = 'languageCodesToRemove';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/language')
            ->setFormType(LanguageType::class)
            ->addCssClass('field-language')
            ->setDefaultColumns('col-md-4 col-xxl-3')
            ->setCustomOption(self::OPTION_SHOW_CODE, false)
            ->setCustomOption(self::OPTION_SHOW_NAME, true)
            ->setCustomOption(self::OPTION_LANGUAGE_CODE_FORMAT, self::FORMAT_ISO_639_ALPHA2)
            ->setCustomOption(self::OPTION_LANGUAGE_CODES_TO_KEEP, null)
            ->setCustomOption(self::OPTION_LANGUAGE_CODES_TO_REMOVE, null);
    }

    public function showCode(bool \$isShown = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_CODE, \$isShown);

        return \$this;
    }

    public function showName(bool \$isShown = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_NAME, \$isShown);

        return \$this;
    }

    public function useAlpha3Codes(bool \$useAlpha3 = true): self
    {
        \$this->setCustomOption(self::OPTION_LANGUAGE_CODE_FORMAT, \$useAlpha3 ? self::FORMAT_ISO_639_ALPHA3 : self::FORMAT_ISO_639_ALPHA2);

        return \$this;
    }

    /**
     * Restricts the list of languages shown by the field to the given list of languages codes.
     * e.g. ->includeOnly(['de', 'en', 'fr']).
     */
    public function includeOnly(array \$countryCodesToKeep): self
    {
        \$this->setCustomOption(self::OPTION_LANGUAGE_CODES_TO_KEEP, \$countryCodesToKeep);

        return \$this;
    }

    /**
     * Removes the given list of languages codes from the languages displayed by the field.
     * e.g. ->remove(['de', 'fr']).
     */
    public function remove(array \$countryCodesToRemove): self
    {
        \$this->setCustomOption(self::OPTION_LANGUAGE_CODES_TO_REMOVE, \$countryCodesToRemove);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/LanguageField.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class LanguageField implements FieldInterface
{
    use FieldTrait;

    public const FORMAT_ISO_639_ALPHA2 = 'iso639Alpha2';
    public const FORMAT_ISO_639_ALPHA3 = 'iso639Alpha3';

    public const OPTION_SHOW_CODE = 'showCode';
    public const OPTION_SHOW_NAME = 'showName';
    public const OPTION_LANGUAGE_CODE_FORMAT = 'languageCodeFormat';
    public const OPTION_LANGUAGE_CODES_TO_KEEP = 'languageCodesToKeep';
    public const OPTION_LANGUAGE_CODES_TO_REMOVE = 'languageCodesToRemove';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/language')
            ->setFormType(LanguageType::class)
            ->addCssClass('field-language')
            ->setDefaultColumns('col-md-4 col-xxl-3')
            ->setCustomOption(self::OPTION_SHOW_CODE, false)
            ->setCustomOption(self::OPTION_SHOW_NAME, true)
            ->setCustomOption(self::OPTION_LANGUAGE_CODE_FORMAT, self::FORMAT_ISO_639_ALPHA2)
            ->setCustomOption(self::OPTION_LANGUAGE_CODES_TO_KEEP, null)
            ->setCustomOption(self::OPTION_LANGUAGE_CODES_TO_REMOVE, null);
    }

    public function showCode(bool \$isShown = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_CODE, \$isShown);

        return \$this;
    }

    public function showName(bool \$isShown = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_NAME, \$isShown);

        return \$this;
    }

    public function useAlpha3Codes(bool \$useAlpha3 = true): self
    {
        \$this->setCustomOption(self::OPTION_LANGUAGE_CODE_FORMAT, \$useAlpha3 ? self::FORMAT_ISO_639_ALPHA3 : self::FORMAT_ISO_639_ALPHA2);

        return \$this;
    }

    /**
     * Restricts the list of languages shown by the field to the given list of languages codes.
     * e.g. ->includeOnly(['de', 'en', 'fr']).
     */
    public function includeOnly(array \$countryCodesToKeep): self
    {
        \$this->setCustomOption(self::OPTION_LANGUAGE_CODES_TO_KEEP, \$countryCodesToKeep);

        return \$this;
    }

    /**
     * Removes the given list of languages codes from the languages displayed by the field.
     * e.g. ->remove(['de', 'fr']).
     */
    public function remove(array \$countryCodesToRemove): self
    {
        \$this->setCustomOption(self::OPTION_LANGUAGE_CODES_TO_REMOVE, \$countryCodesToRemove);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/LanguageField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\LanguageField.php");
    }
}
