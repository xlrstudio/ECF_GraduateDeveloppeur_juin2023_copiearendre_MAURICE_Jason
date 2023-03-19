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

/* easycorp/easyadmin-bundle/src/Dto/BatchActionDto.php */
class __TwigTemplate_6ab161d90ae8cdc2175c2891ee43200e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/BatchActionDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/BatchActionDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class BatchActionDto
{
    private string \$name;
    private array \$entityIds;
    private string \$entityFqcn;
    private string \$referrerUrl;
    private string \$csrfToken;

    public function __construct(string \$name, array \$entityIds, string \$entityFqcn, string \$referrerUrl, string \$csrfToken)
    {
        \$this->name = \$name;
        \$this->entityIds = \$entityIds;
        \$this->entityFqcn = \$entityFqcn;
        \$this->referrerUrl = \$referrerUrl;
        \$this->csrfToken = \$csrfToken;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getEntityIds(): array
    {
        return \$this->entityIds;
    }

    public function getEntityFqcn(): string
    {
        return \$this->entityFqcn;
    }

    public function getReferrerUrl(): string
    {
        return \$this->referrerUrl;
    }

    public function getCsrfToken(): string
    {
        return \$this->csrfToken;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/BatchActionDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class BatchActionDto
{
    private string \$name;
    private array \$entityIds;
    private string \$entityFqcn;
    private string \$referrerUrl;
    private string \$csrfToken;

    public function __construct(string \$name, array \$entityIds, string \$entityFqcn, string \$referrerUrl, string \$csrfToken)
    {
        \$this->name = \$name;
        \$this->entityIds = \$entityIds;
        \$this->entityFqcn = \$entityFqcn;
        \$this->referrerUrl = \$referrerUrl;
        \$this->csrfToken = \$csrfToken;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getEntityIds(): array
    {
        return \$this->entityIds;
    }

    public function getEntityFqcn(): string
    {
        return \$this->entityFqcn;
    }

    public function getReferrerUrl(): string
    {
        return \$this->referrerUrl;
    }

    public function getCsrfToken(): string
    {
        return \$this->csrfToken;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/BatchActionDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\BatchActionDto.php");
    }
}
