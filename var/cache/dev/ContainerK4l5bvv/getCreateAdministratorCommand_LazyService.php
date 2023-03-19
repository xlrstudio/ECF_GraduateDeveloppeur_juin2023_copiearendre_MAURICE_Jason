<?php

namespace ContainerK4l5bvv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateAdministratorCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\CreateAdministratorCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\CreateAdministratorCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:create-administrator', [], 'Create an administrator', false, #[\Closure(name: 'App\\Command\\CreateAdministratorCommand')] function () use ($container): \App\Command\CreateAdministratorCommand {
            return ($container->privates['App\\Command\\CreateAdministratorCommand'] ?? $container->load('getCreateAdministratorCommandService'));
        });
    }
}
