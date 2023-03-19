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

/* easycorp/easyadmin-bundle/src/Provider/AdminContextProvider.php */
class __TwigTemplate_89459d96871b070860c7d70bce546305 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Provider/AdminContextProvider.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Provider/AdminContextProvider.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Provider;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * Inject this in services that need to get the admin context object.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AdminContextProvider
{
    private RequestStack \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    public function getContext(): ?AdminContext
    {
        \$currentRequest = \$this->requestStack->getCurrentRequest();

        return null !== \$currentRequest ? \$currentRequest->get(EA::CONTEXT_REQUEST_ATTRIBUTE) : null;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Provider/AdminContextProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Provider;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * Inject this in services that need to get the admin context object.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AdminContextProvider
{
    private RequestStack \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    public function getContext(): ?AdminContext
    {
        \$currentRequest = \$this->requestStack->getCurrentRequest();

        return null !== \$currentRequest ? \$currentRequest->get(EA::CONTEXT_REQUEST_ATTRIBUTE) : null;
    }
}
", "easycorp/easyadmin-bundle/src/Provider/AdminContextProvider.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Provider\\AdminContextProvider.php");
    }
}
