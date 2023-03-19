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

/* easycorp/easyadmin-bundle/doc/fields/MoneyField.rst */
class __TwigTemplate_f197d23050f7b2438522ca5cf2c8978e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/MoneyField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/MoneyField.rst"));

        // line 1
        echo "EasyAdmin Money Field
=====================

This field is used to represent the value of properties that store amounts of
money.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-money.png
   :alt: Default style of EasyAdmin money field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\MoneyField``
* **Doctrine DBAL Type** used to store this value: ``decimal``, ``float`` or
  ``integer``
* **Symfony Form Type** used to render the field: `MoneyType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"number\">

Options
-------

setCurrency
~~~~~~~~~~~

The currency associated to the amount of money is needed to format the field
value in read-only pages (``index`` and ``detail``). If the currency is known and
the same for all values of the field, use this option (otherwise, use the
``setCurrencyPropertyPath`` option).

The method argument must be a valid `ISO 4217 standard`_ currency code::

    // e.g. 'INR' = 'Indian Rupee'
    yield MoneyField('...')->setCurrency('INR');

setCurrencyPropertyPath
~~~~~~~~~~~~~~~~~~~~~~~

The currency associated to the amount of money is needed to format the field
value in read-only pages (``index`` and ``detail``). If the currency changes
for each field value, you'll probably store that currency code (following the
`ISO 4217 standard`_) as a property of the entity.

Use this option to tell EasyAdmin which is the property that stores the currency
code. The method argument is any valid `Symfony PropertyAccess`_ expression::

    yield MoneyField('...')->setCurrencyPropertyPath('currency');
    yield MoneyField('...')->setCurrencyPropertyPath('currencySymbol');
    yield MoneyField('...')->setCurrencyPropertyPath('currency.code');

setNumDecimals
~~~~~~~~~~~~~~

By default, money amounts are displayed formatted with 2 decimal numbers. Use
this option if you want to format values with a different number of decimals::

    yield MoneyField::new('...')->setNumDecimals(0);

setStoredAsCents
~~~~~~~~~~~~~~~~

Although it may seem over-complicated at first, the most recommended way to
store money amounts in the database is to use cents. For example, \"5 euros\"
would be stored as ``500``(5 x 100 cents) and \"349.99 yens\" would be stored as
``34,999``. Doing this solves all the rounding problems that you'll find when
storing money amounts using float or decimal numbers.

.. tip::

    In Symfony/PHP applications you can use the `Money PHP`_ library to handle
    the conversion of money amounts from/into cents.

If you follow this practice, use this option to tell EasyAdmin to convert from/into
cents automatically when displaying and storing money amounts::

    yield MoneyField::new('...')->setStoredAsCents();

.. _`MoneyType`: https://symfony.com/doc/current/reference/forms/types/money.html
.. _`ISO 4217 standard`: https://en.wikipedia.org/wiki/ISO_4217
.. _`Symfony PropertyAccess`: https://symfony.com/doc/current/components/property_access.html
.. _`Money PHP`: https://github.com/moneyphp/money
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/MoneyField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Money Field
=====================

This field is used to represent the value of properties that store amounts of
money.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-money.png
   :alt: Default style of EasyAdmin money field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\MoneyField``
* **Doctrine DBAL Type** used to store this value: ``decimal``, ``float`` or
  ``integer``
* **Symfony Form Type** used to render the field: `MoneyType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"number\">

Options
-------

setCurrency
~~~~~~~~~~~

The currency associated to the amount of money is needed to format the field
value in read-only pages (``index`` and ``detail``). If the currency is known and
the same for all values of the field, use this option (otherwise, use the
``setCurrencyPropertyPath`` option).

The method argument must be a valid `ISO 4217 standard`_ currency code::

    // e.g. 'INR' = 'Indian Rupee'
    yield MoneyField('...')->setCurrency('INR');

setCurrencyPropertyPath
~~~~~~~~~~~~~~~~~~~~~~~

The currency associated to the amount of money is needed to format the field
value in read-only pages (``index`` and ``detail``). If the currency changes
for each field value, you'll probably store that currency code (following the
`ISO 4217 standard`_) as a property of the entity.

Use this option to tell EasyAdmin which is the property that stores the currency
code. The method argument is any valid `Symfony PropertyAccess`_ expression::

    yield MoneyField('...')->setCurrencyPropertyPath('currency');
    yield MoneyField('...')->setCurrencyPropertyPath('currencySymbol');
    yield MoneyField('...')->setCurrencyPropertyPath('currency.code');

setNumDecimals
~~~~~~~~~~~~~~

By default, money amounts are displayed formatted with 2 decimal numbers. Use
this option if you want to format values with a different number of decimals::

    yield MoneyField::new('...')->setNumDecimals(0);

setStoredAsCents
~~~~~~~~~~~~~~~~

Although it may seem over-complicated at first, the most recommended way to
store money amounts in the database is to use cents. For example, \"5 euros\"
would be stored as ``500``(5 x 100 cents) and \"349.99 yens\" would be stored as
``34,999``. Doing this solves all the rounding problems that you'll find when
storing money amounts using float or decimal numbers.

.. tip::

    In Symfony/PHP applications you can use the `Money PHP`_ library to handle
    the conversion of money amounts from/into cents.

If you follow this practice, use this option to tell EasyAdmin to convert from/into
cents automatically when displaying and storing money amounts::

    yield MoneyField::new('...')->setStoredAsCents();

.. _`MoneyType`: https://symfony.com/doc/current/reference/forms/types/money.html
.. _`ISO 4217 standard`: https://en.wikipedia.org/wiki/ISO_4217
.. _`Symfony PropertyAccess`: https://symfony.com/doc/current/components/property_access.html
.. _`Money PHP`: https://github.com/moneyphp/money
", "easycorp/easyadmin-bundle/doc/fields/MoneyField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\MoneyField.rst");
    }
}
