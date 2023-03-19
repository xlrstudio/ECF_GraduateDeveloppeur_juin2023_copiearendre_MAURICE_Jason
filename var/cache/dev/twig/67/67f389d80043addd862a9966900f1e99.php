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

/* easycorp/easyadmin-bundle/src/Config/Filters.php */
class __TwigTemplate_db453ae8ce97aaff6f68dfa99b1af8d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Filters.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Filters.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterConfigDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Filters
{
    private FilterConfigDto \$dto;

    private function __construct(FilterConfigDto \$filterConfigDto)
    {
        \$this->dto = \$filterConfigDto;
    }

    public static function new(): self
    {
        \$dto = new FilterConfigDto();

        return new self(\$dto);
    }

    public function add(FilterInterface|string \$propertyNameOrFilter): self
    {
        \$filterPropertyName = \\is_string(\$propertyNameOrFilter) ? \$propertyNameOrFilter : (string) \$propertyNameOrFilter;
        if (null !== \$this->dto->getFilter(\$filterPropertyName)) {
            throw new \\InvalidArgumentException(sprintf('There are two or more different filters defined for the \"%s\" property, but you can only define a single filter per property.', \$filterPropertyName));
        }

        \$this->dto->addFilter(\$propertyNameOrFilter);

        return \$this;
    }

    public function getAsDto(): FilterConfigDto
    {
        return \$this->dto;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/Filters.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Filter\\FilterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterConfigDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Filters
{
    private FilterConfigDto \$dto;

    private function __construct(FilterConfigDto \$filterConfigDto)
    {
        \$this->dto = \$filterConfigDto;
    }

    public static function new(): self
    {
        \$dto = new FilterConfigDto();

        return new self(\$dto);
    }

    public function add(FilterInterface|string \$propertyNameOrFilter): self
    {
        \$filterPropertyName = \\is_string(\$propertyNameOrFilter) ? \$propertyNameOrFilter : (string) \$propertyNameOrFilter;
        if (null !== \$this->dto->getFilter(\$filterPropertyName)) {
            throw new \\InvalidArgumentException(sprintf('There are two or more different filters defined for the \"%s\" property, but you can only define a single filter per property.', \$filterPropertyName));
        }

        \$this->dto->addFilter(\$propertyNameOrFilter);

        return \$this;
    }

    public function getAsDto(): FilterConfigDto
    {
        return \$this->dto;
    }
}
", "easycorp/easyadmin-bundle/src/Config/Filters.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Filters.php");
    }
}
