<?php

namespace ContainerL6oEZQN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d230 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc0ab0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7d12e = [
        
    ];

    public function getConnection()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getConnection', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getMetadataFactory', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getExpressionBuilder', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'beginTransaction', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getCache', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'transactional', array('func' => $func), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'commit', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->commit();
    }

    public function rollback()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'rollback', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getClassMetadata', array('className' => $className), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'createQuery', array('dql' => $dql), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'createNamedQuery', array('name' => $name), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'createQueryBuilder', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'flush', array('entity' => $entity), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'clear', array('entityName' => $entityName), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->clear($entityName);
    }

    public function close()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'close', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->close();
    }

    public function persist($entity)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'persist', array('entity' => $entity), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'remove', array('entity' => $entity), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'refresh', array('entity' => $entity), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'detach', array('entity' => $entity), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'merge', array('entity' => $entity), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'contains', array('entity' => $entity), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getEventManager', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getConfiguration', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'isOpen', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getUnitOfWork', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getProxyFactory', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'initializeObject', array('obj' => $obj), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'getFilters', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'isFiltersStateClean', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'hasFilters', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return $this->valueHolder7d230->hasFilters();
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

        $instance->initializerc0ab0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7d230) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7d230 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7d230->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, '__get', ['name' => $name], $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        if (isset(self::$publicProperties7d12e[$name])) {
            return $this->valueHolder7d230->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d230;

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

        $targetObject = $this->valueHolder7d230;
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
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d230;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d230;
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
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, '__isset', array('name' => $name), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d230;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d230;
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
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, '__unset', array('name' => $name), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d230;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d230;
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
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, '__clone', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        $this->valueHolder7d230 = clone $this->valueHolder7d230;
    }

    public function __sleep()
    {
        $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, '__sleep', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;

        return array('valueHolder7d230');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc0ab0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc0ab0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc0ab0 && ($this->initializerc0ab0->__invoke($valueHolder7d230, $this, 'initializeProxy', array(), $this->initializerc0ab0) || 1) && $this->valueHolder7d230 = $valueHolder7d230;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d230;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d230;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
