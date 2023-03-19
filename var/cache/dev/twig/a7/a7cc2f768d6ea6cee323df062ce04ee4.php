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

/* easycorp/easyadmin-bundle/src/Resources/public/field-boolean.33d03224.js */
class __TwigTemplate_f462f9e34a09832ab466153ef456b825 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-boolean.33d03224.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-boolean.33d03224.js"));

        // line 1
        echo "(()=>{function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function t(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),Object.defineProperty(t,\"prototype\",{writable:!1}),t}function n(e,t){!function(e,t){if(t.has(e))throw new TypeError(\"Cannot initialize the same private elements twice on an object\")}(e,t),t.add(e)}function i(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to get private field on non-instance\");return n}document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll('td.field-boolean .form-switch input[type=\"checkbox\"]').forEach((function(e){new a(e)}))}));var o=new WeakSet,r=new WeakSet,a=t((function e(t){\"use strict\";!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,e),n(this,r),n(this,o),this.field=t,this.field.addEventListener(\"change\",i(this,o,c).bind(this))}));function c(){var e=this,t=this.field.checked,n=this.field.getAttribute(\"data-toggle-url\")+\"&newValue=\"+t.toString();fetch(n,{method:\"PATCH\",headers:{\"X-Requested-With\":\"XMLHttpRequest\"}}).then((function(t){return t.ok||i(e,r,s).call(e),t.text()})).then((function(){})).catch((function(){return i(e,r,s).call(e)}))}function s(){this.field.checked=!this.field.checked,this.field.disabled=!0,this.field.closest(\".form-switch\").classList.add(\"disabled\")}})();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/field-boolean.33d03224.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(()=>{function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function t(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),Object.defineProperty(t,\"prototype\",{writable:!1}),t}function n(e,t){!function(e,t){if(t.has(e))throw new TypeError(\"Cannot initialize the same private elements twice on an object\")}(e,t),t.add(e)}function i(e,t,n){if(!t.has(e))throw new TypeError(\"attempted to get private field on non-instance\");return n}document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll('td.field-boolean .form-switch input[type=\"checkbox\"]').forEach((function(e){new a(e)}))}));var o=new WeakSet,r=new WeakSet,a=t((function e(t){\"use strict\";!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,e),n(this,r),n(this,o),this.field=t,this.field.addEventListener(\"change\",i(this,o,c).bind(this))}));function c(){var e=this,t=this.field.checked,n=this.field.getAttribute(\"data-toggle-url\")+\"&newValue=\"+t.toString();fetch(n,{method:\"PATCH\",headers:{\"X-Requested-With\":\"XMLHttpRequest\"}}).then((function(t){return t.ok||i(e,r,s).call(e),t.text()})).then((function(){})).catch((function(){return i(e,r,s).call(e)}))}function s(){this.field.checked=!this.field.checked,this.field.disabled=!0,this.field.closest(\".form-switch\").classList.add(\"disabled\")}})();", "easycorp/easyadmin-bundle/src/Resources/public/field-boolean.33d03224.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\field-boolean.33d03224.js");
    }
}
