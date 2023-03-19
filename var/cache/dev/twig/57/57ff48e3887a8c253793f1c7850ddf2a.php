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

/* easycorp/easyadmin-bundle/src/Registry/CrudControllerRegistry.php */
class __TwigTemplate_a050e4ee46cab80d0f56abcd96fa81e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Registry/CrudControllerRegistry.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Registry/CrudControllerRegistry.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Registry;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CrudControllerRegistry
{
    private array \$crudFqcnToEntityFqcnMap = [];
    private array \$entityFqcnToCrudFqcnMap;
    private array \$crudFqcnToCrudIdMap = [];
    private array \$crudIdToCrudFqcnMap;

    public function __construct(string \$kernelSecret, array \$crudControllersFqcn)
    {
        foreach (\$crudControllersFqcn as \$controllerFqcn) {
            \$this->crudFqcnToEntityFqcnMap[\$controllerFqcn] = \$controllerFqcn::getEntityFqcn();
            \$this->crudFqcnToCrudIdMap[\$controllerFqcn] = substr(sha1(\$kernelSecret.\$controllerFqcn), 0, 7);
        }

        // more than one controller can manage the same entity, so this map will
        // only contain the last controller associated to that repeated entity. That's why
        // several methods in other classes allow to define the CRUD controller explicitly
        \$this->entityFqcnToCrudFqcnMap = array_flip(\$this->crudFqcnToEntityFqcnMap);
        \$this->crudIdToCrudFqcnMap = array_flip(\$this->crudFqcnToCrudIdMap);
    }

    public function findCrudFqcnByEntityFqcn(string \$entityFqcn): ?string
    {
        return \$this->entityFqcnToCrudFqcnMap[\$entityFqcn] ?? null;
    }

    public function findEntityFqcnByCrudFqcn(string \$controllerFqcn): ?string
    {
        return \$this->crudFqcnToEntityFqcnMap[\$controllerFqcn] ?? null;
    }

    public function findCrudFqcnByCrudId(string \$crudId): ?string
    {
        return \$this->crudIdToCrudFqcnMap[\$crudId] ?? null;
    }

    public function findCrudIdByCrudFqcn(string \$controllerFqcn): ?string
    {
        return \$this->crudFqcnToCrudIdMap[\$controllerFqcn] ?? null;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Registry/CrudControllerRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Registry;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CrudControllerRegistry
{
    private array \$crudFqcnToEntityFqcnMap = [];
    private array \$entityFqcnToCrudFqcnMap;
    private array \$crudFqcnToCrudIdMap = [];
    private array \$crudIdToCrudFqcnMap;

    public function __construct(string \$kernelSecret, array \$crudControllersFqcn)
    {
        foreach (\$crudControllersFqcn as \$controllerFqcn) {
            \$this->crudFqcnToEntityFqcnMap[\$controllerFqcn] = \$controllerFqcn::getEntityFqcn();
            \$this->crudFqcnToCrudIdMap[\$controllerFqcn] = substr(sha1(\$kernelSecret.\$controllerFqcn), 0, 7);
        }

        // more than one controller can manage the same entity, so this map will
        // only contain the last controller associated to that repeated entity. That's why
        // several methods in other classes allow to define the CRUD controller explicitly
        \$this->entityFqcnToCrudFqcnMap = array_flip(\$this->crudFqcnToEntityFqcnMap);
        \$this->crudIdToCrudFqcnMap = array_flip(\$this->crudFqcnToCrudIdMap);
    }

    public function findCrudFqcnByEntityFqcn(string \$entityFqcn): ?string
    {
        return \$this->entityFqcnToCrudFqcnMap[\$entityFqcn] ?? null;
    }

    public function findEntityFqcnByCrudFqcn(string \$controllerFqcn): ?string
    {
        return \$this->crudFqcnToEntityFqcnMap[\$controllerFqcn] ?? null;
    }

    public function findCrudFqcnByCrudId(string \$crudId): ?string
    {
        return \$this->crudIdToCrudFqcnMap[\$crudId] ?? null;
    }

    public function findCrudIdByCrudFqcn(string \$controllerFqcn): ?string
    {
        return \$this->crudFqcnToCrudIdMap[\$controllerFqcn] ?? null;
    }
}
", "easycorp/easyadmin-bundle/src/Registry/CrudControllerRegistry.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Registry\\CrudControllerRegistry.php");
    }
}
