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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sk.php */
class __TwigTemplate_87db7f8e4a3e03591f61a7ab659d00b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sk.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sk.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'Úvod',
        'detail' => '%entity_as_string%',
        'edit' => 'Upraviť %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Vytvoriť %entity_label_singular%',
        'exception' => 'Chyba|Chyby',
    ],

    'datagrid' => [
        'hidden_results' => 'Niektoré výsledky nemohli byť zobrazené lebo nemáte potrebné oprávnenie',
        'no_results' => 'Žiadne položky.',
    ],

    'paginator' => [
        'first' => 'Prvá',
        'previous' => 'Predchádzajúca',
        'next' => 'Ďalšia',
        'last' => 'Posledná',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> z <strong>%results%</strong>',
        'results' => '{0} Žiadne výsledky|{1} <strong>1</strong> výsledok|{2,3,4} <strong>%count%</strong> výsledky|[5,Inf] <strong>%count%</strong> výsledkov',
    ],

    'label' => [
        'true' => 'Áno',
        'false' => 'Nie',
        'empty' => 'Prázdne',
        'null' => 'Nulové',
        'object' => 'PHP Objekt',
        'inaccessible' => 'Neprístupné',
        'inaccessible.explanation' => 'Getter metóda pre toto pole neexistuje alebo nieje verejná (public)',
        'form.empty_value' => 'Prázdne',
    ],

    'field' => [
        'code_editor.view_code' => 'Zobraziť kód',
        'text_editor.view_content' => 'Zobraziť obsah',
    ],

    'action' => [
        'entity_actions' => 'Akce',
        'new' => 'Vytvoriť %entity_label_singular%',
        'search' => 'Hľadať',
        'detail' => 'Zobraziť',
        'edit' => 'Editovať',
        'delete' => 'Zmazať',
        'cancel' => 'Zrušiť',
        'index' => 'Späť na zoznam',
        'deselect' => 'Zrušiť označenie',
        'add_new_item' => 'Vložit položku',
        'remove_item' => 'Odstrániť položku',
        'choose_file' => 'Vybrať súbor',
        'close' => 'Zavrieť',
        'create' => 'Vytvoriť',
        'create_and_add_another' => 'Vytvoriť a pridať ďalšiu',
        'create_and_continue' => 'Vytvoriť a pokračovat',
        'save' => 'Uložit',
        'save_and_continue' => 'Uložit a pokračovat',
    ],

    'batch_action_modal' => [
        'title' => 'Naozaj chcete zmeniť vybrané položky?',
        'content' => 'Táto akcia sa nedá zvrátiť.',
        'action' => 'Pokračovať',
    ],

    'delete_modal' => [
        'title' => 'Naozaj chcete vymazať túto položku?',
        'content' => 'Táto akcia sa nedá zvrátiť.',
    ],

    'filter' => [
        'title' => 'Filtre',
        'button.clear' => 'Zrušit',
        'button.apply' => 'Aplikovať',
        'label.is_equal_to' => 'rovná sa',
        'label.is_not_equal_to' => 'nerovná sa',
        'label.is_greater_than' => 'je väčšie ako',
        'label.is_greater_than_or_equal_to' => 'je väčšia ako alebo rovné',
        'label.is_less_than' => 'je menší než',
        'label.is_less_than_or_equal_to' => 'je menšie ako alebo rovné',
        'label.is_between' => 'je medzi',
        'label.contains' => 'obsahuje',
        'label.not_contains' => 'neobsahuje',
        'label.starts_with' => 'začína na',
        'label.ends_with' => 'končí na',
        'label.exactly' => 'je přesně',
        'label.not_exactly' => 'nie je presne',
        'label.is_same' => 'je rovnaké',
        'label.is_not_same' => 'nie je  rovnaké',
        'label.is_after' => 'je po',
        'label.is_after_or_same' => 'je po alebo rovnaké',
        'label.is_before' => 'je pred',
        'label.is_before_or_same' => 'je pred alebo rovnaké',
    ],

    'form' => [
        'are_you_sure' => 'Neuložili ste zmeny vykonané v tomto formulári.',
        'tab.error_badge_title' => '{1} Jeden neplatný vstup|{2,3,4} %count% neplatné vstupy|[5,Inf] %count% neplatných vstupov',
    ],

    'user' => [
        'logged_in_as' => 'Prihlásený ako',
        'unnamed' => 'Nepomenovaný použivateľ',
        'anonymous' => 'Anonymný použivateľ',
        'sign_out' => 'Odhlásiť sa',
        'exit_impersonation' => 'Ukončit impersonáciu',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Vzhľad',
            'light' => 'Svetlý',
            'dark' => 'Tmavý',
            'auto' => 'Automatický',
        ],
    ],

    'login_page' => [
        'username' => 'Login',
        'password' => 'Heslo',
        'sign_in' => 'Prihlásiť',
        'forgot_password' => 'Zabudli ste heslo?',
        'remember_me' => 'Pamätaj si ma',
    ],

    'exception' => [
        'entity_not_found' => 'Táto položka sa nenašla.',
        'entity_remove' => 'Táto položka nemôže byť zmazaná, lebo na nanej závisia ostatné položky.',
        'forbidden_action' => 'Požadovaná akcia nemôže byť vykonaná na tejto položke.',
        'insufficient_entity_permission' => 'Nemáte dostatočná oprávnenia pre prístup k tejto položke.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Neboli nájdené žiadne položky',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Načítajú sa ďalšie výsledky…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sk.php";
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
        'dashboard' => 'Úvod',
        'detail' => '%entity_as_string%',
        'edit' => 'Upraviť %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Vytvoriť %entity_label_singular%',
        'exception' => 'Chyba|Chyby',
    ],

    'datagrid' => [
        'hidden_results' => 'Niektoré výsledky nemohli byť zobrazené lebo nemáte potrebné oprávnenie',
        'no_results' => 'Žiadne položky.',
    ],

    'paginator' => [
        'first' => 'Prvá',
        'previous' => 'Predchádzajúca',
        'next' => 'Ďalšia',
        'last' => 'Posledná',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> z <strong>%results%</strong>',
        'results' => '{0} Žiadne výsledky|{1} <strong>1</strong> výsledok|{2,3,4} <strong>%count%</strong> výsledky|[5,Inf] <strong>%count%</strong> výsledkov',
    ],

    'label' => [
        'true' => 'Áno',
        'false' => 'Nie',
        'empty' => 'Prázdne',
        'null' => 'Nulové',
        'object' => 'PHP Objekt',
        'inaccessible' => 'Neprístupné',
        'inaccessible.explanation' => 'Getter metóda pre toto pole neexistuje alebo nieje verejná (public)',
        'form.empty_value' => 'Prázdne',
    ],

    'field' => [
        'code_editor.view_code' => 'Zobraziť kód',
        'text_editor.view_content' => 'Zobraziť obsah',
    ],

    'action' => [
        'entity_actions' => 'Akce',
        'new' => 'Vytvoriť %entity_label_singular%',
        'search' => 'Hľadať',
        'detail' => 'Zobraziť',
        'edit' => 'Editovať',
        'delete' => 'Zmazať',
        'cancel' => 'Zrušiť',
        'index' => 'Späť na zoznam',
        'deselect' => 'Zrušiť označenie',
        'add_new_item' => 'Vložit položku',
        'remove_item' => 'Odstrániť položku',
        'choose_file' => 'Vybrať súbor',
        'close' => 'Zavrieť',
        'create' => 'Vytvoriť',
        'create_and_add_another' => 'Vytvoriť a pridať ďalšiu',
        'create_and_continue' => 'Vytvoriť a pokračovat',
        'save' => 'Uložit',
        'save_and_continue' => 'Uložit a pokračovat',
    ],

    'batch_action_modal' => [
        'title' => 'Naozaj chcete zmeniť vybrané položky?',
        'content' => 'Táto akcia sa nedá zvrátiť.',
        'action' => 'Pokračovať',
    ],

    'delete_modal' => [
        'title' => 'Naozaj chcete vymazať túto položku?',
        'content' => 'Táto akcia sa nedá zvrátiť.',
    ],

    'filter' => [
        'title' => 'Filtre',
        'button.clear' => 'Zrušit',
        'button.apply' => 'Aplikovať',
        'label.is_equal_to' => 'rovná sa',
        'label.is_not_equal_to' => 'nerovná sa',
        'label.is_greater_than' => 'je väčšie ako',
        'label.is_greater_than_or_equal_to' => 'je väčšia ako alebo rovné',
        'label.is_less_than' => 'je menší než',
        'label.is_less_than_or_equal_to' => 'je menšie ako alebo rovné',
        'label.is_between' => 'je medzi',
        'label.contains' => 'obsahuje',
        'label.not_contains' => 'neobsahuje',
        'label.starts_with' => 'začína na',
        'label.ends_with' => 'končí na',
        'label.exactly' => 'je přesně',
        'label.not_exactly' => 'nie je presne',
        'label.is_same' => 'je rovnaké',
        'label.is_not_same' => 'nie je  rovnaké',
        'label.is_after' => 'je po',
        'label.is_after_or_same' => 'je po alebo rovnaké',
        'label.is_before' => 'je pred',
        'label.is_before_or_same' => 'je pred alebo rovnaké',
    ],

    'form' => [
        'are_you_sure' => 'Neuložili ste zmeny vykonané v tomto formulári.',
        'tab.error_badge_title' => '{1} Jeden neplatný vstup|{2,3,4} %count% neplatné vstupy|[5,Inf] %count% neplatných vstupov',
    ],

    'user' => [
        'logged_in_as' => 'Prihlásený ako',
        'unnamed' => 'Nepomenovaný použivateľ',
        'anonymous' => 'Anonymný použivateľ',
        'sign_out' => 'Odhlásiť sa',
        'exit_impersonation' => 'Ukončit impersonáciu',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Vzhľad',
            'light' => 'Svetlý',
            'dark' => 'Tmavý',
            'auto' => 'Automatický',
        ],
    ],

    'login_page' => [
        'username' => 'Login',
        'password' => 'Heslo',
        'sign_in' => 'Prihlásiť',
        'forgot_password' => 'Zabudli ste heslo?',
        'remember_me' => 'Pamätaj si ma',
    ],

    'exception' => [
        'entity_not_found' => 'Táto položka sa nenašla.',
        'entity_remove' => 'Táto položka nemôže byť zmazaná, lebo na nanej závisia ostatné položky.',
        'forbidden_action' => 'Požadovaná akcia nemôže byť vykonaná na tejto položke.',
        'insufficient_entity_permission' => 'Nemáte dostatočná oprávnenia pre prístup k tejto položke.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Neboli nájdené žiadne položky',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Načítajú sa ďalšie výsledky…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sk.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.sk.php");
    }
}
