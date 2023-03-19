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

/* easycorp/easyadmin-bundle/assets/css/easyadmin-theme/images.scss */
class __TwigTemplate_6337a4d68d48d3bae7b4791cad45fed6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/images.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/images.scss"));

        // line 1
        echo "// Images and lightbox
// ----------------------------------------------------------------------------
.detail .field-image .form-control {
    background: transparent;
    border: 0;
    height: auto;
    padding: 0;
}

.ea-detail .field-image img {
    border: 1px solid transparent;
    border-radius: var(--border-radius);
    max-height: 300px;
    max-width: 400px;
    padding: 8px;

    &:hover {
        border-color: var(--datalist-border-color);
    }
}

.ea-lightbox-thumbnail img:hover {
    cursor: zoom-in;
}

.ea-lightbox {
    display: none;
}

.ea-lightbox img {
    max-width: 100%;
    width: 100%;
}

\$basicLightbox__background: rgba(0, 0, 0, 0.8);
\$basicLightbox__zIndex: 10000;
\$basicLightbox__duration: .3s;
\$basicLightbox__timing: ease;
@import \"~basiclightbox/src/styles/main\";

.basicLightbox__placeholder {
    margin-left: 5%;
    margin-right: 5%;
    max-height: 95%;
}
.basicLightbox__placeholder img {
    background: white;
    padding: 25px;
}
.basicLightbox__placeholder img:hover {
    cursor: zoom-out;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/images.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Images and lightbox
// ----------------------------------------------------------------------------
.detail .field-image .form-control {
    background: transparent;
    border: 0;
    height: auto;
    padding: 0;
}

.ea-detail .field-image img {
    border: 1px solid transparent;
    border-radius: var(--border-radius);
    max-height: 300px;
    max-width: 400px;
    padding: 8px;

    &:hover {
        border-color: var(--datalist-border-color);
    }
}

.ea-lightbox-thumbnail img:hover {
    cursor: zoom-in;
}

.ea-lightbox {
    display: none;
}

.ea-lightbox img {
    max-width: 100%;
    width: 100%;
}

\$basicLightbox__background: rgba(0, 0, 0, 0.8);
\$basicLightbox__zIndex: 10000;
\$basicLightbox__duration: .3s;
\$basicLightbox__timing: ease;
@import \"~basiclightbox/src/styles/main\";

.basicLightbox__placeholder {
    margin-left: 5%;
    margin-right: 5%;
    max-height: 95%;
}
.basicLightbox__placeholder img {
    background: white;
    padding: 25px;
}
.basicLightbox__placeholder img:hover {
    cursor: zoom-out;
}
", "easycorp/easyadmin-bundle/assets/css/easyadmin-theme/images.scss", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\css\\easyadmin-theme\\images.scss");
    }
}
