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

/* easycorp/easyadmin-bundle/src/Config/Assets.php */
class __TwigTemplate_7a3888392508cf9f87b1222680eaac10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Assets.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Assets.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetsDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Assets
{
    private AssetsDto \$dto;

    private function __construct(AssetsDto \$assetsDto)
    {
        \$this->dto = \$assetsDto;
    }

    public static function new(): self
    {
        \$dto = new AssetsDto();

        return new self(\$dto);
    }

    public function addWebpackEncoreEntry(Asset|string \$entryNameOrAsset): self
    {
        if (!class_exists('Symfony\\\\WebpackEncoreBundle\\\\WebpackEncoreBundle')) {
            throw new \\RuntimeException(sprintf('You are trying to add a Webpack Encore entry called \"%s\" but WebpackEncoreBundle is not installed in your project. Try running \"composer require symfony/webpack-encore-bundle\"', \$entryNameOrAsset));
        }

        if (\\is_string(\$entryNameOrAsset)) {
            \$this->dto->addWebpackEncoreAsset(new AssetDto(\$entryNameOrAsset));
        } else {
            \$this->dto->addWebpackEncoreAsset(\$entryNameOrAsset->getAsDto());
        }

        return \$this;
    }

    public function addCssFile(Asset|string \$pathOrAsset): self
    {
        if (\\is_string(\$pathOrAsset)) {
            \$this->dto->addCssAsset(new AssetDto(\$pathOrAsset));
        } else {
            \$this->dto->addCssAsset(\$pathOrAsset->getAsDto());
        }

        return \$this;
    }

    public function addJsFile(Asset|string \$pathOrAsset): self
    {
        if (\\is_string(\$pathOrAsset)) {
            \$this->dto->addJsAsset(new AssetDto(\$pathOrAsset));
        } else {
            \$this->dto->addJsAsset(\$pathOrAsset->getAsDto());
        }

        return \$this;
    }

    public function addHtmlContentToHead(string \$htmlContent): self
    {
        \$this->dto->addHtmlContentToHead(\$htmlContent);

        return \$this;
    }

    public function addHtmlContentToBody(string \$htmlContent): self
    {
        \$this->dto->addHtmlContentToBody(\$htmlContent);

        return \$this;
    }

    public function getAsDto(): AssetsDto
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
        return "easycorp/easyadmin-bundle/src/Config/Assets.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\AssetsDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Assets
{
    private AssetsDto \$dto;

    private function __construct(AssetsDto \$assetsDto)
    {
        \$this->dto = \$assetsDto;
    }

    public static function new(): self
    {
        \$dto = new AssetsDto();

        return new self(\$dto);
    }

    public function addWebpackEncoreEntry(Asset|string \$entryNameOrAsset): self
    {
        if (!class_exists('Symfony\\\\WebpackEncoreBundle\\\\WebpackEncoreBundle')) {
            throw new \\RuntimeException(sprintf('You are trying to add a Webpack Encore entry called \"%s\" but WebpackEncoreBundle is not installed in your project. Try running \"composer require symfony/webpack-encore-bundle\"', \$entryNameOrAsset));
        }

        if (\\is_string(\$entryNameOrAsset)) {
            \$this->dto->addWebpackEncoreAsset(new AssetDto(\$entryNameOrAsset));
        } else {
            \$this->dto->addWebpackEncoreAsset(\$entryNameOrAsset->getAsDto());
        }

        return \$this;
    }

    public function addCssFile(Asset|string \$pathOrAsset): self
    {
        if (\\is_string(\$pathOrAsset)) {
            \$this->dto->addCssAsset(new AssetDto(\$pathOrAsset));
        } else {
            \$this->dto->addCssAsset(\$pathOrAsset->getAsDto());
        }

        return \$this;
    }

    public function addJsFile(Asset|string \$pathOrAsset): self
    {
        if (\\is_string(\$pathOrAsset)) {
            \$this->dto->addJsAsset(new AssetDto(\$pathOrAsset));
        } else {
            \$this->dto->addJsAsset(\$pathOrAsset->getAsDto());
        }

        return \$this;
    }

    public function addHtmlContentToHead(string \$htmlContent): self
    {
        \$this->dto->addHtmlContentToHead(\$htmlContent);

        return \$this;
    }

    public function addHtmlContentToBody(string \$htmlContent): self
    {
        \$this->dto->addHtmlContentToBody(\$htmlContent);

        return \$this;
    }

    public function getAsDto(): AssetsDto
    {
        return \$this->dto;
    }
}
", "easycorp/easyadmin-bundle/src/Config/Assets.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Assets.php");
    }
}
