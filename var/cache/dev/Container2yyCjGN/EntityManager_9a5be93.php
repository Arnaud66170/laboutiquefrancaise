<?php

namespace Container2yyCjGN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbc897 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc52d2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaaaf8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getConnection', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getMetadataFactory', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getExpressionBuilder', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'beginTransaction', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getCache', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'transactional', array('func' => $func), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'commit', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->commit();
    }

    public function rollback()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'rollback', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getClassMetadata', array('className' => $className), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'createQuery', array('dql' => $dql), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'createNamedQuery', array('name' => $name), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'createQueryBuilder', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'flush', array('entity' => $entity), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'clear', array('entityName' => $entityName), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->clear($entityName);
    }

    public function close()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'close', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->close();
    }

    public function persist($entity)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'persist', array('entity' => $entity), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'remove', array('entity' => $entity), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'refresh', array('entity' => $entity), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'detach', array('entity' => $entity), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'merge', array('entity' => $entity), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'contains', array('entity' => $entity), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getEventManager', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getConfiguration', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'isOpen', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getUnitOfWork', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getProxyFactory', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'initializeObject', array('obj' => $obj), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'getFilters', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'isFiltersStateClean', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'hasFilters', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return $this->valueHolderbc897->hasFilters();
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

        $instance->initializerc52d2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbc897) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbc897 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbc897->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, '__get', ['name' => $name], $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        if (isset(self::$publicPropertiesaaaf8[$name])) {
            return $this->valueHolderbc897->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc897;

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

        $targetObject = $this->valueHolderbc897;
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
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc897;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbc897;
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
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, '__isset', array('name' => $name), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc897;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbc897;
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
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, '__unset', array('name' => $name), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc897;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbc897;
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
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, '__clone', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        $this->valueHolderbc897 = clone $this->valueHolderbc897;
    }

    public function __sleep()
    {
        $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, '__sleep', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;

        return array('valueHolderbc897');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc52d2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc52d2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc52d2 && ($this->initializerc52d2->__invoke($valueHolderbc897, $this, 'initializeProxy', array(), $this->initializerc52d2) || 1) && $this->valueHolderbc897 = $valueHolderbc897;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc897;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc897;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
