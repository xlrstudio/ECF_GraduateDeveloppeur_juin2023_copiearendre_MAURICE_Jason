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

/* easycorp/easyadmin-bundle/src/Filter/Configurator/EntityConfigurator.php */
class __TwigTemplate_560b29997cef31cb8a73a17ca96a42c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/EntityConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/EntityConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\EntityFilter;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EntityConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return EntityFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$propertyName = \$filterDto->getProperty();
        if (!\$entityDto->isAssociation(\$propertyName)) {
            return;
        }

        \$doctrineMetadata = \$entityDto->getPropertyMetadata(\$propertyName);
        // TODO: add the 'em' form type option too?
        \$filterDto->setFormTypeOptionIfNotSet('value_type_options.class', \$doctrineMetadata->get('targetEntity'));
        \$filterDto->setFormTypeOptionIfNotSet('value_type_options.multiple', \$entityDto->isToManyAssociation(\$propertyName));
        \$filterDto->setFormTypeOptionIfNotSet('value_type_options.attr.data-ea-widget', 'ea-autocomplete');

        if (\$entityDto->isToOneAssociation(\$propertyName)) {
            // don't show the 'empty value' placeholder when all join columns are required,
            // because an empty filter value would always return no result
            \$numberOfRequiredJoinColumns = \\count(array_filter(
                \$doctrineMetadata->get('joinColumns'),
                static fn (array \$joinColumn): bool => false === (\$joinColumn['nullable'] ?? false))
            );

            \$someJoinColumnsAreNullable = \\count(\$doctrineMetadata->get('joinColumns')) !== \$numberOfRequiredJoinColumns;

            if (\$someJoinColumnsAreNullable) {
                \$filterDto->setFormTypeOptionIfNotSet('value_type_options.placeholder', 'label.form.empty_value');
            }
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Filter/Configurator/EntityConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\EntityFilter;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EntityConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return EntityFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$propertyName = \$filterDto->getProperty();
        if (!\$entityDto->isAssociation(\$propertyName)) {
            return;
        }

        \$doctrineMetadata = \$entityDto->getPropertyMetadata(\$propertyName);
        // TODO: add the 'em' form type option too?
        \$filterDto->setFormTypeOptionIfNotSet('value_type_options.class', \$doctrineMetadata->get('targetEntity'));
        \$filterDto->setFormTypeOptionIfNotSet('value_type_options.multiple', \$entityDto->isToManyAssociation(\$propertyName));
        \$filterDto->setFormTypeOptionIfNotSet('value_type_options.attr.data-ea-widget', 'ea-autocomplete');

        if (\$entityDto->isToOneAssociation(\$propertyName)) {
            // don't show the 'empty value' placeholder when all join columns are required,
            // because an empty filter value would always return no result
            \$numberOfRequiredJoinColumns = \\count(array_filter(
                \$doctrineMetadata->get('joinColumns'),
                static fn (array \$joinColumn): bool => false === (\$joinColumn['nullable'] ?? false))
            );

            \$someJoinColumnsAreNullable = \\count(\$doctrineMetadata->get('joinColumns')) !== \$numberOfRequiredJoinColumns;

            if (\$someJoinColumnsAreNullable) {
                \$filterDto->setFormTypeOptionIfNotSet('value_type_options.placeholder', 'label.form.empty_value');
            }
        }
    }
}
", "easycorp/easyadmin-bundle/src/Filter/Configurator/EntityConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\Configurator\\EntityConfigurator.php");
    }
}
