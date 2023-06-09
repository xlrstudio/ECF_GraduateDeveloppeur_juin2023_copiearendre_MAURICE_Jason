<?php

namespace ContainerUtRs4BO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ppd4XzJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ppd4XzJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ppd4XzJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\DashboardCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\DashboardCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\DashboardCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\DashboardCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\DashboardCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\DashboardCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\DashboardCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\DashboardCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\DashboardCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\DashboardCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\DashboardCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\DashboardCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\DashboardCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\DashboardCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FormCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\FormCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\FormCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\FormCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\FormCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\FormCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\FormCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FormCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FormCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\FormCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FormCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FormCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FormCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FormCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\MessageCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\MessageCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\MessageCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\MessageCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\MessageCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\MessageCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\MessageCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\MessageCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\MessageCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\MessageCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\MessageCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\MessageCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\MessageCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\MessageCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\FindUserController::find' => ['privates', '.service_locator.bk3LMfn', 'get_ServiceLocator_Bk3LMfnService', true],
            'App\\Controller\\FormController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RegistrationController::index' => ['privates', '.service_locator.Mhqdd2r', 'get_ServiceLocator_Mhqdd2rService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserregistrationController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ValidationController::validation' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\DashboardCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\DashboardCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\DashboardCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\DashboardCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\DashboardCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\DashboardCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\DashboardCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\DashboardCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\DashboardCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\DashboardCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\DashboardCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\DashboardCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\DashboardCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\DashboardCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\DashboardCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FormCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\FormCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\FormCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\FormCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\FormCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\FormCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\FormCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FormCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FormCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\FormCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FormCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FormCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FormCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FormCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FormCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\MessageCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\MessageCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\MessageCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\MessageCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\MessageCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\MessageCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\MessageCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\MessageCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\MessageCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\MessageCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\MessageCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\MessageCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\MessageCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\MessageCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\MessageCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\FindUserController:find' => ['privates', '.service_locator.bk3LMfn', 'get_ServiceLocator_Bk3LMfnService', true],
            'App\\Controller\\FormController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RegistrationController:index' => ['privates', '.service_locator.Mhqdd2r', 'get_ServiceLocator_Mhqdd2rService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserregistrationController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ValidationController:validation' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::delete' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::detail' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::edit' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::index' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::new' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\DashboardCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\FormCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\FormCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\FormCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\FormCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\FormCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\FormCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\FormCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\FormCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\FormCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\FormCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\FormCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\FormCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\FormCrudController::delete' => '?',
            'App\\Controller\\Admin\\FormCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\FormCrudController::detail' => '?',
            'App\\Controller\\Admin\\FormCrudController::edit' => '?',
            'App\\Controller\\Admin\\FormCrudController::index' => '?',
            'App\\Controller\\Admin\\FormCrudController::new' => '?',
            'App\\Controller\\Admin\\FormCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\FormCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\FormCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\MessageCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\MessageCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\MessageCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\MessageCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\MessageCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\MessageCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\MessageCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\MessageCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\MessageCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\MessageCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\MessageCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\MessageCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\MessageCrudController::delete' => '?',
            'App\\Controller\\Admin\\MessageCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\MessageCrudController::detail' => '?',
            'App\\Controller\\Admin\\MessageCrudController::edit' => '?',
            'App\\Controller\\Admin\\MessageCrudController::index' => '?',
            'App\\Controller\\Admin\\MessageCrudController::new' => '?',
            'App\\Controller\\Admin\\MessageCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\MessageCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\MessageCrudController::updateEntity' => '?',
            'App\\Controller\\FindUserController::find' => '?',
            'App\\Controller\\FormController::index' => '?',
            'App\\Controller\\RegistrationController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserregistrationController::index' => '?',
            'App\\Controller\\ValidationController::validation' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:delete' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:detail' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:edit' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:index' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:new' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\DashboardCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\FormCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\FormCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\FormCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\FormCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\FormCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\FormCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\FormCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\FormCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\FormCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\FormCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\FormCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\FormCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\FormCrudController:delete' => '?',
            'App\\Controller\\Admin\\FormCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\FormCrudController:detail' => '?',
            'App\\Controller\\Admin\\FormCrudController:edit' => '?',
            'App\\Controller\\Admin\\FormCrudController:index' => '?',
            'App\\Controller\\Admin\\FormCrudController:new' => '?',
            'App\\Controller\\Admin\\FormCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\FormCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\FormCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\MessageCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\MessageCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\MessageCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\MessageCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\MessageCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\MessageCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\MessageCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\MessageCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\MessageCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\MessageCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\MessageCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\MessageCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\MessageCrudController:delete' => '?',
            'App\\Controller\\Admin\\MessageCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\MessageCrudController:detail' => '?',
            'App\\Controller\\Admin\\MessageCrudController:edit' => '?',
            'App\\Controller\\Admin\\MessageCrudController:index' => '?',
            'App\\Controller\\Admin\\MessageCrudController:new' => '?',
            'App\\Controller\\Admin\\MessageCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\MessageCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\MessageCrudController:updateEntity' => '?',
            'App\\Controller\\FindUserController:find' => '?',
            'App\\Controller\\FormController:index' => '?',
            'App\\Controller\\RegistrationController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserregistrationController:index' => '?',
            'App\\Controller\\ValidationController:validation' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
