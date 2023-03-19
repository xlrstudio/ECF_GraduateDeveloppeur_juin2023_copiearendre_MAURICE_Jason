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

/* easycorp/easyadmin-bundle/src/Form/Filter/Type/ComparisonFilterType.php */
class __TwigTemplate_845de79fc82cd3a78a243aee3a8eaeb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ComparisonFilterType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ComparisonFilterType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ComparisonFilterType extends AbstractType
{
    private ?string \$valueType;
    private array \$valueTypeOptions;
    private string \$comparisonType;
    private array \$comparisonTypeOptions;

    public function __construct(string \$valueType = null, array \$valueTypeOptions = [], string \$comparisonType = null, array \$comparisonTypeOptions = [])
    {
        \$this->valueType = \$valueType;
        \$this->valueTypeOptions = \$valueTypeOptions;
        \$this->comparisonType = \$comparisonType ?? ComparisonType::class;
        \$this->comparisonTypeOptions = \$comparisonTypeOptions;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('comparison', \$options['comparison_type'], \$options['comparison_type_options']);
        \$builder->add('value', \$options['value_type'], \$options['value_type_options'] + [
            'label' => false,
        ]);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired('value_type');
        if (null !== \$this->valueType) {
            \$resolver->setDefault('value_type', \$this->valueType);
        }
        \$resolver->setDefaults([
            'comparison_type' => \$this->comparisonType,
            'comparison_type_options' => \$this->comparisonTypeOptions,
            'value_type_options' => \$this->valueTypeOptions,
            'error_bubbling' => false,
        ]);
        \$resolver->setAllowedTypes('comparison_type', 'string');
        \$resolver->setAllowedTypes('comparison_type_options', 'array');
        \$resolver->setAllowedTypes('value_type', 'string');
        \$resolver->setAllowedTypes('value_type_options', 'array');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Filter/Type/ComparisonFilterType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ComparisonFilterType extends AbstractType
{
    private ?string \$valueType;
    private array \$valueTypeOptions;
    private string \$comparisonType;
    private array \$comparisonTypeOptions;

    public function __construct(string \$valueType = null, array \$valueTypeOptions = [], string \$comparisonType = null, array \$comparisonTypeOptions = [])
    {
        \$this->valueType = \$valueType;
        \$this->valueTypeOptions = \$valueTypeOptions;
        \$this->comparisonType = \$comparisonType ?? ComparisonType::class;
        \$this->comparisonTypeOptions = \$comparisonTypeOptions;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('comparison', \$options['comparison_type'], \$options['comparison_type_options']);
        \$builder->add('value', \$options['value_type'], \$options['value_type_options'] + [
            'label' => false,
        ]);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired('value_type');
        if (null !== \$this->valueType) {
            \$resolver->setDefault('value_type', \$this->valueType);
        }
        \$resolver->setDefaults([
            'comparison_type' => \$this->comparisonType,
            'comparison_type_options' => \$this->comparisonTypeOptions,
            'value_type_options' => \$this->valueTypeOptions,
            'error_bubbling' => false,
        ]);
        \$resolver->setAllowedTypes('comparison_type', 'string');
        \$resolver->setAllowedTypes('comparison_type_options', 'array');
        \$resolver->setAllowedTypes('value_type', 'string');
        \$resolver->setAllowedTypes('value_type_options', 'array');
    }
}
", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ComparisonFilterType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\ComparisonFilterType.php");
    }
}
