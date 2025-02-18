<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures;

use ArrayIterator;
use Doctrine\Common\DataFixtures\Exception\CircularReferenceException;
use InvalidArgumentException;
use Iterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use RuntimeException;
use SplFileInfo;

use function array_keys;
use function array_merge;
use function asort;
use function class_exists;
use function class_implements;
use function count;
use function get_class;
use function get_declared_classes;
use function implode;
use function in_array;
use function is_array;
use function is_dir;
use function is_readable;
use function realpath;
use function sort;
use function sprintf;
use function usort;

/**
 * Class responsible for loading data fixture classes.
 */
class Loader
{
    /**
     * Array of fixture object instances to execute.
     *
     * @phpstan-var array<class-string<FixtureInterface>, FixtureInterface>
     */
    private array $fixtures = [];

    /**
     * Array of ordered fixture object instances.
     *
     * @phpstan-var array<class-string<FixtureInterface>|int, FixtureInterface>
     */
    private array $orderedFixtures = [];

    /**
     * Determines if we must order fixtures by number
     */
    private bool $orderFixturesByNumber = false;

    /**
     * Determines if we must order fixtures by its dependencies
     */
    private bool $orderFixturesByDependencies = false;

    /**
     * The file extension of fixture files.
     */
    private string $fileExtension = '.php';

    /**
     * Find fixtures classes in a given directory and load them.
     *
     * @param string $dir Directory to find fixture classes in.
     *
     * @return array $fixtures Array of loaded fixture object instances.
     */
    public function loadFromDirectory(string $dir)
    {
        if (! is_dir($dir)) {
            throw new InvalidArgumentException(sprintf('"%s" does not exist', $dir));
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir),
            RecursiveIteratorIterator::LEAVES_ONLY,
        );

        return $this->loadFromIterator($iterator);
    }

    /**
     * Find fixtures classes in a given file and load them.
     *
     * @param string $fileName File to find fixture classes in.
     *
     * @return array $fixtures Array of loaded fixture object instances.
     */
    public function loadFromFile(string $fileName)
    {
        if (! is_readable($fileName)) {
            throw new InvalidArgumentException(sprintf('"%s" does not exist or is not readable', $fileName));
        }

        $iterator = new ArrayIterator([new SplFileInfo($fileName)]);

        return $this->loadFromIterator($iterator);
    }

    /**
     * Has fixture?
     *
     * @return bool
     */
    public function hasFixture(FixtureInterface $fixture)
    {
        return isset($this->fixtures[get_class($fixture)]);
    }

    /**
     * Get a specific fixture instance
     *
     * @return FixtureInterface
     */
    public function getFixture(string $className)
    {
        if (! isset($this->fixtures[$className])) {
            throw new InvalidArgumentException(sprintf(
                '"%s" is not a registered fixture',
                $className,
            ));
        }

        return $this->fixtures[$className];
    }

    /**
     * Add a fixture object instance to the loader.
     */
    public function addFixture(FixtureInterface $fixture)
    {
        $fixtureClass = get_class($fixture);

        if (isset($this->fixtures[$fixtureClass])) {
            return;
        }

        if ($fixture instanceof OrderedFixtureInterface && $fixture instanceof DependentFixtureInterface) {
            throw new InvalidArgumentException(sprintf(
                'Class "%s" can\'t implement "%s" and "%s" at the same time.',
                get_class($fixture),
                'OrderedFixtureInterface',
                'DependentFixtureInterface',
            ));
        }

        $this->fixtures[$fixtureClass] = $fixture;

        if ($fixture instanceof OrderedFixtureInterface) {
            $this->orderFixturesByNumber = true;
        } elseif ($fixture instanceof DependentFixtureInterface) {
            $this->orderFixturesByDependencies = true;
            foreach ($fixture->getDependencies() as $class) {
                if (! class_exists($class)) {
                    continue;
                }

                $this->addFixture($this->createFixture($class));
            }
        }
    }

    /**
     * Returns the array of data fixtures to execute.
     *
     * @phpstan-return array<class-string<FixtureInterface>|int, FixtureInterface>
     */
    public function getFixtures()
    {
        $this->orderedFixtures = [];

        if ($this->orderFixturesByNumber) {
            $this->orderFixturesByNumber();
        }

        if ($this->orderFixturesByDependencies) {
            $this->orderFixturesByDependencies();
        }

        if (! $this->orderFixturesByNumber && ! $this->orderFixturesByDependencies) {
            $this->orderedFixtures = $this->fixtures;
        }

        return $this->orderedFixtures;
    }

    /**
     * Check if a given fixture is transient and should not be considered a data fixtures
     * class.
     *
     * @phpstan-param class-string<object> $className
     *
     * @return bool
     */
    public function isTransient(string $className)
    {
        $rc = new ReflectionClass($className);
        if ($rc->isAbstract()) {
            return true;
        }

        $interfaces = class_implements($className);

        return ! in_array(FixtureInterface::class, $interfaces);
    }

    /**
     * Creates the fixture object from the class.
     *
     * @return FixtureInterface
     */
    protected function createFixture(string $class)
    {
        return new $class();
    }

    /**
     * Orders fixtures by number
     *
     * @todo maybe there is a better way to handle reordering
     */
    private function orderFixturesByNumber(): void
    {
        $this->orderedFixtures = $this->fixtures;
        usort($this->orderedFixtures, static function (FixtureInterface $a, FixtureInterface $b): int {
            if ($a instanceof OrderedFixtureInterface && $b instanceof OrderedFixtureInterface) {
                if ($a->getOrder() === $b->getOrder()) {
                    return 0;
                }

                return $a->getOrder() < $b->getOrder() ? -1 : 1;
            }

            if ($a instanceof OrderedFixtureInterface) {
                return $a->getOrder() === 0 ? 0 : 1;
            }

            if ($b instanceof OrderedFixtureInterface) {
                return $b->getOrder() === 0 ? 0 : -1;
            }

            return 0;
        });
    }

    /**
     * Orders fixtures by dependencies
     *
     * @return void
     */
    private function orderFixturesByDependencies()
    {
        /** @phpstan-var array<class-string<DependentFixtureInterface>, int> */
        $sequenceForClasses = [];

        // If fixtures were already ordered by number then we need
        // to remove classes which are not instances of OrderedFixtureInterface
        // in case fixtures implementing DependentFixtureInterface exist.
        // This is because, in that case, the method orderFixturesByDependencies
        // will handle all fixtures which are not instances of
        // OrderedFixtureInterface
        if ($this->orderFixturesByNumber) {
            $count = count($this->orderedFixtures);

            for ($i = 0; $i < $count; ++$i) {
                if ($this->orderedFixtures[$i] instanceof OrderedFixtureInterface) {
                    continue;
                }

                unset($this->orderedFixtures[$i]);
            }
        }

        // First we determine which classes has dependencies and which don't
        foreach ($this->fixtures as $fixture) {
            $fixtureClass = get_class($fixture);

            if ($fixture instanceof OrderedFixtureInterface) {
                continue;
            }

            if ($fixture instanceof DependentFixtureInterface) {
                $dependenciesClasses = $fixture->getDependencies();

                $this->validateDependencies($dependenciesClasses);

                if (! is_array($dependenciesClasses) || empty($dependenciesClasses)) {
                    throw new InvalidArgumentException(sprintf(
                        'Method "%s" in class "%s" must return an array of classes which are dependencies for the fixture, and it must be NOT empty.',
                        'getDependencies',
                        $fixtureClass,
                    ));
                }

                if (in_array($fixtureClass, $dependenciesClasses)) {
                    throw new InvalidArgumentException(sprintf(
                        'Class "%s" can\'t have itself as a dependency',
                        $fixtureClass,
                    ));
                }

                // We mark this class as unsequenced
                $sequenceForClasses[$fixtureClass] = -1;
            } else {
                // This class has no dependencies, so we assign 0
                $sequenceForClasses[$fixtureClass] = 0;
            }
        }

        // Now we order fixtures by sequence
        $sequence  = 1;
        $lastCount = -1;

        while (($count = count($unsequencedClasses = $this->getUnsequencedClasses($sequenceForClasses))) > 0 && $count !== $lastCount) {
            foreach ($unsequencedClasses as $key => $class) {
                $fixture                 = $this->fixtures[$class];
                $dependencies            = $fixture->getDependencies();
                $unsequencedDependencies = $this->getUnsequencedClasses($sequenceForClasses, $dependencies);

                if (count($unsequencedDependencies) !== 0) {
                    continue;
                }

                $sequenceForClasses[$class] = $sequence++;
            }

            $lastCount = $count;
        }

        $orderedFixtures = [];

        // If there're fixtures unsequenced left and they couldn't be sequenced,
        // it means we have a circular reference
        if ($count > 0) {
            $msg  = 'Classes "%s" have produced a CircularReferenceException. ';
            $msg .= 'An example of this problem would be the following: Class C has class B as its dependency. ';
            $msg .= 'Then, class B has class A has its dependency. Finally, class A has class C as its dependency. ';
            $msg .= 'This case would produce a CircularReferenceException.';

            throw new CircularReferenceException(sprintf($msg, implode(',', $unsequencedClasses)));
        }

        // We order the classes by sequence
        asort($sequenceForClasses);

        foreach ($sequenceForClasses as $class => $sequence) {
            // If fixtures were ordered
            $orderedFixtures[] = $this->fixtures[$class];
        }

        $this->orderedFixtures = array_merge($this->orderedFixtures, $orderedFixtures);
    }

    /** @phpstan-param iterable<class-string> $dependenciesClasses */
    private function validateDependencies(iterable $dependenciesClasses): bool
    {
        $loadedFixtureClasses = array_keys($this->fixtures);

        foreach ($dependenciesClasses as $class) {
            if (! in_array($class, $loadedFixtureClasses)) {
                throw new RuntimeException(sprintf(
                    'Fixture "%s" was declared as a dependency, but it should be added in fixture loader first.',
                    $class,
                ));
            }
        }

        return true;
    }

    /**
     * @phpstan-param array<class-string<DependentFixtureInterface>, int> $sequences
     * @phpstan-param iterable<class-string<FixtureInterface>>|null       $classes
     *
     * @phpstan-return array<class-string<FixtureInterface>>
     */
    private function getUnsequencedClasses(array $sequences, ?iterable $classes = null): array
    {
        $unsequencedClasses = [];

        if ($classes === null) {
            $classes = array_keys($sequences);
        }

        foreach ($classes as $class) {
            if (! isset($sequences[$class]) || $sequences[$class] !== -1) {
                continue;
            }

            $unsequencedClasses[] = $class;
        }

        return $unsequencedClasses;
    }

    /**
     * Load fixtures from files contained in iterator.
     *
     * @phpstan-param Iterator<SplFileInfo> $iterator Iterator over files from
     *                                              which fixtures should be loaded.
     *
     * @phpstan-return list<FixtureInterface> $fixtures Array of loaded fixture object instances.
     */
    private function loadFromIterator(Iterator $iterator): array
    {
        $includedFiles = [];
        foreach ($iterator as $file) {
            $fileName = $file->getBasename($this->fileExtension);
            if ($fileName === $file->getBasename()) {
                continue;
            }

            $sourceFile = realpath($file->getPathName());
            require_once $sourceFile;
            $includedFiles[] = $sourceFile;
        }

        $fixtures = [];
        $declared = get_declared_classes();
        // Make the declared classes order deterministic
        sort($declared);

        foreach ($declared as $className) {
            $reflClass  = new ReflectionClass($className);
            $sourceFile = $reflClass->getFileName();

            if (! in_array($sourceFile, $includedFiles) || $this->isTransient($className)) {
                continue;
            }

            $fixture    = $this->createFixture($className);
            $fixtures[] = $fixture;
            $this->addFixture($fixture);
        }

        return $fixtures;
    }
}
