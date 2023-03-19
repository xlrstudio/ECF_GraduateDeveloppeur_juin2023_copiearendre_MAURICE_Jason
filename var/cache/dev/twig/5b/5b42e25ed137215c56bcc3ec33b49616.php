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

/* easycorp/easyadmin-bundle/src/Filter/BooleanFilter.php */
class __TwigTemplate_faed5d1ce6dd2acb6e924736a7704f75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/BooleanFilter.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/BooleanFilter.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDataDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type\\BooleanFilterType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class BooleanFilter implements FilterInterface
{
    use FilterTrait;

    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setFilterFqcn(__CLASS__)
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setFormType(BooleanFilterType::class)
            ->setFormTypeOption('translation_domain', 'EasyAdminBundle');
    }

    public function apply(QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto): void
    {
        \$queryBuilder
            ->andWhere(sprintf('%s.%s %s :%s', \$filterDataDto->getEntityAlias(), \$filterDataDto->getProperty(), \$filterDataDto->getComparison(), \$filterDataDto->getParameterName()))
            ->setParameter(\$filterDataDto->getParameterName(), \$filterDataDto->getValue());
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Filter/BooleanFilter.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type\\BooleanFilterType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class BooleanFilter implements FilterInterface
{
    use FilterTrait;

    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setFilterFqcn(__CLASS__)
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setFormType(BooleanFilterType::class)
            ->setFormTypeOption('translation_domain', 'EasyAdminBundle');
    }

    public function apply(QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto): void
    {
        \$queryBuilder
            ->andWhere(sprintf('%s.%s %s :%s', \$filterDataDto->getEntityAlias(), \$filterDataDto->getProperty(), \$filterDataDto->getComparison(), \$filterDataDto->getParameterName()))
            ->setParameter(\$filterDataDto->getParameterName(), \$filterDataDto->getValue());
    }
}
", "easycorp/easyadmin-bundle/src/Filter/BooleanFilter.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\BooleanFilter.php");
    }
}
