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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/buttons.scss */
class __TwigTemplate_d45097fd26ab87b7d694fef4250a47ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/buttons.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/buttons.scss"));

        // line 1
        echo "// Buttons
// ----------------------------------------------------------------------------

.btn {
    background-color: var(--button-bg);
    border: 0;
    box-shadow: var(--button-shadow);
    color: var(--button-color);
    cursor: pointer;
    text-decoration: none;
    white-space: nowrap;
    transition: box-shadow .2s;
}
.btn:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover {
    border: 0;
    // needed because \$btn-focus-box-shadow and \$btn-active-box-shadow are ignored for .btn-primary, .btn-info, etc.
    box-shadow: var(--button-hover-shadow);
    color: var(--button-hover-color);
}
.btn:not(:disabled):not(.disabled):not(.btn-link):active,
.btn:not(:disabled):not(.disabled):not(.btn-link):focus,
.btn:not(:disabled):not(.disabled):not(.btn-link):active:focus {
    border: 0;
    // needed because \$btn-focus-box-shadow and \$btn-active-box-shadow are ignored for .btn-primary, .btn-info, etc.
    box-shadow: var(--button-active-shadow);
    color: var(--button-active-color);
}

.btn-primary,
.btn-primary:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover,
.btn-primary:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):focus,
.btn-primary:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active,
.btn-primary:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active:focus {
    background-color: var(--button-primary-bg);
    color: var(--button-primary-color);
}
.btn-primary:not(:disabled):not(.disabled):focus,
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled):active:focus {
    box-shadow: var(--button-active-primary-shadow);
}

.btn-secondary, .btn-secondary[disabled], .btn-secondary.disabled {
    background-color: var(--button-secondary-bg);
    color: var(--button-secondary-color);
}
.btn-secondary:hover, .btn-secondary:not(:disabled):not(.disabled):focus, .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled):active:focus {
    background-color: var(--button-secondary-bg);
    color: var(--button-hover-color);
}

.btn-info,
.btn-info:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover,
.btn-info:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):focus,
.btn-info:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active,
.btn-info:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active:focus {
    background-color: var(--button-info-bg);
    color: var(--button-info-color);
}

.btn-success,
.btn-success:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover,
.btn-success:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):focus,
.btn-success:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active,
.btn-success:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active:focus {
    background-color: var(--button-success-bg);
    color: var(--button-success-color);
}

.btn.btn-danger, .btn-danger, .btn-danger:hover, .btn-danger:not(:disabled):not(.disabled):focus, .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled):active:focus {
    background-color: var(--button-danger-bg);
    color: var(--button-danger-color);
}

.btn-warning,
.btn-warning:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover,
.btn-warning:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):focus,
.btn-warning:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active,
.btn-warning:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active:focus {
    background-color: var(--button-warning-bg);
    color: var(--button-warning-color);
}

.btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active, .btn-link:active:focus {
    background: transparent;
    border-color: transparent;
    color: var(--link-color);
    box-shadow: none; // needed to make the button link look like a regular link
}
.btn-link:hover {
    color: var(--link-hover-color)
}
.btn-link-danger, .btn-link-danger:hover, .btn-link-danger:focus, .btn-link-danger:active, .btn-link-danger:active:focus {
    color: var(--link-danger-color);
}
.btn-link-danger:hover {
    color: var(--link-danger-hover-color);
}

.btn.disabled, .btn:disabled,
.btn.disabled:hover, .btn:disabled:hover,
.btn.disabled:focus, .btn:disabled:focus,
.btn.disabled:active, .btn:disabled:active,
.btn.disabled:active:focus, .btn:disabled:active:focus {
    box-shadow: none;
    cursor: not-allowed;
}
a.btn.disabled, fieldset:disabled a.btn {
    // needed to display the 'not-allowed' cursor on disabled buttons
    pointer-events: unset;
}

.btn > .btn-label {
    margin: 0;
    cursor: inherit;
}
.btn > i + .btn-label {
    margin-left: 4px;
}
.btn > .btn-label + i {
    margin-left: 4px;
}

.btn-group-sm > .btn, .btn-sm {
    padding: 3px 7px;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/buttons.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Buttons
// ----------------------------------------------------------------------------

.btn {
    background-color: var(--button-bg);
    border: 0;
    box-shadow: var(--button-shadow);
    color: var(--button-color);
    cursor: pointer;
    text-decoration: none;
    white-space: nowrap;
    transition: box-shadow .2s;
}
.btn:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover {
    border: 0;
    // needed because \$btn-focus-box-shadow and \$btn-active-box-shadow are ignored for .btn-primary, .btn-info, etc.
    box-shadow: var(--button-hover-shadow);
    color: var(--button-hover-color);
}
.btn:not(:disabled):not(.disabled):not(.btn-link):active,
.btn:not(:disabled):not(.disabled):not(.btn-link):focus,
.btn:not(:disabled):not(.disabled):not(.btn-link):active:focus {
    border: 0;
    // needed because \$btn-focus-box-shadow and \$btn-active-box-shadow are ignored for .btn-primary, .btn-info, etc.
    box-shadow: var(--button-active-shadow);
    color: var(--button-active-color);
}

.btn-primary,
.btn-primary:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover,
.btn-primary:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):focus,
.btn-primary:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active,
.btn-primary:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active:focus {
    background-color: var(--button-primary-bg);
    color: var(--button-primary-color);
}
.btn-primary:not(:disabled):not(.disabled):focus,
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled):active:focus {
    box-shadow: var(--button-active-primary-shadow);
}

.btn-secondary, .btn-secondary[disabled], .btn-secondary.disabled {
    background-color: var(--button-secondary-bg);
    color: var(--button-secondary-color);
}
.btn-secondary:hover, .btn-secondary:not(:disabled):not(.disabled):focus, .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled):active:focus {
    background-color: var(--button-secondary-bg);
    color: var(--button-hover-color);
}

.btn-info,
.btn-info:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover,
.btn-info:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):focus,
.btn-info:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active,
.btn-info:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active:focus {
    background-color: var(--button-info-bg);
    color: var(--button-info-color);
}

.btn-success,
.btn-success:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover,
.btn-success:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):focus,
.btn-success:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active,
.btn-success:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active:focus {
    background-color: var(--button-success-bg);
    color: var(--button-success-color);
}

.btn.btn-danger, .btn-danger, .btn-danger:hover, .btn-danger:not(:disabled):not(.disabled):focus, .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled):active:focus {
    background-color: var(--button-danger-bg);
    color: var(--button-danger-color);
}

.btn-warning,
.btn-warning:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):hover,
.btn-warning:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):focus,
.btn-warning:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active,
.btn-warning:not(:disabled):not(.disabled):not(.btn-link):not(.btn-danger):active:focus {
    background-color: var(--button-warning-bg);
    color: var(--button-warning-color);
}

.btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active, .btn-link:active:focus {
    background: transparent;
    border-color: transparent;
    color: var(--link-color);
    box-shadow: none; // needed to make the button link look like a regular link
}
.btn-link:hover {
    color: var(--link-hover-color)
}
.btn-link-danger, .btn-link-danger:hover, .btn-link-danger:focus, .btn-link-danger:active, .btn-link-danger:active:focus {
    color: var(--link-danger-color);
}
.btn-link-danger:hover {
    color: var(--link-danger-hover-color);
}

.btn.disabled, .btn:disabled,
.btn.disabled:hover, .btn:disabled:hover,
.btn.disabled:focus, .btn:disabled:focus,
.btn.disabled:active, .btn:disabled:active,
.btn.disabled:active:focus, .btn:disabled:active:focus {
    box-shadow: none;
    cursor: not-allowed;
}
a.btn.disabled, fieldset:disabled a.btn {
    // needed to display the 'not-allowed' cursor on disabled buttons
    pointer-events: unset;
}

.btn > .btn-label {
    margin: 0;
    cursor: inherit;
}
.btn > i + .btn-label {
    margin-left: 4px;
}
.btn > .btn-label + i {
    margin-left: 4px;
}

.btn-group-sm > .btn, .btn-sm {
    padding: 3px 7px;
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/buttons.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\buttons.scss");
    }
}
