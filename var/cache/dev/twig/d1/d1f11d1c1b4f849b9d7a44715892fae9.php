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

/* easycorp/easyadmin-bundle/src/Field/ImageField.php */
class __TwigTemplate_60403e1e1b737ce7704c73d8f2862a85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/ImageField.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/ImageField.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Asset;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextAlign;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ImageField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_BASE_PATH = 'basePath';
    public const OPTION_UPLOAD_DIR = 'uploadDir';
    public const OPTION_UPLOADED_FILE_NAME_PATTERN = 'uploadedFileNamePattern';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/image')
            ->setFormType(FileUploadType::class)
            ->addCssClass('field-image')
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-image.js'), Asset::fromEasyAdminAssetPackage('field-file-upload.js'))
            ->setDefaultColumns('col-md-7 col-xxl-5')
            ->setTextAlign(TextAlign::CENTER)
            ->setCustomOption(self::OPTION_BASE_PATH, null)
            ->setCustomOption(self::OPTION_UPLOAD_DIR, null)
            ->setCustomOption(self::OPTION_UPLOADED_FILE_NAME_PATTERN, '[name].[extension]');
    }

    public function setBasePath(string \$path): self
    {
        \$this->setCustomOption(self::OPTION_BASE_PATH, \$path);

        return \$this;
    }

    /**
     * Relative to project's root directory (e.g. use 'public/uploads/' for `<your-project-dir>/public/uploads/`)
     * Default upload dir: `<your-project-dir>/public/uploads/images/`.
     */
    public function setUploadDir(string \$uploadDirPath): self
    {
        \$this->setCustomOption(self::OPTION_UPLOAD_DIR, \$uploadDirPath);

        return \$this;
    }

    /**
     * @param string|\\Closure \$patternOrCallable
     *
     * If it's a string, uploaded files will be renamed according to the given pattern.
     * The pattern can include the following special values:
     *   [day] [month] [year] [timestamp]
     *   [name] [slug] [extension] [contenthash]
     *   [randomhash] [uuid] [ulid]
     * (e.g. [year]/[month]/[day]/[slug]-[contenthash].[extension])
     *
     * If it's a callable, you will be passed the Symfony's UploadedFile instance and you must
     * return a string with the new filename.
     * (e.g. fn(UploadedFile \$file) => sprintf('upload_%d_%s.%s', random_int(1, 999), \$file->getFilename(), \$file->guessExtension()))
     */
    public function setUploadedFileNamePattern(\$patternOrCallable): self
    {
        \$this->setCustomOption(self::OPTION_UPLOADED_FILE_NAME_PATTERN, \$patternOrCallable);

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/ImageField.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Asset;
use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextAlign;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ImageField implements FieldInterface
{
    use FieldTrait;

    public const OPTION_BASE_PATH = 'basePath';
    public const OPTION_UPLOAD_DIR = 'uploadDir';
    public const OPTION_UPLOADED_FILE_NAME_PATTERN = 'uploadedFileNamePattern';

    /**
     * @param TranslatableInterface|string|false|null \$label
     */
    public static function new(string \$propertyName, \$label = null): self
    {
        return (new self())
            ->setProperty(\$propertyName)
            ->setLabel(\$label)
            ->setTemplateName('crud/field/image')
            ->setFormType(FileUploadType::class)
            ->addCssClass('field-image')
            ->addJsFiles(Asset::fromEasyAdminAssetPackage('field-image.js'), Asset::fromEasyAdminAssetPackage('field-file-upload.js'))
            ->setDefaultColumns('col-md-7 col-xxl-5')
            ->setTextAlign(TextAlign::CENTER)
            ->setCustomOption(self::OPTION_BASE_PATH, null)
            ->setCustomOption(self::OPTION_UPLOAD_DIR, null)
            ->setCustomOption(self::OPTION_UPLOADED_FILE_NAME_PATTERN, '[name].[extension]');
    }

    public function setBasePath(string \$path): self
    {
        \$this->setCustomOption(self::OPTION_BASE_PATH, \$path);

        return \$this;
    }

    /**
     * Relative to project's root directory (e.g. use 'public/uploads/' for `<your-project-dir>/public/uploads/`)
     * Default upload dir: `<your-project-dir>/public/uploads/images/`.
     */
    public function setUploadDir(string \$uploadDirPath): self
    {
        \$this->setCustomOption(self::OPTION_UPLOAD_DIR, \$uploadDirPath);

        return \$this;
    }

    /**
     * @param string|\\Closure \$patternOrCallable
     *
     * If it's a string, uploaded files will be renamed according to the given pattern.
     * The pattern can include the following special values:
     *   [day] [month] [year] [timestamp]
     *   [name] [slug] [extension] [contenthash]
     *   [randomhash] [uuid] [ulid]
     * (e.g. [year]/[month]/[day]/[slug]-[contenthash].[extension])
     *
     * If it's a callable, you will be passed the Symfony's UploadedFile instance and you must
     * return a string with the new filename.
     * (e.g. fn(UploadedFile \$file) => sprintf('upload_%d_%s.%s', random_int(1, 999), \$file->getFilename(), \$file->guessExtension()))
     */
    public function setUploadedFileNamePattern(\$patternOrCallable): self
    {
        \$this->setCustomOption(self::OPTION_UPLOADED_FILE_NAME_PATTERN, \$patternOrCallable);

        return \$this;
    }
}
", "easycorp/easyadmin-bundle/src/Field/ImageField.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\ImageField.php");
    }
}
