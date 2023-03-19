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

/* easycorp/easyadmin-bundle/src/Field/AvatarField.php */
class __TwigTemplate_336ff32a91b91f25938951ad6b4dc783 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/AvatarField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/AvatarField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\Size;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AvatarField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_IS_GRAVATAR_EMAIL = 'isGravatarEmail';
    public const OPTION_HEIGHT = 'height';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/avatar')
            ->setFormType(TextType::class)
            ->addCssClass('field-avatar')
            ->setDefaultColumns('col-md-10 col-xxl-8')
            ->setSortable(false)
            ->setCustomOption(self::OPTION_IS_GRAVATAR_EMAIL, false)
            ->setCustomOption(self::OPTION_HEIGHT, null);
    }

    public function setHeight(\$heightInPixels): self
    {
        \$semanticHeights = [Size::SM => 18, Size::MD => 24, Size::LG => 48, Size::XL => 96];

        if (!\\is_int(\$heightInPixels) && !\\array_key_exists(\$heightInPixels, \$semanticHeights)) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be either an integer (the height in pixels) or one of these string values: %s (%d given).', __METHOD__, implode(', ', \$semanticHeights), \$heightInPixels));
        }

        if (\\is_string(\$heightInPixels)) {
            \$heightInPixels = \$semanticHeights[\$heightInPixels];
        }

        if (\$heightInPixels < 1) {
            throw new \\InvalidArgumentException(sprintf('When passing an integer for the argument of the \"%s()\" method, the value must be 1 or higher (%d given).', __METHOD__, \$heightInPixels));
        }

        \$this->setCustomOption(self::OPTION_HEIGHT, \$heightInPixels);

        return \$this;
    }

    public function setIsGravatarEmail(bool \$isGravatar = true): self
    {
        \$this->setCustomOption(self::OPTION_IS_GRAVATAR_EMAIL, \$isGravatar);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/AvatarField.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\Size;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AvatarField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_IS_GRAVATAR_EMAIL = 'isGravatarEmail';
    public const OPTION_HEIGHT = 'height';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/avatar')
            ->setFormType(TextType::class)
            ->addCssClass('field-avatar')
            ->setDefaultColumns('col-md-10 col-xxl-8')
            ->setSortable(false)
            ->setCustomOption(self::OPTION_IS_GRAVATAR_EMAIL, false)
            ->setCustomOption(self::OPTION_HEIGHT, null);
    }

    public function setHeight(\$heightInPixels): self
    {
        \$semanticHeights = [Size::SM => 18, Size::MD => 24, Size::LG => 48, Size::XL => 96];

        if (!\\is_int(\$heightInPixels) && !\\array_key_exists(\$heightInPixels, \$semanticHeights)) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be either an integer (the height in pixels) or one of these string values: %s (%d given).', __METHOD__, implode(', ', \$semanticHeights), \$heightInPixels));
        }

        if (\\is_string(\$heightInPixels)) {
            \$heightInPixels = \$semanticHeights[\$heightInPixels];
        }

        if (\$heightInPixels < 1) {
            throw new \\InvalidArgumentException(sprintf('When passing an integer for the argument of the \"%s()\" method, the value must be 1 or higher (%d given).', __METHOD__, \$heightInPixels));
        }

        \$this->setCustomOption(self::OPTION_HEIGHT, \$heightInPixels);

        return \$this;
    }

    public function setIsGravatarEmail(bool \$isGravatar = true): self
    {
        \$this->setCustomOption(self::OPTION_IS_GRAVATAR_EMAIL, \$isGravatar);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/AvatarField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\AvatarField.php");
    }
}
