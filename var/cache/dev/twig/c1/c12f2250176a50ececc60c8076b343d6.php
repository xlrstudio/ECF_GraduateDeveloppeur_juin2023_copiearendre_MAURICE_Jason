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

/* easycorp/easyadmin-bundle/src/Config/Menu/CrudMenuItem.php */
class __TwigTemplate_36bdfd6d747ccc63e1c79a58dfe4e4c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Menu/CrudMenuItem.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Menu/CrudMenuItem.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;
use Symfony\\Component\\Uid\\AbstractUid;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @see EasyCorp\\Bundle\\EasyAdminBundle\\Config\\MenuItem::linkToCrud()
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CrudMenuItem implements MenuItemInterface
{
    use MenuItemTrait;

    public function __construct(TranslatableInterface|string \$label, ?string \$icon, string \$entityFqcn)
    {
        \$this->dto = new MenuItemDto();

        \$this->dto->setType(MenuItemDto::TYPE_CRUD);
        \$this->dto->setLabel(\$label);
        \$this->dto->setIcon(\$icon);
        \$this->dto->setRouteParameters([
            EA::CRUD_ACTION => 'index',
            EA::CRUD_CONTROLLER_FQCN => null,
            EA::ENTITY_FQCN => \$entityFqcn,
            EA::ENTITY_ID => null,
        ]);
    }

    public function setController(string \$controllerFqcn): self
    {
        \$this->dto->setRouteParameters(array_merge(
            \$this->dto->getRouteParameters(),
            [EA::CRUD_CONTROLLER_FQCN => \$controllerFqcn]
        ));

        return \$this;
    }

    public function setAction(string \$actionName): self
    {
        \$this->dto->setRouteParameters(array_merge(
            \$this->dto->getRouteParameters(),
            [EA::CRUD_ACTION => \$actionName]
        ));

        return \$this;
    }

    public function setEntityId(/* AbstractUid|int|string */ \$entityId): self
    {
        if (!\\is_int(\$entityId) && !\\is_string(\$entityId) && !\$entityId instanceof AbstractUid) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$entityId',
                __METHOD__,
                sprintf('\"int\", \"string\" or \"%s\"', AbstractUid::class),
                \\gettype(\$entityId)
            );
        }

        \$this->dto->setRouteParameters(array_merge(
            \$this->dto->getRouteParameters(),
            [EA::ENTITY_ID => \$entityId]
        ));

        return \$this;
    }

    /**
     * @param \$sortFieldsAndOrder ['fieldName' => 'ASC|DESC', ...]
     */
    public function setDefaultSort(array \$sortFieldsAndOrder): self
    {
        \$sortFieldsAndOrder = array_map('strtoupper', \$sortFieldsAndOrder);
        foreach (\$sortFieldsAndOrder as \$sortField => \$sortOrder) {
            if (!\\in_array(\$sortOrder, [SortOrder::ASC, SortOrder::DESC], true)) {
                throw new \\InvalidArgumentException(sprintf('The sort order can be only \"ASC\" or \"DESC\", \"%s\" given.', \$sortOrder));
            }

            if (!\\is_string(\$sortField)) {
                throw new \\InvalidArgumentException(sprintf('The keys of the array that defines the default sort must be strings with the field names, but the given \"%s\" value is a \"%s\".', \$sortField, \\gettype(\$sortField)));
            }
        }

        \$this->dto->setRouteParameters(array_merge(
            \$this->dto->getRouteParameters(),
            [EA::SORT => \$sortFieldsAndOrder]
        ));

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/Menu/CrudMenuItem.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Menu\\MenuItemInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;
use Symfony\\Component\\Uid\\AbstractUid;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @see EasyCorp\\Bundle\\EasyAdminBundle\\Config\\MenuItem::linkToCrud()
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CrudMenuItem implements MenuItemInterface
{
    use MenuItemTrait;

    public function __construct(TranslatableInterface|string \$label, ?string \$icon, string \$entityFqcn)
    {
        \$this->dto = new MenuItemDto();

        \$this->dto->setType(MenuItemDto::TYPE_CRUD);
        \$this->dto->setLabel(\$label);
        \$this->dto->setIcon(\$icon);
        \$this->dto->setRouteParameters([
            EA::CRUD_ACTION => 'index',
            EA::CRUD_CONTROLLER_FQCN => null,
            EA::ENTITY_FQCN => \$entityFqcn,
            EA::ENTITY_ID => null,
        ]);
    }

    public function setController(string \$controllerFqcn): self
    {
        \$this->dto->setRouteParameters(array_merge(
            \$this->dto->getRouteParameters(),
            [EA::CRUD_CONTROLLER_FQCN => \$controllerFqcn]
        ));

        return \$this;
    }

    public function setAction(string \$actionName): self
    {
        \$this->dto->setRouteParameters(array_merge(
            \$this->dto->getRouteParameters(),
            [EA::CRUD_ACTION => \$actionName]
        ));

        return \$this;
    }

    public function setEntityId(/* AbstractUid|int|string */ \$entityId): self
    {
        if (!\\is_int(\$entityId) && !\\is_string(\$entityId) && !\$entityId instanceof AbstractUid) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$entityId',
                __METHOD__,
                sprintf('\"int\", \"string\" or \"%s\"', AbstractUid::class),
                \\gettype(\$entityId)
            );
        }

        \$this->dto->setRouteParameters(array_merge(
            \$this->dto->getRouteParameters(),
            [EA::ENTITY_ID => \$entityId]
        ));

        return \$this;
    }

    /**
     * @param \$sortFieldsAndOrder ['fieldName' => 'ASC|DESC', ...]
     */
    public function setDefaultSort(array \$sortFieldsAndOrder): self
    {
        \$sortFieldsAndOrder = array_map('strtoupper', \$sortFieldsAndOrder);
        foreach (\$sortFieldsAndOrder as \$sortField => \$sortOrder) {
            if (!\\in_array(\$sortOrder, [SortOrder::ASC, SortOrder::DESC], true)) {
                throw new \\InvalidArgumentException(sprintf('The sort order can be only \"ASC\" or \"DESC\", \"%s\" given.', \$sortOrder));
            }

            if (!\\is_string(\$sortField)) {
                throw new \\InvalidArgumentException(sprintf('The keys of the array that defines the default sort must be strings with the field names, but the given \"%s\" value is a \"%s\".', \$sortField, \\gettype(\$sortField)));
            }
        }

        \$this->dto->setRouteParameters(array_merge(
            \$this->dto->getRouteParameters(),
            [EA::SORT => \$sortFieldsAndOrder]
        ));

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Config/Menu/CrudMenuItem.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Menu\\CrudMenuItem.php");
    }
}
