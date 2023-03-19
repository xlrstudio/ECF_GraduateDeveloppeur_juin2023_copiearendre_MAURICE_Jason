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

/* easycorp/easyadmin-bundle/src/Form/Extension/CollectionTypeExtension.php */
class __TwigTemplate_0b79288e0206723cad2365e93563e676 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Extension/CollectionTypeExtension.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Extension/CollectionTypeExtension.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension;

use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;

/**
 * Extension that allows using collection_entry_* blocks in form themes.
 * This is the same code added in https://github.com/symfony/symfony/pull/36088
 * which is only available when using Symfony 5.1 or higher.
 *
 * @author Jules Pietri <heah@heahprod.com>
 */
class CollectionTypeExtension extends AbstractTypeExtension
{
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$prefixOffset = -2;
        // check if the entry type also defines a block prefix
        /** @var FormInterface \$entry */
        foreach (\$form as \$entry) {
            \$blockPrefix = \$entry->getConfig()->getOption('block_prefix');
            if (null !== \$blockPrefix && '' !== \$blockPrefix) {
                --\$prefixOffset;
            }

            break;
        }

        foreach (\$view as \$entryView) {
            // needed to avoid 'Unable to render the form because the block names array contains duplicates'
            if (\\in_array('collection_entry', \$entryView->vars['block_prefixes'], true)) {
                continue;
            }

            array_splice(\$entryView->vars['block_prefixes'], \$prefixOffset, 0, 'collection_entry');
        }

        /** @var FormInterface|null \$prototype */
        \$prototype = \$form->getConfig()->getAttribute('prototype');
        if (null !== \$prototype) {
            \$blockPrefix = \$prototype->getConfig()->getOption('block_prefix');
            if (\$prefixOffset > -3 && null !== \$blockPrefix && '' !== \$blockPrefix) {
                --\$prefixOffset;
            }

            // needed to avoid 'Unable to render the form because the block names array contains duplicates'
            if (!\\in_array('collection_entry', \$view->vars['prototype']->vars['block_prefixes'], true)) {
                array_splice(\$view->vars['prototype']->vars['block_prefixes'], \$prefixOffset, 0, 'collection_entry');
            }
        }
    }

    public static function getExtendedTypes(): iterable
    {
        return [CollectionType::class];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Extension/CollectionTypeExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension;

use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;

/**
 * Extension that allows using collection_entry_* blocks in form themes.
 * This is the same code added in https://github.com/symfony/symfony/pull/36088
 * which is only available when using Symfony 5.1 or higher.
 *
 * @author Jules Pietri <heah@heahprod.com>
 */
class CollectionTypeExtension extends AbstractTypeExtension
{
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$prefixOffset = -2;
        // check if the entry type also defines a block prefix
        /** @var FormInterface \$entry */
        foreach (\$form as \$entry) {
            \$blockPrefix = \$entry->getConfig()->getOption('block_prefix');
            if (null !== \$blockPrefix && '' !== \$blockPrefix) {
                --\$prefixOffset;
            }

            break;
        }

        foreach (\$view as \$entryView) {
            // needed to avoid 'Unable to render the form because the block names array contains duplicates'
            if (\\in_array('collection_entry', \$entryView->vars['block_prefixes'], true)) {
                continue;
            }

            array_splice(\$entryView->vars['block_prefixes'], \$prefixOffset, 0, 'collection_entry');
        }

        /** @var FormInterface|null \$prototype */
        \$prototype = \$form->getConfig()->getAttribute('prototype');
        if (null !== \$prototype) {
            \$blockPrefix = \$prototype->getConfig()->getOption('block_prefix');
            if (\$prefixOffset > -3 && null !== \$blockPrefix && '' !== \$blockPrefix) {
                --\$prefixOffset;
            }

            // needed to avoid 'Unable to render the form because the block names array contains duplicates'
            if (!\\in_array('collection_entry', \$view->vars['prototype']->vars['block_prefixes'], true)) {
                array_splice(\$view->vars['prototype']->vars['block_prefixes'], \$prefixOffset, 0, 'collection_entry');
            }
        }
    }

    public static function getExtendedTypes(): iterable
    {
        return [CollectionType::class];
    }
}
", "easycorp/easyadmin-bundle/src/Form/Extension/CollectionTypeExtension.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Extension\\CollectionTypeExtension.php");
    }
}
