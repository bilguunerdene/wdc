<?php

namespace ContainerT3hTmux;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIndexControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\IndexController' shared autowired service.
     *
     * @return \App\Controller\IndexController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'IndexController.php';

        return $container->services['App\\Controller\\IndexController'] = new \App\Controller\IndexController();
    }
}