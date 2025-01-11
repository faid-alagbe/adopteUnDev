<?php

namespace ContainerZy8GAnL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PUqINFaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PUqINFa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PUqINFa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'langage' => ['privates', '.errored..service_locator.PUqINFa.App\\Entity\\Langages', NULL, 'Cannot autowire service ".service_locator.PUqINFa": it needs an instance of "App\\Entity\\Langages" but this type has been excluded in "config/services.yaml".'],
        ], [
            'langage' => 'App\\Entity\\Langages',
        ]);
    }
}
