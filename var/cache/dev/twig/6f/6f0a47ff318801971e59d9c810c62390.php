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

/* easycorp/easyadmin-bundle/src/Config/Dashboard.php */
class __TwigTemplate_83cdb17366026ca8f89e25a1439f6af0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Dashboard.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Dashboard.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextDirection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\DashboardDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Dashboard
{
    private DashboardDto \$dto;

    private function __construct(DashboardDto \$dashboardDto)
    {
        \$this->dto = \$dashboardDto;
    }

    public static function new(): self
    {
        \$dto = new DashboardDto();

        return new self(\$dto);
    }

    public function setFaviconPath(string \$path): self
    {
        \$this->dto->setFaviconPath(\$path);

        return \$this;
    }

    public function setTitle(string \$title): self
    {
        \$this->dto->setTitle(\$title);

        return \$this;
    }

    public function setTranslationDomain(string \$translationDomain): self
    {
        \$this->dto->setTranslationDomain(\$translationDomain);

        return \$this;
    }

    public function setTextDirection(string \$direction): self
    {
        if (!\\in_array(\$direction, [TextDirection::LTR, TextDirection::RTL], true)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" value given to the textDirection option is not valid. It can only be \"%s\" or \"%s\"', \$direction, TextDirection::LTR, TextDirection::RTL));
        }

        \$this->dto->setTextDirection(\$direction);

        return \$this;
    }

    public function renderContentMaximized(bool \$maximized = true): self
    {
        \$this->dto->setContentWidth(\$maximized ? Crud::LAYOUT_CONTENT_FULL : Crud::LAYOUT_CONTENT_DEFAULT);

        return \$this;
    }

    public function renderSidebarMinimized(bool \$minimized = true): self
    {
        \$this->dto->setSidebarWidth(\$minimized ? Crud::LAYOUT_SIDEBAR_COMPACT : Crud::LAYOUT_SIDEBAR_DEFAULT);

        return \$this;
    }

    public function disableUrlSignatures(bool \$disableSignatures = true): self
    {
        trigger_deprecation(
            'easycorp/easyadmin-bundle',
            '4.1.0',
            'EasyAdmin URLs no longer include signatures because they don\\'t provide any additional security. You can stop calling the \"%s\" method to disable them. This method will be removed in future EasyAdmin versions.',
            __METHOD__,
        );

        \$this->dto->setSignedUrls(!\$disableSignatures);

        return \$this;
    }

    public function generateRelativeUrls(bool \$relativeUrls = true): self
    {
        \$this->dto->setAbsoluteUrls(!\$relativeUrls);

        return \$this;
    }

    public function disableDarkMode(bool \$disableDarkMode = true): self
    {
        \$this->dto->setEnableDarkMode(!\$disableDarkMode);

        return \$this;
    }

    public function setLocales(array \$locales): self
    {
        \$localeDtos = [];
        foreach (\$locales as \$key => \$value) {
            \$locale = match (true) {
                \$value instanceof Locale => \$value,
                \\is_string(\$key) => Locale::new(\$key, (string) \$value),
                default => Locale::new((string) \$value),
            };

            \$localeDtos[] = \$locale->getAsDto();
        }

        \$this->dto->setLocales(\$localeDtos);

        return \$this;
    }

    public function getAsDto(): DashboardDto
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
        return "easycorp/easyadmin-bundle/src/Config/Dashboard.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\TextDirection;
use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\DashboardDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Dashboard
{
    private DashboardDto \$dto;

    private function __construct(DashboardDto \$dashboardDto)
    {
        \$this->dto = \$dashboardDto;
    }

    public static function new(): self
    {
        \$dto = new DashboardDto();

        return new self(\$dto);
    }

    public function setFaviconPath(string \$path): self
    {
        \$this->dto->setFaviconPath(\$path);

        return \$this;
    }

    public function setTitle(string \$title): self
    {
        \$this->dto->setTitle(\$title);

        return \$this;
    }

    public function setTranslationDomain(string \$translationDomain): self
    {
        \$this->dto->setTranslationDomain(\$translationDomain);

        return \$this;
    }

    public function setTextDirection(string \$direction): self
    {
        if (!\\in_array(\$direction, [TextDirection::LTR, TextDirection::RTL], true)) {
            throw new \\InvalidArgumentException(sprintf('The \"%s\" value given to the textDirection option is not valid. It can only be \"%s\" or \"%s\"', \$direction, TextDirection::LTR, TextDirection::RTL));
        }

        \$this->dto->setTextDirection(\$direction);

        return \$this;
    }

    public function renderContentMaximized(bool \$maximized = true): self
    {
        \$this->dto->setContentWidth(\$maximized ? Crud::LAYOUT_CONTENT_FULL : Crud::LAYOUT_CONTENT_DEFAULT);

        return \$this;
    }

    public function renderSidebarMinimized(bool \$minimized = true): self
    {
        \$this->dto->setSidebarWidth(\$minimized ? Crud::LAYOUT_SIDEBAR_COMPACT : Crud::LAYOUT_SIDEBAR_DEFAULT);

        return \$this;
    }

    public function disableUrlSignatures(bool \$disableSignatures = true): self
    {
        trigger_deprecation(
            'easycorp/easyadmin-bundle',
            '4.1.0',
            'EasyAdmin URLs no longer include signatures because they don\\'t provide any additional security. You can stop calling the \"%s\" method to disable them. This method will be removed in future EasyAdmin versions.',
            __METHOD__,
        );

        \$this->dto->setSignedUrls(!\$disableSignatures);

        return \$this;
    }

    public function generateRelativeUrls(bool \$relativeUrls = true): self
    {
        \$this->dto->setAbsoluteUrls(!\$relativeUrls);

        return \$this;
    }

    public function disableDarkMode(bool \$disableDarkMode = true): self
    {
        \$this->dto->setEnableDarkMode(!\$disableDarkMode);

        return \$this;
    }

    public function setLocales(array \$locales): self
    {
        \$localeDtos = [];
        foreach (\$locales as \$key => \$value) {
            \$locale = match (true) {
                \$value instanceof Locale => \$value,
                \\is_string(\$key) => Locale::new(\$key, (string) \$value),
                default => Locale::new((string) \$value),
            };

            \$localeDtos[] = \$locale->getAsDto();
        }

        \$this->dto->setLocales(\$localeDtos);

        return \$this;
    }

    public function getAsDto(): DashboardDto
    {
        return \$this->dto;
    }
}
", "easycorp/easyadmin-bundle/src/Config/Dashboard.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Dashboard.php");
    }
}
