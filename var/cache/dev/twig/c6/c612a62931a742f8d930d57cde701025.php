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

/* easycorp/easyadmin-bundle/src/Provider/FieldProvider.php */
class __TwigTemplate_2a54e434a0e4483795d77161fa51d287 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Provider/FieldProvider.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Provider/FieldProvider.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Provider;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Field;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FieldProvider
{
    private AdminContextProvider \$adminContextProvider;

    public function __construct(AdminContextProvider \$adminContextProvider)
    {
        \$this->adminContextProvider = \$adminContextProvider;
    }

    public function getDefaultFields(string \$pageName): array
    {
        \$defaultPropertyNames = [];
        \$maxNumProperties = Crud::PAGE_INDEX === \$pageName ? 7 : \\PHP_INT_MAX;
        \$entityDto = \$this->adminContextProvider->getContext()->getEntity();

        \$excludedPropertyTypes = [
            Crud::PAGE_EDIT => [Types::BINARY, Types::BLOB, Types::JSON, Types::OBJECT],
            Crud::PAGE_INDEX => [Types::BINARY, Types::BLOB, Types::GUID, Types::JSON, Types::OBJECT, Types::TEXT],
            Crud::PAGE_NEW => [Types::BINARY, Types::BLOB, Types::JSON, Types::OBJECT],
            Crud::PAGE_DETAIL => [Types::BINARY, Types::JSON, Types::OBJECT],
        ];

        \$excludedPropertyNames = [
            Crud::PAGE_EDIT => [\$entityDto->getPrimaryKeyName()],
            Crud::PAGE_INDEX => ['password', 'salt', 'slug', 'updatedAt', 'uuid'],
            Crud::PAGE_NEW => [\$entityDto->getPrimaryKeyName()],
            Crud::PAGE_DETAIL => [],
        ];

        foreach (\$entityDto->getAllPropertyNames() as \$propertyName) {
            \$metadata = \$entityDto->getPropertyMetadata(\$propertyName);
            if (!\\in_array(\$propertyName, \$excludedPropertyNames[\$pageName], true) && !\\in_array(\$metadata->get('type'), \$excludedPropertyTypes[\$pageName], true)) {
                \$defaultPropertyNames[] = \$propertyName;
            }
        }

        if (\\count(\$defaultPropertyNames) > \$maxNumProperties) {
            \$defaultPropertyNames = \\array_slice(\$defaultPropertyNames, 0, \$maxNumProperties, true);
        }

        return array_map(static fn (string \$fieldName) => Field::new(\$fieldName), \$defaultPropertyNames);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Provider/FieldProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Provider;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Field;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FieldProvider
{
    private AdminContextProvider \$adminContextProvider;

    public function __construct(AdminContextProvider \$adminContextProvider)
    {
        \$this->adminContextProvider = \$adminContextProvider;
    }

    public function getDefaultFields(string \$pageName): array
    {
        \$defaultPropertyNames = [];
        \$maxNumProperties = Crud::PAGE_INDEX === \$pageName ? 7 : \\PHP_INT_MAX;
        \$entityDto = \$this->adminContextProvider->getContext()->getEntity();

        \$excludedPropertyTypes = [
            Crud::PAGE_EDIT => [Types::BINARY, Types::BLOB, Types::JSON, Types::OBJECT],
            Crud::PAGE_INDEX => [Types::BINARY, Types::BLOB, Types::GUID, Types::JSON, Types::OBJECT, Types::TEXT],
            Crud::PAGE_NEW => [Types::BINARY, Types::BLOB, Types::JSON, Types::OBJECT],
            Crud::PAGE_DETAIL => [Types::BINARY, Types::JSON, Types::OBJECT],
        ];

        \$excludedPropertyNames = [
            Crud::PAGE_EDIT => [\$entityDto->getPrimaryKeyName()],
            Crud::PAGE_INDEX => ['password', 'salt', 'slug', 'updatedAt', 'uuid'],
            Crud::PAGE_NEW => [\$entityDto->getPrimaryKeyName()],
            Crud::PAGE_DETAIL => [],
        ];

        foreach (\$entityDto->getAllPropertyNames() as \$propertyName) {
            \$metadata = \$entityDto->getPropertyMetadata(\$propertyName);
            if (!\\in_array(\$propertyName, \$excludedPropertyNames[\$pageName], true) && !\\in_array(\$metadata->get('type'), \$excludedPropertyTypes[\$pageName], true)) {
                \$defaultPropertyNames[] = \$propertyName;
            }
        }

        if (\\count(\$defaultPropertyNames) > \$maxNumProperties) {
            \$defaultPropertyNames = \\array_slice(\$defaultPropertyNames, 0, \$maxNumProperties, true);
        }

        return array_map(static fn (string \$fieldName) => Field::new(\$fieldName), \$defaultPropertyNames);
    }
}
", "easycorp/easyadmin-bundle/src/Provider/FieldProvider.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Provider\\FieldProvider.php");
    }
}
