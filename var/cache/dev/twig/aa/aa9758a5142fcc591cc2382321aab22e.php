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

/* easycorp/easyadmin-bundle/src/Config/KeyValueStore.php */
class __TwigTemplate_52872be39f0fe88c3b8ccbfc5d307560 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/KeyValueStore.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/KeyValueStore.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

/**
 * Code adapted from https://github.com/adbario/php-dot-notation/blob/2.x/src/Dot.php
 * Copyright (c) Riku Särkinen <riku@adbar.io> - MIT License.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class KeyValueStore
{
    private array \$map;

    private function __construct(array \$keyValueMap)
    {
        \$this->map = \$keyValueMap;
    }

    public static function new(array \$keyValuePairs = []): self
    {
        return new self(\$keyValuePairs);
    }

    public function isEmpty(): bool
    {
        return 0 === \\count(\$this->map);
    }

    public function has(string \$key): bool
    {
        if (0 === \\count(\$this->map)) {
            return false;
        }

        \$items = \$this->map;
        if (\\array_key_exists(\$key, \$items)) {
            return true;
        }

        foreach (explode('.', \$key) as \$segment) {
            if (!\\is_array(\$items) || !\\array_key_exists(\$segment, \$items)) {
                return false;
            }

            \$items = \$items[\$segment];
        }

        return true;
    }

    public function get(string \$key, mixed \$default = null): mixed
    {
        if (\\array_key_exists(\$key, \$this->map)) {
            return \$this->map[\$key];
        }

        if (!str_contains(\$key, '.')) {
            return \$default;
        }

        \$items = \$this->map;
        foreach (explode('.', \$key) as \$segment) {
            if (!\\is_array(\$items) || !\\array_key_exists(\$segment, \$items)) {
                return \$default;
            }

            \$items = &\$items[\$segment];
        }

        return \$items;
    }

    public function set(string \$key, mixed \$value): void
    {
        \$items = &\$this->map;
        foreach (explode('.', \$key) as \$segment) {
            if (!isset(\$items[\$segment]) || !\\is_array(\$items[\$segment])) {
                \$items[\$segment] = [];
            }

            \$items = &\$items[\$segment];
        }

        \$items = \$value;
    }

    public function setIfNotSet(string \$key, mixed \$value): void
    {
        if (!\$this->has(\$key)) {
            \$this->set(\$key, \$value);
        }
    }

    public function setAll(array \$keyValuePairs): void
    {
        foreach (\$keyValuePairs as \$key => \$value) {
            \$this->set(\$key, \$value);
        }
    }

    public function delete(string \$key): void
    {
        if (\\array_key_exists(\$key, \$this->map)) {
            unset(\$this->map[\$key]);

            return;
        }

        \$items = &\$this->map;
        \$segments = explode('.', \$key);
        \$lastSegment = array_pop(\$segments);

        foreach (\$segments as \$segment) {
            if (!isset(\$items[\$segment]) || !\\is_array(\$items[\$segment])) {
                return;
            }

            \$items = &\$items[\$segment];
        }

        unset(\$items[\$lastSegment]);
    }

    public function all(): array
    {
        return \$this->map;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/KeyValueStore.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

/**
 * Code adapted from https://github.com/adbario/php-dot-notation/blob/2.x/src/Dot.php
 * Copyright (c) Riku Särkinen <riku@adbar.io> - MIT License.
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class KeyValueStore
{
    private array \$map;

    private function __construct(array \$keyValueMap)
    {
        \$this->map = \$keyValueMap;
    }

    public static function new(array \$keyValuePairs = []): self
    {
        return new self(\$keyValuePairs);
    }

    public function isEmpty(): bool
    {
        return 0 === \\count(\$this->map);
    }

    public function has(string \$key): bool
    {
        if (0 === \\count(\$this->map)) {
            return false;
        }

        \$items = \$this->map;
        if (\\array_key_exists(\$key, \$items)) {
            return true;
        }

        foreach (explode('.', \$key) as \$segment) {
            if (!\\is_array(\$items) || !\\array_key_exists(\$segment, \$items)) {
                return false;
            }

            \$items = \$items[\$segment];
        }

        return true;
    }

    public function get(string \$key, mixed \$default = null): mixed
    {
        if (\\array_key_exists(\$key, \$this->map)) {
            return \$this->map[\$key];
        }

        if (!str_contains(\$key, '.')) {
            return \$default;
        }

        \$items = \$this->map;
        foreach (explode('.', \$key) as \$segment) {
            if (!\\is_array(\$items) || !\\array_key_exists(\$segment, \$items)) {
                return \$default;
            }

            \$items = &\$items[\$segment];
        }

        return \$items;
    }

    public function set(string \$key, mixed \$value): void
    {
        \$items = &\$this->map;
        foreach (explode('.', \$key) as \$segment) {
            if (!isset(\$items[\$segment]) || !\\is_array(\$items[\$segment])) {
                \$items[\$segment] = [];
            }

            \$items = &\$items[\$segment];
        }

        \$items = \$value;
    }

    public function setIfNotSet(string \$key, mixed \$value): void
    {
        if (!\$this->has(\$key)) {
            \$this->set(\$key, \$value);
        }
    }

    public function setAll(array \$keyValuePairs): void
    {
        foreach (\$keyValuePairs as \$key => \$value) {
            \$this->set(\$key, \$value);
        }
    }

    public function delete(string \$key): void
    {
        if (\\array_key_exists(\$key, \$this->map)) {
            unset(\$this->map[\$key]);

            return;
        }

        \$items = &\$this->map;
        \$segments = explode('.', \$key);
        \$lastSegment = array_pop(\$segments);

        foreach (\$segments as \$segment) {
            if (!isset(\$items[\$segment]) || !\\is_array(\$items[\$segment])) {
                return;
            }

            \$items = &\$items[\$segment];
        }

        unset(\$items[\$lastSegment]);
    }

    public function all(): array
    {
        return \$this->map;
    }
}
", "easycorp/easyadmin-bundle/src/Config/KeyValueStore.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\KeyValueStore.php");
    }
}
