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

/* easycorp/easyadmin-bundle/src/Dto/SearchDto.php */
class __TwigTemplate_9c1cc56f216dffdc286556e0a1705480 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/SearchDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/SearchDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class SearchDto
{
    private Request \$request;
    private array \$defaultSort;
    private array \$customSort;
    /** @internal */
    private ?array \$mergedSort = null;
    private string \$query;
    /** @var string[]|null */
    private ?array \$searchableProperties;
    /** @var string[]|null */
    private ?array \$appliedFilters;

    public function __construct(Request \$request, ?array \$searchableProperties, ?string \$query, array \$defaultSort, array \$customSort, ?array \$appliedFilters)
    {
        \$this->request = \$request;
        \$this->searchableProperties = \$searchableProperties;
        \$this->query = trim((string) \$query);
        \$this->defaultSort = \$defaultSort;
        \$this->customSort = \$customSort;
        \$this->appliedFilters = \$appliedFilters;
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getSort(): array
    {
        if (null !== \$this->mergedSort) {
            return \$this->mergedSort;
        }

        // we can't use an array_merge() call because \$customSort has more priority
        // than \$defaultSort, so the default sort must only be applied if there's
        // not already a custom sort config for the same field
        \$mergedSort = \$this->customSort;
        foreach (\$this->defaultSort as \$fieldName => \$order) {
            if (!\\array_key_exists(\$fieldName, \$mergedSort)) {
                \$mergedSort[\$fieldName] = \$order;
            }
        }

        return \$this->mergedSort = \$mergedSort;
    }

    public function isSortingField(string \$fieldProperty): bool
    {
        \$firstSortField = \\count(\$this->getSort()) > 0 ? array_keys(\$this->getSort())[0] : null;
        if (null === \$firstSortField) {
            return false;
        }

        // TODO: check for association properties when they support search (e.g. 'user.name')
        return \$fieldProperty === \$firstSortField;
    }

    public function getSortDirection(string \$fieldProperty): string
    {
        return \\array_key_exists(\$fieldProperty, \$this->getSort()) ? \$this->getSort()[\$fieldProperty] : 'DESC';
    }

    public function getQuery(): string
    {
        return \$this->query;
    }

    /**
     * @return string[]|null
     */
    public function getSearchableProperties(): ?array
    {
        return \$this->searchableProperties;
    }

    public function getAppliedFilters(): ?array
    {
        return \$this->appliedFilters;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/SearchDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class SearchDto
{
    private Request \$request;
    private array \$defaultSort;
    private array \$customSort;
    /** @internal */
    private ?array \$mergedSort = null;
    private string \$query;
    /** @var string[]|null */
    private ?array \$searchableProperties;
    /** @var string[]|null */
    private ?array \$appliedFilters;

    public function __construct(Request \$request, ?array \$searchableProperties, ?string \$query, array \$defaultSort, array \$customSort, ?array \$appliedFilters)
    {
        \$this->request = \$request;
        \$this->searchableProperties = \$searchableProperties;
        \$this->query = trim((string) \$query);
        \$this->defaultSort = \$defaultSort;
        \$this->customSort = \$customSort;
        \$this->appliedFilters = \$appliedFilters;
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getSort(): array
    {
        if (null !== \$this->mergedSort) {
            return \$this->mergedSort;
        }

        // we can't use an array_merge() call because \$customSort has more priority
        // than \$defaultSort, so the default sort must only be applied if there's
        // not already a custom sort config for the same field
        \$mergedSort = \$this->customSort;
        foreach (\$this->defaultSort as \$fieldName => \$order) {
            if (!\\array_key_exists(\$fieldName, \$mergedSort)) {
                \$mergedSort[\$fieldName] = \$order;
            }
        }

        return \$this->mergedSort = \$mergedSort;
    }

    public function isSortingField(string \$fieldProperty): bool
    {
        \$firstSortField = \\count(\$this->getSort()) > 0 ? array_keys(\$this->getSort())[0] : null;
        if (null === \$firstSortField) {
            return false;
        }

        // TODO: check for association properties when they support search (e.g. 'user.name')
        return \$fieldProperty === \$firstSortField;
    }

    public function getSortDirection(string \$fieldProperty): string
    {
        return \\array_key_exists(\$fieldProperty, \$this->getSort()) ? \$this->getSort()[\$fieldProperty] : 'DESC';
    }

    public function getQuery(): string
    {
        return \$this->query;
    }

    /**
     * @return string[]|null
     */
    public function getSearchableProperties(): ?array
    {
        return \$this->searchableProperties;
    }

    public function getAppliedFilters(): ?array
    {
        return \$this->appliedFilters;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/SearchDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\SearchDto.php");
    }
}
