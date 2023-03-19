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

/* easycorp/easyadmin-bundle/doc/fields/LocaleField.rst */
class __TwigTemplate_172080f3eee230645c3fa46953583af0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/LocaleField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/LocaleField.rst"));

        // line 1
        echo "EasyAdmin LocaleField
=====================

This field is used to represent the name of a locale stored in a property as
a valid `ICU project`_ locale code (the same which is used by Symfony and many
other tech projects).

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-locale.png
   :alt: Default style of EasyAdmin locale field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\LocaleField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `LocaleType`_
* **Rendered as**:

  .. code-block:: html

    <select> ... </select>

Options
-------

``includeOnly``
~~~~~~~~~~~~~~~

By default, the locale selector displays all the locales defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to only display the given locale codes::

    yield LocaleField::new('...')->includeOnly(['en', 'fr', 'pl']);

``remove``
~~~~~~~~~~

By default, the locale selector displays all the locales defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to remove the given locale codes from that list::

    yield LocaleField::new('...')->remove(['fr', 'pl']);

``showCode``
~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``show``) this field displays the
full name of the locale (e.g. ``Somali (Djibouti)``, ``Uyghur (China)``,
``Ukrainian``, etc.)

Use this option if you want to display the locale code (e.g. ``so_DJ``,
``ug_CN``, ``uk``, etc.) instead of or in addition to the locale name::

    yield LocaleField::new('...')->showCode();

``showName``
~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``show``) this field displays the
full name of the locale (e.g. ``Somali (Djibouti)``, ``Uyghur (China)``,
``Ukrainian``, etc.)

Use this option if you want to hide this name and display instead the locale
code (e.g. ``so_DJ``, ``ug_CN``, ``uk``, etc.)::

    yield LocaleField::new('...')->showName(false);

.. _`LocaleType`: https://symfony.com/doc/current/reference/forms/types/locale.html
.. _`ICU project`: https://icu.unicode.org/
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/LocaleField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin LocaleField
=====================

This field is used to represent the name of a locale stored in a property as
a valid `ICU project`_ locale code (the same which is used by Symfony and many
other tech projects).

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-locale.png
   :alt: Default style of EasyAdmin locale field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\LocaleField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `LocaleType`_
* **Rendered as**:

  .. code-block:: html

    <select> ... </select>

Options
-------

``includeOnly``
~~~~~~~~~~~~~~~

By default, the locale selector displays all the locales defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to only display the given locale codes::

    yield LocaleField::new('...')->includeOnly(['en', 'fr', 'pl']);

``remove``
~~~~~~~~~~

By default, the locale selector displays all the locales defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to remove the given locale codes from that list::

    yield LocaleField::new('...')->remove(['fr', 'pl']);

``showCode``
~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``show``) this field displays the
full name of the locale (e.g. ``Somali (Djibouti)``, ``Uyghur (China)``,
``Ukrainian``, etc.)

Use this option if you want to display the locale code (e.g. ``so_DJ``,
``ug_CN``, ``uk``, etc.) instead of or in addition to the locale name::

    yield LocaleField::new('...')->showCode();

``showName``
~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``show``) this field displays the
full name of the locale (e.g. ``Somali (Djibouti)``, ``Uyghur (China)``,
``Ukrainian``, etc.)

Use this option if you want to hide this name and display instead the locale
code (e.g. ``so_DJ``, ``ug_CN``, ``uk``, etc.)::

    yield LocaleField::new('...')->showName(false);

.. _`LocaleType`: https://symfony.com/doc/current/reference/forms/types/locale.html
.. _`ICU project`: https://icu.unicode.org/
", "easycorp/easyadmin-bundle/doc/fields/LocaleField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\LocaleField.rst");
    }
}
