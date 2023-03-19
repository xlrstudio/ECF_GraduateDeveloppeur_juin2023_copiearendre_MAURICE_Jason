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

/* easycorp/easyadmin-bundle/doc/fields/CountryField.rst */
class __TwigTemplate_7e554c544eccbe0ec03c336df71f6f8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/CountryField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/CountryField.rst"));

        // line 1
        echo "EasyAdmin Country Field
=======================

This field is used to represent the name and/or flag that corresponds to the
country code stored in some property.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-country.png
   :alt: Default style of EasyAdmin country field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\CountryField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `CountryType`_
* **Rendered as**:

  .. code-block:: html

    <select> ... </select>

Options
-------

includeOnly
~~~~~~~~~~~

By default, the country selector displays all the countries/regions defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to only display the given country codes::

    yield CountryField::new('...')->includeOnly(['AR', 'BR', 'ES', 'PT']);

remove
~~~~~~

By default, the country selector displays all the countries/regions defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to remove the given countries/regions codes from that list::

    yield CountryField::new('...')->remove(['AF', 'KP']);

showFlag
~~~~~~~~

By default, the country flag is displayed both in read-only pages (``index`` and
``detail``) and in the selector used in form pages. Use this option if you want
to hide the flag::

    yield CountryField::new('...')->showFlag(false);

showName
~~~~~~~~

By default, the country name is displayed both in read-only pages (``index`` and
``detail``) and in the selector used in form pages. Use this option if you want
to hide the name::

    yield CountryField::new('...')->showName(false);

useAlpha3Codes
~~~~~~~~~~~~~~

By default, the field expects that the given country code is a 2-letter value
following the `ISO 3166-1 alpha-2`_ format. Use this option if you store the
country code using the 3-letter value of the `ISO 3166-1 alpha-3`_ format::

    yield CountryField::new('...')->useAlpha3Codes();

.. _`CountryType`: https://symfony.com/doc/current/reference/forms/types/country.html
.. _`ICU project`: https://icu.unicode.org/
.. _`ISO 3166-1 alpha-2`: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
.. _`ISO 3166-1 alpha-3`: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/CountryField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Country Field
=======================

This field is used to represent the name and/or flag that corresponds to the
country code stored in some property.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-country.png
   :alt: Default style of EasyAdmin country field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\CountryField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `CountryType`_
* **Rendered as**:

  .. code-block:: html

    <select> ... </select>

Options
-------

includeOnly
~~~~~~~~~~~

By default, the country selector displays all the countries/regions defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to only display the given country codes::

    yield CountryField::new('...')->includeOnly(['AR', 'BR', 'ES', 'PT']);

remove
~~~~~~

By default, the country selector displays all the countries/regions defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to remove the given countries/regions codes from that list::

    yield CountryField::new('...')->remove(['AF', 'KP']);

showFlag
~~~~~~~~

By default, the country flag is displayed both in read-only pages (``index`` and
``detail``) and in the selector used in form pages. Use this option if you want
to hide the flag::

    yield CountryField::new('...')->showFlag(false);

showName
~~~~~~~~

By default, the country name is displayed both in read-only pages (``index`` and
``detail``) and in the selector used in form pages. Use this option if you want
to hide the name::

    yield CountryField::new('...')->showName(false);

useAlpha3Codes
~~~~~~~~~~~~~~

By default, the field expects that the given country code is a 2-letter value
following the `ISO 3166-1 alpha-2`_ format. Use this option if you store the
country code using the 3-letter value of the `ISO 3166-1 alpha-3`_ format::

    yield CountryField::new('...')->useAlpha3Codes();

.. _`CountryType`: https://symfony.com/doc/current/reference/forms/types/country.html
.. _`ICU project`: https://icu.unicode.org/
.. _`ISO 3166-1 alpha-2`: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
.. _`ISO 3166-1 alpha-3`: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
", "easycorp/easyadmin-bundle/doc/fields/CountryField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\CountryField.rst");
    }
}
