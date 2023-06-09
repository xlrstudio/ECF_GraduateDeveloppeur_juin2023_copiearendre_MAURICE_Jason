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

/* easycorp/easyadmin-bundle/src/Resources/public/field-file-upload.aef2ac30.js */
class __TwigTemplate_b1a17c54cc476f641c1ed0c8b44fd1c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-file-upload.aef2ac30.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-file-upload.aef2ac30.js"));

        // line 1
        echo "(()=>{\"use strict\";function e(e,t){t?(e.classList.remove(\"d-block\"),e.classList.add(\"d-none\")):(e.classList.remove(\"d-none\"),e.classList.add(\"d-block\"))}function t(e,t){var i=\"undefined\"!=typeof Symbol&&e[Symbol.iterator]||e[\"@@iterator\"];if(!i){if(Array.isArray(e)||(i=function(e,t){if(!e)return;if(\"string\"==typeof e)return n(e,t);var i=Object.prototype.toString.call(e).slice(8,-1);\"Object\"===i&&e.constructor&&(i=e.constructor.name);if(\"Map\"===i||\"Set\"===i)return Array.from(e);if(\"Arguments\"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array\$/.test(i))return n(e,t)}(e))||t&&e&&\"number\"==typeof e.length){i&&(e=i);var r=0,o=function(){};return{s:o,n:function(){return r>=e.length?{done:!0}:{done:!1,value:e[r++]}},e:function(e){throw e},f:o}}throw new TypeError(\"Invalid attempt to iterate non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\")}var l,a=!0,s=!1;return{s:function(){i=i.call(e)},n:function(){var e=i.next();return a=e.done,e},e:function(e){s=!0,l=e},f:function(){try{a||null==i.return||i.return()}finally{if(s)throw l}}}}function n(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,i=new Array(t);n<t;n++)i[n]=e[n];return i}function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function r(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),Object.defineProperty(e,\"prototype\",{writable:!1}),e}function o(e,t){l(e,t),t.add(e)}function l(e,t){if(t.has(e))throw new TypeError(\"Cannot initialize the same private elements twice on an object\")}function a(e,t){return function(e,t){if(t.get)return t.get.call(e);return t.value}(e,u(e,t,\"get\"))}function s(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to get private field on non-instance\");return n}function c(e,t,n){return function(e,t,n){if(t.set)t.set.call(e,n);else{if(!t.writable)throw new TypeError(\"attempted to set read only private field\");t.value=n}}(e,u(e,t,\"set\"),n),n}function u(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to \"+n+\" private field on non-instance\");return t.get(e)}document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll('.ea-fileupload input[type=\"file\"]').forEach((function(e){new w(e)}))}));var f=new WeakMap,h=new WeakSet,d=new WeakSet,p=new WeakSet,y=new WeakSet,v=new WeakSet,b=new WeakSet,w=r((function e(t){var n,i,r;!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,e),o(this,b),o(this,v),o(this,y),o(this,p),o(this,d),o(this,h),r={writable:!0,value:void 0},l(n=this,i=f),i.set(n,r),this.field=t,c(this,f,this.field.closest(\".ea-fileupload\")),this.field.addEventListener(\"change\",s(this,h,m).bind(this));var a=s(this,v,k).call(this);a&&a.addEventListener(\"click\",s(this,d,g).bind(this))}));function m(){var e=this;if(0!==this.field.files.length){var n,i=1===this.field.files.length?this.field.files[0].name:this.field.files.length+\" \"+this.field.getAttribute(\"data-files-label\"),r=0,o=t(this.field.files);try{for(o.s();!(n=o.n()).done;){r+=n.value.size}}catch(e){o.e(e)}finally{o.f()}s(this,y,S).call(this).innerHTML=i,s(this,v,k).call(this).style.display=\"block\",s(this,b,T).call(this).childNodes.forEach((function(t){t.nodeType===Node.TEXT_NODE&&s(e,b,T).call(e).removeChild(t)})),s(this,b,T).call(this).prepend(s(this,p,E).call(this,r))}}function g(){var t=this,n=a(this,f).querySelector(\"input[type=checkbox].form-check-input\"),i=a(this,f).querySelector(\".fileupload-list\");n&&(n.checked=!0,n.click()),this.field.value=\"\",s(this,y,S).call(this).innerHTML=\"\",e(s(this,v,k).call(this),!0),s(this,b,T).call(this).childNodes.forEach((function(e){e.nodeType===Node.TEXT_NODE&&s(t,b,T).call(t).removeChild(e)})),null!==i&&e(i,!0)}function E(e){var t=Math.trunc(Math.floor(Math.log(e)/Math.log(1024)));return Math.trunc(e/Math.pow(1024,t))+[\"B\",\"K\",\"M\",\"G\",\"T\",\"P\",\"E\",\"Z\",\"Y\"][t]}function S(){return a(this,f).querySelector(\".custom-file-label\")}function k(){return a(this,f).querySelector(\".ea-fileupload-delete-btn\")}function T(){return a(this,f).querySelector(\".input-group-text\")}})();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/field-file-upload.aef2ac30.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(()=>{\"use strict\";function e(e,t){t?(e.classList.remove(\"d-block\"),e.classList.add(\"d-none\")):(e.classList.remove(\"d-none\"),e.classList.add(\"d-block\"))}function t(e,t){var i=\"undefined\"!=typeof Symbol&&e[Symbol.iterator]||e[\"@@iterator\"];if(!i){if(Array.isArray(e)||(i=function(e,t){if(!e)return;if(\"string\"==typeof e)return n(e,t);var i=Object.prototype.toString.call(e).slice(8,-1);\"Object\"===i&&e.constructor&&(i=e.constructor.name);if(\"Map\"===i||\"Set\"===i)return Array.from(e);if(\"Arguments\"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array\$/.test(i))return n(e,t)}(e))||t&&e&&\"number\"==typeof e.length){i&&(e=i);var r=0,o=function(){};return{s:o,n:function(){return r>=e.length?{done:!0}:{done:!1,value:e[r++]}},e:function(e){throw e},f:o}}throw new TypeError(\"Invalid attempt to iterate non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.\")}var l,a=!0,s=!1;return{s:function(){i=i.call(e)},n:function(){var e=i.next();return a=e.done,e},e:function(e){s=!0,l=e},f:function(){try{a||null==i.return||i.return()}finally{if(s)throw l}}}}function n(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,i=new Array(t);n<t;n++)i[n]=e[n];return i}function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function r(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),Object.defineProperty(e,\"prototype\",{writable:!1}),e}function o(e,t){l(e,t),t.add(e)}function l(e,t){if(t.has(e))throw new TypeError(\"Cannot initialize the same private elements twice on an object\")}function a(e,t){return function(e,t){if(t.get)return t.get.call(e);return t.value}(e,u(e,t,\"get\"))}function s(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to get private field on non-instance\");return n}function c(e,t,n){return function(e,t,n){if(t.set)t.set.call(e,n);else{if(!t.writable)throw new TypeError(\"attempted to set read only private field\");t.value=n}}(e,u(e,t,\"set\"),n),n}function u(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to \"+n+\" private field on non-instance\");return t.get(e)}document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll('.ea-fileupload input[type=\"file\"]').forEach((function(e){new w(e)}))}));var f=new WeakMap,h=new WeakSet,d=new WeakSet,p=new WeakSet,y=new WeakSet,v=new WeakSet,b=new WeakSet,w=r((function e(t){var n,i,r;!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,e),o(this,b),o(this,v),o(this,y),o(this,p),o(this,d),o(this,h),r={writable:!0,value:void 0},l(n=this,i=f),i.set(n,r),this.field=t,c(this,f,this.field.closest(\".ea-fileupload\")),this.field.addEventListener(\"change\",s(this,h,m).bind(this));var a=s(this,v,k).call(this);a&&a.addEventListener(\"click\",s(this,d,g).bind(this))}));function m(){var e=this;if(0!==this.field.files.length){var n,i=1===this.field.files.length?this.field.files[0].name:this.field.files.length+\" \"+this.field.getAttribute(\"data-files-label\"),r=0,o=t(this.field.files);try{for(o.s();!(n=o.n()).done;){r+=n.value.size}}catch(e){o.e(e)}finally{o.f()}s(this,y,S).call(this).innerHTML=i,s(this,v,k).call(this).style.display=\"block\",s(this,b,T).call(this).childNodes.forEach((function(t){t.nodeType===Node.TEXT_NODE&&s(e,b,T).call(e).removeChild(t)})),s(this,b,T).call(this).prepend(s(this,p,E).call(this,r))}}function g(){var t=this,n=a(this,f).querySelector(\"input[type=checkbox].form-check-input\"),i=a(this,f).querySelector(\".fileupload-list\");n&&(n.checked=!0,n.click()),this.field.value=\"\",s(this,y,S).call(this).innerHTML=\"\",e(s(this,v,k).call(this),!0),s(this,b,T).call(this).childNodes.forEach((function(e){e.nodeType===Node.TEXT_NODE&&s(t,b,T).call(t).removeChild(e)})),null!==i&&e(i,!0)}function E(e){var t=Math.trunc(Math.floor(Math.log(e)/Math.log(1024)));return Math.trunc(e/Math.pow(1024,t))+[\"B\",\"K\",\"M\",\"G\",\"T\",\"P\",\"E\",\"Z\",\"Y\"][t]}function S(){return a(this,f).querySelector(\".custom-file-label\")}function k(){return a(this,f).querySelector(\".ea-fileupload-delete-btn\")}function T(){return a(this,f).querySelector(\".input-group-text\")}})();", "easycorp/easyadmin-bundle/src/Resources/public/field-file-upload.aef2ac30.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\field-file-upload.aef2ac30.js");
    }
}
