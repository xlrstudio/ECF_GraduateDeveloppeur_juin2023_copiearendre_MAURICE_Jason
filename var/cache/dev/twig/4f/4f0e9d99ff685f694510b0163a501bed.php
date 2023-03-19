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

/* easycorp/easyadmin-bundle/src/Exception/InsufficientEntityPermissionException.php */
class __TwigTemplate_014d9d1c776e4cc101f2cad892b9cf6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Exception/InsufficientEntityPermissionException.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Exception/InsufficientEntityPermissionException.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Exception;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\ExceptionContext;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class InsufficientEntityPermissionException extends BaseException
{
    public function __construct(AdminContext \$adminContext)
    {
        \$parameters = [
            'entity_fqcn' => \$adminContext->getEntity()->getFqcn(),
            'entity_id' => \$entityId = \$adminContext->getRequest()->query->get('entityId'),
        ];

        if (null !== \$entityId) {
            \$debugMessage = sprintf('You don\\'t have enough permissions to access this instance of the \"%s\" entity.', \$parameters['entity_fqcn']);
        } else {
            \$debugMessage = sprintf('You don\\'t have enough permissions to access the instance of the \"%s\" entity with id  = %s.', \$parameters['entity_fqcn'], \$entityId);
        }

        \$exceptionContext = new ExceptionContext(
            'exception.insufficient_entity_permission',
            \$debugMessage,
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
        return "easycorp/easyadmin-bundle/src/Exception/InsufficientEntityPermissionException.php";
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
final class InsufficientEntityPermissionException extends BaseException
{
    public function __construct(AdminContext \$adminContext)
    {
        \$parameters = [
            'entity_fqcn' => \$adminContext->getEntity()->getFqcn(),
            'entity_id' => \$entityId = \$adminContext->getRequest()->query->get('entityId'),
        ];

        if (null !== \$entityId) {
            \$debugMessage = sprintf('You don\\'t have enough permissions to access this instance of the \"%s\" entity.', \$parameters['entity_fqcn']);
        } else {
            \$debugMessage = sprintf('You don\\'t have enough permissions to access the instance of the \"%s\" entity with id  = %s.', \$parameters['entity_fqcn'], \$entityId);
        }

        \$exceptionContext = new ExceptionContext(
            'exception.insufficient_entity_permission',
            \$debugMessage,
            \$parameters,
            403
        );

        parent::__construct(\$exceptionContext);
    }
}
", "easycorp/easyadmin-bundle/src/Exception/InsufficientEntityPermissionException.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Exception\\InsufficientEntityPermissionException.php");
    }
}
