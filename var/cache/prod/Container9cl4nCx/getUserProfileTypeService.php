<?php

namespace Container9cl4nCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserProfileTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\UserProfileType' shared autowired service.
     *
     * @return \App\Form\UserProfileType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\UserProfileType'] = new \App\Form\UserProfileType();
    }
}