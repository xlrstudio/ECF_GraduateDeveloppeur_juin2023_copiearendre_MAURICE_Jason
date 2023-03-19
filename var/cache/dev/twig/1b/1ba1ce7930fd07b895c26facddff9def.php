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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.he.php */
class __TwigTemplate_40aa9373861f1d52329a1bb218f1b7da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.he.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.he.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'לוח בקרה',
        'detail' => '%entity_as_string%',
        'edit' => 'עריכת %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'יצירת %entity_label_singular%',
        'exception' => 'שגיאה|שגיאות',
    ],

    'datagrid' => [
        'hidden_results' => 'חלק מהתוצאות לא יכולות להיות מוצגות, כי אין לך מספיק הרשאות.',
        'no_results' => 'לא נמצאו תוצאות.',
    ],

    'paginator' => [
        'first' => 'ראשון',
        'previous' => 'הקודם',
        'next' => 'הבא',
        'last' => 'אחרון',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> מתוך <strong>%results%</strong>',
        'results' => '{0} אין תוצאות|{1} <strong>1</strong> תוצאה|]1,Inf] <strong>%count%</strong> תוצאות',
    ],

    'label' => [
        'true' => 'כן',
        'false' => 'לא',
        'empty' => 'ריק',
        'null' => 'Null',
        'object' => 'אובייקט PHP',
        'inaccessible' => 'לא נגיש',
        'inaccessible.explanation' => 'שיטת \"גטר\" לא קיימת לשדה זה, או שהשדה לא מוגדר כציבורי',
        'form.empty_value' => 'ריק',
    ],

    'field' => [
        'code_editor.view_code' => 'הצג קוד',
        'text_editor.view_content' => 'הצג תוכן',
    ],

    'action' => [
        'entity_actions' => 'פעולות',
        'new' => 'הוסף %entity_label_singular%',
        'search' => 'חיפוש',
        'detail' => 'הצג',
        'edit' => 'עריכה',
        'delete' => 'מחיקה',
        'cancel' => 'ביטול',
        'index' => 'בחזרה לרשימה',
        'deselect' => 'ביטול בחירה',
        'add_new_item' => 'הוסף פריט חדש',
        'remove_item' => 'מחק פריט',
        'choose_file' => 'בחר קובץ',
        'close' => 'סגור',
        'create' => 'צור',
        'create_and_add_another' => 'צור והוסף חדש',
        'create_and_continue' => 'צור והמשך לערוך',
        'save' => 'שמור שינויים',
        'save_and_continue' => 'שמור והמשך עריכה',
    ],

    'batch_action_modal' => [
        'title' => 'הנך מתכוון להחיל פעולת \"%action_name%\" עבור הפריטים הנבחרים (%num_items%).',
        'content' => 'לא ניתן לבטל פעולה זו לאחר ביצועה.',
        'action' => 'המשך',
    ],

    'delete_modal' => [
        'title' => 'האם הנך בטוח שברצונך למחוק פריט זה?',
        'content' => 'לא ניתן לבטל פעולה זו לאחר ביצועה.',
    ],

    'filter' => [
        'title' => 'סינונים',
        'button.clear' => 'נקה',
        'button.apply' => 'החל',
        'label.is_equal_to' => 'שווה לערך',
        'label.is_not_equal_to' => 'לא שווה לערך',
        'label.is_greater_than' => 'גדול מהערך',
        'label.is_greater_than_or_equal_to' => 'גדול/שווה לערך',
        'label.is_less_than' => 'קטן מהערך',
        'label.is_less_than_or_equal_to' => 'קטן/שווה לערך',
        'label.is_between' => 'בין',
        'label.contains' => 'מכיל',
        'label.not_contains' => 'לא מכיל',
        'label.starts_with' => 'מתחיל עם',
        'label.ends_with' => 'מסתיים עם',
        'label.exactly' => 'בדיוק',
        'label.not_exactly' => 'לא בדיוק',
        'label.is_same' => 'זהה',
        'label.is_not_same' => 'לא זהה',
        'label.is_after' => 'אחרי',
        'label.is_after_or_same' => 'זהה או אחרי',
        'label.is_before' => 'לפני',
        'label.is_before_or_same' => 'זהה או לפני',
    ],

    'form' => [
        'are_you_sure' => 'לא שמרת את השינויים שנעשו בטופס זה.',
        'tab.error_badge_title' => 'קלט אחד לא תקין|%count% קלטים לא תקינים',
        'slug.confirm_text' => 'אם תשנה את המזהה, זה יוכל לשבור לינקים בעמודים אחרים.',
    ],

    'user' => [
        'logged_in_as' => 'מחובר בתור',
        'unnamed' => 'משתמש ללא שם',
        'anonymous' => 'משתמש אנונימי',
        'sign_out' => 'התנתקות',
        'exit_impersonation' => 'יציאה ממצב התחזות',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'תצוגה',
            'light' => 'בהיר',
            'dark' => 'חשוך',
            'auto' => 'אוטומטי',
        ],
        'locale' => 'שפה',
    ],

    'login_page' => [
        'username' => 'שם משתמש',
        'password' => 'סיסמה',
        'sign_in' => 'התחבר',
        'forgot_password' => 'שכחת סיסמה?',
        'remember_me' => 'זכור אותי',
    ],

    'exception' => [
        'entity_not_found' => 'פריט זה כבר לא קיים.',
        'entity_remove' => 'פריט זה לא יכול להימחק, כיוון שפריטים אחרים תלויים בו.',
        'forbidden_action' => 'הפעולה המתבקשת לא יכולה להתבצע עבור פריט זה.',
        'insufficient_entity_permission' => 'אין לך הרשאה לגשת לפריט זה.',
    ],

    'autocomplete' => [
        'no-results-found' => 'לא נמצאו תוצאות',
        'no-more-results' => 'אין עוד תוצאות',
        'loading-more-results' => 'טוען עוד תוצאות…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.he.php";
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
        'dashboard' => 'לוח בקרה',
        'detail' => '%entity_as_string%',
        'edit' => 'עריכת %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'יצירת %entity_label_singular%',
        'exception' => 'שגיאה|שגיאות',
    ],

    'datagrid' => [
        'hidden_results' => 'חלק מהתוצאות לא יכולות להיות מוצגות, כי אין לך מספיק הרשאות.',
        'no_results' => 'לא נמצאו תוצאות.',
    ],

    'paginator' => [
        'first' => 'ראשון',
        'previous' => 'הקודם',
        'next' => 'הבא',
        'last' => 'אחרון',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> מתוך <strong>%results%</strong>',
        'results' => '{0} אין תוצאות|{1} <strong>1</strong> תוצאה|]1,Inf] <strong>%count%</strong> תוצאות',
    ],

    'label' => [
        'true' => 'כן',
        'false' => 'לא',
        'empty' => 'ריק',
        'null' => 'Null',
        'object' => 'אובייקט PHP',
        'inaccessible' => 'לא נגיש',
        'inaccessible.explanation' => 'שיטת \"גטר\" לא קיימת לשדה זה, או שהשדה לא מוגדר כציבורי',
        'form.empty_value' => 'ריק',
    ],

    'field' => [
        'code_editor.view_code' => 'הצג קוד',
        'text_editor.view_content' => 'הצג תוכן',
    ],

    'action' => [
        'entity_actions' => 'פעולות',
        'new' => 'הוסף %entity_label_singular%',
        'search' => 'חיפוש',
        'detail' => 'הצג',
        'edit' => 'עריכה',
        'delete' => 'מחיקה',
        'cancel' => 'ביטול',
        'index' => 'בחזרה לרשימה',
        'deselect' => 'ביטול בחירה',
        'add_new_item' => 'הוסף פריט חדש',
        'remove_item' => 'מחק פריט',
        'choose_file' => 'בחר קובץ',
        'close' => 'סגור',
        'create' => 'צור',
        'create_and_add_another' => 'צור והוסף חדש',
        'create_and_continue' => 'צור והמשך לערוך',
        'save' => 'שמור שינויים',
        'save_and_continue' => 'שמור והמשך עריכה',
    ],

    'batch_action_modal' => [
        'title' => 'הנך מתכוון להחיל פעולת \"%action_name%\" עבור הפריטים הנבחרים (%num_items%).',
        'content' => 'לא ניתן לבטל פעולה זו לאחר ביצועה.',
        'action' => 'המשך',
    ],

    'delete_modal' => [
        'title' => 'האם הנך בטוח שברצונך למחוק פריט זה?',
        'content' => 'לא ניתן לבטל פעולה זו לאחר ביצועה.',
    ],

    'filter' => [
        'title' => 'סינונים',
        'button.clear' => 'נקה',
        'button.apply' => 'החל',
        'label.is_equal_to' => 'שווה לערך',
        'label.is_not_equal_to' => 'לא שווה לערך',
        'label.is_greater_than' => 'גדול מהערך',
        'label.is_greater_than_or_equal_to' => 'גדול/שווה לערך',
        'label.is_less_than' => 'קטן מהערך',
        'label.is_less_than_or_equal_to' => 'קטן/שווה לערך',
        'label.is_between' => 'בין',
        'label.contains' => 'מכיל',
        'label.not_contains' => 'לא מכיל',
        'label.starts_with' => 'מתחיל עם',
        'label.ends_with' => 'מסתיים עם',
        'label.exactly' => 'בדיוק',
        'label.not_exactly' => 'לא בדיוק',
        'label.is_same' => 'זהה',
        'label.is_not_same' => 'לא זהה',
        'label.is_after' => 'אחרי',
        'label.is_after_or_same' => 'זהה או אחרי',
        'label.is_before' => 'לפני',
        'label.is_before_or_same' => 'זהה או לפני',
    ],

    'form' => [
        'are_you_sure' => 'לא שמרת את השינויים שנעשו בטופס זה.',
        'tab.error_badge_title' => 'קלט אחד לא תקין|%count% קלטים לא תקינים',
        'slug.confirm_text' => 'אם תשנה את המזהה, זה יוכל לשבור לינקים בעמודים אחרים.',
    ],

    'user' => [
        'logged_in_as' => 'מחובר בתור',
        'unnamed' => 'משתמש ללא שם',
        'anonymous' => 'משתמש אנונימי',
        'sign_out' => 'התנתקות',
        'exit_impersonation' => 'יציאה ממצב התחזות',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'תצוגה',
            'light' => 'בהיר',
            'dark' => 'חשוך',
            'auto' => 'אוטומטי',
        ],
        'locale' => 'שפה',
    ],

    'login_page' => [
        'username' => 'שם משתמש',
        'password' => 'סיסמה',
        'sign_in' => 'התחבר',
        'forgot_password' => 'שכחת סיסמה?',
        'remember_me' => 'זכור אותי',
    ],

    'exception' => [
        'entity_not_found' => 'פריט זה כבר לא קיים.',
        'entity_remove' => 'פריט זה לא יכול להימחק, כיוון שפריטים אחרים תלויים בו.',
        'forbidden_action' => 'הפעולה המתבקשת לא יכולה להתבצע עבור פריט זה.',
        'insufficient_entity_permission' => 'אין לך הרשאה לגשת לפריט זה.',
    ],

    'autocomplete' => [
        'no-results-found' => 'לא נמצאו תוצאות',
        'no-more-results' => 'אין עוד תוצאות',
        'loading-more-results' => 'טוען עוד תוצאות…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.he.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.he.php");
    }
}