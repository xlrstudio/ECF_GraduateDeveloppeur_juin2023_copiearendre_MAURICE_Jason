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

/* easycorp/easyadmin-bundle/src/Config/UserMenu.php */
class __TwigTemplate_6bebbfba3906d444938426152acc2879 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/UserMenu.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/UserMenu.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\UserMenuDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class UserMenu
{
    private UserMenuDto \$dto;

    private function __construct(UserMenuDto \$userMenuDto)
    {
        \$this->dto = \$userMenuDto;
    }

    public static function new(): self
    {
        \$dto = new UserMenuDto();

        return new self(\$dto);
    }

    public function displayUserName(bool \$isDisplayed = true): self
    {
        \$this->dto->setDisplayName(\$isDisplayed);

        return \$this;
    }

    public function displayUserAvatar(bool \$isDisplayed = true): self
    {
        \$this->dto->setDisplayAvatar(\$isDisplayed);

        return \$this;
    }

    public function setName(?string \$name): self
    {
        \$this->dto->setName(\$name);

        return \$this;
    }

    public function setAvatarUrl(?string \$url): self
    {
        \$this->dto->setAvatarUrl(\$url);

        return \$this;
    }

    public function setGravatarEmail(string \$emailAddress): self
    {
        \$hash = md5(strtolower(trim(\$emailAddress)));
        \$this->dto->setAvatarUrl(sprintf('https://www.gravatar.com/avatar/%s', \$hash));

        return \$this;
    }

    /**
     * @param MenuItemInterface[] \$items
     */
    public function addMenuItems(array \$items): self
    {
        \$this->dto->setItems(array_merge(\$items, \$this->dto->getItems()));

        return \$this;
    }

    /**
     * @param MenuItemInterface[] \$items
     */
    public function setMenuItems(array \$items): self
    {
        \$this->dto->setItems(\$items);

        return \$this;
    }

    public function getAsDto(): UserMenuDto
    {
        return \$this->dto;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/UserMenu.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\UserMenuDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class UserMenu
{
    private UserMenuDto \$dto;

    private function __construct(UserMenuDto \$userMenuDto)
    {
        \$this->dto = \$userMenuDto;
    }

    public static function new(): self
    {
        \$dto = new UserMenuDto();

        return new self(\$dto);
    }

    public function displayUserName(bool \$isDisplayed = true): self
    {
        \$this->dto->setDisplayName(\$isDisplayed);

        return \$this;
    }

    public function displayUserAvatar(bool \$isDisplayed = true): self
    {
        \$this->dto->setDisplayAvatar(\$isDisplayed);

        return \$this;
    }

    public function setName(?string \$name): self
    {
        \$this->dto->setName(\$name);

        return \$this;
    }

    public function setAvatarUrl(?string \$url): self
    {
        \$this->dto->setAvatarUrl(\$url);

        return \$this;
    }

    public function setGravatarEmail(string \$emailAddress): self
    {
        \$hash = md5(strtolower(trim(\$emailAddress)));
        \$this->dto->setAvatarUrl(sprintf('https://www.gravatar.com/avatar/%s', \$hash));

        return \$this;
    }

    /**
     * @param MenuItemInterface[] \$items
     */
    public function addMenuItems(array \$items): self
    {
        \$this->dto->setItems(array_merge(\$items, \$this->dto->getItems()));

        return \$this;
    }

    /**
     * @param MenuItemInterface[] \$items
     */
    public function setMenuItems(array \$items): self
    {
        \$this->dto->setItems(\$items);

        return \$this;
    }

    public function getAsDto(): UserMenuDto
    {
        return \$this->dto;
    }
}
", "easycorp/easyadmin-bundle/src/Config/UserMenu.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\UserMenu.php");
    }
}
