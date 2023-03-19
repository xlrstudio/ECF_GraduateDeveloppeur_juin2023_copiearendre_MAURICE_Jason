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

/* easycorp/easyadmin-bundle/src/Config/Option/EA.php */
class __TwigTemplate_7aee71942a8b36ca21e2f93f89db1ef2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Option/EA.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Option/EA.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EA
{
    public const BATCH_ACTION_NAME = 'batchActionName';
    public const BATCH_ACTION_URL = 'batchActionUrl';
    public const BATCH_ACTION_CSRF_TOKEN = 'batchActionCsrfToken';
    public const BATCH_ACTION_ENTITY_IDS = 'batchActionEntityIds';
    public const CONTEXT_NAME = 'eaContext';
    public const CONTEXT_REQUEST_ATTRIBUTE = 'easyadmin_context';
    public const CRUD_ACTION = 'crudAction';
    public const CRUD_CONTROLLER_FQCN = 'crudControllerFqcn';
    public const DASHBOARD_CONTROLLER_FQCN = 'dashboardControllerFqcn';
    public const ENTITY_FQCN = 'entityFqcn';
    public const ENTITY_ID = 'entityId';
    public const FILTERS = 'filters';
    public const MENU_INDEX = 'menuIndex';
    public const PAGE = 'page';
    public const QUERY = 'query';
    public const REFERRER = 'referrer';
    public const ROUTE_NAME = 'routeName';
    public const ROUTE_PARAMS = 'routeParams';
    public const SORT = 'sort';
    public const SUBMENU_INDEX = 'submenuIndex';
    public const URL_SIGNATURE = 'signature';
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/Option/EA.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EA
{
    public const BATCH_ACTION_NAME = 'batchActionName';
    public const BATCH_ACTION_URL = 'batchActionUrl';
    public const BATCH_ACTION_CSRF_TOKEN = 'batchActionCsrfToken';
    public const BATCH_ACTION_ENTITY_IDS = 'batchActionEntityIds';
    public const CONTEXT_NAME = 'eaContext';
    public const CONTEXT_REQUEST_ATTRIBUTE = 'easyadmin_context';
    public const CRUD_ACTION = 'crudAction';
    public const CRUD_CONTROLLER_FQCN = 'crudControllerFqcn';
    public const DASHBOARD_CONTROLLER_FQCN = 'dashboardControllerFqcn';
    public const ENTITY_FQCN = 'entityFqcn';
    public const ENTITY_ID = 'entityId';
    public const FILTERS = 'filters';
    public const MENU_INDEX = 'menuIndex';
    public const PAGE = 'page';
    public const QUERY = 'query';
    public const REFERRER = 'referrer';
    public const ROUTE_NAME = 'routeName';
    public const ROUTE_PARAMS = 'routeParams';
    public const SORT = 'sort';
    public const SUBMENU_INDEX = 'submenuIndex';
    public const URL_SIGNATURE = 'signature';
}
", "easycorp/easyadmin-bundle/src/Config/Option/EA.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Option\\EA.php");
    }
}
