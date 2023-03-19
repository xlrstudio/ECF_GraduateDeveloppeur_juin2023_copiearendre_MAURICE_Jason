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

/* easycorp/easyadmin-bundle/src/Exception/FlattenException.php */
class __TwigTemplate_ebd5f7273f038496470ba9d312f4f312 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Exception/FlattenException.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Exception/FlattenException.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Exception;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\ExceptionContext;
use Symfony\\Component\\ErrorHandler\\Exception\\FlattenException as BaseFlattenException;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class FlattenException extends BaseFlattenException
{
    private ?ExceptionContext \$context = null;

    public static function create(\\Exception \$exception, ?int \$statusCode = null, array \$headers = []): static
    {
        if (!\$exception instanceof BaseException) {
            throw new \\RuntimeException(sprintf('You should only try to create an instance of \"%s\" with a \"EasyCorp\\Bundle\\EasyAdminBundle\\Exception\\BaseException\" instance, or subclass. \"%s\" given.', __CLASS__, \\get_class(\$exception)));
        }

        \$e = parent::create(\$exception, \$statusCode, \$headers);
        \$e->context = \$exception->getContext();

        return \$e;
    }

    public function getPublicMessage(): string
    {
        return \$this->context->getPublicMessage();
    }

    public function getDebugMessage(): string
    {
        return \$this->context->getDebugMessage();
    }

    public function getParameters(): array
    {
        return \$this->context->getParameters();
    }

    public function getTranslationParameters(): array
    {
        return \$this->context->getTranslationParameters();
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
        return "easycorp/easyadmin-bundle/src/Exception/FlattenException.php";
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
use Symfony\\Component\\ErrorHandler\\Exception\\FlattenException as BaseFlattenException;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
final class FlattenException extends BaseFlattenException
{
    private ?ExceptionContext \$context = null;

    public static function create(\\Exception \$exception, ?int \$statusCode = null, array \$headers = []): static
    {
        if (!\$exception instanceof BaseException) {
            throw new \\RuntimeException(sprintf('You should only try to create an instance of \"%s\" with a \"EasyCorp\\Bundle\\EasyAdminBundle\\Exception\\BaseException\" instance, or subclass. \"%s\" given.', __CLASS__, \\get_class(\$exception)));
        }

        \$e = parent::create(\$exception, \$statusCode, \$headers);
        \$e->context = \$exception->getContext();

        return \$e;
    }

    public function getPublicMessage(): string
    {
        return \$this->context->getPublicMessage();
    }

    public function getDebugMessage(): string
    {
        return \$this->context->getDebugMessage();
    }

    public function getParameters(): array
    {
        return \$this->context->getParameters();
    }

    public function getTranslationParameters(): array
    {
        return \$this->context->getTranslationParameters();
    }

    public function getStatusCode(): int
    {
        return \$this->context->getStatusCode();
    }
}
", "easycorp/easyadmin-bundle/src/Exception/FlattenException.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Exception\\FlattenException.php");
    }
}
