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

/* easycorp/easyadmin-bundle/src/Dto/AssetDto.php */
class __TwigTemplate_719dd7fb6278d8c20a7482a49319e713 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/AssetDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/AssetDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AssetDto
{
    private string \$value;
    // the Symfony Asset package name which this asset belongs to
    private ?string \$packageName = null;
    private bool \$async = false;
    private bool \$defer = false;
    private bool \$preload = false;
    private bool \$nopush = false;
    private ?string \$webpackPackageName = null;
    private string \$webpackEntrypointName = '_default';
    private array \$htmlAttributes = [];
    private KeyValueStore \$loadedOn;

    public function __construct(string \$value)
    {
        \$this->value = \$value;
        \$this->loadedOn = KeyValueStore::new([
            Crud::PAGE_INDEX => Crud::PAGE_INDEX,
            Crud::PAGE_DETAIL => Crud::PAGE_DETAIL,
            Crud::PAGE_EDIT => Crud::PAGE_EDIT,
            Crud::PAGE_NEW => Crud::PAGE_NEW,
        ]);
    }

    public function __toString(): string
    {
        return \$this->getValue();
    }

    public function getValue(): string
    {
        return \$this->value;
    }

    public function getPackageName(): ?string
    {
        return \$this->packageName;
    }

    public function setPackageName(string \$packageName): void
    {
        \$this->packageName = \$packageName;
    }

    public function setAsync(bool \$async): void
    {
        \$this->async = \$async;
    }

    public function isAsync(): bool
    {
        return \$this->async;
    }

    public function setDefer(bool \$defer): void
    {
        \$this->defer = \$defer;
    }

    public function isDefer(): bool
    {
        return \$this->defer;
    }

    public function setPreload(bool \$preload): void
    {
        \$this->preload = \$preload;
    }

    public function isPreload(): bool
    {
        return \$this->preload;
    }

    public function setNopush(bool \$nopush): void
    {
        \$this->nopush = \$nopush;
    }

    public function isNopush(): bool
    {
        return \$this->nopush;
    }

    public function setWebpackPackageName(?string \$packageName): void
    {
        \$this->webpackPackageName = \$packageName;
    }

    public function getWebpackPackageName(): ?string
    {
        return \$this->webpackPackageName;
    }

    public function setWebpackEntrypointName(string \$entrypointName): void
    {
        \$this->webpackEntrypointName = \$entrypointName;
    }

    public function getWebpackEntrypointName(): string
    {
        return \$this->webpackEntrypointName;
    }

    public function setHtmlAttribute(string \$attrName, string \$attrValue): void
    {
        \$this->htmlAttributes[\$attrName] = \$attrValue;
    }

    public function getHtmlAttributes(): array
    {
        return \$this->htmlAttributes;
    }

    public function getLoadedOn(): KeyValueStore
    {
        return \$this->loadedOn;
    }

    public function setLoadedOn(KeyValueStore \$loadedOn): void
    {
        \$this->loadedOn = \$loadedOn;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/AssetDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AssetDto
{
    private string \$value;
    // the Symfony Asset package name which this asset belongs to
    private ?string \$packageName = null;
    private bool \$async = false;
    private bool \$defer = false;
    private bool \$preload = false;
    private bool \$nopush = false;
    private ?string \$webpackPackageName = null;
    private string \$webpackEntrypointName = '_default';
    private array \$htmlAttributes = [];
    private KeyValueStore \$loadedOn;

    public function __construct(string \$value)
    {
        \$this->value = \$value;
        \$this->loadedOn = KeyValueStore::new([
            Crud::PAGE_INDEX => Crud::PAGE_INDEX,
            Crud::PAGE_DETAIL => Crud::PAGE_DETAIL,
            Crud::PAGE_EDIT => Crud::PAGE_EDIT,
            Crud::PAGE_NEW => Crud::PAGE_NEW,
        ]);
    }

    public function __toString(): string
    {
        return \$this->getValue();
    }

    public function getValue(): string
    {
        return \$this->value;
    }

    public function getPackageName(): ?string
    {
        return \$this->packageName;
    }

    public function setPackageName(string \$packageName): void
    {
        \$this->packageName = \$packageName;
    }

    public function setAsync(bool \$async): void
    {
        \$this->async = \$async;
    }

    public function isAsync(): bool
    {
        return \$this->async;
    }

    public function setDefer(bool \$defer): void
    {
        \$this->defer = \$defer;
    }

    public function isDefer(): bool
    {
        return \$this->defer;
    }

    public function setPreload(bool \$preload): void
    {
        \$this->preload = \$preload;
    }

    public function isPreload(): bool
    {
        return \$this->preload;
    }

    public function setNopush(bool \$nopush): void
    {
        \$this->nopush = \$nopush;
    }

    public function isNopush(): bool
    {
        return \$this->nopush;
    }

    public function setWebpackPackageName(?string \$packageName): void
    {
        \$this->webpackPackageName = \$packageName;
    }

    public function getWebpackPackageName(): ?string
    {
        return \$this->webpackPackageName;
    }

    public function setWebpackEntrypointName(string \$entrypointName): void
    {
        \$this->webpackEntrypointName = \$entrypointName;
    }

    public function getWebpackEntrypointName(): string
    {
        return \$this->webpackEntrypointName;
    }

    public function setHtmlAttribute(string \$attrName, string \$attrValue): void
    {
        \$this->htmlAttributes[\$attrName] = \$attrValue;
    }

    public function getHtmlAttributes(): array
    {
        return \$this->htmlAttributes;
    }

    public function getLoadedOn(): KeyValueStore
    {
        return \$this->loadedOn;
    }

    public function setLoadedOn(KeyValueStore \$loadedOn): void
    {
        \$this->loadedOn = \$loadedOn;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/AssetDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\AssetDto.php");
    }
}
