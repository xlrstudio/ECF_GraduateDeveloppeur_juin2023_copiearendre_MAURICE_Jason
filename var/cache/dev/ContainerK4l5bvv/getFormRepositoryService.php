<?php

namespace ContainerK4l5bvv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\FormRepository' shared autowired service.
     *
     * @return \App\Repository\FormRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'FormRepository.php';

        return $container->privates['App\\Repository\\FormRepository'] = new \App\Repository\FormRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
