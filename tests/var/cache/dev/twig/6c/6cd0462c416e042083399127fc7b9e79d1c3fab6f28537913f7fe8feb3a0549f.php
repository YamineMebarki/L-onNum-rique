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

/* vendor/symfony/event-dispatcher/Tests/Debug/TraceableEventDispatcherTest.php */
class __TwigTemplate_2b7d67797f300fa4c67a174ddab163995c9072b35191bd4dc172fca93449de26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/Debug/TraceableEventDispatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/Debug/TraceableEventDispatcherTest.php"));

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

namespace Symfony\\Component\\EventDispatcher\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;

class TraceableEventDispatcherTest extends TestCase
{
    public function testAddRemoveListener()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$tdispatcher->addListener('foo', \$listener = function () {});
        \$listeners = \$dispatcher->getListeners('foo');
        \$this->assertCount(1, \$listeners);
        \$this->assertSame(\$listener, \$listeners[0]);

        \$tdispatcher->removeListener('foo', \$listener);
        \$this->assertCount(0, \$dispatcher->getListeners('foo'));
    }

    public function testGetListeners()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$tdispatcher->addListener('foo', \$listener = function () {});
        \$this->assertSame(\$dispatcher->getListeners('foo'), \$tdispatcher->getListeners('foo'));
    }

    public function testHasListeners()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$this->assertFalse(\$dispatcher->hasListeners('foo'));
        \$this->assertFalse(\$tdispatcher->hasListeners('foo'));

        \$tdispatcher->addListener('foo', \$listener = function () {});
        \$this->assertTrue(\$dispatcher->hasListeners('foo'));
        \$this->assertTrue(\$tdispatcher->hasListeners('foo'));
    }

    public function testGetListenerPriority()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$tdispatcher->addListener('foo', function () {}, 123);

        \$listeners = \$dispatcher->getListeners('foo');
        \$this->assertSame(123, \$tdispatcher->getListenerPriority('foo', \$listeners[0]));

        // Verify that priority is preserved when listener is removed and re-added
        // in preProcess() and postProcess().
        \$tdispatcher->dispatch(new Event(), 'foo');
        \$listeners = \$dispatcher->getListeners('foo');
        \$this->assertSame(123, \$tdispatcher->getListenerPriority('foo', \$listeners[0]));
    }

    public function testGetListenerPriorityWhileDispatching()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$priorityWhileDispatching = null;

        \$listener = function () use (\$tdispatcher, &\$priorityWhileDispatching, &\$listener) {
            \$priorityWhileDispatching = \$tdispatcher->getListenerPriority('bar', \$listener);
        };

        \$tdispatcher->addListener('bar', \$listener, 5);
        \$tdispatcher->dispatch(new Event(), 'bar');
        \$this->assertSame(5, \$priorityWhileDispatching);
    }

    public function testAddRemoveSubscriber()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$subscriber = new EventSubscriber();

        \$tdispatcher->addSubscriber(\$subscriber);
        \$listeners = \$dispatcher->getListeners('foo');
        \$this->assertCount(1, \$listeners);
        \$this->assertSame([\$subscriber, 'call'], \$listeners[0]);

        \$tdispatcher->removeSubscriber(\$subscriber);
        \$this->assertCount(0, \$dispatcher->getListeners('foo'));
    }

    public function testGetCalledListeners()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function () {}, 5);

        \$listeners = \$tdispatcher->getNotCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
        unset(\$listeners[0]['stub']);
        \$this->assertEquals([], \$tdispatcher->getCalledListeners());
        \$this->assertEquals([['event' => 'foo', 'pretty' => 'closure', 'priority' => 5]], \$listeners);

        \$tdispatcher->dispatch(new Event(), 'foo');

        \$listeners = \$tdispatcher->getCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
        unset(\$listeners[0]['stub']);
        \$this->assertEquals([['event' => 'foo', 'pretty' => 'closure', 'priority' => 5]], \$listeners);
        \$this->assertEquals([], \$tdispatcher->getNotCalledListeners());
    }

    public function testClearCalledListeners()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function () {}, 5);

        \$tdispatcher->dispatch(new Event(), 'foo');
        \$tdispatcher->reset();

        \$listeners = \$tdispatcher->getNotCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
        unset(\$listeners[0]['stub']);
        \$this->assertEquals([], \$tdispatcher->getCalledListeners());
        \$this->assertEquals([['event' => 'foo', 'pretty' => 'closure', 'priority' => 5]], \$listeners);
    }

    public function testDispatchContractsEvent()
    {
        \$expectedEvent = new ContractsEvent();
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function (\$event) use (\$expectedEvent) {
            \$this->assertSame(\$event, \$expectedEvent);
        }, 5);
        \$tdispatcher->dispatch(\$expectedEvent, 'foo');

        \$listeners = \$tdispatcher->getCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
    }

    public function testDispatchAfterReset()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function () {}, 5);

        \$tdispatcher->reset();
        \$tdispatcher->dispatch(new Event(), 'foo');

        \$listeners = \$tdispatcher->getCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
    }

    public function testGetCalledListenersNested()
    {
        \$tdispatcher = null;
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$dispatcher->addListener('foo', function (Event \$event, \$eventName, \$dispatcher) use (&\$tdispatcher) {
            \$tdispatcher = \$dispatcher;
            \$dispatcher->dispatch(new Event(), 'bar');
        });
        \$dispatcher->addListener('bar', function (Event \$event) {});
        \$dispatcher->dispatch(new Event(), 'foo');
        \$this->assertSame(\$dispatcher, \$tdispatcher);
        \$this->assertCount(2, \$dispatcher->getCalledListeners());
    }

    public function testItReturnsNoOrphanedEventsWhenCreated()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertEmpty(\$events);
    }

    public function testItReturnsOrphanedEventsAfterDispatch()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->dispatch(new Event(), 'foo');
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertCount(1, \$events);
        \$this->assertEquals(['foo'], \$events);
    }

    public function testItDoesNotReturnHandledEvents()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function () {});
        \$tdispatcher->dispatch(new Event(), 'foo');
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertEmpty(\$events);
    }

    public function testLogger()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();

        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch(), \$logger);
        \$tdispatcher->addListener('foo', \$listener1 = function () {});
        \$tdispatcher->addListener('foo', \$listener2 = function () {});

        \$logger->expects(\$this->at(0))->method('debug')->with('Notified event \"{event}\" to listener \"{listener}\".', ['event' => 'foo', 'listener' => 'closure']);
        \$logger->expects(\$this->at(1))->method('debug')->with('Notified event \"{event}\" to listener \"{listener}\".', ['event' => 'foo', 'listener' => 'closure']);

        \$tdispatcher->dispatch(new Event(), 'foo');
    }

    public function testLoggerWithStoppedEvent()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();

        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch(), \$logger);
        \$tdispatcher->addListener('foo', \$listener1 = function (Event \$event) { \$event->stopPropagation(); });
        \$tdispatcher->addListener('foo', \$listener2 = function () {});

        \$logger->expects(\$this->at(0))->method('debug')->with('Notified event \"{event}\" to listener \"{listener}\".', ['event' => 'foo', 'listener' => 'closure']);
        \$logger->expects(\$this->at(1))->method('debug')->with('Listener \"{listener}\" stopped propagation of the event \"{event}\".', ['event' => 'foo', 'listener' => 'closure']);
        \$logger->expects(\$this->at(2))->method('debug')->with('Listener \"{listener}\" was not called for event \"{event}\".', ['event' => 'foo', 'listener' => 'closure']);

        \$tdispatcher->dispatch(new Event(), 'foo');
    }

    public function testDispatchCallListeners()
    {
        \$called = [];

        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());
        \$tdispatcher->addListener('foo', function () use (&\$called) { \$called[] = 'foo1'; }, 10);
        \$tdispatcher->addListener('foo', function () use (&\$called) { \$called[] = 'foo2'; }, 20);

        \$tdispatcher->dispatch(new Event(), 'foo');

        \$this->assertSame(['foo2', 'foo1'], \$called);
    }

    public function testDispatchNested()
    {
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$loop = 1;
        \$dispatchedEvents = 0;
        \$dispatcher->addListener('foo', \$listener1 = function () use (\$dispatcher, &\$loop) {
            ++\$loop;
            if (2 == \$loop) {
                \$dispatcher->dispatch(new Event(), 'foo');
            }
        });
        \$dispatcher->addListener('foo', function () use (&\$dispatchedEvents) {
            ++\$dispatchedEvents;
        });

        \$dispatcher->dispatch(new Event(), 'foo');

        \$this->assertSame(2, \$dispatchedEvents);
    }

    public function testDispatchReusedEventNested()
    {
        \$nestedCall = false;
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$dispatcher->addListener('foo', function (Event \$e) use (\$dispatcher) {
            \$dispatcher->dispatch(new Event(), 'bar', \$e);
        });
        \$dispatcher->addListener('bar', function (Event \$e) use (&\$nestedCall) {
            \$nestedCall = true;
        });

        \$this->assertFalse(\$nestedCall);
        \$dispatcher->dispatch(new Event(), 'foo');
        \$this->assertTrue(\$nestedCall);
    }

    public function testListenerCanRemoveItselfWhenExecuted()
    {
        \$eventDispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$listener1 = function (\$event, \$eventName, EventDispatcherInterface \$dispatcher) use (&\$listener1) {
            \$dispatcher->removeListener('foo', \$listener1);
        };
        \$eventDispatcher->addListener('foo', \$listener1);
        \$eventDispatcher->addListener('foo', function () {});
        \$eventDispatcher->dispatch(new Event(), 'foo');

        \$this->assertCount(1, \$eventDispatcher->getListeners('foo'), 'expected listener1 to be removed');
    }

    public function testClearOrphanedEvents()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->dispatch(new Event(), 'foo');
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertCount(1, \$events);
        \$tdispatcher->reset();
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertCount(0, \$events);
    }
}

class EventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return ['foo' => 'call'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/Tests/Debug/TraceableEventDispatcherTest.php";
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

namespace Symfony\\Component\\EventDispatcher\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\Debug\\TraceableEventDispatcher;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;

class TraceableEventDispatcherTest extends TestCase
{
    public function testAddRemoveListener()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$tdispatcher->addListener('foo', \$listener = function () {});
        \$listeners = \$dispatcher->getListeners('foo');
        \$this->assertCount(1, \$listeners);
        \$this->assertSame(\$listener, \$listeners[0]);

        \$tdispatcher->removeListener('foo', \$listener);
        \$this->assertCount(0, \$dispatcher->getListeners('foo'));
    }

    public function testGetListeners()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$tdispatcher->addListener('foo', \$listener = function () {});
        \$this->assertSame(\$dispatcher->getListeners('foo'), \$tdispatcher->getListeners('foo'));
    }

    public function testHasListeners()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$this->assertFalse(\$dispatcher->hasListeners('foo'));
        \$this->assertFalse(\$tdispatcher->hasListeners('foo'));

        \$tdispatcher->addListener('foo', \$listener = function () {});
        \$this->assertTrue(\$dispatcher->hasListeners('foo'));
        \$this->assertTrue(\$tdispatcher->hasListeners('foo'));
    }

    public function testGetListenerPriority()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$tdispatcher->addListener('foo', function () {}, 123);

        \$listeners = \$dispatcher->getListeners('foo');
        \$this->assertSame(123, \$tdispatcher->getListenerPriority('foo', \$listeners[0]));

        // Verify that priority is preserved when listener is removed and re-added
        // in preProcess() and postProcess().
        \$tdispatcher->dispatch(new Event(), 'foo');
        \$listeners = \$dispatcher->getListeners('foo');
        \$this->assertSame(123, \$tdispatcher->getListenerPriority('foo', \$listeners[0]));
    }

    public function testGetListenerPriorityWhileDispatching()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$priorityWhileDispatching = null;

        \$listener = function () use (\$tdispatcher, &\$priorityWhileDispatching, &\$listener) {
            \$priorityWhileDispatching = \$tdispatcher->getListenerPriority('bar', \$listener);
        };

        \$tdispatcher->addListener('bar', \$listener, 5);
        \$tdispatcher->dispatch(new Event(), 'bar');
        \$this->assertSame(5, \$priorityWhileDispatching);
    }

    public function testAddRemoveSubscriber()
    {
        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());

        \$subscriber = new EventSubscriber();

        \$tdispatcher->addSubscriber(\$subscriber);
        \$listeners = \$dispatcher->getListeners('foo');
        \$this->assertCount(1, \$listeners);
        \$this->assertSame([\$subscriber, 'call'], \$listeners[0]);

        \$tdispatcher->removeSubscriber(\$subscriber);
        \$this->assertCount(0, \$dispatcher->getListeners('foo'));
    }

    public function testGetCalledListeners()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function () {}, 5);

        \$listeners = \$tdispatcher->getNotCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
        unset(\$listeners[0]['stub']);
        \$this->assertEquals([], \$tdispatcher->getCalledListeners());
        \$this->assertEquals([['event' => 'foo', 'pretty' => 'closure', 'priority' => 5]], \$listeners);

        \$tdispatcher->dispatch(new Event(), 'foo');

        \$listeners = \$tdispatcher->getCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
        unset(\$listeners[0]['stub']);
        \$this->assertEquals([['event' => 'foo', 'pretty' => 'closure', 'priority' => 5]], \$listeners);
        \$this->assertEquals([], \$tdispatcher->getNotCalledListeners());
    }

    public function testClearCalledListeners()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function () {}, 5);

        \$tdispatcher->dispatch(new Event(), 'foo');
        \$tdispatcher->reset();

        \$listeners = \$tdispatcher->getNotCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
        unset(\$listeners[0]['stub']);
        \$this->assertEquals([], \$tdispatcher->getCalledListeners());
        \$this->assertEquals([['event' => 'foo', 'pretty' => 'closure', 'priority' => 5]], \$listeners);
    }

    public function testDispatchContractsEvent()
    {
        \$expectedEvent = new ContractsEvent();
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function (\$event) use (\$expectedEvent) {
            \$this->assertSame(\$event, \$expectedEvent);
        }, 5);
        \$tdispatcher->dispatch(\$expectedEvent, 'foo');

        \$listeners = \$tdispatcher->getCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
    }

    public function testDispatchAfterReset()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function () {}, 5);

        \$tdispatcher->reset();
        \$tdispatcher->dispatch(new Event(), 'foo');

        \$listeners = \$tdispatcher->getCalledListeners();
        \$this->assertArrayHasKey('stub', \$listeners[0]);
    }

    public function testGetCalledListenersNested()
    {
        \$tdispatcher = null;
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$dispatcher->addListener('foo', function (Event \$event, \$eventName, \$dispatcher) use (&\$tdispatcher) {
            \$tdispatcher = \$dispatcher;
            \$dispatcher->dispatch(new Event(), 'bar');
        });
        \$dispatcher->addListener('bar', function (Event \$event) {});
        \$dispatcher->dispatch(new Event(), 'foo');
        \$this->assertSame(\$dispatcher, \$tdispatcher);
        \$this->assertCount(2, \$dispatcher->getCalledListeners());
    }

    public function testItReturnsNoOrphanedEventsWhenCreated()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertEmpty(\$events);
    }

    public function testItReturnsOrphanedEventsAfterDispatch()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->dispatch(new Event(), 'foo');
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertCount(1, \$events);
        \$this->assertEquals(['foo'], \$events);
    }

    public function testItDoesNotReturnHandledEvents()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->addListener('foo', function () {});
        \$tdispatcher->dispatch(new Event(), 'foo');
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertEmpty(\$events);
    }

    public function testLogger()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();

        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch(), \$logger);
        \$tdispatcher->addListener('foo', \$listener1 = function () {});
        \$tdispatcher->addListener('foo', \$listener2 = function () {});

        \$logger->expects(\$this->at(0))->method('debug')->with('Notified event \"{event}\" to listener \"{listener}\".', ['event' => 'foo', 'listener' => 'closure']);
        \$logger->expects(\$this->at(1))->method('debug')->with('Notified event \"{event}\" to listener \"{listener}\".', ['event' => 'foo', 'listener' => 'closure']);

        \$tdispatcher->dispatch(new Event(), 'foo');
    }

    public function testLoggerWithStoppedEvent()
    {
        \$logger = \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock();

        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch(), \$logger);
        \$tdispatcher->addListener('foo', \$listener1 = function (Event \$event) { \$event->stopPropagation(); });
        \$tdispatcher->addListener('foo', \$listener2 = function () {});

        \$logger->expects(\$this->at(0))->method('debug')->with('Notified event \"{event}\" to listener \"{listener}\".', ['event' => 'foo', 'listener' => 'closure']);
        \$logger->expects(\$this->at(1))->method('debug')->with('Listener \"{listener}\" stopped propagation of the event \"{event}\".', ['event' => 'foo', 'listener' => 'closure']);
        \$logger->expects(\$this->at(2))->method('debug')->with('Listener \"{listener}\" was not called for event \"{event}\".', ['event' => 'foo', 'listener' => 'closure']);

        \$tdispatcher->dispatch(new Event(), 'foo');
    }

    public function testDispatchCallListeners()
    {
        \$called = [];

        \$dispatcher = new EventDispatcher();
        \$tdispatcher = new TraceableEventDispatcher(\$dispatcher, new Stopwatch());
        \$tdispatcher->addListener('foo', function () use (&\$called) { \$called[] = 'foo1'; }, 10);
        \$tdispatcher->addListener('foo', function () use (&\$called) { \$called[] = 'foo2'; }, 20);

        \$tdispatcher->dispatch(new Event(), 'foo');

        \$this->assertSame(['foo2', 'foo1'], \$called);
    }

    public function testDispatchNested()
    {
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$loop = 1;
        \$dispatchedEvents = 0;
        \$dispatcher->addListener('foo', \$listener1 = function () use (\$dispatcher, &\$loop) {
            ++\$loop;
            if (2 == \$loop) {
                \$dispatcher->dispatch(new Event(), 'foo');
            }
        });
        \$dispatcher->addListener('foo', function () use (&\$dispatchedEvents) {
            ++\$dispatchedEvents;
        });

        \$dispatcher->dispatch(new Event(), 'foo');

        \$this->assertSame(2, \$dispatchedEvents);
    }

    public function testDispatchReusedEventNested()
    {
        \$nestedCall = false;
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$dispatcher->addListener('foo', function (Event \$e) use (\$dispatcher) {
            \$dispatcher->dispatch(new Event(), 'bar', \$e);
        });
        \$dispatcher->addListener('bar', function (Event \$e) use (&\$nestedCall) {
            \$nestedCall = true;
        });

        \$this->assertFalse(\$nestedCall);
        \$dispatcher->dispatch(new Event(), 'foo');
        \$this->assertTrue(\$nestedCall);
    }

    public function testListenerCanRemoveItselfWhenExecuted()
    {
        \$eventDispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$listener1 = function (\$event, \$eventName, EventDispatcherInterface \$dispatcher) use (&\$listener1) {
            \$dispatcher->removeListener('foo', \$listener1);
        };
        \$eventDispatcher->addListener('foo', \$listener1);
        \$eventDispatcher->addListener('foo', function () {});
        \$eventDispatcher->dispatch(new Event(), 'foo');

        \$this->assertCount(1, \$eventDispatcher->getListeners('foo'), 'expected listener1 to be removed');
    }

    public function testClearOrphanedEvents()
    {
        \$tdispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$tdispatcher->dispatch(new Event(), 'foo');
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertCount(1, \$events);
        \$tdispatcher->reset();
        \$events = \$tdispatcher->getOrphanedEvents();
        \$this->assertCount(0, \$events);
    }
}

class EventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return ['foo' => 'call'];
    }
}
", "vendor/symfony/event-dispatcher/Tests/Debug/TraceableEventDispatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/Tests/Debug/TraceableEventDispatcherTest.php");
    }
}