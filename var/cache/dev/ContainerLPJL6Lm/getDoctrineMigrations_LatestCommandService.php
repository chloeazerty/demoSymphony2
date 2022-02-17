<?php

namespace ContainerLPJL6Lm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_LatestCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\LatestCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php';

        $container->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\LatestCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:latest');

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }
}
