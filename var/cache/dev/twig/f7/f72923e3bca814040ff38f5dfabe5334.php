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

/* easycorp/easyadmin-bundle/src/Exception/ForbiddenActionException.php */
class __TwigTemplate_535eae2bdfa25cab0e083ba6f5f825e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Exception/ForbiddenActionException.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Exception/ForbiddenActionException.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Exception;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\ExceptionContext;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ForbiddenActionException extends BaseException
{
    public function __construct(AdminContext \$context)
    {
        \$parameters = [
            'crud_controller' => null === \$context->getCrud() ? null : \$context->getCrud()->getControllerFqcn(),
            'action' => null === \$context->getCrud() ? null : \$context->getCrud()->getCurrentAction(),
        ];

        \$exceptionContext = new ExceptionContext(
            'exception.forbidden_action',
            sprintf('You don\\'t have enough permissions to run the \"%s\" action on the \"%s\" or the \"%s\" action has been disabled.', \$parameters['action'], \$parameters['crud_controller'], \$parameters['action']),
            \$parameters,
            403
        );

        parent::__construct(\$exceptionContext);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Exception/ForbiddenActionException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Exception;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\ExceptionContext;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ForbiddenActionException extends BaseException
{
    public function __construct(AdminContext \$context)
    {
        \$parameters = [
            'crud_controller' => null === \$context->getCrud() ? null : \$context->getCrud()->getControllerFqcn(),
            'action' => null === \$context->getCrud() ? null : \$context->getCrud()->getCurrentAction(),
        ];

        \$exceptionContext = new ExceptionContext(
            'exception.forbidden_action',
            sprintf('You don\\'t have enough permissions to run the \"%s\" action on the \"%s\" or the \"%s\" action has been disabled.', \$parameters['action'], \$parameters['crud_controller'], \$parameters['action']),
            \$parameters,
            403
        );

        parent::__construct(\$exceptionContext);
    }
}
", "easycorp/easyadmin-bundle/src/Exception/ForbiddenActionException.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Exception\\ForbiddenActionException.php");
    }
}
