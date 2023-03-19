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

/* easycorp/easyadmin-bundle/doc/fields/IdField.rst */
class __TwigTemplate_36b652eb7e62743180285cbe5c657324 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/IdField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/IdField.rst"));

        // line 1
        echo "EasyAdmin ID Field
==================

This field is used to represent the primary key of an integer, no matter if it's
a traditional auto-increment numeric value or a UID value.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-id.png
   :alt: Default style of EasyAdmin ID field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\IdField``
* **Doctrine DBAL Type** used to store this value: ``integer``, ``bigint`` or ``string``
* **Symfony Form Type** used to render the field: `TextType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"text\" value=\"...\">

Options
-------

``setMaxLength``
~~~~~~~~~~~~~~~~

By default, this value is truncated in ``index`` page to a maximum of 7 characters
because usually there's not enough space to display full UID values. If you prefer
to not truncate this value or to do it at different length, use this option:

    // set this value to -1 to not truncate the value
    yield IdField::new('...')->setMaxLength(16);

.. _`TextType`: https://symfony.com/doc/current/reference/forms/types/text.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/IdField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin ID Field
==================

This field is used to represent the primary key of an integer, no matter if it's
a traditional auto-increment numeric value or a UID value.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-id.png
   :alt: Default style of EasyAdmin ID field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\IdField``
* **Doctrine DBAL Type** used to store this value: ``integer``, ``bigint`` or ``string``
* **Symfony Form Type** used to render the field: `TextType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"text\" value=\"...\">

Options
-------

``setMaxLength``
~~~~~~~~~~~~~~~~

By default, this value is truncated in ``index`` page to a maximum of 7 characters
because usually there's not enough space to display full UID values. If you prefer
to not truncate this value or to do it at different length, use this option:

    // set this value to -1 to not truncate the value
    yield IdField::new('...')->setMaxLength(16);

.. _`TextType`: https://symfony.com/doc/current/reference/forms/types/text.html
", "easycorp/easyadmin-bundle/doc/fields/IdField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\IdField.rst");
    }
}
