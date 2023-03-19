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

/* easycorp/easyadmin-bundle/src/Test/PhpUnitExtension.php */
class __TwigTemplate_ee3b4c31b640dd2b6c8a95d97cf9da97 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Test/PhpUnitExtension.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Test/PhpUnitExtension.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Test;

use PHPUnit\\Runner\\AfterLastTestHook;
use PHPUnit\\Runner\\BeforeFirstTestHook;

final class PhpUnitExtension implements BeforeFirstTestHook, AfterLastTestHook
{
    // keep the values of these constants in sync with tests/bootstrap.php
    private const EA_TEST_COMMENT_MARKER_START = '/* added-by-ea-tests';
    private const EA_TEST_COMMENT_MARKER_END = '*/';

    public function executeBeforeFirstTest(): void
    {
        // do nothing because these changes must be done before loading
        // PHP classes, so here it's too late. This is performed in the
        // tests/bootstrap.php file
    }

    public function executeAfterLastTest(): void
    {
        \$this->restoreFinalClasses();
    }

    private function restoreFinalClasses(): void
    {
        foreach (\$this->findSourceFiles() as \$sourceFilePath) {
            \$sourceFilePath = realpath(\$sourceFilePath);
            \$sourceFileContents = file_get_contents(\$sourceFilePath);
            \$sourceFileContentsWithFinalClasses = preg_replace(
                sprintf('/^%s final %s class (.*)\$/m', preg_quote(self::EA_TEST_COMMENT_MARKER_START, '/'), preg_quote(self::EA_TEST_COMMENT_MARKER_END, '/')),
                'final class \\1',
                \$sourceFileContents
            );
            file_put_contents(\$sourceFilePath, \$sourceFileContentsWithFinalClasses);
        }
    }

    private function findSourceFiles(): array
    {
        return glob(__DIR__.'/../**/*.php');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Test/PhpUnitExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Test;

use PHPUnit\\Runner\\AfterLastTestHook;
use PHPUnit\\Runner\\BeforeFirstTestHook;

final class PhpUnitExtension implements BeforeFirstTestHook, AfterLastTestHook
{
    // keep the values of these constants in sync with tests/bootstrap.php
    private const EA_TEST_COMMENT_MARKER_START = '/* added-by-ea-tests';
    private const EA_TEST_COMMENT_MARKER_END = '*/';

    public function executeBeforeFirstTest(): void
    {
        // do nothing because these changes must be done before loading
        // PHP classes, so here it's too late. This is performed in the
        // tests/bootstrap.php file
    }

    public function executeAfterLastTest(): void
    {
        \$this->restoreFinalClasses();
    }

    private function restoreFinalClasses(): void
    {
        foreach (\$this->findSourceFiles() as \$sourceFilePath) {
            \$sourceFilePath = realpath(\$sourceFilePath);
            \$sourceFileContents = file_get_contents(\$sourceFilePath);
            \$sourceFileContentsWithFinalClasses = preg_replace(
                sprintf('/^%s final %s class (.*)\$/m', preg_quote(self::EA_TEST_COMMENT_MARKER_START, '/'), preg_quote(self::EA_TEST_COMMENT_MARKER_END, '/')),
                'final class \\1',
                \$sourceFileContents
            );
            file_put_contents(\$sourceFilePath, \$sourceFileContentsWithFinalClasses);
        }
    }

    private function findSourceFiles(): array
    {
        return glob(__DIR__.'/../**/*.php');
    }
}
", "easycorp/easyadmin-bundle/src/Test/PhpUnitExtension.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Test\\PhpUnitExtension.php");
    }
}
