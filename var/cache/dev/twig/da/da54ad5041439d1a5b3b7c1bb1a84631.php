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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/HK.svg */
class __TwigTemplate_17763a80d7426dd6225574d8d4145428 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/HK.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/HK.svg"));

        // line 1
        echo "<svg viewBox=\"0 0.5 21 14\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><path fill=\"#FFF\" d=\"M0 0h21v15H0z\"/><path fill=\"#ee1c25\" d=\"M0 0h21v15H0z\"/><path d=\"M12 7.19c-.798-.5-1 .409-1 0 0-.828.895-1.5 2-1.5s2 .672 2 1.5c-.949 0-1.044.5-1.5.5-.56 0-.702 0-1.5-.5zM13.25 7a.25.25 0 1 0 0-.5.25.25 0 0 0 0 .5zm-1.81 1.962c.228-.913-.698-.824-.31-.95.788-.257 1.703.387 2.045 1.438.341 1.05-.021 2.11-.809 2.366-.293-.903-.798-.838-.939-1.272-.173-.533-.217-.668.012-1.582zm.566 1.13a.25.25 0 1 0 .476-.154.25.25 0 0 0-.476.154zM9.58 8.977c.94-.065.57-.919.81-.588.486.67.157 1.74-.737 2.389-.894.65-2.013.632-2.5-.038.768-.558.55-1.018.92-1.286.453-.33.568-.413 1.507-.477zm-.899.888a.25.25 0 1 0 .294.405.25.25 0 0 0-.294-.405zm.312-2.652c.351.874 1.049.258.809.588-.487.67-1.606.687-2.5.038-.894-.65-1.223-1.719-.736-2.39.767.559 1.138.21 1.507.478.453.33.568.413.92 1.286zm-1.124-.58a.25.25 0 1 0-.293.404.25.25 0 0 0 .293-.404zm2.619-.524c-.722.605.08 1.078-.309.951-.788-.256-1.15-1.315-.809-2.365.342-1.05 1.257-1.695 2.045-1.439-.293.903.153 1.147.012 1.581-.173.533-.217.668-.939 1.272zm.205-1.247a.25.25 0 1 0-.475-.155.25.25 0 0 0 .475.155z\" fill=\"#FFF\"/></g></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/HK.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg viewBox=\"0 0.5 21 14\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><path fill=\"#FFF\" d=\"M0 0h21v15H0z\"/><path fill=\"#ee1c25\" d=\"M0 0h21v15H0z\"/><path d=\"M12 7.19c-.798-.5-1 .409-1 0 0-.828.895-1.5 2-1.5s2 .672 2 1.5c-.949 0-1.044.5-1.5.5-.56 0-.702 0-1.5-.5zM13.25 7a.25.25 0 1 0 0-.5.25.25 0 0 0 0 .5zm-1.81 1.962c.228-.913-.698-.824-.31-.95.788-.257 1.703.387 2.045 1.438.341 1.05-.021 2.11-.809 2.366-.293-.903-.798-.838-.939-1.272-.173-.533-.217-.668.012-1.582zm.566 1.13a.25.25 0 1 0 .476-.154.25.25 0 0 0-.476.154zM9.58 8.977c.94-.065.57-.919.81-.588.486.67.157 1.74-.737 2.389-.894.65-2.013.632-2.5-.038.768-.558.55-1.018.92-1.286.453-.33.568-.413 1.507-.477zm-.899.888a.25.25 0 1 0 .294.405.25.25 0 0 0-.294-.405zm.312-2.652c.351.874 1.049.258.809.588-.487.67-1.606.687-2.5.038-.894-.65-1.223-1.719-.736-2.39.767.559 1.138.21 1.507.478.453.33.568.413.92 1.286zm-1.124-.58a.25.25 0 1 0-.293.404.25.25 0 0 0 .293-.404zm2.619-.524c-.722.605.08 1.078-.309.951-.788-.256-1.15-1.315-.809-2.365.342-1.05 1.257-1.695 2.045-1.439-.293.903.153 1.147.012 1.581-.173.533-.217.668-.939 1.272zm.205-1.247a.25.25 0 1 0-.475-.155.25.25 0 0 0 .475.155z\" fill=\"#FFF\"/></g></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/HK.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\HK.svg");
    }
}
