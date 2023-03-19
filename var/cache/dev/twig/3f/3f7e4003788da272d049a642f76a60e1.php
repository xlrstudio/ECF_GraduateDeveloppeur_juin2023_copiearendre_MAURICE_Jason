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

/* easycorp/easyadmin-bundle/src/Field/TextField.php */
class __TwigTemplate_1600ac43e3b3f2e43342a5e7faa1b7b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/TextField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/TextField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class TextField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_MAX_LENGTH = 'maxLength';
    public const OPTION_RENDER_AS_HTML = 'renderAsHtml';
    public const OPTION_STRIP_TAGS = 'stripTags';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/text')
            ->setFormType(TextType::class)
            ->addCssClass('field-text')
            ->setDefaultColumns('col-md-6 col-xxl-5')
            ->setCustomOption(self::OPTION_MAX_LENGTH, null)
            ->setCustomOption(self::OPTION_RENDER_AS_HTML, false)
            ->setCustomOption(self::OPTION_STRIP_TAGS, false);
    }

    /**
     * This option is ignored when using 'renderAsHtml()' to avoid
     * truncating contents in the middle of an HTML tag.
     */
    public function setMaxLength(int \$length): self
    {
        if (\$length < 1) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 1 or higher (%d given).', __METHOD__, \$length));
        }

        \$this->setCustomOption(self::OPTION_MAX_LENGTH, \$length);

        return \$this;
    }

    public function renderAsHtml(bool \$asHtml = true): self
    {
        \$this->setCustomOption(self::OPTION_RENDER_AS_HTML, \$asHtml);

        return \$this;
    }

    public function stripTags(bool \$stripTags = true): self
    {
        \$this->setCustomOption(self::OPTION_STRIP_TAGS, \$stripTags);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/TextField.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class TextField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_MAX_LENGTH = 'maxLength';
    public const OPTION_RENDER_AS_HTML = 'renderAsHtml';
    public const OPTION_STRIP_TAGS = 'stripTags';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/text')
            ->setFormType(TextType::class)
            ->addCssClass('field-text')
            ->setDefaultColumns('col-md-6 col-xxl-5')
            ->setCustomOption(self::OPTION_MAX_LENGTH, null)
            ->setCustomOption(self::OPTION_RENDER_AS_HTML, false)
            ->setCustomOption(self::OPTION_STRIP_TAGS, false);
    }

    /**
     * This option is ignored when using 'renderAsHtml()' to avoid
     * truncating contents in the middle of an HTML tag.
     */
    public function setMaxLength(int \$length): self
    {
        if (\$length < 1) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 1 or higher (%d given).', __METHOD__, \$length));
        }

        \$this->setCustomOption(self::OPTION_MAX_LENGTH, \$length);

        return \$this;
    }

    public function renderAsHtml(bool \$asHtml = true): self
    {
        \$this->setCustomOption(self::OPTION_RENDER_AS_HTML, \$asHtml);

        return \$this;
    }

    public function stripTags(bool \$stripTags = true): self
    {
        \$this->setCustomOption(self::OPTION_STRIP_TAGS, \$stripTags);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/TextField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\TextField.php");
    }
}
