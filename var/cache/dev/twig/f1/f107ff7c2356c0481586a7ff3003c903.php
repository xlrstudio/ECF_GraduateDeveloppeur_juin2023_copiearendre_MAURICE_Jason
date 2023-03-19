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

/* easycorp/easyadmin-bundle/src/Cache/CacheWarmer.php */
class __TwigTemplate_7ee483016c18d2e2039b032629689f6a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Cache/CacheWarmer.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Cache/CacheWarmer.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Cache;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouterInterface;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CacheWarmer implements CacheWarmerInterface
{
    public const DASHBOARD_ROUTES_CACHE = 'easyadmin/routes-dashboard.php';

    private RouterInterface \$router;

    public function __construct(RouterInterface \$router)
    {
        \$this->router = \$router;
    }

    public function isOptional(): bool
    {
        return false;
    }

    public function warmUp(string \$cacheDir): array
    {
        \$allRoutes = \$this->router->getRouteCollection();
        \$dashboardRoutes = [];

        /** @var Route \$route */
        foreach (\$allRoutes as \$routeName => \$route) {
            \$controller = \$route->getDefault('_controller') ?? '';
            // controller is defined as \$router->add('admin', '/')->controller(DashboardController::class)
            if (\\is_string(\$controller) && '' !== \$controller && class_exists(\$controller)) {
                \$controller .= '::__invoke';
            }

            // controller is defined as \$router->add('admin', '/')->controller([DashboardController::class, 'index'])
            if (\\is_array(\$controller)) {
                \$controller = \$controller[0].'::'.(\$controller[1] ?? '__invoke');
            }

            \$controller = u(\$controller);
            if (!\$controller->endsWith('::index') && !\$controller->endsWith('::__invoke')) {
                continue;
            }

            \$controllerFqcn = \$controller->beforeLast('::')->toString();
            if (!is_subclass_of(\$controllerFqcn, DashboardControllerInterface::class)) {
                continue;
            }

            // when using i18n routes, the same controller can be associated to
            // multiple routes (e.g. 'admin.en', 'admin.es', 'admin.fr', etc.)
            \$dashboardRoutes[\$routeName] = \$controller->toString();
        }

        (new Filesystem())->dumpFile(
            \$cacheDir.'/'.self::DASHBOARD_ROUTES_CACHE,
            '<?php return '.var_export(\$dashboardRoutes, true).';'
        );

        // we don't use this, but it's required by the interface to return the list of classes to preload
        return [];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Cache/CacheWarmer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Cache;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouterInterface;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CacheWarmer implements CacheWarmerInterface
{
    public const DASHBOARD_ROUTES_CACHE = 'easyadmin/routes-dashboard.php';

    private RouterInterface \$router;

    public function __construct(RouterInterface \$router)
    {
        \$this->router = \$router;
    }

    public function isOptional(): bool
    {
        return false;
    }

    public function warmUp(string \$cacheDir): array
    {
        \$allRoutes = \$this->router->getRouteCollection();
        \$dashboardRoutes = [];

        /** @var Route \$route */
        foreach (\$allRoutes as \$routeName => \$route) {
            \$controller = \$route->getDefault('_controller') ?? '';
            // controller is defined as \$router->add('admin', '/')->controller(DashboardController::class)
            if (\\is_string(\$controller) && '' !== \$controller && class_exists(\$controller)) {
                \$controller .= '::__invoke';
            }

            // controller is defined as \$router->add('admin', '/')->controller([DashboardController::class, 'index'])
            if (\\is_array(\$controller)) {
                \$controller = \$controller[0].'::'.(\$controller[1] ?? '__invoke');
            }

            \$controller = u(\$controller);
            if (!\$controller->endsWith('::index') && !\$controller->endsWith('::__invoke')) {
                continue;
            }

            \$controllerFqcn = \$controller->beforeLast('::')->toString();
            if (!is_subclass_of(\$controllerFqcn, DashboardControllerInterface::class)) {
                continue;
            }

            // when using i18n routes, the same controller can be associated to
            // multiple routes (e.g. 'admin.en', 'admin.es', 'admin.fr', etc.)
            \$dashboardRoutes[\$routeName] = \$controller->toString();
        }

        (new Filesystem())->dumpFile(
            \$cacheDir.'/'.self::DASHBOARD_ROUTES_CACHE,
            '<?php return '.var_export(\$dashboardRoutes, true).';'
        );

        // we don't use this, but it's required by the interface to return the list of classes to preload
        return [];
    }
}
", "easycorp/easyadmin-bundle/src/Cache/CacheWarmer.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Cache\\CacheWarmer.php");
    }
}
