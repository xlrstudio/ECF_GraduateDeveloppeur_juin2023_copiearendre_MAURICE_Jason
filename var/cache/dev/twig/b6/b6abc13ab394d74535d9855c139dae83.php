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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lb.php */
class __TwigTemplate_9808c17e82e1d3d3caae6e5986417018 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lb.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lb.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'Tableau de bord',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular% beaarbechten',
        'index' => '%entity_label_plural%',
        'new' => '%entity_label_singular% erstellen',
        'exception' => 'Feeler',
    ],

    'datagrid' => [
        'hidden_results' => 'E puer Resultater kënnen opgrond vu feelende Berechtegungen net ugewise ginn.',
        'no_results' => 'Keng Resultater fonnt.',
    ],

    'paginator' => [
        'first' => 'Éischt',
        'previous' => 'Zréck',
        'next' => 'Nächst',
        'last' => 'Lescht',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> vu(n) <strong>%results%</strong>',
        'results' => '{0} Keng Resultater|{1} <strong>1</strong> Resultat|]1,Inf] <strong>%count%</strong> Resultater',
    ],

    'label' => [
        'true' => 'Jo',
        'false' => 'Nee',
        'empty' => 'Eidel',
        'null' => 'Null',
        'object' => 'PHP-Objet',
        'inaccessible' => 'Net disponibel',
        'inaccessible.explanation' => 'Et gët keng Getter-Method fir dës Eegeschaft oder d\\'Eegeschaft ass net ëffentlech',
        'form.empty_value' => 'eidel',
    ],

    'field' => [
        'code_editor.view_code' => 'Code uweisen',
        'text_editor.view_content' => 'Contenu uweisen',
    ],

    'action' => [
        'entity_actions' => 'Aktiounen',
        'new' => '%entity_label_singular% erstellen',
        'search' => 'Sichen',
        'detail' => 'Uweisen',
        'edit' => 'Änneren',
        'delete' => 'Läschen',
        'cancel' => 'Ofbriechen',
        'index' => 'Zréck bei d\\'Iwwersiicht',
        'deselect' => 'Auswiel ophiewen',
        'add_new_item' => 'Neit Element dobäisetzen',
        'remove_item' => 'Element läschen',
        'choose_file' => 'Fichier auswielen',
        'close' => 'Zoumaachen',
        'create' => 'Erstellen',
        'create_and_add_another' => 'Erstellen an e weidert Element dobäisetzen',
        'create_and_continue' => 'Erstellen a weider beaarbechten',
        'save' => 'Späicheren',
        'save_and_continue' => 'Späicheren a weider beaarbechten',
    ],

    'batch_action_modal' => [
        'title' => 'Wëllt Dir déi ausgewielt Elementer wierklech beaarbechten?',
        'content' => 'Dës Aktioun kann net réckgängeg gemaach ginn.',
        'action' => 'Weidermaachen',
    ],

    'delete_modal' => [
        'title' => 'Soll dat Element wierklich geläscht ginn?',
        'content' => 'Dës Aktioun kann net réckgängeg gemaach ginn.',
    ],

    'filter' => [
        'title' => 'Filteren',
        'button.clear' => 'Zerécksetzen',
        'button.apply' => 'Uwenden',
        'label.is_equal_to' => 'ass gläich',
        'label.is_not_equal_to' => 'ass net gläich',
        'label.is_greater_than' => 'ass gréisser wéi',
        'label.is_greater_than_or_equal_to' => 'ass gréisser wéi oder gläich',
        'label.is_less_than' => 'ass méi kleng wéi',
        'label.is_less_than_or_equal_to' => 'ass méi kleng wéi oder gläich',
        'label.is_between' => 'ass tëscht',
        'label.contains' => 'enthält',
        'label.not_contains' => 'enthält net',
        'label.starts_with' => 'fänkt u mat',
        'label.ends_with' => 'hält op mat',
        'label.exactly' => 'ass genau',
        'label.not_exactly' => 'ass net genau',
        'label.is_same' => 'ass gläich',
        'label.is_not_same' => 'ass net gläich',
        'label.is_after' => 'ass no',
        'label.is_after_or_same' => 'ass no oder gläich',
        'label.is_before' => 'ass virun',
        'label.is_before_or_same' => 'ass virun oder gläich',
    ],

    'form' => [
        'are_you_sure' => 'D\\'Änderunge sinn nach net gespäichert.',
        'tab.error_badge_title' => 'Een ongëltegt Feld|%count% ongëlteg Felder',
        'slug.confirm_text' => 'Wann Dir de \"Slug\" ännert, kënnen doduerch Linken op anere Säite briechen.',
    ],

    'user' => [
        'logged_in_as' => 'Ugemellt als',
        'unnamed' => 'Onbekannte Benotzer',
        'anonymous' => 'Anonyme Benotzer',
        'sign_out' => 'Ofmellen',
        'exit_impersonation' => 'Benotzerimitatioun verloossen',
    ],

    'login_page' => [
        'username' => 'Benotzernumm',
        'password' => 'Passwuert',
        'sign_in' => 'Login',
        'forgot_password' => 'Passwuert vergiess?',
        'remember_me' => 'Bei der nächster Kéier automatesch umellen',
    ],

    'exception' => [
        'entity_not_found' => 'Dëst Element ass net méi disponibel.',
        'entity_remove' => 'Dëst Element kann net geläscht ginn, well aner Elementer dovun ofhänken.',
        'forbidden_action' => 'Déi gewënscht Aktioun ka mat dësem ELement net ausgefouert ginn.',
        'insufficient_entity_permission' => 'Dir hutt keng Berechtegung op dëst Element zouzegräifen.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Keng Resultater fonnt',
        'no-more-results' => 'Keng weider Resultater',
        'loading-more-results' => 'Méi Resultater gi lueden…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lb.php";
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
        'dashboard' => 'Tableau de bord',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular% beaarbechten',
        'index' => '%entity_label_plural%',
        'new' => '%entity_label_singular% erstellen',
        'exception' => 'Feeler',
    ],

    'datagrid' => [
        'hidden_results' => 'E puer Resultater kënnen opgrond vu feelende Berechtegungen net ugewise ginn.',
        'no_results' => 'Keng Resultater fonnt.',
    ],

    'paginator' => [
        'first' => 'Éischt',
        'previous' => 'Zréck',
        'next' => 'Nächst',
        'last' => 'Lescht',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> vu(n) <strong>%results%</strong>',
        'results' => '{0} Keng Resultater|{1} <strong>1</strong> Resultat|]1,Inf] <strong>%count%</strong> Resultater',
    ],

    'label' => [
        'true' => 'Jo',
        'false' => 'Nee',
        'empty' => 'Eidel',
        'null' => 'Null',
        'object' => 'PHP-Objet',
        'inaccessible' => 'Net disponibel',
        'inaccessible.explanation' => 'Et gët keng Getter-Method fir dës Eegeschaft oder d\\'Eegeschaft ass net ëffentlech',
        'form.empty_value' => 'eidel',
    ],

    'field' => [
        'code_editor.view_code' => 'Code uweisen',
        'text_editor.view_content' => 'Contenu uweisen',
    ],

    'action' => [
        'entity_actions' => 'Aktiounen',
        'new' => '%entity_label_singular% erstellen',
        'search' => 'Sichen',
        'detail' => 'Uweisen',
        'edit' => 'Änneren',
        'delete' => 'Läschen',
        'cancel' => 'Ofbriechen',
        'index' => 'Zréck bei d\\'Iwwersiicht',
        'deselect' => 'Auswiel ophiewen',
        'add_new_item' => 'Neit Element dobäisetzen',
        'remove_item' => 'Element läschen',
        'choose_file' => 'Fichier auswielen',
        'close' => 'Zoumaachen',
        'create' => 'Erstellen',
        'create_and_add_another' => 'Erstellen an e weidert Element dobäisetzen',
        'create_and_continue' => 'Erstellen a weider beaarbechten',
        'save' => 'Späicheren',
        'save_and_continue' => 'Späicheren a weider beaarbechten',
    ],

    'batch_action_modal' => [
        'title' => 'Wëllt Dir déi ausgewielt Elementer wierklech beaarbechten?',
        'content' => 'Dës Aktioun kann net réckgängeg gemaach ginn.',
        'action' => 'Weidermaachen',
    ],

    'delete_modal' => [
        'title' => 'Soll dat Element wierklich geläscht ginn?',
        'content' => 'Dës Aktioun kann net réckgängeg gemaach ginn.',
    ],

    'filter' => [
        'title' => 'Filteren',
        'button.clear' => 'Zerécksetzen',
        'button.apply' => 'Uwenden',
        'label.is_equal_to' => 'ass gläich',
        'label.is_not_equal_to' => 'ass net gläich',
        'label.is_greater_than' => 'ass gréisser wéi',
        'label.is_greater_than_or_equal_to' => 'ass gréisser wéi oder gläich',
        'label.is_less_than' => 'ass méi kleng wéi',
        'label.is_less_than_or_equal_to' => 'ass méi kleng wéi oder gläich',
        'label.is_between' => 'ass tëscht',
        'label.contains' => 'enthält',
        'label.not_contains' => 'enthält net',
        'label.starts_with' => 'fänkt u mat',
        'label.ends_with' => 'hält op mat',
        'label.exactly' => 'ass genau',
        'label.not_exactly' => 'ass net genau',
        'label.is_same' => 'ass gläich',
        'label.is_not_same' => 'ass net gläich',
        'label.is_after' => 'ass no',
        'label.is_after_or_same' => 'ass no oder gläich',
        'label.is_before' => 'ass virun',
        'label.is_before_or_same' => 'ass virun oder gläich',
    ],

    'form' => [
        'are_you_sure' => 'D\\'Änderunge sinn nach net gespäichert.',
        'tab.error_badge_title' => 'Een ongëltegt Feld|%count% ongëlteg Felder',
        'slug.confirm_text' => 'Wann Dir de \"Slug\" ännert, kënnen doduerch Linken op anere Säite briechen.',
    ],

    'user' => [
        'logged_in_as' => 'Ugemellt als',
        'unnamed' => 'Onbekannte Benotzer',
        'anonymous' => 'Anonyme Benotzer',
        'sign_out' => 'Ofmellen',
        'exit_impersonation' => 'Benotzerimitatioun verloossen',
    ],

    'login_page' => [
        'username' => 'Benotzernumm',
        'password' => 'Passwuert',
        'sign_in' => 'Login',
        'forgot_password' => 'Passwuert vergiess?',
        'remember_me' => 'Bei der nächster Kéier automatesch umellen',
    ],

    'exception' => [
        'entity_not_found' => 'Dëst Element ass net méi disponibel.',
        'entity_remove' => 'Dëst Element kann net geläscht ginn, well aner Elementer dovun ofhänken.',
        'forbidden_action' => 'Déi gewënscht Aktioun ka mat dësem ELement net ausgefouert ginn.',
        'insufficient_entity_permission' => 'Dir hutt keng Berechtegung op dëst Element zouzegräifen.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Keng Resultater fonnt',
        'no-more-results' => 'Keng weider Resultater',
        'loading-more-results' => 'Méi Resultater gi lueden…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lb.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.lb.php");
    }
}
