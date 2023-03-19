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

/* easycorp/easyadmin-bundle/src/Menu/MenuItemMatcher.php */
class __TwigTemplate_918048c79317285e585c92499502ff81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Menu/MenuItemMatcher.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Menu/MenuItemMatcher.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class MenuItemMatcher implements MenuItemMatcherInterface
{
    public function __construct(private AdminContextProvider \$adminContextProvider)
    {
    }

    public function isSelected(MenuItemDto \$menuItemDto): bool
    {
        \$adminContext = \$this->adminContextProvider->getContext();
        if (null === \$adminContext || \$menuItemDto->isMenuSection()) {
            return false;
        }

        \$currentPageQueryParameters = \$adminContext->getRequest()->query->all();
        \$menuItemQueryString = null === \$menuItemDto->getLinkUrl() ? null : parse_url(\$menuItemDto->getLinkUrl(), \\PHP_URL_QUERY);
        \$menuItemQueryParameters = [];
        if (null !== \$menuItemQueryString) {
            parse_str(\$menuItemQueryString, \$menuItemQueryParameters);
        }

        if ([] === \$menuItemQueryParameters || [] === \$currentPageQueryParameters) {
            return \$menuItemDto->getLinkUrl() === \$adminContext->getRequest()->getUri();
        }

        \$menuItemQueryParameters = \$this->filterIrrelevantQueryParameters(\$menuItemQueryParameters);
        \$currentPageQueryParameters = \$this->filterIrrelevantQueryParameters(\$currentPageQueryParameters);

        // needed so you can pass route parameters in any order
        sort(\$menuItemQueryParameters);
        sort(\$currentPageQueryParameters);

        return \$menuItemQueryParameters === \$currentPageQueryParameters;
    }

    public function isExpanded(MenuItemDto \$menuItemDto): bool
    {
        if ([] === \$menuSubitems = \$menuItemDto->getSubItems()) {
            return false;
        }

        foreach (\$menuSubitems as \$submenuItem) {
            if (\$submenuItem->isSelected()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Removes from the given list of query parameters all the parameters that
     * should be ignored when deciding if some menu item matches the current page
     * (such as the applied filters or sorting, the listing page number, etc.).
     */
    private function filterIrrelevantQueryParameters(array \$queryStringParameters): array
    {
        \$paramsToRemove = [EA::REFERRER, EA::PAGE, EA::FILTERS, EA::SORT];

        return array_filter(\$queryStringParameters, static fn (\$k) => !\\in_array(\$k, \$paramsToRemove, true), \\ARRAY_FILTER_USE_KEY);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Menu/MenuItemMatcher.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\EA;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class MenuItemMatcher implements MenuItemMatcherInterface
{
    public function __construct(private AdminContextProvider \$adminContextProvider)
    {
    }

    public function isSelected(MenuItemDto \$menuItemDto): bool
    {
        \$adminContext = \$this->adminContextProvider->getContext();
        if (null === \$adminContext || \$menuItemDto->isMenuSection()) {
            return false;
        }

        \$currentPageQueryParameters = \$adminContext->getRequest()->query->all();
        \$menuItemQueryString = null === \$menuItemDto->getLinkUrl() ? null : parse_url(\$menuItemDto->getLinkUrl(), \\PHP_URL_QUERY);
        \$menuItemQueryParameters = [];
        if (null !== \$menuItemQueryString) {
            parse_str(\$menuItemQueryString, \$menuItemQueryParameters);
        }

        if ([] === \$menuItemQueryParameters || [] === \$currentPageQueryParameters) {
            return \$menuItemDto->getLinkUrl() === \$adminContext->getRequest()->getUri();
        }

        \$menuItemQueryParameters = \$this->filterIrrelevantQueryParameters(\$menuItemQueryParameters);
        \$currentPageQueryParameters = \$this->filterIrrelevantQueryParameters(\$currentPageQueryParameters);

        // needed so you can pass route parameters in any order
        sort(\$menuItemQueryParameters);
        sort(\$currentPageQueryParameters);

        return \$menuItemQueryParameters === \$currentPageQueryParameters;
    }

    public function isExpanded(MenuItemDto \$menuItemDto): bool
    {
        if ([] === \$menuSubitems = \$menuItemDto->getSubItems()) {
            return false;
        }

        foreach (\$menuSubitems as \$submenuItem) {
            if (\$submenuItem->isSelected()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Removes from the given list of query parameters all the parameters that
     * should be ignored when deciding if some menu item matches the current page
     * (such as the applied filters or sorting, the listing page number, etc.).
     */
    private function filterIrrelevantQueryParameters(array \$queryStringParameters): array
    {
        \$paramsToRemove = [EA::REFERRER, EA::PAGE, EA::FILTERS, EA::SORT];

        return array_filter(\$queryStringParameters, static fn (\$k) => !\\in_array(\$k, \$paramsToRemove, true), \\ARRAY_FILTER_USE_KEY);
    }
}
", "easycorp/easyadmin-bundle/src/Menu/MenuItemMatcher.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Menu\\MenuItemMatcher.php");
    }
}
