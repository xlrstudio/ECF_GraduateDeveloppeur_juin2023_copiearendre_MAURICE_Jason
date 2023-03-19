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

/* easycorp/easyadmin-bundle/src/Dto/FilterDataDto.php */
class __TwigTemplate_bea57187dd4bc0b7777aa6c9085fba1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/FilterDataDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/FilterDataDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterDataDto
{
    private int \$index;
    private string \$entityAlias;
    private FilterDto \$filterDto;
    private \$comparison;
    private mixed \$value;
    private mixed \$value2;

    private function __construct()
    {
    }

    public static function new(int \$index, FilterDto \$filterDto, string \$entityAlias, array \$formData): self
    {
        \$filterData = new self();
        \$filterData->index = \$index;
        \$filterData->filterDto = \$filterDto;
        \$filterData->entityAlias = \$entityAlias;
        \$filterData->comparison = \$formData['comparison'];
        \$filterData->value = \$formData['value'];
        \$filterData->value2 = \$formData['value2'] ?? null;

        return \$filterData;
    }

    public function getEntityAlias(): string
    {
        return \$this->entityAlias;
    }

    public function getProperty(): string
    {
        return \$this->filterDto->getProperty();
    }

    public function getFormTypeOption(string \$optionName)
    {
        return \$this->filterDto->getFormTypeOption(\$optionName);
    }

    public function getComparison(): string
    {
        return \$this->comparison;
    }

    public function getValue(): mixed
    {
        return \$this->value;
    }

    public function getValue2(): mixed
    {
        return \$this->value2;
    }

    public function getParameterName(): string
    {
        return sprintf('%s_%d', str_replace('.', '_', \$this->getProperty()), \$this->index);
    }

    public function getParameter2Name(): string
    {
        return sprintf('%s_%d', str_replace('.', '_', \$this->getProperty()), \$this->index + 1);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/FilterDataDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterDataDto
{
    private int \$index;
    private string \$entityAlias;
    private FilterDto \$filterDto;
    private \$comparison;
    private mixed \$value;
    private mixed \$value2;

    private function __construct()
    {
    }

    public static function new(int \$index, FilterDto \$filterDto, string \$entityAlias, array \$formData): self
    {
        \$filterData = new self();
        \$filterData->index = \$index;
        \$filterData->filterDto = \$filterDto;
        \$filterData->entityAlias = \$entityAlias;
        \$filterData->comparison = \$formData['comparison'];
        \$filterData->value = \$formData['value'];
        \$filterData->value2 = \$formData['value2'] ?? null;

        return \$filterData;
    }

    public function getEntityAlias(): string
    {
        return \$this->entityAlias;
    }

    public function getProperty(): string
    {
        return \$this->filterDto->getProperty();
    }

    public function getFormTypeOption(string \$optionName)
    {
        return \$this->filterDto->getFormTypeOption(\$optionName);
    }

    public function getComparison(): string
    {
        return \$this->comparison;
    }

    public function getValue(): mixed
    {
        return \$this->value;
    }

    public function getValue2(): mixed
    {
        return \$this->value2;
    }

    public function getParameterName(): string
    {
        return sprintf('%s_%d', str_replace('.', '_', \$this->getProperty()), \$this->index);
    }

    public function getParameter2Name(): string
    {
        return sprintf('%s_%d', str_replace('.', '_', \$this->getProperty()), \$this->index + 1);
    }
}
", "easycorp/easyadmin-bundle/src/Dto/FilterDataDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\FilterDataDto.php");
    }
}
