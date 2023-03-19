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

/* easycorp/easyadmin-bundle/src/Dto/UserMenuDto.php */
class __TwigTemplate_7581a59a41922c1c4e43e4473ad67d31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/UserMenuDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/UserMenuDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class UserMenuDto
{
    private bool \$displayName = true;
    private bool \$displayAvatar = true;
    private ?string \$name = null;
    private ?string \$avatarUrl = null;
    /** @var MenuItemDto[] */
    private array \$items = [];

    public function isNameDisplayed(): bool
    {
        return \$this->displayName;
    }

    public function setDisplayName(bool \$isDisplayed): void
    {
        \$this->displayName = \$isDisplayed;
    }

    public function isAvatarDisplayed(): bool
    {
        return \$this->displayAvatar;
    }

    public function setDisplayAvatar(bool \$isDisplayed): void
    {
        \$this->displayAvatar = \$isDisplayed;
    }

    public function getName(): ?string
    {
        return \$this->name;
    }

    public function setName(?string \$name): void
    {
        \$this->name = \$name;
    }

    public function getAvatarUrl(): ?string
    {
        return \$this->avatarUrl;
    }

    public function setAvatarUrl(?string \$url): void
    {
        \$this->avatarUrl = \$url;
    }

    public function getItems(): array
    {
        return \$this->items;
    }

    /**
     * When configuring the application, you are passed an array of
     * MenuItemInterface objects; after building the user menu contents,
     * this method is called with MenuItemDto objects.
     *
     * @param MenuItemInterface[]|MenuItemDto[] \$items
     */
    public function setItems(array \$items): void
    {
        \$this->items = \$items;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/UserMenuDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class UserMenuDto
{
    private bool \$displayName = true;
    private bool \$displayAvatar = true;
    private ?string \$name = null;
    private ?string \$avatarUrl = null;
    /** @var MenuItemDto[] */
    private array \$items = [];

    public function isNameDisplayed(): bool
    {
        return \$this->displayName;
    }

    public function setDisplayName(bool \$isDisplayed): void
    {
        \$this->displayName = \$isDisplayed;
    }

    public function isAvatarDisplayed(): bool
    {
        return \$this->displayAvatar;
    }

    public function setDisplayAvatar(bool \$isDisplayed): void
    {
        \$this->displayAvatar = \$isDisplayed;
    }

    public function getName(): ?string
    {
        return \$this->name;
    }

    public function setName(?string \$name): void
    {
        \$this->name = \$name;
    }

    public function getAvatarUrl(): ?string
    {
        return \$this->avatarUrl;
    }

    public function setAvatarUrl(?string \$url): void
    {
        \$this->avatarUrl = \$url;
    }

    public function getItems(): array
    {
        return \$this->items;
    }

    /**
     * When configuring the application, you are passed an array of
     * MenuItemInterface objects; after building the user menu contents,
     * this method is called with MenuItemDto objects.
     *
     * @param MenuItemInterface[]|MenuItemDto[] \$items
     */
    public function setItems(array \$items): void
    {
        \$this->items = \$items;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/UserMenuDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\UserMenuDto.php");
    }
}
