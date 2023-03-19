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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/switches.scss */
class __TwigTemplate_a8448086026059ea597f743f06ba5c07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/switches.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/switches.scss"));

        // line 1
        echo "// Switches (toggles)
// ----------------------------------------------------------------------------

.form-switch .form-check-input {
  background-color: var(--form-switch-bg);
  background-image: url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgba(148, 163, 184, 0.8)'/%3E%3C/svg%3E\");
  border-color: var(--form-switch-border-color);
  cursor: pointer;
  height: 18px;
  width: 32px;
  -webkit-appearance: none; // needed for Safari

  &:checked, .ea-dark-scheme &:checked {
    background-color: var(--form-switch-checked-bg);
    background-image: url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgb(255, 255, 255)'/%3E%3C/svg%3E\");
    border-color: var(--form-switch-checked-bg);
  }
  .ea-dark-scheme &:checked {
    background-image: url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgba(255, 255, 255, 0.8)'/%3E%3C/svg%3E\");
  }
}
.ea-dark-scheme .form-switch .form-check-input {
    background-image: url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgba(163, 163, 163, 0.8)'/%3E%3C/svg%3E\");
}
.form-switch.disabled,
.form-switch .form-check-input[disabled] {
  cursor: not-allowed;
}
.form-switch .form-check-input:focus {
  box-shadow: none;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/switches.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Switches (toggles)
// ----------------------------------------------------------------------------

.form-switch .form-check-input {
  background-color: var(--form-switch-bg);
  background-image: url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgba(148, 163, 184, 0.8)'/%3E%3C/svg%3E\");
  border-color: var(--form-switch-border-color);
  cursor: pointer;
  height: 18px;
  width: 32px;
  -webkit-appearance: none; // needed for Safari

  &:checked, .ea-dark-scheme &:checked {
    background-color: var(--form-switch-checked-bg);
    background-image: url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgb(255, 255, 255)'/%3E%3C/svg%3E\");
    border-color: var(--form-switch-checked-bg);
  }
  .ea-dark-scheme &:checked {
    background-image: url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgba(255, 255, 255, 0.8)'/%3E%3C/svg%3E\");
  }
}
.ea-dark-scheme .form-switch .form-check-input {
    background-image: url(\"data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgba(163, 163, 163, 0.8)'/%3E%3C/svg%3E\");
}
.form-switch.disabled,
.form-switch .form-check-input[disabled] {
  cursor: not-allowed;
}
.form-switch .form-check-input:focus {
  box-shadow: none;
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/switches.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\switches.scss");
    }
}
