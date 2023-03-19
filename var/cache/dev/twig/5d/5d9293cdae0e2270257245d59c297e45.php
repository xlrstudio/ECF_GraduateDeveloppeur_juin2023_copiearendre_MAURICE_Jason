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

/* easycorp/easyadmin-bundle/doc/fields/DateField.rst */
class __TwigTemplate_3dbacb876be9a89c9fd822bc32369651 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/DateField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/DateField.rst"));

        // line 1
        echo "EasyAdmin Date Field
====================

This field is used to represent the date part of a value that stores a PHP
``DateTimeInterface`` value (e.g. ``DateTime``, ``DateTimeImmutable``, etc.)

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-date.png
   :alt: Default style of EasyAdmin date field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateField``
* **Doctrine DBAL Type** used to store this value: ``date`` or ``date_immutable``
* **Symfony Form Type** used to render the field: `DateType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"date\"> ... </select>

Options
-------

renderAsChoice
~~~~~~~~~~~~~~

By default, in form pages (``edit`` and ``new``) the field is rendered as an
HTML5 input field. This is done because modern browsers display an advanced
date picker for these fields, making them easier to use.

If you prefer to display the date as 3 separate ``<select>`` elements to pick
the day, month and year separately, use this option::

    yield DateField::new('...')->renderAsChoice();

.. note::

    Setting this option is equivalent to setting ``widget = choice`` and
    ``html5 = true`` options in the underlying ``DateType`` Symfony field.

renderAsNativeWidget
~~~~~~~~~~~~~~~~~~~~

By default, in form pages (``edit`` and ``new``) the field is rendered as an
HTML5 input field. This is done because modern browsers display an advanced
date picker for these fields, making them easier to use.

This option allows you to programmatically enable/disable this behavior (e.g.
based on the result of some expression). Setting it to ``false`` is equivalent
to calling ``renderAsChoice()``::

    yield DateField::new('...')->renderAsNativeWidget(false);

.. note::

    Setting this option is equivalent to setting ``widget = single_text`` and
    ``html5 = true`` options in the underlying ``DateType`` Symfony field.

renderAsText
~~~~~~~~~~~~

By default, in form pages (``edit`` and ``new``) the field is rendered as an
HTML5 input field. This is done because modern browsers display an advanced
date picker for these fields, making them easier to use.

If you prefer to display the date as a single ``<input type=\"text\">`` element,
use this option::

    yield DateField::new('...')->renderAsText();

.. note::

    Setting this  option is equivalent to setting ``widget = single_text`` and
    ``html5 = false`` options in the underlying ``DateType`` Symfony field.

setFormat
~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) dates are displayed in
the format defined by the :ref:`setDateFormat() CRUD option <crud-date-time-number-format-options>`.
Use this option to override that default formatting::

    // these are the predefined formats: 'short', 'medium', 'long', 'full'
    yield DateField::new('...')->setFormat('long');

    // predefined formats are available as constants too
    use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateTimeField;

    yield DateField::new('...')->setFormat(DateTimeField::FORMAT_LONG);

In addition to predefined formats, you can configure your own format by passing
a valid `ICU Datetime Pattern`_ to this function::

    yield DateField::new('...')->setFormat('yyyy.MM.dd G');
    yield DateField::new('...')->setFormat('EEE, MMM d, \\'\\'yy');

setTimezone
~~~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) dates are displayed
using the timezone defined by the :ref:`setTimezone() CRUD option <crud-date-time-number-format-options>`.
Use this option to override that default timezone (the argument must be any of
the valid `PHP timezone IDs`_)::

    yield DateField::new('...')->setTimezone('Africa/Malabo');

.. _`DateType`: https://symfony.com/doc/current/reference/forms/types/date.html
.. _`ICU Datetime Pattern`: https://unicode-org.github.io/icu/userguide/format_parse/datetime/
.. _`PHP timezone IDs`: https://www.php.net/manual/en/timezones.php
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/DateField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Date Field
====================

This field is used to represent the date part of a value that stores a PHP
``DateTimeInterface`` value (e.g. ``DateTime``, ``DateTimeImmutable``, etc.)

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-date.png
   :alt: Default style of EasyAdmin date field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateField``
* **Doctrine DBAL Type** used to store this value: ``date`` or ``date_immutable``
* **Symfony Form Type** used to render the field: `DateType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"date\"> ... </select>

Options
-------

renderAsChoice
~~~~~~~~~~~~~~

By default, in form pages (``edit`` and ``new``) the field is rendered as an
HTML5 input field. This is done because modern browsers display an advanced
date picker for these fields, making them easier to use.

If you prefer to display the date as 3 separate ``<select>`` elements to pick
the day, month and year separately, use this option::

    yield DateField::new('...')->renderAsChoice();

.. note::

    Setting this option is equivalent to setting ``widget = choice`` and
    ``html5 = true`` options in the underlying ``DateType`` Symfony field.

renderAsNativeWidget
~~~~~~~~~~~~~~~~~~~~

By default, in form pages (``edit`` and ``new``) the field is rendered as an
HTML5 input field. This is done because modern browsers display an advanced
date picker for these fields, making them easier to use.

This option allows you to programmatically enable/disable this behavior (e.g.
based on the result of some expression). Setting it to ``false`` is equivalent
to calling ``renderAsChoice()``::

    yield DateField::new('...')->renderAsNativeWidget(false);

.. note::

    Setting this option is equivalent to setting ``widget = single_text`` and
    ``html5 = true`` options in the underlying ``DateType`` Symfony field.

renderAsText
~~~~~~~~~~~~

By default, in form pages (``edit`` and ``new``) the field is rendered as an
HTML5 input field. This is done because modern browsers display an advanced
date picker for these fields, making them easier to use.

If you prefer to display the date as a single ``<input type=\"text\">`` element,
use this option::

    yield DateField::new('...')->renderAsText();

.. note::

    Setting this  option is equivalent to setting ``widget = single_text`` and
    ``html5 = false`` options in the underlying ``DateType`` Symfony field.

setFormat
~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) dates are displayed in
the format defined by the :ref:`setDateFormat() CRUD option <crud-date-time-number-format-options>`.
Use this option to override that default formatting::

    // these are the predefined formats: 'short', 'medium', 'long', 'full'
    yield DateField::new('...')->setFormat('long');

    // predefined formats are available as constants too
    use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateTimeField;

    yield DateField::new('...')->setFormat(DateTimeField::FORMAT_LONG);

In addition to predefined formats, you can configure your own format by passing
a valid `ICU Datetime Pattern`_ to this function::

    yield DateField::new('...')->setFormat('yyyy.MM.dd G');
    yield DateField::new('...')->setFormat('EEE, MMM d, \\'\\'yy');

setTimezone
~~~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) dates are displayed
using the timezone defined by the :ref:`setTimezone() CRUD option <crud-date-time-number-format-options>`.
Use this option to override that default timezone (the argument must be any of
the valid `PHP timezone IDs`_)::

    yield DateField::new('...')->setTimezone('Africa/Malabo');

.. _`DateType`: https://symfony.com/doc/current/reference/forms/types/date.html
.. _`ICU Datetime Pattern`: https://unicode-org.github.io/icu/userguide/format_parse/datetime/
.. _`PHP timezone IDs`: https://www.php.net/manual/en/timezones.php
", "easycorp/easyadmin-bundle/doc/fields/DateField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\DateField.rst");
    }
}
