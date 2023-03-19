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

/* easycorp/easyadmin-bundle/src/EventListener/CrudResponseListener.php */
class __TwigTemplate_bef5727ea3073e0069174f12740fb893 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/EventListener/CrudResponseListener.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/EventListener/CrudResponseListener.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\EventListener;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ViewEvent;
use Twig\\Environment;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CrudResponseListener
{
    private AdminContextProvider \$adminContextProvider;
    private Environment \$twig;

    public function __construct(AdminContextProvider \$adminContextProvider, Environment \$twig)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->twig = \$twig;
    }

    public function onKernelView(ViewEvent \$event): void
    {
        \$responseParameters = \$event->getControllerResult();
        if (null === \$responseParameters || !\$responseParameters instanceof KeyValueStore) {
            return;
        }

        if (!\$responseParameters->has('templateName') && !\$responseParameters->has('templatePath')) {
            throw new \\RuntimeException('The KeyValueStore object returned by CrudController actions must include either a \"templateName\" or a \"templatePath\" parameter to define the template used to render the action result.');
        }

        \$templateParameters = \$responseParameters->all();
        \$templatePath = \\array_key_exists('templatePath', \$templateParameters)
            ? \$templateParameters['templatePath']
            : \$this->adminContextProvider->getContext()->getTemplatePath(\$templateParameters['templateName']);

        // to make parameters easier to modify, we pass around FormInterface objects
        // so we must convert those values to FormView before rendering the template
        foreach (\$templateParameters as \$paramName => \$paramValue) {
            if (\$paramValue instanceof FormInterface) {
                \$templateParameters[\$paramName] = \$paramValue->createView();
            }
        }

        \$event->setResponse(new Response(\$this->twig->render(\$templatePath, \$templateParameters)));
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/EventListener/CrudResponseListener.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\EventListener;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ViewEvent;
use Twig\\Environment;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CrudResponseListener
{
    private AdminContextProvider \$adminContextProvider;
    private Environment \$twig;

    public function __construct(AdminContextProvider \$adminContextProvider, Environment \$twig)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->twig = \$twig;
    }

    public function onKernelView(ViewEvent \$event): void
    {
        \$responseParameters = \$event->getControllerResult();
        if (null === \$responseParameters || !\$responseParameters instanceof KeyValueStore) {
            return;
        }

        if (!\$responseParameters->has('templateName') && !\$responseParameters->has('templatePath')) {
            throw new \\RuntimeException('The KeyValueStore object returned by CrudController actions must include either a \"templateName\" or a \"templatePath\" parameter to define the template used to render the action result.');
        }

        \$templateParameters = \$responseParameters->all();
        \$templatePath = \\array_key_exists('templatePath', \$templateParameters)
            ? \$templateParameters['templatePath']
            : \$this->adminContextProvider->getContext()->getTemplatePath(\$templateParameters['templateName']);

        // to make parameters easier to modify, we pass around FormInterface objects
        // so we must convert those values to FormView before rendering the template
        foreach (\$templateParameters as \$paramName => \$paramValue) {
            if (\$paramValue instanceof FormInterface) {
                \$templateParameters[\$paramName] = \$paramValue->createView();
            }
        }

        \$event->setResponse(new Response(\$this->twig->render(\$templatePath, \$templateParameters)));
    }
}
", "easycorp/easyadmin-bundle/src/EventListener/CrudResponseListener.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\EventListener\\CrudResponseListener.php");
    }
}
