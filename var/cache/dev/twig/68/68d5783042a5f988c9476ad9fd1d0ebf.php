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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/GB.svg */
class __TwigTemplate_cfbbd76e51fec160434e40a65b475a37 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GB.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GB.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#FFF\" d=\"M0 85.333h512V426.67H0z\"/><path fill=\"#D80027\" d=\"M288 85.33h-64v138.666H0v64h224v138.666h64V287.996h224v-64H288z\"/><g fill=\"#0052B4\"><path d=\"M393.785 315.358 512 381.034v-65.676zM311.652 315.358 512 426.662v-31.474l-143.693-79.83zM458.634 426.662l-146.982-81.664v81.664z\"/></g><path fill=\"#FFF\" d=\"M311.652 315.358 512 426.662v-31.474l-143.693-79.83z\"/><path fill=\"#D80027\" d=\"M311.652 315.358 512 426.662v-31.474l-143.693-79.83z\"/><g fill=\"#0052B4\"><path d=\"M90.341 315.356 0 365.546v-50.19zM200.348 329.51v97.151H25.491z\"/></g><path fill=\"#D80027\" d=\"M143.693 315.358 0 395.188v31.474l200.348-111.304z\"/><g fill=\"#0052B4\"><path d=\"M118.215 196.634 0 130.958v65.676zM200.348 196.634 0 85.33v31.474l143.693 79.83zM53.366 85.33l146.982 81.664V85.33z\"/></g><path fill=\"#FFF\" d=\"M200.348 196.634 0 85.33v31.474l143.693 79.83z\"/><path fill=\"#D80027\" d=\"M200.348 196.634 0 85.33v31.474l143.693 79.83z\"/><g fill=\"#0052B4\"><path d=\"M421.659 196.636 512 146.446v50.19zM311.652 182.482V85.331h174.857z\"/></g><path fill=\"#D80027\" d=\"M368.307 196.634 512 116.804V85.33L311.652 196.634z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GB.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 85.333 512 341.333\"><path fill=\"#FFF\" d=\"M0 85.333h512V426.67H0z\"/><path fill=\"#D80027\" d=\"M288 85.33h-64v138.666H0v64h224v138.666h64V287.996h224v-64H288z\"/><g fill=\"#0052B4\"><path d=\"M393.785 315.358 512 381.034v-65.676zM311.652 315.358 512 426.662v-31.474l-143.693-79.83zM458.634 426.662l-146.982-81.664v81.664z\"/></g><path fill=\"#FFF\" d=\"M311.652 315.358 512 426.662v-31.474l-143.693-79.83z\"/><path fill=\"#D80027\" d=\"M311.652 315.358 512 426.662v-31.474l-143.693-79.83z\"/><g fill=\"#0052B4\"><path d=\"M90.341 315.356 0 365.546v-50.19zM200.348 329.51v97.151H25.491z\"/></g><path fill=\"#D80027\" d=\"M143.693 315.358 0 395.188v31.474l200.348-111.304z\"/><g fill=\"#0052B4\"><path d=\"M118.215 196.634 0 130.958v65.676zM200.348 196.634 0 85.33v31.474l143.693 79.83zM53.366 85.33l146.982 81.664V85.33z\"/></g><path fill=\"#FFF\" d=\"M200.348 196.634 0 85.33v31.474l143.693 79.83z\"/><path fill=\"#D80027\" d=\"M200.348 196.634 0 85.33v31.474l143.693 79.83z\"/><g fill=\"#0052B4\"><path d=\"M421.659 196.636 512 146.446v50.19zM311.652 182.482V85.331h174.857z\"/></g><path fill=\"#D80027\" d=\"M368.307 196.634 512 116.804V85.33L311.652 196.634z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/GB.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\GB.svg");
    }
}
