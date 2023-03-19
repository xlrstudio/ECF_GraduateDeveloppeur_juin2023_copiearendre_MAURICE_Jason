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

/* easycorp/easyadmin-bundle/src/Field/BooleanField.php */
class __TwigTemplate_215c527c831bf43694cb963167038655 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/BooleanField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/BooleanField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Asset;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextAlign;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class BooleanField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_RENDER_AS_SWITCH = 'renderAsSwitch';
    /** @internal */
    public const OPTION_TOGGLE_URL = 'toggleUrl';
    /** @internal */
    public const CSRF_TOKEN_NAME = 'ea-toggle';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTextAlign(TextAlign::CENTER)
            ->setTemplateName('crud/field/boolean')
            ->setFormType(CheckboxType::class)
            ->addCssClass('field-boolean')
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-boolean.js')->onlyOnIndex())
            ->setCustomOption(self::OPTION_RENDER_AS_SWITCH, true);
    }

    public function renderAsSwitch(bool \$isASwitch = true): self
    {
        \$this->setCustomOption(self::OPTION_RENDER_AS_SWITCH, \$isASwitch);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/BooleanField.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Asset;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextAlign;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class BooleanField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_RENDER_AS_SWITCH = 'renderAsSwitch';
    /** @internal */
    public const OPTION_TOGGLE_URL = 'toggleUrl';
    /** @internal */
    public const CSRF_TOKEN_NAME = 'ea-toggle';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTextAlign(TextAlign::CENTER)
            ->setTemplateName('crud/field/boolean')
            ->setFormType(CheckboxType::class)
            ->addCssClass('field-boolean')
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-boolean.js')->onlyOnIndex())
            ->setCustomOption(self::OPTION_RENDER_AS_SWITCH, true);
    }

    public function renderAsSwitch(bool \$isASwitch = true): self
    {
        \$this->setCustomOption(self::OPTION_RENDER_AS_SWITCH, \$isASwitch);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/BooleanField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\BooleanField.php");
    }
}
