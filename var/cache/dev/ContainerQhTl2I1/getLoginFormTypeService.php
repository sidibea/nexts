<?php

namespace ContainerQhTl2I1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Nucleos\UserBundle\Form\Type\LoginFormType' shared service.
     *
     * @return \Nucleos\UserBundle\Form\Type\LoginFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'LoginFormType.php';

        return $container->privates['Nucleos\\UserBundle\\Form\\Type\\LoginFormType'] = new \Nucleos\UserBundle\Form\Type\LoginFormType(($container->privates['security.authentication_utils'] ?? $container->load('getSecurity_AuthenticationUtilsService')), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
