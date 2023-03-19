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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.php */
class __TwigTemplate_83b3127f2cbbb00c90a2dd212b1f6d3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        // 'dashboard' => '',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Dodaj %entity_label_singular%',
        'exception' => '%count% napaka|%count% napaki|%count% napake|%count% napak',
    ],

    'datagrid' => [
        // 'hidden_results' => '',
        'no_results' => 'Nobenih rezultatov ni najdenih.',
    ],

    'paginator' => [
        'first' => 'Prva',
        'previous' => 'Prejšnja',
        'next' => 'Naslednja',
        'last' => 'Zadnja',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
        // 'results' => '',
    ],

    'label' => [
        'true' => 'Da',
        'false' => 'Ne',
        'empty' => 'Prazno',
        'null' => 'Null',
        'object' => 'PHP objekt',
        'inaccessible' => 'Nedostopno',
        'inaccessible.explanation' => 'Getter metoda ne obstaja za to polje ali pa lastnost ni javna',
        'form.empty_value' => 'Noben',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Dejanja',
        'new' => 'Dodaj %entity_label_singular%',
        'search' => 'Iskanje',
        'detail' => 'Prikaži',
        'edit' => 'Uredi',
        'delete' => 'Izbriši',
        'cancel' => 'Prekliči',
        'index' => 'Nazaj na seznam',
        // 'deselect' => '',
        'add_new_item' => 'Dodaj nov element',
        'remove_item' => 'Odstrani element',
        'choose_file' => 'Izberite datoteko',
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
        'title' => 'Ali res želite izbrisati ta element?',
        'content' => 'Razveljavitev za to operacijo ne obstaja.',
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
        'are_you_sure' => 'Sprememb, ki ste jih naredili na tem obrazcu, niste shranili.',
        // 'tab.error_badge_title' => '',
    ],

    'user' => [
        'logged_in_as' => 'Prijavljeni kot',
        'unnamed' => 'Neimenovani uporabnik',
        'anonymous' => 'Anonimni uporabnik',
        'sign_out' => 'Odjava',
        // 'exit_impersonation' => '',
    ],

    'login_page' => [
        'username' => 'uporabniško ime',
        'password' => 'Geslo',
        'sign_in' => 'Prijava',
        'forgot_password' => 'Ste pozabili geslo?',
        'remember_me' => 'Zapomni si me',
    ],

    'exception' => [
        'entity_not_found' => 'Ta element ni več na voljo.',
        'entity_remove' => 'Tega elementac ni mogoče izbrisati, ker so ostali elementi odvisni od njega.',
        'forbidden_action' => 'Zahtevanega dejanja ni mogoče izvršiti na tem elementu.',
        // 'insufficient_entity_permission' => 'You don't have permission to access this item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Ni zadetkov',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Nalagam več zadetkov…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.php";
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
        'new' => 'Dodaj %entity_label_singular%',
        'exception' => '%count% napaka|%count% napaki|%count% napake|%count% napak',
    ],

    'datagrid' => [
        // 'hidden_results' => '',
        'no_results' => 'Nobenih rezultatov ni najdenih.',
    ],

    'paginator' => [
        'first' => 'Prva',
        'previous' => 'Prejšnja',
        'next' => 'Naslednja',
        'last' => 'Zadnja',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
        // 'results' => '',
    ],

    'label' => [
        'true' => 'Da',
        'false' => 'Ne',
        'empty' => 'Prazno',
        'null' => 'Null',
        'object' => 'PHP objekt',
        'inaccessible' => 'Nedostopno',
        'inaccessible.explanation' => 'Getter metoda ne obstaja za to polje ali pa lastnost ni javna',
        'form.empty_value' => 'Noben',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Dejanja',
        'new' => 'Dodaj %entity_label_singular%',
        'search' => 'Iskanje',
        'detail' => 'Prikaži',
        'edit' => 'Uredi',
        'delete' => 'Izbriši',
        'cancel' => 'Prekliči',
        'index' => 'Nazaj na seznam',
        // 'deselect' => '',
        'add_new_item' => 'Dodaj nov element',
        'remove_item' => 'Odstrani element',
        'choose_file' => 'Izberite datoteko',
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
        'title' => 'Ali res želite izbrisati ta element?',
        'content' => 'Razveljavitev za to operacijo ne obstaja.',
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
        'are_you_sure' => 'Sprememb, ki ste jih naredili na tem obrazcu, niste shranili.',
        // 'tab.error_badge_title' => '',
    ],

    'user' => [
        'logged_in_as' => 'Prijavljeni kot',
        'unnamed' => 'Neimenovani uporabnik',
        'anonymous' => 'Anonimni uporabnik',
        'sign_out' => 'Odjava',
        // 'exit_impersonation' => '',
    ],

    'login_page' => [
        'username' => 'uporabniško ime',
        'password' => 'Geslo',
        'sign_in' => 'Prijava',
        'forgot_password' => 'Ste pozabili geslo?',
        'remember_me' => 'Zapomni si me',
    ],

    'exception' => [
        'entity_not_found' => 'Ta element ni več na voljo.',
        'entity_remove' => 'Tega elementac ni mogoče izbrisati, ker so ostali elementi odvisni od njega.',
        'forbidden_action' => 'Zahtevanega dejanja ni mogoče izvršiti na tem elementu.',
        // 'insufficient_entity_permission' => 'You don't have permission to access this item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Ni zadetkov',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Nalagam več zadetkov…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.sl.php");
    }
}
