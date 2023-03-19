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

/* easycorp/easyadmin-bundle/src/Config/Locale.php */
class __TwigTemplate_da98d7369ea081abaf0fad8a4d515191 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Locale.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Locale.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\LocaleDto;
use Symfony\\Component\\Intl\\Locales;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Locale
{
    private LocaleDto \$dto;

    private function __construct(LocaleDto \$localeDto)
    {
        \$this->dto = \$localeDto;
    }

    public function __toString()
    {
        return \$this->dto->getName();
    }

    public static function new(string \$locale, string|null \$label = null, ?string \$icon = null): self
    {
        if (!Locales::exists(\$locale)) {
            throw new \\InvalidArgumentException(sprintf('The given value \"%s\" is not a valid locale code or it is not supported by the Symfony Intl component.', \$locale));
        }

        \$label ??= Locales::getName(\$locale, \$locale);

        \$dto = new LocaleDto(\$locale, \$label, \$icon);

        return new self(\$dto);
    }

    public function getAsDto(): LocaleDto
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
        return "easycorp/easyadmin-bundle/src/Config/Locale.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\LocaleDto;
use Symfony\\Component\\Intl\\Locales;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Locale
{
    private LocaleDto \$dto;

    private function __construct(LocaleDto \$localeDto)
    {
        \$this->dto = \$localeDto;
    }

    public function __toString()
    {
        return \$this->dto->getName();
    }

    public static function new(string \$locale, string|null \$label = null, ?string \$icon = null): self
    {
        if (!Locales::exists(\$locale)) {
            throw new \\InvalidArgumentException(sprintf('The given value \"%s\" is not a valid locale code or it is not supported by the Symfony Intl component.', \$locale));
        }

        \$label ??= Locales::getName(\$locale, \$locale);

        \$dto = new LocaleDto(\$locale, \$label, \$icon);

        return new self(\$dto);
    }

    public function getAsDto(): LocaleDto
    {
        return \$this->dto;
    }
}
", "easycorp/easyadmin-bundle/src/Config/Locale.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Locale.php");
    }
}
