<?php

namespace ContainerK0q7Nzs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_Autocomplete_EntityTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'ux.autocomplete.entity_type' shared service.
     *
     * @return \Symfony\UX\Autocomplete\Form\ParentEntityAutocompleteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['ux.autocomplete.entity_type'] = new \Symfony\UX\Autocomplete\Form\ParentEntityAutocompleteType(($container->services['router'] ?? $container->getRouterService()));
    }
}
