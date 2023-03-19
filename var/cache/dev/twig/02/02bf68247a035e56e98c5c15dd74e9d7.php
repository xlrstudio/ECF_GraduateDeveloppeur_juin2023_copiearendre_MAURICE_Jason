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

/* easycorp/easyadmin-bundle/src/Form/Type/CrudFormType.php */
class __TwigTemplate_fbc14accf28c3084af5905a07493ae26 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/CrudFormType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/CrudFormType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use ArrayObject;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\EventListener\\EasyAdminTabSubscriber;
use Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Custom form type that deals with some of the logic used to render the
 * forms used to create and edit EasyAdmin entities.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class CrudFormType extends AbstractType
{
    private DoctrineOrmTypeGuesser \$doctrineOrmTypeGuesser;

    public function __construct(DoctrineOrmTypeGuesser \$doctrineOrmTypeGuesser)
    {
        \$this->doctrineOrmTypeGuesser = \$doctrineOrmTypeGuesser;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        /** @var EntityDto \$entityDto */
        \$entityDto = \$options['entityDto'];
        \$formTabs = [];
        \$currentFormTab = null;
        \$formPanels = [];
        \$currentFormPanel = 0;

        foreach (\$entityDto->getFields() as \$fieldDto) {
            \$formFieldOptions = \$fieldDto->getFormTypeOptions();

            // the names of embedded Doctrine entities contain dots, which are not allowed
            // in HTML element names. In those cases, fix the name but also update the
            // 'property_path' option to keep the original field name
            if (str_contains(\$fieldDto->getProperty(), '.')) {
                \$formFieldOptions['property_path'] = \$fieldDto->getProperty();
                \$name = str_replace(['.', '[', ']'], '_', \$fieldDto->getProperty());
            } else {
                \$name = \$fieldDto->getProperty();
            }

            if (null === \$formFieldType = \$fieldDto->getFormType()) {
                \$guessType = \$this->doctrineOrmTypeGuesser->guessType(\$entityDto->getFqcn(), \$fieldDto->getProperty());
                \$formFieldType = \$guessType->getType();
                \$formFieldOptions = array_merge(\$guessType->getOptions(), \$formFieldOptions);
            }

            if (EaFormPanelType::class === \$formFieldType) {
                ++\$currentFormPanel;
                \$formPanels[\$currentFormPanel] = [
                    'form_tab' => \$currentFormTab ?? null,
                    'label' => \$fieldDto->getLabel(),
                    'icon' => \$fieldDto->getCustomOptions()->get(FormField::OPTION_ICON),
                    'collapsible' => \$fieldDto->getCustomOptions()->get(FormField::OPTION_COLLAPSIBLE),
                    'collapsed' => \$fieldDto->getCustomOptions()->get(FormField::OPTION_COLLAPSED),
                    'help' => \$fieldDto->getHelp(),
                    'css_class' => \$fieldDto->getCssClass(),
                ];

                continue;
            }

            // if the form field is a special 'tab' design element, don't add it
            // to the form. Instead, consider it the current form group (this is
            // applied to the form fields defined after it) and store its details
            // in a field to get them in form template
            if (\\in_array(\$formFieldType, ['ea_tab', EasyAdminTabType::class], true)) {
                ++\$currentFormPanel;
                \$metadata = [];
                // The first tab should be marked as active by default
                \$metadata['active'] = 0 === \\count(\$formTabs);
                \$metadata['errors'] = 0;
                \$metadata['id'] = \$fieldDto->getProperty();
                \$metadata['label'] = \$fieldDto->getLabel();
                \$metadata['help'] = \$fieldDto->getHelp();
                \$metadata[FormField::OPTION_ICON] = \$fieldDto->getCustomOption(FormField::OPTION_ICON);
                \$currentFormTab = (string) \$fieldDto->getLabel();

                // plain arrays are not enough for tabs because they are modified in the
                // lifecycle of a form (e.g. add info about form errors). Use an ArrayObject instead.
                \$formTabs[\$currentFormTab] = new \\ArrayObject(\$metadata);

                continue;
            }

            // Pass the current panel and tab down to nested CRUD forms, the nested
            // CRUD form fields are forced to use their parents panel and tab
            if (self::class === \$formFieldType) {
                \$formFieldOptions['ea_form_panel'] = \$currentFormPanel;
                \$formFieldOptions['ea_form_tab'] = \$currentFormTab;
            }

            \$formField = \$builder->getFormFactory()->createNamedBuilder(\$name, \$formFieldType, null, \$formFieldOptions);
            \$formField->setAttribute('ea_entity', \$entityDto);
            \$formField->setAttribute('ea_form_panel', \$options['ea_form_panel'] ?? \$currentFormPanel);
            \$formField->setAttribute('ea_form_tab', \$options['ea_form_tab'] ?? \$currentFormTab);
            \$formField->setAttribute('ea_field', \$fieldDto);

            \$builder->add(\$formField);
        }

        \$builder->setAttribute('ea_form_tabs', \$formTabs);
        \$builder->setAttribute('ea_form_panels', \$formPanels);

        if (\\count(\$formTabs) > 0) {
            \$builder->addEventSubscriber(new EasyAdminTabSubscriber());
        }
    }

    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['ea_crud_form'] = [
            'assets' => '** This variable no longer stores field assets. Instead, use \"ea.crud.fieldAssets()\" in your Twig template.',
            'entity' => \$options['entityDto'],
            'form_tabs' => \$form->getConfig()->getAttribute('ea_form_tabs'),
            'form_panels' => \$form->getConfig()->getAttribute('ea_form_panels'),
        ];
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver
            ->setDefaults([
                'allow_extra_fields' => true,
                'data_class' => static fn (Options \$options, \$dataClass) => \$dataClass ?? \$options['entityDto']->getFqcn(),
            ])
            ->setDefined(['entityDto', 'ea_form_panel', 'ea_form_tab'])
            ->setRequired(['entityDto']);
    }

    public function getBlockPrefix(): string
    {
        return 'ea_crud';
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Type/CrudFormType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use ArrayObject;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\FormField;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\EventListener\\EasyAdminTabSubscriber;
use Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Custom form type that deals with some of the logic used to render the
 * forms used to create and edit EasyAdmin entities.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class CrudFormType extends AbstractType
{
    private DoctrineOrmTypeGuesser \$doctrineOrmTypeGuesser;

    public function __construct(DoctrineOrmTypeGuesser \$doctrineOrmTypeGuesser)
    {
        \$this->doctrineOrmTypeGuesser = \$doctrineOrmTypeGuesser;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        /** @var EntityDto \$entityDto */
        \$entityDto = \$options['entityDto'];
        \$formTabs = [];
        \$currentFormTab = null;
        \$formPanels = [];
        \$currentFormPanel = 0;

        foreach (\$entityDto->getFields() as \$fieldDto) {
            \$formFieldOptions = \$fieldDto->getFormTypeOptions();

            // the names of embedded Doctrine entities contain dots, which are not allowed
            // in HTML element names. In those cases, fix the name but also update the
            // 'property_path' option to keep the original field name
            if (str_contains(\$fieldDto->getProperty(), '.')) {
                \$formFieldOptions['property_path'] = \$fieldDto->getProperty();
                \$name = str_replace(['.', '[', ']'], '_', \$fieldDto->getProperty());
            } else {
                \$name = \$fieldDto->getProperty();
            }

            if (null === \$formFieldType = \$fieldDto->getFormType()) {
                \$guessType = \$this->doctrineOrmTypeGuesser->guessType(\$entityDto->getFqcn(), \$fieldDto->getProperty());
                \$formFieldType = \$guessType->getType();
                \$formFieldOptions = array_merge(\$guessType->getOptions(), \$formFieldOptions);
            }

            if (EaFormPanelType::class === \$formFieldType) {
                ++\$currentFormPanel;
                \$formPanels[\$currentFormPanel] = [
                    'form_tab' => \$currentFormTab ?? null,
                    'label' => \$fieldDto->getLabel(),
                    'icon' => \$fieldDto->getCustomOptions()->get(FormField::OPTION_ICON),
                    'collapsible' => \$fieldDto->getCustomOptions()->get(FormField::OPTION_COLLAPSIBLE),
                    'collapsed' => \$fieldDto->getCustomOptions()->get(FormField::OPTION_COLLAPSED),
                    'help' => \$fieldDto->getHelp(),
                    'css_class' => \$fieldDto->getCssClass(),
                ];

                continue;
            }

            // if the form field is a special 'tab' design element, don't add it
            // to the form. Instead, consider it the current form group (this is
            // applied to the form fields defined after it) and store its details
            // in a field to get them in form template
            if (\\in_array(\$formFieldType, ['ea_tab', EasyAdminTabType::class], true)) {
                ++\$currentFormPanel;
                \$metadata = [];
                // The first tab should be marked as active by default
                \$metadata['active'] = 0 === \\count(\$formTabs);
                \$metadata['errors'] = 0;
                \$metadata['id'] = \$fieldDto->getProperty();
                \$metadata['label'] = \$fieldDto->getLabel();
                \$metadata['help'] = \$fieldDto->getHelp();
                \$metadata[FormField::OPTION_ICON] = \$fieldDto->getCustomOption(FormField::OPTION_ICON);
                \$currentFormTab = (string) \$fieldDto->getLabel();

                // plain arrays are not enough for tabs because they are modified in the
                // lifecycle of a form (e.g. add info about form errors). Use an ArrayObject instead.
                \$formTabs[\$currentFormTab] = new \\ArrayObject(\$metadata);

                continue;
            }

            // Pass the current panel and tab down to nested CRUD forms, the nested
            // CRUD form fields are forced to use their parents panel and tab
            if (self::class === \$formFieldType) {
                \$formFieldOptions['ea_form_panel'] = \$currentFormPanel;
                \$formFieldOptions['ea_form_tab'] = \$currentFormTab;
            }

            \$formField = \$builder->getFormFactory()->createNamedBuilder(\$name, \$formFieldType, null, \$formFieldOptions);
            \$formField->setAttribute('ea_entity', \$entityDto);
            \$formField->setAttribute('ea_form_panel', \$options['ea_form_panel'] ?? \$currentFormPanel);
            \$formField->setAttribute('ea_form_tab', \$options['ea_form_tab'] ?? \$currentFormTab);
            \$formField->setAttribute('ea_field', \$fieldDto);

            \$builder->add(\$formField);
        }

        \$builder->setAttribute('ea_form_tabs', \$formTabs);
        \$builder->setAttribute('ea_form_panels', \$formPanels);

        if (\\count(\$formTabs) > 0) {
            \$builder->addEventSubscriber(new EasyAdminTabSubscriber());
        }
    }

    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['ea_crud_form'] = [
            'assets' => '** This variable no longer stores field assets. Instead, use \"ea.crud.fieldAssets()\" in your Twig template.',
            'entity' => \$options['entityDto'],
            'form_tabs' => \$form->getConfig()->getAttribute('ea_form_tabs'),
            'form_panels' => \$form->getConfig()->getAttribute('ea_form_panels'),
        ];
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver
            ->setDefaults([
                'allow_extra_fields' => true,
                'data_class' => static fn (Options \$options, \$dataClass) => \$dataClass ?? \$options['entityDto']->getFqcn(),
            ])
            ->setDefined(['entityDto', 'ea_form_panel', 'ea_form_tab'])
            ->setRequired(['entityDto']);
    }

    public function getBlockPrefix(): string
    {
        return 'ea_crud';
    }
}
", "easycorp/easyadmin-bundle/src/Form/Type/CrudFormType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\CrudFormType.php");
    }
}