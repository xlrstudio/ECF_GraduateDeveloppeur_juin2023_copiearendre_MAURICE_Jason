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

/* easycorp/easyadmin-bundle/src/Form/EventListener/EasyAdminTabSubscriber.php */
class __TwigTemplate_355e08c35a629cbbded7bf4f1c605a08 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/EventListener/EasyAdminTabSubscriber.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/EventListener/EasyAdminTabSubscriber.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * This form event subscriber helps to provide the tab functionality.
 *
 * @author naitsirch <naitsirch@e.mail.de>
 */
class EasyAdminTabSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::POST_SUBMIT => ['handleViolations', -1],
        ];
    }

    /**
     * Deal with form constraint violations. This method has to be executed with
     * a negative priority to make sure that the validation process is done.
     */
    public function handleViolations(FormEvent \$event)
    {
        \$formTabs = \$event->getForm()->getConfig()->getAttribute('ea_form_tabs');

        \$firstTabWithErrors = null;
        foreach (\$event->getForm() as \$child) {
            \$errors = \$child->getErrors(true);

            if (\\count(\$errors) > 0) {
                \$formTab = \$child->getConfig()->getAttribute('ea_form_tab');
                \$formTabs[\$formTab]['errors'] += \\count(\$errors);

                if (null === \$firstTabWithErrors) {
                    \$firstTabWithErrors = \$formTab;
                }
            }
        }

        // ensure that the first tab with errors is displayed
        \$firstTab = key(\$formTabs);
        if (\$firstTab !== \$firstTabWithErrors) {
            \$formTabs[\$firstTab]['active'] = false;
            \$formTabs[\$firstTabWithErrors]['active'] = true;
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/EventListener/EasyAdminTabSubscriber.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

/**
 * This form event subscriber helps to provide the tab functionality.
 *
 * @author naitsirch <naitsirch@e.mail.de>
 */
class EasyAdminTabSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::POST_SUBMIT => ['handleViolations', -1],
        ];
    }

    /**
     * Deal with form constraint violations. This method has to be executed with
     * a negative priority to make sure that the validation process is done.
     */
    public function handleViolations(FormEvent \$event)
    {
        \$formTabs = \$event->getForm()->getConfig()->getAttribute('ea_form_tabs');

        \$firstTabWithErrors = null;
        foreach (\$event->getForm() as \$child) {
            \$errors = \$child->getErrors(true);

            if (\\count(\$errors) > 0) {
                \$formTab = \$child->getConfig()->getAttribute('ea_form_tab');
                \$formTabs[\$formTab]['errors'] += \\count(\$errors);

                if (null === \$firstTabWithErrors) {
                    \$firstTabWithErrors = \$formTab;
                }
            }
        }

        // ensure that the first tab with errors is displayed
        \$firstTab = key(\$formTabs);
        if (\$firstTab !== \$firstTabWithErrors) {
            \$formTabs[\$firstTab]['active'] = false;
            \$formTabs[\$firstTabWithErrors]['active'] = true;
        }
    }
}
", "easycorp/easyadmin-bundle/src/Form/EventListener/EasyAdminTabSubscriber.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\EventListener\\EasyAdminTabSubscriber.php");
    }
}
