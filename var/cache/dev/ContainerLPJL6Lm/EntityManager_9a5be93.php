<?php

namespace ContainerLPJL6Lm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere683f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer23326 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties32df7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getConnection', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getMetadataFactory', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getExpressionBuilder', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'beginTransaction', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getCache', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'transactional', array('func' => $func), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'commit', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->commit();
    }

    public function rollback()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'rollback', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getClassMetadata', array('className' => $className), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'createQuery', array('dql' => $dql), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'createNamedQuery', array('name' => $name), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'createQueryBuilder', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'flush', array('entity' => $entity), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'clear', array('entityName' => $entityName), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->clear($entityName);
    }

    public function close()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'close', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->close();
    }

    public function persist($entity)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'persist', array('entity' => $entity), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'remove', array('entity' => $entity), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'refresh', array('entity' => $entity), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'detach', array('entity' => $entity), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'merge', array('entity' => $entity), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'contains', array('entity' => $entity), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getEventManager', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getConfiguration', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'isOpen', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getUnitOfWork', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getProxyFactory', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'initializeObject', array('obj' => $obj), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'getFilters', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'isFiltersStateClean', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'hasFilters', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return $this->valueHoldere683f->hasFilters();
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

        $instance->initializer23326 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere683f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere683f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere683f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, '__get', ['name' => $name], $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        if (isset(self::$publicProperties32df7[$name])) {
            return $this->valueHoldere683f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere683f;

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

        $targetObject = $this->valueHoldere683f;
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
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere683f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere683f;
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
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, '__isset', array('name' => $name), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere683f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere683f;
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
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, '__unset', array('name' => $name), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere683f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere683f;
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
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, '__clone', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        $this->valueHoldere683f = clone $this->valueHoldere683f;
    }

    public function __sleep()
    {
        $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, '__sleep', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;

        return array('valueHoldere683f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer23326 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer23326;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer23326 && ($this->initializer23326->__invoke($valueHoldere683f, $this, 'initializeProxy', array(), $this->initializer23326) || 1) && $this->valueHoldere683f = $valueHoldere683f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere683f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere683f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
