<?php

namespace ContainerUEpCXjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangePasswordCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Nucleos\UserBundle\Command\ChangePasswordCommand' shared service.
     *
     * @return \Nucleos\UserBundle\Command\ChangePasswordCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ChangePasswordCommand.php';

        $container->privates['Nucleos\\UserBundle\\Command\\ChangePasswordCommand'] = $instance = new \Nucleos\UserBundle\Command\ChangePasswordCommand(($container->privates['nucleos_user.util.user_manipulator.simple'] ?? $container->load('getNucleosUser_Util_UserManipulator_SimpleService')));

        $instance->setName('nucleos:user:change-password');

        return $instance;
    }
}
