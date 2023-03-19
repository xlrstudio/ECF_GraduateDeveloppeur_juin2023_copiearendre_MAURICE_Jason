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

/* easycorp/easyadmin-bundle/src/Field/Configurator/ImageConfigurator.php */
class __TwigTemplate_d4d4fac745b44f558785c85029777fb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/ImageConfigurator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Field/Configurator/ImageConfigurator.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ImageField;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ImageConfigurator implements FieldConfiguratorInterface
{
    private string \$projectDir;

    public function __construct(string \$projectDir)
    {
        \$this->projectDir = \$projectDir;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return ImageField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$configuredBasePath = \$field->getCustomOption(ImageField::OPTION_BASE_PATH);

        \$formattedValue = \\is_array(\$field->getValue())
            ? \$this->getImagesPaths(\$field->getValue(), \$configuredBasePath)
            : \$this->getImagePath(\$field->getValue(), \$configuredBasePath);
        \$field->setFormattedValue(\$formattedValue);

        \$field->setFormTypeOption('upload_filename', \$field->getCustomOption(ImageField::OPTION_UPLOADED_FILE_NAME_PATTERN));

        // this check is needed to avoid displaying broken images when image properties are optional
        if (null === \$formattedValue || '' === \$formattedValue || (\\is_array(\$formattedValue) && 0 === \\count(\$formattedValue)) || \$formattedValue === rtrim(\$configuredBasePath ?? '', '/')) {
            \$field->setTemplateName('label/empty');
        }

        if (!\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            return;
        }

        \$relativeUploadDir = \$field->getCustomOption(ImageField::OPTION_UPLOAD_DIR);
        if (null === \$relativeUploadDir) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" image field must define the directory where the images are uploaded using the setUploadDir() method.', \$field->getProperty()));
        }
        \$relativeUploadDir = u(\$relativeUploadDir)->trimStart(\\DIRECTORY_SEPARATOR)->ensureEnd(\\DIRECTORY_SEPARATOR)->toString();
        \$isStreamWrapper = filter_var(\$relativeUploadDir, \\FILTER_VALIDATE_URL);
        if (\$isStreamWrapper) {
            \$absoluteUploadDir = \$relativeUploadDir;
        } else {
            \$absoluteUploadDir = u(\$relativeUploadDir)->ensureStart(\$this->projectDir.\\DIRECTORY_SEPARATOR)->toString();
        }
        \$field->setFormTypeOption('upload_dir', \$absoluteUploadDir);
    }

    private function getImagesPaths(?array \$images, ?string \$basePath): array
    {
        \$imagesPaths = [];
        foreach (\$images as \$image) {
            \$imagesPaths[] = \$this->getImagePath(\$image, \$basePath);
        }

        return \$imagesPaths;
    }

    private function getImagePath(?string \$imagePath, ?string \$basePath): ?string
    {
        // add the base path only to images that are not absolute URLs (http or https) or protocol-relative URLs (//)
        if (null === \$imagePath || 0 !== preg_match('/^(http[s]?|\\/\\/)/i', \$imagePath)) {
            return \$imagePath;
        }

        // remove project path from filepath
        \$imagePath = str_replace(\$this->projectDir.\\DIRECTORY_SEPARATOR.'public'.\\DIRECTORY_SEPARATOR, '', \$imagePath);

        return isset(\$basePath)
            ? rtrim(\$basePath, '/').'/'.ltrim(\$imagePath, '/')
            : '/'.ltrim(\$imagePath, '/');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Field/Configurator/ImageConfigurator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;
use EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext;
use EasyCorp\\Bundle\\EasyAdminBundle\\Contracts\\Field\\FieldConfiguratorInterface;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ImageField;
use function Symfony\\Component\\String\\u;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class ImageConfigurator implements FieldConfiguratorInterface
{
    private string \$projectDir;

    public function __construct(string \$projectDir)
    {
        \$this->projectDir = \$projectDir;
    }

    public function supports(FieldDto \$field, EntityDto \$entityDto): bool
    {
        return ImageField::class === \$field->getFieldFqcn();
    }

    public function configure(FieldDto \$field, EntityDto \$entityDto, AdminContext \$context): void
    {
        \$configuredBasePath = \$field->getCustomOption(ImageField::OPTION_BASE_PATH);

        \$formattedValue = \\is_array(\$field->getValue())
            ? \$this->getImagesPaths(\$field->getValue(), \$configuredBasePath)
            : \$this->getImagePath(\$field->getValue(), \$configuredBasePath);
        \$field->setFormattedValue(\$formattedValue);

        \$field->setFormTypeOption('upload_filename', \$field->getCustomOption(ImageField::OPTION_UPLOADED_FILE_NAME_PATTERN));

        // this check is needed to avoid displaying broken images when image properties are optional
        if (null === \$formattedValue || '' === \$formattedValue || (\\is_array(\$formattedValue) && 0 === \\count(\$formattedValue)) || \$formattedValue === rtrim(\$configuredBasePath ?? '', '/')) {
            \$field->setTemplateName('label/empty');
        }

        if (!\\in_array(\$context->getCrud()->getCurrentPage(), [Crud::PAGE_EDIT, Crud::PAGE_NEW], true)) {
            return;
        }

        \$relativeUploadDir = \$field->getCustomOption(ImageField::OPTION_UPLOAD_DIR);
        if (null === \$relativeUploadDir) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" image field must define the directory where the images are uploaded using the setUploadDir() method.', \$field->getProperty()));
        }
        \$relativeUploadDir = u(\$relativeUploadDir)->trimStart(\\DIRECTORY_SEPARATOR)->ensureEnd(\\DIRECTORY_SEPARATOR)->toString();
        \$isStreamWrapper = filter_var(\$relativeUploadDir, \\FILTER_VALIDATE_URL);
        if (\$isStreamWrapper) {
            \$absoluteUploadDir = \$relativeUploadDir;
        } else {
            \$absoluteUploadDir = u(\$relativeUploadDir)->ensureStart(\$this->projectDir.\\DIRECTORY_SEPARATOR)->toString();
        }
        \$field->setFormTypeOption('upload_dir', \$absoluteUploadDir);
    }

    private function getImagesPaths(?array \$images, ?string \$basePath): array
    {
        \$imagesPaths = [];
        foreach (\$images as \$image) {
            \$imagesPaths[] = \$this->getImagePath(\$image, \$basePath);
        }

        return \$imagesPaths;
    }

    private function getImagePath(?string \$imagePath, ?string \$basePath): ?string
    {
        // add the base path only to images that are not absolute URLs (http or https) or protocol-relative URLs (//)
        if (null === \$imagePath || 0 !== preg_match('/^(http[s]?|\\/\\/)/i', \$imagePath)) {
            return \$imagePath;
        }

        // remove project path from filepath
        \$imagePath = str_replace(\$this->projectDir.\\DIRECTORY_SEPARATOR.'public'.\\DIRECTORY_SEPARATOR, '', \$imagePath);

        return isset(\$basePath)
            ? rtrim(\$basePath, '/').'/'.ltrim(\$imagePath, '/')
            : '/'.ltrim(\$imagePath, '/');
    }
}
", "easycorp/easyadmin-bundle/src/Field/Configurator/ImageConfigurator.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Field\\Configurator\\ImageConfigurator.php");
    }
}
