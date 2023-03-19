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

/* easycorp/easyadmin-bundle/src/Translation/TranslatableMessageBuilder.php */
class __TwigTemplate_b46aef028a2dd1e8877d0b2a7e77dfaf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Translation/TranslatableMessageBuilder.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Translation/TranslatableMessageBuilder.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Translation;

use function Symfony\\Component\\Translation\\t;
use Symfony\\Component\\Translation\\TranslatableMessage;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Jakub Caban <kuba.iluvatar@gmail.com>
 */
class TranslatableMessageBuilder
{
    /**
     * This method creates a new TranslationMessage object with the same content and domain as the given object,
     * but updates its translation parameters to merge them with the new given parameters.
     *
     * Due to the limited nature of TranslatableInterface we cannot guarantee correct behavior
     * of any other TranslatableInterface implementation, therefore they will be returned as provided.
     */
    public static function withParameters(TranslatableInterface \$translatable, array \$parameters): TranslatableInterface
    {
        if (TranslatableMessage::class !== \\get_class(\$translatable)) {
            return \$translatable;
        }

        return t(
            \$translatable->getMessage(),
            array_merge(\$parameters, \$translatable->getParameters()),
            \$translatable->getDomain()
        );
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Translation/TranslatableMessageBuilder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Translation;

use function Symfony\\Component\\Translation\\t;
use Symfony\\Component\\Translation\\TranslatableMessage;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Jakub Caban <kuba.iluvatar@gmail.com>
 */
class TranslatableMessageBuilder
{
    /**
     * This method creates a new TranslationMessage object with the same content and domain as the given object,
     * but updates its translation parameters to merge them with the new given parameters.
     *
     * Due to the limited nature of TranslatableInterface we cannot guarantee correct behavior
     * of any other TranslatableInterface implementation, therefore they will be returned as provided.
     */
    public static function withParameters(TranslatableInterface \$translatable, array \$parameters): TranslatableInterface
    {
        if (TranslatableMessage::class !== \\get_class(\$translatable)) {
            return \$translatable;
        }

        return t(
            \$translatable->getMessage(),
            array_merge(\$parameters, \$translatable->getParameters()),
            \$translatable->getDomain()
        );
    }
}
", "easycorp/easyadmin-bundle/src/Translation/TranslatableMessageBuilder.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Translation\\TranslatableMessageBuilder.php");
    }
}
