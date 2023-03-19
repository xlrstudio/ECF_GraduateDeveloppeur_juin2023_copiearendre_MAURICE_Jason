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

/* easycorp/easyadmin-bundle/assets/js/field-image.js */
class __TwigTemplate_ecf8b835a6157087b4aaf373c393fa89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-image.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-image.js"));

        // line 1
        echo "import * as basicLightbox from 'basiclightbox';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.ea-lightbox-thumbnail').forEach((imageElement) => {
        new Image(imageElement);
    });
});

class Image {
    constructor(field) {
        this.field = field;
        this.field.addEventListener('click', this.#renderLightbox.bind(this));
    }

    #renderLightbox() {
        const lightboxContent = document.querySelector(this.field.getAttribute('data-ea-lightbox-content-selector')).innerHTML;
        const lightbox = basicLightbox.create(lightboxContent);
        lightbox.show();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/field-image.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("import * as basicLightbox from 'basiclightbox';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.ea-lightbox-thumbnail').forEach((imageElement) => {
        new Image(imageElement);
    });
});

class Image {
    constructor(field) {
        this.field = field;
        this.field.addEventListener('click', this.#renderLightbox.bind(this));
    }

    #renderLightbox() {
        const lightboxContent = document.querySelector(this.field.getAttribute('data-ea-lightbox-content-selector')).innerHTML;
        const lightbox = basicLightbox.create(lightboxContent);
        lightbox.show();
    }
}
", "easycorp/easyadmin-bundle/assets/js/field-image.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\field-image.js");
    }
}
