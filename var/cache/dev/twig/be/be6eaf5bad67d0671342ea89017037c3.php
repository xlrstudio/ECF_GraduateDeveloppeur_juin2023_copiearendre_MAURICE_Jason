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

/* easycorp/easyadmin-bundle/doc/fields/AvatarField.rst */
class __TwigTemplate_ac9f05b8a90c892335e88f6977f1764c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/AvatarField.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/fields/AvatarField.rst"));

        // line 1
        echo "EasyAdmin Avatar Field
======================

This field displays an image representing the avatar of a user based on the value
of some entity property.

In :ref:`form pages (edit and new) <crud-pages>` it renders the avatar image URL
in a ``<input type=\"text\">`` field. In read-only pages (``index`` and ``detail``)
it renders the ``<img>`` element represented by that URL.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\AvatarField``
* **Doctrine DBAL Type** used to store this value: ``string`` or ``text``
* **Symfony Form Type** used to render the field: `TextType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"text\">

Options
-------

``setHeight``
~~~~~~~~~~~~~

Avatar images are rendered as squares, so there are only one option to set the
``height``, which will be the same as its ``width``. By default, avatars images
are ``24px`` height in ``index`` page and ``48px`` height in ``detail`` page.
Use this option to customize this value::

    // if you pass an integer, it's considered the height in pixels
    yield AvatarField::new('...')->setHeight(36);

    // you can also use any of these predefined sizes:
    // 'sm' = 18px; 'md' = 24px; 'lg' = 48px; 'xl' = 96px
    yield AvatarField::new('...')->setHeight('lg');

    // inside configureFields() you have access to the current page name
    // use it to set different values per page
    yield AvatarField::new('...')->setHeight(\$pageName === Crud::PAGE_DETAIL ? 'lg' : 21);

``setIsGravatarEmail``
~~~~~~~~~~~~~~~~~~~~~~

By default, EasyAdmin considers that the value stored in the property is the full
URL of the avatar image. If you use `Gravatar`_ service, set this option to tell
EasyAdmin that it has to generate the avatar image URL dynamically using the
email stored in the property::

    // turns the email into an URL of the format: 'https://www.gravatar.com/avatar/...'
    yield AvatarField::new('someEmail')->setIsGravatarEmail();

.. _`TextType`: https://symfony.com/doc/current/reference/forms/types/text.html
.. _`Gravatar`: https://gravatar.com/
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/fields/AvatarField.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin Avatar Field
======================

This field displays an image representing the avatar of a user based on the value
of some entity property.

In :ref:`form pages (edit and new) <crud-pages>` it renders the avatar image URL
in a ``<input type=\"text\">`` field. In read-only pages (``index`` and ``detail``)
it renders the ``<img>`` element represented by that URL.

Basic Information
-----------------

* **PHP Class**: ``EasyCorp\\Bundle\\EasyAdminBundle\\Field\\AvatarField``
* **Doctrine DBAL Type** used to store this value: ``string`` or ``text``
* **Symfony Form Type** used to render the field: `TextType`_
* **Rendered as**:

  .. code-block:: html

    <input type=\"text\">

Options
-------

``setHeight``
~~~~~~~~~~~~~

Avatar images are rendered as squares, so there are only one option to set the
``height``, which will be the same as its ``width``. By default, avatars images
are ``24px`` height in ``index`` page and ``48px`` height in ``detail`` page.
Use this option to customize this value::

    // if you pass an integer, it's considered the height in pixels
    yield AvatarField::new('...')->setHeight(36);

    // you can also use any of these predefined sizes:
    // 'sm' = 18px; 'md' = 24px; 'lg' = 48px; 'xl' = 96px
    yield AvatarField::new('...')->setHeight('lg');

    // inside configureFields() you have access to the current page name
    // use it to set different values per page
    yield AvatarField::new('...')->setHeight(\$pageName === Crud::PAGE_DETAIL ? 'lg' : 21);

``setIsGravatarEmail``
~~~~~~~~~~~~~~~~~~~~~~

By default, EasyAdmin considers that the value stored in the property is the full
URL of the avatar image. If you use `Gravatar`_ service, set this option to tell
EasyAdmin that it has to generate the avatar image URL dynamically using the
email stored in the property::

    // turns the email into an URL of the format: 'https://www.gravatar.com/avatar/...'
    yield AvatarField::new('someEmail')->setIsGravatarEmail();

.. _`TextType`: https://symfony.com/doc/current/reference/forms/types/text.html
.. _`Gravatar`: https://gravatar.com/
", "easycorp/easyadmin-bundle/doc/fields/AvatarField.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\fields\\AvatarField.rst");
    }
}
