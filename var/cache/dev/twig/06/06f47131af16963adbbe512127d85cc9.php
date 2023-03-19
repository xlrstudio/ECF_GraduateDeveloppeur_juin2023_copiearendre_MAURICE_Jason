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

/* easycorp/easyadmin-bundle/doc/fields/TelephoneField.rst */
class __TwigTemplate_8612539df4f6b80ad9406783a74955d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/TelephoneField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/TelephoneField.rst"));

        // line 1
        echo "EasyAdmin Telephone Field
=========================

This field is used to represent a text content that stores a single telephone number.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-telephone.png
   :alt: Default style of EasyAdmin telephone field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TelephoneField``
* **Doctrine DBAL Type** used to store this value: `string`
* **Symfony Form Type** used to render the field: `TelType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"tel\" value=\"...\">

Options
-------

This field does not define any custom option.

.. _`TelType`: https://symfony.com/doc/current/reference/forms/types/tel.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/TelephoneField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Telephone Field
=========================

This field is used to represent a text content that stores a single telephone number.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-telephone.png
   :alt: Default style of EasyAdmin telephone field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TelephoneField``
* **Doctrine DBAL Type** used to store this value: `string`
* **Symfony Form Type** used to render the field: `TelType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"tel\" value=\"...\">

Options
-------

This field does not define any custom option.

.. _`TelType`: https://symfony.com/doc/current/reference/forms/types/tel.html
", "easycorp/easyadmin-bundle/doc/fields/TelephoneField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\TelephoneField.rst");
    }
}
