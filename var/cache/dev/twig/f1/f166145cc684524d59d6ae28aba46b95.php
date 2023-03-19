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

/* easycorp/easyadmin-bundle/src/Config/Menu/MenuItemTrait.php */
class __TwigTemplate_52e701b6dcc110156e5a697d31baacc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Menu/MenuItemTrait.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Menu/MenuItemTrait.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
trait MenuItemTrait
{
    private MenuItemDto \$dto;

    public function setCssClass(string \$cssClass): self
    {
        \$this->dto->setCssClass(\$cssClass);

        return \$this;
    }

    public function setQueryParameter(string \$parameterName, mixed \$parameterValue): self
    {
        \$this->dto->setRouteParameter(\$parameterName, \$parameterValue);

        return \$this;
    }

    public function setPermission(string \$permission): self
    {
        \$this->dto->setPermission(\$permission);

        return \$this;
    }

    public function setTranslationParameters(array \$parameters): self
    {
        \$this->dto->setTranslationParameters(\$parameters);

        return \$this;
    }

    public function setLinkRel(string \$rel): self
    {
        \$this->dto->setLinkRel(\$rel);

        return \$this;
    }

    public function setLinkTarget(string \$target): self
    {
        \$this->dto->setLinkTarget(\$target);

        return \$this;
    }

    /**
     * @param \$content  This is rendered as the value of the badge; it can be anything that can be casted to
     *                  a string (numbers, stringable objects, etc.)
     * @param \$style    Pass one of these values for predefined styles: 'primary', 'secondary', 'success',
     *                  'danger', 'warning', 'info', 'light', 'dark'
     *                  Otherwise, the passed value is applied \"as is\" to the `style` attribute of the HTML
     *                  element of the badge
     */
    public function setBadge(/* \\Stringable|string|int|float|bool|null */ \$content, string \$style = 'secondary'): self
    {
        if (!\\is_string(\$content)
            && !\$content instanceof \\Stringable
            && !\\is_int(\$content)
            && !\\is_float(\$content)
            && !\\is_bool(\$content)
            && null !== \$content) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$content',
                __METHOD__,
                '\"string\", \"\\Stringable\", \"int\", \"float\", \"bool\" or \"null\"',
                \\gettype(\$content)
            );
        }

        \$this->dto->setBadge(\$content, \$style);

        return \$this;
    }

    public function getAsDto(): MenuItemDto
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
        return "easycorp/easyadmin-bundle/src/Config/Menu/MenuItemTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Menu;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\MenuItemDto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
trait MenuItemTrait
{
    private MenuItemDto \$dto;

    public function setCssClass(string \$cssClass): self
    {
        \$this->dto->setCssClass(\$cssClass);

        return \$this;
    }

    public function setQueryParameter(string \$parameterName, mixed \$parameterValue): self
    {
        \$this->dto->setRouteParameter(\$parameterName, \$parameterValue);

        return \$this;
    }

    public function setPermission(string \$permission): self
    {
        \$this->dto->setPermission(\$permission);

        return \$this;
    }

    public function setTranslationParameters(array \$parameters): self
    {
        \$this->dto->setTranslationParameters(\$parameters);

        return \$this;
    }

    public function setLinkRel(string \$rel): self
    {
        \$this->dto->setLinkRel(\$rel);

        return \$this;
    }

    public function setLinkTarget(string \$target): self
    {
        \$this->dto->setLinkTarget(\$target);

        return \$this;
    }

    /**
     * @param \$content  This is rendered as the value of the badge; it can be anything that can be casted to
     *                  a string (numbers, stringable objects, etc.)
     * @param \$style    Pass one of these values for predefined styles: 'primary', 'secondary', 'success',
     *                  'danger', 'warning', 'info', 'light', 'dark'
     *                  Otherwise, the passed value is applied \"as is\" to the `style` attribute of the HTML
     *                  element of the badge
     */
    public function setBadge(/* \\Stringable|string|int|float|bool|null */ \$content, string \$style = 'secondary'): self
    {
        if (!\\is_string(\$content)
            && !\$content instanceof \\Stringable
            && !\\is_int(\$content)
            && !\\is_float(\$content)
            && !\\is_bool(\$content)
            && null !== \$content) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$content',
                __METHOD__,
                '\"string\", \"\\Stringable\", \"int\", \"float\", \"bool\" or \"null\"',
                \\gettype(\$content)
            );
        }

        \$this->dto->setBadge(\$content, \$style);

        return \$this;
    }

    public function getAsDto(): MenuItemDto
    {
        return \$this->dto;
    }
}
", "easycorp/easyadmin-bundle/src/Config/Menu/MenuItemTrait.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Menu\\MenuItemTrait.php");
    }
}
