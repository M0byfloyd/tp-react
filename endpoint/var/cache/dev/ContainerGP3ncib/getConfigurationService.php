<?php

namespace ContainerGP3ncib;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Zenstruck\Foundry\Configuration' shared service.
     *
     * @return \Zenstruck\Foundry\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/StoryManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/ModelFactoryManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/Instantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/fakerphp/faker/src/Faker/Generator.php';
        include_once \dirname(__DIR__, 4).'/vendor/fakerphp/faker/src/Faker/Factory.php';

        $container->services['Zenstruck\\Foundry\\Configuration'] = $instance = new \Zenstruck\Foundry\Configuration();

        $instance->setManagerRegistry(($container->privates['Zenstruck\\Foundry\\ChainManagerRegistry'] ?? $container->load('getChainManagerRegistryService')));
        $instance->setStoryManager(new \Zenstruck\Foundry\StoryManager(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0)));
        $instance->setModelFactoryManager(new \Zenstruck\Foundry\ModelFactoryManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Factory\\PostFactory'] ?? ($container->privates['App\\Factory\\PostFactory'] = new \App\Factory\PostFactory()));
            yield 1 => ($container->privates['App\\Factory\\UserFactory'] ?? ($container->privates['App\\Factory\\UserFactory'] = new \App\Factory\UserFactory()));
        }, 2)));
        $instance->setInstantiator(new \Zenstruck\Foundry\Instantiator());
        $instance->setFaker(\Faker\Factory::create());
        $instance->enableDefaultProxyAutoRefresh();

        return $instance;
    }
}
