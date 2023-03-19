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

/* easycorp/easyadmin-bundle/src/Config/Menu/ExitImpersonationMenuItem.php */
class __TwigTemplate_fb640c746c0cc2b6443a72debcff3c08 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Menu/ExitImpersonationMenuItem.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Menu/ExitImpersonationMenuItem.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @see EasyCorp\\Bundle\\EasyAdminBundle\\Config\\MenuItem::linkToExitImpersonation()
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ExitImpersonationMenuItem implements MenuItemInterface
{
    use MenuItemTrait;

    public function __construct(TranslatableInterface|string \$label, ?string \$icon)
    {
        \$this->dto = new MenuItemDto();

        \$this->dto->setType(MenuItemDto::TYPE_EXIT_IMPERSONATION);
        \$this->dto->setLabel(\$label);
        \$this->dto->setIcon(\$icon);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/Menu/ExitImpersonationMenuItem.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @see EasyCorp\\Bundle\\EasyAdminBundle\\Config\\MenuItem::linkToExitImpersonation()
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ExitImpersonationMenuItem implements MenuItemInterface
{
    use MenuItemTrait;

    public function __construct(TranslatableInterface|string \$label, ?string \$icon)
    {
        \$this->dto = new MenuItemDto();

        \$this->dto->setType(MenuItemDto::TYPE_EXIT_IMPERSONATION);
        \$this->dto->setLabel(\$label);
        \$this->dto->setIcon(\$icon);
    }
}
", "easycorp/easyadmin-bundle/src/Config/Menu/ExitImpersonationMenuItem.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Menu\\ExitImpersonationMenuItem.php");
    }
}
