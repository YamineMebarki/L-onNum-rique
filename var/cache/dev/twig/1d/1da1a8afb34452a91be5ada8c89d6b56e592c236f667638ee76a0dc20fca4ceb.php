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

/* vendor/symfony/http-kernel/Tests/EventListener/TestSessionListenerTest.php */
class __TwigTemplate_abc2c6f118e465445883b3c763b140d00885c6e779d0c1b602c2874f1c852e6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/TestSessionListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/EventListener/TestSessionListenerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\SessionListener;
use Symfony\\Component\\HttpKernel\\EventListener\\TestSessionListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * SessionListenerTest.
 *
 * Tests SessionListener.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class TestSessionListenerTest extends TestCase
{
    /**
     * @var TestSessionListener
     */
    private \$listener;

    /**
     * @var SessionInterface
     */
    private \$session;

    protected function setUp(): void
    {
        \$this->listener = \$this->getMockForAbstractClass('Symfony\\Component\\HttpKernel\\EventListener\\AbstractTestSessionListener');
        \$this->session = \$this->getSession();
        \$this->listener->expects(\$this->any())
             ->method('getSession')
             ->willReturn(\$this->session);
    }

    public function testShouldSaveMasterRequestSession()
    {
        \$this->sessionHasBeenStarted();
        \$this->sessionMustBeSaved();

        \$this->filterResponse(new Request());
    }

    public function testShouldNotSaveSubRequestSession()
    {
        \$this->sessionMustNotBeSaved();

        \$this->filterResponse(new Request(), HttpKernelInterface::SUB_REQUEST);
    }

    public function testDoesNotDeleteCookieIfUsingSessionLifetime()
    {
        \$this->sessionHasBeenStarted();

        @ini_set('session.cookie_lifetime', 0);

        \$response = \$this->filterResponse(new Request(), HttpKernelInterface::MASTER_REQUEST);
        \$cookies = \$response->headers->getCookies();

        \$this->assertEquals(0, reset(\$cookies)->getExpiresTime());
    }

    /**
     * @requires function \\Symfony\\Component\\HttpFoundation\\Session\\Session::isEmpty
     */
    public function testEmptySessionDoesNotSendCookie()
    {
        \$this->sessionHasBeenStarted();
        \$this->sessionIsEmpty();

        \$response = \$this->filterResponse(new Request(), HttpKernelInterface::MASTER_REQUEST);

        \$this->assertSame([], \$response->headers->getCookies());
    }

    public function testEmptySessionWithNewSessionIdDoesSendCookie()
    {
        \$this->sessionHasBeenStarted();
        \$this->sessionIsEmpty();
        \$this->fixSessionId('456');

        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('/', 'GET', [], ['MOCKSESSID' => '123']);
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);

        \$response = \$this->filterResponse(new Request(), HttpKernelInterface::MASTER_REQUEST);

        \$this->assertNotEmpty(\$response->headers->getCookies());
    }

    /**
     * @dataProvider anotherCookieProvider
     */
    public function testSessionWithNewSessionIdAndNewCookieDoesNotSendAnotherCookie(\$existing, array \$expected)
    {
        \$this->sessionHasBeenStarted();
        \$this->sessionIsEmpty();
        \$this->fixSessionId('456');

        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('/', 'GET', [], ['MOCKSESSID' => '123']);
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);

        \$response = new Response('', 200, ['Set-Cookie' => \$existing]);

        \$response = \$this->filterResponse(new Request(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$this->assertSame(\$expected, \$response->headers->get('Set-Cookie', null, false));
    }

    public function anotherCookieProvider()
    {
        return [
            'same' => ['MOCKSESSID=789; path=/', ['MOCKSESSID=789; path=/']],
            'different domain' => ['MOCKSESSID=789; path=/; domain=example.com', ['MOCKSESSID=789; path=/; domain=example.com', 'MOCKSESSID=456; path=/']],
            'different path' => ['MOCKSESSID=789; path=/foo', ['MOCKSESSID=789; path=/foo', 'MOCKSESSID=456; path=/']],
        ];
    }

    public function testUnstartedSessionIsNotSave()
    {
        \$this->sessionHasNotBeenStarted();
        \$this->sessionMustNotBeSaved();

        \$this->filterResponse(new Request());
    }

    public function testDoesNotThrowIfRequestDoesNotHaveASession()
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$event = new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, new Response());

        \$this->listener->onKernelResponse(\$event);

        \$this->assertTrue(true);
    }

    private function filterResponse(Request \$request, \$type = HttpKernelInterface::MASTER_REQUEST, Response \$response = null)
    {
        \$request->setSession(\$this->session);
        \$response = \$response ?: new Response();
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$event = new ResponseEvent(\$kernel, \$request, \$type, \$response);

        \$this->listener->onKernelResponse(\$event);

        \$this->assertSame(\$response, \$event->getResponse());

        return \$response;
    }

    private function sessionMustNotBeSaved()
    {
        \$this->session->expects(\$this->never())
            ->method('save');
    }

    private function sessionMustBeSaved()
    {
        \$this->session->expects(\$this->once())
            ->method('save');
    }

    private function sessionHasBeenStarted()
    {
        \$this->session->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(true);
    }

    private function sessionHasNotBeenStarted()
    {
        \$this->session->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(false);
    }

    private function sessionIsEmpty()
    {
        \$this->session->expects(\$this->once())
            ->method('isEmpty')
            ->willReturn(true);
    }

    private function fixSessionId(\$sessionId)
    {
        \$this->session->expects(\$this->any())
            ->method('getId')
            ->willReturn(\$sessionId);
    }

    private function getSession()
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\Session')
            ->disableOriginalConstructor()
            ->getMock();

        // set return value for getName()
        \$mock->expects(\$this->any())->method('getName')->willReturn('MOCKSESSID');

        return \$mock;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/EventListener/TestSessionListenerTest.php";
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
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\SessionListener;
use Symfony\\Component\\HttpKernel\\EventListener\\TestSessionListener;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

/**
 * SessionListenerTest.
 *
 * Tests SessionListener.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class TestSessionListenerTest extends TestCase
{
    /**
     * @var TestSessionListener
     */
    private \$listener;

    /**
     * @var SessionInterface
     */
    private \$session;

    protected function setUp(): void
    {
        \$this->listener = \$this->getMockForAbstractClass('Symfony\\Component\\HttpKernel\\EventListener\\AbstractTestSessionListener');
        \$this->session = \$this->getSession();
        \$this->listener->expects(\$this->any())
             ->method('getSession')
             ->willReturn(\$this->session);
    }

    public function testShouldSaveMasterRequestSession()
    {
        \$this->sessionHasBeenStarted();
        \$this->sessionMustBeSaved();

        \$this->filterResponse(new Request());
    }

    public function testShouldNotSaveSubRequestSession()
    {
        \$this->sessionMustNotBeSaved();

        \$this->filterResponse(new Request(), HttpKernelInterface::SUB_REQUEST);
    }

    public function testDoesNotDeleteCookieIfUsingSessionLifetime()
    {
        \$this->sessionHasBeenStarted();

        @ini_set('session.cookie_lifetime', 0);

        \$response = \$this->filterResponse(new Request(), HttpKernelInterface::MASTER_REQUEST);
        \$cookies = \$response->headers->getCookies();

        \$this->assertEquals(0, reset(\$cookies)->getExpiresTime());
    }

    /**
     * @requires function \\Symfony\\Component\\HttpFoundation\\Session\\Session::isEmpty
     */
    public function testEmptySessionDoesNotSendCookie()
    {
        \$this->sessionHasBeenStarted();
        \$this->sessionIsEmpty();

        \$response = \$this->filterResponse(new Request(), HttpKernelInterface::MASTER_REQUEST);

        \$this->assertSame([], \$response->headers->getCookies());
    }

    public function testEmptySessionWithNewSessionIdDoesSendCookie()
    {
        \$this->sessionHasBeenStarted();
        \$this->sessionIsEmpty();
        \$this->fixSessionId('456');

        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('/', 'GET', [], ['MOCKSESSID' => '123']);
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);

        \$response = \$this->filterResponse(new Request(), HttpKernelInterface::MASTER_REQUEST);

        \$this->assertNotEmpty(\$response->headers->getCookies());
    }

    /**
     * @dataProvider anotherCookieProvider
     */
    public function testSessionWithNewSessionIdAndNewCookieDoesNotSendAnotherCookie(\$existing, array \$expected)
    {
        \$this->sessionHasBeenStarted();
        \$this->sessionIsEmpty();
        \$this->fixSessionId('456');

        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$request = Request::create('/', 'GET', [], ['MOCKSESSID' => '123']);
        \$event = new RequestEvent(\$kernel, \$request, HttpKernelInterface::MASTER_REQUEST);
        \$this->listener->onKernelRequest(\$event);

        \$response = new Response('', 200, ['Set-Cookie' => \$existing]);

        \$response = \$this->filterResponse(new Request(), HttpKernelInterface::MASTER_REQUEST, \$response);

        \$this->assertSame(\$expected, \$response->headers->get('Set-Cookie', null, false));
    }

    public function anotherCookieProvider()
    {
        return [
            'same' => ['MOCKSESSID=789; path=/', ['MOCKSESSID=789; path=/']],
            'different domain' => ['MOCKSESSID=789; path=/; domain=example.com', ['MOCKSESSID=789; path=/; domain=example.com', 'MOCKSESSID=456; path=/']],
            'different path' => ['MOCKSESSID=789; path=/foo', ['MOCKSESSID=789; path=/foo', 'MOCKSESSID=456; path=/']],
        ];
    }

    public function testUnstartedSessionIsNotSave()
    {
        \$this->sessionHasNotBeenStarted();
        \$this->sessionMustNotBeSaved();

        \$this->filterResponse(new Request());
    }

    public function testDoesNotThrowIfRequestDoesNotHaveASession()
    {
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$event = new ResponseEvent(\$kernel, new Request(), HttpKernelInterface::MASTER_REQUEST, new Response());

        \$this->listener->onKernelResponse(\$event);

        \$this->assertTrue(true);
    }

    private function filterResponse(Request \$request, \$type = HttpKernelInterface::MASTER_REQUEST, Response \$response = null)
    {
        \$request->setSession(\$this->session);
        \$response = \$response ?: new Response();
        \$kernel = \$this->getMockBuilder(HttpKernelInterface::class)->getMock();
        \$event = new ResponseEvent(\$kernel, \$request, \$type, \$response);

        \$this->listener->onKernelResponse(\$event);

        \$this->assertSame(\$response, \$event->getResponse());

        return \$response;
    }

    private function sessionMustNotBeSaved()
    {
        \$this->session->expects(\$this->never())
            ->method('save');
    }

    private function sessionMustBeSaved()
    {
        \$this->session->expects(\$this->once())
            ->method('save');
    }

    private function sessionHasBeenStarted()
    {
        \$this->session->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(true);
    }

    private function sessionHasNotBeenStarted()
    {
        \$this->session->expects(\$this->once())
            ->method('isStarted')
            ->willReturn(false);
    }

    private function sessionIsEmpty()
    {
        \$this->session->expects(\$this->once())
            ->method('isEmpty')
            ->willReturn(true);
    }

    private function fixSessionId(\$sessionId)
    {
        \$this->session->expects(\$this->any())
            ->method('getId')
            ->willReturn(\$sessionId);
    }

    private function getSession()
    {
        \$mock = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Session\\Session')
            ->disableOriginalConstructor()
            ->getMock();

        // set return value for getName()
        \$mock->expects(\$this->any())->method('getName')->willReturn('MOCKSESSID');

        return \$mock;
    }
}
", "vendor/symfony/http-kernel/Tests/EventListener/TestSessionListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/EventListener/TestSessionListenerTest.php");
    }
}
