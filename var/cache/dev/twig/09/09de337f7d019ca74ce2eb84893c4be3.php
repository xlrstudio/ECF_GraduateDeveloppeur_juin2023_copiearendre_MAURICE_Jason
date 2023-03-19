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

/* easycorp/easyadmin-bundle/src/Contracts/Orm/EntityPaginatorInterface.php */
class __TwigTemplate_20f4525bb134a55e655a3f3a458b58ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Contracts/Orm/EntityPaginatorInterface.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Contracts/Orm/EntityPaginatorInterface.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Orm;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\PaginatorDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface EntityPaginatorInterface
{
    public function paginate(PaginatorDto \$paginatorDto, QueryBuilder \$queryBuilder): self;

    public function generateUrlForPage(int \$page): string;

    public function getCurrentPage(): int;

    public function getLastPage(): int;

    public function getPageSize(): int;

    public function hasPreviousPage(): bool;

    public function getPreviousPage(): int;

    public function hasNextPage(): bool;

    public function getNextPage(): int;

    public function hasToPaginate(): bool;

    public function getNumResults(): int;

    public function getResults(): ?iterable;

    public function getResultsAsJson(): string;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Contracts/Orm/EntityPaginatorInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Orm;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\PaginatorDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface EntityPaginatorInterface
{
    public function paginate(PaginatorDto \$paginatorDto, QueryBuilder \$queryBuilder): self;

    public function generateUrlForPage(int \$page): string;

    public function getCurrentPage(): int;

    public function getLastPage(): int;

    public function getPageSize(): int;

    public function hasPreviousPage(): bool;

    public function getPreviousPage(): int;

    public function hasNextPage(): bool;

    public function getNextPage(): int;

    public function hasToPaginate(): bool;

    public function getNumResults(): int;

    public function getResults(): ?iterable;

    public function getResultsAsJson(): string;
}
", "easycorp/easyadmin-bundle/src/Contracts/Orm/EntityPaginatorInterface.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Contracts\\Orm\\EntityPaginatorInterface.php");
    }
}
