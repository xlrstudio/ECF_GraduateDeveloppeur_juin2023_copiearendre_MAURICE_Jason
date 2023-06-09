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

/* easycorp/easyadmin-bundle/src/Context/AdminContext.php */
class __TwigTemplate_34ff2f754cf39df72931fac2b3c68b06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Context/AdminContext.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Context/AdminContext.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Context;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\UserMenu;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetsDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\CrudDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\DashboardDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\I18nDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\LocaleDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MainMenuDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\UserMenuDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\MenuFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\TemplateRegistry;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * A context object that stores all the state and config of the current admin request.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AdminContext
{
    private Request \$request;
    private ?UserInterface \$user;
    private I18nDto \$i18nDto;
    private CrudControllerRegistry \$crudControllers;
    private ?EntityDto \$entityDto;
    private DashboardDto \$dashboardDto;
    private DashboardControllerInterface \$dashboardControllerInstance;
    private AssetsDto \$assetDto;
    private ?CrudDto \$crudDto;
    private ?SearchDto \$searchDto;
    private MenuFactory \$menuFactory;
    private TemplateRegistry \$templateRegistry;
    private ?MainMenuDto \$mainMenuDto = null;
    private ?UserMenuDto \$userMenuDto = null;

    public function __construct(Request \$request, ?UserInterface \$user, I18nDto \$i18nDto, CrudControllerRegistry \$crudControllers, DashboardDto \$dashboardDto, DashboardControllerInterface \$dashboardController, AssetsDto \$assetDto, ?CrudDto \$crudDto, ?EntityDto \$entityDto, ?SearchDto \$searchDto, MenuFactory \$menuFactory, TemplateRegistry \$templateRegistry)
    {
        \$this->request = \$request;
        \$this->user = \$user;
        \$this->i18nDto = \$i18nDto;
        \$this->crudControllers = \$crudControllers;
        \$this->dashboardDto = \$dashboardDto;
        \$this->dashboardControllerInstance = \$dashboardController;
        \$this->crudDto = \$crudDto;
        \$this->assetDto = \$assetDto;
        \$this->entityDto = \$entityDto;
        \$this->searchDto = \$searchDto;
        \$this->menuFactory = \$menuFactory;
        \$this->templateRegistry = \$templateRegistry;
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getReferrer(): ?string
    {
        return \$this->request->query->get(EA::REFERRER);
    }

    public function getI18n(): I18nDto
    {
        return \$this->i18nDto;
    }

    public function getCrudControllers(): CrudControllerRegistry
    {
        return \$this->crudControllers;
    }

    public function getEntity(): EntityDto
    {
        return \$this->entityDto;
    }

    public function getUser(): ?UserInterface
    {
        return \$this->user;
    }

    public function getAssets(): AssetsDto
    {
        return \$this->assetDto;
    }

    public function getSignedUrls(): bool
    {
        return \$this->dashboardDto->getSignedUrls();
    }

    public function getAbsoluteUrls(): bool
    {
        return \$this->dashboardDto->getAbsoluteUrls();
    }

    public function getDashboardTitle(): string
    {
        return \$this->dashboardDto->getTitle();
    }

    public function getDashboardFaviconPath(): string
    {
        return \$this->dashboardDto->getFaviconPath();
    }

    public function getDashboardControllerFqcn(): string
    {
        return \\get_class(\$this->dashboardControllerInstance);
    }

    public function getDashboardRouteName(): string
    {
        return \$this->dashboardDto->getRouteName();
    }

    public function getDashboardContentWidth(): string
    {
        return \$this->dashboardDto->getContentWidth();
    }

    public function getDashboardSidebarWidth(): string
    {
        return \$this->dashboardDto->getSidebarWidth();
    }

    public function getDashboardHasDarkModeEnabled(): bool
    {
        return \$this->dashboardDto->isDarkModeEnabled();
    }

    /**
     * @return LocaleDto[]
     */
    public function getDashboardLocales(): array
    {
        return \$this->dashboardDto->getLocales();
    }

    public function getMainMenu(): MainMenuDto
    {
        if (null !== \$this->mainMenuDto) {
            return \$this->mainMenuDto;
        }

        \$configuredMenuItems = \$this->dashboardControllerInstance->configureMenuItems();
        \$mainMenuItems = \\is_array(\$configuredMenuItems) ? \$configuredMenuItems : iterator_to_array(\$configuredMenuItems, false);

        return \$this->mainMenuDto = \$this->menuFactory->createMainMenu(\$mainMenuItems);
    }

    public function getUserMenu(): UserMenuDto
    {
        if (null !== \$this->userMenuDto) {
            return \$this->userMenuDto;
        }

        if (null === \$this->user) {
            return UserMenu::new()->getAsDto();
        }

        \$userMenu = \$this->dashboardControllerInstance->configureUserMenu(\$this->user);

        return \$this->userMenuDto = \$this->menuFactory->createUserMenu(\$userMenu);
    }

    public function getCrud(): ?CrudDto
    {
        return \$this->crudDto;
    }

    public function getSearch(): ?SearchDto
    {
        return \$this->searchDto;
    }

    public function getTemplatePath(string \$templateName): string
    {
        return \$this->templateRegistry->get(\$templateName);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Context/AdminContext.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Context;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\UserMenu;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetsDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\CrudDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\DashboardDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\I18nDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\LocaleDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MainMenuDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\UserMenuDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\MenuFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\TemplateRegistry;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * A context object that stores all the state and config of the current admin request.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AdminContext
{
    private Request \$request;
    private ?UserInterface \$user;
    private I18nDto \$i18nDto;
    private CrudControllerRegistry \$crudControllers;
    private ?EntityDto \$entityDto;
    private DashboardDto \$dashboardDto;
    private DashboardControllerInterface \$dashboardControllerInstance;
    private AssetsDto \$assetDto;
    private ?CrudDto \$crudDto;
    private ?SearchDto \$searchDto;
    private MenuFactory \$menuFactory;
    private TemplateRegistry \$templateRegistry;
    private ?MainMenuDto \$mainMenuDto = null;
    private ?UserMenuDto \$userMenuDto = null;

    public function __construct(Request \$request, ?UserInterface \$user, I18nDto \$i18nDto, CrudControllerRegistry \$crudControllers, DashboardDto \$dashboardDto, DashboardControllerInterface \$dashboardController, AssetsDto \$assetDto, ?CrudDto \$crudDto, ?EntityDto \$entityDto, ?SearchDto \$searchDto, MenuFactory \$menuFactory, TemplateRegistry \$templateRegistry)
    {
        \$this->request = \$request;
        \$this->user = \$user;
        \$this->i18nDto = \$i18nDto;
        \$this->crudControllers = \$crudControllers;
        \$this->dashboardDto = \$dashboardDto;
        \$this->dashboardControllerInstance = \$dashboardController;
        \$this->crudDto = \$crudDto;
        \$this->assetDto = \$assetDto;
        \$this->entityDto = \$entityDto;
        \$this->searchDto = \$searchDto;
        \$this->menuFactory = \$menuFactory;
        \$this->templateRegistry = \$templateRegistry;
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getReferrer(): ?string
    {
        return \$this->request->query->get(EA::REFERRER);
    }

    public function getI18n(): I18nDto
    {
        return \$this->i18nDto;
    }

    public function getCrudControllers(): CrudControllerRegistry
    {
        return \$this->crudControllers;
    }

    public function getEntity(): EntityDto
    {
        return \$this->entityDto;
    }

    public function getUser(): ?UserInterface
    {
        return \$this->user;
    }

    public function getAssets(): AssetsDto
    {
        return \$this->assetDto;
    }

    public function getSignedUrls(): bool
    {
        return \$this->dashboardDto->getSignedUrls();
    }

    public function getAbsoluteUrls(): bool
    {
        return \$this->dashboardDto->getAbsoluteUrls();
    }

    public function getDashboardTitle(): string
    {
        return \$this->dashboardDto->getTitle();
    }

    public function getDashboardFaviconPath(): string
    {
        return \$this->dashboardDto->getFaviconPath();
    }

    public function getDashboardControllerFqcn(): string
    {
        return \\get_class(\$this->dashboardControllerInstance);
    }

    public function getDashboardRouteName(): string
    {
        return \$this->dashboardDto->getRouteName();
    }

    public function getDashboardContentWidth(): string
    {
        return \$this->dashboardDto->getContentWidth();
    }

    public function getDashboardSidebarWidth(): string
    {
        return \$this->dashboardDto->getSidebarWidth();
    }

    public function getDashboardHasDarkModeEnabled(): bool
    {
        return \$this->dashboardDto->isDarkModeEnabled();
    }

    /**
     * @return LocaleDto[]
     */
    public function getDashboardLocales(): array
    {
        return \$this->dashboardDto->getLocales();
    }

    public function getMainMenu(): MainMenuDto
    {
        if (null !== \$this->mainMenuDto) {
            return \$this->mainMenuDto;
        }

        \$configuredMenuItems = \$this->dashboardControllerInstance->configureMenuItems();
        \$mainMenuItems = \\is_array(\$configuredMenuItems) ? \$configuredMenuItems : iterator_to_array(\$configuredMenuItems, false);

        return \$this->mainMenuDto = \$this->menuFactory->createMainMenu(\$mainMenuItems);
    }

    public function getUserMenu(): UserMenuDto
    {
        if (null !== \$this->userMenuDto) {
            return \$this->userMenuDto;
        }

        if (null === \$this->user) {
            return UserMenu::new()->getAsDto();
        }

        \$userMenu = \$this->dashboardControllerInstance->configureUserMenu(\$this->user);

        return \$this->userMenuDto = \$this->menuFactory->createUserMenu(\$userMenu);
    }

    public function getCrud(): ?CrudDto
    {
        return \$this->crudDto;
    }

    public function getSearch(): ?SearchDto
    {
        return \$this->searchDto;
    }

    public function getTemplatePath(string \$templateName): string
    {
        return \$this->templateRegistry->get(\$templateName);
    }
}
", "easycorp/easyadmin-bundle/src/Context/AdminContext.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Context\\AdminContext.php");
    }
}
