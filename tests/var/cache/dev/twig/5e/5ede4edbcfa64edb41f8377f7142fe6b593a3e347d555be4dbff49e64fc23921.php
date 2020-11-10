<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/doctrine/doctrine-fixtures-bundle/Tests/IntegrationTest.php */
class __TwigTemplate_ed55e128e028f0ae66d5eccd2bee646fac80d034e45325d74d0b149c935ec773 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/Tests/IntegrationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/Tests/IntegrationTest.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\Tests\\IntegrationTest;

use Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass;
use Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\DependentOnRequiredConstructorArgsFixtures;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\OtherFixtures;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\RequiredConstructorArgsFixtures;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\WithDependenciesFixtures;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\FooBundle;
use Doctrine\\Common\\DataFixtures\\Loader;
use Doctrine\\Common\\Persistence\\ManagerRegistry;
use PHPUnit\\Framework\\TestCase;
use RuntimeException;
use Symfony\\Bridge\\Doctrine\\DataFixtures\\ContainerAwareLoader;
use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;
use function array_map;
use function get_class;
use function method_exists;
use function rand;
use function sys_get_temp_dir;

class IntegrationTest extends TestCase
{
    public function testFixturesLoader() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures();
        \$this->assertCount(2, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
            WithDependenciesFixtures::class,
        ], \$actualFixtureClasses);
        \$this->assertInstanceOf(WithDependenciesFixtures::class, \$actualFixtures[1]);
    }

    public function testFixturesLoaderWhenFixtureHasDepdencenyThatIsNotYetLoaded() : void
    {
        // See https://github.com/doctrine/DoctrineFixturesBundle/issues/215

        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures();
        \$this->assertCount(2, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
            WithDependenciesFixtures::class,
        ], \$actualFixtureClasses);
        \$this->assertInstanceOf(WithDependenciesFixtures::class, \$actualFixtures[1]);
    }

    /**
     * @expectedException \\LogicException
     * @expectedExceptionMessage The getDependencies() method returned a class (Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\RequiredConstructorArgsFixtures) that has required constructor arguments. Upgrade to \"doctrine/data-fixtures\" version 1.3 or higher to support this.
     */
    public function testExceptionWithDependenciesWithRequiredArguments() : void
    {
        // see https://github.com/doctrine/data-fixtures/pull/274
        // When that is merged, this test will only run when using
        // an older version of that library.
        if (method_exists(Loader::class, 'createFixture')) {
            \$this->markTestSkipped();
        }

        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            \$c->autowire(DependentOnRequiredConstructorArgsFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->autowire(RequiredConstructorArgsFixtures::class)
                ->setArgument(0, 'foo')
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$loader->getFixtures();
    }

    /**
     * @expectedException \\LogicException
     * @expectedExceptionMessage The \"Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\RequiredConstructorArgsFixtures\" fixture class is trying to be loaded, but is not available. Make sure this class is defined as a service and tagged with \"doctrine.fixture.orm\".
     */
    public function testExceptionIfDependentFixtureNotWired() : void
    {
        // only runs on newer versions of doctrine/data-fixtures
        if (! method_exists(Loader::class, 'createFixture')) {
            \$this->markTestSkipped();
        }

        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            \$c->autowire(DependentOnRequiredConstructorArgsFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$loader->getFixtures();
    }

    public function testFixturesLoaderWithGroupsOptionViaInterface() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
              ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
              ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures(['staging']);
        \$this->assertCount(1, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
        ], \$actualFixtureClasses);
        \$this->assertInstanceOf(OtherFixtures::class, \$actualFixtures[0]);
    }

    public function testFixturesLoaderWithGroupsOptionViaTag() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG, ['group' => 'group1'])
                ->addTag(FixturesCompilerPass::FIXTURE_TAG, ['group' => 'group2']);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
              ->addTag(FixturesCompilerPass::FIXTURE_TAG, ['group' => 'group2']);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$this->assertCount(1, \$loader->getFixtures(['staging']));
        \$this->assertCount(1, \$loader->getFixtures(['group1']));
        \$this->assertCount(2, \$loader->getFixtures(['group2']));
        \$this->assertCount(0, \$loader->getFixtures(['group3']));
    }

    public function testLoadFixturesViaGroupWithMissingDependency() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$this->expectException(RuntimeException::class);
        \$this->expectExceptionMessage('Fixture \"Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\OtherFixtures\" was declared as a dependency for fixture \"Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\WithDependenciesFixtures\", but it was not included in any of the loaded fixture groups.');

        \$loader->getFixtures(['missingDependencyGroup']);
    }

    public function testLoadFixturesViaGroupWithFulfilledDependency() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures(['fulfilledDependencyGroup']);

        \$this->assertCount(2, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
            WithDependenciesFixtures::class,
        ], \$actualFixtureClasses);
    }

    public function testLoadFixturesByShortName() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures(['OtherFixtures']);

        \$this->assertCount(1, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
        ], \$actualFixtureClasses);
    }
}

class IntegrationTestKernel extends Kernel
{
    use MicroKernelTrait;

    /** @var callable */
    private \$servicesCallback;

    /** @var int */
    private \$randomKey;

    public function __construct(string \$environment, bool \$debug)
    {
        \$this->randomKey = rand(100, 999);

        parent::__construct(\$environment, \$debug);
    }

    protected function getContainerClass() : string
    {
        return 'test' . \$this->randomKey . parent::getContainerClass();
    }

    public function registerBundles() : array
    {
        return [
            new FrameworkBundle(),
            new DoctrineFixturesBundle(),
            new FooBundle(),
        ];
    }

    public function addServices(callable \$callback) : void
    {
        \$this->servicesCallback = \$callback;
    }

    protected function configureRoutes(RouteCollectionBuilder \$routes) : void
    {
    }

    protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader) : void
    {
        \$c->setParameter('kernel.secret', 'foo');
        \$c->register('doctrine', ManagerRegistry::class);
        \$callback = \$this->servicesCallback;
        \$callback(\$c);
    }

    public function getCacheDir() : string
    {
        return sys_get_temp_dir() . '/doctrine_fixtures_bundle' . \$this->randomKey;
    }

    public function getLogDir() : string
    {
        return sys_get_temp_dir();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/Tests/IntegrationTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\Tests\\IntegrationTest;

use Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass;
use Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\DependentOnRequiredConstructorArgsFixtures;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\OtherFixtures;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\RequiredConstructorArgsFixtures;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\WithDependenciesFixtures;
use Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\FooBundle;
use Doctrine\\Common\\DataFixtures\\Loader;
use Doctrine\\Common\\Persistence\\ManagerRegistry;
use PHPUnit\\Framework\\TestCase;
use RuntimeException;
use Symfony\\Bridge\\Doctrine\\DataFixtures\\ContainerAwareLoader;
use Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle;
use Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;
use function array_map;
use function get_class;
use function method_exists;
use function rand;
use function sys_get_temp_dir;

class IntegrationTest extends TestCase
{
    public function testFixturesLoader() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures();
        \$this->assertCount(2, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
            WithDependenciesFixtures::class,
        ], \$actualFixtureClasses);
        \$this->assertInstanceOf(WithDependenciesFixtures::class, \$actualFixtures[1]);
    }

    public function testFixturesLoaderWhenFixtureHasDepdencenyThatIsNotYetLoaded() : void
    {
        // See https://github.com/doctrine/DoctrineFixturesBundle/issues/215

        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures();
        \$this->assertCount(2, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
            WithDependenciesFixtures::class,
        ], \$actualFixtureClasses);
        \$this->assertInstanceOf(WithDependenciesFixtures::class, \$actualFixtures[1]);
    }

    /**
     * @expectedException \\LogicException
     * @expectedExceptionMessage The getDependencies() method returned a class (Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\RequiredConstructorArgsFixtures) that has required constructor arguments. Upgrade to \"doctrine/data-fixtures\" version 1.3 or higher to support this.
     */
    public function testExceptionWithDependenciesWithRequiredArguments() : void
    {
        // see https://github.com/doctrine/data-fixtures/pull/274
        // When that is merged, this test will only run when using
        // an older version of that library.
        if (method_exists(Loader::class, 'createFixture')) {
            \$this->markTestSkipped();
        }

        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            \$c->autowire(DependentOnRequiredConstructorArgsFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->autowire(RequiredConstructorArgsFixtures::class)
                ->setArgument(0, 'foo')
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$loader->getFixtures();
    }

    /**
     * @expectedException \\LogicException
     * @expectedExceptionMessage The \"Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\RequiredConstructorArgsFixtures\" fixture class is trying to be loaded, but is not available. Make sure this class is defined as a service and tagged with \"doctrine.fixture.orm\".
     */
    public function testExceptionIfDependentFixtureNotWired() : void
    {
        // only runs on newer versions of doctrine/data-fixtures
        if (! method_exists(Loader::class, 'createFixture')) {
            \$this->markTestSkipped();
        }

        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            \$c->autowire(DependentOnRequiredConstructorArgsFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$loader->getFixtures();
    }

    public function testFixturesLoaderWithGroupsOptionViaInterface() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
              ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
              ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures(['staging']);
        \$this->assertCount(1, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
        ], \$actualFixtureClasses);
        \$this->assertInstanceOf(OtherFixtures::class, \$actualFixtures[0]);
    }

    public function testFixturesLoaderWithGroupsOptionViaTag() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG, ['group' => 'group1'])
                ->addTag(FixturesCompilerPass::FIXTURE_TAG, ['group' => 'group2']);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
              ->addTag(FixturesCompilerPass::FIXTURE_TAG, ['group' => 'group2']);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$this->assertCount(1, \$loader->getFixtures(['staging']));
        \$this->assertCount(1, \$loader->getFixtures(['group1']));
        \$this->assertCount(2, \$loader->getFixtures(['group2']));
        \$this->assertCount(0, \$loader->getFixtures(['group3']));
    }

    public function testLoadFixturesViaGroupWithMissingDependency() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$this->expectException(RuntimeException::class);
        \$this->expectExceptionMessage('Fixture \"Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\OtherFixtures\" was declared as a dependency for fixture \"Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures\\WithDependenciesFixtures\", but it was not included in any of the loaded fixture groups.');

        \$loader->getFixtures(['missingDependencyGroup']);
    }

    public function testLoadFixturesViaGroupWithFulfilledDependency() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures(['fulfilledDependencyGroup']);

        \$this->assertCount(2, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
            WithDependenciesFixtures::class,
        ], \$actualFixtureClasses);
    }

    public function testLoadFixturesByShortName() : void
    {
        \$kernel = new IntegrationTestKernel('dev', true);
        \$kernel->addServices(static function (ContainerBuilder \$c) : void {
            // has a \"staging\" group via the getGroups() method
            \$c->autowire(OtherFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            // no getGroups() method
            \$c->autowire(WithDependenciesFixtures::class)
                ->addTag(FixturesCompilerPass::FIXTURE_TAG);

            \$c->setAlias('test.doctrine.fixtures.loader', new Alias('doctrine.fixtures.loader', true));
        });
        \$kernel->boot();
        \$container = \$kernel->getContainer();

        /** @var ContainerAwareLoader \$loader */
        \$loader = \$container->get('test.doctrine.fixtures.loader');

        \$actualFixtures = \$loader->getFixtures(['OtherFixtures']);

        \$this->assertCount(1, \$actualFixtures);
        \$actualFixtureClasses = array_map(static function (\$fixture) {
            return get_class(\$fixture);
        }, \$actualFixtures);

        \$this->assertSame([
            OtherFixtures::class,
        ], \$actualFixtureClasses);
    }
}

class IntegrationTestKernel extends Kernel
{
    use MicroKernelTrait;

    /** @var callable */
    private \$servicesCallback;

    /** @var int */
    private \$randomKey;

    public function __construct(string \$environment, bool \$debug)
    {
        \$this->randomKey = rand(100, 999);

        parent::__construct(\$environment, \$debug);
    }

    protected function getContainerClass() : string
    {
        return 'test' . \$this->randomKey . parent::getContainerClass();
    }

    public function registerBundles() : array
    {
        return [
            new FrameworkBundle(),
            new DoctrineFixturesBundle(),
            new FooBundle(),
        ];
    }

    public function addServices(callable \$callback) : void
    {
        \$this->servicesCallback = \$callback;
    }

    protected function configureRoutes(RouteCollectionBuilder \$routes) : void
    {
    }

    protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader) : void
    {
        \$c->setParameter('kernel.secret', 'foo');
        \$c->register('doctrine', ManagerRegistry::class);
        \$callback = \$this->servicesCallback;
        \$callback(\$c);
    }

    public function getCacheDir() : string
    {
        return sys_get_temp_dir() . '/doctrine_fixtures_bundle' . \$this->randomKey;
    }

    public function getLogDir() : string
    {
        return sys_get_temp_dir();
    }
}
", "vendor/doctrine/doctrine-fixtures-bundle/Tests/IntegrationTest.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/Tests/IntegrationTest.php");
    }
}
