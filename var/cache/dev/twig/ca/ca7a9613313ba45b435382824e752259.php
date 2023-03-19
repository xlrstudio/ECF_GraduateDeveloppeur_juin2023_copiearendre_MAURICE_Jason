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

/* easycorp/easyadmin-bundle/doc/fields/ImageField.rst */
class __TwigTemplate_68420af499233745587d33b71a830fa7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/ImageField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/ImageField.rst"));

        // line 1
        echo "EasyAdmin Image Field
=====================

This field is used to manage the uploading of images to the backend. The entity
property only stores the path to the image and not its binary contents, which
are stored in a file.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-image.png
   :alt: Default style of EasyAdmin image field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ImageField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: ``FileUploadType``, a custom
  form type created by EasyAdmin
* **Rendered as**:

  .. code-block:: html

    <!-- when loading the page this is transformed into a dynamic widget via JavaScript -->
    <input type=\"file\">

Options
-------

setBasePath
~~~~~~~~~~~

By default, images are loaded in read-only pages (``index`` and ``detail``) \"as is\",
without changing their path. If you serve your images under some path (e.g.
``uploads/images/``) use this option to configure that::

    yield ImageField::new('...')->setBasePath('uploads/images/');

setUploadDir
~~~~~~~~~~~~

By default, the contents of uploaded images are stored into files inside the
``<your-project-dir>/public/uploads/images/`` directory. Use this option to
change that location. The argument is the directory relative to your project root::

    yield ImageField::new('...')->setUploadDir('assets/images/');

setUploadedFileNamePattern
~~~~~~~~~~~~~~~~~~~~~~~~~~

By default, uploaded images are stored with the same file name and extension as
the original files. Use this option to rename the image files after uploading.
The string pattern passed as argument can include the following special values:

* ``[day]``, the day part of the current date (obtained as ``date('d')``)
* ``[month]``, the month part of the current date (obtained as ``date('m')``)
* ``[year]``, the year part of the current date (obtained as ``date('Y')``)
* ``[timestamp]``, the current timestamp (obtained as ``time()``)
* ``[name]``, the original name of the uploaded file
* ``[slug]``, the slug of the original name of the uploaded file (generated with Symfony's String component)
* ``[extension]``, the original extension of the uploaded file (e.g. ``png``)
* ``[contenthash]``, a SHA1 hash of the original file contents
* ``[randomhash]``, a random hash not related in any way to the original file contents
* ``[uuid]``, a random UUID v4 value (generated with Symfony's Uid component)
* ``[ulid]``, a random ULID value (generated with Symfony's Uid component)

You can combine them in any way::

    yield ImageField::new('...')->setUploadedFileNamePattern('[year]/[month]/[day]/[slug]-[contenthash].[extension]');

The argument of this method also accepts a closure that receives as its first
argument the Symfony's UploadedFile instance::

    yield ImageField::new('...')->setUploadedFileNamePattern(
        fn (UploadedFile \$file): string => sprintf('upload_%d_%s.%s', random_int(1, 999), \$file->getFilename(), \$file->guessExtension()))
    );
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/ImageField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Image Field
=====================

This field is used to manage the uploading of images to the backend. The entity
property only stores the path to the image and not its binary contents, which
are stored in a file.

In :ref:`form pages (edit and new) <crud-pages>` it looks like this:

.. image:: ../images/fields/field-image.png
   :alt: Default style of EasyAdmin image field

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ImageField``
* **Doctrine DBAL Type** used to store this value: ``string``
* **Symfony Form Type** used to render the field: ``FileUploadType``, a custom
  form type created by EasyAdmin
* **Rendered as**:

  .. code-block:: html

    <!-- when loading the page this is transformed into a dynamic widget via JavaScript -->
    <input type=\"file\">

Options
-------

setBasePath
~~~~~~~~~~~

By default, images are loaded in read-only pages (``index`` and ``detail``) \"as is\",
without changing their path. If you serve your images under some path (e.g.
``uploads/images/``) use this option to configure that::

    yield ImageField::new('...')->setBasePath('uploads/images/');

setUploadDir
~~~~~~~~~~~~

By default, the contents of uploaded images are stored into files inside the
``<your-project-dir>/public/uploads/images/`` directory. Use this option to
change that location. The argument is the directory relative to your project root::

    yield ImageField::new('...')->setUploadDir('assets/images/');

setUploadedFileNamePattern
~~~~~~~~~~~~~~~~~~~~~~~~~~

By default, uploaded images are stored with the same file name and extension as
the original files. Use this option to rename the image files after uploading.
The string pattern passed as argument can include the following special values:

* ``[day]``, the day part of the current date (obtained as ``date('d')``)
* ``[month]``, the month part of the current date (obtained as ``date('m')``)
* ``[year]``, the year part of the current date (obtained as ``date('Y')``)
* ``[timestamp]``, the current timestamp (obtained as ``time()``)
* ``[name]``, the original name of the uploaded file
* ``[slug]``, the slug of the original name of the uploaded file (generated with Symfony's String component)
* ``[extension]``, the original extension of the uploaded file (e.g. ``png``)
* ``[contenthash]``, a SHA1 hash of the original file contents
* ``[randomhash]``, a random hash not related in any way to the original file contents
* ``[uuid]``, a random UUID v4 value (generated with Symfony's Uid component)
* ``[ulid]``, a random ULID value (generated with Symfony's Uid component)

You can combine them in any way::

    yield ImageField::new('...')->setUploadedFileNamePattern('[year]/[month]/[day]/[slug]-[contenthash].[extension]');

The argument of this method also accepts a closure that receives as its first
argument the Symfony's UploadedFile instance::

    yield ImageField::new('...')->setUploadedFileNamePattern(
        fn (UploadedFile \$file): string => sprintf('upload_%d_%s.%s', random_int(1, 999), \$file->getFilename(), \$file->guessExtension()))
    );
", "easycorp/easyadmin-bundle/doc/fields/ImageField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\ImageField.rst");
    }
}
