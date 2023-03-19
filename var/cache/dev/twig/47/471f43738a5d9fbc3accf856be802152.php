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

/* easycorp/easyadmin-bundle/src/Dto/FilterConfigDto.php */
class __TwigTemplate_cd9058ad00d22ab2d64d7d1bcf680613 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/FilterConfigDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/FilterConfigDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterConfigDto
{
    private KeyValueStore \$filters;

    public function __construct()
    {
        \$this->filters = KeyValueStore::new();
    }

    public function addFilter(/* @var FilterInterface|string */ \$filterNameOrConfig): void
    {
        if (!\\is_string(\$filterNameOrConfig) && !\$filterNameOrConfig instanceof FilterInterface) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$filterNameOrConfig',
                __METHOD__,
                sprintf('\"string\" or \"%s\"', FilterInterface::class),
                \\gettype(\$filterNameOrConfig)
            );
        }

        \$this->filters->set((string) \$filterNameOrConfig, \$filterNameOrConfig);
    }

    /**
     * @return FilterInterface|string|null
     */
    public function getFilter(string \$propertyName)/* : FilterInterface|string|null */
    {
        return \$this->filters->get(\$propertyName);
    }

    public function all(): array
    {
        return \$this->filters->all();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/FilterConfigDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterConfigDto
{
    private KeyValueStore \$filters;

    public function __construct()
    {
        \$this->filters = KeyValueStore::new();
    }

    public function addFilter(/* @var FilterInterface|string */ \$filterNameOrConfig): void
    {
        if (!\\is_string(\$filterNameOrConfig) && !\$filterNameOrConfig instanceof FilterInterface) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$filterNameOrConfig',
                __METHOD__,
                sprintf('\"string\" or \"%s\"', FilterInterface::class),
                \\gettype(\$filterNameOrConfig)
            );
        }

        \$this->filters->set((string) \$filterNameOrConfig, \$filterNameOrConfig);
    }

    /**
     * @return FilterInterface|string|null
     */
    public function getFilter(string \$propertyName)/* : FilterInterface|string|null */
    {
        return \$this->filters->get(\$propertyName);
    }

    public function all(): array
    {
        return \$this->filters->all();
    }
}
", "easycorp/easyadmin-bundle/src/Dto/FilterConfigDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\FilterConfigDto.php");
    }
}
