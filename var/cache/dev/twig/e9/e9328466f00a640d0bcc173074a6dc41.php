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

/* easycorp/easyadmin-bundle/assets/css/form-type-text-editor.css */
class __TwigTemplate_86a869bc202e9a31e7a86ffc9dfa6b80 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/form-type-text-editor.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/form-type-text-editor.css"));

        // line 1
        echo "@import '~trix/dist/trix.css';

.ea-text-editor-wrapper {
    background: var(--form-control-bg);
    border: 1px solid var(--form-input-border-color);
    border-radius: var(--border-radius);
    box-shadow: var(--form-input-shadow);
    padding: 7px;
}
.ea-text-editor-wrapper:focus,
.ea-text-editor-wrapper:focus-within {
    border-color: var(--form-input-hover-border-color);
    box-shadow: var(--form-input-hover-shadow);
    outline: 0;
}
trix-toolbar {
    background:  var(--form-type-text-editor-toolbar-bg);
    border-bottom: 1px solid var(--form-input-border-color);
    margin: -7px -7px 10px;
    padding: 0;
}
trix-toolbar .trix-button-group {
    border: 0;
    margin-bottom: 0;
}
trix-toolbar .trix-button {
    border: 0;
    color: var(--form-type-text-editor-toolbar-button-color);
    margin: 0;
}
trix-toolbar .trix-button:not(:first-child) {
    border-left: 0;
}
trix-toolbar .trix-button:hover {
    background: var(--form-type-text-editor-toolbar-button-hover-color);
}
trix-toolbar .trix-button.trix-active {
    background: var(--form-type-text-editor-toolbar-button-active-bg);
    color: var(--form-type-text-editor-toolbar-button-active-color);
}
trix-toolbar .trix-button.trix-button--icon {
    height: 32px;
    width: 32px;
}
trix-toolbar .trix-button.trix-button--icon::before {
    background-size: 22px;
    background-position: center;
    float: left;
    height: 32px;
    width: 32px;
    text-indent: -999em;
}
.ea-dark-scheme trix-toolbar .trix-button.trix-button--icon::before {
    filter:  invert(1);
}
trix-editor {
    border: 0;
    padding: 3px;
}

trix-toolbar .trix-dialog {
    background: var(--form-type-text-editor-dialog-bg);
    box-shadow: var(--form-type-text-editor-dialog-box-shadow);
    border: 0;
    font-size:  12px;
}

.trix-content pre {
    background-color: var(--form-type-text-editor-content-pre-bg);
    border-radius: var(--border-radius);
    color: var(--form-type-text-editor-content-pre-color);
    font-family:  var(--font-family-monospace);
}

/* there's no way to disable buttons from the Trix toolbar except by hiding them via CSS
   see https://github.com/basecamp/trix/issues/402 */
trix-toolbar .trix-button-group--file-tools,
trix-toolbar .trix-button-group--history-tools {
    display: none;
}
@media(min-width: 1200px) {
    trix-toolbar .trix-button-group--history-tools {
        display: flex;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/form-type-text-editor.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '~trix/dist/trix.css';

.ea-text-editor-wrapper {
    background: var(--form-control-bg);
    border: 1px solid var(--form-input-border-color);
    border-radius: var(--border-radius);
    box-shadow: var(--form-input-shadow);
    padding: 7px;
}
.ea-text-editor-wrapper:focus,
.ea-text-editor-wrapper:focus-within {
    border-color: var(--form-input-hover-border-color);
    box-shadow: var(--form-input-hover-shadow);
    outline: 0;
}
trix-toolbar {
    background:  var(--form-type-text-editor-toolbar-bg);
    border-bottom: 1px solid var(--form-input-border-color);
    margin: -7px -7px 10px;
    padding: 0;
}
trix-toolbar .trix-button-group {
    border: 0;
    margin-bottom: 0;
}
trix-toolbar .trix-button {
    border: 0;
    color: var(--form-type-text-editor-toolbar-button-color);
    margin: 0;
}
trix-toolbar .trix-button:not(:first-child) {
    border-left: 0;
}
trix-toolbar .trix-button:hover {
    background: var(--form-type-text-editor-toolbar-button-hover-color);
}
trix-toolbar .trix-button.trix-active {
    background: var(--form-type-text-editor-toolbar-button-active-bg);
    color: var(--form-type-text-editor-toolbar-button-active-color);
}
trix-toolbar .trix-button.trix-button--icon {
    height: 32px;
    width: 32px;
}
trix-toolbar .trix-button.trix-button--icon::before {
    background-size: 22px;
    background-position: center;
    float: left;
    height: 32px;
    width: 32px;
    text-indent: -999em;
}
.ea-dark-scheme trix-toolbar .trix-button.trix-button--icon::before {
    filter:  invert(1);
}
trix-editor {
    border: 0;
    padding: 3px;
}

trix-toolbar .trix-dialog {
    background: var(--form-type-text-editor-dialog-bg);
    box-shadow: var(--form-type-text-editor-dialog-box-shadow);
    border: 0;
    font-size:  12px;
}

.trix-content pre {
    background-color: var(--form-type-text-editor-content-pre-bg);
    border-radius: var(--border-radius);
    color: var(--form-type-text-editor-content-pre-color);
    font-family:  var(--font-family-monospace);
}

/* there's no way to disable buttons from the Trix toolbar except by hiding them via CSS
   see https://github.com/basecamp/trix/issues/402 */
trix-toolbar .trix-button-group--file-tools,
trix-toolbar .trix-button-group--history-tools {
    display: none;
}
@media(min-width: 1200px) {
    trix-toolbar .trix-button-group--history-tools {
        display: flex;
    }
}
", "easycorp/easyadmin-bundle/assets/css/form-type-text-editor.css", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\form-type-text-editor.css");
    }
}
