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

/* easycorp/easyadmin-bundle/src/Field/FormField.php */
class __TwigTemplate_56496c2e9e72dec3ae84e8a052c44820 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/FormField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/FormField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EaFormPanelType;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EaFormRowType;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminTabType;
use Symfony\\Component\\Uid\\Ulid;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FormField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_ICON = 'icon';
    public const OPTION_COLLAPSIBLE = 'collapsible';
    public const OPTION_COLLAPSED = 'collapsed';
    public const OPTION_ROW_BREAKPOINT = 'rowBreakPoint';

    /**
     * @internal Use the other named constructors instead (addPanel(), etc.)
     *
     * @param string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null)
    {
        throw new \\RuntimeException('Instead of this method, use the \"addPanel()\" method.');
    }

    /**
     * @param TranslatableInterface|string|false|null \$label
     * @param string|null                             \$icon  The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function addPanel(\$label = false, ?string \$icon = null): self
    {
        \$field = new self();
        \$icon = \$field->fixIconFormat(\$icon, 'FormField::addPanel()');

        return \$field
            ->setFieldFqcn(__CLASS__)
            ->hideOnIndex()
            ->setProperty('ea_form_panel_'.(new Ulid()))
            ->setLabel(\$label)
            ->setFormType(EaFormPanelType::class)
            ->addCssClass('field-form_panel')
            ->setFormTypeOptions(['mapped' => false, 'required' => false])
            ->setCustomOption(self::OPTION_ICON, \$icon)
            ->setCustomOption(self::OPTION_COLLAPSIBLE, false)
            ->setCustomOption(self::OPTION_COLLAPSED, false);
    }

    /**
     * @param string \$breakpointName The name of the breakpoint where the new row is inserted
     *                               It must be a valid Bootstrap 5 name ('', 'sm', 'md', 'lg', 'xl', 'xxl')
     */
    public static function addRow(string \$breakpointName = ''): self
    {
        \$field = new self();

        \$validBreakpointNames = ['', 'sm', 'md', 'lg', 'xl', 'xxl'];
        if (!\\in_array(\$breakpointName, \$validBreakpointNames, true)) {
            throw new \\InvalidArgumentException(sprintf('The value passed to the \"addRow()\" method of \"FormField\" can only be one of these values: \"%s\" (\"%s\" was given).', implode(', ', \$validBreakpointNames), \$breakpointName));
        }

        return \$field
            ->setFieldFqcn(__CLASS__)
            ->hideOnIndex()
            ->setProperty('ea_form_row_'.(new Ulid()))
            ->setFormType(EaFormRowType::class)
            ->addCssClass('field-form_row')
            ->setFormTypeOptions(['mapped' => false, 'required' => false])
            ->setCustomOption(self::OPTION_ROW_BREAKPOINT, \$breakpointName);
    }

    /**
     * @return static
     */
    public static function addTab(TranslatableInterface|string \$label, ?string \$icon = null): self
    {
        \$field = new self();
        \$icon = \$field->fixIconFormat(\$icon, 'FormField::addTab()');

        return \$field
            ->setFieldFqcn(__CLASS__)
            ->hideOnIndex()
            ->setProperty('ea_form_tab_'.(new Ulid()))
            ->setLabel(\$label)
            ->setFormType(EasyAdminTabType::class)
            ->addCssClass('field-form_tab')
            ->setFormTypeOptions(['mapped' => false, 'required' => false])
            ->setCustomOption(self::OPTION_ICON, \$icon);
    }

    public function setIcon(string \$iconCssClass): self
    {
        \$iconCssClass = \$this->fixIconFormat(\$iconCssClass, 'FormField::setIcon()');
        \$this->setCustomOption(self::OPTION_ICON, \$iconCssClass);

        return \$this;
    }

    public function collapsible(bool \$collapsible = true): self
    {
        if (!\$this->hasLabelOrIcon()) {
            throw new \\InvalidArgumentException(sprintf('The %s() method used in one of your panels requires that the panel defines either a label or an icon, but it defines none of them.', __METHOD__));
        }

        \$this->setCustomOption(self::OPTION_COLLAPSIBLE, \$collapsible);

        return \$this;
    }

    public function renderCollapsed(bool \$collapsed = true): self
    {
        if (!\$this->hasLabelOrIcon()) {
            throw new \\InvalidArgumentException(sprintf('The %s() method used in one of your panels requires that the panel defines either a label or an icon, but it defines none of them.', __METHOD__));
        }

        \$this->setCustomOption(self::OPTION_COLLAPSIBLE, true);
        \$this->setCustomOption(self::OPTION_COLLAPSED, \$collapsed);

        return \$this;
    }

    private function hasLabelOrIcon(): bool
    {
        // don't use empty() because the label can contain only white spaces (it's a valid edge-case)
        return (null !== \$this->dto->getLabel() && '' !== \$this->dto->getLabel())
            || null !== \$this->dto->getCustomOption(self::OPTION_ICON);
    }

    private function fixIconFormat(?string \$icon, string \$methodName): ?string
    {
        if (null === \$icon) {
            return \$icon;
        }

        if (!str_contains(\$icon, 'fa-') && !str_contains(\$icon, 'far-') && !str_contains(\$icon, 'fab-')) {
            trigger_deprecation('easycorp/easyadmin-bundle', '4.4.0', 'The value passed as the \$icon argument in \"%s\" method must be the full FontAwesome CSS class of the icon. For example, if you passed \"user\" before, you now must pass \"fa fa-user\" (or any style variant like \"fa fa-solid fa-user\").', \$methodName);

            \$icon = sprintf('fa fa-%s', \$icon);
        }

        return \$icon;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/FormField.php";
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
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EaFormPanelType;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EaFormRowType;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminTabType;
use Symfony\\Component\\Uid\\Ulid;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class FormField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_ICON = 'icon';
    public const OPTION_COLLAPSIBLE = 'collapsible';
    public const OPTION_COLLAPSED = 'collapsed';
    public const OPTION_ROW_BREAKPOINT = 'rowBreakPoint';

    /**
     * @internal Use the other named constructors instead (addPanel(), etc.)
     *
     * @param string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null)
    {
        throw new \\RuntimeException('Instead of this method, use the \"addPanel()\" method.');
    }

    /**
     * @param TranslatableInterface|string|false|null \$label
     * @param string|null                             \$icon  The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function addPanel(\$label = false, ?string \$icon = null): self
    {
        \$field = new self();
        \$icon = \$field->fixIconFormat(\$icon, 'FormField::addPanel()');

        return \$field
            ->setFieldFqcn(__CLASS__)
            ->hideOnIndex()
            ->setProperty('ea_form_panel_'.(new Ulid()))
            ->setLabel(\$label)
            ->setFormType(EaFormPanelType::class)
            ->addCssClass('field-form_panel')
            ->setFormTypeOptions(['mapped' => false, 'required' => false])
            ->setCustomOption(self::OPTION_ICON, \$icon)
            ->setCustomOption(self::OPTION_COLLAPSIBLE, false)
            ->setCustomOption(self::OPTION_COLLAPSED, false);
    }

    /**
     * @param string \$breakpointName The name of the breakpoint where the new row is inserted
     *                               It must be a valid Bootstrap 5 name ('', 'sm', 'md', 'lg', 'xl', 'xxl')
     */
    public static function addRow(string \$breakpointName = ''): self
    {
        \$field = new self();

        \$validBreakpointNames = ['', 'sm', 'md', 'lg', 'xl', 'xxl'];
        if (!\\in_array(\$breakpointName, \$validBreakpointNames, true)) {
            throw new \\InvalidArgumentException(sprintf('The value passed to the \"addRow()\" method of \"FormField\" can only be one of these values: \"%s\" (\"%s\" was given).', implode(', ', \$validBreakpointNames), \$breakpointName));
        }

        return \$field
            ->setFieldFqcn(__CLASS__)
            ->hideOnIndex()
            ->setProperty('ea_form_row_'.(new Ulid()))
            ->setFormType(EaFormRowType::class)
            ->addCssClass('field-form_row')
            ->setFormTypeOptions(['mapped' => false, 'required' => false])
            ->setCustomOption(self::OPTION_ROW_BREAKPOINT, \$breakpointName);
    }

    /**
     * @return static
     */
    public static function addTab(TranslatableInterface|string \$label, ?string \$icon = null): self
    {
        \$field = new self();
        \$icon = \$field->fixIconFormat(\$icon, 'FormField::addTab()');

        return \$field
            ->setFieldFqcn(__CLASS__)
            ->hideOnIndex()
            ->setProperty('ea_form_tab_'.(new Ulid()))
            ->setLabel(\$label)
            ->setFormType(EasyAdminTabType::class)
            ->addCssClass('field-form_tab')
            ->setFormTypeOptions(['mapped' => false, 'required' => false])
            ->setCustomOption(self::OPTION_ICON, \$icon);
    }

    public function setIcon(string \$iconCssClass): self
    {
        \$iconCssClass = \$this->fixIconFormat(\$iconCssClass, 'FormField::setIcon()');
        \$this->setCustomOption(self::OPTION_ICON, \$iconCssClass);

        return \$this;
    }

    public function collapsible(bool \$collapsible = true): self
    {
        if (!\$this->hasLabelOrIcon()) {
            throw new \\InvalidArgumentException(sprintf('The %s() method used in one of your panels requires that the panel defines either a label or an icon, but it defines none of them.', __METHOD__));
        }

        \$this->setCustomOption(self::OPTION_COLLAPSIBLE, \$collapsible);

        return \$this;
    }

    public function renderCollapsed(bool \$collapsed = true): self
    {
        if (!\$this->hasLabelOrIcon()) {
            throw new \\InvalidArgumentException(sprintf('The %s() method used in one of your panels requires that the panel defines either a label or an icon, but it defines none of them.', __METHOD__));
        }

        \$this->setCustomOption(self::OPTION_COLLAPSIBLE, true);
        \$this->setCustomOption(self::OPTION_COLLAPSED, \$collapsed);

        return \$this;
    }

    private function hasLabelOrIcon(): bool
    {
        // don't use empty() because the label can contain only white spaces (it's a valid edge-case)
        return (null !== \$this->dto->getLabel() && '' !== \$this->dto->getLabel())
            || null !== \$this->dto->getCustomOption(self::OPTION_ICON);
    }

    private function fixIconFormat(?string \$icon, string \$methodName): ?string
    {
        if (null === \$icon) {
            return \$icon;
        }

        if (!str_contains(\$icon, 'fa-') && !str_contains(\$icon, 'far-') && !str_contains(\$icon, 'fab-')) {
            trigger_deprecation('easycorp/easyadmin-bundle', '4.4.0', 'The value passed as the \$icon argument in \"%s\" method must be the full FontAwesome CSS class of the icon. For example, if you passed \"user\" before, you now must pass \"fa fa-user\" (or any style variant like \"fa fa-solid fa-user\").', \$methodName);

            \$icon = sprintf('fa fa-%s', \$icon);
        }

        return \$icon;
    }
}
", "easycorp/easyadmin-bundle/src/Field/FormField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\FormField.php");
    }
}
