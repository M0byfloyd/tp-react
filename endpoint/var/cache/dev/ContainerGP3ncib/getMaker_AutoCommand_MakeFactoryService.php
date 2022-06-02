<?php

namespace ContainerGP3ncib;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_factory' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Bundle/Maker/MakeFactory.php';

        $container->privates['maker.auto_command.make_factory'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Zenstruck\Foundry\Bundle\Maker\MakeFactory(($container->privates['Zenstruck\\Foundry\\ChainManagerRegistry'] ?? $container->load('getChainManagerRegistryService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Factory\\PostFactory'] ?? ($container->privates['App\\Factory\\PostFactory'] = new \App\Factory\PostFactory()));
            yield 1 => ($container->privates['App\\Factory\\UserFactory'] ?? ($container->privates['App\\Factory\\UserFactory'] = new \App\Factory\UserFactory()));
        }, 2)), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:factory');
        $instance->setDescription('Creates a Foundry model factory for a Doctrine entity class');

        return $instance;
    }
}
