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

/* easycorp/easyadmin-bundle/doc/fields/NumberField.rst */
class __TwigTemplate_e4d0ad858884890c072192665d6fb5c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/NumberField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/NumberField.rst"));

        // line 1
        echo "EasyAdmin Number Field
======================

This field is used to represent the value of properties that store numbers of
any type (integers or decimals).

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-number.png
   :alt: Default style of EasyAdmin number field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\NumberField``
* **Doctrine DBAL Type** used to store this value: ``decimal``, ``float`` or
  ``string``
* **Symfony Form Type** used to render the field: `NumberType`_
* **Rendered as**:

  .. code-block:: html

    <!-- the type of element used is configurable -->
    <input type=\"number\"> or <input type=\"text\">

Options
-------

setNumberFormat
~~~~~~~~~~~~~~~

By default, numbers are displayed \"as is\". If you prefer to format the value in
any way, use this option and pass any formatting string valid as an argument of
the ``sprintf()`` function::

    // this would display numbers in scientific notation (e.g. 123456.7890 = '1.234568e+5')
    yield NumberField::new('...')->setNumberFormat('%e');

.. caution::

    Using this option will make EasyAdmin to ignore the options ``setNumDecimals``
    and ``setRoundingMode``.

setNumDecimals
~~~~~~~~~~~~~~

By default, numbers are displayed \"as is\" without adding or removing any decimals
to it. Use this option if you want to format values with a certain number of
decimals::

    // this would format 3 as 3.00 and 5.123 as 5.12
    yield NumberField::new('...')->setNumDecimals(2);

setRoundingMode
~~~~~~~~~~~~~~~

By default, when some value must be rounded to reduce the number of decimals,
the field uses PHP ``\\NumberFormatter::ROUND_HALFUP`` strategy. Use this option
to change the rounding strategy and pass as its arguments any of the ``ROUND_*``
constants of `PHP NumberFormatter class`_::

    yield NumberField::new('...')->setRoundingMode(\\NumberFormatter::ROUND_CEILING);

setStoredAsString
~~~~~~~~~~~~~~~~~

By default, this field assumes that you store the value as a numeric property.
If you store the value as a string (e.g. because it's a very large number) use
this option to also display a ``<input type=\"text\">`` element instead of the
default ``<input type=\"number\">`` element::

    yield NumberField::new('...')->setStoredAsString();

.. _`NumberType`: https://symfony.com/doc/current/reference/forms/types/number.html
.. _`PHP NumberFormatter class`: https://www.php.net/manual/en/class.numberformatter.php
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/NumberField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Number Field
======================

This field is used to represent the value of properties that store numbers of
any type (integers or decimals).

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-number.png
   :alt: Default style of EasyAdmin number field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\NumberField``
* **Doctrine DBAL Type** used to store this value: ``decimal``, ``float`` or
  ``string``
* **Symfony Form Type** used to render the field: `NumberType`_
* **Rendered as**:

  .. code-block:: html

    <!-- the type of element used is configurable -->
    <input type=\"number\"> or <input type=\"text\">

Options
-------

setNumberFormat
~~~~~~~~~~~~~~~

By default, numbers are displayed \"as is\". If you prefer to format the value in
any way, use this option and pass any formatting string valid as an argument of
the ``sprintf()`` function::

    // this would display numbers in scientific notation (e.g. 123456.7890 = '1.234568e+5')
    yield NumberField::new('...')->setNumberFormat('%e');

.. caution::

    Using this option will make EasyAdmin to ignore the options ``setNumDecimals``
    and ``setRoundingMode``.

setNumDecimals
~~~~~~~~~~~~~~

By default, numbers are displayed \"as is\" without adding or removing any decimals
to it. Use this option if you want to format values with a certain number of
decimals::

    // this would format 3 as 3.00 and 5.123 as 5.12
    yield NumberField::new('...')->setNumDecimals(2);

setRoundingMode
~~~~~~~~~~~~~~~

By default, when some value must be rounded to reduce the number of decimals,
the field uses PHP ``\\NumberFormatter::ROUND_HALFUP`` strategy. Use this option
to change the rounding strategy and pass as its arguments any of the ``ROUND_*``
constants of `PHP NumberFormatter class`_::

    yield NumberField::new('...')->setRoundingMode(\\NumberFormatter::ROUND_CEILING);

setStoredAsString
~~~~~~~~~~~~~~~~~

By default, this field assumes that you store the value as a numeric property.
If you store the value as a string (e.g. because it's a very large number) use
this option to also display a ``<input type=\"text\">`` element instead of the
default ``<input type=\"number\">`` element::

    yield NumberField::new('...')->setStoredAsString();

.. _`NumberType`: https://symfony.com/doc/current/reference/forms/types/number.html
.. _`PHP NumberFormatter class`: https://www.php.net/manual/en/class.numberformatter.php
", "easycorp/easyadmin-bundle/doc/fields/NumberField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\NumberField.rst");
    }
}
