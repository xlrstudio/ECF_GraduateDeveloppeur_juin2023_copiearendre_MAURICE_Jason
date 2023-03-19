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

/* easycorp/easyadmin-bundle/assets/js/field-boolean.js */
class __TwigTemplate_bf3d0c8a4d058cfe53a6f490bb5dcfb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-boolean.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-boolean.js"));

        // line 1
        echo "document.addEventListener('DOMContentLoaded', () => {
    // toggle switches are only created in index page (i.e. in datagrid tables) because
    // in other pages they act like simple checkboxes or labels. Only in index page
    // the toggle switch can change the value of an entity propert via Ajax requests
    document.querySelectorAll('td.field-boolean .form-switch input[type=\"checkbox\"]').forEach((toggleField) => {
        new ToggleSwitch(toggleField);
    });
});

class ToggleSwitch {
    constructor(field) {
        this.field = field;
        this.field.addEventListener('change', this.#updateFieldValue.bind(this));
    }

    #updateFieldValue() {
        const newValue = this.field.checked;
        const toggleUrl = this.field.getAttribute('data-toggle-url') + \"&newValue=\" + newValue.toString();

        fetch(toggleUrl, {
            method: 'PATCH',
            // the XMLHttpRequest header is needed to keep compatibility with the previous code, which didn't use the Fetch API
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
        })
        .then((response) => {
            if (!response.ok) {
                this.#disableField();
            }

            return response.text();
        })
        .then(() => { /* do nothing else when the toggle request is successful */ })
        .catch(() => this.#disableField());
    }

    // used in case of error, to restore the original toggle field value and disable it
    #disableField() {
        this.field.checked = !this.field.checked;
        this.field.disabled = true;
        this.field.closest('.form-switch').classList.add('disabled');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/field-boolean.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("document.addEventListener('DOMContentLoaded', () => {
    // toggle switches are only created in index page (i.e. in datagrid tables) because
    // in other pages they act like simple checkboxes or labels. Only in index page
    // the toggle switch can change the value of an entity propert via Ajax requests
    document.querySelectorAll('td.field-boolean .form-switch input[type=\"checkbox\"]').forEach((toggleField) => {
        new ToggleSwitch(toggleField);
    });
});

class ToggleSwitch {
    constructor(field) {
        this.field = field;
        this.field.addEventListener('change', this.#updateFieldValue.bind(this));
    }

    #updateFieldValue() {
        const newValue = this.field.checked;
        const toggleUrl = this.field.getAttribute('data-toggle-url') + \"&newValue=\" + newValue.toString();

        fetch(toggleUrl, {
            method: 'PATCH',
            // the XMLHttpRequest header is needed to keep compatibility with the previous code, which didn't use the Fetch API
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
        })
        .then((response) => {
            if (!response.ok) {
                this.#disableField();
            }

            return response.text();
        })
        .then(() => { /* do nothing else when the toggle request is successful */ })
        .catch(() => this.#disableField());
    }

    // used in case of error, to restore the original toggle field value and disable it
    #disableField() {
        this.field.checked = !this.field.checked;
        this.field.disabled = true;
        this.field.closest('.form-switch').classList.add('disabled');
    }
}
", "easycorp/easyadmin-bundle/assets/js/field-boolean.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\field-boolean.js");
    }
}
