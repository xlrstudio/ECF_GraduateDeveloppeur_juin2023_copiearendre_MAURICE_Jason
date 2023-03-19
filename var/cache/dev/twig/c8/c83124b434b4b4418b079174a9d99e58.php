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

/* easycorp/easyadmin-bundle/src/Resources/skeleton/crud_controller.tpl */
class __TwigTemplate_1281f453a0e04e3fc425701ac4440e13 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/skeleton/crud_controller.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/skeleton/crud_controller.tpl"));

        // line 1
        echo "<?= \"<?php\\n\"; ?>

namespace <?= \$namespace; ?>;

use <?= \$entity_fqcn; ?>;
use EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AbstractCrudController;

class <?= \$class_name; ?> extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return <?= \$entity_class_name; ?>::class;
    }

    /*
    public function configureFields(string \$pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/skeleton/crud_controller.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\"; ?>

namespace <?= \$namespace; ?>;

use <?= \$entity_fqcn; ?>;
use EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AbstractCrudController;

class <?= \$class_name; ?> extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return <?= \$entity_class_name; ?>::class;
    }

    /*
    public function configureFields(string \$pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
", "easycorp/easyadmin-bundle/src/Resources/skeleton/crud_controller.tpl", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\skeleton\\crud_controller.tpl");
    }
}
