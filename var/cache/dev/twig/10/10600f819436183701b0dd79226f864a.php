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

/* easycorp/easyadmin-bundle/src/Security/SecurityVoter.php */
class __TwigTemplate_1b31fc1877e9afd4cd60f04d606c93e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Security/SecurityVoter.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Security/SecurityVoter.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Security;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\CrudDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter;

/*
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class SecurityVoter extends Voter
{
    private AuthorizationCheckerInterface \$authorizationChecker;
    private AdminContextProvider \$adminContextProvider;

    public function __construct(AuthorizationCheckerInterface \$authorizationChecker, AdminContextProvider \$adminContextProvider)
    {
        \$this->authorizationChecker = \$authorizationChecker;
        \$this->adminContextProvider = \$adminContextProvider;
    }

    protected function supports(string \$permissionName, mixed \$subject): bool
    {
        return Permission::exists(\$permissionName);
    }

    protected function voteOnAttribute(\$permissionName, \$subject, TokenInterface \$token): bool
    {
        if (Permission::EA_VIEW_MENU_ITEM === \$permissionName) {
            return \$this->voteOnViewMenuItemPermission(\$subject);
        }

        if (Permission::EA_EXECUTE_ACTION === \$permissionName) {
            return \$this->voteOnExecuteActionPermission(\$this->adminContextProvider->getContext()->getCrud(), \$subject['action'] ?? null, \$subject['entity'] ?? null);
        }

        if (Permission::EA_VIEW_FIELD === \$permissionName) {
            return \$this->voteOnViewPropertyPermission(\$subject);
        }

        if (Permission::EA_ACCESS_ENTITY === \$permissionName) {
            return \$this->voteOnViewEntityPermission(\$subject);
        }

        if (Permission::EA_EXIT_IMPERSONATION === \$permissionName) {
            return \$this->voteOnExitImpersonationPermission();
        }

        return true;
    }

    private function voteOnViewMenuItemPermission(MenuItemDto \$menuItemDto): bool
    {
        // users can see the menu item if they have the permission required by the menu item
        return \$this->authorizationChecker->isGranted(\$menuItemDto->getPermission(), \$menuItemDto);
    }

    private function voteOnExecuteActionPermission(CrudDto \$crudDto, ActionDto|string \$actionNameOrDto, ?EntityDto \$entityDto): bool
    {
        // users can run the Crud action if:
        // * they have the required permission to execute the action on the given entity instance
        // * the action is not disabled

        \$actionName = \\is_string(\$actionNameOrDto) ? \$actionNameOrDto : \$actionNameOrDto->getName();

        \$actionPermission = \$crudDto->getActionsConfig()->getActionPermissions()[\$actionName] ?? null;
        \$disabledActionNames = \$crudDto->getActionsConfig()->getDisabledActions();

        \$subject = null === \$entityDto ? null : \$entityDto->getInstance();

        return \$this->authorizationChecker->isGranted(\$actionPermission, \$subject) && !\\in_array(\$actionName, \$disabledActionNames, true);
    }

    private function voteOnViewPropertyPermission(FieldDto \$field): bool
    {
        // users can see the field if they have the permission required by the field
        return \$this->authorizationChecker->isGranted(\$field->getPermission(), \$field);
    }

    private function voteOnViewEntityPermission(EntityDto \$entityDto): bool
    {
        // users can see the entity if they have the required permission on the specific entity instance
        return \$this->authorizationChecker->isGranted(\$entityDto->getPermission(), \$entityDto->getInstance());
    }

    private function voteOnExitImpersonationPermission(): bool
    {
        // users can exit impersonation if they are currently impersonating another user.
        // In Symfony, that means that current user has the special impersonator permission
        if (\\defined('Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR')) {
            \$impersonatorPermission = 'IS_IMPERSONATOR';
        } else {
            \$impersonatorPermission = 'ROLE_PREVIOUS_ADMIN';
        }

        return \$this->authorizationChecker->isGranted(\$impersonatorPermission);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Security/SecurityVoter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Security;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\CrudDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter;

/*
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class SecurityVoter extends Voter
{
    private AuthorizationCheckerInterface \$authorizationChecker;
    private AdminContextProvider \$adminContextProvider;

    public function __construct(AuthorizationCheckerInterface \$authorizationChecker, AdminContextProvider \$adminContextProvider)
    {
        \$this->authorizationChecker = \$authorizationChecker;
        \$this->adminContextProvider = \$adminContextProvider;
    }

    protected function supports(string \$permissionName, mixed \$subject): bool
    {
        return Permission::exists(\$permissionName);
    }

    protected function voteOnAttribute(\$permissionName, \$subject, TokenInterface \$token): bool
    {
        if (Permission::EA_VIEW_MENU_ITEM === \$permissionName) {
            return \$this->voteOnViewMenuItemPermission(\$subject);
        }

        if (Permission::EA_EXECUTE_ACTION === \$permissionName) {
            return \$this->voteOnExecuteActionPermission(\$this->adminContextProvider->getContext()->getCrud(), \$subject['action'] ?? null, \$subject['entity'] ?? null);
        }

        if (Permission::EA_VIEW_FIELD === \$permissionName) {
            return \$this->voteOnViewPropertyPermission(\$subject);
        }

        if (Permission::EA_ACCESS_ENTITY === \$permissionName) {
            return \$this->voteOnViewEntityPermission(\$subject);
        }

        if (Permission::EA_EXIT_IMPERSONATION === \$permissionName) {
            return \$this->voteOnExitImpersonationPermission();
        }

        return true;
    }

    private function voteOnViewMenuItemPermission(MenuItemDto \$menuItemDto): bool
    {
        // users can see the menu item if they have the permission required by the menu item
        return \$this->authorizationChecker->isGranted(\$menuItemDto->getPermission(), \$menuItemDto);
    }

    private function voteOnExecuteActionPermission(CrudDto \$crudDto, ActionDto|string \$actionNameOrDto, ?EntityDto \$entityDto): bool
    {
        // users can run the Crud action if:
        // * they have the required permission to execute the action on the given entity instance
        // * the action is not disabled

        \$actionName = \\is_string(\$actionNameOrDto) ? \$actionNameOrDto : \$actionNameOrDto->getName();

        \$actionPermission = \$crudDto->getActionsConfig()->getActionPermissions()[\$actionName] ?? null;
        \$disabledActionNames = \$crudDto->getActionsConfig()->getDisabledActions();

        \$subject = null === \$entityDto ? null : \$entityDto->getInstance();

        return \$this->authorizationChecker->isGranted(\$actionPermission, \$subject) && !\\in_array(\$actionName, \$disabledActionNames, true);
    }

    private function voteOnViewPropertyPermission(FieldDto \$field): bool
    {
        // users can see the field if they have the permission required by the field
        return \$this->authorizationChecker->isGranted(\$field->getPermission(), \$field);
    }

    private function voteOnViewEntityPermission(EntityDto \$entityDto): bool
    {
        // users can see the entity if they have the required permission on the specific entity instance
        return \$this->authorizationChecker->isGranted(\$entityDto->getPermission(), \$entityDto->getInstance());
    }

    private function voteOnExitImpersonationPermission(): bool
    {
        // users can exit impersonation if they are currently impersonating another user.
        // In Symfony, that means that current user has the special impersonator permission
        if (\\defined('Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR')) {
            \$impersonatorPermission = 'IS_IMPERSONATOR';
        } else {
            \$impersonatorPermission = 'ROLE_PREVIOUS_ADMIN';
        }

        return \$this->authorizationChecker->isGranted(\$impersonatorPermission);
    }
}
", "easycorp/easyadmin-bundle/src/Security/SecurityVoter.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Security\\SecurityVoter.php");
    }
}
