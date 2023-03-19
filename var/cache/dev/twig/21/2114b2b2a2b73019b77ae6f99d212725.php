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

/* easycorp/easyadmin-bundle/src/Factory/PaginatorFactory.php */
class __TwigTemplate_7c4a2766cec7cf9e4d5b79843276e2e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/PaginatorFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/PaginatorFactory.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Orm\\EntityPaginatorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class PaginatorFactory
{
    private AdminContextProvider \$adminContextProvider;
    private EntityPaginatorInterface \$entityPaginator;

    public function __construct(AdminContextProvider \$adminContextProvider, EntityPaginatorInterface \$entityPaginator)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->entityPaginator = \$entityPaginator;
    }

    public function create(QueryBuilder \$queryBuilder): EntityPaginatorInterface
    {
        \$adminContext = \$this->adminContextProvider->getContext();
        \$paginatorDto = \$adminContext->getCrud()->getPaginator();
        \$paginatorDto->setPageNumber((int) \$adminContext->getRequest()->query->get('page', '1'));

        return \$this->entityPaginator->paginate(\$paginatorDto, \$queryBuilder);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Factory/PaginatorFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use Doctrine\\ORM\\QueryBuilder;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Orm\\EntityPaginatorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class PaginatorFactory
{
    private AdminContextProvider \$adminContextProvider;
    private EntityPaginatorInterface \$entityPaginator;

    public function __construct(AdminContextProvider \$adminContextProvider, EntityPaginatorInterface \$entityPaginator)
    {
        \$this->adminContextProvider = \$adminContextProvider;
        \$this->entityPaginator = \$entityPaginator;
    }

    public function create(QueryBuilder \$queryBuilder): EntityPaginatorInterface
    {
        \$adminContext = \$this->adminContextProvider->getContext();
        \$paginatorDto = \$adminContext->getCrud()->getPaginator();
        \$paginatorDto->setPageNumber((int) \$adminContext->getRequest()->query->get('page', '1'));

        return \$this->entityPaginator->paginate(\$paginatorDto, \$queryBuilder);
    }
}
", "easycorp/easyadmin-bundle/src/Factory/PaginatorFactory.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Factory\\PaginatorFactory.php");
    }
}
