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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/autocomplete.scss */
class __TwigTemplate_65c3093dc5f2afc945760c539dea3986 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/autocomplete.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/autocomplete.scss"));

        // line 1
        echo "@import \"~tom-select/dist/css/tom-select.bootstrap5.min.css\";

.ts-wrapper {
  min-height: unset;
}
.ts-wrapper .ts-control {
  height: 30px;
  min-height: unset;
  padding: 3px 28px 4px 7px;
}
.ts-wrapper.input-active {
  border-color: var(--form-input-hover-border-color);
  box-shadow: var(--form-input-hover-shadow);
  outline: 0;
}
.ts-wrapper.focus .ts-control {
  box-shadow: none;
  outline: 0;
}

.dropdown-input-wrap {
  background: var(--form-type-autocomplete-dropdown-input-wrapper-bg);
  border-bottom: 1px solid var(--form-input-border-color);
  padding: 7px 10px;
}
.dropdown-input,
.plugin-dropdown_input.focus .dropdown-input {
  background: var(--form-control-bg);
  border: 1px solid var(--form-type-autocomplete-dropdown-input-border-color);
  border-radius: var(--border-radius);
  box-shadow: var(--form-input-box-shadow);
  color: var(--form-input-text-color);
  height: 30px;
  position: relative;
}
.dropdown-input:focus {
  border: 0;
  box-shadow: 0 0 0 1px rgba(43, 45, 80, 0), 0 0 0 1px rgba(6, 122, 184, .2), 0 0 0 2px rgba(6, 122, 184, .25), 0 1px 1px rgba(0, 0, 0, .08);
  outline: 0;
}

.ts-dropdown, .ts-dropdown.form-control, .ts-dropdown.form-select {
  background: var(--form-type-autocomplete-dropdown-bg);
  border: 1px solid var(--form-input-border-color);
  box-shadow: var(--shadow-xl);
  color: var(--form-input-text-color);
}
.ts-dropdown .active, .ts-dropdown .create:hover, .ts-dropdown .option:hover {
  background-color: var(--form-type-autocomplete-dropdown-active-item-bg);
  color: var(--form-input-text-color);
}
.ts-dropdown [data-selectable] .highlight {
  background: var(--highlight-bg);
}

.ts-control, .ts-control input, .ts-dropdown {
  color: var(--form-input-text-color);
}

.ts-dropdown-content {
  padding: 4px 5px;
}
.ts-dropdown [data-selectable].option {
  border-radius: var(--border-radius);
  margin: 2px 0;
}

.ts-dropdown .optgroup-header {
  background: var(--form-type-autocomplete-optgroup-bg);
  color: var(--form-type-autocomplete-optgroup-color);
  font-size: 13px;
  font-weight: bold;
}

.ts-wrapper.multi,
.ts-wrapper.multi.has-items .ts-control {
  height: auto;
}
.ts-wrapper.multi .ts-control,
.ts-wrapper.multi.has-items .ts-control {
  padding: 2px 15px 3px 7px;
}
.ts-wrapper.plugin-remove_button.multi.has-items .ts-control {
  padding-right: 55px;
}
.ts-wrapper.multi .ts-control > div {
  background: var(--form-type-autocomplete-multi-item-bg);
  border-radius: var(--border-radius);
  box-shadow: 0 0 0 1px var(--form-type-autocomplete-multi-item-border-color);
  color: var(--form-input-text-color);
  margin: 0 5px 0 0;
  padding: 0 4px;
}
.ts-wrapper.plugin-remove_button .item .remove {
  border-left: 1px solid var(--form-type-autocomplete-multi-item-border-color);
  border-radius: 0 var(--border-radius) var(--border-radius) 0;
}
.ts-wrapper.plugin-remove_button .item .remove:hover {
  background: var(--form-type-autocomplete-multi-item-remove-button-hover-bg);
}

.plugin-clear_button.ts-wrapper .clear-button,
.plugin-clear_button.ts-wrapper.multi .clear-button {
  background: var(--form-type-autocomplete-close-button-bg) !important;
  border-radius: 50%;
  color: white;
  cursor: pointer;
  display: flex;
  align-content: center;
  justify-content: center;
  font-size: 16px;
  font-weight: bold;
  height: 14px;
  line-height: 0.5;
  padding: 0;
  right: 32px;
  top: calc(50% - 2px);
  width: 14px;
}
.ts-wrapper.plugin-clear_button.multi .clear-button {
  right: 10px;
}
.ts-wrapper.plugin-remove_button.plugin-clear_button.multi.has-items .clear-button {
  right: 32px;
}
.plugin-clear_button.ts-wrapper .clear-button:hover,
.plugin-clear_button.ts-wrapper.multi .clear-button:hover {
  background: var(--form-type-autocomplete-close-button-hover-bg) !important;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/autocomplete.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import \"~tom-select/dist/css/tom-select.bootstrap5.min.css\";

.ts-wrapper {
  min-height: unset;
}
.ts-wrapper .ts-control {
  height: 30px;
  min-height: unset;
  padding: 3px 28px 4px 7px;
}
.ts-wrapper.input-active {
  border-color: var(--form-input-hover-border-color);
  box-shadow: var(--form-input-hover-shadow);
  outline: 0;
}
.ts-wrapper.focus .ts-control {
  box-shadow: none;
  outline: 0;
}

.dropdown-input-wrap {
  background: var(--form-type-autocomplete-dropdown-input-wrapper-bg);
  border-bottom: 1px solid var(--form-input-border-color);
  padding: 7px 10px;
}
.dropdown-input,
.plugin-dropdown_input.focus .dropdown-input {
  background: var(--form-control-bg);
  border: 1px solid var(--form-type-autocomplete-dropdown-input-border-color);
  border-radius: var(--border-radius);
  box-shadow: var(--form-input-box-shadow);
  color: var(--form-input-text-color);
  height: 30px;
  position: relative;
}
.dropdown-input:focus {
  border: 0;
  box-shadow: 0 0 0 1px rgba(43, 45, 80, 0), 0 0 0 1px rgba(6, 122, 184, .2), 0 0 0 2px rgba(6, 122, 184, .25), 0 1px 1px rgba(0, 0, 0, .08);
  outline: 0;
}

.ts-dropdown, .ts-dropdown.form-control, .ts-dropdown.form-select {
  background: var(--form-type-autocomplete-dropdown-bg);
  border: 1px solid var(--form-input-border-color);
  box-shadow: var(--shadow-xl);
  color: var(--form-input-text-color);
}
.ts-dropdown .active, .ts-dropdown .create:hover, .ts-dropdown .option:hover {
  background-color: var(--form-type-autocomplete-dropdown-active-item-bg);
  color: var(--form-input-text-color);
}
.ts-dropdown [data-selectable] .highlight {
  background: var(--highlight-bg);
}

.ts-control, .ts-control input, .ts-dropdown {
  color: var(--form-input-text-color);
}

.ts-dropdown-content {
  padding: 4px 5px;
}
.ts-dropdown [data-selectable].option {
  border-radius: var(--border-radius);
  margin: 2px 0;
}

.ts-dropdown .optgroup-header {
  background: var(--form-type-autocomplete-optgroup-bg);
  color: var(--form-type-autocomplete-optgroup-color);
  font-size: 13px;
  font-weight: bold;
}

.ts-wrapper.multi,
.ts-wrapper.multi.has-items .ts-control {
  height: auto;
}
.ts-wrapper.multi .ts-control,
.ts-wrapper.multi.has-items .ts-control {
  padding: 2px 15px 3px 7px;
}
.ts-wrapper.plugin-remove_button.multi.has-items .ts-control {
  padding-right: 55px;
}
.ts-wrapper.multi .ts-control > div {
  background: var(--form-type-autocomplete-multi-item-bg);
  border-radius: var(--border-radius);
  box-shadow: 0 0 0 1px var(--form-type-autocomplete-multi-item-border-color);
  color: var(--form-input-text-color);
  margin: 0 5px 0 0;
  padding: 0 4px;
}
.ts-wrapper.plugin-remove_button .item .remove {
  border-left: 1px solid var(--form-type-autocomplete-multi-item-border-color);
  border-radius: 0 var(--border-radius) var(--border-radius) 0;
}
.ts-wrapper.plugin-remove_button .item .remove:hover {
  background: var(--form-type-autocomplete-multi-item-remove-button-hover-bg);
}

.plugin-clear_button.ts-wrapper .clear-button,
.plugin-clear_button.ts-wrapper.multi .clear-button {
  background: var(--form-type-autocomplete-close-button-bg) !important;
  border-radius: 50%;
  color: white;
  cursor: pointer;
  display: flex;
  align-content: center;
  justify-content: center;
  font-size: 16px;
  font-weight: bold;
  height: 14px;
  line-height: 0.5;
  padding: 0;
  right: 32px;
  top: calc(50% - 2px);
  width: 14px;
}
.ts-wrapper.plugin-clear_button.multi .clear-button {
  right: 10px;
}
.ts-wrapper.plugin-remove_button.plugin-clear_button.multi.has-items .clear-button {
  right: 32px;
}
.plugin-clear_button.ts-wrapper .clear-button:hover,
.plugin-clear_button.ts-wrapper.multi .clear-button:hover {
  background: var(--form-type-autocomplete-close-button-hover-bg) !important;
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/autocomplete.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\autocomplete.scss");
    }
}
