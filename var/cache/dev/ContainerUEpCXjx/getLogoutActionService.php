<?php

namespace ContainerUEpCXjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogoutActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Nucleos\UserBundle\Action\LogoutAction' shared service.
     *
     * @return \Nucleos\UserBundle\Action\LogoutAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'LogoutAction.php';

        return $container->services['Nucleos\\UserBundle\\Action\\LogoutAction'] = new \Nucleos\UserBundle\Action\LogoutAction();
    }
}
