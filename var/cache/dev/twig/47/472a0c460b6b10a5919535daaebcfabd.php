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

/* easycorp/easyadmin-bundle/src/EventListener/ExceptionListener.php */
class __TwigTemplate_57e574576e4f986e646e5307f2c57b5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/EventListener/ExceptionListener.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/EventListener/ExceptionListener.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\EventListener;

use EasyCorp\\Bundle\\EasyAdminBundle\\Exception\\BaseException;
use EasyCorp\\Bundle\\EasyAdminBundle\\Exception\\FlattenException;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Twig\\Environment;
use Twig\\Error\\RuntimeError;

/**
 * This listener allows to display customized error pages in the production
 * environment.
 *
 * @internal
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class ExceptionListener
{
    private bool \$kernelDebug;
    private AdminContextProvider \$adminContextProvider;
    private Environment \$twig;

    public function __construct(bool \$kernelDebug, AdminContextProvider \$adminContextProvider, Environment \$twig)
    {
        \$this->kernelDebug = \$kernelDebug;
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->twig = \$twig;
    }

    public function onKernelException(ExceptionEvent \$event)
    {
        \$exception = \$event->getThrowable();

        if (\$this->kernelDebug && \$exception instanceof RuntimeError && 'Variable \"ea\" does not exist.' === \$exception->getRawMessage()) {
            \$exception->appendMessage(\$this->getEaVariableExceptionMessage());

            return;
        }

        if (\$this->kernelDebug || !\$exception instanceof BaseException) {
            return;
        }

        // TODO: check why these custom error pages don't work
        \$event->setResponse(\$this->createExceptionResponse(FlattenException::create(\$exception)));
    }

    public function createExceptionResponse(FlattenException \$exception): Response
    {
        \$context = \$this->adminContextProvider->getContext();
        \$exceptionTemplatePath = null === \$context ? '@EasyAdmin/exception.html.twig' : \$context->getTemplatePath('exception');
        \$layoutTemplatePath = null === \$context ? '@EasyAdmin/layout.html.twig' : \$context->getTemplatePath('layout');

        return new Response(\$this->twig->render(\$exceptionTemplatePath, [
            'exception' => \$exception,
            'layout_template_path' => \$layoutTemplatePath,
        ]), \$exception->getStatusCode());
    }

    private function getEaVariableExceptionMessage(): string
    {
        return <<<MESSAGE


            The \"ea\" variable stores the admin context (menu items, actions, fields, etc.) and it's created automatically for requests served by EasyAdmin.

            If you are seeing this error, you are trying to use some EasyAdmin features in a request not served by EasyAdmin. For example, some of your custom actions may be trying to render or extend from one of the templates provided EasyAdmin.

            Your request must meet one of these conditions to be served by EasyAdmin (and to have the \"ea\" variable defined):

            1) It must be run by a controller that implements DashboardControllerInterface. This is done automatically for all actions and CRUD controllers associated to your dashboard.

            2) It must contain an \"eaContext\" query string parameter that identifies the Dashboard associated to this request (this parameter is automatically added by EasyAdmin when creating menu items that link to custom Symfony routes).
            MESSAGE;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/EventListener/ExceptionListener.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\EventListener;

use EasyCorp\\Bundle\\EasyAdminBundle\\Exception\\BaseException;
use EasyCorp\\Bundle\\EasyAdminBundle\\Exception\\FlattenException;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Twig\\Environment;
use Twig\\Error\\RuntimeError;

/**
 * This listener allows to display customized error pages in the production
 * environment.
 *
 * @internal
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class ExceptionListener
{
    private bool \$kernelDebug;
    private AdminContextProvider \$adminContextProvider;
    private Environment \$twig;

    public function __construct(bool \$kernelDebug, AdminContextProvider \$adminContextProvider, Environment \$twig)
    {
        \$this->kernelDebug = \$kernelDebug;
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->twig = \$twig;
    }

    public function onKernelException(ExceptionEvent \$event)
    {
        \$exception = \$event->getThrowable();

        if (\$this->kernelDebug && \$exception instanceof RuntimeError && 'Variable \"ea\" does not exist.' === \$exception->getRawMessage()) {
            \$exception->appendMessage(\$this->getEaVariableExceptionMessage());

            return;
        }

        if (\$this->kernelDebug || !\$exception instanceof BaseException) {
            return;
        }

        // TODO: check why these custom error pages don't work
        \$event->setResponse(\$this->createExceptionResponse(FlattenException::create(\$exception)));
    }

    public function createExceptionResponse(FlattenException \$exception): Response
    {
        \$context = \$this->adminContextProvider->getContext();
        \$exceptionTemplatePath = null === \$context ? '@EasyAdmin/exception.html.twig' : \$context->getTemplatePath('exception');
        \$layoutTemplatePath = null === \$context ? '@EasyAdmin/layout.html.twig' : \$context->getTemplatePath('layout');

        return new Response(\$this->twig->render(\$exceptionTemplatePath, [
            'exception' => \$exception,
            'layout_template_path' => \$layoutTemplatePath,
        ]), \$exception->getStatusCode());
    }

    private function getEaVariableExceptionMessage(): string
    {
        return <<<MESSAGE


            The \"ea\" variable stores the admin context (menu items, actions, fields, etc.) and it's created automatically for requests served by EasyAdmin.

            If you are seeing this error, you are trying to use some EasyAdmin features in a request not served by EasyAdmin. For example, some of your custom actions may be trying to render or extend from one of the templates provided EasyAdmin.

            Your request must meet one of these conditions to be served by EasyAdmin (and to have the \"ea\" variable defined):

            1) It must be run by a controller that implements DashboardControllerInterface. This is done automatically for all actions and CRUD controllers associated to your dashboard.

            2) It must contain an \"eaContext\" query string parameter that identifies the Dashboard associated to this request (this parameter is automatically added by EasyAdmin when creating menu items that link to custom Symfony routes).
            MESSAGE;
    }
}
", "easycorp/easyadmin-bundle/src/EventListener/ExceptionListener.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\EventListener\\ExceptionListener.php");
    }
}
