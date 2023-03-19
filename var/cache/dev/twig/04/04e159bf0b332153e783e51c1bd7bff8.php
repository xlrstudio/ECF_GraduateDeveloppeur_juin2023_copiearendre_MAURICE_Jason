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

/* easycorp/easyadmin-bundle/src/Event/AbstractLifecycleEvent.php */
class __TwigTemplate_ca68ecdc870d95eb0122413b1ecd302b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Event/AbstractLifecycleEvent.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Event/AbstractLifecycleEvent.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Event;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Event\\EntityLifecycleEventInterface;

/**
 * @author: Benjamin Leibinger <mail@leibinger.io>
 */
abstract class AbstractLifecycleEvent implements EntityLifecycleEventInterface
{
    protected \$entityInstance;

    public function __construct(/* ?object */ \$entityInstance)
    {
        if (!\\is_object(\$entityInstance)
            && null !== \$entityInstance) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$entityInstance',
                __METHOD__,
                '\"object\" or \"null\"',
                \\gettype(\$entityInstance)
            );
        }

        \$this->entityInstance = \$entityInstance;
    }

    public function getEntityInstance()/* : ?object */
    {
        return \$this->entityInstance;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Event/AbstractLifecycleEvent.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Event;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Event\\EntityLifecycleEventInterface;

/**
 * @author: Benjamin Leibinger <mail@leibinger.io>
 */
abstract class AbstractLifecycleEvent implements EntityLifecycleEventInterface
{
    protected \$entityInstance;

    public function __construct(/* ?object */ \$entityInstance)
    {
        if (!\\is_object(\$entityInstance)
            && null !== \$entityInstance) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$entityInstance',
                __METHOD__,
                '\"object\" or \"null\"',
                \\gettype(\$entityInstance)
            );
        }

        \$this->entityInstance = \$entityInstance;
    }

    public function getEntityInstance()/* : ?object */
    {
        return \$this->entityInstance;
    }
}
", "easycorp/easyadmin-bundle/src/Event/AbstractLifecycleEvent.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Event\\AbstractLifecycleEvent.php");
    }
}
