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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.php */
class __TwigTemplate_7b11b7de603ee6979cc7f86ee5977714 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        // 'dashboard' => '',
        'detail' => '%entity_as_string%',
        'edit' => 'Muokkaa %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Luo uusi %entity_label_singular%',
        'exception' => 'Virhe|Virheet',
    ],

    'datagrid' => [
        // 'hidden_results' => '',
        'no_results' => 'Tuloksia ei löytynyt.',
    ],

    'paginator' => [
        'first' => 'Ensimmäinen',
        'previous' => 'Edellinen',
        'next' => 'Seuraava',
        'last' => 'Viimeinen',
        'counter' => 'Tulokset <strong>%start%</strong> - <strong>%end%</strong>, yhteensä <strong>%results%</strong>',
        // 'results' => '',
    ],

    'label' => [
        'true' => 'Kyllä',
        'false' => 'Ei',
        'empty' => 'Tyhjä',
        'null' => 'Ei asetettu',
        'object' => 'PHP-objekti',
        'inaccessible' => 'Ei saatavilla',
        'inaccessible.explanation' => 'Arvo ei ole julkinen, tai sille ei ole asetettu get-metodia',
        'form.empty_value' => 'Ei mitään',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Toiminnot',
        'new' => 'Lisää uusi %entity_label_singular%',
        'search' => 'Etsi',
        'detail' => 'Näytä',
        'edit' => 'Muokkaa',
        'delete' => 'Poista',
        'cancel' => 'Peruuta',
        'index' => 'Takaisin listaan',
        // 'deselect' => '',
        'add_new_item' => 'Luo uusi rivi',
        'remove_item' => 'Poista rivi',
        'choose_file' => 'Valitse tiedosto',
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
        'title' => 'Oletko varma että haluat poistaa tämän?',
        'content' => 'Toimintoa ei voi peruuttaa.',
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
        'are_you_sure' => 'Et ole tallentanut muuttamiasi tietoja.',
        // 'tab.error_badge_title' => '',
    ],

    'user' => [
        'logged_in_as' => 'Kirjautunut käyttäjänä',
        'unnamed' => 'Nimetön käyttäjä',
        'anonymous' => 'Tuntematon käyttäjä',
        'sign_out' => 'Ulos',
        // 'exit_impersonation' => '',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Ulkoasu',
            'light' => 'Vaalea',
            'dark' => 'Tumma',
            'auto' => 'Automaattinen',
        ],
        'locale' => 'Kieli',
    ],

    'login_page' => [
        'username' => 'Username',
        'password' => 'Password',
        'sign_in' => 'Sign in',
        'forgot_password' => 'Unohditko salasanasi?',
        'remember_me' => 'Muista minut',
    ],

    'exception' => [
        // 'entity_not_found' => '',
        // 'entity_remove' => '',
        // 'forbidden_action' => '',
        // 'insufficient_entity_permission' => 'You don't have permission to access this item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Ei tuloksia',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Ladataan lisää tuloksia…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.php";
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
        'edit' => 'Muokkaa %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Luo uusi %entity_label_singular%',
        'exception' => 'Virhe|Virheet',
    ],

    'datagrid' => [
        // 'hidden_results' => '',
        'no_results' => 'Tuloksia ei löytynyt.',
    ],

    'paginator' => [
        'first' => 'Ensimmäinen',
        'previous' => 'Edellinen',
        'next' => 'Seuraava',
        'last' => 'Viimeinen',
        'counter' => 'Tulokset <strong>%start%</strong> - <strong>%end%</strong>, yhteensä <strong>%results%</strong>',
        // 'results' => '',
    ],

    'label' => [
        'true' => 'Kyllä',
        'false' => 'Ei',
        'empty' => 'Tyhjä',
        'null' => 'Ei asetettu',
        'object' => 'PHP-objekti',
        'inaccessible' => 'Ei saatavilla',
        'inaccessible.explanation' => 'Arvo ei ole julkinen, tai sille ei ole asetettu get-metodia',
        'form.empty_value' => 'Ei mitään',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Toiminnot',
        'new' => 'Lisää uusi %entity_label_singular%',
        'search' => 'Etsi',
        'detail' => 'Näytä',
        'edit' => 'Muokkaa',
        'delete' => 'Poista',
        'cancel' => 'Peruuta',
        'index' => 'Takaisin listaan',
        // 'deselect' => '',
        'add_new_item' => 'Luo uusi rivi',
        'remove_item' => 'Poista rivi',
        'choose_file' => 'Valitse tiedosto',
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
        'title' => 'Oletko varma että haluat poistaa tämän?',
        'content' => 'Toimintoa ei voi peruuttaa.',
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
        'are_you_sure' => 'Et ole tallentanut muuttamiasi tietoja.',
        // 'tab.error_badge_title' => '',
    ],

    'user' => [
        'logged_in_as' => 'Kirjautunut käyttäjänä',
        'unnamed' => 'Nimetön käyttäjä',
        'anonymous' => 'Tuntematon käyttäjä',
        'sign_out' => 'Ulos',
        // 'exit_impersonation' => '',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Ulkoasu',
            'light' => 'Vaalea',
            'dark' => 'Tumma',
            'auto' => 'Automaattinen',
        ],
        'locale' => 'Kieli',
    ],

    'login_page' => [
        'username' => 'Username',
        'password' => 'Password',
        'sign_in' => 'Sign in',
        'forgot_password' => 'Unohditko salasanasi?',
        'remember_me' => 'Muista minut',
    ],

    'exception' => [
        // 'entity_not_found' => '',
        // 'entity_remove' => '',
        // 'forbidden_action' => '',
        // 'insufficient_entity_permission' => 'You don't have permission to access this item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Ei tuloksia',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Ladataan lisää tuloksia…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.fi.php");
    }
}
