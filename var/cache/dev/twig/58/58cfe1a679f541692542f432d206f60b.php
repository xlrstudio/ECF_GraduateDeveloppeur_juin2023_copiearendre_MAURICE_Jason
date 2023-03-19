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

/* easycorp/easyadmin-bundle/assets/js/field-textarea.js */
class __TwigTemplate_c652ff4ec95af3a042a99582162bd15a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-textarea.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-textarea.js"));

        // line 1
        echo "class Autogrow {
    constructor(field) {
        this.field = field;
        this.field.addEventListener('input', this.autogrow.bind(this));
        this.autogrow();
    }

    autogrow() {
        this.field.style.overflow = 'hidden';
        this.field.style.resize = 'none';
        this.field.style.boxSizing = 'border-box';
        this.field.style.height = 'auto';

        // this check is needed because the <textarea> element can be inside a
        // minimizable panel, causing its scrollHeight value to be 0
        if (this.field.scrollHeight > 0) {
            this.field.style.height = this.field.scrollHeight + 'px';
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-ea-textarea-field]').forEach(function (field) {
        new Autogrow(field);
    });
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/field-textarea.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("class Autogrow {
    constructor(field) {
        this.field = field;
        this.field.addEventListener('input', this.autogrow.bind(this));
        this.autogrow();
    }

    autogrow() {
        this.field.style.overflow = 'hidden';
        this.field.style.resize = 'none';
        this.field.style.boxSizing = 'border-box';
        this.field.style.height = 'auto';

        // this check is needed because the <textarea> element can be inside a
        // minimizable panel, causing its scrollHeight value to be 0
        if (this.field.scrollHeight > 0) {
            this.field.style.height = this.field.scrollHeight + 'px';
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-ea-textarea-field]').forEach(function (field) {
        new Autogrow(field);
    });
});
", "easycorp/easyadmin-bundle/assets/js/field-textarea.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\field-textarea.js");
    }
}
