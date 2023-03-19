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

/* easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.php */
class __TwigTemplate_da7f5cccdcf3d68c29a0fa1bbe1f1ac4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.php"));

        // line 1
        echo "<?php

return [
    'page_title' => [
        'dashboard' => 'Inicio',
        'detail' => '%entity_as_string%',
        'edit' => 'Modificar %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Crear %entity_label_singular%',
        'exception' => 'Error|Errores',
    ],

    'datagrid' => [
        'hidden_results' => 'Algunos resultados no se pueden mostrar porque no tienes suficientes permisos',
        'no_results' => 'No se han encontrado resultados.',
    ],

    'paginator' => [
        'first' => 'Primera',
        'previous' => 'Anterior',
        'next' => 'Siguiente',
        'last' => 'Última',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
        'results' => '{0} Ningún resultado|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    ],

    'label' => [
        'true' => 'Si',
        'false' => 'No',
        'empty' => 'Vacío',
        'null' => 'Nulo',
        'object' => 'Objecto PHP',
        'inaccessible' => 'Inaccesible',
        'inaccessible.explanation' => 'Este campo no tiene un método getter o la propiedad asociada no es pública',
        'form.empty_value' => 'Ninguno',
    ],

    'field' => [
        'code_editor.view_code' => 'Ver código',
        'text_editor.view_content' => 'Ver contenido',
    ],

    'action' => [
        'entity_actions' => 'Acciones',
        'new' => 'Crear %entity_label_singular%',
        'search' => 'Buscar',
        'detail' => 'Ver',
        'edit' => 'Modificar',
        'delete' => 'Borrar',
        'cancel' => 'Cancelar',
        'index' => 'Volver al listado',
        'deselect' => 'Deseleccionar',
        'add_new_item' => 'Añadir un elemento',
        'remove_item' => 'Eliminar este elemento',
        'choose_file' => 'Seleccionar archivo',
        'close' => 'Cerrar',
        'create' => 'Guardar',
        'create_and_add_another' => 'Crear y añadir otro',
        'create_and_continue' => 'Crear y seguir editando',
        'save' => 'Guardar cambios',
        'save_and_continue' => 'Guardar y seguir editando',
    ],

    'batch_action_modal' => [
        'title' => 'Se va a aplicar la acción \"%action_name%\" a %num_items% elemento(s).',
        'content' => 'Esta acción no se puede deshacer.',
        'action' => 'Continuar',
    ],

    'delete_modal' => [
        'title' => '¿Realmente quieres borrar este elemento?',
        'content' => 'Esta acción no se puede deshacer.',
    ],

    'filter' => [
        'title' => 'Filtros',
        'button.clear' => 'Borrar',
        'button.apply' => 'Aplicar',
        'label.is_equal_to' => 'es igual a',
        'label.is_not_equal_to' => 'no es igual a',
        'label.is_greater_than' => 'es mayor que',
        'label.is_greater_than_or_equal_to' => 'es mayor o igual que',
        'label.is_less_than' => 'es menor que',
        'label.is_less_than_or_equal_to' => 'es menor o igual que',
        'label.is_between' => 'está entre',
        'label.contains' => 'contiene',
        'label.not_contains' => 'no contiene',
        'label.starts_with' => 'empieza por',
        'label.ends_with' => 'acaba en',
        'label.exactly' => 'es exactamente',
        'label.not_exactly' => 'no es exactamente',
        'label.is_same' => 'es igual a',
        'label.is_not_same' => 'no es igual a',
        'label.is_after' => 'es posterior a',
        'label.is_after_or_same' => 'es posterior o igual a',
        'label.is_before' => 'es anterior a',
        'label.is_before_or_same' => 'es anterior o igual a',
    ],

    'form' => [
        'are_you_sure' => 'No has guardado los cambios realizados en este formulario.',
        'tab.error_badge_title' => 'Hay un campo inválido|Hay %count% campos inválidos',
        'slug.confirm_text' => 'Si cambias el slug, puedes romper enlaces en otras páginas.',
    ],

    'user' => [
        'logged_in_as' => 'Conectado/a como',
        'unnamed' => 'Usuario sin nombre',
        'anonymous' => 'Usuario anónimo',
        'sign_out' => 'Cerrar sesión',
        'exit_impersonation' => 'Terminar impersonación',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Aspecto',
            'light' => 'Claro',
            'dark' => 'Oscuro',
            'auto' => 'Automático',
        ],
        'locale' => 'Idioma',
    ],

    'login_page' => [
        'username' => 'Nombre de usuario',
        'password' => 'Contraseña',
        'sign_in' => 'Iniciar sesión',
        'forgot_password' => '¿Olvidaste tu contraseña?',
        'remember_me' => 'Recuérdame',
    ],

    'exception' => [
        'entity_not_found' => 'Este elemento ya no está disponible.',
        'entity_remove' => 'Este elemento no se puede eliminar porque otros elementos dependen de él.',
        'forbidden_action' => 'No se puede realizar la acción solicitada en este elemento.',
        'insufficient_entity_permission' => 'No tienes permiso para acceder a este elemento.',
    ],

    'autocomplete' => [
        'no-results-found' => 'No se han encontrado resultados',
        'no-more-results' => 'No hay más resultados',
        'loading-more-results' => 'Cargando más resultados…',
    ],
];
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.php";
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
        'dashboard' => 'Inicio',
        'detail' => '%entity_as_string%',
        'edit' => 'Modificar %entity_label_singular%',
        'index' => '%entity_label_plural%',
        'new' => 'Crear %entity_label_singular%',
        'exception' => 'Error|Errores',
    ],

    'datagrid' => [
        'hidden_results' => 'Algunos resultados no se pueden mostrar porque no tienes suficientes permisos',
        'no_results' => 'No se han encontrado resultados.',
    ],

    'paginator' => [
        'first' => 'Primera',
        'previous' => 'Anterior',
        'next' => 'Siguiente',
        'last' => 'Última',
        'counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
        'results' => '{0} Ningún resultado|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    ],

    'label' => [
        'true' => 'Si',
        'false' => 'No',
        'empty' => 'Vacío',
        'null' => 'Nulo',
        'object' => 'Objecto PHP',
        'inaccessible' => 'Inaccesible',
        'inaccessible.explanation' => 'Este campo no tiene un método getter o la propiedad asociada no es pública',
        'form.empty_value' => 'Ninguno',
    ],

    'field' => [
        'code_editor.view_code' => 'Ver código',
        'text_editor.view_content' => 'Ver contenido',
    ],

    'action' => [
        'entity_actions' => 'Acciones',
        'new' => 'Crear %entity_label_singular%',
        'search' => 'Buscar',
        'detail' => 'Ver',
        'edit' => 'Modificar',
        'delete' => 'Borrar',
        'cancel' => 'Cancelar',
        'index' => 'Volver al listado',
        'deselect' => 'Deseleccionar',
        'add_new_item' => 'Añadir un elemento',
        'remove_item' => 'Eliminar este elemento',
        'choose_file' => 'Seleccionar archivo',
        'close' => 'Cerrar',
        'create' => 'Guardar',
        'create_and_add_another' => 'Crear y añadir otro',
        'create_and_continue' => 'Crear y seguir editando',
        'save' => 'Guardar cambios',
        'save_and_continue' => 'Guardar y seguir editando',
    ],

    'batch_action_modal' => [
        'title' => 'Se va a aplicar la acción \"%action_name%\" a %num_items% elemento(s).',
        'content' => 'Esta acción no se puede deshacer.',
        'action' => 'Continuar',
    ],

    'delete_modal' => [
        'title' => '¿Realmente quieres borrar este elemento?',
        'content' => 'Esta acción no se puede deshacer.',
    ],

    'filter' => [
        'title' => 'Filtros',
        'button.clear' => 'Borrar',
        'button.apply' => 'Aplicar',
        'label.is_equal_to' => 'es igual a',
        'label.is_not_equal_to' => 'no es igual a',
        'label.is_greater_than' => 'es mayor que',
        'label.is_greater_than_or_equal_to' => 'es mayor o igual que',
        'label.is_less_than' => 'es menor que',
        'label.is_less_than_or_equal_to' => 'es menor o igual que',
        'label.is_between' => 'está entre',
        'label.contains' => 'contiene',
        'label.not_contains' => 'no contiene',
        'label.starts_with' => 'empieza por',
        'label.ends_with' => 'acaba en',
        'label.exactly' => 'es exactamente',
        'label.not_exactly' => 'no es exactamente',
        'label.is_same' => 'es igual a',
        'label.is_not_same' => 'no es igual a',
        'label.is_after' => 'es posterior a',
        'label.is_after_or_same' => 'es posterior o igual a',
        'label.is_before' => 'es anterior a',
        'label.is_before_or_same' => 'es anterior o igual a',
    ],

    'form' => [
        'are_you_sure' => 'No has guardado los cambios realizados en este formulario.',
        'tab.error_badge_title' => 'Hay un campo inválido|Hay %count% campos inválidos',
        'slug.confirm_text' => 'Si cambias el slug, puedes romper enlaces en otras páginas.',
    ],

    'user' => [
        'logged_in_as' => 'Conectado/a como',
        'unnamed' => 'Usuario sin nombre',
        'anonymous' => 'Usuario anónimo',
        'sign_out' => 'Cerrar sesión',
        'exit_impersonation' => 'Terminar impersonación',
    ],

    'settings' => [
        'appearance' => [
            'label' => 'Aspecto',
            'light' => 'Claro',
            'dark' => 'Oscuro',
            'auto' => 'Automático',
        ],
        'locale' => 'Idioma',
    ],

    'login_page' => [
        'username' => 'Nombre de usuario',
        'password' => 'Contraseña',
        'sign_in' => 'Iniciar sesión',
        'forgot_password' => '¿Olvidaste tu contraseña?',
        'remember_me' => 'Recuérdame',
    ],

    'exception' => [
        'entity_not_found' => 'Este elemento ya no está disponible.',
        'entity_remove' => 'Este elemento no se puede eliminar porque otros elementos dependen de él.',
        'forbidden_action' => 'No se puede realizar la acción solicitada en este elemento.',
        'insufficient_entity_permission' => 'No tienes permiso para acceder a este elemento.',
    ],

    'autocomplete' => [
        'no-results-found' => 'No se han encontrado resultados',
        'no-more-results' => 'No hay más resultados',
        'loading-more-results' => 'Cargando más resultados…',
    ],
];
", "easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Resources\\translations\\EasyAdminBundle.es.php");
    }
}
