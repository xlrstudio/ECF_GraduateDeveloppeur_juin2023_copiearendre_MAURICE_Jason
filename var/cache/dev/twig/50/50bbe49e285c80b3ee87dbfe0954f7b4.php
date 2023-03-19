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

/* easycorp/easyadmin-bundle/doc/fields/LanguageField.rst */
class __TwigTemplate_ae77920c7b296d0a7885103b8377fb63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/LanguageField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/LanguageField.rst"));

        // line 1
        echo "EasyAdmin Language Field
========================

This field is used to represent the name of a language stored in a property as
a valid `ICU project`_ language code (the same which is used by Symfony and many
other tech projects).

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-language.png
   :alt: Default style of EasyAdmin language field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\LanguageField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `LanguageType`_
* **Rendered as**:

  .. code-block:: html

    <select> ... </select>

Options
-------

``includeOnly``
~~~~~~~~~~~~~~~

By default, the locale selector displays all the languages defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to only display the given language codes::

    yield LanguageField::new('...')->includeOnly(['en', 'fr', 'pl']);

``remove``
~~~~~~~~~~

By default, the locale selector displays all the languages defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to remove the given language codes from that list::

    yield LanguageField::new('...')->remove(['fr', 'pl']);

``showCode``
~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``show``) this field displays the
full name of the language (e.g. ``Arabic``, ``Burmese``, ``Slovenian``, etc.)

Use this option if you want to display the language code (e.g. ``ar``, ``my``,
``sl``, etc.) instead of or in addition to the language name::

    yield LanguageField::new('...')->showCode();

``showName``
~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``show``) this field displays the
full name of the language (e.g. ``Arabic``, ``Burmese``, ``Slovenian``, etc.)

Use this option if you want to hide this name and display instead the language
code (e.g. ``ar``, ``my``, ``sl``, etc.)::

    yield LanguageField::new('...')->showName(false);

``useAlpha3Codes``
~~~~~~~~~~~~~~~~~~

By default, the field expects that the given language code is a 2-letter value
following the `ISO 639-1 alpha-2`_ format. Use this option if you store the
language code using the 3-letter value of the `ISO 639-2 alpha-3`_ format::

    yield LanguageField::new('...')->useAlpha3Codes();

.. _`LanguageType`: https://symfony.com/doc/current/reference/forms/types/language.html
.. _`ICU project`: https://icu.unicode.org/
.. _`ISO 639-1 alpha-2`: https://en.wikipedia.org/wiki/ISO_639-1
.. _`ISO 639-2 alpha-3`: https://en.wikipedia.org/wiki/ISO_639-2
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/LanguageField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Language Field
========================

This field is used to represent the name of a language stored in a property as
a valid `ICU project`_ language code (the same which is used by Symfony and many
other tech projects).

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-language.png
   :alt: Default style of EasyAdmin language field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\LanguageField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: `LanguageType`_
* **Rendered as**:

  .. code-block:: html

    <select> ... </select>

Options
-------

``includeOnly``
~~~~~~~~~~~~~~~

By default, the locale selector displays all the languages defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to only display the given language codes::

    yield LanguageField::new('...')->includeOnly(['en', 'fr', 'pl']);

``remove``
~~~~~~~~~~

By default, the locale selector displays all the languages defined by
the `ICU project`_, the same which is used by Symfony and many other tech projects.
Use this option to remove the given language codes from that list::

    yield LanguageField::new('...')->remove(['fr', 'pl']);

``showCode``
~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``show``) this field displays the
full name of the language (e.g. ``Arabic``, ``Burmese``, ``Slovenian``, etc.)

Use this option if you want to display the language code (e.g. ``ar``, ``my``,
``sl``, etc.) instead of or in addition to the language name::

    yield LanguageField::new('...')->showCode();

``showName``
~~~~~~~~~~~~

By default, in read-only pages (``index`` and ``show``) this field displays the
full name of the language (e.g. ``Arabic``, ``Burmese``, ``Slovenian``, etc.)

Use this option if you want to hide this name and display instead the language
code (e.g. ``ar``, ``my``, ``sl``, etc.)::

    yield LanguageField::new('...')->showName(false);

``useAlpha3Codes``
~~~~~~~~~~~~~~~~~~

By default, the field expects that the given language code is a 2-letter value
following the `ISO 639-1 alpha-2`_ format. Use this option if you store the
language code using the 3-letter value of the `ISO 639-2 alpha-3`_ format::

    yield LanguageField::new('...')->useAlpha3Codes();

.. _`LanguageType`: https://symfony.com/doc/current/reference/forms/types/language.html
.. _`ICU project`: https://icu.unicode.org/
.. _`ISO 639-1 alpha-2`: https://en.wikipedia.org/wiki/ISO_639-1
.. _`ISO 639-2 alpha-3`: https://en.wikipedia.org/wiki/ISO_639-2
", "easycorp/easyadmin-bundle/doc/fields/LanguageField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\LanguageField.rst");
    }
}
