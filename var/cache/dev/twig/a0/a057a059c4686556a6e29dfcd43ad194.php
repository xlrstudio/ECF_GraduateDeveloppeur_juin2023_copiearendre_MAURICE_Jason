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

/* easycorp/easyadmin-bundle/doc/events.rst */
class __TwigTemplate_698c2ab10903c352c26ec42241bd5566 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/events.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/events.rst"));

        // line 1
        echo "Events
======

EasyAdmin triggers several `Symfony events`_ during the execution of its
requests, so you can listen to those events and run your own logic.

Events were useful in EasyAdmin versions previous to 3.0, because backends were
defined with YAML config files instead of PHP code. Starting from EasyAdmin 3.0
everything is defined with PHP. That's why it's easier to customize backend
behavior overloading PHP classes and methods and calling to your own services.
However, the events still remain in case you want to use them.

All events are triggered using objects instead of event names defined as strings
(as recommended since Symfony 4.3). They are defined under the
``EasyCorp\\Bundle\\EasyAdminBundle\\Event\\`` namespace:

* Events related to Doctrine entities:

  * ``AfterEntityBuiltEvent``
  * ``AfterEntityDeletedEvent``
  * ``AfterEntityPersistedEvent``
  * ``AfterEntityUpdatedEvent``
  * ``BeforeEntityDeletedEvent``
  * ``BeforeEntityPersistedEvent``
  * ``BeforeEntityUpdatedEvent``

* Events related to resource admins:

  * ``AfterCrudActionEvent``
  * ``BeforeCrudActionEvent``

Event Subscriber Example
------------------------

.. TODO: explain how to redirect to another URL from the listener (e.g. to avoid
..       deleting an entity in some cases when listening to BeforeRemovingEntity
..       Show the CRUD URL builder

The following example shows how to use an event subscriber to set the ``slug``
property of the ``BlogPost`` entity before persisting it:

.. code-block:: php

    # src/EventSubscriber/EasyAdminSubscriber.php
    namespace App\\EventSubscriber;

    use App\\Entity\\BlogPost;
    use EasyCorp\\Bundle\\EasyAdminBundle\\Event\\BeforeEntityPersistedEvent;
    use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

    class EasyAdminSubscriber implements EventSubscriberInterface
    {
        private \$slugger;

        public function __construct(\$slugger)
        {
            \$this->slugger = \$slugger;
        }

        public static function getSubscribedEvents()
        {
            return [
                BeforeEntityPersistedEvent::class => ['setBlogPostSlug'],
            ];
        }

        public function setBlogPostSlug(BeforeEntityPersistedEvent \$event)
        {
            \$entity = \$event->getEntityInstance();

            if (!(\$entity instanceof BlogPost)) {
                return;
            }

            \$slug = \$this->slugger->slugify(\$entity->getTitle());
            \$entity->setSlug(\$slug);
        }
    }

.. _`Symfony events`: https://symfony.com/doc/current/event_dispatcher.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/events.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Events
======

EasyAdmin triggers several `Symfony events`_ during the execution of its
requests, so you can listen to those events and run your own logic.

Events were useful in EasyAdmin versions previous to 3.0, because backends were
defined with YAML config files instead of PHP code. Starting from EasyAdmin 3.0
everything is defined with PHP. That's why it's easier to customize backend
behavior overloading PHP classes and methods and calling to your own services.
However, the events still remain in case you want to use them.

All events are triggered using objects instead of event names defined as strings
(as recommended since Symfony 4.3). They are defined under the
``EasyCorp\\Bundle\\EasyAdminBundle\\Event\\`` namespace:

* Events related to Doctrine entities:

  * ``AfterEntityBuiltEvent``
  * ``AfterEntityDeletedEvent``
  * ``AfterEntityPersistedEvent``
  * ``AfterEntityUpdatedEvent``
  * ``BeforeEntityDeletedEvent``
  * ``BeforeEntityPersistedEvent``
  * ``BeforeEntityUpdatedEvent``

* Events related to resource admins:

  * ``AfterCrudActionEvent``
  * ``BeforeCrudActionEvent``

Event Subscriber Example
------------------------

.. TODO: explain how to redirect to another URL from the listener (e.g. to avoid
..       deleting an entity in some cases when listening to BeforeRemovingEntity
..       Show the CRUD URL builder

The following example shows how to use an event subscriber to set the ``slug``
property of the ``BlogPost`` entity before persisting it:

.. code-block:: php

    # src/EventSubscriber/EasyAdminSubscriber.php
    namespace App\\EventSubscriber;

    use App\\Entity\\BlogPost;
    use EasyCorp\\Bundle\\EasyAdminBundle\\Event\\BeforeEntityPersistedEvent;
    use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

    class EasyAdminSubscriber implements EventSubscriberInterface
    {
        private \$slugger;

        public function __construct(\$slugger)
        {
            \$this->slugger = \$slugger;
        }

        public static function getSubscribedEvents()
        {
            return [
                BeforeEntityPersistedEvent::class => ['setBlogPostSlug'],
            ];
        }

        public function setBlogPostSlug(BeforeEntityPersistedEvent \$event)
        {
            \$entity = \$event->getEntityInstance();

            if (!(\$entity instanceof BlogPost)) {
                return;
            }

            \$slug = \$this->slugger->slugify(\$entity->getTitle());
            \$entity->setSlug(\$slug);
        }
    }

.. _`Symfony events`: https://symfony.com/doc/current/event_dispatcher.html
", "easycorp/easyadmin-bundle/doc/events.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\events.rst");
    }
}
