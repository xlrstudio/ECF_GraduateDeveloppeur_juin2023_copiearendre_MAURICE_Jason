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

/* easycorp/easyadmin-bundle/src/Form/Filter/Type/DateTimeFilterType.php */
class __TwigTemplate_dd15fb6b377f970effc8ce80666fee12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/DateTimeFilterType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/DateTimeFilterType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class DateTimeFilterType extends AbstractType
{
    private string \$valueType;

    public function __construct(string \$valueType = null)
    {
        \$this->valueType = \$valueType ?? DateTimeType::class;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('value2', \$options['value_type'], \$options['value_type_options'] + [
            'label' => false,
        ]);

        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) use (\$options) {
                if (ComparisonType::BETWEEN === \$data['comparison']) {
                    if (null === \$data['value'] || '' === \$data['value'] || null === \$data['value2'] || '' === \$data['value2']) {
                        throw new TransformationFailedException('Two values must be provided when \"BETWEEN\" comparison is selected.');
                    }

                    // make sure end datetime is greater than start datetime
                    if (\$data['value'] > \$data['value2']) {
                        [\$data['value'], \$data['value2']] = [\$data['value2'], \$data['value']];
                    }

                    if (DateType::class === \$options['value_type']) {
                        \$data['value2'] = \$data['value2']->format('Y-m-d');
                    } elseif (TimeType::class === \$options['value_type']) {
                        \$data['value2'] = \$data['value2']->format('H:i:s');
                    }
                }

                if (\$data['value'] instanceof \\DateTimeInterface) {
                    if (DateType::class === \$options['value_type']) {
                        // sqlite: Don't include time format for date comparison
                        \$data['value'] = \$data['value']->format('Y-m-d');
                    } elseif (TimeType::class === \$options['value_type']) {
                        // sqlite: Don't include date format for time comparison
                        \$data['value'] = \$data['value']->format('H:i:s');
                    }
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'comparison_type_options' => ['type' => 'datetime'],
            'value_type' => \$this->valueType,
            'value_type_options' => [
                'widget' => 'single_text',
            ],
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'ea_datetime_filter';
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
        return "easycorp/easyadmin-bundle/src/Form/Filter/Type/DateTimeFilterType.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class DateTimeFilterType extends AbstractType
{
    private string \$valueType;

    public function __construct(string \$valueType = null)
    {
        \$this->valueType = \$valueType ?? DateTimeType::class;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('value2', \$options['value_type'], \$options['value_type_options'] + [
            'label' => false,
        ]);

        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) use (\$options) {
                if (ComparisonType::BETWEEN === \$data['comparison']) {
                    if (null === \$data['value'] || '' === \$data['value'] || null === \$data['value2'] || '' === \$data['value2']) {
                        throw new TransformationFailedException('Two values must be provided when \"BETWEEN\" comparison is selected.');
                    }

                    // make sure end datetime is greater than start datetime
                    if (\$data['value'] > \$data['value2']) {
                        [\$data['value'], \$data['value2']] = [\$data['value2'], \$data['value']];
                    }

                    if (DateType::class === \$options['value_type']) {
                        \$data['value2'] = \$data['value2']->format('Y-m-d');
                    } elseif (TimeType::class === \$options['value_type']) {
                        \$data['value2'] = \$data['value2']->format('H:i:s');
                    }
                }

                if (\$data['value'] instanceof \\DateTimeInterface) {
                    if (DateType::class === \$options['value_type']) {
                        // sqlite: Don't include time format for date comparison
                        \$data['value'] = \$data['value']->format('Y-m-d');
                    } elseif (TimeType::class === \$options['value_type']) {
                        // sqlite: Don't include date format for time comparison
                        \$data['value'] = \$data['value']->format('H:i:s');
                    }
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'comparison_type_options' => ['type' => 'datetime'],
            'value_type' => \$this->valueType,
            'value_type_options' => [
                'widget' => 'single_text',
            ],
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'ea_datetime_filter';
    }

    public function getParent(): string
    {
        return ComparisonFilterType::class;
    }
}
", "easycorp/easyadmin-bundle/src/Form/Filter/Type/DateTimeFilterType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\DateTimeFilterType.php");
    }
}
