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

/* easycorp/easyadmin-bundle/src/Menu/MenuItemMatcherInterface.php */
class __TwigTemplate_3d530da242914b62d4880bb76be70f92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Menu/MenuItemMatcherInterface.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Menu/MenuItemMatcherInterface.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface MenuItemMatcherInterface
{
    /**
     * @return bool Returns true when this menu item is the selected one
     */
    public function isSelected(MenuItemDto \$menuItemDto): bool;

    /**
     * @return bool Returns true when any of the subitems of the menu item is selected
     */
    public function isExpanded(MenuItemDto \$menuItemDto): bool;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Menu/MenuItemMatcherInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface MenuItemMatcherInterface
{
    /**
     * @return bool Returns true when this menu item is the selected one
     */
    public function isSelected(MenuItemDto \$menuItemDto): bool;

    /**
     * @return bool Returns true when any of the subitems of the menu item is selected
     */
    public function isExpanded(MenuItemDto \$menuItemDto): bool;
}
", "easycorp/easyadmin-bundle/src/Menu/MenuItemMatcherInterface.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Menu\\MenuItemMatcherInterface.php");
    }
}
