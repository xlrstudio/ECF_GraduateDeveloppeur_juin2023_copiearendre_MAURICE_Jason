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

/* partials/_header.html.twig */
class __TwigTemplate_27370bf2abe4bb0887426c897a2257f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo "<nav class=\"relative w-full flex flex-wrap items-center justify-between py-4 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg navbar navbar-expand-lg navbar-light\">
\t<div class=\"container-fluid w-full flex flex-wrap items-center justify-between px-6\">
\t\t<button class=\"navbar-toggler text-gray-500 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bars\" class=\"w-6\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
\t\t\t\t<path fill=\"currentColor\" d=\"M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z\"></path>
\t\t\t</svg>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse flex-grow items-center\" id=\"navbarSupportedContent\">
\t\t\t<a class=\"flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-0 mr-1\" href=\"#\">SymBlog</a>
\t\t\t<ul class=\"navbar-nav flex flex-col pl-0 list-style-none mr-auto\">
\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post.index");
        echo "\">Blog</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"#\">A propos</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"#\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"flex items-center relative\">
\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\t\t\t<a class=\"text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4\" href=\"#\">
\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"shopping-cart\" class=\"w-4\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 576 512\">
\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown relative\">
\t\t\t\t\t<a class=\"text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4 dropdown-toggle hidden-arrow flex items-center\" href=\"#\" id=\"dropdownMenuButton1\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bell\" class=\"w-4\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"text-white bg-red-700 absolute rounded-full text-xs -mt-2.5 ml-2 py-0 px-1.5\">1</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none left-auto right-0\" aria-labelledby=\"dropdownMenuButton1\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"#\">Another action</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"#\">Something else here</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown relative\">
\t\t\t\t\t<a class=\"dropdown-toggle flex items-center hidden-arrow\" href=\"#\" id=\"dropdownMenuButton2\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "avatar", [], "any", false, false, false, 49), "html", null, true);
            echo "\" class=\"rounded-full\" style=\"height:25px;width:25px\" alt=\"\" loading=\"lazy\"></a>
\t\t\t\t\t<ul class=\"dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none left-auto right-0\" aria-labelledby=\"dropdownMenuButton2\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"#\">Another action</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"#\">Something else here</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 64
            echo "\t\t\t<div class=\"collapse navbar-collapse flex-grow items-center\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav flex flex-col pl-0 list-style-none mr-auto\">
\t\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
            echo "\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"#\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 75
        echo "\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 75,  128 => 67,  123 => 64,  108 => 52,  102 => 49,  88 => 38,  72 => 24,  70 => 23,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"relative w-full flex flex-wrap items-center justify-between py-4 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg navbar navbar-expand-lg navbar-light\">
\t<div class=\"container-fluid w-full flex flex-wrap items-center justify-between px-6\">
\t\t<button class=\"navbar-toggler text-gray-500 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bars\" class=\"w-6\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
\t\t\t\t<path fill=\"currentColor\" d=\"M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z\"></path>
\t\t\t</svg>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse flex-grow items-center\" id=\"navbarSupportedContent\">
\t\t\t<a class=\"flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-0 mr-1\" href=\"#\">SymBlog</a>
\t\t\t<ul class=\"navbar-nav flex flex-col pl-0 list-style-none mr-auto\">
\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"{{ path('post.index') }}\">Blog</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"#\">A propos</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"#\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"flex items-center relative\">
\t\t\t{% if app.user %}
\t\t\t\t<a class=\"text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4\" href=\"#\">
\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"shopping-cart\" class=\"w-4\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 576 512\">
\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown relative\">
\t\t\t\t\t<a class=\"text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4 dropdown-toggle hidden-arrow flex items-center\" href=\"#\" id=\"dropdownMenuButton1\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"bell\" class=\"w-4\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 448 512\">
\t\t\t\t\t\t\t<path fill=\"currentColor\" d=\"M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"text-white bg-red-700 absolute rounded-full text-xs -mt-2.5 ml-2 py-0 px-1.5\">1</span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none left-auto right-0\" aria-labelledby=\"dropdownMenuButton1\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"{{ path('security.logout') }}\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"#\">Another action</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"#\">Something else here</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown relative\">
\t\t\t\t\t<a class=\"dropdown-toggle flex items-center hidden-arrow\" href=\"#\" id=\"dropdownMenuButton2\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><img src=\"{{ app.user.avatar }}\" class=\"rounded-full\" style=\"height:25px;width:25px\" alt=\"\" loading=\"lazy\"></a>
\t\t\t\t\t<ul class=\"dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none left-auto right-0\" aria-labelledby=\"dropdownMenuButton2\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"{{ path('security.logout') }}\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"#\">Another action</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100\" href=\"#\">Something else here</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"collapse navbar-collapse flex-grow items-center\" id=\"navbarSupportedContent\">
\t\t\t\t<ul class=\"navbar-nav flex flex-col pl-0 list-style-none mr-auto\">
\t\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"{{ path('security.login') }}\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item p-2\">
\t\t\t\t\t\t<a class=\"nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0\" href=\"#\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t{% endif %}
\t</div>
</nav>
", "partials/_header.html.twig", "C:\\xampp\\apps\\symfony\\templates\\partials\\_header.html.twig");
    }
}
