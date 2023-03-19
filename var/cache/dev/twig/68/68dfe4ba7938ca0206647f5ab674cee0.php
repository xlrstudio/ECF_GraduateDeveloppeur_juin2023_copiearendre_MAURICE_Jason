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

/* easycorp/easyadmin-bundle/src/Field/CollectionField.php */
class __TwigTemplate_6fd979310e9c4f33b8759205d12b2d55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/CollectionField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/CollectionField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Asset;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CollectionField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_ALLOW_ADD = 'allowAdd';
    public const OPTION_ALLOW_DELETE = 'allowDelete';
    public const OPTION_ENTRY_IS_COMPLEX = 'entryIsComplex';
    public const OPTION_ENTRY_TYPE = 'entryType';
    public const OPTION_SHOW_ENTRY_LABEL = 'showEntryLabel';
    public const OPTION_RENDER_EXPANDED = 'renderExpanded';
    public const OPTION_ENTRY_USES_CRUD_FORM = 'entryUsesCrudController';
    public const OPTION_ENTRY_CRUD_CONTROLLER_FQCN = 'entryCrudControllerFqcn';
    public const OPTION_ENTRY_CRUD_NEW_PAGE_NAME = 'entryCrudNewPageName';
    public const OPTION_ENTRY_CRUD_EDIT_PAGE_NAME = 'entryCrudEditPageName';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/collection')
            ->setFormType(CollectionType::class)
            ->addCssClass('field-collection')
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-collection.js')->onlyOnForms())
            ->setDefaultColumns('col-md-8 col-xxl-7')
            ->setCustomOption(self::OPTION_ALLOW_ADD, true)
            ->setCustomOption(self::OPTION_ALLOW_DELETE, true)
            ->setCustomOption(self::OPTION_ENTRY_IS_COMPLEX, null)
            ->setCustomOption(self::OPTION_ENTRY_TYPE, null)
            ->setCustomOption(self::OPTION_SHOW_ENTRY_LABEL, false)
            ->setCustomOption(self::OPTION_RENDER_EXPANDED, false)
            ->setCustomOption(self::OPTION_ENTRY_USES_CRUD_FORM, false)
            ->setCustomOption(self::OPTION_ENTRY_CRUD_CONTROLLER_FQCN, null)
            ->setCustomOption(self::OPTION_ENTRY_CRUD_NEW_PAGE_NAME, null)
            ->setCustomOption(self::OPTION_ENTRY_CRUD_EDIT_PAGE_NAME, null);
    }

    public function allowAdd(bool \$allow = true): self
    {
        \$this->setCustomOption(self::OPTION_ALLOW_ADD, \$allow);

        return \$this;
    }

    public function allowDelete(bool \$allow = true): self
    {
        \$this->setCustomOption(self::OPTION_ALLOW_DELETE, \$allow);

        return \$this;
    }

    /**
     * Set this option to TRUE if the collection items are complex form types
     * composed of several form fields (EasyAdmin applies a special rendering to make them look better).
     */
    public function setEntryIsComplex(bool \$isComplex = true): self
    {
        \$this->setCustomOption(self::OPTION_ENTRY_IS_COMPLEX, \$isComplex);

        return \$this;
    }

    public function setEntryType(string \$formTypeFqcn): self
    {
        \$this->setCustomOption(self::OPTION_ENTRY_TYPE, \$formTypeFqcn);

        return \$this;
    }

    public function showEntryLabel(bool \$showLabel = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_ENTRY_LABEL, \$showLabel);

        return \$this;
    }

    public function renderExpanded(bool \$renderExpanded = true): self
    {
        \$this->setCustomOption(self::OPTION_RENDER_EXPANDED, \$renderExpanded);

        return \$this;
    }

    public function useEntryCrudForm(?string \$crudControllerFqcn = null, ?string \$crudNewPageName = null, ?string \$crudEditPageName = null): self
    {
        \$this->setCustomOption(self::OPTION_ENTRY_USES_CRUD_FORM, true);
        \$this->setCustomOption(self::OPTION_ENTRY_CRUD_CONTROLLER_FQCN, \$crudControllerFqcn);
        \$this->setCustomOption(self::OPTION_ENTRY_CRUD_NEW_PAGE_NAME, \$crudNewPageName);
        \$this->setCustomOption(self::OPTION_ENTRY_CRUD_EDIT_PAGE_NAME, \$crudEditPageName);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/CollectionField.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class CollectionField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_ALLOW_ADD = 'allowAdd';
    public const OPTION_ALLOW_DELETE = 'allowDelete';
    public const OPTION_ENTRY_IS_COMPLEX = 'entryIsComplex';
    public const OPTION_ENTRY_TYPE = 'entryType';
    public const OPTION_SHOW_ENTRY_LABEL = 'showEntryLabel';
    public const OPTION_RENDER_EXPANDED = 'renderExpanded';
    public const OPTION_ENTRY_USES_CRUD_FORM = 'entryUsesCrudController';
    public const OPTION_ENTRY_CRUD_CONTROLLER_FQCN = 'entryCrudControllerFqcn';
    public const OPTION_ENTRY_CRUD_NEW_PAGE_NAME = 'entryCrudNewPageName';
    public const OPTION_ENTRY_CRUD_EDIT_PAGE_NAME = 'entryCrudEditPageName';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/collection')
            ->setFormType(CollectionType::class)
            ->addCssClass('field-collection')
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-collection.js')->onlyOnForms())
            ->setDefaultColumns('col-md-8 col-xxl-7')
            ->setCustomOption(self::OPTION_ALLOW_ADD, true)
            ->setCustomOption(self::OPTION_ALLOW_DELETE, true)
            ->setCustomOption(self::OPTION_ENTRY_IS_COMPLEX, null)
            ->setCustomOption(self::OPTION_ENTRY_TYPE, null)
            ->setCustomOption(self::OPTION_SHOW_ENTRY_LABEL, false)
            ->setCustomOption(self::OPTION_RENDER_EXPANDED, false)
            ->setCustomOption(self::OPTION_ENTRY_USES_CRUD_FORM, false)
            ->setCustomOption(self::OPTION_ENTRY_CRUD_CONTROLLER_FQCN, null)
            ->setCustomOption(self::OPTION_ENTRY_CRUD_NEW_PAGE_NAME, null)
            ->setCustomOption(self::OPTION_ENTRY_CRUD_EDIT_PAGE_NAME, null);
    }

    public function allowAdd(bool \$allow = true): self
    {
        \$this->setCustomOption(self::OPTION_ALLOW_ADD, \$allow);

        return \$this;
    }

    public function allowDelete(bool \$allow = true): self
    {
        \$this->setCustomOption(self::OPTION_ALLOW_DELETE, \$allow);

        return \$this;
    }

    /**
     * Set this option to TRUE if the collection items are complex form types
     * composed of several form fields (EasyAdmin applies a special rendering to make them look better).
     */
    public function setEntryIsComplex(bool \$isComplex = true): self
    {
        \$this->setCustomOption(self::OPTION_ENTRY_IS_COMPLEX, \$isComplex);

        return \$this;
    }

    public function setEntryType(string \$formTypeFqcn): self
    {
        \$this->setCustomOption(self::OPTION_ENTRY_TYPE, \$formTypeFqcn);

        return \$this;
    }

    public function showEntryLabel(bool \$showLabel = true): self
    {
        \$this->setCustomOption(self::OPTION_SHOW_ENTRY_LABEL, \$showLabel);

        return \$this;
    }

    public function renderExpanded(bool \$renderExpanded = true): self
    {
        \$this->setCustomOption(self::OPTION_RENDER_EXPANDED, \$renderExpanded);

        return \$this;
    }

    public function useEntryCrudForm(?string \$crudControllerFqcn = null, ?string \$crudNewPageName = null, ?string \$crudEditPageName = null): self
    {
        \$this->setCustomOption(self::OPTION_ENTRY_USES_CRUD_FORM, true);
        \$this->setCustomOption(self::OPTION_ENTRY_CRUD_CONTROLLER_FQCN, \$crudControllerFqcn);
        \$this->setCustomOption(self::OPTION_ENTRY_CRUD_NEW_PAGE_NAME, \$crudNewPageName);
        \$this->setCustomOption(self::OPTION_ENTRY_CRUD_EDIT_PAGE_NAME, \$crudEditPageName);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/CollectionField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\CollectionField.php");
    }
}
