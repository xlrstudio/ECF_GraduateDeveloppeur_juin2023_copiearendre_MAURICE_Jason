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

/* easycorp/easyadmin-bundle/src/Factory/FormFactory.php */
class __TwigTemplate_8aface2b9ea65c7416c5b6ba6332ed53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/FormFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/FormFactory.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FormFactory
{
    private FormFactoryInterface \$symfonyFormFactory;

    public function __construct(FormFactoryInterface \$symfonyFormFactory)
    {
        \$this->symfonyFormFactory = \$symfonyFormFactory;
    }

    public function createEditFormBuilder(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormBuilderInterface
    {
        \$cssClass = sprintf('ea-%s-form', \$context->getCrud()->getCurrentAction());
        \$formOptions->set('attr.class', trim((\$formOptions->get('attr.class') ?? '').' '.\$cssClass));
        \$formOptions->set('attr.id', sprintf('edit-%s-form', \$entityDto->getName()));
        \$formOptions->set('entityDto', \$entityDto);
        \$formOptions->setIfNotSet('translation_domain', \$context->getI18n()->getTranslationDomain());

        return \$this->symfonyFormFactory->createNamedBuilder(\$entityDto->getName(), CrudFormType::class, \$entityDto->getInstance(), \$formOptions->all());
    }

    public function createEditForm(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormInterface
    {
        return \$this->createEditFormBuilder(\$entityDto, \$formOptions, \$context)->getForm();
    }

    public function createNewFormBuilder(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormBuilderInterface
    {
        \$cssClass = sprintf('ea-%s-form', \$context->getCrud()->getCurrentAction());
        \$formOptions->set('attr.class', trim((\$formOptions->get('attr.class') ?? '').' '.\$cssClass));
        \$formOptions->set('attr.id', sprintf('new-%s-form', \$entityDto->getName()));
        \$formOptions->set('entityDto', \$entityDto);
        \$formOptions->setIfNotSet('translation_domain', \$context->getI18n()->getTranslationDomain());

        return \$this->symfonyFormFactory->createNamedBuilder(\$entityDto->getName(), CrudFormType::class, \$entityDto->getInstance(), \$formOptions->all());
    }

    public function createNewForm(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormInterface
    {
        return \$this->createNewFormBuilder(\$entityDto, \$formOptions, \$context)->getForm();
    }

    public function createFiltersForm(FilterCollection \$filters, Request \$request): FormInterface
    {
        \$filtersForm = \$this->symfonyFormFactory->createNamed('filters', FiltersFormType::class, null, [
            'method' => 'GET',
            'action' => \$request->query->get(EA::REFERRER, ''),
            'ea_filters' => \$filters,
        ]);

        return \$filtersForm->handleRequest(\$request);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Factory/FormFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FormFactory
{
    private FormFactoryInterface \$symfonyFormFactory;

    public function __construct(FormFactoryInterface \$symfonyFormFactory)
    {
        \$this->symfonyFormFactory = \$symfonyFormFactory;
    }

    public function createEditFormBuilder(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormBuilderInterface
    {
        \$cssClass = sprintf('ea-%s-form', \$context->getCrud()->getCurrentAction());
        \$formOptions->set('attr.class', trim((\$formOptions->get('attr.class') ?? '').' '.\$cssClass));
        \$formOptions->set('attr.id', sprintf('edit-%s-form', \$entityDto->getName()));
        \$formOptions->set('entityDto', \$entityDto);
        \$formOptions->setIfNotSet('translation_domain', \$context->getI18n()->getTranslationDomain());

        return \$this->symfonyFormFactory->createNamedBuilder(\$entityDto->getName(), CrudFormType::class, \$entityDto->getInstance(), \$formOptions->all());
    }

    public function createEditForm(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormInterface
    {
        return \$this->createEditFormBuilder(\$entityDto, \$formOptions, \$context)->getForm();
    }

    public function createNewFormBuilder(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormBuilderInterface
    {
        \$cssClass = sprintf('ea-%s-form', \$context->getCrud()->getCurrentAction());
        \$formOptions->set('attr.class', trim((\$formOptions->get('attr.class') ?? '').' '.\$cssClass));
        \$formOptions->set('attr.id', sprintf('new-%s-form', \$entityDto->getName()));
        \$formOptions->set('entityDto', \$entityDto);
        \$formOptions->setIfNotSet('translation_domain', \$context->getI18n()->getTranslationDomain());

        return \$this->symfonyFormFactory->createNamedBuilder(\$entityDto->getName(), CrudFormType::class, \$entityDto->getInstance(), \$formOptions->all());
    }

    public function createNewForm(EntityDto \$entityDto, KeyValueStore \$formOptions, AdminContext \$context): FormInterface
    {
        return \$this->createNewFormBuilder(\$entityDto, \$formOptions, \$context)->getForm();
    }

    public function createFiltersForm(FilterCollection \$filters, Request \$request): FormInterface
    {
        \$filtersForm = \$this->symfonyFormFactory->createNamed('filters', FiltersFormType::class, null, [
            'method' => 'GET',
            'action' => \$request->query->get(EA::REFERRER, ''),
            'ea_filters' => \$filters,
        ]);

        return \$filtersForm->handleRequest(\$request);
    }
}
", "easycorp/easyadmin-bundle/src/Factory/FormFactory.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Factory\\FormFactory.php");
    }
}
