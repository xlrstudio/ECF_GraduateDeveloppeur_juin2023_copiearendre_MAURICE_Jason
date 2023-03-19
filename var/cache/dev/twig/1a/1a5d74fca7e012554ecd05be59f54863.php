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

/* easycorp/easyadmin-bundle/assets/js/field-code-editor.js */
class __TwigTemplate_281c668aabb5b4fc47a09bf1e4b3e758 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-code-editor.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-code-editor.js"));

        // line 1
        echo "require('../css/form-type-code-editor.css');

import CodeMirror from 'codemirror';

import 'codemirror/mode/css/css';
import 'codemirror/mode/dockerfile/dockerfile';
import 'codemirror/mode/javascript/javascript';
import 'codemirror/mode/markdown/markdown';
import 'codemirror/mode/nginx/nginx';
import 'codemirror/mode/php/php';
import 'codemirror/mode/shell/shell';
import 'codemirror/mode/sql/sql';
import 'codemirror/mode/twig/twig';
import 'codemirror/mode/xml/xml';
import 'codemirror/mode/yaml-frontmatter/yaml-frontmatter';
import 'codemirror/mode/yaml/yaml';
import 'codemirror/addon/display/autorefresh';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-ea-code-editor-field]').forEach((codeBlock) => {
        const editor = CodeMirror.fromTextArea(codeBlock, {
            autocapitalize: false,
            autocorrect: false,
            indentWithTabs: codeBlock.dataset.indentWithTabs === 'true',
            lineNumbers: codeBlock.dataset.showLineNumbers === 'true',
            lineWrapping: true,
            mode: codeBlock.dataset.language,
            scrollbarStyle: 'native',
            spellcheck: false,
            tabSize: codeBlock.dataset.tabSize,
            theme: 'default',
            autoRefresh: true,
        });

        if (codeBlock.required) {
            editor.on('change', editor.save);
        }

        if (codeBlock.dataset.numberOfRows !== '') {
            const wrapper = editor.getWrapperElement();
            // Here we consider 21px as the average line height
            wrapper.style.setProperty('height', `\${21 * codeBlock.dataset.numberOfRows}px`, 'important');
            wrapper.style.setProperty('max-height', 'none');
        }
    });
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/field-code-editor.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("require('../css/form-type-code-editor.css');

import CodeMirror from 'codemirror';

import 'codemirror/mode/css/css';
import 'codemirror/mode/dockerfile/dockerfile';
import 'codemirror/mode/javascript/javascript';
import 'codemirror/mode/markdown/markdown';
import 'codemirror/mode/nginx/nginx';
import 'codemirror/mode/php/php';
import 'codemirror/mode/shell/shell';
import 'codemirror/mode/sql/sql';
import 'codemirror/mode/twig/twig';
import 'codemirror/mode/xml/xml';
import 'codemirror/mode/yaml-frontmatter/yaml-frontmatter';
import 'codemirror/mode/yaml/yaml';
import 'codemirror/addon/display/autorefresh';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-ea-code-editor-field]').forEach((codeBlock) => {
        const editor = CodeMirror.fromTextArea(codeBlock, {
            autocapitalize: false,
            autocorrect: false,
            indentWithTabs: codeBlock.dataset.indentWithTabs === 'true',
            lineNumbers: codeBlock.dataset.showLineNumbers === 'true',
            lineWrapping: true,
            mode: codeBlock.dataset.language,
            scrollbarStyle: 'native',
            spellcheck: false,
            tabSize: codeBlock.dataset.tabSize,
            theme: 'default',
            autoRefresh: true,
        });

        if (codeBlock.required) {
            editor.on('change', editor.save);
        }

        if (codeBlock.dataset.numberOfRows !== '') {
            const wrapper = editor.getWrapperElement();
            // Here we consider 21px as the average line height
            wrapper.style.setProperty('height', `\${21 * codeBlock.dataset.numberOfRows}px`, 'important');
            wrapper.style.setProperty('max-height', 'none');
        }
    });
});
", "easycorp/easyadmin-bundle/assets/js/field-code-editor.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\field-code-editor.js");
    }
}
