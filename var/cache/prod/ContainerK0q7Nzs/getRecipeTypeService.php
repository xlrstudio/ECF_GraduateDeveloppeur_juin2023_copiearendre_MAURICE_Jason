<?php

namespace ContainerK0q7Nzs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecipeTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\RecipeType' shared autowired service.
     *
     * @return \App\Form\RecipeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\RecipeType'] = new \App\Form\RecipeType(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
