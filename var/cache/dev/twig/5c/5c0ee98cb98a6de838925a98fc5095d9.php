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

/* easycorp/easyadmin-bundle/doc/fields/ColorField.rst */
class __TwigTemplate_f8cedd18e3268162b257d93b23c1a9c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/ColorField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/ColorField.rst"));

        // line 1
        echo "EasyAdmin Color Field
=====================

This field is used to represent a text content that stores a single color value
following the `HTML 5 color format`_ (a 7-character string specifying an RGB
color in lower case hexadecimal notation: ``#000000``).

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-color.png
   :alt: Default style of EasyAdmin color field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ColorField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `ColorType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"color\" value=\"...\">

Options
-------

``showSample``
~~~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) the field is represented
as a sample of its color (using a ``<span>`` HTML element with a background color
of the same value). If you prefer to not display that sample, use this option::

    yield ColorField::new('...')->showSample(false);

``showValue``
~~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) the hexadecimal value
of the color is not displayed (only a sample of the color is displayed). Use
this option to display that hexadecimal value::

    yield ColorField::new('...')->showValue();

.. _`HTML 5 color format`: https://www.w3.org/TR/html52/sec-forms.html#color-state-typecolor
.. _`ColorType`: https://symfony.com/doc/current/reference/forms/types/color.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/ColorField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Color Field
=====================

This field is used to represent a text content that stores a single color value
following the `HTML 5 color format`_ (a 7-character string specifying an RGB
color in lower case hexadecimal notation: ``#000000``).

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-color.png
   :alt: Default style of EasyAdmin color field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ColorField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `ColorType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"color\" value=\"...\">

Options
-------

``showSample``
~~~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) the field is represented
as a sample of its color (using a ``<span>`` HTML element with a background color
of the same value). If you prefer to not display that sample, use this option::

    yield ColorField::new('...')->showSample(false);

``showValue``
~~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) the hexadecimal value
of the color is not displayed (only a sample of the color is displayed). Use
this option to display that hexadecimal value::

    yield ColorField::new('...')->showValue();

.. _`HTML 5 color format`: https://www.w3.org/TR/html52/sec-forms.html#color-state-typecolor
.. _`ColorType`: https://symfony.com/doc/current/reference/forms/types/color.html
", "easycorp/easyadmin-bundle/doc/fields/ColorField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\ColorField.rst");
    }
}
