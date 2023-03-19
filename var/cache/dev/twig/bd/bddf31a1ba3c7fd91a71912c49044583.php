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

/* easycorp/easyadmin-bundle/src/Dto/MenuItemBadgeDto.php */
class __TwigTemplate_703f1096ef9ced7f8fde8709bea88725 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/MenuItemBadgeDto.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Dto/MenuItemBadgeDto.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Dto;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class MenuItemBadgeDto
{
    // these are the names as the predefined styles used by Bootstrap 5
    public const PREDEFINED_STYLES = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

    private mixed \$content;
    private string \$style;

    public function __construct(mixed \$content, string \$style)
    {
        \$this->content = \$content;
        \$this->style = \$style;
    }

    public function getContent(): mixed
    {
        return \$this->content;
    }

    public function getCssClass(): string
    {
        return \\in_array(\$this->style, self::PREDEFINED_STYLES, true) ? 'badge-'.\$this->style : '';
    }

    public function getHtmlStyle(): string
    {
        return \\in_array(\$this->style, self::PREDEFINED_STYLES, true) ? '' : \$this->style;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Dto/MenuItemBadgeDto.php";
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
final class MenuItemBadgeDto
{
    // these are the names as the predefined styles used by Bootstrap 5
    public const PREDEFINED_STYLES = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

    private mixed \$content;
    private string \$style;

    public function __construct(mixed \$content, string \$style)
    {
        \$this->content = \$content;
        \$this->style = \$style;
    }

    public function getContent(): mixed
    {
        return \$this->content;
    }

    public function getCssClass(): string
    {
        return \\in_array(\$this->style, self::PREDEFINED_STYLES, true) ? 'badge-'.\$this->style : '';
    }

    public function getHtmlStyle(): string
    {
        return \\in_array(\$this->style, self::PREDEFINED_STYLES, true) ? '' : \$this->style;
    }
}
", "easycorp/easyadmin-bundle/src/Dto/MenuItemBadgeDto.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Dto\\MenuItemBadgeDto.php");
    }
}
