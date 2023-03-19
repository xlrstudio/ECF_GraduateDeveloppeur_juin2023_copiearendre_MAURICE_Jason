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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/AC.svg */
class __TwigTemplate_c39fd67669295e3aaa53dcbbad09eef2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AC.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AC.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#0052B4\" d=\"M0 0h513v342H0z\"/><path fill=\"#FFF\" d=\"M440.1 181.1c-.1 39.2-6.4 81.4-57.4 101.5-51.1-20.1-57.3-62.3-57.4-101.5h114.8z\"/><path fill=\"#29DBFF\" d=\"M439.6 197.7c-2.8 34.9-12.4 67.4-57 85-44.4-17.6-54.5-51.2-56.9-84.9\"/><path fill=\"#FFF\" d=\"M437.8 214.1c-3.2 24.3-16.7 53.5-55.1 68.6-38.4-15.1-50.5-42.5-55.1-68.4\"/><path fill=\"#29DBFF\" d=\"M434.2 230.3c-5.7 17.7-19.3 39.4-51.3 52.8-32-12.6-45.2-33.8-51.4-53\"/><path fill=\"#FFF\" d=\"M426.7 246.9c-6.5 11.3-17.7 25.4-44 35.9-27.5-11.5-37.4-25.3-44-36.1\"/><path fill=\"#29DBFF\" d=\"M412.4 265.1c-8.1 7.2-12 11.2-29.6 17.9-20.1-7.9-22.6-11.6-29.2-17.5\"/><path fill=\"#5CC85C\" d=\"M383.3 231.6c-.2-.2-27.9 35.7-27.9 35.7-1.8-1.3-10-9.5-13.3-15l41.3-50.1 40.2 49.7c-3.9 6.5-11.4 13.6-13.2 15M382.6 85.3l-26.5 45h53z\"/><ellipse transform=\"rotate(-82.3 291.431 225.686)\" fill=\"#F7A226\" cx=\"291.4\" cy=\"225.7\" rx=\"48.7\" ry=\"15.7\"/><ellipse transform=\"rotate(-68.099 303.087 164.67)\" fill=\"#DDC7AB\" cx=\"303.1\" cy=\"164.7\" rx=\"11.7\" ry=\"7.2\"/><ellipse transform=\"rotate(-81.738 291.697 271.697)\" fill=\"#DDC7AB\" cx=\"291.7\" cy=\"271.7\" rx=\"11.4\" ry=\"3.3\"/><ellipse transform=\"matrix(.9986 -.05353 .05353 .9986 -13.992 16.424)\" fill=\"#DDC7AB\" cx=\"299.6\" cy=\"269.4\" rx=\"3.3\" ry=\"11\"/><ellipse transform=\"rotate(-21.518 314.54 201.06)\" fill=\"#DDC7AB\" cx=\"314.5\" cy=\"201.1\" rx=\"4.1\" ry=\"13.7\"/><ellipse transform=\"rotate(-21.518 317.511 178.077)\" fill=\"#DDC7AB\" cx=\"317.5\" cy=\"178.1\" rx=\"13.7\" ry=\"4.1\"/><ellipse transform=\"rotate(-7.7 473.781 225.857)\" fill=\"#F7A226\" cx=\"473.6\" cy=\"225.9\" rx=\"15.7\" ry=\"48.7\"/><ellipse transform=\"rotate(-21.901 462.057 164.866)\" fill=\"#DDC7AB\" cx=\"462\" cy=\"164.9\" rx=\"7.2\" ry=\"11.7\"/><ellipse transform=\"rotate(-8.27 473.27 271.908)\" fill=\"#DDC7AB\" cx=\"473.4\" cy=\"271.9\" rx=\"3.3\" ry=\"11.4\"/><ellipse transform=\"matrix(.05353 -.9986 .9986 .05353 171.34 719.998)\" fill=\"#DDC7AB\" cx=\"465.5\" cy=\"269.6\" rx=\"11\" ry=\"3.3\"/><ellipse transform=\"rotate(-68.482 450.552 201.247)\" fill=\"#DDC7AB\" cx=\"450.6\" cy=\"201.2\" rx=\"13.7\" ry=\"4.1\"/><ellipse transform=\"rotate(-68.482 447.58 178.265)\" fill=\"#DDC7AB\" cx=\"447.6\" cy=\"178.3\" rx=\"4.1\" ry=\"13.7\"/><path fill=\"#B0C6CC\" d=\"M373.3 130.3 356.1 155l17.8 26.1H396l4.7-25.4-5.4-25.4z\"/><path fill=\"#FFF\" d=\"M256 0v117.4h-46.1l46.1 30.7v22.6h-22.6L160 121.8v48.9H96v-48.9l-73.4 48.9H0v-22.6l46.1-30.7H0v-64h46.1L0 22.7V0h22.6L96 48.9V0h64v48.9L233.4 0z\"/><path fill=\"#D80027\" d=\"M144 0h-32v69.4H0v32h112v69.3h32v-69.3h112v-32H144z\"/><path fill=\"#2E52B2\" d=\"M256 22.7v30.7h-46.1z\"/><path fill=\"#D80027\" d=\"M0 170.7v-11l62.5-42.3h22.6L7.3 170.7zM7.3.1l77.8 53.2H62.5L0 11.1V.1zM256 .1v11l-62.5 42.3h-22.6L248.7.1zM248.7 170.7l-77.8-53.3h22.6l62.5 42.3v11z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AC.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 513 342\"><path fill=\"#0052B4\" d=\"M0 0h513v342H0z\"/><path fill=\"#FFF\" d=\"M440.1 181.1c-.1 39.2-6.4 81.4-57.4 101.5-51.1-20.1-57.3-62.3-57.4-101.5h114.8z\"/><path fill=\"#29DBFF\" d=\"M439.6 197.7c-2.8 34.9-12.4 67.4-57 85-44.4-17.6-54.5-51.2-56.9-84.9\"/><path fill=\"#FFF\" d=\"M437.8 214.1c-3.2 24.3-16.7 53.5-55.1 68.6-38.4-15.1-50.5-42.5-55.1-68.4\"/><path fill=\"#29DBFF\" d=\"M434.2 230.3c-5.7 17.7-19.3 39.4-51.3 52.8-32-12.6-45.2-33.8-51.4-53\"/><path fill=\"#FFF\" d=\"M426.7 246.9c-6.5 11.3-17.7 25.4-44 35.9-27.5-11.5-37.4-25.3-44-36.1\"/><path fill=\"#29DBFF\" d=\"M412.4 265.1c-8.1 7.2-12 11.2-29.6 17.9-20.1-7.9-22.6-11.6-29.2-17.5\"/><path fill=\"#5CC85C\" d=\"M383.3 231.6c-.2-.2-27.9 35.7-27.9 35.7-1.8-1.3-10-9.5-13.3-15l41.3-50.1 40.2 49.7c-3.9 6.5-11.4 13.6-13.2 15M382.6 85.3l-26.5 45h53z\"/><ellipse transform=\"rotate(-82.3 291.431 225.686)\" fill=\"#F7A226\" cx=\"291.4\" cy=\"225.7\" rx=\"48.7\" ry=\"15.7\"/><ellipse transform=\"rotate(-68.099 303.087 164.67)\" fill=\"#DDC7AB\" cx=\"303.1\" cy=\"164.7\" rx=\"11.7\" ry=\"7.2\"/><ellipse transform=\"rotate(-81.738 291.697 271.697)\" fill=\"#DDC7AB\" cx=\"291.7\" cy=\"271.7\" rx=\"11.4\" ry=\"3.3\"/><ellipse transform=\"matrix(.9986 -.05353 .05353 .9986 -13.992 16.424)\" fill=\"#DDC7AB\" cx=\"299.6\" cy=\"269.4\" rx=\"3.3\" ry=\"11\"/><ellipse transform=\"rotate(-21.518 314.54 201.06)\" fill=\"#DDC7AB\" cx=\"314.5\" cy=\"201.1\" rx=\"4.1\" ry=\"13.7\"/><ellipse transform=\"rotate(-21.518 317.511 178.077)\" fill=\"#DDC7AB\" cx=\"317.5\" cy=\"178.1\" rx=\"13.7\" ry=\"4.1\"/><ellipse transform=\"rotate(-7.7 473.781 225.857)\" fill=\"#F7A226\" cx=\"473.6\" cy=\"225.9\" rx=\"15.7\" ry=\"48.7\"/><ellipse transform=\"rotate(-21.901 462.057 164.866)\" fill=\"#DDC7AB\" cx=\"462\" cy=\"164.9\" rx=\"7.2\" ry=\"11.7\"/><ellipse transform=\"rotate(-8.27 473.27 271.908)\" fill=\"#DDC7AB\" cx=\"473.4\" cy=\"271.9\" rx=\"3.3\" ry=\"11.4\"/><ellipse transform=\"matrix(.05353 -.9986 .9986 .05353 171.34 719.998)\" fill=\"#DDC7AB\" cx=\"465.5\" cy=\"269.6\" rx=\"11\" ry=\"3.3\"/><ellipse transform=\"rotate(-68.482 450.552 201.247)\" fill=\"#DDC7AB\" cx=\"450.6\" cy=\"201.2\" rx=\"13.7\" ry=\"4.1\"/><ellipse transform=\"rotate(-68.482 447.58 178.265)\" fill=\"#DDC7AB\" cx=\"447.6\" cy=\"178.3\" rx=\"4.1\" ry=\"13.7\"/><path fill=\"#B0C6CC\" d=\"M373.3 130.3 356.1 155l17.8 26.1H396l4.7-25.4-5.4-25.4z\"/><path fill=\"#FFF\" d=\"M256 0v117.4h-46.1l46.1 30.7v22.6h-22.6L160 121.8v48.9H96v-48.9l-73.4 48.9H0v-22.6l46.1-30.7H0v-64h46.1L0 22.7V0h22.6L96 48.9V0h64v48.9L233.4 0z\"/><path fill=\"#D80027\" d=\"M144 0h-32v69.4H0v32h112v69.3h32v-69.3h112v-32H144z\"/><path fill=\"#2E52B2\" d=\"M256 22.7v30.7h-46.1z\"/><path fill=\"#D80027\" d=\"M0 170.7v-11l62.5-42.3h22.6L7.3 170.7zM7.3.1l77.8 53.2H62.5L0 11.1V.1zM256 .1v11l-62.5 42.3h-22.6L248.7.1zM248.7 170.7l-77.8-53.3h22.6l62.5 42.3v11z\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/AC.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\AC.svg");
    }
}
