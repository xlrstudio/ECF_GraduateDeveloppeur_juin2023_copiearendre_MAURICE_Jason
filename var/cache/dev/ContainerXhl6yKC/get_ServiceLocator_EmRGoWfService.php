<?php

namespace ContainerXhl6yKC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EmRGoWfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.emRGoWf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.emRGoWf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'post' => ['privates', '.errored..service_locator.emRGoWf.App\\Entity\\Post\\Post', NULL, 'Cannot autowire service ".service_locator.emRGoWf": it needs an instance of "App\\Entity\\Post\\Post" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'post' => 'App\\Entity\\Post\\Post',
        ]);
    }
}