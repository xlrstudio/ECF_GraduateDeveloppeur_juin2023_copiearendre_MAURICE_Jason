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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.php */
class __TwigTemplate_4c577b6dd65c6ad305ec30f44e733de6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'Дешборд',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Створити новий %entity_label_singular%',
        'exception' => 'Помилка|Помилки',
    ],

    'datagrid' => [
        'hidden_results' => 'Деякі результати можуть не відображатися, оскільки у вас недостатньо прав',
        'no_results' => 'Нічого не знайдено.',
    ],

    'paginator' => [
        'first' => 'Перша',
        'previous' => 'Попередня',
        'next' => 'Наступна',
        'last' => 'Остання',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> з <strong>%results%</strong>',
        'results' => '{0} Немає результатів|{1} <strong>1</strong> результат|{2,3,4} <strong>%count%</strong> результати|[5,Inf] <strong>%count%</strong> результатів',
    ],

    'label' => [
        'true' => 'Так',
        'false' => 'Ні',
        'empty' => 'Порожньо',
        'null' => 'Null',
        'object' => 'PHP Об\\'єкт',
        'inaccessible' => 'Недоступно',
        'inaccessible.explanation' => 'Немає геттера для цього поля або поле не публічне',
        'form.empty_value' => 'Пусто',
    ],

    'field' => [
        'code_editor.view_code' => 'Переглянути код',
        'text_editor.view_content' => 'Переглянути вміст',
    ],

    'action' => [
        'entity_actions' => 'Дії',
        'new' => 'Створити %entity_label_singular%',
        'search' => 'Пошук',
        'detail' => 'Показати',
        'edit' => 'Редагувати',
        'delete' => 'Видалити',
        'cancel' => 'Відмінити',
        'index' => 'Повернутися до списку',
        'deselect' => 'Зняти вибір',
        'add_new_item' => 'Додати новий елемент',
        'remove_item' => 'Видалити елемент',
        'choose_file' => 'Вибрати файл',
        'close' => 'Закрити',
        'create' => 'Створити',
        'create_and_add_another' => 'Створити і додати ще',
        'create_and_continue' => 'Створити і продовжити',
        'save' => 'Зберегти',
        'save_and_continue' => 'Зберегти і продовжити',
    ],

    'batch_action_modal' => [
        'title' => 'Ви дійсно хочете змінити вибрані елементи?',
        'content' => 'Цю операцію неможна відмінити.',
        'action' => 'Продовжити',
    ],

    'delete_modal' => [
        'title' => 'Ви дійсно бажаєте видалити цей об\\'єкт?',
        'content' => 'Цю дію не можна буде відмінити.',
    ],

    'filter' => [
        'title' => 'Фільтри',
        'button.clear' => 'Очистити',
        'button.apply' => 'Застосувати',
        'label.is_equal_to' => 'рівно',
        'label.is_not_equal_to' => 'не рівно',
        'label.is_greater_than' => 'більше ніж',
        'label.is_greater_than_or_equal_to' => 'більше ніж або рівно',
        'label.is_less_than' => 'менше ніж',
        'label.is_less_than_or_equal_to' => 'менше ніж або рівно',
        'label.is_between' => 'між',
        'label.contains' => 'містить',
        'label.not_contains' => 'не містить',
        'label.starts_with' => 'починається з',
        'label.ends_with' => 'закінчується на',
        'label.exactly' => 'точно',
        'label.not_exactly' => 'не точно',
        'label.is_same' => 'так само',
        'label.is_not_same' => 'не так само',
        'label.is_after' => 'після',
        'label.is_after_or_same' => 'після або ж',
        'label.is_before' => 'до',
        'label.is_before_or_same' => 'до або ж',
    ],

    'form' => [
        'are_you_sure' => 'Ви не зберегли зроблені зміни.',
        'tab.error_badge_title' => 'Невалідне поле|Невалідних полів: %count%',
        'slug.confirm_text' => 'Якщо ви змінете текстовий ідентифікатор, ви можете зламати посилання на інших сторінках.',
    ],

    'user' => [
        'logged_in_as' => 'Ви ввійшли як',
        'unnamed' => 'Безіменний користувач',
        'anonymous' => 'Анонімний користувач',
        'sign_out' => 'Вихід',
        'exit_impersonation' => 'Вийти з-під користувача',
    ],

    'login_page' => [
        'username' => 'Логін',
        'password' => 'Пароль',
        'sign_in' => 'Увійти',
        'forgot_password' => 'Забули Пароль?',
        'remember_me' => 'Запам\\'ятати Мене',
    ],

    'exception' => [
        'entity_not_found' => 'Елемент більше недоступний.',
        'entity_remove' => 'Цей елемент не можна видалити, оскільки від нього залежать інші елементи.',
        'forbidden_action' => 'Дія не може бути виконана над цим елементом.',
        'insufficient_entity_permission' => 'У вас немає дозволу на доступ до цього елемента.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Нічого не знайдено',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Завантаження інших результатів…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.php";
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
        'dashboard' => 'Дешборд',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Створити новий %entity_label_singular%',
        'exception' => 'Помилка|Помилки',
    ],

    'datagrid' => [
        'hidden_results' => 'Деякі результати можуть не відображатися, оскільки у вас недостатньо прав',
        'no_results' => 'Нічого не знайдено.',
    ],

    'paginator' => [
        'first' => 'Перша',
        'previous' => 'Попередня',
        'next' => 'Наступна',
        'last' => 'Остання',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> з <strong>%results%</strong>',
        'results' => '{0} Немає результатів|{1} <strong>1</strong> результат|{2,3,4} <strong>%count%</strong> результати|[5,Inf] <strong>%count%</strong> результатів',
    ],

    'label' => [
        'true' => 'Так',
        'false' => 'Ні',
        'empty' => 'Порожньо',
        'null' => 'Null',
        'object' => 'PHP Об\\'єкт',
        'inaccessible' => 'Недоступно',
        'inaccessible.explanation' => 'Немає геттера для цього поля або поле не публічне',
        'form.empty_value' => 'Пусто',
    ],

    'field' => [
        'code_editor.view_code' => 'Переглянути код',
        'text_editor.view_content' => 'Переглянути вміст',
    ],

    'action' => [
        'entity_actions' => 'Дії',
        'new' => 'Створити %entity_label_singular%',
        'search' => 'Пошук',
        'detail' => 'Показати',
        'edit' => 'Редагувати',
        'delete' => 'Видалити',
        'cancel' => 'Відмінити',
        'index' => 'Повернутися до списку',
        'deselect' => 'Зняти вибір',
        'add_new_item' => 'Додати новий елемент',
        'remove_item' => 'Видалити елемент',
        'choose_file' => 'Вибрати файл',
        'close' => 'Закрити',
        'create' => 'Створити',
        'create_and_add_another' => 'Створити і додати ще',
        'create_and_continue' => 'Створити і продовжити',
        'save' => 'Зберегти',
        'save_and_continue' => 'Зберегти і продовжити',
    ],

    'batch_action_modal' => [
        'title' => 'Ви дійсно хочете змінити вибрані елементи?',
        'content' => 'Цю операцію неможна відмінити.',
        'action' => 'Продовжити',
    ],

    'delete_modal' => [
        'title' => 'Ви дійсно бажаєте видалити цей об\\'єкт?',
        'content' => 'Цю дію не можна буде відмінити.',
    ],

    'filter' => [
        'title' => 'Фільтри',
        'button.clear' => 'Очистити',
        'button.apply' => 'Застосувати',
        'label.is_equal_to' => 'рівно',
        'label.is_not_equal_to' => 'не рівно',
        'label.is_greater_than' => 'більше ніж',
        'label.is_greater_than_or_equal_to' => 'більше ніж або рівно',
        'label.is_less_than' => 'менше ніж',
        'label.is_less_than_or_equal_to' => 'менше ніж або рівно',
        'label.is_between' => 'між',
        'label.contains' => 'містить',
        'label.not_contains' => 'не містить',
        'label.starts_with' => 'починається з',
        'label.ends_with' => 'закінчується на',
        'label.exactly' => 'точно',
        'label.not_exactly' => 'не точно',
        'label.is_same' => 'так само',
        'label.is_not_same' => 'не так само',
        'label.is_after' => 'після',
        'label.is_after_or_same' => 'після або ж',
        'label.is_before' => 'до',
        'label.is_before_or_same' => 'до або ж',
    ],

    'form' => [
        'are_you_sure' => 'Ви не зберегли зроблені зміни.',
        'tab.error_badge_title' => 'Невалідне поле|Невалідних полів: %count%',
        'slug.confirm_text' => 'Якщо ви змінете текстовий ідентифікатор, ви можете зламати посилання на інших сторінках.',
    ],

    'user' => [
        'logged_in_as' => 'Ви ввійшли як',
        'unnamed' => 'Безіменний користувач',
        'anonymous' => 'Анонімний користувач',
        'sign_out' => 'Вихід',
        'exit_impersonation' => 'Вийти з-під користувача',
    ],

    'login_page' => [
        'username' => 'Логін',
        'password' => 'Пароль',
        'sign_in' => 'Увійти',
        'forgot_password' => 'Забули Пароль?',
        'remember_me' => 'Запам\\'ятати Мене',
    ],

    'exception' => [
        'entity_not_found' => 'Елемент більше недоступний.',
        'entity_remove' => 'Цей елемент не можна видалити, оскільки від нього залежать інші елементи.',
        'forbidden_action' => 'Дія не може бути виконана над цим елементом.',
        'insufficient_entity_permission' => 'У вас немає дозволу на доступ до цього елемента.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Нічого не знайдено',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Завантаження інших результатів…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.uk.php");
    }
}
