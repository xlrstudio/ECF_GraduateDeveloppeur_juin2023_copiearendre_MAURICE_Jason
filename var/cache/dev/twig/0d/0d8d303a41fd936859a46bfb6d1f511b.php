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

/* easycorp/easyadmin-bundle/src/Factory/EntityFactory.php */
class __TwigTemplate_cfbebf476762e1ec1e41f8719969640d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/EntityFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/EntityFactory.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use Doctrine\\Common\\Util\\ClassUtils;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\Persistence\\ManagerRegistry;
use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\ObjectManager;
use Doctrine\\Persistence\\Proxy;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\ActionCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Event\\AfterEntityBuiltEvent;
use EasyCorp\\Bundle\\EasyAdminBundle\\Exception\\EntityNotFoundException;
use EasyCorp\\Bundle\\EasyAdminBundle\\Security\\Permission;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EntityFactory
{
    private FieldFactory \$fieldFactory;
    private ActionFactory \$actionFactory;
    private AuthorizationCheckerInterface \$authorizationChecker;
    private ManagerRegistry \$doctrine;
    private EventDispatcherInterface \$eventDispatcher;

    public function __construct(FieldFactory \$fieldFactory, ActionFactory \$actionFactory, AuthorizationCheckerInterface \$authorizationChecker, ManagerRegistry \$doctrine, EventDispatcherInterface \$eventDispatcher)
    {
        \$this->fieldFactory = \$fieldFactory;
        \$this->actionFactory = \$actionFactory;
        \$this->authorizationChecker = \$authorizationChecker;
        \$this->doctrine = \$doctrine;
        \$this->eventDispatcher = \$eventDispatcher;
    }

    public function processFields(EntityDto \$entityDto, FieldCollection \$fields): void
    {
        \$this->fieldFactory->processFields(\$entityDto, \$fields);
    }

    public function processFieldsForAll(EntityCollection \$entities, FieldCollection \$fields): void
    {
        foreach (\$entities as \$entity) {
            \$this->processFields(\$entity, clone \$fields);
            \$entities->set(\$entity);
        }
    }

    public function processActions(EntityDto \$entityDto, ActionConfigDto \$actionConfigDto): void
    {
        \$this->actionFactory->processEntityActions(\$entityDto, \$actionConfigDto);
    }

    public function processActionsForAll(EntityCollection \$entities, ActionConfigDto \$actionConfigDto): ActionCollection
    {
        foreach (\$entities as \$entity) {
            \$this->processActions(\$entity, clone \$actionConfigDto);
        }

        return \$this->actionFactory->processGlobalActions(\$actionConfigDto);
    }

    public function create(string \$entityFqcn, \$entityId = null, ?string \$entityPermission = null): EntityDto
    {
        return \$this->doCreate(\$entityFqcn, \$entityId, \$entityPermission);
    }

    public function createForEntityInstance(\$entityInstance): EntityDto
    {
        return \$this->doCreate(null, null, null, \$entityInstance);
    }

    public function createCollection(EntityDto \$entityDto, ?iterable \$entityInstances): EntityCollection
    {
        \$entityDtos = [];

        foreach (\$entityInstances as \$entityInstance) {
            \$newEntityDto = \$entityDto->newWithInstance(\$entityInstance);
            \$newEntityId = \$newEntityDto->getPrimaryKeyValueAsString();
            if (!\$this->authorizationChecker->isGranted(Permission::EA_ACCESS_ENTITY, \$newEntityDto)) {
                \$newEntityDto->markAsInaccessible();
            }

            \$entityDtos[\$newEntityId] = \$newEntityDto;
        }

        return EntityCollection::new(\$entityDtos);
    }

    /**
     * @return ClassMetadata&ClassMetadataInfo
     */
    public function getEntityMetadata(string \$entityFqcn): ClassMetadata
    {
        \$entityManager = \$this->getEntityManager(\$entityFqcn);
        /** @var ClassMetadata&ClassMetadataInfo \$entityMetadata */
        \$entityMetadata = \$entityManager->getClassMetadata(\$entityFqcn);

        if (1 !== \\count(\$entityMetadata->getIdentifierFieldNames())) {
            throw new \\RuntimeException(sprintf('EasyAdmin does not support Doctrine entities with composite primary keys (such as the ones used in the \"%s\" entity).', \$entityFqcn));
        }

        return \$entityMetadata;
    }

    private function doCreate(?string \$entityFqcn = null, \$entityId = null, ?string \$entityPermission = null, \$entityInstance = null): EntityDto
    {
        if (null === \$entityInstance && null !== \$entityFqcn) {
            \$entityInstance = null === \$entityId ? null : \$this->getEntityInstance(\$entityFqcn, \$entityId);
        }

        if (null !== \$entityInstance && null === \$entityFqcn) {
            if (\$entityInstance instanceof Proxy) {
                \$entityInstance->__load();
            }

            \$entityFqcn = ClassUtils::getClass(\$entityInstance);
        }

        \$entityMetadata = \$this->getEntityMetadata(\$entityFqcn);
        \$entityDto = new EntityDto(\$entityFqcn, \$entityMetadata, \$entityPermission, \$entityInstance);

        if (!\$this->authorizationChecker->isGranted(Permission::EA_ACCESS_ENTITY, \$entityDto)) {
            \$entityDto->markAsInaccessible();
        }

        \$this->eventDispatcher->dispatch(new AfterEntityBuiltEvent(\$entityDto));

        return \$entityDto;
    }

    private function getEntityManager(string \$entityFqcn): ObjectManager
    {
        if (null === \$entityManager = \$this->doctrine->getManagerForClass(\$entityFqcn)) {
            throw new \\RuntimeException(sprintf('There is no Doctrine Entity Manager defined for the \"%s\" class', \$entityFqcn));
        }

        return \$entityManager;
    }

    private function getEntityInstance(string \$entityFqcn, \$entityIdValue): object
    {
        \$entityManager = \$this->getEntityManager(\$entityFqcn);
        if (null === \$entityInstance = \$entityManager->getRepository(\$entityFqcn)->find(\$entityIdValue)) {
            \$entityIdName = \$entityManager->getClassMetadata(\$entityFqcn)->getIdentifierFieldNames()[0];

            throw new EntityNotFoundException(['entity_name' => \$entityFqcn, 'entity_id_name' => \$entityIdName, 'entity_id_value' => \$entityIdValue]);
        }

        return \$entityInstance;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Factory/EntityFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use Doctrine\\Common\\Util\\ClassUtils;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\Persistence\\ManagerRegistry;
use Doctrine\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\ObjectManager;
use Doctrine\\Persistence\\Proxy;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\ActionCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionConfigDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Event\\AfterEntityBuiltEvent;
use EasyCorp\\Bundle\\EasyAdminBundle\\Exception\\EntityNotFoundException;
use EasyCorp\\Bundle\\EasyAdminBundle\\Security\\Permission;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EntityFactory
{
    private FieldFactory \$fieldFactory;
    private ActionFactory \$actionFactory;
    private AuthorizationCheckerInterface \$authorizationChecker;
    private ManagerRegistry \$doctrine;
    private EventDispatcherInterface \$eventDispatcher;

    public function __construct(FieldFactory \$fieldFactory, ActionFactory \$actionFactory, AuthorizationCheckerInterface \$authorizationChecker, ManagerRegistry \$doctrine, EventDispatcherInterface \$eventDispatcher)
    {
        \$this->fieldFactory = \$fieldFactory;
        \$this->actionFactory = \$actionFactory;
        \$this->authorizationChecker = \$authorizationChecker;
        \$this->doctrine = \$doctrine;
        \$this->eventDispatcher = \$eventDispatcher;
    }

    public function processFields(EntityDto \$entityDto, FieldCollection \$fields): void
    {
        \$this->fieldFactory->processFields(\$entityDto, \$fields);
    }

    public function processFieldsForAll(EntityCollection \$entities, FieldCollection \$fields): void
    {
        foreach (\$entities as \$entity) {
            \$this->processFields(\$entity, clone \$fields);
            \$entities->set(\$entity);
        }
    }

    public function processActions(EntityDto \$entityDto, ActionConfigDto \$actionConfigDto): void
    {
        \$this->actionFactory->processEntityActions(\$entityDto, \$actionConfigDto);
    }

    public function processActionsForAll(EntityCollection \$entities, ActionConfigDto \$actionConfigDto): ActionCollection
    {
        foreach (\$entities as \$entity) {
            \$this->processActions(\$entity, clone \$actionConfigDto);
        }

        return \$this->actionFactory->processGlobalActions(\$actionConfigDto);
    }

    public function create(string \$entityFqcn, \$entityId = null, ?string \$entityPermission = null): EntityDto
    {
        return \$this->doCreate(\$entityFqcn, \$entityId, \$entityPermission);
    }

    public function createForEntityInstance(\$entityInstance): EntityDto
    {
        return \$this->doCreate(null, null, null, \$entityInstance);
    }

    public function createCollection(EntityDto \$entityDto, ?iterable \$entityInstances): EntityCollection
    {
        \$entityDtos = [];

        foreach (\$entityInstances as \$entityInstance) {
            \$newEntityDto = \$entityDto->newWithInstance(\$entityInstance);
            \$newEntityId = \$newEntityDto->getPrimaryKeyValueAsString();
            if (!\$this->authorizationChecker->isGranted(Permission::EA_ACCESS_ENTITY, \$newEntityDto)) {
                \$newEntityDto->markAsInaccessible();
            }

            \$entityDtos[\$newEntityId] = \$newEntityDto;
        }

        return EntityCollection::new(\$entityDtos);
    }

    /**
     * @return ClassMetadata&ClassMetadataInfo
     */
    public function getEntityMetadata(string \$entityFqcn): ClassMetadata
    {
        \$entityManager = \$this->getEntityManager(\$entityFqcn);
        /** @var ClassMetadata&ClassMetadataInfo \$entityMetadata */
        \$entityMetadata = \$entityManager->getClassMetadata(\$entityFqcn);

        if (1 !== \\count(\$entityMetadata->getIdentifierFieldNames())) {
            throw new \\RuntimeException(sprintf('EasyAdmin does not support Doctrine entities with composite primary keys (such as the ones used in the \"%s\" entity).', \$entityFqcn));
        }

        return \$entityMetadata;
    }

    private function doCreate(?string \$entityFqcn = null, \$entityId = null, ?string \$entityPermission = null, \$entityInstance = null): EntityDto
    {
        if (null === \$entityInstance && null !== \$entityFqcn) {
            \$entityInstance = null === \$entityId ? null : \$this->getEntityInstance(\$entityFqcn, \$entityId);
        }

        if (null !== \$entityInstance && null === \$entityFqcn) {
            if (\$entityInstance instanceof Proxy) {
                \$entityInstance->__load();
            }

            \$entityFqcn = ClassUtils::getClass(\$entityInstance);
        }

        \$entityMetadata = \$this->getEntityMetadata(\$entityFqcn);
        \$entityDto = new EntityDto(\$entityFqcn, \$entityMetadata, \$entityPermission, \$entityInstance);

        if (!\$this->authorizationChecker->isGranted(Permission::EA_ACCESS_ENTITY, \$entityDto)) {
            \$entityDto->markAsInaccessible();
        }

        \$this->eventDispatcher->dispatch(new AfterEntityBuiltEvent(\$entityDto));

        return \$entityDto;
    }

    private function getEntityManager(string \$entityFqcn): ObjectManager
    {
        if (null === \$entityManager = \$this->doctrine->getManagerForClass(\$entityFqcn)) {
            throw new \\RuntimeException(sprintf('There is no Doctrine Entity Manager defined for the \"%s\" class', \$entityFqcn));
        }

        return \$entityManager;
    }

    private function getEntityInstance(string \$entityFqcn, \$entityIdValue): object
    {
        \$entityManager = \$this->getEntityManager(\$entityFqcn);
        if (null === \$entityInstance = \$entityManager->getRepository(\$entityFqcn)->find(\$entityIdValue)) {
            \$entityIdName = \$entityManager->getClassMetadata(\$entityFqcn)->getIdentifierFieldNames()[0];

            throw new EntityNotFoundException(['entity_name' => \$entityFqcn, 'entity_id_name' => \$entityIdName, 'entity_id_value' => \$entityIdValue]);
        }

        return \$entityInstance;
    }
}
", "easycorp/easyadmin-bundle/src/Factory/EntityFactory.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Factory\\EntityFactory.php");
    }
}
