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

/* easycorp/easyadmin-bundle/src/Factory/FieldLayoutFactory.php */
class __TwigTemplate_660ae56628d6e0bc1148696895a669e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/FieldLayoutFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Factory/FieldLayoutFactory.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldLayoutDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminTabType;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * @internal and @experimental don't use this in your own apps
 */
final class FieldLayoutFactory
{
    private function __construct()
    {
    }

    public static function createFromFieldDtos(FieldCollection|null \$fieldDtos): FieldLayoutDto
    {
        if (null === \$fieldDtos) {
            return new FieldLayoutDto();
        }

        \$hasTabs = false;
        foreach (\$fieldDtos as \$fieldDto) {
            if (self::isTabField(\$fieldDto)) {
                \$hasTabs = true;
                break;
            }
        }

        \$tabs = [];
        \$fields = [];
        \$currentTab = null;
        /** @var FieldDto \$fieldDto */
        foreach (\$fieldDtos as \$fieldDto) {
            if (self::isTabField(\$fieldDto)) {
                \$currentTab = \$fieldDto;
                \$tabs[\$fieldDto->getUniqueId()] = \$fieldDto;
            } else {
                if (\$hasTabs) {
                    \$fields[\$currentTab->getUniqueId()][] = \$fieldDto;
                } else {
                    \$fields[] = \$fieldDto;
                }
            }
        }

        return new FieldLayoutDto(\$fields, \$tabs);
    }

    private static function isTabField(FieldDto \$fieldDto): bool
    {
        return EasyAdminTabType::class === \$fieldDto->getFormType();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Factory/FieldLayoutFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Factory;

use EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldLayoutDto;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminTabType;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * @internal and @experimental don't use this in your own apps
 */
final class FieldLayoutFactory
{
    private function __construct()
    {
    }

    public static function createFromFieldDtos(FieldCollection|null \$fieldDtos): FieldLayoutDto
    {
        if (null === \$fieldDtos) {
            return new FieldLayoutDto();
        }

        \$hasTabs = false;
        foreach (\$fieldDtos as \$fieldDto) {
            if (self::isTabField(\$fieldDto)) {
                \$hasTabs = true;
                break;
            }
        }

        \$tabs = [];
        \$fields = [];
        \$currentTab = null;
        /** @var FieldDto \$fieldDto */
        foreach (\$fieldDtos as \$fieldDto) {
            if (self::isTabField(\$fieldDto)) {
                \$currentTab = \$fieldDto;
                \$tabs[\$fieldDto->getUniqueId()] = \$fieldDto;
            } else {
                if (\$hasTabs) {
                    \$fields[\$currentTab->getUniqueId()][] = \$fieldDto;
                } else {
                    \$fields[] = \$fieldDto;
                }
            }
        }

        return new FieldLayoutDto(\$fields, \$tabs);
    }

    private static function isTabField(FieldDto \$fieldDto): bool
    {
        return EasyAdminTabType::class === \$fieldDto->getFormType();
    }
}
", "easycorp/easyadmin-bundle/src/Factory/FieldLayoutFactory.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Factory\\FieldLayoutFactory.php");
    }
}
