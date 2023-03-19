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

/* easycorp/easyadmin-bundle/src/Resources/public/field-image.c14f1295.js */
class __TwigTemplate_aee58c9e743929bb2648424cfc09db48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-image.c14f1295.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-image.c14f1295.js"));

        // line 1
        echo "(()=>{var e={27:e=>{e.exports=function e(t,n,r){function o(a,c){if(!n[a]){if(!t[a]){if(i)return i(a,!0);var s=new Error(\"Cannot find module '\"+a+\"'\");throw s.code=\"MODULE_NOT_FOUND\",s}var u=n[a]={exports:{}};t[a][0].call(u.exports,(function(e){return o(t[a][1][e]||e)}),u,u.exports,e,t,n,r)}return n[a].exports}for(var i=void 0,a=0;a<r.length;a++)o(r[a]);return o}({1:[function(e,t,n){\"use strict\";Object.defineProperty(n,\"__esModule\",{value:!0}),n.create=n.visible=void 0;var r=function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=document.createElement(\"div\");return n.innerHTML=e.trim(),!0===t?n.children:n.firstChild},o=function(e,t){var n=e.children;return 1===n.length&&n[0].tagName===t},i=function(e){return null!=(e=e||document.querySelector(\".basicLightbox\"))&&!0===e.ownerDocument.body.contains(e)};n.visible=i,n.create=function(e,t){var n=function(e,t){var n=r('\\n\\t\\t<div class=\"basicLightbox '.concat(t.className,'\">\\n\\t\\t\\t<div class=\"basicLightbox__placeholder\" role=\"dialog\"></div>\\n\\t\\t</div>\\n\\t')),i=n.querySelector(\".basicLightbox__placeholder\");e.forEach((function(e){return i.appendChild(e)}));var a=o(i,\"IMG\"),c=o(i,\"VIDEO\"),s=o(i,\"IFRAME\");return!0===a&&n.classList.add(\"basicLightbox--img\"),!0===c&&n.classList.add(\"basicLightbox--video\"),!0===s&&n.classList.add(\"basicLightbox--iframe\"),n}(e=function(e){var t=\"string\"==typeof e,n=e instanceof HTMLElement==1;if(!1===t&&!1===n)throw new Error(\"Content must be a DOM element/node or string\");return!0===t?Array.from(r(e,!0)):\"TEMPLATE\"===e.tagName?[e.content.cloneNode(!0)]:Array.from(e.children)}(e),t=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if(null==(e=Object.assign({},e)).closable&&(e.closable=!0),null==e.className&&(e.className=\"\"),null==e.onShow&&(e.onShow=function(){}),null==e.onClose&&(e.onClose=function(){}),\"boolean\"!=typeof e.closable)throw new Error(\"Property `closable` must be a boolean\");if(\"string\"!=typeof e.className)throw new Error(\"Property `className` must be a string\");if(\"function\"!=typeof e.onShow)throw new Error(\"Property `onShow` must be a function\");if(\"function\"!=typeof e.onClose)throw new Error(\"Property `onClose` must be a function\");return e}(t)),a=function(e){return!1!==t.onClose(c)&&function(e,t){return e.classList.remove(\"basicLightbox--visible\"),setTimeout((function(){return!1===i(e)||e.parentElement.removeChild(e),t()}),410),!0}(n,(function(){if(\"function\"==typeof e)return e(c)}))};!0===t.closable&&n.addEventListener(\"click\",(function(e){e.target===n&&a()}));var c={element:function(){return n},visible:function(){return i(n)},show:function(e){return!1!==t.onShow(c)&&function(e,t){return document.body.appendChild(e),setTimeout((function(){requestAnimationFrame((function(){return e.classList.add(\"basicLightbox--visible\"),t()}))}),10),!0}(n,(function(){if(\"function\"==typeof e)return e(c)}))},close:a};return c}},{}]},{},[1])(1)}},t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var i=t[r]={exports:{}};return e[r](i,i.exports,n),i.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{\"use strict\";var e=n(27);function t(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function r(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),Object.defineProperty(e,\"prototype\",{writable:!1}),e}function o(e,t){!function(e,t){if(t.has(e))throw new TypeError(\"Cannot initialize the same private elements twice on an object\")}(e,t),t.add(e)}document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll(\".ea-lightbox-thumbnail\").forEach((function(e){new a(e)}))}));var i=new WeakSet,a=r((function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,e),o(this,i),this.field=t,this.field.addEventListener(\"click\",function(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to get private field on non-instance\");return n}(this,i,c).bind(this))}));function c(){var t=document.querySelector(this.field.getAttribute(\"data-ea-lightbox-content-selector\")).innerHTML;e.create(t).show()}})()})();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/field-image.c14f1295.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(()=>{var e={27:e=>{e.exports=function e(t,n,r){function o(a,c){if(!n[a]){if(!t[a]){if(i)return i(a,!0);var s=new Error(\"Cannot find module '\"+a+\"'\");throw s.code=\"MODULE_NOT_FOUND\",s}var u=n[a]={exports:{}};t[a][0].call(u.exports,(function(e){return o(t[a][1][e]||e)}),u,u.exports,e,t,n,r)}return n[a].exports}for(var i=void 0,a=0;a<r.length;a++)o(r[a]);return o}({1:[function(e,t,n){\"use strict\";Object.defineProperty(n,\"__esModule\",{value:!0}),n.create=n.visible=void 0;var r=function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=document.createElement(\"div\");return n.innerHTML=e.trim(),!0===t?n.children:n.firstChild},o=function(e,t){var n=e.children;return 1===n.length&&n[0].tagName===t},i=function(e){return null!=(e=e||document.querySelector(\".basicLightbox\"))&&!0===e.ownerDocument.body.contains(e)};n.visible=i,n.create=function(e,t){var n=function(e,t){var n=r('\\n\\t\\t<div class=\"basicLightbox '.concat(t.className,'\">\\n\\t\\t\\t<div class=\"basicLightbox__placeholder\" role=\"dialog\"></div>\\n\\t\\t</div>\\n\\t')),i=n.querySelector(\".basicLightbox__placeholder\");e.forEach((function(e){return i.appendChild(e)}));var a=o(i,\"IMG\"),c=o(i,\"VIDEO\"),s=o(i,\"IFRAME\");return!0===a&&n.classList.add(\"basicLightbox--img\"),!0===c&&n.classList.add(\"basicLightbox--video\"),!0===s&&n.classList.add(\"basicLightbox--iframe\"),n}(e=function(e){var t=\"string\"==typeof e,n=e instanceof HTMLElement==1;if(!1===t&&!1===n)throw new Error(\"Content must be a DOM element/node or string\");return!0===t?Array.from(r(e,!0)):\"TEMPLATE\"===e.tagName?[e.content.cloneNode(!0)]:Array.from(e.children)}(e),t=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if(null==(e=Object.assign({},e)).closable&&(e.closable=!0),null==e.className&&(e.className=\"\"),null==e.onShow&&(e.onShow=function(){}),null==e.onClose&&(e.onClose=function(){}),\"boolean\"!=typeof e.closable)throw new Error(\"Property `closable` must be a boolean\");if(\"string\"!=typeof e.className)throw new Error(\"Property `className` must be a string\");if(\"function\"!=typeof e.onShow)throw new Error(\"Property `onShow` must be a function\");if(\"function\"!=typeof e.onClose)throw new Error(\"Property `onClose` must be a function\");return e}(t)),a=function(e){return!1!==t.onClose(c)&&function(e,t){return e.classList.remove(\"basicLightbox--visible\"),setTimeout((function(){return!1===i(e)||e.parentElement.removeChild(e),t()}),410),!0}(n,(function(){if(\"function\"==typeof e)return e(c)}))};!0===t.closable&&n.addEventListener(\"click\",(function(e){e.target===n&&a()}));var c={element:function(){return n},visible:function(){return i(n)},show:function(e){return!1!==t.onShow(c)&&function(e,t){return document.body.appendChild(e),setTimeout((function(){requestAnimationFrame((function(){return e.classList.add(\"basicLightbox--visible\"),t()}))}),10),!0}(n,(function(){if(\"function\"==typeof e)return e(c)}))},close:a};return c}},{}]},{},[1])(1)}},t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var i=t[r]={exports:{}};return e[r](i,i.exports,n),i.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{\"use strict\";var e=n(27);function t(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function r(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),Object.defineProperty(e,\"prototype\",{writable:!1}),e}function o(e,t){!function(e,t){if(t.has(e))throw new TypeError(\"Cannot initialize the same private elements twice on an object\")}(e,t),t.add(e)}document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll(\".ea-lightbox-thumbnail\").forEach((function(e){new a(e)}))}));var i=new WeakSet,a=r((function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,e),o(this,i),this.field=t,this.field.addEventListener(\"click\",function(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to get private field on non-instance\");return n}(this,i,c).bind(this))}));function c(){var t=document.querySelector(this.field.getAttribute(\"data-ea-lightbox-content-selector\")).innerHTML;e.create(t).show()}})()})();", "easycorp/easyadmin-bundle/src/Resources/public/field-image.c14f1295.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\field-image.c14f1295.js");
    }
}
