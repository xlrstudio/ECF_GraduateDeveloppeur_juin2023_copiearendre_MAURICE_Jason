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

/* easycorp/easyadmin-bundle/src/Field/Configurator/MoneyConfigurator.php */
class __TwigTemplate_789d0adc10c11ac6e6eef61d89f667a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/MoneyConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/MoneyConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\MoneyField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter;
use Symfony\\Component\\Intl\\Currencies;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MoneyConfigurator implements FieldConfiguratorInterface
{
    private IntlFormatter \$intlFormatter;
    private PropertyAccessorInterface \$propertyAccessor;

    public function __construct(IntlFormatter \$intlFormatter, PropertyAccessorInterface \$propertyAccessor)
    {
        \$this->intlFormatter = \$intlFormatter;
        \$this->propertyAccessor = \$propertyAccessor;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return MoneyField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$currencyCode = \$this->getCurrency(\$field, \$entityDto);
        if (null !== \$currencyCode && !Currencies::exists(\$currencyCode)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" value used as the currency of the \"%s\" money field is not a valid ICU currency code.', \$currencyCode, \$field->getProperty()));
        }
        \$field->setFormTypeOption('currency', \$currencyCode);

        \$numDecimals = \$field->getCustomOption(MoneyField::OPTION_NUM_DECIMALS);
        \$field->setFormTypeOption('scale', \$numDecimals);

        \$isStoredAsCents = true === \$field->getCustomOption(MoneyField::OPTION_STORED_AS_CENTS);
        \$field->setFormTypeOption('divisor', \$isStoredAsCents ? 100 : 1);

        if (null === \$field->getValue()) {
            return;
        }

        \$amount = \$isStoredAsCents ? \$field->getValue() / 100 : \$field->getValue();

        \$formattedValue = \$this->intlFormatter->formatCurrency(\$amount, \$currencyCode, ['fraction_digit' => \$numDecimals]);
        \$field->setFormattedValue(\$formattedValue);
    }

    private function getCurrency(FieldDto \$field, EntityDto \$entityDto): ?string
    {
        if (null !== \$currencyCode = \$field->getCustomOption(MoneyField::OPTION_CURRENCY)) {
            return \$currencyCode;
        }

        if (null === \$currencyPropertyPath = \$field->getCustomOption(MoneyField::OPTION_CURRENCY_PROPERTY_PATH)) {
            throw new \\InvalidArgumentException(sprintf('You must define the currency for the \"%s\" money field.', \$field->getProperty()));
        }

        if (null === \$field->getValue()) {
            return null;
        }

        \$entityInstance = \$entityDto->getInstance();
        \$isPropertyReadable = (null !== \$entityInstance) && \$this->propertyAccessor->isReadable(\$entityInstance, \$currencyPropertyPath);
        if (!\$isPropertyReadable) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" field path used by the \"%s\" field to get the currency value from the \"%s\" entity is not readable.', \$currencyPropertyPath, \$field->getProperty(), \$entityDto->getName()));
        }

        if (null === \$currencyCode = \$this->propertyAccessor->getValue(\$entityInstance, \$currencyPropertyPath)) {
            throw new \\InvalidArgumentException(sprintf('The currency value for the \"%s\" field cannot be null, but that\\'s the value returned by the \"%s\" field path applied on the \"%s\" entity.', \$field->getProperty(), \$currencyPropertyPath, \$entityDto->getName()));
        }

        return \$currencyCode;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/MoneyConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\MoneyField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter;
use Symfony\\Component\\Intl\\Currencies;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MoneyConfigurator implements FieldConfiguratorInterface
{
    private IntlFormatter \$intlFormatter;
    private PropertyAccessorInterface \$propertyAccessor;

    public function __construct(IntlFormatter \$intlFormatter, PropertyAccessorInterface \$propertyAccessor)
    {
        \$this->intlFormatter = \$intlFormatter;
        \$this->propertyAccessor = \$propertyAccessor;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return MoneyField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$currencyCode = \$this->getCurrency(\$field, \$entityDto);
        if (null !== \$currencyCode && !Currencies::exists(\$currencyCode)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" value used as the currency of the \"%s\" money field is not a valid ICU currency code.', \$currencyCode, \$field->getProperty()));
        }
        \$field->setFormTypeOption('currency', \$currencyCode);

        \$numDecimals = \$field->getCustomOption(MoneyField::OPTION_NUM_DECIMALS);
        \$field->setFormTypeOption('scale', \$numDecimals);

        \$isStoredAsCents = true === \$field->getCustomOption(MoneyField::OPTION_STORED_AS_CENTS);
        \$field->setFormTypeOption('divisor', \$isStoredAsCents ? 100 : 1);

        if (null === \$field->getValue()) {
            return;
        }

        \$amount = \$isStoredAsCents ? \$field->getValue() / 100 : \$field->getValue();

        \$formattedValue = \$this->intlFormatter->formatCurrency(\$amount, \$currencyCode, ['fraction_digit' => \$numDecimals]);
        \$field->setFormattedValue(\$formattedValue);
    }

    private function getCurrency(FieldDto \$field, EntityDto \$entityDto): ?string
    {
        if (null !== \$currencyCode = \$field->getCustomOption(MoneyField::OPTION_CURRENCY)) {
            return \$currencyCode;
        }

        if (null === \$currencyPropertyPath = \$field->getCustomOption(MoneyField::OPTION_CURRENCY_PROPERTY_PATH)) {
            throw new \\InvalidArgumentException(sprintf('You must define the currency for the \"%s\" money field.', \$field->getProperty()));
        }

        if (null === \$field->getValue()) {
            return null;
        }

        \$entityInstance = \$entityDto->getInstance();
        \$isPropertyReadable = (null !== \$entityInstance) && \$this->propertyAccessor->isReadable(\$entityInstance, \$currencyPropertyPath);
        if (!\$isPropertyReadable) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" field path used by the \"%s\" field to get the currency value from the \"%s\" entity is not readable.', \$currencyPropertyPath, \$field->getProperty(), \$entityDto->getName()));
        }

        if (null === \$currencyCode = \$this->propertyAccessor->getValue(\$entityInstance, \$currencyPropertyPath)) {
            throw new \\InvalidArgumentException(sprintf('The currency value for the \"%s\" field cannot be null, but that\\'s the value returned by the \"%s\" field path applied on the \"%s\" entity.', \$field->getProperty(), \$currencyPropertyPath, \$entityDto->getName()));
        }

        return \$currencyCode;
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/MoneyConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\MoneyConfigurator.php");
    }
}
