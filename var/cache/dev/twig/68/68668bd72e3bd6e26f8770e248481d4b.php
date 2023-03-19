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

/* pages/post/show.html.twig */
class __TwigTemplate_9eec73068076fbad8849dcfa948291db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/post/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/post/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/post/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container mx-auto\">
\t\t<div class=\"w-2/3 mx-auto mt-6\">
\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post.index");
        echo "\" class=\"inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
\t\t\t\tRetourner au blog
\t\t\t</a>
\t\t</div>

\t\t<div class=\"mt-6\">
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 16));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "\t\t\t\t";
            $this->loadTemplate("components/_alert.html.twig", "pages/post/show.html.twig", 17)->display(twig_array_merge($context, ["message" =>             // line 18
$context["message"]]));
            // line 20
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</div>


\t\t<h1 class=\"text-5xl text-center mt-8 mb-4 text-blue-700\">";
        // line 24
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24)), "html", null, true);
        echo "!</h1>
\t\t<h2 class=\"text-2xl text-center mb-8\">Publié le
\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "createdAt", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        echo "</h2>

\t\t";
        // line 28
        $this->loadTemplate("components/_share.html.twig", "pages/post/show.html.twig", 28)->display($context);
        // line 29
        echo "
\t\t";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "thumbnail", [], "any", false, false, false, 30)) {
            // line 31
            echo "\t\t\t<img class=\"rounded-t-lg\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "thumbnail", [], "any", false, false, false, 31), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "thumbnail", [], "any", false, false, false, 31), "imageName", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
\t\t";
        }
        // line 33
        echo "
\t\t<div class=\"w-2/3 mx-auto my-8 leading-6\">
\t\t\t";
        // line 35
        $this->loadTemplate("components/_badges.html.twig", "pages/post/show.html.twig", 35)->display(twig_to_array(["badges" => twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "categories", [], "any", false, false, false, 36)]));
        // line 38
        echo "\t\t</div>

\t\t<div class=\"w-2/3 mx-auto my-8 leading-6\">
\t\t\t";
        // line 41
        echo twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "content", [], "any", false, false, false, 41);
        echo "
\t\t\t<p class=\"text-xs mt-8\">Dernière mis à jour le
\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 43, $this->source); })()), "updatedAt", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
        echo "</p>
\t\t</div>

\t\t<div class=\"w-2/3 mx-auto my-8 leading-6\">
\t\t\t<ul class=\"flex flex-row justify-start text-xs mt-8\">
\t\t\t\t<li>Étiquettes: &nbsp;</li>
\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 49, $this->source); })()), "tags", [], "any", false, false, false, 49));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 50
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag.index", ["slug" => twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</a>

\t\t\t\t\t\t";
            // line 53
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 53)) {
                // line 54
                echo "\t\t\t\t\t\t\t<span>&nbsp; - &nbsp;</span>
\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t</li>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t</ul>

\t\t\t<div class=\"mt-5\">
\t\t\t\t<h2 class=\"text-2xl mb-8\">Commentaire(s)</h2>
\t\t\t\t<div class=\"comments\">
\t\t\t\t\t";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "\t\t\t\t\t\t<div class=\"comments__new\">
\t\t\t\t\t\t\t<div class=\"w-full-width\">
\t\t\t\t\t\t\t\t";
            // line 66
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t\t\t";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "content", [], "any", false, false, false, 67), 'label', ["attr" => ["class" => "form-label inline-block mb-2 text-gray-700"], "label" => "Nouveau commentaire"]);
            echo "
\t\t\t\t\t\t\t\t";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "content", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"]]);
            echo "
\t\t\t\t\t\t\t\t<button class=\"btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center mt-5\" type=\"submit\" id=\"button-addon2\">
\t\t\t\t\t\t\t\t\tPoster mon commentaire
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t";
            // line 73
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 77
        echo "
\t\t\t\t\t<hr class=\"my-3\">

\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 80, $this->source); })()), "comments", [], "any", false, false, false, 80));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 81
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("components/_comment.html.twig", "pages/post/show.html.twig", 81)->display($context);
            // line 82
            echo "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 83,  305 => 82,  302 => 81,  285 => 80,  280 => 77,  273 => 73,  265 => 68,  261 => 67,  257 => 66,  253 => 64,  251 => 63,  244 => 58,  229 => 56,  225 => 54,  223 => 53,  216 => 51,  213 => 50,  196 => 49,  187 => 43,  182 => 41,  177 => 38,  175 => 36,  174 => 35,  170 => 33,  162 => 31,  160 => 30,  157 => 29,  155 => 28,  150 => 26,  145 => 24,  140 => 21,  126 => 20,  124 => 18,  122 => 17,  105 => 16,  96 => 10,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\t{{ post.title }}
{% endblock %}

{% block body %}
\t<div class=\"container mx-auto\">
\t\t<div class=\"w-2/3 mx-auto mt-6\">
\t\t\t<a href=\"{{ path('post.index') }}\" class=\"inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
\t\t\t\tRetourner au blog
\t\t\t</a>
\t\t</div>

\t\t<div class=\"mt-6\">
\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t{% include \"components/_alert.html.twig\" with {
\t\t\t\t\t'message': message
\t\t\t\t} %}
\t\t\t{% endfor %}
\t\t</div>


\t\t<h1 class=\"text-5xl text-center mt-8 mb-4 text-blue-700\">{{ post.title|capitalize }}!</h1>
\t\t<h2 class=\"text-2xl text-center mb-8\">Publié le
\t\t\t{{ post.createdAt|date('d/m/Y') }}</h2>

\t\t{% include \"components/_share.html.twig\" %}

\t\t{% if post.thumbnail %}
\t\t\t<img class=\"rounded-t-lg\" src=\"{{ vich_uploader_asset(post.thumbnail, 'imageFile') }}\" alt=\"{{ post.thumbnail.imageName }}\">
\t\t{% endif %}

\t\t<div class=\"w-2/3 mx-auto my-8 leading-6\">
\t\t\t{% include \"components/_badges.html.twig\" with {
\t\t\t\tbadges: post.categories
\t\t\t} only %}
\t\t</div>

\t\t<div class=\"w-2/3 mx-auto my-8 leading-6\">
\t\t\t{{ post.content|raw }}
\t\t\t<p class=\"text-xs mt-8\">Dernière mis à jour le
\t\t\t\t{{ post.updatedAt|date('d/m/Y') }}</p>
\t\t</div>

\t\t<div class=\"w-2/3 mx-auto my-8 leading-6\">
\t\t\t<ul class=\"flex flex-row justify-start text-xs mt-8\">
\t\t\t\t<li>Étiquettes: &nbsp;</li>
\t\t\t\t{% for tag in post.tags %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('tag.index', {slug: tag.slug}) }}\">{{ tag.name }}</a>

\t\t\t\t\t\t{% if not loop.last %}
\t\t\t\t\t\t\t<span>&nbsp; - &nbsp;</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>

\t\t\t<div class=\"mt-5\">
\t\t\t\t<h2 class=\"text-2xl mb-8\">Commentaire(s)</h2>
\t\t\t\t<div class=\"comments\">
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<div class=\"comments__new\">
\t\t\t\t\t\t\t<div class=\"w-full-width\">
\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t{{ form_label(form.content, 'Nouveau commentaire', {'attr' : {'class' : 'form-label inline-block mb-2 text-gray-700'}}) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.content, {'attr': {'class': 'form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none'}}) }}
\t\t\t\t\t\t\t\t<button class=\"btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center mt-5\" type=\"submit\" id=\"button-addon2\">
\t\t\t\t\t\t\t\t\tPoster mon commentaire
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<hr class=\"my-3\">

\t\t\t\t\t{% for comment in post.comments %}
\t\t\t\t\t\t{% include 'components/_comment.html.twig' %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
{% endblock %}
", "pages/post/show.html.twig", "C:\\xampp\\apps\\symfony\\templates\\pages\\post\\show.html.twig");
    }
}
