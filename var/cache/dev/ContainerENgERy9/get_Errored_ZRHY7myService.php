<?php

namespace ContainerENgERy9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_ZRHY7myService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.ZRHY7my' shared service.
     *
     * @return \App\Entity\PosteEntity
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot determine controller argument for "App\\Controller\\PosteController::edit()": the $posteEntity argument is type-hinted with the non-existent class or interface: "App\\Entity\\PosteEntity".');
    }
}
