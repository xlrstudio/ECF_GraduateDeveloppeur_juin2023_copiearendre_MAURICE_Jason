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

/* easycorp/easyadmin-bundle/UPGRADE.md */
class __TwigTemplate_d2c2d7deef601f1970b0a9c7bb3f9a1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/UPGRADE.md"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/UPGRADE.md"));

        // line 1
        echo "Upgrade between EasyAdmin 4.x versions
======================================

EasyAdmin 4.4.0
---------------

### Multilingual dashboards

EasyAdmin now supports multilingual dashboards. First, add the `_locale` parameter
in the URL of your dashboard (e.g. `/admin/{_locale}`) to enable the default
Symfony locale listener that handles the locale switching. If you can't do this,
you'll need to implement your own logic to handle the request locale in a way
compatible with Symfony.

After that, call the `setLocales()` method in the dashboard configuration class,
passing an array of locales that should be exposed in the interface.

EasyAdmin 4.2.0
---------------

### Signature changes

We've changed how translations are managed internally in EasyAdmin. Before we
passed translated contents to templates. Now we pass Symfony's \"translatable\"
objects to templates.

This means that many classes have been changed to allow using `TranslatableMessage` objects
in places where previously only `string`, `false` or `null` were allowed.
Return types were also loosened to allow returning `TranslatableMessage` where applicable.

In practice this should not affect to most applications because `TranslatableMessage`
objects gracefully transform to strings when needed. However, you might need to
update some checks where you only expected string scalar values and now you might
also get `TranslatableMessage` objects.

Full list of changes in final classes:

    Config\\Action (new, setLabel); only docblocks and deprecation logic
    Config\\Menu*MenuItem (constructors)
    Config\\MenuItem (linkTo*, section, subMenu)
    Dto\\ActionDto (getLabel, setLabel and private field)
    Dto\\CrudDto (getEntityLabelInSingular, setEntityLabelInSingular,getEntityLabelInPlural, setEntityLabelInPlural, setCustomPageTitle, getHelpMessage, setHelpMessage)
    Dto\\FieldDto (getLabel, setLabel, getHelp, setHelp)
    Dto\\FilterDto (getLabel, setLabel); only docblocks
    Dto\\MenuItemDto (getLabel, setLabel)
    Field*Field (new); only docblocks
    Field\\FormField (addPanel, addTab)

List of signature changes in non-final classes and traits:

    Config\\Crud (setHelp)
    Field\\FieldTrait (setLabel, setHelp); setLabel only in docblock

### New setTranslatableChoices() method in `ChoiceField`

Use this method when defining choice labels with translatable objects. For example:

    yield ChoiceField::new('...')->setTranslatableChoices([
        'paid' => t('Paid Invoice'),
        'pending' => t('Invoice Sent but Unpaid'),
        'refunded' => 'Refunded Invoice', // You can mix strings with TranslatableMessage objects
    ]);

Upgrade between EasyAdmin 4.x versions
======================================

EasyAdmin 4.1.0
---------------

### Updated Country Field Flags

Flags that are optionally displayed in `CountryField` have been redesigned and
updated their format from `.png` to `.svg`. This doesn't require any change in
your application, but if you are using the flag images in your own custom designs,
update the path of the images:

```
# Before
<img alt=\"Flag of Panama\" src=\"/bundles/easyadmin/images/flags/PA.png\">

# After
<img alt=\"Flag of Panama\" src=\"/bundles/easyadmin/images/flags/PA.svg\">
```

### Removed URL signatures

Backend URLs no longer include signatures, because they don't provide any
additional security. The following classes and methods are deprecated:

  * `AdminUrlGenerator::addSignature()` method
  * `AdminUrlGenerator::getSignature()` method
  * `UrlSigner` class and service
  * `Dashboard::disableUrlSignatures()` method

The validity of URL signatures is no longer checked either. If you add signatures
manually, you'll need to check them too.
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/UPGRADE.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Upgrade between EasyAdmin 4.x versions
======================================

EasyAdmin 4.4.0
---------------

### Multilingual dashboards

EasyAdmin now supports multilingual dashboards. First, add the `_locale` parameter
in the URL of your dashboard (e.g. `/admin/{_locale}`) to enable the default
Symfony locale listener that handles the locale switching. If you can't do this,
you'll need to implement your own logic to handle the request locale in a way
compatible with Symfony.

After that, call the `setLocales()` method in the dashboard configuration class,
passing an array of locales that should be exposed in the interface.

EasyAdmin 4.2.0
---------------

### Signature changes

We've changed how translations are managed internally in EasyAdmin. Before we
passed translated contents to templates. Now we pass Symfony's \"translatable\"
objects to templates.

This means that many classes have been changed to allow using `TranslatableMessage` objects
in places where previously only `string`, `false` or `null` were allowed.
Return types were also loosened to allow returning `TranslatableMessage` where applicable.

In practice this should not affect to most applications because `TranslatableMessage`
objects gracefully transform to strings when needed. However, you might need to
update some checks where you only expected string scalar values and now you might
also get `TranslatableMessage` objects.

Full list of changes in final classes:

    Config\\Action (new, setLabel); only docblocks and deprecation logic
    Config\\Menu*MenuItem (constructors)
    Config\\MenuItem (linkTo*, section, subMenu)
    Dto\\ActionDto (getLabel, setLabel and private field)
    Dto\\CrudDto (getEntityLabelInSingular, setEntityLabelInSingular,getEntityLabelInPlural, setEntityLabelInPlural, setCustomPageTitle, getHelpMessage, setHelpMessage)
    Dto\\FieldDto (getLabel, setLabel, getHelp, setHelp)
    Dto\\FilterDto (getLabel, setLabel); only docblocks
    Dto\\MenuItemDto (getLabel, setLabel)
    Field*Field (new); only docblocks
    Field\\FormField (addPanel, addTab)

List of signature changes in non-final classes and traits:

    Config\\Crud (setHelp)
    Field\\FieldTrait (setLabel, setHelp); setLabel only in docblock

### New setTranslatableChoices() method in `ChoiceField`

Use this method when defining choice labels with translatable objects. For example:

    yield ChoiceField::new('...')->setTranslatableChoices([
        'paid' => t('Paid Invoice'),
        'pending' => t('Invoice Sent but Unpaid'),
        'refunded' => 'Refunded Invoice', // You can mix strings with TranslatableMessage objects
    ]);

Upgrade between EasyAdmin 4.x versions
======================================

EasyAdmin 4.1.0
---------------

### Updated Country Field Flags

Flags that are optionally displayed in `CountryField` have been redesigned and
updated their format from `.png` to `.svg`. This doesn't require any change in
your application, but if you are using the flag images in your own custom designs,
update the path of the images:

```
# Before
<img alt=\"Flag of Panama\" src=\"/bundles/easyadmin/images/flags/PA.png\">

# After
<img alt=\"Flag of Panama\" src=\"/bundles/easyadmin/images/flags/PA.svg\">
```

### Removed URL signatures

Backend URLs no longer include signatures, because they don't provide any
additional security. The following classes and methods are deprecated:

  * `AdminUrlGenerator::addSignature()` method
  * `AdminUrlGenerator::getSignature()` method
  * `UrlSigner` class and service
  * `Dashboard::disableUrlSignatures()` method

The validity of URL signatures is no longer checked either. If you add signatures
manually, you'll need to check them too.
", "easycorp/easyadmin-bundle/UPGRADE.md", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\UPGRADE.md");
    }
}
