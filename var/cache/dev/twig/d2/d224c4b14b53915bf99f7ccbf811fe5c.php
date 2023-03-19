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

/* easycorp/easyadmin-bundle/src/Filter/NullFilter.php */
class __TwigTemplate_77b89a31dbbdaf7e8bc57aae96b07539 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/NullFilter.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/NullFilter.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDataDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type\\NullFilterType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class NullFilter implements FilterInterface
{
    use FilterTrait;

    private const CHOICE_VALUE_NULL = 'null';
    private const CHOICE_VALUE_NOT_NULL = 'not_null';

    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setFilterFqcn(__CLASS__)
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setFormType(NullFilterType::class);
    }

    public function setChoiceLabels(string \$nullChoiceLabel, string \$notNullChoiceLabel): self
    {
        \$this->dto->setFormTypeOption('choices', [
            \$nullChoiceLabel => self::CHOICE_VALUE_NULL,
            \$notNullChoiceLabel => self::CHOICE_VALUE_NOT_NULL,
        ]);

        return \$this;
    }

    public function apply(QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto): void
    {
        \$comparison = self::CHOICE_VALUE_NULL === \$filterDataDto->getValue() ? 'IS' : 'IS NOT';
        \$queryBuilder
            ->andWhere(sprintf('%s.%s %s NULL', \$filterDataDto->getEntityAlias(), \$filterDataDto->getProperty(), \$comparison));
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Filter/NullFilter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDataDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type\\NullFilterType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class NullFilter implements FilterInterface
{
    use FilterTrait;

    private const CHOICE_VALUE_NULL = 'null';
    private const CHOICE_VALUE_NOT_NULL = 'not_null';

    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setFilterFqcn(__CLASS__)
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setFormType(NullFilterType::class);
    }

    public function setChoiceLabels(string \$nullChoiceLabel, string \$notNullChoiceLabel): self
    {
        \$this->dto->setFormTypeOption('choices', [
            \$nullChoiceLabel => self::CHOICE_VALUE_NULL,
            \$notNullChoiceLabel => self::CHOICE_VALUE_NOT_NULL,
        ]);

        return \$this;
    }

    public function apply(QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto): void
    {
        \$comparison = self::CHOICE_VALUE_NULL === \$filterDataDto->getValue() ? 'IS' : 'IS NOT';
        \$queryBuilder
            ->andWhere(sprintf('%s.%s %s NULL', \$filterDataDto->getEntityAlias(), \$filterDataDto->getProperty(), \$comparison));
    }
}
", "easycorp/easyadmin-bundle/src/Filter/NullFilter.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\NullFilter.php");
    }
}
