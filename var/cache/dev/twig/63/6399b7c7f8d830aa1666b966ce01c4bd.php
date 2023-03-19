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

/* easycorp/easyadmin-bundle/phpstan-baseline.neon */
class __TwigTemplate_7d2d0afc9a186f0e8eb85a9ae0ef95a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/phpstan-baseline.neon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/phpstan-baseline.neon"));

        // line 1
        echo "parameters:
\tignoreErrors:
\t\t-
\t\t\tmessage: \"#^Cannot unset offset string on array\\\\<int, EasyCorp\\\\\\\\Bundle\\\\\\\\EasyAdminBundle\\\\\\\\Dto\\\\\\\\ActionDto\\\\>\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Dto/ActionConfigDto.php

\t\t-
\t\t\tmessage: \"#^Offset string on array\\\\<int, EasyCorp\\\\\\\\Bundle\\\\\\\\EasyAdminBundle\\\\\\\\Dto\\\\\\\\ActionDto\\\\> on left side of \\\\?\\\\? does not exist\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Dto/ActionConfigDto.php

\t\t-
\t\t\tmessage: \"#^Parameter \\\\#1 \\\\\$message of class EasyCorp\\\\\\\\Bundle\\\\\\\\EasyAdminBundle\\\\\\\\Translation\\\\\\\\TranslatableChoiceMessage constructor expects Symfony\\\\\\\\Component\\\\\\\\Translation\\\\\\\\TranslatableMessage, Symfony\\\\\\\\Contracts\\\\\\\\Translation\\\\\\\\TranslatableInterface given\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Field/Configurator/ChoiceConfigurator.php

\t\t-
\t\t\tmessage: \"#^Call to an undefined method Symfony\\\\\\\\Contracts\\\\\\\\Translation\\\\\\\\TranslatableInterface\\\\:\\\\:getDomain\\\\(\\\\)\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Translation/TranslatableMessageBuilder.php

\t\t-
\t\t\tmessage: \"#^Call to an undefined method Symfony\\\\\\\\Contracts\\\\\\\\Translation\\\\\\\\TranslatableInterface\\\\:\\\\:getMessage\\\\(\\\\)\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Translation/TranslatableMessageBuilder.php

\t\t-
\t\t\tmessage: \"#^Call to an undefined method Symfony\\\\\\\\Contracts\\\\\\\\Translation\\\\\\\\TranslatableInterface\\\\:\\\\:getParameters\\\\(\\\\)\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Translation/TranslatableMessageBuilder.php

\t\t-
\t\t\tmessage: \"#^Variable method call on Twig\\\\\\\\Extension\\\\\\\\RuntimeExtensionInterface\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Twig/EasyAdminTwigExtension.php
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/phpstan-baseline.neon";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
\tignoreErrors:
\t\t-
\t\t\tmessage: \"#^Cannot unset offset string on array\\\\<int, EasyCorp\\\\\\\\Bundle\\\\\\\\EasyAdminBundle\\\\\\\\Dto\\\\\\\\ActionDto\\\\>\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Dto/ActionConfigDto.php

\t\t-
\t\t\tmessage: \"#^Offset string on array\\\\<int, EasyCorp\\\\\\\\Bundle\\\\\\\\EasyAdminBundle\\\\\\\\Dto\\\\\\\\ActionDto\\\\> on left side of \\\\?\\\\? does not exist\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Dto/ActionConfigDto.php

\t\t-
\t\t\tmessage: \"#^Parameter \\\\#1 \\\\\$message of class EasyCorp\\\\\\\\Bundle\\\\\\\\EasyAdminBundle\\\\\\\\Translation\\\\\\\\TranslatableChoiceMessage constructor expects Symfony\\\\\\\\Component\\\\\\\\Translation\\\\\\\\TranslatableMessage, Symfony\\\\\\\\Contracts\\\\\\\\Translation\\\\\\\\TranslatableInterface given\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Field/Configurator/ChoiceConfigurator.php

\t\t-
\t\t\tmessage: \"#^Call to an undefined method Symfony\\\\\\\\Contracts\\\\\\\\Translation\\\\\\\\TranslatableInterface\\\\:\\\\:getDomain\\\\(\\\\)\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Translation/TranslatableMessageBuilder.php

\t\t-
\t\t\tmessage: \"#^Call to an undefined method Symfony\\\\\\\\Contracts\\\\\\\\Translation\\\\\\\\TranslatableInterface\\\\:\\\\:getMessage\\\\(\\\\)\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Translation/TranslatableMessageBuilder.php

\t\t-
\t\t\tmessage: \"#^Call to an undefined method Symfony\\\\\\\\Contracts\\\\\\\\Translation\\\\\\\\TranslatableInterface\\\\:\\\\:getParameters\\\\(\\\\)\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Translation/TranslatableMessageBuilder.php

\t\t-
\t\t\tmessage: \"#^Variable method call on Twig\\\\\\\\Extension\\\\\\\\RuntimeExtensionInterface\\\\.\$#\"
\t\t\tcount: 1
\t\t\tpath: src/Twig/EasyAdminTwigExtension.php
", "easycorp/easyadmin-bundle/phpstan-baseline.neon", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\phpstan-baseline.neon");
    }
}
