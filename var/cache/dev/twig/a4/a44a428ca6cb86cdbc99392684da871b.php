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

/* easycorp/easyadmin-bundle/src/Dto/AssetsDto.php */
class __TwigTemplate_d25f153f6fc120171d6f437eaad3d89f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/AssetsDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/AssetsDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AssetsDto
{
    /** @var AssetDto[] */
    private array \$webpackEncoreAssets = [];
    /** @var AssetDto[] */
    private array \$cssAssets = [];
    /** @var AssetDto[] */
    private array \$jsAssets = [];
    /** @var AssetDto[] */
    private array \$headContents = [];
    /** @var AssetDto[] */
    private array \$bodyContents = [];

    public function __construct()
    {
    }

    public function addWebpackEncoreAsset(AssetDto \$assetDto): void
    {
        if (\\array_key_exists(\$entryName = \$assetDto->getValue(), \$this->webpackEncoreAssets)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" Webpack Encore entry has been added more than once via the addWebpackEncoreEntry() method, but each entry can only be added once (to not overwrite its configuration).', \$entryName));
        }

        \$this->webpackEncoreAssets[\$entryName] = \$assetDto;
    }

    public function addCssAsset(AssetDto \$assetDto): void
    {
        if (\\array_key_exists(\$cssPath = \$assetDto->getValue(), \$this->cssAssets)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" CSS file has been added more than once via the addCssFile() method, but each asset can only be added once (to not overwrite its configuration).', \$cssPath));
        }

        \$this->cssAssets[\$cssPath] = \$assetDto;
    }

    public function addJsAsset(AssetDto \$assetDto): void
    {
        if (\\array_key_exists(\$jsPath = \$assetDto->getValue(), \$this->jsAssets)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" JS file has been added more than once via the addJsFile() method, but each asset can only be added once (to not overwrite its configuration).', \$jsPath));
        }

        \$this->jsAssets[\$jsPath] = \$assetDto;
    }

    public function addHtmlContentToHead(string \$htmlContent): void
    {
        if (\\in_array(\$htmlContent, \$this->headContents, true)) {
            return;
        }

        \$this->headContents[] = \$htmlContent;
    }

    public function addHtmlContentToBody(string \$htmlContent): void
    {
        if (\\in_array(\$htmlContent, \$this->bodyContents, true)) {
            return;
        }

        \$this->bodyContents[] = \$htmlContent;
    }

    public function getDefaultAssetPackageName(): string
    {
        return AssetPackage::PACKAGE_NAME;
    }

    /**
     * @return AssetDto[]
     */
    public function getWebpackEncoreAssets(): array
    {
        return \$this->webpackEncoreAssets;
    }

    /**
     * @return AssetDto[]
     */
    public function getCssAssets(): array
    {
        return \$this->cssAssets;
    }

    /**
     * @return AssetDto[]
     */
    public function getJsAssets(): array
    {
        return \$this->jsAssets;
    }

    public function getHeadContents(): array
    {
        return \$this->headContents;
    }

    public function getBodyContents(): array
    {
        return \$this->bodyContents;
    }

    public function loadedOn(?string \$pageName): self
    {
        if (null === \$pageName) {
            return \$this;
        }

        \$filteredAssets = new self();

        foreach (\$this->cssAssets as \$cssAsset) {
            if (\$cssAsset->getLoadedOn()->has(\$pageName)) {
                \$filteredAssets->addCssAsset(\$cssAsset);
            }
        }
        foreach (\$this->jsAssets as \$jsAsset) {
            if (\$jsAsset->getLoadedOn()->has(\$pageName)) {
                \$filteredAssets->addJsAsset(\$jsAsset);
            }
        }
        foreach (\$this->webpackEncoreAssets as \$webpackEncoreAsset) {
            if (\$webpackEncoreAsset->getLoadedOn()->has(\$pageName)) {
                \$filteredAssets->addWebpackEncoreAsset(\$webpackEncoreAsset);
            }
        }
        foreach (\$this->headContents as \$headContent) {
            \$filteredAssets->addHtmlContentToHead(\$headContent);
        }
        foreach (\$this->bodyContents as \$bodyContent) {
            \$filteredAssets->addHtmlContentToBody(\$bodyContent);
        }

        return \$filteredAssets;
    }

    public function mergeWith(self \$assetsDto): self
    {
        \$this->webpackEncoreAssets = array_merge(\$this->webpackEncoreAssets, \$assetsDto->getWebpackEncoreAssets());
        \$this->cssAssets = array_merge(\$this->cssAssets, \$assetsDto->getCssAssets());
        \$this->jsAssets = array_merge(\$this->jsAssets, \$assetsDto->getJsAssets());
        \$this->headContents = array_merge(\$this->headContents, \$assetsDto->getHeadContents());
        \$this->bodyContents = array_merge(\$this->bodyContents, \$assetsDto->getBodyContents());

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/AssetsDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AssetsDto
{
    /** @var AssetDto[] */
    private array \$webpackEncoreAssets = [];
    /** @var AssetDto[] */
    private array \$cssAssets = [];
    /** @var AssetDto[] */
    private array \$jsAssets = [];
    /** @var AssetDto[] */
    private array \$headContents = [];
    /** @var AssetDto[] */
    private array \$bodyContents = [];

    public function __construct()
    {
    }

    public function addWebpackEncoreAsset(AssetDto \$assetDto): void
    {
        if (\\array_key_exists(\$entryName = \$assetDto->getValue(), \$this->webpackEncoreAssets)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" Webpack Encore entry has been added more than once via the addWebpackEncoreEntry() method, but each entry can only be added once (to not overwrite its configuration).', \$entryName));
        }

        \$this->webpackEncoreAssets[\$entryName] = \$assetDto;
    }

    public function addCssAsset(AssetDto \$assetDto): void
    {
        if (\\array_key_exists(\$cssPath = \$assetDto->getValue(), \$this->cssAssets)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" CSS file has been added more than once via the addCssFile() method, but each asset can only be added once (to not overwrite its configuration).', \$cssPath));
        }

        \$this->cssAssets[\$cssPath] = \$assetDto;
    }

    public function addJsAsset(AssetDto \$assetDto): void
    {
        if (\\array_key_exists(\$jsPath = \$assetDto->getValue(), \$this->jsAssets)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" JS file has been added more than once via the addJsFile() method, but each asset can only be added once (to not overwrite its configuration).', \$jsPath));
        }

        \$this->jsAssets[\$jsPath] = \$assetDto;
    }

    public function addHtmlContentToHead(string \$htmlContent): void
    {
        if (\\in_array(\$htmlContent, \$this->headContents, true)) {
            return;
        }

        \$this->headContents[] = \$htmlContent;
    }

    public function addHtmlContentToBody(string \$htmlContent): void
    {
        if (\\in_array(\$htmlContent, \$this->bodyContents, true)) {
            return;
        }

        \$this->bodyContents[] = \$htmlContent;
    }

    public function getDefaultAssetPackageName(): string
    {
        return AssetPackage::PACKAGE_NAME;
    }

    /**
     * @return AssetDto[]
     */
    public function getWebpackEncoreAssets(): array
    {
        return \$this->webpackEncoreAssets;
    }

    /**
     * @return AssetDto[]
     */
    public function getCssAssets(): array
    {
        return \$this->cssAssets;
    }

    /**
     * @return AssetDto[]
     */
    public function getJsAssets(): array
    {
        return \$this->jsAssets;
    }

    public function getHeadContents(): array
    {
        return \$this->headContents;
    }

    public function getBodyContents(): array
    {
        return \$this->bodyContents;
    }

    public function loadedOn(?string \$pageName): self
    {
        if (null === \$pageName) {
            return \$this;
        }

        \$filteredAssets = new self();

        foreach (\$this->cssAssets as \$cssAsset) {
            if (\$cssAsset->getLoadedOn()->has(\$pageName)) {
                \$filteredAssets->addCssAsset(\$cssAsset);
            }
        }
        foreach (\$this->jsAssets as \$jsAsset) {
            if (\$jsAsset->getLoadedOn()->has(\$pageName)) {
                \$filteredAssets->addJsAsset(\$jsAsset);
            }
        }
        foreach (\$this->webpackEncoreAssets as \$webpackEncoreAsset) {
            if (\$webpackEncoreAsset->getLoadedOn()->has(\$pageName)) {
                \$filteredAssets->addWebpackEncoreAsset(\$webpackEncoreAsset);
            }
        }
        foreach (\$this->headContents as \$headContent) {
            \$filteredAssets->addHtmlContentToHead(\$headContent);
        }
        foreach (\$this->bodyContents as \$bodyContent) {
            \$filteredAssets->addHtmlContentToBody(\$bodyContent);
        }

        return \$filteredAssets;
    }

    public function mergeWith(self \$assetsDto): self
    {
        \$this->webpackEncoreAssets = array_merge(\$this->webpackEncoreAssets, \$assetsDto->getWebpackEncoreAssets());
        \$this->cssAssets = array_merge(\$this->cssAssets, \$assetsDto->getCssAssets());
        \$this->jsAssets = array_merge(\$this->jsAssets, \$assetsDto->getJsAssets());
        \$this->headContents = array_merge(\$this->headContents, \$assetsDto->getHeadContents());
        \$this->bodyContents = array_merge(\$this->bodyContents, \$assetsDto->getBodyContents());

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/AssetsDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\AssetsDto.php");
    }
}
