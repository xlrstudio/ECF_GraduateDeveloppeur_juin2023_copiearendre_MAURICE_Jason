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

/* easycorp/easyadmin-bundle/src/Collection/ActionCollection.php */
class __TwigTemplate_ba8dde2e8f71243f3493070d49555dda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Collection/ActionCollection.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Collection/ActionCollection.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Collection;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Collection\\CollectionInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ActionCollection implements CollectionInterface
{
    /**
     * @param ActionDto[] \$actions
     */
    private function __construct(private array \$actions)
    {
    }

    public function __clone()
    {
        foreach (\$this->actions as \$actionName => \$actionDto) {
            \$this->actions[\$actionName] = clone \$actionDto;
        }
    }

    /**
     * @param ActionDto[] \$actions
     */
    public static function new(array \$actions): self
    {
        return new self(\$actions);
    }

    /**
     * @return ActionDto[]
     */
    public function all(): array
    {
        return \$this->actions;
    }

    public function get(string \$actionName): ?ActionDto
    {
        return \$this->actions[\$actionName] ?? null;
    }

    public function offsetExists(mixed \$offset): bool
    {
        return \\array_key_exists(\$offset, \$this->actions);
    }

    public function offsetGet(mixed \$offset): ActionDto
    {
        return \$this->actions[\$offset];
    }

    public function offsetSet(mixed \$offset, mixed \$value): void
    {
        \$this->actions[\$offset] = \$value;
    }

    public function offsetUnset(mixed \$offset): void
    {
        unset(\$this->actions[\$offset]);
    }

    public function count(): int
    {
        return \\count(\$this->actions);
    }

    /**
     * @return \\ArrayIterator<ActionDto>
     */
    public function getIterator(): \\ArrayIterator
    {
        return new \\ArrayIterator(\$this->actions);
    }

    public function getEntityActions(): self
    {
        return self::new(array_filter(
            \$this->actions,
            static fn (ActionDto \$action): bool => \$action->isEntityAction()
        ));
    }

    public function getGlobalActions(): self
    {
        return self::new(array_filter(
            \$this->actions,
            static fn (ActionDto \$action): bool => \$action->isGlobalAction()
        ));
    }

    public function getBatchActions(): self
    {
        return self::new(array_filter(
            \$this->actions,
            static fn (ActionDto \$action): bool => \$action->isBatchAction()
        ));
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Collection/ActionCollection.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ActionCollection implements CollectionInterface
{
    /**
     * @param ActionDto[] \$actions
     */
    private function __construct(private array \$actions)
    {
    }

    public function __clone()
    {
        foreach (\$this->actions as \$actionName => \$actionDto) {
            \$this->actions[\$actionName] = clone \$actionDto;
        }
    }

    /**
     * @param ActionDto[] \$actions
     */
    public static function new(array \$actions): self
    {
        return new self(\$actions);
    }

    /**
     * @return ActionDto[]
     */
    public function all(): array
    {
        return \$this->actions;
    }

    public function get(string \$actionName): ?ActionDto
    {
        return \$this->actions[\$actionName] ?? null;
    }

    public function offsetExists(mixed \$offset): bool
    {
        return \\array_key_exists(\$offset, \$this->actions);
    }

    public function offsetGet(mixed \$offset): ActionDto
    {
        return \$this->actions[\$offset];
    }

    public function offsetSet(mixed \$offset, mixed \$value): void
    {
        \$this->actions[\$offset] = \$value;
    }

    public function offsetUnset(mixed \$offset): void
    {
        unset(\$this->actions[\$offset]);
    }

    public function count(): int
    {
        return \\count(\$this->actions);
    }

    /**
     * @return \\ArrayIterator<ActionDto>
     */
    public function getIterator(): \\ArrayIterator
    {
        return new \\ArrayIterator(\$this->actions);
    }

    public function getEntityActions(): self
    {
        return self::new(array_filter(
            \$this->actions,
            static fn (ActionDto \$action): bool => \$action->isEntityAction()
        ));
    }

    public function getGlobalActions(): self
    {
        return self::new(array_filter(
            \$this->actions,
            static fn (ActionDto \$action): bool => \$action->isGlobalAction()
        ));
    }

    public function getBatchActions(): self
    {
        return self::new(array_filter(
            \$this->actions,
            static fn (ActionDto \$action): bool => \$action->isBatchAction()
        ));
    }
}
", "easycorp/easyadmin-bundle/src/Collection/ActionCollection.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Collection\\ActionCollection.php");
    }
}
