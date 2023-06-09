<?php

namespace ContainerK4l5bvv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type', 4 => 'Symfony\\UX\\Autocomplete\\Form', 5 => 'Vich\\UploaderBundle\\Form\\Type'], [0 => 'App\\Form\\CommentType', 1 => 'App\\Form\\ContactType', 2 => 'App\\Form\\FormType', 3 => 'App\\Form\\HeureOuvertureType', 4 => 'App\\Form\\IngredientType', 5 => 'App\\Form\\MarkType', 6 => 'App\\Form\\MessageType', 7 => 'App\\Form\\RecipeType', 8 => 'App\\Form\\RegistrationType', 9 => 'App\\Form\\SearchType', 10 => 'App\\Form\\UserPasswordType', 11 => 'App\\Form\\UserProfileType', 12 => 'App\\Form\\UserType', 13 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 14 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 15 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 16 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 17 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 18 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 19 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 20 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 21 => 'Symfony\\UX\\Autocomplete\\Form\\ParentEntityAutocompleteType', 22 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 23 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\FormTypePasswordHasherExtension', 9 => 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\PasswordTypePasswordHasherExtension', 10 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension', 11 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension', 12 => 'Symfony\\UX\\Autocomplete\\Form\\AutocompleteChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
