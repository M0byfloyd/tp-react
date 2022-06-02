<?php

namespace ContainerCMaxVY5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0989f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb07a4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa78e4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getConnection', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getMetadataFactory', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getExpressionBuilder', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'beginTransaction', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getCache', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'transactional', array('func' => $func), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'commit', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->commit();
    }

    public function rollback()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'rollback', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getClassMetadata', array('className' => $className), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'createQuery', array('dql' => $dql), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'createNamedQuery', array('name' => $name), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'createQueryBuilder', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'flush', array('entity' => $entity), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'clear', array('entityName' => $entityName), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->clear($entityName);
    }

    public function close()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'close', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->close();
    }

    public function persist($entity)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'persist', array('entity' => $entity), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'remove', array('entity' => $entity), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'refresh', array('entity' => $entity), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'detach', array('entity' => $entity), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'merge', array('entity' => $entity), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'contains', array('entity' => $entity), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getEventManager', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getConfiguration', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'isOpen', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getUnitOfWork', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getProxyFactory', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'initializeObject', array('obj' => $obj), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'getFilters', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'isFiltersStateClean', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'hasFilters', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return $this->valueHolder0989f->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb07a4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0989f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0989f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0989f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, '__get', ['name' => $name], $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        if (isset(self::$publicPropertiesa78e4[$name])) {
            return $this->valueHolder0989f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0989f;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0989f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0989f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0989f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, '__isset', array('name' => $name), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0989f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0989f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, '__unset', array('name' => $name), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0989f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0989f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, '__clone', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        $this->valueHolder0989f = clone $this->valueHolder0989f;
    }

    public function __sleep()
    {
        $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, '__sleep', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;

        return array('valueHolder0989f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb07a4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb07a4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb07a4 && ($this->initializerb07a4->__invoke($valueHolder0989f, $this, 'initializeProxy', array(), $this->initializerb07a4) || 1) && $this->valueHolder0989f = $valueHolder0989f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0989f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0989f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
