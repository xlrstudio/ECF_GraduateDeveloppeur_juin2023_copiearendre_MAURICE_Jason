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

/* easycorp/easyadmin-bundle/src/Resources/public/images/flags/BL.svg */
class __TwigTemplate_f07d958621d5668fcf09a9228a8aae1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BL.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BL.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.33\"><path fill=\"#FFF\" d=\"M0 0h512v341.33H0z\"/><path fill=\"#E6BC00\" d=\"M157.31 199.76s-9.04 43.93-19.31 40.39c-10.62-3.54-17.53-18.76-17.53-18.76l-14.52 21.24s38.18 8.48 41.01 5.47c1.22-1.14 8.21-15.1 10.34-26.05v-22.29zm-56.13 60.57s-2.48 20.18-1.06 22.66c1.24 2.3 39.48 11.33 39.48 11.33s-24.96 16.46-29.74 20.54L91.8 284.94l-.71-24.61h10.09zM112.51 94.64s39.65 41.6 40.36 45.5c.71 3.72-4.25 3.19-4.25 3.19s-44.79-37.53-49.92-41.07c-5.31-3.55 13.81-7.62 13.81-7.62z\"/><path fill=\"#ADADAD\" d=\"M99.41 104.73s16.99-.71 16.64-11.51c-.35-10.62-11.15-14.87-19.12-12.39-7.97 2.3-23.01 13.45-13.63 35.05 9.38 21.42 23.37 29.39 26.2 47.8 0 0-5.46 9.86-19.12.35-16.9-11.77-6.2-38.24-10.44-44.96-4.25-7.08-40.95-38.92-40.95-38.92s-30.24 39.37-18 74.92c16.95 49.21 51.74 31.98 64.61 36.76 0 0-42.13 61.96-49.57 67.09 0 0 24.08 8.32 47.8-18.76 0 0 5.84 9.74 7.08 20.18h10.27c4.78-26.2 51.51-64.26 49.92-82.32-1.77-21.25-49.21-49.39-51.69-73.29z\"/><path fill=\"#E6BC00\" d=\"M359.17 201.27s8.96 42.43 19.23 38.89c10.62-3.54 17.53-18.76 17.53-18.76l14.52 21.24s-37 8.48-39.83 5.47c-1.21-1.14-9.32-13.79-11.52-24.66l.07-22.18zm56.05 59.06s2.48 20.18 1.06 22.66c-1.24 2.3-39.48 11.33-39.48 11.33s24.96 16.46 29.74 20.54l18.06-29.92.71-24.61h-10.09zM403.89 94.64s-39.65 41.6-40.36 45.5c-.71 3.72 4.25 3.19 4.25 3.19s44.79-37.53 49.92-41.07c5.14-3.55-13.81-7.62-13.81-7.62z\"/><path fill=\"#125ECC\" d=\"M157.31 87.06H359.1v145.46c0 16.06-9.69 21.39-21.91 31.85l-45.92 39.41c-18.25 15.62-47.91 15.57-66.07 0l-46.01-39.43c-12.08-10.35-21.88-15.71-21.88-31.82V87.06z\"/><path fill=\"#FFE600\" d=\"M200.55 147.71c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65-3c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65 3c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zM214.96 274.43c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41c.01 7.96-6.45 14.41-14.41 14.41zm43.24 14.42c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41c0 7.95-6.45 14.41-14.41 14.41zm43.24-14.42c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41z\"/><path fill=\"#D60537\" d=\"M157.31 175.36H359.1v57.65H157.31v-57.65z\"/><path fill=\"#EACE00\" d=\"M142.9 43.82s57.65-14.41 115.31-14.41 115.31 14.41 115.31 14.41l-14.41 57.65s-50.45-14.41-100.89-14.41-100.89 14.41-100.89 14.41L142.9 43.82z\"/><path fill=\"#7A6920\" d=\"M258.2 72.65c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65 5c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm-115.3 0c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41z\"/><path fill=\"#ADADAD\" d=\"M365.08 178.02c-1.59 18.06 45.14 56.12 49.92 82.32h10.27c1.24-10.44 7.08-20.18 7.08-20.18 23.72 27.09 47.8 18.76 47.8 18.76-7.44-5.13-49.57-67.09-49.57-67.09 12.88-4.78 47.67 12.45 64.61-36.76 12.24-35.55-18-74.92-18-74.92s-36.7 31.84-40.95 38.92c-4.25 6.73 6.46 33.2-10.44 44.96-13.66 9.51-19.12-.35-19.12-.35 2.83-18.41 16.82-26.38 26.2-47.8 9.38-21.6-5.66-32.75-13.63-35.05-7.97-2.48-18.76 1.77-19.12 12.39-.35 10.8 16.64 11.51 16.64 11.51-2.48 23.9-49.92 52.04-51.69 73.29z\"/><circle fill=\"#FFF\" cx=\"258.2\" cy=\"204.19\" r=\"16.93\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BL.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 341.33\"><path fill=\"#FFF\" d=\"M0 0h512v341.33H0z\"/><path fill=\"#E6BC00\" d=\"M157.31 199.76s-9.04 43.93-19.31 40.39c-10.62-3.54-17.53-18.76-17.53-18.76l-14.52 21.24s38.18 8.48 41.01 5.47c1.22-1.14 8.21-15.1 10.34-26.05v-22.29zm-56.13 60.57s-2.48 20.18-1.06 22.66c1.24 2.3 39.48 11.33 39.48 11.33s-24.96 16.46-29.74 20.54L91.8 284.94l-.71-24.61h10.09zM112.51 94.64s39.65 41.6 40.36 45.5c.71 3.72-4.25 3.19-4.25 3.19s-44.79-37.53-49.92-41.07c-5.31-3.55 13.81-7.62 13.81-7.62z\"/><path fill=\"#ADADAD\" d=\"M99.41 104.73s16.99-.71 16.64-11.51c-.35-10.62-11.15-14.87-19.12-12.39-7.97 2.3-23.01 13.45-13.63 35.05 9.38 21.42 23.37 29.39 26.2 47.8 0 0-5.46 9.86-19.12.35-16.9-11.77-6.2-38.24-10.44-44.96-4.25-7.08-40.95-38.92-40.95-38.92s-30.24 39.37-18 74.92c16.95 49.21 51.74 31.98 64.61 36.76 0 0-42.13 61.96-49.57 67.09 0 0 24.08 8.32 47.8-18.76 0 0 5.84 9.74 7.08 20.18h10.27c4.78-26.2 51.51-64.26 49.92-82.32-1.77-21.25-49.21-49.39-51.69-73.29z\"/><path fill=\"#E6BC00\" d=\"M359.17 201.27s8.96 42.43 19.23 38.89c10.62-3.54 17.53-18.76 17.53-18.76l14.52 21.24s-37 8.48-39.83 5.47c-1.21-1.14-9.32-13.79-11.52-24.66l.07-22.18zm56.05 59.06s2.48 20.18 1.06 22.66c-1.24 2.3-39.48 11.33-39.48 11.33s24.96 16.46 29.74 20.54l18.06-29.92.71-24.61h-10.09zM403.89 94.64s-39.65 41.6-40.36 45.5c-.71 3.72 4.25 3.19 4.25 3.19s44.79-37.53 49.92-41.07c5.14-3.55-13.81-7.62-13.81-7.62z\"/><path fill=\"#125ECC\" d=\"M157.31 87.06H359.1v145.46c0 16.06-9.69 21.39-21.91 31.85l-45.92 39.41c-18.25 15.62-47.91 15.57-66.07 0l-46.01-39.43c-12.08-10.35-21.88-15.71-21.88-31.82V87.06z\"/><path fill=\"#FFE600\" d=\"M200.55 147.71c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65-3c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65 3c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zM214.96 274.43c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41c.01 7.96-6.45 14.41-14.41 14.41zm43.24 14.42c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41c0 7.95-6.45 14.41-14.41 14.41zm43.24-14.42c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41z\"/><path fill=\"#D60537\" d=\"M157.31 175.36H359.1v57.65H157.31v-57.65z\"/><path fill=\"#EACE00\" d=\"M142.9 43.82s57.65-14.41 115.31-14.41 115.31 14.41 115.31 14.41l-14.41 57.65s-50.45-14.41-100.89-14.41-100.89 14.41-100.89 14.41L142.9 43.82z\"/><path fill=\"#7A6920\" d=\"M258.2 72.65c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65 5c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm-115.3 0c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41z\"/><path fill=\"#ADADAD\" d=\"M365.08 178.02c-1.59 18.06 45.14 56.12 49.92 82.32h10.27c1.24-10.44 7.08-20.18 7.08-20.18 23.72 27.09 47.8 18.76 47.8 18.76-7.44-5.13-49.57-67.09-49.57-67.09 12.88-4.78 47.67 12.45 64.61-36.76 12.24-35.55-18-74.92-18-74.92s-36.7 31.84-40.95 38.92c-4.25 6.73 6.46 33.2-10.44 44.96-13.66 9.51-19.12-.35-19.12-.35 2.83-18.41 16.82-26.38 26.2-47.8 9.38-21.6-5.66-32.75-13.63-35.05-7.97-2.48-18.76 1.77-19.12 12.39-.35 10.8 16.64 11.51 16.64 11.51-2.48 23.9-49.92 52.04-51.69 73.29z\"/><circle fill=\"#FFF\" cx=\"258.2\" cy=\"204.19\" r=\"16.93\"/></svg>", "easycorp/easyadmin-bundle/src/Resources/public/images/flags/BL.svg", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\public\\images\\flags\\BL.svg");
    }
}
