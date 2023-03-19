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

/* easycorp/easyadmin-bundle/src/Collection/FilterCollection.php */
class __TwigTemplate_ba7ba71d8534c13517883181ebcd55cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Collection/FilterCollection.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Collection/FilterCollection.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Collection;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Collection\\CollectionInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterCollection implements CollectionInterface
{
    /**
     * @param FilterDto[] \$filters
     */
    private function __construct(private array \$filters)
    {
    }

    /**
     * @param FilterDto[] \$filters
     */
    public static function new(array \$filters = []): self
    {
        return new self(\$filters);
    }

    /**
     * @return FilterDto[]
     */
    public function all(): array
    {
        return \$this->filters;
    }

    public function get(string \$filterName): ?FilterDto
    {
        return \$this->filters[\$filterName] ?? null;
    }

    public function offsetExists(mixed \$offset): bool
    {
        return \\array_key_exists(\$offset, \$this->filters);
    }

    public function offsetGet(mixed \$offset): FilterDto
    {
        return \$this->filters[\$offset];
    }

    public function offsetSet(mixed \$offset, mixed \$value): void
    {
        \$this->filters[\$offset] = \$value;
    }

    public function offsetUnset(mixed \$offset): void
    {
        unset(\$this->filters[\$offset]);
    }

    public function count(): int
    {
        return \\count(\$this->filters);
    }

    /**
     * @return \\ArrayIterator<FilterDto>
     */
    public function getIterator(): \\ArrayIterator
    {
        return new \\ArrayIterator(\$this->filters);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Collection/FilterCollection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Collection;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Collection\\CollectionInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterCollection implements CollectionInterface
{
    /**
     * @param FilterDto[] \$filters
     */
    private function __construct(private array \$filters)
    {
    }

    /**
     * @param FilterDto[] \$filters
     */
    public static function new(array \$filters = []): self
    {
        return new self(\$filters);
    }

    /**
     * @return FilterDto[]
     */
    public function all(): array
    {
        return \$this->filters;
    }

    public function get(string \$filterName): ?FilterDto
    {
        return \$this->filters[\$filterName] ?? null;
    }

    public function offsetExists(mixed \$offset): bool
    {
        return \\array_key_exists(\$offset, \$this->filters);
    }

    public function offsetGet(mixed \$offset): FilterDto
    {
        return \$this->filters[\$offset];
    }

    public function offsetSet(mixed \$offset, mixed \$value): void
    {
        \$this->filters[\$offset] = \$value;
    }

    public function offsetUnset(mixed \$offset): void
    {
        unset(\$this->filters[\$offset]);
    }

    public function count(): int
    {
        return \\count(\$this->filters);
    }

    /**
     * @return \\ArrayIterator<FilterDto>
     */
    public function getIterator(): \\ArrayIterator
    {
        return new \\ArrayIterator(\$this->filters);
    }
}
", "easycorp/easyadmin-bundle/src/Collection/FilterCollection.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Collection\\FilterCollection.php");
    }
}
