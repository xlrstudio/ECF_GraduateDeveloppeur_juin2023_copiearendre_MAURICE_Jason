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

/* easycorp/easyadmin-bundle/src/Translation/TranslatableChoiceMessage.php */
class __TwigTemplate_8034085569fe8b661b51b643dfe2cea0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Translation/TranslatableChoiceMessage.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Translation/TranslatableChoiceMessage.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Translation;

use Symfony\\Component\\Translation\\TranslatableMessage;
use Symfony\\Contracts\\Translation\\TranslatableInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Jakub Caban <kuba.iluvatar@gmail.com>
 *
 * @internal
 */
final class TranslatableChoiceMessage implements TranslatableInterface
{
    /**
     * @param TranslatableMessage \$message
     */
    public function __construct(
        private TranslatableInterface \$message,
        private ?string \$cssClass
    ) {
    }

    public function trans(TranslatorInterface \$translator, string \$locale = null): string
    {
        \$message = \$this->message->trans(\$translator, \$locale);

        if (null !== \$this->cssClass) {
            return sprintf('<span class=\"%s\">%s</span>', \$this->cssClass, \$message);
        }

        return \$message;
    }

    public function __toString(): string
    {
        if (null !== \$this->cssClass) {
            return sprintf('<span class=\"%s\">%s</span>', \$this->cssClass, \$this->message);
        }

        return (string) \$this->message;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Translation/TranslatableChoiceMessage.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Translation;

use Symfony\\Component\\Translation\\TranslatableMessage;
use Symfony\\Contracts\\Translation\\TranslatableInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Jakub Caban <kuba.iluvatar@gmail.com>
 *
 * @internal
 */
final class TranslatableChoiceMessage implements TranslatableInterface
{
    /**
     * @param TranslatableMessage \$message
     */
    public function __construct(
        private TranslatableInterface \$message,
        private ?string \$cssClass
    ) {
    }

    public function trans(TranslatorInterface \$translator, string \$locale = null): string
    {
        \$message = \$this->message->trans(\$translator, \$locale);

        if (null !== \$this->cssClass) {
            return sprintf('<span class=\"%s\">%s</span>', \$this->cssClass, \$message);
        }

        return \$message;
    }

    public function __toString(): string
    {
        if (null !== \$this->cssClass) {
            return sprintf('<span class=\"%s\">%s</span>', \$this->cssClass, \$this->message);
        }

        return (string) \$this->message;
    }
}
", "easycorp/easyadmin-bundle/src/Translation/TranslatableChoiceMessage.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Translation\\TranslatableChoiceMessage.php");
    }
}
