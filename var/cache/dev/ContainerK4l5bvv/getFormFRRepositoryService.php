<?php

namespace ContainerK4l5bvv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormFRRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\FormFRRepository' shared autowired service.
     *
     * @return \App\Repository\FormFRRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'FormFRRepository.php';

        return $container->privates['App\\Repository\\FormFRRepository'] = new \App\Repository\FormFRRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}