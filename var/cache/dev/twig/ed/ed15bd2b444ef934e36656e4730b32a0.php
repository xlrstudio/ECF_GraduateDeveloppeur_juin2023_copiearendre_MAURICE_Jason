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

/* easycorp/easyadmin-bundle/src/DependencyInjection/EasyAdminExtension.php */
class __TwigTemplate_02e9caaba83ca4cc4e0d3f925a734203 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/DependencyInjection/EasyAdminExtension.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/DependencyInjection/EasyAdminExtension.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\DependencyInjection;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\CrudControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class EasyAdminExtension extends Extension
{
    public const TAG_CRUD_CONTROLLER = 'ea.crud_controller';
    public const TAG_DASHBOARD_CONTROLLER = 'ea.dashboard_controller';
    public const TAG_FIELD_CONFIGURATOR = 'ea.field_configurator';
    public const TAG_FILTER_CONFIGURATOR = 'ea.filter_configurator';

    public function load(array \$configs, ContainerBuilder \$container): void
    {
        \$container->registerForAutoconfiguration(DashboardControllerInterface::class)
            ->addTag(self::TAG_DASHBOARD_CONTROLLER);

        \$container->registerForAutoconfiguration(CrudControllerInterface::class)
            ->addTag(self::TAG_CRUD_CONTROLLER);

        \$container->registerForAutoconfiguration(FieldConfiguratorInterface::class)
            ->addTag(self::TAG_FIELD_CONFIGURATOR);

        \$container->registerForAutoconfiguration(FilterConfiguratorInterface::class)
            ->addTag(self::TAG_FILTER_CONFIGURATOR);

        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('services.php');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/DependencyInjection/EasyAdminExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\DependencyInjection;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\CrudControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class EasyAdminExtension extends Extension
{
    public const TAG_CRUD_CONTROLLER = 'ea.crud_controller';
    public const TAG_DASHBOARD_CONTROLLER = 'ea.dashboard_controller';
    public const TAG_FIELD_CONFIGURATOR = 'ea.field_configurator';
    public const TAG_FILTER_CONFIGURATOR = 'ea.filter_configurator';

    public function load(array \$configs, ContainerBuilder \$container): void
    {
        \$container->registerForAutoconfiguration(DashboardControllerInterface::class)
            ->addTag(self::TAG_DASHBOARD_CONTROLLER);

        \$container->registerForAutoconfiguration(CrudControllerInterface::class)
            ->addTag(self::TAG_CRUD_CONTROLLER);

        \$container->registerForAutoconfiguration(FieldConfiguratorInterface::class)
            ->addTag(self::TAG_FIELD_CONFIGURATOR);

        \$container->registerForAutoconfiguration(FilterConfiguratorInterface::class)
            ->addTag(self::TAG_FILTER_CONFIGURATOR);

        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));
        \$loader->load('services.php');
    }
}
", "easycorp/easyadmin-bundle/src/DependencyInjection/EasyAdminExtension.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\DependencyInjection\\EasyAdminExtension.php");
    }
}
