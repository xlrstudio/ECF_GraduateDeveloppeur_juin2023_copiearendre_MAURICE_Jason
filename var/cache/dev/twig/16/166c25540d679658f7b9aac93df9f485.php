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

/* easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php */
class __TwigTemplate_aa79964e8628392ea99a51f7dc074573 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextDirection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\CrudControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetsDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\CrudDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\DashboardDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\I18nDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\TemplateRegistry;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use function Symfony\\Component\\String\\u;
use function Symfony\\Component\\Translation\\t;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AdminContextFactory
{
    private string \$cacheDir;
    private ?TokenStorageInterface \$tokenStorage;
    private MenuFactory \$menuFactory;
    private CrudControllerRegistry \$crudControllers;
    private EntityFactory \$entityFactory;

    public function __construct(string \$cacheDir, ?TokenStorageInterface \$tokenStorage, MenuFactory \$menuFactory, CrudControllerRegistry \$crudControllers, EntityFactory \$entityFactory)
    {
        \$this->cacheDir = \$cacheDir;
        \$this->tokenStorage = \$tokenStorage;
        \$this->menuFactory = \$menuFactory;
        \$this->crudControllers = \$crudControllers;
        \$this->entityFactory = \$entityFactory;
    }

    public function create(Request \$request, DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController): AdminContext
    {
        \$crudAction = \$request->query->get(EA::CRUD_ACTION);
        \$validPageNames = [Crud::PAGE_INDEX, Crud::PAGE_DETAIL, Crud::PAGE_EDIT, Crud::PAGE_NEW];
        \$pageName = \\in_array(\$crudAction, \$validPageNames, true) ? \$crudAction : null;

        \$dashboardDto = \$this->getDashboardDto(\$request, \$dashboardController);
        \$assetDto = \$this->getAssetDto(\$dashboardController, \$crudController, \$pageName);
        \$actionConfigDto = \$this->getActionConfig(\$dashboardController, \$crudController, \$pageName);
        \$filters = \$this->getFilters(\$dashboardController, \$crudController);

        \$crudDto = \$this->getCrudDto(\$this->crudControllers, \$dashboardController, \$crudController, \$actionConfigDto, \$filters, \$crudAction, \$pageName);
        \$entityDto = \$this->getEntityDto(\$request, \$crudDto);
        \$searchDto = \$this->getSearchDto(\$request, \$crudDto);
        \$i18nDto = \$this->getI18nDto(\$request, \$dashboardDto, \$crudDto, \$entityDto);
        \$templateRegistry = \$this->getTemplateRegistry(\$dashboardController, \$crudDto);
        \$user = \$this->getUser(\$this->tokenStorage);

        return new AdminContext(\$request, \$user, \$i18nDto, \$this->crudControllers, \$dashboardDto, \$dashboardController, \$assetDto, \$crudDto, \$entityDto, \$searchDto, \$this->menuFactory, \$templateRegistry);
    }

    private function getDashboardDto(Request \$request, DashboardControllerInterface \$dashboardControllerInstance): DashboardDto
    {
        \$dashboardRoutesCachePath = \$this->cacheDir.'/'.CacheWarmer::DASHBOARD_ROUTES_CACHE;
        \$dashboardControllerRoutes = !file_exists(\$dashboardRoutesCachePath) ? [] : require \$dashboardRoutesCachePath;
        \$dashboardController = \\get_class(\$dashboardControllerInstance).'::index';
        \$dashboardRouteName = null;

        foreach (\$dashboardControllerRoutes as \$routeName => \$controller) {
            if (\$controller === \$dashboardController) {
                // if present, remove the suffix of i18n route names (it's a two-letter locale at the end
                // of the route name; e.g. 'dashboard.en' -> remove '.en', 'admin.index.es' -> remove '.es')
                \$dashboardRouteName = preg_replace('~\\.\\w{2}\$~', '', \$routeName);

                break;
            }
        }

        if (null === \$dashboardRouteName) {
            throw new \\RuntimeException(sprintf('The name of the route associated to \"%s\" cannot be determined. Clear the application cache to run the EasyAdmin cache warmer, which generates the needed data to find this route.', \$dashboardController));
        }

        \$dashboardDto = \$dashboardControllerInstance->configureDashboard()->getAsDto();
        \$dashboardDto->setRouteName(\$dashboardRouteName);

        return \$dashboardDto;
    }

    private function getAssetDto(DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController, ?string \$pageName): AssetsDto
    {
        \$defaultAssets = \$dashboardController->configureAssets();

        if (null === \$crudController) {
            return \$defaultAssets->getAsDto();
        }

        return \$crudController->configureAssets(\$defaultAssets)->getAsDto()->loadedOn(\$pageName);
    }

    private function getCrudDto(CrudControllerRegistry \$crudControllers, DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController, ActionConfigDto \$actionConfigDto, FilterConfigDto \$filters, ?string \$crudAction, ?string \$pageName): ?CrudDto
    {
        if (null === \$crudController) {
            return null;
        }

        \$defaultCrud = \$dashboardController->configureCrud();
        \$crudDto = \$crudController->configureCrud(\$defaultCrud)->getAsDto();

        \$entityFqcn = \$crudControllers->findEntityFqcnByCrudFqcn(\\get_class(\$crudController));

        \$crudDto->setControllerFqcn(\\get_class(\$crudController));
        \$crudDto->setActionsConfig(\$actionConfigDto);
        \$crudDto->setFiltersConfig(\$filters);
        \$crudDto->setCurrentAction(\$crudAction);
        \$crudDto->setEntityFqcn(\$entityFqcn);
        \$crudDto->setPageName(\$pageName);

        return \$crudDto;
    }

    private function getActionConfig(DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController, ?string \$pageName): ActionConfigDto
    {
        if (null === \$crudController) {
            return new ActionConfigDto();
        }

        \$defaultActionConfig = \$dashboardController->configureActions();

        return \$crudController->configureActions(\$defaultActionConfig)->getAsDto(\$pageName);
    }

    private function getFilters(DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController): FilterConfigDto
    {
        if (null === \$crudController) {
            return new FilterConfigDto();
        }

        \$defaultFilterConfig = \$dashboardController->configureFilters();

        return \$crudController->configureFilters(\$defaultFilterConfig)->getAsDto();
    }

    private function getTemplateRegistry(DashboardControllerInterface \$dashboardController, ?CrudDto \$crudDto): TemplateRegistry
    {
        \$templateRegistry = TemplateRegistry::new();

        \$defaultCrudDto = \$dashboardController->configureCrud()->getAsDto();
        \$templateRegistry->setTemplates(\$defaultCrudDto->getOverriddenTemplates());

        if (null !== \$crudDto) {
            \$templateRegistry->setTemplates(\$crudDto->getOverriddenTemplates());
        }

        return \$templateRegistry;
    }

    private function getI18nDto(Request \$request, DashboardDto \$dashboardDto, ?CrudDto \$crudDto, ?EntityDto \$entityDto): I18nDto
    {
        \$locale = \$request->getLocale();

        \$configuredTextDirection = \$dashboardDto->getTextDirection();
        \$localePrefix = strtolower(substr(\$locale, 0, 2));
        \$defaultTextDirection = \\in_array(\$localePrefix, ['ar', 'fa', 'he'], true) ? TextDirection::RTL : TextDirection::LTR;
        \$textDirection = \$configuredTextDirection ?? \$defaultTextDirection;

        \$translationDomain = \$dashboardDto->getTranslationDomain();

        \$translationParameters = [];
        if (null !== \$crudDto) {
            \$translationParameters['%entity_name%'] = \$entityName = basename(str_replace('\\\\', '/', \$crudDto->getEntityFqcn()));
            \$translationParameters['%entity_as_string%'] = null === \$entityDto ? '' : \$entityDto->toString();
            \$translationParameters['%entity_id%'] = \$entityId = \$request->query->get(EA::ENTITY_ID);
            \$translationParameters['%entity_short_id%'] = null === \$entityId ? null : u(\$entityId)->truncate(7)->toString();

            \$entityInstance = null === \$entityDto ? null : \$entityDto->getInstance();
            \$pageName = \$crudDto->getCurrentPage();

            \$singularLabel = \$crudDto->getEntityLabelInSingular(\$entityInstance, \$pageName);
            if (!\$singularLabel instanceof TranslatableInterface) {
                \$singularLabel = t(\$singularLabel ?? \$entityName, \$translationParameters, \$translationDomain);
            }

            \$pluralLabel = \$crudDto->getEntityLabelInPlural(\$entityInstance, \$pageName);
            if (!\$pluralLabel instanceof TranslatableInterface) {
                \$pluralLabel = t(\$pluralLabel ?? \$entityName, \$translationParameters, \$translationDomain);
            }

            \$crudDto->setEntityLabelInSingular(\$singularLabel);
            \$crudDto->setEntityLabelInPlural(\$pluralLabel);

            \$translationParameters['%entity_label_singular%'] = \$singularLabel;
            \$translationParameters['%entity_label_plural%'] = \$pluralLabel;
        }

        return new I18nDto(\$locale, \$textDirection, \$translationDomain, \$translationParameters);
    }

    public function getSearchDto(Request \$request, ?CrudDto \$crudDto): ?SearchDto
    {
        if (null === \$crudDto) {
            return null;
        }

        \$queryParams = \$request->query->all();
        \$searchableProperties = \$crudDto->getSearchFields();
        \$query = \$queryParams[EA::QUERY] ?? null;
        \$defaultSort = \$crudDto->getDefaultSort();
        \$customSort = \$queryParams[EA::SORT] ?? [];
        \$appliedFilters = \$queryParams[EA::FILTERS] ?? [];

        return new SearchDto(\$request, \$searchableProperties, \$query, \$defaultSort, \$customSort, \$appliedFilters);
    }

    // Copied from https://github.com/symfony/twig-bridge/blob/master/AppVariable.php
    // (c) Fabien Potencier <fabien@symfony.com> - MIT License
    private function getUser(?TokenStorageInterface \$tokenStorage): ?UserInterface
    {
        if (null === \$token = \$tokenStorage?->getToken()) {
            return null;
        }

        \$user = \$token->getUser();

        return \\is_object(\$user) ? \$user : null;
    }

    private function getEntityDto(Request \$request, ?CrudDto \$crudDto): ?EntityDto
    {
        if (null === \$crudDto) {
            return null;
        }

        return \$this->entityFactory->create(\$crudDto->getEntityFqcn(), \$request->query->get(EA::ENTITY_ID), \$crudDto->getEntityPermission());
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextDirection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\CrudControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetsDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\CrudDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\DashboardDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\I18nDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\TemplateRegistry;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use function Symfony\\Component\\String\\u;
use function Symfony\\Component\\Translation\\t;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AdminContextFactory
{
    private string \$cacheDir;
    private ?TokenStorageInterface \$tokenStorage;
    private MenuFactory \$menuFactory;
    private CrudControllerRegistry \$crudControllers;
    private EntityFactory \$entityFactory;

    public function __construct(string \$cacheDir, ?TokenStorageInterface \$tokenStorage, MenuFactory \$menuFactory, CrudControllerRegistry \$crudControllers, EntityFactory \$entityFactory)
    {
        \$this->cacheDir = \$cacheDir;
        \$this->tokenStorage = \$tokenStorage;
        \$this->menuFactory = \$menuFactory;
        \$this->crudControllers = \$crudControllers;
        \$this->entityFactory = \$entityFactory;
    }

    public function create(Request \$request, DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController): AdminContext
    {
        \$crudAction = \$request->query->get(EA::CRUD_ACTION);
        \$validPageNames = [Crud::PAGE_INDEX, Crud::PAGE_DETAIL, Crud::PAGE_EDIT, Crud::PAGE_NEW];
        \$pageName = \\in_array(\$crudAction, \$validPageNames, true) ? \$crudAction : null;

        \$dashboardDto = \$this->getDashboardDto(\$request, \$dashboardController);
        \$assetDto = \$this->getAssetDto(\$dashboardController, \$crudController, \$pageName);
        \$actionConfigDto = \$this->getActionConfig(\$dashboardController, \$crudController, \$pageName);
        \$filters = \$this->getFilters(\$dashboardController, \$crudController);

        \$crudDto = \$this->getCrudDto(\$this->crudControllers, \$dashboardController, \$crudController, \$actionConfigDto, \$filters, \$crudAction, \$pageName);
        \$entityDto = \$this->getEntityDto(\$request, \$crudDto);
        \$searchDto = \$this->getSearchDto(\$request, \$crudDto);
        \$i18nDto = \$this->getI18nDto(\$request, \$dashboardDto, \$crudDto, \$entityDto);
        \$templateRegistry = \$this->getTemplateRegistry(\$dashboardController, \$crudDto);
        \$user = \$this->getUser(\$this->tokenStorage);

        return new AdminContext(\$request, \$user, \$i18nDto, \$this->crudControllers, \$dashboardDto, \$dashboardController, \$assetDto, \$crudDto, \$entityDto, \$searchDto, \$this->menuFactory, \$templateRegistry);
    }

    private function getDashboardDto(Request \$request, DashboardControllerInterface \$dashboardControllerInstance): DashboardDto
    {
        \$dashboardRoutesCachePath = \$this->cacheDir.'/'.CacheWarmer::DASHBOARD_ROUTES_CACHE;
        \$dashboardControllerRoutes = !file_exists(\$dashboardRoutesCachePath) ? [] : require \$dashboardRoutesCachePath;
        \$dashboardController = \\get_class(\$dashboardControllerInstance).'::index';
        \$dashboardRouteName = null;

        foreach (\$dashboardControllerRoutes as \$routeName => \$controller) {
            if (\$controller === \$dashboardController) {
                // if present, remove the suffix of i18n route names (it's a two-letter locale at the end
                // of the route name; e.g. 'dashboard.en' -> remove '.en', 'admin.index.es' -> remove '.es')
                \$dashboardRouteName = preg_replace('~\\.\\w{2}\$~', '', \$routeName);

                break;
            }
        }

        if (null === \$dashboardRouteName) {
            throw new \\RuntimeException(sprintf('The name of the route associated to \"%s\" cannot be determined. Clear the application cache to run the EasyAdmin cache warmer, which generates the needed data to find this route.', \$dashboardController));
        }

        \$dashboardDto = \$dashboardControllerInstance->configureDashboard()->getAsDto();
        \$dashboardDto->setRouteName(\$dashboardRouteName);

        return \$dashboardDto;
    }

    private function getAssetDto(DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController, ?string \$pageName): AssetsDto
    {
        \$defaultAssets = \$dashboardController->configureAssets();

        if (null === \$crudController) {
            return \$defaultAssets->getAsDto();
        }

        return \$crudController->configureAssets(\$defaultAssets)->getAsDto()->loadedOn(\$pageName);
    }

    private function getCrudDto(CrudControllerRegistry \$crudControllers, DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController, ActionConfigDto \$actionConfigDto, FilterConfigDto \$filters, ?string \$crudAction, ?string \$pageName): ?CrudDto
    {
        if (null === \$crudController) {
            return null;
        }

        \$defaultCrud = \$dashboardController->configureCrud();
        \$crudDto = \$crudController->configureCrud(\$defaultCrud)->getAsDto();

        \$entityFqcn = \$crudControllers->findEntityFqcnByCrudFqcn(\\get_class(\$crudController));

        \$crudDto->setControllerFqcn(\\get_class(\$crudController));
        \$crudDto->setActionsConfig(\$actionConfigDto);
        \$crudDto->setFiltersConfig(\$filters);
        \$crudDto->setCurrentAction(\$crudAction);
        \$crudDto->setEntityFqcn(\$entityFqcn);
        \$crudDto->setPageName(\$pageName);

        return \$crudDto;
    }

    private function getActionConfig(DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController, ?string \$pageName): ActionConfigDto
    {
        if (null === \$crudController) {
            return new ActionConfigDto();
        }

        \$defaultActionConfig = \$dashboardController->configureActions();

        return \$crudController->configureActions(\$defaultActionConfig)->getAsDto(\$pageName);
    }

    private function getFilters(DashboardControllerInterface \$dashboardController, ?CrudControllerInterface \$crudController): FilterConfigDto
    {
        if (null === \$crudController) {
            return new FilterConfigDto();
        }

        \$defaultFilterConfig = \$dashboardController->configureFilters();

        return \$crudController->configureFilters(\$defaultFilterConfig)->getAsDto();
    }

    private function getTemplateRegistry(DashboardControllerInterface \$dashboardController, ?CrudDto \$crudDto): TemplateRegistry
    {
        \$templateRegistry = TemplateRegistry::new();

        \$defaultCrudDto = \$dashboardController->configureCrud()->getAsDto();
        \$templateRegistry->setTemplates(\$defaultCrudDto->getOverriddenTemplates());

        if (null !== \$crudDto) {
            \$templateRegistry->setTemplates(\$crudDto->getOverriddenTemplates());
        }

        return \$templateRegistry;
    }

    private function getI18nDto(Request \$request, DashboardDto \$dashboardDto, ?CrudDto \$crudDto, ?EntityDto \$entityDto): I18nDto
    {
        \$locale = \$request->getLocale();

        \$configuredTextDirection = \$dashboardDto->getTextDirection();
        \$localePrefix = strtolower(substr(\$locale, 0, 2));
        \$defaultTextDirection = \\in_array(\$localePrefix, ['ar', 'fa', 'he'], true) ? TextDirection::RTL : TextDirection::LTR;
        \$textDirection = \$configuredTextDirection ?? \$defaultTextDirection;

        \$translationDomain = \$dashboardDto->getTranslationDomain();

        \$translationParameters = [];
        if (null !== \$crudDto) {
            \$translationParameters['%entity_name%'] = \$entityName = basename(str_replace('\\\\', '/', \$crudDto->getEntityFqcn()));
            \$translationParameters['%entity_as_string%'] = null === \$entityDto ? '' : \$entityDto->toString();
            \$translationParameters['%entity_id%'] = \$entityId = \$request->query->get(EA::ENTITY_ID);
            \$translationParameters['%entity_short_id%'] = null === \$entityId ? null : u(\$entityId)->truncate(7)->toString();

            \$entityInstance = null === \$entityDto ? null : \$entityDto->getInstance();
            \$pageName = \$crudDto->getCurrentPage();

            \$singularLabel = \$crudDto->getEntityLabelInSingular(\$entityInstance, \$pageName);
            if (!\$singularLabel instanceof TranslatableInterface) {
                \$singularLabel = t(\$singularLabel ?? \$entityName, \$translationParameters, \$translationDomain);
            }

            \$pluralLabel = \$crudDto->getEntityLabelInPlural(\$entityInstance, \$pageName);
            if (!\$pluralLabel instanceof TranslatableInterface) {
                \$pluralLabel = t(\$pluralLabel ?? \$entityName, \$translationParameters, \$translationDomain);
            }

            \$crudDto->setEntityLabelInSingular(\$singularLabel);
            \$crudDto->setEntityLabelInPlural(\$pluralLabel);

            \$translationParameters['%entity_label_singular%'] = \$singularLabel;
            \$translationParameters['%entity_label_plural%'] = \$pluralLabel;
        }

        return new I18nDto(\$locale, \$textDirection, \$translationDomain, \$translationParameters);
    }

    public function getSearchDto(Request \$request, ?CrudDto \$crudDto): ?SearchDto
    {
        if (null === \$crudDto) {
            return null;
        }

        \$queryParams = \$request->query->all();
        \$searchableProperties = \$crudDto->getSearchFields();
        \$query = \$queryParams[EA::QUERY] ?? null;
        \$defaultSort = \$crudDto->getDefaultSort();
        \$customSort = \$queryParams[EA::SORT] ?? [];
        \$appliedFilters = \$queryParams[EA::FILTERS] ?? [];

        return new SearchDto(\$request, \$searchableProperties, \$query, \$defaultSort, \$customSort, \$appliedFilters);
    }

    // Copied from https://github.com/symfony/twig-bridge/blob/master/AppVariable.php
    // (c) Fabien Potencier <fabien@symfony.com> - MIT License
    private function getUser(?TokenStorageInterface \$tokenStorage): ?UserInterface
    {
        if (null === \$token = \$tokenStorage?->getToken()) {
            return null;
        }

        \$user = \$token->getUser();

        return \\is_object(\$user) ? \$user : null;
    }

    private function getEntityDto(Request \$request, ?CrudDto \$crudDto): ?EntityDto
    {
        if (null === \$crudDto) {
            return null;
        }

        return \$this->entityFactory->create(\$crudDto->getEntityFqcn(), \$request->query->get(EA::ENTITY_ID), \$crudDto->getEntityPermission());
    }
}
", "easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Factory\\AdminContextFactory.php");
    }
}
