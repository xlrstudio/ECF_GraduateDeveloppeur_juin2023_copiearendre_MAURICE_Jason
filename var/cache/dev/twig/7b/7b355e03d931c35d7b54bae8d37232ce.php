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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.php */
class __TwigTemplate_b6c4ad96b7fcfa6f881becb15bdfb344 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        // 'dashboard' => '',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Create new %entity_label_singular%',
        'exception' => 'Fel|Fel',
    ],

    'datagrid' => [
        // 'hidden_results' => '',
        'no_results' => 'Inga resultat.',
    ],

    'paginator' => [
        'first' => 'Första',
        'previous' => 'Förra',
        'next' => 'Nästa',
        'last' => 'Sista',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> av <strong>%results%</strong>',
        // 'results' => '',
    ],

    'label' => [
        'true' => 'Ja',
        'false' => 'Nej',
        'empty' => 'Tom',
        'null' => 'Null',
        'object' => 'PHP objekt',
        'inaccessible' => 'Otillgänglig',
        'inaccessible.explanation' => 'Det finns ingen Getter-funktion för detta fält eller så är inte egenskapen publik',
        // 'form.empty_value' => '',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Åtgärder',
        'new' => 'Skapa %entity_label_singular%',
        'search' => 'Sök',
        'detail' => 'Visa',
        'edit' => 'Redigera',
        'delete' => 'Ta bort',
        'cancel' => 'Avbryt',
        'index' => 'Åter till lista',
        // 'deselect' => '',
        'add_new_item' => 'Lägg till nytt objekt',
        'remove_item' => 'Ta bort objekt',
        'choose_file' => 'Välj fil',
        // 'close' => '',
        // 'create' => '',
        // 'create_and_add_another' => '',
        // 'create_and_continue' => '',
        // 'save' => '',
        // 'save_and_continue' => '',
    ],

    'batch_action_modal' => [
        // 'title' => '',
        // 'content' => '',
        // 'action' => '',
    ],

    'delete_modal' => [
        'title' => 'Vill du verkligen ta bort detta?',
        'content' => 'Du kan inte ångra det här.',
    ],

    'filter' => [
        // 'title' => '',
        // 'button.clear' => '',
        // 'button.apply' => '',
        // 'label.is_equal_to' => '',
        // 'label.is_not_equal_to' => '',
        // 'label.is_greater_than' => '',
        // 'label.is_greater_than_or_equal_to' => '',
        // 'label.is_less_than' => '',
        // 'label.is_less_than_or_equal_to' => '',
        // 'label.is_between' => '',
        // 'label.contains' => '',
        // 'label.not_contains' => '',
        // 'label.starts_with' => '',
        // 'label.ends_with' => '',
        // 'label.exactly' => '',
        // 'label.not_exactly' => '',
        // 'label.is_same' => '',
        // 'label.is_not_same' => '',
        // 'label.is_after' => '',
        // 'label.is_after_or_same' => '',
        // 'label.is_before' => '',
        // 'label.is_before_or_same' => '',
    ],

    'form' => [
        'are_you_sure' => 'Du har inte sparat ändringarna i formuläret.',
        'tab.error_badge_title' => 'Ett fält är fel|%count% fält är fel',
    ],

    'user' => [
        'logged_in_as' => 'Inloggad som',
        'unnamed' => 'Namnlös användare',
        'anonymous' => 'Anonym användare',
        'sign_out' => 'Logga ut',
        'exit_impersonation' => 'Avsluta imitation',
    ],

    'login_page' => [
        'username' => 'Username',
        'password' => 'Password',
        'sign_in' => 'Sign in',
        'forgot_password' => 'Glömt ditt lösenord?',
        'remember_me' => 'Kom ihåg mig',
    ],

    'exception' => [
        'entity_not_found' => 'Detta objekt är inte tillgängligt längre.',
        'entity_remove' => 'Detta object kan inte tas bort för att andra objekt har ett beroende på det.',
        'forbidden_action' => 'Den åtgärd du försökte göra kan inte utföras på detta objekt.',
        // 'insufficient_entity_permission' => 'You don't have permission to access this item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Inga träffar',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Laddar fler resultat…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

return [
    'page_title' => [
        // 'dashboard' => '',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Create new %entity_label_singular%',
        'exception' => 'Fel|Fel',
    ],

    'datagrid' => [
        // 'hidden_results' => '',
        'no_results' => 'Inga resultat.',
    ],

    'paginator' => [
        'first' => 'Första',
        'previous' => 'Förra',
        'next' => 'Nästa',
        'last' => 'Sista',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> av <strong>%results%</strong>',
        // 'results' => '',
    ],

    'label' => [
        'true' => 'Ja',
        'false' => 'Nej',
        'empty' => 'Tom',
        'null' => 'Null',
        'object' => 'PHP objekt',
        'inaccessible' => 'Otillgänglig',
        'inaccessible.explanation' => 'Det finns ingen Getter-funktion för detta fält eller så är inte egenskapen publik',
        // 'form.empty_value' => '',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Åtgärder',
        'new' => 'Skapa %entity_label_singular%',
        'search' => 'Sök',
        'detail' => 'Visa',
        'edit' => 'Redigera',
        'delete' => 'Ta bort',
        'cancel' => 'Avbryt',
        'index' => 'Åter till lista',
        // 'deselect' => '',
        'add_new_item' => 'Lägg till nytt objekt',
        'remove_item' => 'Ta bort objekt',
        'choose_file' => 'Välj fil',
        // 'close' => '',
        // 'create' => '',
        // 'create_and_add_another' => '',
        // 'create_and_continue' => '',
        // 'save' => '',
        // 'save_and_continue' => '',
    ],

    'batch_action_modal' => [
        // 'title' => '',
        // 'content' => '',
        // 'action' => '',
    ],

    'delete_modal' => [
        'title' => 'Vill du verkligen ta bort detta?',
        'content' => 'Du kan inte ångra det här.',
    ],

    'filter' => [
        // 'title' => '',
        // 'button.clear' => '',
        // 'button.apply' => '',
        // 'label.is_equal_to' => '',
        // 'label.is_not_equal_to' => '',
        // 'label.is_greater_than' => '',
        // 'label.is_greater_than_or_equal_to' => '',
        // 'label.is_less_than' => '',
        // 'label.is_less_than_or_equal_to' => '',
        // 'label.is_between' => '',
        // 'label.contains' => '',
        // 'label.not_contains' => '',
        // 'label.starts_with' => '',
        // 'label.ends_with' => '',
        // 'label.exactly' => '',
        // 'label.not_exactly' => '',
        // 'label.is_same' => '',
        // 'label.is_not_same' => '',
        // 'label.is_after' => '',
        // 'label.is_after_or_same' => '',
        // 'label.is_before' => '',
        // 'label.is_before_or_same' => '',
    ],

    'form' => [
        'are_you_sure' => 'Du har inte sparat ändringarna i formuläret.',
        'tab.error_badge_title' => 'Ett fält är fel|%count% fält är fel',
    ],

    'user' => [
        'logged_in_as' => 'Inloggad som',
        'unnamed' => 'Namnlös användare',
        'anonymous' => 'Anonym användare',
        'sign_out' => 'Logga ut',
        'exit_impersonation' => 'Avsluta imitation',
    ],

    'login_page' => [
        'username' => 'Username',
        'password' => 'Password',
        'sign_in' => 'Sign in',
        'forgot_password' => 'Glömt ditt lösenord?',
        'remember_me' => 'Kom ihåg mig',
    ],

    'exception' => [
        'entity_not_found' => 'Detta objekt är inte tillgängligt längre.',
        'entity_remove' => 'Detta object kan inte tas bort för att andra objekt har ett beroende på det.',
        'forbidden_action' => 'Den åtgärd du försökte göra kan inte utföras på detta objekt.',
        // 'insufficient_entity_permission' => 'You don't have permission to access this item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Inga träffar',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Laddar fler resultat…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.sv.php");
    }
}
