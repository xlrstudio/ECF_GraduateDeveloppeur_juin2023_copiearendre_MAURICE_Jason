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

/* easycorp/easyadmin-bundle/assets/css/form-type-code-editor.css */
class __TwigTemplate_31a11aeb0a37590d7ce3df9864945df1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/form-type-code-editor.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/form-type-code-editor.css"));

        // line 1
        echo "@import '~codemirror/lib/codemirror.css';

.CodeMirror {
  font: 13px/1.5 SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Ubuntu Mono\", \"Courier New\", monospace;
  height: auto;
  min-height: 45px;
}

.CodeMirror-wrap {
  background: var(--form-control-bg);
  border: 1px solid var(--form-input-border-color);
  box-shadow: var(--form-input-shadow);
  border-radius: var(--border-radius);
  color: var(--form-input-text-color);
}
.CodeMirror-wrap:focus-within {
  border-color: var(--form-input-hover-border-color);
  box-shadow: var(--form-input-hover-shadow);
  outline: 0;
}
.CodeMirror-gutters {
  background: var(--form-input-group-text-bg);
  border-color: var(--form-input-border-color);
}

.CodeMirror-linenumber {
  color: var(--text-muted);
}

.CodeMirror-lines {
  padding-bottom: 5px;
}
.CodeMirror-cursor {
  border: 1px solid var(--code-editor-comment-color);
}

.cm-s-default .cm-header {
  color: var(--code-editor-key-color);
}
.cm-s-default .cm-quote {
  color: var(--code-editor-attribute-color);
}
.cm-negative {
  background: var(--code-editor-deletion-bg);
}
.cm-positive {
  background: var(--code-editor-addition-bg);
}
.cm-s-default .cm-keyword {
  color: var(--code-editor-keyword-color);
}
.cm-s-default .cm-atom {
  color: var(--code-editor-argument-color);
}
.cm-s-default .cm-number {
  color: var(--code-editor-number-color);
}
.cm-s-default .cm-def {
  color: var(--code-editor-definition-color);
}
.cm-s-default .cm-variable {
  color: var(--code-editor-variable-color);
}
.cm-s-default .cm-variable-2 {
  color: var(--code-editor-argument-color);
}
.cm-s-default .cm-type,.cm-s-default .cm-variable-3 {
  color: var(--code-editor-attribute-color);
}
.cm-s-default .cm-comment {
  color: var(--code-editor-comment-color);
}
.cm-s-default .cm-string {
  color: var(--code-editor-string-color);
}
.cm-s-default .cm-string-2 {
  color: var(--code-editor-definition-color);
}
.cm-s-default .cm-meta,.cm-s-default .cm-qualifier {
  color: var(--code-editor-comment-color);
}
.cm-s-default .cm-builtin {
  color: var(--code-editor-key-color);
}
.cm-s-default .cm-bracket {
  color: var(--code-editor-comment-color);
}
.cm-s-default .cm-tag {
  color: var(--code-editor-attribute-color);
}
.cm-s-default .cm-attribute {
  color: var(--code-editor-key-color);
}
.cm-s-default .cm-hr {
  color: var(--code-editor-comment-color);
}
.cm-s-default .cm-link {
  color: var(--code-editor-key-color);
}
.cm-invalidchar,.cm-s-default .cm-error {
  color: var(--code-editor-keyword-color)
}
div.CodeMirror span.CodeMirror-matchingbracket {
  color: var(--code-editor-attribute-color);
}
div.CodeMirror span.CodeMirror-nonmatchingbracket {
  color: var(--code-editor-keyword-color)
}
.CodeMirror-matchingtag {
  background: rgba(255,150,0,.3)
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/form-type-code-editor.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import '~codemirror/lib/codemirror.css';

.CodeMirror {
  font: 13px/1.5 SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Ubuntu Mono\", \"Courier New\", monospace;
  height: auto;
  min-height: 45px;
}

.CodeMirror-wrap {
  background: var(--form-control-bg);
  border: 1px solid var(--form-input-border-color);
  box-shadow: var(--form-input-shadow);
  border-radius: var(--border-radius);
  color: var(--form-input-text-color);
}
.CodeMirror-wrap:focus-within {
  border-color: var(--form-input-hover-border-color);
  box-shadow: var(--form-input-hover-shadow);
  outline: 0;
}
.CodeMirror-gutters {
  background: var(--form-input-group-text-bg);
  border-color: var(--form-input-border-color);
}

.CodeMirror-linenumber {
  color: var(--text-muted);
}

.CodeMirror-lines {
  padding-bottom: 5px;
}
.CodeMirror-cursor {
  border: 1px solid var(--code-editor-comment-color);
}

.cm-s-default .cm-header {
  color: var(--code-editor-key-color);
}
.cm-s-default .cm-quote {
  color: var(--code-editor-attribute-color);
}
.cm-negative {
  background: var(--code-editor-deletion-bg);
}
.cm-positive {
  background: var(--code-editor-addition-bg);
}
.cm-s-default .cm-keyword {
  color: var(--code-editor-keyword-color);
}
.cm-s-default .cm-atom {
  color: var(--code-editor-argument-color);
}
.cm-s-default .cm-number {
  color: var(--code-editor-number-color);
}
.cm-s-default .cm-def {
  color: var(--code-editor-definition-color);
}
.cm-s-default .cm-variable {
  color: var(--code-editor-variable-color);
}
.cm-s-default .cm-variable-2 {
  color: var(--code-editor-argument-color);
}
.cm-s-default .cm-type,.cm-s-default .cm-variable-3 {
  color: var(--code-editor-attribute-color);
}
.cm-s-default .cm-comment {
  color: var(--code-editor-comment-color);
}
.cm-s-default .cm-string {
  color: var(--code-editor-string-color);
}
.cm-s-default .cm-string-2 {
  color: var(--code-editor-definition-color);
}
.cm-s-default .cm-meta,.cm-s-default .cm-qualifier {
  color: var(--code-editor-comment-color);
}
.cm-s-default .cm-builtin {
  color: var(--code-editor-key-color);
}
.cm-s-default .cm-bracket {
  color: var(--code-editor-comment-color);
}
.cm-s-default .cm-tag {
  color: var(--code-editor-attribute-color);
}
.cm-s-default .cm-attribute {
  color: var(--code-editor-key-color);
}
.cm-s-default .cm-hr {
  color: var(--code-editor-comment-color);
}
.cm-s-default .cm-link {
  color: var(--code-editor-key-color);
}
.cm-invalidchar,.cm-s-default .cm-error {
  color: var(--code-editor-keyword-color)
}
div.CodeMirror span.CodeMirror-matchingbracket {
  color: var(--code-editor-attribute-color);
}
div.CodeMirror span.CodeMirror-nonmatchingbracket {
  color: var(--code-editor-keyword-color)
}
.CodeMirror-matchingtag {
  background: rgba(255,150,0,.3)
}
", "easycorp/easyadmin-bundle/assets/css/form-type-code-editor.css", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\form-type-code-editor.css");
    }
}
