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

/* easycorp/easyadmin-bundle/src/Dto/MenuItemDto.php */
class __TwigTemplate_5b2a100d12e128143e87554b5c171bfc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/MenuItemDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/MenuItemDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MenuItemDto
{
    public const TYPE_CRUD = 'crud';
    public const TYPE_URL = 'url';
    public const TYPE_SECTION = 'section';
    public const TYPE_EXIT_IMPERSONATION = 'exit_impersonation';
    public const TYPE_DASHBOARD = 'dashboard';
    public const TYPE_LOGOUT = 'logout';
    public const TYPE_SUBMENU = 'submenu';
    public const TYPE_ROUTE = 'route';

    private ?string \$type = null;
    private bool \$selected = false;
    private bool \$expanded = false;
    private TranslatableInterface|string|null \$label = null;
    private ?string \$icon = null;
    private string \$cssClass = '';
    private ?string \$permission = null;
    private ?string \$routeName = null;
    private ?array \$routeParameters = null;
    private ?string \$linkUrl = null;
    private string \$linkRel = '';
    private string \$linkTarget = '_self';
    private array \$translationParameters = [];
    private ?MenuItemBadgeDto \$badge = null;
    /** @var MenuItemDto[] */
    private array \$subItems = [];

    public function getType(): string
    {
        return \$this->type;
    }

    public function setType(string \$type): void
    {
        \$this->type = \$type;
    }

    /** @deprecated This was used in the past to get the selected menu item
     *              Now the active menu item is detected automatically via the Request data
     */
    public function getIndex(): int
    {
        return -1;
    }

    /** @deprecated This was used in the past to set the selected menu item
     *              Now the active menu item is detected automatically via the Request data
     */
    public function setIndex(int \$index): void
    {
        // do nothing...
    }

    /** @deprecated This was used in the past to get the selected menu subitem
     *              Now the active menu item is detected automatically via the Request data
     */
    public function getSubIndex(): int
    {
        return -1;
    }

    /** @deprecated This was used in the past to set the selected menu subitem
     *              Now the active menu item is detected automatically via the Request data
     */
    public function setSubIndex(int \$subIndex): void
    {
        // do nothing
    }

    /**
     * @return bool Returns true when this menu item is the selected one
     */
    public function isSelected(): bool
    {
        return \$this->selected;
    }

    public function setSelected(bool \$isSelected): void
    {
        \$this->selected = \$isSelected;
    }

    /**
     * @return bool Returns true when any of its subitems is selected
     */
    public function isExpanded(): bool
    {
        return \$this->expanded;
    }

    public function setExpanded(bool \$isExpanded): void
    {
        \$this->expanded = \$isExpanded;
    }

    public function getLabel(): TranslatableInterface|string
    {
        return \$this->label;
    }

    public function setLabel(TranslatableInterface|string \$label): void
    {
        \$this->label = \$label;
    }

    public function getIcon(): ?string
    {
        return \$this->icon;
    }

    public function setIcon(?string \$icon): void
    {
        \$this->icon = \$icon;
    }

    public function getLinkUrl(): ?string
    {
        return \$this->linkUrl;
    }

    public function setLinkUrl(?string \$linkUrl): void
    {
        \$this->linkUrl = \$linkUrl;
    }

    public function getRouteName(): ?string
    {
        return \$this->routeName;
    }

    public function setRouteName(?string \$routeName): void
    {
        \$this->routeName = \$routeName;
    }

    public function getRouteParameters(): ?array
    {
        return \$this->routeParameters;
    }

    public function setRouteParameter(string \$parameterName, mixed \$parameterValue): void
    {
        \$this->routeParameters[\$parameterName] = \$parameterValue;
    }

    public function setRouteParameters(?array \$routeParameters): void
    {
        \$this->routeParameters = \$routeParameters;
    }

    public function getPermission(): ?string
    {
        return \$this->permission;
    }

    public function setPermission(?string \$permission): void
    {
        \$this->permission = \$permission;
    }

    public function getCssClass(): string
    {
        return \$this->cssClass;
    }

    public function setCssClass(string \$cssClass): void
    {
        \$this->cssClass = \$cssClass;
    }

    public function getLinkRel(): string
    {
        return \$this->linkRel;
    }

    public function setLinkRel(string \$linkRel): void
    {
        \$this->linkRel = \$linkRel;
    }

    public function getLinkTarget(): string
    {
        return \$this->linkTarget;
    }

    public function setLinkTarget(string \$linkTarget): void
    {
        \$this->linkTarget = \$linkTarget;
    }

    public function getTranslationParameters(): array
    {
        return \$this->translationParameters;
    }

    public function setTranslationParameters(array \$translationParameters): void
    {
        \$this->translationParameters = \$translationParameters;
    }

    public function getBadge(): ?MenuItemBadgeDto
    {
        return \$this->badge;
    }

    public function setBadge(mixed \$content, string \$style): void
    {
        \$this->badge = new MenuItemBadgeDto(\$content, trim(\$style));
    }

    /**
     * @return MenuItemDto[]
     */
    public function getSubItems(): array
    {
        return \$this->subItems;
    }

    /**
     * @param MenuItemDto[] \$subItems
     */
    public function setSubItems(array \$subItems): void
    {
        \$this->subItems = \$subItems;
    }

    public function hasSubItems(): bool
    {
        return self::TYPE_SUBMENU === \$this->type && \\count(\$this->subItems) > 0;
    }

    public function isMenuSection(): bool
    {
        return self::TYPE_SECTION === \$this->type;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/MenuItemDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MenuItemDto
{
    public const TYPE_CRUD = 'crud';
    public const TYPE_URL = 'url';
    public const TYPE_SECTION = 'section';
    public const TYPE_EXIT_IMPERSONATION = 'exit_impersonation';
    public const TYPE_DASHBOARD = 'dashboard';
    public const TYPE_LOGOUT = 'logout';
    public const TYPE_SUBMENU = 'submenu';
    public const TYPE_ROUTE = 'route';

    private ?string \$type = null;
    private bool \$selected = false;
    private bool \$expanded = false;
    private TranslatableInterface|string|null \$label = null;
    private ?string \$icon = null;
    private string \$cssClass = '';
    private ?string \$permission = null;
    private ?string \$routeName = null;
    private ?array \$routeParameters = null;
    private ?string \$linkUrl = null;
    private string \$linkRel = '';
    private string \$linkTarget = '_self';
    private array \$translationParameters = [];
    private ?MenuItemBadgeDto \$badge = null;
    /** @var MenuItemDto[] */
    private array \$subItems = [];

    public function getType(): string
    {
        return \$this->type;
    }

    public function setType(string \$type): void
    {
        \$this->type = \$type;
    }

    /** @deprecated This was used in the past to get the selected menu item
     *              Now the active menu item is detected automatically via the Request data
     */
    public function getIndex(): int
    {
        return -1;
    }

    /** @deprecated This was used in the past to set the selected menu item
     *              Now the active menu item is detected automatically via the Request data
     */
    public function setIndex(int \$index): void
    {
        // do nothing...
    }

    /** @deprecated This was used in the past to get the selected menu subitem
     *              Now the active menu item is detected automatically via the Request data
     */
    public function getSubIndex(): int
    {
        return -1;
    }

    /** @deprecated This was used in the past to set the selected menu subitem
     *              Now the active menu item is detected automatically via the Request data
     */
    public function setSubIndex(int \$subIndex): void
    {
        // do nothing
    }

    /**
     * @return bool Returns true when this menu item is the selected one
     */
    public function isSelected(): bool
    {
        return \$this->selected;
    }

    public function setSelected(bool \$isSelected): void
    {
        \$this->selected = \$isSelected;
    }

    /**
     * @return bool Returns true when any of its subitems is selected
     */
    public function isExpanded(): bool
    {
        return \$this->expanded;
    }

    public function setExpanded(bool \$isExpanded): void
    {
        \$this->expanded = \$isExpanded;
    }

    public function getLabel(): TranslatableInterface|string
    {
        return \$this->label;
    }

    public function setLabel(TranslatableInterface|string \$label): void
    {
        \$this->label = \$label;
    }

    public function getIcon(): ?string
    {
        return \$this->icon;
    }

    public function setIcon(?string \$icon): void
    {
        \$this->icon = \$icon;
    }

    public function getLinkUrl(): ?string
    {
        return \$this->linkUrl;
    }

    public function setLinkUrl(?string \$linkUrl): void
    {
        \$this->linkUrl = \$linkUrl;
    }

    public function getRouteName(): ?string
    {
        return \$this->routeName;
    }

    public function setRouteName(?string \$routeName): void
    {
        \$this->routeName = \$routeName;
    }

    public function getRouteParameters(): ?array
    {
        return \$this->routeParameters;
    }

    public function setRouteParameter(string \$parameterName, mixed \$parameterValue): void
    {
        \$this->routeParameters[\$parameterName] = \$parameterValue;
    }

    public function setRouteParameters(?array \$routeParameters): void
    {
        \$this->routeParameters = \$routeParameters;
    }

    public function getPermission(): ?string
    {
        return \$this->permission;
    }

    public function setPermission(?string \$permission): void
    {
        \$this->permission = \$permission;
    }

    public function getCssClass(): string
    {
        return \$this->cssClass;
    }

    public function setCssClass(string \$cssClass): void
    {
        \$this->cssClass = \$cssClass;
    }

    public function getLinkRel(): string
    {
        return \$this->linkRel;
    }

    public function setLinkRel(string \$linkRel): void
    {
        \$this->linkRel = \$linkRel;
    }

    public function getLinkTarget(): string
    {
        return \$this->linkTarget;
    }

    public function setLinkTarget(string \$linkTarget): void
    {
        \$this->linkTarget = \$linkTarget;
    }

    public function getTranslationParameters(): array
    {
        return \$this->translationParameters;
    }

    public function setTranslationParameters(array \$translationParameters): void
    {
        \$this->translationParameters = \$translationParameters;
    }

    public function getBadge(): ?MenuItemBadgeDto
    {
        return \$this->badge;
    }

    public function setBadge(mixed \$content, string \$style): void
    {
        \$this->badge = new MenuItemBadgeDto(\$content, trim(\$style));
    }

    /**
     * @return MenuItemDto[]
     */
    public function getSubItems(): array
    {
        return \$this->subItems;
    }

    /**
     * @param MenuItemDto[] \$subItems
     */
    public function setSubItems(array \$subItems): void
    {
        \$this->subItems = \$subItems;
    }

    public function hasSubItems(): bool
    {
        return self::TYPE_SUBMENU === \$this->type && \\count(\$this->subItems) > 0;
    }

    public function isMenuSection(): bool
    {
        return self::TYPE_SECTION === \$this->type;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/MenuItemDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\MenuItemDto.php");
    }
}
