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

/* easycorp/easyadmin-bundle/src/Field/Configurator/CollectionConfigurator.php */
class __TwigTemplate_964453a40afdfa1f3b3f00421fc8e40c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/CollectionConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/CollectionConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use Doctrine\\ORM\\PersistentCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Action;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\CollectionField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CollectionConfigurator implements FieldConfiguratorInterface
{
    private RequestStack \$requestStack;
    private EntityFactory \$entityFactory;
    private ControllerFactory \$controllerFactory;

    public function __construct(RequestStack \$requestStack, EntityFactory \$entityFactory, ControllerFactory \$controllerFactory)
    {
        \$this->requestStack = \$requestStack;
        \$this->entityFactory = \$entityFactory;
        \$this->controllerFactory = \$controllerFactory;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return CollectionField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        if (null !== \$entryTypeFqcn = \$field->getCustomOptions()->get(CollectionField::OPTION_ENTRY_TYPE)) {
            \$field->setFormTypeOption('entry_type', \$entryTypeFqcn);
        }

        \$autocompletableFormTypes = [CountryType::class, CurrencyType::class, LanguageType::class, LocaleType::class, TimezoneType::class];
        if (\\in_array(\$entryTypeFqcn, \$autocompletableFormTypes, true)) {
            \$field->setFormTypeOption('entry_options.attr.data-ea-widget', 'ea-autocomplete');
        }

        // the contents of this field are a collection of other fields, so it cannot be sorted
        \$field->setSortable(false);

        \$field->setFormTypeOptionIfNotSet('allow_add', \$field->getCustomOptions()->get(CollectionField::OPTION_ALLOW_ADD));
        \$field->setFormTypeOptionIfNotSet('allow_delete', \$field->getCustomOptions()->get(CollectionField::OPTION_ALLOW_DELETE));
        \$field->setFormTypeOptionIfNotSet('by_reference', false);
        \$field->setFormTypeOptionIfNotSet('delete_empty', true);

        // TODO: check why this label (hidden by default) is not working properly
        // (generated values are always the same for all elements)
        \$field->setFormTypeOptionIfNotSet('entry_options.label', \$field->getCustomOptions()->get(CollectionField::OPTION_SHOW_ENTRY_LABEL));

        // collection items range from a simple <input text> to a complex multi-field form
        // the 'entryIsComplex' setting tells if the collection item is so complex that needs a special
        // rendering not applied to simple collection items
        if (null === \$field->getCustomOption(CollectionField::OPTION_ENTRY_IS_COMPLEX)) {
            \$definesEntryType = null !== \$entryTypeFqcn = \$field->getCustomOption(CollectionField::OPTION_ENTRY_TYPE);
            \$isSymfonyCoreFormType = null !== u(\$entryTypeFqcn ?? '')->indexOf('Symfony\\Component\\Form\\Extension\\Core\\Type');
            \$isComplexEntry = \$definesEntryType && !\$isSymfonyCoreFormType;

            \$field->setCustomOption(CollectionField::OPTION_ENTRY_IS_COMPLEX, \$isComplexEntry);
        }

        \$field->setFormattedValue(\$this->formatCollection(\$field, \$context));

        if (true === \$field->getCustomOption(CollectionField::OPTION_ENTRY_USES_CRUD_FORM)) {
            if (!\$entityDto->isAssociation(\$field->getProperty())) {
                throw new \\RuntimeException(sprintf('The \"%s\" collection field of \"%s\" cannot use the \"useEntryCrudForm()\" method because it is not a Doctrine association.', \$field->getProperty(), \$context->getCrud()?->getControllerFqcn()));
            }

            if (null !== \$field->getCustomOptions()->get(CollectionField::OPTION_ENTRY_TYPE)) {
                throw new \\RuntimeException(sprintf('The \"%s\" collection field of \"%s\" can render its entries using a Symfony Form (via the \"setEntryType()\" method) or using an EasyAdmin CRUD Form (via the \"useEntryCrudForm()\" method) but you cannot use both methods at the same time. Remove one of those two methods.', \$field->getProperty(), \$context->getCrud()?->getControllerFqcn()));
            }

            \$field->setFormTypeOption('entry_type', CrudFormType::class);

            \$targetEntityFqcn = \$field->getDoctrineMetadata()->get('targetEntity');
            \$targetCrudControllerFqcn = \$field->getCustomOption(CollectionField::OPTION_ENTRY_CRUD_CONTROLLER_FQCN)
                ?? \$context->getCrudControllers()->findCrudFqcnByEntityFqcn(\$targetEntityFqcn);

            if (null === \$targetCrudControllerFqcn) {
                throw new \\RuntimeException(sprintf('The \"%s\" collection field of \"%s\" wants to render its entries using an EasyAdmin CRUD form. However, no CRUD form was found related to this field. You can either create a CRUD controller for the entity \"%s\" or pass the CRUD controller to use as the first argument of the \"useEntryCrudForm()\" method.', \$field->getProperty(), \$context->getCrud()?->getControllerFqcn(), \$targetEntityFqcn));
            }

            \$crudEditPageName = \$field->getCustomOption(CollectionField::OPTION_ENTRY_CRUD_EDIT_PAGE_NAME) ?? Crud::PAGE_EDIT;
            \$editEntityDto = \$this->createEntityDto(\$targetEntityFqcn, \$targetCrudControllerFqcn, Action::EDIT, \$crudEditPageName);
            \$field->setFormTypeOption('entry_options.entityDto', \$editEntityDto);

            \$crudNewPageName = \$field->getCustomOption(CollectionField::OPTION_ENTRY_CRUD_NEW_PAGE_NAME) ?? Crud::PAGE_NEW;
            \$newEntityDto = \$this->createEntityDto(\$targetEntityFqcn, \$targetCrudControllerFqcn, Action::NEW, \$crudNewPageName);

            try {
                \$field->setFormTypeOption('prototype_options.entityDto', \$newEntityDto);
            } catch (UndefinedOptionsException \$exception) {
                throw new \\RuntimeException(sprintf('The \"%s\" collection field of \"%s\" uses the \"useEntryCrudForm()\" method, which requires Symfony 6.1 or newer to work. Upgrade your Symfony version or use instead the \"setEntryType()\" method to render the collection entries using a Symfony form.', \$field->getProperty(), \$context->getCrud()?->getControllerFqcn()), 0, \$exception);
            }
        }
    }

    private function formatCollection(FieldDto \$field, AdminContext \$context)
    {
        \$doctrineMetadata = \$field->getDoctrineMetadata();
        if ('array' !== \$doctrineMetadata->get('type') && !\$field->getValue() instanceof PersistentCollection) {
            return \$this->countNumElements(\$field->getValue());
        }

        \$collectionItemsAsText = [];
        foreach (\$field->getValue() ?? [] as \$item) {
            if (!\\is_string(\$item) && !(\\is_object(\$item) && method_exists(\$item, '__toString'))) {
                return \$this->countNumElements(\$field->getValue());
            }

            \$collectionItemsAsText[] = (string) \$item;
        }

        \$isDetailAction = Action::DETAIL === \$context->getCrud()->getCurrentAction();

        return u(', ')->join(\$collectionItemsAsText)->truncate(\$isDetailAction ? 512 : 32, '…')->toString();
    }

    private function countNumElements(\$collection): int
    {
        if (null === \$collection) {
            return 0;
        }

        if (is_countable(\$collection)) {
            return \\count(\$collection);
        }

        if (\$collection instanceof \\Traversable) {
            return iterator_count(\$collection);
        }

        return 0;
    }

    private function createEntityDto(string \$targetEntityFqcn, string \$targetCrudControllerFqcn, string \$crudAction, string \$pageName): EntityDto
    {
        \$entityDto = \$this->entityFactory->create(\$targetEntityFqcn);

        \$crudController = \$this->controllerFactory->getCrudControllerInstance(
            \$targetCrudControllerFqcn,
            \$crudAction,
            \$this->requestStack->getMainRequest()
        );

        \$fields = \$crudController->configureFields(\$pageName);

        \$this->entityFactory->processFields(\$entityDto, FieldCollection::new(\$fields));

        return \$entityDto;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/CollectionConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use Doctrine\\ORM\\PersistentCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Action;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\CollectionField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CollectionConfigurator implements FieldConfiguratorInterface
{
    private RequestStack \$requestStack;
    private EntityFactory \$entityFactory;
    private ControllerFactory \$controllerFactory;

    public function __construct(RequestStack \$requestStack, EntityFactory \$entityFactory, ControllerFactory \$controllerFactory)
    {
        \$this->requestStack = \$requestStack;
        \$this->entityFactory = \$entityFactory;
        \$this->controllerFactory = \$controllerFactory;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return CollectionField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        if (null !== \$entryTypeFqcn = \$field->getCustomOptions()->get(CollectionField::OPTION_ENTRY_TYPE)) {
            \$field->setFormTypeOption('entry_type', \$entryTypeFqcn);
        }

        \$autocompletableFormTypes = [CountryType::class, CurrencyType::class, LanguageType::class, LocaleType::class, TimezoneType::class];
        if (\\in_array(\$entryTypeFqcn, \$autocompletableFormTypes, true)) {
            \$field->setFormTypeOption('entry_options.attr.data-ea-widget', 'ea-autocomplete');
        }

        // the contents of this field are a collection of other fields, so it cannot be sorted
        \$field->setSortable(false);

        \$field->setFormTypeOptionIfNotSet('allow_add', \$field->getCustomOptions()->get(CollectionField::OPTION_ALLOW_ADD));
        \$field->setFormTypeOptionIfNotSet('allow_delete', \$field->getCustomOptions()->get(CollectionField::OPTION_ALLOW_DELETE));
        \$field->setFormTypeOptionIfNotSet('by_reference', false);
        \$field->setFormTypeOptionIfNotSet('delete_empty', true);

        // TODO: check why this label (hidden by default) is not working properly
        // (generated values are always the same for all elements)
        \$field->setFormTypeOptionIfNotSet('entry_options.label', \$field->getCustomOptions()->get(CollectionField::OPTION_SHOW_ENTRY_LABEL));

        // collection items range from a simple <input text> to a complex multi-field form
        // the 'entryIsComplex' setting tells if the collection item is so complex that needs a special
        // rendering not applied to simple collection items
        if (null === \$field->getCustomOption(CollectionField::OPTION_ENTRY_IS_COMPLEX)) {
            \$definesEntryType = null !== \$entryTypeFqcn = \$field->getCustomOption(CollectionField::OPTION_ENTRY_TYPE);
            \$isSymfonyCoreFormType = null !== u(\$entryTypeFqcn ?? '')->indexOf('Symfony\\Component\\Form\\Extension\\Core\\Type');
            \$isComplexEntry = \$definesEntryType && !\$isSymfonyCoreFormType;

            \$field->setCustomOption(CollectionField::OPTION_ENTRY_IS_COMPLEX, \$isComplexEntry);
        }

        \$field->setFormattedValue(\$this->formatCollection(\$field, \$context));

        if (true === \$field->getCustomOption(CollectionField::OPTION_ENTRY_USES_CRUD_FORM)) {
            if (!\$entityDto->isAssociation(\$field->getProperty())) {
                throw new \\RuntimeException(sprintf('The \"%s\" collection field of \"%s\" cannot use the \"useEntryCrudForm()\" method because it is not a Doctrine association.', \$field->getProperty(), \$context->getCrud()?->getControllerFqcn()));
            }

            if (null !== \$field->getCustomOptions()->get(CollectionField::OPTION_ENTRY_TYPE)) {
                throw new \\RuntimeException(sprintf('The \"%s\" collection field of \"%s\" can render its entries using a Symfony Form (via the \"setEntryType()\" method) or using an EasyAdmin CRUD Form (via the \"useEntryCrudForm()\" method) but you cannot use both methods at the same time. Remove one of those two methods.', \$field->getProperty(), \$context->getCrud()?->getControllerFqcn()));
            }

            \$field->setFormTypeOption('entry_type', CrudFormType::class);

            \$targetEntityFqcn = \$field->getDoctrineMetadata()->get('targetEntity');
            \$targetCrudControllerFqcn = \$field->getCustomOption(CollectionField::OPTION_ENTRY_CRUD_CONTROLLER_FQCN)
                ?? \$context->getCrudControllers()->findCrudFqcnByEntityFqcn(\$targetEntityFqcn);

            if (null === \$targetCrudControllerFqcn) {
                throw new \\RuntimeException(sprintf('The \"%s\" collection field of \"%s\" wants to render its entries using an EasyAdmin CRUD form. However, no CRUD form was found related to this field. You can either create a CRUD controller for the entity \"%s\" or pass the CRUD controller to use as the first argument of the \"useEntryCrudForm()\" method.', \$field->getProperty(), \$context->getCrud()?->getControllerFqcn(), \$targetEntityFqcn));
            }

            \$crudEditPageName = \$field->getCustomOption(CollectionField::OPTION_ENTRY_CRUD_EDIT_PAGE_NAME) ?? Crud::PAGE_EDIT;
            \$editEntityDto = \$this->createEntityDto(\$targetEntityFqcn, \$targetCrudControllerFqcn, Action::EDIT, \$crudEditPageName);
            \$field->setFormTypeOption('entry_options.entityDto', \$editEntityDto);

            \$crudNewPageName = \$field->getCustomOption(CollectionField::OPTION_ENTRY_CRUD_NEW_PAGE_NAME) ?? Crud::PAGE_NEW;
            \$newEntityDto = \$this->createEntityDto(\$targetEntityFqcn, \$targetCrudControllerFqcn, Action::NEW, \$crudNewPageName);

            try {
                \$field->setFormTypeOption('prototype_options.entityDto', \$newEntityDto);
            } catch (UndefinedOptionsException \$exception) {
                throw new \\RuntimeException(sprintf('The \"%s\" collection field of \"%s\" uses the \"useEntryCrudForm()\" method, which requires Symfony 6.1 or newer to work. Upgrade your Symfony version or use instead the \"setEntryType()\" method to render the collection entries using a Symfony form.', \$field->getProperty(), \$context->getCrud()?->getControllerFqcn()), 0, \$exception);
            }
        }
    }

    private function formatCollection(FieldDto \$field, AdminContext \$context)
    {
        \$doctrineMetadata = \$field->getDoctrineMetadata();
        if ('array' !== \$doctrineMetadata->get('type') && !\$field->getValue() instanceof PersistentCollection) {
            return \$this->countNumElements(\$field->getValue());
        }

        \$collectionItemsAsText = [];
        foreach (\$field->getValue() ?? [] as \$item) {
            if (!\\is_string(\$item) && !(\\is_object(\$item) && method_exists(\$item, '__toString'))) {
                return \$this->countNumElements(\$field->getValue());
            }

            \$collectionItemsAsText[] = (string) \$item;
        }

        \$isDetailAction = Action::DETAIL === \$context->getCrud()->getCurrentAction();

        return u(', ')->join(\$collectionItemsAsText)->truncate(\$isDetailAction ? 512 : 32, '…')->toString();
    }

    private function countNumElements(\$collection): int
    {
        if (null === \$collection) {
            return 0;
        }

        if (is_countable(\$collection)) {
            return \\count(\$collection);
        }

        if (\$collection instanceof \\Traversable) {
            return iterator_count(\$collection);
        }

        return 0;
    }

    private function createEntityDto(string \$targetEntityFqcn, string \$targetCrudControllerFqcn, string \$crudAction, string \$pageName): EntityDto
    {
        \$entityDto = \$this->entityFactory->create(\$targetEntityFqcn);

        \$crudController = \$this->controllerFactory->getCrudControllerInstance(
            \$targetCrudControllerFqcn,
            \$crudAction,
            \$this->requestStack->getMainRequest()
        );

        \$fields = \$crudController->configureFields(\$pageName);

        \$this->entityFactory->processFields(\$entityDto, FieldCollection::new(\$fields));

        return \$entityDto;
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/CollectionConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\CollectionConfigurator.php");
    }
}
