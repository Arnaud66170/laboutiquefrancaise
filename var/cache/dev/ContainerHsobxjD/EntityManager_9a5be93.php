<?php

namespace ContainerHsobxjD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc8529 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3625 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties342d6 = [
        
    ];

    public function getConnection()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getConnection', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getMetadataFactory', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getExpressionBuilder', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'beginTransaction', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getCache', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'transactional', array('func' => $func), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'wrapInTransaction', array('func' => $func), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'commit', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->commit();
    }

    public function rollback()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'rollback', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getClassMetadata', array('className' => $className), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'createQuery', array('dql' => $dql), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'createNamedQuery', array('name' => $name), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'createQueryBuilder', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'flush', array('entity' => $entity), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'clear', array('entityName' => $entityName), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->clear($entityName);
    }

    public function close()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'close', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->close();
    }

    public function persist($entity)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'persist', array('entity' => $entity), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'remove', array('entity' => $entity), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'refresh', array('entity' => $entity), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'detach', array('entity' => $entity), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'merge', array('entity' => $entity), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'contains', array('entity' => $entity), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getEventManager', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getConfiguration', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'isOpen', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getUnitOfWork', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getProxyFactory', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'initializeObject', array('obj' => $obj), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'getFilters', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'isFiltersStateClean', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'hasFilters', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return $this->valueHolderc8529->hasFilters();
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

        $instance->initializera3625 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc8529) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc8529 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc8529->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, '__get', ['name' => $name], $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        if (isset(self::$publicProperties342d6[$name])) {
            return $this->valueHolderc8529->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8529;

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

        $targetObject = $this->valueHolderc8529;
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
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8529;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc8529;
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
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, '__isset', array('name' => $name), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8529;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc8529;
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
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, '__unset', array('name' => $name), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8529;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc8529;
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
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, '__clone', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        $this->valueHolderc8529 = clone $this->valueHolderc8529;
    }

    public function __sleep()
    {
        $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, '__sleep', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;

        return array('valueHolderc8529');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3625 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3625;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3625 && ($this->initializera3625->__invoke($valueHolderc8529, $this, 'initializeProxy', array(), $this->initializera3625) || 1) && $this->valueHolderc8529 = $valueHolderc8529;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8529;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc8529;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
