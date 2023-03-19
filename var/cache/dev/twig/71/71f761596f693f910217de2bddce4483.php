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

/* easycorp/easyadmin-bundle/src/ArgumentResolver/BatchActionDtoResolver.php */
class __TwigTemplate_7db4f27caa2592adc4d6f25570543526 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/ArgumentResolver/BatchActionDtoResolver.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/ArgumentResolver/BatchActionDtoResolver.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/*
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
if (interface_exists(ValueResolverInterface::class)) {
    final class BatchActionDtoResolver implements ValueResolverInterface
    {
        private AdminContextProvider \$adminContextProvider;
        private AdminUrlGenerator \$adminUrlGenerator;

        public function __construct(AdminContextProvider \$adminContextProvider, AdminUrlGenerator \$adminUrlGenerator)
        {
            \$this->adminContextProvider = \$adminContextProvider;
            \$this->adminUrlGenerator = \$adminUrlGenerator;
        }

        public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
        {
            if (BatchActionDto::class !== \$argument->getType()) {
                return [];
            }

            if (null === \$context = \$this->adminContextProvider->getContext()) {
                throw new \\RuntimeException(sprintf('Some of your controller actions have type-hinted an argument with the \"%s\" class but that\\'s only available for actions run to serve EasyAdmin requests. Remove the type-hint or make sure the action is part of an EasyAdmin request.', BatchActionDto::class));
            }

            \$batchActionUrl = \$context->getRequest()->request->get(EA::BATCH_ACTION_URL);
            \$batchActionUrlQueryString = parse_url(\$batchActionUrl, \\PHP_URL_QUERY);
            parse_str(\$batchActionUrlQueryString, \$batchActionUrlParts);
            \$referrerUrl = \$batchActionUrlParts[EA::REFERRER] ?? \$this->adminUrlGenerator->unsetAll()->generateUrl();

            yield new BatchActionDto(
                \$context->getRequest()->request->get(EA::BATCH_ACTION_NAME),
                \$context->getRequest()->request->all()[EA::BATCH_ACTION_ENTITY_IDS] ?? [],
                \$context->getRequest()->request->get(EA::ENTITY_FQCN),
                \$referrerUrl,
                \$context->getRequest()->request->get(EA::BATCH_ACTION_CSRF_TOKEN)
            );
        }
    }
} else {
    final class BatchActionDtoResolver implements ArgumentValueResolverInterface
    {
        private AdminContextProvider \$adminContextProvider;
        private AdminUrlGenerator \$adminUrlGenerator;

        public function __construct(AdminContextProvider \$adminContextProvider, AdminUrlGenerator \$adminUrlGenerator)
        {
            \$this->adminContextProvider = \$adminContextProvider;
            \$this->adminUrlGenerator = \$adminUrlGenerator;
        }

        public function supports(Request \$request, ArgumentMetadata \$argument): bool
        {
            return BatchActionDto::class === \$argument->getType();
        }

        public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
        {
            if (null === \$context = \$this->adminContextProvider->getContext()) {
                throw new \\RuntimeException(sprintf('Some of your controller actions have type-hinted an argument with the \"%s\" class but that\\'s only available for actions run to serve EasyAdmin requests. Remove the type-hint or make sure the action is part of an EasyAdmin request.', BatchActionDto::class));
            }

            \$batchActionUrl = \$context->getRequest()->request->get(EA::BATCH_ACTION_URL);
            \$batchActionUrlQueryString = parse_url(\$batchActionUrl, \\PHP_URL_QUERY);
            parse_str(\$batchActionUrlQueryString, \$batchActionUrlParts);
            \$referrerUrl = \$batchActionUrlParts[EA::REFERRER] ?? \$this->adminUrlGenerator->unsetAll()->generateUrl();

            yield new BatchActionDto(
                \$context->getRequest()->request->get(EA::BATCH_ACTION_NAME),
                \$context->getRequest()->request->all()[EA::BATCH_ACTION_ENTITY_IDS] ?? [],
                \$context->getRequest()->request->get(EA::ENTITY_FQCN),
                \$referrerUrl,
                \$context->getRequest()->request->get(EA::BATCH_ACTION_CSRF_TOKEN)
            );
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/ArgumentResolver/BatchActionDtoResolver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/*
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
if (interface_exists(ValueResolverInterface::class)) {
    final class BatchActionDtoResolver implements ValueResolverInterface
    {
        private AdminContextProvider \$adminContextProvider;
        private AdminUrlGenerator \$adminUrlGenerator;

        public function __construct(AdminContextProvider \$adminContextProvider, AdminUrlGenerator \$adminUrlGenerator)
        {
            \$this->adminContextProvider = \$adminContextProvider;
            \$this->adminUrlGenerator = \$adminUrlGenerator;
        }

        public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
        {
            if (BatchActionDto::class !== \$argument->getType()) {
                return [];
            }

            if (null === \$context = \$this->adminContextProvider->getContext()) {
                throw new \\RuntimeException(sprintf('Some of your controller actions have type-hinted an argument with the \"%s\" class but that\\'s only available for actions run to serve EasyAdmin requests. Remove the type-hint or make sure the action is part of an EasyAdmin request.', BatchActionDto::class));
            }

            \$batchActionUrl = \$context->getRequest()->request->get(EA::BATCH_ACTION_URL);
            \$batchActionUrlQueryString = parse_url(\$batchActionUrl, \\PHP_URL_QUERY);
            parse_str(\$batchActionUrlQueryString, \$batchActionUrlParts);
            \$referrerUrl = \$batchActionUrlParts[EA::REFERRER] ?? \$this->adminUrlGenerator->unsetAll()->generateUrl();

            yield new BatchActionDto(
                \$context->getRequest()->request->get(EA::BATCH_ACTION_NAME),
                \$context->getRequest()->request->all()[EA::BATCH_ACTION_ENTITY_IDS] ?? [],
                \$context->getRequest()->request->get(EA::ENTITY_FQCN),
                \$referrerUrl,
                \$context->getRequest()->request->get(EA::BATCH_ACTION_CSRF_TOKEN)
            );
        }
    }
} else {
    final class BatchActionDtoResolver implements ArgumentValueResolverInterface
    {
        private AdminContextProvider \$adminContextProvider;
        private AdminUrlGenerator \$adminUrlGenerator;

        public function __construct(AdminContextProvider \$adminContextProvider, AdminUrlGenerator \$adminUrlGenerator)
        {
            \$this->adminContextProvider = \$adminContextProvider;
            \$this->adminUrlGenerator = \$adminUrlGenerator;
        }

        public function supports(Request \$request, ArgumentMetadata \$argument): bool
        {
            return BatchActionDto::class === \$argument->getType();
        }

        public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
        {
            if (null === \$context = \$this->adminContextProvider->getContext()) {
                throw new \\RuntimeException(sprintf('Some of your controller actions have type-hinted an argument with the \"%s\" class but that\\'s only available for actions run to serve EasyAdmin requests. Remove the type-hint or make sure the action is part of an EasyAdmin request.', BatchActionDto::class));
            }

            \$batchActionUrl = \$context->getRequest()->request->get(EA::BATCH_ACTION_URL);
            \$batchActionUrlQueryString = parse_url(\$batchActionUrl, \\PHP_URL_QUERY);
            parse_str(\$batchActionUrlQueryString, \$batchActionUrlParts);
            \$referrerUrl = \$batchActionUrlParts[EA::REFERRER] ?? \$this->adminUrlGenerator->unsetAll()->generateUrl();

            yield new BatchActionDto(
                \$context->getRequest()->request->get(EA::BATCH_ACTION_NAME),
                \$context->getRequest()->request->all()[EA::BATCH_ACTION_ENTITY_IDS] ?? [],
                \$context->getRequest()->request->get(EA::ENTITY_FQCN),
                \$referrerUrl,
                \$context->getRequest()->request->get(EA::BATCH_ACTION_CSRF_TOKEN)
            );
        }
    }
}
", "easycorp/easyadmin-bundle/src/ArgumentResolver/BatchActionDtoResolver.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\ArgumentResolver\\BatchActionDtoResolver.php");
    }
}
