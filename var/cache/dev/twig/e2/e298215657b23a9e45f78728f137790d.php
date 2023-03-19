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

/* easycorp/easyadmin-bundle/doc/fields/PercentField.rst */
class __TwigTemplate_e0428c0d99e1128e24893fab4ef7eb17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/PercentField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/PercentField.rst"));

        // line 1
        echo "EasyAdmin Percent Field
=======================

This field is used to represent the value of properties that store percentages.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-percent.png
   :alt: Default style of EasyAdmin percent field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\PercentField``
* **Doctrine DBAL Type** used to store this value: ``decimal``, ``float`` or
  ``integer``
* **Symfony Form Type** used to render the field: `PercentType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"text\">

Options
-------

setNumDecimals
~~~~~~~~~~~~~~

By default, percentages are displayed \"as is\" without adding or removing any
decimals to it. Use this option if you want to format values with a certain
number of decimals::

    // this would format 3 as 3.00 and 5.123 as 5.12
    yield PercentField::new('...')->setNumDecimals(2);

setRoundingMode
~~~~~~~~~~~~~~~

By default, when some value must be rounded to reduce the number of decimals,
the field uses PHP ``\\NumberFormatter::ROUND_HALFUP`` strategy. Use this option
to change the rounding strategy and pass as its arguments any of the ``ROUND_*``
constants of `PHP NumberFormatter class`_::

    yield PercentField::new('...')->setRoundingMode(\\NumberFormatter::ROUND_CEILING);

setStoredAsFractional
~~~~~~~~~~~~~~~~~~~~~

By default, percentages are stored as fractional values from ``0`` to ``1``
(e.g. 15% is stored as ``0.15`` and 67.84% is stored as ``0.6784``). If you
prefer to store percentages as integer values from ``0`` to ``100``, set this
option to ``false``:

    // if your percentages can have decimals, you must store them as fractional values
    yield PercentField::new('...')->setStoredAsFractional(false);

Regardless of how you store these values, EasyAdmin always display percentages
as values from ``0`` to ``100`` (e.g. even if you store 15% as ``0.15`` in the
database, forms and listings will always display ``15%``).

setSymbol
~~~~~~~~~

By default, values display a ``%`` next to them to make them easier to understand.
Use this option and pass ``false`` to not display any symbol or pass any other
string to use that as the symbol::

    // this won't display any symbol
    yield PercentField::new('...')->setSymbol(false);

    // this will display the \"per mille\" (per thousand) symbol next to values
    yield PercentField::new('...')->setSymbol('‰');

.. _`PercentType`: https://symfony.com/doc/current/reference/forms/types/percent.html
.. _`PHP NumberFormatter class`: https://www.php.net/manual/en/class.numberformatter.php
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/PercentField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Percent Field
=======================

This field is used to represent the value of properties that store percentages.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-percent.png
   :alt: Default style of EasyAdmin percent field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\PercentField``
* **Doctrine DBAL Type** used to store this value: ``decimal``, ``float`` or
  ``integer``
* **Symfony Form Type** used to render the field: `PercentType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"text\">

Options
-------

setNumDecimals
~~~~~~~~~~~~~~

By default, percentages are displayed \"as is\" without adding or removing any
decimals to it. Use this option if you want to format values with a certain
number of decimals::

    // this would format 3 as 3.00 and 5.123 as 5.12
    yield PercentField::new('...')->setNumDecimals(2);

setRoundingMode
~~~~~~~~~~~~~~~

By default, when some value must be rounded to reduce the number of decimals,
the field uses PHP ``\\NumberFormatter::ROUND_HALFUP`` strategy. Use this option
to change the rounding strategy and pass as its arguments any of the ``ROUND_*``
constants of `PHP NumberFormatter class`_::

    yield PercentField::new('...')->setRoundingMode(\\NumberFormatter::ROUND_CEILING);

setStoredAsFractional
~~~~~~~~~~~~~~~~~~~~~

By default, percentages are stored as fractional values from ``0`` to ``1``
(e.g. 15% is stored as ``0.15`` and 67.84% is stored as ``0.6784``). If you
prefer to store percentages as integer values from ``0`` to ``100``, set this
option to ``false``:

    // if your percentages can have decimals, you must store them as fractional values
    yield PercentField::new('...')->setStoredAsFractional(false);

Regardless of how you store these values, EasyAdmin always display percentages
as values from ``0`` to ``100`` (e.g. even if you store 15% as ``0.15`` in the
database, forms and listings will always display ``15%``).

setSymbol
~~~~~~~~~

By default, values display a ``%`` next to them to make them easier to understand.
Use this option and pass ``false`` to not display any symbol or pass any other
string to use that as the symbol::

    // this won't display any symbol
    yield PercentField::new('...')->setSymbol(false);

    // this will display the \"per mille\" (per thousand) symbol next to values
    yield PercentField::new('...')->setSymbol('‰');

.. _`PercentType`: https://symfony.com/doc/current/reference/forms/types/percent.html
.. _`PHP NumberFormatter class`: https://www.php.net/manual/en/class.numberformatter.php
", "easycorp/easyadmin-bundle/doc/fields/PercentField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\PercentField.rst");
    }
}
