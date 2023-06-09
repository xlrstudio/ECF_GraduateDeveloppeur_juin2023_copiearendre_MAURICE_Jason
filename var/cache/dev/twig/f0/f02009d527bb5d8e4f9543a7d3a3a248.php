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

/* easycorp/easyadmin-bundle/src/EventListener/AdminRouterSubscriber.php */
class __TwigTemplate_f5adad77a3bccca55d3e56b42c7c4eca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/EventListener/AdminRouterSubscriber.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/EventListener/AdminRouterSubscriber.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\EventListener;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\CrudControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\AdminContextFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface;
use Twig\\Environment;

/**
 * This subscriber acts as a \"proxy\" of all backend requests. First, if the
 * request is related to EasyAdmin, it creates the AdminContext variable and
 * stores it in the Request as an attribute.
 *
 * Second, it uses Symfony events to serve all backend requests using a single
 * route. The trick is to change dynamically the controller to execute when
 * the request is related to a CRUD action or a normal Symfony route/action.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class AdminRouterSubscriber implements EventSubscriberInterface
{
    private AdminContextFactory \$adminContextFactory;
    private ControllerFactory \$controllerFactory;
    private ControllerResolverInterface \$controllerResolver;
    private UrlGeneratorInterface \$urlGenerator;
    private RequestMatcherInterface \$requestMatcher;
    private Environment \$twig;

    public function __construct(AdminContextFactory \$adminContextFactory, ControllerFactory \$controllerFactory, ControllerResolverInterface \$controllerResolver, UrlGeneratorInterface \$urlGenerator, RequestMatcherInterface \$requestMatcher, Environment \$twig)
    {
        \$this->adminContextFactory = \$adminContextFactory;
        \$this->controllerFactory = \$controllerFactory;
        \$this->controllerResolver = \$controllerResolver;
        \$this->urlGenerator = \$urlGenerator;
        \$this->requestMatcher = \$requestMatcher;
        \$this->twig = \$twig;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            RequestEvent::class => [
                ['onKernelRequest', 0],
            ],
            // the priority must be higher than 0 to run it before ParamConverterListener
            ControllerEvent::class => ['onKernelController', 128],
        ];
    }

    /**
     * If this is an EasyAdmin request, it creates the AdminContext variable, stores it
     * in the Request as an attribute and injects it as a global Twig variable.
     */
    public function onKernelRequest(RequestEvent \$event): void
    {
        \$request = \$event->getRequest();
        if (null === \$dashboardControllerFqcn = \$this->getDashboardControllerFqcn(\$request)) {
            return;
        }

        if (null === \$dashboardControllerInstance = \$this->getDashboardControllerInstance(\$dashboardControllerFqcn, \$request)) {
            return;
        }

        // creating the context is expensive, so it's created once and stored in the request
        // if the current request already has an AdminContext object, do nothing
        if (null === \$adminContext = \$request->attributes->get(EA::CONTEXT_REQUEST_ATTRIBUTE)) {
            \$crudControllerInstance = \$this->getCrudControllerInstance(\$request);
            \$adminContext = \$this->adminContextFactory->create(\$request, \$dashboardControllerInstance, \$crudControllerInstance);
        }

        \$request->attributes->set(EA::CONTEXT_REQUEST_ATTRIBUTE, \$adminContext);

        // this makes the AdminContext available in all templates as a short named variable
        \$this->twig->addGlobal('ea', \$adminContext);
    }

    /**
     * In EasyAdmin all backend requests are served via the same route (that allows to
     * detect under which dashboard you want to process the request). This method handles
     * the requests related to \"CRUD controller actions\" and \"custom Symfony actions\".
     * The trick used is to change dynamically the controller executed by Symfony.
     */
    public function onKernelController(ControllerEvent \$event): void
    {
        \$request = \$event->getRequest();
        if (null === \$request->attributes->get(EA::CONTEXT_REQUEST_ATTRIBUTE)) {
            return;
        }

        // if the request is related to a CRUD controller, change the controller to be executed
        if (null !== \$crudControllerInstance = \$this->getCrudControllerInstance(\$request)) {
            \$symfonyControllerFqcnCallable = [\$crudControllerInstance, \$request->query->get(EA::CRUD_ACTION)];
            \$symfonyControllerStringCallable = [\\get_class(\$crudControllerInstance), \$request->query->get(EA::CRUD_ACTION)];

            // this makes Symfony believe that another controller is being executed
            // (e.g. this is needed for the autowiring of controller action arguments)
            // VERY IMPORTANT: here the Symfony controller must be passed as a string (['App\\Controller\\Foo', 'index'])
            // Otherwise, the param converter of the controller method doesn't work
            \$event->getRequest()->attributes->set('_controller', \$symfonyControllerStringCallable);

            // this actually makes Symfony to execute the other controller
            \$event->setController(\$symfonyControllerFqcnCallable);
        }

        // if the request is related to a custom action, change the controller to be executed
        if (null !== \$request->query->get(EA::ROUTE_NAME)) {
            \$symfonyControllerAsString = \$this->getSymfonyControllerFqcn(\$request);
            \$symfonyControllerCallable = \$this->getSymfonyControllerInstance(\$symfonyControllerAsString, \$request->query->all()[EA::ROUTE_PARAMS] ?? []);
            if (false !== \$symfonyControllerCallable) {
                // this makes Symfony believe that another controller is being executed
                // (e.g. this is needed for the autowiring of controller action arguments)
                // VERY IMPORTANT: here the Symfony controller must be passed as a string ('App\\Controller\\Foo::index')
                // Otherwise, the param converter of the controller method doesn't work
                \$event->getRequest()->attributes->set('_controller', \$symfonyControllerAsString);
                // route params must be added as route attribute; otherwise, param converters don't work
                \$event->getRequest()->attributes->replace(array_merge(
                    \$request->query->all()[EA::ROUTE_PARAMS] ?? [],
                    \$event->getRequest()->attributes->all()
                ));

                // this actually makes Symfony to execute the other controller
                \$event->setController(\$symfonyControllerCallable);
            }
        }
    }

    /**
     * It returns the FQCN of the EasyAdmin Dashboard controller used to serve this
     * request or null if this is not an EasyAdmin request.
     * Because of how EasyAdmin works, all backend requests are handled via the
     * Dashboard controller, so its enough to check if the request controller implements
     * the DashboardControllerInterface.
     */
    private function getDashboardControllerFqcn(Request \$request): ?string
    {
        \$controller = \$request->attributes->get('_controller');
        \$controllerFqcn = null;

        if (\\is_string(\$controller)) {
            [\$controllerFqcn, ] = explode('::', \$controller);
        }

        if (\\is_array(\$controller)) {
            \$controllerFqcn = \$controller[0];
        }

        if (\\is_object(\$controller)) {
            \$controllerFqcn = \\get_class(\$controller);
        }

        return is_subclass_of(\$controllerFqcn, DashboardControllerInterface::class) ? \$controllerFqcn : null;
    }

    private function getDashboardControllerInstance(string \$dashboardControllerFqcn, Request \$request): ?DashboardControllerInterface
    {
        return \$this->controllerFactory->getDashboardControllerInstance(\$dashboardControllerFqcn, \$request);
    }

    private function getCrudControllerInstance(Request \$request): ?CrudControllerInterface
    {
        \$crudControllerFqcn = \$request->query->get(EA::CRUD_CONTROLLER_FQCN);

        \$crudAction = \$request->query->get(EA::CRUD_ACTION);

        return \$this->controllerFactory->getCrudControllerInstance(\$crudControllerFqcn, \$crudAction, \$request);
    }

    private function getSymfonyControllerFqcn(Request \$request): ?string
    {
        \$routeName = \$request->query->get(EA::ROUTE_NAME);
        \$routeParams = \$request->query->all()[EA::ROUTE_PARAMS] ?? [];
        \$url = \$this->urlGenerator->generate(\$routeName, \$routeParams);

        \$newRequest = \$request->duplicate();
        \$newRequest->attributes->remove('_controller');
        \$newRequest->attributes->set('_route', \$routeName);
        \$newRequest->attributes->add(\$routeParams);
        \$newRequest->server->set('REQUEST_URI', \$url);

        \$parameters = \$this->requestMatcher->matchRequest(\$newRequest);

        return \$parameters['_controller'] ?? null;
    }

    private function getSymfonyControllerInstance(string \$controllerFqcn, array \$routeParams): callable|false
    {
        \$newRequest = new Request([], [], ['_controller' => \$controllerFqcn, '_route_params' => \$routeParams], [], [], []);

        return \$this->controllerResolver->getController(\$newRequest);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/EventListener/AdminRouterSubscriber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\EventListener;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\CrudControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller\\DashboardControllerInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\AdminContextFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerEvent;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface;
use Twig\\Environment;

/**
 * This subscriber acts as a \"proxy\" of all backend requests. First, if the
 * request is related to EasyAdmin, it creates the AdminContext variable and
 * stores it in the Request as an attribute.
 *
 * Second, it uses Symfony events to serve all backend requests using a single
 * route. The trick is to change dynamically the controller to execute when
 * the request is related to a CRUD action or a normal Symfony route/action.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class AdminRouterSubscriber implements EventSubscriberInterface
{
    private AdminContextFactory \$adminContextFactory;
    private ControllerFactory \$controllerFactory;
    private ControllerResolverInterface \$controllerResolver;
    private UrlGeneratorInterface \$urlGenerator;
    private RequestMatcherInterface \$requestMatcher;
    private Environment \$twig;

    public function __construct(AdminContextFactory \$adminContextFactory, ControllerFactory \$controllerFactory, ControllerResolverInterface \$controllerResolver, UrlGeneratorInterface \$urlGenerator, RequestMatcherInterface \$requestMatcher, Environment \$twig)
    {
        \$this->adminContextFactory = \$adminContextFactory;
        \$this->controllerFactory = \$controllerFactory;
        \$this->controllerResolver = \$controllerResolver;
        \$this->urlGenerator = \$urlGenerator;
        \$this->requestMatcher = \$requestMatcher;
        \$this->twig = \$twig;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            RequestEvent::class => [
                ['onKernelRequest', 0],
            ],
            // the priority must be higher than 0 to run it before ParamConverterListener
            ControllerEvent::class => ['onKernelController', 128],
        ];
    }

    /**
     * If this is an EasyAdmin request, it creates the AdminContext variable, stores it
     * in the Request as an attribute and injects it as a global Twig variable.
     */
    public function onKernelRequest(RequestEvent \$event): void
    {
        \$request = \$event->getRequest();
        if (null === \$dashboardControllerFqcn = \$this->getDashboardControllerFqcn(\$request)) {
            return;
        }

        if (null === \$dashboardControllerInstance = \$this->getDashboardControllerInstance(\$dashboardControllerFqcn, \$request)) {
            return;
        }

        // creating the context is expensive, so it's created once and stored in the request
        // if the current request already has an AdminContext object, do nothing
        if (null === \$adminContext = \$request->attributes->get(EA::CONTEXT_REQUEST_ATTRIBUTE)) {
            \$crudControllerInstance = \$this->getCrudControllerInstance(\$request);
            \$adminContext = \$this->adminContextFactory->create(\$request, \$dashboardControllerInstance, \$crudControllerInstance);
        }

        \$request->attributes->set(EA::CONTEXT_REQUEST_ATTRIBUTE, \$adminContext);

        // this makes the AdminContext available in all templates as a short named variable
        \$this->twig->addGlobal('ea', \$adminContext);
    }

    /**
     * In EasyAdmin all backend requests are served via the same route (that allows to
     * detect under which dashboard you want to process the request). This method handles
     * the requests related to \"CRUD controller actions\" and \"custom Symfony actions\".
     * The trick used is to change dynamically the controller executed by Symfony.
     */
    public function onKernelController(ControllerEvent \$event): void
    {
        \$request = \$event->getRequest();
        if (null === \$request->attributes->get(EA::CONTEXT_REQUEST_ATTRIBUTE)) {
            return;
        }

        // if the request is related to a CRUD controller, change the controller to be executed
        if (null !== \$crudControllerInstance = \$this->getCrudControllerInstance(\$request)) {
            \$symfonyControllerFqcnCallable = [\$crudControllerInstance, \$request->query->get(EA::CRUD_ACTION)];
            \$symfonyControllerStringCallable = [\\get_class(\$crudControllerInstance), \$request->query->get(EA::CRUD_ACTION)];

            // this makes Symfony believe that another controller is being executed
            // (e.g. this is needed for the autowiring of controller action arguments)
            // VERY IMPORTANT: here the Symfony controller must be passed as a string (['App\\Controller\\Foo', 'index'])
            // Otherwise, the param converter of the controller method doesn't work
            \$event->getRequest()->attributes->set('_controller', \$symfonyControllerStringCallable);

            // this actually makes Symfony to execute the other controller
            \$event->setController(\$symfonyControllerFqcnCallable);
        }

        // if the request is related to a custom action, change the controller to be executed
        if (null !== \$request->query->get(EA::ROUTE_NAME)) {
            \$symfonyControllerAsString = \$this->getSymfonyControllerFqcn(\$request);
            \$symfonyControllerCallable = \$this->getSymfonyControllerInstance(\$symfonyControllerAsString, \$request->query->all()[EA::ROUTE_PARAMS] ?? []);
            if (false !== \$symfonyControllerCallable) {
                // this makes Symfony believe that another controller is being executed
                // (e.g. this is needed for the autowiring of controller action arguments)
                // VERY IMPORTANT: here the Symfony controller must be passed as a string ('App\\Controller\\Foo::index')
                // Otherwise, the param converter of the controller method doesn't work
                \$event->getRequest()->attributes->set('_controller', \$symfonyControllerAsString);
                // route params must be added as route attribute; otherwise, param converters don't work
                \$event->getRequest()->attributes->replace(array_merge(
                    \$request->query->all()[EA::ROUTE_PARAMS] ?? [],
                    \$event->getRequest()->attributes->all()
                ));

                // this actually makes Symfony to execute the other controller
                \$event->setController(\$symfonyControllerCallable);
            }
        }
    }

    /**
     * It returns the FQCN of the EasyAdmin Dashboard controller used to serve this
     * request or null if this is not an EasyAdmin request.
     * Because of how EasyAdmin works, all backend requests are handled via the
     * Dashboard controller, so its enough to check if the request controller implements
     * the DashboardControllerInterface.
     */
    private function getDashboardControllerFqcn(Request \$request): ?string
    {
        \$controller = \$request->attributes->get('_controller');
        \$controllerFqcn = null;

        if (\\is_string(\$controller)) {
            [\$controllerFqcn, ] = explode('::', \$controller);
        }

        if (\\is_array(\$controller)) {
            \$controllerFqcn = \$controller[0];
        }

        if (\\is_object(\$controller)) {
            \$controllerFqcn = \\get_class(\$controller);
        }

        return is_subclass_of(\$controllerFqcn, DashboardControllerInterface::class) ? \$controllerFqcn : null;
    }

    private function getDashboardControllerInstance(string \$dashboardControllerFqcn, Request \$request): ?DashboardControllerInterface
    {
        return \$this->controllerFactory->getDashboardControllerInstance(\$dashboardControllerFqcn, \$request);
    }

    private function getCrudControllerInstance(Request \$request): ?CrudControllerInterface
    {
        \$crudControllerFqcn = \$request->query->get(EA::CRUD_CONTROLLER_FQCN);

        \$crudAction = \$request->query->get(EA::CRUD_ACTION);

        return \$this->controllerFactory->getCrudControllerInstance(\$crudControllerFqcn, \$crudAction, \$request);
    }

    private function getSymfonyControllerFqcn(Request \$request): ?string
    {
        \$routeName = \$request->query->get(EA::ROUTE_NAME);
        \$routeParams = \$request->query->all()[EA::ROUTE_PARAMS] ?? [];
        \$url = \$this->urlGenerator->generate(\$routeName, \$routeParams);

        \$newRequest = \$request->duplicate();
        \$newRequest->attributes->remove('_controller');
        \$newRequest->attributes->set('_route', \$routeName);
        \$newRequest->attributes->add(\$routeParams);
        \$newRequest->server->set('REQUEST_URI', \$url);

        \$parameters = \$this->requestMatcher->matchRequest(\$newRequest);

        return \$parameters['_controller'] ?? null;
    }

    private function getSymfonyControllerInstance(string \$controllerFqcn, array \$routeParams): callable|false
    {
        \$newRequest = new Request([], [], ['_controller' => \$controllerFqcn, '_route_params' => \$routeParams], [], [], []);

        return \$this->controllerResolver->getController(\$newRequest);
    }
}
", "easycorp/easyadmin-bundle/src/EventListener/AdminRouterSubscriber.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\EventListener\\AdminRouterSubscriber.php");
    }
}
