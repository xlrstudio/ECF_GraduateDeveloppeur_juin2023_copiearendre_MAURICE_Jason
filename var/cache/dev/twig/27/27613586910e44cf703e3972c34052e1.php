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

/* easycorp/easyadmin-bundle/src/Factory/FilterFactory.php */
class __TwigTemplate_5a3f6c3fa1e0ab1d06b0fe5d2bcb0f62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/FilterFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/FilterFactory.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\ArrayFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\BooleanFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\ComparisonFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\DateTimeFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\EntityFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\NumericFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\TextFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterFactory
{
    private AdminContextProvider \$adminContextProvider;
    private iterable \$filterConfigurators;
    private static array \$doctrineTypeToFilterClass = [
        'json_array' => ArrayFilter::class,
        Types::SIMPLE_ARRAY => ArrayFilter::class,
        Types::ARRAY => ArrayFilter::class,
        Types::JSON => TextFilter::class,
        Types::BOOLEAN => BooleanFilter::class,
        Types::DATE_MUTABLE => DateTimeFilter::class,
        Types::DATE_IMMUTABLE => DateTimeFilter::class,
        Types::TIME_MUTABLE => DateTimeFilter::class,
        Types::TIME_IMMUTABLE => DateTimeFilter::class,
        Types::DATETIME_MUTABLE => DateTimeFilter::class,
        Types::DATETIMETZ_MUTABLE => DateTimeFilter::class,
        Types::DATETIME_IMMUTABLE => DateTimeFilter::class,
        Types::DATETIMETZ_IMMUTABLE => DateTimeFilter::class,
        Types::DATEINTERVAL => ComparisonFilter::class,
        Types::DECIMAL => NumericFilter::class,
        Types::FLOAT => NumericFilter::class,
        Types::BIGINT => NumericFilter::class,
        Types::INTEGER => NumericFilter::class,
        Types::SMALLINT => NumericFilter::class,
        Types::GUID => TextFilter::class,
        Types::STRING => TextFilter::class,
        Types::BLOB => TextFilter::class,
        Types::OBJECT => TextFilter::class,
        Types::TEXT => TextFilter::class,
    ];

    public function __construct(AdminContextProvider \$adminContextProvider, iterable \$filterConfigurators)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->filterConfigurators = \$filterConfigurators;
    }

    public function create(FilterConfigDto \$filterConfig, FieldCollection \$fields, EntityDto \$entityDto): FilterCollection
    {
        \$builtFilters = [];
        /** @var FilterInterface|string \$filter */
        foreach (\$filterConfig->all() as \$property => \$filter) {
            if (\\is_string(\$filter)) {
                \$guessedFilterClass = \$this->guessFilterClass(\$entityDto, \$property);
                /** @var FilterInterface \$filter */
                \$filter = \$guessedFilterClass::new(\$property);
            }

            \$filterDto = \$filter->getAsDto();

            \$context = \$this->adminContextProvider->getContext();
            foreach (\$this->filterConfigurators as \$configurator) {
                if (!\$configurator->supports(\$filterDto, \$fields->getByProperty(\$property), \$entityDto, \$context)) {
                    continue;
                }

                \$configurator->configure(\$filterDto, \$fields->getByProperty(\$property), \$entityDto, \$context);
            }

            \$builtFilters[\$property] = \$filterDto;
        }

        return FilterCollection::new(\$builtFilters);
    }

    private function guessFilterClass(EntityDto \$entityDto, string \$propertyName): string
    {
        if (\$entityDto->isAssociation(\$propertyName)) {
            return EntityFilter::class;
        }

        \$metadata = \$entityDto->getPropertyMetadata(\$propertyName);

        if (\$metadata->isEmpty()) {
            return TextFilter::class;
        }

        return self::\$doctrineTypeToFilterClass[\$metadata->get('type')] ?? TextFilter::class;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Factory/FilterFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\ArrayFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\BooleanFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\ComparisonFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\DateTimeFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\EntityFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\NumericFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\TextFilter;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterFactory
{
    private AdminContextProvider \$adminContextProvider;
    private iterable \$filterConfigurators;
    private static array \$doctrineTypeToFilterClass = [
        'json_array' => ArrayFilter::class,
        Types::SIMPLE_ARRAY => ArrayFilter::class,
        Types::ARRAY => ArrayFilter::class,
        Types::JSON => TextFilter::class,
        Types::BOOLEAN => BooleanFilter::class,
        Types::DATE_MUTABLE => DateTimeFilter::class,
        Types::DATE_IMMUTABLE => DateTimeFilter::class,
        Types::TIME_MUTABLE => DateTimeFilter::class,
        Types::TIME_IMMUTABLE => DateTimeFilter::class,
        Types::DATETIME_MUTABLE => DateTimeFilter::class,
        Types::DATETIMETZ_MUTABLE => DateTimeFilter::class,
        Types::DATETIME_IMMUTABLE => DateTimeFilter::class,
        Types::DATETIMETZ_IMMUTABLE => DateTimeFilter::class,
        Types::DATEINTERVAL => ComparisonFilter::class,
        Types::DECIMAL => NumericFilter::class,
        Types::FLOAT => NumericFilter::class,
        Types::BIGINT => NumericFilter::class,
        Types::INTEGER => NumericFilter::class,
        Types::SMALLINT => NumericFilter::class,
        Types::GUID => TextFilter::class,
        Types::STRING => TextFilter::class,
        Types::BLOB => TextFilter::class,
        Types::OBJECT => TextFilter::class,
        Types::TEXT => TextFilter::class,
    ];

    public function __construct(AdminContextProvider \$adminContextProvider, iterable \$filterConfigurators)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->filterConfigurators = \$filterConfigurators;
    }

    public function create(FilterConfigDto \$filterConfig, FieldCollection \$fields, EntityDto \$entityDto): FilterCollection
    {
        \$builtFilters = [];
        /** @var FilterInterface|string \$filter */
        foreach (\$filterConfig->all() as \$property => \$filter) {
            if (\\is_string(\$filter)) {
                \$guessedFilterClass = \$this->guessFilterClass(\$entityDto, \$property);
                /** @var FilterInterface \$filter */
                \$filter = \$guessedFilterClass::new(\$property);
            }

            \$filterDto = \$filter->getAsDto();

            \$context = \$this->adminContextProvider->getContext();
            foreach (\$this->filterConfigurators as \$configurator) {
                if (!\$configurator->supports(\$filterDto, \$fields->getByProperty(\$property), \$entityDto, \$context)) {
                    continue;
                }

                \$configurator->configure(\$filterDto, \$fields->getByProperty(\$property), \$entityDto, \$context);
            }

            \$builtFilters[\$property] = \$filterDto;
        }

        return FilterCollection::new(\$builtFilters);
    }

    private function guessFilterClass(EntityDto \$entityDto, string \$propertyName): string
    {
        if (\$entityDto->isAssociation(\$propertyName)) {
            return EntityFilter::class;
        }

        \$metadata = \$entityDto->getPropertyMetadata(\$propertyName);

        if (\$metadata->isEmpty()) {
            return TextFilter::class;
        }

        return self::\$doctrineTypeToFilterClass[\$metadata->get('type')] ?? TextFilter::class;
    }
}
", "easycorp/easyadmin-bundle/src/Factory/FilterFactory.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Factory\\FilterFactory.php");
    }
}
