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

/* admin/index.html.twig */
class __TwigTemplate_a647b1e84ae254ab5ce08894c403523d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
            'head_javascript' => [$this, 'block_head_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.dashboard"), "html", null, true);
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Site Traffic <i>Sessions vs. Users - last 30 days</i></div>
                    <div class=\"panel-body\">
                        <div id=\"chart-1-container\" class=\"text-center\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default.gif"), "html", null, true);
        echo "\" alt=\"\"/></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Most Popular Demos/Tools <i>Pageviews - last 30 days</i></div>
                    <div class=\"panel-body\">
                        <div id=\"chart-2-container\" class=\"text-center\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default.gif"), "html", null, true);
        echo "\" alt=\"\"/></div>
                    </div>
                </div>
            </div>
        </div>

";
    }

    // line 28
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("head_javascript", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  89 => 28,  78 => 20,  67 => 12,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "C:\\xampp\\apps\\symfony\\templates\\admin\\index.html.twig");
    }
}
