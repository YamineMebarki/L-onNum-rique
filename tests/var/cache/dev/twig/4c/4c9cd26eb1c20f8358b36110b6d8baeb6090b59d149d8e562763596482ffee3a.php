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

/* vendor/symfony/http-kernel/Tests/EventListener/ExceptionListenerTest.php */
class __TwigTemplate_fe79e3a9ab2904fca896978cc785647150c29cd6835441e24afe828494c93fa8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/ExceptionListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/ExceptionListenerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;
use Symfony\\Component\\HttpKernel\\Tests\\Logger;

/**
 * ExceptionListenerTest.
 *
 * @author Robert Schönthal <seroscho@googlemail.com>
 *
 * @group time-sensitive
 */
class ExceptionListenerTest extends TestCase
{
    public function testConstruct()
    {
        \$logger = new TestLogger();
        \$l = new ExceptionListener('foo', \$logger);

        \$_logger = new \\ReflectionProperty(\\get_class(\$l), 'logger');
        \$_logger->setAccessible(true);
        \$_controller = new \\ReflectionProperty(\\get_class(\$l), 'controller');
        \$_controller->setAccessible(true);

        \$this->assertSame(\$logger, \$_logger->getValue(\$l));
        \$this->assertSame('foo', \$_controller->getValue(\$l));
    }

    /**
     * @dataProvider provider
     */
    public function testHandleWithoutLogger(\$event, \$event2)
    {
        \$this->iniSet('error_log', file_exists('/dev/null') ? '/dev/null' : 'nul');

        \$l = new ExceptionListener('foo');
        \$l->logKernelException(\$event);
        \$l->onKernelException(\$event);

        \$this->assertEquals(new Response('foo'), \$event->getResponse());

        try {
            \$l->logKernelException(\$event2);
            \$l->onKernelException(\$event2);
            \$this->fail('RuntimeException expected');
        } catch (\\RuntimeException \$e) {
            \$this->assertSame('bar', \$e->getMessage());
            \$this->assertSame('foo', \$e->getPrevious()->getMessage());
        }
    }

    /**
     * @dataProvider provider
     */
    public function testHandleWithLogger(\$event, \$event2)
    {
        \$logger = new TestLogger();

        \$l = new ExceptionListener('foo', \$logger);
        \$l->logKernelException(\$event);
        \$l->onKernelException(\$event);

        \$this->assertEquals(new Response('foo'), \$event->getResponse());

        try {
            \$l->logKernelException(\$event2);
            \$l->onKernelException(\$event2);
            \$this->fail('RuntimeException expected');
        } catch (\\RuntimeException \$e) {
            \$this->assertSame('bar', \$e->getMessage());
            \$this->assertSame('foo', \$e->getPrevious()->getMessage());
        }

        \$this->assertEquals(3, \$logger->countErrors());
        \$this->assertCount(3, \$logger->getLogs('critical'));
    }

    public function provider()
    {
        if (!class_exists('Symfony\\Component\\HttpFoundation\\Request')) {
            return [[null, null]];
        }

        \$request = new Request();
        \$exception = new \\Exception('foo');
        \$event = new ExceptionEvent(new TestKernel(), \$request, HttpKernelInterface::MASTER_REQUEST, \$exception);
        \$event2 = new ExceptionEvent(new TestKernelThatThrowsException(), \$request, HttpKernelInterface::MASTER_REQUEST, \$exception);

        return [
            [\$event, \$event2],
        ];
    }

    public function testSubRequestFormat()
    {
        \$listener = new ExceptionListener('foo', \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock());

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$kernel->expects(\$this->once())->method('handle')->willReturnCallback(function (Request \$request) {
            return new Response(\$request->getRequestFormat());
        });

        \$request = Request::create('/');
        \$request->setRequestFormat('xml');

        \$event = new ExceptionEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, new \\Exception('foo'));
        \$listener->onKernelException(\$event);

        \$response = \$event->getResponse();
        \$this->assertEquals('xml', \$response->getContent());
    }

    public function testCSPHeaderIsRemoved()
    {
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$kernel->expects(\$this->once())->method('handle')->willReturnCallback(function (Request \$request) {
            return new Response(\$request->getRequestFormat());
        });

        \$listener = new ExceptionListener('foo', \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock(), true);

        \$dispatcher->addSubscriber(\$listener);

        \$request = Request::create('/');
        \$event = new ExceptionEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, new \\Exception('foo'));
        \$dispatcher->dispatch(\$event, KernelEvents::EXCEPTION);

        \$response = new Response('', 200, ['content-security-policy' => \"style-src 'self'\"]);
        \$this->assertTrue(\$response->headers->has('content-security-policy'));

        \$event = new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, \$response);
        \$dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertFalse(\$response->headers->has('content-security-policy'), 'CSP header has been removed');
        \$this->assertFalse(\$dispatcher->hasListeners(KernelEvents::RESPONSE), 'CSP removal listener has been removed');
    }
}

class TestLogger extends Logger implements DebugLoggerInterface
{
    public function countErrors(Request \$request = null): int
    {
        return \\count(\$this->log['critical']);
    }
}

class TestKernel implements HttpKernelInterface
{
    public function handle(Request \$request, \$type = self::MASTER_REQUEST, \$catch = true)
    {
        return new Response('foo');
    }
}

class TestKernelThatThrowsException implements HttpKernelInterface
{
    public function handle(Request \$request, \$type = self::MASTER_REQUEST, \$catch = true)
    {
        throw new \\RuntimeException('bar');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/ExceptionListenerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;
use Symfony\\Component\\HttpKernel\\Tests\\Logger;

/**
 * ExceptionListenerTest.
 *
 * @author Robert Schönthal <seroscho@googlemail.com>
 *
 * @group time-sensitive
 */
class ExceptionListenerTest extends TestCase
{
    public function testConstruct()
    {
        \$logger = new TestLogger();
        \$l = new ExceptionListener('foo', \$logger);

        \$_logger = new \\ReflectionProperty(\\get_class(\$l), 'logger');
        \$_logger->setAccessible(true);
        \$_controller = new \\ReflectionProperty(\\get_class(\$l), 'controller');
        \$_controller->setAccessible(true);

        \$this->assertSame(\$logger, \$_logger->getValue(\$l));
        \$this->assertSame('foo', \$_controller->getValue(\$l));
    }

    /**
     * @dataProvider provider
     */
    public function testHandleWithoutLogger(\$event, \$event2)
    {
        \$this->iniSet('error_log', file_exists('/dev/null') ? '/dev/null' : 'nul');

        \$l = new ExceptionListener('foo');
        \$l->logKernelException(\$event);
        \$l->onKernelException(\$event);

        \$this->assertEquals(new Response('foo'), \$event->getResponse());

        try {
            \$l->logKernelException(\$event2);
            \$l->onKernelException(\$event2);
            \$this->fail('RuntimeException expected');
        } catch (\\RuntimeException \$e) {
            \$this->assertSame('bar', \$e->getMessage());
            \$this->assertSame('foo', \$e->getPrevious()->getMessage());
        }
    }

    /**
     * @dataProvider provider
     */
    public function testHandleWithLogger(\$event, \$event2)
    {
        \$logger = new TestLogger();

        \$l = new ExceptionListener('foo', \$logger);
        \$l->logKernelException(\$event);
        \$l->onKernelException(\$event);

        \$this->assertEquals(new Response('foo'), \$event->getResponse());

        try {
            \$l->logKernelException(\$event2);
            \$l->onKernelException(\$event2);
            \$this->fail('RuntimeException expected');
        } catch (\\RuntimeException \$e) {
            \$this->assertSame('bar', \$e->getMessage());
            \$this->assertSame('foo', \$e->getPrevious()->getMessage());
        }

        \$this->assertEquals(3, \$logger->countErrors());
        \$this->assertCount(3, \$logger->getLogs('critical'));
    }

    public function provider()
    {
        if (!class_exists('Symfony\\Component\\HttpFoundation\\Request')) {
            return [[null, null]];
        }

        \$request = new Request();
        \$exception = new \\Exception('foo');
        \$event = new ExceptionEvent(new TestKernel(), \$request, HttpKernelInterface::MASTER_REQUEST, \$exception);
        \$event2 = new ExceptionEvent(new TestKernelThatThrowsException(), \$request, HttpKernelInterface::MASTER_REQUEST, \$exception);

        return [
            [\$event, \$event2],
        ];
    }

    public function testSubRequestFormat()
    {
        \$listener = new ExceptionListener('foo', \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock());

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$kernel->expects(\$this->once())->method('handle')->willReturnCallback(function (Request \$request) {
            return new Response(\$request->getRequestFormat());
        });

        \$request = Request::create('/');
        \$request->setRequestFormat('xml');

        \$event = new ExceptionEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, new \\Exception('foo'));
        \$listener->onKernelException(\$event);

        \$response = \$event->getResponse();
        \$this->assertEquals('xml', \$response->getContent());
    }

    public function testCSPHeaderIsRemoved()
    {
        \$dispatcher = new EventDispatcher();
        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\HttpKernelInterface')->getMock();
        \$kernel->expects(\$this->once())->method('handle')->willReturnCallback(function (Request \$request) {
            return new Response(\$request->getRequestFormat());
        });

        \$listener = new ExceptionListener('foo', \$this->getMockBuilder('Psr\\Log\\LoggerInterface')->getMock(), true);

        \$dispatcher->addSubscriber(\$listener);

        \$request = Request::create('/');
        \$event = new ExceptionEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, new \\Exception('foo'));
        \$dispatcher->dispatch(\$event, KernelEvents::EXCEPTION);

        \$response = new Response('', 200, ['content-security-policy' => \"style-src 'self'\"]);
        \$this->assertTrue(\$response->headers->has('content-security-policy'));

        \$event = new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST, \$response);
        \$dispatcher->dispatch(\$event, KernelEvents::RESPONSE);

        \$this->assertFalse(\$response->headers->has('content-security-policy'), 'CSP header has been removed');
        \$this->assertFalse(\$dispatcher->hasListeners(KernelEvents::RESPONSE), 'CSP removal listener has been removed');
    }
}

class TestLogger extends Logger implements DebugLoggerInterface
{
    public function countErrors(Request \$request = null): int
    {
        return \\count(\$this->log['critical']);
    }
}

class TestKernel implements HttpKernelInterface
{
    public function handle(Request \$request, \$type = self::MASTER_REQUEST, \$catch = true)
    {
        return new Response('foo');
    }
}

class TestKernelThatThrowsException implements HttpKernelInterface
{
    public function handle(Request \$request, \$type = self::MASTER_REQUEST, \$catch = true)
    {
        throw new \\RuntimeException('bar');
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/ExceptionListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/ExceptionListenerTest.php");
    }
}
