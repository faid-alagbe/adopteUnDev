<?php

namespace Container4x3Ag5t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EPyOHv4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ePyOHv4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ePyOHv4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'posteEntityRepository' => ['privates', 'App\\Repository\\PosteEntityRepository', 'getPosteEntityRepositoryService', true],
        ], [
            'posteEntityRepository' => 'App\\Repository\\PosteEntityRepository',
        ]);
    }
}
