<?php

namespace ContainerK4l5bvv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MailService' shared autowired service.
     *
     * @return \App\Service\MailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MailService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'MailerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Mailer.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->privates['App\\Service\\MailService'])) {
            return $container->privates['App\\Service\\MailService'];
        }
        $b = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->privates['App\\Service\\MailService'])) {
            return $container->privates['App\\Service\\MailService'];
        }
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['App\\Service\\MailService'])) {
            return $container->privates['App\\Service\\MailService'];
        }

        return $container->privates['App\\Service\\MailService'] = new \App\Service\MailService(new \Symfony\Component\Mailer\Mailer($a, $b, $c));
    }
}
