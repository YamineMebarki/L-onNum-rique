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

/* vendor/symfony/event-dispatcher/Tests/DependencyInjection/RegisterListenersPassTest.php */
class __TwigTemplate_1a4ae8bedce164a033ab9550c97f120eb804221d4eb41338b9a068be19c3bdee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/DependencyInjection/RegisterListenersPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/DependencyInjection/RegisterListenersPassTest.php"));

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

namespace Symfony\\Component\\EventDispatcher\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class RegisterListenersPassTest extends TestCase
{
    /**
     * Tests that event subscribers not implementing EventSubscriberInterface
     * trigger an exception.
     */
    public function testEventSubscriberWithoutInterface()
    {
        \$this->expectException('InvalidArgumentException');
        \$builder = new ContainerBuilder();
        \$builder->register('event_dispatcher');
        \$builder->register('my_event_subscriber', 'stdClass')
            ->addTag('kernel.event_subscriber');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$builder);
    }

    public function testValidEventSubscriber()
    {
        \$builder = new ContainerBuilder();
        \$eventDispatcherDefinition = \$builder->register('event_dispatcher');
        \$builder->register('my_event_subscriber', 'Symfony\\Component\\EventDispatcher\\Tests\\DependencyInjection\\SubscriberService')
            ->addTag('kernel.event_subscriber');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$builder);

        \$expectedCalls = [
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('my_event_subscriber')), 'onEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$eventDispatcherDefinition->getMethodCalls());
    }

    public function testAliasedEventSubscriber(): void
    {
        \$builder = new ContainerBuilder();
        \$builder->setParameter('event_dispatcher.event_aliases', [AliasedEvent::class => 'aliased_event']);
        \$builder->register('event_dispatcher');
        \$builder->register('my_event_subscriber', AliasedSubscriber::class)
            ->addTag('kernel.event_subscriber');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$builder);

        \$expectedCalls = [
            [
                'addListener',
                [
                    'aliased_event',
                    [new ServiceClosureArgument(new Reference('my_event_subscriber')), 'onAliasedEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$builder->getDefinition('event_dispatcher')->getMethodCalls());
    }

    public function testAbstractEventListener()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The service \"foo\" tagged \"kernel.event_listener\" must not be abstract.');
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass')->setAbstract(true)->addTag('kernel.event_listener', []);
        \$container->register('event_dispatcher', 'stdClass');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);
    }

    public function testAbstractEventSubscriber()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The service \"foo\" tagged \"kernel.event_subscriber\" must not be abstract.');
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass')->setAbstract(true)->addTag('kernel.event_subscriber', []);
        \$container->register('event_dispatcher', 'stdClass');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);
    }

    public function testEventSubscriberResolvableClassName()
    {
        \$container = new ContainerBuilder();

        \$container->setParameter('subscriber.class', 'Symfony\\Component\\EventDispatcher\\Tests\\DependencyInjection\\SubscriberService');
        \$container->register('foo', '%subscriber.class%')->addTag('kernel.event_subscriber', []);
        \$container->register('event_dispatcher', 'stdClass');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);

        \$definition = \$container->getDefinition('event_dispatcher');
        \$expectedCalls = [
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('foo')), 'onEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$definition->getMethodCalls());
    }

    public function testHotPathEvents()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', SubscriberService::class)->addTag('kernel.event_subscriber', []);
        \$container->register('event_dispatcher', 'stdClass');

        (new RegisterListenersPass())->setHotPathEvents(['event'])->process(\$container);

        \$this->assertTrue(\$container->getDefinition('foo')->hasTag('container.hot_path'));
    }

    public function testEventSubscriberUnresolvableClassName()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('You have requested a non-existent parameter \"subscriber.class\"');
        \$container = new ContainerBuilder();
        \$container->register('foo', '%subscriber.class%')->addTag('kernel.event_subscriber', []);
        \$container->register('event_dispatcher', 'stdClass');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);
    }

    public function testInvokableEventListener()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', \\stdClass::class)->addTag('kernel.event_listener', ['event' => 'foo.bar']);
        \$container->register('bar', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => 'foo.bar']);
        \$container->register('baz', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => 'event']);
        \$container->register('event_dispatcher', \\stdClass::class);

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);

        \$definition = \$container->getDefinition('event_dispatcher');
        \$expectedCalls = [
            [
                'addListener',
                [
                    'foo.bar',
                    [new ServiceClosureArgument(new Reference('foo')), 'onFooBar'],
                    0,
                ],
            ],
            [
                'addListener',
                [
                    'foo.bar',
                    [new ServiceClosureArgument(new Reference('bar')), '__invoke'],
                    0,
                ],
            ],
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('baz')), 'onEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$definition->getMethodCalls());
    }

    public function testAliasedEventListener(): void
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('event_dispatcher.event_aliases', [AliasedEvent::class => 'aliased_event']);
        \$container->register('foo', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => AliasedEvent::class, 'method' => 'onEvent']);
        \$container->register('event_dispatcher');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);

        \$definition = \$container->getDefinition('event_dispatcher');
        \$expectedCalls = [
            [
                'addListener',
                [
                    'aliased_event',
                    [new ServiceClosureArgument(new Reference('foo')), 'onEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$definition->getMethodCalls());
    }
}

class SubscriberService implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'event' => 'onEvent',
        ];
    }
}

class InvokableListenerService
{
    public function __invoke()
    {
    }

    public function onEvent()
    {
    }
}

final class AliasedSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            AliasedEvent::class => 'onAliasedEvent',
        ];
    }
}

final class AliasedEvent
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/Tests/DependencyInjection/RegisterListenersPassTest.php";
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

namespace Symfony\\Component\\EventDispatcher\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class RegisterListenersPassTest extends TestCase
{
    /**
     * Tests that event subscribers not implementing EventSubscriberInterface
     * trigger an exception.
     */
    public function testEventSubscriberWithoutInterface()
    {
        \$this->expectException('InvalidArgumentException');
        \$builder = new ContainerBuilder();
        \$builder->register('event_dispatcher');
        \$builder->register('my_event_subscriber', 'stdClass')
            ->addTag('kernel.event_subscriber');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$builder);
    }

    public function testValidEventSubscriber()
    {
        \$builder = new ContainerBuilder();
        \$eventDispatcherDefinition = \$builder->register('event_dispatcher');
        \$builder->register('my_event_subscriber', 'Symfony\\Component\\EventDispatcher\\Tests\\DependencyInjection\\SubscriberService')
            ->addTag('kernel.event_subscriber');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$builder);

        \$expectedCalls = [
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('my_event_subscriber')), 'onEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$eventDispatcherDefinition->getMethodCalls());
    }

    public function testAliasedEventSubscriber(): void
    {
        \$builder = new ContainerBuilder();
        \$builder->setParameter('event_dispatcher.event_aliases', [AliasedEvent::class => 'aliased_event']);
        \$builder->register('event_dispatcher');
        \$builder->register('my_event_subscriber', AliasedSubscriber::class)
            ->addTag('kernel.event_subscriber');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$builder);

        \$expectedCalls = [
            [
                'addListener',
                [
                    'aliased_event',
                    [new ServiceClosureArgument(new Reference('my_event_subscriber')), 'onAliasedEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$builder->getDefinition('event_dispatcher')->getMethodCalls());
    }

    public function testAbstractEventListener()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The service \"foo\" tagged \"kernel.event_listener\" must not be abstract.');
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass')->setAbstract(true)->addTag('kernel.event_listener', []);
        \$container->register('event_dispatcher', 'stdClass');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);
    }

    public function testAbstractEventSubscriber()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('The service \"foo\" tagged \"kernel.event_subscriber\" must not be abstract.');
        \$container = new ContainerBuilder();
        \$container->register('foo', 'stdClass')->setAbstract(true)->addTag('kernel.event_subscriber', []);
        \$container->register('event_dispatcher', 'stdClass');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);
    }

    public function testEventSubscriberResolvableClassName()
    {
        \$container = new ContainerBuilder();

        \$container->setParameter('subscriber.class', 'Symfony\\Component\\EventDispatcher\\Tests\\DependencyInjection\\SubscriberService');
        \$container->register('foo', '%subscriber.class%')->addTag('kernel.event_subscriber', []);
        \$container->register('event_dispatcher', 'stdClass');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);

        \$definition = \$container->getDefinition('event_dispatcher');
        \$expectedCalls = [
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('foo')), 'onEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$definition->getMethodCalls());
    }

    public function testHotPathEvents()
    {
        \$container = new ContainerBuilder();

        \$container->register('foo', SubscriberService::class)->addTag('kernel.event_subscriber', []);
        \$container->register('event_dispatcher', 'stdClass');

        (new RegisterListenersPass())->setHotPathEvents(['event'])->process(\$container);

        \$this->assertTrue(\$container->getDefinition('foo')->hasTag('container.hot_path'));
    }

    public function testEventSubscriberUnresolvableClassName()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('You have requested a non-existent parameter \"subscriber.class\"');
        \$container = new ContainerBuilder();
        \$container->register('foo', '%subscriber.class%')->addTag('kernel.event_subscriber', []);
        \$container->register('event_dispatcher', 'stdClass');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);
    }

    public function testInvokableEventListener()
    {
        \$container = new ContainerBuilder();
        \$container->register('foo', \\stdClass::class)->addTag('kernel.event_listener', ['event' => 'foo.bar']);
        \$container->register('bar', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => 'foo.bar']);
        \$container->register('baz', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => 'event']);
        \$container->register('event_dispatcher', \\stdClass::class);

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);

        \$definition = \$container->getDefinition('event_dispatcher');
        \$expectedCalls = [
            [
                'addListener',
                [
                    'foo.bar',
                    [new ServiceClosureArgument(new Reference('foo')), 'onFooBar'],
                    0,
                ],
            ],
            [
                'addListener',
                [
                    'foo.bar',
                    [new ServiceClosureArgument(new Reference('bar')), '__invoke'],
                    0,
                ],
            ],
            [
                'addListener',
                [
                    'event',
                    [new ServiceClosureArgument(new Reference('baz')), 'onEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$definition->getMethodCalls());
    }

    public function testAliasedEventListener(): void
    {
        \$container = new ContainerBuilder();
        \$container->setParameter('event_dispatcher.event_aliases', [AliasedEvent::class => 'aliased_event']);
        \$container->register('foo', InvokableListenerService::class)->addTag('kernel.event_listener', ['event' => AliasedEvent::class, 'method' => 'onEvent']);
        \$container->register('event_dispatcher');

        \$registerListenersPass = new RegisterListenersPass();
        \$registerListenersPass->process(\$container);

        \$definition = \$container->getDefinition('event_dispatcher');
        \$expectedCalls = [
            [
                'addListener',
                [
                    'aliased_event',
                    [new ServiceClosureArgument(new Reference('foo')), 'onEvent'],
                    0,
                ],
            ],
        ];
        \$this->assertEquals(\$expectedCalls, \$definition->getMethodCalls());
    }
}

class SubscriberService implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'event' => 'onEvent',
        ];
    }
}

class InvokableListenerService
{
    public function __invoke()
    {
    }

    public function onEvent()
    {
    }
}

final class AliasedSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            AliasedEvent::class => 'onAliasedEvent',
        ];
    }
}

final class AliasedEvent
{
}
", "vendor/symfony/event-dispatcher/Tests/DependencyInjection/RegisterListenersPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/Tests/DependencyInjection/RegisterListenersPassTest.php");
    }
}
