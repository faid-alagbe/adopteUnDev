<?php

namespace ContainerB7Zjg7i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K35lLDoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K35lLDo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K35lLDo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'langagesRepository' => ['privates', 'App\\Repository\\LangagesRepository', 'getLangagesRepositoryService', true],
        ], [
            'langagesRepository' => 'App\\Repository\\LangagesRepository',
        ]);
    }
}
