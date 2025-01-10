<?php

namespace ContainerMMuxJN4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HI9ENSsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hI9ENSs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hI9ENSs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'poste' => ['privates', '.errored..service_locator.hI9ENSs.App\\Entity\\Postes', NULL, 'Cannot autowire service ".service_locator.hI9ENSs": it needs an instance of "App\\Entity\\Postes" but this type has been excluded in "config/services.yaml".'],
        ], [
            'poste' => 'App\\Entity\\Postes',
        ]);
    }
}
