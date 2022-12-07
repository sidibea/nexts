<?php

namespace ContainerQhTl2I1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTokenGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Nucleos\UserBundle\Util\TokenGenerator' shared service.
     *
     * @return \Nucleos\UserBundle\Util\SimpleTokenGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TokenGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'SimpleTokenGenerator.php';

        return $container->services['Nucleos\\UserBundle\\Util\\TokenGenerator'] = new \Nucleos\UserBundle\Util\SimpleTokenGenerator();
    }
}