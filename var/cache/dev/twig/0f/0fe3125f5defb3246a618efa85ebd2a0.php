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

/* easycorp/easyadmin-bundle/src/Dto/DashboardDto.php */
class __TwigTemplate_55835424aaba5f5c62896ea4296b3d48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/DashboardDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/DashboardDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DashboardDto
{
    private \$routeName;
    private string \$faviconPath = 'data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⬛</text></svg>';
    private string \$title = 'EasyAdmin';
    private string \$translationDomain = 'messages';
    private \$textDirection;
    private string \$contentWidth = Crud::LAYOUT_CONTENT_DEFAULT;
    private string \$sidebarWidth = Crud::LAYOUT_SIDEBAR_DEFAULT;
    private bool \$signedUrls = false;
    private bool \$absoluteUrls = true;
    private bool \$enableDarkMode = true;
    /** @var LocaleDto[] */
    private array \$locales = [];

    public function getRouteName(): string
    {
        return \$this->routeName;
    }

    public function setRouteName(/* string */ \$routeName): void
    {
        if (!\\is_string(\$routeName)) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$routeName',
                __METHOD__,
                '\"string\"',
                \\gettype(\$routeName)
            );
        }

        \$this->routeName = \$routeName;
    }

    public function getFaviconPath(): string
    {
        return \$this->faviconPath;
    }

    public function setFaviconPath(string \$faviconPath): void
    {
        \$this->faviconPath = \$faviconPath;
    }

    public function getTitle(): string
    {
        return \$this->title;
    }

    public function setTitle(string \$title): void
    {
        \$this->title = \$title;
    }

    public function getTranslationDomain(): string
    {
        return \$this->translationDomain;
    }

    public function setTranslationDomain(string \$translationDomain): void
    {
        \$this->translationDomain = \$translationDomain;
    }

    public function getTextDirection(): ?string
    {
        return \$this->textDirection;
    }

    public function setTextDirection(/* ?string */ \$textDirection): void
    {
        if (!\\is_string(\$textDirection)
            && null !== \$textDirection) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$textDirection',
                __METHOD__,
                '\"string\" or \"null\"',
                \\gettype(\$textDirection)
            );
        }

        \$this->textDirection = \$textDirection;
    }

    public function getContentWidth(): string
    {
        return \$this->contentWidth;
    }

    public function setContentWidth(string \$contentWidth): void
    {
        \$this->contentWidth = \$contentWidth;
    }

    public function getSidebarWidth(): string
    {
        return \$this->sidebarWidth;
    }

    public function setSidebarWidth(string \$sidebarWidth): void
    {
        \$this->sidebarWidth = \$sidebarWidth;
    }

    public function getSignedUrls(): bool
    {
        return \$this->signedUrls;
    }

    public function setSignedUrls(bool \$signedUrls): self
    {
        \$this->signedUrls = \$signedUrls;

        return \$this;
    }

    public function getAbsoluteUrls(): bool
    {
        return \$this->absoluteUrls;
    }

    public function setAbsoluteUrls(bool \$absoluteUrls): self
    {
        \$this->absoluteUrls = \$absoluteUrls;

        return \$this;
    }

    public function setEnableDarkMode(bool \$enableDarkMode): self
    {
        \$this->enableDarkMode = \$enableDarkMode;

        return \$this;
    }

    public function isDarkModeEnabled(): bool
    {
        return \$this->enableDarkMode;
    }

    public function getLocales(): array
    {
        return \$this->locales;
    }

    /**
     * @param LocaleDto[] \$locales
     */
    public function setLocales(array \$locales): void
    {
        \$this->locales = \$locales;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/DashboardDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

use EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class DashboardDto
{
    private \$routeName;
    private string \$faviconPath = 'data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⬛</text></svg>';
    private string \$title = 'EasyAdmin';
    private string \$translationDomain = 'messages';
    private \$textDirection;
    private string \$contentWidth = Crud::LAYOUT_CONTENT_DEFAULT;
    private string \$sidebarWidth = Crud::LAYOUT_SIDEBAR_DEFAULT;
    private bool \$signedUrls = false;
    private bool \$absoluteUrls = true;
    private bool \$enableDarkMode = true;
    /** @var LocaleDto[] */
    private array \$locales = [];

    public function getRouteName(): string
    {
        return \$this->routeName;
    }

    public function setRouteName(/* string */ \$routeName): void
    {
        if (!\\is_string(\$routeName)) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$routeName',
                __METHOD__,
                '\"string\"',
                \\gettype(\$routeName)
            );
        }

        \$this->routeName = \$routeName;
    }

    public function getFaviconPath(): string
    {
        return \$this->faviconPath;
    }

    public function setFaviconPath(string \$faviconPath): void
    {
        \$this->faviconPath = \$faviconPath;
    }

    public function getTitle(): string
    {
        return \$this->title;
    }

    public function setTitle(string \$title): void
    {
        \$this->title = \$title;
    }

    public function getTranslationDomain(): string
    {
        return \$this->translationDomain;
    }

    public function setTranslationDomain(string \$translationDomain): void
    {
        \$this->translationDomain = \$translationDomain;
    }

    public function getTextDirection(): ?string
    {
        return \$this->textDirection;
    }

    public function setTextDirection(/* ?string */ \$textDirection): void
    {
        if (!\\is_string(\$textDirection)
            && null !== \$textDirection) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$textDirection',
                __METHOD__,
                '\"string\" or \"null\"',
                \\gettype(\$textDirection)
            );
        }

        \$this->textDirection = \$textDirection;
    }

    public function getContentWidth(): string
    {
        return \$this->contentWidth;
    }

    public function setContentWidth(string \$contentWidth): void
    {
        \$this->contentWidth = \$contentWidth;
    }

    public function getSidebarWidth(): string
    {
        return \$this->sidebarWidth;
    }

    public function setSidebarWidth(string \$sidebarWidth): void
    {
        \$this->sidebarWidth = \$sidebarWidth;
    }

    public function getSignedUrls(): bool
    {
        return \$this->signedUrls;
    }

    public function setSignedUrls(bool \$signedUrls): self
    {
        \$this->signedUrls = \$signedUrls;

        return \$this;
    }

    public function getAbsoluteUrls(): bool
    {
        return \$this->absoluteUrls;
    }

    public function setAbsoluteUrls(bool \$absoluteUrls): self
    {
        \$this->absoluteUrls = \$absoluteUrls;

        return \$this;
    }

    public function setEnableDarkMode(bool \$enableDarkMode): self
    {
        \$this->enableDarkMode = \$enableDarkMode;

        return \$this;
    }

    public function isDarkModeEnabled(): bool
    {
        return \$this->enableDarkMode;
    }

    public function getLocales(): array
    {
        return \$this->locales;
    }

    /**
     * @param LocaleDto[] \$locales
     */
    public function setLocales(array \$locales): void
    {
        \$this->locales = \$locales;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/DashboardDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\DashboardDto.php");
    }
}
