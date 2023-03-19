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

/* easycorp/easyadmin-bundle/src/Form/Extension/EaCrudFormTypeExtension.php */
class __TwigTemplate_36162c38d7abe990b30dfee57bde4b28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Extension/EaCrudFormTypeExtension.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Extension/EaCrudFormTypeExtension.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension;

use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Extension that injects EasyAdmin related information in the view used to
 * render the form.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class EaCrudFormTypeExtension extends AbstractTypeExtension
{
    private AdminContextProvider \$adminContextProvider;

    public function __construct(AdminContextProvider \$adminContextProvider)
    {
        \$this->adminContextProvider = \$adminContextProvider;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefined(['ea_crud_form']);
    }

    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (null === \$this->adminContextProvider->getContext()) {
            return;
        }

        \$view->vars['ea_crud_form'] = [
            'form_panel' => \$form->getConfig()->getAttribute('ea_form_panel'),
            'form_tab' => \$form->getConfig()->getAttribute('ea_form_tab'),
            'ea_field' => \$form->getConfig()->getAttribute('ea_field'),
            'ea_entity' => \$form->getConfig()->getAttribute('ea_entity'),
        ];
    }

    public static function getExtendedTypes(): iterable
    {
        return [FormType::class];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Extension/EaCrudFormTypeExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension;

use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Extension that injects EasyAdmin related information in the view used to
 * render the form.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class EaCrudFormTypeExtension extends AbstractTypeExtension
{
    private AdminContextProvider \$adminContextProvider;

    public function __construct(AdminContextProvider \$adminContextProvider)
    {
        \$this->adminContextProvider = \$adminContextProvider;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefined(['ea_crud_form']);
    }

    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        if (null === \$this->adminContextProvider->getContext()) {
            return;
        }

        \$view->vars['ea_crud_form'] = [
            'form_panel' => \$form->getConfig()->getAttribute('ea_form_panel'),
            'form_tab' => \$form->getConfig()->getAttribute('ea_form_tab'),
            'ea_field' => \$form->getConfig()->getAttribute('ea_field'),
            'ea_entity' => \$form->getConfig()->getAttribute('ea_entity'),
        ];
    }

    public static function getExtendedTypes(): iterable
    {
        return [FormType::class];
    }
}
", "easycorp/easyadmin-bundle/src/Form/Extension/EaCrudFormTypeExtension.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Extension\\EaCrudFormTypeExtension.php");
    }
}
