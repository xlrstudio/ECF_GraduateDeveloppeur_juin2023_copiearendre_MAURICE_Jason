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

/* easycorp/easyadmin-bundle/src/Field/Configurator/ArrayConfigurator.php */
class __TwigTemplate_8944050fe59b6c90a6505fd68e3f7221 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/ArrayConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/ArrayConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use Doctrine\\ORM\\PersistentCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ArrayConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return ArrayField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$field->setFormTypeOption('entry_type', TextType::class);
        \$field->setFormTypeOptionIfNotSet('allow_add', true);
        \$field->setFormTypeOptionIfNotSet('allow_delete', true);
        \$field->setFormTypeOptionIfNotSet('delete_empty', true);
        \$field->setFormTypeOptionIfNotSet('entry_options.label', false);

        \$value = \$field->getValue();
        if (!is_countable(\$value) || 0 === \\count(\$value)) {
            \$field->setTemplateName('label/empty');

            return;
        }

        if (Crud::PAGE_INDEX === \$context->getCrud()->getCurrentPage()) {
            \$values = \$field->getValue();
            if (\$values instanceof PersistentCollection) {
                \$values = array_map(static fn (\$item): string => (string) \$item, \$values->getValues());
            }

            \$field->setFormattedValue(u(', ')->join(\$values)->toString());
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/ArrayConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use Doctrine\\ORM\\PersistentCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ArrayConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return ArrayField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$field->setFormTypeOption('entry_type', TextType::class);
        \$field->setFormTypeOptionIfNotSet('allow_add', true);
        \$field->setFormTypeOptionIfNotSet('allow_delete', true);
        \$field->setFormTypeOptionIfNotSet('delete_empty', true);
        \$field->setFormTypeOptionIfNotSet('entry_options.label', false);

        \$value = \$field->getValue();
        if (!is_countable(\$value) || 0 === \\count(\$value)) {
            \$field->setTemplateName('label/empty');

            return;
        }

        if (Crud::PAGE_INDEX === \$context->getCrud()->getCurrentPage()) {
            \$values = \$field->getValue();
            if (\$values instanceof PersistentCollection) {
                \$values = array_map(static fn (\$item): string => (string) \$item, \$values->getValues());
            }

            \$field->setFormattedValue(u(', ')->join(\$values)->toString());
        }
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/ArrayConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\ArrayConfigurator.php");
    }
}
