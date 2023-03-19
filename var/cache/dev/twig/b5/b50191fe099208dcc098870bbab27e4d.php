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

/* easycorp/easyadmin-bundle/src/Field/TextEditorField.php */
class __TwigTemplate_50ae1f0d00d038b740339f2a00f3229d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/TextEditorField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/TextEditorField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Asset;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\TextEditorType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class TextEditorField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_NUM_OF_ROWS = 'numOfRows';
    public const OPTION_TRIX_EDITOR_CONFIG = 'trixEditorConfig';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/text_editor')
            ->setFormType(TextEditorType::class)
            ->addCssClass('field-text_editor')
            ->addCssFiles(Asset::fromEasyAdminAssetPackage('field-text-editor.css')->onlyOnForms())
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-text-editor.js')->onlyOnForms())
            ->setDefaultColumns('col-md-9 col-xxl-7')
            ->setCustomOption(self::OPTION_NUM_OF_ROWS, null)
            ->setCustomOption(self::OPTION_TRIX_EDITOR_CONFIG, null);
    }

    public function setNumOfRows(int \$rows): self
    {
        if (\$rows < 1) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 1 or higher (%d given).', __METHOD__, \$rows));
        }

        \$this->setCustomOption(self::OPTION_NUM_OF_ROWS, \$rows);

        return \$this;
    }

    public function setTrixEditorConfig(array \$config): self
    {
        \$this->setCustomOption(self::OPTION_TRIX_EDITOR_CONFIG, \$config);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/TextEditorField.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\TextEditorType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class TextEditorField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_NUM_OF_ROWS = 'numOfRows';
    public const OPTION_TRIX_EDITOR_CONFIG = 'trixEditorConfig';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/text_editor')
            ->setFormType(TextEditorType::class)
            ->addCssClass('field-text_editor')
            ->addCssFiles(Asset::fromEasyAdminAssetPackage('field-text-editor.css')->onlyOnForms())
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-text-editor.js')->onlyOnForms())
            ->setDefaultColumns('col-md-9 col-xxl-7')
            ->setCustomOption(self::OPTION_NUM_OF_ROWS, null)
            ->setCustomOption(self::OPTION_TRIX_EDITOR_CONFIG, null);
    }

    public function setNumOfRows(int \$rows): self
    {
        if (\$rows < 1) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 1 or higher (%d given).', __METHOD__, \$rows));
        }

        \$this->setCustomOption(self::OPTION_NUM_OF_ROWS, \$rows);

        return \$this;
    }

    public function setTrixEditorConfig(array \$config): self
    {
        \$this->setCustomOption(self::OPTION_TRIX_EDITOR_CONFIG, \$config);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/TextEditorField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\TextEditorField.php");
    }
}
