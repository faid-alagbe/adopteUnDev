<?php

namespace ContainerZNQQ3LB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9wNU0CUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9wNU0CU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9wNU0CU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'company' => ['privates', '.errored..service_locator.9wNU0CU.App\\Entity\\Company', NULL, 'Cannot autowire service ".service_locator.9wNU0CU": it needs an instance of "App\\Entity\\Company" but this type has been excluded in "config/services.yaml".'],
        ], [
            'company' => 'App\\Entity\\Company',
        ]);
    }
}
