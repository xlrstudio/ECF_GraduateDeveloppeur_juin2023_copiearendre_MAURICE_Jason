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

/* layouts/_error.html.twig */
class __TwigTemplate_5916745eb902a53dee59cd0c00ad7e7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\tSymBlog - Erreur ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 6, $this->source); })()), "statusCode", [], "any", false, false, false, 6), "html", null, true);
        echo "
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t\t";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

\t\t\t";
        // line 11
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t</head>
\t<body>
\t\t<div
  class=\"
    flex
    items-center
    justify-center
    w-screena
    h-screen
    bg-gradient-to-r
    from-white-600
    to-blue-400
  \"
>
  <div>
    <div class=\"flex flex-col items-center\">
      <h1 class=\"font-bold text-blue-600 text-9xl\">HTTP Error ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 28, $this->source); })()), "statusCode", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>

      <p class=\"my-2 text-2xl font-bold text-center text-gray-800 md:text-3xl\">
        ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 31, $this->source); })()), "statusText", [], "any", false, false, false, 31), "html", null, true);
        echo "
      </p>

      <a
        href=\"\"
        class=\"px-6 py-2 mt-6 text-sm font-semibold text-blue-800 bg-blue-100\"
        >Retourner à l'accueil</a
      >
    </div>
  </div>
</div>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  81 => 28,  61 => 11,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\tSymBlog - Erreur {{ exception.statusCode }}
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t\t{{ encore_entry_link_tags('app') }}

\t\t\t{{ encore_entry_script_tags('app') }}
\t</head>
\t<body>
\t\t<div
  class=\"
    flex
    items-center
    justify-center
    w-screena
    h-screen
    bg-gradient-to-r
    from-white-600
    to-blue-400
  \"
>
  <div>
    <div class=\"flex flex-col items-center\">
      <h1 class=\"font-bold text-blue-600 text-9xl\">HTTP Error {{ exception.statusCode }}</h1>

      <p class=\"my-2 text-2xl font-bold text-center text-gray-800 md:text-3xl\">
        {{ exception.statusText }}
      </p>

      <a
        href=\"\"
        class=\"px-6 py-2 mt-6 text-sm font-semibold text-blue-800 bg-blue-100\"
        >Retourner à l'accueil</a
      >
    </div>
  </div>
</div>
\t</body>
</html>
", "layouts/_error.html.twig", "C:\\xampp\\apps\\symfony\\templates\\layouts\\_error.html.twig");
    }
}
