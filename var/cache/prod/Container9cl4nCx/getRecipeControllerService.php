<?php

namespace Container9cl4nCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecipeControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\RecipeController' shared autowired service.
     *
     * @return \App\Controller\RecipeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RecipeController'] = $instance = new \App\Controller\RecipeController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\RecipeController', $container));

        return $instance;
    }
}
