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

/* easycorp/easyadmin-bundle/src/Field/Configurator/BooleanConfigurator.php */
class __TwigTemplate_b820cdd2e06ddad42fe8b055eae3c690 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/BooleanConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/BooleanConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Action;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\BooleanField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class BooleanConfigurator implements FieldConfiguratorInterface
{
    private AdminUrlGenerator \$adminUrlGenerator;
    private ?CsrfTokenManagerInterface \$csrfTokenManager;

    public function __construct(AdminUrlGenerator \$adminUrlGenerator, ?CsrfTokenManagerInterface \$csrfTokenManager = null)
    {
        \$this->adminUrlGenerator = \$adminUrlGenerator;
        \$this->csrfTokenManager = \$csrfTokenManager;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return BooleanField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$isRenderedAsSwitch = true === \$field->getCustomOption(BooleanField::OPTION_RENDER_AS_SWITCH);

        if (\$isRenderedAsSwitch) {
            \$crudDto = \$context->getCrud();

            if (null !== \$crudDto && Action::NEW !== \$crudDto->getCurrentAction()) {
                \$toggleUrl = \$this->adminUrlGenerator
                    ->setAction(Action::EDIT)
                    ->setEntityId(\$entityDto->getPrimaryKeyValue())
                    ->set('fieldName', \$field->getProperty())
                    ->set('csrfToken', \$this->csrfTokenManager?->getToken(BooleanField::CSRF_TOKEN_NAME))
                    ->generateUrl();
                \$field->setCustomOption(BooleanField::OPTION_TOGGLE_URL, \$toggleUrl);
            }

            \$field->setFormTypeOptionIfNotSet('label_attr.class', 'checkbox-switch');
            \$field->setCssClass(\$field->getCssClass().' has-switch');
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/BooleanConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Action;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\BooleanField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class BooleanConfigurator implements FieldConfiguratorInterface
{
    private AdminUrlGenerator \$adminUrlGenerator;
    private ?CsrfTokenManagerInterface \$csrfTokenManager;

    public function __construct(AdminUrlGenerator \$adminUrlGenerator, ?CsrfTokenManagerInterface \$csrfTokenManager = null)
    {
        \$this->adminUrlGenerator = \$adminUrlGenerator;
        \$this->csrfTokenManager = \$csrfTokenManager;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return BooleanField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$isRenderedAsSwitch = true === \$field->getCustomOption(BooleanField::OPTION_RENDER_AS_SWITCH);

        if (\$isRenderedAsSwitch) {
            \$crudDto = \$context->getCrud();

            if (null !== \$crudDto && Action::NEW !== \$crudDto->getCurrentAction()) {
                \$toggleUrl = \$this->adminUrlGenerator
                    ->setAction(Action::EDIT)
                    ->setEntityId(\$entityDto->getPrimaryKeyValue())
                    ->set('fieldName', \$field->getProperty())
                    ->set('csrfToken', \$this->csrfTokenManager?->getToken(BooleanField::CSRF_TOKEN_NAME))
                    ->generateUrl();
                \$field->setCustomOption(BooleanField::OPTION_TOGGLE_URL, \$toggleUrl);
            }

            \$field->setFormTypeOptionIfNotSet('label_attr.class', 'checkbox-switch');
            \$field->setCssClass(\$field->getCssClass().' has-switch');
        }
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/BooleanConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\BooleanConfigurator.php");
    }
}
