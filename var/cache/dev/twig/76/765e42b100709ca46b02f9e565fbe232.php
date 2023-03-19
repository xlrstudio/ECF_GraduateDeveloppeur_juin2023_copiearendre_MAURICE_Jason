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

/* easycorp/easyadmin-bundle/src/Collection/EntityCollection.php */
class __TwigTemplate_fbc333dff63e753864b63097c83e6259 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Collection/EntityCollection.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Collection/EntityCollection.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Collection;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Collection\\CollectionInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EntityCollection implements CollectionInterface
{
    /**
     * @param EntityDto[] \$entities
     */
    private function __construct(private array \$entities)
    {
    }

    /**
     * @param EntityDto[] \$entities
     */
    public static function new(array \$entities): self
    {
        return new self(\$entities);
    }

    public function get(string \$entityId): ?EntityDto
    {
        return \$this->entities[\$entityId] ?? null;
    }

    public function set(EntityDto \$newOrUpdatedEntity): void
    {
        \$this->entities[\$newOrUpdatedEntity->getPrimaryKeyValueAsString()] = \$newOrUpdatedEntity;
    }

    public function offsetExists(mixed \$offset): bool
    {
        return \\array_key_exists(\$offset, \$this->entities);
    }

    public function offsetGet(mixed \$offset): EntityDto
    {
        return \$this->entities[\$offset];
    }

    public function offsetSet(mixed \$offset, mixed \$value): void
    {
        \$this->entities[\$offset] = \$value;
    }

    public function offsetUnset(mixed \$offset): void
    {
        unset(\$this->entities[\$offset]);
    }

    public function count(): int
    {
        return \\count(\$this->entities);
    }

    /**
     * @return \\ArrayIterator<EntityDto>
     */
    public function getIterator(): \\ArrayIterator
    {
        return new \\ArrayIterator(\$this->entities);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Collection/EntityCollection.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EntityCollection implements CollectionInterface
{
    /**
     * @param EntityDto[] \$entities
     */
    private function __construct(private array \$entities)
    {
    }

    /**
     * @param EntityDto[] \$entities
     */
    public static function new(array \$entities): self
    {
        return new self(\$entities);
    }

    public function get(string \$entityId): ?EntityDto
    {
        return \$this->entities[\$entityId] ?? null;
    }

    public function set(EntityDto \$newOrUpdatedEntity): void
    {
        \$this->entities[\$newOrUpdatedEntity->getPrimaryKeyValueAsString()] = \$newOrUpdatedEntity;
    }

    public function offsetExists(mixed \$offset): bool
    {
        return \\array_key_exists(\$offset, \$this->entities);
    }

    public function offsetGet(mixed \$offset): EntityDto
    {
        return \$this->entities[\$offset];
    }

    public function offsetSet(mixed \$offset, mixed \$value): void
    {
        \$this->entities[\$offset] = \$value;
    }

    public function offsetUnset(mixed \$offset): void
    {
        unset(\$this->entities[\$offset]);
    }

    public function count(): int
    {
        return \\count(\$this->entities);
    }

    /**
     * @return \\ArrayIterator<EntityDto>
     */
    public function getIterator(): \\ArrayIterator
    {
        return new \\ArrayIterator(\$this->entities);
    }
}
", "easycorp/easyadmin-bundle/src/Collection/EntityCollection.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Collection\\EntityCollection.php");
    }
}
