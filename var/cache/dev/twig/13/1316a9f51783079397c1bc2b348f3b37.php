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

/* easycorp/easyadmin-bundle/src/Dto/I18nDto.php */
class __TwigTemplate_aa25ceb4463134ea1e6ba82601693d18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/I18nDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/I18nDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class I18nDto
{
    private string \$locale;
    private \$language;
    private string \$textDirection;
    private string \$translationDomain;
    private array \$translationParameters;

    public function __construct(string \$locale, string \$textDirection, string \$translationDomain, array \$translationParameters)
    {
        \$this->locale = \$locale;
        \$this->language = strtok(\$locale, '-_');
        \$this->textDirection = \$textDirection;
        \$this->translationDomain = \$translationDomain;
        \$this->translationParameters = \$translationParameters;
    }

    /**
     * Returns the full locale formatted as ICU/Java/Symfony locales (e.g. 'es_ES', 'en_US').
     *
     * @see self::getHtmlLocale() if you need to format locale for HTML 'lang' attribute
     */
    public function getLocale(): string
    {
        return \$this->locale;
    }

    /**
     * Returns the locale formatted as an IETF BCP 47 language tag, as required
     * by HTML 'lang' attribute (in practice, it replaces underscores by dashes).
     * Example: Symfony locale = 'es_ES'   HTML locale = 'es-ES'.
     *
     * @see self::getLocale() if you need to format locale for Symfony code
     */
    public function getHtmlLocale(): string
    {
        return str_replace('_', '-', \$this->locale);
    }

    /**
     * Returns the language part of the locale (e.g. returns 'es' for 'es_ES' and 'zh' for 'zh_Hans_MO').
     */
    public function getLanguage(): string
    {
        return \$this->language;
    }

    public function getTextDirection(): string
    {
        return \$this->textDirection;
    }

    public function getTranslationDomain(): string
    {
        return \$this->translationDomain;
    }

    public function getTranslationParameters(): array
    {
        return \$this->translationParameters;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/I18nDto.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class I18nDto
{
    private string \$locale;
    private \$language;
    private string \$textDirection;
    private string \$translationDomain;
    private array \$translationParameters;

    public function __construct(string \$locale, string \$textDirection, string \$translationDomain, array \$translationParameters)
    {
        \$this->locale = \$locale;
        \$this->language = strtok(\$locale, '-_');
        \$this->textDirection = \$textDirection;
        \$this->translationDomain = \$translationDomain;
        \$this->translationParameters = \$translationParameters;
    }

    /**
     * Returns the full locale formatted as ICU/Java/Symfony locales (e.g. 'es_ES', 'en_US').
     *
     * @see self::getHtmlLocale() if you need to format locale for HTML 'lang' attribute
     */
    public function getLocale(): string
    {
        return \$this->locale;
    }

    /**
     * Returns the locale formatted as an IETF BCP 47 language tag, as required
     * by HTML 'lang' attribute (in practice, it replaces underscores by dashes).
     * Example: Symfony locale = 'es_ES'   HTML locale = 'es-ES'.
     *
     * @see self::getLocale() if you need to format locale for Symfony code
     */
    public function getHtmlLocale(): string
    {
        return str_replace('_', '-', \$this->locale);
    }

    /**
     * Returns the language part of the locale (e.g. returns 'es' for 'es_ES' and 'zh' for 'zh_Hans_MO').
     */
    public function getLanguage(): string
    {
        return \$this->language;
    }

    public function getTextDirection(): string
    {
        return \$this->textDirection;
    }

    public function getTranslationDomain(): string
    {
        return \$this->translationDomain;
    }

    public function getTranslationParameters(): array
    {
        return \$this->translationParameters;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/I18nDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\I18nDto.php");
    }
}
