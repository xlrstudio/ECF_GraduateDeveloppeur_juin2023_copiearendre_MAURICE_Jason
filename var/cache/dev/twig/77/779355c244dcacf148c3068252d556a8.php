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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/fields.scss */
class __TwigTemplate_dc2e757776290d2e47eba366a50727d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/fields.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/fields.scss"));

        // line 1
        echo "// Properties (the styles applied to properties in INDEX and DETAIL pages)
// ----------------------------------------------------------------------------

// Array field
.field-array ul {
  margin-bottom: 0;
  padding-left: 1.2em;
}
.field-array li + li {
  margin-top: 4px;
}

// Avatar field
.field-avatar .image-avatar {
  border-radius: var(--border-radius);
  border: 0;
  box-shadow: none;
}

// Boolean field
.field-boolean .badge {
  min-width: 33px;
  text-transform: uppercase;
}
// Boolean values don't use \"true = green, false = red\" on purpose because being FALSE
// or TRUE can be good or bad depending on the context, so red/green doesn't always work
.field-boolean .badge-boolean-false {
  background: var(--badge-boolean-false-bg);
  border: 0;
  box-shadow: var(--badge-boolean-false-box-shadow);
  color: var(--badge-boolean-false-color);
}
.field-boolean .badge-boolean-true {
  background: var(--badge-boolean-true-bg);
  border: 0;
  box-shadow: var(--badge-boolean-true-box-shadow);
  color: var(--badge-boolean-true-color);
}

// CodeEditor field
.field-code_editor .form-widget {
  flex: 1;
}
.field-code_editor dt {
   max-height: 480px;
   overflow-y: auto;
 }

// Collection field
.form-widget-compound .collection-empty {
  margin-bottom: 10px;
  padding-top: 5px;
}
.form-group.field-collection label:empty {
  display: none;
}

.form-group.field-array {
  // this is the label of each array elements (it's probably OK to always hide it)
  .form-widget .form-group {
    padding: 6px 0;

    label { display: none; }
  }
}
.form-group.field-array .field-collection-item {
  display: flex;
}

.form-group.field-collection {
  .accordion {
    border-radius: var(--border-radius);
    box-shadow: inset 0 0 0 1px var(--form-input-border-color);

    .form-group { padding: 0; }
  }

  .accordion-header {
    padding-right: 28px;
    position: relative;
  }
  .accordion-header:hover {
    background: var(--form-type-collection-item-collapsed-hover-bg);
    box-shadow: inset 0 0 0 1px var(--form-input-border-color);
  }

  .accordion-item {
    background: transparent;
    border: 0;
    border-radius: 0;
    box-shadow: inset 0 -1px 0 var(--form-input-border-color);
  }

  .field-collection-item-first .accordion-item,
  .field-collection-item-first .accordion-header {
    border-top-left-radius: var(--border-radius);
    border-top-right-radius: var(--border-radius);
  }
    .field-collection-item-last .accordion-item,
    .field-collection-item-last .accordion-header {
    border-bottom-left-radius: var(--border-radius);
    border-bottom-right-radius: var(--border-radius);
  }

  .field-collection-item.field-collection-item-last .accordion-item {
    box-shadow: none;
  }

  .accordion-item .form-group {
    align-items: flex-start;
    display: flex;
    padding: 12px 0;

    label,
    legend.col-form-label {
      font-weight: 500;
      margin: 3px 10px 0 0;
      padding: 0;
      width: 20%;
    }
  }
  .accordion-item .accordion-body .form-widget {
    flex: 1;
  }

  .accordion-button,
  .accordion-button:hover {
    background: transparent;
    border-radius: 0;
    box-shadow: none;
    color: var(--text-color);
    flex: 1;
    padding: 8px 7px;
  }

  .accordion-button:after {
    // hides the default collapse marker
    display: none;
  }
  .accordion-button i {
    transition: transform .2s ease-in-out;
  }
  .accordion-button:not(.collapsed) i {
    transform: rotate(90deg);
  }
  .accordion-button .form-collection-item-collapse-marker {
    color: var(--form-collection-item-collapse-marker-color);
    margin: 0 8px 0 4px;
  }

  .field-collection-add-button {
    margin-top: 5px;
  }
  .field-collection-delete-button {
    position: absolute;
    top: 1px;
    right: 5px;
  }
}

// Color field
.field-color .color-sample {
  border-radius: var(--border-radius);
  box-shadow: 0 0 0 2px var(--white), 0 0 0 4px var(--gray-300);
  display: inline-block;
  height: 19px;
  width: 45px;
}

// Country field
.field-country .country-flag {
  border-radius: 2px;
  box-shadow: 0 0 0 1px var(--field-country-flag-border-color);
  margin-right: 6px;
  max-height: 18px;
  vertical-align: text-top;
}

// Currency field
.field-currency .badge-currency {
  border: 2px solid var(--gray-300);
  display: inline-block;
  font-size: 12px;
  padding: 2px 4px;
  text-transform: uppercase;
}

// Date, Time and DateTime fields
.field-datetime input[type=\"datetime-local\"].form-control,
.field-date input[type=\"date\"].form-control,
.field-time input[type=\"time\"].form-control {
  width: auto;
}

// Language field
.field-language .badge-language {
  border: 2px solid var(--field-language-badge-border-color);
  box-shadow: none;
  display: inline-block;
  font-size: 12px;
  padding: 2px 4px;
  text-transform: uppercase;
}

// Text editor field
.field-text_editor dt {
  max-height: 480px;
  overflow-y: auto;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/fields.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Properties (the styles applied to properties in INDEX and DETAIL pages)
// ----------------------------------------------------------------------------

// Array field
.field-array ul {
  margin-bottom: 0;
  padding-left: 1.2em;
}
.field-array li + li {
  margin-top: 4px;
}

// Avatar field
.field-avatar .image-avatar {
  border-radius: var(--border-radius);
  border: 0;
  box-shadow: none;
}

// Boolean field
.field-boolean .badge {
  min-width: 33px;
  text-transform: uppercase;
}
// Boolean values don't use \"true = green, false = red\" on purpose because being FALSE
// or TRUE can be good or bad depending on the context, so red/green doesn't always work
.field-boolean .badge-boolean-false {
  background: var(--badge-boolean-false-bg);
  border: 0;
  box-shadow: var(--badge-boolean-false-box-shadow);
  color: var(--badge-boolean-false-color);
}
.field-boolean .badge-boolean-true {
  background: var(--badge-boolean-true-bg);
  border: 0;
  box-shadow: var(--badge-boolean-true-box-shadow);
  color: var(--badge-boolean-true-color);
}

// CodeEditor field
.field-code_editor .form-widget {
  flex: 1;
}
.field-code_editor dt {
   max-height: 480px;
   overflow-y: auto;
 }

// Collection field
.form-widget-compound .collection-empty {
  margin-bottom: 10px;
  padding-top: 5px;
}
.form-group.field-collection label:empty {
  display: none;
}

.form-group.field-array {
  // this is the label of each array elements (it's probably OK to always hide it)
  .form-widget .form-group {
    padding: 6px 0;

    label { display: none; }
  }
}
.form-group.field-array .field-collection-item {
  display: flex;
}

.form-group.field-collection {
  .accordion {
    border-radius: var(--border-radius);
    box-shadow: inset 0 0 0 1px var(--form-input-border-color);

    .form-group { padding: 0; }
  }

  .accordion-header {
    padding-right: 28px;
    position: relative;
  }
  .accordion-header:hover {
    background: var(--form-type-collection-item-collapsed-hover-bg);
    box-shadow: inset 0 0 0 1px var(--form-input-border-color);
  }

  .accordion-item {
    background: transparent;
    border: 0;
    border-radius: 0;
    box-shadow: inset 0 -1px 0 var(--form-input-border-color);
  }

  .field-collection-item-first .accordion-item,
  .field-collection-item-first .accordion-header {
    border-top-left-radius: var(--border-radius);
    border-top-right-radius: var(--border-radius);
  }
    .field-collection-item-last .accordion-item,
    .field-collection-item-last .accordion-header {
    border-bottom-left-radius: var(--border-radius);
    border-bottom-right-radius: var(--border-radius);
  }

  .field-collection-item.field-collection-item-last .accordion-item {
    box-shadow: none;
  }

  .accordion-item .form-group {
    align-items: flex-start;
    display: flex;
    padding: 12px 0;

    label,
    legend.col-form-label {
      font-weight: 500;
      margin: 3px 10px 0 0;
      padding: 0;
      width: 20%;
    }
  }
  .accordion-item .accordion-body .form-widget {
    flex: 1;
  }

  .accordion-button,
  .accordion-button:hover {
    background: transparent;
    border-radius: 0;
    box-shadow: none;
    color: var(--text-color);
    flex: 1;
    padding: 8px 7px;
  }

  .accordion-button:after {
    // hides the default collapse marker
    display: none;
  }
  .accordion-button i {
    transition: transform .2s ease-in-out;
  }
  .accordion-button:not(.collapsed) i {
    transform: rotate(90deg);
  }
  .accordion-button .form-collection-item-collapse-marker {
    color: var(--form-collection-item-collapse-marker-color);
    margin: 0 8px 0 4px;
  }

  .field-collection-add-button {
    margin-top: 5px;
  }
  .field-collection-delete-button {
    position: absolute;
    top: 1px;
    right: 5px;
  }
}

// Color field
.field-color .color-sample {
  border-radius: var(--border-radius);
  box-shadow: 0 0 0 2px var(--white), 0 0 0 4px var(--gray-300);
  display: inline-block;
  height: 19px;
  width: 45px;
}

// Country field
.field-country .country-flag {
  border-radius: 2px;
  box-shadow: 0 0 0 1px var(--field-country-flag-border-color);
  margin-right: 6px;
  max-height: 18px;
  vertical-align: text-top;
}

// Currency field
.field-currency .badge-currency {
  border: 2px solid var(--gray-300);
  display: inline-block;
  font-size: 12px;
  padding: 2px 4px;
  text-transform: uppercase;
}

// Date, Time and DateTime fields
.field-datetime input[type=\"datetime-local\"].form-control,
.field-date input[type=\"date\"].form-control,
.field-time input[type=\"time\"].form-control {
  width: auto;
}

// Language field
.field-language .badge-language {
  border: 2px solid var(--field-language-badge-border-color);
  box-shadow: none;
  display: inline-block;
  font-size: 12px;
  padding: 2px 4px;
  text-transform: uppercase;
}

// Text editor field
.field-text_editor dt {
  max-height: 480px;
  overflow-y: auto;
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/fields.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\fields.scss");
    }
}
