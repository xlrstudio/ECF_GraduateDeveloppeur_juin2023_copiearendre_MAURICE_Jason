<?php

namespace ContainerXhl6yKC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\MessageRepository' shared autowired service.
     *
     * @return \App\Repository\MessageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'MessageRepository.php';

        return $container->privates['App\\Repository\\MessageRepository'] = new \App\Repository\MessageRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}