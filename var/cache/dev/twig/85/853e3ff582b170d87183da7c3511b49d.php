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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.php */
class __TwigTemplate_f000f89a7fb0681e63f0bb2f15dcb902 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'Kontrolna tabla',
        'detail' => '%entity_as_string%',
        'edit' => 'Izmena %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Novi %entity_label_singular%',
        'exception' => 'Greška|Greške',
    ],

    'datagrid' => [
        'hidden_results' => 'Neki rezultati ne mogu biti prikazani jer nemate dovoljne privilegije',
        'no_results' => 'Nema pronađenin rezultata.',
    ],

    'paginator' => [
        'first' => 'Prva',
        'previous' => 'Prethodna',
        'next' => 'Sledeća',
        'last' => 'Poslednja',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
        'results' => '{0} Nema rezultata|{1} <strong>1</strong> rezultat|]1,Inf] <strong>%count%</strong> rezultata',
    ],

    'label' => [
        'true' => 'Da',
        'false' => 'Ne',
        'empty' => 'Prazno',
        'null' => 'Ništa',
        'object' => 'PHP Objekat',
        'inaccessible' => 'Nedostupno',
        'inaccessible.explanation' => 'Getter metoda ne postoji za ovo polje ili je nedostupna',
        'form.empty_value' => 'Prazno',
    ],

    'field' => [
        'code_editor.view_code' => 'Pregledaj kod',
        'text_editor.view_content' => 'Pregledaj sadržaj',
    ],

    'action' => [
        'entity_actions' => 'Akcije',
        'new' => 'Dodaj %entity_label_singular%',
        'search' => 'Pretraži',
        'detail' => 'Prikaži',
        'edit' => 'Izmeni',
        'delete' => 'Izbriši',
        'cancel' => 'Otkaži',
        'index' => 'Nazad na listu',
        'deselect' => 'Odčekiraj',
        'add_new_item' => 'Dodaj novi zapis',
        'remove_item' => 'Ukloni zapis',
        'choose_file' => 'Odaberi datoteku',
        'close' => 'Zatvori',
        'create' => 'Napravi',
        'create_and_add_another' => 'Napravi i dodaj još jedan',
        'create_and_continue' => 'Napravi i nastavi sa izmenama',
        'save' => 'Sačuvaj izmene',
        'save_and_continue' => 'Sačuvaj i nastavi sa izmenama',
    ],

    'batch_action_modal' => [
        'title' => 'Primenićete \"%action_name%\" na %num_items% stavki.',
        'content' => 'Ova operacija je nepovratna.',
        'action' => 'Nastavi',
    ],

    'delete_modal' => [
        'title' => 'Da li sigurno želite da obrišete ovaj zapis?',
        'content' => 'Ova operacija je nepovratna.',
    ],

    'filter' => [
        'title' => 'Filteri',
        'button.clear' => 'Poništi postojeće filtere',
        'button.apply' => 'Primeni',
        'label.is_equal_to' => 'je jednako',
        'label.is_not_equal_to' => 'nije jednako',
        'label.is_greater_than' => 'je veće od',
        'label.is_greater_than_or_equal_to' => 'je veće ili jednako',
        'label.is_less_than' => 'je manje od',
        'label.is_less_than_or_equal_to' => 'je manje ili jednako',
        'label.is_between' => 'je između',
        'label.contains' => 'sadrži',
        'label.not_contains' => 'ne sadrži',
        'label.starts_with' => 'počinje sa',
        'label.ends_with' => 'završava se se',
        'label.exactly' => 'je tačno',
        'label.not_exactly' => 'je bilo šta osim',
        'label.is_same' => 'je identično',
        'label.is_not_same' => 'nije identično',
        'label.is_after' => 'je nakon',
        'label.is_after_or_same' => 'je nakon ili je tačno',
        'label.is_before' => 'je pre',
        'label.is_before_or_same' => 'je pre ili je tačno',
    ],

    'form' => [
        'are_you_sure' => 'Niste sačuvali izmene na ovoj formi.',
        'tab.error_badge_title' => 'Jedan pogrešan unos|%count% pogrešnih unosa',
    ],

    'user' => [
        'logged_in_as' => 'Ulogovan kao',
        'unnamed' => 'Korisnik bez imena',
        'anonymous' => 'Anonimni korisnik',
        'sign_out' => 'Izloguj se',
        'exit_impersonation' => 'Izađi iz oponašanja',
    ],

    'login_page' => [
        'username' => 'Korisničko ime',
        'password' => 'Lozinka',
        'sign_in' => 'Prijavi se',
        'forgot_password' => 'Zaboravljena lozinka',
        'remember_me' => 'Zapamti me',
    ],

    'exception' => [
        'entity_not_found' => 'Ovaj zapis više nije dostupan.',
        'entity_remove' => 'Ovaj zapis ne može biti izbrisan zato što su drugi zapisi vezani za njega.',
        'forbidden_action' => 'Ova akcija ne može biti primenjena na ovaj zapis.',
        'insufficient_entity_permission' => 'Nemate dovoljne privilegije da vidite ovaj zapis.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Nema rezultata',
        'no-more-results' => 'Nema više rezultata',
        'loading-more-results' => 'Učitavanje rezultata . . .',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.php";
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
        'dashboard' => 'Kontrolna tabla',
        'detail' => '%entity_as_string%',
        'edit' => 'Izmena %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Novi %entity_label_singular%',
        'exception' => 'Greška|Greške',
    ],

    'datagrid' => [
        'hidden_results' => 'Neki rezultati ne mogu biti prikazani jer nemate dovoljne privilegije',
        'no_results' => 'Nema pronađenin rezultata.',
    ],

    'paginator' => [
        'first' => 'Prva',
        'previous' => 'Prethodna',
        'next' => 'Sledeća',
        'last' => 'Poslednja',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
        'results' => '{0} Nema rezultata|{1} <strong>1</strong> rezultat|]1,Inf] <strong>%count%</strong> rezultata',
    ],

    'label' => [
        'true' => 'Da',
        'false' => 'Ne',
        'empty' => 'Prazno',
        'null' => 'Ništa',
        'object' => 'PHP Objekat',
        'inaccessible' => 'Nedostupno',
        'inaccessible.explanation' => 'Getter metoda ne postoji za ovo polje ili je nedostupna',
        'form.empty_value' => 'Prazno',
    ],

    'field' => [
        'code_editor.view_code' => 'Pregledaj kod',
        'text_editor.view_content' => 'Pregledaj sadržaj',
    ],

    'action' => [
        'entity_actions' => 'Akcije',
        'new' => 'Dodaj %entity_label_singular%',
        'search' => 'Pretraži',
        'detail' => 'Prikaži',
        'edit' => 'Izmeni',
        'delete' => 'Izbriši',
        'cancel' => 'Otkaži',
        'index' => 'Nazad na listu',
        'deselect' => 'Odčekiraj',
        'add_new_item' => 'Dodaj novi zapis',
        'remove_item' => 'Ukloni zapis',
        'choose_file' => 'Odaberi datoteku',
        'close' => 'Zatvori',
        'create' => 'Napravi',
        'create_and_add_another' => 'Napravi i dodaj još jedan',
        'create_and_continue' => 'Napravi i nastavi sa izmenama',
        'save' => 'Sačuvaj izmene',
        'save_and_continue' => 'Sačuvaj i nastavi sa izmenama',
    ],

    'batch_action_modal' => [
        'title' => 'Primenićete \"%action_name%\" na %num_items% stavki.',
        'content' => 'Ova operacija je nepovratna.',
        'action' => 'Nastavi',
    ],

    'delete_modal' => [
        'title' => 'Da li sigurno želite da obrišete ovaj zapis?',
        'content' => 'Ova operacija je nepovratna.',
    ],

    'filter' => [
        'title' => 'Filteri',
        'button.clear' => 'Poništi postojeće filtere',
        'button.apply' => 'Primeni',
        'label.is_equal_to' => 'je jednako',
        'label.is_not_equal_to' => 'nije jednako',
        'label.is_greater_than' => 'je veće od',
        'label.is_greater_than_or_equal_to' => 'je veće ili jednako',
        'label.is_less_than' => 'je manje od',
        'label.is_less_than_or_equal_to' => 'je manje ili jednako',
        'label.is_between' => 'je između',
        'label.contains' => 'sadrži',
        'label.not_contains' => 'ne sadrži',
        'label.starts_with' => 'počinje sa',
        'label.ends_with' => 'završava se se',
        'label.exactly' => 'je tačno',
        'label.not_exactly' => 'je bilo šta osim',
        'label.is_same' => 'je identično',
        'label.is_not_same' => 'nije identično',
        'label.is_after' => 'je nakon',
        'label.is_after_or_same' => 'je nakon ili je tačno',
        'label.is_before' => 'je pre',
        'label.is_before_or_same' => 'je pre ili je tačno',
    ],

    'form' => [
        'are_you_sure' => 'Niste sačuvali izmene na ovoj formi.',
        'tab.error_badge_title' => 'Jedan pogrešan unos|%count% pogrešnih unosa',
    ],

    'user' => [
        'logged_in_as' => 'Ulogovan kao',
        'unnamed' => 'Korisnik bez imena',
        'anonymous' => 'Anonimni korisnik',
        'sign_out' => 'Izloguj se',
        'exit_impersonation' => 'Izađi iz oponašanja',
    ],

    'login_page' => [
        'username' => 'Korisničko ime',
        'password' => 'Lozinka',
        'sign_in' => 'Prijavi se',
        'forgot_password' => 'Zaboravljena lozinka',
        'remember_me' => 'Zapamti me',
    ],

    'exception' => [
        'entity_not_found' => 'Ovaj zapis više nije dostupan.',
        'entity_remove' => 'Ovaj zapis ne može biti izbrisan zato što su drugi zapisi vezani za njega.',
        'forbidden_action' => 'Ova akcija ne može biti primenjena na ovaj zapis.',
        'insufficient_entity_permission' => 'Nemate dovoljne privilegije da vidite ovaj zapis.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Nema rezultata',
        'no-more-results' => 'Nema više rezultata',
        'loading-more-results' => 'Učitavanje rezultata . . .',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.sr_RS.php");
    }
}
