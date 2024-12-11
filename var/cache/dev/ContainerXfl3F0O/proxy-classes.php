<?php

namespace ContainerXfl3F0O;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder88a78 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3e57 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7a98 = [
        
    ];

    public function getConnection()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getConnection', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getMetadataFactory', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getExpressionBuilder', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'beginTransaction', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getCache', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'transactional', array('func' => $func), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'wrapInTransaction', array('func' => $func), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'commit', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->commit();
    }

    public function rollback()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'rollback', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getClassMetadata', array('className' => $className), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'createQuery', array('dql' => $dql), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'createNamedQuery', array('name' => $name), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'createQueryBuilder', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'flush', array('entity' => $entity), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'clear', array('entityName' => $entityName), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->clear($entityName);
    }

    public function close()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'close', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->close();
    }

    public function persist($entity)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'persist', array('entity' => $entity), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'remove', array('entity' => $entity), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'detach', array('entity' => $entity), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'merge', array('entity' => $entity), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'contains', array('entity' => $entity), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getEventManager', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getConfiguration', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'isOpen', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getUnitOfWork', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getProxyFactory', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'initializeObject', array('obj' => $obj), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'getFilters', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'isFiltersStateClean', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'hasFilters', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return $this->valueHolder88a78->hasFilters();
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

        $instance->initializera3e57 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder88a78) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder88a78 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder88a78->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, '__get', ['name' => $name], $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        if (isset(self::$publicPropertiese7a98[$name])) {
            return $this->valueHolder88a78->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88a78;

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

        $targetObject = $this->valueHolder88a78;
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
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88a78;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder88a78;
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
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, '__isset', array('name' => $name), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88a78;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder88a78;
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
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, '__unset', array('name' => $name), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88a78;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder88a78;
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
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, '__clone', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        $this->valueHolder88a78 = clone $this->valueHolder88a78;
    }

    public function __sleep()
    {
        $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, '__sleep', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;

        return array('valueHolder88a78');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializera3e57 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3e57;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3e57 && ($this->initializera3e57->__invoke($valueHolder88a78, $this, 'initializeProxy', array(), $this->initializera3e57) || 1) && $this->valueHolder88a78 = $valueHolder88a78;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder88a78;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder88a78;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
