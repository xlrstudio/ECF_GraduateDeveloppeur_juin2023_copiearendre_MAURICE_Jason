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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/pages.scss */
class __TwigTemplate_94229f4194b295e8f31cf6bdd9202651 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/pages.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/pages.scss"));

        // line 1
        echo "// Page templates available or custom backends
// ----------------------------------------------------------------------------

body.page-login {
    background: var(--page-login-bg);

    @media(min-width: 992px) {
        align-items: center;
        display: flex;
        height: 100vh;
        justify-content: center;
        overflow: hidden;
        position: absolute;
        width: 100vw;
    }

    #flash-messages {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
    }
}

.login-wrapper {
    align-items: center;
    display: flex;
    flex-direction: column;
    margin: 0 auto;
    max-width: 28rem;
    width: 94%;

    @media(min-width: 992px) {
        margin-top: -225px;
        width: 100%;
    }
}
.login-wrapper .main-header {
    display: block;
    padding-right: 0;
}
.login-wrapper .main-header #header-logo a {
    font-size: var(--font-size-lg);
    text-align: center;

    @media(min-width: 992px) {
        font-size: var(--font-size-xl);
    }
}
.login-wrapper .content {
    background-color: var(--page-login-form-bg);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-lg);
    padding: 15px 30px;
    width: 100%;

    @media(min-width: 992px) {
        padding: 2rem 2.5rem;
    }
}
.login-wrapper .form-widget input {
    background-color: var(--page-login-form-control-bg);
    border-color: var(--page-login-form-control-border-color);
    font-size: var(--font-size-lg);
    height: 38px;
    line-height: 38px;
}
.login-wrapper .form-widget .btn-primary {
    background-color: var(--page-login-form-control-button-bg);
}
.login-wrapper .form-text {
    font-size: inherit;
    margin-top: 5px;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/pages.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Page templates available or custom backends
// ----------------------------------------------------------------------------

body.page-login {
    background: var(--page-login-bg);

    @media(min-width: 992px) {
        align-items: center;
        display: flex;
        height: 100vh;
        justify-content: center;
        overflow: hidden;
        position: absolute;
        width: 100vw;
    }

    #flash-messages {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
    }
}

.login-wrapper {
    align-items: center;
    display: flex;
    flex-direction: column;
    margin: 0 auto;
    max-width: 28rem;
    width: 94%;

    @media(min-width: 992px) {
        margin-top: -225px;
        width: 100%;
    }
}
.login-wrapper .main-header {
    display: block;
    padding-right: 0;
}
.login-wrapper .main-header #header-logo a {
    font-size: var(--font-size-lg);
    text-align: center;

    @media(min-width: 992px) {
        font-size: var(--font-size-xl);
    }
}
.login-wrapper .content {
    background-color: var(--page-login-form-bg);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-lg);
    padding: 15px 30px;
    width: 100%;

    @media(min-width: 992px) {
        padding: 2rem 2.5rem;
    }
}
.login-wrapper .form-widget input {
    background-color: var(--page-login-form-control-bg);
    border-color: var(--page-login-form-control-border-color);
    font-size: var(--font-size-lg);
    height: 38px;
    line-height: 38px;
}
.login-wrapper .form-widget .btn-primary {
    background-color: var(--page-login-form-control-button-bg);
}
.login-wrapper .form-text {
    font-size: inherit;
    margin-top: 5px;
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/pages.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\pages.scss");
    }
}
