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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/datalists.scss */
class __TwigTemplate_62cdcb37e03bd8368b716845327e195c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/datalists.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/datalists.scss"));

        // line 1
        echo "// Datalists (used in the DETAIL page)
// ----------------------------------------------------------------------------

.ea-detail .field-form_panel {
  padding-bottom: 35px;
}
.ea-detail .form-panel-header {
  box-shadow: none;
}

dl.datalist {
  margin-bottom: 0;
}
dl.datalist .data-row {
  box-shadow: inset 0 -1px var(--datalist-border-color);
  display: grid;
  grid-template-columns: 180px 1fr;
  padding: 8px;

  &:first-child {
    box-shadow: inset 0 -1px var(--datalist-border-color), inset 0 1px var(--datalist-border-color);
  }
}

dl.datalist dt {
  color: var(--datalist-label-color);
  font-weight: 400;
  margin-bottom: 0;
  padding-right: 10px;
}

dl.datalist dd {
  color: var(--datalist-value-color);
  margin-bottom: 0;
  overflow: auto;
}

dl.datalist .data-help {
  color: var(--gray-600);
  font-size: var(--font-size-sm);
  margin: 15px 0 0;
}
dl.datalist .data-help i {
  color: var(--datalist-label-color);
}

.field-code_editor pre {
  color: inherit;
  font-family: var(--font-family-monospace);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  white-space: pre-wrap;
}
.field-textarea dd,
.field-text_editor dd {
  max-width: 80ch;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/datalists.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Datalists (used in the DETAIL page)
// ----------------------------------------------------------------------------

.ea-detail .field-form_panel {
  padding-bottom: 35px;
}
.ea-detail .form-panel-header {
  box-shadow: none;
}

dl.datalist {
  margin-bottom: 0;
}
dl.datalist .data-row {
  box-shadow: inset 0 -1px var(--datalist-border-color);
  display: grid;
  grid-template-columns: 180px 1fr;
  padding: 8px;

  &:first-child {
    box-shadow: inset 0 -1px var(--datalist-border-color), inset 0 1px var(--datalist-border-color);
  }
}

dl.datalist dt {
  color: var(--datalist-label-color);
  font-weight: 400;
  margin-bottom: 0;
  padding-right: 10px;
}

dl.datalist dd {
  color: var(--datalist-value-color);
  margin-bottom: 0;
  overflow: auto;
}

dl.datalist .data-help {
  color: var(--gray-600);
  font-size: var(--font-size-sm);
  margin: 15px 0 0;
}
dl.datalist .data-help i {
  color: var(--datalist-label-color);
}

.field-code_editor pre {
  color: inherit;
  font-family: var(--font-family-monospace);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  white-space: pre-wrap;
}
.field-textarea dd,
.field-text_editor dd {
  max-width: 80ch;
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/datalists.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\datalists.scss");
    }
}
