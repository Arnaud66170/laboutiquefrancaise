<?php

namespace ContainerE4Uds5J;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfbb08 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb0152 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese8c66 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getConnection', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getMetadataFactory', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getExpressionBuilder', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'beginTransaction', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getCache', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'transactional', array('func' => $func), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'commit', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->commit();
    }

    public function rollback()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'rollback', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getClassMetadata', array('className' => $className), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'createQuery', array('dql' => $dql), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'createNamedQuery', array('name' => $name), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'createQueryBuilder', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'flush', array('entity' => $entity), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'clear', array('entityName' => $entityName), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->clear($entityName);
    }

    public function close()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'close', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->close();
    }

    public function persist($entity)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'persist', array('entity' => $entity), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'remove', array('entity' => $entity), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'refresh', array('entity' => $entity), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'detach', array('entity' => $entity), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'merge', array('entity' => $entity), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'contains', array('entity' => $entity), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getEventManager', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getConfiguration', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'isOpen', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getUnitOfWork', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getProxyFactory', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'initializeObject', array('obj' => $obj), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'getFilters', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'isFiltersStateClean', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'hasFilters', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return $this->valueHolderfbb08->hasFilters();
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

        $instance->initializerb0152 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfbb08) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfbb08 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfbb08->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, '__get', ['name' => $name], $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        if (isset(self::$publicPropertiese8c66[$name])) {
            return $this->valueHolderfbb08->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfbb08;

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

        $targetObject = $this->valueHolderfbb08;
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
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfbb08;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfbb08;
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
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, '__isset', array('name' => $name), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfbb08;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfbb08;
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
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, '__unset', array('name' => $name), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfbb08;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfbb08;
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
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, '__clone', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        $this->valueHolderfbb08 = clone $this->valueHolderfbb08;
    }

    public function __sleep()
    {
        $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, '__sleep', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;

        return array('valueHolderfbb08');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb0152 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb0152;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb0152 && ($this->initializerb0152->__invoke($valueHolderfbb08, $this, 'initializeProxy', array(), $this->initializerb0152) || 1) && $this->valueHolderfbb08 = $valueHolderfbb08;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfbb08;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfbb08;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
