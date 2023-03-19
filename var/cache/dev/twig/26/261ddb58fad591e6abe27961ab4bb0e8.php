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

/* easycorp/easyadmin-bundle/src/Resources/public/field-textarea.f496dd73.js */
class __TwigTemplate_e13c0525f61bb5d3fac11b527d49f963 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-textarea.f496dd73.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/field-textarea.f496dd73.js"));

        // line 1
        echo "(()=>{function e(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,\"value\"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var t=function(){\"use strict\";function t(e){!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,t),this.field=e,this.field.addEventListener(\"input\",this.autogrow.bind(this)),this.autogrow()}var i,n,o;return i=t,(n=[{key:\"autogrow\",value:function(){this.field.style.overflow=\"hidden\",this.field.style.resize=\"none\",this.field.style.boxSizing=\"border-box\",this.field.style.height=\"auto\",this.field.scrollHeight>0&&(this.field.style.height=this.field.scrollHeight+\"px\")}}])&&e(i.prototype,n),o&&e(i,o),Object.defineProperty(i,\"prototype\",{writable:!1}),t}();document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll(\"[data-ea-textarea-field]\").forEach((function(e){new t(e)}))}))})();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/field-textarea.f496dd73.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(()=>{function e(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,\"value\"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var t=function(){\"use strict\";function t(e){!function(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}(this,t),this.field=e,this.field.addEventListener(\"input\",this.autogrow.bind(this)),this.autogrow()}var i,n,o;return i=t,(n=[{key:\"autogrow\",value:function(){this.field.style.overflow=\"hidden\",this.field.style.resize=\"none\",this.field.style.boxSizing=\"border-box\",this.field.style.height=\"auto\",this.field.scrollHeight>0&&(this.field.style.height=this.field.scrollHeight+\"px\")}}])&&e(i.prototype,n),o&&e(i,o),Object.defineProperty(i,\"prototype\",{writable:!1}),t}();document.addEventListener(\"DOMContentLoaded\",(function(){document.querySelectorAll(\"[data-ea-textarea-field]\").forEach((function(e){new t(e)}))}))})();", "easycorp/easyadmin-bundle/src/Resources/public/field-textarea.f496dd73.js", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\field-textarea.f496dd73.js");
    }
}
