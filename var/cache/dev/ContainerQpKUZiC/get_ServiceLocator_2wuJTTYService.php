<?php

namespace ContainerQpKUZiC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2wuJTTYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2wuJTTY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2wuJTTY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AuthController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\CompanyController::delete' => ['privates', '.service_locator.yJ_47WL', 'get_ServiceLocator_YJ47WLService', true],
            'App\\Controller\\CompanyController::edit' => ['privates', '.service_locator.yJ_47WL', 'get_ServiceLocator_YJ47WLService', true],
            'App\\Controller\\CompanyController::index' => ['privates', '.service_locator.cxUIR7o', 'get_ServiceLocator_CxUIR7oService', true],
            'App\\Controller\\CompanyController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CompanyController::show' => ['privates', '.service_locator.9wNU0CU', 'get_ServiceLocator_9wNU0CUService', true],
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
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
