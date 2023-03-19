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

/* easycorp/easyadmin-bundle/src/Field/MoneyField.php */
class __TwigTemplate_e98d3fb9124ff0c2e261f336bc307dae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/MoneyField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/MoneyField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextAlign;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType;
use Symfony\\Component\\Intl\\Currencies;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MoneyField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_CURRENCY = 'currency';
    public const OPTION_CURRENCY_PROPERTY_PATH = 'currencyPropertyPath';
    public const OPTION_NUM_DECIMALS = 'numDecimals';
    public const OPTION_STORED_AS_CENTS = 'storedAsCents';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/money')
            ->setFormType(MoneyType::class)
            ->addCssClass('field-money')
            ->setTextAlign(TextAlign::RIGHT)
            ->setDefaultColumns('col-md-6 col-xxl-5')
            ->setCustomOption(self::OPTION_CURRENCY, null)
            ->setCustomOption(self::OPTION_CURRENCY_PROPERTY_PATH, null)
            ->setCustomOption(self::OPTION_NUM_DECIMALS, 2)
            ->setCustomOption(self::OPTION_STORED_AS_CENTS, true);
    }

    public function setCurrency(string \$currencyCode): self
    {
        if (!Currencies::exists(\$currencyCode)) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be a valid currency code according to ICU data (\"%s\" given).', __METHOD__, \$currencyCode));
        }

        \$this->setCustomOption(self::OPTION_CURRENCY, \$currencyCode);

        return \$this;
    }

    public function setCurrencyPropertyPath(string \$propertyPath): self
    {
        \$this->setCustomOption(self::OPTION_CURRENCY_PROPERTY_PATH, \$propertyPath);

        return \$this;
    }

    public function setNumDecimals(int \$num): self
    {
        if (\$num < 0) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 0 or higher (%d given).', __METHOD__, \$num));
        }

        \$this->setCustomOption(self::OPTION_NUM_DECIMALS, \$num);

        return \$this;
    }

    public function setStoredAsCents(bool \$asCents = true): self
    {
        \$this->setCustomOption(self::OPTION_STORED_AS_CENTS, \$asCents);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/MoneyField.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextAlign;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType;
use Symfony\\Component\\Intl\\Currencies;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MoneyField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_CURRENCY = 'currency';
    public const OPTION_CURRENCY_PROPERTY_PATH = 'currencyPropertyPath';
    public const OPTION_NUM_DECIMALS = 'numDecimals';
    public const OPTION_STORED_AS_CENTS = 'storedAsCents';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/money')
            ->setFormType(MoneyType::class)
            ->addCssClass('field-money')
            ->setTextAlign(TextAlign::RIGHT)
            ->setDefaultColumns('col-md-6 col-xxl-5')
            ->setCustomOption(self::OPTION_CURRENCY, null)
            ->setCustomOption(self::OPTION_CURRENCY_PROPERTY_PATH, null)
            ->setCustomOption(self::OPTION_NUM_DECIMALS, 2)
            ->setCustomOption(self::OPTION_STORED_AS_CENTS, true);
    }

    public function setCurrency(string \$currencyCode): self
    {
        if (!Currencies::exists(\$currencyCode)) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be a valid currency code according to ICU data (\"%s\" given).', __METHOD__, \$currencyCode));
        }

        \$this->setCustomOption(self::OPTION_CURRENCY, \$currencyCode);

        return \$this;
    }

    public function setCurrencyPropertyPath(string \$propertyPath): self
    {
        \$this->setCustomOption(self::OPTION_CURRENCY_PROPERTY_PATH, \$propertyPath);

        return \$this;
    }

    public function setNumDecimals(int \$num): self
    {
        if (\$num < 0) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 0 or higher (%d given).', __METHOD__, \$num));
        }

        \$this->setCustomOption(self::OPTION_NUM_DECIMALS, \$num);

        return \$this;
    }

    public function setStoredAsCents(bool \$asCents = true): self
    {
        \$this->setCustomOption(self::OPTION_STORED_AS_CENTS, \$asCents);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/MoneyField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\MoneyField.php");
    }
}
