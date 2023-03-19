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

/* easycorp/easyadmin-bundle/src/Form/DataTransformer/StringToFileTransformer.php */
class __TwigTemplate_79577ecefcc4c88a0061493d7c14fefa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/DataTransformer/StringToFileTransformer.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/DataTransformer/StringToFileTransformer.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class StringToFileTransformer implements DataTransformerInterface
{
    private string \$uploadDir;
    private \$uploadFilename;
    private \$uploadValidate;
    private bool \$multiple;

    public function __construct(string \$uploadDir, callable \$uploadFilename, callable \$uploadValidate, bool \$multiple)
    {
        \$this->uploadDir = \$uploadDir;
        \$this->uploadFilename = \$uploadFilename;
        \$this->uploadValidate = \$uploadValidate;
        \$this->multiple = \$multiple;
    }

    public function transform(\$value)
    {
        if (null === \$value || [] === \$value) {
            return null;
        }

        if (!\$this->multiple) {
            return \$this->doTransform(\$value);
        }

        if (!\\is_array(\$value)) {
            throw new TransformationFailedException('Expected an array or null.');
        }

        return array_map([\$this, 'doTransform'], \$value);
    }

    public function reverseTransform(\$value)
    {
        if (null === \$value || [] === \$value) {
            return null;
        }

        if (!\$this->multiple) {
            return \$this->doReverseTransform(\$value);
        }

        if (!\\is_array(\$value)) {
            throw new TransformationFailedException('Expected an array or null.');
        }

        return array_map([\$this, 'doReverseTransform'], \$value);
    }

    private function doTransform(\$value): ?File
    {
        if (null === \$value) {
            return null;
        }

        if (\$value instanceof File) {
            return \$value;
        }

        if (!\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a string or null.');
        }

        if (is_file(\$this->uploadDir.\$value)) {
            return new File(\$this->uploadDir.\$value);
        }

        return null;
    }

    private function doReverseTransform(\$value): ?string
    {
        if (null === \$value) {
            return null;
        }

        if (\$value instanceof UploadedFile) {
            if (!\$value->isValid()) {
                throw new TransformationFailedException(\$value->getErrorMessage());
            }

            \$filename = (\$this->uploadFilename)(\$value);

            return (\$this->uploadValidate)(\$filename);
        }

        if (\$value instanceof File) {
            return \$value->getFilename();
        }

        throw new TransformationFailedException('Expected an instance of File or null.');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/DataTransformer/StringToFileTransformer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class StringToFileTransformer implements DataTransformerInterface
{
    private string \$uploadDir;
    private \$uploadFilename;
    private \$uploadValidate;
    private bool \$multiple;

    public function __construct(string \$uploadDir, callable \$uploadFilename, callable \$uploadValidate, bool \$multiple)
    {
        \$this->uploadDir = \$uploadDir;
        \$this->uploadFilename = \$uploadFilename;
        \$this->uploadValidate = \$uploadValidate;
        \$this->multiple = \$multiple;
    }

    public function transform(\$value)
    {
        if (null === \$value || [] === \$value) {
            return null;
        }

        if (!\$this->multiple) {
            return \$this->doTransform(\$value);
        }

        if (!\\is_array(\$value)) {
            throw new TransformationFailedException('Expected an array or null.');
        }

        return array_map([\$this, 'doTransform'], \$value);
    }

    public function reverseTransform(\$value)
    {
        if (null === \$value || [] === \$value) {
            return null;
        }

        if (!\$this->multiple) {
            return \$this->doReverseTransform(\$value);
        }

        if (!\\is_array(\$value)) {
            throw new TransformationFailedException('Expected an array or null.');
        }

        return array_map([\$this, 'doReverseTransform'], \$value);
    }

    private function doTransform(\$value): ?File
    {
        if (null === \$value) {
            return null;
        }

        if (\$value instanceof File) {
            return \$value;
        }

        if (!\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a string or null.');
        }

        if (is_file(\$this->uploadDir.\$value)) {
            return new File(\$this->uploadDir.\$value);
        }

        return null;
    }

    private function doReverseTransform(\$value): ?string
    {
        if (null === \$value) {
            return null;
        }

        if (\$value instanceof UploadedFile) {
            if (!\$value->isValid()) {
                throw new TransformationFailedException(\$value->getErrorMessage());
            }

            \$filename = (\$this->uploadFilename)(\$value);

            return (\$this->uploadValidate)(\$filename);
        }

        if (\$value instanceof File) {
            return \$value->getFilename();
        }

        throw new TransformationFailedException('Expected an instance of File or null.');
    }
}
", "easycorp/easyadmin-bundle/src/Form/DataTransformer/StringToFileTransformer.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\DataTransformer\\StringToFileTransformer.php");
    }
}
