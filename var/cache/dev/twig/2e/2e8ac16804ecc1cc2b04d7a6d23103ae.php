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

/* easycorp/easyadmin-bundle/src/Factory/ActionFactory.php */
class __TwigTemplate_9694693405fbaa7a6703cd20401bbbf2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/ActionFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/ActionFactory.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\ActionCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Action;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use EasyCorp\\Bundle\\EasyAdminBundle\\Security\\Permission;
use EasyCorp\\Bundle\\EasyAdminBundle\\Translation\\TranslatableMessageBuilder;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use function Symfony\\Component\\Translation\\t;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ActionFactory
{
    private AdminContextProvider \$adminContextProvider;
    private AuthorizationCheckerInterface \$authChecker;
    private AdminUrlGenerator \$adminUrlGenerator;
    private ?CsrfTokenManagerInterface \$csrfTokenManager;

    public function __construct(AdminContextProvider \$adminContextProvider, AuthorizationCheckerInterface \$authChecker, AdminUrlGenerator \$adminUrlGenerator, ?CsrfTokenManagerInterface \$csrfTokenManager = null)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->authChecker = \$authChecker;
        \$this->adminUrlGenerator = \$adminUrlGenerator;
        \$this->csrfTokenManager = \$csrfTokenManager;
    }

    public function processEntityActions(EntityDto \$entityDto, ActionConfigDto \$actionsDto): void
    {
        \$currentPage = \$this->adminContextProvider->getContext()->getCrud()->getCurrentPage();
        \$entityActions = [];
        foreach (\$actionsDto->getActions()->all() as \$actionDto) {
            if (!\$actionDto->isEntityAction()) {
                continue;
            }

            if (false === \$this->authChecker->isGranted(Permission::EA_EXECUTE_ACTION, ['action' => \$actionDto, 'entity' => \$entityDto])) {
                continue;
            }

            if (false === \$actionDto->shouldBeDisplayedFor(\$entityDto)) {
                continue;
            }

            if ('' === \$actionDto->getCssClass()) {
                \$defaultCssClass = 'action-'.\$actionDto->getName();
                if (Crud::PAGE_INDEX !== \$currentPage) {
                    \$defaultCssClass .= ' btn';
                }

                \$actionDto->setCssClass(\$defaultCssClass);
            }

            \$entityActions[] = \$this->processAction(\$currentPage, \$actionDto, \$entityDto);
        }

        \$entityDto->setActions(ActionCollection::new(\$entityActions));
    }

    public function processGlobalActions(ActionConfigDto \$actionsDto = null): ActionCollection
    {
        if (null === \$actionsDto) {
            \$actionsDto = \$this->adminContextProvider->getContext()->getCrud()->getActionsConfig();
        }

        \$currentPage = \$this->adminContextProvider->getContext()->getCrud()->getCurrentPage();
        \$globalActions = [];
        foreach (\$actionsDto->getActions()->all() as \$actionDto) {
            if (!\$actionDto->isGlobalAction() && !\$actionDto->isBatchAction()) {
                continue;
            }

            if (false === \$this->authChecker->isGranted(Permission::EA_EXECUTE_ACTION, ['action' => \$actionDto, 'entity' => null])) {
                continue;
            }

            if (Crud::PAGE_INDEX !== \$currentPage && \$actionDto->isBatchAction()) {
                throw new \\RuntimeException(sprintf('Batch actions can be added only to the \"index\" page, but the \"%s\" batch action is defined in the \"%s\" page.', \$actionDto->getName(), \$currentPage));
            }

            if ('' === \$actionDto->getCssClass()) {
                \$actionDto->setCssClass('btn action-'.\$actionDto->getName());
            }

            \$globalActions[] = \$this->processAction(\$currentPage, \$actionDto);
        }

        return ActionCollection::new(\$globalActions);
    }

    private function processAction(string \$pageName, ActionDto \$actionDto, ?EntityDto \$entityDto = null): ActionDto
    {
        \$adminContext = \$this->adminContextProvider->getContext();
        \$translationDomain = \$adminContext->getI18n()->getTranslationDomain();
        \$defaultTranslationParameters = \$adminContext->getI18n()->getTranslationParameters();
        \$currentPage = \$adminContext->getCrud()->getCurrentPage();

        \$actionDto->setHtmlAttribute('data-action-name', \$actionDto->getName());

        if (false === \$actionDto->getLabel()) {
            \$actionDto->setHtmlAttribute('title', \$actionDto->getName());
        } elseif (!\$actionDto->getLabel() instanceof TranslatableInterface) {
            \$translationParameters = array_merge(
                \$defaultTranslationParameters,
                \$actionDto->getTranslationParameters()
            );
            \$label = \$actionDto->getLabel();
            \$translatableActionLabel = (null === \$label || '' === \$label) ? \$label : t(\$label, \$translationParameters, \$translationDomain);
            \$actionDto->setLabel(\$translatableActionLabel);
        } else {
            \$actionDto->setLabel(TranslatableMessageBuilder::withParameters(\$actionDto->getLabel(), \$defaultTranslationParameters));
        }

        \$defaultTemplatePath = \$adminContext->getTemplatePath('crud/action');
        \$actionDto->setTemplatePath(\$actionDto->getTemplatePath() ?? \$defaultTemplatePath);

        \$actionDto->setLinkUrl(\$this->generateActionUrl(\$currentPage, \$adminContext->getRequest(), \$actionDto, \$entityDto));

        if (!\$actionDto->isGlobalAction() && \\in_array(\$pageName, [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            \$actionDto->setHtmlAttribute('form', sprintf('%s-%s-form', \$pageName, \$entityDto->getName()));
        }

        if (Action::DELETE === \$actionDto->getName()) {
            \$actionDto->addHtmlAttributes([
                'formaction' => \$this->adminUrlGenerator->setAction(Action::DELETE)->setEntityId(\$entityDto->getPrimaryKeyValue())->removeReferrer()->generateUrl(),
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#modal-delete',
            ]);
        }

        if (\$actionDto->isBatchAction()) {
            \$actionDto->addHtmlAttributes([
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#modal-batch-action',
                'data-action-csrf-token' => \$this->csrfTokenManager?->getToken('ea-batch-action-'.\$actionDto->getName()),
                'data-action-batch' => 'true',
                'data-entity-fqcn' => \$adminContext->getCrud()->getEntityFqcn(),
                'data-action-url' => \$actionDto->getLinkUrl(),
            ]);
        }

        return \$actionDto;
    }

    private function generateActionUrl(string \$currentAction, Request \$request, ActionDto \$actionDto, ?EntityDto \$entityDto = null): string
    {
        if (null !== \$url = \$actionDto->getUrl()) {
            if (\\is_callable(\$url)) {
                return null !== \$entityDto ? \$url(\$entityDto->getInstance()) : \$url();
            }

            return \$url;
        }

        if (null !== \$routeName = \$actionDto->getRouteName()) {
            \$routeParameters = \$actionDto->getRouteParameters();
            if (\\is_callable(\$routeParameters) && null !== \$entityInstance = \$entityDto->getInstance()) {
                \$routeParameters = \$routeParameters(\$entityInstance);
            }

            return \$this->adminUrlGenerator->unsetAll()->includeReferrer()->setRoute(\$routeName, \$routeParameters)->generateUrl();
        }

        \$requestParameters = [
            EA::CRUD_CONTROLLER_FQCN => \$request->query->get(EA::CRUD_CONTROLLER_FQCN),
            EA::CRUD_ACTION => \$actionDto->getCrudActionName(),
            EA::REFERRER => \$this->generateReferrerUrl(\$request, \$actionDto, \$currentAction),
        ];

        if (\\in_array(\$actionDto->getName(), [Action::INDEX, Action::NEW, Action::SAVE_AND_ADD_ANOTHER, Action::SAVE_AND_RETURN], true)) {
            \$requestParameters[EA::ENTITY_ID] = null;
        } elseif (null !== \$entityDto) {
            \$requestParameters[EA::ENTITY_ID] = \$entityDto->getPrimaryKeyValueAsString();
        }

        return \$this->adminUrlGenerator->unsetAllExcept(EA::FILTERS, EA::PAGE)->setAll(\$requestParameters)->generateUrl();
    }

    private function generateReferrerUrl(Request \$request, ActionDto \$actionDto, string \$currentAction): ?string
    {
        \$nextAction = \$actionDto->getName();

        if (Action::DETAIL === \$currentAction) {
            if (Action::EDIT === \$nextAction) {
                return \$this->adminUrlGenerator->removeReferrer()->generateUrl();
            }
        }

        if (Action::INDEX === \$currentAction) {
            return \$this->adminUrlGenerator->removeReferrer()->generateUrl();
        }

        if (Action::NEW === \$currentAction) {
            return null;
        }

        \$referrer = \$request->query->get(EA::REFERRER);
        \$referrerParts = parse_url((string) \$referrer);
        parse_str(\$referrerParts[EA::QUERY] ?? '', \$referrerQueryStringVariables);
        \$referrerCrudAction = \$referrerQueryStringVariables[EA::CRUD_ACTION] ?? null;

        if (Action::EDIT === \$currentAction) {
            if (\\in_array(\$referrerCrudAction, [Action::INDEX, Action::DETAIL], true)) {
                return \$referrer;
            }
        }

        return \$this->adminUrlGenerator->removeReferrer()->generateUrl();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Factory/ActionFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\ActionCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Action;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use EasyCorp\\Bundle\\EasyAdminBundle\\Security\\Permission;
use EasyCorp\\Bundle\\EasyAdminBundle\\Translation\\TranslatableMessageBuilder;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use function Symfony\\Component\\Translation\\t;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ActionFactory
{
    private AdminContextProvider \$adminContextProvider;
    private AuthorizationCheckerInterface \$authChecker;
    private AdminUrlGenerator \$adminUrlGenerator;
    private ?CsrfTokenManagerInterface \$csrfTokenManager;

    public function __construct(AdminContextProvider \$adminContextProvider, AuthorizationCheckerInterface \$authChecker, AdminUrlGenerator \$adminUrlGenerator, ?CsrfTokenManagerInterface \$csrfTokenManager = null)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->authChecker = \$authChecker;
        \$this->adminUrlGenerator = \$adminUrlGenerator;
        \$this->csrfTokenManager = \$csrfTokenManager;
    }

    public function processEntityActions(EntityDto \$entityDto, ActionConfigDto \$actionsDto): void
    {
        \$currentPage = \$this->adminContextProvider->getContext()->getCrud()->getCurrentPage();
        \$entityActions = [];
        foreach (\$actionsDto->getActions()->all() as \$actionDto) {
            if (!\$actionDto->isEntityAction()) {
                continue;
            }

            if (false === \$this->authChecker->isGranted(Permission::EA_EXECUTE_ACTION, ['action' => \$actionDto, 'entity' => \$entityDto])) {
                continue;
            }

            if (false === \$actionDto->shouldBeDisplayedFor(\$entityDto)) {
                continue;
            }

            if ('' === \$actionDto->getCssClass()) {
                \$defaultCssClass = 'action-'.\$actionDto->getName();
                if (Crud::PAGE_INDEX !== \$currentPage) {
                    \$defaultCssClass .= ' btn';
                }

                \$actionDto->setCssClass(\$defaultCssClass);
            }

            \$entityActions[] = \$this->processAction(\$currentPage, \$actionDto, \$entityDto);
        }

        \$entityDto->setActions(ActionCollection::new(\$entityActions));
    }

    public function processGlobalActions(ActionConfigDto \$actionsDto = null): ActionCollection
    {
        if (null === \$actionsDto) {
            \$actionsDto = \$this->adminContextProvider->getContext()->getCrud()->getActionsConfig();
        }

        \$currentPage = \$this->adminContextProvider->getContext()->getCrud()->getCurrentPage();
        \$globalActions = [];
        foreach (\$actionsDto->getActions()->all() as \$actionDto) {
            if (!\$actionDto->isGlobalAction() && !\$actionDto->isBatchAction()) {
                continue;
            }

            if (false === \$this->authChecker->isGranted(Permission::EA_EXECUTE_ACTION, ['action' => \$actionDto, 'entity' => null])) {
                continue;
            }

            if (Crud::PAGE_INDEX !== \$currentPage && \$actionDto->isBatchAction()) {
                throw new \\RuntimeException(sprintf('Batch actions can be added only to the \"index\" page, but the \"%s\" batch action is defined in the \"%s\" page.', \$actionDto->getName(), \$currentPage));
            }

            if ('' === \$actionDto->getCssClass()) {
                \$actionDto->setCssClass('btn action-'.\$actionDto->getName());
            }

            \$globalActions[] = \$this->processAction(\$currentPage, \$actionDto);
        }

        return ActionCollection::new(\$globalActions);
    }

    private function processAction(string \$pageName, ActionDto \$actionDto, ?EntityDto \$entityDto = null): ActionDto
    {
        \$adminContext = \$this->adminContextProvider->getContext();
        \$translationDomain = \$adminContext->getI18n()->getTranslationDomain();
        \$defaultTranslationParameters = \$adminContext->getI18n()->getTranslationParameters();
        \$currentPage = \$adminContext->getCrud()->getCurrentPage();

        \$actionDto->setHtmlAttribute('data-action-name', \$actionDto->getName());

        if (false === \$actionDto->getLabel()) {
            \$actionDto->setHtmlAttribute('title', \$actionDto->getName());
        } elseif (!\$actionDto->getLabel() instanceof TranslatableInterface) {
            \$translationParameters = array_merge(
                \$defaultTranslationParameters,
                \$actionDto->getTranslationParameters()
            );
            \$label = \$actionDto->getLabel();
            \$translatableActionLabel = (null === \$label || '' === \$label) ? \$label : t(\$label, \$translationParameters, \$translationDomain);
            \$actionDto->setLabel(\$translatableActionLabel);
        } else {
            \$actionDto->setLabel(TranslatableMessageBuilder::withParameters(\$actionDto->getLabel(), \$defaultTranslationParameters));
        }

        \$defaultTemplatePath = \$adminContext->getTemplatePath('crud/action');
        \$actionDto->setTemplatePath(\$actionDto->getTemplatePath() ?? \$defaultTemplatePath);

        \$actionDto->setLinkUrl(\$this->generateActionUrl(\$currentPage, \$adminContext->getRequest(), \$actionDto, \$entityDto));

        if (!\$actionDto->isGlobalAction() && \\in_array(\$pageName, [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            \$actionDto->setHtmlAttribute('form', sprintf('%s-%s-form', \$pageName, \$entityDto->getName()));
        }

        if (Action::DELETE === \$actionDto->getName()) {
            \$actionDto->addHtmlAttributes([
                'formaction' => \$this->adminUrlGenerator->setAction(Action::DELETE)->setEntityId(\$entityDto->getPrimaryKeyValue())->removeReferrer()->generateUrl(),
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#modal-delete',
            ]);
        }

        if (\$actionDto->isBatchAction()) {
            \$actionDto->addHtmlAttributes([
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#modal-batch-action',
                'data-action-csrf-token' => \$this->csrfTokenManager?->getToken('ea-batch-action-'.\$actionDto->getName()),
                'data-action-batch' => 'true',
                'data-entity-fqcn' => \$adminContext->getCrud()->getEntityFqcn(),
                'data-action-url' => \$actionDto->getLinkUrl(),
            ]);
        }

        return \$actionDto;
    }

    private function generateActionUrl(string \$currentAction, Request \$request, ActionDto \$actionDto, ?EntityDto \$entityDto = null): string
    {
        if (null !== \$url = \$actionDto->getUrl()) {
            if (\\is_callable(\$url)) {
                return null !== \$entityDto ? \$url(\$entityDto->getInstance()) : \$url();
            }

            return \$url;
        }

        if (null !== \$routeName = \$actionDto->getRouteName()) {
            \$routeParameters = \$actionDto->getRouteParameters();
            if (\\is_callable(\$routeParameters) && null !== \$entityInstance = \$entityDto->getInstance()) {
                \$routeParameters = \$routeParameters(\$entityInstance);
            }

            return \$this->adminUrlGenerator->unsetAll()->includeReferrer()->setRoute(\$routeName, \$routeParameters)->generateUrl();
        }

        \$requestParameters = [
            EA::CRUD_CONTROLLER_FQCN => \$request->query->get(EA::CRUD_CONTROLLER_FQCN),
            EA::CRUD_ACTION => \$actionDto->getCrudActionName(),
            EA::REFERRER => \$this->generateReferrerUrl(\$request, \$actionDto, \$currentAction),
        ];

        if (\\in_array(\$actionDto->getName(), [Action::INDEX, Action::NEW, Action::SAVE_AND_ADD_ANOTHER, Action::SAVE_AND_RETURN], true)) {
            \$requestParameters[EA::ENTITY_ID] = null;
        } elseif (null !== \$entityDto) {
            \$requestParameters[EA::ENTITY_ID] = \$entityDto->getPrimaryKeyValueAsString();
        }

        return \$this->adminUrlGenerator->unsetAllExcept(EA::FILTERS, EA::PAGE)->setAll(\$requestParameters)->generateUrl();
    }

    private function generateReferrerUrl(Request \$request, ActionDto \$actionDto, string \$currentAction): ?string
    {
        \$nextAction = \$actionDto->getName();

        if (Action::DETAIL === \$currentAction) {
            if (Action::EDIT === \$nextAction) {
                return \$this->adminUrlGenerator->removeReferrer()->generateUrl();
            }
        }

        if (Action::INDEX === \$currentAction) {
            return \$this->adminUrlGenerator->removeReferrer()->generateUrl();
        }

        if (Action::NEW === \$currentAction) {
            return null;
        }

        \$referrer = \$request->query->get(EA::REFERRER);
        \$referrerParts = parse_url((string) \$referrer);
        parse_str(\$referrerParts[EA::QUERY] ?? '', \$referrerQueryStringVariables);
        \$referrerCrudAction = \$referrerQueryStringVariables[EA::CRUD_ACTION] ?? null;

        if (Action::EDIT === \$currentAction) {
            if (\\in_array(\$referrerCrudAction, [Action::INDEX, Action::DETAIL], true)) {
                return \$referrer;
            }
        }

        return \$this->adminUrlGenerator->removeReferrer()->generateUrl();
    }
}
", "easycorp/easyadmin-bundle/src/Factory/ActionFactory.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Factory\\ActionFactory.php");
    }
}
