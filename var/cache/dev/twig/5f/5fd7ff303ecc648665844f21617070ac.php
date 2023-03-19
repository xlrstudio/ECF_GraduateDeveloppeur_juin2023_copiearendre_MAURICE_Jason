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

/* easycorp/easyadmin-bundle/src/Form/EventListener/CrudAutocompleteSubscriber.php */
class __TwigTemplate_4a7463e03d92d637ef0e3413765047af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/EventListener/CrudAutocompleteSubscriber.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/EventListener/CrudAutocompleteSubscriber.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\EventListener;

use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class CrudAutocompleteSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    public function preSetData(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$data = \$event->getData() ?? [];

        \$options = \$form->getConfig()->getOptions();
        \$options['compound'] = false;
        \$options['choices'] = is_iterable(\$data) ? \$data : [\$data];

        \$form->add('autocomplete', EntityType::class, \$options);
    }

    public function preSubmit(FormEvent \$event)
    {
        \$data = \$event->getData();
        \$form = \$event->getForm();
        \$options = \$form->get('autocomplete')->getConfig()->getOptions();

        if (!isset(\$data['autocomplete']) || '' === \$data['autocomplete']) {
            \$options['choices'] = [];
        } else {
            \$options['choices'] = \$options['em']->getRepository(\$options['class'])->findBy([
                \$options['id_reader']->getIdField() => \$data['autocomplete'],
            ]);
        }

        // reset some critical lazy options
        unset(\$options['em'], \$options['loader'], \$options['empty_data'], \$options['choice_list'], \$options['choices_as_values']);

        \$form->add('autocomplete', EntityType::class, \$options);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/EventListener/CrudAutocompleteSubscriber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\EventListener;

use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class CrudAutocompleteSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
        ];
    }

    public function preSetData(FormEvent \$event)
    {
        \$form = \$event->getForm();
        \$data = \$event->getData() ?? [];

        \$options = \$form->getConfig()->getOptions();
        \$options['compound'] = false;
        \$options['choices'] = is_iterable(\$data) ? \$data : [\$data];

        \$form->add('autocomplete', EntityType::class, \$options);
    }

    public function preSubmit(FormEvent \$event)
    {
        \$data = \$event->getData();
        \$form = \$event->getForm();
        \$options = \$form->get('autocomplete')->getConfig()->getOptions();

        if (!isset(\$data['autocomplete']) || '' === \$data['autocomplete']) {
            \$options['choices'] = [];
        } else {
            \$options['choices'] = \$options['em']->getRepository(\$options['class'])->findBy([
                \$options['id_reader']->getIdField() => \$data['autocomplete'],
            ]);
        }

        // reset some critical lazy options
        unset(\$options['em'], \$options['loader'], \$options['empty_data'], \$options['choice_list'], \$options['choices_as_values']);

        \$form->add('autocomplete', EntityType::class, \$options);
    }
}
", "easycorp/easyadmin-bundle/src/Form/EventListener/CrudAutocompleteSubscriber.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\EventListener\\CrudAutocompleteSubscriber.php");
    }
}
