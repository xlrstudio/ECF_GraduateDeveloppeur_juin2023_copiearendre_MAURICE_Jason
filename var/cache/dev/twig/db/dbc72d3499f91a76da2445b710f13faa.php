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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.php */
class __TwigTemplate_6cf2132159536d98862324bd991c3838 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'Vezérlőpult',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular% szerkesztése',
        'index' => '%entity_label_plural%',
        'new' => 'Új %entity_label_singular% létrehozása',
        'exception' => 'Hiba|Hibák',
    ],

    'datagrid' => [
        'hidden_results' => 'Néhány találat nem megjeleníthető, mert nincs megfelelő jogosultsága',
        'no_results' => 'Nincs találat.',
    ],

    'paginator' => [
        'first' => 'Első',
        'previous' => 'Előző',
        'next' => 'Következő',
        'last' => 'Utolsó',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> / <strong>%results%</strong>',
        'results' => '{0} Nincs találat|[1,Inf] <strong>%count%</strong> találat',
    ],

    'label' => [
        'true' => 'Igen',
        'false' => 'Nem',
        'empty' => 'Üresen hagy',
        'null' => 'Nincs beállítva',
        'object' => 'PHP objektum',
        'inaccessible' => 'Elérhetetlen',
        'inaccessible.explanation' => 'A getter metódus nem létezik ehhez a mezőhöz vagy a tulajdonság nem publikus.',
        'form.empty_value' => 'Nincs',
    ],

    'field' => [
        'code_editor.view_code' => 'Kód megtekintése',
        'text_editor.view_content' => 'Tartalom megtekintése',
    ],

    'action' => [
        'entity_actions' => 'Műveletek',
        'new' => 'Új %entity_label_singular% létrehozása',
        'search' => 'Keresés',
        'detail' => 'Megtekintés',
        'edit' => 'Szerkesztés',
        'delete' => 'Törlés',
        'cancel' => 'Mégsem',
        'index' => 'Vissza a listához',
        'deselect' => 'Kiválasztás megszüntetése',
        'add_new_item' => 'Új elem létrehozása',
        'remove_item' => 'Elem eltávolítása',
        'choose_file' => 'Fájl kiválasztása',
        'close' => 'Bezárás',
        'create' => 'Létrehozás',
        'create_and_add_another' => 'Létrehozás és új hozzáadása',
        'create_and_continue' => 'Létrehozás és szerkesztés',
        'save' => 'Mentés',
        'save_and_continue' => 'Mentés és szerkesztés',
    ],

    'batch_action_modal' => [
        'title' => 'Valóban módosítja a kiválasztott elemeket?',
        'content' => 'Nincs lehetőség a művelet visszavonására',
        'action' => 'Folytatás',
    ],

    'delete_modal' => [
        'title' => 'Biztos benne, hogy törli ezt az elemet?',
        'content' => 'Ez a művelet visszavonhatatlan.',
    ],

    'filter' => [
        'title' => 'Szűrők',
        'button.clear' => 'Töröl',
        'button.apply' => 'Alkalmaz',
        'label.is_equal_to' => 'egyenlő',
        'label.is_not_equal_to' => 'nem egyenlő',
        'label.is_greater_than' => 'nagyobb',
        'label.is_greater_than_or_equal_to' => 'nagyobb vagy egyenlő',
        'label.is_less_than' => 'kisebb',
        'label.is_less_than_or_equal_to' => 'kisebb vagy egyenlő',
        'label.is_between' => 'kettő között',
        'label.contains' => 'tartalmazza',
        'label.not_contains' => 'nem tartalmazza',
        'label.starts_with' => 'így kezdődik',
        'label.ends_with' => 'így végződik',
        'label.exactly' => 'pontosan',
        'label.not_exactly' => 'nem pontosan',
        'label.is_same' => 'megyegyezik',
        'label.is_not_same' => 'nem egyezik meg',
        'label.is_after' => 'korábbi',
        'label.is_after_or_same' => 'korábbi vagy egyezik',
        'label.is_before' => 'későbbi',
        'label.is_before_or_same' => 'későbbi vagy egyezik',
    ],

    'form' => [
        'are_you_sure' => 'A formon végzett módosítások nem lettek elmentve.',
        'tab.error_badge_title' => 'Érvénytelen mező|%count% érvénytelen mező',
        'slug.confirm_text' => 'Ha megváltoztatja, akkor elérhetetlenné válhatnak más oldalakon szereplő hivatkozások.',
    ],

    'user' => [
        'logged_in_as' => 'Belépve mint',
        'unnamed' => 'Névtelen felhasználó',
        'anonymous' => 'Anonim felhasználó',
        'sign_out' => 'Kilépés',
        'exit_impersonation' => 'Megszemélyesítés vége',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Megjelenés',
            'light' => 'Világos',
            'dark' => 'Sötét',
            'auto' => 'Automatikus',
        ],
        'locale' => 'Nyelv',
    ],

    'login_page' => [
        'username' => 'Felhasználónév',
        'password' => 'Jelszó',
        'sign_in' => 'Belépés',
        'forgot_password' => 'Elfelejtette jelszavát?',
        'remember_me' => 'Emlékezzen rám',
    ],

    'exception' => [
        'entity_not_found' => 'Ez az elem már nem elérhető.',
        'entity_remove' => 'Ez az elem nem törölhető más kapcsolódó adatok miatt.',
        'forbidden_action' => 'A kért művelet nem hajtható végre ezen az elemen.',
        'insufficient_entity_permission' => 'Nincs megfelelő jogosultsága az elemhez.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Nincs találat',
        'no-more-results' => 'Nincs több találat',
        'loading-more-results' => 'Töltés…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.php";
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
        'dashboard' => 'Vezérlőpult',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular% szerkesztése',
        'index' => '%entity_label_plural%',
        'new' => 'Új %entity_label_singular% létrehozása',
        'exception' => 'Hiba|Hibák',
    ],

    'datagrid' => [
        'hidden_results' => 'Néhány találat nem megjeleníthető, mert nincs megfelelő jogosultsága',
        'no_results' => 'Nincs találat.',
    ],

    'paginator' => [
        'first' => 'Első',
        'previous' => 'Előző',
        'next' => 'Következő',
        'last' => 'Utolsó',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> / <strong>%results%</strong>',
        'results' => '{0} Nincs találat|[1,Inf] <strong>%count%</strong> találat',
    ],

    'label' => [
        'true' => 'Igen',
        'false' => 'Nem',
        'empty' => 'Üresen hagy',
        'null' => 'Nincs beállítva',
        'object' => 'PHP objektum',
        'inaccessible' => 'Elérhetetlen',
        'inaccessible.explanation' => 'A getter metódus nem létezik ehhez a mezőhöz vagy a tulajdonság nem publikus.',
        'form.empty_value' => 'Nincs',
    ],

    'field' => [
        'code_editor.view_code' => 'Kód megtekintése',
        'text_editor.view_content' => 'Tartalom megtekintése',
    ],

    'action' => [
        'entity_actions' => 'Műveletek',
        'new' => 'Új %entity_label_singular% létrehozása',
        'search' => 'Keresés',
        'detail' => 'Megtekintés',
        'edit' => 'Szerkesztés',
        'delete' => 'Törlés',
        'cancel' => 'Mégsem',
        'index' => 'Vissza a listához',
        'deselect' => 'Kiválasztás megszüntetése',
        'add_new_item' => 'Új elem létrehozása',
        'remove_item' => 'Elem eltávolítása',
        'choose_file' => 'Fájl kiválasztása',
        'close' => 'Bezárás',
        'create' => 'Létrehozás',
        'create_and_add_another' => 'Létrehozás és új hozzáadása',
        'create_and_continue' => 'Létrehozás és szerkesztés',
        'save' => 'Mentés',
        'save_and_continue' => 'Mentés és szerkesztés',
    ],

    'batch_action_modal' => [
        'title' => 'Valóban módosítja a kiválasztott elemeket?',
        'content' => 'Nincs lehetőség a művelet visszavonására',
        'action' => 'Folytatás',
    ],

    'delete_modal' => [
        'title' => 'Biztos benne, hogy törli ezt az elemet?',
        'content' => 'Ez a művelet visszavonhatatlan.',
    ],

    'filter' => [
        'title' => 'Szűrők',
        'button.clear' => 'Töröl',
        'button.apply' => 'Alkalmaz',
        'label.is_equal_to' => 'egyenlő',
        'label.is_not_equal_to' => 'nem egyenlő',
        'label.is_greater_than' => 'nagyobb',
        'label.is_greater_than_or_equal_to' => 'nagyobb vagy egyenlő',
        'label.is_less_than' => 'kisebb',
        'label.is_less_than_or_equal_to' => 'kisebb vagy egyenlő',
        'label.is_between' => 'kettő között',
        'label.contains' => 'tartalmazza',
        'label.not_contains' => 'nem tartalmazza',
        'label.starts_with' => 'így kezdődik',
        'label.ends_with' => 'így végződik',
        'label.exactly' => 'pontosan',
        'label.not_exactly' => 'nem pontosan',
        'label.is_same' => 'megyegyezik',
        'label.is_not_same' => 'nem egyezik meg',
        'label.is_after' => 'korábbi',
        'label.is_after_or_same' => 'korábbi vagy egyezik',
        'label.is_before' => 'későbbi',
        'label.is_before_or_same' => 'későbbi vagy egyezik',
    ],

    'form' => [
        'are_you_sure' => 'A formon végzett módosítások nem lettek elmentve.',
        'tab.error_badge_title' => 'Érvénytelen mező|%count% érvénytelen mező',
        'slug.confirm_text' => 'Ha megváltoztatja, akkor elérhetetlenné válhatnak más oldalakon szereplő hivatkozások.',
    ],

    'user' => [
        'logged_in_as' => 'Belépve mint',
        'unnamed' => 'Névtelen felhasználó',
        'anonymous' => 'Anonim felhasználó',
        'sign_out' => 'Kilépés',
        'exit_impersonation' => 'Megszemélyesítés vége',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Megjelenés',
            'light' => 'Világos',
            'dark' => 'Sötét',
            'auto' => 'Automatikus',
        ],
        'locale' => 'Nyelv',
    ],

    'login_page' => [
        'username' => 'Felhasználónév',
        'password' => 'Jelszó',
        'sign_in' => 'Belépés',
        'forgot_password' => 'Elfelejtette jelszavát?',
        'remember_me' => 'Emlékezzen rám',
    ],

    'exception' => [
        'entity_not_found' => 'Ez az elem már nem elérhető.',
        'entity_remove' => 'Ez az elem nem törölhető más kapcsolódó adatok miatt.',
        'forbidden_action' => 'A kért művelet nem hajtható végre ezen az elemen.',
        'insufficient_entity_permission' => 'Nincs megfelelő jogosultsága az elemhez.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Nincs találat',
        'no-more-results' => 'Nincs több találat',
        'loading-more-results' => 'Töltés…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.hu.php");
    }
}
