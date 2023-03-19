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

/* easycorp/easyadmin-bundle/assets/js/field-file-upload.js */
class __TwigTemplate_f7386724746535d32592470986ac158c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-file-upload.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-file-upload.js"));

        // line 1
        echo "import {toggleVisibilityClasses} from \"./helpers\";

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.ea-fileupload input[type=\"file\"]').forEach((fileUploadElement) => {
        new FileUploadField(fileUploadElement);
    });
});

class FileUploadField {
    #fieldContainerElement;

    constructor(field) {
        this.field = field;
        this.#fieldContainerElement = this.field.closest('.ea-fileupload');
        this.field.addEventListener('change', this.#updateField.bind(this));

        let deleteButton = this.#getFieldDeleteButton();
        if (deleteButton) {
            deleteButton.addEventListener('click', this.#resetField.bind(this));
        }
    }

    #updateField() {
        if (0 === this.field.files.length) {
            return;
        }

        const filename = (1 === this.field.files.length) ? this.field.files[0].name : this.field.files.length + ' ' + this.field.getAttribute('data-files-label');

        let totalSizeInBytes = 0;
        for (const file of this.field.files) {
            totalSizeInBytes += file.size;
        }

        this.#getFieldCustomInput().innerHTML = filename;
        this.#getFieldDeleteButton().style.display = 'block';
        this.#getFieldSizeLabel().childNodes.forEach((fileUploadFileSizeLabelChild) => {
            if (fileUploadFileSizeLabelChild.nodeType === Node.TEXT_NODE) {
                this.#getFieldSizeLabel().removeChild(fileUploadFileSizeLabelChild);
            }
        });
        this.#getFieldSizeLabel().prepend(this.#humanizeFileSize(totalSizeInBytes));
    }

    #resetField() {
        const fieldDeleteCheckbox = this.#fieldContainerElement.querySelector('input[type=checkbox].form-check-input');
        const fieldListOfFiles = this.#fieldContainerElement.querySelector('.fileupload-list');

        if (fieldDeleteCheckbox) {
            fieldDeleteCheckbox.checked = true;
            fieldDeleteCheckbox.click();
        }
        this.field.value = '';
        this.#getFieldCustomInput().innerHTML = '';
        toggleVisibilityClasses(this.#getFieldDeleteButton(), true);

        this.#getFieldSizeLabel().childNodes.forEach((fileSizeLabelChild) => {
            if (fileSizeLabelChild.nodeType === Node.TEXT_NODE) {
                this.#getFieldSizeLabel().removeChild(fileSizeLabelChild);
            }
        });

        if (null !== fieldListOfFiles) {
            toggleVisibilityClasses(fieldListOfFiles, true);
        }
    }

    #humanizeFileSize(bytes) {
        const unit = ['B', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y'];
        const factor = Math.trunc(Math.floor(Math.log(bytes) / Math.log(1024)));

        return Math.trunc(bytes / (1024 ** factor)) + unit[factor];
    }

    #getFieldCustomInput() {
        return this.#fieldContainerElement.querySelector('.custom-file-label');
    }

    #getFieldDeleteButton() {
        return this.#fieldContainerElement.querySelector('.ea-fileupload-delete-btn');
    }

    #getFieldSizeLabel() {
        return this.#fieldContainerElement.querySelector('.input-group-text');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/field-file-upload.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("import {toggleVisibilityClasses} from \"./helpers\";

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.ea-fileupload input[type=\"file\"]').forEach((fileUploadElement) => {
        new FileUploadField(fileUploadElement);
    });
});

class FileUploadField {
    #fieldContainerElement;

    constructor(field) {
        this.field = field;
        this.#fieldContainerElement = this.field.closest('.ea-fileupload');
        this.field.addEventListener('change', this.#updateField.bind(this));

        let deleteButton = this.#getFieldDeleteButton();
        if (deleteButton) {
            deleteButton.addEventListener('click', this.#resetField.bind(this));
        }
    }

    #updateField() {
        if (0 === this.field.files.length) {
            return;
        }

        const filename = (1 === this.field.files.length) ? this.field.files[0].name : this.field.files.length + ' ' + this.field.getAttribute('data-files-label');

        let totalSizeInBytes = 0;
        for (const file of this.field.files) {
            totalSizeInBytes += file.size;
        }

        this.#getFieldCustomInput().innerHTML = filename;
        this.#getFieldDeleteButton().style.display = 'block';
        this.#getFieldSizeLabel().childNodes.forEach((fileUploadFileSizeLabelChild) => {
            if (fileUploadFileSizeLabelChild.nodeType === Node.TEXT_NODE) {
                this.#getFieldSizeLabel().removeChild(fileUploadFileSizeLabelChild);
            }
        });
        this.#getFieldSizeLabel().prepend(this.#humanizeFileSize(totalSizeInBytes));
    }

    #resetField() {
        const fieldDeleteCheckbox = this.#fieldContainerElement.querySelector('input[type=checkbox].form-check-input');
        const fieldListOfFiles = this.#fieldContainerElement.querySelector('.fileupload-list');

        if (fieldDeleteCheckbox) {
            fieldDeleteCheckbox.checked = true;
            fieldDeleteCheckbox.click();
        }
        this.field.value = '';
        this.#getFieldCustomInput().innerHTML = '';
        toggleVisibilityClasses(this.#getFieldDeleteButton(), true);

        this.#getFieldSizeLabel().childNodes.forEach((fileSizeLabelChild) => {
            if (fileSizeLabelChild.nodeType === Node.TEXT_NODE) {
                this.#getFieldSizeLabel().removeChild(fileSizeLabelChild);
            }
        });

        if (null !== fieldListOfFiles) {
            toggleVisibilityClasses(fieldListOfFiles, true);
        }
    }

    #humanizeFileSize(bytes) {
        const unit = ['B', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y'];
        const factor = Math.trunc(Math.floor(Math.log(bytes) / Math.log(1024)));

        return Math.trunc(bytes / (1024 ** factor)) + unit[factor];
    }

    #getFieldCustomInput() {
        return this.#fieldContainerElement.querySelector('.custom-file-label');
    }

    #getFieldDeleteButton() {
        return this.#fieldContainerElement.querySelector('.ea-fileupload-delete-btn');
    }

    #getFieldSizeLabel() {
        return this.#fieldContainerElement.querySelector('.input-group-text');
    }
}
", "easycorp/easyadmin-bundle/assets/js/field-file-upload.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\field-file-upload.js");
    }
}
