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

/* easycorp/easyadmin-bundle/src/Security/Permission.php */
class __TwigTemplate_88c00b4b8fbef6be9ab1e7e80c33b12e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Security/Permission.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Security/Permission.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Security;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Permission
{
    public const EA_ACCESS_ENTITY = 'EA_ACCESS_ENTITY';
    public const EA_EXECUTE_ACTION = 'EA_EXECUTE_ACTION';
    public const EA_VIEW_MENU_ITEM = 'EA_VIEW_MENU_ITEM';
    public const EA_VIEW_FIELD = 'EA_VIEW_FIELD';
    public const EA_EXIT_IMPERSONATION = 'EA_EXIT_IMPERSONATION';

    public static function exists(?string \$permissionName): bool
    {
        if (null === \$permissionName) {
            return false;
        }

        return \\defined('self::'.\$permissionName);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Security/Permission.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Security;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Permission
{
    public const EA_ACCESS_ENTITY = 'EA_ACCESS_ENTITY';
    public const EA_EXECUTE_ACTION = 'EA_EXECUTE_ACTION';
    public const EA_VIEW_MENU_ITEM = 'EA_VIEW_MENU_ITEM';
    public const EA_VIEW_FIELD = 'EA_VIEW_FIELD';
    public const EA_EXIT_IMPERSONATION = 'EA_EXIT_IMPERSONATION';

    public static function exists(?string \$permissionName): bool
    {
        if (null === \$permissionName) {
            return false;
        }

        return \\defined('self::'.\$permissionName);
    }
}
", "easycorp/easyadmin-bundle/src/Security/Permission.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Security\\Permission.php");
    }
}
