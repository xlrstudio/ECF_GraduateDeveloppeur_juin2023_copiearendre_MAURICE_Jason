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

/* easycorp/easyadmin-bundle/src/Field/CodeEditorField.php */
class __TwigTemplate_df51920a59fdb0e08962f0b2800d0c8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/CodeEditorField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/CodeEditorField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Asset;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CodeEditorType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CodeEditorField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_INDENT_WITH_TABS = 'indentWithTabs';
    public const OPTION_LANGUAGE = 'language';
    public const OPTION_NUM_OF_ROWS = 'numOfRows';
    public const OPTION_TAB_SIZE = 'tabSize';
    public const OPTION_SHOW_LINE_NUMBERS = 'showLineNumbers';

    private const ALLOWED_LANGUAGES = ['css', 'dockerfile', 'js', 'markdown', 'nginx', 'php', 'shell', 'sql', 'twig', 'xml', 'yaml-frontmatter', 'yaml'];

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/code_editor')
            ->setFormType(CodeEditorType::class)
            ->addCssClass('field-code_editor')
            ->addCssFiles(Asset::fromEasyAdminAssetPackage('field-code-editor.css')->onlyOnForms())
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-code-editor.js')->onlyOnForms())
            ->setDefaultColumns('col-md-12 col-xxl-10')
            ->setCustomOption(self::OPTION_INDENT_WITH_TABS, false)
            ->setCustomOption(self::OPTION_LANGUAGE, 'markdown')
            ->setCustomOption(self::OPTION_NUM_OF_ROWS, null)
            ->setCustomOption(self::OPTION_TAB_SIZE, 4)
            ->setCustomOption(self::OPTION_SHOW_LINE_NUMBERS, true);
    }

    public function setIndentWithTabs(bool \$useTabs): self
    {
        \$this->setCustomOption(self::OPTION_INDENT_WITH_TABS, \$useTabs);

        return \$this;
    }

    public function setLanguage(string \$language): self
    {
        if (!\\in_array(\$language, self::ALLOWED_LANGUAGES, true)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" language is not available for code highlighting (allowed languages: %s).', __METHOD__, implode(', ', self::ALLOWED_LANGUAGES)));
        }

        \$this->setCustomOption(self::OPTION_LANGUAGE, \$language);

        return \$this;
    }

    public function setNumOfRows(int \$rows): self
    {
        if (\$rows < 1) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 1 or higher (%d given).', __METHOD__, \$rows));
        }

        \$this->setCustomOption(self::OPTION_NUM_OF_ROWS, \$rows);

        return \$this;
    }

    public function setTabSize(int \$tabSize): self
    {
        if (\$tabSize < 1) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 1 or higher (%d given).', __METHOD__, \$tabSize));
        }

        \$this->setCustomOption(self::OPTION_TAB_SIZE, \$tabSize);

        return \$this;
    }

    public function hideLineNumbers(bool \$hideNumbers = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_LINE_NUMBERS, !\$hideNumbers);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/CodeEditorField.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CodeEditorType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CodeEditorField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_INDENT_WITH_TABS = 'indentWithTabs';
    public const OPTION_LANGUAGE = 'language';
    public const OPTION_NUM_OF_ROWS = 'numOfRows';
    public const OPTION_TAB_SIZE = 'tabSize';
    public const OPTION_SHOW_LINE_NUMBERS = 'showLineNumbers';

    private const ALLOWED_LANGUAGES = ['css', 'dockerfile', 'js', 'markdown', 'nginx', 'php', 'shell', 'sql', 'twig', 'xml', 'yaml-frontmatter', 'yaml'];

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/code_editor')
            ->setFormType(CodeEditorType::class)
            ->addCssClass('field-code_editor')
            ->addCssFiles(Asset::fromEasyAdminAssetPackage('field-code-editor.css')->onlyOnForms())
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-code-editor.js')->onlyOnForms())
            ->setDefaultColumns('col-md-12 col-xxl-10')
            ->setCustomOption(self::OPTION_INDENT_WITH_TABS, false)
            ->setCustomOption(self::OPTION_LANGUAGE, 'markdown')
            ->setCustomOption(self::OPTION_NUM_OF_ROWS, null)
            ->setCustomOption(self::OPTION_TAB_SIZE, 4)
            ->setCustomOption(self::OPTION_SHOW_LINE_NUMBERS, true);
    }

    public function setIndentWithTabs(bool \$useTabs): self
    {
        \$this->setCustomOption(self::OPTION_INDENT_WITH_TABS, \$useTabs);

        return \$this;
    }

    public function setLanguage(string \$language): self
    {
        if (!\\in_array(\$language, self::ALLOWED_LANGUAGES, true)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" language is not available for code highlighting (allowed languages: %s).', __METHOD__, implode(', ', self::ALLOWED_LANGUAGES)));
        }

        \$this->setCustomOption(self::OPTION_LANGUAGE, \$language);

        return \$this;
    }

    public function setNumOfRows(int \$rows): self
    {
        if (\$rows < 1) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 1 or higher (%d given).', __METHOD__, \$rows));
        }

        \$this->setCustomOption(self::OPTION_NUM_OF_ROWS, \$rows);

        return \$this;
    }

    public function setTabSize(int \$tabSize): self
    {
        if (\$tabSize < 1) {
            throw new \\InvalidArgumentException(sprintf('The argument of the \"%s()\" method must be 1 or higher (%d given).', __METHOD__, \$tabSize));
        }

        \$this->setCustomOption(self::OPTION_TAB_SIZE, \$tabSize);

        return \$this;
    }

    public function hideLineNumbers(bool \$hideNumbers = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_LINE_NUMBERS, !\$hideNumbers);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/CodeEditorField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\CodeEditorField.php");
    }
}
