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

/* easycorp/easyadmin-bundle/src/Inspector/DataCollector.php */
class __TwigTemplate_a85370ce69f68157720b18f1941d69ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Inspector/DataCollector.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Inspector/DataCollector.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Inspector;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector as BaseDataCollector;

/**
 * Collects information about the requests related to EasyAdmin and displays
 * it both in the web debug toolbar and in the profiler.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class DataCollector extends BaseDataCollector
{
    private AdminContextProvider \$adminContextProvider;

    public function __construct(AdminContextProvider \$adminContextProvider)
    {
        \$this->adminContextProvider = \$adminContextProvider;
    }

    public function reset()
    {
        \$this->data = [];
    }

    public function collect(Request \$request, Response \$response, \$exception = null)
    {
        if (null === \$context = \$this->adminContextProvider->getContext()) {
            return;
        }

        \$collectedData = [];
        foreach (\$this->collectData(\$context) as \$key => \$value) {
            \$collectedData[\$key] = \$this->cloneVar(\$value);
        }

        \$this->data = \$collectedData;
    }

    public function isEasyAdminRequest(): bool
    {
        return 0 !== \\count(\$this->data);
    }

    public function getData(): array
    {
        return \$this->data;
    }

    private function collectData(AdminContext \$context): array
    {
        return [
            'CRUD Controller FQCN' => null === \$context->getCrud() ? null : \$context->getCrud()->getControllerFqcn(),
            'CRUD Action' => \$context->getRequest()->get(EA::CRUD_ACTION),
            'Entity ID' => \$context->getRequest()->get(EA::ENTITY_ID),
            'Sort' => \$context->getRequest()->get(EA::SORT),
        ];
    }

    public function getName(): string
    {
        return 'easyadmin';
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Inspector/DataCollector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Inspector;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector as BaseDataCollector;

/**
 * Collects information about the requests related to EasyAdmin and displays
 * it both in the web debug toolbar and in the profiler.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class DataCollector extends BaseDataCollector
{
    private AdminContextProvider \$adminContextProvider;

    public function __construct(AdminContextProvider \$adminContextProvider)
    {
        \$this->adminContextProvider = \$adminContextProvider;
    }

    public function reset()
    {
        \$this->data = [];
    }

    public function collect(Request \$request, Response \$response, \$exception = null)
    {
        if (null === \$context = \$this->adminContextProvider->getContext()) {
            return;
        }

        \$collectedData = [];
        foreach (\$this->collectData(\$context) as \$key => \$value) {
            \$collectedData[\$key] = \$this->cloneVar(\$value);
        }

        \$this->data = \$collectedData;
    }

    public function isEasyAdminRequest(): bool
    {
        return 0 !== \\count(\$this->data);
    }

    public function getData(): array
    {
        return \$this->data;
    }

    private function collectData(AdminContext \$context): array
    {
        return [
            'CRUD Controller FQCN' => null === \$context->getCrud() ? null : \$context->getCrud()->getControllerFqcn(),
            'CRUD Action' => \$context->getRequest()->get(EA::CRUD_ACTION),
            'Entity ID' => \$context->getRequest()->get(EA::ENTITY_ID),
            'Sort' => \$context->getRequest()->get(EA::SORT),
        ];
    }

    public function getName(): string
    {
        return 'easyadmin';
    }
}
", "easycorp/easyadmin-bundle/src/Inspector/DataCollector.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Inspector\\DataCollector.php");
    }
}
