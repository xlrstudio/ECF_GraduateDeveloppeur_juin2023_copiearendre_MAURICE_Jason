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

/* easycorp/easyadmin-bundle/src/Contracts/Controller/DashboardControllerInterface.php */
class __TwigTemplate_bc3bfa073a79c8a774028cd082250ad1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Contracts/Controller/DashboardControllerInterface.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Contracts/Controller/DashboardControllerInterface.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Dashboard;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\UserMenu;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * This must be implemented by all backend dashboards.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface DashboardControllerInterface
{
    public function configureDashboard(): Dashboard;

    public function configureAssets(): Assets;

    /**
     * @return MenuItemInterface[]
     *
     * @psalm-return iterable<MenuItemInterface>
     */
    public function configureMenuItems(): iterable;

    public function configureUserMenu(UserInterface \$user): UserMenu;

    public function configureCrud(): Crud;

    public function configureActions(): Actions;

    public function configureFilters(): Filters;

    public function index(): Response;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Contracts/Controller/DashboardControllerInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Dashboard;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\UserMenu;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * This must be implemented by all backend dashboards.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface DashboardControllerInterface
{
    public function configureDashboard(): Dashboard;

    public function configureAssets(): Assets;

    /**
     * @return MenuItemInterface[]
     *
     * @psalm-return iterable<MenuItemInterface>
     */
    public function configureMenuItems(): iterable;

    public function configureUserMenu(UserInterface \$user): UserMenu;

    public function configureCrud(): Crud;

    public function configureActions(): Actions;

    public function configureFilters(): Filters;

    public function index(): Response;
}
", "easycorp/easyadmin-bundle/src/Contracts/Controller/DashboardControllerInterface.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Contracts\\Controller\\DashboardControllerInterface.php");
    }
}
