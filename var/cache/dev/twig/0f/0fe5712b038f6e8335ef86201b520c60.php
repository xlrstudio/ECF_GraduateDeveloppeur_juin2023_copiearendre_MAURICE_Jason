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

/* easycorp/easyadmin-bundle/src/Orm/Escaper.php */
class __TwigTemplate_fccd1f1fb19e6f9bdbb49f24706291f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Orm/Escaper.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Orm/Escaper.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Orm;

use Doctrine\\ORM\\Query\\Lexer;

class Escaper
{
    public const DQL_ALIAS_PREFIX = 'ea_';

    /**
     * Some words (e.g. \"order\") are reserved keywords in the DQL (Doctrine Query Language).
     * That's why when using entity names as DQL aliases, we need to escape
     * those reserved keywords.
     *
     * This method ensures that the given entity name can be used as a DQL alias.
     * Most of them are left unchanged (e.g. \"category\" or \"invoice\") but others
     * will include a prefix to escape them (e.g. \"order\" becomes \"ea_order\").
     */
    public static function escapeDqlAlias(string \$entityName): string
    {
        if (self::isDqlReservedKeyword(\$entityName)) {
            return self::DQL_ALIAS_PREFIX.\$entityName;
        }

        return \$entityName;
    }

    /**
     * Determines if a string is a reserved keyword in DQL (Doctrine Query Language).
     */
    private static function isDqlReservedKeyword(string \$string): bool
    {
        \$lexer = new Lexer(\$string);

        \$lexer->moveNext();
        \$token = \$lexer->lookahead;

        if (200 <= \$token['type']) {
            return true;
        }

        return false;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Orm/Escaper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Orm;

use Doctrine\\ORM\\Query\\Lexer;

class Escaper
{
    public const DQL_ALIAS_PREFIX = 'ea_';

    /**
     * Some words (e.g. \"order\") are reserved keywords in the DQL (Doctrine Query Language).
     * That's why when using entity names as DQL aliases, we need to escape
     * those reserved keywords.
     *
     * This method ensures that the given entity name can be used as a DQL alias.
     * Most of them are left unchanged (e.g. \"category\" or \"invoice\") but others
     * will include a prefix to escape them (e.g. \"order\" becomes \"ea_order\").
     */
    public static function escapeDqlAlias(string \$entityName): string
    {
        if (self::isDqlReservedKeyword(\$entityName)) {
            return self::DQL_ALIAS_PREFIX.\$entityName;
        }

        return \$entityName;
    }

    /**
     * Determines if a string is a reserved keyword in DQL (Doctrine Query Language).
     */
    private static function isDqlReservedKeyword(string \$string): bool
    {
        \$lexer = new Lexer(\$string);

        \$lexer->moveNext();
        \$token = \$lexer->lookahead;

        if (200 <= \$token['type']) {
            return true;
        }

        return false;
    }
}
", "easycorp/easyadmin-bundle/src/Orm/Escaper.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Orm\\Escaper.php");
    }
}
