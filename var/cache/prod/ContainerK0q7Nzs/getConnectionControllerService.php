<?php

namespace ContainerK0q7Nzs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectionControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ConnectionController' shared autowired service.
     *
     * @return \App\Controller\ConnectionController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ConnectionController'] = $instance = new \App\Controller\ConnectionController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\ConnectionController', $container));

        return $instance;
    }
}
