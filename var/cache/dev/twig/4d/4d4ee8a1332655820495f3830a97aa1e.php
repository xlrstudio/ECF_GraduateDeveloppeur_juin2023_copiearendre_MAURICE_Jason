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

/* easycorp/easyadmin-bundle/src/Field/LocaleField.php */
class __TwigTemplate_330f448a25416a20f2a58b22a6be0152 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/LocaleField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/LocaleField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class LocaleField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_SHOW_CODE = 'showCode';
    public const OPTION_SHOW_NAME = 'showName';
    public const OPTION_LOCALE_CODES_TO_KEEP = 'localeCodesToKeep';
    public const OPTION_LOCALE_CODES_TO_REMOVE = 'localeCodesToRemove';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/locale')
            ->setFormType(LocaleType::class)
            ->addCssClass('field-locale')
            ->setDefaultColumns('col-md-5 col-xxl-4')
            ->setCustomOption(self::OPTION_SHOW_CODE, false)
            ->setCustomOption(self::OPTION_SHOW_NAME, true)
            ->setCustomOption(self::OPTION_LOCALE_CODES_TO_KEEP, null)
            ->setCustomOption(self::OPTION_LOCALE_CODES_TO_REMOVE, null);
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

    /**
     * Restricts the list of locales shown by the field to the given list of locale codes.
     * e.g. ->includeOnly(['de', 'en', 'fr']).
     */
    public function includeOnly(array \$countryCodesToKeep): self
    {
        \$this->setCustomOption(self::OPTION_LOCALE_CODES_TO_KEEP, \$countryCodesToKeep);

        return \$this;
    }

    /**
     * Removes the given list of locale codes from the locales displayed by the field.
     * e.g. ->remove(['de', 'fr']).
     */
    public function remove(array \$countryCodesToRemove): self
    {
        \$this->setCustomOption(self::OPTION_LOCALE_CODES_TO_REMOVE, \$countryCodesToRemove);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/LocaleField.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class LocaleField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_SHOW_CODE = 'showCode';
    public const OPTION_SHOW_NAME = 'showName';
    public const OPTION_LOCALE_CODES_TO_KEEP = 'localeCodesToKeep';
    public const OPTION_LOCALE_CODES_TO_REMOVE = 'localeCodesToRemove';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/locale')
            ->setFormType(LocaleType::class)
            ->addCssClass('field-locale')
            ->setDefaultColumns('col-md-5 col-xxl-4')
            ->setCustomOption(self::OPTION_SHOW_CODE, false)
            ->setCustomOption(self::OPTION_SHOW_NAME, true)
            ->setCustomOption(self::OPTION_LOCALE_CODES_TO_KEEP, null)
            ->setCustomOption(self::OPTION_LOCALE_CODES_TO_REMOVE, null);
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

    /**
     * Restricts the list of locales shown by the field to the given list of locale codes.
     * e.g. ->includeOnly(['de', 'en', 'fr']).
     */
    public function includeOnly(array \$countryCodesToKeep): self
    {
        \$this->setCustomOption(self::OPTION_LOCALE_CODES_TO_KEEP, \$countryCodesToKeep);

        return \$this;
    }

    /**
     * Removes the given list of locale codes from the locales displayed by the field.
     * e.g. ->remove(['de', 'fr']).
     */
    public function remove(array \$countryCodesToRemove): self
    {
        \$this->setCustomOption(self::OPTION_LOCALE_CODES_TO_REMOVE, \$countryCodesToRemove);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/LocaleField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\LocaleField.php");
    }
}
