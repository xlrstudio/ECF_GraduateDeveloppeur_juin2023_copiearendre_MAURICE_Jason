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

/* easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php */
class __TwigTemplate_646cd26a7ebf2b22ed61b364dbfe75f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface CrudControllerInterface
{
    public static function getEntityFqcn(): string;

    public function configureCrud(Crud \$crud): Crud;

    public function configureAssets(Assets \$assets): Assets;

    public function configureActions(Actions \$actions): Actions;

    public function configureFilters(Filters \$filters): Filters;

    /**
     * @return FieldInterface[]
     *
     * @psalm-return iterable<FieldInterface>
     */
    public function configureFields(string \$pageName): iterable;

    /** @return KeyValueStore|Response */
    public function index(AdminContext \$context);

    /** @return KeyValueStore|Response */
    public function detail(AdminContext \$context);

    /** @return KeyValueStore|Response */
    public function edit(AdminContext \$context);

    /** @return KeyValueStore|Response */
    public function new(AdminContext \$context);

    /** @return KeyValueStore|Response */
    public function delete(AdminContext \$context);

    public function autocomplete(AdminContext \$context): JsonResponse;

    public function configureResponseParameters(KeyValueStore \$responseParameters): KeyValueStore;

    public function createIndexQueryBuilder(SearchDto \$searchDto, EntityDto \$entityDto, FieldCollection \$fields, FilterCollection \$filters): QueryBuilder;

    public function createEntity(string \$entityFqcn);

    public function updateEntity(EntityManagerInterface \$entityManager, \$entityInstance): void;

    public function persistEntity(EntityManagerInterface \$entityManager, \$entityInstance): void;

    public function deleteEntity(EntityManagerInterface \$entityManager, \$entityInstance): void;

    public function createEditFormBuilder(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormBuilderInterface;

    public function createEditForm(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormInterface;

    public function createNewFormBuilder(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormBuilderInterface;

    public function createNewForm(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormInterface;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Controller;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
interface CrudControllerInterface
{
    public static function getEntityFqcn(): string;

    public function configureCrud(Crud \$crud): Crud;

    public function configureAssets(Assets \$assets): Assets;

    public function configureActions(Actions \$actions): Actions;

    public function configureFilters(Filters \$filters): Filters;

    /**
     * @return FieldInterface[]
     *
     * @psalm-return iterable<FieldInterface>
     */
    public function configureFields(string \$pageName): iterable;

    /** @return KeyValueStore|Response */
    public function index(AdminContext \$context);

    /** @return KeyValueStore|Response */
    public function detail(AdminContext \$context);

    /** @return KeyValueStore|Response */
    public function edit(AdminContext \$context);

    /** @return KeyValueStore|Response */
    public function new(AdminContext \$context);

    /** @return KeyValueStore|Response */
    public function delete(AdminContext \$context);

    public function autocomplete(AdminContext \$context): JsonResponse;

    public function configureResponseParameters(KeyValueStore \$responseParameters): KeyValueStore;

    public function createIndexQueryBuilder(SearchDto \$searchDto, EntityDto \$entityDto, FieldCollection \$fields, FilterCollection \$filters): QueryBuilder;

    public function createEntity(string \$entityFqcn);

    public function updateEntity(EntityManagerInterface \$entityManager, \$entityInstance): void;

    public function persistEntity(EntityManagerInterface \$entityManager, \$entityInstance): void;

    public function deleteEntity(EntityManagerInterface \$entityManager, \$entityInstance): void;

    public function createEditFormBuilder(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormBuilderInterface;

    public function createEditForm(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormInterface;

    public function createNewFormBuilder(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormBuilderInterface;

    public function createNewForm(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormInterface;
}
", "easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Contracts\\Controller\\CrudControllerInterface.php");
    }
}
