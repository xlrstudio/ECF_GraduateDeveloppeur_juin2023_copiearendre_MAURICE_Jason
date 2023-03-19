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

/* easycorp/easyadmin-bundle/src/Form/Filter/Type/NumericFilterType.php */
class __TwigTemplate_46aac8b6a9dcc7d652f984b9baaebf66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/NumericFilterType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/NumericFilterType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class NumericFilterType extends AbstractType
{
    private string \$valueType;
    private array \$valueTypeOptions;

    public function __construct(string \$valueType = null, array \$valueTypeOptions = [])
    {
        \$this->valueType = \$valueType ?? NumberType::class;
        \$this->valueTypeOptions = \$valueTypeOptions;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('value2', \$options['value_type'], \$options['value_type_options'] + [
            'label' => false,
        ]);

        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) {
                if (ComparisonType::BETWEEN === \$data['comparison']) {
                    if (null === \$data['value'] || '' === \$data['value'] || null === \$data['value2'] || '' === \$data['value2']) {
                        throw new TransformationFailedException('Two values must be provided when \"BETWEEN\" comparison is selected.');
                    }

                    // make sure value 2 is greater than value 1
                    if (\$data['value'] > \$data['value2']) {
                        [\$data['value'], \$data['value2']] = [\$data['value2'], \$data['value']];
                    }
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'value_type' => \$this->valueType,
            'value_type_options' => \$this->valueTypeOptions,
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'ea_numeric_filter';
    }

    public function getParent(): string
    {
        return ComparisonFilterType::class;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Filter/Type/NumericFilterType.php";
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
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class NumericFilterType extends AbstractType
{
    private string \$valueType;
    private array \$valueTypeOptions;

    public function __construct(string \$valueType = null, array \$valueTypeOptions = [])
    {
        \$this->valueType = \$valueType ?? NumberType::class;
        \$this->valueTypeOptions = \$valueTypeOptions;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('value2', \$options['value_type'], \$options['value_type_options'] + [
            'label' => false,
        ]);

        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) {
                if (ComparisonType::BETWEEN === \$data['comparison']) {
                    if (null === \$data['value'] || '' === \$data['value'] || null === \$data['value2'] || '' === \$data['value2']) {
                        throw new TransformationFailedException('Two values must be provided when \"BETWEEN\" comparison is selected.');
                    }

                    // make sure value 2 is greater than value 1
                    if (\$data['value'] > \$data['value2']) {
                        [\$data['value'], \$data['value2']] = [\$data['value2'], \$data['value']];
                    }
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'value_type' => \$this->valueType,
            'value_type_options' => \$this->valueTypeOptions,
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'ea_numeric_filter';
    }

    public function getParent(): string
    {
        return ComparisonFilterType::class;
    }
}
", "easycorp/easyadmin-bundle/src/Form/Filter/Type/NumericFilterType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\NumericFilterType.php");
    }
}
