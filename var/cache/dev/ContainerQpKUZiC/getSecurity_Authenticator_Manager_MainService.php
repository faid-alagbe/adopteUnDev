<?php

namespace ContainerQpKUZiC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManager.php';

        return $container->privates['security.authenticator.manager.main'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([($container->privates['App\\Security\\UserAuthenticator'] ?? $container->load('getUserAuthenticatorService')), ($container->privates['security.authenticator.remember_me.main'] ?? $container->load('getSecurity_Authenticator_RememberMe_MainService'))], ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['debug.security.event_dispatcher.main'] ?? self::getDebug_Security_EventDispatcher_MainService($container)), 'main', ($container->privates['logger'] ?? self::getLoggerService($container)), true, true, []);
    }
}
