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

/* easycorp/easyadmin-bundle/src/Registry/TemplateRegistry.php */
class __TwigTemplate_e34de3c35f0843ebec1c308d1927428f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Registry/TemplateRegistry.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Registry/TemplateRegistry.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Registry;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class TemplateRegistry
{
    private array \$templates = [
        'layout' => '@EasyAdmin/layout.html.twig',
        'main_menu' => '@EasyAdmin/menu.html.twig',
        'exception' => '@EasyAdmin/exception.html.twig',
        'flash_messages' => '@EasyAdmin/flash_messages.html.twig',
        'crud/paginator' => '@EasyAdmin/crud/paginator.html.twig',
        'crud/index' => '@EasyAdmin/crud/index.html.twig',
        'crud/detail' => '@EasyAdmin/crud/detail.html.twig',
        'crud/new' => '@EasyAdmin/crud/new.html.twig',
        'crud/edit' => '@EasyAdmin/crud/edit.html.twig',
        'crud/action' => '@EasyAdmin/crud/action.html.twig',
        'crud/filters' => '@EasyAdmin/crud/filters.html.twig',
        'crud/field/array' => '@EasyAdmin/crud/field/array.html.twig',
        'crud/field/association' => '@EasyAdmin/crud/field/association.html.twig',
        'crud/field/avatar' => '@EasyAdmin/crud/field/avatar.html.twig',
        'crud/field/bigint' => '@EasyAdmin/crud/field/bigint.html.twig',
        'crud/field/boolean' => '@EasyAdmin/crud/field/boolean.html.twig',
        'crud/field/choice' => '@EasyAdmin/crud/field/choice.html.twig',
        'crud/field/code_editor' => '@EasyAdmin/crud/field/code_editor.html.twig',
        'crud/field/collection' => '@EasyAdmin/crud/field/collection.html.twig',
        'crud/field/color' => '@EasyAdmin/crud/field/color.html.twig',
        'crud/field/country' => '@EasyAdmin/crud/field/country.html.twig',
        'crud/field/currency' => '@EasyAdmin/crud/field/currency.html.twig',
        'crud/field/date' => '@EasyAdmin/crud/field/date.html.twig',
        'crud/field/datetime' => '@EasyAdmin/crud/field/datetime.html.twig',
        'crud/field/datetimetz' => '@EasyAdmin/crud/field/datetimetz.html.twig',
        'crud/field/decimal' => '@EasyAdmin/crud/field/decimal.html.twig',
        'crud/field/email' => '@EasyAdmin/crud/field/email.html.twig',
        'crud/field/float' => '@EasyAdmin/crud/field/float.html.twig',
        'crud/field/generic' => '@EasyAdmin/crud/field/generic.html.twig',
        'crud/field/hidden' => '@EasyAdmin/crud/field/hidden.html.twig',
        'crud/field/id' => '@EasyAdmin/crud/field/id.html.twig',
        'crud/field/image' => '@EasyAdmin/crud/field/image.html.twig',
        'crud/field/integer' => '@EasyAdmin/crud/field/integer.html.twig',
        'crud/field/language' => '@EasyAdmin/crud/field/language.html.twig',
        'crud/field/locale' => '@EasyAdmin/crud/field/locale.html.twig',
        'crud/field/money' => '@EasyAdmin/crud/field/money.html.twig',
        'crud/field/number' => '@EasyAdmin/crud/field/number.html.twig',
        'crud/field/percent' => '@EasyAdmin/crud/field/percent.html.twig',
        'crud/field/raw' => '@EasyAdmin/crud/field/raw.html.twig',
        'crud/field/smallint' => '@EasyAdmin/crud/field/smallint.html.twig',
        'crud/field/telephone' => '@EasyAdmin/crud/field/telephone.html.twig',
        'crud/field/text' => '@EasyAdmin/crud/field/text.html.twig',
        'crud/field/textarea' => '@EasyAdmin/crud/field/textarea.html.twig',
        'crud/field/text_editor' => '@EasyAdmin/crud/field/text_editor.html.twig',
        'crud/field/time' => '@EasyAdmin/crud/field/time.html.twig',
        'crud/field/timezone' => '@EasyAdmin/crud/field/timezone.html.twig',
        'crud/field/toggle' => '@EasyAdmin/crud/field/toggle.html.twig',
        'crud/field/url' => '@EasyAdmin/crud/field/url.html.twig',
        'label/empty' => '@EasyAdmin/label/empty.html.twig',
        'label/inaccessible' => '@EasyAdmin/label/inaccessible.html.twig',
        'label/null' => '@EasyAdmin/label/null.html.twig',
        'label/undefined' => '@EasyAdmin/label/undefined.html.twig',
    ];

    private function __construct()
    {
    }

    public static function new(): self
    {
        return new self();
    }

    public function has(string \$templateName): bool
    {
        return \\array_key_exists(\$templateName, \$this->templates);
    }

    public function get(string \$templateName): string
    {
        if (!\$this->has(\$templateName)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" template is not defined in EasyAdmin. Use one of these allowed template names: %s', \$templateName, implode(', ', array_keys(\$this->templates))));
        }

        return \$this->templates[\$templateName];
    }

    public function setTemplate(string \$templateName, string \$templatePath): void
    {
        if (!\$this->has(\$templateName)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" template is not defined in EasyAdmin. Use one of these allowed template names: %s', \$templateName, implode(', ', array_keys(\$this->templates))));
        }

        \$this->templates[\$templateName] = \$templatePath;
    }

    public function setTemplates(array \$templateNamesAndPaths): void
    {
        foreach (\$templateNamesAndPaths as \$templateName => \$templatePath) {
            \$this->setTemplate(\$templateName, \$templatePath);
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Registry/TemplateRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Registry;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class TemplateRegistry
{
    private array \$templates = [
        'layout' => '@EasyAdmin/layout.html.twig',
        'main_menu' => '@EasyAdmin/menu.html.twig',
        'exception' => '@EasyAdmin/exception.html.twig',
        'flash_messages' => '@EasyAdmin/flash_messages.html.twig',
        'crud/paginator' => '@EasyAdmin/crud/paginator.html.twig',
        'crud/index' => '@EasyAdmin/crud/index.html.twig',
        'crud/detail' => '@EasyAdmin/crud/detail.html.twig',
        'crud/new' => '@EasyAdmin/crud/new.html.twig',
        'crud/edit' => '@EasyAdmin/crud/edit.html.twig',
        'crud/action' => '@EasyAdmin/crud/action.html.twig',
        'crud/filters' => '@EasyAdmin/crud/filters.html.twig',
        'crud/field/array' => '@EasyAdmin/crud/field/array.html.twig',
        'crud/field/association' => '@EasyAdmin/crud/field/association.html.twig',
        'crud/field/avatar' => '@EasyAdmin/crud/field/avatar.html.twig',
        'crud/field/bigint' => '@EasyAdmin/crud/field/bigint.html.twig',
        'crud/field/boolean' => '@EasyAdmin/crud/field/boolean.html.twig',
        'crud/field/choice' => '@EasyAdmin/crud/field/choice.html.twig',
        'crud/field/code_editor' => '@EasyAdmin/crud/field/code_editor.html.twig',
        'crud/field/collection' => '@EasyAdmin/crud/field/collection.html.twig',
        'crud/field/color' => '@EasyAdmin/crud/field/color.html.twig',
        'crud/field/country' => '@EasyAdmin/crud/field/country.html.twig',
        'crud/field/currency' => '@EasyAdmin/crud/field/currency.html.twig',
        'crud/field/date' => '@EasyAdmin/crud/field/date.html.twig',
        'crud/field/datetime' => '@EasyAdmin/crud/field/datetime.html.twig',
        'crud/field/datetimetz' => '@EasyAdmin/crud/field/datetimetz.html.twig',
        'crud/field/decimal' => '@EasyAdmin/crud/field/decimal.html.twig',
        'crud/field/email' => '@EasyAdmin/crud/field/email.html.twig',
        'crud/field/float' => '@EasyAdmin/crud/field/float.html.twig',
        'crud/field/generic' => '@EasyAdmin/crud/field/generic.html.twig',
        'crud/field/hidden' => '@EasyAdmin/crud/field/hidden.html.twig',
        'crud/field/id' => '@EasyAdmin/crud/field/id.html.twig',
        'crud/field/image' => '@EasyAdmin/crud/field/image.html.twig',
        'crud/field/integer' => '@EasyAdmin/crud/field/integer.html.twig',
        'crud/field/language' => '@EasyAdmin/crud/field/language.html.twig',
        'crud/field/locale' => '@EasyAdmin/crud/field/locale.html.twig',
        'crud/field/money' => '@EasyAdmin/crud/field/money.html.twig',
        'crud/field/number' => '@EasyAdmin/crud/field/number.html.twig',
        'crud/field/percent' => '@EasyAdmin/crud/field/percent.html.twig',
        'crud/field/raw' => '@EasyAdmin/crud/field/raw.html.twig',
        'crud/field/smallint' => '@EasyAdmin/crud/field/smallint.html.twig',
        'crud/field/telephone' => '@EasyAdmin/crud/field/telephone.html.twig',
        'crud/field/text' => '@EasyAdmin/crud/field/text.html.twig',
        'crud/field/textarea' => '@EasyAdmin/crud/field/textarea.html.twig',
        'crud/field/text_editor' => '@EasyAdmin/crud/field/text_editor.html.twig',
        'crud/field/time' => '@EasyAdmin/crud/field/time.html.twig',
        'crud/field/timezone' => '@EasyAdmin/crud/field/timezone.html.twig',
        'crud/field/toggle' => '@EasyAdmin/crud/field/toggle.html.twig',
        'crud/field/url' => '@EasyAdmin/crud/field/url.html.twig',
        'label/empty' => '@EasyAdmin/label/empty.html.twig',
        'label/inaccessible' => '@EasyAdmin/label/inaccessible.html.twig',
        'label/null' => '@EasyAdmin/label/null.html.twig',
        'label/undefined' => '@EasyAdmin/label/undefined.html.twig',
    ];

    private function __construct()
    {
    }

    public static function new(): self
    {
        return new self();
    }

    public function has(string \$templateName): bool
    {
        return \\array_key_exists(\$templateName, \$this->templates);
    }

    public function get(string \$templateName): string
    {
        if (!\$this->has(\$templateName)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" template is not defined in EasyAdmin. Use one of these allowed template names: %s', \$templateName, implode(', ', array_keys(\$this->templates))));
        }

        return \$this->templates[\$templateName];
    }

    public function setTemplate(string \$templateName, string \$templatePath): void
    {
        if (!\$this->has(\$templateName)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" template is not defined in EasyAdmin. Use one of these allowed template names: %s', \$templateName, implode(', ', array_keys(\$this->templates))));
        }

        \$this->templates[\$templateName] = \$templatePath;
    }

    public function setTemplates(array \$templateNamesAndPaths): void
    {
        foreach (\$templateNamesAndPaths as \$templateName => \$templatePath) {
            \$this->setTemplate(\$templateName, \$templatePath);
        }
    }
}
", "easycorp/easyadmin-bundle/src/Registry/TemplateRegistry.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Registry\\TemplateRegistry.php");
    }
}
