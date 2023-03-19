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

/* easycorp/easyadmin-bundle/src/Form/Filter/Type/ChoiceFilterType.php */
class __TwigTemplate_b788704ef281e8bf1945e696b4d6c58f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ChoiceFilterType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ChoiceFilterType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ChoiceFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$multiple = (bool) \$builder->get('value')->getOption('multiple');

        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) use (\$multiple) {
                switch (\$data['comparison']) {
                    case ComparisonType::EQ:
                        if (null === \$data['value'] || (\$multiple && 0 === \\count(\$data['value']))) {
                            \$data['comparison'] = 'IS NULL';
                        } else {
                            \$data['comparison'] = \$multiple ? 'IN' : '=';
                        }
                        break;
                    case ComparisonType::NEQ:
                        if (null === \$data['value'] || (\$multiple && 0 === \\count(\$data['value']))) {
                            \$data['comparison'] = 'IS NOT NULL';
                        } else {
                            \$data['comparison'] = \$multiple ? 'NOT IN' : '!=';
                        }
                        break;
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'comparison_type_options' => ['type' => 'choice'],
            'value_type' => ChoiceType::class,
            'value_type_options' => [
                'multiple' => false,
                'attr' => [
                    'data-ea-widget' => 'ea-autocomplete',
                ],
            ],
        ]);
        \$resolver->setNormalizer('value_type_options', static function (Options \$options, \$value) {
            if (!isset(\$value['attr'])) {
                \$value['attr']['data-ea-widget'] = 'ea-autocomplete';
            }

            return \$value;
        });
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
        return "easycorp/easyadmin-bundle/src/Form/Filter/Type/ChoiceFilterType.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ChoiceFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$multiple = (bool) \$builder->get('value')->getOption('multiple');

        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) use (\$multiple) {
                switch (\$data['comparison']) {
                    case ComparisonType::EQ:
                        if (null === \$data['value'] || (\$multiple && 0 === \\count(\$data['value']))) {
                            \$data['comparison'] = 'IS NULL';
                        } else {
                            \$data['comparison'] = \$multiple ? 'IN' : '=';
                        }
                        break;
                    case ComparisonType::NEQ:
                        if (null === \$data['value'] || (\$multiple && 0 === \\count(\$data['value']))) {
                            \$data['comparison'] = 'IS NOT NULL';
                        } else {
                            \$data['comparison'] = \$multiple ? 'NOT IN' : '!=';
                        }
                        break;
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'comparison_type_options' => ['type' => 'choice'],
            'value_type' => ChoiceType::class,
            'value_type_options' => [
                'multiple' => false,
                'attr' => [
                    'data-ea-widget' => 'ea-autocomplete',
                ],
            ],
        ]);
        \$resolver->setNormalizer('value_type_options', static function (Options \$options, \$value) {
            if (!isset(\$value['attr'])) {
                \$value['attr']['data-ea-widget'] = 'ea-autocomplete';
            }

            return \$value;
        });
    }

    public function getParent(): string
    {
        return ComparisonFilterType::class;
    }
}
", "easycorp/easyadmin-bundle/src/Form/Filter/Type/ChoiceFilterType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\ChoiceFilterType.php");
    }
}
