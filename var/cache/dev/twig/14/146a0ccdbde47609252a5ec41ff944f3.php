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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.php */
class __TwigTemplate_30fcd5e1f4853bd4b4a56eb7ba3e2598 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'Dashboard',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Maak nieuw(e) %entity_label_singular%',
        'exception' => 'Fout|Fouten',
    ],

    'datagrid' => [
        'hidden_results' => 'Sommige resultaten konden niet worden weergegeven, toegang geweigerd.',
        'no_results' => 'Geen resultaten gevonden.',
    ],

    'paginator' => [
        'first' => 'Eerste',
        'previous' => 'Vorige',
        'next' => 'Volgende',
        'last' => 'Laatste',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> van <strong>%results%</strong>',
        'results' => '{0} Geen resultaten|{1} <strong>1</strong> resultaat|]1,Inf] <strong>%count%</strong> resultaten',
    ],

    'label' => [
        'true' => 'Ja',
        'false' => 'Nee',
        'empty' => 'Leeg',
        'null' => 'Niets',
        'object' => 'PHP Object',
        'inaccessible' => 'Niet toegankelijk',
        'inaccessible.explanation' => 'Getter bestaat niet voor dit veld of de eigenschap is niet public',
        'form.empty_value' => 'Geen',
    ],

    'field' => [
        'code_editor.view_code' => 'Bekijk code',
        'text_editor.view_content' => 'Bekijk inhoud',
    ],

    'action' => [
        'entity_actions' => 'Acties',
        'new' => 'Nieuw(e) %entity_label_singular%',
        'search' => 'Zoeken',
        'detail' => 'Bekijk',
        'edit' => 'Bewerken',
        'delete' => 'Verwijderen',
        'cancel' => 'Annuleren',
        'index' => 'Terug naar overzicht',
        'deselect' => 'Selectie ongedaan maken',
        'add_new_item' => 'Voeg een item toe',
        'remove_item' => 'Verwijder dit item',
        'choose_file' => 'Bestand kiezen',
        'close' => 'Sluiten',
        'create' => 'Aanmaken',
        'create_and_add_another' => 'Aanmaken en nieuwe toevoegen',
        'create_and_continue' => 'Aanmaken en verdergaan',
        'save' => 'Opslaan',
        'save_and_continue' => 'Opslaan en verdergaan',
    ],

    'batch_action_modal' => [
        'title' => 'Wil je alle geselecteerde items bewerken?',
        'content' => 'Je kan deze actie niet ongedaan maken.',
        'action' => 'Verdergaan',
    ],

    'delete_modal' => [
        'title' => 'Weet je zeker dat je dit item wilt verwijderen?',
        'content' => 'Deze actie kan niet ongedaan worden gemaakt.',
    ],

    'filter' => [
        'title' => 'Filters',
        'button.clear' => 'Wis filters',
        'button.apply' => 'Toepassen',
        'label.is_equal_to' => 'is gelijk aan',
        'label.is_not_equal_to' => 'is niet gelijk aan',
        'label.is_greater_than' => 'is groter dan',
        'label.is_greater_than_or_equal_to' => 'is groter dan of gelijk aan',
        'label.is_less_than' => 'is minder dan',
        'label.is_less_than_or_equal_to' => 'is minder dan of gelijk aan',
        'label.is_between' => 'ligt tussen',
        'label.contains' => 'bevat',
        'label.not_contains' => 'bevat niet',
        'label.starts_with' => 'start met',
        'label.ends_with' => 'eindigt met',
        'label.exactly' => 'exact',
        'label.not_exactly' => 'niet exact',
        'label.is_same' => 'is hetzelfde',
        'label.is_not_same' => 'is niet hetzelfde',
        'label.is_after' => 'is na',
        'label.is_after_or_same' => 'is na of gelijk aan',
        'label.is_before' => 'is voor',
        'label.is_before_or_same' => 'is voor of gelijk aan',
    ],

    'form' => [
        'are_you_sure' => 'Je hebt de wijzigingen op dit formulier nog niet opgeslagen.',
        'tab.error_badge_title' => 'Een ongeldige input|%count% ongeldige inputs',
    ],

    'user' => [
        'logged_in_as' => 'Aangemeld als',
        'unnamed' => 'Naamloze gebruiker',
        'anonymous' => 'Anonieme gebruiker',
        'sign_out' => 'Uitloggen',
        'exit_impersonation' => 'Verlaat verpersoonlijking',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Weergave',
            'light' => 'Licht',
            'dark' => 'Donker',
            'auto' => 'Automatisch',
        ],
        'locale' => 'Taal',
    ],

    'login_page' => [
        'username' => 'Gebruikersnaam',
        'password' => 'Wachtwoord',
        'sign_in' => 'Inloggen',
        'forgot_password' => 'Wachtwoord vergeten?',
        'remember_me' => 'Onthoud mij',
    ],

    'exception' => [
        'entity_not_found' => 'Het item is niet langer beschikbaar.',
        'entity_remove' => 'Dit item kan niet verwijderd worden omdat andere items ervan afhankelijk zijn.',
        'forbidden_action' => 'De gevraagde actie kan niet worden uitgevoerd op dit item.',
        'insufficient_entity_permission' => 'Je hebt geen toegang tot dit item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Geen resultaten gevonden…',
        'no-more-results' => 'Niet meer resultaten gevonden…',
        'loading-more-results' => 'Meer resultaten laden…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.php";
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
        'dashboard' => 'Dashboard',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Maak nieuw(e) %entity_label_singular%',
        'exception' => 'Fout|Fouten',
    ],

    'datagrid' => [
        'hidden_results' => 'Sommige resultaten konden niet worden weergegeven, toegang geweigerd.',
        'no_results' => 'Geen resultaten gevonden.',
    ],

    'paginator' => [
        'first' => 'Eerste',
        'previous' => 'Vorige',
        'next' => 'Volgende',
        'last' => 'Laatste',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> van <strong>%results%</strong>',
        'results' => '{0} Geen resultaten|{1} <strong>1</strong> resultaat|]1,Inf] <strong>%count%</strong> resultaten',
    ],

    'label' => [
        'true' => 'Ja',
        'false' => 'Nee',
        'empty' => 'Leeg',
        'null' => 'Niets',
        'object' => 'PHP Object',
        'inaccessible' => 'Niet toegankelijk',
        'inaccessible.explanation' => 'Getter bestaat niet voor dit veld of de eigenschap is niet public',
        'form.empty_value' => 'Geen',
    ],

    'field' => [
        'code_editor.view_code' => 'Bekijk code',
        'text_editor.view_content' => 'Bekijk inhoud',
    ],

    'action' => [
        'entity_actions' => 'Acties',
        'new' => 'Nieuw(e) %entity_label_singular%',
        'search' => 'Zoeken',
        'detail' => 'Bekijk',
        'edit' => 'Bewerken',
        'delete' => 'Verwijderen',
        'cancel' => 'Annuleren',
        'index' => 'Terug naar overzicht',
        'deselect' => 'Selectie ongedaan maken',
        'add_new_item' => 'Voeg een item toe',
        'remove_item' => 'Verwijder dit item',
        'choose_file' => 'Bestand kiezen',
        'close' => 'Sluiten',
        'create' => 'Aanmaken',
        'create_and_add_another' => 'Aanmaken en nieuwe toevoegen',
        'create_and_continue' => 'Aanmaken en verdergaan',
        'save' => 'Opslaan',
        'save_and_continue' => 'Opslaan en verdergaan',
    ],

    'batch_action_modal' => [
        'title' => 'Wil je alle geselecteerde items bewerken?',
        'content' => 'Je kan deze actie niet ongedaan maken.',
        'action' => 'Verdergaan',
    ],

    'delete_modal' => [
        'title' => 'Weet je zeker dat je dit item wilt verwijderen?',
        'content' => 'Deze actie kan niet ongedaan worden gemaakt.',
    ],

    'filter' => [
        'title' => 'Filters',
        'button.clear' => 'Wis filters',
        'button.apply' => 'Toepassen',
        'label.is_equal_to' => 'is gelijk aan',
        'label.is_not_equal_to' => 'is niet gelijk aan',
        'label.is_greater_than' => 'is groter dan',
        'label.is_greater_than_or_equal_to' => 'is groter dan of gelijk aan',
        'label.is_less_than' => 'is minder dan',
        'label.is_less_than_or_equal_to' => 'is minder dan of gelijk aan',
        'label.is_between' => 'ligt tussen',
        'label.contains' => 'bevat',
        'label.not_contains' => 'bevat niet',
        'label.starts_with' => 'start met',
        'label.ends_with' => 'eindigt met',
        'label.exactly' => 'exact',
        'label.not_exactly' => 'niet exact',
        'label.is_same' => 'is hetzelfde',
        'label.is_not_same' => 'is niet hetzelfde',
        'label.is_after' => 'is na',
        'label.is_after_or_same' => 'is na of gelijk aan',
        'label.is_before' => 'is voor',
        'label.is_before_or_same' => 'is voor of gelijk aan',
    ],

    'form' => [
        'are_you_sure' => 'Je hebt de wijzigingen op dit formulier nog niet opgeslagen.',
        'tab.error_badge_title' => 'Een ongeldige input|%count% ongeldige inputs',
    ],

    'user' => [
        'logged_in_as' => 'Aangemeld als',
        'unnamed' => 'Naamloze gebruiker',
        'anonymous' => 'Anonieme gebruiker',
        'sign_out' => 'Uitloggen',
        'exit_impersonation' => 'Verlaat verpersoonlijking',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Weergave',
            'light' => 'Licht',
            'dark' => 'Donker',
            'auto' => 'Automatisch',
        ],
        'locale' => 'Taal',
    ],

    'login_page' => [
        'username' => 'Gebruikersnaam',
        'password' => 'Wachtwoord',
        'sign_in' => 'Inloggen',
        'forgot_password' => 'Wachtwoord vergeten?',
        'remember_me' => 'Onthoud mij',
    ],

    'exception' => [
        'entity_not_found' => 'Het item is niet langer beschikbaar.',
        'entity_remove' => 'Dit item kan niet verwijderd worden omdat andere items ervan afhankelijk zijn.',
        'forbidden_action' => 'De gevraagde actie kan niet worden uitgevoerd op dit item.',
        'insufficient_entity_permission' => 'Je hebt geen toegang tot dit item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Geen resultaten gevonden…',
        'no-more-results' => 'Niet meer resultaten gevonden…',
        'loading-more-results' => 'Meer resultaten laden…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.nl.php");
    }
}
