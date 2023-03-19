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

/* easycorp/easyadmin-bundle/doc/index.rst */
class __TwigTemplate_efce326514fff0276b92c82e5c0cfade extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/index.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/index.rst"));

        // line 1
        echo "EasyAdmin
=========

`EasyAdmin`_ creates beautiful administration backends for your Symfony
applications. It's free, fast and fully documented.

If you already used previous EasyAdmin versions, beware that EasyAdmin 3 uses a
brand new architecture and it's incompatible with previous versions. However,
there's a command to :doc:`upgrade from EasyAdmin 2 to EasyAdmin 3 automatically </upgrade>`.

.. admonition:: Screencast
    :class: screencast

    Like video tutorials? Check out the `EasyAdmin Screencast on SymfonyCasts`_.

Table of Contents
-----------------

.. toctree::
    :maxdepth: 1

    dashboards
    crud
    design
    fields
    filters
    actions
    security
    events
    upgrade

Technical Requirements
----------------------

EasyAdmin requires the following:

* PHP 8.0.2 or higher;
* Symfony 5.4 or higher;
* Doctrine ORM entities (Doctrine ODM is not supported).

Installation
------------

Run the following command to install EasyAdmin in your application:

.. code-block:: terminal

    \$ composer require easycorp/easyadmin-bundle

Now you are ready to :doc:`create your first Dashboard </dashboards>`.

.. _`EasyAdmin`: https://github.com/EasyCorp/EasyAdminBundle
.. _`EasyAdmin Screencast on SymfonyCasts`: https://symfonycasts.com/screencast/easyadminbundle
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("EasyAdmin
=========

`EasyAdmin`_ creates beautiful administration backends for your Symfony
applications. It's free, fast and fully documented.

If you already used previous EasyAdmin versions, beware that EasyAdmin 3 uses a
brand new architecture and it's incompatible with previous versions. However,
there's a command to :doc:`upgrade from EasyAdmin 2 to EasyAdmin 3 automatically </upgrade>`.

.. admonition:: Screencast
    :class: screencast

    Like video tutorials? Check out the `EasyAdmin Screencast on SymfonyCasts`_.

Table of Contents
-----------------

.. toctree::
    :maxdepth: 1

    dashboards
    crud
    design
    fields
    filters
    actions
    security
    events
    upgrade

Technical Requirements
----------------------

EasyAdmin requires the following:

* PHP 8.0.2 or higher;
* Symfony 5.4 or higher;
* Doctrine ORM entities (Doctrine ODM is not supported).

Installation
------------

Run the following command to install EasyAdmin in your application:

.. code-block:: terminal

    \$ composer require easycorp/easyadmin-bundle

Now you are ready to :doc:`create your first Dashboard </dashboards>`.

.. _`EasyAdmin`: https://github.com/EasyCorp/EasyAdminBundle
.. _`EasyAdmin Screencast on SymfonyCasts`: https://symfonycasts.com/screencast/easyadminbundle
", "easycorp/easyadmin-bundle/doc/index.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\index.rst");
    }
}
