<?php

namespace ContainerXhl6yKC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\Post\CommentRepository' shared autowired service.
     *
     * @return \App\Repository\Post\CommentRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Post'.\DIRECTORY_SEPARATOR.'CommentRepository.php';

        return $container->privates['App\\Repository\\Post\\CommentRepository'] = new \App\Repository\Post\CommentRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
