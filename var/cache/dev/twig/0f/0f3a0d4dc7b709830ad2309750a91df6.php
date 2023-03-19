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

/* easycorp/easyadmin-bundle/src/Form/Type/FiltersFormType.php */
class __TwigTemplate_0b766d3590e96d3d1493d74867a50749 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/FiltersFormType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/FiltersFormType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class FiltersFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        /** @var FilterDto \$filter */
        foreach (\$options['ea_filters'] as \$filter) {
            \$builder->add(\$filter->getProperty(), \$filter->getFormType(), \$filter->getFormTypeOptions());
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefined('ea_filters');
        \$resolver->setAllowedTypes('ea_filters', FilterCollection::class);

        \$resolver->setDefaults([
            'allow_extra_fields' => true,
            'csrf_protection' => false,
            'ea_filters' => FilterCollection::new(),
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'ea_filters';
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Type/FiltersFormType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FilterDto;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class FiltersFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        /** @var FilterDto \$filter */
        foreach (\$options['ea_filters'] as \$filter) {
            \$builder->add(\$filter->getProperty(), \$filter->getFormType(), \$filter->getFormTypeOptions());
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefined('ea_filters');
        \$resolver->setAllowedTypes('ea_filters', FilterCollection::class);

        \$resolver->setDefaults([
            'allow_extra_fields' => true,
            'csrf_protection' => false,
            'ea_filters' => FilterCollection::new(),
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'ea_filters';
    }
}
", "easycorp/easyadmin-bundle/src/Form/Type/FiltersFormType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\FiltersFormType.php");
    }
}
