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

/* easycorp/easyadmin-bundle/doc/fields/BooleanField.rst */
class __TwigTemplate_662b1d7815e561d52fcd39bc0f6aa044 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/BooleanField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/BooleanField.rst"));

        // line 1
        echo "EasyAdmin Boolean Field
=======================

This field displays the ``true``/``false`` value of a boolean property.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this (it's like
an advanced ``<input type=\"checkbox\">`` created with JavaScript):

.. image:: ../images/fields/field-boolean.png
   :alt: Default style of EasyAdmin boolean field

In read-only pages (``index`` and ``detail``) it renders either as a static
``Yes``/``No`` label or as a dynamic switch/toggle that can flip the value when
clicking on it.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\BooleanField``
* **Doctrine DBAL Type** used to store this value: ``boolean``
* **Symfony Form Type** used to render the field: `CheckboxType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"checkbox\">

Options
-------

``renderAsSwitch``
~~~~~~~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) this field is rendered
as a dynamic switch/toggle that can flip the underlying value when clicking on it.
If you prefer to not allow changing the property value in this way, use this option::

    yield BooleanField::new('...')->renderAsSwitch(false);

.. _`CheckboxType`: https://symfony.com/doc/current/reference/forms/types/checkbox.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/BooleanField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Boolean Field
=======================

This field displays the ``true``/``false`` value of a boolean property.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this (it's like
an advanced ``<input type=\"checkbox\">`` created with JavaScript):

.. image:: ../images/fields/field-boolean.png
   :alt: Default style of EasyAdmin boolean field

In read-only pages (``index`` and ``detail``) it renders either as a static
``Yes``/``No`` label or as a dynamic switch/toggle that can flip the value when
clicking on it.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\BooleanField``
* **Doctrine DBAL Type** used to store this value: ``boolean``
* **Symfony Form Type** used to render the field: `CheckboxType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"checkbox\">

Options
-------

``renderAsSwitch``
~~~~~~~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``detail``) this field is rendered
as a dynamic switch/toggle that can flip the underlying value when clicking on it.
If you prefer to not allow changing the property value in this way, use this option::

    yield BooleanField::new('...')->renderAsSwitch(false);

.. _`CheckboxType`: https://symfony.com/doc/current/reference/forms/types/checkbox.html
", "easycorp/easyadmin-bundle/doc/fields/BooleanField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\BooleanField.rst");
    }
}
