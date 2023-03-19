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

/* easycorp/easyadmin-bundle/src/Field/SlugField.php */
class __TwigTemplate_d9319bccbe15d2df12b6df84cab0bde0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/SlugField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/SlugField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Asset;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\SlugType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Jonathan Scheiber <contact@jmsche.fr>
 */
final class SlugField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_TARGET_FIELD_NAME = 'targetFieldName';
    public const OPTION_UNLOCK_CONFIRMATION_MESSAGE = 'unlockConfirmationMessage';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/text')
            ->setFormType(SlugType::class)
            ->addCssClass('field-text')
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-slug.js')->onlyOnForms())
            ->setDefaultColumns('col-md-6 col-xxl-5')
            ->setCustomOption(self::OPTION_TARGET_FIELD_NAME, null)
            ->setCustomOption(self::OPTION_UNLOCK_CONFIRMATION_MESSAGE, null)
        ;
    }

    /**
     * @param string|array<string> \$fieldName
     */
    public function setTargetFieldName(string|array \$fieldName): self
    {
        \$this->setCustomOption(self::OPTION_TARGET_FIELD_NAME, \\is_string(\$fieldName) ? [\$fieldName] : \$fieldName);

        return \$this;
    }

    public function setUnlockConfirmationMessage(string|TranslatableInterface \$message): self
    {
        \$this->setCustomOption(self::OPTION_UNLOCK_CONFIRMATION_MESSAGE, \$message);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/SlugField.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\SlugType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Jonathan Scheiber <contact@jmsche.fr>
 */
final class SlugField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_TARGET_FIELD_NAME = 'targetFieldName';
    public const OPTION_UNLOCK_CONFIRMATION_MESSAGE = 'unlockConfirmationMessage';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/text')
            ->setFormType(SlugType::class)
            ->addCssClass('field-text')
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-slug.js')->onlyOnForms())
            ->setDefaultColumns('col-md-6 col-xxl-5')
            ->setCustomOption(self::OPTION_TARGET_FIELD_NAME, null)
            ->setCustomOption(self::OPTION_UNLOCK_CONFIRMATION_MESSAGE, null)
        ;
    }

    /**
     * @param string|array<string> \$fieldName
     */
    public function setTargetFieldName(string|array \$fieldName): self
    {
        \$this->setCustomOption(self::OPTION_TARGET_FIELD_NAME, \\is_string(\$fieldName) ? [\$fieldName] : \$fieldName);

        return \$this;
    }

    public function setUnlockConfirmationMessage(string|TranslatableInterface \$message): self
    {
        \$this->setCustomOption(self::OPTION_UNLOCK_CONFIRMATION_MESSAGE, \$message);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/SlugField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\SlugField.php");
    }
}
