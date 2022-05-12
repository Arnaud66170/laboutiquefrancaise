<?php

namespace Container4v49Vex;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16d14 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereeece = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4401e = [
        
    ];

    public function getConnection()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getConnection', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getMetadataFactory', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getExpressionBuilder', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'beginTransaction', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getCache', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getCache();
    }

    public function transactional($func)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'transactional', array('func' => $func), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'wrapInTransaction', array('func' => $func), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'commit', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->commit();
    }

    public function rollback()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'rollback', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getClassMetadata', array('className' => $className), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'createQuery', array('dql' => $dql), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'createNamedQuery', array('name' => $name), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'createQueryBuilder', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'flush', array('entity' => $entity), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'clear', array('entityName' => $entityName), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->clear($entityName);
    }

    public function close()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'close', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->close();
    }

    public function persist($entity)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'persist', array('entity' => $entity), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'remove', array('entity' => $entity), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'refresh', array('entity' => $entity), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'detach', array('entity' => $entity), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'merge', array('entity' => $entity), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getRepository', array('entityName' => $entityName), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'contains', array('entity' => $entity), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getEventManager', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getConfiguration', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'isOpen', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getUnitOfWork', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getProxyFactory', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'initializeObject', array('obj' => $obj), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'getFilters', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'isFiltersStateClean', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'hasFilters', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return $this->valueHolder16d14->hasFilters();
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

        $instance->initializereeece = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16d14) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16d14 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16d14->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, '__get', ['name' => $name], $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        if (isset(self::$publicProperties4401e[$name])) {
            return $this->valueHolder16d14->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16d14;

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

        $targetObject = $this->valueHolder16d14;
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
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16d14;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16d14;
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
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, '__isset', array('name' => $name), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16d14;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16d14;
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
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, '__unset', array('name' => $name), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16d14;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16d14;
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
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, '__clone', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        $this->valueHolder16d14 = clone $this->valueHolder16d14;
    }

    public function __sleep()
    {
        $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, '__sleep', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;

        return array('valueHolder16d14');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereeece = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereeece;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereeece && ($this->initializereeece->__invoke($valueHolder16d14, $this, 'initializeProxy', array(), $this->initializereeece) || 1) && $this->valueHolder16d14 = $valueHolder16d14;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16d14;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16d14;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
