<?php

namespace ContainerOiYJkaZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S0GMw_BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s0GMw.b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s0GMw.b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'companyCrtersRepository' => ['privates', 'App\\Repository\\CompanyCrtersRepository', 'getCompanyCrtersRepositoryService', true],
        ], [
            'companyCrtersRepository' => 'App\\Repository\\CompanyCrtersRepository',
        ]);
    }
}
