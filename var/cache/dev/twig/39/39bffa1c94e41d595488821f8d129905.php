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

/* easycorp/easyadmin-bundle/src/Field/NumberField.php */
class __TwigTemplate_d321234136b5b3c9cf96c02993f4b68c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/NumberField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/NumberField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class NumberField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_NUM_DECIMALS = 'numDecimals';
    public const OPTION_ROUNDING_MODE = 'roundingMode';
    public const OPTION_STORED_AS_STRING = 'storedAsString';
    public const OPTION_NUMBER_FORMAT = 'numberFormat';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/number')
            ->setFormType(NumberType::class)
            ->addCssClass('field-number')
            ->setDefaultColumns('col-md-4 col-xxl-3')
            ->setCustomOption(self::OPTION_NUM_DECIMALS, null)
            ->setCustomOption(self::OPTION_ROUNDING_MODE, \\NumberFormatter::ROUND_HALFUP)
            ->setCustomOption(self::OPTION_STORED_AS_STRING, false)
            ->setCustomOption(self::OPTION_NUMBER_FORMAT, null);
    }

    public function setNumDecimals(int \$num): self
    {
        if (\$num < 0) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 0 or higher (%d given).', __METHOD__, \$num));
        }

        \$this->setCustomOption(self::OPTION_NUM_DECIMALS, \$num);

        return \$this;
    }

    public function setRoundingMode(int \$mode): self
    {
        \$validModes = [
            'ROUND_DOWN' => \\NumberFormatter::ROUND_DOWN,
            'ROUND_FLOOR' => \\NumberFormatter::ROUND_FLOOR,
            'ROUND_UP' => \\NumberFormatter::ROUND_UP,
            'ROUND_CEILING' => \\NumberFormatter::ROUND_CEILING,
            'ROUND_HALF_DOWN' => \\NumberFormatter::ROUND_HALFDOWN,
            'ROUND_HALF_EVEN' => \\NumberFormatter::ROUND_HALFEVEN,
            'ROUND_HALF_UP' => \\NumberFormatter::ROUND_HALFUP,
        ];

        if (!\\in_array(\$mode, \$validModes, true)) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be the value of any of the following constants from the %s class: %s.', __METHOD__, \\NumberFormatter::class, implode(', ', array_keys(\$validModes))));
        }

        \$this->setCustomOption(self::OPTION_ROUNDING_MODE, \$mode);

        return \$this;
    }

    public function setStoredAsString(bool \$asString = true): self
    {
        \$this->setCustomOption(self::OPTION_STORED_AS_STRING, \$asString);

        return \$this;
    }

    // If set, all the other formatting options are ignored. This format is passed
    // directly to the first argument of `sprintf()` to format the number before displaying it
    public function setNumberFormat(string \$sprintfFormat): self
    {
        \$this->setCustomOption(self::OPTION_NUMBER_FORMAT, \$sprintfFormat);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/NumberField.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class NumberField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_NUM_DECIMALS = 'numDecimals';
    public const OPTION_ROUNDING_MODE = 'roundingMode';
    public const OPTION_STORED_AS_STRING = 'storedAsString';
    public const OPTION_NUMBER_FORMAT = 'numberFormat';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/number')
            ->setFormType(NumberType::class)
            ->addCssClass('field-number')
            ->setDefaultColumns('col-md-4 col-xxl-3')
            ->setCustomOption(self::OPTION_NUM_DECIMALS, null)
            ->setCustomOption(self::OPTION_ROUNDING_MODE, \\NumberFormatter::ROUND_HALFUP)
            ->setCustomOption(self::OPTION_STORED_AS_STRING, false)
            ->setCustomOption(self::OPTION_NUMBER_FORMAT, null);
    }

    public function setNumDecimals(int \$num): self
    {
        if (\$num < 0) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 0 or higher (%d given).', __METHOD__, \$num));
        }

        \$this->setCustomOption(self::OPTION_NUM_DECIMALS, \$num);

        return \$this;
    }

    public function setRoundingMode(int \$mode): self
    {
        \$validModes = [
            'ROUND_DOWN' => \\NumberFormatter::ROUND_DOWN,
            'ROUND_FLOOR' => \\NumberFormatter::ROUND_FLOOR,
            'ROUND_UP' => \\NumberFormatter::ROUND_UP,
            'ROUND_CEILING' => \\NumberFormatter::ROUND_CEILING,
            'ROUND_HALF_DOWN' => \\NumberFormatter::ROUND_HALFDOWN,
            'ROUND_HALF_EVEN' => \\NumberFormatter::ROUND_HALFEVEN,
            'ROUND_HALF_UP' => \\NumberFormatter::ROUND_HALFUP,
        ];

        if (!\\in_array(\$mode, \$validModes, true)) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be the value of any of the following constants from the %s class: %s.', __METHOD__, \\NumberFormatter::class, implode(', ', array_keys(\$validModes))));
        }

        \$this->setCustomOption(self::OPTION_ROUNDING_MODE, \$mode);

        return \$this;
    }

    public function setStoredAsString(bool \$asString = true): self
    {
        \$this->setCustomOption(self::OPTION_STORED_AS_STRING, \$asString);

        return \$this;
    }

    // If set, all the other formatting options are ignored. This format is passed
    // directly to the first argument of `sprintf()` to format the number before displaying it
    public function setNumberFormat(string \$sprintfFormat): self
    {
        \$this->setCustomOption(self::OPTION_NUMBER_FORMAT, \$sprintfFormat);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/NumberField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\NumberField.php");
    }
}
