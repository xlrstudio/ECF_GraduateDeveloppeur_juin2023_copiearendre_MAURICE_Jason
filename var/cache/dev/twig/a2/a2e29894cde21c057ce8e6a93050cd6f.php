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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.php */
class __TwigTemplate_5f239bca1be1bf76ad3ddca74e2f3a8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'Kontrol Paneli',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular% Düzenle',
        'index' => '%entity_label_plural%',
        'new' => 'Oluştur : %entity_label_singular%',
        'exception' => 'Hata|Hatalar',
    ],

    'datagrid' => [
        'hidden_results' => 'Yeterli izniniz olmadığı için bazı sonuçlar görüntülenemiyor',
        'no_results' => 'Sonuç bulunamadı.',
    ],

    'paginator' => [
        'first' => 'İlk',
        'previous' => 'Önceki',
        'next' => 'Sonraki',
        'last' => 'Son',
        'counter' => '<strong>%results%</strong> öğeden <strong>%start%</strong> - <strong>%end%</strong> arası',
        'results' => '{0} Sonuç yok|{1} <strong>1</strong> sonuç|]1,Inf] <strong>%count%</strong> sonuç',
    ],

    'label' => [
        'true' => 'Evet',
        'false' => 'Hayır',
        'empty' => 'Boş',
        'null' => 'Boş',
        'object' => 'PHP Objesi',
        'inaccessible' => 'Erişilemez',
        'inaccessible.explanation' => 'Özelliğin getter methodu tanımlanmamış veya özellik açık değil',
        'form.empty_value' => 'Boş',
    ],

    'field' => [
        'code_editor.view_code' => 'Kodu görüntüle',
        'text_editor.view_content' => 'İçeriği görüntüle',
    ],

    'action' => [
        'entity_actions' => 'İşlemler',
        'new' => '%entity_label_singular% Oluştur',
        'search' => 'Ara',
        'detail' => 'Göster',
        'edit' => 'Düzenle',
        'delete' => 'Sil',
        'cancel' => 'İptal',
        'index' => 'Listeye dön',
        'deselect' => 'Seçimi bırak',
        'add_new_item' => 'Yeni öğe ekle',
        'remove_item' => 'Öğeyi sil',
        'choose_file' => 'Dosya seç',
        'close' => 'Kapat',
        'create' => 'Oluştur',
        'create_and_add_another' => 'Oluşturup, başka ekle',
        'create_and_continue' => 'Oluştur ve düzenlemeye devam et',
        'save' => 'Kaydet',
        'save_and_continue' => 'Kaydet ve düzenlemeye devam et',
    ],

    'batch_action_modal' => [
        'title' => 'Seçili öğeleri değiştirmek istediğinize emin misiniz?',
        'content' => 'Bu işlem geri alınamaz.',
        'action' => 'İlerle',
    ],

    'delete_modal' => [
        'title' => 'Bu öğeyi silmek istediğinize emin misiniz?',
        'content' => 'Bu işlem geri alınamaz.',
    ],

    'filter' => [
        'title' => 'Filtreler',
        'button.clear' => 'Temizle',
        'button.apply' => 'Uygula',
        'label.is_equal_to' => 'Eşittir',
        'label.is_not_equal_to' => 'Eşit değildir',
        'label.is_greater_than' => 'Büyüktür',
        'label.is_greater_than_or_equal_to' => 'Büyüktür veya eşittir',
        'label.is_less_than' => 'Küçüktür',
        'label.is_less_than_or_equal_to' => 'Küçüktür veya eşittir',
        'label.is_between' => 'arasında',
        'label.contains' => 'Metin şunları içeriyor',
        'label.not_contains' => 'Metin şunları içermiyor',
        'label.starts_with' => 'Metin şununla başlıyor',
        'label.ends_with' => 'Metin şununla bitiyor',
        'label.exactly' => 'Metin aynı',
        'label.not_exactly' => 'Metin aynı değil',
        'label.is_same' => 'Aynı',
        'label.is_not_same' => 'Aynı değil',
        'label.is_after' => 'Tarihinden sonra',
        'label.is_after_or_same' => 'Tarihi ve sonrası',
        'label.is_before' => 'Tarihinden önce',
        'label.is_before_or_same' => 'Tarihi ve öncesi',
    ],

    'form' => [
        'are_you_sure' => 'Formdaki değişiklikleri kaydetmediniz.',
        'tab.error_badge_title' => 'Bir geçersiz girdi|%count% geçersiz girdi',
    ],

    'user' => [
        'logged_in_as' => 'Kullanıcı : ',
        'unnamed' => 'İsimsiz Kullanıcı',
        'anonymous' => 'Anonim Kullanıcı',
        'sign_out' => 'Çıkış',
        'exit_impersonation' => 'Canlandırma modundan çık',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Görünüş',
            'light' => 'Açık',
            'dark' => 'Koyu',
            'auto' => 'Otomatik',
        ],
        'locale' => 'Dil',
    ],

    'login_page' => [
        'username' => 'Kullanıcı adı',
        'password' => 'Şifre',
        'sign_in' => 'Giriş yap',
        'forgot_password' => 'Parolanızı mı unuttunuz?',
        'remember_me' => 'Beni hatırla',
    ],

    'exception' => [
        'entity_not_found' => 'Bu öğe artık mevcut değil.',
        'entity_remove' => 'Diğer öğeler buna bağlı olduğu için bu öğe silinemiyor.',
        'forbidden_action' => 'İstenen eylem bu öğe üzerinde gerçekleştirilemez.',
        'insufficient_entity_permission' => 'Bu öğeye erişim izniniz yok.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Sonuç bulunamadı',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Daha fazla…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.php";
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
        'dashboard' => 'Kontrol Paneli',
        'detail' => '%entity_as_string%',
        'edit' => '%entity_label_singular% Düzenle',
        'index' => '%entity_label_plural%',
        'new' => 'Oluştur : %entity_label_singular%',
        'exception' => 'Hata|Hatalar',
    ],

    'datagrid' => [
        'hidden_results' => 'Yeterli izniniz olmadığı için bazı sonuçlar görüntülenemiyor',
        'no_results' => 'Sonuç bulunamadı.',
    ],

    'paginator' => [
        'first' => 'İlk',
        'previous' => 'Önceki',
        'next' => 'Sonraki',
        'last' => 'Son',
        'counter' => '<strong>%results%</strong> öğeden <strong>%start%</strong> - <strong>%end%</strong> arası',
        'results' => '{0} Sonuç yok|{1} <strong>1</strong> sonuç|]1,Inf] <strong>%count%</strong> sonuç',
    ],

    'label' => [
        'true' => 'Evet',
        'false' => 'Hayır',
        'empty' => 'Boş',
        'null' => 'Boş',
        'object' => 'PHP Objesi',
        'inaccessible' => 'Erişilemez',
        'inaccessible.explanation' => 'Özelliğin getter methodu tanımlanmamış veya özellik açık değil',
        'form.empty_value' => 'Boş',
    ],

    'field' => [
        'code_editor.view_code' => 'Kodu görüntüle',
        'text_editor.view_content' => 'İçeriği görüntüle',
    ],

    'action' => [
        'entity_actions' => 'İşlemler',
        'new' => '%entity_label_singular% Oluştur',
        'search' => 'Ara',
        'detail' => 'Göster',
        'edit' => 'Düzenle',
        'delete' => 'Sil',
        'cancel' => 'İptal',
        'index' => 'Listeye dön',
        'deselect' => 'Seçimi bırak',
        'add_new_item' => 'Yeni öğe ekle',
        'remove_item' => 'Öğeyi sil',
        'choose_file' => 'Dosya seç',
        'close' => 'Kapat',
        'create' => 'Oluştur',
        'create_and_add_another' => 'Oluşturup, başka ekle',
        'create_and_continue' => 'Oluştur ve düzenlemeye devam et',
        'save' => 'Kaydet',
        'save_and_continue' => 'Kaydet ve düzenlemeye devam et',
    ],

    'batch_action_modal' => [
        'title' => 'Seçili öğeleri değiştirmek istediğinize emin misiniz?',
        'content' => 'Bu işlem geri alınamaz.',
        'action' => 'İlerle',
    ],

    'delete_modal' => [
        'title' => 'Bu öğeyi silmek istediğinize emin misiniz?',
        'content' => 'Bu işlem geri alınamaz.',
    ],

    'filter' => [
        'title' => 'Filtreler',
        'button.clear' => 'Temizle',
        'button.apply' => 'Uygula',
        'label.is_equal_to' => 'Eşittir',
        'label.is_not_equal_to' => 'Eşit değildir',
        'label.is_greater_than' => 'Büyüktür',
        'label.is_greater_than_or_equal_to' => 'Büyüktür veya eşittir',
        'label.is_less_than' => 'Küçüktür',
        'label.is_less_than_or_equal_to' => 'Küçüktür veya eşittir',
        'label.is_between' => 'arasında',
        'label.contains' => 'Metin şunları içeriyor',
        'label.not_contains' => 'Metin şunları içermiyor',
        'label.starts_with' => 'Metin şununla başlıyor',
        'label.ends_with' => 'Metin şununla bitiyor',
        'label.exactly' => 'Metin aynı',
        'label.not_exactly' => 'Metin aynı değil',
        'label.is_same' => 'Aynı',
        'label.is_not_same' => 'Aynı değil',
        'label.is_after' => 'Tarihinden sonra',
        'label.is_after_or_same' => 'Tarihi ve sonrası',
        'label.is_before' => 'Tarihinden önce',
        'label.is_before_or_same' => 'Tarihi ve öncesi',
    ],

    'form' => [
        'are_you_sure' => 'Formdaki değişiklikleri kaydetmediniz.',
        'tab.error_badge_title' => 'Bir geçersiz girdi|%count% geçersiz girdi',
    ],

    'user' => [
        'logged_in_as' => 'Kullanıcı : ',
        'unnamed' => 'İsimsiz Kullanıcı',
        'anonymous' => 'Anonim Kullanıcı',
        'sign_out' => 'Çıkış',
        'exit_impersonation' => 'Canlandırma modundan çık',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Görünüş',
            'light' => 'Açık',
            'dark' => 'Koyu',
            'auto' => 'Otomatik',
        ],
        'locale' => 'Dil',
    ],

    'login_page' => [
        'username' => 'Kullanıcı adı',
        'password' => 'Şifre',
        'sign_in' => 'Giriş yap',
        'forgot_password' => 'Parolanızı mı unuttunuz?',
        'remember_me' => 'Beni hatırla',
    ],

    'exception' => [
        'entity_not_found' => 'Bu öğe artık mevcut değil.',
        'entity_remove' => 'Diğer öğeler buna bağlı olduğu için bu öğe silinemiyor.',
        'forbidden_action' => 'İstenen eylem bu öğe üzerinde gerçekleştirilemez.',
        'insufficient_entity_permission' => 'Bu öğeye erişim izniniz yok.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Sonuç bulunamadı',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'Daha fazla…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.tr.php");
    }
}