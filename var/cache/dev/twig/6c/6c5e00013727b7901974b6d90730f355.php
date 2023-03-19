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

/* easycorp/easyadmin-bundle/src/Resources/public/field-collection.c6a8940b.js */
class __TwigTemplate_5d212d99b196d8f86b35a9e381370ff5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-collection.c6a8940b.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-collection.c6a8940b.js"));

        // line 1
        echo "(()=>{var __webpack_exports__={},eaCollectionHandler=function(e){document.querySelectorAll(\"button.field-collection-add-button\").forEach((function(e){var t=e.closest(\"[data-ea-collection-field]\");t&&!t.classList.contains(\"processed\")&&(EaCollectionProperty.handleAddButton(e,t),EaCollectionProperty.updateCollectionItemCssClasses(t))})),document.querySelectorAll(\"button.field-collection-delete-button\").forEach((function(e){e.addEventListener(\"click\",(function(){var t=e.closest(\"[data-ea-collection-field]\");e.closest(\".field-collection-item\").remove(),document.dispatchEvent(new Event(\"ea.collection.item-removed\")),EaCollectionProperty.updateCollectionItemCssClasses(t)}))}))};window.addEventListener(\"DOMContentLoaded\",eaCollectionHandler),document.addEventListener(\"ea.collection.item-added\",eaCollectionHandler);var EaCollectionProperty={handleAddButton:function handleAddButton(addButton,collection){addButton.addEventListener(\"click\",(function(){var isArrayCollection=collection.classList.contains(\"field-array\"),numItems=parseInt(collection.dataset.numItems),emptyCollectionBadge=this.parentElement.querySelector(\".collection-empty\");null!==emptyCollectionBadge&&(emptyCollectionBadge.outerHTML=isArrayCollection?'<div class=\"ea-form-collection-items\"></div>':'<div class=\"ea-form-collection-items\"><div class=\"accordion\"><div class=\"form-widget-compound\"></div></div></div>');var formTypeNamePlaceholder=collection.dataset.formTypeNamePlaceholder,labelRegexp=new RegExp(formTypeNamePlaceholder+\"label__\",\"g\"),nameRegexp=new RegExp(formTypeNamePlaceholder,\"g\"),newItemHtml=collection.dataset.prototype.replace(labelRegexp,++numItems).replace(nameRegexp,numItems);collection.dataset.numItems=numItems;var newItemInsertionSelector=isArrayCollection?\".ea-form-collection-items\":\".ea-form-collection-items .accordion > .form-widget-compound\",collectionItemsWrapper=collection.querySelector(newItemInsertionSelector);collectionItemsWrapper.insertAdjacentHTML(\"beforeend\",newItemHtml);var collectionItems=collectionItemsWrapper.querySelectorAll(\".field-collection-item\"),lastElement=collectionItems[collectionItems.length-1];if(lastElement.querySelectorAll(\"script\").forEach((function(script){return eval(script.innerHTML)})),!isArrayCollection){EaCollectionProperty.updateCollectionItemCssClasses(collection);var lastElementCollapseButton=lastElement.querySelector(\".accordion-button\");lastElementCollapseButton.classList.remove(\"collapsed\");var lastElementBody=lastElement.querySelector(\".accordion-collapse\");lastElementBody.classList.add(\"show\")}document.dispatchEvent(new Event(\"ea.collection.item-added\"))})),collection.classList.add(\"processed\")},updateCollectionItemCssClasses:function(e){if(null!==e){var t=e.querySelectorAll(\".field-collection-item\");t.forEach((function(e){return e.classList.remove(\"field-collection-item-first\",\"field-collection-item-last\")}));var l=t[0];if(void 0!==l){l.classList.add(\"field-collection-item-first\");var o=t[t.length-1];void 0!==o&&o.classList.add(\"field-collection-item-last\")}}}}})();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/field-collection.c6a8940b.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(()=>{var __webpack_exports__={},eaCollectionHandler=function(e){document.querySelectorAll(\"button.field-collection-add-button\").forEach((function(e){var t=e.closest(\"[data-ea-collection-field]\");t&&!t.classList.contains(\"processed\")&&(EaCollectionProperty.handleAddButton(e,t),EaCollectionProperty.updateCollectionItemCssClasses(t))})),document.querySelectorAll(\"button.field-collection-delete-button\").forEach((function(e){e.addEventListener(\"click\",(function(){var t=e.closest(\"[data-ea-collection-field]\");e.closest(\".field-collection-item\").remove(),document.dispatchEvent(new Event(\"ea.collection.item-removed\")),EaCollectionProperty.updateCollectionItemCssClasses(t)}))}))};window.addEventListener(\"DOMContentLoaded\",eaCollectionHandler),document.addEventListener(\"ea.collection.item-added\",eaCollectionHandler);var EaCollectionProperty={handleAddButton:function handleAddButton(addButton,collection){addButton.addEventListener(\"click\",(function(){var isArrayCollection=collection.classList.contains(\"field-array\"),numItems=parseInt(collection.dataset.numItems),emptyCollectionBadge=this.parentElement.querySelector(\".collection-empty\");null!==emptyCollectionBadge&&(emptyCollectionBadge.outerHTML=isArrayCollection?'<div class=\"ea-form-collection-items\"></div>':'<div class=\"ea-form-collection-items\"><div class=\"accordion\"><div class=\"form-widget-compound\"></div></div></div>');var formTypeNamePlaceholder=collection.dataset.formTypeNamePlaceholder,labelRegexp=new RegExp(formTypeNamePlaceholder+\"label__\",\"g\"),nameRegexp=new RegExp(formTypeNamePlaceholder,\"g\"),newItemHtml=collection.dataset.prototype.replace(labelRegexp,++numItems).replace(nameRegexp,numItems);collection.dataset.numItems=numItems;var newItemInsertionSelector=isArrayCollection?\".ea-form-collection-items\":\".ea-form-collection-items .accordion > .form-widget-compound\",collectionItemsWrapper=collection.querySelector(newItemInsertionSelector);collectionItemsWrapper.insertAdjacentHTML(\"beforeend\",newItemHtml);var collectionItems=collectionItemsWrapper.querySelectorAll(\".field-collection-item\"),lastElement=collectionItems[collectionItems.length-1];if(lastElement.querySelectorAll(\"script\").forEach((function(script){return eval(script.innerHTML)})),!isArrayCollection){EaCollectionProperty.updateCollectionItemCssClasses(collection);var lastElementCollapseButton=lastElement.querySelector(\".accordion-button\");lastElementCollapseButton.classList.remove(\"collapsed\");var lastElementBody=lastElement.querySelector(\".accordion-collapse\");lastElementBody.classList.add(\"show\")}document.dispatchEvent(new Event(\"ea.collection.item-added\"))})),collection.classList.add(\"processed\")},updateCollectionItemCssClasses:function(e){if(null!==e){var t=e.querySelectorAll(\".field-collection-item\");t.forEach((function(e){return e.classList.remove(\"field-collection-item-first\",\"field-collection-item-last\")}));var l=t[0];if(void 0!==l){l.classList.add(\"field-collection-item-first\");var o=t[t.length-1];void 0!==o&&o.classList.add(\"field-collection-item-last\")}}}}})();", "easycorp/easyadmin-bundle/src/Resources/public/field-collection.c6a8940b.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\field-collection.c6a8940b.js");
    }
}
