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

/* vendor/symfony/http-kernel/Tests/Debug/TraceableEventDispatcherTest.php */
class __TwigTemplate_18b43d609dd9c2cfa8aed40ad5fa1f13e61aca8352c22ab6acc0b379591bce27 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Debug/TraceableEventDispatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/Debug/TraceableEventDispatcherTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher;
use Symfony\\Component\\HttpKernel\\HttpKernel;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class TraceableEventDispatcherTest extends TestCase
{
    public function testStopwatchSections()
    {
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), \$stopwatch = new Stopwatch());
        \$kernel = \$this->getHttpKernel(\$dispatcher, function () { return new Response('', 200, ['X-Debug-Token' => '292e1e']); });
        \$request = Request::create('/');
        \$response = \$kernel->handle(\$request);
        \$kernel->terminate(\$request, \$response);

        \$events = \$stopwatch->getSectionEvents(\$response->headers->get('X-Debug-Token'));
        \$this->assertEquals([
            '__section__',
            'kernel.request',
            'kernel.controller',
            'kernel.controller_arguments',
            'controller',
            'kernel.response',
            'kernel.terminate',
        ], array_keys(\$events));
    }

    public function testStopwatchCheckControllerOnRequestEvent()
    {
        \$stopwatch = \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\Stopwatch')
            ->setMethods(['isStarted'])
            ->getMock();
        \$stopwatch->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(false);

        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), \$stopwatch);

        \$kernel = \$this->getHttpKernel(\$dispatcher, function () { return new Response(); });
        \$request = Request::create('/');
        \$kernel->handle(\$request);
    }

    public function testStopwatchStopControllerOnRequestEvent()
    {
        \$stopwatch = \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\Stopwatch')
            ->setMethods(['isStarted', 'stop'])
            ->getMock();
        \$stopwatch->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(true);
        \$stopwatch->expects(\$this->once())
            ->method('stop');

        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), \$stopwatch);

        \$kernel = \$this->getHttpKernel(\$dispatcher, function () { return new Response(); });
        \$request = Request::create('/');
        \$kernel->handle(\$request);
    }

    public function testAddListenerNested()
    {
        \$called1 = false;
        \$called2 = false;
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$dispatcher->addListener('my-event', function () use (\$dispatcher, &\$called1, &\$called2) {
            \$called1 = true;
            \$dispatcher->addListener('my-event', function () use (&\$called2) {
                \$called2 = true;
            });
        });
        \$dispatcher->dispatch(new Event(), 'my-event');
        \$this->assertTrue(\$called1);
        \$this->assertFalse(\$called2);
        \$dispatcher->dispatch(new Event(), 'my-event');
        \$this->assertTrue(\$called2);
    }

    public function testListenerCanRemoveItselfWhenExecuted()
    {
        \$eventDispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$listener1 = function () use (\$eventDispatcher, &\$listener1) {
            \$eventDispatcher->removeListener('foo', \$listener1);
        };
        \$eventDispatcher->addListener('foo', \$listener1);
        \$eventDispatcher->addListener('foo', function () {});
        \$eventDispatcher->dispatch(new Event(), 'foo');

        \$this->assertCount(1, \$eventDispatcher->getListeners('foo'), 'expected listener1 to be removed');
    }

    protected function getHttpKernel(\$dispatcher, \$controller)
    {
        \$controllerResolver = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface')->getMock();
        \$controllerResolver->expects(\$this->once())->method('getController')->willReturn(\$controller);
        \$argumentResolver = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface')->getMock();
        \$argumentResolver->expects(\$this->once())->method('getArguments')->willReturn([]);

        return new HttpKernel(\$dispatcher, \$controllerResolver, new RequestStack(), \$argumentResolver);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/Debug/TraceableEventDispatcherTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher;
use Symfony\\Component\\HttpKernel\\HttpKernel;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class TraceableEventDispatcherTest extends TestCase
{
    public function testStopwatchSections()
    {
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), \$stopwatch = new Stopwatch());
        \$kernel = \$this->getHttpKernel(\$dispatcher, function () { return new Response('', 200, ['X-Debug-Token' => '292e1e']); });
        \$request = Request::create('/');
        \$response = \$kernel->handle(\$request);
        \$kernel->terminate(\$request, \$response);

        \$events = \$stopwatch->getSectionEvents(\$response->headers->get('X-Debug-Token'));
        \$this->assertEquals([
            '__section__',
            'kernel.request',
            'kernel.controller',
            'kernel.controller_arguments',
            'controller',
            'kernel.response',
            'kernel.terminate',
        ], array_keys(\$events));
    }

    public function testStopwatchCheckControllerOnRequestEvent()
    {
        \$stopwatch = \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\Stopwatch')
            ->setMethods(['isStarted'])
            ->getMock();
        \$stopwatch->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(false);

        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), \$stopwatch);

        \$kernel = \$this->getHttpKernel(\$dispatcher, function () { return new Response(); });
        \$request = Request::create('/');
        \$kernel->handle(\$request);
    }

    public function testStopwatchStopControllerOnRequestEvent()
    {
        \$stopwatch = \$this->getMockBuilder('Symfony\\Component\\Stopwatch\\Stopwatch')
            ->setMethods(['isStarted', 'stop'])
            ->getMock();
        \$stopwatch->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(true);
        \$stopwatch->expects(\$this->once())
            ->method('stop');

        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), \$stopwatch);

        \$kernel = \$this->getHttpKernel(\$dispatcher, function () { return new Response(); });
        \$request = Request::create('/');
        \$kernel->handle(\$request);
    }

    public function testAddListenerNested()
    {
        \$called1 = false;
        \$called2 = false;
        \$dispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$dispatcher->addListener('my-event', function () use (\$dispatcher, &\$called1, &\$called2) {
            \$called1 = true;
            \$dispatcher->addListener('my-event', function () use (&\$called2) {
                \$called2 = true;
            });
        });
        \$dispatcher->dispatch(new Event(), 'my-event');
        \$this->assertTrue(\$called1);
        \$this->assertFalse(\$called2);
        \$dispatcher->dispatch(new Event(), 'my-event');
        \$this->assertTrue(\$called2);
    }

    public function testListenerCanRemoveItselfWhenExecuted()
    {
        \$eventDispatcher = new TraceableEventDispatcher(new EventDispatcher(), new Stopwatch());
        \$listener1 = function () use (\$eventDispatcher, &\$listener1) {
            \$eventDispatcher->removeListener('foo', \$listener1);
        };
        \$eventDispatcher->addListener('foo', \$listener1);
        \$eventDispatcher->addListener('foo', function () {});
        \$eventDispatcher->dispatch(new Event(), 'foo');

        \$this->assertCount(1, \$eventDispatcher->getListeners('foo'), 'expected listener1 to be removed');
    }

    protected function getHttpKernel(\$dispatcher, \$controller)
    {
        \$controllerResolver = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface')->getMock();
        \$controllerResolver->expects(\$this->once())->method('getController')->willReturn(\$controller);
        \$argumentResolver = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface')->getMock();
        \$argumentResolver->expects(\$this->once())->method('getArguments')->willReturn([]);

        return new HttpKernel(\$dispatcher, \$controllerResolver, new RequestStack(), \$argumentResolver);
    }
}
", "vendor/symfony/http-kernel/Tests/Debug/TraceableEventDispatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/Debug/TraceableEventDispatcherTest.php");
    }
}
