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

/* easycorp/easyadmin-bundle/src/Config/Action.php */
class __TwigTemplate_2c20bdf75b5b8e63606671237071d425 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Action.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Config/Action.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto;
use function Symfony\\Component\\String\\u;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Action
{
    public const BATCH_DELETE = 'batchDelete';
    public const DELETE = 'delete';
    public const DETAIL = 'detail';
    public const EDIT = 'edit';
    public const INDEX = 'index';
    public const NEW = 'new';
    public const SAVE_AND_ADD_ANOTHER = 'saveAndAddAnother';
    public const SAVE_AND_CONTINUE = 'saveAndContinue';
    public const SAVE_AND_RETURN = 'saveAndReturn';

    // these are the actions applied to a specific entity instance
    public const TYPE_ENTITY = 'entity';
    // these are the actions that are not associated to an entity
    // (they are available only in the INDEX page)
    public const TYPE_GLOBAL = 'global';
    // these are actions that can be applied to one or more entities at the same time
    public const TYPE_BATCH = 'batch';

    private ActionDto \$dto;

    private function __construct(ActionDto \$actionDto)
    {
        \$this->dto = \$actionDto;
    }

    public function __toString()
    {
        return \$this->dto->getName();
    }

    /**
     * @param mixed       \$label Use FALSE to hide the label; use NULL to autogenerate it
     * @param string|null \$icon  The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function new(string \$name, /** @var TranslatableInterface|string|false|null */ \$label = null, ?string \$icon = null): self
    {
        if (!\\is_string(\$label)
            && !\$label instanceof TranslatableInterface
            && false !== \$label
            && null !== \$label) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$label',
                __METHOD__,
                '\"string\", \"false\" or \"null\"',
                \\gettype(\$label)
            );
        }

        \$dto = new ActionDto();
        \$dto->setType(self::TYPE_ENTITY);
        \$dto->setName(\$name);
        \$dto->setLabel(\$label ?? self::humanizeString(\$name));
        \$dto->setIcon(\$icon);
        \$dto->setHtmlElement('a');
        \$dto->setHtmlAttributes([]);
        \$dto->setTranslationParameters([]);

        return new self(\$dto);
    }

    public function createAsGlobalAction(): self
    {
        \$this->dto->setType(self::TYPE_GLOBAL);

        return \$this;
    }

    public function createAsBatchAction(): self
    {
        \$this->dto->setType(self::TYPE_BATCH);

        return \$this;
    }

    /**
     * @param mixed \$label Use FALSE to hide the label; use NULL to autogenerate it
     */
    public function setLabel(/* @var TranslatableInterface|string|false|null */ \$label): self
    {
        if (!\\is_string(\$label)
            && !\$label instanceof TranslatableInterface
            && false !== \$label
            && null !== \$label) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$label',
                __METHOD__,
                '\"string\", \"false\" or \"null\"',
                \\gettype(\$label)
            );
        }

        \$this->dto->setLabel(\$label ?? self::humanizeString(\$this->dto->getName()));

        return \$this;
    }

    public function setIcon(?string \$icon): self
    {
        \$this->dto->setIcon(\$icon);

        return \$this;
    }

    /**
     * If you set your own CSS classes, the default CSS classes are not applied.
     * You may want to also add the 'btn' (and 'btn-primary', etc.) classes to make
     * your action look like a button.
     */
    public function setCssClass(string \$cssClass): self
    {
        \$this->dto->setCssClass(\$cssClass);

        return \$this;
    }

    /**
     * If you add a custom CSS class, the default CSS classes are not applied.
     * You may want to also add the 'btn' (and 'btn-primary', etc.) classes to make
     * your action look like a button.
     */
    public function addCssClass(string \$cssClass): self
    {
        \$this->dto->setCssClass(trim(\$this->dto->getCssClass().' '.\$cssClass));

        return \$this;
    }

    public function displayAsLink(): self
    {
        \$this->dto->setHtmlElement('a');

        return \$this;
    }

    public function displayAsButton(): self
    {
        \$this->dto->setHtmlElement('button');

        return \$this;
    }

    public function setHtmlAttributes(array \$attributes): self
    {
        \$this->dto->setHtmlAttributes(\$attributes);

        return \$this;
    }

    public function setTemplatePath(string \$templatePath): self
    {
        \$this->dto->setTemplatePath(\$templatePath);

        return \$this;
    }

    public function linkToCrudAction(string \$crudActionName): self
    {
        \$this->dto->setCrudActionName(\$crudActionName);

        return \$this;
    }

    /**
     * @param array|callable \$routeParameters The callable has the signature: function (\$entity): array
     *
     * Route parameters can be defined as a callable with the signature: function (\$entityInstance): array
     * Example: ->linkToRoute('invoice_send', fn (Invoice \$entity) => ['uuid' => \$entity->getId()]);
     */
    public function linkToRoute(string \$routeName, array|callable \$routeParameters = []): self
    {
        \$this->dto->setRouteName(\$routeName);
        \$this->dto->setRouteParameters(\$routeParameters);

        return \$this;
    }

    public function linkToUrl(/* @var string|callable */ \$url): self
    {
        if (!\\is_string(\$url) && !\\is_callable(\$url)) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$url',
                __METHOD__,
                '\"string\" or \"callable\"',
                \\gettype(\$url)
            );
        }

        \$this->dto->setUrl(\$url);

        return \$this;
    }

    public function setTranslationParameters(array \$parameters): self
    {
        \$this->dto->setTranslationParameters(\$parameters);

        return \$this;
    }

    public function displayIf(callable \$callable): self
    {
        \$this->dto->setDisplayCallable(\$callable);

        return \$this;
    }

    public function getAsDto(): ActionDto
    {
        if (null === \$this->dto->getLabel() && null === \$this->dto->getIcon()) {
            throw new \\InvalidArgumentException(sprintf('The label and icon of an action cannot be null at the same time. Either set the label, the icon or both for the \"%s\" action.', \$this->dto->getName()));
        }

        if (null === \$this->dto->getCrudActionName() && null === \$this->dto->getRouteName() && null === \$this->dto->getUrl()) {
            throw new \\InvalidArgumentException(sprintf('Actions must link to either a route, a CRUD action, or a URL. Set the \"linkToCrudAction()\", \"linkToRoute()\", or \"linkToUrl()\" method for the \"%s\" action.', \$this->dto->getName()));
        }

        return \$this->dto;
    }

    private static function humanizeString(string \$string): string
    {
        \$uString = u(\$string);
        \$upperString = \$uString->upper()->toString();

        // this prevents humanizing all-uppercase labels (e.g. 'UUID' -> 'U u i d')
        // and other special labels which look better in uppercase
        if (\$uString->toString() === \$upperString) {
            return \$upperString;
        }

        return \$uString
            ->replaceMatches('/([A-Z])/', '_\$1')
            ->replaceMatches('/[_\\s]+/', ' ')
            ->trim()
            ->lower()
            ->title(true)
            ->toString();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Config/Action.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Config;

use EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto;
use function Symfony\\Component\\String\\u;
use Symfony\\Contracts\\Translation\\TranslatableInterface;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class Action
{
    public const BATCH_DELETE = 'batchDelete';
    public const DELETE = 'delete';
    public const DETAIL = 'detail';
    public const EDIT = 'edit';
    public const INDEX = 'index';
    public const NEW = 'new';
    public const SAVE_AND_ADD_ANOTHER = 'saveAndAddAnother';
    public const SAVE_AND_CONTINUE = 'saveAndContinue';
    public const SAVE_AND_RETURN = 'saveAndReturn';

    // these are the actions applied to a specific entity instance
    public const TYPE_ENTITY = 'entity';
    // these are the actions that are not associated to an entity
    // (they are available only in the INDEX page)
    public const TYPE_GLOBAL = 'global';
    // these are actions that can be applied to one or more entities at the same time
    public const TYPE_BATCH = 'batch';

    private ActionDto \$dto;

    private function __construct(ActionDto \$actionDto)
    {
        \$this->dto = \$actionDto;
    }

    public function __toString()
    {
        return \$this->dto->getName();
    }

    /**
     * @param mixed       \$label Use FALSE to hide the label; use NULL to autogenerate it
     * @param string|null \$icon  The full CSS classes of the FontAwesome icon to render (see https://fontawesome.com/v6/search?m=free)
     */
    public static function new(string \$name, /** @var TranslatableInterface|string|false|null */ \$label = null, ?string \$icon = null): self
    {
        if (!\\is_string(\$label)
            && !\$label instanceof TranslatableInterface
            && false !== \$label
            && null !== \$label) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$label',
                __METHOD__,
                '\"string\", \"false\" or \"null\"',
                \\gettype(\$label)
            );
        }

        \$dto = new ActionDto();
        \$dto->setType(self::TYPE_ENTITY);
        \$dto->setName(\$name);
        \$dto->setLabel(\$label ?? self::humanizeString(\$name));
        \$dto->setIcon(\$icon);
        \$dto->setHtmlElement('a');
        \$dto->setHtmlAttributes([]);
        \$dto->setTranslationParameters([]);

        return new self(\$dto);
    }

    public function createAsGlobalAction(): self
    {
        \$this->dto->setType(self::TYPE_GLOBAL);

        return \$this;
    }

    public function createAsBatchAction(): self
    {
        \$this->dto->setType(self::TYPE_BATCH);

        return \$this;
    }

    /**
     * @param mixed \$label Use FALSE to hide the label; use NULL to autogenerate it
     */
    public function setLabel(/* @var TranslatableInterface|string|false|null */ \$label): self
    {
        if (!\\is_string(\$label)
            && !\$label instanceof TranslatableInterface
            && false !== \$label
            && null !== \$label) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$label',
                __METHOD__,
                '\"string\", \"false\" or \"null\"',
                \\gettype(\$label)
            );
        }

        \$this->dto->setLabel(\$label ?? self::humanizeString(\$this->dto->getName()));

        return \$this;
    }

    public function setIcon(?string \$icon): self
    {
        \$this->dto->setIcon(\$icon);

        return \$this;
    }

    /**
     * If you set your own CSS classes, the default CSS classes are not applied.
     * You may want to also add the 'btn' (and 'btn-primary', etc.) classes to make
     * your action look like a button.
     */
    public function setCssClass(string \$cssClass): self
    {
        \$this->dto->setCssClass(\$cssClass);

        return \$this;
    }

    /**
     * If you add a custom CSS class, the default CSS classes are not applied.
     * You may want to also add the 'btn' (and 'btn-primary', etc.) classes to make
     * your action look like a button.
     */
    public function addCssClass(string \$cssClass): self
    {
        \$this->dto->setCssClass(trim(\$this->dto->getCssClass().' '.\$cssClass));

        return \$this;
    }

    public function displayAsLink(): self
    {
        \$this->dto->setHtmlElement('a');

        return \$this;
    }

    public function displayAsButton(): self
    {
        \$this->dto->setHtmlElement('button');

        return \$this;
    }

    public function setHtmlAttributes(array \$attributes): self
    {
        \$this->dto->setHtmlAttributes(\$attributes);

        return \$this;
    }

    public function setTemplatePath(string \$templatePath): self
    {
        \$this->dto->setTemplatePath(\$templatePath);

        return \$this;
    }

    public function linkToCrudAction(string \$crudActionName): self
    {
        \$this->dto->setCrudActionName(\$crudActionName);

        return \$this;
    }

    /**
     * @param array|callable \$routeParameters The callable has the signature: function (\$entity): array
     *
     * Route parameters can be defined as a callable with the signature: function (\$entityInstance): array
     * Example: ->linkToRoute('invoice_send', fn (Invoice \$entity) => ['uuid' => \$entity->getId()]);
     */
    public function linkToRoute(string \$routeName, array|callable \$routeParameters = []): self
    {
        \$this->dto->setRouteName(\$routeName);
        \$this->dto->setRouteParameters(\$routeParameters);

        return \$this;
    }

    public function linkToUrl(/* @var string|callable */ \$url): self
    {
        if (!\\is_string(\$url) && !\\is_callable(\$url)) {
            trigger_deprecation(
                'easycorp/easyadmin-bundle',
                '4.0.5',
                'Argument \"%s\" for \"%s\" must be one of these types: %s. Passing type \"%s\" will cause an error in 5.0.0.',
                '\$url',
                __METHOD__,
                '\"string\" or \"callable\"',
                \\gettype(\$url)
            );
        }

        \$this->dto->setUrl(\$url);

        return \$this;
    }

    public function setTranslationParameters(array \$parameters): self
    {
        \$this->dto->setTranslationParameters(\$parameters);

        return \$this;
    }

    public function displayIf(callable \$callable): self
    {
        \$this->dto->setDisplayCallable(\$callable);

        return \$this;
    }

    public function getAsDto(): ActionDto
    {
        if (null === \$this->dto->getLabel() && null === \$this->dto->getIcon()) {
            throw new \\InvalidArgumentException(sprintf('The label and icon of an action cannot be null at the same time. Either set the label, the icon or both for the \"%s\" action.', \$this->dto->getName()));
        }

        if (null === \$this->dto->getCrudActionName() && null === \$this->dto->getRouteName() && null === \$this->dto->getUrl()) {
            throw new \\InvalidArgumentException(sprintf('Actions must link to either a route, a CRUD action, or a URL. Set the \"linkToCrudAction()\", \"linkToRoute()\", or \"linkToUrl()\" method for the \"%s\" action.', \$this->dto->getName()));
        }

        return \$this->dto;
    }

    private static function humanizeString(string \$string): string
    {
        \$uString = u(\$string);
        \$upperString = \$uString->upper()->toString();

        // this prevents humanizing all-uppercase labels (e.g. 'UUID' -> 'U u i d')
        // and other special labels which look better in uppercase
        if (\$uString->toString() === \$upperString) {
            return \$upperString;
        }

        return \$uString
            ->replaceMatches('/([A-Z])/', '_\$1')
            ->replaceMatches('/[_\\s]+/', ' ')
            ->trim()
            ->lower()
            ->title(true)
            ->toString();
    }
}
", "easycorp/easyadmin-bundle/src/Config/Action.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Config\\Action.php");
    }
}
