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

/* easycorp/easyadmin-bundle/src/Form/Type/CrudAutocompleteType.php */
class __TwigTemplate_0dc7be886b5298c63bc3429ddef4d529 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/CrudAutocompleteType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/CrudAutocompleteType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\EventListener\\CrudAutocompleteSubscriber;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\DataMapperInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class CrudAutocompleteType extends AbstractType implements DataMapperInterface
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addEventSubscriber(new CrudAutocompleteSubscriber())
            ->setDataMapper(\$this);
    }

    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        // Add a custom block prefix to inner field to ease theming:
        array_splice(\$view['autocomplete']->vars['block_prefixes'], -1, 0, 'ea_autocomplete_inner');

        // allowClear option needs a placeholder value (it can be empty)
        if ((\$view->vars['attr']['data-allow-clear'] ?? false) && (!isset(\$view->vars['attr']['data-placeholder']))) {
            \$view->vars['attr']['data-placeholder'] = '';
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'multiple' => false,
            // force display errors on this form field
            'error_bubbling' => false,
        ]);

        \$resolver->setRequired(['class']);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'ea_autocomplete';
    }

    public function mapDataToForms(\$data, \$forms)
    {
        \$form = current(iterator_to_array(\$forms, false));
        \$form->setData(\$data);
    }

    public function mapFormsToData(\$forms, &\$data)
    {
        \$form = current(iterator_to_array(\$forms, false));
        \$data = \$form->getData();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Type/CrudAutocompleteType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\EventListener\\CrudAutocompleteSubscriber;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\DataMapperInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class CrudAutocompleteType extends AbstractType implements DataMapperInterface
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addEventSubscriber(new CrudAutocompleteSubscriber())
            ->setDataMapper(\$this);
    }

    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        // Add a custom block prefix to inner field to ease theming:
        array_splice(\$view['autocomplete']->vars['block_prefixes'], -1, 0, 'ea_autocomplete_inner');

        // allowClear option needs a placeholder value (it can be empty)
        if ((\$view->vars['attr']['data-allow-clear'] ?? false) && (!isset(\$view->vars['attr']['data-placeholder']))) {
            \$view->vars['attr']['data-placeholder'] = '';
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'multiple' => false,
            // force display errors on this form field
            'error_bubbling' => false,
        ]);

        \$resolver->setRequired(['class']);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'ea_autocomplete';
    }

    public function mapDataToForms(\$data, \$forms)
    {
        \$form = current(iterator_to_array(\$forms, false));
        \$form->setData(\$data);
    }

    public function mapFormsToData(\$forms, &\$data)
    {
        \$form = current(iterator_to_array(\$forms, false));
        \$data = \$form->getData();
    }
}
", "easycorp/easyadmin-bundle/src/Form/Type/CrudAutocompleteType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\CrudAutocompleteType.php");
    }
}
