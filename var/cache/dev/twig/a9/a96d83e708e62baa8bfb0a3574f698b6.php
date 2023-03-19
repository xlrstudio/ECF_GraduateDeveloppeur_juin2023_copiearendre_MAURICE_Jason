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

/* easycorp/easyadmin-bundle/src/Config/Asset.php */
class __TwigTemplate_397491ddb09f45ffbd7bff30a7b44e3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Asset.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Asset.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Asset
{
    private AssetDto \$dto;

    private function __construct(AssetDto \$assetDto)
    {
        \$this->dto = \$assetDto;
    }

    public function __toString()
    {
        return \$this->dto->getValue();
    }

    /**
     * @param string \$value The 'path' when adding CSS or JS files and the 'entryName' when adding Webpack Encore entries
     */
    public static function new(string \$value): self
    {
        \$isWebpackEncoreEntry = !u(\$value)->endsWith('.css') && !u(\$value)->endsWith('.js');
        if (\$isWebpackEncoreEntry && !class_exists('Symfony\\\\WebpackEncoreBundle\\\\WebpackEncoreBundle')) {
            throw new \\RuntimeException(sprintf('You are trying to add a Webpack Encore entry called \"%s\" but WebpackEncoreBundle is not installed in your project. Try running \"composer require symfony/webpack-encore-bundle\"', \$value));
        }

        \$dto = new AssetDto(\$value);

        return new self(\$dto);
    }

    /**
     * Assets provided by EasyAdmin (e.g. 'bundles/easyadmin/app.js') are versioned
     * and managed through a special Symfony Asset named package.
     * Call this method instead of '::new()' when adding those EasyAdmin assets so
     * they use the right package name (which is needed later when calling to 'asset()' Twig function).
     *
     * @param string \$value The 'path' when adding CSS or JS files and the 'entryName' when adding Webpack Encore entries
     */
    public static function fromEasyAdminAssetPackage(string \$value): self
    {
        return self::new(\$value)->package(AssetPackage::PACKAGE_NAME);
    }

    public function async(bool \$async = true): self
    {
        \$this->dto->setAsync(\$async);

        return \$this;
    }

    public function defer(bool \$defer = true): self
    {
        \$this->dto->setDefer(\$defer);

        return \$this;
    }

    public function preload(bool \$preload = true): self
    {
        if (!class_exists('Symfony\\\\Component\\\\WebLink\\\\Link')) {
            throw new \\RuntimeException(sprintf('You are trying to preload an asset called \"%s\" but WebLink component is not installed in your project. Try running \"composer require symfony/web-link\"', \$this->dto->getValue()));
        }

        \$this->dto->setPreload(\$preload);

        return \$this;
    }

    public function nopush(bool \$nopush = true): self
    {
        if (!class_exists('Symfony\\\\Component\\\\WebLink\\\\Link')) {
            throw new \\RuntimeException(sprintf('You are trying to configure the \"nopush\" preload attribute of an asset called \"%s\" but WebLink component is not installed in your project. Try running \"composer require symfony/web-link\"', \$this->dto->getValue()));
        }

        \$this->dto->setNopush(\$nopush);

        return \$this;
    }

    public function webpackPackageName(string \$packageName = null): self
    {
        \$this->dto->setWebpackPackageName(\$packageName);

        return \$this;
    }

    public function webpackEntrypointName(string \$entrypointName): self
    {
        \$this->dto->setWebpackEntrypointName(\$entrypointName);

        return \$this;
    }

    public function htmlAttr(string \$attrName, string \$attrValue): self
    {
        \$this->dto->setHtmlAttribute(\$attrName, \$attrValue);

        return \$this;
    }

    public function htmlAttrs(array \$attrNamesAndValues): self
    {
        foreach (\$attrNamesAndValues as \$attrName => \$attrValue) {
            \$this->dto->setHtmlAttribute(\$attrName, \$attrValue);
        }

        return \$this;
    }

    /**
     * @param string \$packageName The name of the Symfony Asset package this asset belongs to
     */
    public function package(string \$packageName): self
    {
        \$this->dto->setPackageName(\$packageName);

        return \$this;
    }

    public function ignoreOnDetail(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_DETAIL);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function ignoreOnForm(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_NEW);
        \$loadedOn->delete(Crud::PAGE_EDIT);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function ignoreWhenCreating(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_NEW);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function ignoreWhenUpdating(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_EDIT);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function ignoreOnIndex(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_INDEX);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function onlyOnDetail(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([Crud::PAGE_DETAIL => Crud::PAGE_DETAIL]));

        return \$this;
    }

    public function onlyOnForms(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([
            Crud::PAGE_NEW => Crud::PAGE_NEW,
            Crud::PAGE_EDIT => Crud::PAGE_EDIT,
        ]));

        return \$this;
    }

    public function onlyOnIndex(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([Crud::PAGE_INDEX => Crud::PAGE_INDEX]));

        return \$this;
    }

    public function onlyWhenCreating(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([Crud::PAGE_NEW => Crud::PAGE_NEW]));

        return \$this;
    }

    public function onlyWhenUpdating(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([Crud::PAGE_EDIT => Crud::PAGE_EDIT]));

        return \$this;
    }

    public function getAsDto(): AssetDto
    {
        return \$this->dto;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/Asset.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Asset
{
    private AssetDto \$dto;

    private function __construct(AssetDto \$assetDto)
    {
        \$this->dto = \$assetDto;
    }

    public function __toString()
    {
        return \$this->dto->getValue();
    }

    /**
     * @param string \$value The 'path' when adding CSS or JS files and the 'entryName' when adding Webpack Encore entries
     */
    public static function new(string \$value): self
    {
        \$isWebpackEncoreEntry = !u(\$value)->endsWith('.css') && !u(\$value)->endsWith('.js');
        if (\$isWebpackEncoreEntry && !class_exists('Symfony\\\\WebpackEncoreBundle\\\\WebpackEncoreBundle')) {
            throw new \\RuntimeException(sprintf('You are trying to add a Webpack Encore entry called \"%s\" but WebpackEncoreBundle is not installed in your project. Try running \"composer require symfony/webpack-encore-bundle\"', \$value));
        }

        \$dto = new AssetDto(\$value);

        return new self(\$dto);
    }

    /**
     * Assets provided by EasyAdmin (e.g. 'bundles/easyadmin/app.js') are versioned
     * and managed through a special Symfony Asset named package.
     * Call this method instead of '::new()' when adding those EasyAdmin assets so
     * they use the right package name (which is needed later when calling to 'asset()' Twig function).
     *
     * @param string \$value The 'path' when adding CSS or JS files and the 'entryName' when adding Webpack Encore entries
     */
    public static function fromEasyAdminAssetPackage(string \$value): self
    {
        return self::new(\$value)->package(AssetPackage::PACKAGE_NAME);
    }

    public function async(bool \$async = true): self
    {
        \$this->dto->setAsync(\$async);

        return \$this;
    }

    public function defer(bool \$defer = true): self
    {
        \$this->dto->setDefer(\$defer);

        return \$this;
    }

    public function preload(bool \$preload = true): self
    {
        if (!class_exists('Symfony\\\\Component\\\\WebLink\\\\Link')) {
            throw new \\RuntimeException(sprintf('You are trying to preload an asset called \"%s\" but WebLink component is not installed in your project. Try running \"composer require symfony/web-link\"', \$this->dto->getValue()));
        }

        \$this->dto->setPreload(\$preload);

        return \$this;
    }

    public function nopush(bool \$nopush = true): self
    {
        if (!class_exists('Symfony\\\\Component\\\\WebLink\\\\Link')) {
            throw new \\RuntimeException(sprintf('You are trying to configure the \"nopush\" preload attribute of an asset called \"%s\" but WebLink component is not installed in your project. Try running \"composer require symfony/web-link\"', \$this->dto->getValue()));
        }

        \$this->dto->setNopush(\$nopush);

        return \$this;
    }

    public function webpackPackageName(string \$packageName = null): self
    {
        \$this->dto->setWebpackPackageName(\$packageName);

        return \$this;
    }

    public function webpackEntrypointName(string \$entrypointName): self
    {
        \$this->dto->setWebpackEntrypointName(\$entrypointName);

        return \$this;
    }

    public function htmlAttr(string \$attrName, string \$attrValue): self
    {
        \$this->dto->setHtmlAttribute(\$attrName, \$attrValue);

        return \$this;
    }

    public function htmlAttrs(array \$attrNamesAndValues): self
    {
        foreach (\$attrNamesAndValues as \$attrName => \$attrValue) {
            \$this->dto->setHtmlAttribute(\$attrName, \$attrValue);
        }

        return \$this;
    }

    /**
     * @param string \$packageName The name of the Symfony Asset package this asset belongs to
     */
    public function package(string \$packageName): self
    {
        \$this->dto->setPackageName(\$packageName);

        return \$this;
    }

    public function ignoreOnDetail(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_DETAIL);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function ignoreOnForm(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_NEW);
        \$loadedOn->delete(Crud::PAGE_EDIT);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function ignoreWhenCreating(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_NEW);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function ignoreWhenUpdating(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_EDIT);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function ignoreOnIndex(): self
    {
        \$loadedOn = \$this->dto->getLoadedOn();
        \$loadedOn->delete(Crud::PAGE_INDEX);

        \$this->dto->setLoadedOn(\$loadedOn);

        return \$this;
    }

    public function onlyOnDetail(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([Crud::PAGE_DETAIL => Crud::PAGE_DETAIL]));

        return \$this;
    }

    public function onlyOnForms(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([
            Crud::PAGE_NEW => Crud::PAGE_NEW,
            Crud::PAGE_EDIT => Crud::PAGE_EDIT,
        ]));

        return \$this;
    }

    public function onlyOnIndex(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([Crud::PAGE_INDEX => Crud::PAGE_INDEX]));

        return \$this;
    }

    public function onlyWhenCreating(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([Crud::PAGE_NEW => Crud::PAGE_NEW]));

        return \$this;
    }

    public function onlyWhenUpdating(): self
    {
        \$this->dto->setLoadedOn(KeyValueStore::new([Crud::PAGE_EDIT => Crud::PAGE_EDIT]));

        return \$this;
    }

    public function getAsDto(): AssetDto
    {
        return \$this->dto;
    }
}
", "easycorp/easyadmin-bundle/src/Config/Asset.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Asset.php");
    }
}
