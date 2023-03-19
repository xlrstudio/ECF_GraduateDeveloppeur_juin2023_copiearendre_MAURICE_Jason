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

/* easycorp/easyadmin-bundle/src/Config/MenuItem.php */
class __TwigTemplate_2a2dfc315476da4ebc1d84cdad5b87c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/MenuItem.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/MenuItem.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\CrudMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\DashboardMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\ExitImpersonationMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\LogoutMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\RouteMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\SectionMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\SubMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\UrlMenuItem;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MenuItem
{
    private function __construct()
    {
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToCrud(TranslatableInterface|string \$label, ?string \$icon, string \$entityFqcn): CrudMenuItem
    {
        return new CrudMenuItem(\$label, \$icon, \$entityFqcn);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToDashboard(TranslatableInterface|string \$label, ?string \$icon = null): DashboardMenuItem
    {
        return new DashboardMenuItem(\$label, \$icon);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToExitImpersonation(TranslatableInterface|string \$label, ?string \$icon = null): ExitImpersonationMenuItem
    {
        return new ExitImpersonationMenuItem(\$label, \$icon);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToLogout(TranslatableInterface|string \$label, ?string \$icon = null): LogoutMenuItem
    {
        return new LogoutMenuItem(\$label, \$icon);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToRoute(TranslatableInterface|string \$label, ?string \$icon, string \$routeName, array \$routeParameters = []): RouteMenuItem
    {
        return new RouteMenuItem(\$label, \$icon, \$routeName, \$routeParameters);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToUrl(TranslatableInterface|string \$label, ?string \$icon, string \$url): UrlMenuItem
    {
        return new UrlMenuItem(\$label, \$icon, \$url);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function section(TranslatableInterface|string|null \$label = null, ?string \$icon = null): SectionMenuItem
    {
        return new SectionMenuItem(\$label, \$icon);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function subMenu(TranslatableInterface|string \$label, ?string \$icon = null): SubMenuItem
    {
        return new SubMenuItem(\$label, \$icon);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/MenuItem.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\CrudMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\DashboardMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\ExitImpersonationMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\LogoutMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\RouteMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\SectionMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\SubMenuItem;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu\\UrlMenuItem;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MenuItem
{
    private function __construct()
    {
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToCrud(TranslatableInterface|string \$label, ?string \$icon, string \$entityFqcn): CrudMenuItem
    {
        return new CrudMenuItem(\$label, \$icon, \$entityFqcn);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToDashboard(TranslatableInterface|string \$label, ?string \$icon = null): DashboardMenuItem
    {
        return new DashboardMenuItem(\$label, \$icon);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToExitImpersonation(TranslatableInterface|string \$label, ?string \$icon = null): ExitImpersonationMenuItem
    {
        return new ExitImpersonationMenuItem(\$label, \$icon);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToLogout(TranslatableInterface|string \$label, ?string \$icon = null): LogoutMenuItem
    {
        return new LogoutMenuItem(\$label, \$icon);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToRoute(TranslatableInterface|string \$label, ?string \$icon, string \$routeName, array \$routeParameters = []): RouteMenuItem
    {
        return new RouteMenuItem(\$label, \$icon, \$routeName, \$routeParameters);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function linkToUrl(TranslatableInterface|string \$label, ?string \$icon, string \$url): UrlMenuItem
    {
        return new UrlMenuItem(\$label, \$icon, \$url);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function section(TranslatableInterface|string|null \$label = null, ?string \$icon = null): SectionMenuItem
    {
        return new SectionMenuItem(\$label, \$icon);
    }

    /**
     * @param string|null \$icon The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function subMenu(TranslatableInterface|string \$label, ?string \$icon = null): SubMenuItem
    {
        return new SubMenuItem(\$label, \$icon);
    }
}
", "easycorp/easyadmin-bundle/src/Config/MenuItem.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\MenuItem.php");
    }
}
