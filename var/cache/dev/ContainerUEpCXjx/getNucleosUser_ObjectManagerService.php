<?php

namespace ContainerUEpCXjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNucleosUser_ObjectManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nucleos_user.object_manager' shared service.
     *
     * @return \Doctrine\Persistence\ObjectManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';

        return $container->privates['nucleos_user.object_manager'] = ($container->services['doctrine'] ?? $container->getDoctrineService())->getManager(NULL);
    }
}
