<?php

namespace ContainerDgTeAcg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YJ47WLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yJ_47WL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yJ_47WL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'company' => ['privates', '.errored..service_locator.yJ_47WL.App\\Entity\\Company', NULL, 'Cannot autowire service ".service_locator.yJ_47WL": it needs an instance of "App\\Entity\\Company" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'company' => 'App\\Entity\\Company',
            'entityManager' => '?',
        ]);
    }
}
