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

/* vendor/symfony/dependency-injection/Tests/Compiler/IntegrationTest.php */
class __TwigTemplate_4d0deb76b8957e483f9245ea6d96fc09c00fb0736ccaa935553edf1a348de13a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/IntegrationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Compiler/IntegrationTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\BarTagClass;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\FooBarTaggedClass;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\FooTagClass;

/**
 * This class tests the integration of the different compiler passes.
 */
class IntegrationTest extends TestCase
{
    /**
     * This tests that dependencies are correctly processed.
     *
     * We're checking that:
     *
     *   * A is public, B/C are private
     *   * A -> C
     *   * B -> C
     */
    public function testProcessRemovesAndInlinesRecursively()
    {
        \$container = new ContainerBuilder();
        \$container->setResourceTracking(false);

        \$a = \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('c'))
            ->setPublic(true)
        ;

        \$b = \$container
            ->register('b', '\\stdClass')
            ->addArgument(new Reference('c'))
            ->setPublic(false)
        ;

        \$c = \$container
            ->register('c', '\\stdClass')
            ->setPublic(false)
        ;

        \$container->compile();

        \$this->assertTrue(\$container->hasDefinition('a'));
        \$arguments = \$a->getArguments();
        \$this->assertSame(\$c, \$arguments[0]);
        \$this->assertFalse(\$container->hasDefinition('b'));
        \$this->assertFalse(\$container->hasDefinition('c'));
    }

    public function testProcessInlinesReferencesToAliases()
    {
        \$container = new ContainerBuilder();
        \$container->setResourceTracking(false);

        \$a = \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('b'))
            ->setPublic(true)
        ;

        \$container->setAlias('b', new Alias('c', false));

        \$c = \$container
            ->register('c', '\\stdClass')
            ->setPublic(false)
        ;

        \$container->compile();

        \$this->assertTrue(\$container->hasDefinition('a'));
        \$arguments = \$a->getArguments();
        \$this->assertSame(\$c, \$arguments[0]);
        \$this->assertFalse(\$container->hasAlias('b'));
        \$this->assertFalse(\$container->hasDefinition('c'));
    }

    public function testProcessInlinesWhenThereAreMultipleReferencesButFromTheSameDefinition()
    {
        \$container = new ContainerBuilder();
        \$container->setResourceTracking(false);

        \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('b'))
            ->addMethodCall('setC', [new Reference('c')])
            ->setPublic(true)
        ;

        \$container
            ->register('b', '\\stdClass')
            ->addArgument(new Reference('c'))
            ->setPublic(false)
        ;

        \$container
            ->register('c', '\\stdClass')
            ->setPublic(false)
        ;

        \$container->compile();

        \$this->assertTrue(\$container->hasDefinition('a'));
        \$this->assertFalse(\$container->hasDefinition('b'));
        \$this->assertFalse(\$container->hasDefinition('c'), 'Service C was not inlined.');
    }

    public function testCanDecorateServiceSubscriber()
    {
        \$container = new ContainerBuilder();
        \$container->register(ServiceSubscriberStub::class)
            ->addTag('container.service_subscriber')
            ->setPublic(true);

        \$container->register(DecoratedServiceSubscriber::class)
            ->setDecoratedService(ServiceSubscriberStub::class);

        \$container->compile();

        \$this->assertInstanceOf(DecoratedServiceSubscriber::class, \$container->get(ServiceSubscriberStub::class));
    }

    /**
     * @dataProvider getYamlCompileTests
     */
    public function testYamlContainerCompiles(\$directory, \$actualServiceId, \$expectedServiceId, ContainerBuilder \$mainContainer = null)
    {
        // allow a container to be passed in, which might have autoconfigure settings
        \$container = \$mainContainer ?: new ContainerBuilder();
        \$container->setResourceTracking(false);
        \$loader = new YamlFileLoader(\$container, new FileLocator(__DIR__.'/../Fixtures/yaml/integration/'.\$directory));
        \$loader->load('main.yml');
        \$container->compile();
        \$actualService = \$container->getDefinition(\$actualServiceId);

        // create a fresh ContainerBuilder, to avoid autoconfigure stuff
        \$container = new ContainerBuilder();
        \$container->setResourceTracking(false);
        \$loader = new YamlFileLoader(\$container, new FileLocator(__DIR__.'/../Fixtures/yaml/integration/'.\$directory));
        \$loader->load('expected.yml');
        \$container->compile();
        \$expectedService = \$container->getDefinition(\$expectedServiceId);

        // reset changes, we don't care if these differ
        \$actualService->setChanges([]);
        \$expectedService->setChanges([]);

        \$this->assertEquals(\$expectedService, \$actualService);
    }

    public function getYamlCompileTests()
    {
        \$container = new ContainerBuilder();
        \$container->registerForAutoconfiguration(IntegrationTestStub::class);
        yield [
            'autoconfigure_child_not_applied',
            'child_service',
            'child_service_expected',
            \$container,
        ];

        \$container = new ContainerBuilder();
        \$container->registerForAutoconfiguration(IntegrationTestStub::class);
        yield [
            'autoconfigure_parent_child',
            'child_service',
            'child_service_expected',
            \$container,
        ];

        \$container = new ContainerBuilder();
        \$container->registerForAutoconfiguration(IntegrationTestStub::class)
            ->addTag('from_autoconfigure');
        yield [
            'autoconfigure_parent_child_tags',
            'child_service',
            'child_service_expected',
            \$container,
        ];

        yield [
            'child_parent',
            'child_service',
            'child_service_expected',
        ];

        yield [
            'defaults_child_tags',
            'child_service',
            'child_service_expected',
        ];

        yield [
            'defaults_instanceof_importance',
            'main_service',
            'main_service_expected',
        ];

        yield [
            'defaults_parent_child',
            'child_service',
            'child_service_expected',
        ];

        yield [
            'instanceof_parent_child',
            'child_service',
            'child_service_expected',
        ];

        \$container = new ContainerBuilder();
        \$container->registerForAutoconfiguration(IntegrationTestStub::class)
            ->addMethodCall('setSunshine', ['supernova']);
        yield [
            'instanceof_and_calls',
            'main_service',
            'main_service_expected',
            \$container,
        ];
    }

    public function testTaggedServiceWithIndexAttribute()
    {
        \$container = new ContainerBuilder();
        \$container->register(BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar', ['foo' => 'bar'])
        ;
        \$container->register(FooTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register(FooBarTaggedClass::class)
            ->addArgument(new TaggedIteratorArgument('foo_bar', 'foo'))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get(FooBarTaggedClass::class);

        \$param = iterator_to_array(\$s->getParam()->getIterator());
        \$this->assertSame(['bar' => \$container->get(BarTagClass::class), 'foo_tag_class' => \$container->get(FooTagClass::class)], \$param);
    }

    public function testTaggedServiceWithIndexAttributeAndDefaultMethod()
    {
        \$container = new ContainerBuilder();
        \$container->register(BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register(FooTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar', ['foo' => 'foo'])
        ;
        \$container->register(FooBarTaggedClass::class)
            ->addArgument(new TaggedIteratorArgument('foo_bar', 'foo', 'getFooBar'))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get(FooBarTaggedClass::class);

        \$param = iterator_to_array(\$s->getParam()->getIterator());
        \$this->assertSame(['bar_tab_class_with_defaultmethod' => \$container->get(BarTagClass::class), 'foo' => \$container->get(FooTagClass::class)], \$param);
    }

    public function testTaggedServiceLocatorWithIndexAttribute()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar_tag', BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar', ['foo' => 'bar'])
        ;
        \$container->register('foo_tag', FooTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register('foo_bar_tagged', FooBarTaggedClass::class)
            ->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('foo_bar', 'foo')))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get('foo_bar_tagged');

        /** @var ServiceLocator \$serviceLocator */
        \$serviceLocator = \$s->getParam();
        \$this->assertTrue(\$s->getParam() instanceof ServiceLocator, sprintf('Wrong instance, should be an instance of ServiceLocator, %s given', \\is_object(\$serviceLocator) ? \\get_class(\$serviceLocator) : \\gettype(\$serviceLocator)));

        \$same = [
            'bar' => \$serviceLocator->get('bar'),
            'foo_tag_class' => \$serviceLocator->get('foo_tag_class'),
        ];
        \$this->assertSame(['bar' => \$container->get('bar_tag'), 'foo_tag_class' => \$container->get('foo_tag')], \$same);
    }

    public function testTaggedServiceLocatorWithIndexAttributeAndDefaultMethod()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar_tag', BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register('foo_tag', FooTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar', ['foo' => 'foo'])
        ;
        \$container->register('foo_bar_tagged', FooBarTaggedClass::class)
            ->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('foo_bar', 'foo', 'getFooBar')))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get('foo_bar_tagged');

        /** @var ServiceLocator \$serviceLocator */
        \$serviceLocator = \$s->getParam();
        \$this->assertTrue(\$s->getParam() instanceof ServiceLocator, sprintf('Wrong instance, should be an instance of ServiceLocator, %s given', \\is_object(\$serviceLocator) ? \\get_class(\$serviceLocator) : \\gettype(\$serviceLocator)));

        \$same = [
            'bar_tab_class_with_defaultmethod' => \$serviceLocator->get('bar_tab_class_with_defaultmethod'),
            'foo' => \$serviceLocator->get('foo'),
        ];
        \$this->assertSame(['bar_tab_class_with_defaultmethod' => \$container->get('bar_tag'), 'foo' => \$container->get('foo_tag')], \$same);
    }

    public function testTaggedServiceLocatorWithFallback()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar_tag', BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register('foo_bar_tagged', FooBarTaggedClass::class)
            ->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('foo_bar', null, null, true)))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get('foo_bar_tagged');

        /** @var ServiceLocator \$serviceLocator */
        \$serviceLocator = \$s->getParam();
        \$this->assertTrue(\$s->getParam() instanceof ServiceLocator, sprintf('Wrong instance, should be an instance of ServiceLocator, %s given', \\is_object(\$serviceLocator) ? \\get_class(\$serviceLocator) : \\gettype(\$serviceLocator)));

        \$expected = [
            'bar_tag' => \$container->get('bar_tag'),
        ];
        \$this->assertSame(\$expected, ['bar_tag' => \$serviceLocator->get('bar_tag')]);
    }

    public function testTaggedServiceLocatorWithDefaultIndex()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar_tag', BarTagClass::class)
            ->setPublic(true)
            ->addTag('app.foo_bar', ['foo_bar' => 'baz'])
        ;
        \$container->register('foo_bar_tagged', FooBarTaggedClass::class)
            ->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('app.foo_bar', null, null, true)))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get('foo_bar_tagged');

        /** @var ServiceLocator \$serviceLocator */
        \$serviceLocator = \$s->getParam();
        \$this->assertTrue(\$s->getParam() instanceof ServiceLocator, sprintf('Wrong instance, should be an instance of ServiceLocator, %s given', \\is_object(\$serviceLocator) ? \\get_class(\$serviceLocator) : \\gettype(\$serviceLocator)));

        \$expected = [
            'baz' => \$container->get('bar_tag'),
        ];
        \$this->assertSame(\$expected, ['baz' => \$serviceLocator->get('baz')]);
    }
}

class ServiceSubscriberStub implements ServiceSubscriberInterface
{
    public static function getSubscribedServices()
    {
        return [];
    }
}

class DecoratedServiceSubscriber
{
}

class IntegrationTestStub extends IntegrationTestStubParent
{
}

class IntegrationTestStubParent
{
    public function enableSummer(\$enable)
    {
        // methods used in calls - added here to prevent errors for not existing
    }

    public function setSunshine(\$type)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Compiler/IntegrationTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\DependencyInjection\\Tests\\Compiler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\DependencyInjection\\ServiceLocator;
use Symfony\\Component\\DependencyInjection\\ServiceSubscriberInterface;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\BarTagClass;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\FooBarTaggedClass;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\FooTagClass;

/**
 * This class tests the integration of the different compiler passes.
 */
class IntegrationTest extends TestCase
{
    /**
     * This tests that dependencies are correctly processed.
     *
     * We're checking that:
     *
     *   * A is public, B/C are private
     *   * A -> C
     *   * B -> C
     */
    public function testProcessRemovesAndInlinesRecursively()
    {
        \$container = new ContainerBuilder();
        \$container->setResourceTracking(false);

        \$a = \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('c'))
            ->setPublic(true)
        ;

        \$b = \$container
            ->register('b', '\\stdClass')
            ->addArgument(new Reference('c'))
            ->setPublic(false)
        ;

        \$c = \$container
            ->register('c', '\\stdClass')
            ->setPublic(false)
        ;

        \$container->compile();

        \$this->assertTrue(\$container->hasDefinition('a'));
        \$arguments = \$a->getArguments();
        \$this->assertSame(\$c, \$arguments[0]);
        \$this->assertFalse(\$container->hasDefinition('b'));
        \$this->assertFalse(\$container->hasDefinition('c'));
    }

    public function testProcessInlinesReferencesToAliases()
    {
        \$container = new ContainerBuilder();
        \$container->setResourceTracking(false);

        \$a = \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('b'))
            ->setPublic(true)
        ;

        \$container->setAlias('b', new Alias('c', false));

        \$c = \$container
            ->register('c', '\\stdClass')
            ->setPublic(false)
        ;

        \$container->compile();

        \$this->assertTrue(\$container->hasDefinition('a'));
        \$arguments = \$a->getArguments();
        \$this->assertSame(\$c, \$arguments[0]);
        \$this->assertFalse(\$container->hasAlias('b'));
        \$this->assertFalse(\$container->hasDefinition('c'));
    }

    public function testProcessInlinesWhenThereAreMultipleReferencesButFromTheSameDefinition()
    {
        \$container = new ContainerBuilder();
        \$container->setResourceTracking(false);

        \$container
            ->register('a', '\\stdClass')
            ->addArgument(new Reference('b'))
            ->addMethodCall('setC', [new Reference('c')])
            ->setPublic(true)
        ;

        \$container
            ->register('b', '\\stdClass')
            ->addArgument(new Reference('c'))
            ->setPublic(false)
        ;

        \$container
            ->register('c', '\\stdClass')
            ->setPublic(false)
        ;

        \$container->compile();

        \$this->assertTrue(\$container->hasDefinition('a'));
        \$this->assertFalse(\$container->hasDefinition('b'));
        \$this->assertFalse(\$container->hasDefinition('c'), 'Service C was not inlined.');
    }

    public function testCanDecorateServiceSubscriber()
    {
        \$container = new ContainerBuilder();
        \$container->register(ServiceSubscriberStub::class)
            ->addTag('container.service_subscriber')
            ->setPublic(true);

        \$container->register(DecoratedServiceSubscriber::class)
            ->setDecoratedService(ServiceSubscriberStub::class);

        \$container->compile();

        \$this->assertInstanceOf(DecoratedServiceSubscriber::class, \$container->get(ServiceSubscriberStub::class));
    }

    /**
     * @dataProvider getYamlCompileTests
     */
    public function testYamlContainerCompiles(\$directory, \$actualServiceId, \$expectedServiceId, ContainerBuilder \$mainContainer = null)
    {
        // allow a container to be passed in, which might have autoconfigure settings
        \$container = \$mainContainer ?: new ContainerBuilder();
        \$container->setResourceTracking(false);
        \$loader = new YamlFileLoader(\$container, new FileLocator(__DIR__.'/../Fixtures/yaml/integration/'.\$directory));
        \$loader->load('main.yml');
        \$container->compile();
        \$actualService = \$container->getDefinition(\$actualServiceId);

        // create a fresh ContainerBuilder, to avoid autoconfigure stuff
        \$container = new ContainerBuilder();
        \$container->setResourceTracking(false);
        \$loader = new YamlFileLoader(\$container, new FileLocator(__DIR__.'/../Fixtures/yaml/integration/'.\$directory));
        \$loader->load('expected.yml');
        \$container->compile();
        \$expectedService = \$container->getDefinition(\$expectedServiceId);

        // reset changes, we don't care if these differ
        \$actualService->setChanges([]);
        \$expectedService->setChanges([]);

        \$this->assertEquals(\$expectedService, \$actualService);
    }

    public function getYamlCompileTests()
    {
        \$container = new ContainerBuilder();
        \$container->registerForAutoconfiguration(IntegrationTestStub::class);
        yield [
            'autoconfigure_child_not_applied',
            'child_service',
            'child_service_expected',
            \$container,
        ];

        \$container = new ContainerBuilder();
        \$container->registerForAutoconfiguration(IntegrationTestStub::class);
        yield [
            'autoconfigure_parent_child',
            'child_service',
            'child_service_expected',
            \$container,
        ];

        \$container = new ContainerBuilder();
        \$container->registerForAutoconfiguration(IntegrationTestStub::class)
            ->addTag('from_autoconfigure');
        yield [
            'autoconfigure_parent_child_tags',
            'child_service',
            'child_service_expected',
            \$container,
        ];

        yield [
            'child_parent',
            'child_service',
            'child_service_expected',
        ];

        yield [
            'defaults_child_tags',
            'child_service',
            'child_service_expected',
        ];

        yield [
            'defaults_instanceof_importance',
            'main_service',
            'main_service_expected',
        ];

        yield [
            'defaults_parent_child',
            'child_service',
            'child_service_expected',
        ];

        yield [
            'instanceof_parent_child',
            'child_service',
            'child_service_expected',
        ];

        \$container = new ContainerBuilder();
        \$container->registerForAutoconfiguration(IntegrationTestStub::class)
            ->addMethodCall('setSunshine', ['supernova']);
        yield [
            'instanceof_and_calls',
            'main_service',
            'main_service_expected',
            \$container,
        ];
    }

    public function testTaggedServiceWithIndexAttribute()
    {
        \$container = new ContainerBuilder();
        \$container->register(BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar', ['foo' => 'bar'])
        ;
        \$container->register(FooTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register(FooBarTaggedClass::class)
            ->addArgument(new TaggedIteratorArgument('foo_bar', 'foo'))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get(FooBarTaggedClass::class);

        \$param = iterator_to_array(\$s->getParam()->getIterator());
        \$this->assertSame(['bar' => \$container->get(BarTagClass::class), 'foo_tag_class' => \$container->get(FooTagClass::class)], \$param);
    }

    public function testTaggedServiceWithIndexAttributeAndDefaultMethod()
    {
        \$container = new ContainerBuilder();
        \$container->register(BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register(FooTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar', ['foo' => 'foo'])
        ;
        \$container->register(FooBarTaggedClass::class)
            ->addArgument(new TaggedIteratorArgument('foo_bar', 'foo', 'getFooBar'))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get(FooBarTaggedClass::class);

        \$param = iterator_to_array(\$s->getParam()->getIterator());
        \$this->assertSame(['bar_tab_class_with_defaultmethod' => \$container->get(BarTagClass::class), 'foo' => \$container->get(FooTagClass::class)], \$param);
    }

    public function testTaggedServiceLocatorWithIndexAttribute()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar_tag', BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar', ['foo' => 'bar'])
        ;
        \$container->register('foo_tag', FooTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register('foo_bar_tagged', FooBarTaggedClass::class)
            ->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('foo_bar', 'foo')))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get('foo_bar_tagged');

        /** @var ServiceLocator \$serviceLocator */
        \$serviceLocator = \$s->getParam();
        \$this->assertTrue(\$s->getParam() instanceof ServiceLocator, sprintf('Wrong instance, should be an instance of ServiceLocator, %s given', \\is_object(\$serviceLocator) ? \\get_class(\$serviceLocator) : \\gettype(\$serviceLocator)));

        \$same = [
            'bar' => \$serviceLocator->get('bar'),
            'foo_tag_class' => \$serviceLocator->get('foo_tag_class'),
        ];
        \$this->assertSame(['bar' => \$container->get('bar_tag'), 'foo_tag_class' => \$container->get('foo_tag')], \$same);
    }

    public function testTaggedServiceLocatorWithIndexAttributeAndDefaultMethod()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar_tag', BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register('foo_tag', FooTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar', ['foo' => 'foo'])
        ;
        \$container->register('foo_bar_tagged', FooBarTaggedClass::class)
            ->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('foo_bar', 'foo', 'getFooBar')))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get('foo_bar_tagged');

        /** @var ServiceLocator \$serviceLocator */
        \$serviceLocator = \$s->getParam();
        \$this->assertTrue(\$s->getParam() instanceof ServiceLocator, sprintf('Wrong instance, should be an instance of ServiceLocator, %s given', \\is_object(\$serviceLocator) ? \\get_class(\$serviceLocator) : \\gettype(\$serviceLocator)));

        \$same = [
            'bar_tab_class_with_defaultmethod' => \$serviceLocator->get('bar_tab_class_with_defaultmethod'),
            'foo' => \$serviceLocator->get('foo'),
        ];
        \$this->assertSame(['bar_tab_class_with_defaultmethod' => \$container->get('bar_tag'), 'foo' => \$container->get('foo_tag')], \$same);
    }

    public function testTaggedServiceLocatorWithFallback()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar_tag', BarTagClass::class)
            ->setPublic(true)
            ->addTag('foo_bar')
        ;
        \$container->register('foo_bar_tagged', FooBarTaggedClass::class)
            ->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('foo_bar', null, null, true)))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get('foo_bar_tagged');

        /** @var ServiceLocator \$serviceLocator */
        \$serviceLocator = \$s->getParam();
        \$this->assertTrue(\$s->getParam() instanceof ServiceLocator, sprintf('Wrong instance, should be an instance of ServiceLocator, %s given', \\is_object(\$serviceLocator) ? \\get_class(\$serviceLocator) : \\gettype(\$serviceLocator)));

        \$expected = [
            'bar_tag' => \$container->get('bar_tag'),
        ];
        \$this->assertSame(\$expected, ['bar_tag' => \$serviceLocator->get('bar_tag')]);
    }

    public function testTaggedServiceLocatorWithDefaultIndex()
    {
        \$container = new ContainerBuilder();
        \$container->register('bar_tag', BarTagClass::class)
            ->setPublic(true)
            ->addTag('app.foo_bar', ['foo_bar' => 'baz'])
        ;
        \$container->register('foo_bar_tagged', FooBarTaggedClass::class)
            ->addArgument(new ServiceLocatorArgument(new TaggedIteratorArgument('app.foo_bar', null, null, true)))
            ->setPublic(true)
        ;

        \$container->compile();

        \$s = \$container->get('foo_bar_tagged');

        /** @var ServiceLocator \$serviceLocator */
        \$serviceLocator = \$s->getParam();
        \$this->assertTrue(\$s->getParam() instanceof ServiceLocator, sprintf('Wrong instance, should be an instance of ServiceLocator, %s given', \\is_object(\$serviceLocator) ? \\get_class(\$serviceLocator) : \\gettype(\$serviceLocator)));

        \$expected = [
            'baz' => \$container->get('bar_tag'),
        ];
        \$this->assertSame(\$expected, ['baz' => \$serviceLocator->get('baz')]);
    }
}

class ServiceSubscriberStub implements ServiceSubscriberInterface
{
    public static function getSubscribedServices()
    {
        return [];
    }
}

class DecoratedServiceSubscriber
{
}

class IntegrationTestStub extends IntegrationTestStubParent
{
}

class IntegrationTestStubParent
{
    public function enableSummer(\$enable)
    {
        // methods used in calls - added here to prevent errors for not existing
    }

    public function setSunshine(\$type)
    {
    }
}
", "vendor/symfony/dependency-injection/Tests/Compiler/IntegrationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Compiler/IntegrationTest.php");
    }
}
