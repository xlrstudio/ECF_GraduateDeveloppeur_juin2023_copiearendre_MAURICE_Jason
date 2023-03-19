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

/* easycorp/easyadmin-bundle/src/Dto/ActionConfigDto.php */
class __TwigTemplate_3b88ec50da47190f69d11e33045a8764 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/ActionConfigDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/ActionConfigDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\ActionCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ActionConfigDto
{
    private ?string \$pageName = null;
    /** @var array<string, array<int, ActionDto>> */
    private array \$actions = [
        Crud::PAGE_DETAIL => [],
        Crud::PAGE_EDIT => [],
        Crud::PAGE_INDEX => [],
        Crud::PAGE_NEW => [],
    ];
    /** @var string[] */
    private array \$disabledActions = [];
    /** @var string[] */
    private array \$actionPermissions = [];

    public function __construct()
    {
    }

    public function __clone()
    {
        foreach (\$this->actions as \$pageName => \$actions) {
            foreach (\$actions as \$actionName => \$actionDto) {
                \$this->actions[\$pageName][\$actionName] = clone \$actionDto;
            }
        }
    }

    public function setPageName(?string \$pageName): void
    {
        \$this->pageName = \$pageName;
    }

    public function setActionPermission(string \$actionName, string \$permission): void
    {
        \$this->actionPermissions[\$actionName] = \$permission;
    }

    public function setActionPermissions(array \$permissions): void
    {
        \$this->actionPermissions = \$permissions;
    }

    public function prependAction(string \$pageName, ActionDto \$actionDto): void
    {
        \$this->actions[\$pageName][\$actionDto->getName()] = \$actionDto;
    }

    public function appendAction(string \$pageName, ActionDto \$actionDto): void
    {
        \$this->actions[\$pageName] = array_merge([\$actionDto->getName() => \$actionDto], \$this->actions[\$pageName]);
    }

    public function setAction(string \$pageName, ActionDto \$actionDto): void
    {
        \$this->actions[\$pageName][\$actionDto->getName()] = \$actionDto;
    }

    public function getAction(string \$pageName, string \$actionName): ?ActionDto
    {
        return \$this->actions[\$pageName][\$actionName] ?? null;
    }

    public function removeAction(string \$pageName, string \$actionName): void
    {
        unset(\$this->actions[\$pageName][\$actionName]);
    }

    public function reorderActions(string \$pageName, array \$orderedActionNames): void
    {
        \$orderedActions = [];
        foreach (\$orderedActionNames as \$actionName) {
            \$orderedActions[\$actionName] = \$this->actions[\$pageName][\$actionName];
        }

        \$this->actions[\$pageName] = \$orderedActions;
    }

    public function disableActions(array \$actionNames): void
    {
        foreach (\$actionNames as \$actionName) {
            if (!\\in_array(\$actionName, \$this->disabledActions, true)) {
                \$this->disabledActions[] = \$actionName;
            }
        }
    }

    public function getActions(): ActionCollection|array
    {
        return null === \$this->pageName ? \$this->actions : ActionCollection::new(\$this->actions[\$this->pageName]);
    }

    /**
     * @param ActionDto[] \$newActions
     */
    public function setActions(string \$pageName, array \$newActions): void
    {
        \$this->actions[\$pageName] = \$newActions;
    }

    public function getDisabledActions(): array
    {
        return \$this->disabledActions;
    }

    public function getActionPermissions(): array
    {
        return \$this->actionPermissions;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/ActionConfigDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\ActionCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ActionConfigDto
{
    private ?string \$pageName = null;
    /** @var array<string, array<int, ActionDto>> */
    private array \$actions = [
        Crud::PAGE_DETAIL => [],
        Crud::PAGE_EDIT => [],
        Crud::PAGE_INDEX => [],
        Crud::PAGE_NEW => [],
    ];
    /** @var string[] */
    private array \$disabledActions = [];
    /** @var string[] */
    private array \$actionPermissions = [];

    public function __construct()
    {
    }

    public function __clone()
    {
        foreach (\$this->actions as \$pageName => \$actions) {
            foreach (\$actions as \$actionName => \$actionDto) {
                \$this->actions[\$pageName][\$actionName] = clone \$actionDto;
            }
        }
    }

    public function setPageName(?string \$pageName): void
    {
        \$this->pageName = \$pageName;
    }

    public function setActionPermission(string \$actionName, string \$permission): void
    {
        \$this->actionPermissions[\$actionName] = \$permission;
    }

    public function setActionPermissions(array \$permissions): void
    {
        \$this->actionPermissions = \$permissions;
    }

    public function prependAction(string \$pageName, ActionDto \$actionDto): void
    {
        \$this->actions[\$pageName][\$actionDto->getName()] = \$actionDto;
    }

    public function appendAction(string \$pageName, ActionDto \$actionDto): void
    {
        \$this->actions[\$pageName] = array_merge([\$actionDto->getName() => \$actionDto], \$this->actions[\$pageName]);
    }

    public function setAction(string \$pageName, ActionDto \$actionDto): void
    {
        \$this->actions[\$pageName][\$actionDto->getName()] = \$actionDto;
    }

    public function getAction(string \$pageName, string \$actionName): ?ActionDto
    {
        return \$this->actions[\$pageName][\$actionName] ?? null;
    }

    public function removeAction(string \$pageName, string \$actionName): void
    {
        unset(\$this->actions[\$pageName][\$actionName]);
    }

    public function reorderActions(string \$pageName, array \$orderedActionNames): void
    {
        \$orderedActions = [];
        foreach (\$orderedActionNames as \$actionName) {
            \$orderedActions[\$actionName] = \$this->actions[\$pageName][\$actionName];
        }

        \$this->actions[\$pageName] = \$orderedActions;
    }

    public function disableActions(array \$actionNames): void
    {
        foreach (\$actionNames as \$actionName) {
            if (!\\in_array(\$actionName, \$this->disabledActions, true)) {
                \$this->disabledActions[] = \$actionName;
            }
        }
    }

    public function getActions(): ActionCollection|array
    {
        return null === \$this->pageName ? \$this->actions : ActionCollection::new(\$this->actions[\$this->pageName]);
    }

    /**
     * @param ActionDto[] \$newActions
     */
    public function setActions(string \$pageName, array \$newActions): void
    {
        \$this->actions[\$pageName] = \$newActions;
    }

    public function getDisabledActions(): array
    {
        return \$this->disabledActions;
    }

    public function getActionPermissions(): array
    {
        return \$this->actionPermissions;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/ActionConfigDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\ActionConfigDto.php");
    }
}
