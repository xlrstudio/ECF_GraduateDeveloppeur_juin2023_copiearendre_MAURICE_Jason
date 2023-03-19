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

/* easycorp/easyadmin-bundle/src/Field/AssociationField.php */
class __TwigTemplate_a122e6489cf0f760a1b52533ba9d053b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/AssociationField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/AssociationField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AssociationField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_AUTOCOMPLETE = 'autocomplete';
    public const OPTION_EMBEDDED_CRUD_FORM_CONTROLLER = 'crudControllerFqcn';
    /** @deprecated since easycorp/easyadmin-bundle 4.4.3 use AssociationField::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER */
    public const OPTION_CRUD_CONTROLLER = self::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER;
    public const OPTION_WIDGET = 'widget';
    public const OPTION_QUERY_BUILDER_CALLABLE = 'queryBuilderCallable';
    /** @internal this option is intended for internal use only */
    public const OPTION_RELATED_URL = 'relatedUrl';
    /** @internal this option is intended for internal use only */
    public const OPTION_DOCTRINE_ASSOCIATION_TYPE = 'associationType';

    public const WIDGET_AUTOCOMPLETE = 'autocomplete';
    public const WIDGET_NATIVE = 'native';

    /** @internal this option is intended for internal use only */
    public const PARAM_AUTOCOMPLETE_CONTEXT = 'autocompleteContext';

    /** @internal this option is intended for internal use only */
    public const OPTION_RENDER_AS_EMBEDDED_FORM = 'renderAsEmbeddedForm';

    public const OPTION_EMBEDDED_CRUD_FORM_NEW_PAGE_NAME = 'crudNewPageName';
    public const OPTION_EMBEDDED_CRUD_FORM_EDIT_PAGE_NAME = 'crudEditPageName';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/association')
            ->setFormType(EntityType::class)
            ->addCssClass('field-association')
            ->setDefaultColumns('col-md-7 col-xxl-6')
            ->setCustomOption(self::OPTION_AUTOCOMPLETE, false)
            ->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER, null)
            ->setCustomOption(self::OPTION_WIDGET, self::WIDGET_AUTOCOMPLETE)
            ->setCustomOption(self::OPTION_QUERY_BUILDER_CALLABLE, null)
            ->setCustomOption(self::OPTION_RELATED_URL, null)
            ->setCustomOption(self::OPTION_DOCTRINE_ASSOCIATION_TYPE, null)
            ->setCustomOption(self::OPTION_RENDER_AS_EMBEDDED_FORM, false)
            ->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_NEW_PAGE_NAME, null)
            ->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_EDIT_PAGE_NAME, null);
    }

    public function autocomplete(): self
    {
        \$this->setCustomOption(self::OPTION_AUTOCOMPLETE, true);

        return \$this;
    }

    public function renderAsNativeWidget(bool \$asNative = true): self
    {
        \$this->setCustomOption(self::OPTION_WIDGET, \$asNative ? self::WIDGET_NATIVE : self::WIDGET_AUTOCOMPLETE);

        return \$this;
    }

    public function setCrudController(string \$crudControllerFqcn): self
    {
        \$this->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER, \$crudControllerFqcn);

        return \$this;
    }

    public function setQueryBuilder(\\Closure \$queryBuilderCallable): self
    {
        \$this->setCustomOption(self::OPTION_QUERY_BUILDER_CALLABLE, \$queryBuilderCallable);

        return \$this;
    }

    public function renderAsEmbeddedForm(?string \$crudControllerFqcn = null, ?string \$crudNewPageName = null, ?string \$crudEditPageName = null): self
    {
        \$this->setCustomOption(self::OPTION_RENDER_AS_EMBEDDED_FORM, true);
        \$this->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER, \$crudControllerFqcn);
        \$this->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_NEW_PAGE_NAME, \$crudNewPageName);
        \$this->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_EDIT_PAGE_NAME, \$crudEditPageName);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/AssociationField.php";
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
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AssociationField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_AUTOCOMPLETE = 'autocomplete';
    public const OPTION_EMBEDDED_CRUD_FORM_CONTROLLER = 'crudControllerFqcn';
    /** @deprecated since easycorp/easyadmin-bundle 4.4.3 use AssociationField::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER */
    public const OPTION_CRUD_CONTROLLER = self::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER;
    public const OPTION_WIDGET = 'widget';
    public const OPTION_QUERY_BUILDER_CALLABLE = 'queryBuilderCallable';
    /** @internal this option is intended for internal use only */
    public const OPTION_RELATED_URL = 'relatedUrl';
    /** @internal this option is intended for internal use only */
    public const OPTION_DOCTRINE_ASSOCIATION_TYPE = 'associationType';

    public const WIDGET_AUTOCOMPLETE = 'autocomplete';
    public const WIDGET_NATIVE = 'native';

    /** @internal this option is intended for internal use only */
    public const PARAM_AUTOCOMPLETE_CONTEXT = 'autocompleteContext';

    /** @internal this option is intended for internal use only */
    public const OPTION_RENDER_AS_EMBEDDED_FORM = 'renderAsEmbeddedForm';

    public const OPTION_EMBEDDED_CRUD_FORM_NEW_PAGE_NAME = 'crudNewPageName';
    public const OPTION_EMBEDDED_CRUD_FORM_EDIT_PAGE_NAME = 'crudEditPageName';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/association')
            ->setFormType(EntityType::class)
            ->addCssClass('field-association')
            ->setDefaultColumns('col-md-7 col-xxl-6')
            ->setCustomOption(self::OPTION_AUTOCOMPLETE, false)
            ->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER, null)
            ->setCustomOption(self::OPTION_WIDGET, self::WIDGET_AUTOCOMPLETE)
            ->setCustomOption(self::OPTION_QUERY_BUILDER_CALLABLE, null)
            ->setCustomOption(self::OPTION_RELATED_URL, null)
            ->setCustomOption(self::OPTION_DOCTRINE_ASSOCIATION_TYPE, null)
            ->setCustomOption(self::OPTION_RENDER_AS_EMBEDDED_FORM, false)
            ->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_NEW_PAGE_NAME, null)
            ->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_EDIT_PAGE_NAME, null);
    }

    public function autocomplete(): self
    {
        \$this->setCustomOption(self::OPTION_AUTOCOMPLETE, true);

        return \$this;
    }

    public function renderAsNativeWidget(bool \$asNative = true): self
    {
        \$this->setCustomOption(self::OPTION_WIDGET, \$asNative ? self::WIDGET_NATIVE : self::WIDGET_AUTOCOMPLETE);

        return \$this;
    }

    public function setCrudController(string \$crudControllerFqcn): self
    {
        \$this->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER, \$crudControllerFqcn);

        return \$this;
    }

    public function setQueryBuilder(\\Closure \$queryBuilderCallable): self
    {
        \$this->setCustomOption(self::OPTION_QUERY_BUILDER_CALLABLE, \$queryBuilderCallable);

        return \$this;
    }

    public function renderAsEmbeddedForm(?string \$crudControllerFqcn = null, ?string \$crudNewPageName = null, ?string \$crudEditPageName = null): self
    {
        \$this->setCustomOption(self::OPTION_RENDER_AS_EMBEDDED_FORM, true);
        \$this->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_CONTROLLER, \$crudControllerFqcn);
        \$this->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_NEW_PAGE_NAME, \$crudNewPageName);
        \$this->setCustomOption(self::OPTION_EMBEDDED_CRUD_FORM_EDIT_PAGE_NAME, \$crudEditPageName);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/AssociationField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\AssociationField.php");
    }
}
