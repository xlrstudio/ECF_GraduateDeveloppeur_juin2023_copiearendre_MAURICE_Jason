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

/* easycorp/easyadmin-bundle/src/Form/Filter/Type/ArrayFilterType.php */
class __TwigTemplate_906e4129bd2e748372543954359aa67a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ArrayFilterType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ArrayFilterType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\ChoiceList\\Loader\\DynamicChoiceLoader;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ArrayFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$defaultOptions = ['label' => false];
        if (!isset(\$options['value_type_options']['choices']) || [] === \$options['value_type_options']['choices']) {
            \$defaultOptions += ['choice_loader' => new DynamicChoiceLoader()];
        }
        \$builder->add('value', \$options['value_type'], \$options['value_type_options'] + \$defaultOptions);

        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) {
                if (null === \$data['value'] || [] === \$data['value']) {
                    \$data['comparison'] = ComparisonType::CONTAINS === \$data['comparison'] ? 'IS NULL' : 'IS NOT NULL';
                } else {
                    \$data['value'] = (array) \$data['value'];
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'comparison_type_options' => ['type' => 'array'],
            'value_type' => ChoiceType::class,
            'value_type_options' => [
                'multiple' => true,
                'attr' => [
                    'data-ea-widget' => 'ea-autocomplete',
                    'data-ea-autocomplete-allow-item-create' => 'true',
                ],
            ],
        ]);
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
        return "easycorp/easyadmin-bundle/src/Form/Filter/Type/ArrayFilterType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\ChoiceList\\Loader\\DynamicChoiceLoader;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ArrayFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$defaultOptions = ['label' => false];
        if (!isset(\$options['value_type_options']['choices']) || [] === \$options['value_type_options']['choices']) {
            \$defaultOptions += ['choice_loader' => new DynamicChoiceLoader()];
        }
        \$builder->add('value', \$options['value_type'], \$options['value_type_options'] + \$defaultOptions);

        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) {
                if (null === \$data['value'] || [] === \$data['value']) {
                    \$data['comparison'] = ComparisonType::CONTAINS === \$data['comparison'] ? 'IS NULL' : 'IS NOT NULL';
                } else {
                    \$data['value'] = (array) \$data['value'];
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'comparison_type_options' => ['type' => 'array'],
            'value_type' => ChoiceType::class,
            'value_type_options' => [
                'multiple' => true,
                'attr' => [
                    'data-ea-widget' => 'ea-autocomplete',
                    'data-ea-autocomplete-allow-item-create' => 'true',
                ],
            ],
        ]);
    }

    public function getParent(): string
    {
        return ComparisonFilterType::class;
    }
}
", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ArrayFilterType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\ArrayFilterType.php");
    }
}
