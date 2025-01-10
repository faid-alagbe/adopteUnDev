<?php

namespace ContainerTOZQzWj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wq2a8LBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Wq2a8LB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Wq2a8LB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'profilsDev' => ['privates', '.errored..service_locator.Wq2a8LB.App\\Entity\\ProfilsDev', NULL, 'Cannot autowire service ".service_locator.Wq2a8LB": it needs an instance of "App\\Entity\\ProfilsDev" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'profilsDev' => 'App\\Entity\\ProfilsDev',
        ]);
    }
}
