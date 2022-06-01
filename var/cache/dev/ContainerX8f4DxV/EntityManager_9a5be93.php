<?php

namespace ContainerX8f4DxV;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf71fb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer51775 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties52cfb = [
        
    ];

    public function getConnection()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getConnection', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getMetadataFactory', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getExpressionBuilder', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'beginTransaction', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getCache', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'transactional', array('func' => $func), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'commit', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->commit();
    }

    public function rollback()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'rollback', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getClassMetadata', array('className' => $className), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'createQuery', array('dql' => $dql), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'createNamedQuery', array('name' => $name), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'createQueryBuilder', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'flush', array('entity' => $entity), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'clear', array('entityName' => $entityName), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->clear($entityName);
    }

    public function close()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'close', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->close();
    }

    public function persist($entity)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'persist', array('entity' => $entity), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'remove', array('entity' => $entity), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'refresh', array('entity' => $entity), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'detach', array('entity' => $entity), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'merge', array('entity' => $entity), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'contains', array('entity' => $entity), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getEventManager', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getConfiguration', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'isOpen', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getUnitOfWork', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getProxyFactory', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'initializeObject', array('obj' => $obj), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'getFilters', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'isFiltersStateClean', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'hasFilters', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return $this->valueHolderf71fb->hasFilters();
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

        $instance->initializer51775 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf71fb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf71fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf71fb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, '__get', ['name' => $name], $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        if (isset(self::$publicProperties52cfb[$name])) {
            return $this->valueHolderf71fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf71fb;

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

        $targetObject = $this->valueHolderf71fb;
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
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf71fb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf71fb;
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
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, '__isset', array('name' => $name), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf71fb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf71fb;
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
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, '__unset', array('name' => $name), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf71fb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf71fb;
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
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, '__clone', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        $this->valueHolderf71fb = clone $this->valueHolderf71fb;
    }

    public function __sleep()
    {
        $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, '__sleep', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;

        return array('valueHolderf71fb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer51775 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer51775;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer51775 && ($this->initializer51775->__invoke($valueHolderf71fb, $this, 'initializeProxy', array(), $this->initializer51775) || 1) && $this->valueHolderf71fb = $valueHolderf71fb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf71fb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf71fb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
