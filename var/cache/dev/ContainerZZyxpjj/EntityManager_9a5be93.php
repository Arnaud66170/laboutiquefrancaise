<?php

namespace ContainerZZyxpjj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder49cbc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializered02f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties009db = [
        
    ];

    public function getConnection()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getConnection', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getMetadataFactory', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getExpressionBuilder', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'beginTransaction', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getCache', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getCache();
    }

    public function transactional($func)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'transactional', array('func' => $func), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'wrapInTransaction', array('func' => $func), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'commit', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->commit();
    }

    public function rollback()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'rollback', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getClassMetadata', array('className' => $className), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'createQuery', array('dql' => $dql), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'createNamedQuery', array('name' => $name), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'createQueryBuilder', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'flush', array('entity' => $entity), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'clear', array('entityName' => $entityName), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->clear($entityName);
    }

    public function close()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'close', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->close();
    }

    public function persist($entity)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'persist', array('entity' => $entity), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'remove', array('entity' => $entity), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'refresh', array('entity' => $entity), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'detach', array('entity' => $entity), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'merge', array('entity' => $entity), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getRepository', array('entityName' => $entityName), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'contains', array('entity' => $entity), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getEventManager', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getConfiguration', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'isOpen', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getUnitOfWork', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getProxyFactory', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'initializeObject', array('obj' => $obj), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'getFilters', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'isFiltersStateClean', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'hasFilters', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return $this->valueHolder49cbc->hasFilters();
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

        $instance->initializered02f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder49cbc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder49cbc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder49cbc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, '__get', ['name' => $name], $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        if (isset(self::$publicProperties009db[$name])) {
            return $this->valueHolder49cbc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49cbc;

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

        $targetObject = $this->valueHolder49cbc;
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
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49cbc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder49cbc;
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
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, '__isset', array('name' => $name), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49cbc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder49cbc;
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
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, '__unset', array('name' => $name), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49cbc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder49cbc;
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
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, '__clone', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        $this->valueHolder49cbc = clone $this->valueHolder49cbc;
    }

    public function __sleep()
    {
        $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, '__sleep', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;

        return array('valueHolder49cbc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializered02f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializered02f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializered02f && ($this->initializered02f->__invoke($valueHolder49cbc, $this, 'initializeProxy', array(), $this->initializered02f) || 1) && $this->valueHolder49cbc = $valueHolder49cbc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder49cbc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder49cbc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
