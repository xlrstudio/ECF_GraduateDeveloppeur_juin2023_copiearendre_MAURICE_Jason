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

/* easycorp/easyadmin-bundle/src/Field/DateField.php */
class __TwigTemplate_334861c67e0c89d83bce47cdb92e3437 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/DateField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/DateField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DateField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_DATE_PATTERN = 'datePattern';
    public const OPTION_WIDGET = 'widget';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/date')
            ->setFormType(DateType::class)
            ->addCssClass('field-date')
            ->setDefaultColumns('col-md-6 col-xxl-5')
            // the proper default values of these options are set on the Crud class
            ->setCustomOption(self::OPTION_DATE_PATTERN, null)
            ->setCustomOption(DateTimeField::OPTION_TIMEZONE, null)
            ->setCustomOption(self::OPTION_WIDGET, DateTimeField::WIDGET_NATIVE);
    }

    /**
     * @param string \$timezoneId A valid PHP timezone ID
     */
    public function setTimezone(string \$timezoneId): self
    {
        if (!\\in_array(\$timezoneId, timezone_identifiers_list(), true)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" timezone is not a valid PHP timezone ID. Use any of the values listed at https://www.php.net/manual/en/timezones.php', \$timezoneId));
        }

        \$this->setCustomOption(DateTimeField::OPTION_TIMEZONE, \$timezoneId);

        return \$this;
    }

    /**
     * @param string \$dateFormatOrPattern A format name ('short', 'medium', 'long', 'full') or a valid ICU Datetime Pattern (see https://unicode-org.github.io/icu/userguide/format_parse/datetime/)
     */
    public function setFormat(string \$dateFormatOrPattern): self
    {
        if (DateTimeField::FORMAT_NONE === \$dateFormatOrPattern || '' === trim(\$dateFormatOrPattern)) {
            \$validDateFormatsWithoutNone = array_filter(
                DateTimeField::VALID_DATE_FORMATS,
                static fn (string \$format): bool => DateTimeField::FORMAT_NONE !== \$format
            );

            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method cannot be \"%s\" or an empty string. Use either the special date formats (%s) or a datetime Intl pattern.', __METHOD__, DateTimeField::FORMAT_NONE, implode(', ', \$validDateFormatsWithoutNone)));
        }

        \$this->setCustomOption(self::OPTION_DATE_PATTERN, \$dateFormatOrPattern);

        return \$this;
    }

    /**
     * Uses native HTML5 widgets when rendering this field in forms.
     */
    public function renderAsNativeWidget(bool \$asNative = true): self
    {
        if (false === \$asNative) {
            \$this->renderAsChoice();
        } else {
            \$this->setCustomOption(self::OPTION_WIDGET, DateTimeField::WIDGET_NATIVE);
        }

        return \$this;
    }

    /**
     * Uses <select> lists when rendering this field in forms.
     */
    public function renderAsChoice(bool \$asChoice = true): self
    {
        if (false === \$asChoice) {
            \$this->renderAsNativeWidget();
        } else {
            \$this->setCustomOption(self::OPTION_WIDGET, DateTimeField::WIDGET_CHOICE);
        }

        return \$this;
    }

    /**
     * Uses <input type=\"text\"> elements when rendering this field in forms.
     */
    public function renderAsText(bool \$asText = true): self
    {
        if (false === \$asText) {
            \$this->renderAsNativeWidget();
        } else {
            \$this->setCustomOption(self::OPTION_WIDGET, DateTimeField::WIDGET_TEXT);
        }

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/DateField.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DateField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_DATE_PATTERN = 'datePattern';
    public const OPTION_WIDGET = 'widget';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/date')
            ->setFormType(DateType::class)
            ->addCssClass('field-date')
            ->setDefaultColumns('col-md-6 col-xxl-5')
            // the proper default values of these options are set on the Crud class
            ->setCustomOption(self::OPTION_DATE_PATTERN, null)
            ->setCustomOption(DateTimeField::OPTION_TIMEZONE, null)
            ->setCustomOption(self::OPTION_WIDGET, DateTimeField::WIDGET_NATIVE);
    }

    /**
     * @param string \$timezoneId A valid PHP timezone ID
     */
    public function setTimezone(string \$timezoneId): self
    {
        if (!\\in_array(\$timezoneId, timezone_identifiers_list(), true)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" timezone is not a valid PHP timezone ID. Use any of the values listed at https://www.php.net/manual/en/timezones.php', \$timezoneId));
        }

        \$this->setCustomOption(DateTimeField::OPTION_TIMEZONE, \$timezoneId);

        return \$this;
    }

    /**
     * @param string \$dateFormatOrPattern A format name ('short', 'medium', 'long', 'full') or a valid ICU Datetime Pattern (see https://unicode-org.github.io/icu/userguide/format_parse/datetime/)
     */
    public function setFormat(string \$dateFormatOrPattern): self
    {
        if (DateTimeField::FORMAT_NONE === \$dateFormatOrPattern || '' === trim(\$dateFormatOrPattern)) {
            \$validDateFormatsWithoutNone = array_filter(
                DateTimeField::VALID_DATE_FORMATS,
                static fn (string \$format): bool => DateTimeField::FORMAT_NONE !== \$format
            );

            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method cannot be \"%s\" or an empty string. Use either the special date formats (%s) or a datetime Intl pattern.', __METHOD__, DateTimeField::FORMAT_NONE, implode(', ', \$validDateFormatsWithoutNone)));
        }

        \$this->setCustomOption(self::OPTION_DATE_PATTERN, \$dateFormatOrPattern);

        return \$this;
    }

    /**
     * Uses native HTML5 widgets when rendering this field in forms.
     */
    public function renderAsNativeWidget(bool \$asNative = true): self
    {
        if (false === \$asNative) {
            \$this->renderAsChoice();
        } else {
            \$this->setCustomOption(self::OPTION_WIDGET, DateTimeField::WIDGET_NATIVE);
        }

        return \$this;
    }

    /**
     * Uses <select> lists when rendering this field in forms.
     */
    public function renderAsChoice(bool \$asChoice = true): self
    {
        if (false === \$asChoice) {
            \$this->renderAsNativeWidget();
        } else {
            \$this->setCustomOption(self::OPTION_WIDGET, DateTimeField::WIDGET_CHOICE);
        }

        return \$this;
    }

    /**
     * Uses <input type=\"text\"> elements when rendering this field in forms.
     */
    public function renderAsText(bool \$asText = true): self
    {
        if (false === \$asText) {
            \$this->renderAsNativeWidget();
        } else {
            \$this->setCustomOption(self::OPTION_WIDGET, DateTimeField::WIDGET_TEXT);
        }

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/DateField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\DateField.php");
    }
}
