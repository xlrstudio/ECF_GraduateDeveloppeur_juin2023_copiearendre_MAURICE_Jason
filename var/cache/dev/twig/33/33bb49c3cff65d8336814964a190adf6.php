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

/* easycorp/easyadmin-bundle/src/Orm/EntityUpdater.php */
class __TwigTemplate_b710d1378ba2e3d99008d80764a74d14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Orm/EntityUpdater.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Orm/EntityUpdater.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Orm;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Orm\\EntityUpdaterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EntityUpdater implements EntityUpdaterInterface
{
    private PropertyAccessorInterface \$propertyAccessor;
    private ValidatorInterface \$validator;

    public function __construct(PropertyAccessorInterface \$propertyAccessor, ValidatorInterface \$validator)
    {
        \$this->propertyAccessor = \$propertyAccessor;
        \$this->validator = \$validator;
    }

    public function updateProperty(EntityDto \$entityDto, string \$propertyName, \$value): void
    {
        if (!\$this->propertyAccessor->isWritable(\$entityDto->getInstance(), \$propertyName)) {
            throw new \\RuntimeException(sprintf('The \"%s\" property of the \"%s\" entity is not writable.', \$propertyName, \$entityDto->getName()));
        }

        \$entityInstance = \$entityDto->getInstance();
        \$this->propertyAccessor->setValue(\$entityInstance, \$propertyName, \$value);

        /** @var ConstraintViolationList \$violations */
        \$violations = \$this->validator->validate(\$entityInstance);
        if (0 < \\count(\$violations)) {
            throw new \\RuntimeException((string) \$violations);
        }

        \$entityDto->setInstance(\$entityInstance);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Orm/EntityUpdater.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Orm;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Orm\\EntityUpdaterInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class EntityUpdater implements EntityUpdaterInterface
{
    private PropertyAccessorInterface \$propertyAccessor;
    private ValidatorInterface \$validator;

    public function __construct(PropertyAccessorInterface \$propertyAccessor, ValidatorInterface \$validator)
    {
        \$this->propertyAccessor = \$propertyAccessor;
        \$this->validator = \$validator;
    }

    public function updateProperty(EntityDto \$entityDto, string \$propertyName, \$value): void
    {
        if (!\$this->propertyAccessor->isWritable(\$entityDto->getInstance(), \$propertyName)) {
            throw new \\RuntimeException(sprintf('The \"%s\" property of the \"%s\" entity is not writable.', \$propertyName, \$entityDto->getName()));
        }

        \$entityInstance = \$entityDto->getInstance();
        \$this->propertyAccessor->setValue(\$entityInstance, \$propertyName, \$value);

        /** @var ConstraintViolationList \$violations */
        \$violations = \$this->validator->validate(\$entityInstance);
        if (0 < \\count(\$violations)) {
            throw new \\RuntimeException((string) \$violations);
        }

        \$entityDto->setInstance(\$entityInstance);
    }
}
", "easycorp/easyadmin-bundle/src/Orm/EntityUpdater.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Orm\\EntityUpdater.php");
    }
}
