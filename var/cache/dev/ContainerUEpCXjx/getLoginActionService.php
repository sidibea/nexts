<?php

namespace ContainerUEpCXjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Nucleos\UserBundle\Action\LoginAction' shared service.
     *
     * @return \Nucleos\UserBundle\Action\LoginAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'LoginAction.php';

        return $container->services['Nucleos\\UserBundle\\Action\\LoginAction'] = new \Nucleos\UserBundle\Action\LoginAction(($container->privates['twig'] ?? $container->getTwigService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['security.csrf.token_manager'] ?? $container->getSecurity_Csrf_TokenManagerService()), ($container->privates['security.authentication_utils'] ?? $container->load('getSecurity_AuthenticationUtilsService')));
    }
}
