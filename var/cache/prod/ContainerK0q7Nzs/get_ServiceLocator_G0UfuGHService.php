<?php

namespace ContainerK0q7Nzs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G0UfuGHService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.G0UfuGH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G0UfuGH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ingredient' => ['privates', '.errored..service_locator.G0UfuGH.App\\Entity\\Ingredient', NULL, 'Cannot autowire service ".service_locator.G0UfuGH": it needs an instance of "App\\Entity\\Ingredient" but this type has been excluded in "config/services.yaml".'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'ingredient' => 'App\\Entity\\Ingredient',
            'manager' => '?',
        ]);
    }
}
