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

/* easycorp/easyadmin-bundle/src/Security/AuthorizationChecker.php */
class __TwigTemplate_8b90b511204a025b5aa72574c81a841d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Security/AuthorizationChecker.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Security/AuthorizationChecker.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Security;

use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;

/**
 * A slightly modified authorization checker optimized for performance and which
 * doesn't trigger exceptions when security is not enabled.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class AuthorizationChecker implements AuthorizationCheckerInterface
{
    private AuthorizationCheckerInterface \$authorizationChecker;

    public function __construct(AuthorizationCheckerInterface \$authorizationChecker)
    {
        \$this->authorizationChecker = \$authorizationChecker;
    }

    public function isGranted(\$permission, \$subject = null): bool
    {
        // this check is needed for performance reasons because most of the times permissions
        // won't be set, so this function must return as early as possible in those cases
        if (null === \$permission || '' === \$permission) {
            return true;
        }

        try {
            return \$this->authorizationChecker->isGranted(\$permission, \$subject);
        } catch (AuthenticationCredentialsNotFoundException) {
            // this exception happens when there's no security configured in the application
            // that's a valid scenario for EasyAdmin, where security is not required (although very common)
            return true;
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Security/AuthorizationChecker.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Security;

use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationCredentialsNotFoundException;

/**
 * A slightly modified authorization checker optimized for performance and which
 * doesn't trigger exceptions when security is not enabled.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class AuthorizationChecker implements AuthorizationCheckerInterface
{
    private AuthorizationCheckerInterface \$authorizationChecker;

    public function __construct(AuthorizationCheckerInterface \$authorizationChecker)
    {
        \$this->authorizationChecker = \$authorizationChecker;
    }

    public function isGranted(\$permission, \$subject = null): bool
    {
        // this check is needed for performance reasons because most of the times permissions
        // won't be set, so this function must return as early as possible in those cases
        if (null === \$permission || '' === \$permission) {
            return true;
        }

        try {
            return \$this->authorizationChecker->isGranted(\$permission, \$subject);
        } catch (AuthenticationCredentialsNotFoundException) {
            // this exception happens when there's no security configured in the application
            // that's a valid scenario for EasyAdmin, where security is not required (although very common)
            return true;
        }
    }
}
", "easycorp/easyadmin-bundle/src/Security/AuthorizationChecker.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Security\\AuthorizationChecker.php");
    }
}
