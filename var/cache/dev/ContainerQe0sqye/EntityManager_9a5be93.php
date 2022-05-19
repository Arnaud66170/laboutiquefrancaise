<?php

namespace ContainerQe0sqye;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9beba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereff75 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7df6 = [
        
    ];

    public function getConnection()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getConnection', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getMetadataFactory', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getExpressionBuilder', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'beginTransaction', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getCache', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getCache();
    }

    public function transactional($func)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'transactional', array('func' => $func), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'wrapInTransaction', array('func' => $func), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'commit', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->commit();
    }

    public function rollback()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'rollback', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getClassMetadata', array('className' => $className), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'createQuery', array('dql' => $dql), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'createNamedQuery', array('name' => $name), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'createQueryBuilder', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'flush', array('entity' => $entity), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'clear', array('entityName' => $entityName), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->clear($entityName);
    }

    public function close()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'close', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->close();
    }

    public function persist($entity)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'persist', array('entity' => $entity), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'remove', array('entity' => $entity), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'refresh', array('entity' => $entity), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'detach', array('entity' => $entity), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'merge', array('entity' => $entity), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getRepository', array('entityName' => $entityName), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'contains', array('entity' => $entity), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getEventManager', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getConfiguration', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'isOpen', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getUnitOfWork', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getProxyFactory', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'initializeObject', array('obj' => $obj), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'getFilters', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'isFiltersStateClean', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'hasFilters', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return $this->valueHolder9beba->hasFilters();
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

        $instance->initializereff75 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9beba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9beba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9beba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, '__get', ['name' => $name], $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        if (isset(self::$publicPropertiese7df6[$name])) {
            return $this->valueHolder9beba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9beba;

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

        $targetObject = $this->valueHolder9beba;
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
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9beba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9beba;
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
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, '__isset', array('name' => $name), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9beba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9beba;
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
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, '__unset', array('name' => $name), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9beba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9beba;
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
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, '__clone', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        $this->valueHolder9beba = clone $this->valueHolder9beba;
    }

    public function __sleep()
    {
        $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, '__sleep', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;

        return array('valueHolder9beba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereff75 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereff75;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereff75 && ($this->initializereff75->__invoke($valueHolder9beba, $this, 'initializeProxy', array(), $this->initializereff75) || 1) && $this->valueHolder9beba = $valueHolder9beba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9beba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9beba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
