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

/* easycorp/easyadmin-bundle/doc/fields/TextareaField.rst */
class __TwigTemplate_ff8b41bb479c53d1848590d81d124298 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/TextareaField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/TextareaField.rst"));

        // line 1
        echo "EasyAdmin Textarea Field
========================

This field is used to represent any kind of long text content. For short text
contents, use :doc:`/fields/TextField <TextField>`.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-textarea.png
   :alt: Default style of EasyAdmin textarea field

.. tip::

    EasyAdmin provides other fields for long text contents:
    :doc:`TextEditorField </fields/TextEditorField>` is ideal for contents such
    as blog posts or doc pages; :doc:`CodeEditorField </fields/CodeEditorField>`
    is ideal to edit and store any kind of source code.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TextareaField``
* **Doctrine DBAL Type** used to store this value: ``text``
* **Symfony Form Type** used to render the field: `TextareaType`_
* **Rendered as**:

  .. code-block:: html

    <textarea> ... </textarea>

Options
-------

``renderAsHtml``
~~~~~~~~~~~~~~~~

In read-only pages (``index`` and ``detail``), text contents are escaped (using
``htmlspecialchars()``) before displaying them. If you have some field where you
want to render HTML tags instead of escaping them, add this option::

    yield TextareaField::new('...')->renderAsHtml();

``setMaxLength``
~~~~~~~~~~~~~~~~

By default, text contents are displayed in full in the ``detail`` page and are
truncated to a maximum of ``64`` characters in ``index`` page. Use this option
to set the maximum in both ``detail`` and ``index`` pages::

    yield TextareaField::new('...')->setMaxLength(15);

    // inside configureFields() you have access to the current page name
    // use it to set different values per page
    yield TextareaField::new('...')->setMaxLength(\$pageName === Crud::PAGE_DETAIL ? 1024 : 32);

This option only has effect in read-only pages (``index`` and ``detail``). In form
pages (``new`` and ``edit``) contents are never truncated in length.

.. note::

    This option is ignored when also using the ``renderAsHtml()`` option, to
    avoid truncating contents in the middle of an opened HTML tag.

``setNumOfRows``
~~~~~~~~~~~~~~~~

The height of the ``<textarea>`` element used in form pages (``new`` and
``edit``) is as large as needed to display its contents. This height also grows
dynamically (via JavaScript) to always match the number of rows of its contents.

This option sets the number of rows displayed when the field contents are empty.
By default, the initial height is small (``5`` rows), so it's a good idea to
increase this value when the expected content is much longer (e.g. a blog post)::

    yield TextareaField::new('...')->setNumOfRows(30);

``stripTags``
~~~~~~~~~~~~~

By default, contents are escaped before displaying them. If you prefer, you can
strip HTML tags using this option (which internally calls to ``strip_tags()``
PHP function):

    // if original contents are `<strong>foo</strong>`, it only displays `foo`
    yield TextareaField::new('...')->stripTags();

.. _`TextareaType`: https://symfony.com/doc/current/reference/forms/types/textarea.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/TextareaField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Textarea Field
========================

This field is used to represent any kind of long text content. For short text
contents, use :doc:`/fields/TextField <TextField>`.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-textarea.png
   :alt: Default style of EasyAdmin textarea field

.. tip::

    EasyAdmin provides other fields for long text contents:
    :doc:`TextEditorField </fields/TextEditorField>` is ideal for contents such
    as blog posts or doc pages; :doc:`CodeEditorField </fields/CodeEditorField>`
    is ideal to edit and store any kind of source code.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TextareaField``
* **Doctrine DBAL Type** used to store this value: ``text``
* **Symfony Form Type** used to render the field: `TextareaType`_
* **Rendered as**:

  .. code-block:: html

    <textarea> ... </textarea>

Options
-------

``renderAsHtml``
~~~~~~~~~~~~~~~~

In read-only pages (``index`` and ``detail``), text contents are escaped (using
``htmlspecialchars()``) before displaying them. If you have some field where you
want to render HTML tags instead of escaping them, add this option::

    yield TextareaField::new('...')->renderAsHtml();

``setMaxLength``
~~~~~~~~~~~~~~~~

By default, text contents are displayed in full in the ``detail`` page and are
truncated to a maximum of ``64`` characters in ``index`` page. Use this option
to set the maximum in both ``detail`` and ``index`` pages::

    yield TextareaField::new('...')->setMaxLength(15);

    // inside configureFields() you have access to the current page name
    // use it to set different values per page
    yield TextareaField::new('...')->setMaxLength(\$pageName === Crud::PAGE_DETAIL ? 1024 : 32);

This option only has effect in read-only pages (``index`` and ``detail``). In form
pages (``new`` and ``edit``) contents are never truncated in length.

.. note::

    This option is ignored when also using the ``renderAsHtml()`` option, to
    avoid truncating contents in the middle of an opened HTML tag.

``setNumOfRows``
~~~~~~~~~~~~~~~~

The height of the ``<textarea>`` element used in form pages (``new`` and
``edit``) is as large as needed to display its contents. This height also grows
dynamically (via JavaScript) to always match the number of rows of its contents.

This option sets the number of rows displayed when the field contents are empty.
By default, the initial height is small (``5`` rows), so it's a good idea to
increase this value when the expected content is much longer (e.g. a blog post)::

    yield TextareaField::new('...')->setNumOfRows(30);

``stripTags``
~~~~~~~~~~~~~

By default, contents are escaped before displaying them. If you prefer, you can
strip HTML tags using this option (which internally calls to ``strip_tags()``
PHP function):

    // if original contents are `<strong>foo</strong>`, it only displays `foo`
    yield TextareaField::new('...')->stripTags();

.. _`TextareaType`: https://symfony.com/doc/current/reference/forms/types/textarea.html
", "easycorp/easyadmin-bundle/doc/fields/TextareaField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\TextareaField.rst");
    }
}
