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

/* easycorp/easyadmin-bundle/src/Filter/Configurator/ChoiceConfigurator.php */
class __TwigTemplate_89f7aff38b8e6efbdbe9422ecb391430 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/ChoiceConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/ChoiceConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\ChoiceFilter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ChoiceConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return ChoiceFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$choices = \$filterDto->getFormTypeOption('value_type_options.choices');

        if (null === \$choices || 0 === \\count(\$choices)) {
            throw new \\InvalidArgumentException(sprintf('The choice filter associated to the \"%s\" property does not define its choices. Define them with the setChoices() method.', \$filterDto->getProperty()));
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Filter/Configurator/ChoiceConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\ChoiceFilter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ChoiceConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return ChoiceFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$choices = \$filterDto->getFormTypeOption('value_type_options.choices');

        if (null === \$choices || 0 === \\count(\$choices)) {
            throw new \\InvalidArgumentException(sprintf('The choice filter associated to the \"%s\" property does not define its choices. Define them with the setChoices() method.', \$filterDto->getProperty()));
        }
    }
}
", "easycorp/easyadmin-bundle/src/Filter/Configurator/ChoiceConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\Configurator\\ChoiceConfigurator.php");
    }
}
