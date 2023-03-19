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

/* easycorp/easyadmin-bundle/src/Filter/FilterTrait.php */
class __TwigTemplate_e4e5e523688fa8548d41a93a6ea51887 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/FilterTrait.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Filter/FilterTrait.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDataDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
trait FilterTrait
{
    private FilterDto \$dto;

    private function __construct()
    {
        \$dto = new FilterDto();
        \$dto->setApplyCallable(fn (QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto) => \$this->apply(\$queryBuilder, \$filterDataDto, \$fieldDto, \$entityDto));

        \$this->dto = \$dto;
    }

    public function __toString(): string
    {
        return \$this->dto->getProperty();
    }

    public function setFilterFqcn(string \$fqcn): self
    {
        \$this->dto->setFqcn(\$fqcn);

        return \$this;
    }

    public function setProperty(string \$propertyName): self
    {
        \$this->dto->setProperty(\$propertyName);

        return \$this;
    }

    public function setLabel(\$label): self
    {
        \$this->dto->setLabel(\$label);

        return \$this;
    }

    public function setFormType(string \$formType): self
    {
        \$this->dto->setFormType(\$formType);

        return \$this;
    }

    public function setFormTypeOptions(array \$options): self
    {
        \$this->dto->setFormTypeOptions(\$options);

        return \$this;
    }

    public function setFormTypeOption(string \$optionName, mixed \$optionValue): self
    {
        \$this->dto->setFormTypeOption(\$optionName, \$optionValue);

        return \$this;
    }

    public function getAsDto(): FilterDto
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
        return "easycorp/easyadmin-bundle/src/Filter/FilterTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Filter;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDataDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
trait FilterTrait
{
    private FilterDto \$dto;

    private function __construct()
    {
        \$dto = new FilterDto();
        \$dto->setApplyCallable(fn (QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto) => \$this->apply(\$queryBuilder, \$filterDataDto, \$fieldDto, \$entityDto));

        \$this->dto = \$dto;
    }

    public function __toString(): string
    {
        return \$this->dto->getProperty();
    }

    public function setFilterFqcn(string \$fqcn): self
    {
        \$this->dto->setFqcn(\$fqcn);

        return \$this;
    }

    public function setProperty(string \$propertyName): self
    {
        \$this->dto->setProperty(\$propertyName);

        return \$this;
    }

    public function setLabel(\$label): self
    {
        \$this->dto->setLabel(\$label);

        return \$this;
    }

    public function setFormType(string \$formType): self
    {
        \$this->dto->setFormType(\$formType);

        return \$this;
    }

    public function setFormTypeOptions(array \$options): self
    {
        \$this->dto->setFormTypeOptions(\$options);

        return \$this;
    }

    public function setFormTypeOption(string \$optionName, mixed \$optionValue): self
    {
        \$this->dto->setFormTypeOption(\$optionName, \$optionValue);

        return \$this;
    }

    public function getAsDto(): FilterDto
    {
        return \$this->dto;
    }
}
", "easycorp/easyadmin-bundle/src/Filter/FilterTrait.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Filter\\FilterTrait.php");
    }
}
