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

/* easycorp/easyadmin-bundle/src/Field/Configurator/CommonPostConfigurator.php */
class __TwigTemplate_51e3607bc009ae47eac23a1c84287d45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/CommonPostConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/CommonPostConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\BooleanField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use function Symfony\\Component\\String\\u;
use Twig\\Markup;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CommonPostConfigurator implements FieldConfiguratorInterface
{
    private AdminContextProvider\$adminContextProvider;
    private string \$charset;

    public function __construct(AdminContextProvider \$adminContextProvider, string \$charset)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->charset = \$charset;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        // this configurator applies to all kinds of properties
        return true;
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        if (\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_INDEX, Crud::PAGE_DETAIL], true)) {
            \$formattedValue = \$this->buildFormattedValueOption(\$field->getFormattedValue(), \$field, \$entityDto);
            \$field->setFormattedValue(\$formattedValue);
        }

        \$this->updateFieldTemplate(\$field);
    }

    private function buildFormattedValueOption(\$value, FieldDto \$field, EntityDto \$entityDto)
    {
        if (null === \$callable = \$field->getFormatValueCallable()) {
            return \$value;
        }

        \$formatted = \$callable(\$value, \$entityDto->getInstance());

        // if the callable returns a string, wrap it in a Twig Markup to render the
        // HTML and CSS/JS elements that it might contain
        return \\is_string(\$formatted) ? new Markup(\$formatted, \$this->charset) : \$formatted;
    }

    private function updateFieldTemplate(FieldDto \$field): void
    {
        \$usesEasyAdminTemplate = u(\$field->getTemplatePath())->startsWith('@EasyAdmin/');
        \$isBooleanField = BooleanField::class === \$field->getFieldFqcn();
        \$isNullValue = null === \$field->getFormattedValue();
        \$isEmpty = is_countable(\$field->getFormattedValue()) && 0 === \\count(\$field->getFormattedValue());

        \$adminContext = \$this->adminContextProvider->getContext();
        if (\$usesEasyAdminTemplate && \$isNullValue && !\$isBooleanField) {
            \$field->setTemplatePath(\$adminContext->getTemplatePath('label/null'));
        }

        if (\$usesEasyAdminTemplate && \$isEmpty) {
            \$field->setTemplatePath(\$adminContext->getTemplatePath('label/empty'));
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/CommonPostConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\BooleanField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use function Symfony\\Component\\String\\u;
use Twig\\Markup;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CommonPostConfigurator implements FieldConfiguratorInterface
{
    private AdminContextProvider\$adminContextProvider;
    private string \$charset;

    public function __construct(AdminContextProvider \$adminContextProvider, string \$charset)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->charset = \$charset;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        // this configurator applies to all kinds of properties
        return true;
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        if (\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_INDEX, Crud::PAGE_DETAIL], true)) {
            \$formattedValue = \$this->buildFormattedValueOption(\$field->getFormattedValue(), \$field, \$entityDto);
            \$field->setFormattedValue(\$formattedValue);
        }

        \$this->updateFieldTemplate(\$field);
    }

    private function buildFormattedValueOption(\$value, FieldDto \$field, EntityDto \$entityDto)
    {
        if (null === \$callable = \$field->getFormatValueCallable()) {
            return \$value;
        }

        \$formatted = \$callable(\$value, \$entityDto->getInstance());

        // if the callable returns a string, wrap it in a Twig Markup to render the
        // HTML and CSS/JS elements that it might contain
        return \\is_string(\$formatted) ? new Markup(\$formatted, \$this->charset) : \$formatted;
    }

    private function updateFieldTemplate(FieldDto \$field): void
    {
        \$usesEasyAdminTemplate = u(\$field->getTemplatePath())->startsWith('@EasyAdmin/');
        \$isBooleanField = BooleanField::class === \$field->getFieldFqcn();
        \$isNullValue = null === \$field->getFormattedValue();
        \$isEmpty = is_countable(\$field->getFormattedValue()) && 0 === \\count(\$field->getFormattedValue());

        \$adminContext = \$this->adminContextProvider->getContext();
        if (\$usesEasyAdminTemplate && \$isNullValue && !\$isBooleanField) {
            \$field->setTemplatePath(\$adminContext->getTemplatePath('label/null'));
        }

        if (\$usesEasyAdminTemplate && \$isEmpty) {
            \$field->setTemplatePath(\$adminContext->getTemplatePath('label/empty'));
        }
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/CommonPostConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\CommonPostConfigurator.php");
    }
}
