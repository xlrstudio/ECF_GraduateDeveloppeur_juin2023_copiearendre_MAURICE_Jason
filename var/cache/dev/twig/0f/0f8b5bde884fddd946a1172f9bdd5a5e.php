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

/* easycorp/easyadmin-bundle/src/Form/Type/ComparisonType.php */
class __TwigTemplate_ffe730fb2fcf5bea4bd0accbc301bbec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/ComparisonType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/ComparisonType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ComparisonType extends AbstractType
{
    public const EQ = '=';
    public const NEQ = '!=';
    public const GT = '>';
    public const GTE = '>=';
    public const LT = '<';
    public const LTE = '<=';
    public const BETWEEN = 'between';
    public const CONTAINS = 'like';
    public const NOT_CONTAINS = 'not like';
    public const STARTS_WITH = 'like*';
    public const ENDS_WITH = '*like';

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'label' => false,
            'type' => 'numeric',
            'choices' => static function (Options \$options) {
                \$choices = match (\$options['type']) {
                    'numeric' => [
                        'filter.label.is_equal_to' => self::EQ,
                        'filter.label.is_not_equal_to' => self::NEQ,
                        'filter.label.is_greater_than' => self::GT,
                        'filter.label.is_greater_than_or_equal_to' => self::GTE,
                        'filter.label.is_less_than' => self::LT,
                        'filter.label.is_less_than_or_equal_to' => self::LTE,
                        'filter.label.is_between' => self::BETWEEN,
                    ],
                    'text' => [
                        'filter.label.contains' => self::CONTAINS,
                        'filter.label.not_contains' => self::NOT_CONTAINS,
                        'filter.label.starts_with' => self::STARTS_WITH,
                        'filter.label.ends_with' => self::ENDS_WITH,
                        'filter.label.exactly' => self::EQ,
                        'filter.label.not_exactly' => self::NEQ,
                    ],
                    'datetime' => [
                        'filter.label.is_same' => self::EQ,
                        'filter.label.is_not_same' => self::NEQ,
                        'filter.label.is_after' => self::GT,
                        'filter.label.is_after_or_same' => self::GTE,
                        'filter.label.is_before' => self::LT,
                        'filter.label.is_before_or_same' => self::LTE,
                        'filter.label.is_between' => self::BETWEEN,
                    ],
                    'array' => [
                        'filter.label.contains' => self::CONTAINS,
                        'filter.label.not_contains' => self::NOT_CONTAINS,
                    ],
                    'choice', 'entity' => [
                        'filter.label.is_same' => self::EQ,
                        'filter.label.is_not_same' => self::NEQ,
                    ],
                    default => [],
                };

                return \$choices;
            },
            'translation_domain' => 'EasyAdminBundle',
        ]);
        \$resolver->setAllowedTypes('type', 'string');
        \$resolver->setAllowedValues('type', ['array', 'datetime', 'choice', 'entity', 'numeric', 'text']);
    }

    public function getParent(): ?string
    {
        return ChoiceType::class;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Type/ComparisonType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class ComparisonType extends AbstractType
{
    public const EQ = '=';
    public const NEQ = '!=';
    public const GT = '>';
    public const GTE = '>=';
    public const LT = '<';
    public const LTE = '<=';
    public const BETWEEN = 'between';
    public const CONTAINS = 'like';
    public const NOT_CONTAINS = 'not like';
    public const STARTS_WITH = 'like*';
    public const ENDS_WITH = '*like';

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'label' => false,
            'type' => 'numeric',
            'choices' => static function (Options \$options) {
                \$choices = match (\$options['type']) {
                    'numeric' => [
                        'filter.label.is_equal_to' => self::EQ,
                        'filter.label.is_not_equal_to' => self::NEQ,
                        'filter.label.is_greater_than' => self::GT,
                        'filter.label.is_greater_than_or_equal_to' => self::GTE,
                        'filter.label.is_less_than' => self::LT,
                        'filter.label.is_less_than_or_equal_to' => self::LTE,
                        'filter.label.is_between' => self::BETWEEN,
                    ],
                    'text' => [
                        'filter.label.contains' => self::CONTAINS,
                        'filter.label.not_contains' => self::NOT_CONTAINS,
                        'filter.label.starts_with' => self::STARTS_WITH,
                        'filter.label.ends_with' => self::ENDS_WITH,
                        'filter.label.exactly' => self::EQ,
                        'filter.label.not_exactly' => self::NEQ,
                    ],
                    'datetime' => [
                        'filter.label.is_same' => self::EQ,
                        'filter.label.is_not_same' => self::NEQ,
                        'filter.label.is_after' => self::GT,
                        'filter.label.is_after_or_same' => self::GTE,
                        'filter.label.is_before' => self::LT,
                        'filter.label.is_before_or_same' => self::LTE,
                        'filter.label.is_between' => self::BETWEEN,
                    ],
                    'array' => [
                        'filter.label.contains' => self::CONTAINS,
                        'filter.label.not_contains' => self::NOT_CONTAINS,
                    ],
                    'choice', 'entity' => [
                        'filter.label.is_same' => self::EQ,
                        'filter.label.is_not_same' => self::NEQ,
                    ],
                    default => [],
                };

                return \$choices;
            },
            'translation_domain' => 'EasyAdminBundle',
        ]);
        \$resolver->setAllowedTypes('type', 'string');
        \$resolver->setAllowedValues('type', ['array', 'datetime', 'choice', 'entity', 'numeric', 'text']);
    }

    public function getParent(): ?string
    {
        return ChoiceType::class;
    }
}
", "easycorp/easyadmin-bundle/src/Form/Type/ComparisonType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\ComparisonType.php");
    }
}
