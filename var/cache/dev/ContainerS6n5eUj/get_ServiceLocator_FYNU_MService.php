<?php

namespace ContainerS6n5eUj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FYNU_MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._fYNU.M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._fYNU.M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AuthController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\CompanyController::delete' => ['privates', '.service_locator.yJ_47WL', 'get_ServiceLocator_YJ47WLService', true],
            'App\\Controller\\CompanyController::edit' => ['privates', '.service_locator.yJ_47WL', 'get_ServiceLocator_YJ47WLService', true],
            'App\\Controller\\CompanyController::index' => ['privates', '.service_locator.cxUIR7o', 'get_ServiceLocator_CxUIR7oService', true],
            'App\\Controller\\CompanyController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CompanyController::show' => ['privates', '.service_locator.9wNU0CU', 'get_ServiceLocator_9wNU0CUService', true],
            'App\\Controller\\LangagesController::delete' => ['privates', '.service_locator.FJYVMm_', 'get_ServiceLocator_FJYVMmService', true],
            'App\\Controller\\LangagesController::edit' => ['privates', '.service_locator.FJYVMm_', 'get_ServiceLocator_FJYVMmService', true],
            'App\\Controller\\LangagesController::index' => ['privates', '.service_locator.K35lLDo', 'get_ServiceLocator_K35lLDoService', true],
            'App\\Controller\\LangagesController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LangagesController::show' => ['privates', '.service_locator.PUqINFa', 'get_ServiceLocator_PUqINFaService', true],
            'App\\Controller\\PosteController::delete' => ['privates', '.service_locator.AYXIbAf', 'get_ServiceLocator_AYXIbAfService', true],
            'App\\Controller\\PosteController::edit' => ['privates', '.service_locator.AYXIbAf', 'get_ServiceLocator_AYXIbAfService', true],
            'App\\Controller\\PosteController::index' => ['privates', '.service_locator.ePyOHv4', 'get_ServiceLocator_EPyOHv4Service', true],
            'App\\Controller\\PosteController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PosteController::show' => ['privates', '.service_locator.G6I1Lzy', 'get_ServiceLocator_G6I1LzyService', true],
            'App\\Controller\\PostesController::delete' => ['privates', '.service_locator.Fai6B_W', 'get_ServiceLocator_Fai6BWService', true],
            'App\\Controller\\PostesController::edit' => ['privates', '.service_locator.Fai6B_W', 'get_ServiceLocator_Fai6BWService', true],
            'App\\Controller\\PostesController::index' => ['privates', '.service_locator.thXBizQ', 'get_ServiceLocator_ThXBizQService', true],
            'App\\Controller\\PostesController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PostesController::show' => ['privates', '.service_locator.hI9ENSs', 'get_ServiceLocator_HI9ENSsService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.jpvOrpT', 'get_ServiceLocator_JpvOrpTService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AuthController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\CompanyController:delete' => ['privates', '.service_locator.yJ_47WL', 'get_ServiceLocator_YJ47WLService', true],
            'App\\Controller\\CompanyController:edit' => ['privates', '.service_locator.yJ_47WL', 'get_ServiceLocator_YJ47WLService', true],
            'App\\Controller\\CompanyController:index' => ['privates', '.service_locator.cxUIR7o', 'get_ServiceLocator_CxUIR7oService', true],
            'App\\Controller\\CompanyController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CompanyController:show' => ['privates', '.service_locator.9wNU0CU', 'get_ServiceLocator_9wNU0CUService', true],
            'App\\Controller\\LangagesController:delete' => ['privates', '.service_locator.FJYVMm_', 'get_ServiceLocator_FJYVMmService', true],
            'App\\Controller\\LangagesController:edit' => ['privates', '.service_locator.FJYVMm_', 'get_ServiceLocator_FJYVMmService', true],
            'App\\Controller\\LangagesController:index' => ['privates', '.service_locator.K35lLDo', 'get_ServiceLocator_K35lLDoService', true],
            'App\\Controller\\LangagesController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LangagesController:show' => ['privates', '.service_locator.PUqINFa', 'get_ServiceLocator_PUqINFaService', true],
            'App\\Controller\\PosteController:delete' => ['privates', '.service_locator.AYXIbAf', 'get_ServiceLocator_AYXIbAfService', true],
            'App\\Controller\\PosteController:edit' => ['privates', '.service_locator.AYXIbAf', 'get_ServiceLocator_AYXIbAfService', true],
            'App\\Controller\\PosteController:index' => ['privates', '.service_locator.ePyOHv4', 'get_ServiceLocator_EPyOHv4Service', true],
            'App\\Controller\\PosteController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PosteController:show' => ['privates', '.service_locator.G6I1Lzy', 'get_ServiceLocator_G6I1LzyService', true],
            'App\\Controller\\PostesController:delete' => ['privates', '.service_locator.Fai6B_W', 'get_ServiceLocator_Fai6BWService', true],
            'App\\Controller\\PostesController:edit' => ['privates', '.service_locator.Fai6B_W', 'get_ServiceLocator_Fai6BWService', true],
            'App\\Controller\\PostesController:index' => ['privates', '.service_locator.thXBizQ', 'get_ServiceLocator_ThXBizQService', true],
            'App\\Controller\\PostesController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PostesController:show' => ['privates', '.service_locator.hI9ENSs', 'get_ServiceLocator_HI9ENSsService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.jpvOrpT', 'get_ServiceLocator_JpvOrpTService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AuthController::login' => '?',
            'App\\Controller\\CompanyController::delete' => '?',
            'App\\Controller\\CompanyController::edit' => '?',
            'App\\Controller\\CompanyController::index' => '?',
            'App\\Controller\\CompanyController::new' => '?',
            'App\\Controller\\CompanyController::show' => '?',
            'App\\Controller\\LangagesController::delete' => '?',
            'App\\Controller\\LangagesController::edit' => '?',
            'App\\Controller\\LangagesController::index' => '?',
            'App\\Controller\\LangagesController::new' => '?',
            'App\\Controller\\LangagesController::show' => '?',
            'App\\Controller\\PosteController::delete' => '?',
            'App\\Controller\\PosteController::edit' => '?',
            'App\\Controller\\PosteController::index' => '?',
            'App\\Controller\\PosteController::new' => '?',
            'App\\Controller\\PosteController::show' => '?',
            'App\\Controller\\PostesController::delete' => '?',
            'App\\Controller\\PostesController::edit' => '?',
            'App\\Controller\\PostesController::index' => '?',
            'App\\Controller\\PostesController::new' => '?',
            'App\\Controller\\PostesController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AuthController:login' => '?',
            'App\\Controller\\CompanyController:delete' => '?',
            'App\\Controller\\CompanyController:edit' => '?',
            'App\\Controller\\CompanyController:index' => '?',
            'App\\Controller\\CompanyController:new' => '?',
            'App\\Controller\\CompanyController:show' => '?',
            'App\\Controller\\LangagesController:delete' => '?',
            'App\\Controller\\LangagesController:edit' => '?',
            'App\\Controller\\LangagesController:index' => '?',
            'App\\Controller\\LangagesController:new' => '?',
            'App\\Controller\\LangagesController:show' => '?',
            'App\\Controller\\PosteController:delete' => '?',
            'App\\Controller\\PosteController:edit' => '?',
            'App\\Controller\\PosteController:index' => '?',
            'App\\Controller\\PosteController:new' => '?',
            'App\\Controller\\PosteController:show' => '?',
            'App\\Controller\\PostesController:delete' => '?',
            'App\\Controller\\PostesController:edit' => '?',
            'App\\Controller\\PostesController:index' => '?',
            'App\\Controller\\PostesController:new' => '?',
            'App\\Controller\\PostesController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
