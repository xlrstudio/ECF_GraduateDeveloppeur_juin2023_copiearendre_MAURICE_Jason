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

/* easycorp/easyadmin-bundle/src/Filter/ChoiceFilter.php */
class __TwigTemplate_396deff60eb7c15fce5900710c390239 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/ChoiceFilter.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/ChoiceFilter.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter;

use Doctrine\\ORM\\Query\\Expr\\Orx;
use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDataDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type\\ChoiceFilterType;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ChoiceFilter implements FilterInterface
{
    use FilterTrait;

    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setFilterFqcn(__CLASS__)
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setFormType(ChoiceFilterType::class)
            ->setFormTypeOption('translation_domain', 'EasyAdminBundle');
    }

    public function setChoices(array \$choices): self
    {
        \$this->dto->setFormTypeOption('value_type_options.choices', \$choices);

        return \$this;
    }

    public function renderExpanded(bool \$isExpanded = true): self
    {
        \$this->dto->setFormTypeOption('value_type_options.expanded', \$isExpanded);

        return \$this;
    }

    public function canSelectMultiple(bool \$selectMultiple = true): self
    {
        \$this->dto->setFormTypeOption('value_type_options.multiple', \$selectMultiple);

        return \$this;
    }

    public function apply(QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto): void
    {
        \$alias = \$filterDataDto->getEntityAlias();
        \$property = \$filterDataDto->getProperty();
        \$comparison = \$filterDataDto->getComparison();
        \$parameterName = \$filterDataDto->getParameterName();
        \$value = \$filterDataDto->getValue();
        \$isMultiple = \$filterDataDto->getFormTypeOption('value_type_options.multiple');

        if (null === \$value || (\$isMultiple && 0 === \\count(\$value))) {
            \$queryBuilder->andWhere(sprintf('%s.%s %s', \$alias, \$property, \$comparison));
        } else {
            \$orX = new Orx();
            \$orX->add(sprintf('%s.%s %s (:%s)', \$alias, \$property, \$comparison, \$parameterName));
            if (ComparisonType::NEQ === \$comparison) {
                \$orX->add(sprintf('%s.%s IS NULL', \$alias, \$property));
            }
            \$queryBuilder->andWhere(\$orX)
                ->setParameter(\$parameterName, \$value);
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Filter/ChoiceFilter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter;

use Doctrine\\ORM\\Query\\Expr\\Orx;
use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDataDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type\\ChoiceFilterType;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ChoiceFilter implements FilterInterface
{
    use FilterTrait;

    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setFilterFqcn(__CLASS__)
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setFormType(ChoiceFilterType::class)
            ->setFormTypeOption('translation_domain', 'EasyAdminBundle');
    }

    public function setChoices(array \$choices): self
    {
        \$this->dto->setFormTypeOption('value_type_options.choices', \$choices);

        return \$this;
    }

    public function renderExpanded(bool \$isExpanded = true): self
    {
        \$this->dto->setFormTypeOption('value_type_options.expanded', \$isExpanded);

        return \$this;
    }

    public function canSelectMultiple(bool \$selectMultiple = true): self
    {
        \$this->dto->setFormTypeOption('value_type_options.multiple', \$selectMultiple);

        return \$this;
    }

    public function apply(QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto): void
    {
        \$alias = \$filterDataDto->getEntityAlias();
        \$property = \$filterDataDto->getProperty();
        \$comparison = \$filterDataDto->getComparison();
        \$parameterName = \$filterDataDto->getParameterName();
        \$value = \$filterDataDto->getValue();
        \$isMultiple = \$filterDataDto->getFormTypeOption('value_type_options.multiple');

        if (null === \$value || (\$isMultiple && 0 === \\count(\$value))) {
            \$queryBuilder->andWhere(sprintf('%s.%s %s', \$alias, \$property, \$comparison));
        } else {
            \$orX = new Orx();
            \$orX->add(sprintf('%s.%s %s (:%s)', \$alias, \$property, \$comparison, \$parameterName));
            if (ComparisonType::NEQ === \$comparison) {
                \$orX->add(sprintf('%s.%s IS NULL', \$alias, \$property));
            }
            \$queryBuilder->andWhere(\$orX)
                ->setParameter(\$parameterName, \$value);
        }
    }
}
", "easycorp/easyadmin-bundle/src/Filter/ChoiceFilter.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\ChoiceFilter.php");
    }
}
