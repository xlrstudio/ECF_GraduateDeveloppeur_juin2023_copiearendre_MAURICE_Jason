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

/* easycorp/easyadmin-bundle/src/Dto/FilterDto.php */
class __TwigTemplate_021fcf39e2240b4f7656e3757280f6c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/FilterDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/FilterDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterDto
{
    private ?string \$fqcn = null;
    private ?string \$formType = null;
    private KeyValueStore \$formTypeOptions;
    private ?string \$propertyName = null;
    private \$label;
    private \$applyCallable;

    public function __construct()
    {
        \$this->formTypeOptions = KeyValueStore::new();
    }

    public function getFqcn(): ?string
    {
        return \$this->fqcn;
    }

    public function setFqcn(string \$fqcn): void
    {
        \$this->fqcn = \$fqcn;
    }

    public function getFormType(): ?string
    {
        return \$this->formType;
    }

    public function getFormTypeOptions(): array
    {
        return \$this->formTypeOptions->all();
    }

    public function getFormTypeOption(string \$optionName)
    {
        return \$this->formTypeOptions->get(\$optionName);
    }

    public function setFormTypeOptions(array \$formTypeOptions): void
    {
        \$this->formTypeOptions->setAll(\$formTypeOptions);
    }

    public function setFormTypeOption(string \$optionName, mixed \$optionValue): void
    {
        \$this->formTypeOptions->set(\$optionName, \$optionValue);
    }

    public function setFormTypeOptionIfNotSet(string \$optionName, mixed \$optionValue): void
    {
        \$this->formTypeOptions->setIfNotSet(\$optionName, \$optionValue);
    }

    public function setFormType(string \$formType): void
    {
        \$this->formType = \$formType;
    }

    public function getProperty(): string
    {
        return \$this->propertyName;
    }

    public function setProperty(string \$propertyName): void
    {
        \$this->propertyName = \$propertyName;
    }

    /**
     * @return TranslatableInterface|string|false|null
     */
    public function getLabel()/* : TranslatableInterface|string|false|null */
    {
        return \$this->label;
    }

    public function setLabel(/* @var TranslatableInterface|string|false|null */ \$label): void
    {
        if (!\\is_string(\$label) && !\$label instanceof TranslatableInterface && false !== \$label && null !== \$label) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$label',
                __METHOD__,
                '\"string\", \"false\" or \"null\"',
                \\gettype(\$label)
            );
        }

        \$this->label = \$label;
        // needed to also display the label in the form associated to the filter
        \$this->setFormTypeOption('label', \$label);
    }

    public function setApplyCallable(callable \$callable): void
    {
        \$this->applyCallable = \$callable;
    }

    public function apply(QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto): void
    {
        \\call_user_func(\$this->applyCallable, \$queryBuilder, \$filterDataDto, \$fieldDto, \$entityDto);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/FilterDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FilterDto
{
    private ?string \$fqcn = null;
    private ?string \$formType = null;
    private KeyValueStore \$formTypeOptions;
    private ?string \$propertyName = null;
    private \$label;
    private \$applyCallable;

    public function __construct()
    {
        \$this->formTypeOptions = KeyValueStore::new();
    }

    public function getFqcn(): ?string
    {
        return \$this->fqcn;
    }

    public function setFqcn(string \$fqcn): void
    {
        \$this->fqcn = \$fqcn;
    }

    public function getFormType(): ?string
    {
        return \$this->formType;
    }

    public function getFormTypeOptions(): array
    {
        return \$this->formTypeOptions->all();
    }

    public function getFormTypeOption(string \$optionName)
    {
        return \$this->formTypeOptions->get(\$optionName);
    }

    public function setFormTypeOptions(array \$formTypeOptions): void
    {
        \$this->formTypeOptions->setAll(\$formTypeOptions);
    }

    public function setFormTypeOption(string \$optionName, mixed \$optionValue): void
    {
        \$this->formTypeOptions->set(\$optionName, \$optionValue);
    }

    public function setFormTypeOptionIfNotSet(string \$optionName, mixed \$optionValue): void
    {
        \$this->formTypeOptions->setIfNotSet(\$optionName, \$optionValue);
    }

    public function setFormType(string \$formType): void
    {
        \$this->formType = \$formType;
    }

    public function getProperty(): string
    {
        return \$this->propertyName;
    }

    public function setProperty(string \$propertyName): void
    {
        \$this->propertyName = \$propertyName;
    }

    /**
     * @return TranslatableInterface|string|false|null
     */
    public function getLabel()/* : TranslatableInterface|string|false|null */
    {
        return \$this->label;
    }

    public function setLabel(/* @var TranslatableInterface|string|false|null */ \$label): void
    {
        if (!\\is_string(\$label) && !\$label instanceof TranslatableInterface && false !== \$label && null !== \$label) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$label',
                __METHOD__,
                '\"string\", \"false\" or \"null\"',
                \\gettype(\$label)
            );
        }

        \$this->label = \$label;
        // needed to also display the label in the form associated to the filter
        \$this->setFormTypeOption('label', \$label);
    }

    public function setApplyCallable(callable \$callable): void
    {
        \$this->applyCallable = \$callable;
    }

    public function apply(QueryBuilder \$queryBuilder, FilterDataDto \$filterDataDto, ?FieldDto \$fieldDto, EntityDto \$entityDto): void
    {
        \\call_user_func(\$this->applyCallable, \$queryBuilder, \$filterDataDto, \$fieldDto, \$entityDto);
    }
}
", "easycorp/easyadmin-bundle/src/Dto/FilterDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\FilterDto.php");
    }
}
