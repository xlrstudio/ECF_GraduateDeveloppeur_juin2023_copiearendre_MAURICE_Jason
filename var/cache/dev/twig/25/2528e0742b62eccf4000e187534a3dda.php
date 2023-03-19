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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.php */
class __TwigTemplate_f1141195e9e311bb737acbed6191d47e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        // 'dashboard' => '',
        'detail' => '%entity_as_string%',
        'edit' => 'Editar %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Adicionar %entity_label_singular%',
        'exception' => 'Erro|Erros',
    ],

    'datagrid' => [
        // 'hidden_results' => '',
        'no_results' => 'Nenhum resultado encontrado.',
    ],

    'paginator' => [
        'first' => 'Primeira',
        'previous' => 'Anterior',
        'next' => 'Próxima',
        'last' => 'Última',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
        'results' => '{0} Sem resultados|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    ],

    'label' => [
        'true' => 'Sim',
        'false' => 'Não',
        'empty' => 'Vazio',
        'null' => 'Null',
        'object' => 'Objeto PHP',
        'inaccessible' => 'Inacessível',
        'inaccessible.explanation' => 'Não existe um método getter para esse campo ou a propriedade não é pública',
        'form.empty_value' => 'Nenhum',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Ações',
        'new' => 'Adicionar %entity_label_singular%',
        'search' => 'Pesquisar',
        'detail' => 'Exibir',
        'edit' => 'Editar',
        'delete' => 'Excluir',
        'cancel' => 'Cancelar',
        'index' => 'Voltar para a lista',
        'deselect' => 'Remover seleccção',
        'add_new_item' => 'Adicionar um novo item',
        'remove_item' => 'Remover o item',
        'choose_file' => 'Escolher ficheiro',
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
        'title' => 'Você realmente deseja excluir esse item?',
        'content' => 'Não há como desfazer essa operação.',
    ],

    'filter' => [
        'title' => 'Filtros',
        'button.clear' => 'Limpar',
        'button.apply' => 'Aplicar',
        'label.is_equal_to' => 'é igual a',
        'label.is_not_equal_to' => 'é diferente de',
        'label.is_greater_than' => 'é maior que',
        'label.is_greater_than_or_equal_to' => 'é maior ou igual a',
        'label.is_less_than' => 'é menor que',
        'label.is_less_than_or_equal_to' => 'é menor ou igual a',
        'label.is_between' => 'entre',
        'label.contains' => 'contém',
        'label.not_contains' => 'não contém',
        'label.starts_with' => 'começa por',
        'label.ends_with' => 'acaba em',
        'label.exactly' => 'é igual a',
        'label.not_exactly' => 'é diferente de',
        'label.is_same' => 'é igual a',
        'label.is_not_same' => 'é diferente de',
        'label.is_after' => 'depois de',
        'label.is_after_or_same' => 'depois ou igual a',
        'label.is_before' => 'antes de',
        'label.is_before_or_same' => 'antes ou igual a',
    ],

    'form' => [
        'are_you_sure' => 'Você não salvou as alterações feitas nesse formulário.',
        // 'tab.error_badge_title' => '',
    ],

    'user' => [
        'logged_in_as' => 'Logado como',
        'unnamed' => 'Usuário sem nome',
        'anonymous' => 'Usuário anônimo',
        'sign_out' => 'Sair',
        // 'exit_impersonation' => '',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Apresentação',
            'light' => 'Tons claros',
            'dark' => 'Tons escuros',
            'auto' => 'Automática',
        ],
        'locale' => 'Linguagem',
    ],

    'login_page' => [
        'username' => 'Usuário',
        'password' => 'Senha',
        'sign_in' => 'Entrar',
        'forgot_password' => 'Esqueceu a sua palavra-passe?',
        'remember_me' => 'Lembrar-me',
    ],

    'exception' => [
        'entity_not_found' => 'Este item não está mais disponível.',
        'entity_remove' => 'Esse item não pode ser excluído porque outros itens dependem dele.',
        'forbidden_action' => 'A ação requisitada não pode ser executada nesse item.',
        // 'insufficient_entity_permission' => 'You don't have permission to access this item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Sem resultados',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'A carregar mais resultados…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.php";
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
        'edit' => 'Editar %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Adicionar %entity_label_singular%',
        'exception' => 'Erro|Erros',
    ],

    'datagrid' => [
        // 'hidden_results' => '',
        'no_results' => 'Nenhum resultado encontrado.',
    ],

    'paginator' => [
        'first' => 'Primeira',
        'previous' => 'Anterior',
        'next' => 'Próxima',
        'last' => 'Última',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
        'results' => '{0} Sem resultados|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    ],

    'label' => [
        'true' => 'Sim',
        'false' => 'Não',
        'empty' => 'Vazio',
        'null' => 'Null',
        'object' => 'Objeto PHP',
        'inaccessible' => 'Inacessível',
        'inaccessible.explanation' => 'Não existe um método getter para esse campo ou a propriedade não é pública',
        'form.empty_value' => 'Nenhum',
    ],

    'field' => [
        // 'code_editor.view_code' => '',
        // 'text_editor.view_content' => '',
    ],

    'action' => [
        'entity_actions' => 'Ações',
        'new' => 'Adicionar %entity_label_singular%',
        'search' => 'Pesquisar',
        'detail' => 'Exibir',
        'edit' => 'Editar',
        'delete' => 'Excluir',
        'cancel' => 'Cancelar',
        'index' => 'Voltar para a lista',
        'deselect' => 'Remover seleccção',
        'add_new_item' => 'Adicionar um novo item',
        'remove_item' => 'Remover o item',
        'choose_file' => 'Escolher ficheiro',
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
        'title' => 'Você realmente deseja excluir esse item?',
        'content' => 'Não há como desfazer essa operação.',
    ],

    'filter' => [
        'title' => 'Filtros',
        'button.clear' => 'Limpar',
        'button.apply' => 'Aplicar',
        'label.is_equal_to' => 'é igual a',
        'label.is_not_equal_to' => 'é diferente de',
        'label.is_greater_than' => 'é maior que',
        'label.is_greater_than_or_equal_to' => 'é maior ou igual a',
        'label.is_less_than' => 'é menor que',
        'label.is_less_than_or_equal_to' => 'é menor ou igual a',
        'label.is_between' => 'entre',
        'label.contains' => 'contém',
        'label.not_contains' => 'não contém',
        'label.starts_with' => 'começa por',
        'label.ends_with' => 'acaba em',
        'label.exactly' => 'é igual a',
        'label.not_exactly' => 'é diferente de',
        'label.is_same' => 'é igual a',
        'label.is_not_same' => 'é diferente de',
        'label.is_after' => 'depois de',
        'label.is_after_or_same' => 'depois ou igual a',
        'label.is_before' => 'antes de',
        'label.is_before_or_same' => 'antes ou igual a',
    ],

    'form' => [
        'are_you_sure' => 'Você não salvou as alterações feitas nesse formulário.',
        // 'tab.error_badge_title' => '',
    ],

    'user' => [
        'logged_in_as' => 'Logado como',
        'unnamed' => 'Usuário sem nome',
        'anonymous' => 'Usuário anônimo',
        'sign_out' => 'Sair',
        // 'exit_impersonation' => '',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Apresentação',
            'light' => 'Tons claros',
            'dark' => 'Tons escuros',
            'auto' => 'Automática',
        ],
        'locale' => 'Linguagem',
    ],

    'login_page' => [
        'username' => 'Usuário',
        'password' => 'Senha',
        'sign_in' => 'Entrar',
        'forgot_password' => 'Esqueceu a sua palavra-passe?',
        'remember_me' => 'Lembrar-me',
    ],

    'exception' => [
        'entity_not_found' => 'Este item não está mais disponível.',
        'entity_remove' => 'Esse item não pode ser excluído porque outros itens dependem dele.',
        'forbidden_action' => 'A ação requisitada não pode ser executada nesse item.',
        // 'insufficient_entity_permission' => 'You don't have permission to access this item.',
    ],

    'autocomplete' => [
        'no-results-found' => 'Sem resultados',
        // 'no-more-results' => 'No more results',
        'loading-more-results' => 'A carregar mais resultados…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.pt.php");
    }
}
