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

/* easycorp/easyadmin-bundle/src/ArgumentResolver/AdminContextResolver.php */
class __TwigTemplate_89d5dbe06dad627d144be31eda34b1d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/ArgumentResolver/AdminContextResolver.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/ArgumentResolver/AdminContextResolver.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/*
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
if (interface_exists(ValueResolverInterface::class)) {
    final class AdminContextResolver implements ValueResolverInterface
    {
        private AdminContextProvider \$adminContextProvider;

        public function __construct(AdminContextProvider \$adminContextProvider)
        {
            \$this->adminContextProvider = \$adminContextProvider;
        }

        public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
        {
            if (AdminContext::class !== \$argument->getType()) {
                return [];
            }

            yield \$this->adminContextProvider->getContext();
        }
    }
} else {
    final class AdminContextResolver implements ArgumentValueResolverInterface
    {
        private AdminContextProvider \$adminContextProvider;

        public function __construct(AdminContextProvider \$adminContextProvider)
        {
            \$this->adminContextProvider = \$adminContextProvider;
        }

        public function supports(Request \$request, ArgumentMetadata \$argument): bool
        {
            return AdminContext::class === \$argument->getType();
        }

        public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
        {
            yield \$this->adminContextProvider->getContext();
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/ArgumentResolver/AdminContextResolver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/*
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
if (interface_exists(ValueResolverInterface::class)) {
    final class AdminContextResolver implements ValueResolverInterface
    {
        private AdminContextProvider \$adminContextProvider;

        public function __construct(AdminContextProvider \$adminContextProvider)
        {
            \$this->adminContextProvider = \$adminContextProvider;
        }

        public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
        {
            if (AdminContext::class !== \$argument->getType()) {
                return [];
            }

            yield \$this->adminContextProvider->getContext();
        }
    }
} else {
    final class AdminContextResolver implements ArgumentValueResolverInterface
    {
        private AdminContextProvider \$adminContextProvider;

        public function __construct(AdminContextProvider \$adminContextProvider)
        {
            \$this->adminContextProvider = \$adminContextProvider;
        }

        public function supports(Request \$request, ArgumentMetadata \$argument): bool
        {
            return AdminContext::class === \$argument->getType();
        }

        public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
        {
            yield \$this->adminContextProvider->getContext();
        }
    }
}
", "easycorp/easyadmin-bundle/src/ArgumentResolver/AdminContextResolver.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\ArgumentResolver\\AdminContextResolver.php");
    }
}
