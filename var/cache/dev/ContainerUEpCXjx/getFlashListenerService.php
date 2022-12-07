<?php

namespace ContainerUEpCXjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFlashListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Nucleos\UserBundle\EventListener\FlashListener' shared service.
     *
     * @return \Nucleos\UserBundle\EventListener\FlashListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nucleos'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'FlashListener.php';

        return $container->privates['Nucleos\\UserBundle\\EventListener\\FlashListener'] = new \Nucleos\UserBundle\EventListener\FlashListener(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
