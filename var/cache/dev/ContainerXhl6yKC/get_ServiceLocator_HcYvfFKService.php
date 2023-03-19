<?php

namespace ContainerXhl6yKC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HcYvfFKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hcYvfFK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hcYvfFK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'choosenUser' => ['privates', '.errored..service_locator.hcYvfFK.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.hcYvfFK": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'hasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'choosenUser' => 'App\\Entity\\User',
            'hasher' => '?',
            'manager' => '?',
        ]);
    }
}
