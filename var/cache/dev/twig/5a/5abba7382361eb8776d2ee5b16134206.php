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

/* easycorp/easyadmin-bundle/composer.json */
class __TwigTemplate_6a8eba46914e9d4780a420162582746c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/composer.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"easycorp/easyadmin-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Admin generator for Symfony applications\",
    \"keywords\": [\"backend\", \"admin\", \"generator\"],
    \"homepage\": \"https://github.com/EasyCorp/EasyAdminBundle\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Project Contributors\",
            \"homepage\": \"https://github.com/EasyCorp/EasyAdminBundle/graphs/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=8.0.2\",
        \"ext-json\": \"*\",
        \"doctrine/doctrine-bundle\": \"^2.5\",
        \"doctrine/orm\": \"^2.10\",
        \"symfony/asset\": \"^5.4|^6.0\",
        \"symfony/cache\": \"^5.4|^6.0\",
        \"symfony/config\": \"^5.4|^6.0\",
        \"symfony/dependency-injection\": \"^5.4|^6.0\",
        \"symfony/deprecation-contracts\": \"^3.0\",
        \"symfony/doctrine-bridge\": \"^5.4|^6.0\",
        \"symfony/event-dispatcher\": \"^5.4|^6.0\",
        \"symfony/filesystem\": \"^5.4|^6.0\",
        \"symfony/form\": \"^5.4|^6.0\",
        \"symfony/framework-bundle\": \"^5.4|^6.0\",
        \"symfony/http-foundation\": \"^5.4|^6.0\",
        \"symfony/http-kernel\": \"^5.4|^6.0\",
        \"symfony/intl\": \"^5.4|^6.0\",
        \"symfony/property-access\": \"^5.4|^6.0\",
        \"symfony/security-bundle\": \"^5.4|^6.0\",
        \"symfony/string\": \"^5.4|^6.0\",
        \"symfony/translation\": \"^5.4|^6.0\",
        \"symfony/twig-bundle\": \"^5.4|^6.0\",
        \"symfony/uid\": \"^5.4|^6.0\",
        \"symfony/validator\": \"^5.4|^6.0\"
    },
    \"require-dev\": {
        \"doctrine/doctrine-fixtures-bundle\": \"^3.4\",
        \"phpstan/extension-installer\": \"^1.2\",
        \"phpstan/phpstan\": \"^1.9\",
        \"phpstan/phpstan-phpunit\": \"^1.2\",
        \"phpstan/phpstan-strict-rules\": \"^1.4\",
        \"phpstan/phpstan-symfony\": \"^1.2\",
        \"psr/log\": \"^1.0\",
        \"symfony/browser-kit\": \"^5.4|^6.0\",
        \"symfony/css-selector\": \"^5.4|^6.0\",
        \"symfony/dom-crawler\": \"^5.4|^6.0\",
        \"symfony/phpunit-bridge\": \"^5.4|^6.0\"
    },
    \"config\": {
        \"sort-packages\": true,
        \"allow-plugins\": {
            \"symfony/flex\": true,
            \"phpstan/extension-installer\": true
        }
    },
    \"autoload\": {
        \"psr-4\": {
            \"EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Tests\\\\TestApplication\\\\\": \"tests/TestApplication/src/\",
            \"EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Tests\\\\\": \"tests/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.0.x-dev\"
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"easycorp/easyadmin-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Admin generator for Symfony applications\",
    \"keywords\": [\"backend\", \"admin\", \"generator\"],
    \"homepage\": \"https://github.com/EasyCorp/EasyAdminBundle\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Project Contributors\",
            \"homepage\": \"https://github.com/EasyCorp/EasyAdminBundle/graphs/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=8.0.2\",
        \"ext-json\": \"*\",
        \"doctrine/doctrine-bundle\": \"^2.5\",
        \"doctrine/orm\": \"^2.10\",
        \"symfony/asset\": \"^5.4|^6.0\",
        \"symfony/cache\": \"^5.4|^6.0\",
        \"symfony/config\": \"^5.4|^6.0\",
        \"symfony/dependency-injection\": \"^5.4|^6.0\",
        \"symfony/deprecation-contracts\": \"^3.0\",
        \"symfony/doctrine-bridge\": \"^5.4|^6.0\",
        \"symfony/event-dispatcher\": \"^5.4|^6.0\",
        \"symfony/filesystem\": \"^5.4|^6.0\",
        \"symfony/form\": \"^5.4|^6.0\",
        \"symfony/framework-bundle\": \"^5.4|^6.0\",
        \"symfony/http-foundation\": \"^5.4|^6.0\",
        \"symfony/http-kernel\": \"^5.4|^6.0\",
        \"symfony/intl\": \"^5.4|^6.0\",
        \"symfony/property-access\": \"^5.4|^6.0\",
        \"symfony/security-bundle\": \"^5.4|^6.0\",
        \"symfony/string\": \"^5.4|^6.0\",
        \"symfony/translation\": \"^5.4|^6.0\",
        \"symfony/twig-bundle\": \"^5.4|^6.0\",
        \"symfony/uid\": \"^5.4|^6.0\",
        \"symfony/validator\": \"^5.4|^6.0\"
    },
    \"require-dev\": {
        \"doctrine/doctrine-fixtures-bundle\": \"^3.4\",
        \"phpstan/extension-installer\": \"^1.2\",
        \"phpstan/phpstan\": \"^1.9\",
        \"phpstan/phpstan-phpunit\": \"^1.2\",
        \"phpstan/phpstan-strict-rules\": \"^1.4\",
        \"phpstan/phpstan-symfony\": \"^1.2\",
        \"psr/log\": \"^1.0\",
        \"symfony/browser-kit\": \"^5.4|^6.0\",
        \"symfony/css-selector\": \"^5.4|^6.0\",
        \"symfony/dom-crawler\": \"^5.4|^6.0\",
        \"symfony/phpunit-bridge\": \"^5.4|^6.0\"
    },
    \"config\": {
        \"sort-packages\": true,
        \"allow-plugins\": {
            \"symfony/flex\": true,
            \"phpstan/extension-installer\": true
        }
    },
    \"autoload\": {
        \"psr-4\": {
            \"EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Tests\\\\TestApplication\\\\\": \"tests/TestApplication/src/\",
            \"EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Tests\\\\\": \"tests/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"4.0.x-dev\"
        }
    }
}
", "easycorp/easyadmin-bundle/composer.json", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\composer.json");
    }
}
