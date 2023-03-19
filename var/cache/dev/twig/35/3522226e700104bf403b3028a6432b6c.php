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

/* easycorp/easyadmin-bundle/src/Form/Type/Model/FileUploadState.php */
class __TwigTemplate_e643b92c5a74971b8c7c613062359859 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/Model/FileUploadState.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/Model/FileUploadState.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Model;

use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class FileUploadState
{
    private bool \$allowAdd;

    /** @var File[] */
    private array \$currentFiles = [];

    /** @var UploadedFile[] */
    private array \$uploadedFiles = [];

    private bool \$delete = false;

    public function __construct(bool \$allowAdd = false)
    {
        \$this->allowAdd = \$allowAdd;
    }

    /**
     * @return File[]
     */
    public function getCurrentFiles(): array
    {
        return \$this->currentFiles;
    }

    /**
     * @param File|array<File>|null \$currentFiles
     */
    public function setCurrentFiles(\$currentFiles): void
    {
        if (null === \$currentFiles) {
            \$currentFiles = [];
        }

        if (!\\is_array(\$currentFiles)) {
            \$currentFiles = [\$currentFiles];
        }

        \$this->currentFiles = \$currentFiles;
    }

    public function hasCurrentFiles(): bool
    {
        return [] !== \$this->currentFiles;
    }

    /**
     * @return UploadedFile[]
     */
    public function getUploadedFiles(): iterable
    {
        if (\$this->allowAdd) {
            \$index = \\count(\$this->currentFiles);
        } else {
            \$index = 0;
        }

        foreach (\$this->uploadedFiles as \$uploadedFile) {
            yield \$index++ => \$uploadedFile;
        }
    }

    public function setUploadedFiles(\$uploadedFiles): void
    {
        if (null === \$uploadedFiles) {
            \$uploadedFiles = [];
        }

        if (!\\is_array(\$uploadedFiles)) {
            \$uploadedFiles = [\$uploadedFiles];
        }

        \$this->uploadedFiles = \$uploadedFiles;
    }

    public function hasUploadedFiles(): bool
    {
        return [] !== \$this->uploadedFiles;
    }

    public function isAddAllowed(): bool
    {
        return \$this->allowAdd;
    }

    public function setAllowAdd(bool \$allowAdd): void
    {
        \$this->allowAdd = \$allowAdd;
    }

    public function isDelete(): bool
    {
        return \$this->delete;
    }

    public function setDelete(bool \$delete): void
    {
        \$this->delete = \$delete;
    }

    public function isModified(): bool
    {
        return [] !== \$this->uploadedFiles || \$this->delete;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Type/Model/FileUploadState.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Model;

use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class FileUploadState
{
    private bool \$allowAdd;

    /** @var File[] */
    private array \$currentFiles = [];

    /** @var UploadedFile[] */
    private array \$uploadedFiles = [];

    private bool \$delete = false;

    public function __construct(bool \$allowAdd = false)
    {
        \$this->allowAdd = \$allowAdd;
    }

    /**
     * @return File[]
     */
    public function getCurrentFiles(): array
    {
        return \$this->currentFiles;
    }

    /**
     * @param File|array<File>|null \$currentFiles
     */
    public function setCurrentFiles(\$currentFiles): void
    {
        if (null === \$currentFiles) {
            \$currentFiles = [];
        }

        if (!\\is_array(\$currentFiles)) {
            \$currentFiles = [\$currentFiles];
        }

        \$this->currentFiles = \$currentFiles;
    }

    public function hasCurrentFiles(): bool
    {
        return [] !== \$this->currentFiles;
    }

    /**
     * @return UploadedFile[]
     */
    public function getUploadedFiles(): iterable
    {
        if (\$this->allowAdd) {
            \$index = \\count(\$this->currentFiles);
        } else {
            \$index = 0;
        }

        foreach (\$this->uploadedFiles as \$uploadedFile) {
            yield \$index++ => \$uploadedFile;
        }
    }

    public function setUploadedFiles(\$uploadedFiles): void
    {
        if (null === \$uploadedFiles) {
            \$uploadedFiles = [];
        }

        if (!\\is_array(\$uploadedFiles)) {
            \$uploadedFiles = [\$uploadedFiles];
        }

        \$this->uploadedFiles = \$uploadedFiles;
    }

    public function hasUploadedFiles(): bool
    {
        return [] !== \$this->uploadedFiles;
    }

    public function isAddAllowed(): bool
    {
        return \$this->allowAdd;
    }

    public function setAllowAdd(bool \$allowAdd): void
    {
        \$this->allowAdd = \$allowAdd;
    }

    public function isDelete(): bool
    {
        return \$this->delete;
    }

    public function setDelete(bool \$delete): void
    {
        \$this->delete = \$delete;
    }

    public function isModified(): bool
    {
        return [] !== \$this->uploadedFiles || \$this->delete;
    }
}
", "easycorp/easyadmin-bundle/src/Form/Type/Model/FileUploadState.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\Model\\FileUploadState.php");
    }
}
