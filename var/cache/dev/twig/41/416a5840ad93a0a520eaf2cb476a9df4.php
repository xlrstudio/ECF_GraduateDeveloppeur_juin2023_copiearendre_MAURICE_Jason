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

/* easycorp/easyadmin-bundle/doc/upgrade.rst */
class __TwigTemplate_0efca4c8addeeaf4ae5988bc2424de03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/upgrade.rst"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/doc/upgrade.rst"));

        // line 1
        echo "Upgrading from EasyAdmin 2 to EasyAdmin 4
=========================================

In EasyAdmin 2 most of the backend configuration was defined in YAML files,
while custom behavior was created with PHP. This worked great for small
applications, but it was hard to maintain and not flexible enough for medium
and large applications.

Starting from EasyAdmin 3, **backends are created exclusively with PHP**.
YAML is no longer used in any part of EasyAdmin. However, you will be even more
productive than before because you can autocomplete 100% of the new PHP code and
the bundle also provides commands to generate some of the needed code.

There is a way to `upgrade from EasyAdmin 2 YAML files to EasyAdmin 3 PHP files automatically`_.
However, that upgrade feature was removed in EasyAdmin 4.x. That's why, if you
want to upgrade from EasyAdmin 2, it's recommended to upgrade first to EasyAdmin 3
and then, upgrade to EasyAdmin 4.x.

.. _`upgrade from EasyAdmin 2 YAML files to EasyAdmin 3 PHP files automatically`: https://symfony.com/bundles/EasyAdminBundle/3.x/upgrade.html
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/doc/upgrade.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Upgrading from EasyAdmin 2 to EasyAdmin 4
=========================================

In EasyAdmin 2 most of the backend configuration was defined in YAML files,
while custom behavior was created with PHP. This worked great for small
applications, but it was hard to maintain and not flexible enough for medium
and large applications.

Starting from EasyAdmin 3, **backends are created exclusively with PHP**.
YAML is no longer used in any part of EasyAdmin. However, you will be even more
productive than before because you can autocomplete 100% of the new PHP code and
the bundle also provides commands to generate some of the needed code.

There is a way to `upgrade from EasyAdmin 2 YAML files to EasyAdmin 3 PHP files automatically`_.
However, that upgrade feature was removed in EasyAdmin 4.x. That's why, if you
want to upgrade from EasyAdmin 2, it's recommended to upgrade first to EasyAdmin 3
and then, upgrade to EasyAdmin 4.x.

.. _`upgrade from EasyAdmin 2 YAML files to EasyAdmin 3 PHP files automatically`: https://symfony.com/bundles/EasyAdminBundle/3.x/upgrade.html
", "easycorp/easyadmin-bundle/doc/upgrade.rst", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\doc\\upgrade.rst");
    }
}
