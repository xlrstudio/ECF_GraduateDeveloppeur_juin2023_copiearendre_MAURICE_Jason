<?php

namespace ContainerK0q7Nzs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C35TpVCService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.C35TpVC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C35TpVC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'markRepository' => ['privates', '.errored.CA7B_im', NULL, 'Cannot determine controller argument for "App\\Controller\\RecipeController::show()": the $markRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\MarkRepository".'],
            'recipe' => ['privates', '.errored..service_locator.C35TpVC.App\\Entity\\Recipe', NULL, 'Cannot autowire service ".service_locator.C35TpVC": it needs an instance of "App\\Entity\\Recipe" but this type has been excluded in "config/services.yaml".'],
        ], [
            'manager' => '?',
            'markRepository' => '?',
            'recipe' => 'App\\Entity\\Recipe',
        ]);
    }
}
