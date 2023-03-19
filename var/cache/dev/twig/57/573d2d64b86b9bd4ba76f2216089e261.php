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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/badges.scss */
class __TwigTemplate_c647009d3a4604a55a15aac4945f9842 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/badges.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/badges.scss"));

        // line 1
        echo "// Badges
// ----------------------------------------------------------------------------

.badge + .badge {
  margin-left: 8px;
}

.badge.badge-pill {
  border-radius: 20px;
  font-size: var(--font-size-xs);
  line-height: 16px;
  padding: 1px 6px;
}

.badge {
  border-radius: var(--border-radius);
  box-shadow: var(--badge-box-shadow);
  color: var(--text-color);
  font-size: var(--font-size-xs);
  line-height: 16px;
  padding: 1px 5px;
}

.badge.badge-success {
  background-color: var(--badge-success-bg);
  box-shadow: var(--badge-success-box-shadow);
  color: var(--badge-success-color);
}
.badge.badge-warning {
  background-color: var(--badge-warning-bg);
  box-shadow: var(--badge-warning-box-shadow);
  color: var(--badge-warning-color);
}
.badge.badge-danger {
  background-color: var(--badge-danger-bg);
  box-shadow: var(--badge-danger-box-shadow);
  color: var(--badge-danger-color);
}
.badge.badge-info {
  background-color: var(--badge-info-bg);
  box-shadow: var(--badge-info-box-shadow);
  color: var(--badge-info-color);
}
.badge.badge-primary {
  background-color: var(--badge-primary-bg);
  box-shadow: var(--badge-primary-box-shadow);
  color: var(--badge-primary-color);
}
.badge.badge-secondary {
  background-color: var(--badge-secondary-bg);
  box-shadow: var(--badge-secondary-box-shadow);
  color: var(--badge-secondary-color);
}
.badge.badge-light {
  background-color: var(--badge-light-bg);
  box-shadow: var(--badge-light-box-shadow);
  color: var(--badge-light-color);
}
.badge.badge-dark {
  background-color: var(--badge-dark-bg);
  box-shadow: var(--badge-dark-box-shadow);
  color: var(--badge-dark-color);
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/badges.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Badges
// ----------------------------------------------------------------------------

.badge + .badge {
  margin-left: 8px;
}

.badge.badge-pill {
  border-radius: 20px;
  font-size: var(--font-size-xs);
  line-height: 16px;
  padding: 1px 6px;
}

.badge {
  border-radius: var(--border-radius);
  box-shadow: var(--badge-box-shadow);
  color: var(--text-color);
  font-size: var(--font-size-xs);
  line-height: 16px;
  padding: 1px 5px;
}

.badge.badge-success {
  background-color: var(--badge-success-bg);
  box-shadow: var(--badge-success-box-shadow);
  color: var(--badge-success-color);
}
.badge.badge-warning {
  background-color: var(--badge-warning-bg);
  box-shadow: var(--badge-warning-box-shadow);
  color: var(--badge-warning-color);
}
.badge.badge-danger {
  background-color: var(--badge-danger-bg);
  box-shadow: var(--badge-danger-box-shadow);
  color: var(--badge-danger-color);
}
.badge.badge-info {
  background-color: var(--badge-info-bg);
  box-shadow: var(--badge-info-box-shadow);
  color: var(--badge-info-color);
}
.badge.badge-primary {
  background-color: var(--badge-primary-bg);
  box-shadow: var(--badge-primary-box-shadow);
  color: var(--badge-primary-color);
}
.badge.badge-secondary {
  background-color: var(--badge-secondary-bg);
  box-shadow: var(--badge-secondary-box-shadow);
  color: var(--badge-secondary-color);
}
.badge.badge-light {
  background-color: var(--badge-light-bg);
  box-shadow: var(--badge-light-box-shadow);
  color: var(--badge-light-color);
}
.badge.badge-dark {
  background-color: var(--badge-dark-bg);
  box-shadow: var(--badge-dark-box-shadow);
  color: var(--badge-dark-color);
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/badges.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\badges.scss");
    }
}
