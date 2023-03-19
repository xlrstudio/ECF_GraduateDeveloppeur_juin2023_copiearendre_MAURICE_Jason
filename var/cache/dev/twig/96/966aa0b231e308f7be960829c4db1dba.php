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

/* easycorp/easyadmin-bundle/src/Registry/DashboardControllerRegistry.php */
class __TwigTemplate_e0268c81fbb5ce094714760b0f67fc3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Registry/DashboardControllerRegistry.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Registry/DashboardControllerRegistry.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Registry;

use EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DashboardControllerRegistry
{
    private array \$controllerFqcnToContextIdMap = [];
    private array \$contextIdToControllerFqcnMap;
    private array \$controllerFqcnToRouteMap = [];
    private array \$routeToControllerFqcnMap;

    public function __construct(string \$kernelSecret, string \$cacheDir, array \$dashboardControllersFqcn)
    {
        foreach (\$dashboardControllersFqcn as \$controllerFqcn) {
            \$this->controllerFqcnToContextIdMap[\$controllerFqcn] = substr(sha1(\$kernelSecret.\$controllerFqcn), 0, 7);
        }

        \$this->contextIdToControllerFqcnMap = array_flip(\$this->controllerFqcnToContextIdMap);

        \$dashboardRoutesCachePath = \$cacheDir.'/'.CacheWarmer::DASHBOARD_ROUTES_CACHE;
        \$dashboardControllerRoutes = !file_exists(\$dashboardRoutesCachePath) ? [] : require \$dashboardRoutesCachePath;
        foreach (\$dashboardControllerRoutes as \$routeName => \$controller) {
            \$this->controllerFqcnToRouteMap[u(\$controller)->before('::')->toString()] = \$routeName;
        }

        \$this->routeToControllerFqcnMap = array_flip(\$this->controllerFqcnToRouteMap);
    }

    public function getControllerFqcnByContextId(string \$contextId): ?string
    {
        return \$this->contextIdToControllerFqcnMap[\$contextId] ?? null;
    }

    public function getContextIdByControllerFqcn(string \$controllerFqcn): ?string
    {
        return \$this->controllerFqcnToContextIdMap[\$controllerFqcn] ?? null;
    }

    public function getControllerFqcnByRoute(string \$routeName): ?string
    {
        return \$this->routeToControllerFqcnMap[\$routeName] ?? null;
    }

    public function getRouteByControllerFqcn(string \$controllerFqcn): ?string
    {
        return \$this->controllerFqcnToRouteMap[\$controllerFqcn] ?? null;
    }

    public function getNumberOfDashboards(): int
    {
        return \\count(\$this->controllerFqcnToContextIdMap);
    }

    public function getFirstDashboardRoute(): ?string
    {
        return \\count(\$this->controllerFqcnToRouteMap) < 1 ? null : \$this->controllerFqcnToRouteMap[array_key_first(\$this->controllerFqcnToRouteMap)];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Registry/DashboardControllerRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Registry;

use EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DashboardControllerRegistry
{
    private array \$controllerFqcnToContextIdMap = [];
    private array \$contextIdToControllerFqcnMap;
    private array \$controllerFqcnToRouteMap = [];
    private array \$routeToControllerFqcnMap;

    public function __construct(string \$kernelSecret, string \$cacheDir, array \$dashboardControllersFqcn)
    {
        foreach (\$dashboardControllersFqcn as \$controllerFqcn) {
            \$this->controllerFqcnToContextIdMap[\$controllerFqcn] = substr(sha1(\$kernelSecret.\$controllerFqcn), 0, 7);
        }

        \$this->contextIdToControllerFqcnMap = array_flip(\$this->controllerFqcnToContextIdMap);

        \$dashboardRoutesCachePath = \$cacheDir.'/'.CacheWarmer::DASHBOARD_ROUTES_CACHE;
        \$dashboardControllerRoutes = !file_exists(\$dashboardRoutesCachePath) ? [] : require \$dashboardRoutesCachePath;
        foreach (\$dashboardControllerRoutes as \$routeName => \$controller) {
            \$this->controllerFqcnToRouteMap[u(\$controller)->before('::')->toString()] = \$routeName;
        }

        \$this->routeToControllerFqcnMap = array_flip(\$this->controllerFqcnToRouteMap);
    }

    public function getControllerFqcnByContextId(string \$contextId): ?string
    {
        return \$this->contextIdToControllerFqcnMap[\$contextId] ?? null;
    }

    public function getContextIdByControllerFqcn(string \$controllerFqcn): ?string
    {
        return \$this->controllerFqcnToContextIdMap[\$controllerFqcn] ?? null;
    }

    public function getControllerFqcnByRoute(string \$routeName): ?string
    {
        return \$this->routeToControllerFqcnMap[\$routeName] ?? null;
    }

    public function getRouteByControllerFqcn(string \$controllerFqcn): ?string
    {
        return \$this->controllerFqcnToRouteMap[\$controllerFqcn] ?? null;
    }

    public function getNumberOfDashboards(): int
    {
        return \\count(\$this->controllerFqcnToContextIdMap);
    }

    public function getFirstDashboardRoute(): ?string
    {
        return \\count(\$this->controllerFqcnToRouteMap) < 1 ? null : \$this->controllerFqcnToRouteMap[array_key_first(\$this->controllerFqcnToRouteMap)];
    }
}
", "easycorp/easyadmin-bundle/src/Registry/DashboardControllerRegistry.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Registry\\DashboardControllerRegistry.php");
    }
}
