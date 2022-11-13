<?php

namespace ContainerUhaKypc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8b28a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb8eff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6810 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getConnection', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getMetadataFactory', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getExpressionBuilder', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'beginTransaction', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getCache', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'transactional', array('func' => $func), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'commit', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->commit();
    }

    public function rollback()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'rollback', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'createQuery', array('dql' => $dql), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'createQueryBuilder', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'flush', array('entity' => $entity), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'clear', array('entityName' => $entityName), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->clear($entityName);
    }

    public function close()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'close', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->close();
    }

    public function persist($entity)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'persist', array('entity' => $entity), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'remove', array('entity' => $entity), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'refresh', array('entity' => $entity), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'detach', array('entity' => $entity), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'merge', array('entity' => $entity), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'contains', array('entity' => $entity), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getEventManager', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getConfiguration', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'isOpen', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getUnitOfWork', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getProxyFactory', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'getFilters', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'isFiltersStateClean', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'hasFilters', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return $this->valueHolder8b28a->hasFilters();
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

        $instance->initializerb8eff = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder8b28a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8b28a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8b28a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, '__get', ['name' => $name], $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        if (isset(self::$publicPropertiesb6810[$name])) {
            return $this->valueHolder8b28a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b28a;

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

        $targetObject = $this->valueHolder8b28a;
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
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b28a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8b28a;
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
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, '__isset', array('name' => $name), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b28a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8b28a;
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
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, '__unset', array('name' => $name), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b28a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8b28a;
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
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, '__clone', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        $this->valueHolder8b28a = clone $this->valueHolder8b28a;
    }

    public function __sleep()
    {
        $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, '__sleep', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;

        return array('valueHolder8b28a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8eff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8eff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb8eff && ($this->initializerb8eff->__invoke($valueHolder8b28a, $this, 'initializeProxy', array(), $this->initializerb8eff) || 1) && $this->valueHolder8b28a = $valueHolder8b28a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8b28a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8b28a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
