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

/* easycorp/easyadmin-bundle/src/Filter/Configurator/DateTimeConfigurator.php */
class __TwigTemplate_00c24a6f8ebec2929ed72c2f12b977d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/DateTimeConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/DateTimeConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\DateTimeFilter;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DateTimeConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return DateTimeFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$propertyType = \$entityDto->getPropertyMetadata(\$filterDto->getProperty())->get('type');

        if (Types::DATE_MUTABLE === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', DateType::class);
        }

        if (Types::DATE_IMMUTABLE === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', DateType::class);
            \$filterDto->setFormTypeOptionIfNotSet('value_type_options.input', 'datetime_immutable');
        }

        if (Types::TIME_MUTABLE === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', TimeType::class);
        }

        if (Types::TIME_IMMUTABLE === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', TimeType::class);
            \$filterDto->setFormTypeOptionIfNotSet('value_type_options.input', 'datetime_immutable');
        }

        if (\\in_array(\$propertyType, [Types::DATETIME_IMMUTABLE, Types::DATETIMETZ_IMMUTABLE], true)) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type_options.input', 'datetime_immutable');
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Filter/Configurator/DateTimeConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\DateTimeFilter;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DateTimeConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return DateTimeFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$propertyType = \$entityDto->getPropertyMetadata(\$filterDto->getProperty())->get('type');

        if (Types::DATE_MUTABLE === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', DateType::class);
        }

        if (Types::DATE_IMMUTABLE === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', DateType::class);
            \$filterDto->setFormTypeOptionIfNotSet('value_type_options.input', 'datetime_immutable');
        }

        if (Types::TIME_MUTABLE === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', TimeType::class);
        }

        if (Types::TIME_IMMUTABLE === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', TimeType::class);
            \$filterDto->setFormTypeOptionIfNotSet('value_type_options.input', 'datetime_immutable');
        }

        if (\\in_array(\$propertyType, [Types::DATETIME_IMMUTABLE, Types::DATETIMETZ_IMMUTABLE], true)) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type_options.input', 'datetime_immutable');
        }
    }
}
", "easycorp/easyadmin-bundle/src/Filter/Configurator/DateTimeConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\Configurator\\DateTimeConfigurator.php");
    }
}
