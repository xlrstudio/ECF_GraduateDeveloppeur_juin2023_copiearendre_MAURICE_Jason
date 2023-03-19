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

/* easycorp/easyadmin-bundle/doc/fields/TextEditorField.rst */
class __TwigTemplate_001fa2130cdf2ce34fa18b96d4b79b96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/TextEditorField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/TextEditorField.rst"));

        // line 1
        echo "EasyAdmin Text Editor Field
===========================

This field creates a JavaScript-based WYSIWYG editor based on the `Trix editor`_
to manage long texts.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-texteditor.png
   :alt: Default style of EasyAdmin text editor field

.. tip::

    EasyAdmin provides other fields for long text contents:
    :doc:`TextAreaField </fields/TextareaField>` is ideal for long contents that
    don't need any formatting; :doc:`CodeEditorField </fields/CodeEditorField>`
    is ideal to edit and store any kind of source code.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TextEditorField``
* **Doctrine DBAL Type** used to store this value: ``text``
* **Symfony Form Type** used to render the field: `TextEditorType`_, which is
  based on Symfony's `TextareaType`_
* **Rendered as**:

  .. code-block:: html

    <!-- when loading the page this is transformed into a WYSIWYG editor via JavaScript -->
    <textarea> ... </textarea>

Options
-------

``setNumOfRows``
~~~~~~~~~~~~~~~~

The height of the editor used in form pages (``new`` and ``edit``) is as large
as needed to display its contents. This height also grows dynamically (via JavaScript)
to always match the number of rows of its contents.

This option sets the number of rows displayed when the field contents are empty.
By default, the initial height is small, so it's a good idea to increase this
value when the expected content is much longer (e.g. a blog post)::

    yield TextEditorField::new('...')->setNumOfRows(30);

``setTrixEditorConfig``
~~~~~~~~~~~~~~~~~~~~~~~

This option allows you to pass a PHP array of the configuration options to set
or update in the JavaScript Trix editor used by this field::

    yield TextEditorField::new('...')->setTrixEditorConfig([
        'blockAttributes' => [
            'default' => ['tagName' => 'p'],
            'heading1' => ['tagName' => 'h2'],
        ],
        'css' => [
            'attachment' => 'admin_file_field_attachment',
        ],
    ]);

Check out the `src/trix/config/ folder`_ at Trix editor repository to learn
about all the available configuration options.

.. _`Trix editor`: https://github.com/basecamp/trix
.. _`TextEditorType`: https://github.com/EasyCorp/EasyAdminBundle/blob/4.x/src/Form/Type/TextEditorType.php
.. _`TextareaType`: https://symfony.com/doc/current/reference/forms/types/textarea.html
.. _`src/trix/config/ folder`: https://github.com/basecamp/trix/tree/main/src/trix/config
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/TextEditorField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Text Editor Field
===========================

This field creates a JavaScript-based WYSIWYG editor based on the `Trix editor`_
to manage long texts.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-texteditor.png
   :alt: Default style of EasyAdmin text editor field

.. tip::

    EasyAdmin provides other fields for long text contents:
    :doc:`TextAreaField </fields/TextareaField>` is ideal for long contents that
    don't need any formatting; :doc:`CodeEditorField </fields/CodeEditorField>`
    is ideal to edit and store any kind of source code.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TextEditorField``
* **Doctrine DBAL Type** used to store this value: ``text``
* **Symfony Form Type** used to render the field: `TextEditorType`_, which is
  based on Symfony's `TextareaType`_
* **Rendered as**:

  .. code-block:: html

    <!-- when loading the page this is transformed into a WYSIWYG editor via JavaScript -->
    <textarea> ... </textarea>

Options
-------

``setNumOfRows``
~~~~~~~~~~~~~~~~

The height of the editor used in form pages (``new`` and ``edit``) is as large
as needed to display its contents. This height also grows dynamically (via JavaScript)
to always match the number of rows of its contents.

This option sets the number of rows displayed when the field contents are empty.
By default, the initial height is small, so it's a good idea to increase this
value when the expected content is much longer (e.g. a blog post)::

    yield TextEditorField::new('...')->setNumOfRows(30);

``setTrixEditorConfig``
~~~~~~~~~~~~~~~~~~~~~~~

This option allows you to pass a PHP array of the configuration options to set
or update in the JavaScript Trix editor used by this field::

    yield TextEditorField::new('...')->setTrixEditorConfig([
        'blockAttributes' => [
            'default' => ['tagName' => 'p'],
            'heading1' => ['tagName' => 'h2'],
        ],
        'css' => [
            'attachment' => 'admin_file_field_attachment',
        ],
    ]);

Check out the `src/trix/config/ folder`_ at Trix editor repository to learn
about all the available configuration options.

.. _`Trix editor`: https://github.com/basecamp/trix
.. _`TextEditorType`: https://github.com/EasyCorp/EasyAdminBundle/blob/4.x/src/Form/Type/TextEditorType.php
.. _`TextareaType`: https://symfony.com/doc/current/reference/forms/types/textarea.html
.. _`src/trix/config/ folder`: https://github.com/basecamp/trix/tree/main/src/trix/config
", "easycorp/easyadmin-bundle/doc/fields/TextEditorField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\TextEditorField.rst");
    }
}
