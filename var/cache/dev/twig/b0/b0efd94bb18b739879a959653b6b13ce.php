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

/* easycorp/easyadmin-bundle/src/Resources/public/form.51fd6a48.js */
class __TwigTemplate_c1af6cc6f66c9080fd097246ebb92838 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/form.51fd6a48.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/form.51fd6a48.js"));

        // line 1
        echo "(()=>{var e={6035:function(e){var t;t=function(){return function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){\"undefined\"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:\"Module\"}),Object.defineProperty(e,\"__esModule\",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&\"object\"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,\"default\",{enumerable:!0,value:e}),2&t&&\"string\"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,\"a\",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p=\"\",n(n.s=0)}([function(e,t){function n(e){return function(e){if(Array.isArray(e)){for(var t=0,n=new Array(e.length);t<e.length;t++)n[t]=e[t];return n}}(e)||function(e){if(Symbol.iterator in Object(e)||\"[object Arguments]\"===Object.prototype.toString.call(e))return Array.from(e)}(e)||function(){throw new TypeError(\"Invalid attempt to spread non-iterable instance\")}()}function r(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function i(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var o=function(){function e(t){var i=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};r(this,e),this.form=t,this.isDirty=!1,this.initialValues={},this.fields=[].concat(n(this.form.elements),n(this.form.querySelectorAll(\"trix-editor\"))),this.message=i.message||\"You have unsaved changes!\",this.setupFields(),this.setFormHandlers()}var t,o,a;return t=e,(o=[{key:\"setupFields\",value:function(){var e=this;this.fields.forEach((function(t){t.name&&\"submit\"!=t.type&&\"button\"!=t.type&&\"hidden\"!=t.type&&(e.initialValues[t.name]=t.value,\"TRIX-EDITOR\"==t.nodeName?t.addEventListener(\"trix-change\",e.checkValue.bind(e)):(t.addEventListener(\"change\",e.checkValue.bind(e)),t.addEventListener(\"input\",e.checkValue.bind(e))))}))}},{key:\"setFormHandlers\",value:function(){var e=this;window.addEventListener(\"submit\",this.handleSubmit.bind(this)),this.form.addEventListener(\"submit\",this.handleSubmit.bind(this)),window.onbeforeunload=function(){if(e.isDirty)return e.message},\"undefined\"!=typeof Turbolinks&&document.addEventListener(\"turbolinks:before-visit\",(function(t){e.isDirty&&!confirm(e.message)?t.preventDefault():e.isDirty=!1}))}},{key:\"checkValue\",value:function(e){var t=e.target;this.initialValues[t.name]!=t.value&&(this.isDirty=!0)}},{key:\"handleSubmit\",value:function(){this.isDirty=!1}}])&&i(t.prototype,o),a&&i(t,a),e}();e.exports=o}])},e.exports=t()}},t={};function n(r){var i=t[r];if(void 0!==i)return i.exports;var o=t[r]={exports:{}};return e[r].call(o.exports,o,o.exports,n),o.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{\"use strict\";var e=n(6035),t=n.n(e);function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function i(e,t,n){return t&&r(e.prototype,t),n&&r(e,n),Object.defineProperty(e,\"prototype\",{writable:!1}),e}function o(e,t){!function(e,t){if(t.has(e))throw new TypeError(\"Cannot initialize the same private elements twice on an object\")}(e,t),t.add(e)}function a(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to get private field on non-instance\");return n}document.addEventListener(\"DOMContentLoaded\",(function(){new s}));var u=new WeakSet,c=new WeakSet,l=new WeakSet,s=i((function e(){!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,e),o(this,l),o(this,c),o(this,u),a(this,u,d).call(this),a(this,c,f).call(this),a(this,l,v).call(this)}));function d(){[\".ea-new-form\",\".ea-edit-form\"].forEach((function(e){var n=document.querySelector(e);null!==n&&new(t())(n)}))}function f(){[\".ea-new-form\",\".ea-edit-form\"].forEach((function(e){var t=document.querySelector(e);null!==t&&function(e,t){document.querySelector(\".ea-edit, .ea-new\").querySelectorAll('[type=\"submit\"]').forEach((function(t){t.addEventListener(\"click\",(function(t){var n=!1;document.querySelectorAll(\".form-tabs .nav-item .badge-danger.badge\").forEach((function(e){e.parentElement.removeChild(e)})),null===e.getAttribute(\"novalidate\")&&(e.querySelectorAll(\"input,select,textarea\").forEach((function(e){if(!e.disabled&&!e.validity.valid){n=!0;var t=e.closest(\"div.tab-pane\");if(t){var r=document.querySelector(\"#\".concat(t.id,\"-tab\")),i=r.querySelector(\".badge\");if(i)i.textContent=(parseInt(i.textContent)+1).toString();else{var o=document.createElement(\"span\");o.classList.add(\"badge\",\"badge-danger\"),o.title=\"form.tab.error_badge_title\",o.textContent=\"1\",r.appendChild(o)}r.addEventListener(\"click\",(function e(){r.querySelectorAll(\".badge-danger.badge\").forEach((function(e){e.parentElement.removeChild(e)})),r.removeEventListener(\"click\",e)}))}var a=e.closest(\"div.form-group\");a.classList.add(\"has-error\"),a.addEventListener(\"click\",(function e(){a.classList.remove(\"has-error\"),a.removeEventListener(\"click\",e)}))}})),n&&(t.preventDefault(),t.stopPropagation()))}))})),e.addEventListener(\"submit\",(function(n){var r=new CustomEvent(\"ea.form.submit\",{cancelable:!0,detail:{page:t,form:e}});!1===document.dispatchEvent(r)&&(n.preventDefault(),n.stopPropagation())}))}(t,e.includes(\"-new-\")?\"new\":\"edit\")}))}function v(){[\".ea-new-form\",\".ea-edit-form\"].forEach((function(e){var t=document.querySelector(e);null!==t&&t.addEventListener(\"submit\",(function(){setTimeout((function(){document.querySelector(\".ea-edit, .ea-new\").querySelectorAll('[type=\"submit\"]').forEach((function(e){e.setAttribute(\"disabled\",\"disabled\")}))}),1)}),!1)}))}})()})();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/form.51fd6a48.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(()=>{var e={6035:function(e){var t;t=function(){return function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){\"undefined\"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:\"Module\"}),Object.defineProperty(e,\"__esModule\",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&\"object\"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,\"default\",{enumerable:!0,value:e}),2&t&&\"string\"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,\"a\",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p=\"\",n(n.s=0)}([function(e,t){function n(e){return function(e){if(Array.isArray(e)){for(var t=0,n=new Array(e.length);t<e.length;t++)n[t]=e[t];return n}}(e)||function(e){if(Symbol.iterator in Object(e)||\"[object Arguments]\"===Object.prototype.toString.call(e))return Array.from(e)}(e)||function(){throw new TypeError(\"Invalid attempt to spread non-iterable instance\")}()}function r(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function i(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var o=function(){function e(t){var i=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};r(this,e),this.form=t,this.isDirty=!1,this.initialValues={},this.fields=[].concat(n(this.form.elements),n(this.form.querySelectorAll(\"trix-editor\"))),this.message=i.message||\"You have unsaved changes!\",this.setupFields(),this.setFormHandlers()}var t,o,a;return t=e,(o=[{key:\"setupFields\",value:function(){var e=this;this.fields.forEach((function(t){t.name&&\"submit\"!=t.type&&\"button\"!=t.type&&\"hidden\"!=t.type&&(e.initialValues[t.name]=t.value,\"TRIX-EDITOR\"==t.nodeName?t.addEventListener(\"trix-change\",e.checkValue.bind(e)):(t.addEventListener(\"change\",e.checkValue.bind(e)),t.addEventListener(\"input\",e.checkValue.bind(e))))}))}},{key:\"setFormHandlers\",value:function(){var e=this;window.addEventListener(\"submit\",this.handleSubmit.bind(this)),this.form.addEventListener(\"submit\",this.handleSubmit.bind(this)),window.onbeforeunload=function(){if(e.isDirty)return e.message},\"undefined\"!=typeof Turbolinks&&document.addEventListener(\"turbolinks:before-visit\",(function(t){e.isDirty&&!confirm(e.message)?t.preventDefault():e.isDirty=!1}))}},{key:\"checkValue\",value:function(e){var t=e.target;this.initialValues[t.name]!=t.value&&(this.isDirty=!0)}},{key:\"handleSubmit\",value:function(){this.isDirty=!1}}])&&i(t.prototype,o),a&&i(t,a),e}();e.exports=o}])},e.exports=t()}},t={};function n(r){var i=t[r];if(void 0!==i)return i.exports;var o=t[r]={exports:{}};return e[r].call(o.exports,o,o.exports,n),o.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{\"use strict\";var e=n(6035),t=n.n(e);function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function i(e,t,n){return t&&r(e.prototype,t),n&&r(e,n),Object.defineProperty(e,\"prototype\",{writable:!1}),e}function o(e,t){!function(e,t){if(t.has(e))throw new TypeError(\"Cannot initialize the same private elements twice on an object\")}(e,t),t.add(e)}function a(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to get private field on non-instance\");return n}document.addEventListener(\"DOMContentLoaded\",(function(){new s}));var u=new WeakSet,c=new WeakSet,l=new WeakSet,s=i((function e(){!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,e),o(this,l),o(this,c),o(this,u),a(this,u,d).call(this),a(this,c,f).call(this),a(this,l,v).call(this)}));function d(){[\".ea-new-form\",\".ea-edit-form\"].forEach((function(e){var n=document.querySelector(e);null!==n&&new(t())(n)}))}function f(){[\".ea-new-form\",\".ea-edit-form\"].forEach((function(e){var t=document.querySelector(e);null!==t&&function(e,t){document.querySelector(\".ea-edit, .ea-new\").querySelectorAll('[type=\"submit\"]').forEach((function(t){t.addEventListener(\"click\",(function(t){var n=!1;document.querySelectorAll(\".form-tabs .nav-item .badge-danger.badge\").forEach((function(e){e.parentElement.removeChild(e)})),null===e.getAttribute(\"novalidate\")&&(e.querySelectorAll(\"input,select,textarea\").forEach((function(e){if(!e.disabled&&!e.validity.valid){n=!0;var t=e.closest(\"div.tab-pane\");if(t){var r=document.querySelector(\"#\".concat(t.id,\"-tab\")),i=r.querySelector(\".badge\");if(i)i.textContent=(parseInt(i.textContent)+1).toString();else{var o=document.createElement(\"span\");o.classList.add(\"badge\",\"badge-danger\"),o.title=\"form.tab.error_badge_title\",o.textContent=\"1\",r.appendChild(o)}r.addEventListener(\"click\",(function e(){r.querySelectorAll(\".badge-danger.badge\").forEach((function(e){e.parentElement.removeChild(e)})),r.removeEventListener(\"click\",e)}))}var a=e.closest(\"div.form-group\");a.classList.add(\"has-error\"),a.addEventListener(\"click\",(function e(){a.classList.remove(\"has-error\"),a.removeEventListener(\"click\",e)}))}})),n&&(t.preventDefault(),t.stopPropagation()))}))})),e.addEventListener(\"submit\",(function(n){var r=new CustomEvent(\"ea.form.submit\",{cancelable:!0,detail:{page:t,form:e}});!1===document.dispatchEvent(r)&&(n.preventDefault(),n.stopPropagation())}))}(t,e.includes(\"-new-\")?\"new\":\"edit\")}))}function v(){[\".ea-new-form\",\".ea-edit-form\"].forEach((function(e){var t=document.querySelector(e);null!==t&&t.addEventListener(\"submit\",(function(){setTimeout((function(){document.querySelector(\".ea-edit, .ea-new\").querySelectorAll('[type=\"submit\"]').forEach((function(e){e.setAttribute(\"disabled\",\"disabled\")}))}),1)}),!1)}))}})()})();", "easycorp/easyadmin-bundle/src/Resources/public/form.51fd6a48.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\form.51fd6a48.js");
    }
}
