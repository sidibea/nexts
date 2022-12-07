<?php

namespace ContainerUEpCXjx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24391 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7a53b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a07a = [
        
    ];

    public function getConnection()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getConnection', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getMetadataFactory', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getExpressionBuilder', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'beginTransaction', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getCache', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'transactional', array('func' => $func), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'commit', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->commit();
    }

    public function rollback()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'rollback', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getClassMetadata', array('className' => $className), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'createQuery', array('dql' => $dql), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'createNamedQuery', array('name' => $name), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'createQueryBuilder', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'flush', array('entity' => $entity), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'clear', array('entityName' => $entityName), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->clear($entityName);
    }

    public function close()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'close', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->close();
    }

    public function persist($entity)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'persist', array('entity' => $entity), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'remove', array('entity' => $entity), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'refresh', array('entity' => $entity), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'detach', array('entity' => $entity), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'merge', array('entity' => $entity), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'contains', array('entity' => $entity), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getEventManager', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getConfiguration', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'isOpen', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getUnitOfWork', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getProxyFactory', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'initializeObject', array('obj' => $obj), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'getFilters', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'isFiltersStateClean', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'hasFilters', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return $this->valueHolder24391->hasFilters();
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

        $instance->initializer7a53b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder24391) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24391 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24391->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, '__get', ['name' => $name], $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        if (isset(self::$publicProperties8a07a[$name])) {
            return $this->valueHolder24391->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24391;

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

        $targetObject = $this->valueHolder24391;
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
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24391;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24391;
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
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, '__isset', array('name' => $name), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24391;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24391;
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
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, '__unset', array('name' => $name), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24391;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24391;
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
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, '__clone', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        $this->valueHolder24391 = clone $this->valueHolder24391;
    }

    public function __sleep()
    {
        $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, '__sleep', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;

        return array('valueHolder24391');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7a53b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7a53b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7a53b && ($this->initializer7a53b->__invoke($valueHolder24391, $this, 'initializeProxy', array(), $this->initializer7a53b) || 1) && $this->valueHolder24391 = $valueHolder24391;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24391;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24391;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
