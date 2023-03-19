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

/* easycorp/easyadmin-bundle/doc/fields/CurrencyField.rst */
class __TwigTemplate_5ef75ab7d97c91b224d3bf66c6311891 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/CurrencyField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/CurrencyField.rst"));

        // line 1
        echo "EasyAdmin Currency Field
========================

This field is used to represent a value that stores the `3-letter ISO 4217`_ code
of some currency.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-currency.png
   :alt: Default style of EasyAdmin currency field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\CurrencyField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `CurrencyType`_
* **Rendered as**:

  .. code-block:: html

    <select> ... </select>

Options
-------

``showCode``
~~~~~~~~~~~~

By default, this field displays the name and the symbol of the currency, but not
its ISO 4217 code. For example, for the currency of Japan it displays \"Japanese Yen\"
(the name) and ``¥`` (the symbol) but not ``JPY`` (the code).

Use this option to display the currency code::

    yield CurrencyField::new('...')->showCode();

``showName``
~~~~~~~~~~~~

By default, this field displays the name of the currency (``Mexican Peso``,
``Indian rupee``, etc.). If you prefer to not display the name (and only display
the symbol and/or code of the currency) set this option to ``false``::

    yield CurrencyField::new('...')->showName(false);

``showSymbol``
~~~~~~~~~~~~~~

By default, this field displays the symbol of the currency (``€``, ``\$``, ``£``,
etc.). If you prefer to not display the symbol (and only display the name and/or
code of the currency) set this option to ``false``::

    yield CurrencyField::new('...')->showSymbol(false);

.. _`3-letter ISO 4217`: https://en.wikipedia.org/wiki/ISO_4217
.. _`CurrencyType`: https://symfony.com/doc/current/reference/forms/types/currency.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/CurrencyField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Currency Field
========================

This field is used to represent a value that stores the `3-letter ISO 4217`_ code
of some currency.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-currency.png
   :alt: Default style of EasyAdmin currency field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\CurrencyField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `CurrencyType`_
* **Rendered as**:

  .. code-block:: html

    <select> ... </select>

Options
-------

``showCode``
~~~~~~~~~~~~

By default, this field displays the name and the symbol of the currency, but not
its ISO 4217 code. For example, for the currency of Japan it displays \"Japanese Yen\"
(the name) and ``¥`` (the symbol) but not ``JPY`` (the code).

Use this option to display the currency code::

    yield CurrencyField::new('...')->showCode();

``showName``
~~~~~~~~~~~~

By default, this field displays the name of the currency (``Mexican Peso``,
``Indian rupee``, etc.). If you prefer to not display the name (and only display
the symbol and/or code of the currency) set this option to ``false``::

    yield CurrencyField::new('...')->showName(false);

``showSymbol``
~~~~~~~~~~~~~~

By default, this field displays the symbol of the currency (``€``, ``\$``, ``£``,
etc.). If you prefer to not display the symbol (and only display the name and/or
code of the currency) set this option to ``false``::

    yield CurrencyField::new('...')->showSymbol(false);

.. _`3-letter ISO 4217`: https://en.wikipedia.org/wiki/ISO_4217
.. _`CurrencyType`: https://symfony.com/doc/current/reference/forms/types/currency.html
", "easycorp/easyadmin-bundle/doc/fields/CurrencyField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\CurrencyField.rst");
    }
}
