<?php

namespace ContainerQhTl2I1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendEmailActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Nucleos\UserBundle\Action\SendEmailAction' shared service.
     *
     * @return \Nucleos\UserBundle\Action\SendEmailAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'SendEmailAction.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TokenGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'SimpleTokenGenerator.php';

        return $container->services['Nucleos\\UserBundle\\Action\\SendEmailAction'] = new \Nucleos\UserBundle\Action\SendEmailAction(($container->services['router'] ?? $container->getRouterService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Nucleos\\UserBundle\\Model\\UserManager'] ?? $container->load('getUserManagerService')), ($container->services['Nucleos\\UserBundle\\Util\\TokenGenerator'] ?? ($container->services['Nucleos\\UserBundle\\Util\\TokenGenerator'] = new \Nucleos\UserBundle\Util\SimpleTokenGenerator())), ($container->privates['nucleos_user.user_provider.username'] ?? $container->load('getNucleosUser_UserProvider_UsernameService')), ($container->services['nucleos_user.mailer'] ?? $container->load('getNucleosUser_MailerService')), 7200);
    }
}