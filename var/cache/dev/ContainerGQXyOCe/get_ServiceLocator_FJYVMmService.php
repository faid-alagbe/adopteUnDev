<?php

namespace ContainerGQXyOCe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FJYVMmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FJYVMm_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FJYVMm_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'langage' => ['privates', '.errored..service_locator.FJYVMm_.App\\Entity\\Langages', NULL, 'Cannot autowire service ".service_locator.FJYVMm_": it needs an instance of "App\\Entity\\Langages" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'langage' => 'App\\Entity\\Langages',
        ]);
    }
}
