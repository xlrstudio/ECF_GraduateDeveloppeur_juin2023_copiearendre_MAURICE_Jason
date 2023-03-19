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

/* easycorp/easyadmin-bundle/src/Asset/AssetPackage.php */
class __TwigTemplate_27fc045a5f505fed445f69caca7fd465 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Asset/AssetPackage.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Asset/AssetPackage.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Asset;

use Symfony\\Component\\Asset\\Context\\RequestStackContext;
use Symfony\\Component\\Asset\\PackageInterface;
use Symfony\\Component\\Asset\\PathPackage;
use Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * This defines a Symfony Asset named package that groups all the assets provided
 * by EasyAdmin. This is needed because EasyAdmin uses asset versioning, so the
 * full absolute URLs of assets isn't known (the URL contain changing hashes).
 *
 * In practice this uses the same strategy (and even the same \"manifest.json\" file)
 * used by Webpack Encore. We do this because we want to keep EasyAdmin dependencies as
 * lean as possible, so we don't want to require Webpack Encore to use EasyAdmin.
 */
final class AssetPackage implements PackageInterface
{
    public const PACKAGE_NAME = 'easyadmin.assets.package';

    private PackageInterface \$package;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->package = new PathPackage(
            '/bundles/easyadmin',
            new JsonManifestVersionStrategy(__DIR__.'/../Resources/public/manifest.json'),
            new RequestStackContext(\$requestStack)
        );
    }

    public function getUrl(string \$assetPath): string
    {
        return \$this->package->getUrl(\$assetPath);
    }

    public function getVersion(string \$assetPath): string
    {
        return \$this->package->getVersion(\$assetPath);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Asset/AssetPackage.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Asset;

use Symfony\\Component\\Asset\\Context\\RequestStackContext;
use Symfony\\Component\\Asset\\PackageInterface;
use Symfony\\Component\\Asset\\PathPackage;
use Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * This defines a Symfony Asset named package that groups all the assets provided
 * by EasyAdmin. This is needed because EasyAdmin uses asset versioning, so the
 * full absolute URLs of assets isn't known (the URL contain changing hashes).
 *
 * In practice this uses the same strategy (and even the same \"manifest.json\" file)
 * used by Webpack Encore. We do this because we want to keep EasyAdmin dependencies as
 * lean as possible, so we don't want to require Webpack Encore to use EasyAdmin.
 */
final class AssetPackage implements PackageInterface
{
    public const PACKAGE_NAME = 'easyadmin.assets.package';

    private PackageInterface \$package;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->package = new PathPackage(
            '/bundles/easyadmin',
            new JsonManifestVersionStrategy(__DIR__.'/../Resources/public/manifest.json'),
            new RequestStackContext(\$requestStack)
        );
    }

    public function getUrl(string \$assetPath): string
    {
        return \$this->package->getUrl(\$assetPath);
    }

    public function getVersion(string \$assetPath): string
    {
        return \$this->package->getVersion(\$assetPath);
    }
}
", "easycorp/easyadmin-bundle/src/Asset/AssetPackage.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Asset\\AssetPackage.php");
    }
}
