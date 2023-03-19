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

/* easycorp/easyadmin-bundle/src/Factory/ControllerFactory.php */
class __TwigTemplate_061372dd921a4643aed098e9bf578006 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/ControllerFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/ControllerFactory.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\CrudControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

/**
 * @author Lukas Lücke <lukas@luecke.me>
 */
final class ControllerFactory
{
    private ControllerResolverInterface \$controllerResolver;

    public function __construct(ControllerResolverInterface \$controllerResolver)
    {
        \$this->controllerResolver = \$controllerResolver;
    }

    public function getDashboardControllerInstance(string \$controllerFqcn, Request \$request): ?DashboardControllerInterface
    {
        return \$this->getDashboardController(\$controllerFqcn, \$request);
    }

    public function getCrudControllerInstance(?string \$crudControllerFqcn, ?string \$crudAction, Request \$request): ?CrudControllerInterface
    {
        if (null === \$crudControllerFqcn) {
            return null;
        }

        return \$this->getCrudController(\$crudControllerFqcn, \$crudAction, \$request);
    }

    private function getDashboardController(?string \$dashboardControllerFqcn, Request \$request): ?DashboardControllerInterface
    {
        return \$this->getController(DashboardControllerInterface::class, \$dashboardControllerFqcn, 'index', \$request);
    }

    private function getCrudController(?string \$crudControllerFqcn, ?string \$crudAction, Request \$request): ?CrudControllerInterface
    {
        return \$this->getController(CrudControllerInterface::class, \$crudControllerFqcn, \$crudAction, \$request);
    }

    private function getController(string \$controllerInterface, ?string \$controllerFqcn, ?string \$controllerAction, Request \$request)
    {
        if (null === \$controllerFqcn || null === \$controllerAction) {
            return null;
        }

        \$newRequest = \$request->duplicate(null, null, ['_controller' => [\$controllerFqcn, \$controllerAction]]);
        \$controllerCallable = \$this->controllerResolver->getController(\$newRequest);

        if (false === \$controllerCallable) {
            throw new NotFoundHttpException(sprintf('Unable to find the controller \"%s::%s\".', \$controllerFqcn, \$controllerAction));
        }

        if (!\\is_array(\$controllerCallable)) {
            return null;
        }

        \$controllerInstance = \$controllerCallable[0];

        return is_subclass_of(\$controllerInstance, \$controllerInterface) ? \$controllerInstance : null;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Factory/ControllerFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\CrudControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

/**
 * @author Lukas Lücke <lukas@luecke.me>
 */
final class ControllerFactory
{
    private ControllerResolverInterface \$controllerResolver;

    public function __construct(ControllerResolverInterface \$controllerResolver)
    {
        \$this->controllerResolver = \$controllerResolver;
    }

    public function getDashboardControllerInstance(string \$controllerFqcn, Request \$request): ?DashboardControllerInterface
    {
        return \$this->getDashboardController(\$controllerFqcn, \$request);
    }

    public function getCrudControllerInstance(?string \$crudControllerFqcn, ?string \$crudAction, Request \$request): ?CrudControllerInterface
    {
        if (null === \$crudControllerFqcn) {
            return null;
        }

        return \$this->getCrudController(\$crudControllerFqcn, \$crudAction, \$request);
    }

    private function getDashboardController(?string \$dashboardControllerFqcn, Request \$request): ?DashboardControllerInterface
    {
        return \$this->getController(DashboardControllerInterface::class, \$dashboardControllerFqcn, 'index', \$request);
    }

    private function getCrudController(?string \$crudControllerFqcn, ?string \$crudAction, Request \$request): ?CrudControllerInterface
    {
        return \$this->getController(CrudControllerInterface::class, \$crudControllerFqcn, \$crudAction, \$request);
    }

    private function getController(string \$controllerInterface, ?string \$controllerFqcn, ?string \$controllerAction, Request \$request)
    {
        if (null === \$controllerFqcn || null === \$controllerAction) {
            return null;
        }

        \$newRequest = \$request->duplicate(null, null, ['_controller' => [\$controllerFqcn, \$controllerAction]]);
        \$controllerCallable = \$this->controllerResolver->getController(\$newRequest);

        if (false === \$controllerCallable) {
            throw new NotFoundHttpException(sprintf('Unable to find the controller \"%s::%s\".', \$controllerFqcn, \$controllerAction));
        }

        if (!\\is_array(\$controllerCallable)) {
            return null;
        }

        \$controllerInstance = \$controllerCallable[0];

        return is_subclass_of(\$controllerInstance, \$controllerInterface) ? \$controllerInstance : null;
    }
}
", "easycorp/easyadmin-bundle/src/Factory/ControllerFactory.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Factory\\ControllerFactory.php");
    }
}
