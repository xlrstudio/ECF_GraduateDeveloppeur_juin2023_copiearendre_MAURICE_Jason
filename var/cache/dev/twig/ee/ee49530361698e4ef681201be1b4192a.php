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

/* easycorp/easyadmin-bundle/doc/fields/HiddenField.rst */
class __TwigTemplate_edbc88de69da8cbbe059354f8d3c7ff9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/HiddenField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/HiddenField.rst"));

        // line 1
        echo "EasyAdmin Hidden Field
======================

This is a very special field used to include hidden fields in the forms used
to create and edit entities. Most probably you'll never use this field, but it
could help in edge-cases.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\HiddenField``
* **Doctrine DBAL Type** used to store this value: anything (it depends on the
  value of the property used to include it as a hidden field)
* **Symfony Form Type** used to render the field: `HiddenType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"hidden\" value=\"...\">

Options
-------

This field does not define any custom option.

.. _`HiddenType`: https://symfony.com/doc/current/reference/forms/types/hidden.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/HiddenField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Hidden Field
======================

This is a very special field used to include hidden fields in the forms used
to create and edit entities. Most probably you'll never use this field, but it
could help in edge-cases.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\HiddenField``
* **Doctrine DBAL Type** used to store this value: anything (it depends on the
  value of the property used to include it as a hidden field)
* **Symfony Form Type** used to render the field: `HiddenType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"hidden\" value=\"...\">

Options
-------

This field does not define any custom option.

.. _`HiddenType`: https://symfony.com/doc/current/reference/forms/types/hidden.html
", "easycorp/easyadmin-bundle/doc/fields/HiddenField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\HiddenField.rst");
    }
}
