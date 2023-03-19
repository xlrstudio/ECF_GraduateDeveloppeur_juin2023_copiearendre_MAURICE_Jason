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

/* easycorp/easyadmin-bundle/src/Form/Filter/Type/TextFilterType.php */
class __TwigTemplate_3a2356887448abc644525709c749c62a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/TextFilterType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Filter/Type/TextFilterType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Filter\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\ComparisonType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal Don't use this to define a text filter. Use Filter\\TextFilter instead.
 */
class TextFilterType extends AbstractType
{
    private string \$valueType;

    public function __construct(string \$valueType = null)
    {
        \$this->valueType = \$valueType ?? TextType::class;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) {
                switch (\$data['comparison']) {
                    case ComparisonType::STARTS_WITH:
                        \$data['comparison'] = ComparisonType::CONTAINS;
                        \$data['value'] .= '%';
                        break;
                    case ComparisonType::ENDS_WITH:
                        \$data['comparison'] = ComparisonType::CONTAINS;
                        \$data['value'] = '%'.\$data['value'];
                        break;
                    case ComparisonType::CONTAINS:
                    case ComparisonType::NOT_CONTAINS:
                        \$data['value'] = '%'.\$data['value'].'%';
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'comparison_type_options' => ['type' => 'text'],
            'value_type' => \$this->valueType,
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
        return "easycorp/easyadmin-bundle/src/Form/Filter/Type/TextFilterType.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal Don't use this to define a text filter. Use Filter\\TextFilter instead.
 */
class TextFilterType extends AbstractType
{
    private string \$valueType;

    public function __construct(string \$valueType = null)
    {
        \$this->valueType = \$valueType ?? TextType::class;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addModelTransformer(new CallbackTransformer(
            static fn (\$data) => \$data,
            static function (\$data) {
                switch (\$data['comparison']) {
                    case ComparisonType::STARTS_WITH:
                        \$data['comparison'] = ComparisonType::CONTAINS;
                        \$data['value'] .= '%';
                        break;
                    case ComparisonType::ENDS_WITH:
                        \$data['comparison'] = ComparisonType::CONTAINS;
                        \$data['value'] = '%'.\$data['value'];
                        break;
                    case ComparisonType::CONTAINS:
                    case ComparisonType::NOT_CONTAINS:
                        \$data['value'] = '%'.\$data['value'].'%';
                }

                return \$data;
            }
        ));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'comparison_type_options' => ['type' => 'text'],
            'value_type' => \$this->valueType,
        ]);
    }

    public function getParent(): string
    {
        return ComparisonFilterType::class;
    }
}
", "easycorp/easyadmin-bundle/src/Form/Filter/Type/TextFilterType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\TextFilterType.php");
    }
}
