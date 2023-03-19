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

/* easycorp/easyadmin-bundle/src/Context/ExceptionContext.php */
class __TwigTemplate_60c8c6270bba17f571130bab624391f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Context/ExceptionContext.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Context/ExceptionContext.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Context;

use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ExceptionContext
{
    private string \$publicMessage;
    private string \$debugMessage;
    private array \$parameters;
    private int \$statusCode;

    public function __construct(string \$publicMessage, string \$debugMessage = '', array \$parameters = [], int \$statusCode = 500)
    {
        \$this->publicMessage = \$publicMessage;
        \$this->debugMessage = \$debugMessage;
        \$this->parameters = \$parameters;
        \$this->statusCode = \$statusCode;
    }

    public function getPublicMessage(): string
    {
        return \$this->publicMessage;
    }

    public function getDebugMessage(): string
    {
        return \$this->debugMessage;
    }

    public function getParameters(): array
    {
        return \$this->parameters;
    }

    public function getTranslationParameters(): array
    {
        return array_map(
            static fn (\$parameter): string => u(\$parameter)->ensureStart('%')->ensureEnd('%')->toString(),
            \$this->parameters
        );
    }

    public function getStatusCode(): int
    {
        return \$this->statusCode;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Context/ExceptionContext.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Context;

use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ExceptionContext
{
    private string \$publicMessage;
    private string \$debugMessage;
    private array \$parameters;
    private int \$statusCode;

    public function __construct(string \$publicMessage, string \$debugMessage = '', array \$parameters = [], int \$statusCode = 500)
    {
        \$this->publicMessage = \$publicMessage;
        \$this->debugMessage = \$debugMessage;
        \$this->parameters = \$parameters;
        \$this->statusCode = \$statusCode;
    }

    public function getPublicMessage(): string
    {
        return \$this->publicMessage;
    }

    public function getDebugMessage(): string
    {
        return \$this->debugMessage;
    }

    public function getParameters(): array
    {
        return \$this->parameters;
    }

    public function getTranslationParameters(): array
    {
        return array_map(
            static fn (\$parameter): string => u(\$parameter)->ensureStart('%')->ensureEnd('%')->toString(),
            \$this->parameters
        );
    }

    public function getStatusCode(): int
    {
        return \$this->statusCode;
    }
}
", "easycorp/easyadmin-bundle/src/Context/ExceptionContext.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Context\\ExceptionContext.php");
    }
}
