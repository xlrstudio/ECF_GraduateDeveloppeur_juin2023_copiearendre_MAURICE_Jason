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

/* easycorp/easyadmin-bundle/src/Form/ChoiceList/Loader/DynamicChoiceLoader.php */
class __TwigTemplate_758bfe8c5fa6cc9cbb20f17a23ff2068 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/ChoiceList/Loader/DynamicChoiceLoader.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/ChoiceList/Loader/DynamicChoiceLoader.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\ChoiceList\\Loader;

use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;

/**
 * Loads the choice list from the submitted values.
 *
 * This allows adding more <option> to the <select> input dynamically.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class DynamicChoiceLoader implements ChoiceLoaderInterface
{
    private array \$choices = [];
    private bool \$cached = false;
    private ?ArrayChoiceList \$choiceList = null;

    public function loadChoiceList(?callable \$value = null): ChoiceListInterface
    {
        if (null === \$this->choiceList || !\$this->cached) {
            \$this->choiceList = new ArrayChoiceList(array_combine(\$this->choices, \$this->choices));
            \$this->cached = true;
        }

        return \$this->choiceList;
    }

    public function loadChoicesForValues(array \$values, \$value = null): array
    {
        if (\$this->choices !== \$values) {
            \$this->cached = false;
        }

        return \$this->choices = \$values;
    }

    public function loadValuesForChoices(array \$choices, \$value = null): array
    {
        return \$choices;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/ChoiceList/Loader/DynamicChoiceLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\ChoiceList\\Loader;

use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface;

/**
 * Loads the choice list from the submitted values.
 *
 * This allows adding more <option> to the <select> input dynamically.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class DynamicChoiceLoader implements ChoiceLoaderInterface
{
    private array \$choices = [];
    private bool \$cached = false;
    private ?ArrayChoiceList \$choiceList = null;

    public function loadChoiceList(?callable \$value = null): ChoiceListInterface
    {
        if (null === \$this->choiceList || !\$this->cached) {
            \$this->choiceList = new ArrayChoiceList(array_combine(\$this->choices, \$this->choices));
            \$this->cached = true;
        }

        return \$this->choiceList;
    }

    public function loadChoicesForValues(array \$values, \$value = null): array
    {
        if (\$this->choices !== \$values) {
            \$this->cached = false;
        }

        return \$this->choices = \$values;
    }

    public function loadValuesForChoices(array \$choices, \$value = null): array
    {
        return \$choices;
    }
}
", "easycorp/easyadmin-bundle/src/Form/ChoiceList/Loader/DynamicChoiceLoader.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\ChoiceList\\Loader\\DynamicChoiceLoader.php");
    }
}
