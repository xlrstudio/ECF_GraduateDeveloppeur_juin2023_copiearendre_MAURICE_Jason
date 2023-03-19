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

/* easycorp/easyadmin-bundle/src/DependencyInjection/CreateControllerRegistriesPass.php */
class __TwigTemplate_a9d4b97b15a4f535890965ec0d8f12fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/DependencyInjection/CreateControllerRegistriesPass.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/DependencyInjection/CreateControllerRegistriesPass.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\DependencyInjection;

use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Creates the services of the Dashboard and CRUD controller registries. They can't
 * be defined as normal services because they cause circular dependencies.
 * See https://github.com/EasyCorp/EasyAdminBundle/issues/3541.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class CreateControllerRegistriesPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        \$this->createDashboardControllerRegistryService(\$container);
        \$this->createCrudControllerRegistryService(\$container);
    }

    private function createDashboardControllerRegistryService(ContainerBuilder \$container): void
    {
        \$dashboardControllersFqcn = array_keys(\$container->findTaggedServiceIds(EasyAdminExtension::TAG_DASHBOARD_CONTROLLER, true));

        \$container
            ->register(DashboardControllerRegistry::class, DashboardControllerRegistry::class)
            ->setPublic(false)
            ->setArguments([
                \$container->getParameter('kernel.secret'),
                \$container->getParameter('kernel.cache_dir'),
                \$dashboardControllersFqcn,
            ]);
    }

    private function createCrudControllerRegistryService(ContainerBuilder \$container): void
    {
        \$crudControllersFqcn = array_keys(\$container->findTaggedServiceIds(EasyAdminExtension::TAG_CRUD_CONTROLLER, true));

        \$container
            ->register(CrudControllerRegistry::class, CrudControllerRegistry::class)
            ->setPublic(false)
            ->setArguments([
                \$container->getParameter('kernel.secret'),
                \$crudControllersFqcn,
            ]);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/DependencyInjection/CreateControllerRegistriesPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\DependencyInjection;

use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry;
use EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Creates the services of the Dashboard and CRUD controller registries. They can't
 * be defined as normal services because they cause circular dependencies.
 * See https://github.com/EasyCorp/EasyAdminBundle/issues/3541.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class CreateControllerRegistriesPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        \$this->createDashboardControllerRegistryService(\$container);
        \$this->createCrudControllerRegistryService(\$container);
    }

    private function createDashboardControllerRegistryService(ContainerBuilder \$container): void
    {
        \$dashboardControllersFqcn = array_keys(\$container->findTaggedServiceIds(EasyAdminExtension::TAG_DASHBOARD_CONTROLLER, true));

        \$container
            ->register(DashboardControllerRegistry::class, DashboardControllerRegistry::class)
            ->setPublic(false)
            ->setArguments([
                \$container->getParameter('kernel.secret'),
                \$container->getParameter('kernel.cache_dir'),
                \$dashboardControllersFqcn,
            ]);
    }

    private function createCrudControllerRegistryService(ContainerBuilder \$container): void
    {
        \$crudControllersFqcn = array_keys(\$container->findTaggedServiceIds(EasyAdminExtension::TAG_CRUD_CONTROLLER, true));

        \$container
            ->register(CrudControllerRegistry::class, CrudControllerRegistry::class)
            ->setPublic(false)
            ->setArguments([
                \$container->getParameter('kernel.secret'),
                \$crudControllersFqcn,
            ]);
    }
}
", "easycorp/easyadmin-bundle/src/DependencyInjection/CreateControllerRegistriesPass.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\DependencyInjection\\CreateControllerRegistriesPass.php");
    }
}
