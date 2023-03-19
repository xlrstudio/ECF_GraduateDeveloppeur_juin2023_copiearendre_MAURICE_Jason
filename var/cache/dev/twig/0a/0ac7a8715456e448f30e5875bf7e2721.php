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

/* easycorp/easyadmin-bundle/assets/js/field-collection.js */
class __TwigTemplate_2efbf3d674cab632a966e326f8c40de2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-collection.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/assets/js/field-collection.js"));

        // line 1
        echo "const eaCollectionHandler = function (event) {
    document.querySelectorAll('button.field-collection-add-button').forEach((addButton) => {
        const collection = addButton.closest('[data-ea-collection-field]');

        if (!collection || collection.classList.contains('processed')) {
            return;
        }

        EaCollectionProperty.handleAddButton(addButton, collection);
        EaCollectionProperty.updateCollectionItemCssClasses(collection);
    });

    document.querySelectorAll('button.field-collection-delete-button').forEach((deleteButton) => {
        deleteButton.addEventListener('click', () => {
            const collection = deleteButton.closest('[data-ea-collection-field]');
            const item = deleteButton.closest('.field-collection-item');

            item.remove();
            document.dispatchEvent(new Event('ea.collection.item-removed'));

            EaCollectionProperty.updateCollectionItemCssClasses(collection);
        });
    });
}

window.addEventListener('DOMContentLoaded', eaCollectionHandler);
document.addEventListener('ea.collection.item-added', eaCollectionHandler);

const EaCollectionProperty = {
    handleAddButton: (addButton, collection) => {
        addButton.addEventListener('click', function() {
            const isArrayCollection = collection.classList.contains('field-array');
            // Use a counter to avoid having the same index more than once
            let numItems = parseInt(collection.dataset.numItems);

            // Remove the 'Empty Collection' badge, if present
            const emptyCollectionBadge = this.parentElement.querySelector('.collection-empty');
            if (null !== emptyCollectionBadge) {
                emptyCollectionBadge.outerHTML = isArrayCollection ? '<div class=\"ea-form-collection-items\"></div>' : '<div class=\"ea-form-collection-items\"><div class=\"accordion\"><div class=\"form-widget-compound\"></div></div></div>';
            }

            const formTypeNamePlaceholder = collection.dataset.formTypeNamePlaceholder;
            const labelRegexp = new RegExp(formTypeNamePlaceholder + 'label__', 'g');
            const nameRegexp = new RegExp(formTypeNamePlaceholder, 'g');

            let newItemHtml = collection.dataset.prototype
                .replace(labelRegexp, ++numItems)
                .replace(nameRegexp, numItems);

            collection.dataset.numItems = numItems;
            const newItemInsertionSelector = isArrayCollection ? '.ea-form-collection-items' : '.ea-form-collection-items .accordion > .form-widget-compound';
            const collectionItemsWrapper = collection.querySelector(newItemInsertionSelector);

            collectionItemsWrapper.insertAdjacentHTML('beforeend', newItemHtml);

            // Execute JS scripts embedded in prototype
            const collectionItems = collectionItemsWrapper.querySelectorAll('.field-collection-item');
            const lastElement = collectionItems[collectionItems.length - 1];
            lastElement.querySelectorAll('script').forEach(script => eval(script.innerHTML));

            // for complex collections of items, show the newly added item as not collapsed
            if (!isArrayCollection) {
                EaCollectionProperty.updateCollectionItemCssClasses(collection);
                const lastElementCollapseButton = lastElement.querySelector('.accordion-button');
                lastElementCollapseButton.classList.remove('collapsed');
                const lastElementBody = lastElement.querySelector('.accordion-collapse');
                lastElementBody.classList.add('show');
            }

            document.dispatchEvent(new Event('ea.collection.item-added'));
        });

        collection.classList.add('processed');
    },

    updateCollectionItemCssClasses: (collection) => {
        if (null === collection) {
            return;
        }

        const collectionItems = collection.querySelectorAll('.field-collection-item');
        collectionItems.forEach((item) => item.classList.remove('field-collection-item-first', 'field-collection-item-last'));

        const firstElement = collectionItems[0];
        if (undefined === firstElement) {
            return;
        }
        firstElement.classList.add('field-collection-item-first');

        const lastElement = collectionItems[collectionItems.length - 1];
        if (undefined === lastElement) {
            return;
        }
        lastElement.classList.add('field-collection-item-last');
    }
};
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/assets/js/field-collection.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("const eaCollectionHandler = function (event) {
    document.querySelectorAll('button.field-collection-add-button').forEach((addButton) => {
        const collection = addButton.closest('[data-ea-collection-field]');

        if (!collection || collection.classList.contains('processed')) {
            return;
        }

        EaCollectionProperty.handleAddButton(addButton, collection);
        EaCollectionProperty.updateCollectionItemCssClasses(collection);
    });

    document.querySelectorAll('button.field-collection-delete-button').forEach((deleteButton) => {
        deleteButton.addEventListener('click', () => {
            const collection = deleteButton.closest('[data-ea-collection-field]');
            const item = deleteButton.closest('.field-collection-item');

            item.remove();
            document.dispatchEvent(new Event('ea.collection.item-removed'));

            EaCollectionProperty.updateCollectionItemCssClasses(collection);
        });
    });
}

window.addEventListener('DOMContentLoaded', eaCollectionHandler);
document.addEventListener('ea.collection.item-added', eaCollectionHandler);

const EaCollectionProperty = {
    handleAddButton: (addButton, collection) => {
        addButton.addEventListener('click', function() {
            const isArrayCollection = collection.classList.contains('field-array');
            // Use a counter to avoid having the same index more than once
            let numItems = parseInt(collection.dataset.numItems);

            // Remove the 'Empty Collection' badge, if present
            const emptyCollectionBadge = this.parentElement.querySelector('.collection-empty');
            if (null !== emptyCollectionBadge) {
                emptyCollectionBadge.outerHTML = isArrayCollection ? '<div class=\"ea-form-collection-items\"></div>' : '<div class=\"ea-form-collection-items\"><div class=\"accordion\"><div class=\"form-widget-compound\"></div></div></div>';
            }

            const formTypeNamePlaceholder = collection.dataset.formTypeNamePlaceholder;
            const labelRegexp = new RegExp(formTypeNamePlaceholder + 'label__', 'g');
            const nameRegexp = new RegExp(formTypeNamePlaceholder, 'g');

            let newItemHtml = collection.dataset.prototype
                .replace(labelRegexp, ++numItems)
                .replace(nameRegexp, numItems);

            collection.dataset.numItems = numItems;
            const newItemInsertionSelector = isArrayCollection ? '.ea-form-collection-items' : '.ea-form-collection-items .accordion > .form-widget-compound';
            const collectionItemsWrapper = collection.querySelector(newItemInsertionSelector);

            collectionItemsWrapper.insertAdjacentHTML('beforeend', newItemHtml);

            // Execute JS scripts embedded in prototype
            const collectionItems = collectionItemsWrapper.querySelectorAll('.field-collection-item');
            const lastElement = collectionItems[collectionItems.length - 1];
            lastElement.querySelectorAll('script').forEach(script => eval(script.innerHTML));

            // for complex collections of items, show the newly added item as not collapsed
            if (!isArrayCollection) {
                EaCollectionProperty.updateCollectionItemCssClasses(collection);
                const lastElementCollapseButton = lastElement.querySelector('.accordion-button');
                lastElementCollapseButton.classList.remove('collapsed');
                const lastElementBody = lastElement.querySelector('.accordion-collapse');
                lastElementBody.classList.add('show');
            }

            document.dispatchEvent(new Event('ea.collection.item-added'));
        });

        collection.classList.add('processed');
    },

    updateCollectionItemCssClasses: (collection) => {
        if (null === collection) {
            return;
        }

        const collectionItems = collection.querySelectorAll('.field-collection-item');
        collectionItems.forEach((item) => item.classList.remove('field-collection-item-first', 'field-collection-item-last'));

        const firstElement = collectionItems[0];
        if (undefined === firstElement) {
            return;
        }
        firstElement.classList.add('field-collection-item-first');

        const lastElement = collectionItems[collectionItems.length - 1];
        if (undefined === lastElement) {
            return;
        }
        lastElement.classList.add('field-collection-item-last');
    }
};
", "easycorp/easyadmin-bundle/assets/js/field-collection.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\assets\\js\\field-collection.js");
    }
}
