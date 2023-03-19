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

/* easycorp/easyadmin-bundle/doc/fields/IntegerField.rst */
class __TwigTemplate_25b7aa2c87eaf6436e3fda455374c188 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/IntegerField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/IntegerField.rst"));

        // line 1
        echo "EasyAdmin Integer Field
=======================

This field is used to represent the value of properties that store integer numbers.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-integer.png
   :alt: Default style of EasyAdmin integer field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\IntegerField``
* **Doctrine DBAL Type** used to store this value: ``integer`` or ``smallint``
* **Symfony Form Type** used to render the field: `IntegerType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"number\">

Options
-------

setNumberFormat
~~~~~~~~~~~~~~~

By default, the integer value is displayed \"as is\". If you prefer to format the
value in any way, use this option and pass any formatting string valid as an
argument of the ``sprintf()`` function::

    // this would display integers in scientific notation (e.g. 1234567890 = '1.234568e+9')
    yield IntegerField::new('...')->setNumberFormat('%e');

    // formatting also helps you to add left/right padding to numbers
    // the following example would format 123 as '+00123'
    yield IntegerField::new('...')->setNumberFormat('%+06d');

.. _`IntegerType`: https://symfony.com/doc/current/reference/forms/types/integer.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/IntegerField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Integer Field
=======================

This field is used to represent the value of properties that store integer numbers.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-integer.png
   :alt: Default style of EasyAdmin integer field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\IntegerField``
* **Doctrine DBAL Type** used to store this value: ``integer`` or ``smallint``
* **Symfony Form Type** used to render the field: `IntegerType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"number\">

Options
-------

setNumberFormat
~~~~~~~~~~~~~~~

By default, the integer value is displayed \"as is\". If you prefer to format the
value in any way, use this option and pass any formatting string valid as an
argument of the ``sprintf()`` function::

    // this would display integers in scientific notation (e.g. 1234567890 = '1.234568e+9')
    yield IntegerField::new('...')->setNumberFormat('%e');

    // formatting also helps you to add left/right padding to numbers
    // the following example would format 123 as '+00123'
    yield IntegerField::new('...')->setNumberFormat('%+06d');

.. _`IntegerType`: https://symfony.com/doc/current/reference/forms/types/integer.html
", "easycorp/easyadmin-bundle/doc/fields/IntegerField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\IntegerField.rst");
    }
}
