<?php

namespace Container9cl4nCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMentionsControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MentionsController' shared autowired service.
     *
     * @return \App\Controller\MentionsController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MentionsController'] = $instance = new \App\Controller\MentionsController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\MentionsController', $container));

        return $instance;
    }
}
