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

/* easycorp/easyadmin-bundle/src/Exception/BaseException.php */
class __TwigTemplate_ded0baac6032af9d3bd77ccf1e42564f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Exception/BaseException.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Exception/BaseException.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Exception;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\ExceptionContext;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class BaseException extends HttpException
{
    private ExceptionContext \$context;

    public function __construct(ExceptionContext \$context)
    {
        \$this->context = \$context;
        parent::__construct(\$this->context->getStatusCode(), \$this->context->getDebugMessage());
    }

    public function getContext(): ExceptionContext
    {
        return \$this->context;
    }

    /**
     * @return string The message that can safely be displayed to end-users because it doesn't contain sensitive data
     */
    public function getPublicMessage(): string
    {
        return \$this->context->getPublicMessage();
    }

    /**
     * @return string The full exception message that is logged and it can contain sensitive data
     */
    public function getDebugMessage(): string
    {
        return \$this->context->getDebugMessage();
    }

    public function getParameters(): array
    {
        return \$this->context->getParameters();
    }

    public function getStatusCode(): int
    {
        return \$this->context->getStatusCode();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Exception/BaseException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Exception;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\ExceptionContext;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class BaseException extends HttpException
{
    private ExceptionContext \$context;

    public function __construct(ExceptionContext \$context)
    {
        \$this->context = \$context;
        parent::__construct(\$this->context->getStatusCode(), \$this->context->getDebugMessage());
    }

    public function getContext(): ExceptionContext
    {
        return \$this->context;
    }

    /**
     * @return string The message that can safely be displayed to end-users because it doesn't contain sensitive data
     */
    public function getPublicMessage(): string
    {
        return \$this->context->getPublicMessage();
    }

    /**
     * @return string The full exception message that is logged and it can contain sensitive data
     */
    public function getDebugMessage(): string
    {
        return \$this->context->getDebugMessage();
    }

    public function getParameters(): array
    {
        return \$this->context->getParameters();
    }

    public function getStatusCode(): int
    {
        return \$this->context->getStatusCode();
    }
}
", "easycorp/easyadmin-bundle/src/Exception/BaseException.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Exception\\BaseException.php");
    }
}
