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

/* easycorp/easyadmin-bundle/src/Filter/Configurator/NumericConfigurator.php */
class __TwigTemplate_c35da02f48a008feb0850471f0c62093 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/NumericConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/NumericConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\NumericFilter;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class NumericConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return NumericFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$propertyType = \$entityDto->getPropertyMetadata(\$filterDto->getProperty())->get('type');

        if (Types::DECIMAL === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type_options.input', 'string');
        }

        if (\\in_array(\$propertyType, [Types::BIGINT, Types::INTEGER, Types::SMALLINT], true)) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', IntegerType::class);
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Filter/Configurator/NumericConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use Doctrine\\DBAL\\Types\\Types;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\NumericFilter;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class NumericConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return NumericFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$propertyType = \$entityDto->getPropertyMetadata(\$filterDto->getProperty())->get('type');

        if (Types::DECIMAL === \$propertyType) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type_options.input', 'string');
        }

        if (\\in_array(\$propertyType, [Types::BIGINT, Types::INTEGER, Types::SMALLINT], true)) {
            \$filterDto->setFormTypeOptionIfNotSet('value_type', IntegerType::class);
        }
    }
}
", "easycorp/easyadmin-bundle/src/Filter/Configurator/NumericConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\Configurator\\NumericConfigurator.php");
    }
}
