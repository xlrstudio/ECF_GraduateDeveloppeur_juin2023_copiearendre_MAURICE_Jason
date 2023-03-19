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

/* easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php */
class __TwigTemplate_ff453454e20706ed0ba34745112978f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Twig;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldLayoutDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FieldLayoutFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Twig\\Environment;
use Twig\\Extension\\AbstractExtension;
use Twig\\Extension\\ExtensionInterface;
use Twig\\Extension\\RuntimeExtensionInterface;
use Twig\\TwigFilter;
use Twig\\TwigFunction;

/**
 * Defines the filters and functions used to render the bundle's templates.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class EasyAdminTwigExtension extends AbstractExtension
{
    private ServiceLocator \$serviceLocator;
    private ?CsrfTokenManagerInterface \$csrfTokenManager;

    public function __construct(ServiceLocator \$serviceLocator, ?CsrfTokenManagerInterface \$csrfTokenManager)
    {
        \$this->serviceLocator = \$serviceLocator;
        \$this->csrfTokenManager = \$csrfTokenManager;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('ea_url', [\$this, 'getAdminUrlGenerator']),
            new TwigFunction('ea_csrf_token', [\$this, 'renderCsrfToken']),
            new TwigFunction('ea_call_function_if_exists', [\$this, 'callFunctionIfExists'], ['needs_environment' => true, 'is_safe' => ['html' => true]]),
            new TwigFunction('ea_create_field_layout', [\$this, 'createFieldLayout']),
        ];
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('ea_flatten_array', [\$this, 'flattenArray']),
            new TwigFilter('ea_filesize', [\$this, 'fileSize']),
            new TwigFilter('ea_apply_filter_if_exists', [\$this, 'applyFilterIfExists'], ['needs_environment' => true]),
            new TwigFilter('ea_as_string', [\$this, 'representAsString']),
        ];
    }

    /**
     * Transforms ['a' => 'foo', 'b' => ['c' => ['d' => 7]]] into ['a' => 'foo', 'b[c][d]' => 7]
     * It's useful to submit nested arrays (e.g. query string parameters) as form fields.
     */
    public function flattenArray(\$array, \$parentKey = null): array
    {
        \$flattenedArray = [];

        foreach (\$array as \$flattenedKey => \$value) {
            \$flattenedKey = null !== \$parentKey ? sprintf('%s[%s]', \$parentKey, \$flattenedKey) : \$flattenedKey;

            if (\\is_array(\$value)) {
                \$flattenedArray = array_merge(\$flattenedArray, \$this->flattenArray(\$value, \$flattenedKey));
            } else {
                \$flattenedArray[\$flattenedKey] = \$value;
            }
        }

        return \$flattenedArray;
    }

    public function fileSize(int \$bytes): string
    {
        \$size = ['B', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y'];
        \$factor = (int) floor(log(\$bytes) / log(1024));

        return (int) (\$bytes / (1024 ** \$factor)).@\$size[\$factor];
    }

    // Code adapted from https://stackoverflow.com/a/48606773/2804294 (License: CC BY-SA 3.0)
    public function applyFilterIfExists(Environment \$environment, \$value, string \$filterName, ...\$filterArguments)
    {
        if (null === \$filter = \$environment->getFilter(\$filterName)) {
            return \$value;
        }

        [\$class, \$method] = \$filter->getCallable();
        if (\$class instanceof ExtensionInterface) {
            return \$filter->getCallable()(\$value, ...\$filterArguments);
        }

        \$object = \$environment->getRuntime(\$class);
        if (\$object instanceof RuntimeExtensionInterface && method_exists(\$object, \$method)) {
            return \$object->\$method(\$value, ...\$filterArguments);
        }

        return null;
    }

    public function representAsString(\$value): string
    {
        if (null === \$value) {
            return '';
        }

        if (\\is_string(\$value)) {
            return \$value;
        }

        if (is_numeric(\$value)) {
            return (string) \$value;
        }

        if (\\is_bool(\$value)) {
            return \$value ? 'true' : 'false';
        }

        if (\\is_array(\$value)) {
            return sprintf('Array (%d items)', \\count(\$value));
        }

        if (\\is_object(\$value)) {
            if (method_exists(\$value, '__toString')) {
                return (string) \$value;
            }

            if (method_exists(\$value, 'getId')) {
                return sprintf('%s #%s', \\get_class(\$value), \$value->getId());
            }

            return sprintf('%s #%s', \\get_class(\$value), substr(md5(spl_object_hash(\$value)), 0, 7));
        }

        return '';
    }

    public function callFunctionIfExists(Environment \$environment, string \$functionName, ...\$functionArguments)
    {
        if (null === \$function = \$environment->getFunction(\$functionName)) {
            return '';
        }

        return \$function->getCallable()(...\$functionArguments);
    }

    public function getAdminUrlGenerator(array \$queryParameters = []): AdminUrlGenerator
    {
        return \$this->serviceLocator->get(AdminUrlGenerator::class)->setAll(\$queryParameters);
    }

    /**
     * Needed to avoid errors when calling 'csrf_token()' in Twig templates of applications that disabled CSRF protection.
     */
    public function renderCsrfToken(string \$tokenId): string
    {
        try {
            return \$this->csrfTokenManager?->getToken(\$tokenId)?->getValue() ?? '';
        } catch (\\Exception) {
            return '';
        }
    }

    public function createFieldLayout(?FieldCollection \$fieldDtos): FieldLayoutDto
    {
        return FieldLayoutFactory::createFromFieldDtos(\$fieldDtos);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Twig;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldLayoutDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FieldLayoutFactory;
use EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Twig\\Environment;
use Twig\\Extension\\AbstractExtension;
use Twig\\Extension\\ExtensionInterface;
use Twig\\Extension\\RuntimeExtensionInterface;
use Twig\\TwigFilter;
use Twig\\TwigFunction;

/**
 * Defines the filters and functions used to render the bundle's templates.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class EasyAdminTwigExtension extends AbstractExtension
{
    private ServiceLocator \$serviceLocator;
    private ?CsrfTokenManagerInterface \$csrfTokenManager;

    public function __construct(ServiceLocator \$serviceLocator, ?CsrfTokenManagerInterface \$csrfTokenManager)
    {
        \$this->serviceLocator = \$serviceLocator;
        \$this->csrfTokenManager = \$csrfTokenManager;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('ea_url', [\$this, 'getAdminUrlGenerator']),
            new TwigFunction('ea_csrf_token', [\$this, 'renderCsrfToken']),
            new TwigFunction('ea_call_function_if_exists', [\$this, 'callFunctionIfExists'], ['needs_environment' => true, 'is_safe' => ['html' => true]]),
            new TwigFunction('ea_create_field_layout', [\$this, 'createFieldLayout']),
        ];
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('ea_flatten_array', [\$this, 'flattenArray']),
            new TwigFilter('ea_filesize', [\$this, 'fileSize']),
            new TwigFilter('ea_apply_filter_if_exists', [\$this, 'applyFilterIfExists'], ['needs_environment' => true]),
            new TwigFilter('ea_as_string', [\$this, 'representAsString']),
        ];
    }

    /**
     * Transforms ['a' => 'foo', 'b' => ['c' => ['d' => 7]]] into ['a' => 'foo', 'b[c][d]' => 7]
     * It's useful to submit nested arrays (e.g. query string parameters) as form fields.
     */
    public function flattenArray(\$array, \$parentKey = null): array
    {
        \$flattenedArray = [];

        foreach (\$array as \$flattenedKey => \$value) {
            \$flattenedKey = null !== \$parentKey ? sprintf('%s[%s]', \$parentKey, \$flattenedKey) : \$flattenedKey;

            if (\\is_array(\$value)) {
                \$flattenedArray = array_merge(\$flattenedArray, \$this->flattenArray(\$value, \$flattenedKey));
            } else {
                \$flattenedArray[\$flattenedKey] = \$value;
            }
        }

        return \$flattenedArray;
    }

    public function fileSize(int \$bytes): string
    {
        \$size = ['B', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y'];
        \$factor = (int) floor(log(\$bytes) / log(1024));

        return (int) (\$bytes / (1024 ** \$factor)).@\$size[\$factor];
    }

    // Code adapted from https://stackoverflow.com/a/48606773/2804294 (License: CC BY-SA 3.0)
    public function applyFilterIfExists(Environment \$environment, \$value, string \$filterName, ...\$filterArguments)
    {
        if (null === \$filter = \$environment->getFilter(\$filterName)) {
            return \$value;
        }

        [\$class, \$method] = \$filter->getCallable();
        if (\$class instanceof ExtensionInterface) {
            return \$filter->getCallable()(\$value, ...\$filterArguments);
        }

        \$object = \$environment->getRuntime(\$class);
        if (\$object instanceof RuntimeExtensionInterface && method_exists(\$object, \$method)) {
            return \$object->\$method(\$value, ...\$filterArguments);
        }

        return null;
    }

    public function representAsString(\$value): string
    {
        if (null === \$value) {
            return '';
        }

        if (\\is_string(\$value)) {
            return \$value;
        }

        if (is_numeric(\$value)) {
            return (string) \$value;
        }

        if (\\is_bool(\$value)) {
            return \$value ? 'true' : 'false';
        }

        if (\\is_array(\$value)) {
            return sprintf('Array (%d items)', \\count(\$value));
        }

        if (\\is_object(\$value)) {
            if (method_exists(\$value, '__toString')) {
                return (string) \$value;
            }

            if (method_exists(\$value, 'getId')) {
                return sprintf('%s #%s', \\get_class(\$value), \$value->getId());
            }

            return sprintf('%s #%s', \\get_class(\$value), substr(md5(spl_object_hash(\$value)), 0, 7));
        }

        return '';
    }

    public function callFunctionIfExists(Environment \$environment, string \$functionName, ...\$functionArguments)
    {
        if (null === \$function = \$environment->getFunction(\$functionName)) {
            return '';
        }

        return \$function->getCallable()(...\$functionArguments);
    }

    public function getAdminUrlGenerator(array \$queryParameters = []): AdminUrlGenerator
    {
        return \$this->serviceLocator->get(AdminUrlGenerator::class)->setAll(\$queryParameters);
    }

    /**
     * Needed to avoid errors when calling 'csrf_token()' in Twig templates of applications that disabled CSRF protection.
     */
    public function renderCsrfToken(string \$tokenId): string
    {
        try {
            return \$this->csrfTokenManager?->getToken(\$tokenId)?->getValue() ?? '';
        } catch (\\Exception) {
            return '';
        }
    }

    public function createFieldLayout(?FieldCollection \$fieldDtos): FieldLayoutDto
    {
        return FieldLayoutFactory::createFromFieldDtos(\$fieldDtos);
    }
}
", "easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Twig\\EasyAdminTwigExtension.php");
    }
}
