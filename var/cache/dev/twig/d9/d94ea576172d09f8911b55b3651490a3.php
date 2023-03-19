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

/* easycorp/easyadmin-bundle/src/Filter/Configurator/NullConfigurator.php */
class __TwigTemplate_ab09518f27d2770b8bf89aab12f0c12c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/NullConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/Configurator/NullConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\NullFilter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class NullConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return NullFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$choices = \$filterDto->getFormTypeOption('choices');

        if (null === \$choices || 0 === \\count(\$choices)) {
            throw new \\InvalidArgumentException(sprintf('The Null filter associated to the \"%s\" property does not define the labels of the NULL and NOT NULL options. Define them with the setChoiceLabels() method.', \$filterDto->getProperty()));
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Filter/Configurator/NullConfigurator.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\NullFilter;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class NullConfigurator implements FilterConfiguratorInterface
{
    public function supports(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): bool
    {
        return NullFilter::class === \$filterDto->getFqcn();
    }

    public function configure(FilterDto \$filterDto, ?FieldDto \$fieldDto, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$choices = \$filterDto->getFormTypeOption('choices');

        if (null === \$choices || 0 === \\count(\$choices)) {
            throw new \\InvalidArgumentException(sprintf('The Null filter associated to the \"%s\" property does not define the labels of the NULL and NOT NULL options. Define them with the setChoiceLabels() method.', \$filterDto->getProperty()));
        }
    }
}
", "easycorp/easyadmin-bundle/src/Filter/Configurator/NullConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\Configurator\\NullConfigurator.php");
    }
}
